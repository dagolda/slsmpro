<?php
namespace Bo\AdvisorsBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Controller\CommonController;
use Bo\AdminBundle\Entity\Orderform;
use Bo\AdminBundle\Entity\Enquiry;
use Bo\AdminBundle\Entity\Contracts;
use Bo\AdminBundle\Entity\Students;
use Bo\AdminBundle\Entity\Sendmail;
use Bo\AdminBundle\Form\OrderformType;
use Bo\AdminBundle\Libs\Pdf\PDF;
/**
* Orderform controller.
*/
class OrderformController extends CommonController
{
    /**
    * Index Orderform
    */
    public function indexAction()
    {	
		$this->get('session')->remove('page');
		return $this->redirect($this->generateUrl('dash_orderform_list'));		
	}
    /**
    * Lists all Orderform entities.
    */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();

        $orderform = $em->getRepository('BoAdminBundle:Orderform')->findAll();
		$nb_tc = count($orderform);
		//get page
		$page = $this->get('session')->get('page');
		if($page==null) $page=1;
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aOrderforms = $em->getRepository('BoAdminBundle:Orderform')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
		$this->get('session')->set('status',0);

        return $this->render('BoAdvisorsBundle:Orderform:index.html.twig', array(
            'orderforms' => $aOrderforms,
			'employee' => $this->getConnectedEmployee(),
			'languages'=>$em->getRepository('BoAdminBundle:Language')->getAll(),
			'page' => $page, // On transmet à la vue la page courante,
			'nb_pages' => $nb_pages, //le nombre total de pages,
			'total'=>$nb_tc, // Et le nombre total d'enregistrement.
			'nb_cpp'=>$nb_cpp,
			'pm'=>"admin",
			'sm'=>"orderform",
        ));
    }
    public function pageAction($option)
    {
		$this->get('session')->get('page');
		if($option==1) $page=1;
		if($option==2) $page=$page-1;
		elseif($option==3) $page=$page+1;
		else $page=$option;
		$this->get('session')->set('page',$page);
		return $this->redirect($this->generateUrl('orderform_list'));			
	}
    /**
    * Back all Orderform entities.
    */
    public function backAction()
    {
        $em = $this->getDoctrine()->getManager();
		$status = $this->get("session")->get('status');
        $orderform = $em->getRepository('BoAdminBundle:Orderform')->findAll();
		$nb_tc = count($orderform);
		//get page
		$page = $this->get('session')->get('page');
		if($page==null) $page=1;
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		if($status==0)
			$aOrderforms = $em->getRepository('BoAdminBundle:Orderform')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
		else
			$aOrderforms = $em->getRepository('BoAdminBundle:Orderform')->findBy(array('status'=>$status),array('id' => 'desc'),$nb_cpp,$offset);

        return $this->render('BoAdvisorsBundle:Orderform:index.html.twig', array(
            'orderforms' => $aOrderforms,
			'employee' => $this->getConnectedEmployee(),
			'languages'=>$em->getRepository('BoAdminBundle:Language')->getAll(),
			'page' => $page, // On transmet à la vue la page courante,
			'nb_pages' => $nb_pages, //le nombre total de pages,
			'total'=>$nb_tc, // Et le nombre total d'enregistrement.
			'nb_cpp'=>$nb_cpp,
			'idstatus'=>$status,
			'pm'=>"admin",
			'sm'=>"orderform",
        ));
    }
    /**
    * Lists all Orderform entities.
    */
    public function headsupAction()
    {
        $em = $this->getDoctrine()->getManager();
		$oRep = $em->getRepository('BoAdminBundle:Orderform');
        //$orderform = $em->getRepository('BoAdminBundle:Orderform')->findAll();
		$nb_tc = $oRep->getHeadsupTotal();
		//get page
		$page = $this->get('session')->get('page');
		if($page==null) $page=1;
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aEnquiries = $em->getRepository('BoAdminBundle:Orderform')->findBy(array('status'=>2),array('id' => 'desc'),$nb_cpp,$offset);

        return $this->render('BoAdvisorsBundle:Orderform:headsup.html.twig', array(
            'enquiries' => $aEnquiries,
			'languages'=>$em->getRepository('BoAdminBundle:Language')->getAll(),
			'page' => $page, // On transmet à la vue la page courante,
			'nb_pages' => $nb_pages, //le nombre total de pages,
			'total'=>$nb_tc, // Et le nombre total d'enregistrement.
			'nb_cpp'=>$nb_cpp,
			'pm'=>"admin",
			'sm'=>"orderform",
        ));
    }
    /**
    * Creates a new Orderform entity.
    */
    public function newAction(Request $request, Enquiry $enquiry)
    {
        $em = $this->getDoctrine()->getManager();
		$campuss = $em->getRepository('BoAdminBundle:Campus')->findBy(array(),array('id' => 'asc'));
		$message=null;
		
		if(!$enquiry->getTypecontract() or ($enquiry->getTypecontract() and $enquiry->getTypecontract()=="NMSO" and !$enquiry->getField()) or !$enquiry->getHours()){
			if(!$enquiry->getTypecontract()) $opt=1;
			if(!$enquiry->getField()) $opt=2;
			if(!$enquiry->getHours()) $opt=3;
			return $this->redirectToRoute('dash_orderform_error',array('id'=>$enquiry->getId(),'opt'=>$opt));	
		}
		
		$orderform = $this->initOrderform($enquiry,$campuss);
		$form = $this->getCreateForm($enquiry,$orderform);
        $form->handleRequest($request);
		
        if($form->isSubmitted() && $form->isValid()){
			$didmatprice = $request->request->get("didmatprice");
			if($didmatprice){
				$didmatprice=intval($didmatprice);
				$orderform->setDidmatprice($didmatprice);
				$orderform->setTotalcost(floatval($orderform->getTotalcost())+floatval($orderform->getDidmatprice()));
			}
			$orderform->setEnquiry($enquiry);
			$res=$this->updateEntity($orderform);
			if($res!=null){
				$this->updateStatusBy($enquiry,2);
				$this->createActivity("Orderform ",($enquiry->getName()." ".$enquiry->getFirstname())?$enquiry->getName()." ".$enquiry->getFirstname():$orderform->getId()." is Created");
				return $this->redirectToRoute('dash_orderform_pdf',array('id'=>$orderform->getId()));	
			}
			return $this->redirectToRoute('dash_orderform_index');				
        }
		
        return $this->render('BoAdvisorsBundle:Orderform:new.html.twig', array(
            'orderform' => $orderform,
			'employee' => $this->getConnectedEmployee(),
			'campuss' => $campuss,
			'enquiry' => $enquiry,
			'message' => array('type'=>"Warning",'texte'=>$message),
            'form' => $form->createView(),
			'pm' => "admin",
			'sm' => "orderform",
        ));
    }
    /**
    * Displays a form to edit an existing Orderform entity after reporting reqiest error: missed items.
    */
    public function errorAction(Request $request, Enquiry $enquiry, $opt)
    {
        $editForm = $this->createForm('Bo\AdminBundle\Form\EnquiryType2', $enquiry);
        $editForm->handleRequest($request);
		$message=null;
        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$res=$this->updateEntity($enquiry);
			if($res!=null){
				$this->createActivity("Enquiry",$enquiry->getName()." ".$enquiry->getFirstname()." is updated");
			}			
			return $this->redirectToRoute('dash_orderform_new',array('id'=>$enquiry->getId()));				
        }
		if($opt==1) $message = $this->get('translator')->trans('The contract type is not defined for this request. Impossible to create the proposal price');
		elseif($opt==2) $message = $this->get('translator')->trans('The work field is not defined for this request. Impossible to create the proposal price');
		else $message = $this->get('translator')->trans('The hours number is not defined for this request. Impossible to create the proposal price');
		return $this->render('BoAdvisorsBundle:Orderform:error.html.twig', array(
            'enquiry' => $enquiry,
			'message'=>array('type'=>"Warning",'texte'=>$message),
            'form' => $editForm->createView(),
			'opt' => $opt,
			'pm'=>"admin",
			'sm'=>"orderform",
        ));		
    }
    /**
    * Initialise Orderform entity.
    */	
	private function initOrderform($enquiry,$campuss){
		if($enquiry->getTypecontract()){
			$typecontract = trim($enquiry->getTypecontract());
		}
		if(isset($typecontract) and ($typecontract=="Service Contract" or $typecontract=="Non-NMSO" or $typecontract=="private" or $typecontract=="Private")) return $this->initOrderform2($enquiry,$campuss);
		$oCampus = (isset($campuss[0]))?$campuss[0]:null;
        $orderform = new Orderform();
		$ordernum=$this->getBordereauNumber($enquiry);
		$orderform->setOrdernumber($ordernum);
		$orderform->setNbstudent(1);
		$aRates = $this->getOrderRate($enquiry);
		$totalhours=0;
		$totalcost=0;
		if(isset($aRates[0])){
			$aRate = $aRates[0];
			$orderform->setStartrate($aRate['startdate']);
			$orderform->setHourlyrate($aRate['price']);
			$orderform->setHoursnumber($aRate['hours']);
			$orderform->setEstimatedcost($aRate['totalcost']);
			$totalhours=$totalhours+$aRate['hours'];
			$totalcost=$totalcost+$aRate['totalcost'];
		}
		if(isset($aRates[1])){
			$aRate = $aRates[1];
			$orderform->setStartrate1($aRate['startdate']);
			$orderform->setHourlyrate1($aRate['price']);
			$orderform->setHoursnumber1($aRate['hours']);
			$orderform->setEstimatedcost1($aRate['totalcost']);
			$totalhours=$totalhours+$aRate['hours'];
			$totalcost=$totalcost+$aRate['totalcost'];
		}
		if(isset($aRates[2])){
			$aRate = $aRates[2];
			$orderform->setStartrate2($aRate['startdate']);
			$orderform->setHourlyrate2($aRate['price']);
			$orderform->setHoursnumber2($aRate['hours']);
			$orderform->setEstimatedcost2($aRate['totalcost']);
			$totalhours=$totalhours+$aRate['hours'];
			$totalcost=$totalcost+$aRate['totalcost'];
		}
		//if(isset($typecontract) and $typecontract=="Non-NMSO") $typecontract="Service Contract/Contrat de service"; 
		if($oCampus){
			$orderform->setCampus($oCampus);
			$orderform->setPlaceoftraining($oCampus->getAddress());
		} 
		$orderform->setTotalhours($totalhours);
		$orderform->setTotalcost($totalcost);
		$orderform->setPreparedby($this->getFNConnectedEmployee());
		$orderform->setApprovedby($this->getParam("price_proposal_approval",21));
		return $orderform;		
	}
    /**
    * Initialise Orderform entity.
    */	
	private function initOrderform2($enquiry,$campuss){
		$em = $this->getDoctrine()->getManager();
		$oCampus = (isset($campuss[0]))?$campuss[0]:null;
        $orderform = new Orderform();
		$ordernum=$this->getBordereauNumber($enquiry);
		$orderform->setOrdernumber($ordernum);
		$orderform->setNbstudent(1);
		$price = $em->getRepository('BoAdminBundle:Otherprices')->getPricesBy($enquiry);
		if($oCampus){
			$orderform->setCampus($oCampus);
			$orderform->setPlaceoftraining($oCampus->getAddress());
		}
		$hours = $enquiry->getHours();		
		$estimatecost = $hours*$price;
		$orderform->setStartrate($enquiry->getStartdate());
		$orderform->setHourlyrate($price);
		$orderform->setHoursnumber($hours);
		$orderform->setEstimatedcost($estimatecost);
		$orderform->setTotalhours($hours);
		$orderform->setSoumissionType($this->getSoumissionType($enquiry));
		$orderform->setTotalcost($estimatecost);
		$orderform->setPreparedby($this->getFNConnectedEmployee());
		$orderform->setApprovedby($this->getParam("price_proposal_approval",21));
		return $orderform;		
	}
    /**
    * Creates a new contract by Orderform entity.
    */
    public function contractAction(Orderform $orderform)
    {
        $em = $this->getDoctrine()->getManager();
		$message=null;
		$contract = $this->createContract($orderform);
		if($contract){
			$this->updateStatusby($orderform,3);
			return $this->redirectToRoute('contracts_edit',array('id'=>$contract->getId()));
		} 
		return $this->redirectToRoute('dash_orderform_showheadsup',array('id'=>$orderform->getId()));
    }
	private function createStudent($orderform){
		$enquiry = $orderform->getEnquiry();
		//Creating Student
		$oStudent = new Students();
		if($enquiry->getName()) $oStudent->setName($enquiry->getName());
		if($enquiry->getFirstname()) $oStudent->setFirstname($enquiry->getFirstname());
		if($enquiry->getTargetlevel()) $oStudent->setTargetlevel($enquiry->getTargetlevel());	
		if($enquiry->getPhone()) $oStudent->setPhonenumber($enquiry->getPhone());	
		if($enquiry->getEmail()) $oStudent->setEmail($enquiry->getEmail());		
		if($enquiry->getStartdate()) $oStudent->setStartdate($enquiry->getStartdate());				
		$oStudent->setPwd($this->getPassword());
		$oStudent->setCreateby($this->getConnected());
		$res = $this->updateEntity($oStudent);
		return $oStudent;
	}
	//Init Contracts Entity form Orderform Entity 
	private function createContract($orderform){	
		$enquiry = $orderform->getEnquiry();	
		$oContract = new Contracts();
		//From enquiry
		if($enquiry->getLanguage()) $oContract->setLanguage($enquiry->getLanguage());
		if($enquiry->getField()) $oContract->setWorkfields($enquiry->getField());
		if($enquiry->getFtorpt()) $oContract->setTypetime($enquiry->getFtorpt());
		if($enquiry->getTypecontract()) $oContract->setTypecontract($enquiry->getTypecontract());
		if($enquiry->getTargetlevel()) $oContract->setTargetlevel($enquiry->getTargetlevel());
		if($enquiry->getHourperweek()) $oContract->setHourperweek($enquiry->getHourperweek());
		if($enquiry->getSchedule()) $oContract->setSchedule($enquiry->getSchedule());
		if($enquiry->getStartdate()) $oContract->setStartdate($enquiry->getStartdate());
		if($enquiry->getEnddate()) $oContract->setEnddate($enquiry->getEnddate());
		//From orderform
		if($orderform->getClient()) $oContract->setClient($orderform->getClient());
		if($orderform->getOrdernumber()) $oContract->setOrdernumber($orderform->getOrdernumber());
		if($orderform->getProgram()) $oContract->setProgram($orderform->getProgram());
		if($orderform->getLocation()) $oContract->setLocation($orderform->getLocation());
		if($orderform->getCampus()) $oContract->setCampus($orderform->getCampus());
		if($orderform->getPlaceoftraining()) $oContract->setAdresse($orderform->getPlaceoftraining());		
		if($orderform->getStartrate()) $oContract->setStartrate($orderform->getStartrate());
		if($orderform->getHourlyrate()) $oContract->setHourlyrate($orderform->getHourlyrate());
		if($orderform->getHoursnumber()) $oContract->setHoursnumber($orderform->getHoursnumber());
		if($orderform->getEstimatedcost()) $oContract->setEstimatedcost($orderform->getEstimatedcost());
		if($orderform->getStartrate1()) $oContract->setStartrate1($orderform->getStartrate1());
		if($orderform->getHourlyrate1()) $oContract->setHourlyrate1($orderform->getHourlyrate1());
		if($orderform->getHoursnumber1()) $oContract->setHoursnumber1($orderform->getHoursnumber1());
		if($orderform->getEstimatedcost1()) $oContract->setEstimatedcost1($orderform->getEstimatedcost1());
		if($orderform->getStartrate2()) $oContract->setStartrate2($orderform->getStartrate2());
		if($orderform->getHourlyrate2()) $oContract->setHourlyrate2($orderform->getHourlyrate2());
		if($orderform->getHoursnumber2()) $oContract->setHoursnumber2($orderform->getHoursnumber2());
		if($orderform->getEstimatedcost2()) $oContract->setEstimatedcost2($orderform->getEstimatedcost2());
		if($orderform->getTotalhours()) $oContract->setTotalhours($orderform->getTotalhours());
		if($orderform->getTotalcost()) $oContract->setTotalcost($orderform->getTotalcost());
		$oContract->setCreateby($this->getConnected());
		$oStudent = $this->createStudent($orderform);
		if($oStudent) $oContract->addStudent($oStudent);
		$res = $this->updateEntity($oContract);
		return $oContract;
	}
    /**
    * Finds and displays a Orderform entity.
    */
    public function showAction(Orderform $orderform)
    {
        $deleteForm = $this->createDeleteForm($orderform);
		$removeForm = $this->createRemoveForm($orderform);
		$form = $this->createForm('Bo\AdminBundle\Form\EnquiryType2', $orderform->getEnquiry());
        return $this->render('BoAdvisorsBundle:Orderform:show.html.twig', array(
            'orderform' => $orderform,
			'employee' => $this->getConnectedEmployee(),
			'enquiry'=>$orderform->getEnquiry(),
			'stl' => $orderform->getSoumissionTypeLabel(),
            'delete_form' => $deleteForm->createView(),
			'remove_form' => $removeForm->createView(),
            'form' => $form->createView(),
			'status'=>$orderform->getStatusDef(),
			//'bedit'=>1,
			'pm'=>"admin",
			'sm'=>"orderform",
        ));
    }
    /**
    * Finds and displays a Orderform entity on status 2 (heads up).
    */
    public function showheadsupAction(Orderform $orderform)
    {
		$this->get('session')->set('status',$orderform->getStatus());
        return $this->render('BoAdvisorsBundle:Orderform:showheadsup.html.twig', array(
            'orderform' => $orderform,
			'enquiry'=>$orderform->getEnquiry(),
			'status'=>$orderform->getStatusDef(),
			'pm'=>"admin",
			'sm'=>"orderform",
        ));
    }
    /**
    * Displays a form to edit an existing Orderform entity.
    */
    public function editAction(Request $request, Orderform $orderform)
    {
        $em = $this->getDoctrine()->getManager();
        $deleteForm = $this->createDeleteForm($orderform);
        $editForm = $this->createForm('Bo\AdminBundle\Form\OrderformType2', $orderform);
        $editForm->handleRequest($request);
		$employee = $this->getConnectedEmployee();
		$message=null;
        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$res=$this->updateEntity($orderform);
			if($res!=null){
				$this->createActivity("Orderform",$orderform->getOrdernumber()." is updated");
			}
			return $this->redirectToRoute('dash_orderform_index');				
        }
        return $this->render('BoAdvisorsBundle:Orderform:edit.html.twig', array(
            'orderform' => $orderform,
			'enquiry'=>$orderform->getEnquiry(),
			'employee' => $this->getConnectedEmployee(),
			'campuss' => $em->getRepository('BoAdminBundle:Campus')->findAll(),
			'message'=>array('type'=>"Warning",'texte'=>$message),
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"admin",
			'sm'=>"orderform",
        ));
    }
    /**
    * Displays a form to edit an existing Enquiry entity.
    */
    public function editenquiryAction(Request $request, Enquiry $enquiry)
    {
        $editForm = $this->createForm('Bo\AdminBundle\Form\EnquiryType2', $enquiry);
        $editForm->handleRequest($request);
		$message=null;
        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$res=$this->updateEntity($enquiry);
			if($res!=null){
				$this->createActivity("Enquiry",$enquiry->getName()." ".$enquiry->getFirstname()." is updated");
			}
			$em = $this->getDoctrine()->getManager();
			$aOrderform = $em->getRepository('BoAdminBundle:Orderform')->findBy(array('enquiry'=>$enquiry));			
			return $this->redirectToRoute('dash_orderform_show',array('id'=>$aOrderform[0]->getId()));				
        }
        return $this->render('BoAdvisorsBundle:Enquiry:edit.html.twig', array(
            'enquiry' => $enquiry,
			'employee' => $this->getConnectedEmployee(),
			'message'=>array('type'=>"Warning",'texte'=>$message),
            'form' => $editForm->createView(),
			'pm'=>"admin",
			'sm'=>"enquiry",
        ));
    }
    /**
    * process a contract -- Ajax.
    */
    public function resolvedAction(Request $request)
    {
		$message=null;
		if($request->isXmlHttpRequest())
		{	
			$idorderform = $request->request->get('id');	
			$em = $this->getDoctrine()->getManager();
			$oEntity=$em->getRepository('BoAdminBundle:Orderform');	
			$oOrderform = $oEntity->find($idorderform);
			if($oOrderform){
				$oOrderform->setStatus(2);
				$res = $this->updateEntity($oOrderform);
				if($res>0) $message = $this->get('translator')->trans("Request executed successfully");
			}
		}
		return $this->render('BoAdvisorsBundle:Orderform:tbshow.html.twig', array(
			'orderform' => $oOrderform,
			'status'=>$oOrderform->getStatusDef(),
			'message'=>$message,
		));	
    }
    /**
    * process a contract -- Ajax.
    */
    public function notresolvedAction(Request $request)
    {
		$message=$oOrderform=null;
		if($request->isXmlHttpRequest())
		{	
			$idorderform = $request->request->get('id');	
			$em = $this->getDoctrine()->getManager();
			$oEntity=$em->getRepository('BoAdminBundle:Orderform');	
			$oOrderform = $oEntity->find($idorderform);
			if($oOrderform){
				$oOrderform->setStatus(3);
				$res = $this->updateEntity($oOrderform);
				if($res>0) $message = $this->get('translator')->trans("Request executed successfully");
			}
		}
		return $this->render('BoAdvisorsBundle:Orderform:tbshow.html.twig', array(
			'orderform' => $oOrderform,
			'status'=>$oOrderform->getStatusDef(),
			'message'=>$message,
		));	
    }
    /**
    * extra search for orderform by filters.
    */
    public function extrasearchAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$oRepTS = $em->getRepository('BoAdminBundle:Timesheet');
		$timesheets = Array();	
		if($request->isXmlHttpRequest())
		{	
			$data = $request->request->get('data');	
			$aData = explode(':',$data);
			$status = $aData[0];
		}
		$this->get('session')->set('status',$status);
		if($status==0)
			$aOrderform = $em->getRepository('BoAdminBundle:Orderform')->findBy(array(),array('id' => 'desc'));
		else
			$aOrderform = $em->getRepository('BoAdminBundle:Orderform')->extrasearch($status);
		return $this->render('BoAdvisorsBundle:Orderform:extrasearch.html.twig', array(
			'orderforms'=>$aOrderform,
		));	
    }
    /**
    * Deletes a Orderform entity.
    */
    public function deleteAction(Request $request, Orderform $orderform)
    {
        $form = $this->createDeleteForm($orderform);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$enquiry = $orderform->getEnquiry();
			$this->removeEntity($orderform);
			$this->removeEntity($enquiry);
		}
		
        return $this->redirectToRoute('dash_orderform_index');
    }
    /**
    * Delete pdf.
    */
    public function removeAction(Request $request, Orderform $orderform)
    {
        $form = $this->createRemoveForm($orderform);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
			$path = $this->getPdfPath("orderform");	
			$filename = $orderform->getBordereau();
			$path = realpath($this->getFilename($path,$filename));
			if(file_exists($path) and unlink($path)){
				$orderform->setBordereau(null);
				$orderform->setBordereaudate(null);
				$this->updateStatusBy($orderform,0);
			}
		}
		
        return $this->redirectToRoute('dash_orderform_show',array('id'=>$orderform->getId()));
    }
    /**
    * Search a orderform by ajax.
    */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Orderform');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$aResult = $oEntity ->search($description);
		if(isset($aResult[0])){
			return $this->render('BoAdvisorsBundle:Orderform:search.html.twig', array(
				'orderforms'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdvisorsBundle:Orderform:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $orderform = $em->getRepository('BoAdminBundle:Orderform')->findAll();
		$nb_tc = count($orderform);
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('motcle');
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aOrderform = $em->getRepository('BoAdminBundle:Orderform')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);

        return $this->render('BoAdvisorsBundle:Orderform:pagesearch.html.twig', array(
            'orderform' => $aOrderform,
			'page' => $page, // On transmet à la vue la page courante,
        ));
    }
	public function pdfAction(Orderform $orderform){ 
		$soumissiontype = $orderform->getSoumissiontype();
		if($soumissiontype==1 or $soumissiontype==2) $this->generatePdf($orderform);
		else $this->generatePdf2($orderform);
		return $this->redirectToRoute('dash_orderform_show',array('id'=>$orderform->getId()));
	}
	private function generatePdf($orderform){
		$em= $this->getDoctrine()->getManager();
		$pdf = new PDF();
		$pdf->AddPage();
		$headimage = 'images/pricing/head.png';
		// En-tête première page	
		$pdf->dPHeader($headimage,$orderform);	
		$w = array(55, 115);
		$pdf->dTData1($orderform,$w);
		$pdf->dPFooter();
		$numero_bc = rand(100,10000);
		$filename=$orderform->getOrdernumber()."_".date("dmY").".pdf";
		if($orderform->getSoumissiontype()==2){
			$pdf->AddPage();
			$pdf->dPLogo($headimage);
			$pdf->ln(25);
			$pdf->dTData2($orderform,$w);
			$pdf->dFooter();
			$pdf->dPFooter();
			// Impression de la 3ème page
			$pdf->dFooterOthers();				
		}		
		$filepath="pdf/orderform/".$filename;
		$pdf->Output($filepath);
		$this->updateOrderform($orderform,$filename);
		return true;
	}
	private function generatePdf2($orderform){
		$oEnquiry = $orderform->getEnquiry();
		$em= $this->getDoctrine()->getManager();
		$pdf = new PDF();
		$pdf->AddPage();
		$contractterme = $this->renderView("BoAdvisorsBundle:Orderform:contractterme.html.twig",array('orderform'=>$orderform));
		$pdffooter = $this->renderView("BoAdvisorsBundle:Orderform:pdffooter.html.twig");
		$headimage = 'images/pricing/head.png';
		$numero_bc = rand(100,10000);
		$filename=$orderform->getOrdernumber()."_".date("dmY").".pdf";
		if($oEnquiry->getLanguage()=="French") $pdf->dFrenchPrivate($headimage,$orderform,$contractterme,$pdffooter);
		else $pdf->dEnglishPrivate($headimage,$orderform,$contractterme,$pdffooter);
		$filepath="pdf/orderform/".$filename;
		$pdf->Output($filepath);
		$this->updateOrderform($orderform,$filename);
		return true;
	}
    /**
    * Send bordereau 
    */
	public function sendbordereauAction(Request $request,Orderform $orderform){
		$em = $this->getDoctrine()->getManager();
		$aMessage = null;
		$oEnquiry = $orderform->getEnquiry();
		if($oEnquiry){
			$email = $orderform->getEnquiry()->getEmail()?$orderform->getEnquiry()->getEmail():null;
			$contactemail = $orderform->getEnquiry()->getEmail()?$orderform->getEnquiry()->getEmailcontact():null;
		}
		//Get client service email
		$clientservice = $this->getParam("email_client_service",9);		
		$sendmail = new Sendmail();
        $form = $this->createForm('Bo\AdminBundle\Form\SendmailType', $sendmail);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){	
			$path = $this->getPdfPath("orderform");	
			$filename = $orderform->getBordereau();
			$path = realpath($this->getFilename($path,$filename));
			//$aFile est un tableau d'un tableau composant le nom du fichier et le chemin complet
			$aFiles = $this->getFilesBy($path,$filename);
			$to = $cc = "";
			$other = $sendmail->getEmailaddresses();
			$cemail = $request->request->get('email');
			$ccontactemail = $request->request->get('contactemail');
			$cclientservice = $request->request->get('clientservice');
			if($cemail) $to = $to.$email.",";
			if($ccontactemail) $to = $to.$ccontactemail.",";
			if($cclientservice) $cc = $cc.$clientservice.",";
			if($other) $cc = $cc.$other.",";
			$Bcc = "jnvekounou@yahoo.fr";
			$subject = $this->getParam("send_mail_soumission_subject",19);
			$message = $this->getInfoMail("price_order_mail",7);
			if(!in_array(@$_SERVER['REMOTE_ADDR'], array(
					'127.0.0.1',
					'::1',
			))) $res = $this->sendMailWith($to,$subject,$message,$filename,$path,$cc);
			else $res=1;
			if(isset($res) and $res==1){
				if($oEnquiry){
					$this->setActivity("Price proposal is sent for this this request id:".$oEnquiry->getId());
					$message = $this->get('translator')->trans('Price proposal has been sent for the request id:').":".$oEnquiry->getId();
					$this->updateStatusby($oEnquiry,2);
				}
				$aMessage =array('type'=>"Info",'texte'=>$message);
				$orderform->setBordereaudate(new \DateTime());
				$this->updateStatusby($orderform,2);
			}else{
				if($oEnquiry) $this->setActivity("La proposition de prix n'a pas pu être envoyée pour la demande d'id:".$oEnquiry->getId());
				$message = $this->get('translator')->trans('Can not sent price proposal');
				$aMessage =array('type'=>"Warning",'texte'=>$message);
			}					
			$this->setSessionByName('message',$aMessage);
			return $this->redirectToRoute('dash_orderform_show', array('id'=>$orderform->getId()));
		}
        return $this->render('BoAdvisorsBundle:Orderform:sendmail.html.twig', array(
            'email' => $email,
            'contactemail' => $contactemail,
			'clientservice'=>$clientservice,
			'enquiry'=>$orderform->getEnquiry(),
			'form' => $form->createView(),
			'message'=>$aMessage,
			'orderform'=>$orderform,
			'pm'=>"admin",
			'sm'=>"orderform",
        ));		
	}
	private function updateOrderform($orderform,$filename){
		$orderform->setBordereau($filename);
		$orderform->setBordereaudate(new \DateTime());
		$this->updateStatusBy($orderform,1);
		return;
	}
    /**
    * Creates a form to delete a Orderform entity.
    * @param Orderform $orderform The Orderform entity
    * @return \Symfony\Component\Form\Form The form
    */
    private function createDeleteForm(Orderform $orderform)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('dash_orderform_delete', array('id' => $orderform->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    private function createRemoveForm(Orderform $orderform)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('dash_orderform_remove', array('id' => $orderform->getId())))
            ->getForm()
        ;
    }
	private function getOrderData($orderform){
		$oEnquiry = $orderform->getEnquiry();
		$aData = array();
		$aData[]=array('label1'=>"Date",'value'=>date("d-m-Y"));
		$aData[]=array('label1'=>"Name of client/",'label2'=>"Nom du client",'value'=>$orderform->getClient()->getReference());
		$aData[]=array('label1'=>"Number of Students/",'label2'=>"Nombre d'apprenants",'value'=>$orderform->getNbstudent());
		$aData[]=array('label1'=>"Type of contract/",'label2'=>"Type de contrat",'value'=>$orderform->getTypeofcontract());
		$aData[]=array('label1'=>"Program/",'label2'=>"Programme",'value'=>$orderform->getProgram());
		$aData[]=array('label1'=>"Language/",'label2'=>"Langue",'value'=>$oEnquiry->getLanguage());
		$aData[]=array('label1'=>"Type of course/",'label2'=>"Type de formation",'value'=>$orderform->getTypeofcourse());
		$aData[]=array('label1'=>"Target/",'label2'=>"Niveaux à atteindre",'value'=>$oEnquiry->getTargetlevel());
		$aData[]=array('label1'=>"Date of start/",'label2'=>"Date de début",'value'=>$oEnquiry->getStartdate()->format("d-m-Y"));
		$aData[]=array('label1'=>"Date of end/",'label2'=>"Date de fin",'value'=>$oEnquiry->getEnddate()->format("d-m-Y"));
		$aData[]=array('label1'=>"Initial Language",'label2'=>"Evaluation/Évaluation",'label3'=>"linguistique initiale",'value'=>($orderform->getInitlanguage()==1)?"Included / inclus":"Not included / non inclus");
		return $aData;
	}
	private function getOrderData2($orderform){
		$oEnquiry = $orderform->getEnquiry();
		$aData = array();
		$aData[]=array('label1'=>"Weekly Language",'label2'=>"Training Plan/",'label3'=>"Plan de formation",'label4'=>"linguistique hebdomadaire",'value'=>($orderform->getWeeklanguage()==1)?"Included / inclus":"Not included / non inclus");
		$aData[]=array('label1'=>"Didactic Material/",'label2'=>"Matériel didactique",'value'=>($orderform->getDidmat()==1)?"Included / inclus":"Not included / non inclus");
		$aData[]=array('label1'=>"Class Visit with a",'label2'=>"Pedagogical Advisor/",'label3'=>"Visite de classe",'label4'=>"d'un conseiller pédagogique",'value'=>($orderform->getClassvisit()==1)?"Included / inclus":"Not included / non inclus");
		$aData[]=array('label1'=>"Progress Report/",'label2'=>"Rapport de progrès",'value'=>($orderform->getProgressreport()==1)?"Included / inclus":"Not included / non inclus");
		$aData[]=array('label1'=>"Number of hours of",'label2'=>"language training /",'label3'=>"Nombre d'heures",'label4'=>"de formation",'value'=>$orderform->getTotalhours());
		$aData[]=array('label1'=>"Hourly rate /",'label2'=>"Tarif horaire",'value'=>$this->getHourlyRate($orderform));
		$aData[]=array('label1'=>"Total price / Prix total",'value'=>$orderform->getTotalcost());
		$aData[]=array('label1'=>"Schedule / Horaire",'value'=>$oEnquiry->getSchedule());
		$aData[]=array('label1'=>"Place of training / ",'label2'=>"Lieu de la formation",'value'=>$orderform->getPlaceoftraining());
		return $aData;
	}
	private function setActivity($activity){
		return $this->createActivity("Mail",$activity);	
	}
	private function getCreateForm($enquiry,$orderform){
		if($enquiry->getTypecontract() and $enquiry->getTypecontract()=="NMSO")
			return $this->createForm('Bo\AdminBundle\Form\OrderformType', $orderform);
		else
			return $this->createForm('Bo\AdminBundle\Form\OrderformType3', $orderform);
	}
}
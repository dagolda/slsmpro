<?php
namespace Bo\AdvisorsBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Controller\CommonController;
use Bo\AdminBundle\Entity\Enquiry;
use Bo\AdminBundle\Form\EnquiryType;
use Bo\AdminBundle\Libs\Pdf\PDF;
/**
* Enquiry controller.
*/
class EnquiryController extends CommonController
{
    /**
    * Index Enquiry
    */
    public function indexAction()
    {	
		$this->get('session')->remove('page');
		return $this->redirect($this->generateUrl('dash_enquiry_list'));		
	}	
    /**
    * Lists all Enquiry entities.
    */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();

        $enquiry = $em->getRepository('BoAdminBundle:Enquiry')->findAll();
		$nb_tc = count($enquiry);
		//get page
		$page = $this->get('session')->get('page');
		if($page==null) $page=1;
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aEnquiries = $em->getRepository('BoAdminBundle:Enquiry')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
		$this->get('session')->set('status',0);

        return $this->render('BoAdvisorsBundle:Enquiry:index.html.twig', array(
            'enquiries' => $aEnquiries,
			'employee' => $this->getConnectedEmployee(),
			'languages'=>$em->getRepository('BoAdminBundle:Language')->getAll(),
			'page' => $page, // On transmet à la vue la page courante,
			'nb_pages' => $nb_pages, //le nombre total de pages,
			'total'=>$nb_tc, // Et le nombre total d'enregistrement.
			'nb_cpp'=>$nb_cpp,
			'pm'=>"admin",
			'sm'=>"enquiry",
        ));
    }
    /**
    * Back to the liste after searching by status.
    */
    public function backAction()
    {
		$status = $this->get("session")->get('status');
        $em = $this->getDoctrine()->getManager();
        $enquiry = $em->getRepository('BoAdminBundle:Enquiry')->findAll();
		$nb_tc = count($enquiry);
		//get page
		$page = $this->get('session')->get('page');
		if($page==null) $page=1;
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		if($status==0) 
		$aEnquiries = $em->getRepository('BoAdminBundle:Enquiry')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
		else
		$aEnquiries = $em->getRepository('BoAdminBundle:Enquiry')->findBy(array('status'=>$status),array('id' => 'desc'),$nb_cpp,$offset);

        return $this->render('BoAdvisorsBundle:Enquiry:index.html.twig', array(
            'enquiries' => $aEnquiries,
			'employee' => $this->getConnectedEmployee(),
			'languages'=>$em->getRepository('BoAdminBundle:Language')->getAll(),
			'page' => $page, // On transmet à la vue la page courante,
			'nb_pages' => $nb_pages, //le nombre total de pages,
			'total'=>$nb_tc, // Et le nombre total d'enregistrement.
			'nb_cpp'=>$nb_cpp,
			'idstatus'=>$status,
			'pm'=>"admin",
			'sm'=>"enquiry",
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
		return $this->redirect($this->generateUrl('enquiry_list'));			
	}
    /**
     * Creates a new Enquiry entity.
     */
    public function newAction(Request $request)
    {
		$message=null;
        $enquiry = new Enquiry();
        $form = $this->createForm('Bo\AdminBundle\Form\EnquiryType', $enquiry);
        $form->handleRequest($request);
		
        if ($form->isSubmitted() && $form->isValid()){
			$enquiry->setEmployee($this->getConnectedEmployee());
			$res=$this->updateEntity($enquiry);
			if($res!=null){
				$this->createActivity("Enquiry",$enquiry->getName()." ".$enquiry->getFirstname()." is Created");
			}
			return $this->redirectToRoute('dash_enquiry_index');				
        }

        return $this->render('BoAdvisorsBundle:Enquiry:new.html.twig', array(
            'enquiry' => $enquiry,
			'employee' => $this->getConnectedEmployee(),
			'message'=>array('type'=>"Warning",'texte'=>$message),
            'form' => $form->createView(),
			'pm'=>"admin",
			'sm'=>"enquiry",
        ));
    }

    /**
    * Finds and displays a Enquiry entity.
    */
    public function showAction(Enquiry $enquiry)
    {
        $deleteForm = $this->createDeleteForm($enquiry);

        return $this->render('BoAdvisorsBundle:Enquiry:show.html.twig', array(
            'enquiry' => $enquiry,
			'status'=>$enquiry->getStatusDef(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"admin",
			'sm'=>"enquiry",
        ));
    }

    /**
    * Displays a form to edit an existing Enquiry entity.
    */
    public function editAction(Request $request, Enquiry $enquiry)
    {
        $deleteForm = $this->createDeleteForm($enquiry);
        $editForm = $this->createForm('Bo\AdminBundle\Form\EnquiryType', $enquiry);
        $editForm->handleRequest($request);
		$message=null;
        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$res=$this->updateEntity($enquiry);
			if($res!=null){
				$this->createActivity("Enquiry",$enquiry->getName()." ".$enquiry->getFirstname()." is updated");
			}
			return $this->redirectToRoute('dash_enquiry_index');				
        }
        return $this->render('BoAdvisorsBundle:Enquiry:edit.html.twig', array(
            'enquiry' => $enquiry,
			'employee' => $this->getConnectedEmployee(),
			'message'=>array('type'=>"Warning",'texte'=>$message),
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"admin",
			'sm'=>"enquiry",
        ));
    }
    /**
    * process a contract -- Ajax.
    */
    public function notresolvedAction(Request $request)
    {
		$message=$oEnquiry=null;
		if($request->isXmlHttpRequest())
		{	
			$idenquiry = $request->request->get('id');	
			$em = $this->getDoctrine()->getManager();
			$oEntity=$em->getRepository('BoAdminBundle:Enquiry');	
			$oEnquiry = $oEntity->find($idenquiry);
			if($oEnquiry){
				$oEnquiry->setStatus(3);
				$res = $this->updateEntity($oEnquiry);
				if($res>0) $message = $this->get('translator')->trans("Request executed successfully");
			}
		}
		return $this->render('BoAdvisorsBundle:Enquiry:tbshow.html.twig', array(
			'enquiry' => $oEnquiry,
			'status'=>$oEnquiry->getStatusDef(),
			'message'=>$message,
		));	
    }
    /**
    * extra search for enquiry by filters.
    */
    public function extrasearchAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$oRepTS = $em->getRepository('BoAdminBundle:Timesheet');
		$timesheets = Array();	
		if($request->isXmlHttpRequest())
		{	
			$data = $request->request->get('data');	
		}
		$aData = explode(':',$data);
		$status = $aData[0];
		$this->get('session')->set('status',$status);
		if($status==0)
		$aEnquiry = $em->getRepository('BoAdminBundle:Enquiry')->findBy(array(),array('id' => 'desc'));			
		else
		$aEnquiry = $em->getRepository('BoAdminBundle:Enquiry')->extrasearch($status);
		return $this->render('BoAdvisorsBundle:Enquiry:extrasearch.html.twig', array(
			'enquiries'=>$aEnquiry,
		));	
    }
    /**
    * Deletes a Enquiry entity.
    */
    public function deleteAction(Request $request, Enquiry $enquiry)
    {
        $form = $this->createDeleteForm($enquiry);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$this->removeEntity($enquiry);
		}
        return $this->redirectToRoute('dash_enquiry_index');
    }
    /**
    * Search a enquiry by ajax.
    */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Enquiry');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$aResult = $oEntity ->search($description);
		if(isset($aResult[0])){
			return $this->render('BoAdvisorsBundle:Enquiry:search.html.twig', array(
				'enquiries'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdvisorsBundle:Enquiry:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $enquiry = $em->getRepository('BoAdminBundle:Enquiry')->findAll();
		$nb_tc = count($enquiry);
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('page');
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aEnquiry = $em->getRepository('BoAdminBundle:Enquiry')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);

        return $this->render('BoAdvisorsBundle:Enquiry:pagesearch.html.twig', array(
            'enquiries' => $aEnquiry,
			'page' => $page, // On transmet à la vue la page courante,
        ));
    }
    /**
    * Creates a form to delete a Enquiry entity.
    * @param Enquiry $enquiry The Enquiry entity
    * @return \Symfony\Component\Form\Form The form
    */
    private function createDeleteForm(Enquiry $enquiry)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('dash_enquiry_delete', array('id' => $enquiry->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

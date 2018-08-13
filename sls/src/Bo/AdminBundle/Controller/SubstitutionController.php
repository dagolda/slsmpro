<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use Bo\AdminBundle\Entity\Substitution;
use Bo\AdminBundle\Form\SubstitutionType;
use Bo\AdminBundle\Entity\Tsdate;
use Bo\AdminBundle\Entity\Ccdate;
use Bo\AdminBundle\Form\CcdateType;

/**
* Substitution controller.
*/
class SubstitutionController extends CommonController
{
    /** 
    * Index Substitution.
    */
    public function indexAction()
    {	
		$this->get('session')->remove('page');
		$this->get('session')->remove('url');
		return $this->redirect($this->generateUrl('substitution_list'));		
	}
    /**
     * Lists all Substitution entities.
     */
    public function listAction()
    {
		$this->verifySessionRights();
        	$em = $this->getDoctrine()->getManager();
		$oRepSub=$em->getRepository('BoAdminBundle:Substitution');
		$oRepTeacher = $em->getRepository('BoAdminBundle:Teachers');
		$substitutions = array();
		$user=$this->getTokenUser();
		$employee = $user?$user->getEmployee():null;
		//get page
		$page = $this->get('session')->get('page');
		if($page==null){
			$page=1;
			$this->get('session')->set('page',1);
		}
		$aTeacher = $oRepTeacher->findAllTeacherBis();
		$nb_tc = $oRepSub->getTotal();
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
        	$substitutions = $em->getRepository('BoAdminBundle:Substitution')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
		//Pour la recherche des opérations en deux dates 
		$oCcdate = new Ccdate();
        	$Ccdateform = $this->createForm('Bo\AdminBundle\Form\CcdateType', $oCcdate);
		$aHolders = $this->getListHolders($aTeacher);
		$aSubstitute = $this->getListSubstitute($aTeacher);
		return $this->render('substitution/index.html.twig', array(
		    	'substitutions' => $substitutions,
			'daylist'=>0,
			'teachers'=>$aTeacher,
			//'startdate'=>$oCcdate->getStartdate(),
			//'enddate'=>$oCcdate->getEnddate(),
			'holderlist'=>$aHolders,
			'subslist'=>$aSubstitute,
			'page' => $page, // forward current page to view,
			'nb_pages' => $nb_pages, //total number page,
			'total'=>$nb_tc, // record number.
			'ccd_form' =>  $Ccdateform->createView(),
			'nb_cpp' => $nb_cpp,// line's number to display
			'pm'=>"personnel",
			'sm'=>"substitution",
		));
    }
    /**
     * Substitution of the current day.
     */
    public function daylistAction()
    {
		$this->verifySessionRights();
        	$em = $this->getDoctrine()->getManager();
		$oRepSub=$em->getRepository('BoAdminBundle:Substitution');
		$oRepTeacher = $em->getRepository('BoAdminBundle:Teachers');
		$substitutions = array();
		$user=$this->getTokenUser();
		$employee = $user?$user->getEmployee():null;
		$aTeacher = $oRepTeacher->findAllTeacherBis();
        	$substitutions = $em->getRepository('BoAdminBundle:Substitution')->getDaylist();
		//Pour la recherche des opérations en deux dates 
		$oCcdate = new Ccdate();
        	$Ccdateform = $this->createForm('Bo\AdminBundle\Form\CcdateType', $oCcdate);
		$aHolders = $this->getListHolders($aTeacher);
		$aSubstitute = $this->getListSubstitute($aTeacher);
		return $this->render('substitution/index.html.twig', array(
		    	'substitutions' => $substitutions,
			'daylist'=>1,
			'teachers'=>$aTeacher,
			'holderlist'=>$aHolders,
			'subslist'=>$aSubstitute,
			'ccd_form' =>  $Ccdateform->createView(),
			'pm'=>"personnel",
			'sm'=>"substitution",
		));
    }
    public function pageAction($option)
    {
		$page=$this->get('session')->get('page');
		if($option==1) $page=1;
		if($option==2) $page=$page-1;
		elseif($option==3) $page=$page+1;
		else $page=$option;
		$this->get('session')->set('page',$page);
		return $this->redirect($this->generateUrl('substitution_list'));			
	}
    /**
    * Creates a new Substitution entity.
    */
    public function newAction(Request $request, $idcontract)
    {
		$em = $this->getDoctrine()->getManager();
		$oRepSub = $em->getRepository('BoAdminBundle:Substitution');
		$oRepTeacher = $em->getRepository('BoAdminBundle:Teachers');
		$oContract = $em->getRepository('BoAdminBundle:Contracts')->find($idcontract);
        	$substitution = new Substitution();
		$aTraining=$em->getRepository('BoAdminBundle:Training')->findBy(array('contracts'=>$oContract));
		if(isset($aTraining[0])){
			$substitution = $this->initialize($substitution,$aTraining[0]);
		}
        	$form = $this->createForm('Bo\AdminBundle\Form\SubstitutionType', $substitution);
        	$form->handleRequest($request);
		$aHolders=$this->getHolders($oContract);
		if($oContract) $aTeachers = $oRepTeacher->getAvailable($oContract,$aHolders);
		else $aTeachers = $oRepTeacher->getAllWithout($aHolders);
        	if($form->isSubmitted() && $form->isValid()){
			$idholder = $request->request->get('holders');
			$idsubstitute = $request->request->get('teachers');
			//$startdate = $substitution->getDdate();
			//$enddate = $substitution->getEnddate();
			$substitution->setIdholder($idholder);
			$substitution->setIdsubstitute($idsubstitute);
			$substitution = $this->setStudentForSubstitution($substitution,$oContract,$this->getAgendaByHolder($idHolder,$oSubstitution,$oContract));
			//If the contract is group contract
			$oTsweek = $this->getTsWeek($substitution->getDdate());
			$substitution->setTsweek($oTsweek);
			if(count($oRepSub->existSubstittution($substitution))==0) $this->updateEntity($substitution);
			else $message = $this->getTypeMessage("Warning",$this->get('translator')->trans('A substitution already exists for this teacher and this date'));	
			/*
			if($startdate==$enddate){
			}else{
				$res = $this->createMany($substitution,$enddate);
				if($res!=false) $message = $this->getTypeMessage("Warning",$this->get('translator')->trans('A substitution already exists for this teacher and this date')."(s):".$res);
			}		
			*/			
            if(!isset($message)) return $this->redirectToRoute('substitution_index');
        }
        return $this->render('substitution/new.html.twig', array(
            'substitution' => $substitution,
			'contract' => $oContract,
			'idholder' => isset($idholder) and $idholder>0?$idholder:0,
			'idsubstitute' => isset($idsubstitute) and $idsubstitute>0?$idsubstitute:0,
			'teachers'=> $aTeachers,
			'message'=> isset($message)?$message:null,
			'holders'=>$aHolders,
            'form' => $form->createView(),
			'date_form' => $date_form->createView(),
			'pm'=>"personnel",
			'sm'=>"substitution",
        ));
    }
    /**
    * Creates a new Substitution entity.
    */
	/*
    public function newforgroupAction(Request $request, $idgroup)
    {
		$em = $this->getDoctrine()->getManager();
		$oRepSub = $em->getRepository('BoAdminBundle:Substitution');
		$oRepTeacher = $em->getRepository('BoAdminBundle:Teachers');
		$oGroup = $em->getRepository('BoAdminBundle:Group')->find($idgroup);
        $substitution = new Substitution();
		$oTsdate = new Tsdate();
        $date_form = $this->createForm('Bo\AdminBundle\Form\TsdateType', $oTsdate);
		$date_form->handleRequest($request);
		$aTraining=$em->getRepository('BoAdminBundle:Training')->findBy(array('idgroup'=>$idgroup));
		if(isset($aTraining[0])){
			$substitution = $this->initialize($substitution,$aTraining[0]);
		}
        $form = $this->createForm('Bo\AdminBundle\Form\SubstitutionType', $substitution);
        $form->handleRequest($request);
		$aHolders=$this->getGroupHolderBis($oGroup);
		if($oGroup) $aTeachers = $oRepTeacher->getAvailableForGroup($oGroup,$aHolders);
		else $aTeachers = $oRepTeacher->getAllWithout($aHolders);
        if($form->isSubmitted() && $form->isValid()){
			$idholder = $request->request->get('holders');
			$idsubstitute = $request->request->get('teachers');
			$startdate = $substitution->getDdate();
			$enddate = $oTsdate->getEnddate();
			$substitution->setIdholder($idholder);
			$substitution->setIdsubstitute($idsubstitute);
			$substitution->setIdgroup($idgroup);
			if($oGroup) $substitution->setStudent($oGroup->getName());
			$oTsweek = $this->getTsWeek($substitution->getDdate());
			$substitution->setTsweek($oTsweek);
			if($startdate==$enddate){
				if(count($oRepSub->existSubstittution($substitution))==0) $this->updateEntity($substitution);
				else $message = $this->getTypeMessage("Warning",$this->get('translator')->trans('A substitution already exists for this teacher and this date'));
			}else{
				$res = $this->createMany($substitution,$enddate);
				if($res!=false) $message = $this->getTypeMessage("Warning",$this->get('translator')->trans('A substitution already exists for this teacher and this date')."(s):".$res);
			}			
            if(!isset($message)) return $this->redirectToRoute('substitution_index');
        }
        return $this->render('substitution/new.html.twig', array(
            'substitution' => $substitution,
			'contract' => $oContract,
			'idholder' => isset($idholder) and $idholder>0?$idholder:0,
			'idsubstitute' => isset($idsubstitute) and $idsubstitute>0?$idsubstitute:0,
			'teachers'=> $aTeachers,
			'message'=> isset($message)?$message:null,
			'holders'=>$aHolders,
            'form' => $form->createView(),
			'date_form' => $date_form->createView(),
			'pm'=>"personnel",
			'sm'=>"substitution",
        ));
    }
	*/
    /**
    * Ajax reload a new Substitution entity.
    */
    public function reloadAction(Request $request)
    {
		if($request->isXmlHttpRequest())
		{	
			$data = $request->request->get('data');	
		}
		$aData = explode("-",$data);
		$idholder = $aData[0];
		$idcontract = $aData[1];
		//$idgroup = $aData[2];	
		$em = $this->getDoctrine()->getManager();
		$oRepTeacher = $em->getRepository('BoAdminBundle:Teachers');
		$oContract = $em->getRepository('BoAdminBundle:Contracts')->find($idcontract);
        $substitution = new Substitution();
		$oHolder = $this->getEmployeeById($idholder);
		$aTraining=$em->getRepository('BoAdminBundle:Training')->findBy(array('contracts'=>$oContract));
		$aTeacherSchedule=$em->getRepository('BoAdminBundle:Agenda')->findBy(array('employee'=>$oHolder,'contracts'=>$oContract));
		$substitution = isset($aTeacherSchedule[0])?$this->initialize($substitution,$aTeacherSchedule[0]):$this->initialize($substitution,$aTraining[0]);
        $form = $this->createForm('Bo\AdminBundle\Form\SubstitutionType', $substitution);
		$oTsdate = new Tsdate();
        $date_form = $this->createForm('Bo\AdminBundle\Form\TsdateType', $oTsdate);
        return $this->render('BoAdminBundle:Substitution:schedule.html.twig', array(
            'substitution' => $substitution,
			'contract' => $oContract,
            'form' => $form->createView(),
			'date_form' => $date_form->createView(),
        ));
    }
    public function reload2Action(Request $request)
    {
		$oContract=null;
		$oGroup=null;
		if($request->isXmlHttpRequest())
		{	
			$data = $request->request->get('data');	
		}
		$aData = explode("-",$data);
		$idholder = $aData[0];
		$oHolder = $this->getEmployeeById($idholder);
		$idcontract = $aData[1];
		$idgroup = $aData[2];	
		$ddate = new \DateTime($aData[3]);	
		$em = $this->getDoctrine()->getManager();
		$oRepTeacher = $em->getRepository('BoAdminBundle:Teachers');
		if($idcontract!=null and $idcontract!=""){
			$oContract = $em->getRepository('BoAdminBundle:Contracts')->find($idcontract);
			$aTraining=$em->getRepository('BoAdminBundle:Training')->findBy(array('contracts'=>$oContract));
			$aTeacherSchedule=$em->getRepository('BoAdminBundle:Agenda')->findBy(array('employee'=>$oHolder,'contracts'=>$oContract));
		}elseif($idgroup!=null and $idgroup!=""){
			$oGroup = $em->getRepository('BoAdminBundle:Group')->find($idgroup);
			$aTraining=$em->getRepository('BoAdminBundle:Training')->findBy(array('group'=>$oGroup));
			$aTeacherSchedule=$em->getRepository('BoAdminBundle:Agenda')->findBy(array('employee'=>$oHolder,'group'=>$oGroup));
		}
        	$substitution = new Substitution();
		$substitution->setDdate($ddate);

		$substitution = isset($aTeacherSchedule[0])?$this->initialize($substitution,$aTeacherSchedule[0]):$this->initialize($substitution,$aTraining[0]);
        	$form = $this->createForm('Bo\AdminBundle\Form\SubstitutionType', $substitution);
		$oTsdate = new Tsdate();
		$oTsdate->setEnddate($ddate);
        	$date_form = $this->createForm('Bo\AdminBundle\Form\TsdateType', $oTsdate);
        return $this->render('BoAdminBundle:Substitution:schedule.html.twig', array(
            'substitution' => $substitution,
			'contract' => $oContract,
			'group' => $oGroup,
            'form' => $form->createView(),
			'date_form' => $date_form->createView(),
        ));
    }
    /**
    * Finds and displays a Substitution entity.
    */
    public function showAction(Substitution $substitution)
    {
		$oContract = $oGroup = null;
		$em = $this->getDoctrine()->getManager();
		$oRepTeacher = $em->getRepository('BoAdminBundle:Employee');
		$employee = $oRepTeacher->find(138);
		$oHolder = $oRepTeacher->find($substitution->getIdholder());
		$oSubstitute = $oRepTeacher->find($substitution->getIdsubstitute());
        $deleteForm = $this->createDeleteForm($substitution);
		if($substitution->getIdcontract()!=null) $oContract = $em->getRepository('BoAdminBundle:Contracts')->find($substitution->getIdcontract());
		if($substitution->getIdgroup()!=null) $oGroup = $em->getRepository('BoAdminBundle:Group')->find($substitution->getIdgroup());

        return $this->render('substitution/show.html.twig', array(
            'substitution' => $substitution,
            'delete_form' => $deleteForm->createView(),
			'holder'=>$oHolder,
			'contract'=>$oContract,
			'group'=>$oGroup,
			'substitute'=>$oSubstitute,
			'pm'=>"personnel",
			'sm'=>"substitution",
        ));
    }
    /**
     * Displays a form to edit an existing Substitution entity.
     */
    public function editAction(Request $request, Substitution $substitution)
    {
		$oContract = $oGroup = null;
		$em = $this->getDoctrine()->getManager();
		$oRepTeacher = $em->getRepository('BoAdminBundle:Teachers');
		$idcontract = $substitution->getIdcontract();
		$idgroup = $substitution->getIdgroup();
		if($idcontract!=null) $oContract = $em->getRepository('BoAdminBundle:Contracts')->find($idcontract);	
		elseif($idgroup!=null) $oGroup = $em->getRepository('BoAdminBundle:Group')->find($idgroup);	
		$oTsdate = new Tsdate();
		$oTsdate->setEnddate($substitution->getStartdate());
        	$date_form = $this->createForm('Bo\AdminBundle\Form\TsdateType', $oTsdate);
		$date_form->handleRequest($request);
        	$deleteForm = $this->createDeleteForm($substitution);
        	$editForm = $this->createForm('Bo\AdminBundle\Form\SubstitutionType', $substitution);
        	$editForm->handleRequest($request);
		if($oContract){
			$aHolders=$this->getPersistHolder($oContract->getEmployee());
			$aTeachers = $oRepTeacher->getAvailable($oContract,$aHolders);
		}elseif($oGroup){
			$aHolders=$this->getPersistHolder($oGroup->getEmployee());
			$aTeachers = $oRepTeacher->getAvailableByGroup($oGroup,$aHolders);		
		}else $aTeachers = $oRepTeacher->getAllWithout($aHolders);

		if($editForm->isSubmitted() && $editForm->isValid()) {
			$substitution = $this->updateDay($substitution);
			$this->updateEntity($substitution);
		    	return $this->redirectToRoute('substitution_index');
		}

		return $this->render('substitution/edit.html.twig', array(
		    	'substitution' => $substitution,
		    	'form' => $editForm->createView(),
			'contract' => $oContract,
			'group' => $oGroup,			
			'teachers'=> $aTeachers,
			'holders'=>$aHolders,
			'idholder'=>$substitution->getIdholder(),
			'idteacher'=>$substitution->getIdsubstitute(),
			'date_form' => $date_form->createView(),
		    	'delete_form' => $deleteForm->createView(),
			'pm'=>"personnel",
			'sm'=>"substitution",
		));
    }

    /**
     * Deletes a Substitution entity.
     */
    public function deleteAction(Request $request, Substitution $substitution)
    {
        $form = $this->createDeleteForm($substitution);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($substitution);
            $em->flush();
        }

        return $this->redirectToRoute('substitution_index');
    }
    /**
    * Search a substitution.
    */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Substitution');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$aResult = $oEntity->search($description);
		$this->setActivity($description." searched by this user");
		$aTeacher = $this->getRepository('BoAdminBundle:Teachers')->findAllTeacher();
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:Substitution:search.html.twig', array(
				'substitutions'=>$aResult,
				'teachers'=>$aTeacher,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Substitution:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $substitutions = $em->getRepository('BoAdminBundle:Substitution')->findAll();
		$nb_tc = count($substitutions);
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('motcle');
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aSubstitution = $em->getRepository('BoAdminBundle:Substitution')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
		$aTeacher = $em->getRepository('BoAdminBundle:Teachers')->findAllTeacher();
        return $this->render('BoAdminBundle:Substitution:pagesearch.html.twig', array(
			'teachers'=>$aTeacher,
            'substitutions' => $aSubstitution,
			'page' => $page, // On transmet à la vue la page courante,
        ));
    }
    public function holderAction(Request $request)
    {
		if($request->isXmlHttpRequest())
		{	
			$data = $request->request->get('data');	
		}
		$aData = explode(":",$data);
		$idholder = $aData[0];
		$startdate = $aData[1];
		$enddate = $aData[2];
		$em = $this->getDoctrine()->getManager();
		$oRepSub = $em->getRepository('BoAdminBundle:Substitution');
		$aSubstitution = $oRepSub->searchByHolder($idholder,$startdate,$enddate);
		$aTeacher = $em->getRepository('BoAdminBundle:Teachers')->findAllTeacher();
        return $this->render('BoAdminBundle:Substitution:tbliste.html.twig', array(
			'teachers'=>$aTeacher,
            'substitutions' => $aSubstitution,
		));
    }
    public function substituteAction(Request $request)
    {
		if($request->isXmlHttpRequest())
		{	
			$data = $request->request->get('data');	
		}
		$aData = explode(":",$data);
		$idsubstitute = $aData[0];
		$startdate = $aData[1];
		$enddate = $aData[2];
		$em = $this->getDoctrine()->getManager();
		$oRepSub = $em->getRepository('BoAdminBundle:Substitution');
		$aSubstitution = $oRepSub->searchBySubstitute($idsubstitute,$startdate,$enddate);
		$aTeacher = $em->getRepository('BoAdminBundle:Teachers')->findAllTeacher();
        return $this->render('BoAdminBundle:Substitution:tbliste.html.twig', array(
			'teachers'=>$aTeacher,
            'substitutions' => $aSubstitution,
		));
    }
    /**
    * Creates a form to delete a Substitution entity.
    * @param Substitution $substitution The Substitution entity
    * @return \Symfony\Component\Form\Form The form
    */
    private function createDeleteForm(Substitution $substitution)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('substitution_delete', array('id' => $substitution->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    private function getAllWithoutHolder($aTeachers,$aHolders)
    {
		$aResult=array();
		foreach($aHolders as $id=>$sName){
			if(isset($aTeachers[$id])) unset($aTeachers[$id]);
		}
        return $aTeachers;
    }
	private function createMany($oSubstitution,$enddate){
		$em = $this->getDoctrine()->getManager();
		$oRepSub = $em->getRepository('BoAdminBundle:Substitution');
		$aException = array();
		$aTsDate = $this->getarrayDate($oSubstitution->getStartdate(),$enddate);
		foreach($aTsDate as $oTsdate){
			$substitution=$this->createNewEntity($oSubstitution,$oTsdate);
			if(count($oRepSub->existSubstittution($substitution))==0) $this->updateEntity($substitution);
			else $aException[] = $oTsdate->format("Y-m-d");
		}
		if(isset($aException[0])) return join(',',$aException);	
		else return false;
	}
	private function createNewEntity($oSubstitution,$ddate){
		$substitution = new Substitution();
		$substitution->setIdholder($oSubstitution->getIdholder());	
		$substitution->setIdsubstitute($oSubstitution->getIdsubstitute());	
		$substitution->setIdcontract($oSubstitution->getIdcontract());		
		$substitution->setStartam($oSubstitution->getStartam());
		$substitution->setStartpm($oSubstitution->getStartpm());
		$substitution->setEndam($oSubstitution->getEndam());
		$substitution->setEndpm($oSubstitution->getEndpm());		
		$substitution->setHour($oSubstitution->getHour());
		$substitution->setDdate($ddate);		
		$substitution->setTsweek($oSubstitution->getTsweek());
		return $substitution;		
	}
	private function setActivity($activity){
		return $this->createActivity("Substitution",$activity);	
	}
}

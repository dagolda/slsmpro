<?php

namespace Bo\AdvisorsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use Bo\AdminBundle\Entity\Substitution;
use Bo\AdminBundle\Entity\Timesheet;
use Bo\AdminBundle\Entity\Criteria;
use Bo\AdminBundle\Form\SubstitutionType;
use Bo\AdminBundle\Controller\CommonController;

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
		return $this->redirect($this->generateUrl('dash_substitution_list'));		
	}
    /**
    * Lists all Substitution entities.
    */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
		$oRepSub=$em->getRepository('BoAdminBundle:Substitution');
		$substitutions = array();
		$user=$this->getTokenUser();
		$employee = $user?$user->getEmployee():null;
		//get page
		$page = $this->get('session')->get('page');
		if($page==null){
			$page=1;
			$this->get('session')->set('page',1);
		}
		$nb_tc = $oRepSub->getTotalByEmployee($employee);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		if($employee){
			//$substitutions = $oRepSub->findBy(array("idsubstitute"=>$employee->getId()),array('id' => 'desc'),$nb_cpp,$offset);
			$substitutions = $oRepSub->getSubstitution($employee);
		}
		$oCriteria = $this->initCriteria();		
        $Criteriaform = $this->createForm('Bo\AdminBundle\Form\CriteriaType', $oCriteria);
        return $this->render('BoAdvisorsBundle:Substitution:index.html.twig', array(
            'substitutions' => $substitutions,
			'employee'=>$employee,
			'teachers' => $oRepSub->getTeachers($substitutions),
			'contracts' => $oRepSub->getContracts($substitutions),
			'existts'  => $oRepSub->getExistsTs($employee),
			'ccd_form' =>  $Criteriaform->createView(),
			'page' => $page, // forward current page to view,
			'nb_pages' => $nb_pages, //total number page,
			'total'=>$nb_tc, // record number.
			'nb_cpp' => $nb_cpp,// line's number to display
			'pm'=>"tabeau-bord",
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
		return $this->redirect($this->generateUrl('dash_substitution_list'));			
	}
    /**
    * Add a new Timesheet entity by selecting a contract.
    */
    public function newtsAction(Request $request,Substitution $substitution)
    {
		//Initialisation et déclaration des variables
		$em = $this->getDoctrine()->getManager();
		$ContractEntity = $em->getRepository('BoAdminBundle:Contracts');
        $timesheet = new Timesheet();
		$timesheet->setDdate($substitution->getDdate());
		$aContract=$aGroups=$aStudents=$aTeacher=$oContract=$message=null;
		$valid=1;
		//Récupérer les information de l'utilisateur connecté
		$user=$this->getTokenUser();
		$employee=$user?$user->getEmployee():null;
		//Récupérer le type de timesheet par défaut : "Teaching"
		$aTypets = $em->getRepository('BoAdminBundle:Typets')->findByName("Teaching");
		if(isset($aTypets[0])) $timesheet->setTypets($aTypets[0]);
		//Récupérer les informations liées au contrat, éventuellement au groupe, 
		$idcontract = $substitution->getIdcontract();
		$oContract=$ContractEntity->find($idcontract);
		if($oContract){
			$aStudents = $oContract->getStudents();
			$oGroup = $oContract->getGroup();
			$aTeacherSchedule=$em->getRepository('BoAdminBundle:TeacherSchedule')->findBy(array('idemployee'=>$substitution->getIdholder(),'idcontracts'=>$oContract->getId()));
			if(isset($aTeacherSchedule[0])){
					$timesheet = $this->initialize($timesheet,$aTeacherSchedule[0]);
				}else{
					$timesheet = $this->initialize($timesheet);
			}
		}
        $form = $this->createForm('Bo\AdminBundle\Form\TimesheetType2', $timesheet);
		$form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
			$timesheet->setContract($oContract);
			$timesheet->setGroup($oGroup);	
			$timesheet->setEmployee($employee);	
			$RepTs = $em->getRepository('BoAdminBundle:Timesheet');
			if($RepTs->existEmployeeTS($timesheet,$employee)==0){
				//Récupérer le type de timesheet par défaut : "Teaching"
				$aTypets = $em->getRepository('BoAdminBundle:Typets')->findByName("Teaching");
				if(isset($aTypets[0])) $timesheet->setTypets($aTypets[0]);
				//Get timesheet validation level ($iTvl) setting, interger
				//If $iTvl=1 students have to valide the timesheet at the first step else they do not
				$iTvl = $em->getRepository('BoAdminBundle:Param')->getParam("timesheet_validation_level",5);
				if($iTvl==2) $timesheet->setValidatedStatus();		
				$oTsweek = $this->getTsWeek($timesheet->getDdate());
				$timesheet->setTsweek($oTsweek);
				$aAttendance = $this->getArrayAttendance($request,$aStudents);
				$res = $this->updateEntity($timesheet);
				if($res>0){
					$res = $this->createTsStudent($timesheet,$aAttendance);
				} 
				/*
				envoie de mail à l'apprenant pour validation
				*/
				return $this->redirectToRoute('dash_timesheet_index');	
			}else{
				$message=array('type'=>"Warning",'texte'=>$this->getErrorMessage(2));
			}
		}
        return $this->render('BoAdvisorsBundle:Substitution:addts.html.twig', array(
            'timesheet' => $timesheet,
			'substitution' => $substitution,
			'message'=>$message,
			'contract'=>$oContract,
			'group'=>$oGroup,
			'idgroup'=>(isset($oGroup) and $oGroup!=null)?$oGroup->getid():null,
			//'studentlist'=>$studentlist,
			'students'=>$aStudents,
			'employee'=>$user?$user->getEmployee():null,
            'form' => $form->createView(),
			'pm'=>"tabeau-bord",
			'sm'=>"timesheet"			
        ));
    }
    /**
    * Finds and displays a Substitution entity.
    */
    public function showAction(Substitution $substitution)
    {
		$em = $this->getDoctrine()->getManager();
		$oRepTeacher = $em->getRepository('BoAdminBundle:Employee');
		$oHolder = $oRepTeacher->find($substitution->getIdholder());
		$oSubstitute = $oRepTeacher->find($substitution->getIdsubstitute());
        $deleteForm = $this->createDeleteForm($substitution);

        return $this->render('substitution/show.html.twig', array(
            'substitution' => $substitution,
            'delete_form' => $deleteForm->createView(),
			'holder'=>$oHolder,
			'substitute'=>$oSubstitute,
			'pm'=>"tabeau-bord",
			'sm'=>"substitution",
        ));
    }
    /**
    * Search a substitution.
    */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdvisorsBundle:Substitution');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$aResult = $oEntity ->search($description);
		$this->setActivity($description." searched by this user");
		if(isset($aResult[0])){
			return $this->render('BoAdvisorsBundle:Substitution:search.html.twig', array(
				'substitutions'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdvisorsBundle:Substitution:search.html.twig', array(
			'criteria' => $description,
		));
    }
}

<?php
namespace Bo\AdvisorsBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Controller\CommonController;
use Bo\AdminBundle\Entity\Timesheet;
use Bo\AdminBundle\Entity\ModelTs;
use Bo\AdminBundle\Form\TimesheetType;
use Bo\AdminBundle\Form\TimesheetType2;
use Bo\AdminBundle\Entity\Criteria;
use Bo\AdminBundle\Entity\Tsdate;
use Bo\AdminBundle\Form\TsdateType;
use Bo\AdminBundle\Entity\TsStudent;
use Bo\AdminBundle\Entity\Billing;
/**
* Timesheet controller.
*/
class TimesheetController extends CommonController
{
    /**
    * Lists all Timesheet entities.
    */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
		$message = $this->get('session')->get('message');
		$this->get('session')->remove('message');
		$timesheets=array();
		//Récupérer les information de l'utilisateur connecté
		$employee=$this->getConnectedEmployee();		
		$oCriteria = $this->initCriteriaByPP();
		$idstatus = $this->getIdStatusForCriteria();		
		if($employee and $oCriteria){
			$timesheets = $em->getRepository('BoAdminBundle:Timesheet')->getPeriodTimesheet($employee,$oCriteria,$idstatus,2);
		}
		$Criteriaform = $this->createForm('Bo\AdminBundle\Form\Criteria2Type', $oCriteria);
		//Form of modal timesheet create
		$timesheet = $this->getNewTs($em,$employee);
        $admintsform = $this->createForm('Bo\AdminBundle\Form\TimesheetOtherType', $timesheet);
		//Form of modal timesheet create
		$modelts = new ModelTs();
        $modelform = $this->createForm('Bo\AdminBundle\Form\ModelTsType',$modelts);
        return $this->render('BoAdvisorsBundle:Timesheet:index.html.twig', array(
            'timesheets' => $timesheets,
			'employee'=>$employee,
			'message'=>$message,
			'std'=>$this->getStatusTsDef(),
			'ccd_form' =>  $Criteriaform->createView(),
			'admints_form'=>$admintsform->createView(),
			'model_form'=>$modelform->createView(),
			'employee'=>$employee,
			'idstatus'=>$idstatus,
			'idtype'=>2,
			'its'=>1,//indice d'affichage de la liste des feuilles de temps il est égal à 1 quand il s'agit des feuilles de temps et 0 sinon
			'pm'=>"tabeau-bord",
			'sm'=>"timesheet"
        ));
    }
    /**
    * Creates a new Timesheet entity.
    */
    public function newAction(Request $request)
    {
		//Initialisation et déclaration des variables
		$em = $this->getDoctrine()->getManager();
		$ContractEntity = $em->getRepository('BoAdminBundle:Contracts');
        $timesheet = new Timesheet();
		$aContract=$aGroups=$aStudents=$aTeacher=$oContract=$message=$oGroup=null;
		$valid=1;
		//Récupérer les information de l'utilisateur connecté
		$employee=$this->getConnectedEmployee();
		//Récupérer le type de timesheet par défaut : "Teaching"
		$aTypets = $em->getRepository('BoAdminBundle:Typets')->findByName("Teaching");
		if(isset($aTypets[0])) $timesheet->setTypets($aTypets[0]);
		//Récupérer les informations liées au contrat, éventuellement au groupe, 
		if($employee){
			//Get teacher's in progress contract
			$aContract = $ContractEntity->getEmployeeContracts($employee);
			if(isset($aContract[0])){
				$oContract=$aContract[0];
				$oGroup = $oContract->getGroup();
				$aStudents =$oContract->getStudents();
				$aTeacherSchedule=$em->getRepository('BoAdminBundle:TeacherSchedule')->findBy(array('idemployee'=>$employee->getId(),'idcontracts'=>$oContract->getId()));
				if(isset($aTeacherSchedule[0])) $timesheet = $this->initialize($timesheet,$aTeacherSchedule[0]);
				else $timesheet = $this->initialize($timesheet);
			}else{
				$aGroup = $em->getRepository('BoAdminBundle:Group')->getEmployeeGroup($employee);
				$timesheet = $this->initialize($timesheet);
			}
		}
        $form = $this->createForm('Bo\AdminBundle\Form\TimesheetType', $timesheet);
        return $this->render('BoAdvisorsBundle:Timesheet:new.html.twig', array(
            'timesheet' => $timesheet,
			'message'=>$message,
			'group'=>$oGroup,
			'idgroup'=>(isset($oGroup) and $oGroup!=null)?$oGroup->getid():null,
			'students'=>$aStudents,
			'employee'=>$employee,
            'form' => $form->createView(),
			'pm'=>"tabeau-bord",
			'sm'=>"timesheet"			
        ));
    }
    /**
    * Creates a new Timesheet entity.
    */
    public function createAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$user=$this->getTokenUser();
		$employee=$user?$user->getEmployee():null;
		$aContract=$aGroups=$aStudents=$aTeacher=$oContract=$message=null;
		$message=null;
		$valid=1;
		$ContractEntity = $em->getRepository('BoAdminBundle:Contracts');
        $timesheet = new Timesheet();
        $form = $this->createForm('Bo\AdminBundle\Form\TimesheetType', $timesheet);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
			$idgroup = $request->request->get("idgroup");
			$idstudent = $request->request->get("idstudent");
			if($idgroup>0){
				$oGroup = $em->getRepository('BoAdminBundle:Group')->find($idgroup);
				$aContract = $ContractEntity->getGroupContract($idgroup);
				$aStudents = $this->getSyudentsByContract($oGroup,$aContract);
				if($oGroup) $timesheet->setGroup($oGroup);
				if(count($aContract)==1){
					$timesheet->setContract($aContract[0]);
				}	
			}elseif($idstudent>0){
				$aContract = $ContractEntity->getContractByStudents($idstudent);
				$oStudent = $em->getRepository('BoAdminBundle:Students')->find($idstudent);
				if($oStudent) $timesheet->setStudents($oStudent);
				if(count($aContract)==1) $timesheet->setContract($aContract[0]);
			}elseif($timesheet->getTypets()=="Teaching"){
				$valid=null;				
			}
			if($timesheet->getTypets()=="Teaching" and $idgroup>0){	
				$sHlegende = $this->getHighLegende($request,$aStudents);
				if($timesheet->getLegende()!=$sHlegende){
					$valid=null;
					$message=array('type'=>"Warning",'texte'=>$this->getErrorMessage(8));
				}			
			}
			if(isset($aStudents[0])) $aAttendance = $this->getArrayAttendance($request,$aStudents);//Array of indiviual student legende
			if($employee!=null and $valid!=null){
				$RepTs = $em->getRepository('BoAdminBundle:Timesheet');
				if($RepTs->existEmployeeTS($timesheet,$employee)==0){
					//Get timesheet validation level ($iTvl) setting, interger
					//If $iTvl=1 students have to valide the timesheet at the first step else they do not
					$iTvl = $em->getRepository('BoAdminBundle:Param')->getParam("timesheet_validation_level",5);
					if($iTvl==2) $timesheet->setValidatedStatus();
					if($timesheet->getTypets()!="Teaching") $timesheet->setOthersStatus();
					$timesheet->setEmployee($employee);
					//$timesheet->setDdate($timesheet->getDdate());				
					$oTsweek = $this->getTsWeek($timesheet->getDdate());
					$timesheet->setTsweek($oTsweek);
					$res = $this->updateEntity($timesheet);
					if($res>0 and $timesheet->getTypets()=="Teaching" and isset($aAttendance)){
						$res = $this->createTsStudent($timesheet,$aAttendance);
						if(!$this->getExistPP($timesheet)) $oPP = $this->createPP($timesheet);
					}
					if($iTvl==2){
						/*Notification du conseiller pédagogique*/
					}else{
						/*envoie de mail à l'apprenant pour validation*/						
					}										
					return $this->redirectToRoute('home_timesheet_index');
				}else{
					$message=array('type'=>"Warning",'texte'=>$this->getErrorMessage(2));
				}
			}           
        }
		if($form->isSubmitted() and $employee==null){
			$message=array('type'=>"Warning",'texte'=>$this->getErrorMessage(1));
		}
		if($form->isSubmitted() and $valid==null){
			$message=array('type'=>"Warning",'texte'=>$this->getErrorMessage(4));
		}
        return $this->render('BoAdvisorsBundle:Timesheet:new.html.twig', array(
            'timesheet' => $timesheet,
			'message'=>$message,
			'groups'=>$aGroups,
			'idgroup'=>isset($oGroup) and $oGroup!=null?$oGroup->getid():null,
			'students'=>$aStudents,
			'employee'=>$user?$user->getEmployee():null,
            'form' => $form->createView(),
			'pm'=>"tabeau-bord",
			'sm'=>"timesheet"			
        ));
    }
    /**
    * Creates a new Timesheet entity.
    */
    public function otherAction(Request $request)
    {
		//Initialisation et déclaration des variables
		$em = $this->getDoctrine()->getManager();
		$message=null;
		//Récupérer les information de l'utilisateur connecté
		$user=$this->getTokenUser();
		$employee=$user?$user->getEmployee():null;
		$timesheet = $this->getNewTs($em,$employee);
        $form = $this->createForm('Bo\AdminBundle\Form\TimesheetOtherType', $timesheet);
		$form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
			$aCheck = $this->checkValidity($timesheet,$employee);
			if($aCheck[0]==1){
				$timesheet->setEmployee($employee);	
				$timesheet->setLegende("P");	
				$timesheet->setStatus(2);
				$oTsweek = $this->getTsWeek($timesheet->getDdate());
				$timesheet->setTsweek($oTsweek);
				$res = $this->updateEntity($timesheet);
				if(!$this->getExistPP($timesheet)) $oPP = $this->createPP($timesheet);
				return $this->redirectToRoute('dash_timesheet_index');
			}else{
				$message = $aCheck[1];
			}			
		}
        return $this->render('BoAdvisorsBundle:Timesheet:other.html.twig', array(
            'timesheet' => $timesheet,
			'message'=>$message,
			'statdef' => $timesheet->getStatusDefinition(),
			'employee'=>$employee,
            'form' => $form->createView(),
			'pm'=>"tabeau-bord",
			'sm'=>"timesheet"			
        ));
    }
    /**
    * Creates a new Timesheet entity after searching a contract.
    */
    public function newbysearchAction($idcontract)
    {
		//Initialisation et déclaration des variables
		$em = $this->getDoctrine()->getManager();
		$ContractEntity = $em->getRepository('BoAdminBundle:Contracts');
        $timesheet = new Timesheet();
		$aContract=$aGroups=$aStudents=$aTeacher=$oContract=$message=null;
		$valid=1;
		//Récupérer les information de l'utilisateur connecté
		$user=$this->getTokenUser();
		$employee=$user?$user->getEmployee():null;
		//Récupérer le type de timesheet par défaut : "Teaching"
		$aTypets = $em->getRepository('BoAdminBundle:Typets')->findByName("Teaching");
		if(isset($aTypets[0])) $timesheet->setTypets($aTypets[0]);
		$oContract=$ContractEntity->find($idcontract);
		if($oContract){
			$oGroup= $oContract->getGroup();
			$aStudents=$oContract->getStudents();
			$aTeacherSchedule=$em->getRepository('BoAdminBundle:TeacherSchedule')->findBy(array('idemployee'=>$employee->getId(),'idcontracts'=>$oContract->getId()));
			$timesheet = $this->initialize($timesheet,$aTeacherSchedule[0]);
			}else{
				$timesheet = $this->initialize($timesheet);
		}
        $form = $this->createForm('Bo\AdminBundle\Form\TimesheetType', $timesheet);
        return $this->render('BoAdvisorsBundle:Timesheet:new.html.twig', array(
            'timesheet' => $timesheet,
			'message'=>$message,
			'group'=>$oGroup,
			'idgroup'=>isset($oGroup) and $oGroup!=null?$oGroup->getid():null,
			'students'=>$aStudents,
			'employee'=>$user?$user->getEmployee():null,
            'form' => $form->createView(),
			'pm'=>"tabeau-bord",
			'sm'=>"timesheet"			
        ));
    }
    /**
    * Add a new Timesheet entity by selecting a contract.
    */
    public function addtsAction(Request $request,$idcontract)
    {
		//Initialisation et déclaration des variables
		$em = $this->getDoctrine()->getManager();
		$ContractEntity = $em->getRepository('BoAdminBundle:Contracts');
        $timesheet = new Timesheet();
		$aContract=$aGroups=$aStudents=$aTeacher=$oContract=$message=null;
		$valid=1;
		//Récupérer les information de l'utilisateur connecté
		$user=$this->getTokenUser();
		$employee=$user?$user->getEmployee():null;
		//Récupérer le type de timesheet par défaut : "Teaching"
		$aTypets = $em->getRepository('BoAdminBundle:Typets')->findByName("Teaching");
		if(isset($aTypets[0])) $timesheet->setTypets($aTypets[0]);
		//Récupérer les informations liées au contrat, éventuellement au groupe, 
		$oContract=$ContractEntity->find($idcontract);
		if($oContract){
			$aStudents = $oContract->getStudents();
			//$studentlist = $this->getStudentList($aStudents);
			$oGroup = $oContract->getGroup();
			$aTeacherSchedule=$em->getRepository('BoAdminBundle:TeacherSchedule')->findBy(array('idemployee'=>$employee->getId(),'idcontracts'=>$oContract->getId()));
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
					if(!$this->getExistPP($timesheet)) $oPP = $this->createPP($timesheet);
				} 
				/*
				envoie de mail à l'apprenant pour validation
				*/
				return $this->redirectToRoute('dash_timesheet_index');	
			}else{
				$message=array('type'=>"Warning",'texte'=>$this->getErrorMessage(2));
			}
		}
        return $this->render('BoAdvisorsBundle:Timesheet:addts.html.twig', array(
            'timesheet' => $timesheet,
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
    * Add a new Timesheet entity by selecting a contract.
    */
    public function addtsgroupAction(Request $request,$idgroup)
    {
		//Initialisation et déclaration des variables
		$em = $this->getDoctrine()->getManager();
		$ContractEntity = $em->getRepository('BoAdminBundle:Contracts');
		$oGroupEntity = $em->getRepository('BoAdminBundle:Group');
        $timesheet = new Timesheet();
		$aContract=$aGroups=$aStudents=$aTeacher=$oContract=$message=null;
		$valid=1;
		//Récupérer les information de l'utilisateur connecté
		$user=$this->getTokenUser();
		$employee=$user?$user->getEmployee():null;
		//Récupérer le type de timesheet par défaut : "Teaching"
		$aTypets = $em->getRepository('BoAdminBundle:Typets')->findByName("Teaching");
		if(isset($aTypets[0])) $timesheet->setTypets($aTypets[0]);
		//Récupérer les informations liées au group 
		$oGroup=$oGroupEntity->find($idgroup);
		if($oGroup){
			$aContract = $em->getRepository('BoAdminBundle:Contracts')->findByGroup($oGroup);
			$aStudents = $em->getRepository('BoAdminBundle:Students')->StudentAndContractKey($aContract);
			$aTeacherSchedule=$em->getRepository('BoAdminBundle:TeacherSchedule')->getGroupSchedule($oGroup,$employee);
			if(isset($aTeacherSchedule[0])){
					$timesheet = $this->initialize($timesheet,$aTeacherSchedule[0]);
				}else{
					$timesheet = $this->initialize($timesheet);
			}
		}
        $form = $this->createForm('Bo\AdminBundle\Form\TimesheetType2', $timesheet);
		$form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
			//Get timesheet validation level ($iTvl) setting, interger
			//If $iTvl=1 students have to valide the timesheet at the first step else they do not
			$timesheet->setGroup($oGroup);	
			$timesheet->setEmployee($employee);	
			$RepTs = $em->getRepository('BoAdminBundle:Timesheet');
			if($RepTs->existEmployeeTS($timesheet,$employee)==0){
				$iTvl = $em->getRepository('BoAdminBundle:Param')->getParam("timesheet_validation_level",5);
				if($iTvl==2) $timesheet->setValidatedStatus();		
				$oTsweek = $this->getTsWeek($timesheet->getDdate());
				$timesheet->setTsweek($oTsweek);
				$aAttendance = $this->getArrayAttendance($request,$aStudents);
				$res = $this->updateEntity($timesheet);
				if($res>0){
					$res = $this->createTsStudent($timesheet,$aAttendance);
					if(!$this->getExistPP($timesheet)) $oPP = $this->createPP($timesheet);
				} 
				/*
				envoie de mail à l'apprenant pour validation
				*/
				return $this->redirectToRoute('dash_timesheet_index');	
			
			}else{
				$message=array('type'=>"Warning",'texte'=>$this->getErrorMessage(2));
			}
		}
        return $this->render('BoAdvisorsBundle:Timesheet:addtsgroup.html.twig', array(
            'timesheet' => $timesheet,
			'message'=>$message,
			'contract'=>$oContract,
			'group'=>$oGroup,
			'idgroup'=>(isset($oGroup) and $oGroup!=null)?$oGroup->getid():null,
			'students'=>$aStudents,
			'employee'=>$user?$user->getEmployee():null,
            'form' => $form->createView(),
			'pm'=>"tabeau-bord",
			'sm'=>"timesheet"			
        ));
    }
    /**
    * Finds and displays a Timesheet entity.
    */
    public function showAction(Timesheet $timesheet)
    {
        $deleteForm = $this->createDeleteForm($timesheet);
		$em = $this->getDoctrine()->getManager();
		$aTSV = $em->getRepository('BoAdminBundle:TsValidation')->findBy(array('timesheet'=>$timesheet));
		$aTsStudent = $em->getRepository('BoAdminBundle:TsStudent')->findBy(array('timesheet'=>$timesheet));
        return $this->render('BoAdvisorsBundle:Timesheet:show.html.twig', array(
            'timesheet' => $timesheet,
			'tsv'=>$aTSV,
			'tsstudents'=>$aTsStudent,
			'students'=>$this->getTsStudentList($aTsStudent),
			'employee'=>$this->getConnected(),
			'std'=>$timesheet->getStatusDefinition(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"tabeau-bord",
			'sm'=>"timesheet"
        ));
    }
    /**
    * Displays a form to edit an existing Timesheet entity.
    */
    public function editAction(Request $request, Timesheet $timesheet)
    {
		$em = $this->getDoctrine()->getManager();
		$this->get('session')->remove('message');
		$ContractEntity = $em->getRepository('BoAdminBundle:Contracts');
		$user=$this->getTokenUser();
		$employee=$user?$user->getEmployee():null;
		if($employee){
			//Get teacher's in progress contract
			$aGroups = $ContractEntity->getListGroup($employee);
			$aStudents = $ContractEntity->getListStudent($employee);
		}		
		$hour = $this->getNumberHour($timesheet);
		$timesheet->setHour($hour);
        $deleteForm = $this->createDeleteForm($timesheet);
        $editForm = $this->createForm('Bo\AdminBundle\Form\TimesheetType', $timesheet);
        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid()) {
			//If timesheet was reject by payroll, resubmit it
			if($timesheet->getStatus()==$timesheet->getRejectStatus()) $timesheet->setInitialStatus();
            $res = $this->updateEntity($timesheet);
			if($res>0){
				$this->get('session')->set('message',array('type'=>"Success",'texte'=>"The Timesheet ".$timesheet->getId()." is updated successfully."));
				return $this->redirectToRoute('dash_timesheet_index');
			}else{
				$message = array('type'=>"Warning",'texte'=>"Unable to create this Timesheet. Contact the system administor");
			}
        }
        return $this->render('BoAdvisorsBundle:Timesheet:edit.html.twig', array(
            'timesheet' => $timesheet,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'groups'=>$aGroups,
			'idgroup'=>$timesheet->getGroup()?$timesheet->getGroup()->getId():null,
			'students'=>$aStudents,
			'idstudent'=>$timesheet->getStudents()?$timesheet->getStudents()->getId():null,
			'employee'=>$this->getConnected(),
			'pm'=>"tabeau-bord",
			'sm'=>"timesheet"
        ));
    }
    /**
    * Search a contract for creating a timesheet.
    */
    public function contractsearchAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$oRepContract = $em->getRepository('BoAdminBundle:Contracts');	
		if($request->isXmlHttpRequest())
		{	
			$data = $request->request->get('data');	
		}
		$aResult = $oRepContract->searchContract($data);
		return $this->render('BoAdvisorsBundle:Timesheet:contracts.html.twig', array(
			'contracts'=>$aResult,
		));				
    }
    /**
    * Search a timesheet.
    */
    public function searchAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$oRepTS = $em->getRepository('BoAdminBundle:Timesheet');	
		if($request->isXmlHttpRequest())
		{	
			$data = $request->request->get('data');	
		}
		$aData = explode('-',$data);
		$aResult = $oRepTS->searchEmployeeTS($aData);
		if(isset($aResult[0])){		
			return $this->render('BoAdvisorsBundle:Timesheet:tbliste.html.twig', array(
				'timesheets'=>$aResult,
				'description'=>$aData[1],
			));
		}
		return $this->render('BoAdvisorsBundle:Timesheet:search.html.twig', array(
			'criteria' => $aData[1],
		));		
    }
    /**
    * extra search timesheets for employee.
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
		$month = $aData[0];
		$year = $aData[1];	
		$week = $aData[2];	
		$startdate = $aData[3];	
		$enddate = $aData[4];
		$status = (int) $aData[5];
		$type = (int) $aData[6];
		$user=$this->getTokenUser();
		$employee = $user?$user->getEmployee():null;
		$oCriteria = $this->initCriteriaByPP($month,$year);		
		if($employee and $oCriteria){
			$timesheets = $em->getRepository('BoAdminBundle:Timesheet')->getPeriodTimesheet($employee,$oCriteria,$status,$type);
		}	
		return $this->render('BoAdvisorsBundle:Timesheet:extrasearch.html.twig', array(
			'timesheets'=>$timesheets,
			'std'=>$this->getStatusTsDef(),
		));	
    }
    /**
    * extra search timesheets for employee.
    */
    public function checkingAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$oRepTS = $em->getRepository('BoAdminBundle:Timesheet');
		if($request->isXmlHttpRequest())
		{	
			$data = $request->request->get('data');	
		}
		$aData = explode('#',$data);
		//$aData = Array ( '0' => "2016-12-08", '1' => "2",'2' => "1", '3' => "7", '4' => "08:00", '5' => "12:00", '6' => "13:00", '7' => "16:00" );
		$timesheet = $this->getTimesheet($aData);
		$employee = $this->getConnectedEmployee();
		$aCheck = $this->checkValidity($timesheet,$employee);
		$iRes = $aCheck[0];
		//echo $iRes;
		//exit(0);
		$aRes = $aCheck[1];
		if($iRes==1){}
		return $this->render('BoAdvisorsBundle:Timesheet:checking.html.twig', array(
			'ires'=>$iRes,
			'ares'=>$aRes,
		));	
    }
	private function getTimesheet($aData){
		$ddate = $aData[0];
		$type = intval($aData[1]);
		//echo $type."<br>";
		$em = $this->getDoctrine()->getManager();
		$oTypets = $em->getRepository('BoAdminBundle:Typets')->find($type);
		//echo $oTypets->getId();
		$idemployee = $aData[2];	
		$hour = $aData[3];
		$startam = $aData[4];	
		$endam = $aData[5];	
		$startpm = $aData[6];	
		$endpm = $aData[7];	
		$oTS = new Timesheet();
		$oTS->setDdate(new \DateTime($ddate));
		$oTS->setTypets($oTypets);	
		$oTS->setHour($hour);
		$oTS->setEndpm($endpm);	
		$oTS->setStartpm($startpm);	
		$oTS->setEndam($endam);	
		$oTS->setStartam($startam);
		return $oTS;				
	}
    /**
    * extra search timesheets for employee.
    */
    public function datesearchAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$oRepTS = $em->getRepository('BoAdminBundle:Timesheet');
		$timesheets = Array();	
		if($request->isXmlHttpRequest())
		{	
			$data = $request->request->get('data');	
		}
		$aData = explode(':',$data);
		$month = $aData[0];
		$year = $aData[1];	
		$week = $aData[2];	
		$startdate = $aData[3];	
		$enddate = $aData[4];
		$status = (int) $aData[5];
		$type = (int) $aData[6];
		$user=$this->getTokenUser();
		$employee = $user?$user->getEmployee():null;
		$oCriteria = $this->initCriteriaByPP($month,$year);
		$oCriteria->setStartdate(new \DateTime($startdate));
		$oCriteria->setEnddate(new \DateTime($enddate));
		if($employee and $oCriteria){
			$timesheets = $em->getRepository('BoAdminBundle:Timesheet')->getPeriodTimesheet($employee,$oCriteria,$status,$type);
		}	
		return $this->render('BoAdvisorsBundle:Timesheet:extrasearch.html.twig', array(
			'timesheets'=>$timesheets,
			'std'=>$this->getStatusTsDef(),
		));	
    }
    /**
    * Ajax return message.
    */
    public function messageAction(Request $request)
    {
		if($request->isXmlHttpRequest())
		{	
			$data = $request->request->get('data');	
		}
		$aData = explode("-",$data);
		$oMessage = $em->getRepository('BoAdminBundle:Message')->find($idmessage);
		if($this->getLang()=="en") $message=$oMessage->getDescen();
		else $message=$oMessage->getDescfr();
		return $this->render('BoAdminBundle:Default:message.html.twig', array(
			'message' => array('type'=>"Warning",'texte'=>$message),
		));	
	}
    /**
     * Deletes a Timesheet entity.
     *
     */
    public function deleteAction(Request $request, Timesheet $timesheet)
    {
        $form = $this->createDeleteForm($timesheet);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
			$em = $this->getDoctrine()->getManager();
			$aTsVal=$em->getRepository('BoAdminBundle:TsValidation')->findByTimesheet($timesheet);
			$aTsStudents=$em->getRepository('BoAdminBundle:TsStudent')->findByTimesheet($timesheet);
			if(isset($aTsStudents[0])) $this->removeArrayEntity($aTsStudents);
			if(isset($aTsVal[0])) $this->removeArrayEntity($aTsVal);
			$this->removeEntity($timesheet);
        }

        return $this->redirectToRoute('dash_timesheet_index');
    }

    /**
     * Creates a form to delete a Timesheet entity.
     *
     * @param Timesheet $timesheet The Timesheet entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Timesheet $timesheet)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('dash_timesheet_delete', array('id' => $timesheet->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	private function updateNewTs($timesheet,$employee,$ddate){
		$oNewts = new Timesheet();
		$oNewts->setStartam($timesheet->getStartam());
		$oNewts->setStartpm($timesheet->getStartpm());
		$oNewts->setEndam($timesheet->getEndam());
		$oNewts->setEndpm($timesheet->getEndpm());	
		$oNewts->setHour($timesheet->getHour());
		$oNewts->setEmployee($employee);
		$oNewts->setDdate($ddate);
		$oNewts->setLegende($timesheet->getLegende());			
		$oTsweek = $this->getTsWeek($ddate);
		$oNewts->setTsweek($oTsweek);
		if($timesheet->getGroup()){
			$oNewts->setGroup($timesheet->getGroup());
		}elseif($timesheet->getStudents()){
			$oNewts->setStudents($timesheet->getStudents());
		}
		if($timesheet->getContract()) $oNewts->setContract($timesheet->getContract());
		return $oNewts;		
	}
	private function existManyTs($timesheet,$employee,$aDate){
		$aResult=array();
		foreach($aDate as $oDate){
			if($this->getEntityManager()->existEmployeeTS($timesheet,$employee,$oDate)==true){
				$aResult[]=$oDate->format('Y-m-d');
			}			
		}
		return $aResult;
	}
	private function getEntityManager(){
		return $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Timesheet');		
	}
	private function getStudentList($aStudents){
		$aRes = array();
		foreach($aStudents as $oStudent){
			$aRes[] = $oStudent->getFirstname()." ".$oStudent->getName();
		}
		return join(',',$aRes);
	}
	private function getTsStudentList($aTsStudent){
		$aResult = array();
		foreach($aTsStudent as $oTsStudent){
			if($oTsStudent->getStudents())
			$aResult[$oTsStudent->getStudents()->getId()] = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Students')->find($oTsStudent->getStudents()->getId());
		}
		return $aResult;
	}
}

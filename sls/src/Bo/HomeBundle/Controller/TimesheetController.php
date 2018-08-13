<?php
namespace Bo\HomeBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Controller\CommonController;
use Bo\AdminBundle\Entity\Timesheet;
use Bo\AdminBundle\Form\TimesheetType;
use Bo\AdminBundle\Form\TimesheetType2;
use Bo\AdminBundle\Entity\Tsdate;
use Bo\AdminBundle\Form\TsdateType;
use Bo\AdminBundle\Entity\TsStudent;
use Bo\AdminBundle\Entity\Billing;
use Bo\AdminBundle\Entity\Criteria;

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
		$message = $this->removeSession('message');
		$this->get('session')->remove('message');
		$timesheets=array();
		$employee = $this->getConnectedEmployee();
		$oCriteria = $this->initCriteriaByPP();	
		$idstatus = $this->getIdStatusForCriteria();
		if($employee){
			$timesheets = $em->getRepository('BoAdminBundle:Timesheet')->getPeriodTimesheet($employee,$oCriteria,$idstatus,1);
		}
		$Criteriaform = $this->createForm('Bo\AdminBundle\Form\Criteria2Type', $oCriteria);
		$form = $this->createForm('Bo\AdminBundle\Form\TimesheetOtherType', $this->getNewTs($em,$employee));
        return $this->render('BoHomeBundle:Timesheet:index.html.twig', array(
            'timesheets' => $timesheets,
			'employee'=>$employee,
			'idstatus'=>$idstatus,
			'message'=>$message,
			'tothour'=>$this->getTotalTsHour($timesheets),
			'dtth'=>$this->getParam('display_total_hour',25),
			'std'=>$this->getStatusTsDef(),
			'adminauthorize'=>$this->authorizedAdHour($employee),
			'employee'=>$employee,
			'existts'=>$this->existTsForThisDay($employee),
			'ccd_form' =>  $Criteriaform->createView(),
			'form' => $form->createView(),
			'pm'=>"contracts",
			'sm'=>"timesheet"
        ));
    }
    /**
    * Creates a new Timesheet entity.
    */
    public function newAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$today = new \DateTime(date("d-m-Y"));
		$aTSC=$aTSG=$aGroup=$aContracts=$aStudents=null;
		//Récupérer les information de l'utilisateur connecté
		$oEmployee = $this->getConnectedEmployee();	
		if(!$oEmployee){
			$this->setSessionByName('data',array('pm'=>"contracts",'sm'=>"timesheet"));
			return $this->redirectToRoute('bo_home_broken');	
		}
		$aContracts = $this->getContractWithoutTs($oEmployee);
		$aGroup = $this->getGroupWithoutTs($oEmployee);
		foreach($aGroup as $oGroup){
			$aStudents = $oGroup->getStudents();
			if(!isset($aStudents[0])) $this->updateStudentsForGroup($oGroup);
		}
        	$timesheet = new Timesheet();
		$message = null;
		//Verify if the teacher is authoriwed to change the form date
		$tsdateautho = $this->getTsDateAuthorized($oEmployee);
		$formtype = ($tsdateautho==1)?"Bo\AdminBundle\Form\TimesheetType3":"Bo\AdminBundle\Form\TimesheetType5";	
        	$form = $this->createForm($formtype, $timesheet);
        	$form->handleRequest($request);
		if(isset($aContracts[0])) $aTSC = $this->getCTSByContract($aContracts, $oEmployee);	
		if(isset($aGroup[0])) $aTSG = $this->getGTSByGroup($aGroup, $oEmployee);
        	if($form->isSubmitted() && $form->isValid()){
			if(isset($aContracts[0])) $message = $this->createTsForContract($em,$timesheet,$aContracts,$oEmployee,$request);
			if(isset($aGroup[0])) $message = $this->createTsForGroup($em,$timesheet,$aGroup,$oEmployee,$request);
			if($message!=null) $this->setSessionByName('message',$message);
			return $this->redirectToRoute('home_timesheet_index');			
        	}	
        return $this->render('BoHomeBundle:Timesheet:new.html.twig', array(
            'contracts' => $aContracts,
			'groups'=> $aGroup,
			'now'=> new \DateTime(),
			'gstudents'=>$aStudents,
			'presence'=>count($aStudents)>0?$this->getPresence($aStudents):$this->getPresence($this->getContractStudents($aContracts)),
			'employee'=>$oEmployee,
			'authorization'=>$tsdateautho,
			'tam'=>1,
			'tpm'=>1,
			'tsc'=>$aTSC,
			'tsg'=>$aTSG,
			'tcg'=>isset($aGroup[0])?$this->getTypeContForGroups($aGroup):null,//List of contract type for all groups
            'form' => $form->createView(),
			'pm'=>"contracts",
			'sm'=>"timesheet"			
        ));
    }
	private function createTsForContract($em,$timesheet,$aContracts,$oEmployee,$request,$ddate=null){
		$ids="";
		$RepTs = $em->getRepository('BoAdminBundle:Timesheet');
		if($ddate==null) $ddate=new \DateTime();
		$aLegende = $this->getLegendeForManyContracts($request,$aContracts);
		$aAttendance = $this->getManyAttendance($request,$aContracts,'group');
		foreach($aContracts as $oContract){
			//$timesheet = new Timesheet();
			//Get timesheet validation level ($iTvl) setting, interger
			//If $iTvl=1 students have to valide the timesheet at the first step else they do not
			$iTvl = $em->getRepository('BoAdminBundle:Param')->getParam("timesheet_validation_level",5);
			if($iTvl==2) $status=2;
			if($timesheet->getHour()!=null){
				$timesheet = $this->generateTs($timesheet,$oEmployee,$oContract,$aLegende[$oContract->getId()],$status);
				if($RepTs->existEmployeeTS($timesheet,$oEmployee)==0){
					$timesheet->setDdate($ddate);
					$timesheet->setMonth($ddate->format("m"));
					$timesheet->setYear($ddate->format("Y"));
					$timesheet=$this->setTsAmOrPM($timesheet);
					$res = $this->updateEntity($timesheet);
					if($res>0){
						$res = $this->createTsStudent($timesheet,$aAttendance[$oContract->getId()]);
						if(!$this->getExistPP($timesheet)) $oPP = $this->createPP($timesheet);
					}
					if($iTvl==2){
						/*Notification du conseiller pédagogique*/
					}else{
						/*envoie de mail à l'apprenant pour validation*/						
					}					
				}else{
					$message=array('type'=>"Warning",'texte'=>$this->getErrorMessage(2));
				}						
			}else{
				$ids = $ids.$oContract->getId().",";
				$message=array('type'=>"Warning",'texte'=>$this->get('translator')->trans("Course time can not be found for contract id").$ids);
			}										
		}
		if(isset($message)) return $message;
		else return null;
	}
	private function createTsForGroup($em,$timesheet,$aGroup,$oEmployee,$request,$ddate=null){
		$RepTs = $em->getRepository('BoAdminBundle:Timesheet');
		if($ddate==null) $ddate=new \DateTime();
		$aLegende = $this->getLegendeForManyContracts($request,$aGroup) ;
		$aAttendance = $this->getManyAttendance($request,$aGroup);
		foreach($aGroup as $oGroup){
			$now = new \DateTime();
			if($oGroup->getStartdate()<=$now and $now<=$oGroup->getEnddate()){
				//$timesheet = new Timesheet();
				//Get timesheet validation level ($iTvl) setting, interger
				//If $iTvl=1 students have to valide the timesheet at the first step else they do not
				$iTvl = $em->getRepository('BoAdminBundle:Param')->getParam("timesheet_validation_level",5);
				if($iTvl==2) $status=2;				
				$timesheet = $this->generateTsForGroup($timesheet,$oEmployee,$oGroup,$aLegende[$oGroup->getId()],$status);
				if($RepTs->existEmployeeTS($timesheet,$oEmployee)==0){
					$timesheet->setDdate($ddate);
					$timesheet->setMonth($ddate->format("m"));
					$timesheet->setYear($ddate->format("Y"));
					$timesheet=$this->setTsAmOrPM($timesheet);
					$res = $this->updateEntity($timesheet);
					if($res>0){
						$res = $this->createTsStudent($timesheet,$aAttendance[$oGroup->getId()]);
						if(!$this->getExistPP($timesheet)) $oPP = $this->createPP($timesheet);
					}
					if($iTvl==2){
						/*Notification du conseiller pédagogique*/
					}else{
						/*envoie de mail à l'apprenant pour validation*/						
					}					
				}else{
					$message=array('type'=>"Warning",'texte'=>$this->getErrorMessage(2));
				}								
			}									
		}
		if(isset($message)) return $message;
		else return null;
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
		$employee = $this->getConnectedEmployee();
		$timesheet = $this->getNewTs($em,$employee);
        $form = $this->createForm('Bo\AdminBundle\Form\TimesheetOtherType', $timesheet);
		$form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
			$aCheck = $this->checkValidity($timesheet,$employee);
			if($aCheck[0]==1){
				$timesheet->setEmployee($employee);	
				$timesheet->setStatus(2);
				$oTsweek = $this->getTsWeek($timesheet->getDdate());
				$timesheet->setTsweek($oTsweek);
				$timesheet->setMonth($timesheet->getDdate()->format("m"));
				$timesheet->setYear($timesheet->getDdate()->format("Y"));
				$res = $this->updateEntity($timesheet);
				if(!$this->getExistPP($timesheet)){
					$oPP = $this->createPP($timesheet);
				}
				return $this->redirectToRoute('dash_timesheet_index');
			}else{
				$message = $aCheck[1];
			}			
		}
        return $this->render('BoHomeBundle:Timesheet:other.html.twig', array(
            'timesheet' => $timesheet,
			'message'=>$message,
			'statdef' => $timesheet->getStatusDefinition(),
			'employee'=>$employee,
            'form' => $form->createView(),
			'pm'=>"contracts",
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
		$aContract=$aGroups=$aStudents=$aTeacher=$oContract=$message=$Tst=null;
		$valid=1;
		//Récupérer les information de l'utilisateur connecté;
		$employee=$this->getConnectedEmployee();
		//Récupérer le type de timesheet par défaut : "Teaching"
		$aTypets = $em->getRepository('BoAdminBundle:Typets')->findByName("Teaching");
		if(isset($aTypets[0])) $timesheet->setTypets($aTypets[0]);
		//Récupérer les informations liées au contrat, éventuellement au groupe, 
		$oContract=$ContractEntity->find($idcontract);
		if($oContract){
			$aStudents = $oContract->getStudents();
			$aLegend = $this->getStudentAbsLegend($aStudents);
			//$aTst = $em->getRepository('BoAdminBundle:TsStudent')->getAllBy($aStudents,date("Y-m-d"));//get TsStudent rows if there exists in the database
			$oGroup = $oContract->getGroup();
			$aTeacherSchedule=$em->getRepository('BoAdminBundle:Agenda')->findBy(array('employee'=>$employee,'contracts'=>$oContract));
			if(isset($aTeacherSchedule[0])){
				$timesheet = $this->initialize($timesheet,$aTeacherSchedule[0]);
				}else{
				$timesheet = $this->initialize($timesheet);
			}
		}
		//Verify if the teacher is authoriwed to change the form date
		$tsdateautho = $this->getTsDateAuthorized($employee);
		$formtype = ($tsdateautho==1)?"Bo\AdminBundle\Form\TimesheetType3":"Bo\AdminBundle\Form\TimesheetType4";	
		$form = $this->createForm($formtype, $timesheet);			
		$form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
			$timesheet=$this->getTsByRequested($timesheet,$request,$oContract);
			if($oGroup) $timesheet->setGroup($oGroup);
			if(count($aStudents)==1 and $oStudent=$aStudents[0]) $timesheet->setStudents($oStudent);
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
				$timesheet->setMonth($timesheet->getDdate()->format("m"));
				$timesheet->setYear($timesheet->getDdate()->format("Y"));
				$timesheet=$this->setTsAmOrPM($timesheet);
				$aAttendance = $this->getArrayAttendance($request,$aStudents);
				$res = $this->updateEntity($timesheet);
				if($res>0){
					$res = $this->createTsStudent($timesheet,$aAttendance);
					if(!$this->getExistPP($timesheet)){
						$oPP = $this->createPP($timesheet);
					}
				} 
				/*
				envoie de mail à l'apprenant pour validation
				*/
				return $this->redirectToRoute('home_timesheet_index');	
			}else{
				$message=array('type'=>"Warning",'texte'=>$this->getErrorMessage(2));
			}
		}
		if($timesheet->getHour()==null or $timesheet->getHour()==""){
			$message=array('type'=>"Warning",'texte'=>$this->get('translator')->trans("Course time can not be found. Please contact the payroll manager"));	
		}
		//get all dates for which a timesheet is entered by this employee for this contract
		$aDdate = $this->getTsForContractEmployee($oContract,$employee);
		if(in_array(date("Y-m-d"),$aDdate)){
			$message=array('type'=>"Warning",'texte'=>$this->get('translator')->trans("A timesheet already exists for this date"));	
		}
        return $this->render('BoHomeBundle:Timesheet:addts.html.twig', array(
            'timesheet' => $timesheet,
			'message'=>$message,
			'contract'=>$oContract,
			'group'=>$oGroup,
			'ddate'=>new \DateTime(),
			'tsdates'=>$this->formatTsDate($aDdate),
			'legends'=>$aLegend,
			'presence'=>$this->getPresence($aStudents),
			'tam'=>$this->getTsTime($timesheet,"am"),
			'tpm'=>$this->getTsTime($timesheet,"pm"),
			'authorization'=>$tsdateautho,
			'url'=> $request->headers->get('referer'),
			'idgroup'=>(isset($oGroup) and $oGroup!=null)?$oGroup->getid():null,
			'students'=>$aStudents,
			'employee'=>$employee,
            'form' => $form->createView(),
			'pm'=>"contracts",
			'sm'=>"timesheet"			
        ));
    }
	private function getTsByRequested($timesheet,$request,$oContract){
		$legend = $this->getHighPresenceBy($oContract,$this->getTsTime($timesheet,"am"),$this->getTsTime($timesheet,"pm"));
		$timesheet->setLegende($legend);			
		$timesheet->setContract($oContract);
		$hour = $request->request->get("hour");
		if($hour=="-") $timesheet->setHour(0);
		elseif($hour!=null) $timesheet->setHour($hour);
		if($request->request->get("am")==1){
			$timesheet->setStartam($this->getTime());
			$timesheet->setEndam($this->getTime());
		}
		if($request->request->get("pm")==1){
			$timesheet->setStartpm($this->getTime());
			$timesheet->setEndpm($this->getTime());
		}
		return $timesheet;
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
		$employee = $this->getConnectedEmployee();
		//Récupérer le type de timesheet par défaut : "Teaching"
		$aTypets = $em->getRepository('BoAdminBundle:Typets')->findByName("Teaching");
		if(isset($aTypets[0])) $timesheet->setTypets($aTypets[0]);
		//Récupérer les informations liées au group 
		$oGroup=$oGroupEntity->find($idgroup);
		if($oGroup){
			$aContract = $em->getRepository('BoAdminBundle:Contracts')->findByGroup($oGroup);
			$aStudents = $em->getRepository('BoAdminBundle:Students')->StudentAndContractKey($aContract);
			//Check if a absence is entered for this student and if it's of type "N-S" or "ABS"
			$aTst = $em->getRepository('BoAdminBundle:TsStudent')->getAllBy($aStudents,date("Y-m-d"));
			$aTeacherSchedule=$em->getRepository('BoAdminBundle:Agenda')->getGroupSchedule($oGroup,$employee);
			if(isset($aTeacherSchedule[0])){
				$timesheet = $this->initialize($timesheet,$aTeacherSchedule[0]);
			}else{
				$timesheet = $this->initialize($timesheet);
			}
		}
		//Verify if the teacher is authoriwed to change the form date
		$tsdateautho = $this->getTsDateAuthorized($employee);
		$formtype = ($tsdateautho==1)?"Bo\AdminBundle\Form\TimesheetType3":"Bo\AdminBundle\Form\TimesheetType4";
		$form = $this->createForm($formtype, $timesheet);		
		$form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
			$legend = $this->getHighPresenceBy($oGroup,$this->getTsTime($timesheet,"am"),$this->getTsTime($timesheet,"pm"),1);
			$timesheet->setLegende($legend);	
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
				$timesheet->setMonth($timesheet->getDdate()->format("m"));
				$timesheet->setYear($timesheet->getDdate()->format("Y"));
				$timesheet=$this->setTsAmOrPM($timesheet);
				$aAttendance = $this->getArrayAttendance($request,$aStudents);
				$res = $this->updateEntity($timesheet);
				if($res>0){
					$res = $this->createTsStudent($timesheet,$aAttendance);
					if(!$this->getExistPP($timesheet)){
						$oPP = $this->createPP($timesheet);
					}
				} 
				/*
				envoie de mail à l'apprenant pour validation
				*/
				return $this->redirectToRoute('home_timesheet_index');	
			
			}else{
				$message=array('type'=>"Warning",'texte'=>$this->getErrorMessage(2));
			}
		}
//print_r($this->getPresence($aStudents));
//exit(0);
        return $this->render('BoHomeBundle:Timesheet:addtsgroup.html.twig', array(
            'timesheet' => $timesheet,
			'message'=>$message,
			'contract'=>$oContract,
			'group'=>$oGroup,
			'authorization'=>$tsdateautho,
			'url'=> $request->headers->get('referer'),
			'ddate'=>new \DateTime(),
			'idgroup'=>(isset($oGroup) and $oGroup!=null)?$oGroup->getid():null,
			'students'=>$aStudents,
			//'absleg'=>$this->getStudentAbsLegend($aStudents),
			'presence'=>$this->getPresence($aStudents),
			'tam'=>$this->getTsTime($timesheet,"am"),
			'tpm'=>$this->getTsTime($timesheet,"pm"),
			'tst'=>$aTst,
			'employee'=>$employee,
            		'form' => $form->createView(),
			'pm'=>"contracts",
			'sm'=>"timesheet"			
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
		return $this->render('BoHomeBundle:Timesheet:extrasearch.html.twig', array(
			'timesheets'=>$timesheets,
			'std'=>$this->getStatusTsDef(),
		));	
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
		return $this->render('BoHomeBundle:Timesheet:extrasearch.html.twig', array(
			'timesheets'=>$timesheets,
			'std'=>$this->getStatusTsDef(),
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
        return $this->render('BoHomeBundle:Timesheet:show.html.twig', array(
            'timesheet' => $timesheet,
			'tsv'=>$aTSV,
			'tsstudents'=>$aTsStudent,
			'students'=>$this->getTsStudentList($aTsStudent),
            'delete_form' => $deleteForm->createView(),
			'employee'=>$this->getConnectedEmployee(),
			'pm'=>"contracts",
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
				return $this->redirectToRoute('home_timesheet_index');
			}else{
				$message = array('type'=>"Warning",'texte'=>"Unable to create this Timesheet. Contact the system administor");
			}
        }
        return $this->render('BoHomeBundle:Timesheet:edit.html.twig', array(
            'timesheet' => $timesheet,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'groups'=>$aGroups,
			'idgroup'=>$timesheet->getGroup()?$timesheet->getGroup()->getId():null,
			'students'=>$aStudents,
			'idstudent'=>$timesheet->getStudents()?$timesheet->getStudents()->getId():null,
			'pm'=>"contracts",
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
		return $this->render('BoHomeBundle:Timesheet:contracts.html.twig', array(
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
			return $this->render('BoHomeBundle:Timesheet:tbliste.html.twig', array(
				'timesheets'=>$aResult,
				'description'=>$aData[1],
			));
		}
		return $this->render('BoHomeBundle:Timesheet:search.html.twig', array(
			'criteria' => $aData[1],
		));		
    }
    /**
    * Search a timesheet.
    */
    public function reloadattAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$timesheet = new Timesheet();
		if($request->isXmlHttpRequest())
		{	
			$data = $request->request->get('data');	
			$aData = explode(':',$data);
			$ddate = $aData[0];
			$idcontract = $aData[1];
		}
		$ContractEntity = $em->getRepository('BoAdminBundle:Contracts');
		//Récupérer les information de l'utilisateur connecté;
		$employee=$this->getConnectedEmployee();
		$oContract=$ContractEntity->find($idcontract);
		if($oContract){
			$aStudents = $oContract->getStudents();
			$aTst = $em->getRepository('BoAdminBundle:TsStudent')->getAllBy($aStudents,$ddate);//get TsStudent rows if there exists in the database
			$aTeacherSchedule=$em->getRepository('BoAdminBundle:Agenda')->findBy(array('employee'=>$employee,'contracts'=>$oContract));
			if(isset($aTeacherSchedule[0])){
				$timesheet = $this->initialize($timesheet,$aTeacherSchedule[0]);
				}else{
				$timesheet = $this->initialize($timesheet);
			}
		}
        return $this->render('BoHomeBundle:Timesheet:attendance.html.twig', array(
			'contract'=>$oContract,
			'tst'=>$aTst,
			'tam'=>$this->getTsTime($timesheet,"am"),
			'tpm'=>$this->getTsTime($timesheet,"pm"),
			'students'=>$aStudents,	
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
			$this->removeArrayEntity($aTsStudents);
			$this->removeArrayEntity($aTsVal);
			$this->removeEntity($timesheet);
        }

        return $this->redirectToRoute('home_timesheet_index');
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
            ->setAction($this->generateUrl('home_timesheet_delete', array('id' => $timesheet->getId())))
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
			if($this->getEntityManager()->existEmployeeTS($timesheet,$employee,$oDate)==1){
				$aResult[]=$oDate->format('Y-m-d');
			}			
		}
		return $aResult;
	}
	private function getEntityManager(){
		return $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Timesheet');		
	}
	private function getTsStudentList($aTsStudent){
		$aResult = array();
		foreach($aTsStudent as $oTsStudent){
			if($oTsStudent->getStudents())
			$aResult[$oTsStudent->getStudents()->getId()] = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Students')->find($oTsStudent->getStudents()->getId());
		}
		return $aResult;
	}
	//return array of all groups of the contracts
	//return empty array when the contracts array is empty 
	private function getGroups($aContracts){
		$aGroup = array();
		foreach($aContracts as $oContract){
			if($oContract->getGroup()) $aGroup[$oContract->getGroup()->getId()]=$oContract->getGroup();
		}
		return $aGroup;
	}
	private function getSyudentsByContract($oGroup,$aContract){
		$em = $this->getDoctrine()->getManager();
		$aStudents=array();
		if(count($aContract)>1) $aStudents = $oGroup->getStudents();
		elseif(count($aContract)==1)  $aStudents = $aContract[0]->getStudents();
		if(count($aStudents)==0) $aStudents = $em->getRepository('BoAdminBundle:Students')->StudentAndContractKey($aContract);
		return $aStudents;
	}
	private function getContracts($oEmployee){
		$aResult = array();
		foreach($oEmployee->getContracts() as $oContract){
			$now = new \DateTime();
			if($oContract->getStatus()!=1) continue;
			if($now>$oContract->getEnddate()) continue;
			$aResult[] = $oContract;
		}
		return $aResult;		
	}
	private function getStudents($aEntity){
		$aResult = array();
		foreach($aEntity as $oEntity){
			$aResult[$oEntity->getId()]=$oEntity->getStudents();
		}
		return $aResult;
	}
}

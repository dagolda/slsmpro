<?php 
/*
* Date Création: 07/03/2016
* Auteur: N'VEKOUNOU Moise José
* Nom file : EmployeeController.php
* Description: Employee controller
*/
namespace Bo\AdminBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Entity\Employee;
use Bo\AdminBundle\Form\EmployeeType;
use Bo\AdminBundle\Entity\Teachers;
use Bo\AdminBundle\Entity\Batch;
use Bo\AdminBundle\Form\BatchType;
use Bo\AdminBundle\Entity\Advisors;
use Bo\AdminBundle\Entity\Status;
use Bo\AdminBundle\Entity\Language;
use Bo\AdminBundle\Entity\Substitution;
use Bo\AdminBundle\Entity\Categoryteacher;
use Bo\AdminBundle\Libs\PHPExcel\Factory;
use Bo\AdminBundle\Entity\SecurityCote;
use Bo\AdminBundle\Form\SecurityCoteType;
use Bo\AdminBundle\Entity\Absences;
use Bo\AdminBundle\Form\AbsencesType;
use Bo\AdminBundle\Entity\Tsdate;
use Bo\AdminBundle\Entity\Tadmin;
use Bo\AdminBundle\Entity\Agenda;
use Bo\AdminBundle\Entity\Ccdate;
use Bo\AdminBundle\Entity\Loginsent;
use Bo\UserBundle\Entity\User;
use Bo\AdminBundle\Form\TadminType;
use Bo\AdminBundle\Libs\PHPExcel\ScheduleFactory;
/** 
* Employee controller.
*/
class EmployeeController extends CommonController
{
    /** 
    * Index employee.
    */
    public function indexAction()
    {
		$this->removeSession();	
		$this->get('session')->remove('wcont');	
		return $this->redirect($this->generateUrl('employee_list'));		
    }
    /**
    * Lists all Employee entities.
    */
    public function listAction()
    {	
		$this->verifySessionRights();
		$this->setActivity("List view");
        	$oRepEmp = $this->getRepository('BoAdminBundle:Employee');
		$nb_tc = $oRepEmp->getTotal();
		//get page
		$page = $this->get('session')->get('page');
		if($page==null){
			$page=1;
			$this->get('session')->set('page',1);
		}
		//get number line per page
		$nb_cpp = $this->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$employees = $oRepEmp->findBy(array('active'=>true,'available'=>true,'remove'=>false),array('firstname' => 'asc'),$nb_cpp,$offset);
        	$employee = $this->setDefaultTypeContract();
        	$form = $this->createForm('Bo\AdminBundle\Form\EmployeeType', $employee);
		return $this->render('employee/index.html.twig', array(
		    	'employees' => $employees,
			'types'=>$this->getRepository('BoAdminBundle:Contracts')->getContractType(),
			'languages'=>$this->getRepository('BoAdminBundle:Language')->getAll(),
			'statuss'=>$oRepEmp->getStatusEmployee(),
			'contracts'=>$this->getEmployeeContracts($employees),
			'available_form'=>$this->getAvailableForm(),
			'now'=>new \DateTime(date("d-m-Y")),
		    	'form' => $form->createView(),
			'dateform' => $this->getCCdateForm(),
			'page' => $page, // forward current page to view,
			'message'=> $this->getSessionMessage(),
			'nb_pages' => $nb_pages, //total number page,
			'total'=>$nb_tc, // record number.
			'nb_cpp' => $nb_cpp,// line's number to display
			'pm'=>"personnel",
			'sm'=>"employee",
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
		return $this->redirect($this->generateUrl('employee_list'));			
    }
	private function getAvailableForm(){
        	$avail_form = $this->createForm('Bo\AdminBundle\Form\AgendaType', new Agenda());
		return $avail_form->createView();
	}
    /**
    * Lists all actif Employee
    */
    public function activeAction()
    {	
		$this->verifySessionRights();
		$this->setActivity("List view");
        	$oRepEmp = $this->getRepository('BoAdminBundle:Employee');
		$page = $this->get('session')->get('page');
		if($page==null){
			$page=1;
			$this->get('session')->set('page',1);
		}
		$employees = $oRepEmp->findActive();
        	$employee = $this->setDefaultTypeContract();
        	$form = $this->createForm('Bo\AdminBundle\Form\EmployeeType', $employee);
		$this->get("session")->set('wcont',1);
		return $this->render('employee/active.html.twig', array(
		    	'employees' => $employees,
			'types'=>$this->getRepository('BoAdminBundle:Contracts')->getContractType(),
			'languages'=>$this->getRepository('BoAdminBundle:Language')->getAll(),
			'statuss'=>$oRepEmp->getStatusEmployee(),
			'contracts'=>$this->getEmployeeContracts($employees),
			'now'=>new \DateTime(date("d-m-Y")),
		    	'form' => $form->createView(),
			'page' => $page, // forward current page to view,
			'message'=> $this->getSessionMessage(),
			//'nb_pages' => $nb_pages, //total number page,
			//'total'=>$nb_tc, // record number.
			'total'=>count($employees), // record number.
			//'nb_cpp' => $nb_cpp,// line's number to display
			'pm'=>"personnel",
			'sm'=>"employee",
		));
    } 
    public function newAction(Request $request)
    {
	$this->verifySessionRights();
	$this->get('session')->remove('page');
        $employee = $this->setDefaultTypeContract();
        $form = $this->createForm('Bo\AdminBundle\Form\EmployeeType', $employee);
        $form->handleRequest($request);	
	$message = $this->existEmployee($employee);

        if ($form->isSubmitted() && $form->isValid() && $message==false) {
		$employee->setPwd($this->getPassword());
		$employee->setCreateby($this->getConnected());
		$status = $employee->getStatus()->getStatusname();
		$oProfil=$this->getEntityProfil($status);
		$employee->setProfil($oProfil);
		$res = $this->updateEntity($employee);
		if($res!=null){
			$this->setActivity($employee->getName()." ".$employee->getFirstname()." is Created by this user");
			if($employee->getStatus()) $profil = $this->getProfil($status);
			else $profil = "Teacher";
			$option = $profil=="Teacher"?1:0;
			if(!$this->existUserAccount($employee)){
				$oUser = $this->createUser($option,$employee);
				$this->sendMailTo($oUser);
			}
			if($employee->getStatus() and ($employee->getStatus()->getId()==3 or $employee->getStatus()->getId()==5 or $employee->getStatus()->getId()==6)) $this->createAdvisor($employee);
		}
            	return $this->redirectToRoute('employee_list');
        }	
	$category_form = $this->createForm('Bo\AdminBundle\Form\CategoryteacherType', new Categoryteacher());
        $status_form = $this->createForm('Bo\AdminBundle\Form\StatusType', new Status());
        $language_form = $this->createForm('Bo\AdminBundle\Form\LanguageType', new Language());
        return $this->render('employee/new.html.twig', array(
            'employee' => $employee,
            'form' => $form->createView(),
            'category_form' => $category_form->createView(),
            'status_form' => $status_form->createView(),
            'language_form' => $language_form->createView(),
		'message'=>$message,
		'pm'=>"personnel",
		'sm'=>"employee",
		'url'=>$request->headers->get('referer'),
        ));
    }
    /**
    * Creates a new Categoryteacher entity.
    */
    public function createcategoryAction(Request $request)
    {
	$this->verifySessionRights();
        $categoryteacher = new Categoryteacher();
        $form = $this->createForm('Bo\AdminBundle\Form\CategoryteacherType', $categoryteacher);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$this->updateEntity($categoryteacher);
            return $this->redirectToRoute('employee_new');
        }
		
        return $this->render('categoryteacher/new.html.twig', array(
            'categoryteacher' => $categoryteacher,
            'form' => $form->createView(),
			'pm'=>"personnel",
			'sm'=>"category",
        ));
    }
    /**
    * Creates a new Status entity.
    */
    public function createstatusAction(Request $request)
    {
	$this->verifySessionRights();
        $status = new Status();
        $form = $this->createForm('Bo\AdminBundle\Form\StatusType', $status);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
			$this->updateEntity($status);
            return $this->redirectToRoute('employee_new');
        }
	
        return $this->render('status/new.html.twig', array(
            'status' => $status,
            'form' => $form->createView(),
			'pm'=>"personnel",
			'sm'=>"status",
        ));
    }
    /**
    * Creates a new Language entity.
    */
    public function createlanguageAction(Request $request)
    {
	$this->verifySessionRights();
        $language = new Language();
        $form = $this->createForm('Bo\AdminBundle\Form\LanguageType', $language);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$this->updateEntity($language);

            return $this->redirectToRoute('employee_new');
        }

        return $this->render('language/new.html.twig', array(
            'language' => $language,
            'form' => $form->createView(),
			'pm'=>"personnel",
			'sm'=>"language",
        ));
    }
    //Get array of contract or group for employee
    private function getEmployeeContracts($aEmployee){
		$aResult=array();
		foreach($aEmployee as $oEmployee){
			$aAgenda = $this->getAgendaByEmployee($oEmployee);				
			$aContract = $this->getContractByAgenda($aAgenda);
			$aGroup = $this->getGroupsBy($oEmployee);
			if(count($aContract)==0 and count($aGroup)==0) continue;
			$aResult[$oEmployee->getId()] = array('nc'=>count($aContract),'ng'=>count($aGroup));
		}
		return $aResult;
     }
    /**
    * Finds and displays a Employee entity.
    */
    public function showAction(Employee $employee)
    {
	$this->verifySessionRights();
	$aGroup = $aStudents= null;
	$oTCEntity=$this->getRepository('BoAdminBundle:Agenda');
	$aInvitation = $this->getRepository('BoAdminBundle:Invitation')->getByEmployee($employee);
	$oTokenuser=$this->getTokenUser();
        $deleteForm = $this->createDeleteForm($employee);
	$this->setActivity($employee->getName()." ".$employee->getFirstname()." is consulted by this user");
	$aAgenda = $this->getAgendaByEmployee($employee);
	$aContract = $this->getContractsByBis($employee);
	$offset = $this->get("session")->get("offset");
	if($offset==null or $offset==0) $offset = 5;
	if(count($aContract)==0){
		$aContract = $this->getContractByAgenda($aAgenda);
	}
	$aTCs = $this->getScheduleWithIdBy($employee->getId());
	$aTeacherSchedule=count($aTCs)>0?$oTCEntity->getTeacherContractschedule($aContract,$employee):null;
	$aGroup = $this->getGroupsBy($employee);
	$aTGS=$oTCEntity->getTeacherGroupSchedule($aGroup,$employee);
	if(count($aContract)>1) $aStudents = $this->getRepository('BoAdminBundle:Students')->StudentAndContractKey($aContract);
	elseif(isset($aContract[0])) $aStudents = $this->getRepository('BoAdminBundle:Students')->findStudents($aContract);
        $absence_form = $this->getCreateAbsenceForm();
	$tadmin_form = $this->createForm('Bo\AdminBundle\Form\TadminType', new Tadmin());
	$aSubstitution = $this->getSubsByEmployeeBis($employee);
        return $this->render('employee/show.html.twig', array(
            	'employee' => $employee,
		'securityCotes'=>$this->getEmployeeClearance($employee),
            	'delete_form' => $deleteForm->createView(),
		'user'=>$this->getUserByEmployee($employee),
		'groups' => $aGroup,
		'tgs'=>$aTGS, //Array of string content teacher Group Schedule like From Monday to Friday...
		'tcsgs'=>$oTCEntity->getTScForGroups($aGroup,$employee),//Array of object of group schedule for this teacher
		'contracts'=> $aContract,
		'tcsc'=>$aTCs,
		'offset'=>$offset,
		'students' => $aStudents,
		'page'=>$this->get('session')->get('page'),
		'schedule'=>$aTeacherSchedule,
		'epjs'=>$this->getEmppjs($employee),
		'tadmins'=>$this->getEmployeeAdHour($employee,2,0),
		'token'=>$oTokenuser,
		'invitations'=>$aInvitation,
		'substitutions'=>$aSubstitution,
		'subteachers'=>$this->getSubTeachers($aSubstitution),
		'absences'=>$this->getEmployeeAbsences($employee,$offset,0),
		'allabsences'=>$this->getEmployeeAbsences($employee),
		'abspage'=>$this->getAbsListOption($employee),//array of absence page option user can choose
		'now'=>new \Datetime(date("d-m-Y")),
		'absence_form' => $absence_form->createView(),
		'tadmin_form' => $tadmin_form->createView(),
		'pm'=>"personnel",
		'sm'=>"employee",
        ));
    }
    /**
    * Get offset for displaying absences and redirect route to show_student
    */
    public function listabsenceAction(Employee $employee,$offset)
    {
	$this->setSessionByName('offset',$offset);
	return $this->redirectToRoute('employee_show',array('id'=>$employee->getId()));
    }
    /**
    * show Employee schedule
    */
    public function scheduleAction(Request $request, Employee $employee)
    {
	$aCurrentWeek = $this->getWeekSheetDays($this->getToday());
	$aPrevWeek = $this->getPreviousWeek($aCurrentWeek);
	$aNextWeek = $this->getNextWeek($aCurrentWeek);
	//A effacer apres
	//$aCurrentWeek = array(new \DateTime("11-01-2018"));
	$aEvents = $this->generateEvents($employee,$aCurrentWeek);
	//09-11-2017
	//print_r($aEvents);
	//exit(0);
	$aNextEvents = $this->generateEvents($employee,$aNextWeek);
	$aEmployee = $this->getRepository('BoAdminBundle:Employee')->findBy(array('active'=>true),array('firstname' => 'asc'));
		
        return $this->render('employee/schedule.html.twig',
		array(
			'employee'=>$employee,
			'asc_form'=>$this->createScheduleFormView(),
			'today'=>$this->getToday(),
			'tb_am'=>$aEvents['am'],
			'tb_pm'=>$aEvents['pm'],
			'dates'=>$aCurrentWeek,
			'pdates'=>$aPrevWeek,
			'ndates'=>$aNextWeek,
			'pm'=>"personnel",
			'sm'=>"employee",
		)
	);
    }
    /**
    * Creates a new Agenda entity.
    */
    public function addscheduleAction(Request $request,Employee $oEmployee)
    {
		$oAgenda = $this->initSchedule();
        	$form = $this->createForm('Bo\AdminBundle\Form\AgendaType2', $oAgenda);
        	$form->handleRequest($request);

        	if($form->isSubmitted() && $form->isValid()){
			//check if the schedule is correct : startam > endam and startpm > endpm
			$check = $this->checkSchedule($oAgenda);
			if($check==1){
				$aOverlap = $this->overlapForEmployee($oAgenda,$oEmployee);
				//Get employee availability 1 he is available, 0 he is not
				$availability = $this->checkAvailability($oAgenda,$oEmployee);
				//echo $availability;
				//exit(0);
				if($availability==1){
					$oAbsence = $this->getSessionByName('absence');
					if($oAbsence!=null) $oAgenda->setPriority(1); 
					$oAgenda = $this->actualize($oAgenda);
					$oAgenda->setEmployee($oEmployee);		
					$oAgenda = $this->setAgendaStatus($oAgenda);						
					$res = $this->updateAmOrPmForTC($oAgenda);
					if($res>0){
						$this->setActivity("Schedule created for teacher ".$this->getTeacherBy($oEmployee)." by this user");	
						return $this->redirectToRoute('employee_schedule', array('id' => $oEmployee->getId()));										
					}
				}
			}
		}
		
		if($form->isSubmitted()) {
			if($check==0 or $check==2) $message = $this->get('translator')->trans('The schedules entered are not correct');
			if(isset($message)) $aMessage =array('type'=>"Warning",'texte'=>$message);
			else $aMessage = $this->getSessionByName('message');			
		}
		//$aSchedule = $this->getAgendaByEmployee($oEmployee);
		$aSchedule = $this->getAgendaByDates($oEmployee,$oAgenda->getStartdate(),$oAgenda->getEnddate());
		if($aSchedule!=null){
			$aContract = $this->getArrayContractBy($aSchedule);
			$aGroup = $this->getArrayGroupBy($aSchedule);
		}	
		return $this->render('employee/newschedule.html.twig', array(
		    	'agenda' => $oAgenda,
			'schedules' => $aSchedule,
			'employee' => $oEmployee,
			'message' => $aMessage,
			'url' => $request->headers->get('referer'),
			'overlap'=>isset($aOverlap)?$aOverlap:null,
			'absence'=>$this->getSessionByName('absence'),
		    	'asc_form' => $form->createView(),
			'pm'=>"personnel",
			'sm'=>"employee",
		));
    }
    /**
    * load schedule by date and id employee using ajax 
    */
    public function loadscheduleAction(Request $request)
    {
		$oEmpRep = $this->getRepository('BoAdminBundle:Employee');	
		if($request->isXmlHttpRequest())
		{	
			$data = $request->request->get('data');	
			$aData = explode("#",$data);
			$idemployee = $aData[0];
			$date =  new \DateTime($aData[1]);
		}
		$employee = $oEmpRep->find($idemployee);
		$aCurrentWeek = $this->getWeekSheetDays($date);
		$aPrevWeek = $this->getPreviousWeek($aCurrentWeek);
		$aNextWeek = $this->getNextWeek($aCurrentWeek);
		$aEvents = $this->generateEvents($employee,$aCurrentWeek);
		$aNextEvents = $this->generateEvents($employee,$aNextWeek);
		
        	return $this->render('BoAdminBundle:Employee:schedules.html.twig',
			array(
				'employee'=>$employee,
				'tb_am'=>$aEvents['am'],
				'today'=>$this->getToday(),
				'tb_pm'=>$aEvents['pm'],
				'dates'=>$aCurrentWeek,
				'pdates'=>$aPrevWeek,
				'ndates'=>$aNextWeek,
				'pm'=>"personnel",
				'sm'=>"employee",
			)
		);
    }
    private function getCreateAbsenceForm(){
		$oAbsence = new Absences();
		$oAbsence->setNumberday(1);
		return $this->createForm('Bo\AdminBundle\Form\AbsencesType4', $oAbsence);
    }
    /**
    * Finds and displays a Employee agenda.
    */
    public function agendaAction(Employee $employee,Request $request)
    {
		$this->verifySessionRights();
		$ContractEntity = $this->getRepository('BoAdminBundle:Contracts');
		$oTokenuser=$this->getTokenUser();
		$this->setActivity($employee->getName()." ".$employee->getFirstname()." is consulted by this user");
		$aUser = $this->getRepository('BoUserBundle:User')->findBy(array('employee'=>$employee));
		$aTimes = $this->getAgendaTime();
		$aDates = $this->getDatesOfWeek();
		//print_r($aDates);
		//echo "<br>";	
		$aDkey = array_keys($aDates);
		$aAgenda = $this->generateAgenda($employee,$aTimes,$aDates);
		//$this->printAgenda($aTimes,$aDates,$aAgenda);
		//print_r($aAgenda);
		//exit(0);
		$aFormatdate = $this->formatDate($aDates);
		$aAbsences = $this->getRepository('BoAdminBundle:Absences')->findBy(array('employee'=>$employee));
        return $this->render('employee/agenda.html.twig', array(
            'employee' => $employee,
			'agenda'=>$aAgenda,
			'datekeys'=>$aDkey,
			'user'=>isset($aUser[0])?$aUser[0]:null,
			'dates'=>$aDates,
			'formatdates'=>$aFormatdate,
			'ttkeys'=>array_keys($aTimes),
			'today'=> new \DateTime(date("d-m-Y")),
			'times'=>$aTimes,
			'token'=>$oTokenuser,
			'pm'=>"personnel",
			'sm'=>"employee",
        ));
    }
	public function printAgenda($aTimes,$aDates,$aAgenda){
		$ttkey = array_keys($aTimes);
		$aDkey = array_keys($aDates);
		$startam=$startpm=$endam=$endpm=null;
		echo "<table>";
		foreach($ttkey as $tkey){
			$aTT = explode(':',$tkey);
			echo "<tr>";
			if($aTT[1]=="00" or $aTT[1]=="30"){
				echo "<td rowspan='2' width='4%'>".$tkey."</td>";
			}
			foreach($aDkey as $dkey){
				if(isset($aAgenda[$dkey])){
					if(isset($aTimes[$tkey]) and $aTimes[$tkey]<=12.30){
					if(isset($aAgenda[$dkey][$tkey]['startam']) and $aAgenda[$dkey][$tkey]['startam']!=$startam) $startam = $aAgenda[$dkey][$tkey]['startam'];
					if(isset($aAgenda[$dkey][$tkey]['endam']) and $aAgenda[$dkey][$tkey]['endam']!=$startam) $endam = $aAgenda[$dkey][$tkey]['endam'];
						if(isset($aAgenda[$dkey][$tkey])){
							echo "<td rowspan='".$aAgenda[$dkey][$tkey]['hour']."'>".$aAgenda[$dkey][$tkey]['label']."</td>";
						}elseif($aTimes[$tkey]<$endam and $aTimes[$tkey]>=$startam){
						//if the current time lower than endam and current time more than startam do nothing
						}else{

						}
					}

				}


			}

		}

	}
    /**
    * Finds and displays a Employee agenda by ajax call.
    */
    public function agendasearchAction(Request $request)
    {
		$this->verifySessionRights();
		$ContractEntity = $this->getRepository('BoAdminBundle:Contracts');
		$oEmpRep = $this->getRepository('BoAdminBundle:Employee');	
		if($request->isXmlHttpRequest())
		{	
			$data = $request->request->get('data');	
			$aData = explode("#",$data);
			$idemployee = $aData[0];
			$startdate =  new \DateTime($aData[1]);
			$enddate =  new \DateTime($aData[2]);
			$number = $aData[3];
		}
		$employee = $oEmpRep->find($idemployee);
		$startdate = $this->getDatePlus($startdate,$number);
		$enddate = $this->getDatePlus($enddate,$number);		
		//$oTokenuser=$this->getTokenUser();
		$this->setActivity($employee->getName()." ".$employee->getFirstname()." is consulted by this user");
		//$aUser = $this->getRepository('BoUserBundle:User')->findBy(array('employee'=>$employee));	
		$aTimes = $this->getAgendaTime();
		$aDates = $this->getDatesOfWeek($startdate,$enddate);	
		$aDkey = array_keys($aDates);
		//print_r($aDkey);
		//exit(0);
		$aAgenda = $this->generateAgenda($employee,$aTimes,$aDates);
		//print_r($aAgenda);
		//exit(0);
		$aFormatdate = $this->formatDate($aDates);
		return $this->render('BoAdminBundle:Employee:agenda.html.twig', array(
		    	'employee' => $employee,
			'agenda'=>$aAgenda,
			'datekeys'=>$aDkey,
			//'user'=>isset($aUser[0])?$aUser[0]:null,
			//'groups' => $aGroup,
			'dates'=>$aDates,
			'formatdates'=>$aFormatdate,
			'ttkeys'=>array_keys($aTimes),
			'today'=> new \DateTime(date("d-m-Y")),
			'times'=>$aTimes,
			//'contracts'=> $aContract,
			//'schedule'=>$aTeacherSchedule,
			//'token'=>$oTokenuser,
			'pm'=>"personnel",
			'sm'=>"employee",
		));
    }
    /**
    * change Employee entity setting.
    */
    public function settingAction(Request $request,Employee $employee)
    {
		$tsdate = $request->request->get('tsdate');	
		if($tsdate=="yes") $employee->setTsdate(1);
		else $employee->setTsdate(0);
		$this->updateEntity($employee);
		return $this->redirectToRoute('employee_show',array('id'=>$employee->getId()));
	}
	/*
	* Extract schedule for all employee
	*/
	public function extractscheduleAction(Request $request){
		$oCcdate = new Ccdate();
        	$form = $this->createForm('Bo\AdminBundle\Form\CcdateType', $oCcdate);
		$form->handleRequest($request);	
		$aDate = $this->getarrayDate($oCcdate->getStartdate(),$oCcdate->getEnddate());
		$oRepEmp = $this->getRepository('BoAdminBundle:Employee');
		$aEmployees = $oRepEmp->findBy(array('active'=>true,'available'=>true,'remove'=>false),array('firstname' => 'asc'));	
		$aSchedule = $this->generateAllSchedule($aEmployees,$aDate);
		//print_r($aSchedule);
		//exit(0);
		$oFactory=new ScheduleFactory("Schedules");
		return $oFactory->createXLS($aDate,$aSchedule,$aEmployees);	
	}
    /**
    * Lists all absences of current day
    */
    public function dayabsencesAction()
    {
	$this->verifySessionRights();
	$oTokenuser=$this->getTokenUser();
	$this->setActivity("List view");
        $oRepAbs = $this->getRepository('BoAdminBundle:Absences');
	$absences = $oRepAbs->getEmployeeDayAbsence();
        return $this->render('employee/dayabsence.html.twig', array(
            	'absences' => $absences,
		'total'=> count($absences),
		'now'=>new \DateTime(date("d-m-Y")),
		'pm'=>"personnel",
		'sm'=>"absences",
        ));
    }
    public function absencespageAction($option)
    {
	$page=$this->get('session')->get('page');
	if($option==1) $page=1;
	if($option==2) $page=$page-1;
	elseif($option==3) $page=$page+1;
	else $page=$option;
	$this->get('session')->set('page',$page);
	return $this->redirect($this->generateUrl('employee_absence_index'));			
    }	
    /**
    * Creates a new Absences entity.
    */
    public function addabsenceAction(Request $request,$idemployee)
    {
	$this->verifySessionRights();
	$aMessage = null;
        $absence = new Absences();
        $form = $this->createForm('Bo\AdminBundle\Form\AbsencesType4', $absence);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){	
			$oEmployee = $this->getRepository('BoAdminBundle:Employee')->find($idemployee);
			$oRepAbs = $this->getRepository('BoAdminBundle:Absences');
			//Check duplicated absence
			$bExist = $oRepAbs->existEmployeeAbsence($oEmployee,$absence->getStartdate());
			//if $bExist is equal to false then save absence else display error message
			if($bExist==false){
				$enddate = $this->getDatePlusBis($absence->getStartdate(),$absence->getNumberday()-1);
				$absence->setEnddate($enddate);
				$absence->setEmployee($oEmployee);
				$absence->setCreateby($this->getFNConnectedEmployee());
				$res = $this->createAbsence($absence);
				$this->setActivity("Absence id: ".$absence->getId()." is Created by this user for employee >> ".$oEmployee->getName()." ".$oEmployee->getFirstname());			
			}else{
				$message = $this->get('translator')->trans('An absence is already created for the this employee and for this date');
				$aMessage = array('type'=>"Warning",'texte'=>$message);
				$this->get('session')->set('message',$aMessage);
			}
        }
	return $this->redirectToRoute('employee_show', array('id'=>$idemployee));	
    }
    /**
    * Finds and displays a Absences entity.
    */
    public function showabsenceAction(Request $request,Absences $absence)
    {
	$this->setSessionByName('absence',$absence);
        $deleteForm = $this->createDeleteAbsenceForm($absence);
	$aSubstitution = $this->getSusbByAbsence($absence);
	//Check if the substitution button must be showed
	$aDsbc = $this->getSubsBDForCont($absence);
	//get array 1 to display, 0 
	$aDsbg = $this->getSubsBDForGroup($absence);

        return $this->render('employee/showabsence.html.twig', array(
            	'absence' => $absence,
		'employee'=>$absence->getEmployee(),
		'now'=>new \DateTime(date("d-m-Y")),
            	'delete_form' => $deleteForm->createView(),
		'subcontform'=>$this->createSubsContForm($absence),
		'subgroupform'=>$this->createSubsGroupForm($absence),
		'substitutions'=>$aSubstitution,
		'teachers'=>$this->getRepository('BoAdminBundle:Teachers')->findAllTeacher(),
		'subscont'=> $this->getSubsCont($absence),
		'subsgroup'=> $this->getSubsGroup($absence),
		'esc'=>$aDsbc,//get array of 1 if exist not substitution for contract or 0 else, with for contract id as index
		'esg'=>$aDsbg,//get array of  1 if exist not substitution for group or 0 else, with for group id as index
		'subsgroup'=> $this->getSubsGroup($absence),
		'holder'=>$this->getHoldersBy($absence->getEmployee()),
		'url'=>$request->headers->get('referer'),
		'pm'=>"personnel",
		'sm'=>"employee",
        ));
    }
    /**
    * Creates a new Substitution entity for contract.
    */
    public function subscontAction(Request $request,$idcontract,$idabsence)
    {
		$oRepSub = $this->getRepository('BoAdminBundle:Substitution');
		$oRepAgenda = $this->getRepository('BoAdminBundle:Agenda');
		$oRepAbs = $this->getRepository('BoAdminBundle:Absences');
		$oRepTeacher = $this->getRepository('BoAdminBundle:Teachers');
		$oContract = $this->getRepository('BoAdminBundle:Contracts')->find($idcontract);
        $substitution = new Substitution();
		$aTraining=$this->getRepository('BoAdminBundle:Training')->findBy(array('contracts'=>$oContract));
		if(isset($aTraining[0])){
			$substitution = $this->initialize($substitution,$aTraining[0]);
		}
		$aHolders=$this->getHolders($oContract);
		if($oContract) $aTeachers = $oRepTeacher->getAvailable($oContract,$aHolders);
		else $aTeachers = $oRepTeacher->getAllWithout($aHolders);
		$absence = $this->getSessionByName('absence');
		if($absence==null) $absence=$oRepAbs->find($idabsence);
        $form = $this->createForm('Bo\AdminBundle\Form\SubstitutionType2', $substitution);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
			$substitution = $this->myHandleRequest($substitution,$request,$idcontract,null,$absence->getId());
			if($oContract) $substitution->setStudent($this->getStudentBy($oContract));
			$oTsweek = $this->getTsWeek($substitution->getStartdate());
			$substitution->setTsweek($oTsweek);
			if(count($oRepSub->existSubstittution($substitution))==0) $this->updateEntity($substitution);
			else $message = $this->getTypeMessage("Warning",$this->get('translator')->trans('A substitution already exists for this teacher and this date'));		
            if(!isset($message)){
				if($absence) return $this->redirectToRoute('employee_show_absence',array('id'=>$absence->getId()));	
				return $this->redirectToRoute('substitution_index');
			} 
        }
	$aSubsContForm = $this->createSubsContForm($absence);
        return $this->render('employee/newsubstitution.html.twig', array(
            'substitution' => $substitution,
			'contract' => $oContract,
			'absence'=>$absence,
			'idholder' => isset($idholder) and $idholder>0?$idholder:0,
			'idsubstitute' => isset($idsubstitute) and $idsubstitute>0?$idsubstitute:0,
			'teachers'=> $aTeachers,
		'subscont'=> $this->getSubsCont($absence),
		'substitution_form'=>isset($aSubsContForm[$oContract->getId()])?$aSubsContForm[$oContract->getId()]:null,
			'message'=> isset($message)?$message:null,
			'holders'=>$aHolders,
			'holder'=>$this->getHoldersBy($absence->getEmployee()),
            		'form' => $form->createView(),
			'pm'=>"personnel",
			'sm'=>"substitution",
        ));
    }
    /**
    * Creates a new Substitution entity.
    */
    public function subsgroupAction(Request $request, $idgroup,$idabsence)
    {
	$oRepSub = $this->getRepository('BoAdminBundle:Substitution');
	$oRepTeacher = $this->getRepository('BoAdminBundle:Teachers');
	$oRepAgenda = $this->getRepository('BoAdminBundle:Agenda');
	$oRepAbs = $this->getRepository('BoAdminBundle:Absences');
	$oGroup = $this->getRepository('BoAdminBundle:Group')->find($idgroup);
        $substitution = new Substitution();
	$aTraining=$this->getRepository('BoAdminBundle:Training')->findBy(array('idgroup'=>$idgroup));
	if(isset($aTraining[0])){
		$substitution = $this->initialize($substitution,$aTraining[0]);
	}
	$aHolders=$this->getGroupHolderBis($oGroup);
	if($oGroup) $aTeachers = $oRepTeacher->getAvailableForGroup($oGroup,$aHolders);
	else $aTeachers = $oRepTeacher->getAllWithout($aHolders);
	$absence = $this->getSessionByName('absence');
	if($absence==null) $absence=$oRepAbs->find($idabsence);
        $form = $this->createForm('Bo\AdminBundle\Form\SubstitutionType2', $substitution);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
			$substitution = $this->myHandleRequest($substitution,$request,null,$idgroup,$absence->getId());
			if($oGroup) $substitution->setStudent($oGroup->getName());
			$oTsweek = $this->getTsWeek($substitution->getStartdate());
			$substitution->setTsweek($oTsweek);
			if(count($oRepSub->existSubstittution($substitution))==0) $this->updateEntity($substitution);
			else $message = $this->getTypeMessage("Warning",$this->get('translator')->trans('A substitution already exists for this teacher and this date'));		
            if(!isset($message)){
				if($absence) return $this->redirectToRoute('employee_show_absence',array('id'=>$absence->getId()));	
				return $this->redirectToRoute('substitution_index');
			} 
        }
	$aSubsContForm = $this->createSubsGroupForm($absence);
        return $this->render('employee/newsubsgroup.html.twig', array(
            'substitution' => $substitution,
			'group' => $oGroup,
			'absence'=>$absence,
			'idholder' => isset($idholder) and $idholder>0?$idholder:0,
			'idsubstitute' => isset($idsubstitute) and $idsubstitute>0?$idsubstitute:0,
		'substitution_form'=>isset($aSubsContForm[$oGroup->getId()])?$aSubsContForm[$oGroup->getId()]:null,
			'teachers'=> $aTeachers,
			'message'=> isset($message)?$message:null,
			'holders'=>$aHolders,
			'holder'=>$this->getHoldersBy($absence->getEmployee()),
			'subsgroup'=> $this->getSubsgroup($absence),
			'url'=>$request->headers->get('referer'),
            'form' => $form->createView(),
			//'date_form' => $date_form->createView(),
			'pm'=>"personnel",
			'sm'=>"substitution",
        ));
    }
	//handle request with holders, teachers, idabsencefor 
	//id for idcontract or idgroup
	private function myHandleRequest($substitution,$request,$idcontract,$idgroup,$idabsence){
		$oContract = $oGroup = null;
		$idholder = $request->request->get('holders');
		$idsubstitute = $request->request->get('teachers');
		$substitution->setIdholder($idholder);
		$substitution->setIdsubstitute($idsubstitute);
		$substitution->setIdabsence($idabsence);
		if($idcontract!=null){
			$oContract = $this->getContractById($idcontract);
			$substitution->setIdcontract($idcontract);
		}	
		if($idgroup!=null){
			$substitution->setIdgroup($idgroup);
			$oGroup = $this->getGroupById($idgroup);
		}
		$oHolderAgenda = $this->getAgendaByHolder($idholder,$substitution,$oContract,$oGroup);
		if($oHolderAgenda and $oHolderAgenda instanceof Agenda)	$substitution->setAgenda($oHolderAgenda);		
		return $substitution;
	}
	private function getSubsCont($absence){
		$substitutes = array();
		$aContracts = $absence->getContracts();
		$oEmployee = $absence->getEmployee();
		foreach($aContracts as $oContract){
			$substitutes[$oContract->getId()] = $this->getRepository('BoAdminBundle:Teachers')->getAvailable($oContract,$this->getHoldersBy($oEmployee));
		}
		return $substitutes;
	}
	private function getSubsGroup($absence){
		$substitutes = array();
		$aGroup = $absence->getGroup();
		$oEmployee = $absence->getEmployee();
		$aHolder = array($oEmployee);
		foreach($aGroup as $oGroup){
			$substitutes[$oGroup->getId()] = $this->getRepository('BoAdminBundle:Teachers')->getAvailableForGroup($oGroup,$aHolder);
		}
		return $substitutes;
	}
	private function getHoldersBy($oHolder){
		return array($oHolder->getId(),$oHolder->getFirstname()." ".$oHolder->getname()." (".$this->formatCollection($oHolder->getTypecontract()).")"); 
	}
    /**
     * Deletes a Absences entity.
     */
    public function deleteabsenceAction(Request $request, Absences $absence)
    {
		$this->verifySessionRights();
		$employee = $absence->getEmployee();
        $form = $this->createDeleteAbsenceForm($absence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$this->setActivity("Absence id: ".$absence->getId()." is removed by this user for employee >> ".$employee->getName()." ".$employee->getFirstname());
	   $this->removeEntity($absence);
        }
		if($employee) return $this->redirectToRoute('employee_show',array('id'=>$employee->getId()));
        
		return $this->redirectToRoute('absences_index');
    }
    /**
    * Displays a form to edit an existing Absences entity.
    */
    public function editabsenceAction(Request $request, Absences $absence)
    {
		$this->verifySessionRights();
		$employee = $absence->getEmployee();
        	$deleteForm = $this->createDeleteAbsenceForm($absence);
        	$editForm = $this->createForm('Bo\AdminBundle\Form\AbsencesType4', $absence);
        	$editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$this->updateEntity($absence);
			$this->setActivity("Absence id: ".$absence->getId()." is updated by this user for employee >> ".$employee->getName()." ".$employee->getFirstname());
            return $this->redirectToRoute('employee_show',array('id'=>$absence->getEmployee()->getId()));
        }

        return $this->render('employee/editabsence.html.twig', array(
            'absence' => $absence,
			'employee'=>$absence->getEmployee(),
            'absence_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'url'=>$request->headers->get('referer'),
			'pm'=>"personnel",
			'sm'=>"employee",
        ));
    }
    /**
    * Create user.
    */
    public function createuserAction($id)
    {
		$this->verifySessionRights();
        	$oEmployee = $this->getRepository('BoAdminBundle:Employee')->find($id);
		$message=null;
		if($oEmployee){
			$aUser = $this->getRepository('BoUserBundle:User')->findBy(array('employee'=>$oEmployee));
			if(isset($aUser[0])){ 	
				$message = array('type'=>"Warning",'texte'=>"Sorry CLIC-MANAGER can not create this user. It already exists.");
				$this->get('session')->set('message',$message);
				$this->errorReporting("11183","EmployeeController:createuserAction","Sorry CLIC-MANAGER can not create this user. It already exists.");
			}
		}else{
			$message = array('type'=>"Warning",'texte'=>"Sorry CLIC-MANAGER can not create this user. Employee does not exist.");
			$this->get('session')->set('message',$message);
			$this->errorReporting("11183","EmployeeController:createuserAction","Sorry CLIC-MANAGER can not create this user. Employee does not exist.");
		}

		if($message==null){
			$profil = $this->getProfil($oEmployee->getStatus()->getStatusname());
			$option = $profil=="Teacher"?1:0;
			if(!$this->existUserAccount($oEmployee)) $oUser=$this->createUser($option,$oEmployee);
			if(isset($oUser) and $oUser){
				$message = $this->setSessionMessage("Info","CLIC-MANAGER User ".$oEmployee->getFirstname()." ".$oEmployee->getName()." is created successfully.");
				//send login to user
				$this->sendmailTo($oUser);
			}
		}
		return $this->redirectToRoute('employee_show',array('id'=>$id));
    }
    /**
    * Send Mail
    */
    private function sendmailTo($user)
    {
		$email = $user->getEmail();
		$aRoles = $user->getRoles();
		$role = $aRoles[0];
		$aEmail = explode("@",$email);
		$type="Warning";
		if($aEmail[1]=='nomail.cli'){
			$message = "Impossible d'envoyer le compte de l'utilisateur. Son adresse n'est pas conforme.";
		}else{
			if($role=="ROLE_STUDENT"){
				$UserFN = $user->getStudents()->getFirstname();
				$pwd = $user->getStudents()->getPwd();
			}elseif($role=="ROLE_COORDINATOR"){
				$oCoordinator = $this->getInfoCoordinator($user);
				$UserFN = $oCoordinator->getName();
				$pwd = $oCoordinator->getPwd();
			}else{
				$UserFN = $user->getEmployee()->getFirstname();
				$pwd = $user->getEmployee()->getPwd();				
			} 		
			$subject = 'Vos identifiants SLSM';
			$body = '<p><b>Bonjour '.$UserFN.'</b>,</p><br/>';
			$body .= "<p>Votre nom utilisateur et votre mot de passe pour vous connecter à l'application <b>SLS Manager</b> sont  les suivants :</p><br/>";
			$body .= "<p><b>URL </b> : <a href='www.slsmpro.com'>www.slsmpro.com</a><br/>";
			$body .= '<p><b>Nom utilusateur</b> : '.$user->getUsername().'<br/>';
			$body .= '<b>Mot de passe</b> : '.$pwd.'</p><br/>';
			$body .= 'Cordialement, '.'<br/><br/>';
			$body .= 'Slsmanager pour Clic'.'<br/>';
			$res = $this->sendmail($email,$subject,$body);
			if($res==0){
				$message = $this->getFormatMessage('Warning',"Impossible to send this user's login.");
				$this->setActivity("Impossible to send login to ".$UserFN);
			}else{
				$this->sendmail("jmnvekounou@gmail.com","Login of ".$UserFN,"Login sent to ".$email." of the user ".$UserFN);
				$message = $this->getFormatMessage('Info',"Login of user is sent succefully.");
				$this->setActivity("Login of user is sent succefully to ".$UserFN);
			} 
		}
		$this->get('session')->set('message',$message);
		return;

    }
	private function getEntityProfil($status){
		$entity = $this->getRepository('BoAdminBundle:Profil');
		$profil = $this->getProfil($status);
		$aProfil = $entity->findByName($profil);
		if(isset($aProfil[0])) return $aProfil[0];
		return $entity->find(10);
	}
    /**
    * Displays a form to edit an existing Employee entity.
    */
    public function editAction(Request $request, Employee $employee)
    {
	$this->verifySessionRights();
        $deleteForm = $this->createDeleteForm($employee);
	if($this->getUserProfile()=="Superadmin" or $this->getUserProfile()=="Executive" or $this->getUserProfile()=="Payroll") $editForm = $this->createForm('Bo\AdminBundle\Form\EmployeeEditType', $employee);
	else $editForm = $this->createForm('Bo\AdminBundle\Form\EmployeeType', $employee);
        $editForm->handleRequest($request);
        if($editForm->isSubmitted() && $editForm->isValid()){
			//Updating the role of employee
			$oldEmployee = $this->getSessionWithoutRemove('employee');
			if($oldEmployee!=null and $oldEmployee->getStatus()->getStatusname()=="Teacher" and $oldEmployee->getStatus()!=$employee->getStatus()) $this->updateRole($employee);				
			$this->updateUserAccount($employee);
			//Updating availabily of th employee
			$employee=$this->updateAvailabily($employee);
			$res = $this->updateEntity($employee);
			if($res>0){
				$this->updateAdvisor($employee);
				$this->setActivity($employee->getName()." ".$employee->getFirstname()." is modified by this user");
				return $this->redirect($this->getSessionByName('url'));				
			}
        }
	if($this->get('session')->get('employee')==null) $this->setSessionByName('employee',$employee);
	if($this->get('session')->get('url')==null) $this->get('session')->set('url',$request->headers->get('referer'));
	//$this->setSessionByName('employee',$employee);
        return $this->render('employee/edit.html.twig', array(
            	'employee' => $employee,
            	'form' => $editForm->createView(),
            	'delete_form' => $deleteForm->createView(),
		'profile'=>$this->getUserProfile(),
		'pm'=>"personnel",
		'sm'=>"employee",
		'url'=>$request->headers->get('referer'),
        ));
    }
	private function updateRole($employee){
		//Get user if it exist or create it
		$aUser = $this->getRepository('BoUserBundle:User')->findBy(array('employee'=>$employee));
		$oUser = count($aUser)==0?$this->createUser($profil,$oEntity):$aUser[0];
		//echo $oUser->getId()."<br>";
		//Get his role
		$aRoles = $oUser->getRoles();
		if($aRoles[0]=="ROLE_TEACHER"){
			//echo $employee->getProfil()->getName()."<br>";
			if($employee->getProfil()->getName()=="Teacher") $employee = $this->updatePAProfile($employee);
			$oUser->removeRole("ROLE_TEACHER");
			$oUser->addRole("ROLE_ADMIN");
			return $this->updateEntity($oUser);
		}
		return true;
	}
	private function updatePAProfile($employee){
		$aPaProfile = $this->getRepository('BoAdminBundle:Profil')->findBy(array('name'=>"PA"));
		if(count($aPaProfile)==1 and $oProfile=$aPaProfile[0]){
			$employee->setProfil($oProfile);
		}		
		return $employee;
	}
	private function updateAvailabily($employee){
		if($employee->getActive()==false and $employee->getAvailable()==true){
			$employee->setAvailable(false);
			$this->updateEnabled($employee,false);
		}
		return $employee;
	}
    /**
    * Deletes a Employee entity.
    */
    public function deleteAction(Request $request, Employee $employee)
    {
		$this->verifySessionRights();
		$oSaveemployee = $employee;
		$user=$this->getTokenUser();
		$oDeletedBy=$user?$user->getEmployee():null;
        $form = $this->createDeleteForm($employee);
        $form->handleRequest($request);
		$emp_name = $employee->getName()." ".$employee->getFirstname();

        if ($form->isSubmitted() && $form->isValid()) {
		
			$aTeacher = $this->getRepository('BoAdminBundle:Teachers')->findBy(array('employee'=>$employee));
			if(isset($aTeacher[0])){
				$res = $this->removeEntity($aTeacher[0]);
			}
			$aSecurityCote = $this->getRepository('BoAdminBundle:SecurityCote')->findBy(array('employee'=>$employee));
			if(isset($aSecurityCote[0])){
				$res = $this->removeEntity($aSecurityCote[0]);
			}
			$aAdvisor = $this->getRepository('BoAdminBundle:Advisors')->findBy(array('advisor'=>$employee));	
			if(isset($aAdvisor[0]) and $oAdvisor=$aAdvisor[0]){
				$res = $this->removeEntity($oAdvisor);
			}
			$aContracts = $this->getRepository('BoAdminBundle:Contracts')->findBy(array('advisor'=>$employee));
			if(isset($aContracts[0])){
				$bDelete = 1;
			}
			$aAbsence = $this->getRepository('BoAdminBundle:Absences')->findBy(array('employee'=>$employee));
			if(isset($aAbsence[0])){
				$bDelete = 1;
			}
			$aGroups = $this->getRepository('BoAdminBundle:Group')->findBy(array('advisor'=>$employee));
			if(isset($aGroups[0])){
				$bDelete = 1;
			}
			$aHistoStudent = $this->getRepository('BoAdminBundle:HistoStudents')->findBy(array('updatedby'=>$employee));
			if(isset($aHistoStudent[0])){				
				$res = $this->removeArrayEntity($aHistoStudent);
			}
			$aTeamContract = $this->getRepository('BoAdminBundle:TeamContacts')->findBy(array('employee'=>$employee));	
			if(isset($aTeamContract[0]) and $oTeamContract=$aTeamContract[0]){
				$res = $this->removeEntity($oTeamContract);
			}	
			$aModelTs = $this->getRepository('BoAdminBundle:ModelTs')->findBy(array('employee'=>$employee));	
			foreach($aModelTs as $oModelTs){
				$res = $this->removeEntity($oModelTs);
			}
			$aTickets = $this->getRepository('BoAdminBundle:Tickets')->findBy(array('employee'=>$employee));	
			foreach($aTickets as $oTickets){
				$res = $this->removeEntity($oTickets);
			}					
			$aUser = $this->getRepository('BoUserBundle:User')->findBy(array('employee'=>$employee));
			if(isset($aUser[0])){
				$res = $this->removeEntity($aUser[0]);
			}
			$employee->setActive(0);
			$employee->setAvailable(0);
			$employee->setRemove(1);
			$this->updateEntity($employee);
			if(isset($res) and $res==false){	
				$this->getRepository('BoAdminBundle:SupEmployee')->recordDeleteHistoric($oSaveemployee,$oDeletedBy);
				$this->createActivity("Employee",$emp_name." is deleted by user ");
			} 
        }

        return $this->redirectToRoute('employee_index');
    }

    /**
     * Creates a form to delete a Employee entity.
     * @param Employee $employee The Employee entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Employee $employee)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('employee_delete', array('id' => $employee->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /**
     * Creates a form to delete a Absences entity.
     * @param Absences $absence The Absences entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteAbsenceForm(Absences $absence)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('employee_delete_absence', array('id' => $absence->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /**
     * Search a employee.
     */
    public function searchAction(Request $request)
    {
		$this->verifySessionRights();
		$oEntity = $this->getRepository('BoAdminBundle:Employee');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$this->get('session')->set('search',$description);
		$aResult = $oEntity ->search($description);
		$this->setActivity($description." searched by this user");
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:Employee:search.html.twig', array(
				'employees'=>$aResult,
				'contracts'=>$this->getEmployeeContracts($aResult),
				'now'=>new \DateTime(date("d-m-Y")),
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Employee:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * return to the previous search
    */
    public function backAction(Request $request)
    {
		$this->verifySessionRights();
		$oEntity = $this->getRepository('BoAdminBundle:Employee');	
		$description = $this->get('session')->get('search');
		$wcont = $this->get('session')->get('wcont');
		if($wcont==1) return $this->redirect($this->generateUrl('employee_active'));
		$aResult = $oEntity ->search($description);
		if(!isset($aResult[0])) return $this->redirect($this->generateUrl('employee_list'));	
		else{
			return $this->render('employee/back.html.twig', array(
				'employees'=>$aResult,
				'contracts'=>$this->getEmployeeContracts($aResult),
				'count'=>count($aResult),
				'description'=>$description,
				'now'=>new \DateTime(date("d-m-Y")),
				'pm'=>"personnel",
				'sm'=>"employee",
			));				
		}
    }
    /**
    * Show right pane for a employee.
	* Ajax request
    */
    public function rightshowAction(Request $request)
    {
		$oRep = $this->getRepository('BoAdminBundle:Employee');	
		if($request->isXmlHttpRequest())
		{	
			$idemployee = $request->request->get('idemployee');
		}	
		$employee = $oRep->find($idemployee);
		return $this->render('BoAdminBundle:Employee:rightshow.html.twig', array(
			'employee' => $employee,
		));
    }
    /**
    * Creates a new SecurityCote entity.
    */
    public function securitycoteAction(Request $request,$idemployee)
    {
	$this->verifySessionRights();
        $oRepEmp = $this->getRepository('BoAdminBundle:Employee');
	$oEmployee = $oRepEmp->find($idemployee);
        $securityCote = new SecurityCote();
        $form = $this->createForm('Bo\AdminBundle\Form\SecurityCoteType2', $securityCote);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$securityCote->setCreateby($this->getConnected());
			$securityCote->setEmployee($oEmployee);
            $this->updateEntity($securityCote);
			$this->setActivity("Security Cote of ".$securityCote->getEmployee()->getFirstname()." ".$securityCote->getEmployee()->getName()." is created by this user");
            return $this->redirectToRoute('employee_show',array('id'=>$idemployee));
        }

        return $this->render('employee/securitycote.html.twig', array(
            'securityCote' => $securityCote,
			'employee' => $oEmployee,
            'form' => $form->createView(),
			'pm'=>"personnel",
			'sm'=>"employee",
        ));
    }
    /**
    * Displays a form to edit an existing SecurityCote entity.
    */
    public function editsecuritycoteAction(Request $request, SecurityCote $securityCote)
    {
	$this->verifySessionRights();
        $deleteForm = $this->createSecuritycoteDeleteForm($securityCote);
        $editForm = $this->createForm('Bo\AdminBundle\Form\SecurityCoteType', $securityCote);
        $editForm->handleRequest($request);
		$oEmployee=$securityCote->getEmployee();

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->updateEntity($securityCote);
			$this->setActivity("Security Cote of ".$securityCote->getEmployee()->getFirstname()." ".$securityCote->getEmployee()->getName()." is modified by this user");
            return $this->redirectToRoute('employee_show', array('id'=>$oEmployee->getId()));
        }
		
		if($this->get('session')->get('url')==null) $this->get('session')->set('url',$request->headers->get('referer'));
        return $this->render('employee/editsecuritycote.html.twig', array(
            'securityCote' => $securityCote,
			'employee'=>$oEmployee,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"personnel",
			'sm'=>"employee",
        ));
    }
    /**
     * Deletes a SecurityCote entity.
     */
    public function securitycotedeleteAction(Request $request, SecurityCote $securityCote)
    {
		$this->verifySessionRights();
        $form = $this->createSecuritycoteDeleteForm($securityCote);
        $form->handleRequest($request);
		$oEmployee = $securityCote->getEmployee();
        if ($form->isSubmitted() && $form->isValid()) {
		$this->setActivity("Security Cote of ".$securityCote->getEmployee()->getFirstname()." ".$securityCote->getEmployee()->getName()." is removed by this user");
            $this->removeEntity($securityCote);
        }
		if($oEmployee){
			return $this->redirectToRoute('employee_show', array('id'=>$oEmployee->getId()));
		}else{
			return $this->redirectToRoute('securitycote_index');
		}
    }

    private function createSecuritycoteDeleteForm(SecurityCote $securityCote)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('employee_securitycote_delete', array('id' => $securityCote->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
		$this->verifySessionRights();
        $employees = $this->getRepository('BoAdminBundle:Employee')->findAll();
		$nb_tc = count($employees);
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('motcle');
		}
		//$page = 5;
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $this->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aEmployee = $this->getRepository('BoAdminBundle:Employee')->findBy(array('active'=>1),array('firstname' => 'asc'),$nb_cpp,$offset);

        return $this->render('BoAdminBundle:Employee:pagesearch.html.twig', array(
            	'employees' => $aEmployee,
		'contracts'=>$this->getEmployeeContracts($aEmployee),
		'now'=>new \DateTime(date("d-m-Y")),
		'page' => $page, // transmfer the page number to the view,
        ));
    }
    public function extrasearchAction(Request $request)
    {
		if($request->isXmlHttpRequest())
		{	
			$data = $request->request->get('data');	
			$this->setSessionByName('data',$data);
			$aData = explode(":",$data);
		}
		//print_r($aData);
		//exit(0);
		//$aData = Array ( '0' => "0", '1' => "0", '2' => "0", '3' => "1", '4' => "1", '5' => "1" ); 
		$idtype = $aData[0];
		$idlanguage = $aData[1];
		$idsexe = $aData[2];
		$idstatus = $aData[3];
		$idavailability = $aData[4];
		$idoption = $aData[5];
		$oRep = $this->getRepository('BoAdminBundle:Employee');
		$aEmployee = $oRep->getDataPeriod($idtype,$idlanguage,$idsexe,$idstatus,$idavailability,$idoption);
		//echo count($aEmployee);
		//exit(0);
        	return $this->render('BoAdminBundle:Employee:search.html.twig', array(
            		'employees' => $aEmployee,
			'contracts'=>$this->getEmployeeContracts($aEmployee),
			'count'=>count($aEmployee),
			'now'=>new \DateTime(date("d-m-Y")),
		));
    }
	public function xlsAction(Request $request){
		$this->verifySessionRights();		
		$oRep = $this->getRepository('BoAdminBundle:Employee');
		$idtype = $request->request->get('idtype');	
		$idstatus = $request->request->get('idstatus');	
		$idlanguage = $request->request->get('idlangage');	
		$idsexe = $request->request->get('idsexe');
		$idoption = $request->request->get('idoption');		
		$idavailability = $request->request->get('idavailability');
		$aEmployee = $oRep->getExtractData($idtype,$idlanguage,$idsexe,$idstatus,$idavailability,$idoption);	
		$oFactory=new Factory("employee");
		return $oFactory->newXLS($this->getExtractLabel(),$aEmployee);			
	}
	public function sendloginAction(Request $request){
		$aEmployees = $this->getRestOfEmployee($request);
		return $this->render('employee/sendlogin.html.twig', array(
		    	'employees' => $aEmployees,
			'types'=>$this->getRepository('BoAdminBundle:Contracts')->getContractType(),
			'strids'=>$this->getStringIds($aEmployees),
			'now'=>new \DateTime(date("d-m-Y")),
			'message'=> $this->getSessionMessage(),
			'pm'=>"personnel",
			'sm'=>"employee",
		));		
	}
	public function sendlogintwoAction(Employee $oEmployee){
		$oUser = $this->getUserByEmployee($oEmployee);
		if($oUser){
			$res = $this->sendmailTo($oUser);
		}
		return $this->redirectToRoute('employee_show',array('id'=>$oEmployee->getId()));	
	}
	public function sendmailAction(Request $request){
       		$oRepEmp = $this->getRepository('BoAdminBundle:Employee');
       		$oRepUser = $this->getRepository('BoUserBundle:User');
		$strids = $request->request->get('strids');
		$aIds = $this->getIdsRequested($request,$strids);
		foreach($aIds as $id){
			$oEmployee = $oRepEmp->find($id);
			if($oEmployee){
				$aUser = $oRepUser->findBy(array('employee'=>$oEmployee));
				if(isset($aUser[0]) and $oUser=$aUser[0]){
					$res = $this->sendLoginMail($oUser);
					if($res==0){
						$aRes[] = $id;
						$res = $this->createLoginsent($oEmployee);
					}
				}
			} 
		}
		if(isset($aRes[0])) $this->setSessionMessage("Info","The User logins are sent successfully for those employee id:".join(',',$aRes));
		return $this->redirectToRoute('employee_send_login');				
	}
	private function getIdsRequested($request,$strids){
		$aResult=array();
		$aStriIds = explode(',',$strids);
		foreach($aStriIds as $id){
			$var="chk_".$id;
			$chk = $request->request->get($var);
			if($chk and $chk>0){
				$aResult[]=$chk;
			} 
		}
		return $aResult;	
	}
    /**
     * Finds and send a User account by mail.
     */
    public function sendLoginMail(User $user)
    {
		$email = $user->getEmail();
		$aRoles = $user->getRoles();
		$role = $aRoles[0];
		$aEmail = explode("@",$email);
		$type="Warning";
		if($aEmail[1]=='nomail.cli'){
			$message = "Impossible d'envoyer le compte de l'utilisateur. Son adresse n'est pas conforme.";
		}else{
			if($role=="ROLE_STUDENT"){
				$UserFN = $user->getStudents()->getFirstname();
				$pwd = $user->getStudents()->getPwd();
			}elseif($role=="ROLE_COORDINATOR"){
				$oCoordinator = $this->getInfoCoordinator($user);
				$UserFN = $oCoordinator->getName();
				$pwd = $oCoordinator->getPwd();
			}else{
				$UserFN = $user->getEmployee()->getFirstname();
				$pwd = $user->getEmployee()->getPwd();				
			} 		
			$subject = 'Vos identifiants SLSM';
			$body = '<p><b>Bonjour '.$UserFN.'</b>,</p><br/>';
			$body .= "<p>Votre nom utilisateur et votre mot de passe pour vous connecter à l'application <b>SLS Manager</b> sont  les suivants :</p><br/>";
			$body .= "<p><b>URL </b> : <a href='www.slsmpro.com'>www.slsmpro.com</a><br/>";
			$body .= '<p><b>Nom utilusateur</b> : '.$user->getUsername().'<br/>';
			$body .= '<b>Mot de passe</b> : '.$pwd.'</p><br/>';
			$body .= 'Cordialement, '.'<br/><br/>';
			$body .= 'Slsmanager pour Clic'.'<br/>';
			return $this->sendmail($email,$subject,$body);
		}
		return null;
    }
	private function getExtractLabel(){
		return array('sexe'=>"Sexe",'name'=>"Name",'firstname'=>"Firstname",'email'=>"Email",'homenumber'=>"Home number",'cellnumber'=>"Cell number",'address1'=>"Address 1",'address2'=>"Address 2",'birthdate'=>"Birth date",'status'=>"Status",'hiringdate'=>"Hiring date",'langage'=>"Language");		
	}
	private function setActivity($activity){
		return $this->createActivity("Employee",$activity);	
	}
	private function getProfil($status){
		if($status=="Teacher" or $status=="Executive") return $status;
		if($status=="Administrative") return "Admin";
		if($status=="Pedagogical Advisor") return "PA";
		if($status=="Assistant Pedagogical Director") return "APD";
		if($status=="Pedagogical Director") return "PD";
		return "Other";
	}
	private function existUserAccount($employee){
		$aUser = $this->getRepository('BoUserBundle:User')->findBy(array('employee'=>$employee));
		if(count($aUser)>0) $rmsg = $this->setSessionMessage('Warning','unable to create a login for this employee. This account already exist.');
		$aUser = $this->getRepository('BoUserBundle:User')->findBy(array('email'=>$employee->getEmail()));
		if(count($aUser)>0) $rmsg = $this->setSessionMessage('Warning','unable to create a login for this employee. This email already exist.');
		if(isset($rmsg)) return true;
		return false;
	}
	private function existEmployee($employee){
		$rmsg=false;
		$aEmployee = $this->getRepository('BoAdminBundle:Employee')->findBy(array('email'=>$employee->getEmail()));
		if(count($aEmployee)>0) $rmsg = array('type'=>'Warning','texte'=>$this->get('translator')->trans('unable to create a login for this employee. This account already exist'));
		return $rmsg;
	}
	private function setDefaultTypeContract(){
        $oEmployee = new Employee();
        $oRepTC = $this->getRepository('BoAdminBundle:Typecontract');
		$aPrivate = $oRepTC->findByReference("Private");
		if(isset($aPrivate[0])) $oEmployee->addTypecontract($aPrivate[0]);
		$aNONMSO = $oRepTC->findByReference("Non-NMSO");
		if(isset($aNONMSO[0])) $oEmployee->addTypecontract($aNONMSO[0]);
		return $oEmployee;
	}
    /**
    * Creates a new Employee entity.
    */
	private function createAdvisor($employee){
		$oAdvisor = $this->getAdvisorObject($employee);
		if($oAdvisor!=false) return false;
		$oAdvisor = new Advisors();
		$oAdvisor->setAdvisor($employee);
		$oAdvisor->setName($employee->getName());
		$oAdvisor->setFirstname($employee->getFirstname());
		return $this->updateEntity($oAdvisor);
	}
	private function getAdvisorObject($employee){
		//verify if this advisor exists
		$aAdvisor = $this->getRepository('BoAdminBundle:Advisors')->findBy(array('advisor'=>$employee));
		if(isset($aAdvisor[0])) return $aAdvisor[0];
		return false;		
	}
	private function updateAdvisor($employee){
		//if status of employee is pedagogical advisor or assistant pedagogical director or director
		if($employee->getStatus() and ($employee->getStatus()->getId()==3 or $employee->getStatus()->getId()==5 or $employee->getStatus()->getId()==6)){
			return $this->createAdvisor($employee);
		}elseif($oAdvisor = $this->getAdvisorObject($employee) and $oAdvisor!=false){
			return $this->removeEntity($oAdvisor);
		}
		return false;
	}
	public function updateAction(){
        $oRepEmp = $this->getRepository('BoAdminBundle:Employee');
		$employees = $oRepEmp->findBy(array('active'=>true,'available'=>true));
		$time1 = time();
		foreach($employees as $employee){
			$aTeacherSchedule = $this->getRepository('BoAdminBundle:Agenda')->findBy(array('employee'=>$employee));
			if(isset($aTeacherSchedule[0])){
				foreach($aTeacherSchedule as $oTsh){
					$aHour = explode(":",$oTsh->getHourperday());
					if(count($aHour)>1){
						$oTsh->setHourperday($this->getRealTime($oTsh->getHourperday()));
						$this->updateEntity($oTsh);
						//echo $oTsh->getId()."<br>";
					} 
					$hourperday = $this->getNumberHour($oTsh);
					$hourperday=$this->getRealTime($hourperday);
					$idcontract = $oTsh->getIdcontracts();
					$oContract = $this->getRepository('BoAdminBundle:Contracts')->find($idcontract);
					if($oContract and $oContract->getTypecontract() and $oContract->getTypecontract()->getReference()=="NMSO"){
						if($hourperday>=7) $hourperday = $hourperday-0.5;
						else $hourperday = $hourperday-0.25;
					}
					if($oTsh->getHourperday()!=$hourperday){
						//echo $oTsh->getHourperday()."-".$hourperday."<br>";
						$oTsh->setHourperday($hourperday);
						$this->updateEntity($oTsh);						
					}
				}
			}
		}
		$time2 = time();
		echo "executed in ".($time2-$time1)." secondes";
		exit(0);
	}
	private function existType($oEmployee,$oTypeCon){
		$aType = $oEmployee->getTypecontract();
		foreach($aType as $oType){
			if($oType==$oTypeCon) return true;
		}
		return false;
	}
	    /**
	    * Finds and displays a agenda and invitation entity.
	    */
	    public function showinviteAction(Agenda $agenda)
	    {
		$employee = $agenda->getEmployee();

		return $this->render('employee/invitation.html.twig', array(
			'employee' => $employee,
			'agenda' => $agenda,
			'user'=>$this->getUserByEmployee($employee),
			'pm'=>"personnel",
			'sm'=>"employee",
		));
	    }
	/**
	* Record in database data of sending of teacher's login 
	*/
	private function createLoginsent($oEmployee){
		$oEmployee->setLoginsentdate(new \DateTime());
		$oEmployee->setLoginsentby($this->getConnected());
		return $this->updateEntity($oEmployee);
	}
	/**
	* return the rest of teachear 
	*/	
	private function getRestOfEmployee($request){
		$aResult = array();
       		$oRep = $this->getRepository('BoAdminBundle:Employee');
		$idstatus = $request->request->get('idstatus');
		$aEmployees = $oRep->getByIdStatus($idstatus);
		foreach($aEmployees as $oEmployee){
			if($oEmployee->getLoginsentdate()==null){
				$aResult[] = $oEmployee;
			}
		}
		return $aResult;
	}
	private function createScheduleFormView(){
		$oAgenda = $this->initSchedule();
        	$asc_form = $this->createForm('Bo\AdminBundle\Form\AgendaType2', $oAgenda);
		return $asc_form->createView();
	}
	//Get list of number of absence line to display and let user choose the one he would
	private function getAbsListOption($employee){
		$aResult = array();
		$aBase = array(5,10,15,20);
		$aAbsence = $this->getEmployeeAbsences($employee);
		foreach($aBase as $number){
			if($number<count($aAbsence)){
				$aResult[] = $number;

			}
		}
		return $aResult;
	}
}

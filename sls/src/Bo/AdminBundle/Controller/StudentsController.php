<?php
/* 
* Date Création: 07/03/2016
* Auteur: N'VEKOUNOU Moise José
* Nom file: EmployeeController.php
* Description: Employee controller
* Historique Modification
* 07-11-2017: Get teacherschedule by agenda
*/
namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Entity\Students;
use Bo\AdminBundle\Form\StudentsType;
use Bo\AdminBundle\Entity\TsStudent;
use Bo\AdminBundle\Entity\TsValidation;
use Bo\AdminBundle\Entity\Batch;
use Bo\AdminBundle\Form\BatchType;
use Bo\AdminBundle\Entity\Absences;
use Bo\AdminBundle\Form\AbsencesType;
use Bo\AdminBundle\Entity\Evaluation;
use Bo\AdminBundle\Form\EvaluationType;
/**
* Students controller.
*/
class StudentsController extends CommonController
{
    /**
    * Index Students
    */
    public function indexAction()
    {	
		$this->removeSession();	
		return $this->redirect($this->generateUrl('students_list'));		
    }
    /**
    * Lists all Students entities.
    */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $students = $em->getRepository('BoAdminBundle:Students')->findAll();
	$nb_tc = count($students);
	//get page
	$page = $this->get('session')->get('page');
	if($page==null) $page=1;
	//get number line per page
	$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
	$nb_pages = ceil($nb_tc/$nb_cpp);
	$offset = $page>0?($page-1) * $nb_cpp:0;
	$students = $em->getRepository('BoAdminBundle:Students')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
	return $this->render('students/index.html.twig', array(
		'students' => $students,
		'now'=>new \DateTime(),
		'page' => $page, // On transmet à la vue la page courante,
		'nb_pages' => $nb_pages, //le nombre total de pages,
		'total'=>$nb_tc, // Et le nombre total d'enregistrement.
		'nb_cpp'=>$nb_cpp,
		'pm'=>"contracts",
		'sm'=>"students",
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
		return $this->redirect($this->generateUrl('students_list'));			
    }
    /**
    * Lists of teacher available after absence of student
    */
    public function teacheravailableAction()
    {
        $em = $this->getDoctrine()->getManager();
	$oTokenuser=$this->getTokenUser();
	$this->setActivity("List view");
        $oRepAbs = $em->getRepository('BoAdminBundle:Absences');
	$absences = $oRepAbs->getStudentsDayAbsence();
	$aTAvailability = $this->getAvailableTeachers($absences);

        return $this->render('students/teacheravailable.html.twig', array(
            	'absences' => $absences,
		'students'=> isset($aTAvailability[2])?$aTAvailability[2]:null,
		'employees'=> isset($aTAvailability[0])?$aTAvailability[0]:null,
		'availability'=> isset($aTAvailability[1])?$aTAvailability[1]:null,
		'now'=>new \DateTime(),
		'pm'=>"contracts",
		'sm'=>"absences",
        ));
    }
    /**
    * Creates a new Students entity.
    */
    public function newAction(Request $request)
    {
	$message=null;
        $student = new Students();
        $form = $this->createForm('Bo\AdminBundle\Form\StudentsType', $student);
        $form->handleRequest($request);
		
        if ($form->isSubmitted() && $form->isValid()) {
			$student->setPwd($this->getPassword());
			$student->setCreateby($this->getConnected());
			$res=$this->updateEntity($student);
			if($res!=null){
				$this->setActivity("The student: ".$this->getFullNameOf($student)." is Created");
				if($student->getEmail()!=null) $this->createUser(2,$student);
			}
			return $this->redirectToRoute('students_index');				
        }

        return $this->render('students/new.html.twig', array(
            'student' => $student,
			'message'=>array('type'=>"Warning",'texte'=>$message),
            'form' => $form->createView(),
			'pm'=>"contracts",
			'sm'=>"students",
        ));
    }
    /**
    * Finds and displays a Students entity.
    */
    public function showAction(Students $student)
    {
		$aTeachers=$aTeacherSchedule=$aLocal=$aAgenda=array();
		$oContract=$oGroup=null;
		$offset = $this->get("session")->get("offset");
		if($offset==null or $offset==0) $offset = 5;
		$oTokenuser=$this->getTokenUser();
		$em = $this->getDoctrine()->getManager();
		$oRepContract = $em->getRepository('BoAdminBundle:Contracts');
		$oRepAgenda = $em->getRepository('BoAdminBundle:Agenda');
        	$deleteForm = $this->createDeleteForm($student);
		$aUser = $em->getRepository('BoUserBundle:User')->findBy(array('students'=>$student));
		$oGroup = $this->getStudentGroup($student);
		$timesheets = $em->getRepository('BoAdminBundle:Timesheet')->getStudentTs($student,1);	
        	$oRepEval = $em->getRepository('BoAdminBundle:Evaluation');
		$evaluations = $oRepEval->findBy(array('students'=>$student),array('id' => 'desc'));
		$oContract = $this->getCurrentStudentContract($student);
		if($oContract){
			$aLocal = $oContract->getLocal();
			//$aTeachers = $oContract->getEmployee();
			if($oGroup!=null){
				$aAgenda = $this->getActiveByGroup($oGroup);
			}elseif($oContract!=null){
				$aAgenda = $this->getActiveByContract($oContract);
			}
			if(count($aAgenda)>0){
				$aTeacherSchedule = $oRepAgenda->getAgendaDesc($aAgenda);
				$aTeachers = $oRepAgenda->getTeacherBy($aAgenda);
			}
		}
		return $this->render('students/show.html.twig', array(
		   	'student' => $student,
			'timesheets'=>$timesheets,
			'evaluations'=>$evaluations,
			'offset'=>$offset,
			'group'=>$oGroup,
			'dispabsbtn'=>$this->displayAbsenceButton($student),//for displaying absence button
			'user' => $aUser,//student user information
			'token'=>$oTokenuser,//User connected informations
			'contract'=>$oContract,//current contract
			'status'=>$this->getContractStatus(),//get status definition list
			'teachers'=>$aTeachers,// for the list of teachers
			'teacherschedule'=>$aTeacherSchedule,//Teachers schedules
			'locals'=>$aLocal,// for the list of locals
			'coordinator'=>$oContract?$oContract->getCoordinator():null,
			'contracts' =>$student->getContracts(),
			'absence_form' => $this->createAbsFormView($student),
			'absences'=>$em->getRepository('BoAdminBundle:Absences')->getByStudents($student,$offset),
			'allabsences'=>$em->getRepository('BoAdminBundle:Absences')->getByStudents($student),
		    	'delete_form' => $deleteForm->createView(),
			'pm'=>"contracts",
			'sm'=>"students",
		));
    	}
	private function createAbsFormView($oStudent){
		$oRep = $this->getRepository("BoAdminBundle:Agenda");
		$oAbsence = new Absences();
		$aSchedule = $oRep->getScheduleByContract($oStudent,$this->getToday());
		if(count($aSchedule)>0){
			$AM = $this->getScheduleByDay($aSchedule,$this->getToday(),1);
			$PM = $this->getScheduleByDay($aSchedule,$this->getToday(),2);
			if(count($AM)==1 and $oSchedule=$AM[0]){
				$oAbsence->setStartam($oSchedule->getStartam());
				$oAbsence->setEndam($oSchedule->getEndam());
			}
			if(count($PM)==1 and $oSchedule=$PM[0]){
				$oAbsence->setStartpm($oSchedule->getStartpm());
				$oAbsence->setEndpm($oSchedule->getEndpm());
			}
		}
		$oAbsence->setNumberday(1);
		$absence_form = $this->createForm('Bo\AdminBundle\Form\AbsencesType3', $oAbsence);
		return $absence_form->createView();
	}
    /**
    * Get offset for displaying absences and redirect route to show_student
    */
    public function listabsenceAction(Students $student,$offset)
    {
	$this->setSessionByName('offset',$offset);
	return $this->redirectToRoute('students_show',array('id'=>$student->getId()));
    }
    /**
     * Displays a form to edit an existing Students entity.
     */
    public function editAction(Request $request, Students $student)
    {
        $editForm = $this->createForm('Bo\AdminBundle\Form\StudentsType', $student);
        $editForm->handleRequest($request);
	$message=null;
        if ($editForm->isSubmitted() && $editForm->isValid()) {
		$res=$this->updateEntity($student);
		if($res!=null){
			$this->setActivity("The student: ".$this->getFullNameOf($student)." is updated");
			//If student email is not null and is not user of the system then create an account for him
			if($student->getEmail()!=null and $this->isUser($student)==false) $this->createUser(2,$student);
		}
		return $this->redirectToRoute('students_index');				
        }
        return $this->render('students/edit.html.twig', array(
            	'student' => $student,
		'message'=>array('type'=>"Warning",'texte'=>$message),
            	'edit_form' => $editForm->createView(),
			'pm'=>"contracts",
			'sm'=>"students",
        ));
    }
    /**
    * Finds and displays a Evaluation entity.
    */
    public function evaluationAction(Evaluation $evaluation, $idstudent)
    {
	$em = $this->getDoctrine()->getManager();
	$student = $em->getRepository('BoAdminBundle:Students')->find($idstudent);
		
        return $this->render('students/evaluation.html.twig', array(
            'evaluation' => $evaluation,
			'student'=>$student,
			'resdisp'=>$this->getParam("evaluation_result_display",24),
			'pm'=>"contracts",
			'sm'=>"students",
        ));
    }
    /**
    * Lists all absences entities.
    */
    public function absencesAction()
    {	
		$oTokenuser=$this->getTokenUser();
		$this->setActivity("List view");
        	$em = $this->getDoctrine()->getManager();
        	$oRepAbs = $em->getRepository('BoAdminBundle:Absences');
		$nb_tc = $oRepAbs->getStudentsTotal();
		//get page
		$page = $this->get('session')->get('page');
		if($page==null){
			$page=1;
			$this->get('session')->set('page',1);
		}
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$absences = $oRepAbs->findBy(array('employee'=>null),array('id' => 'desc'),$nb_cpp,$offset);
		return $this->render('students/allabsence.html.twig', array(
		    	'absences' => $absences,
			'page' => $page, // forward current page to view,
			'message'=> $this->getSessionMessage(),
			'absence_form' => $this->createStudAbsForm(),
			'nb_pages' => $nb_pages, //total number page,
			'total'=>$nb_tc, // record number.
			'nb_cpp' => $nb_cpp,// line's number to display
			'pm'=>"contracts",
			'sm'=>"absences",
		));
    } 
    /**
    * Lists all absences of current day
    */
    public function dayabsencesAction()
    {
		$oTokenuser=$this->getTokenUser();
		$this->setActivity("List view");
        	$em = $this->getDoctrine()->getManager();
        	$oRepAbs = $em->getRepository('BoAdminBundle:Absences');
		$absences = $oRepAbs->getStudentsDayAbsence();

        	return $this->render('students/dayabsence.html.twig', array(
            		'absences' => $absences,
			'absence_form' => $this->createStudAbsForm(),
			'total'=> count($absences),
			'now'=>new \DateTime(),
			'pm'=>"contracts",
			'sm'=>"absences",
       	 	));
    }
	private function createStudAbsForm(){
		$oAbsence = new Absences();
        	$absence_form = $this->createForm('Bo\AdminBundle\Form\StudentAbsencesType', $oAbsence);
		return $absence_form->createView();
	}
    public function absencespageAction($option)
    {
		$page=$this->get('session')->get('page');
		if($option==1) $page=1;
		if($option==2) $page=$page-1;
		elseif($option==3) $page=$page+1;
		else $page=$option;
		$this->get('session')->set('page',$page);
		return $this->redirect($this->generateUrl('students_absence_index'));			
	}	
    /**
    * Creates a new Absences entity for a student
    */
    public function addAbsenceAction(Request $request,$idstudent)
    {
        $absence = new Absences();
		$form = $this->createForm('Bo\AdminBundle\Form\AbsencesType3', $absence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
			$em = $this->getDoctrine()->getManager();
			//find student
			$oStudent = $em->getRepository('BoAdminBundle:Students')->find($idstudent);
			$res = $this->createAbsenceEntity($absence,$oStudent);
			if(isset($res) and $res>1){
				$this->generateTsForAbs($absence);
				$this->setActivity("Absence id: ".$absence->getId()." is Created by this user for student >> ".$oStudent->getName()." ".$oStudent->getFirstname());
				return $this->redirectToRoute('students_show', array('id'=>$idstudent));
			}
        }

        return $this->render('absences/new.html.twig', array(
            	'absence' => $absence,
            	'form' => $form->createView(),
		'pm'=>"contracts",
		'sm'=>"students",
        ));
    }
	//create absence entity
	private function createAbsenceEntity($absence,$oStudent){
		try{
			$absence->setStudents($oStudent);
			//Set the end date of the absence
			$enddate = $this->getDatePlusBis($absence->getStartdate(),$absence->getNumberday()-1);
			$absence->setEnddate($enddate);
			//Get the student current contract
			$oContract = $this->getCurrentStudentContract($oStudent);
			if($oContract){
				$absence->addContract($oContract);
				//If it's group contract field 1 or field 2
				if($this->getGroupByContract($oContract)!=null and $oGroup=$this->getGroupByContract($oContract)) $absence->addGroup($oGroup);
				//If TBS group 
				elseif($oContract->getGroup() and count($oContract->getStudents())>1) $absence->addGroup($oContract->getGroup());
			}
			$absence = $this->setNowshow($absence);
			$absence->setCreateby($this->getFNConnectedEmployee());
			return $this->updateEntity($absence);
		}catch(Exception $e){
			$this->logger($e->getMessage());
		}
	}
	private function setNowshow($absence){
		if($absence->getNumberday()>0){ 
			if($absence->getDayns()>0) $absence->setNoshow(true);
			elseif($absence->getNsam()==true or $absence->getNspm()==true){
				$absence->setNoshow(true);
				$absence->setDayns(1);
			}else $absence->setNoshow(false);
				$absence->setDayabs(intval($absence->getNumberday())-intval($absence->getDayns()));
		}
		return $absence;
	}
    /**
    * Creates a new Absences entity with student list.
    */
    public function createabsenceAction(Request $request)
    {
        $absence = new Absences();
	$form = $this->createForm('Bo\AdminBundle\Form\AbsencesType3', $absence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
			$em = $this->getDoctrine()->getManager();
			$res = $this->createAbsenceEntity($absence,$absence->getStudents());
			if($res>0 and $absence->getStudents()){
				$this->generateTsForAbs($absence);
				$this->setActivity("Absence id: ".$absence->getId()." is Created by this user for student >> ".$absence->getStudents()->getName()." ".$absence->getStudents()->getFirstname());
				return $this->redirectToRoute('students_absence_day');
			}elseif(!$absence->getStudents()){
				$message = $this->getTypeMessage("warning",$this->get('translator')->trans('You have to choose a student.'));
			}else{
				$message = $this->getTypeMessage("warning",$this->get('translator')->trans('Can not create this absence'));				
			}
        }

        return $this->render('absences/new.html.twig', array(
            'absence' => $absence,
			'message'=> $message,
            'form' => $form->createView(),
			'pm'=>"contracts",
			'sm'=>"absences",
        ));
    }
    /**
    * Finds and displays a Absences entity.
    */
    public function showAbsenceAction(Request $request,Absences $absence,$option)
    {
	$aContract = $absence->getContracts();
	$aGroup = $absence->getGroup();
        $deleteForm = $this->createDeleteAbsenceForm($absence,$option);

        return $this->render('students/showabsence.html.twig', array(
            'absence' => $absence,
		'contracts'=> $aContract,
		'groups'=> $aGroup,
		'now'=>new \DateTime(date('d-m-Y')),
		'student'=>$absence->getStudents(),
            	'delete_form' => $deleteForm->createView(),
		'url'=>$request->headers->get('referer'),
		'pm'=>"contracts",
		'sm'=>"students",
        ));
    }
    /**
     * Deletes a Absences entity.
     *
     */
    public function deleteAbsenceAction(Request $request, Absences $absence,$option)
    {
	$student = $absence->getStudents();
        $form = $this->createDeleteAbsenceForm($absence,$option);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
		$oTimesheet = $this->getRepository('BoAdminBundle','Timesheet')->find($absence->getId());
		if($oTimesheet){
			$aTsValidation = $this->getRepository('BoAdminBundle','TsValidation')->findBy(array('timesheet'=>$oTimesheet));
			if(isset($aTsValidation[0]) and $oTsValidation=$aTsValidation[0]) $this->removeEntity($oTsValidation);
			$aTsStudent = $this->getRepository('BoAdminBundle','TsStudent')->findBy(array('timesheet'=>$oTimesheet));
			if(isset($aTsStudent[0]) and $oTsStudent=$aTsStudent[0]) $this->removeEntity($oTsStudent);
			$this->removeEntity($oTimesheet);
		}
		$this->setActivity("Absence id: ".$absence->getId()." is removed by this user for student >> ".$student->getName()." ".$student->getFirstname());
		$this->removeEntity($absence);
        }
	if($student and $option==2) return $this->redirectToRoute('students_show',array('id'=>$student->getId()));
	elseif($option==1) return $this->redirectToRoute('students_absence_day');
        
	return $this->redirectToRoute('absences_index');
    }
    /**
     * Displays a form to edit an existing Absences entity.
     * if option = 1 display day absence, else if option = 2 display show student
     */
    public function editAbsenceAction(Request $request, Absences $absence,$option)
    {
	$student = $absence->getStudents();
        $editForm = $this->createForm('Bo\AdminBundle\Form\AbsencesType3', $absence);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
		$absence = $this->setNowshow($absence);
		$this->updateEntity($absence);
		$this->setActivity("Absence id: ".$absence->getId()." is updated by this user for student >> ".$student->getName()." ".$student->getFirstname());
		if($option==2) return $this->redirectToRoute('students_show',array('id'=>$absence->getStudents()->getId()));
		else return $this->redirectToRoute('students_absence_day');
        }

        return $this->render('students/editabsence.html.twig', array(
            	'absence' => $absence,
		'student'=>$student,
		'option'=>$option,
            	'absence_form' => $editForm->createView(),
		'url'=>$request->headers->get('referer'),
		'pm'=>"contracts",
		'sm'=>"absences",
        ));
    }
    /**
    * override1 : Validate an existing Timesheet entity for a student
    */
    public function override1Action(Request $request, Timesheet $timesheet)
    {
		$user=$this->getTokenUser();
		$oTSV = $this->getTsValidation($timesheet);
        $form = $this->createForm('Bo\AdminBundle\Form\TsValidationType', $oTSV);
        $form->handleRequest($request);
		$message=null;
		if($timesheet->getStatus()==2){
			$message=array('type'=>"Warning",'texte'=>$this->getErrorMessage(13).$timesheet->getId());
			$validated=true;
		}
        if ($form->isSubmitted() && $form->isValid() and !isset($validated)) {
			$timesheet->setStatus(2);
			$res = $this->updateEntity($timesheet);
			if($res>0){
				$oTSV = $this->getTsValidation($timesheet);
				$this->updateEntity($oTSV);						
				$this->setActivity("Schedule id:".$timesheet->getId()." is validated");	
				if($this->getStudentId($timesheet)>0) return $this->redirectToRoute('students_show', array('id' => $this->getStudentId($timesheet)));
			}
        }elseif(!$form->isSubmitted()){
			$message=array('type'=>"Info",'texte'=>$this->getErrorMessage(15));
		}
        return $this->render('BoAdminBundle:Students:override1.html.twig', array(
            'timesheet' => $timesheet,
			'studentid'=>$this->getStudentId($timesheet),
			'message'=>$message,
            'form' => $form->createView(),
			'user'=>$this->getTokenUser(),
			'pm'=>"tabeau-bord",
			'sm'=>"students",
        ));
    }
    /**
    * override2:Validate an existing TsStudent entity.
    */
    public function override2Action(Request $request, TsStudent $tsStudent)
    {
		$user=$this->getTokenUser();
		$oTSV = $this->getTsValidation($tsStudent,1);
        $form = $this->createForm('Bo\AdminBundle\Form\TsValidationType', $oTSV);
        $form->handleRequest($request);
		$message=null;
		if($tsStudent->getStatus()==2){
			$message=array('type'=>"Warning",'texte'=>$this->getErrorMessage(13).$tsStudent->getTimesheet()->getId());
			$validated=true;
		}
        if($form->isSubmitted() && $form->isValid() and !isset($validated)){
			$tsStudent->setStatus(2);
			$res = $this->updateEntity($tsStudent);
			if($res>0){
				$this->manageValidation($tsStudent,$oTSV);
				$this->setActivity("Schedule id:".$tsStudent->getId()." is validated");	
				return $this->redirectToRoute('students_show', array('id' => $tsStudent->getStudents()->getId()));
			}
        }elseif(!$form->isSubmitted()){
			$message=array('type'=>"Info",'texte'=>$this->getErrorMessage(15));
		}
        return $this->render('BoAdminBundle:Students:override2.html.twig', array(
            'tsstudent' => $tsStudent,
			'message'=>$message,
            'form' => $form->createView(),
			'user'=>$this->getTokenUser(),
			'pm'=>"tabeau-bord",
			'sm'=>"students",
        ));
    }
    private function createValidateForm(Timesheet $timesheet)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('student_override', array('id' => $timesheet->getId())))
            ->getForm()
        ;
    }	
    /**
     * Deletes a Students entity.
     *
     */
    public function deleteAction(Request $request, Students $student)
    {
        $form = $this->createDeleteForm($student);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$em=$this->getDoctrine()->getManager();
			//Before deleting student, verify here if he ou she belong in a group
			$oGroup = $em->getRepository('BoAdminBundle:Students')->getStudentGroup($student);
			if($oGroup){
				$oGroup->removeStudent($student);
				$this->updateEntity($oGroup);
			}
			$user = $em->getRepository('BoUserBundle:User')->findByStudents($student);
			if(isset($user[0])) $this->removeEntity($user[0]);
			$studentsgroup = $em->getRepository('BoAdminBundle:StudentsGroup')->findByStudent($student);
			if(isset($studentsgroup[0])) $this->removeArrayEntity($studentsgroup);
			$absences = $em->getRepository('BoAdminBundle:Absences')->findByStudents($student);
			if(isset($absences[0])) $this->removeEntity($absences[0]);
			$this->removeEntity($student);
			$this->setActivity("The student :".$this->getFullNameOf($student)." is deleted");	
		}
        return $this->redirectToRoute('students_index');
    }
    /**
    * return to the previous search
    */
    public function backAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Students');	
		$description = $this->get('session')->get('search');
		
		$aResult = $oEntity ->search($description);
		if(!isset($aResult[0])) return $this->redirect($this->generateUrl('students_list'));	
		else{
			return $this->render('students/back.html.twig', array(
				'students'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
				'pm'=>"contracts",
				'sm'=>"students",
			));				
		}
    }
    /**
    * Search a student.
    */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Students');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$this->get('session')->set('search',$description);
		$aResult = $oEntity->search($description);
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:Students:search.html.twig', array(
				'students'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Students:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $students = $em->getRepository('BoAdminBundle:Students')->findAll();
		$nb_tc = count($students);
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('motcle');
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aStudents = $em->getRepository('BoAdminBundle:Students')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);

        return $this->render('BoAdminBundle:Students:pagesearch.html.twig', array(
            'students' => $aStudents,
			'page' => $page, // On transmet à la vue la page courante,
        ));
    }
    /**
    * Search a student absence.
    */
    public function searchabsAction(Request $request)
    {
		$description=null;
		$oEntity = $this->getRepository('BoAdminBundle:Absences');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$this->get('session')->set('search',$description);
		$aResult = $oEntity->searchStudentAbs(trim($description));
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:Students:searchabs.html.twig', array(
				'absences'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Students:searchabs.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search absence for student.
    */
    public function pagesearchabsAction(Request $request)
    {
		$oTokenuser=$this->getTokenUser();
		$this->setActivity("List view");
        	$em = $this->getDoctrine()->getManager();
        	$oRepAbs = $em->getRepository('BoAdminBundle:Absences');
		$nb_tc = $oRepAbs->getStudentsTotal();
		//get page
		$page = $this->get('session')->get('page');
		if($page==null){
			$page=1;
			$this->get('session')->set('page',1);
		}
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$absences = $oRepAbs->findBy(array('employee'=>null),array('id' => 'desc'),$nb_cpp,$offset);

		return $this->render('BoAdminBundle:Students:absences.html.twig', array(
		    	'absences' => $absences,
			'page' => $page, // On transmet à la vue la page courante,
		));
    }
    /**
    * Finds and displays a student schedule.
    */
    public function scheduleAction(Students $oStudent,Request $request)
    {
	$aCurrentWeek = $this->getWeekSheetDays($this->getToday());
	$aPrevWeek = $this->getPreviousWeek($aCurrentWeek);
	$aNextWeek = $this->getNextWeek($aCurrentWeek);
	//print_r($aCurrentWeek);
	//exit(0);
	//$aCurrentWeek = array(new \DateTime("09-02-2018"));
	$aEvents = $this->getStudentEvents($oStudent,$aCurrentWeek);
	//print_r($aEvents);
	//exit(0);
	$aNextEvents = $this->getStudentEvents($oStudent,$aNextWeek);
		
        return $this->render('students/schedule.html.twig',
		array(
			'student'=>$oStudent,
			'today'=>$this->getToday(),
			'tb_am'=>$aEvents['am'],
			'tb_pm'=>$aEvents['pm'],
			'dates'=>$aCurrentWeek,
			'pdates'=>$aPrevWeek,
			'ndates'=>$aNextWeek,
			'pm'=>"contracts",
			'sm'=>"students",
		)
	);
    }
    /**
    * load schedule by date and id student using ajax 
    */
    public function loadscheduleAction(Request $request)
    {
	$oStuRep = $this->getRepository('BoAdminBundle:Students');	
	if($request->isXmlHttpRequest())
	{	
		$data = $request->request->get('data');	
		$aData = explode("#",$data);
		$idstudent = $aData[0];
		$date =  new \DateTime($aData[1]);
	}
	$oStudent = $oStuRep->find($idstudent);
	$aCurrentWeek = $this->getWeekSheetDays($date);
	$aPrevWeek = $this->getPreviousWeek($aCurrentWeek);
	$aNextWeek = $this->getNextWeek($aCurrentWeek);
	$aEvents = $this->getStudentEvents($oStudent,$aCurrentWeek);
	//print_r($aEvents);
	//exit(0);
	$aNextEvents = $this->getStudentEvents($oStudent,$aNextWeek);
		
        return $this->render('BoAdminBundle:Students:schedules.html.twig',
		array(
			'student'=>$oStudent,
			'tb_am'=>$aEvents['am'],
			'today'=>$this->getToday(),
			'tb_pm'=>$aEvents['pm'],
			'dates'=>$aCurrentWeek,
			'pdates'=>$aPrevWeek,
			'ndates'=>$aNextWeek,
			'pm'=>"contracts",
			'sm'=>"students",
		)
	);
    }
    /**
     * Creates a form to delete a Students entity.
     *
     * @param Students $student The Students entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Students $student)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('students_delete', array('id' => $student->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /**
     * Creates a form to delete a Absences entity.
     * @param Absences $absence The Absences entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteAbsenceForm(Absences $absence,$option)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('students_delete_absence', array('id' => $absence->getId(),'option'=>$option)))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /**
     * create user by Ajax.
     */
    public function newuserAction(Request $request)
    {
		
		if($request->isXmlHttpRequest())
		{	
			$id = $request->request->get('id');	
		}		
        	$em = $this->getDoctrine()->getManager();
        	$oStudents = $em->getRepository('BoAdminBundle:Students')->find($id);
		$message=null;
		if($oStudents){
			$aUser = $em->getRepository('BoUserBundle:User')->findBy(array('students'=>$oStudents));
			if(isset($aUser[0])){ 	
				$message = array('type'=>"Warning",'texte'=>$this->getErrorMessage(10));
			}
		}else{
			$message = array('type'=>"Warning",'texte'=>$this->getErrorMessage(11));
		}
		if(!$aUser){
			//S'il n'y a pas d'adresse mail renseignée pour l'apprenant alors on génére une adresse fictive pour créer l'utilisateur
			$email = $oStudents->getEmail();
			if($email==null){
				$firstname = $oStudents->getFirstname();
				$name = $oStudents->getName();
				$email = $firstname.$name."@nomail.cli";
				$oStudents->setEmail($email);
			}
			$user=$this->createUser(2,$oStudents);	
		} 
			
		if(isset($res) and $res!=null){
			$message = array('type'=>"Info",'texte'=>$this->getErrorMessage(12));
		}
		return $this->render('BoAdminBundle:Default:message.html.twig', array(
			'message' => $message,
		));
    }
	private function getTsValidation($oTS,$option=null){
		$user=$this->getTokenUser();
		$oTSV = new TsValidation();
		$oTSV->setCanal("System");
		$oTSV->setStatus($oTS->getStatus());
		$oTSV->setMotif("Override");
		if($option==null) $oTSV->setTimesheet($oTS);
		else $oTSV->setTimesheet($oTS->getTimesheet());
		$oTSV->setValidator($user->getEmployee()->getFirstname()." ".$user->getEmployee()->getName());
		return $oTSV;
	}
	private function getStudentId($timesheet){
		$idstudent = $timesheet->getStudents()->getId();
		if($idstudent>0) return $idstudent;
		$aStudents = $em->getRepository('BoAdminBundle:Students')->findBy(array('idcontracts'=>$timesheet->getContract()->getId()));
		if(isset($aStudents[0])) return $aStudents[0];
		return null;
	}
	private function manageValidation($oTsStudent,$oTSV){
		$em = $this->getDoctrine()->getManager();
		//Save validator's informations
		$this->updateEntity($oTSV);	
        $tsStudents = $em->getRepository('BoAdminBundle:TsStudent')->findByTimesheet(array('timesheet'=>$oTsStudent->getTimesheet()));
		//If all timesheet of the group are validated then update the timesheet's status
		if($this->verifyAllValidation($tsStudents)==true){
			$oTsStudent->getTimesheet()->setStatus(2);
			return $this->updateEntity($oTsStudent->getTimesheet());
		}
		return false;
	}
	//Verify if all timesheets are validated for the group
	private function verifyAllValidation($tsStudents){
		foreach($tsStudents as $oTsStudent){
			if($oTsStudent->getStatus()==1){
				return false;
			}
		}
		return true;
	}
	private function setActivity($activity){
		return $this->createActivity("Student",$activity);	
	}
	private function updateStudentEntity($student){
		$oContract = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Contracts')->find($idcontracts);
		if($oContract->getGroup()) $student->setGroup($oContract->getGroup());	
		return $student;		
	}
	private function isUser($student){
		$em = $this->getDoctrine()->getManager();
		$aUser = $em->getRepository('BoUserBundle:User')->findBy(array('students'=>$student));
		if(isset($aUser[0])) return true;
		else return false;
	}
	//return true if there exists a current or upcomming contract 
	private function displayAbsenceButton($oStudent){
		$aContracts = $this->getStudentContract($oStudent);
		if(count($aContracts)==0) return false;
		foreach($aContracts as $oContract){
			if($oContract->getStatus()==1 or $oContract->getStatus()==2) return true;
		}
		return false;
	}
}

<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Entity\Timesheet;
use Bo\AdminBundle\Form\TimesheetType;
use Bo\AdminBundle\Entity\Tsdate;
use Bo\AdminBundle\Form\TsdateType;
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
		$user=$this->getTokenUser();
		$employee = $user?$user->getEmployee():null;
		if($employee){
			$timesheets = $this->getEntityManager()->findBy(array('employee'=>$employee));
		}
        return $this->render('timesheet/index.html.twig', array(
            'timesheets' => $timesheets?$timesheets:array(),
			'pm'=>"tabeau-bord",
			'employee'=>$user?$user->getEmployee():null,
			'sm'=>"timesheet"
        ));
    }
    /**
    * Creates a new Timesheet entity.
    */
    public function newAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$user=$this->getTokenUser();
		$employee=$user?$user->getEmployee():null;
		$aContract=$aGroups=$aStudents=$aTeacher=$oContract=null;
		$message=null;
		$ContractEntity = $em->getRepository('BoAdminBundle:Contracts');
        $timesheet = new Timesheet();
		//Récupérer le type de timesheet par défaut : "Teaching"
		$aTypets = $em->getRepository('BoAdminBundle:Typets')->findByName("Admin");
		if(isset($aTypets[0])) $timesheet->setTypets($aTypets[0]);
		if($employee){
			//Get teacher's in progress contract
			$aContract = $ContractEntity->getEmployeeContracts($employee);
			$aGroups = $ContractEntity->getListGroup($employee);
			$aStudents = $ContractEntity->getListStudent($employee);
		}
		if($aContract!=null){
			$oContract=$aContract[0];
			$schedule=$em->getRepository('BoAdminBundle:Training')->findBy(array('contracts'=>$oContract));
			$timesheet->setContract($oContract);
			$timesheet->setEmployee($employee);
			if(isset($schedule[0])){
				$timesheet = $this->initialize($timesheet,$schedule[0]);
			}
		}else{
			$timesheet = $this->initialize($timesheet);
		}
        $form = $this->createForm('Bo\AdminBundle\Form\TimesheetType', $timesheet);
        $form->handleRequest($request);
		if($timesheet->getStartam()!=null and $timesheet->getStartpm() and $timesheet->getEndam() and $timesheet->getEndam() and $timesheet->getHour()==null){
			$hour = $this->getNumberHour($timesheet);
			$timesheet->setHour($hour);						
		}		
        if($form->isSubmitted() && $form->isValid()) {
			$idgroup = $request->request->get("idgroup");
			$idstudent = $request->request->get("idstudent");
			if($timesheet->getTypets()=='Teaching'){
				if($idgroup>0){
					$aContract = $ContractEntity->getGroupContract($idgroup);
					$oGroup = $em->getRepository('BoAdminBundle:Group')->find($idgroup);
					if($oGroup) $timesheet->setGroup($oGroup);
					if(isset($aContract[0])){
						$oContract=$aContract[0];
						$timesheet->setContract($oContract);
					}
				}elseif($idstudent>0){
					$oContract = $ContractEntity->getStudentContract($idstudent);
					$oStudent = $em->getRepository('BoAdminBundle:Students')->find($idstudent);
					if($oStudent) $timesheet->setStudents($oStudent);
					if($oContract) $timesheet->setContract($oContract);
				}
			}else{
				$timesheet->setNextStatus();
			}
			if($timesheet->getTypets()!=null){
				$RepTs = $em->getRepository('BoAdminBundle:Timesheet');
				if($timesheet->getHour()=='0' or $timesheet->getHour()=='00:00') $timesheet->setHour($this->getNumberHour($timesheet)); 
				if($RepTs->existEmployeeTS($timesheet,$employee)==false){
					$timesheet->setEmployee($employee);
					$timesheet->setDdate($timesheet->getDdate());				
					$oTsweek = $this->getTsWeek($timesheet->getDdate());
					$timesheet->setTsweek($oTsweek);
					$this->updateEntity($timesheet);
					/*
						envoie de mail à l'apprenant pour validation
					*/
					return $this->redirectToRoute('timesheet_index');
				}else{
					$message=array('type'=>"Warning",'texte'=>"This timesheet already exists");
				}
			}           
        }
		if($form->isSubmitted() && $employee==null){
			$message=array('type'=>"Warning",'texte'=>"Something is wrong. Unknown employee.");
		}

        return $this->render('timesheet/new.html.twig', array(
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
		return $this->render('BoAdminBundle:Timesheet:contracts.html.twig', array(
			'contracts'=>$aResult,
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
			$aTeacherSchedule=$em->getRepository('BoAdminBundle:Agenda')->findBy(array('employee'=>$employee,'contracts'=>$oContract));
			if(isset($aTeacherSchedule[0])){
				$timesheet = $this->initialize($timesheet,$aTeacherSchedule[0]);
			}else{
				$aTraining=$em->getRepository('BoAdminBundle:Training')->findBy(array('contracts'=>$oContract));
				if(isset($aTraining[0])){
					$teacherSchedule = $this->initialize($timesheet,$aTraining[0]);
				}else{
					$timesheet = $this->initialize($timesheet);
				}
			}
		}
        $form = $this->createForm('Bo\AdminBundle\Form\TimesheetType', $timesheet);
        return $this->render('timesheet/new.html.twig', array(
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
    * Creates a new several Timesheets entity.
    */
    public function addmanyAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$user=$this->getTokenUser();
		$employee=$user?$user->getEmployee():null;
		$aContract=$aGroups=$aStudents=$aTeacher=$oContract=null;
		$message=null;
		$control=false;
		$ContractEntity = $em->getRepository('BoAdminBundle:Contracts');
        $timesheet = new Timesheet();
		$timesheet->setTypets("Admin");
		if($employee){
			//Get teacher's in progress contract
			$aContract = $ContractEntity->getEmployeeContracts($employee);
			$aGroups = $ContractEntity->getListGroup($employee);
			$aStudents = $ContractEntity->getListStudent($employee);
		}
		if($aContract!=null){
			$oContract=$aContract[0];
			$schedule=$em->getRepository('BoAdminBundle:Training')->findBy(array('contracts'=>$oContract));
			$timesheet->setContract($oContract);
			$timesheet->setEmployee($employee);
			if(isset($schedule[0])){
				$timesheet = $this->initialize($timesheet,$schedule[0]);
			}
		}else{
			$timesheet = $this->initialize($timesheet);
		}
        $form = $this->createForm('Bo\AdminBundle\Form\TimesheetType', $timesheet);
        $form->handleRequest($request);
		$oTsdate = new Tsdate();
        $date_form = $this->createForm('Bo\AdminBundle\Form\TsdateType', $oTsdate);
		$date_form->handleRequest($request);
		if($timesheet->getStartam()!=null and $timesheet->getStartpm() and $timesheet->getEndam() and $timesheet->getEndam() and $timesheet->getHour()==null){
			$hour = $this->getNumberHour($timesheet);
			$timesheet->setHour($hour);						
		}
        if ($form->isSubmitted() && $form->isValid()) {
			$idgroup = $request->request->get("idgroup");
			$idstudent = $request->request->get("idstudent");
			if($timesheet->getTypets()=='Teaching'){
				if($idgroup>0){
					$aContract = $ContractEntity->getGroupContract($idgroup);
					$oGroup = $em->getRepository('BoAdminBundle:Group')->find($idgroup);
					if($oGroup) $timesheet->setGroup($oGroup);
					if(isset($aContract[0])){
						$oContract=$aContract[0];
						$timesheet->setContract($oContract);
					}
				}elseif($idstudent>0){
					$oContract = $ContractEntity->getStudentContract($idstudent);
					$oStudent = $em->getRepository('BoAdminBundle:Students')->find($idstudent);
					if($oStudent) $timesheet->setStudents($oStudent);
					if($oContract) $timesheet->setContract($oContract);
				}
			}else{
				$timesheet->setNextStatus();
			}				
			$enddate = $oTsdate->getEnddate();
			if($enddate){
				$aTsDate = $this->getarrayDate($timesheet->getDdate(),$enddate);
			}else{
				$message=array('type'=>"Warning",'texte'=>"Enddate must not be empty.");
			}
			//Verify if there exists submitted timesheets 
			$aRes = $this->existManyTs($timesheet,$employee,$aTsDate);
			if(isset($aRes[0])){
				$message=array('type'=>"Warning",'texte'=>"There exists some timesheets for those dates : ".join($aRes));
				$control=true;
			}
			if($employee!=null and isset($aTsDate) and $control==false and $timesheet->getTypets()!=null){
				foreach($aTsDate as $oTsdate){
					$oNewTs = $this->updateNewTs($timesheet,$employee,$oTsdate);		
					if($oNewTs) $this->updateEntity($oNewTs);					
				}
				return $this->redirectToRoute('timesheet_index');
			}           
        }
		if(isset($aTeacher[0])){
			$message=array('type'=>"Warning",'texte'=>"Something is wrong. Unknown teacher.");
		}
        return $this->render('timesheet/addmany.html.twig', array(
            'timesheet' => $timesheet,
			'message'=>$message,
			'groups'=>$aGroups,
			'students'=>$aStudents,
			'employee'=>$user?$user->getEmployee():null,
            'form' => $form->createView(),
			'date_form' => $date_form->createView(),
			'pm'=>"tabeau-bord",
			'sm'=>"timesheet"			
        ));
    }
    /**
     * Finds and displays a Timesheet entity.
     *
     */
    public function showAction(Timesheet $timesheet)
    {
        $deleteForm = $this->createDeleteForm($timesheet);

        return $this->render('timesheet/show.html.twig', array(
            'timesheet' => $timesheet,
            'delete_form' => $deleteForm->createView(),
			'pm'=>"tabeau-bord",
			'sm'=>"timesheet"
        ));
    }
    /**
     * Displays a form to edit an existing Timesheet entity.
     *
     */
    public function editAction(Request $request, Timesheet $timesheet)
    {
		$em = $this->getDoctrine()->getManager();
		$aGroups = null;
		$aStudents = null;
		$this->get('session')->remove('message');
		$ContractEntity = $em->getRepository('BoAdminBundle:Contracts');
		$user=$this->getTokenUser();
		$employee=$user?$user->getEmployee():null;
		$idprofil = $employee->getProfil()->getId();
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
			if($timesheet->getStatus()==$timesheet->getRejectStatus() or $idprofil!=3) $timesheet->setValidatedStatus();
            $em = $this->getDoctrine()->getManager();
            $em->persist($timesheet);
            $em->flush();
			$this->get('session')->set('message',array('type'=>"Success",'texte'=>"The Timesheet ".$timesheet->getId()." is updated successfully."));
            return $this->redirectToRoute('timesheet_index');
        }

        return $this->render('timesheet/edit.html.twig', array(
            'timesheet' => $timesheet,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'groups'=>$aGroups,
			'idgroup'=>$timesheet->getGroup()?$timesheet->getGroup()->getId():null,
			'students'=>$aStudents,
			'idstudent'=>$timesheet->getStudents()?$timesheet->getStudents()->getId():null,
			'pm'=>"tabeau-bord",
			'sm'=>"timesheet"
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

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($timesheet);
            $em->flush();
        }

        return $this->redirectToRoute('timesheet_index');
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
            ->setAction($this->generateUrl('timesheet_delete', array('id' => $timesheet->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	private function getEntityManager(){
		return $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Timesheet');		
	}
	private function updateNewTs($timesheet,$employee,$ddate){
		$oNewts = new Timesheet();
		$oNewts->setStartam($timesheet->getStartam());
		$oNewts->setStartpm($timesheet->getStartpm());
		$oNewts->setEndam($timesheet->getEndam());
		$oNewts->setEndpm($timesheet->getEndpm());
		$oNewts->setStatus($timesheet->getStatus());			
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
}

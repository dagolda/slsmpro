<?php

namespace Bo\PayrollBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Controller\CommonController;
use Bo\AdminBundle\Entity\Employee;
use Bo\AdminBundle\Form\EmployeeType;
use Bo\AdminBundle\Entity\Timesheet;
use Bo\AdminBundle\Entity\Tsdate;
use Bo\AdminBundle\Entity\Contracts;
use Bo\AdminBundle\Entity\Group;
/**
* Payroll Timesheet Creation.
*/
class ContractsController extends CommonController
{
    /**
    * Index employee.
    */
    public function indexAction()
    {	
		$this->get('session')->remove('page');
		$this->get('session')->remove('url');
		return $this->redirect($this->generateUrl('payroll_contracts_list'));		
	}
    /**
    * Lists all contracts entities.
    */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
		$oRepSch = $em->getRepository('BoAdminBundle:TeacherSchedule');
        $oRepContract = $em->getRepository('BoAdminBundle:Contracts');
		$aSchedule = $oRepSch->getWithContractKey();
		$aContracts = $this->getContractBySchedule($aSchedule);

        return $this->render('BoPayrollBundle:Contracts:index.html.twig', array(
            'contracts' => $aContracts,
		'message'=>$this->getSessionByName('message'),
		'today'=>new \DateTime(date("d-m-Y")),
		'type'=>1,
		'total'=>count($aContracts),
		'pm'=>"accounting",
		'sm'=>"ts_employee",
        ));
    }
    /**
    * Generate timesheet for all contract entities.
    */
    public function generateforcontractAction()
    {
        $em = $this->getDoctrine()->getManager();
        $em = $this->getDoctrine()->getManager();
		$oRepSch = $em->getRepository('BoAdminBundle:TeacherSchedule');
        $oRepContract = $em->getRepository('BoAdminBundle:Contracts');
		$aSchedule = $oRepSch->getWithContractKey();
		$aContracts = $this->getContractBySchedule($aSchedule);
		$time1 = time();
		$this->generateTsForAllContract($aContracts);
		$time2 = time();
		$message = array('type'=>"Info",'texte'=>'Timesheet generated in '.$time1-$time2." secondes1");
		$this->get("session")->set('message',$message);
		return $this->redirectToRoute('payroll_contracts_list');
    }
    /**
    * Generate timesheet for all existing group entities.
    */
    public function generateforgroupAction()
    {
        $em = $this->getDoctrine()->getManager();
        $oRepContract = $em->getRepository('BoAdminBundle:Contracts');
		$oRepSch = $em->getRepository('BoAdminBundle:TeacherSchedule');
		$oRepEmp = $em->getRepository('BoAdminBundle:Employee');
		$aSchedule = $oRepSch->getWithContractKey();
		$aGroup = $this->getGroupBySchedule($aSchedule);
		$time1 = time();
		$this->generateTsForAllGroup($aGroup);
		$time2 = time();
		$message = array('type'=>"Info",'texte'=>'Timesheet generated in '.$time1-$time2." secondes1");
		$this->get("session")->set('message',$message);
		return $this->redirectToRoute('payroll_contracts_group');
    }
    /**
    * Lists all Employee entities.
    */
    public function groupAction()
    {
        $em = $this->getDoctrine()->getManager();
        $oRepGroup = $em->getRepository('BoAdminBundle:Group');
		$oRepSch = $em->getRepository('BoAdminBundle:TeacherSchedule');
		$aSchedule = $oRepSch->getWithContractKey();
		$aGroup = $this->getGroupBySchedule($aSchedule);
		//$aGroup = $oRepGroup->getTodayGroup();

        return $this->render('BoPayrollBundle:Contracts:group.html.twig', array(
            'groups' => $aGroup,
			'type'=>2,
			'total'=>count($aGroup),
			'today'=>new \DateTime(date("d-m-Y")),
			'pm'=>"accounting",
			'sm'=>"ts_employee",
        ));
    }
    /**
    * Show contract entities
    */
    public function showAction(Contracts $oContract)
    {
        $em = $this->getDoctrine()->getManager();
		$training = $em->getRepository('BoAdminBundle:Training')->findBy(array('contracts'=>$oContract));
		if(!isset($training[0]) and $contract->getGroup() and $contract->getGroup()->getId()>0){
			//Get group training 
			$training = $em->getRepository('BoAdminBundle:Training')->findByIdgroup($oContract->getGroup()->getId());
		} 
		$aTeacherSchedule = $em->getRepository('BoAdminBundle:TeacherSchedule')->getScheduleByTeacherId($oContract->getEmployee(),$oContract);
		$lefthours = ($oContract->getHoursnumber()>0 and $oContract->getUsedHours()>0)?floatval($oContract->getHoursnumber())-floatval($oContract->getUsedHours()):null;
	$aStudent = $oContract->getStudents();
	$AbsLegend = $this->getStudentAbsLegend($aStudent);
        return $this->render('BoPayrollBundle:Contracts:show.html.twig', array(
            'contract' => $oContract, 
			//'trainings'=> $oContract->getTraining(),
			'trainings'=> $training,
			'teachers' => $oContract->getEmployee(),
			'today'=>new \DateTime(date("d-m-Y")),
			'locals' => $oContract->getLocal(),
			'etsc'=>$em->getRepository('BoAdminBundle:Timesheet')->existTsForContracts($oContract,new \DateTime(date("Y-m-d"))),
			'ebit'=>$em->getRepository('BoAdminBundle:Timesheet')->getBitExistTs($oContract,new \DateTime(date("Y-m-d"))),
			'students' => $aStudent,
			'lefthours'=>$lefthours,
			'absleg'=>$AbsLegend,
			'tsc'=>$aTeacherSchedule,
			'status'=>$this->getContractStatus(),//get status definition list
			'pm'=>"accounting",
			'sm'=>"ts_employee",
        ));
    }
    /**
    * Show group entities
    */
    public function groupshowAction(Group $oGroup)
    {
        $em = $this->getDoctrine()->getManager();
		$training = $this->getTrainingByGroup($oGroup);
		$aTeacherSchedule = $em->getRepository('BoAdminBundle:TeacherSchedule')->getTeacherscheduleByGroup($oGroup->getEmployee(),$oGroup);
$aStudent = $this->getStudentsByGroup($oGroup);
$AbsLegend = $this->getStudentAbsLegend($aStudent);
        return $this->render('BoPayrollBundle:Contracts:show.html.twig', array(
            		'group' => $oGroup, 
			'trainings'=> $training,
			'teachers' => $oGroup->getEmployee(),
			'today'=>new \DateTime(date("d-m-Y")),
			'locals' => $oGroup->getLocal(),
			'etsg'=>$em->getRepository('BoAdminBundle:Timesheet')->existTsForGroup2($oGroup,new \DateTime(date("Y-m-d"))),
			'ebit'=>$em->getRepository('BoAdminBundle:Timesheet')->getBitExistTsGroup($oGroup,new \DateTime(date("Y-m-d"))),
			'students' => $aStudent,
			'absleg'=>$AbsLegend,
			'tsc'=>$aTeacherSchedule,
			'status'=>$this->getContractStatus(),//get status definition list
			'pm'=>"accounting",
			'sm'=>"ts_employee",
        ));
    }
    /**
    * Show contract entities
    */
    public function allgenerateAction(Request $request)
    {
		$message=null;
        $em = $this->getDoctrine()->getManager();
		$idcontrat = $request->request->get('idcontract');	
		if($idcontrat==null){
			$message=array('type'=>"Warning",'texte'=>$this->get('translator')->trans("Unable to find the specified contract"));
			$this->setSessionByName('message',$message);
			return $this->redirectToRoute('payroll_contracts_index');			
		}
		$oContract = $em->getRepository('BoAdminBundle:Contracts')->find($idcontrat);
		$aTeacher = $oContract->getEmployee();
		$idemployee = $this->getIdemployee($aTeacher,$request);
		$legende = $this->getHighLegende($request,$oContract->getStudents());
		$aAttendance = $this->getArrayAttendance($request,$oContract->getStudents());
		if($idemployee!=null){
			$this->setArraySession(array('idemployee'=>$idemployee,'idcontract'=>$idcontrat,'legende'=>$legende,'attendance'=>$aAttendance));
			return $this->redirectToRoute('payroll_contracts_generate');				
		}
		foreach($aTeacher as $oTeacher){
			$timesheet = new Timesheet();
			$timesheet->setDdate(new \DateTime());
			$timesheet = $this->generateTs($timesheet,$oTeacher,$oContract,$legende);
			$res = $this->updateEntity($timesheet);
			if($res>0){
				$this->createTsStudent($timesheet,$aAttendance);
				if(!$this->getExistPP($timesheet)) $oPP = $this->createPP($timesheet);
				//Create validation historic in the table TsValidation
				$this->createTsValidation($timesheet,"Payroll");
				//Create payroll data
				$this->manageTsHours($timesheet);
				//Create billing data
				$this->createBilling($timesheet);
				$aIdTs[]=$res;
			}			
		}
		if(isset($aIdTs) and count($aIdTs)>0){
			$message=array('type'=>"Success",'texte'=>$this->get('translator')->trans("Those timesheets are generated successfully:").join(",",$aIdTs));			
		}
		$aTS = $em->getRepository('BoAdminBundle:Timesheet')->findBy(array('contract'=>$oContract,'ddate'=>new \DateTime(date("Y-m-d"))));
		$training = $em->getRepository('BoAdminBundle:Training')->findBy(array('contracts'=>$oContract));
		if(!isset($training[0]) and $contract->getGroup() and $contract->getGroup()->getId()>0){
			//Get group training 
			$training = $em->getRepository('BoAdminBundle:Training')->findByIdgroup($oContract->getGroup()->getId());
		} 
        return $this->render('BoPayrollBundle:Contracts:show.html.twig', array(
            'contract' => $oContract, 
			'trainings'=> $training,
			//'trainings'=> $oContract->getTraining(),
			'teachers' => $aTeacher,
			'locals' => $oContract->getLocal(),
			'students' => $oContract->getStudents(),
			'etsc'=>$em->getRepository('BoAdminBundle:Timesheet')->existTsForContracts($oContract,new \DateTime(date("Y-m-d"))),
			'ebit'=>$em->getRepository('BoAdminBundle:Timesheet')->getBitExistTs($oContract,new \DateTime(date("Y-m-d"))),
			'message' => $message,
			'ts'=>$aTS,
			'teacherschedule'=>isset($aTeacherSchedule[0])?$aTeacherSchedule[0]:null,
			'status'=>$this->getContractStatus(),//get status definition list
			'pm'=>"accounting",
			'sm'=>"ts_employee",
        ));
    }
    /**
    * Show contract entities
    */
    public function generateAction(Request $request)
    {
		$message=null;
        $em = $this->getDoctrine()->getManager();
		$idcontract = $this->getSessionWithoutRemove('idcontract');	
		$idemployee = $this->getSessionWithoutRemove('idemployee');
		$legende = $this->getSessionWithoutRemove('legende');
		$aAttendance = $this->getSessionWithoutRemove('attendance');		
		$oContract = $em->getRepository('BoAdminBundle:Contracts')->find($idcontract);
		if(!$oContract){
			$message=array('type'=>"Warning",'texte'=>$this->get('translator')->trans("Unable to find the specified contract"));	
			return $this->redirectToRoute('payroll_contracts_index');			
		}
		$oEmployee = $em->getRepository('BoAdminBundle:Employee')->find($idemployee);
		if($oEmployee){

			$timesheet = new Timesheet();
			$timesheet->setDdate(new \DateTime());
			$timesheet = $this->generateTs($timesheet,$oEmployee,$oContract,$legende);
			$res = $this->updateEntity($timesheet);
			if($res>0){
				$this->createTsStudent($timesheet,$aAttendance);
				if(!$this->getExistPP($timesheet)) $oPP = $this->createPP($timesheet);
				//Create validation historic in the table TsValidation
				$this->createTsValidation($timesheet,"Payroll");
				//Create payroll data
				$this->manageTsHours($timesheet);
				//Create billing data
				$this->createBilling($timesheet);
				$message=array('type'=>"Success",'texte'=>$this->get('translator')->trans("Those timesheets are generated successfully:").$res);
			}			
		}
		return $this->redirectToRoute('payroll_contracts_show',array('id'=>$idcontract));

/*
        return $this->render('BoPayrollBundle:Contracts:show.html.twig', array(
            	'contract' => $oContract, 
			'trainings'=> $oContract->getTraining(),
			'teachers' => $oContract->getEmployee(),
			'locals' => $oContract->getLocal(),
			'students' => $oContract->getStudents(),
			'message' => $message,
			'etsc'=>$em->getRepository('BoAdminBundle:Timesheet')->existTsForContracts($oContract,new \DateTime(date("Y-m-d"))),//do timesheet exist for this contract and this day/existe-il une feuille de temps pour ce contrat et cette date
			'etse'=>$em->getRepository('BoAdminBundle:Timesheet')->existTsForContracts($oContract,new \DateTime(date("Y-m-d"))),//do timesheet exist for this teacher and this day/existe-il une feuille de temps pour cet enseignant et cette date
			'teacherschedule'=>isset($aTeacherSchedule[0])?$aTeacherSchedule[0]:null,
			'status'=>$this->getContractStatus(),//get status definition list
			'pm'=>"accounting",
			'sm'=>"ts_employee",
        ));*/
    }
}

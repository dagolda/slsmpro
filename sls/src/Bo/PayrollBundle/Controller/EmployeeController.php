<?php

namespace Bo\PayrollBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Controller\CommonController;
use Bo\AdminBundle\Entity\Employee;
use Bo\AdminBundle\Entity\Contracts;
use Bo\AdminBundle\Form\EmployeeType;
use Bo\AdminBundle\Entity\Timesheet;
use Bo\AdminBundle\Entity\Tsdate;

/**
* Payroll Timesheet Creation.
*/
class EmployeeController extends CommonController
{
    /**
    * Index employee.
    */
    public function indexAction()
    {	
		$this->get('session')->remove('page');
		$this->get('session')->remove('url');
		return $this->redirect($this->generateUrl('payroll_employee_list'));		
	}
    /**
    * Lists all Employee entities.
    */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
		$this->removeSession();
		$this->setActivity("Affichage de la liste");
		$aTS = $em->getRepository('BoAdminBundle:Timesheet')->getDayTimesheet();
        $oRepEmp = $em->getRepository('BoAdminBundle:Employee');
		$employees = $em->getRepository('BoAdminBundle:Employee')->getEmployeeWithContract();
        return $this->render('BoPayrollBundle:Employee:index.html.twig', array(
            'employees' => $employees,
			//'page' => $page, // forward current page to view,
			//'nb_pages' => $nb_pages, //total number page,
			'total'=>count($employees), // record number.
			//'nb_cpp' => $nb_cpp,// line's number to display
			'pm'=>"accounting",
			'sm'=>"ts_employee",
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
    /**
    * Show contract entities
    */
    public function showAction(Employee $oEmployee)
    {
        $em = $this->getDoctrine()->getManager();
		$aContracts = $oEmployee->getContracts();
		if(count($aContracts)>1) return $this->redirectToRoute('payroll_employee_many', array('id' => $oEmployee->getId()));
		$oContract = $aContracts[0];
		$aTeacherSchedule = $em->getRepository('BoAdminBundle:TeacherSchedule')->getScheduleByTeacherId($oContract->getEmployee(),$oContract);
        return $this->render('BoPayrollBundle:Employee:show.html.twig', array(
            'contract' => $oContract, 
			'trainings'=> $oContract->getTraining(),
			'teachers' => array($oEmployee),
			'locals' => $oContract->getLocal(),
			'etsc'=>$em->getRepository('BoAdminBundle:Timesheet')->existTsForContracts($oContract,new \DateTime(date("Y-m-d"))),
			'ebit'=>$em->getRepository('BoAdminBundle:Timesheet')->getBitExistTs($oContract,new \DateTime(date("Y-m-d"))),
			'students' => $oContract->getStudents(),
			'tsc'=>$aTeacherSchedule,
			'status'=>$this->getContractStatus(),//get status definition list
			'pm'=>"accounting",
			'sm'=>"ts_employee",
        ));
    }
    /**
    * Show contract entities
    */
    public function contractshowAction(Contracts $oContract)
    {
        $em = $this->getDoctrine()->getManager();
		$aTeacherSchedule = $em->getRepository('BoAdminBundle:TeacherSchedule')->getScheduleByTeacherId($oContract->getEmployee(),$oContract);
        return $this->render('BoPayrollBundle:Employee:show.html.twig', array(
            'contract' => $oContract, 
			'trainings'=> $oContract->getTraining(),
			'teachers' => array($this->getSessionByName("employee")),
			'locals' => $oContract->getLocal(),
			'etsc'=>$em->getRepository('BoAdminBundle:Timesheet')->existTsForContracts($oContract,new \DateTime(date("Y-m-d"))),
			'ebit'=>$em->getRepository('BoAdminBundle:Timesheet')->getBitExistTs($oContract,new \DateTime(date("Y-m-d"))),
			'students' => $oContract->getStudents(),
			'tsc'=>$aTeacherSchedule,
			'status'=>$this->getContractStatus(),//get status definition list
			'pm'=>"accounting",
			'sm'=>"ts_employee",
        ));
    }
    /**
    * Show contract entities
    */
	/*
    public function manyAction(Employee $oEmployee)
    {
        $em = $this->getDoctrine()->getManager();
		$aContracts = $oEmployee->getContracts();
		$this->setSessionByName("employee",$oEmployee);
		$aTeacherSchedule = $em->getRepository('BoAdminBundle:TeacherSchedule')->getTscForManyContratcts($aContracts,$oEmployee);
        return $this->render('BoPayrollBundle:Employee:many.html.twig', array(
            'contracts' => $aContracts,
			'employee'=>$oEmployee,
			'message'=>$this->getSessionByName('message'),
			'type'=>1,
			'tsc'=>$aTeacherSchedule,
			'total'=>count($aContracts),
			'pm'=>"accounting",
			'sm'=>"ts_employee",
        ));
    }
	*/
    /**
    * Generate many Timesheet for a employee.
    */
    public function manyAction(Request $request,Employee $oEmployee)
    {
		$em = $this->getDoctrine()->getManager();
		$today = new \DateTime();
		$aTSC=$aTSG=$aGroup=$aContracts=$aStudents=null;
		if(!$oEmployee){
			$this->setSessionByName('data',array('pm'=>"tabeau-bord",'sm'=>"timesheet"));
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
        $form = $this->createForm('Bo\AdminBundle\Form\TimesheetType3', $timesheet);
        $form->handleRequest($request);
		if(isset($aContracts[0])) $aTSC = $this->getCTSByContract($aContracts, $oEmployee);	
		if(isset($aGroup[0])) $aTSG = $this->getGTSByGroup($aGroup, $oEmployee);
        if($form->isSubmitted() && $form->isValid()){
			if(isset($aContracts[0])) $message = $this->createTsForContract($em,$timesheet,$aContracts,$oEmployee,$request);
			if(isset($aGroup[0])) $message = $this->createTsForGroup($em,$timesheet,$aGroup,$oEmployee,$request);
			if($message!=null) $this->setSessionByName('message',$message);
			return $this->redirectToRoute('home_timesheet_index');			
        }	
        return $this->render('BoPayrollBundle:Employee:many.html.twig', array(
            'contracts' => $aContracts,
			'groups'=> $aGroup,
			'total'=>(count($aContracts)+count($aGroup)),
			'now'=> new \DateTime(),
			'gstudents'=>$aStudents,
			'employee'=>$oEmployee,
			'tsc'=>$aTSC,
			'tsg'=>$aTSG,
			'tcg'=>isset($aGroup[0])?$this->getTypeContForGroups($aGroup):null,//List of contract type for all groups
            'form' => $form->createView(),
			'pm'=>"tabeau-bord",
			'sm'=>"timesheet"			
        ));
    }
    /**
    * generate timesheet for many teachers and one contract
    */
    public function cgenerateAction(Request $request)
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
			$timesheet = $this->generateTs($oTeacher,$oContract,$legende);
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
        return $this->render('BoPayrollBundle:Employee:show.html.twig', array(
            'contract' => $oContract, 
			'trainings'=> $oContract->getTraining(),
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
    * generate timesheet for many contract and one teacher
    */
    public function tgenerateAction(Request $request)
    {
		$message=null;
        $em = $this->getDoctrine()->getManager();
		$idemployee = $request->request->get('idemployee');	
		if($idemployee==null){
			$message=array('type'=>"Warning",'texte'=>$this->get('translator')->trans("Unable to find the specified employee"));
			$this->setSessionByName('message',$message);
			return $this->redirectToRoute('payroll_employee_index');			
		}
		$oEmployee = $em->getRepository('BoAdminBundle:Employee')->find($idemployee);
		$aContracts = $oEmployee->getContracts();
		$aCIds = $this->getFromRequest($aContracts,$request,'contract');
		if(!isset($aCIds[0])){
			$message=array('type'=>"Warning",'texte'=>$this->get('translator')->trans("Unable to find the specified contract"));
			$this->setSessionByName('message',$message);
			return $this->redirectToRoute('payroll_employee_index');					
		}
		$aContracts = $this->getContracts($aCIds);
		$aLegende = $this->getLegendeForManyContracts($request,$aContracts) ;
		$aAttendance = $this->getManyAttendance($request,$aContracts);

		if(isset($aIdTs) and count($aIdTs)>0){
			$message=array('type'=>"Success",'texte'=>$this->get('translator')->trans("Those timesheets are generated successfully:").join(",",$aIdTs));	
			$this->setSessionByName('message',$message);
		}
		return $this->redirectToRoute('payroll_employee_index');	
    }
    /**
     * Search a employee.
     */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Employee');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$aResult = $oEntity ->search($description);
		$this->setActivity($description." searched by this user");
		if(isset($aResult[0])){
			return $this->render('BoPayrollBundle:Employee:search.html.twig', array(
				'employees'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoPayrollBundle:Employee:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $employees = $em->getRepository('BoAdminBundle:Employee')->findAll();
		$nb_tc = count($employees);
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('motcle');
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aEmployee = $em->getRepository('BoAdminBundle:Employee')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);

        return $this->render('BoPayrollBundle:Employee:pagesearch.html.twig', array(
            'employees' => $aEmployee,
			'page' => $page, // On transmet à la vue la page courante,
        ));
    }
	/*
     * Creates a form to validate a Timesheet entity.
     * @param Timesheet $timesheet The Timesheet entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createValidateForm(Employee $employee)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('payroll_employee_allvalidate', array('id' => $employee->getId())))
            ->getForm()
        ;
    }
	private function setActivity($activity){
		return $this->createActivity("Employee",$activity);	
	}
	private function getContracts($aCId){
		$em = $this->getDoctrine()->getManager();
		$aResult = array();
		foreach($aCId as $id){
			$aResult[] = $em->getRepository('BoAdminBundle:Contracts')->find($id);
		}
		return $aResult;
	}
	protected function createTsForContract($em,$timesheet,$aContracts,$oEmployee,$request,$ddate=null){
		$ids="";
		$RepTs = $em->getRepository('BoAdminBundle:Timesheet');
		if($ddate==null) $ddate=new \DateTime();
		$aLegende = $this->getLegendeForManyContracts($request,$aContracts);
		$aAttendance = $this->getManyAttendance($request,$aContracts,'group');
		foreach($aContracts as $oContract){
			$timesheet = new Timesheet();
			$timesheet->setDdate($ddate);
			$timesheet = $this->generateTs($timesheet,$oEmployee,$oContract,$aLegende[$oContract->getId()]);
			$res = $this->updateEntity($timesheet);
			if($res>0){
				$this->createTsStudent($timesheet,$aAttendance[$oContract->getId()]);
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
		if(isset($message)) return $message;
		else return null;
	}
	protected function createTsForGroup($em,$timesheet,$aGroup,$oEmployee,$request,$ddate=null){
		$RepTs = $em->getRepository('BoAdminBundle:Timesheet');
		if($ddate==null) $ddate=new \DateTime();
		$aLegende = $this->getLegendeForManyContracts($request,$aGroup) ;
		$aAttendance = $this->getManyAttendance($request,$aGroup);
		foreach($aGroup as $oGroup){
			$now = new \DateTime();
			if($oGroup->getStartdate()<=$now and $now<=$oGroup->getEnddate()){
				$timesheet = new Timesheet();
				//Get timesheet validation level ($iTvl) setting, interger
				//If $iTvl=1 students have to valide the timesheet at the first step else they do not
				$iTvl = $em->getRepository('BoAdminBundle:Param')->getParam("timesheet_validation_level",5);
				if($iTvl==2) $status=2;				
				$timesheet = $this->generateTsForGroup($timesheet,$oEmployee,$oGroup,$aLegende[$oGroup->getId()],$status);
				if($RepTs->existEmployeeTS($timesheet,$oEmployee)==0){
					$timesheet->setDdate($ddate);
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
}

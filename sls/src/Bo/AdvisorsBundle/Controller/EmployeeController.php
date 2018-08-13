<?php

namespace Bo\AdvisorsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Controller\CommonController;
use Bo\AdminBundle\Entity\Employee;
use Bo\AdminBundle\Form\EmployeeType;
use Bo\AdminBundle\Entity\Timesheet;
use Bo\AdminBundle\Entity\Tsdate;
/**
* Payroll Timesheet Creation.
*/
class EmployeeController extends CommonController
{	
    /**
    * Finds and displays a Employee entity.
    */
    public function showAction(Employee $employee)
    {
		$em = $this->getDoctrine()->getManager();
		$validateForm = $this->createAllValidateForm($employee);
		$this->setActivity($employee->getName()." ".$employee->getFirstname()." is consulted by this user");
        $aTimesheets = $em->getRepository('BoAdminBundle:Timesheet')->getTsByEmployee($employee,2);
        return $this->render('BoAdvisorsBundle:Employee:show.html.twig', array(
            'teacher' => $employee,
			'employee' => $this->getConnectedEmployee(),
			'validate_form' => $validateForm->createView(),
			'timesheets'=>$aTimesheets,
			'pm'=>"accounting",
			'sm'=>"validation",
        ));
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
			return $this->render('BoAdvisorsBundle:Employee:search.html.twig', array(
				'employees'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdvisorsBundle:Employee:search.html.twig', array(
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

        return $this->render('BoAdvisorsBundle:Employee:pagesearch.html.twig', array(
            'employees' => $aEmployee,
			'page' => $page, // On transmet à la vue la page courante,
        ));
    }
    /**
     * Validate all existing Timesheet entity by ajax request.
     */
    public function ajaxvalidateAction(Request $request)
    {
		if($request->isXmlHttpRequest())
		{	
			$idemployee = $request->request->get('idemployee');	
		}
        $em = $this->getDoctrine()->getManager();
        $employee = $em->getRepository('BoAdminBundle:Employee')->find($idemployee);
		$timesheets=array();
		$message=null;
		if($employee){
			$timesheets = $em->getRepository('BoAdminBundle:Timesheet')->getTsByEmployee($employee,2);
		}
		if(isset($timesheets[0])){
			if($this->verifyValidation($timesheets)!=null){
				$message=array('type'=>"Warning",'texte'=>"Those timesheet ".$this->verifyValidation($timesheets)." are already validated.");
				$validated=true;
			}
		}
		foreach($timesheets as $timesheet){
			$timesheet->setStatus($timesheet->getNextStatus());
			$res = $this->updateEntity($timesheet);
			if($res>0){
				//Create validation historic in the table TsValidation
				$res = $this->createTsValidation($timesheet,"Advisor");
				//Create payroll data
				$this->manageTsHours($timesheet);
				//Create billing data
				$this->createBilling($timesheet);
				$aRes[]=$timesheet->getId();
			}
		}
		if(count($aRes)== count($timesheets)){
			$message=array('type'=>"Success",'texte'=>"Timesheets ids : ".join(',',$aRes)." are validated successfully.");
		}else{
			$message=array('type'=>"Warning",'texte'=>"Something is wrong. Contact CLIC MANAGER Administrator");			
		}
        return $this->render('BoAdvisorsBundle:Employee:timesheet.html.twig', array(
            'timesheets' => $em->getRepository('BoAdminBundle:Timesheet')->getTsByEmployee($employee,2),
			'message'=>$message,
        ));
    }
    /**
     * Creates a form to validate a Timesheet entity.
     * @param Timesheet $timesheet The Timesheet entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createValidateForm(Timesheet $timesheet)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('dash_employee_validate', array('id' => $timesheet->getId())))
            ->getForm()
        ;
    }
    /**
     * Creates a form to validate a Timesheet entity.
     * @param Timesheet $timesheet The Timesheet entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createAllValidateForm(Employee $employee)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('dash_employee_allvalidate', array('id' => $employee->getId())))
            ->getForm()
        ;
    }
	private function setActivity($activity){
		return $this->createActivity("Employee",$activity);	
	}
	private function verifyValidation($aTimesheet){
		$aRes=null;
		foreach($aTimesheet as $oTimesheet){
			if($oTimesheet->getStatus()==3){
				$aRes[]=$oTimesheet->getId();
			}
		}
		if($aRes!=null) return join(",",$aRes);
		return $aRes;
	}
	private function getTimesheet($employee){
        $em = $this->getDoctrine()->getManager();
		$timesheet = new Timesheet();
		if($employee->getProfil()->getName()=="Teacher") $aTypets = $em->getRepository('BoAdminBundle:Typets')->findByName("Teaching");
		else $aTypets = $em->getRepository('BoAdminBundle:Typets')->findByName("Admin");
		if(isset($aTypets[0])) $timesheet->setTypets($aTypets[0]);
		return $timesheet;
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
		$oNewts->setTypets($timesheet->getTypets());
		$oNewts->setStatus(3);
		$res = $this->updateEntity($oNewts);
		if($res>1){
			$this->manageTsHours($oNewts);		
		} 
		return true;		
	}
}

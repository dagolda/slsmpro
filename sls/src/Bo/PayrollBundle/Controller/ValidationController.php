<?php

namespace Bo\PayrollBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Controller\CommonController;
use Bo\AdminBundle\Entity\Employee;
use Bo\AdminBundle\Form\EmployeeType;
use Bo\AdminBundle\Entity\Teachers;
use Bo\AdminBundle\Entity\Batch;
use Bo\AdminBundle\Form\BatchType;
use Bo\AdminBundle\Entity\TsValidation;
/**
* Validation payroll Controller
*/
class ValidationController extends CommonController
{
    /**
    * Index employee.
    */
    public function indexAction()
    {	
		$this->get('session')->remove('page');
		$this->get('session')->remove('url');
		return $this->redirect($this->generateUrl('payroll_validation_list'));		
	}
    /**
    * Lists all Employee entities.
    */
    public function listAction()
    {
		$this->removeSession();
		$this->setActivity("Affichage de la liste");
        $em = $this->getDoctrine()->getManager();
        $aEmployees = $em->getRepository('BoAdminBundle:Employee')->findBy(array(),array('name' => 'desc'));
		$employees = $em->getRepository('BoAdminBundle:Timesheet')->getListEmployee($aEmployees);
		$nb_tc = count($employees);
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
		$employees = $em->getRepository('BoAdminBundle:Timesheet')->getListEmployee($employees,$offset,$nb_cpp);
        return $this->render('BoPayrollBundle:Validation:index.html.twig', array(
            'employees' => $employees,
			'page' => $page, // forward current page to view,
			'nb_pages' => $nb_pages, //total number page,
			'total'=>$nb_tc, // record number.
			'nb_cpp' => $nb_cpp,// line's number to display
			'pm'=>"accounting",
			'sm'=>"ts_validation",
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
		return $this->redirect($this->generateUrl('payroll_validation_list'));			
	}
    /**
    * Finds and displays a Employee entity.
    */
    public function showAction(Employee $employee)
    {
		$validateForm = $this->createValidateForm($employee);
		$this->setActivity($employee->getName()." ".$employee->getFirstname()." is consulted by this user");
        $em = $this->getDoctrine()->getManager();
        $aTimesheets = $em->getRepository('BoAdminBundle:Timesheet')->getTsByEmployee($employee,2);
        return $this->render('BoPayrollBundle:Validation:show.html.twig', array(
            'employee' => $employee,
			'confirm_form' => $validateForm->createView(),
			'timesheets'=>$aTimesheets,
			'pm'=>"accounting",
			'sm'=>"ts_validation",
        ));
    }
    /**
    * Finds and displays a Employee list.
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
			return $this->render('BoPayrollBundle:Validation:search.html.twig', array(
				'employees'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoPayrollBundle:Validation:search.html.twig', array(
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

        return $this->render('BoPayrollBundle:Validation:pagesearch.html.twig', array(
            'employees' => $aEmployee,
			'page' => $page, // On transmet à la vue la page courante,
        ));
    }
    /**
     * Validate all existing Timesheet entity.
     */
    public function allvalidateAction(Request $request, Employee $employee)
    {
        $em = $this->getDoctrine()->getManager();
		$timesheets=array();
		$message=null;
		$user=$this->getTokenUser();
		if($employee){
			$timesheets = $em->getRepository('BoAdminBundle:Timesheet')->getTsByEmployee($employee,2);
			$validateForm = $this->createValidateForm($employee);
			$validateForm->handleRequest($request);
		}
		if(isset($timesheets[0])){
			if($this->verifyValidation($timesheets)!=null){
				$message=array('type'=>"Warning",'texte'=>"Those timesheet ".$this->verifyValidation($timesheets)." is already validated.");
				$validated=true;
			}
		}
        if (isset($validateForm) and $validateForm->isSubmitted() && $validateForm->isValid() and !isset($validated)) {
			if($this->verifyValidation($timesheets)!=null){
				$message=array('type'=>"Warning",'texte'=>"Those timesheet ".$this->verifyValidation($timesheets)." is already validated.");
			}else{
				$aRes=array();
				foreach($timesheets as $timesheet){
					$timesheet->setStatus($timesheet->getNextStatus());
					$res = $this->updateEntity($timesheet);
					if($res>0){
						//Create validation historic in the table TsValidation
						$res = $this->createTsValidation($timesheet,"Payroll");
						//Create payroll data
						$this->manageTsHours($timesheet);
						//Create billing data if type is "teaching"
						if($timesheet->getTypets()=="Teaching"){
							$this->createBilling($timesheet);
							$aRes[]=$timesheet->getId();							
						}
					}
				}
				return $this->redirect($this->generateUrl('payroll_validation_show',array('id'=>$employee->getId())));	
			}
			if(count($aRes)== count($timesheets)){
				$this->get('session')->set('message',array('type'=>"Success",'texte'=>"Timesheets ids : ".join(',',$aRes)." are validated successfully."));
				//Reload timesheet after validation
				$timesheets = $em->getRepository('BoAdminBundle:Timesheet')->getTsByEmployee($employee,2);
			}else{
				$message=array('type'=>"Warning",'texte'=>"Something is wrong. Contact CLIC MANAGER Administrator");			
			}
        }else{$message=array('type'=>"Info",'texte'=>"Thank you to click the 'Confirm' button to validate all");}
		
        return $this->render('BoPayrollBundle:Validation:allvalidate.html.twig', array(
            'timesheets' => $timesheets,
			'employee' => $employee,
			'message'=>$message,
            'validate_form' => $validateForm->createView(),
			'user'=>$this->getTokenUser(),
			'pm'=>"tabeau-bord",
			'sm'=>"ts_validation"
        ));
    }
    /**
    * Creates a form to validate a Timesheet entity.
    * @param Timesheet $timesheet The Timesheet entity
    * @return \Symfony\Component\Form\Form The form
    */
    private function createValidateForm(Employee $employee)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('payroll_validation_allvalidate', array('id' => $employee->getId())))
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

}

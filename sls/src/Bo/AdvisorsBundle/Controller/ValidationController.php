<?php

namespace Bo\AdvisorsBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Controller\CommonController;
use Bo\AdminBundle\Entity\Employee;
use Bo\AdminBundle\Form\EmployeeType;
use Bo\AdminBundle\Entity\Teachers;
use Bo\AdminBundle\Entity\Batch;
use Bo\AdminBundle\Form\BatchType;
use Bo\AdminBundle\Entity\TsValidation;
use Bo\AdminBundle\Entity\Timesheet;
/**
* Validation advisor Controller
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
		return $this->redirect($this->generateUrl('dash_validation_list'));		
	}
    /**
    * Lists all Employee entities.
    */
    public function listAction()
    {
		$this->removeSession();
		$this->setActivity("Affichage de la liste");
        $em = $this->getDoctrine()->getManager();
		$aEmployees = $em->getRepository('BoAdminBundle:Advisors')->getAllTeachers($this->getConnectedEmployee());
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
        return $this->render('BoAdvisorsBundle:Validation:index.html.twig', array(
            'employees' => $employees,
			'employee' => $this->getConnectedEmployee(),
			'page' => $page, // forward current page to view,
			'nb_pages' => $nb_pages, //total number page,
			'total'=>$nb_tc, // record number.
			'nb_cpp' => $nb_cpp,// line's number to display
			'pm'=>"tabeau-bord",
			'sm'=>"validation",
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
		return $this->redirect($this->generateUrl('dash_validation_list'));			
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
        return $this->render('BoAdvisorsBundle:Validation:show.html.twig', array(
            'employee' => $employee,
			'validate_form' => $validateForm->createView(),
			'timesheets'=>$aTimesheets,
			'pm'=>"tabeau-bord",
			'sm'=>"validation",
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
			return $this->render('BoAdvisorsBundle:Validation:search.html.twig', array(
				'employees'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdvisorsBundle:Validation:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Validate an existing Timesheet entity.
    */
    public function validateAction(Request $request, Timesheet $timesheet)
    {
		$user=$this->getTokenUser();
        $validateForm = $this->createValidateForm($timesheet);
        $validateForm->handleRequest($request);
		$referer=$this->get('session')->get('referer');
		if($referer==null){
			$this->get('session')->set('referer',$request->headers->get('referer'));			
		}
		$message=null;
		if($timesheet->getStatus()==$timesheet->getNextStatus()){
			$message=array('type'=>"Warning",'texte'=>"The timesheet ".$timesheet->getId()." is already validated.");
			$validated=true;
		}
        if ($validateForm->isSubmitted() && $validateForm->isValid() and !isset($validated) and $timesheet->getStatus()==2){
			$timesheet->setNextStatus();
			$res = $this->updateEntity($timesheet);
			if($res>0){
				$oTSV = $this->getTsValidation($timesheet);
				$this->createBilling($timesheet);
				$this->updateEntity($oTSV);
				$this->manageTsHours($timesheet);
				$message=array('type'=>"Success",'texte'=>"The timesheet ".$timesheet->getId()." is validated successfully.");
			}
        }
		$em = $this->getDoctrine()->getManager();
		$aTSV = $em->getRepository('BoAdminBundle:TsValidation')->findBy(array('timesheet'=>$timesheet));
		$aTsStudent = $em->getRepository('BoAdminBundle:TsStudent')->findBy(array('timesheet'=>$timesheet));
        return $this->render('BoAdvisorsBundle:Validation:validate.html.twig', array(
            'timesheet' => $timesheet,
			'employee'=> $this->getConnectedEmployee(),
			'tsstudents'=>$aTsStudent,
			'message'=>$message,
			'referer'=>$referer,			
			'tsv'=>$aTSV,
            'validate_form' => $validateForm->createView(),
			'user'=>$user,
			'pm'=>"tabeau-bord",
			'sm'=>"validation"
        ));
    }
    /**
    * Reject an existing Timesheet entity.
    */
    public function rejectAction(Request $request, Timesheet $timesheet)
    {
		$user=$this->getTokenUser();
		$referer=$this->get('session')->get('referer');
		if($referer==null){
			$this->get('session')->set('referer',$request->headers->get('referer'));			
		}
		$oTSV = $this->getTsValidation($timesheet);
        $form = $this->createForm('Bo\AdminBundle\Form\TsValidationType', $oTSV);
        $form->handleRequest($request);
		$message=null;
		if($timesheet->getStatus()==$timesheet->getRejectStatus()){
			$message=array('type'=>"Warning",'texte'=>"The timesheet ".$timesheet->getId()." is already rejected.");
			$validated=true;
		}
		$oTSV->setTimesheet($timesheet);
        if ($form->isSubmitted() && $form->isValid() and !isset($validated)) {
			$timesheet->setRejectStatus();
			$res = $this->updateEntity($timesheet);
			if($res>0){
				$oTSV->setStatus($timesheet->getStatus());
				$this->updateEntity($oTSV);
				$message=array('type'=>"Success",'texte'=>"The timesheet ".$timesheet->getId()." is rejected successfully. Thank you !");
			}
        }
		$em = $this->getDoctrine()->getManager();
		$aTSV = $em->getRepository('BoAdminBundle:TsValidation')->findBy(array('timesheet'=>$timesheet));
        return $this->render('BoAdvisorsBundle:Employee:reject.html.twig', array(
            'timesheet' => $timesheet,
			'employee' => $this->getConnectedEmployee(),
			'message'=>$message,
			'referer'=>$referer,	
            'form' => $form->createView(),
			'tsv'=>$aTSV,
			'user'=>$this->getTokenUser(),
			'pm'=>"tabeau-bord",
			'sm'=>"validation"
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

        return $this->render('BoAdvisorsBundle:Validation:pagesearch.html.twig', array(
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
			$aRes=array();
			foreach($timesheets as $timesheet){
				$timesheet->setStatus($timesheet->getNextStatus());
				$res = $this->updateEntity($timesheet);
				if($res>0){
					$oTSV = $this->getTsValidation($timesheet);
					$this->updateEntity($oTSV);
					$this->manageTsHours($timesheet);
					$aRes[]=$timesheet->getId();
				}
			}
			if(count($aRes)== count($timesheets)){
				$this->get('session')->set('message',array('type'=>"Success",'texte'=>"Timesheets ids : ".join(',',$aRes)." are validated successfully."));
				return $this->redirectToRoute('dash_employee_show', array('id' => $employee->getId()));
			}else{
				$message=array('type'=>"Warning",'texte'=>"Something is wrong. Contact CLIC MANAGER Administrator");
			}
        }else{$message=array('type'=>"Info",'texte'=>"Thank you to click the 'Confirm' button to validate all");}
        return $this->render('BoAdvisorsBundle:Validation:allvalidate.html.twig', array(
            'timesheets' => $timesheets,
			'employee' => $employee,
			'message'=>$message,
            'validate_form' => $validateForm->createView(),
			'user'=>$this->getTokenUser(),
			'pm'=>"tabeau-bord",
			'sm'=>"validation"
        ));
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
    /**
     * Creates a form to validate a Timesheet entity.
     * @param Timesheet $timesheet The Timesheet entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createValidateForm(Timesheet $timesheet)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('dash_validation_validate', array('id' => $timesheet->getId())))
            ->getForm()
        ;
    }
	private function getTsValidation($oTS,$option=null){
		$sCanal = $option==null?"System":"Mail";
		$user=$this->getTokenUser();
		$oTSV = new TsValidation();
		$oTSV->setCanal($sCanal);
		$oTSV->setStatus($oTS->getStatus());
		$oTSV->setMotif("Advisor");
		$oTSV->setTimesheet($oTS);
		$oTSV->setValidator($user->getEmployee()->getFirstname()." ".$user->getEmployee()->getName());
		return $oTSV;
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

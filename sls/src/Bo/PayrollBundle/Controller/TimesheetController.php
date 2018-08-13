<?php
namespace Bo\PayrollBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Controller\CommonController;
use Bo\AdminBundle\Entity\Timesheet;
use Bo\AdminBundle\Form\TimesheetType;
use Bo\AdminBundle\Entity\TsValidation;
use Bo\AdminBundle\Entity\PeriodPay;
use Bo\AdminBundle\Entity\Payroll;
use Bo\AdminBundle\Entity\Pay;
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
		$this->removeSession();
        	$em = $this->getDoctrine()->getManager();
		$user=$this->getTokenUser();
		$oTsRep = $em->getRepository('BoAdminBundle:Timesheet');
		$nb_tc = $oTsRep->getTotal();
		$page = $this->get('session')->get('page');
		if($page==null) $page=1;
		//$oCriteria = $this->initCriteriaByPP();	
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;		
        $timesheets = $oTsRep->getTodayPayrollTs();
		$Criteriaform = $this->createForm('Bo\AdminBundle\Form\Criteria2Type', $this->initCriteriaByPP());
		$aEmployees = $em->getRepository('BoAdminBundle:Employee')->getActiveEmployee();

		return $this->render('BoPayrollBundle:Timesheet:index.html.twig', array(
		    'timesheets' => $timesheets,
			'employees' => $aEmployees,
			'page' => $page, // On transmet à la vue la page courante,
			'nb_pages' => $nb_pages, //le nombre total de pages,
			'total'=>$nb_tc, // Et le nombre total d'enregistrement.
			'nb_cpp'=>$nb_cpp,
			'today'=>new \DateTime(date("d-m-Y")),
			'employee'=>$user?$user->getEmployee():null,
			'ccd_form' =>  $Criteriaform->createView(),
			'pm'=>"accounting",
			'sm'=>"timesheet"
		));
    }
    /**
    * return to the previous search
    */
    public function backAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$oRepository = $em->getRepository('BoAdminBundle:Timesheet');
		$aData = $this->getSessionWithoutRemove('data');
		if($aData==null) $this->redirect($this->generateUrl('payroll_timesheet_index'));		
		$timesheets = $oRepository->searchdata($aData);		
		$Criteriaform = $this->createForm('Bo\AdminBundle\Form\Criteria2Type', $this->initCriteriaByPP());
		if(!isset($timesheets[0])) return $this->redirect($this->generateUrl('payroll_timesheet_index'));	
		else{
			return $this->render('BoPayrollBundle:Timesheet:back.html.twig', array(
				'timesheets' => $timesheets,
				'employees' => $em->getRepository('BoAdminBundle:Employee')->getActiveEmployee(),
				'employee'=>$this->getConnectedEmployee(),
				'ccd_form' =>  $Criteriaform->createView(),
				'pm'=>"accounting",
				'sm'=>"timesheet"
			));				
		}
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
    * Finds and displays a Timesheet entity.
    */
    public function showAction(Request $request,Timesheet $timesheet)
    {
		$user=$this->getTokenUser();
		$oPeriodPay=null;
		$referer = $request->headers->get('referer'); 
		$em = $this->getDoctrine()->getManager();
		$deleteForm = $this->createDeleteForm($timesheet);
		$aTSV = $em->getRepository('BoAdminBundle:TsValidation')->findBy(array('timesheet'=>$timesheet));
		$aTsStudent = $em->getRepository('BoAdminBundle:TsStudent')->findBy(array('timesheet'=>$timesheet));
		if($timesheet->getIdperiodpay()>0) $oPeriodPay = $em->getRepository('BoAdminBundle:PeriodPay')->find($timesheet->getIdperiodpay());
		$editForm = $this->createForm('Bo\AdminBundle\Form\TimesheetType', $timesheet);
		return $this->render('BoPayrollBundle:Timesheet:show.html.twig', array(
		    'timesheet' => $timesheet,
				'referer'=>$referer,
				'tsv'=>$aTSV,
				'delete_form' => $deleteForm->createView(),
				'form' => $editForm->createView(),
				'tsstudents'=>$aTsStudent,
				'periodpay'=>$oPeriodPay,
				'std'=>$timesheet->getStatusDefinition(),
				'employee'=>$user?$user->getEmployee():null,
				'pm'=>"accounting",
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
			$res = $this->updateEntity($timesheet);
			if($res>0){
				$texte = "The Timesheet ".$timesheet->getId()." is updated successfully.";
				$this->get('session')->set('message',array('type'=>"Success",'texte'=>$texte));
				$this->setActivity($texte);
				return $this->redirectToRoute('payroll_timesheet_show',array('id'=>$timesheet->getId()));
			}else{
				$message = $this->get('translator')->trans('Unable to update this timesheet');
				$aMessage = array('type'=>"Warning",'texte'=>$message);				
			}
        }

        return $this->render('timesheet/edit.html.twig', array(
            'timesheet' => $timesheet,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'groups'=>$aGroups,
			'message'=>$aMessage,
			'idgroup'=>$timesheet->getGroup()?$timesheet->getGroup()->getId():null,
			'students'=>$aStudents,
			'idstudent'=>$timesheet->getStudents()?$timesheet->getStudents()->getId():null,
			'pm'=>"tabeau-bord",
			'sm'=>"timesheet"
        ));
    }
    /**
    * Validate an existing Timesheet entity.
    */
    public function validateAction(Request $request, Timesheet $timesheet)
    {
		$oPeriodPay = null;
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
        if ($validateForm->isSubmitted() && $validateForm->isValid() and !isset($validated)) {
			$timesheet->setNextStatus();
			$res = $this->updateEntity($timesheet);
			if($res>0){
				//Create validation historic in the table TsValidation
				$res = $this->createTsValidation($timesheet,"Payroll");
				//Create payroll data
				$this->manageTsHours($timesheet);
				//Create billing data
				$this->createBilling($timesheet);
				$message=array('type'=>"Success",'texte'=>$this->get('translator')->trans("Those timesheets are validated successfully:").$timesheet->getId());
			}
        }elseif(isset($validated)){
			$message=array('type'=>"Info",'texte'=>$this->get('translator')->trans('Thank you to click the [Confirm] button to validate'));
		}
		$em = $this->getDoctrine()->getManager();
		if($timesheet->getIdperiodpay()>0) $oPeriodPay = $em->getRepository('BoAdminBundle:PeriodPay')->find($timesheet->getIdperiodpay());
		$aTSV = $em->getRepository('BoAdminBundle:TsValidation')->findBy(array('timesheet'=>$timesheet));
		$aTsStudent = $em->getRepository('BoAdminBundle:TsStudent')->findBy(array('timesheet'=>$timesheet));
        return $this->render('BoPayrollBundle:Timesheet:validate.html.twig', array(
            'timesheet' => $timesheet,
			'message'=>$message,
			'referer'=>$referer,			
			'tsv'=>$aTSV,
			'tsstudents'=>$aTsStudent,
			'std'=> $timesheet->getStatusDefinition(),
            'validate_form' => $validateForm->createView(),
			'user'=>$user,
			'employee'=>$timesheet->getEmployee()?$timesheet->getEmployee():null,
			'periodpay'=>$oPeriodPay,
			'pm'=>"accounting",
			'sm'=>"ts_validation",
        ));
    }
    /**
    * Reject an existing Timesheet entity.
    */
    public function rejectAction(Request $request, Timesheet $timesheet)
    {
		$oPeriodPay = null;
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
				$message=array('type'=>"Success",'texte'=>$this->get('translator')->trans("This timesheet is rejected successfully").$timesheet->getId());
			}
        }
		$em = $this->getDoctrine()->getManager();
		$aTSV = $em->getRepository('BoAdminBundle:TsValidation')->findBy(array('timesheet'=>$timesheet));
		$aTsStudent = $em->getRepository('BoAdminBundle:TsStudent')->findBy(array('timesheet'=>$timesheet));
		if($timesheet->getIdperiodpay()>0) $oPeriodPay = $em->getRepository('BoAdminBundle:PeriodPay')->find($timesheet->getIdperiodpay());
        return $this->render('BoPayrollBundle:Timesheet:reject.html.twig', array(
            'timesheet' => $timesheet,
			'message'=>$message,
			'referer'=>$referer,	
            'form' => $form->createView(),
			'tsv'=>$aTSV,
			'std'=> $timesheet->getStatusDefinition(),
			'user'=>$this->getTokenUser(),
			'tsstudents'=>$aTsStudent,
			'employee'=>$timesheet->getEmployee()?$timesheet->getEmployee():null,
			'periodpay'=>$oPeriodPay,
			'pm'=>"accounting",
			'sm'=>"ts_validation",
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
				return $this->redirectToRoute('payroll_employee_show', array('id' => $employee->getId()));
			}else{
				$message=array('type'=>"Warning",'texte'=>"Something is wrong. Contact CLIC MANAGER Administrator");			
			}
        }else{$message=array('type'=>"Info",'texte'=>"Thank you to click the 'Confirm' button to validate all");}
        return $this->render('BoPayrollBundle:Employee:allvalidate.html.twig', array(
            'timesheets' => $timesheets,
			'employee' => $employee,
			'message'=>$message,
            'validate_form' => $validateForm->createView(),
			'periodpay'=>$oPeriodPay,
			'user'=>$this->getTokenUser(),
			'pm'=>"accounting",
			'sm'=>"ts_validation",
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
			$aTsStudent = $em->getRepository('BoAdminBundle:TsStudent')->findBy(array('timesheet'=>$timesheet));
			foreach($aTsStudent as $oTsStudent){
				$this->removeEntity($oTsStudent);
			}
			$this->removeEntity($timesheet);
        }

        return $this->redirectToRoute('payroll_timesheet_index');
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
            ->setAction($this->generateUrl('payroll_timesheet_delete', array('id' => $timesheet->getId())))
            ->setMethod('DELETE')
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
            ->setAction($this->generateUrl('payroll_timesheet_validate', array('id' => $timesheet->getId())))
            ->getForm()
        ;
    }
    /**
    * Search a room.
    */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Timesheet');	
		if($request->isXmlHttpRequest())
		{	
			$data = $request->request->get('data');
			$aData = explode("#",$data);
			$this->setSessionByName('data',$aData);
		}
		//$aData =  array ( '0' => "31-05-2017", '1' => "May", '2' => "2017", '3' => 1, '4' => "2017-05-13", '5' => "2017-06-12" ); 
		//check if the criteria is a date
		$aDate = explode('-',$aData[0]);
		if(count($aDate)==3){
			$oDate = new \DateTime($aData[0]);
			$aResult = $oEntity->searchBydate($oDate);
		}else{
			$aResult = $oEntity->searchdata($aData);
		}
		if(isset($aResult[0])){
			return $this->render('BoPayrollBundle:Timesheet:search.html.twig', array(
				'timesheets'=>$aResult,
				'count'=>count($aResult),
				'description'=>$aData[0],
			));				
		}
		
		return $this->render('BoAdminBundle:Timesheet:search.html.twig', array(
			'criteria'=>$aData[0],
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $timesheets = $em->getRepository('BoAdminBundle:Timesheet')->findAll();
		$nb_tc = count($timesheets);
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('motcle');
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aTimesheet = $em->getRepository('BoAdminBundle:Timesheet')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);

        return $this->render('BoAdminBundle:Timesheet:pagesearch.html.twig', array(
            'timesheets' => $aTimesheet,
			'status'=>$em->getRepository('BoAdminBundle:Timesheet')->getStatus($aTimesheet),
			'page' => $page, // On transmet à la vue la page courante,
        ));
    }
    /**
    * extra search timesheets for payroll.
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
		$startdate = $aData[2];	
		$enddate = $aData[3];
		$status = (int) $aData[4];
		$idemployee = $aData[5];
		$type = $aData[6];
		$employee = $idemployee>0?$em->getRepository('BoAdminBundle:Employee')->find($idemployee):null;
		$oPP = $this->getPPByMonthAndYear($month,$year);
		if($oPP){
			$timesheets = $em->getRepository('BoAdminBundle:Timesheet')->getPeriodTimesheet($employee,$oPP,$status,$type);	
		}else{
			$timesheets = array();
		}
		return $this->render('BoPayrollBundle:Timesheet:extrasearch.html.twig', array(
			'timesheets'=>$timesheets,
			'std'=>$this->getStatusTsDef(),
			'today'=> new \DateTime(date("d-m-Y")),//for the navdate : navigation by date
		));	
    }
    /**
    * navigaton by date : timesheets for payroll.
    */
    public function navdateAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$oRepTS = $em->getRepository('BoAdminBundle:Timesheet');
		$timesheets = Array();	
		if($request->isXmlHttpRequest())
		{	
			$data = $request->request->get('data');	
			$aData = explode(':',$data);
		}
		
		//$aData = array ('0'=> "02-06-2017", '1' => "3", '2' => "0", '3' => "1", '4' => "1" ); 
		$date = $aData[0];
		$status = (int) $aData[1];
		$idemployee = $aData[2];
		$type = $aData[3];
		$option = $aData[4];
		if($option!=0) $oDate = $option==1?$this->getObjectPreviosDay($date):$this->getObjectNextDay($date);
		else $oDate = new \DateTime($date);
		$oEmployee = $idemployee>0?$em->getRepository('BoAdminBundle:Employee')->find($idemployee):null;
		$aTimesheet = $oRepTS->getTsByDayAndStatus($oDate,$status);
		return $this->render('BoPayrollBundle:Timesheet:extrasearch.html.twig', array(
			'timesheets'=>$aTimesheet,
			'today'=> $oDate,
			//'std'=>$this->getStatusTsDef(),
		));	
    }
	private function getTsValidation($oTS,$option=null){
		$user=$this->getTokenUser();
		$oTSV = new TsValidation();
		$oTSV->setCanal("System");
		$oTSV->setStatus($oTS->getStatus());
		$oTSV->setMotif("Payroll");
		if($option==null) $oTSV->setTimesheet($oTS);
		else $oTSV->setTimesheet($oTS->getTimesheet());
		$oTSV->setValidator($user->getEmployee()->getFirstname()." ".$user->getEmployee()->getName());
		return $oTSV;
	}
	private function getStudentList($aStudents){
		$aRes = array();
		foreach($aStudents as $oStudent){
			$aRes[] = $oStudent->getFirstname()." ".$oStudent->getName();
		}
		return join(',',$aRes);
	}
	private function setActivity($activity){
		return $this->createActivity("Payroll",$activity);	
	}
}

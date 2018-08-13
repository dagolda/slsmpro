<?php

namespace Bo\AdminBundle\Controller;

use Bo\AdminBundle\Entity\Agenda;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Entity\Cancel;
use Bo\AdminBundle\Entity\Substitution;
use Bo\AdminBundle\Entity\Diary;
/**
 * Agenda controller.
*/
class AgendaController extends CommonController
{
    /**
    * Lists all agenda entities.
    */
    public function indexAction()
    {
        $oRepSch = $this->getRepository('BoAdminBundle:Agenda');
	$nb_tc = $oRepSch->getTotal();
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
	$aSchedule = $oRepSch->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);

        return $this->render('agenda/index.html.twig', array(
            	'schedules' => $aSchedule,
		'page' => $page, // forward current page to view,
		'nb_pages' => $nb_pages, //total number page,
		'total'=>$nb_tc, // record number.
		'nb_cpp' => $nb_cpp, // line's number to display
		'pm'=>"personnel",
		'sm'=>"schedule",
        ));
    }
    /**
     * Lists all agenda close and the contract.
     */
    public function closedAction()
    {
        $oRepSch = $this->getRepository('BoAdminBundle:Agenda');
	$nb_tc = $oRepSch->getTotal();
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
	$aSchedule = $oRepSch->getEndedAgenda();

        return $this->render('agenda/index.html.twig', array(
            	'schedules' => $aSchedule,
		'closed'=>1,
		'page' => $page, // forward current page to view,
		'nb_pages' => $nb_pages, //total number page,
		'total'=>$nb_tc, // record number.
		'nb_cpp' => $nb_cpp, // line's number to display
		'pm'=>"personnel",
		'sm'=>"schedule",
        ));
    }
    /**
     * Lists all agenda found after advanced search.
     */
    public function advancedsearchAction(Request $request)
    {
	$aCriteria = $this->getSearchCriteria($request);
        $oRepSch = $this->getRepository('BoAdminBundle:Agenda');
	$aAgenda = $oRepSch->searchByCriteria($aCriteria);

        return $this->render('agenda/search.html.twig', array(
            	'schedules' => $aAgenda,
		'pm'=>"personnel",
		'sm'=>"schedule",
        ));
    }
    /**
    * Creates a new Agenda entity.
    */
    public function newAction(Request $request,$idcontract)
    {
		$res1=$aContract=$aGroup=null;
		$oRepContract = $this->getRepository('BoAdminBundle:Contracts');
		$oContract = $oRepContract->find($idcontract);
		$teachers = $this->getRepository('BoAdminBundle:Teachers')->getAvailableForSchedule($oContract);//All teachers avalaible
        	$agenda = new Agenda();
		$aTraining=$this->getRepository('BoAdminBundle:Training')->findBy(array('contracts'=>$oContract));
		if(!isset($training[0]) and $oContract->getGroup() and $oContract->getGroup()->getId()>0){
			//Get group training 
			$aTraining = $this->getRepository('BoAdminBundle:Training')->findByIdgroup($oContract->getGroup()->getId());
		} 
		$agenda = isset($aTraining[0])?$this->getScheduleTraining($agenda,$aTraining[0]):$agenda = $this->getScheduleTraining($agenda);
		if($oContract->getEnddate()) $agenda->setEnddate($oContract->getEnddate());
        	$form = $this->createForm('Bo\AdminBundle\Form\AgendaType', $agenda);
        	$form->handleRequest($request);
		$idteacher = $request->request->get('idteacher');
        	if($form->isSubmitted() && $form->isValid()){
			$oTeacher = $this->getEmployeeById($idteacher);
			//check if the schedule is correct : startam > endam and startpm > endpm
			$check = $this->checkSchedule($agenda);
			if($idteacher>0 and $check==1){
				$aOverlap = $this->overlapForEmployee($agenda,$oTeacher);
				$availability = $this->checkAvailability($agenda,$oTeacher);
				if($availability==1){
					$agenda->setContracts($oContract);
					$oAbsence = $this->getSessionByName('absence');
					//if isset absence object set priority 1
					if($oAbsence!=null) $agenda->setPriority(1); 
					$agenda->setEmployee($oTeacher);		
					if($this->isGroupContract($oContract)){
						$oGroup=$oContract->getGroup();
						if($oGroup){
							$agenda->setGroup($oGroup);	
							if($this->existGroupEmployee($oTeacher,$oGroup)==false){
								$oGroup->addEmployee($oTeacher);
								$res1 = $this->updateEntity($oGroup);
							}else{
								$res1 = 1;
							}				
						}else{
							$message = $this->get('translator')->trans('Unable to create this teacher. No group is found for the contract.');
							$aMessage =array('type'=>"Warning",'texte'=>$message);					
						}
					}else{
						if($this->existContractEmployee($oTeacher,$oContract)==false){
							$oContract->addEmployee($oTeacher);
							$res1 = $this->updateEntity($oContract);
						}else{
							$res1 = 1;
						}
					}
					if(isset($res1) and $res1>0){
						$agenda = $this->setAgendaStatus($agenda);
						$res = $this->updateAmOrPmForTC($agenda);
						if($res>0){
							$this->notifyAdminMembers($agenda);
							$this->setActivity("Schedule created for teacher ".$this->getTeacherBy($oTeacher)." on contract id ".$oContract->getId()." by this user");
							$psi = $this->getRepository('BoAdminBundle:Param')->getParam("employee_agenda_invitation",27);		
							if($psi==1) $this->sendInvitation($agenda,1);	
							return $this->redirectToRoute('contracts_show', array('id' => $idcontract));										
						}
					}
				}
			}
		}		
		if($form->isSubmitted()) {
			if($idteacher==0 or $idteacher==null) $message = $this->get('translator')->trans('No teacher is found');
			if($check==0 or $check==2) $message = $this->get('translator')->trans('The schedules entered are not correct');
			if(isset($message)) $aMessage =array('type'=>"Warning",'texte'=>$message);
			else $aMessage = $this->getSessionByName('message');			
		}
		$aSchedule = $idteacher>0?$this->getAgendaByEmployee($oTeacher):null;
		if($aSchedule!=null){
			$aContract = $this->getArrayContractBy($aSchedule);
			$aGroup = $this->getArrayGroupBy($aSchedule);
		}	

		return $this->render('agenda/new.html.twig', array(
		    'agenda' => $agenda,
			'idcontract' => $idcontract,
			'schedules' => $aSchedule,
			'teachers'=>$teachers, //for the select form
			'idteacher'=>$idteacher,
			'message'=>$aMessage,
			'overlap'=>isset($aOverlap)?$aOverlap:null,
			'contract'=>$oContract,
			'contracts'=>$aContract,
			'groups'=>$aGroup,
			'status'=>$this->getContractStatus(),//get status definition list
			'absence'=>$this->getSessionByName('absence'),
		    'form' => $form->createView(),
				'pm'=>"contracts",
				'sm'=>"contracts",
		));
    }
    /**
    * Finds and displays a agenda entity.
    */
    public function showAction(Agenda $agenda)
    {
        $deleteForm = $this->createDeleteForm($agenda);
        $form = $this->createForm('Bo\AdminBundle\Form\CancelType', new Cancel());
	$oContract = $this->getContractsByAgenda($agenda);

        return $this->render('agenda/show.html.twig', array(
            'schedule' => $agenda,
		'contract'=>$agenda->getContracts(),
		'status'=>$this->getContractStatus(),//get status definition list
		'agendastatus'=>$this->getAgendaStatus(),//get status definition list
            	'delete_form' => $deleteForm->createView(),
            	'form' => $form->createView(),
		'substitution_form'=>$this->getMySubstitutionForm($agenda),
		'diary_form' => $this->createDiaryForm($agenda,new Diary())->createView(),
		'substitutes'=> $this->getRepository('BoAdminBundle:Teachers')->getAvailable($oContract,$this->getHolders($oContract)),
		'pm'=>"contracts",
		'sm'=>"schedule",
        ));
    }
    /**
    * Creates a new Cancel entity.
    */
    public function addcancelAction(Request $request, Agenda $oAgenda)
    {
		$this->verifySessionRights();
        	$cancel = new Cancel();
        	$form = $this->createForm('Bo\AdminBundle\Form\CancelType', $cancel);
        	$form->handleRequest($request);

        	if ($form->isSubmitted() && $form->isValid()) {
			$cancel->setAgenda($oAgenda);
			$res = $this->updateEntity($cancel);
			if($res>0){
				$this->setActivity("Cancel id ".$cancel->getId()." is Created by this user on ".$oAgenda->getId());
				//Notify teacher
				return $this->redirectToRoute('agenda_show',array('id'=>$oAgenda->getId()));
			}           
		}

		return $this->render('cancel/new.html.twig', array(
		    	'cancel' => $cancel,
			'schedule'=>$oAgenda,
		    	'form' => $form->createView(),
			'pm'=>"personnel",
			'sm'=>"cancel",
		));
    }
    /**
    * Displays a form to edit an existing Cancel entity.
    */
    public function editcancelAction(Request $request, Cancel $cancel)
    {
	$this->verifySessionRights();
        $deleteForm = $this->createDeleteCancelForm($cancel);
        $editForm = $this->createForm('Bo\AdminBundle\Form\CancelType', $cancel);
        $editForm->handleRequest($request);
	$agenda = $cancel->getAgenda();

        if ($editForm->isSubmitted() && $editForm->isValid()) {
		$this->updateEntity($cancel);
		return $this->redirectToRoute('agenda_show',array('id'=>$agenda->getId()));
        }

        return $this->render('cancel/edit.html.twig', array(
            	'cancel' => $cancel,
		'schedule'=>$agenda,
            	'edit_form' => $editForm->createView(),
            	'delete_form' => $deleteForm->createView(),
		'pm'=>"personnel",
		'sm'=>"cancel",
        ));
    }
    /**
    * Deletes a Cancel entity.
    */
    public function deletecancelAction(Request $request, Cancel $cancel)
    {
	$agenda = $cancel->getAgenda();
	$this->demoteAdvisor($cancel);
        $form = $this->createDeleteForm($cancel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($cancel);
            $em->flush();
        }

        return $this->redirectToRoute('agenda_show',array('id'=>$agenda->getId()));
    }
    /**
     * active a agenda entity.
     */
    public function activeAction(Agenda $agenda)
    {
	$agenda->setStatus(1);
	$this->updateEntity($agenda);
	return $this->redirectToRoute('agenda_show', array('id' => $agenda->getId()));	

    }
    /**
     * update a agenda entity.
     */
    public function updateAction(Agenda $agenda)
    {
	$this->setAgenda($agenda);
	$this->updateEntity($agenda);
	return $this->redirectToRoute('agenda_show', array('id' => $agenda->getId()));	

    }
    /**
    * Displays a form to edit an existing TeacherSchedule entity. 
    */
    public function editAction(Request $request,Agenda $agenda)
    {
	$aMessage=null;
	$oContract = $agenda->getContracts();
	$oTeacher = $agenda->getEmployee();
	if($agenda->getStartdate()->format("d-m-Y")=='30-11--0001' or $agenda->getStartdate()->format("d-m-Y")==null){
		$agenda->setStartdate(new \DateTime());	
	}
	if($oContract){
		$agenda->setEnddate($oContract->getEnddate());	
        	$editForm = $this->createForm('Bo\AdminBundle\Form\AgendaType', $agenda);
	}else{
        	$editForm = $this->createForm('Bo\AdminBundle\Form\AgendaType2', $agenda);
	}
        $deleteForm = $this->createDeleteForm($agenda);
        $editForm->handleRequest($request);

        if($editForm->isSubmitted() && $editForm->isValid()){
		$force = $request->request->get('btn-force');
		if($oContract){
			$type = $this->getContractType($oContract);
			//get total hour of the schedule on the agenda
			$hour = $this->addTimes($agenda,$type);
		}else $hour = $this->addTimes($agenda);
		if($force==null and $agenda->getHourperday()>$hour){
			$message = $this->get('translator')->trans('Hour per day is different the total of AM and PM hours');
			$aMessage =array('type'=>"Warning",'texte'=>$message);
			$force = 1;
		}else{
			$agenda = $this->actualize($agenda);
			$agenda = $this->setAgendaStatus($agenda);
			$res = $this->updateAmOrPmForTC($agenda);
			if($res>0){
				$this->notifyAdminMembers($agenda);
				if($oContract){
					$this->setActivity("Teacher schedule updated for ".$this->getTeacherBy($oTeacher)." on contract id ".$oContract->getId()." by this user"); 
					return $this->redirectToRoute('contracts_show', array('id' => $oContract->getId()));
				}else{
					$this->setActivity("Teacher schedule updated for ".$this->getTeacherBy($oTeacher)." by this user"); 	
					return $this->redirectToRoute('agenda_index');
				}
			}	
		}				
        }

        return $this->render('agenda/edit.html.twig', array(
            	'schedule' => $agenda,
		'contract'=>$oContract,
		'message'=>$aMessage,
		'force'=>isset($force)?$force:null,
		'teacher'=>$oTeacher,
		'idteacher' => $oTeacher->getId(),
            	'form' => $editForm->createView(),
		'url' => $request->headers->get('referer'),
            	'delete_form' => $deleteForm->createView(),
		'pm'=>"contracts",
		'sm'=>"contracts",
        ));
    }
    /**
    * Deletes a agenda entity.
    */
    public function deleteAction(Request $request, Agenda $oAgenda)
    {
	$idcontract=null;
        $form = $this->createDeleteForm($oAgenda);
        $form->handleRequest($request);
	if($oAgenda->getContracts()) $idcontract = $oAgenda->getContracts()->getId();

        if ($form->isSubmitted() && $form->isValid()) {
		/*
		$aInvitation = $this->getRepository("BoAdminBundle:Invitation")->getByAgenda($oAgenda);
		if(count($aInvitation)>0){
			$this->
		}
		*/
		$this->removeTeacherFrom($oAgenda);
            	$em = $this->getDoctrine()->getManager();
            	$em->remove($oAgenda);
            	$em->flush();
        }

        if($idcontract!=null) return $this->redirectToRoute('contracts_show',array('id'=>$idcontract));
	return $this->redirectToRoute('agenda_index');
    }

    /**
    * Finds and displays a Employee agenda.
    */
    public function generalAction()
    {
		$this->verifySessionRights();
		$oRepEmployee = $this->getRepository('BoAdminBundle:Employee');
		$aEmployee = $oRepEmployee->getActive();
		if(isset($aEmployee[0])) $employee=$aEmployee[0];
		$oTokenuser=$this->getTokenUser();
		$this->setActivity($employee->getName()." ".$employee->getFirstname()."'s Agenda is consulted by this user");
		$aUser = $this->getRepository('BoUserBundle:User')->findBy(array('employee'=>$employee));
		$aTimes = $this->getAgendaTime();
		$aDates = $this->getDatesOfWeek();
		$aDkey = array_keys($aDates);
		$aAgenda = $this->generateAgenda($employee,$aTimes,$aDates);
		$aFormatdate = $this->formatDate($aDates);
		$aAbsences = $this->getRepository('BoAdminBundle:Absences')->findBy(array('employee'=>$employee));
        	return $this->render('agenda/general.html.twig', array(
            		'employee' => $employee,
			'teachers' => $aEmployee,
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
			'sm'=>"agenda",
        	));
    }
    /**
    * Finds and displays a Employee agenda.
    */
    public function employeeAction(Employee $employee,Request $request)
    {
		$this->verifySessionRights();
		$em = $this->getDoctrine()->getManager();
		$oRepEmployee = $em->getRepository('BoAdminBundle:Employee');
		$aEmployee = $oRepEmployee->getEmployeeWithContract();
		$oTokenuser=$this->getTokenUser();
		$this->setActivity($employee->getName()." ".$employee->getFirstname()."'s Agenda is consulted by this user");
        $em = $this->getDoctrine()->getManager();
		$aUser = $em->getRepository('BoUserBundle:User')->findBy(array('employee'=>$employee));
		$aTimes = $this->getAgendaTime();
		$startdate = $request->request->get('startdate');
		$enddate = $request->request->get('enddate');
		if($startdate===null and $enddate==null){
			$aDates = $this->getDatesOfWeek();	
		}else{
			$startdate =  new \DateTime($startdate);
			$enddate =  new \DateTime($enddate);	
			$previous = $request->request->get('previous');		
			$next = $request->request->get('next');	
			$number = $previous==1?-7:7;
			$startdate = $this->getDatePlus($startdate,$number);
			$enddate = $this->getDatePlus($enddate,$number);	
			$aDates = $this->getDatesOfWeek($startdate,$enddate);				
		}
		$aDkey = array_keys($aDates);
		$aAgenda = $this->generateAgenda($employee,$aTimes,$aDates);
		$aFormatdate = $this->formatDate($aDates);
		$aAbsences = $em->getRepository('BoAdminBundle:Absences')->findBy(array('employee'=>$employee));
        return $this->render('agenda/index.html.twig', array(
            'employee' => $employee,
			'agenda'=>$aAgenda,
			'datekeys'=>$aDkey,
			'teachers' => $aEmployee,
			'user'=>isset($aUser[0])?$aUser[0]:null,
			'dates'=>$aDates,
			'formatdates'=>$aFormatdate,
			'ttkeys'=>array_keys($aTimes),
			'today'=> new \DateTime(date("d-m-Y")),
			'times'=>$aTimes,
			'token'=>$oTokenuser,
			'pm'=>"personnel",
			'sm'=>"agenda",
        ));
    }
    /**
    * Finds and displays a Employee agenda by ajax call.
    */
    public function searchAction(Request $request)
    {
		$this->verifySessionRights();
		$em = $this->getDoctrine()->getManager();
		$ContractEntity = $em->getRepository('BoAdminBundle:Contracts');
		$oEmpRep = $em->getRepository('BoAdminBundle:Employee');	
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
		if($number!=0){
			$startdate = $this->getDatePlus($startdate,$number);
			$enddate = $this->getDatePlus($enddate,$number);
		}
		$this->setActivity($employee->getName()." ".$employee->getFirstname()."'s Agenda is consulted by this user");
        	$em = $this->getDoctrine()->getManager();
		$aTimes = $this->getAgendaTime();
		$aDates = $this->getDatesOfWeek($startdate,$enddate);	
		$aAgenda = $this->generateAgenda($employee,$aTimes,$aDates);
		$aFormatdate = $this->formatDate($aDates);
		$aDkey = array_keys($aDates);
		
        	return $this->render('BoAdminBundle:Agenda:content.html.twig', array(
            		'employee' => $employee,
			'agenda'=>$aAgenda,
			'datekeys'=>$aDkey,
			'dates'=>$aDates,
			'formatdates'=>$aFormatdate,
			'ttkeys'=>array_keys($aTimes),
			'today'=> new \DateTime(date("d-m-Y")),
			'times'=>$aTimes,
        ));
    }
    /**
    * Search a Teacher Schedule
    */
    public function search2Action(Request $request)
    {
		$oEntity = $this->getRepository('BoAdminBundle:Agenda');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$this->get('session')->set('search',$description);
		$aResult = $oEntity->search($description);
		if(isset($aResult[0])){
			//$aSchedule = $this->getAllInArray($aResult);
			return $this->render('BoAdminBundle:Agenda:search.html.twig', array(
				'schedules'=>$aResult,
				'count'=>count($aResult),
				'connected' => $this->getConnectedEmployee(),
			));				
		}
		return $this->render('BoAdminBundle:Agenda:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
	$employee = $this->getConnectedEmployee();
        $oRepSch = $this->getRepository('BoAdminBundle:Agenda');
	$nb_tc = $oRepSch->getTotal();
	if($request->isXmlHttpRequest())
	{	
		$page = $request->request->get('page');		
		$this->get('session')->set('page',$page);
	}
	//get number line per page
	$nb_cpp = $this->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
	$nb_pages = ceil($nb_tc/$nb_cpp);
	$offset = ($page-1) * $nb_cpp;
	$aSchedule = $oRepSch->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
        return $this->render('BoAdminBundle:Agenda:tbliste2.html.twig', array(
                'schedules' => $aSchedule,
		'connected' => $this->getConnectedEmployee(),
		'page' => $page, // On transmet à la vue la page courante,
        ));
    }
	private function setActivity($activity){
		return $this->createActivity("Agenda",$activity);	
	}
    /**
    * remove employee from showAction of contract
    */
    public function removeAction(Request $request,Agenda $oAgenda)
    {
		//Initialize variables
		$oContract = $oGroup = null;
		//Save contract id before any execution
		$idcontract = $oAgenda->getContracts()->getId();
		//remove teacher from the contract
		$res = $this->removeTeacherFrom($oAgenda);
		//If there exists a contract on the agenda get contract
		if($oAgenda->getContracts()) $oContract = $oAgenda->getContracts(); 
		if($oAgenda->getGroup()) $oGroup = $oAgenda->getGroup(); 
		$this->disableThis($oAgenda);
		if($oContract) $this->setActivity($this->getTeacherBy($oAgenda->getEmployee())." schedule removed on contract id ".$oContract->getId()." by this user");	
		if($oGroup) $this->setActivity($this->getTeacherBy($oAgenda->getEmployee())." schedule removed on group id ".$oGroup->getId()." by this user");	
		return $this->redirectToRoute('contracts_show', array('id' => $idcontract));
	}
    /**
     * Creates a form to delete a agenda entity.
     * @param Agenda $agenda The agenda entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Agenda $agenda)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('agenda_delete', array('id' => $agenda->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /**
     * Creates a form to delete a agenda entity.
     * @param Cancel $cancel The cancellation entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteCancelForm(Cancel $cancel)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('agenda_delete_cancel', array('id' => $cancel->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /**
     * Check if it exist a TeacherSchedule line in database.
     */
    public function checkAction(Request $request)
    {
		if($request->isXmlHttpRequest())
		{	
			$data = $request->request->get('data');	
		}
		$overlap = $this->checkSchedule($data);
		print_r($overlap);
		exit(0);
		
    }
	protected function getLink($type,$idinvitation){
		return sprintf("%s://%s%s",$_SERVER ['REQUEST_SCHEME'],$_SERVER ['HTTP_HOST'],$this->renderView("BoAdminBundle:Agenda:link.html.twig",array('type'=>$type,'id'=>$idinvitation)));
	}
	private function getSearchCriteria($request){
		$aCriteria = array("idagenda","idcontract","idgroup","idemployee","studentname","groupname","teachername","contractnumber"); 
		return $this->getFromRequestBis($aCriteria,$request);
	}
	    /**
	    * Creates a new Substitution entity.
	    */
	    public function substituteAction(Request $request, $idagenda)
	    {
		$oRepTeacher = $this->getRepository('BoAdminBundle:Teachers');
		$oAgenda = $this->getRepository('BoAdminBundle:Agenda')->find($idagenda);
		$oContract = $oAgenda->getContracts();
		$oGroup = $oAgenda->getGroup();
		$substitution = new Substitution();
		$form = $this->createForm('Bo\AdminBundle\Form\SubstitutionType2', $substitution);
		$form->handleRequest($request);
		$aHolders=$this->getHolders($oContract);
		if($oContract) $aTeachers = $oRepTeacher->getAvailable($oContract,$aHolders);
		else $aTeachers = $oRepTeacher->getAllWithout($aHolders);
		if($form->isSubmitted() && $form->isValid()){
			$idsubstitute = $request->request->get('teachers');
			$oTeacher = $this->getEmployeeById($idsubstitute);
			$oSchedule = $this->cloneAgenda($oAgenda,$substitution);
			$aOverlap = $this->overlapForEmployee($oSchedule,$oTeacher);
			$availability = $this->checkAvailability($oSchedule,$oTeacher);
			//Verify if the teacher is absent and the student is not : received boolean
			$bATS = $this->verifyAbsencefor($substitution,$oAgenda);
			//echo $bATS;
			//exit(0);
			if($availability==1 and $bATS==1){
				$substitution->setIdsubstitute($idsubstitute);
				$oTsweek = $this->getTsWeek($substitution->getStartdate());
				$substitution->setTsweek($oTsweek);
				$message = $this->createSubstitution($oAgenda,$substitution,$oTeacher,$oContract);	
			    	if($message==null) return $this->redirectToRoute('agenda_show',array('id'=>$idagenda));
			}else{
				$message = $this->getSessionByName('message');
			}
		}
		return $this->render('contracts/substitute.html.twig', array(
		    	'substitution' => $substitution,
			'agenda'=>$oAgenda,
			'contract' => $oContract,
			'idholder' => isset($idholder) and $idholder>0?$idholder:0,
			'substitutes'=> $this->getRepository('BoAdminBundle:Teachers')->getAvailable($oContract,$this->getHolders($oContract)),
			'idsubstitute' => isset($idsubstitute) and $idsubstitute>0?$idsubstitute:0,
			'teachers'=> $aTeachers,
			'message'=> isset($message)?$message:null,
			'overlap'=>isset($aOverlap)?$aOverlap:null,
			'idteacher'=>$idsubstitute,
			'holders'=>$aHolders,
		    	'substitution_form' => $form->createView(),
			'pm'=>"personnel",
			'sm'=>"substitution",
		));
	    }
	private function createDiaryForm($oAgenda,$diary){
		$oEmployee = $oAgenda->getEmployee();
		if($oEmployee) $diary->setEmployee($oEmployee); 
		$oContract = $oAgenda->getContracts();
		$oGroup = $oAgenda->getGroup();
		if($oGroup) $diary->setGroup($oGroup); 
		if($oContract){ 
			$diary->setContracts($oContract); 
			$oStudent = $this->getOnlyStudentBy($oContract);
			if($oStudent) $diary->setStudents($oStudent); 
		}
        	$form = $this->createForm('Bo\AdminBundle\Form\DiaryModalType', $diary);
		return $form;
	}
    	/**
    	 * Creates a new diary entity.
     	*/
    	public function newdiaryAction(Request $request, Agenda $agenda)
    	{
        	$diary = new Diary();
		$form = $this->createDiaryForm($agenda,$diary);
       	 	$form->handleRequest($request);

        	if ($form->isSubmitted() && $form->isValid()) {
           	 	$em = $this->getDoctrine()->getManager();
            		$em->persist($diary);
            		$em->flush();

			return $this->redirectToRoute('agenda_show',array('id'=>$agenda->getId()));
       		}

        	return $this->render('agenda/diary.html.twig', array(
            		'diary' => $diary,
            		'form' => $form->createView(),
			'pm'=>"contracts",
			'sm'=>"diary",
        	));
    }
	private function createSubstitution($oAgenda,$oSubstitution,$oTeacher,$oContract){
		$oRepSub = $this->getRepository('BoAdminBundle:Substitution');
		$message=null;
		//If the substitution end date is greater than to the scheduled  
		//the substitute has to take the place of the contract's holder
		if($oSubstitution->getEnddate()>=$oAgenda->getEnddate()){
			//Update the end date of the current agenda
			$oAgenda->setEnddate($this->getDatePlus($oSubstitution->getStartdate(),-1));
			$this->updateEntity($oAgenda);
			//Create a new agenda for the substitute
			$oNew_Agenda = $this->createNewAgenda($oAgenda,$oSubstitution,$oTeacher);
			//Notify advisor for new schedule
			$this->notifyAdminMembers($oNew_Agenda);
		}else{
			//Save the substitution
			if(count($oRepSub->existSubstittution($oSubstitution))==0){ 
				$oSubstitution = $this->setStudentForSubstitution($oSubstitution,$oContract);
				$this->updateEntity($oSubstitution);
				//Notify advisor for the substitution
				$this->notifyForSubstitution($oSubstitution,$agenda);
			}else $message = $this->getTypeMessage("Warning",$this->get('translator')->trans('A substitution already exists for this teacher and this date'));
			//Attach the new substitution to the current agenda
			if($message==null){ 
				$oAgenda->addSubstitution($oSubstitution);
				$this->updateEntity($oAgenda);
			}
		}
		return $message;
	} 
	private function createNewAgenda($oAgenda,$oSubstitution,$oTeacher){
		$oContract=$oAgenda->getContracts();
		if($this->existEntity($oTeacher,$oContract->getEmployee())==false){
			$oContract->addEmployee($oTeacher);
			$res1 = $this->updateEntity($oContract);
		}

			$oNew_agenda = new Agenda();
			$oNew_agenda->setContracts($oAgenda->getContracts());
			$oNew_agenda->setStudents($oAgenda->getStudents());
			$oNew_agenda->setGroup($oAgenda->getGroup());
			$oNew_agenda->setEmployee($oTeacher);
			$oNew_agenda->setDescription($oAgenda->getDescription());
			$oNew_agenda->setAmorpm($oAgenda->getAmorpm());
			$oNew_agenda->setMonday($oAgenda->getMonday());
			$oNew_agenda->setTuesday($oAgenda->getTuesday());
			$oNew_agenda->setWednesday($oAgenda->getWednesday());
			$oNew_agenda->setThursday($oAgenda->getThursday());
			$oNew_agenda->setFriday($oAgenda->getFriday());
			$oNew_agenda->setSaturday($oAgenda->getSaturday());
			$oNew_agenda->setHourperweek($oAgenda->getHourperweek());
			$oNew_agenda->setHourperday($oSubstitution->getHour());
			$oNew_agenda->setStartam($oSubstitution->getStartam());
			$oNew_agenda->setEndam($oSubstitution->getEndam());
			$oNew_agenda->setStartpm($oSubstitution->getStartpm());
			$oNew_agenda->setEndpm($oSubstitution->getEndpm());
			$oNew_agenda->setStartdate($oSubstitution->getStartdate());
			$oNew_agenda->setEnddate($oSubstitution->getEnddate());
			$oNew_agenda = $this->setAgendaStatus($oNew_agenda);
			$this->updateEntity($oNew_agenda);
			return $oNew_agenda;
	}
	private function getMySubstitutionForm($oAgenda){
		$oSubstitution = new Substitution();
		$oContract =  $oAgenda->getContracts();
		if($oAgenda->getEmployee()) $oSubstitution->setIdholder($oAgenda->getEmployee()->getId());
		if($oAgenda->getContracts()){ 
			$oSubstitution->setIdcontract($oAgenda->getContracts()->getId());
			$oSubstitution->setStudent($this->getStudentBy($oContract));
		}
		if($oAgenda->getGroup()){
			$oSubstitution->setIdgroup($oAgenda->getGroup()->getId());
			$oSubstitution->setStudent($oAgenda->getGroup()->getName());
		}
		$oSubstitution->setStartdate($this->getNow());
		if($oContract) $oSubstitution->setEnddate($oContract->getEnddate());
		$oSubstitution->setHour($oAgenda->getHourperday());
		$oSubstitution->setStartam($oAgenda->getStartam());
		$oSubstitution->setEndam($oAgenda->getEndam());
		$oSubstitution->setStartpm($oAgenda->getStartpm());
		$oSubstitution->setEndpm($oAgenda->getEndpm());
		$substitutionform = $this->createForm('Bo\AdminBundle\Form\SubstitutionType2',$oSubstitution);
		return $substitutionform->createView();
	}
}

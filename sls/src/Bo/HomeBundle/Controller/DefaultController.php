<?php

namespace Bo\HomeBundle\Controller;

use Bo\AdminBundle\Controller\CommonController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Bo\AdminBundle\Entity\Substitution;
use Bo\AdminBundle\Entity\Emppj;
use Bo\AdminBundle\Form\EmppjType;
use Bo\AdminBundle\Entity\Absences;
use Bo\AdminBundle\Form\AbsencesType2;
use Bo\AdminBundle\Entity\Tickets;
use Bo\AdminBundle\Form\TicketsType;

class DefaultController extends CommonController
{
    public function indexAction(Request $request)
    {
		$this->verifySession();
		//$em = $this->getDoctrine()->getManager();
		//get info maintenance
		$iParamval = $this->getParam("maintenance_inprogress",8);
		//If maintenance display maintenance page
		if($iParamval==1) return $this->redirectToRoute('bo_admin_maintenance');	
		$this->setActivity("Connexion à SLS-MANAGER");
		$em = $this->getDoctrine()->getManager();
		$this->setUserLocale($request->getLocale());
		$aSecurityCotes=$emppjs=$aDeleteForm=null;
		$ContractEntity = $this->getRepository('BoAdminBundle:Contracts');
		//$user=$this->getTokenUser();
		$employee=$this->getConnectedEmployee();	
		$aNotification = $this->getNotification($employee);
		if($employee){
			$aSchedule = $this->getScheduleByDateAndStatus($employee,$this->getToday());
			$aInvitation = $this->getRepository('BoAdminBundle:Invitation')->getByEmployee($employee);
			$aSecurityCotes = $this->getRepository('BoAdminBundle:SecurityCote')->findBy(array('employee'=>$employee));
			$emppjs = $this->getRepository('BoAdminBundle:Emppj')->findBy(array('employee'=>$employee));
			$aDeleteForm = $this->getAllDeleteEpjs($emppjs);
		}
		$aCurrentWeek = $this->getWeekSheetDays($this->getToday());
		$aPrevWeek = $this->getPreviousWeek($aCurrentWeek);
		$aNextWeek = $this->getNextWeek($aCurrentWeek);
		$aEvents = $this->generateEvents($employee,$aCurrentWeek);
		$aNextEvents = $this->generateEvents($employee,$aNextWeek);
        	$form = $this->createForm('Bo\AdminBundle\Form\EmppjType', new Emppj());		
        	return $this->render('BoHomeBundle:Default:index.html.twig',
			array(
				'employee'=>$employee,
				'epjs'=>$emppjs,
				'tickets'=>$this->getRepository('BoAdminBundle:Tickets')->getMyHelp($employee),
				'status'=> $this->getStatusTicket(),
				'today'=>$this->getToday(),
				'epjs_delete_form'=>$aDeleteForm,
				'securityCotes'=>$aSecurityCotes,
				'invitations'=>$aInvitation,
				'b_invite'=>$this->getExistInvite($aInvitation),
				'form' => $form->createView(),
				'imgname'=>$this->getRandomImage(),
				'welcome'=>$this->getWelcomeMessage('Teacher'),
				'dwelcome'=>$this->getParam("teacher_display_message",28),
				'campuss'=>$em->getRepository('BoAdminBundle:Campus')->findAll(),
				'notif'=>$aNotification,
				'tb_am'=>$aEvents['am'],
				'tb_pm'=>$aEvents['pm'],
				'dnb'=>1,//display the action pane for the teacher's interface
				//'ntb_am'=>$aNextEvents['am'],
				//'ntb_pm'=>$aNextEvents['pm'],
				'ticketform'=>$this->getTicketForm2(),
				'absform'=>$this->getAbsenceFormView(),
				'absences'=>$this->getEmployeeAbsences($employee,5,0),
				'dates'=>$aCurrentWeek,
				'pdates'=>$aPrevWeek,
				'ndates'=>$aNextWeek,
				'pm'=>"tabeau-bord",
				'sm'=>"home",
			)
		);
    }
	protected function getAbsenceFormView(){
		$oAbsence = new Absences();
		$oAbsence->setNumberday(1);
        	$form = $this->createForm('Bo\AdminBundle\Form\AbsencesType4',$oAbsence);		
		return $form->createView();
	}

	private function getTicketForm2(){
        	$ticket = $this->getTicketForm();
       	 	$form = $this->createForm('Bo\AdminBundle\Form\TicketsType2', $ticket);
		return $form->createView();
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
		//End to delete
		$employee = $oEmpRep->find($idemployee);
		$aCurrentWeek = $this->getWeekSheetDays($date);
		$aPrevWeek = $this->getPreviousWeek($aCurrentWeek);
		$aNextWeek = $this->getNextWeek($aCurrentWeek);
		$aEvents = $this->generateEvents($employee,$aCurrentWeek);
		$aNextEvents = $this->generateEvents($employee,$aNextWeek);
		
        	return $this->render('BoHomeBundle:Default:event-tab.html.twig',
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
	private function getAllDeleteEpjs($emppjs){
		$aResult = array();
		foreach($emppjs as $oEpjs){
			$form = $this->createDeleteForm($oEpjs);
			$aResult[$oEpjs->getId()] = $form->createView();
		}
		return $aResult;
	}
    public function teamcontactAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$oEntity = $em->getRepository('BoAdminBundle:TeamContacts');
		$this->removeSession();
		//Récupérer les information de l'utilisateur connecté
		$oEmployee = $this->getConnectedEmployee();	
		if(!$oEmployee){
			$this->setSessionByName('data',array('pm'=>"tabeau-bord",'sm'=>"teamcontact"));
			return $this->redirectToRoute('bo_home_broken');	
		}
		$this->setActivity("Access to Administrative team");		
		$teamcontacts = $oEntity->findBy(array(),array('id' => 'asc'));
        	return $this->render('BoHomeBundle:Default:teamcontact.html.twig',array(
			'user'=>$this->getTokenUser(),
			'employee'=>$oEmployee,
			'teamcontacts'=>$teamcontacts,
			'pm'=>"tabeau-bord",
			'sm'=>"teamcontact",			
		));
    }
    public function contractAction(Request $request)
    {
		$this->removeSession();
		$em = $this->getDoctrine()->getManager();
		$oRepTs = $em->getRepository('BoAdminBundle:Timesheet');
		$oRepAbs = $em->getRepository('BoAdminBundle:Absences');
		$oRepSub = $em->getRepository('BoAdminBundle:Substitution');
		$ContractEntity = $em->getRepository('BoAdminBundle:Contracts');
		$oTCEntity =$em->getRepository('BoAdminBundle:Agenda');
		$today = new \DateTime(date("d-m-Y"));
		$this->setUserLocale($request->getLocale());
		$aStudents=$sTraining=$aTeacherSchedule=$oContract=$aGroup=$oGroup=$aTSC=$aTSG=$aExistContAbsence=$aExistGroupAbsence=null;
		//Récupérer les information de l'utilisateur connecté
		$employee = $this->getConnectedEmployee();
		if(!$employee){
			$this->setSessionByName('data',array('pm'=>"tabeau-bord",'sm'=>"contract"));
			return $this->redirectToRoute('bo_home_broken');	
		}
		$aGroup = $this->getGroupsBy($employee);
		$aExistTsGroup = $oRepTs->getExistTsGroup($aGroup,$employee,$today);
		$aContract = $this->getContractsBy($employee);
		$aExistTsContract = $oRepTs->getExistTsContract($aContract,$employee,$today);
		if(isset($aContract[0])){
			//Get array of object of teacher schedule with contract id as key 
			$aTSC = $oTCEntity->getTeacherScheduleBis($aContract,$employee);
			//Get array of boolean with contract id as key, 1 if there exists absence for this contracts and date of day
			//display action if there deos not exist the contract id as key of array
			$aExistContAbsence = $this->getContratAbsences($employee,$aTSC);
		}
		if(isset($aGroup[0])){
			$aGroupContract = $em->getRepository('BoAdminBundle:Contracts')->findByGroup($aGroup[0]);
			//Get array of object of teacher schedule with contract id as key 
			$aTSG = $oTCEntity->getTScForGroups($aGroup,$employee);	
			//Get array of boolean with contract id as key, 1 if there exists absence for this contracts and date of day
			//display action if there deos not exist the contract id as key of array
			$aExistGroupAbsence = $this->getGroupAbsences($employee,$aTSG);			
		} 
		//$aSubByContract is the array of the substitution for the exixsting contracts
		//If it exist a substitution for a contract, the "AddTs" will be disable for this line of this contract		
		$aSubByContract = $oRepSub->getByContracts($aContract,$employee);
		//$aSubByGroup is the array of the substitution for the exixsting group
		//If it exist a substitution for a group, the "AddTs" will be disable for the line of this group
		$aSubByGroup = $oRepSub->getByContracts($aGroup,$employee);
		//Verify if the teacher is authoriwed to change the form date
		$tsdateautho = $this->getTsDateAuthorized($employee);
		$this->setActivity("Access to dashboard");		
        	return $this->render('BoHomeBundle:Default:contract.html.twig',array(
			'user'=>$this->getTokenUser(),
			'contracts'=> $aContract,
			'etsc'=>$aExistTsContract,
			'etsg'=>$aExistTsGroup,
			'existcontabs'=>$aExistContAbsence,
			'existgroupabs'=>$aExistGroupAbsence,
			'gcontracts'=>isset($aGroupContract[0])?$aGroupContract:null,
			'groups'=>$aGroup,
			'employee'=>$employee,
			'subcontr'=>$aSubByContract,
			'abscont'=>$this->getEmployeeTodayAbsences($employee),
			'subgroup'=>$aSubByGroup,
			'dtsbc'=>$this->getDtsb($aTSC,1),//Display creation timesheet bouton for contract, if 1 display else hide it
			'dtsbg'=>$this->getDtsb($aTSG,2),//Display creation timesheet bouton for group, if 1 display else hide it
			//'cth'=>$this->getCreatingTsHour(),//cth is the time when the teacher can do the timesheet 
			'authorization'=>$tsdateautho,
			'now'=>$today,
			'students'=>$aStudents,
			'tsc'=>$aTSC,//Teacher Schedule for contracts
			'tsg'=>$aTSG,//Teacher Schedule for groups
			'pm'=>"tabeau-bord",
			'sm'=>"contract",			
		));
    }
    /**
    * Creates a new Absences entity.
    */
    public function newabsenceAction(Request $request)
    {
	$employee = $this->getConnectedEmployee();
        $absence = new Absences();
	$aMessage=null;
        $form = $this->createForm('Bo\AdminBundle\Form\AbsencesType4', $absence);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid() && $employee!=null){
		$sheckts=$this->checkExistingTsFor($employee,$absence->getStartdate());
		$oRepAbs = $this->getRepository('BoAdminBundle:Absences');
		$bExist = $oRepAbs->existEmployeeAbsence($employee,$absence->getStartdate());
		if($bExist==false){
			//$enddate = $this->getDatePlusBis($absence->getStartdate(),$absence->getNumberday()-1);
			//$absence->setEnddate($enddate);
			$absence->setEmployee($employee);
			$absence->setCreateby($employee->getFirstname()." ".$employee->getName());
			$res = $this->createAbsence($absence);
			if($res>0){
				$this->setActivity("Absence id ".$absence->getId()." is created for ".$this->getFullnameOf($employee));	
				if(!in_array(@$_SERVER['REMOTE_ADDR'], array(
					'127.0.0.1',
					'::1',
				))) $this->notifyAdmin($absence,$employee);
			}
			return $this->redirectToRoute('bo_home_homepage');
		}elseif($bExist==true){
			$message = $this->get('translator')->trans('An absence already exists for you and for this date');
			$aMessage = $this->getFormatMessage('Warning',$message);
		}elseif($sheckts==true){
			$message = $this->get('translator')->trans('Some timesheet are already created for you, so you can not create absence for this date');
			$aMessage = $this->getFormatMessage('Warning',$message);	
		}			
        }
	if($employee==null) $this->getTypeMessage("warning","Employee not found.");

        return $this->render('BoHomeBundle:Absences:new.html.twig', array(
            	'absence' => $absence,
		'employee'=>$employee,
		'message'=>$aMessage,
            	'form' => $form->createView(),
		'pm'=>"request",
		'sm'=>"absences",
        ));
    }
    /**
    * Creates a new Tickets entity.
    */
    public function newticketAction(Request $request)
    {
        $ticket = new Tickets();
        $form = $this->createForm('Bo\AdminBundle\Form\TicketsType2', $ticket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            	$em = $this->getDoctrine()->getManager();
		$oEmployee = $this->getConnectedEmployee();
		$ticket->setEmployee($oEmployee);
		$ticket=$this->doAffectation($ticket,$oEmployee);
		//Upload file
		if($ticket->getFilename()){
			$file = $ticket->getFilename();
			$fileName = $this->get('app.ticketimage_uploader')->upload($file);
			$ticket->setFilename($fileName);								
		}			
		$res = $this->updateEntity($ticket);
		if($res>0){
			$this->notifyContacts($ticket);
			return $this->redirectToRoute('bo_home_homepage');
		}			
        }

        return $this->render('BoHomeBundle:Tickets:new.html.twig', array(
            	'ticket' => $ticket,
            	'form' => $form->createView(),
		'pm'=>"request",
		'sm'=>"tickets",
        ));
    }
    /**
    * Displays a form to edit an existing Employee entity.
    */
    public function editAction(Request $request)
    {
	$employee = $this->getConnectedEmployee();	
        $editForm = $this->createForm('Bo\AdminBundle\Form\EmployeeType3', $employee);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$this->updateEntity($employee);
			$this->setActivity($employee->getName()." ".$employee->getFirstname()." account is updated by this user");
			return $this->redirectToRoute('bo_home_homepage');
        }
        return $this->render('BoHomeBundle:Default:edit.html.twig', array(
            'employee' => $employee,
            'edit_form' => $editForm->createView(),
			'pm'=>"tabeau-bord",
			'sm'=>"home",
        ));
    }
    public function brokenAction()
    {
		$aData = $this->getSessionByName('data');
		$rand = rand(1,2);
		$message = 	array('type'=>"Warning",'texte'=>"A technical problem occurred.");
        return $this->render('BoHomeBundle:Default:errors.html.twig', array(
            'employee' => $this->getConnectedEmployee(),
			'message' => $message,
			'imgname' => $rand.".jpg",
			'pm'=>$aData['pm'],
			'sm'=>$aData['sm'],
        ));
    }
	private function setActivity($activity){
		return $this->createActivity("Teacher Home",$activity);	
	}
    public function applicationAction()
    {
        return $this->render('BoHomeBundle:Default:application.html.twig',
			array(
			'pm'=>"applications",
			'sm'=>"absences",
		));	
	}
	public function languageAction(Request $request)
	{
		$this->setUserLocale($request->getLocale());
		$url = $this->getReferer();
		if(empty($url)) {
			$url = $this->container->get('router')->generate('bo_admin_homepage');
		}
		return new RedirectResponse($url);
	}
	private function getNotification($employee){
		$aNotification=array();
        $em = $this->getDoctrine()->getManager();
		$oRepSub=$em->getRepository('BoAdminBundle:Substitution');
		//Substitution Notification
		//Today
		$today = $this->getTodayPlus(0);
		$aSubst = $oRepSub->findBy(array('startdate'=>$today,'idsubstitute'=>$employee->getId()));
		if(isset($aSubst[0])){
			$aNotification[]=array('object'=>"Sub",'when'=>"Today",'id'=>$aSubst[0]->getId());
		}
		//Tomorrow
		$tomorrow = $this->getTodayPlus(1);
		$aSubst = $oRepSub->findBy(array('startdate'=>$tomorrow,'idsubstitute'=>$employee->getId()));
		if(isset($aSubst[0])){
			$aNotification[]=array('object'=>"Sub",'when'=>"Tomorrow",'id'=>$aSubst[0]->getId());
		}
		//After Tomorrow
		$tomorrow = $this->getTodayPlus(2);
		$aSubst = $oRepSub->findBy(array('startdate'=>$tomorrow,'idsubstitute'=>$employee->getId()));
		if(isset($aSubst[0])){
			$aNotification[]=array('object'=>"Sub",'when'=>"Tomorrow",'id'=>$aSubst[0]->getId());
		}
		//After After Tomorrow
		$tomorrow = $this->getTodayPlus(3);
		$aSubst = $oRepSub->findBy(array('startdate'=>$tomorrow,'idsubstitute'=>$employee->getId()));
		if(isset($aSubst[0])){
			$aNotification[]=array('object'=>"Sub",'when'=>"Tomorrow",'id'=>$aSubst[0]->getId());
		}
		return $aNotification;
	}
    /**
     * Creates a form to delete a emppj entity.
     *
     * @param emppj $emppj The emppj entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(emppj $emppj)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('home_emppj_delete', array('id' => $emppj->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /**
    * Notify admin for this absence 
    */
	public function notifyAdmin(Absences $absence,$employee){
		$em = $this->getDoctrine()->getManager();
		$to = $em->getRepository('BoAdminBundle:Param')->getParam("email_cancel",16);
		$cpemail = $this->getCpEmailByAbsence($absence);
		if($cpemail!="" and $cpemail!=null){
			$cc = $cpemail.$em->getRepository('BoAdminBundle:Param')->getParam("email_training_coordinator",22);
		}else{
			$cc = $em->getRepository('BoAdminBundle:Param')->getParam("email_training_coordinator",22);
		}		
		$subject = "Absence du professeur: ".$this->getFullnameOf($employee);	
		$body = $this->renderView("BoHomeBundle:Absences:mail.html.twig", array('absence'=>$absence));
		$Bcc = "jnvekounou@yahoo.fr";		
		$res = $this->sendmail($to,$subject,$body,$cc,$Bcc);				
		if($res==1){
			$this->setActivity("Mail sent to ".$to." for absence id:".$absence->getId());
		}else{
			$this->setActivity("Mail does not sent to ".$to." for absence id:".$absence->getId());
		}
		return true;
	}
    /**
    * Maintenance inprogress.
    */
    public function maintenanceAction()
    {	
        return $this->render('BoHomeBundle:Default:maintenance.html.twig', array(
        ));
    }
}

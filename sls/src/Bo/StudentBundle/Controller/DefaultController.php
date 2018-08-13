<?php

namespace Bo\StudentBundle\Controller;
use Bo\AdminBundle\Controller\CommonController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Bo\AdminBundle\Entity\Students;

class DefaultController extends CommonController
{
    public function indexAction(Request $request)
    {
		$this->verifySession();
		$em = $this->getDoctrine()->getManager();
		//Get the parameter for displaying timesheet tag
		$this->setSessionByName('dts',$this->getParam("timesheet_show_this",29));
		$this->removeSession();
		$this->setSessionByName('dat',$this->getParam("agenda_show_this",30));
		//get info maintenance
		$iParamval = $em->getRepository('BoAdminBundle:Param')->getParam("maintenance_inprogress",8);	
		//Parameter to choose the menu color to apply
		$iStyleLayout = $this->getParam("layout_style_value",33);
		//echo $iStyleLayout."<br>";
		$this->get("session")->set("style",$iStyleLayout);
		//echo $this->get("session")->get("style")."<br>";
		//exit(0);	
		$this->setUserLocale($request->getLocale());
		$this->verifyCookies();
		$user=$this->getTokenUser();
		$aRoles = $user->getRoles();
		if($aRoles[0]=="ROLE_COORDINATOR"){
			if($iParamval==1) return $this->redirectToRoute('bo_coordinator_maintenance');
			return $this->redirectToRoute('bo_coordinator_homepage');
		}
		if($aRoles[0]=="ROLE_TEACHER"){
			if($iParamval==1) return $this->redirectToRoute('bo_home_maintenance');
			return $this->redirectToRoute('bo_home_homepage');
		}
		if($aRoles[0]=="ROLE_ADMIN"){
			if($iParamval==1) return $this->redirectToRoute('bo_admin_maintenance');
			return $this->redirectToRoute('bo_admin_homepage');
		}
		if($iParamval==1) return $this->redirectToRoute('bo_student_maintenance');
		$this->setActivity("Connexion à SLS-MANAGER");
		$students = $this->getConnectedStudent();
		$this->setActivity("Access to dashboard");		
        	return $this->render('BoStudentBundle:Default:index.html.twig',array(
			'student'=>$students,
			'user'=>$user,
			'welcome'=>$this->getWelcomeMessage('Student'),
			'imgname'=>$this->getRandomImage(),
			'campuss'=>$em->getRepository('BoAdminBundle:Campus')->findAll(),
			'pm'=>"tabeau-bord",
			'sm'=>"home",			
		));
    }
    public function teamcontactAction(Request $request)
    {
		$students = $this->getConnectedStudent();
		$em = $this->getDoctrine()->getManager();
		$oEntity = $em->getRepository('BoAdminBundle:TeamContacts');
		$this->removeSession();
		$this->setActivity("Access to Administrative team");		
		$teamcontacts = $oEntity->findBy(array(),array('id' => 'asc'));
        	return $this->render('BoStudentBundle:Default:teamcontact.html.twig',array(
			'student'=>$students,
			'teamcontacts'=>$teamcontacts,
			'pm'=>"tabeau-bord",
			'sm'=>"teamcontact",			
		));
    }
    public function contractAction(Request $request)
    {
		$students = $this->getConnectedStudent();
		$this->removeSession();
		$em = $this->getDoctrine()->getManager();
		$ContractEntity = $em->getRepository('BoAdminBundle:Contracts');
		$this->setUserLocale($request->getLocale());
		$user=$this->getTokenUser();
		$aTeachers=$aTraining=$aTeacherSchedule=$oContract=$aContract=$aTSC=$aTSG=null;
		if($students!=null){
			$aContract = $this->getContractsBy($students);
			$oGroup = $students->getGroup();
			$aTraining = $this->getUniqueTraining($aContract[0],$oGroup);
			if($oGroup){
				$aTeachers = $oGroup->getEmployee();
				$aTSG = $em->getRepository('BoAdminBundle:Agenda')->getTeacherscheduleByGroup($aTeachers,$oGroup);
			}elseif(isset($aContract[0]) and $oContract=$aContract[0]){
				$aTeachers = $oContract->getEmployee();
				if(isset($aTeachers[0])) $aTSC = $em->getRepository('BoAdminBundle:Agenda')->getScheduleForContract($aTeachers,$oContract);	
			}	
		}
		$this->setActivity("Access to dashboard");		
        return $this->render('BoStudentBundle:Default:contract.html.twig',array(
			'student'=>$students,
			'user'=>$user,
			'contracts'=>$aContract,
			'contract'=>isset($aContract[0])?$aContract[0]:null,
			'coordinator'=>isset($aContract[0])?$aContract[0]->getCoordinator():null,
			'teachers'=>$aTeachers,
			'tsc'=>$aTSC,
			'tsg'=>$aTSG,
			'schedules'=>$aTraining,
			'pm'=>"tabeau-bord",
			'sm'=>"contract",			
		));
    }
    /**
     * Displays a form to edit an existing Students entity.
     */
    public function editAction(Request $request)
    {
		$this->setActivity("Edition du compte utilisateur");		
		$user=$this->getTokenUser();
		$student=$user?$user->getStudents():null;
        $editForm = $this->createForm('Bo\AdminBundle\Form\StudentsType3', $student);
        $editForm->handleRequest($request);
		$message=null;
        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$res=$this->updateEntity($student);
			if($res!=null){
				$this->createActivity("Students",$student->getName()." ".$student->getFirstname()." is updated");
			}
			return $this->redirectToRoute('bo_student_homepage');				
        }
        return $this->render('BoStudentBundle:Default:edit.html.twig', array(
            'student' => $student,
			'message'=>array('type'=>"Warning",'texte'=>$message),
            'edit_form' => $editForm->createView(),
			'url'=>$request->headers->get('referer'),
			'pm'=>"tabeau-bord",
			'sm'=>"home",	
        ));
    }
    /**
     * Search a employee.
     */
    public function contactsearchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:TeamContacts');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$aResult = $oEntity ->search($description);
		if(isset($aResult[0])){
			return $this->render('BoStudentBundle:Default:contactsearch.html.twig', array(
				'teamcontacts'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoStudentBundle:Default:contactsearch.html.twig', array(
			'criteria' => $description,
		));
    }
	private function setActivity($activity){
		return $this->createActivity("Student Home",$activity);	
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
    public function testAction(Request $request)
    {
		
		return $this->render('BoStudentBundle:Default:countatsearch.html.twig', array(
			'criteria' => 'qsfdqsdqs',
		));
    }
    /**
    * Maintenance inprogress.
    */
    public function maintenanceAction()
    {	
        return $this->render('BoStudentBundle:Default:maintenance.html.twig', array(
        ));
    }
}

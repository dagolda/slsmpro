<?php

namespace Bo\CoordinatorBundle\Controller;

use Bo\AdminBundle\Entity\Employee;
use Bo\AdminBundle\Form\EmployeeType3;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Bo\AdminBundle\Controller\CommonController;

class DefaultController extends CommonController
{
    public function indexAction(Request $request)
    {
		$this->verifySession();
		$em = $this->getDoctrine()->getManager();
		$aTickets=null;
		//get info maintenance
		$iParamval = $em->getRepository('BoAdminBundle:Param')->getParam("maintenance_inprogress",8);
		//If maintenance display maintenance page
		if($iParamval==1) return $this->redirectToRoute('bo_admin_maintenance');			
		$this->setActivity("Connexion à SLS-MANAGER");
		$this->setUserLocale($request->getLocale());
		$oCoordinator = $this->getConnectedCoordinator();
		$ContractEntity = $em->getRepository('BoAdminBundle:Contracts');
		$aUser = $em->getRepository('BoUserBundle:User')->findBy(array('idcoordinator'=>$oCoordinator->getId()));
		$aContracts = $ContractEntity->findBy(array('coordinator'=>$oCoordinator));
		//$aStudents = $this->getContractStudents($aContracts);

        	return $this->render('BoCoordinatorBundle:Default:index.html.twig',
			array(
				'welcome'=>$this->getWelcomeMessage("Coordinator"),
				'coordinator'=>$oCoordinator,
				'contracts'=>$aContracts,
				'user' => $aUser,//student user information
				'campuss'=>$em->getRepository('BoAdminBundle:Campus')->findAll(),
				'imgname'=>$this->getRandomImage(),
				'title' => "Home",
				'pm'=>"tabeau-bord",
				'sm'=>"home",
		));
    }
    public function teamcontactAction(Request $request)
    {
		$coordinator = $this->getConnectedCoordinator();
		$em = $this->getDoctrine()->getManager();
		$oEntity = $em->getRepository('BoAdminBundle:TeamContacts');
		$this->removeSession();
		$this->setActivity("Access to Administrative team");		
		$teamcontacts = $oEntity->findBy(array(),array('id' => 'asc'));
        return $this->render('BoCoordinatorBundle:Default:teamcontact.html.twig',array(
			'coordinator'=>$coordinator,
			'teamcontacts'=>$teamcontacts,
			'pm'=>"tabeau-bord",
			'sm'=>"teamcontact",			
		));
    }
    public function overrideAction(Request $request)
    { 
		$this->setActivity("Connexion à SLS-MANAGER");
		$em = $this->getDoctrine()->getManager();
		$this->setUserLocale($request->getLocale());
		$aSecurityCotes=null;
		$ContractEntity = $em->getRepository('BoAdminBundle:Contracts');
		$user=$this->initializeSession($request->getLocale());
		$employee=$user?$user->getEmployee():null;
		$this->setSessionByName("user_profile",$this->getUserProfile()); 
		//$aNotification = $this->getNotification($employee);
		if($employee){
			$this->setSessionByName('profile',$employee->getProfil());
			$aSecurityCotes = $em->getRepository('BoAdminBundle:SecurityCote')->findBy(array('employee'=>$employee));
		}	
        return $this->render('BoCoordinatorBundle:Default:index.html.twig',
			array(
			'employee'=>$employee,
			'welcome'=>$this->getWelcomeMessage(),
			'campuss'=>$em->getRepository('BoAdminBundle:Campus')->findAll(),
			//'notif'=>$aNotification,
			'title' => "Home",
			'pm'=>"tabeau-bord",
			'sm'=>"home",
		));
    }
    public function contractAction(Request $request)
    {
		$this->removeSession();
		$em = $this->getDoctrine()->getManager();
		$ContractEntity = $em->getRepository('BoAdminBundle:Contracts');
		$oTCEntity =$em->getRepository('BoAdminBundle:TeacherSchedule');
		$this->setUserLocale($request->getLocale());
		$user=$this->getTokenUser();
		$aStudents = $sTraining=$aTeacherSchedule=$oContract=$aGroup=$oGroup=null;
		$employee=$user?$user->getEmployee():null;	
		if($employee!=null){
			$oEmTeacher=$em->getRepository('BoAdminBundle:Teachers');
			$aContract = $ContractEntity->getTeacherContracts($employee);//A faire getActiveContract
			//$aTraining[$oContract->getId()] = $em->getRepository('BoAdminBundle:Training')->findBy(array('contracts'=>$oContract));
			if(count($aContract)==0){
				$aGroup = $em->getRepository('BoAdminBundle:Group')->getEmployeeGroup($employee);
				if(isset($aGroup[0])){
					$oGroup=$aGroup[0];
					$aContract = $em->getRepository('BoAdminBundle:Contracts')->findByGroup($oGroup);
					if(count($aContract)>1) $aStudents = $em->getRepository('BoAdminBundle:Students')->StudentAndContractKey($aContract);
					else $aStudents = $em->getRepository('BoAdminBundle:Students')->findStudents($aContract);	
					//$aTeacherSchedule = $oTCEntity->getGroupTeacherScheduleBis($oGroup,$employee);
				}
			}else{
				$aStudents = $em->getRepository('BoAdminBundle:Students')->findStudents($aContract);				
			}
			$aTeacherSchedule = $oTCEntity->getTeacherScheduleBis($aContract,$employee);
		}
		$this->setActivity("Access to dashboard >> Contracts");		
        return $this->render('BoCoordinatorBundle:Default:contract.html.twig',array(
			'user'=>$user,
			'contracts'=> $aContract,
			'groups'=>$aGroup,
			'employee'=>$employee,
			'students'=>$aStudents,
			'schedules'=>$aTeacherSchedule,
			'pm'=>"tabeau-bord",
			'sm'=>"contract",			
		));
    }
    public function firsttimeAction(Request $request)
    {
		$user=$this->getTokenUser();
		$employee=$user?$user->getEmployee():null;	
        $editForm = $this->createForm('Bo\AdminBundle\Form\EmployeeType3', $employee);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$this->updateEntity($employee);
			$this->setActivity($employee->getName()." ".$employee->getFirstname()." account is updated by this user for a first connexion");
			return $this->redirectToRoute('bo_admin_homepage');
        }
        return $this->render('BoAdminBundle:User:edit.html.twig', array(
            'employee' => $employee,
            'edit_form' => $editForm->createView(),
			'pm'=>"tabeau-bord",
			'sm'=>"home",
        ));		
	}
	public function languageAction(Request $request,$_locale)
	{
		$this->setUserLocale($_locale);
		$url = $this->getReferer();
		if(empty($url)) {
			$url = $this->container->get('router')->generate('bo_admin_homepage');
		}
		return new RedirectResponse($url);
	}
    /**
    * Displays a form to edit an existing Employee entity.
    */
    public function editAction(Request $request)
    {
		$user=$this->getTokenUser();
		$employee=$user?$user->getEmployee():null;	
        $editForm = $this->createForm('Bo\AdminBundle\Form\EmployeeType3', $employee);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$this->updateEntity($employee);
			$this->setActivity($employee->getName()." ".$employee->getFirstname()." account is updated by this user");
			return $this->redirectToRoute('bo_admin_homepage');
        }
		if($this->get('session')->get('url')==null) $this->get('session')->set('url',$request->headers->get('referer'));
        return $this->render('BoAdminBundle:User:edit.html.twig', array(
            'employee' => $employee,
            'edit_form' => $editForm->createView(),
			'pm'=>"tabeau-bord",
			'sm'=>"home",
			'url'=>$request->headers->get('referer'),
        ));
    }
	private function setActivity($activity){
		return $this->createActivity("Admin Home",$activity);	
	}
    /**
    * Maintenance inprogress.
    */
    public function maintenanceAction()
    {	
        return $this->render('BoCoordinatorBundle:Default:maintenance.html.twig', array(
        ));
    }
}

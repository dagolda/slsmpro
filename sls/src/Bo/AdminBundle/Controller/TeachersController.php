<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Teachers;
use Bo\AdminBundle\Form\TeachersType;

use Bo\AdminBundle\Entity\Employee;
use Bo\AdminBundle\Form\TeacherType;
/**
* Teachers controller.
*/
class TeachersController extends CommonController
{
    /**
    * Index teachers.
    */
    public function indexAction()
    {	
		$this->get('session')->remove('page');
		$this->get('session')->remove('url');
		return $this->redirect($this->generateUrl('teachers_list'));		
	}
    /**
    * Lists all Teachers entities.
    */
    public function listAction()
    {	
		$this->createActivity("Teachers","List view");
        $em = $this->getDoctrine()->getManager();
		$oEmTeacher=$em->getRepository('BoAdminBundle:Teachers');
        $teachers = $oEmTeacher->getTeacherList("Teacher");//$em->getRepository('BoAdminBundle:Employee')->findBy(array('status'=>"Teacher"));
		$nb_tc = count($teachers);
		//get page
		$page = $this->get('session')->get('page');
		if($page==null) $page=1;
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$teachers = $oEmTeacher->getTeacherList("Teacher",$offset,$nb_cpp);//$em->getRepository('BoAdminBundle:Employee')->findBy(array('status'=>"Teacher"),array('firstname' => 'asc','name' => 'asc'),$nb_cpp,$offset);
        return $this->render('teachers/index.html.twig', array(
            'teachers' => $teachers,
			'page' => $page, // forward current page to view,
			'nb_pages' => $nb_pages, //total number page,
			'total'=>$nb_tc, // record number.
			'nb_cpp' => $nb_cpp,// line's number to display
			'pm'=>"personnel",
			'sm'=>"teachers",
        ));
    }
    public function pageAction($option)
    {
		$this->get('session')->get('page');
		if($option==1) $page=1;
		if($option==2) $page=$page-1;
		elseif($option==3) $page=$page+1;
		else $page=$option;
		$this->get('session')->set('page',$page);
		return $this->redirect($this->generateUrl('teachers_list'));			
	}
    /**
    * Creates a new Teachers entity.
    */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $teachers = new Employee();
        $form = $this->createForm('Bo\AdminBundle\Form\TeacherType', $teachers);
        $form->handleRequest($request);
		
        $employee = new Employee();
		$aStatus=$em->getRepository('BoAdminBundle:Status')->findByStatusname('Teacher');
		if(isset($aStatus[0])) $teachers->setStatus($aStatus[0]);

        if ($form->isSubmitted() && $form->isValid()) {
			$teachers->setPwd($this->getPassword());
			$res = $this->updateEntity($teachers);
			if($teachers->getStatus()) $profil = $this->getProfil($teachers->getStatus()->getStatusname());
			else $profil = "Teacher";
			$option = $profil=="Teacher"?1:0;
			if(!$this->existUserAccount($teachers)) $res=$this->createUser($option,$teachers);
			$this->createActivity("Teachers",$teachers->getName()." ".$teachers->getFirstname()." is Created");
            return $this->redirectToRoute('teachers_index');
        }
		
        return $this->render('teachers/new.html.twig', array(
            'teachers' => $teachers,
            'form' => $form->createView(),
			'pm'=>"personnel",
			'sm'=>"teachers",
			'url'=>$request->headers->get('referer'),
        ));
    }
    /**
     * Finds and displays a Teachers entity.
     */
    public function showAction(Employee $teachers)
    {
		$em = $this->getDoctrine()->getManager();
		$ContractEntity = $em->getRepository('BoAdminBundle:Contracts');
		$aContract = $ContractEntity->getTeacherContracts($teachers);
		$this->createActivity("Teachers",$teachers->getName()." ".$teachers->getFirstname()." is consulted by this user");
        $em = $this->getDoctrine()->getManager();
        $aSecurityCotes = $em->getRepository('BoAdminBundle:SecurityCote')->findBy(array('employee'=>$teachers));
        return $this->render('teachers/show.html.twig', array(
            'teachers' => $teachers,
			'securityCotes'=>$aSecurityCotes,
			'contracts'=>$aContract,
			'status'=>$ContractEntity->getStatus($aContract),
			'pm'=>"personnel",
			'sm'=>"teachers",
        ));
    }
    /**
    * Finds and displays timesheet for employee.
    */
    public function timesheetAction(Employee $teachers)
    {
		$validateForm = $this->createValidateForm($teachers->getEmployee());
		$this->setActivity($teachers->getEmployee()->getName()." ".$teachers->getEmployee()->getFirstname()." timesheets are consulted");
        $em = $this->getDoctrine()->getManager();
        $aTimesheets = $em->getRepository('BoAdminBundle:Timesheet')->getTsByEmployee($teachers->getEmployee(),2);
        return $this->render('BoAdminBundle:Teachers:timesheet.html.twig', array(
            'employee' => $teachers->getEmployee(),
			'validate_form' => $validateForm->createView(),
			'timesheets'=>$aTimesheets,
			'pm'=>"personnel",
			'sm'=>"teachers",
        ));
    }
    /**
    * Displays a form to edit an existing Teachers entity.
    */
    public function editAction(Request $request, Employee $teachers)
    {
        $em = $this->getDoctrine()->getManager();
        $editForm = $this->createForm('Bo\AdminBundle\Form\TeacherType', $teachers);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$this->updateEntity($teachers);
			$this->createActivity("Teachers",$teachers->getName()." ".$teachers->getFirstname()." is modified by this user");
			return $this->redirect($this->get('session')->get('url'));
        }
		if($this->get('session')->get('url')==null) $this->get('session')->set('url',$request->headers->get('referer'));
        return $this->render('teachers/edit.html.twig', array(
            'teachers' => $teachers,
            'form' => $editForm->createView(),
			'pm'=>"personnel",
			'sm'=>"teachers",
			'url'=>$request->headers->get('referer'),
        ));
    }
    /**
     * Search a room.
     */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Teachers');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$aResult = $oEntity ->search($description);
		$this->createActivity("Teachers",$description." searched by this user");
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:Teachers:search.html.twig', array(
				'teachers'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Teachers:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $teachers = $em->getRepository('BoAdminBundle:Teachers')->getTeacherList("Teacher");
		$nb_tc = count($teachers);
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('motcle');
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aTeachers = $em->getRepository('BoAdminBundle:Teachers')->getTeacherList("Teacher",$offset,$nb_cpp);
        return $this->render('BoAdminBundle:Teachers:pagesearch.html.twig', array(
            'teachers' => $aTeachers,
			'page' => $page, // On transmet à la vue la page courante,
        ));
    }
    public function updateAction()
    {
		set_time_limit(3800);	
        $em = $this->getDoctrine()->getManager();
        $teacherss = $em->getRepository('BoAdminBundle:Teachers')->findAll();
		$i=0;
		$res = array();
		foreach($teacherss as $oTeachers){
			if($oTeachers->getStatus() and $oTeachers->getStatus()->getId()!=1){
				continue;
			}
			$aEE = $em->getRepository('BoAdminBundle:Teachers')->findByTeachers(array('teachers'=>$oTeachers));
			If(isset($aEE[0])) continue;
			$oTeachers = new Teachers();
			$oTeachers->setTeachers($oTeachers);
			foreach($oTeachers->getTypecontract() as $OTC){
				$oTeachers->addTypecontract($OTC);
			}
			$oTeachers->setCategoryteacher($oTeachers->getCategoryteacher());
			$oTeachers->setLanguage($oTeachers->getLanguage());
			$em->persist($oTeachers);
			$em->flush();
			$i=$i+1;
			$res[] = $oTeachers->getFirstname()." ".$oTeachers->getName()." created<br>";
		}
		echo $i." Created<br>";
		exit(0);
    }
	private function setActivity($activity){
		return $this->createActivity("Employee",$activity);	
	}
	private function getProfil($status){
		if($status=="Teacher" or $status=="Executive") return $status;
		if($status=="Administrative") return "Admin";
		if($status=="Pedagogical Advisor") return "PA";
		if($status=="Assistant Pedagogical Director") return "APD";
		if($status=="Pedagogical Director") return "PD";
		return "Other";
	}
	private function existUserAccount($employee){
		$em = $this->getDoctrine()->getManager();
		$aUser = $em->getRepository('BoUserBundle:User')->findBy(array('employee'=>$employee));
		if(count($aUser)>0) $rmsg = $this->setSessionMessage('Warning','unable to create a login for this employee. This account already exist.');
		$aUser = $em->getRepository('BoUserBundle:User')->findBy(array('email'=>$employee->getEmail()));
		if(count($aUser)>0) $rmsg = $this->setSessionMessage('Warning','unable to create a login for this employee. This email already exist.');
		if(isset($rmsg)) return true;
		return false;
	}
}

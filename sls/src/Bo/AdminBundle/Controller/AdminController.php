<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Admin;
use Bo\AdminBundle\Form\AdminType;

use Bo\AdminBundle\Entity\Employee;
use Bo\AdminBundle\Form\EmployeeType;
/**
* Admin controller.
*/
class AdminController extends CommonController
{
    /**
    * Index admin.
    */
    public function indexAction()
    {	
		$this->get('session')->remove('page');
		$this->get('session')->remove('url');
		return $this->redirect($this->generateUrl('admin_list'));		
	}
    /**
    * Lists all Admin entities.
    */
    public function listAction()
    {	
		$this->createActivity("Admin","List view");
        $em = $this->getDoctrine()->getManager();
		$oEmTeacher=$em->getRepository('BoAdminBundle:Admin');
        $admin = $oEmTeacher->getTeacherList("Teacher");
		$nb_tc = count($admin);
		//get page
		$page = $this->get('session')->get('page');
		if($page==null) $page=1;
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$admin = $oEmTeacher->getTeacherList("Teacher",$offset,$nb_cpp);
        return $this->render('admin/index.html.twig', array(
            'admin' => $admin,
			'page' => $page, // forward current page to view,
			'nb_pages' => $nb_pages, //total number page,
			'total'=>$nb_tc, // record number.
			'nb_cpp' => $nb_cpp,// line's number to display
			'pm'=>"personnel",
			'sm'=>"admin",
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
		return $this->redirect($this->generateUrl('admin_list'));			
	}
    /**
    * Creates a new Admin entity.
    */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $admin = new Employee();
        $form = $this->createForm('Bo\AdminBundle\Form\EmployeeType', $admin);
        $form->handleRequest($request);
		
        $employee = new Employee();
		$aStatus=$em->getRepository('BoAdminBundle:Status')->findByStatusname('Teacher');
		if(isset($aStatus[0])) $admin->setStatus($aStatus[0]);

        if ($form->isSubmitted() && $form->isValid() && $e_form->isSubmitted() && $e_form->isValid()) {
			$res = $this->updateEntity($admin);
			$this->createActivity("Admin",$admin->getName()." ".$admin->getFirstname()." is Created");
            return $this->redirectToRoute('admin_index');
        }
		
        return $this->render('admin/new.html.twig', array(
            'admin' => $admin,
            'form' => $form->createView(),
			'pm'=>"personnel",
			'sm'=>"admin",
			'url'=>$request->headers->get('referer'),
        ));
    }
    /**
     * Finds and displays a Admin entity.
     */
    public function showAction(Employee $admin)
    {
		$em = $this->getDoctrine()->getManager();
		$ContractEntity = $em->getRepository('BoAdminBundle:Contracts');
		$aContract = $ContractEntity->getTeacherContracts($admin);
		$this->createActivity("Admin",$admin->getName()." ".$admin->getFirstname()." is consulted by this user");
        $em = $this->getDoctrine()->getManager();
        $aSecurityCotes = $em->getRepository('BoAdminBundle:SecurityCote')->findBy(array('employee'=>$admin));
        return $this->render('admin/show.html.twig', array(
            'admin' => $admin,
			'securityCotes'=>$aSecurityCotes,
			'contracts'=>$aContract,
			'status'=>$ContractEntity->getStatus($aContract),
			'pm'=>"personnel",
			'sm'=>"admin",
        ));
    }
    /**
    * Finds and displays timesheet for employee.
    */
    public function timesheetAction(Employee $admin)
    {
		$validateForm = $this->createValidateForm($admin->getEmployee());
		$this->setActivity($admin->getEmployee()->getName()." ".$admin->getEmployee()->getFirstname()." timesheets are consulted");
        $em = $this->getDoctrine()->getManager();
        $aTimesheets = $em->getRepository('BoAdminBundle:Timesheet')->getTsByEmployee($admin->getEmployee(),2);
        return $this->render('BoAdminBundle:Admin:timesheet.html.twig', array(
            'employee' => $admin->getEmployee(),
			'validate_form' => $validateForm->createView(),
			'timesheets'=>$aTimesheets,
			'pm'=>"personnel",
			'sm'=>"admin",
        ));
    }
    /**
    * Displays a form to edit an existing Admin entity.
    */
    public function editAction(Request $request, Employee $admin)
    {
        $em = $this->getDoctrine()->getManager();
        $editForm = $this->createForm('Bo\AdminBundle\Form\EmployeeType', $admin);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$this->updateEntity($admin);
			$this->createActivity("Admin",$admin->getName()." ".$admin->getFirstname()." is modified by this user");
			return $this->redirect($this->get('session')->get('url'));
        }
		if($this->get('session')->get('url')==null) $this->get('session')->set('url',$request->headers->get('referer'));
        return $this->render('admin/edit.html.twig', array(
            'admin' => $admin,
            'form' => $editForm->createView(),
			'pm'=>"personnel",
			'sm'=>"admin",
			'url'=>$request->headers->get('referer'),
        ));
    }
    /**
     * Search a room.
     */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Admin');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$aResult = $oEntity ->search($description);
		$this->createActivity("Admin",$description." searched by this user");
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:Admin:search.html.twig', array(
				'admin'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Admin:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $admin = $em->getRepository('BoAdminBundle:Admin')->getTeacherList("Teacher");
		$nb_tc = count($admin);
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('motcle');
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aAdmin = $em->getRepository('BoAdminBundle:Admin')->getTeacherList("Teacher",$offset,$nb_cpp);
        return $this->render('BoAdminBundle:Admin:pagesearch.html.twig', array(
            'admin' => $aAdmin,
			'page' => $page, // On transmet à la vue la page courante,
        ));
    }
    public function updateAction()
    {
		set_time_limit(3800);	
        $em = $this->getDoctrine()->getManager();
        $admins = $em->getRepository('BoAdminBundle:Admin')->findAll();
		$i=0;
		$res = array();
		foreach($admins as $oAdmin){
			if($oAdmin->getStatus() and $oAdmin->getStatus()->getId()!=1){
				continue;
			}
			$aEE = $em->getRepository('BoAdminBundle:Admin')->findByAdmin(array('admin'=>$oAdmin));
			If(isset($aEE[0])) continue;
			$oAdmin = new Admin();
			$oAdmin->setAdmin($oAdmin);
			foreach($oAdmin->getTypecontract() as $OTC){
				$oAdmin->addTypecontract($OTC);
			}
			$oAdmin->setCategoryteacher($oAdmin->getCategoryteacher());
			$oAdmin->setLanguage($oAdmin->getLanguage());
			$em->persist($oAdmin);
			$em->flush();
			$i=$i+1;
			$res[] = $oAdmin->getFirstname()." ".$oAdmin->getName()." created<br>";
		}
		echo $i." Created<br>";
		exit(0);
    }
}

<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Absences;
use Bo\AdminBundle\Form\AbsencesType;
use Bo\AdminBundle\Entity\Substitution;

/**
 * Absences controller.
 *
 */
class AbsencesController extends CommonController
{
    /**
     * Lists all Absences entities.
     *
     */
    public function indexAction()
    {
	$oRep = $this->getRepository('BoAdminBundle:Absences');
        $absences = $oRep->findAll();

        return $this->render('absences/index.html.twig', array(
            	'absences' => $absences,
		'pm'=>"personnel",
		'sm'=>"absences",
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
	return $this->redirect($this->generateUrl('absences_employee_index'));			
    }
    /**
    * Lists all absences entities for employee.
    */
    public function foremployeeAction()
    {
		$this->verifySessionRights();		
		$oTokenuser=$this->getTokenUser();
		$this->setActivity("List view");
        	$em = $this->getDoctrine()->getManager();
        	$oRepAbs = $em->getRepository('BoAdminBundle:Absences');
		$nb_tc = $oRepAbs->getEmployeeTotal();
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
		$absences = $oRepAbs->findBy(array('students'=>null),array('id' => 'desc'),$nb_cpp,$offset);
       	 	return $this->render('absences/listforemployee.html.twig', array(
            'absences' => $absences,
			'page' => $page, // forward current page to view,
			'message'=> $this->getSessionMessage(),
			'nb_pages' => $nb_pages, //total number page,
			'total'=>$nb_tc, // record number.
			'nb_cpp' => $nb_cpp,// line's number to display
			'pm'=>"personnel",
			'sm'=>"absences",
        ));
    }
    /**
    * Lists all absences of current day for employee
    */
    public function employeedayAction()
    {
	$this->verifySessionRights();
	$oTokenuser=$this->getTokenUser();
	$this->setActivity("List view");
        $oRepAbs = $this->getRepository('BoAdminBundle:Absences');
	$absences = $oRepAbs->getEmployeeDayAbsence();
	$aAbsSub = $this->getAbsSubs($absences);

        return $this->render('absences/employeeday.html.twig', array(
            'absences' => $absences,
		'abssub'=> $aAbsSub,
			'total'=> count($absences),
			'absence_form' => $this->getCreateForm()->createView(),
			'now'=>new \DateTime(),
			'pm'=>"personnel",
			'sm'=>"absences",
        ));
    }
	private function getCreateForm(){

		$oAbsence = new Absences();
		$oAbsence->setNumberday(1);
		return $this->createForm('Bo\AdminBundle\Form\EmployeeAbsencesType', $oAbsence);
	}
    /**
    * Creates a new Absences entity.
    */
    public function newAction(Request $request)
    {
        $absence = new Absences();
        $form = $this->createForm('Bo\AdminBundle\Form\EmployeeAbsencesType', $absence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			
			$this->updateEntity($absence);
            return $this->redirectToRoute('absences_employee_day');
        }

        return $this->render('absences/new.html.twig', array(
            'absence' => $absence,
            'form' => $form->createView(),
			'pm'=>"personnel",
			'sm'=>"absences",
        ));
    }	
    /**
    * Creates a new Absences entity for a employee.
    */
    public function newforemployeeAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
        $absence = new Absences();
		$aMessage=null;
        $form = $this->createForm('Bo\AdminBundle\Form\EmployeeAbsencesType', $absence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$oEmployee = $absence->getEmployee();
			$oRepAbs = $em->getRepository('BoAdminBundle:Absences');
			//Check duplicated absence
			$bExist = $oRepAbs->existEmployeeAbsence($oEmployee,$absence->getStartdate());
			//if $bExist is equal to false then save absence else display error message
			if($bExist==false){
				$enddate = $this->getDatePlusBis($absence->getStartdate(),$absence->getNumberday()-1);
				$absence->setEnddate($enddate);
				$absence->setCreateby($this->getFNConnectedEmployee());
				$res = $this->createAbsence($absence);
				$this->setActivity("Absence id: ".$absence->getId()." is Created by this user for employee >> ".$oEmployee->getName()." ".$oEmployee->getFirstname());			
			}else{
				$message = $this->get('translator')->trans('An absence is already created for the this employee and for this date');
				$aMessage = array('type'=>"Warning",'texte'=>$message);
				$this->get('session')->set('message',$aMessage);
			}
			return $this->redirectToRoute('absences_employee_day');
        }

        return $this->render('absences/new.html.twig', array(
            'absence' => $absence,
			'message' => $aMessage,
            'absence_form' => $form->createView(),
			'pm'=>"personnel",
			'sm'=>"absences",
        ));
    }

    /**
     * Finds and displays a Absences entity.
     *
     */
    public function showAction(Absences $absence)
    {
        $deleteForm = $this->createDeleteForm($absence);

        return $this->render('absences/show.html.twig', array(
            'absence' => $absence,
            'delete_form' => $deleteForm->createView(),
			'pm'=>"personnel",
			'sm'=>"absences",
        ));
    }
    /**
    * Finds and displays a Absences entity.
    */
    public function showforemployeeAction(Request $request,Absences $absence)
    {
	$em = $this->getDoctrine()->getManager();
	$this->setSessionByName('absence',$absence);
        $deleteForm = $this->createDeleteForm($absence);
	$aSubstitution = $this->getSusbByAbsence($absence);
	//Check if the substitution button must be showed
	$aDispSubsBut = $this->getSubsButDisp($aSubstitution,$absence);
		
        return $this->render('absences/showforemployee.html.twig', array(
            'absence' => $absence,
		'employee'=>$absence->getEmployee(),
		'now'=>new \DateTime(date("d-m-Y")),
            'delete_form' => $deleteForm->createView(),
		//'subcontform'=>$this->createSubsContForm($absence,$aSubstitution),
		//'subgroupform'=>$this->createSubsGroupForm($absence),
		'subcontform'=>$this->createSubsContForm($absence),
		'subgroupform'=>$this->createSubsGroupForm($absence),
			'substitutions'=>$aSubstitution,
			'teachers'=>$em->getRepository('BoAdminBundle:Teachers')->findAllTeacher(),
			'subscont'=> $this->getSubsCont($absence),
			'esc'=>$aDispSubsBut[0],//get array of 1 if exist substitution for contract or 0 else, with for contract id as index
			'esg'=>$aDispSubsBut[1],//get array of  1 if exist substitution for group or 0 else, with for group id as index
			'subsgroup'=> $this->getSubsGroup($absence),
			'holder'=>$this->getHoldersBy($absence->getEmployee()),
			'url'=>$request->headers->get('referer'),
			'pm'=>"personnel",
			'sm'=>"absences",
        ));
    }
    /**
    * Displays a form to edit an existing Absences entity.
    */
    public function editforemployeeAction(Request $request, Absences $absence)
    {
	$this->verifySessionRights();
	$employee = $absence->getEmployee();
        $deleteForm = $this->createDeleteForm($absence);
        $editForm = $this->createForm('Bo\AdminBundle\Form\EditAbsencesType', $absence);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
		$this->updateEntity($absence);
		$this->setActivity("Absence id: ".$absence->getId()." is updated by this user for employee >> ".$employee->getName()." ".$employee->getFirstname());
            return $this->redirectToRoute('absences_employee_day');
        }

        return $this->render('absences/editforemployee.html.twig', array(
            'absence' => $absence,
			'employee'=>$absence->getEmployee(),
            'absence_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'url'=>$request->headers->get('referer'),
			'pm'=>"personnel",
			'sm'=>"absences",
        ));
    }
    /**
    * Displays a form to edit an existing Absences entity.
    */
    public function editAction(Request $request, Absences $absence)
    {
        $deleteForm = $this->createDeleteForm($absence);
        $editForm = $this->createForm('Bo\AdminBundle\Form\AbsencesType', $absence);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$this->updateEntity($absence);
            return $this->redirectToRoute('absences_index');
        }

        return $this->render('absences/edit.html.twig', array(
            'absence' => $absence,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"personnel",
			'sm'=>"absences",
        ));
    }
    /**
    * Search a absence.
    */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Absences');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$aResult = $oEntity->search($description);
		$this->setActivity($description." searched by this user");
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:Absences:search.html.twig', array(
				'absences'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Absences:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Search a absence for employee.
    */
    public function empsearchAction(Request $request)
    {
		$description = "";
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Absences');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$aResult = $oEntity->searchEmployee($description);
		$this->setActivity($description." searched by this user");
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:Absences:search.html.twig', array(
				'absences'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Absences:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $absencess = $em->getRepository('BoAdminBundle:Absences')->findAll();
		$nb_tc = count($absencess);
		
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('motcle');
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aAbsences = $em->getRepository('BoAdminBundle:Absences')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);

        return $this->render('BoAdminBundle:Absences:tbliste.html.twig', array(
            	'absences' => $aAbsences,
		'page' => $page, // On transmet à la vue la page courante,
        ));
    }
    /**
     * Deletes a Absences entity.
     *
     */
    public function deleteAction(Request $request, Absences $absence)
    {
        $form = $this->createDeleteForm($absence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
			$em = $this->getDoctrine()->getManager();
			$aSubstitution = $em->getRepository('BoAdminBundle:Substitution')->findBy(array('idabsence'=>$absence->getId()));
			if(isset($aSubstitution[0]))  $this->removeEntity($aSubstitution[0]);
            $this->removeEntity($absence);
        }

        return $this->redirectToRoute('absences_employee_day');
    }
    /**
     * Creates a form to delete a Absences entity.
     *
     * @param Absences $absence The Absences entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Absences $absence)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('absences_delete', array('id' => $absence->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	//handle request with holders, teachers, idabsencefor 
	//id for idcontract or idgroup
	private function myHandleRequest($substitution,$request,$id,$idabsence,$opt=null){
		$idholder = $request->request->get('holders');
		$idsubstitute = $request->request->get('teachers');
		$substitution->setIdholder($idholder);
		$substitution->setIdsubstitute($idsubstitute);
		$substitution->setIdabsence($idabsence);
		if($opt==null) $substitution->setIdcontract($id);	
		else $substitution->setIdgroup($id);			
		return $substitution;
	}
/*
	private function createSubsContForm($absence,$aSubstitution){
		$aSubContform = array();
		$em = $this->getDoctrine()->getManager();
		$aContracts = $absence->getContracts();
		$oEmployee = $absence->getEmployee();
		foreach($aContracts as $oContract){
			$aTraining=$em->getRepository('BoAdminBundle:Training')->findBy(array('contracts'=>$oContract));
			$aTeacherSchedule = $this->getContractTeacherSchedule($oEmployee,$oContract);
			$substitution = new Substitution();
			$substitution->setIdabsence($absence->getId());
			$substitution->setStartdate($absence->getStartdate());
			$substitution->setEnddate($absence->getEnddate());
			$substitution = isset($aTeacherSchedule[0])?$this->initialize($substitution,$aTeacherSchedule[0]):$this->initialize($substitution,$aTraining[0]);
			$substitutionform = $this->createForm('Bo\AdminBundle\Form\SubstitutionType', $substitution);
			$aSubContform[$oContract->getId()] = $substitutionform->createView();
		}
		return $aSubContform;
	}
	private function createSubsGroupForm($absence){
		$aSubGroupform = array();
		$em = $this->getDoctrine()->getManager();
		$aGroup = $absence->getGroup();
		$oEmployee = $absence->getEmployee();
		foreach($aGroup as $oGroup){
			$aTraining=$em->getRepository('BoAdminBundle:Training')->findBy(array('idgroup'=>$oGroup->getId()));
			$aTeacherSchedule = $this->getGroupTeacherSchedule($oEmployee,$oGroup);
			$substitution = new Substitution();
			$substitution->setStartdate($absence->getStartdate());
			$substitution->setEnddate($absence->getEnddate());
			$substitution = isset($aTeacherSchedule[0])?$this->initialize($substitution,$aTeacherSchedule[0]):$this->initialize($substitution,$aTraining[0]);
			$substitutionform = $this->createForm('Bo\AdminBundle\Form\SubstitutionType', $substitution);
			$aSubGroupform[$oGroup->getId()] = $substitutionform->createView();
		}
		return $aSubGroupform;
	}
*/
	private function getSubsCont($absence){
		$em = $this->getDoctrine()->getManager();
		$substitutes = array();
		$aContracts = $absence->getContracts();
		$oEmployee = $absence->getEmployee();
		foreach($aContracts as $oContract){
			$substitutes[$oContract->getId()] = $em->getRepository('BoAdminBundle:Teachers')->getAvailable($oContract,$this->getHoldersBy($oEmployee));
		}
		return $substitutes;
	}
	private function getSubsGroup($absence){
		$em = $this->getDoctrine()->getManager();
		$substitutes = array();
		$aGroup = $absence->getGroup();
		$oEmployee = $absence->getEmployee();
		$aHolder = array($oEmployee);
		foreach($aGroup as $oGroup){
			$substitutes[$oGroup->getId()] = $em->getRepository('BoAdminBundle:Teachers')->getAvailableForGroup($oGroup,$aHolder);
		}
		return $substitutes;
	}
	private function getHoldersBy($oHolder){
		return array($oHolder->getId(),$oHolder->getFirstname()." ".$oHolder->getname()." (".$this->formatCollection($oHolder->getTypecontract()).")"); 
	}
	private function setActivity($activity){
		return $this->createActivity("Absences",$activity);	
	}
}

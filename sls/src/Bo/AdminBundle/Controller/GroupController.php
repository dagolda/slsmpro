<?php

namespace Bo\AdminBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Entity\Group;
use Bo\AdminBundle\Form\GroupType;
use Bo\AdminBundle\Entity\Students;
use Bo\AdminBundle\Entity\Batch;
use Bo\AdminBundle\Form\BatchType;

/**
 * Group controller.
 */
class GroupController extends CommonController
{
    /**
    * Index group.
    */
    public function indexAction()
    {	
		$this->get('session')->remove('page');
		$this->get('session')->remove('message');
		$this->get('session')->remove('url');
		$this->get('session')->remove('search');
		return $this->redirect($this->generateUrl('group_list'));		
	}
    /**
    * Lists all Group entities.
    */
    public function listAction()
    {
		$this->get('session')->remove('message');		
		$this->createActivity("Group","List view");
        	$em = $this->getDoctrine()->getManager();
        	$oRep = $em->getRepository('BoAdminBundle:Group');
		$nb_tc = $oRep->getTotal();
		//check if the type of group is NMSO
		$type=$this->get('session')->get('type');

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
        	$form = $this->createForm('Bo\AdminBundle\Form\GroupType', new Group());
		$groups = $oRep->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);		
		return $this->render('group/index.html.twig', array(
		    		'groups' => $groups,
				'page' => $page, // forward current page to view,
		    		'form' => $form->createView(),
				'nb_pages' => $nb_pages, //total number page,
				'total'=>$nb_tc, // record number.
				'nb_cpp' => $nb_cpp,// line's number to display
				'now'=>$this->getToday(),
				'pm'=>"contracts",
				'sm'=>"group",
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
		return $this->redirect($this->generateUrl('group_list'));			
	}

    /**
     * Creates a new Group entity.
     *
     */
    public function newAction(Request $request)
    {
        $group = new Group();
        $form = $this->createForm('Bo\AdminBundle\Form\GroupType', $group);
        $form->handleRequest($request);
		$message=null;
		
        if ($form->isSubmitted() && $form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$groups = $em->getRepository('BoAdminBundle:Group')->findByName($group->getName());
			if(isset($groups[0])){
				$message=array('type'=>"Warning",'texte'=>$this->getErrorMessage(20));
			}else{
				$group->setCreateby($this->getConnected());
				$this->updateEntity($group);	
				return $this->redirectToRoute('group_index');
			}
        }
		$this->get('session')->remove('message');
        return $this->render('group/new.html.twig', array(
            'group' => $group,
			'message'=>$message,
            'form' => $form->createView(),
			'pm'=>"contracts",
			'sm'=>"group",
        ));
    }
    /**
     * Creates a new Group entity by duplicating an other.
     *
     */
    public function duplicateAction(Group $group)
    {
        $form = $this->createForm('Bo\AdminBundle\Form\GroupType', $group);

        return $this->render('group/new.html.twig', array(
            'group' => $group,
            'form' => $form->createView(),
			'pm'=>"contracts",
			'sm'=>"group",
        ));
    }
    /**
    * Finds and displays a Group entity.
    */
    public function showAction(Group $group)
    {
        	$deleteForm = $this->createDeleteForm($group);
        	$closeForm = $this->createCloseForm($group);
        	$reopenForm = $this->createReopenForm($group);
		$training = null;
		$em = $this->getDoctrine()->getManager();
		//$aContracts = $this->getContractByGroup($group);
		$aContracts = $group->getContracts();
		$aStudents = array();
		$this->checkScheduleFor($aContracts,$group);
		//$training = $this->getGroupTraining($oGroup);	
		if(count($aContracts)>1){
			//If there is many contract in group
			$aStudents = $em->getRepository('BoAdminBundle:Students')->StudentAndContractKey($aContracts);
			if(count($aStudents)==0){
				$aStudents = $group->getStudents();
			}else{
				$aStudents = $em->getRepository('BoAdminBundle:Students')->findStudents($aContracts);
			}  
			$training = $group->getTraining();
		}elseif(count($aContracts)==1){
			$aStudents = $aContracts[0]->getStudents();
			if(!$group->getAdvisor() and $aContracts[0]->getAdvisor()){
				$this->updateAdvisorForGroup($group,$aContracts[0]);
			}
			//Get contract training
			$training = $em->getRepository('BoAdminBundle:Training')->findBy(array('contracts'=>$aContracts[0]));
		}
		$aTeachers = $em->getRepository('BoAdminBundle:Students')->getTeachersByContract($aContracts);
		if(!$aTeachers){
			$aTeachers = $group->getEmployee();
		}
		$aTeacherSchedule = $em->getRepository('BoAdminBundle:Agenda')->getTSManyContract($aTeachers,$aContracts);

        	return $this->render('group/show.html.twig', array(
            		'group' => $group,
			'locals' => $this->getGroupRoom($group),
			'students' => $aStudents,
			'contracts' => $aContracts,
			'closegroups'=>$group->getClosegroup(),
			'group'=>$group,
			'dba'=>$this->getDba($group),//Display actualisation button
			'trainings'=>$training,
			'status'=>$this->getGroupStatus(),
			'message'=>$this->getSessionByName('message'),
			'infocontract' => isset($aContracts[0])?$aContracts[0]:null,
			'historics'=>$em->getRepository('BoAdminBundle:StudentsGroup')->findBy(array('group'=>$group)),
			'teachers'=>$aTeachers,// for the list of teachers
			'teacherschedule'=>isset($aTeacherSchedule[0])?$aTeacherSchedule[0]:null,
            		'delete_form' => $deleteForm->createView(),
            		'close_form' => $closeForm->createView(),
            		'reopen_form' => $reopenForm->createView(),
			'pm'=>"contracts",
			'sm'=>"group",
        	));
    }
    /**
    * Actualize a Group entity in reopening all the contracts closed.
    */
    public function actualizeAction(Group $group)
    {
	$aContract = $group->getContracts();
	foreach($aContract as $oContract){
		$oContract->updatestatus();
		$this->updateEntity($oContract);
	}
	return $this->redirectToRoute('group_show',array('id'=>$group->getId()));	
    }
	
	private function getClosegroup($group){
		return $this->getRepository('BoAdminBundle:Closegroup')->findByGroup($group);
	}
	private function updateAdvisorForGroup($group,$oContract){
		$group->setAdvisor($oContract->getAdvisor());
		return $this->updateEntity($group);
	}
	private function getTeacherSchedule($aContracts){
		$em = $this->getDoctrine()->getManager();
		$aResult = array();
		foreach($aContracts as $oContract){
			$aTSchedule= $em->getRepository('BoAdminBundle:Agenda')->findBy(array('contracts'=>$oContract));	
			if(isset($aTSchedule[0])) $aResult[]=$aTSchedule[0];
		}
		return $aResult;
	}
	private function checkScheduleFor($aContracts,$oGroup){
		$aTSchedule = $this->getTeacherSchedule($aContracts);
		if(!$aTSchedule) return 0;
		foreach($aTSchedule as $oTSchedule){
			if(!$oTSchedule->getGroup()){
				$oTSchedule->setGroup($oGroup);
				$this->updateEntity($oTSchedule);
			}
		}
		return 1;
	}
    /**
    * Lists all Group entities.
    */
    public function historicAction(Group $group)
    {	
        $em = $this->getDoctrine()->getManager();
        $aHistoGroup = $em->getRepository('BoAdminBundle:StudentsGroup')->findBy(array('group'=>$group));
        return $this->render('group/historic.html.twig', array(
            'historics' => $aHistoGroup,
			'group' => $group,
			'pm'=>"contracts",
			'sm'=>"group",
        ));
    }
    /**
    * Displays a form to edit an existing Group entity.
    */
    public function editAction(Request $request, Group $group)
    {
	$employee = $this->getConnectedEmployee();
	$this->get('session')->remove('message');
        $deleteForm = $this->createDeleteForm($group);
	if($employee->getProfil()->getName()=="Superadmin"){
        	$editForm = $this->createForm('Bo\AdminBundle\Form\GroupType1', $group);
	}else{
		$editForm = $this->createForm('Bo\AdminBundle\Form\GroupType', $group);
	}
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($group);
            $em->flush();

            return $this->redirectToRoute('group_index');
        }

        return $this->render('group/edit.html.twig', array(
            	'group' => $group,
	    	'employee'=>$employee,
            	'edit_form' => $editForm->createView(),
            	'delete_form' => $deleteForm->createView(),
		'pm'=>"contracts",
		'sm'=>"group",
        ));
    }
    /**
    * Closes a Group entity.
    */
    public function closeAction(Request $request, Group $group)
    {
        $form = $this->createCloseForm($group);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
		$this->closeGroup($group);			
        }
        return $this->redirectToRoute('group_show',array('id'=>$group->getId()));
    }
    /**
    * reopen a Group entity.
    */
    public function reopenAction(Request $request, Group $group)
    {
        $form = $this->createReopenForm($group);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
		$this->reopenGroup($group);			
        }
        return $this->redirectToRoute('group_show',array('id'=>$group->getId()));
    }
    /**
    * Deletes a Group entity.
    */
    public function deleteAction(Request $request, Group $group)
    {
        $form = $this->createDeleteForm($group);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$aContracts = $em->getRepository('BoAdminBundle:Contracts')->findByGroup($group);
			if(!isset($aContracts[0])){
				//Delete Historic group student
				$aSudentGroup = $em->getRepository('BoAdminBundle:StudentsGroup')->findByGroup($group);
				if(isset($aSudentGroup[0])) $this->removeEntity($aSudentGroup[0]);
				$this->removeEntity($group);
			}else{
				$message = $this->getTypeMessage("Warning",$this->get('translator')->trans('SLS can not delete this group beacause it attached to a contract.'));	
				$this->setSessionByName('message',$message);
				return $this->redirectToRoute('group_show', array('id'=>$group->getId()));
			}			
        }
        return $this->redirectToRoute('group_index');
    }

    /**
     * Creates a form to delete a Group entity.
     *
     * @param Group $group The Group entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Group $group)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('group_delete', array('id' => $group->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /**
     * Creates a form to close a Group entity.
     *
     * @param Group $group The Group entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCloseForm(Group $group)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('group_close', array('id' => $group->getId())))
            ->getForm()
        ;
    }
    /**
     * Creates a form to reopen a Group entity.
     *
     * @param Group $group The Group entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createReopenForm(Group $group)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('group_reopen', array('id' => $group->getId())))
            ->getForm()
        ;
    }
    /**
    * Search a room.
    */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Group');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$this->get('session')->set('search',$description);
		$aResult = $oEntity ->search($description);
		$this->createActivity("Group",$description." searched by this user");
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:Group:search.html.twig', array(
				'groups'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Group:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * return last data sought
    */
    public function backAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Group');	
		$description = $this->get('session')->get('search');		
		$aResult = $oEntity ->search($description);

		if(!isset($aResult[0])) return $this->redirect($this->generateUrl('group_list'));	
		else{
			return $this->render('group/back.html.twig', array(
				'groups'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
				'pm'=>"contracts",
				'sm'=>"group",
			));				
		}
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Group');	
		if($request->isXmlHttpRequest())
		{	
			$idgroup = $request->request->get('idgroup');	
		}
		$aResult = $oEntity ->search($description);

		return $this->render('BoAdminBundle:Group:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax update all contracts for a group
    * Add idgroup for training, if it is not already done 
    * Add idgroup for teacherschedule, if it is not already done 
    */
    public function updateAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $groups = $em->getRepository('BoAdminBundle:Group')->findAll();
		$nb_tc = count($groups);
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('motcle');
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aGroup = $em->getRepository('BoAdminBundle:Group')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);

        return $this->render('BoAdminBundle:Group:pagesearch.html.twig', array(
            	'groups' => $aGroup,
		'page' => $page, // On transmet la vue la page courante,
        ));
    }
    public function updateGroupAction()
    {
	set_time_limit(3800);	
        $em = $this->getDoctrine()->getManager();
        $group = $em->getRepository('BoAdminBundle:Group')->find(200);
	if($group){
		$aLocal = $group->getLocal();
		if(count($aLocal)>0){
			$group->removeLocal($aLocal[0]);
			$this->updateEntity($group);
		} 
	}
        $group = $em->getRepository('BoAdminBundle:Group')->find(261);
		if($group){
			$aLocal = $group->getLocal();
			if(count($aLocal)>0){
				$group->removeLocal($aLocal[0]);
				$this->updateEntity($group);
			} 		
		}
		exit(0);
	}
	private function getDba($oGroup){
		$aContracts = $oGroup->getContracts();
		foreach($aContracts as $oContract){
			if($oContract->getStatus()==0 and ($oContract->getEnddate()>$this->getToday() or $oContract->getStartdate()>$this->getToday())) return 1;
		}
		return 0;
	}
}

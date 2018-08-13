<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use Bo\AdminBundle\Entity\Coordinator;
use Bo\AdminBundle\Form\CoordinatorType;

/**
 * Coordinator controller.
 */
class CoordinatorController extends CommonController
{
    /**
    * Index coordinator.
    */
    public function indexAction()
    {	
		$this->get('session')->remove('page');
		$this->get('session')->remove('url');
		return $this->redirect($this->generateUrl('coordinator_list'));		
	}
    /**
    * Lists all Coordinator entities.
    */
    public function listAction()
    {	
		$this->removeSession();
		$this->verifySessionRights();
		$this->setActivity("List view");
        $em = $this->getDoctrine()->getManager();
        $coordinators = $em->getRepository('BoAdminBundle:Coordinator')->findAll();
		$nb_tc = count($coordinators);
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
		$coordinators = $em->getRepository('BoAdminBundle:Coordinator')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
        $form = $this->createForm('Bo\AdminBundle\Form\CoordinatorType', new Coordinator());
        return $this->render('coordinator/index.html.twig', array(
            'coordinators' => $coordinators,
			'page' => $page, // forward current page to view,
            'form' => $form->createView(),
			'nb_pages' => $nb_pages, //total number page,
			'total'=>$nb_tc, // record number.
			'nb_cpp' => $nb_cpp,// line's number to display
			'pm'=>"contracts",
			'sm'=>"coordinator",
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
		return $this->redirect($this->generateUrl('coordinator_list'));			
	}

    /**
     * Creates a new Coordinator entity.
     *
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $coordinator = new Coordinator();
        $form = $this->createForm('Bo\AdminBundle\Form\CoordinatorType', $coordinator);
        $form->handleRequest($request);
		$message=null;
		if($coordinator->getEmail()!=null){
			$coordinators = $em->getRepository('BoAdminBundle:Coordinator')->findBy(array('email'=>$coordinator->getEmail()));
			if(isset($coordinators[0])) $message = "This contact email ".$coordinator->getEmail()." already exist.";
		}
        if ($form->isSubmitted() && $form->isValid() && $message==null) {
			$coordinator->setPwd($this->getPassword());
			$coordinator->setCreateby($this->getConnected());
            $iRes = $this->updateEntity($coordinator);
			if($iRes>0){
				$this->setActivity("The coordinator ".$coordinator->getName()." is created");
			}
			if($coordinator->getEmail()!=null) $this->createUser(3,$coordinator);

            return $this->redirectToRoute('coordinator_index');
        }
        return $this->render('coordinator/new.html.twig', array(
            'coordinator' => $coordinator,
            'form' => $form->createView(),
			'message'=>array('type'=>'Warning','texte'=>$message),
			'pm'=>"contracts",
			'sm'=>"coordinator",
        ));
    }
    /**
     * Finds and displays a Coordinator entity.
     *
     */
    public function showAction(Coordinator $coordinator)
    {
        $em = $this->getDoctrine()->getManager();
        $deleteForm = $this->createDeleteForm($coordinator);
		$aUser = $em->getRepository('BoUserBundle:User')->findBy(array('idcoordinator'=>$coordinator->getId()));
		$oRepContract = $em->getRepository('BoAdminBundle:Contracts');
		if($coordinator->getMaster()==false){
			$aContracts = $oRepContract->findBy(array('coordinator'=>$coordinator,'status'=>1),array('id' => 'asc'));
		}elseif($coordinator->getClient()){
			$aContracts = $oRepContract->findBy(array('client'=>$coordinator->getClient(),'status'=>1),array('id' => 'asc'));			
		}	
		//$aContracts = $em->getRepository('BoAdminBundle:Contracts')->findBy(array('coordinator'=>$coordinator));
		$aStudents = $this->getContractStudents($aContracts);
		$this->setActivity("The coordinator ".$coordinator->getName()." is seen");

        return $this->render('coordinator/show.html.twig', array(
            'coordinator' => $coordinator,
			'contracts'=>$aContracts,
			'students'=>$aStudents,
			'user' => $aUser,//student user information
			'token'=>$this->getTokenUser(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"contracts",
			'sm'=>"coordinator",
        ));
    }
	private function getCoordinator($id,$em){
		$oCoordinator = $em->getRepository('BoAdminBundle:Coordinator')->find($id);
		if($oCoordinator->getPwd()=="" or $oCoordinator->getPwd()==null){
			$oCoordinator->setPwd($this->getPassword());
			$this->updateEntity($oCoordinator);
		}
		return $oCoordinator;
	}
    /**
    * create user
    */
    public function createuserAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $oCoordinator = $this->getCoordinator($id,$em);
		$message=null;
		if($oCoordinator){
			$aUser = $em->getRepository('BoUserBundle:User')->findBy(array('idcoordinator'=>$oCoordinator->getId()));
			if(isset($aUser[0])){ 	
				$message = array('type'=>"Warning",'texte'=>"Sorry CLIC-MANAGER can not create this user. It already exists.");
				$this->get('session')->set('message',$message);
				$this->errorReporting("11183","CoordinatorController:createuserAction","Sorry CLIC-MANAGER can not create this user. It already exists.");
			}
		}else{
			$message = array('type'=>"Warning",'texte'=>"Sorry CLIC-MANAGER can not create this user. Coordinator does not exist.");
			$this->get('session')->set('message',$message);
			$this->errorReporting("11183","CoordinatorController:createuserAction","Sorry CLIC-MANAGER can not create this user. Coordinator does not exist.");
		}
		if($message==null){
			$res=$this->createUser(3,$oCoordinator);
			$this->setActivity("A user account is created for ".$oCoordinator->getName());
			if($res!=null){
				$message = array('type'=>"Info",'texte'=>"CLIC-MANAGER User ".$oCoordinator->getName()." is created successfully.");
				$this->get('session')->set('message',$message);
			}
		}
		return $this->redirectToRoute('coordinator_show',array('id'=>$id));
    }
    /**
     * Displays a form to edit an existing Coordinator entity.
     *
     */
    public function editAction(Request $request, Coordinator $coordinator)
    {
        $deleteForm = $this->createDeleteForm($coordinator);
        $editForm = $this->createForm('Bo\AdminBundle\Form\CoordinatorType', $coordinator);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($coordinator);
            $em->flush();
			$this->setActivity("The coordinator ".$coordinator->getName()." is modified");

            return $this->redirectToRoute('coordinator_index');
        }

        return $this->render('coordinator/edit.html.twig', array(
            'coordinator' => $coordinator,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"contracts",
			'sm'=>"coordinator",
        ));
    }

    /**
     * Deletes a Coordinator entity.
     *
     */
    public function deleteAction(Request $request, Coordinator $coordinator)
    {
        $form = $this->createDeleteForm($coordinator);
        $form->handleRequest($request);
		$fullname = $coordinator->getName();

        if ($form->isSubmitted() && $form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$aContracts = $em->getRepository('BoAdminBundle:Contracts')->findBy(array('coordinator'=>$coordinator));
			if(!isset($aContracts[0])){
				$aUser = $em->getRepository('BoUserBundle:User')->findBy(array('idcoordinator'=>$coordinator->getId()));
				if(isset($aUser[0])) $em->remove($aUser[0]);
				$em->remove($coordinator);
				$em->flush();	
				$this->setActivity("The coordinator ".$coordinator->getName()." is deleted");
			}else{
				$message = "This contact ".$coordinator->getEmail()." is attached to a contract. Unable to delete it.";
				$this->setSessionMessage('Warning',$message);
			}
        }

        return $this->redirectToRoute('coordinator_index');
    }

    /**
     * Creates a form to delete a Coordinator entity.
     *
     * @param Coordinator $coordinator The Coordinator entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Coordinator $coordinator)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('coordinator_delete', array('id' => $coordinator->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /**
     * Search a coordinator.
     */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Coordinator');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$this->get('session')->set('search',$description);
		$aResult = $oEntity ->search($description);
		$this->setActivity($description." searched by this user");
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:Coordinator:search.html.twig', array(
				'coordinators'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Coordinator:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $coordinators = $em->getRepository('BoAdminBundle:Coordinator')->findAll();
		$nb_tc = count($coordinators);
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('motcle');
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aCoordinator = $em->getRepository('BoAdminBundle:Coordinator')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
        return $this->render('BoAdminBundle:Coordinator:pagesearch.html.twig', array(
            'coordinators' => $aCoordinator,
			'page' => $page, // On transmet à la vue la page courante,
        ));
    }
    /**
    * return to the previous search
    */
    public function backAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Coordinator');	
		$description = $this->get('session')->get('search');
		
		$aResult = $oEntity ->search($description);
		if(!isset($aResult[0])) return $this->redirect($this->generateUrl('coordinator_list'));	
		else{
			return $this->render('coordinator/back.html.twig', array(
				'coordinators'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
				'pm'=>"contracts",
				'sm'=>"coordinator",
			));				
		}
    }
	private function setActivity($activity){
		return $this->createActivity("Coordinator",$activity);	
	}
}

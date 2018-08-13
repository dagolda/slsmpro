<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Cancel;
use Bo\AdminBundle\Form\CancelType;
use Bo\AdminBundle\Form\CancelEditType;

/**
* Cancel controller.
*/
class CancelController extends  CommonController
{
    /**
    * Lists all Cancel entities.
    */
    public function indexAction()
    {	
		$this->get('session')->remove('page');
		$this->get('session')->remove('url');
		return $this->redirect($this->generateUrl('cancel_list'));		
    }
    /**
    * Lists all Cancel entities.
    */
    public function listAction()
    {	
		$this->verifySessionRights();
		$this->setActivity("List view");
        	$em = $this->getDoctrine()->getManager();
        	$oRepcancel = $em->getRepository('BoAdminBundle:Cancel');
		$nb_tc = $oRepcancel->getTotal();
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
		$aCancel = $em->getRepository('BoAdminBundle:Cancel')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
        	$form = $this->createForm('Bo\AdminBundle\Form\CancelType', new Cancel());
        	return $this->render('cancel/index.html.twig', array(
            		'cancels' => $aCancel,
			'page' => $page, // forward current page to view,
			'nb_pages' => $nb_pages, //total number page,
            		'form' => $form->createView(),
			'total'=>$nb_tc, // record number.
			'nb_cpp' => $nb_cpp,// line's number to display
			'pm'=>"personnel",
			'sm'=>"cancel",
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
		return $this->redirect($this->generateUrl('cancel_list'));			
	}
    /**
    * Creates a new Cancel entity.
    */
    public function newAction(Request $request)
    {
		$this->verifySessionRights();
        	$cancel = new Cancel();
        	$form = $this->createForm('Bo\AdminBundle\Form\CancelType', $cancel);
        	$form->handleRequest($request);

        	if ($form->isSubmitted() && $form->isValid()) {
				if($oAdvisor){
					$cancel->setAdvisor($oAdvisor);
					$cancel->setFirstname($oAdvisor->getFirstname());
					$cancel->setName($oAdvisor->getName());
					$this->updateEntity($cancel);
					$this->setActivity($oAdvisor->getName()." ".$oAdvisor->getFirstname()." is Created by this user");
					return $this->redirectToRoute('cancel_index');
				}
			}           
		}
		return $this->render('cancel/new.html.twig', array(
		    	'cancel' => $cancel,
			'teachers' => $em->getRepository('BoAdminBundle:Teachers')->getSelectList(),
			'cancel' => $em->getRepository('BoAdminBundle:Cancel')->findBy(array(),array('id' => 'asc')),
			'idcancel' => $idcancel,
			'idsubstitute' => $idsubstitute,
		    	'form' => $form->createView(),
			'pm'=>"personnel",
			'sm'=>"cancel",
		));
    }
    /**
    * Finds and displays a Cancel entity.
    */
    public function showAction(Cancel $cancel)
    {
	$this->verifySessionRights();
	$this->updateAdvisorCharge($cancel->getAdvisor());
	$em = $this->getDoctrine()->getManager();
        $oRepContract = $em->getRepository('BoAdminBundle:Contracts');
	$aContracts = $oRepContract->findBy(array('cancel'=>$cancel->getAdvisor(),'status'=>1));
	$aCharge = $this->getCpCharge($aContracts);
	$this->setActivity($cancel->getAdvisor()->getFirstname()." ".$cancel->getAdvisor()->getName()." is seen by this user");
        $deleteForm = $this->createDeleteForm($cancel);

        return $this->render('cancel/show.html.twig', array(
            	'cancel' => $cancel,
		'employee' => $cancel->getAdvisor(),
		'charge'=>$aCharge,
		'contracts' => $aContracts,
		'details'=>$this->getDetailCharge($aCharge,$this->getChargeParamter()),
		'hid'=>1,
            	'delete_form' => $deleteForm->createView(),
		'pm'=>"personnel",
		'sm'=>"cancel",
        ));
    }
    /**
    * Displays a form to edit an existing Cancel entity.
    */
    public function editAction(Request $request, Cancel $cancel)
    {
		$this->verifySessionRights();
		$em = $this->getDoctrine()->getManager();
        $oRepcancel = $em->getRepository('BoAdminBundle:Employee');
        $deleteForm = $this->createDeleteForm($cancel);
        $editForm = $this->createForm('Bo\AdminBundle\Form\CancelEditType', $cancel);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$idcancel = $request->request->get('cancel');
			$idsubstitute = $request->request->get('substitute');	
			$this->setActivity($cancel->getAdvisor()->getFirstname()." ".$cancel->getAdvisor()->getName()." is updated by this user");
			if($idcancel!=0 and $idcancel!=$cancel->getAdvisor()->getId()){
				$oAdvisor = $oRepcancel->find($idcancel);
				$cancel->setAdvisor($oAdvisor);
				$cancel->setFirstname($oAdvisor->getFirstname());
				$cancel->setName($oAdvisor->getName());
			}
			if($idsubstitute!=0){
				$oSubstitute = $oRepcancel->find($idsubstitute);
				$cancel->setSubstitute($oSubstitute);
			}else{
				$cancel->setSubstitute(null);
			}
			$this->updateEntity($cancel);
			return $this->redirectToRoute('cancel_index');

        }

        return $this->render('cancel/edit.html.twig', array(
            'cancel' => $cancel,
			'teachers' => $em->getRepository('BoAdminBundle:Teachers')->getSelectList(),
			'idcancel' => $cancel->getAdvisor()->getId(),
			'idsubstitute' => $cancel->getSubstitute()?$cancel->getSubstitute()->getId():null,
			'cancel' => $em->getRepository('BoAdminBundle:Cancel')->findBy(array(),array('id' => 'asc')),
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"personnel",
			'sm'=>"cancel",
        ));
    }

    /**
    * Deletes a Cancel entity.
    */
    public function deleteAction(Request $request, Cancel $cancel)
    {
	$this->demoteAdvisor($cancel);
        $form = $this->createDeleteForm($cancel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($cancel);
            $em->flush();
        }

        return $this->redirectToRoute('cancel_index');
    }
	private function demoteAdvisor($cancel){
		$oEmployee = $cancel->getAdvisor();
		//First: change his profile by entity employee
		$aProfile = $this->getRepository('BoAdminBundle:Profil')->findByName("Teacher");
		if(count($aProfile)==1 and $oProfile=$aProfile[0]){
			$oEmployee->setProfil($oProfile);
		}
		//Second: change his status and he will become teacher status instead Pedagical cancel
		$aStatus = $this->getRepository('BoAdminBundle:Status')->findByStatusname("Teacher");
		if(count($aStatus)==1 and $oStatus=$aStatus[0]){
			$oEmployee->setStatus($oStatus);
		}
		if(isset($oProfile) and isset($oStatus)) $this->updateEntity($oEmployee);
		//Third: Change his role by user's entity
		$aUser = $this->getRepository('BoUserBundle:User')->findByEmployee($oEmployee);
		if(count($aUser)==1 and $oUser=$aUser[0]){
			$aRoles = $oUser->getRoles();
			if(isset($aRoles[0]) and $aRoles[0]=="ROLE_ADMIN"){
				$oUser->removeRole("ROLE_ADMIN");
				$oUser->addRole("ROLE_TEACHER");
			}
			$this->updateEntity($oUser);
		}				 
		return;
	}

    /**
    * Creates a form to delete a Cancel entity.
    * @param Cancel $cancel The Cancel entity
    * @return \Symfony\Component\Form\Form The form
    */
    private function createDeleteForm(Cancel $cancel)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cancel_delete', array('id' => $cancel->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /**
     * Search a cancel.
     */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Cancel');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$aResult = $oEntity ->search($description);
		$this->setActivity($description." searched by this user");
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:Cancel:search.html.twig', array(
				'cancel'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Cancel:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
		$oRep = $em->getRepository('BoAdminBundle:Cancel');
		$nb_tc = $oRep->getTotal();
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('motcle');
			$this->get('session')->set('page',$page);
		}
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aCancel = $oRep->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);

        return $this->render('BoAdminBundle:Cancel:pagesearch.html.twig', array(
            'cancel' => $aCancel,
			'page' => $page, // On transmet à la vue la page courante,
        ));
    }
	private function setActivity($activity){
		return $this->createActivity("Cancel",$activity);	
	}
}

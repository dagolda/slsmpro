<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Advisors;
use Bo\AdminBundle\Form\AdvisorsType;
use Bo\AdminBundle\Form\AdvisorsEditType;

/**
* Advisors controller.
*/
class AdvisorsController extends  CommonController
{
    /**
    * Lists all Advisors entities.
    */
    public function indexAction()
    {	
		$this->get('session')->remove('page');
		$this->get('session')->remove('url');
		return $this->redirect($this->generateUrl('advisors_list'));		
    }
    /**
    * Lists all Advisors entities.
    */
    public function listAction()
    {	
		$this->verifySessionRights();
		$this->checkAndupdateCpCharge();
		$this->setActivity("List view");
        $em = $this->getDoctrine()->getManager();
        $oRepEmp = $em->getRepository('BoAdminBundle:Advisors');
		$nb_tc = $oRepEmp->getTotal();
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
		$advisors = $em->getRepository('BoAdminBundle:Advisors')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
        $form = $this->createForm('Bo\AdminBundle\Form\AdvisorsType', new Advisors());
        return $this->render('advisors/index.html.twig', array(
            'advisors' => $advisors,
			'teachers' => $em->getRepository('BoAdminBundle:Teachers')->getSelectList(),
			'page' => $page, // forward current page to view,
			'nb_pages' => $nb_pages, //total number page,
            'form' => $form->createView(),
			'total'=>$nb_tc, // record number.
			'nb_cpp' => $nb_cpp,// line's number to display
			'pm'=>"personnel",
			'sm'=>"advisors",
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
		return $this->redirect($this->generateUrl('advisors_list'));			
	}
    /**
    * Creates a new Advisors entity.
    */
    public function newAction(Request $request)
    {
		$this->verifySessionRights();
		$em = $this->getDoctrine()->getManager();
        $oRepEmp = $em->getRepository('BoAdminBundle:Employee');
		$idadvisor=$idsubstitute=0;
        $advisor = new Advisors();
        $form = $this->createForm('Bo\AdminBundle\Form\AdvisorsType', $advisor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$idadvisor = $request->request->get('advisor');
			$idsubstitute = $request->request->get('substitute');
			if($idadvisor!=0){
				$oAdvisor = $oRepEmp->find($idadvisor);
				$oSubstitute = $oRepEmp->find($idsubstitute);
				$advisor->setSubstitute($oSubstitute);
				if($oAdvisor){
					$advisor->setAdvisor($oAdvisor);
					$advisor->setFirstname($oAdvisor->getFirstname());
					$advisor->setName($oAdvisor->getName());
					$this->updateEntity($advisor);
					$this->setActivity($oAdvisor->getName()." ".$oAdvisor->getFirstname()." is Created by this user");
					return $this->redirectToRoute('advisors_index');
				}
			}           
        }
        return $this->render('advisors/new.html.twig', array(
            'advisor' => $advisor,
			'teachers' => $em->getRepository('BoAdminBundle:Teachers')->getSelectList(),
			'advisors' => $em->getRepository('BoAdminBundle:Advisors')->findBy(array(),array('id' => 'asc')),
			'idadvisor' => $idadvisor,
			'idsubstitute' => $idsubstitute,
            'form' => $form->createView(),
			'pm'=>"personnel",
			'sm'=>"advisors",
        ));
    }
    /**
    * Finds and displays a Advisors entity.
    */
    public function showAction(Advisors $advisor)
    {
	$this->verifySessionRights();
	$this->updateAdvisorCharge($advisor->getAdvisor());
	$em = $this->getDoctrine()->getManager();
        $oRepContract = $em->getRepository('BoAdminBundle:Contracts');
	$aContracts = $oRepContract->findBy(array('advisor'=>$advisor->getAdvisor(),'status'=>1));
	$aCharge = $this->getCpCharge($aContracts);
	$this->setActivity($advisor->getAdvisor()->getFirstname()." ".$advisor->getAdvisor()->getName()." is seen by this user");
        $deleteForm = $this->createDeleteForm($advisor);

        return $this->render('advisors/show.html.twig', array(
            	'advisors' => $advisor,
		'employee' => $advisor->getAdvisor(),
		'charge'=>$aCharge,
		'contracts' => $aContracts,
		'details'=>$this->getDetailCharge($aCharge,$this->getChargeParamter()),
		'hid'=>1,
            	'delete_form' => $deleteForm->createView(),
		'pm'=>"personnel",
		'sm'=>"advisors",
        ));
    }
    /**
    * Displays a form to edit an existing Advisors entity.
    */
    public function editAction(Request $request, Advisors $advisor)
    {
		$this->verifySessionRights();
		$em = $this->getDoctrine()->getManager();
        $oRepEmp = $em->getRepository('BoAdminBundle:Employee');
        $deleteForm = $this->createDeleteForm($advisor);
        $editForm = $this->createForm('Bo\AdminBundle\Form\AdvisorsEditType', $advisor);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$idadvisor = $request->request->get('advisor');
			$idsubstitute = $request->request->get('substitute');	
			$this->setActivity($advisor->getAdvisor()->getFirstname()." ".$advisor->getAdvisor()->getName()." is updated by this user");
			if($idadvisor!=0 and $idadvisor!=$advisor->getAdvisor()->getId()){
				$oAdvisor = $oRepEmp->find($idadvisor);
				$advisor->setAdvisor($oAdvisor);
				$advisor->setFirstname($oAdvisor->getFirstname());
				$advisor->setName($oAdvisor->getName());
			}
			if($idsubstitute!=0){
				$oSubstitute = $oRepEmp->find($idsubstitute);
				$advisor->setSubstitute($oSubstitute);
			}else{
				$advisor->setSubstitute(null);
			}
			$this->updateEntity($advisor);
			return $this->redirectToRoute('advisors_index');

        }

        return $this->render('advisors/edit.html.twig', array(
            'advisor' => $advisor,
			'teachers' => $em->getRepository('BoAdminBundle:Teachers')->getSelectList(),
			'idadvisor' => $advisor->getAdvisor()->getId(),
			'idsubstitute' => $advisor->getSubstitute()?$advisor->getSubstitute()->getId():null,
			'advisors' => $em->getRepository('BoAdminBundle:Advisors')->findBy(array(),array('id' => 'asc')),
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"personnel",
			'sm'=>"advisors",
        ));
    }

    /**
    * Deletes a Advisors entity.
    */
    public function deleteAction(Request $request, Advisors $advisor)
    {
	$this->demoteAdvisor($advisor);
        $form = $this->createDeleteForm($advisor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($advisor);
            $em->flush();
        }

        return $this->redirectToRoute('advisors_index');
    }
	private function demoteAdvisor($advisor){
		$oEmployee = $advisor->getAdvisor();
		//First: change his profile by entity employee
		$aProfile = $this->getRepository('BoAdminBundle:Profil')->findByName("Teacher");
		if(count($aProfile)==1 and $oProfile=$aProfile[0]){
			$oEmployee->setProfil($oProfile);
		}
		//Second: change his status and he will become teacher status instead Pedagical advisor
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
    * Creates a form to delete a Advisors entity.
    * @param Advisors $advisor The Advisors entity
    * @return \Symfony\Component\Form\Form The form
    */
    private function createDeleteForm(Advisors $advisor)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('advisors_delete', array('id' => $advisor->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /**
     * Search a advisors.
     */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Advisors');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$aResult = $oEntity ->search($description);
		$this->setActivity($description." searched by this user");
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:Advisors:search.html.twig', array(
				'advisors'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Advisors:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
		$oRep = $em->getRepository('BoAdminBundle:Advisors');
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
		$aAdvisors = $oRep->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);

        return $this->render('BoAdminBundle:Advisors:pagesearch.html.twig', array(
            'advisors' => $aAdvisors,
			'page' => $page, // On transmet à la vue la page courante,
        ));
    }
	private function setActivity($activity){
		return $this->createActivity("Advisors",$activity);	
	}
}

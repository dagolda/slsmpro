<?php

namespace Bo\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Controller\CommonController;
use Bo\AdminBundle\Entity\Cheick;
use Bo\AdminBundle\Form\CheickType;
use Bo\UserBundle\Entity\Rights;
use Bo\UserBundle\Form\RightsType;

/**
* Rights controller.
*/
class RightsController extends CommonController
{
    /**
    * Create a new Rights entity.
    */
    public function newAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$rubrics = $em->getRepository('BoAdminBundle:Rubric')->findAll();
		$idprofil = $this->get('session')->get('idprofil');
        $cheick = new Cheick();
		$cheick->setIdprofil($idprofil);
        $form = $this->createForm('Bo\AdminBundle\Form\CheickType', $cheick);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			if($idprofil==null) $idprofil=$cheick->getIdprofil();
			$profil = $em->getRepository('BoAdminBundle:Profil')->find($idprofil);
			$rubrics=$this->getEnableRubric($request,$rubrics);
			$aRubricNames = $this->getRubricName($rubrics);
			foreach($rubrics as $rubric){
				$subrubrics = $em->getRepository('BoAdminBundle:SubRubric')->findBy(array('idrubric'=>$rubric->getId()));
				foreach($subrubrics as $subrubric){
					$right = new Rights();
					$right->setRubric($rubric);
					$right->setSubrubric($subrubric);
					$right->setIdprofil($idprofil);
					if($profil->getName()=="Superadmin") $this->enableAll($right);
					$this->updateEntity($right);
				}	
			}
			if(count($aRubricNames)>0){
				$attr = join(',',$aRubricNames);
				$profil->setRubric($attr);
				$this->updateEntity($profil);
			} 
			return $this->redirectToRoute('profil_show', array('id'=>$idprofil));
        }

        return $this->render('rights/new.html.twig', array(
            'idprofil' => $idprofil,
			'rubrics'  => $rubrics,
            'form' => $form->createView(),
			'pm'=>"tools",
			'sm'=>"profile",
        ));
    }
    /**
    * Create a new Rights entity.
    */
    public function addAction(Request $request,$idprofil)
    {
		$em = $this->getDoctrine()->getManager();
		$rubrics = $em->getRepository('BoAdminBundle:Rubric')->findAll();
        $right = new Rights();
        $form = $this->createForm('Bo\UserBundle\Form\RightsAddType', $right);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$idsrubric = $request->request->get('idsrubric');
			$oSrubric = $em->getRepository('BoAdminBundle:SubRubric')->find($idsrubric);
			if($oSrubric){
				$right->setSubrubric($oSrubric);
				$right->setIdprofil($idprofil);
				$this->updateEntity($right);
				return $this->redirectToRoute('profil_show', array('id'=>$idprofil));				
			}
        }

        return $this->render('rights/add.html.twig', array(
            'idprofil' => $idprofil,
			'rubrics'  => $rubrics,
            'form' => $form->createView(),
			'pm'=>"tools",
			'sm'=>"profile",
        ));
    }
    /**
    * Create a new Rights entity.
    */
    public function createAction(Request $request,$idprofil)
    {
		$em = $this->getDoctrine()->getManager();
		$rights = new Rights();
        $form = $this->createForm('Bo\UserBundle\Form\RightsType', $rights);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$idrubric = $request->request->get('idrubric');	
			$idsrubric = $request->request->get('idsrubric');	
			if($idsrubric>0){
				$srubrics = $em->getRepository('BoAdminBundle:SubRubric')->find($idsrubric);
				$rights->setRubric($rubrics);
				$rights->setSubrubric($srubrics);
			}
			$this->updateEntity($rights);
        }
			return $this->redirectToRoute('profil_show', array('id'=>$profil->getId()));

    }	
    /**
    * Creates a new Rights entity.
    */
    public function updateAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$rubrics = $em->getRepository('BoAdminBundle:Rubric')->findAll();
		$idprofil = $this->get('session')->get('idprofil');
        $cheick = new Cheick();
		$cheick->setIdprofil($idprofil);
        $form = $this->createForm('Bo\AdminBundle\Form\CheickType', $cheick);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			if($idprofil==null) $idprofil=$cheick->getIdprofil();
			$em->getRepository('BoUserBundle:Rights')->removeRights($idprofil);
			$profil = $em->getRepository('BoAdminBundle:Profil')->find($idprofil);
			$rubrics=$this->getEnableRubric($request,$rubrics);
			$aRubricNames = $this->getRubricName($rubrics);
			foreach($rubrics as $rubric){
				$subrubrics = $em->getRepository('BoAdminBundle:SubRubric')->findBy(array('idrubric'=>$rubric->getId()));
				foreach($subrubrics as $subrubric){
					$right = new Rights();
					$right->setRubric($rubric);
					$right->setSubrubric($subrubric);
					$right->setIdprofil($idprofil);
					if($profil->getName()=="Superadmin") $this->enableAll($right);
					$this->updateEntity($right);
				}	
			}
			if(count($aRubricNames)>0){
				$attr = join(',',$aRubricNames);
				$profil->setRubric($attr);
				$this->updateEntity($profil);
			} 
			return $this->redirectToRoute('profil_show', array('id'=>$idprofil));
        }

        return $this->render('rights/update.html.twig', array(
            'idprofil' => $idprofil,
			'rubrics'  => $rubrics,
            'form' => $form->createView(),
			'pm'=>"tools",
			'sm'=>"profile",
        ));
    }
	
    /**
    * Displays a form to right edit an existing Rights entity.
    */
    public function editAction(Request $request, $id)
    {
		$em = $this->getDoctrine()->getManager();
		$right = $em->getRepository('BoUserBundle:Rights')->find($id);		
        $editForm = $this->createForm('Bo\UserBundle\Form\RightsType', $right);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()){
			$this->updateEntity($right);
            return $this->redirectToRoute('profil_show', array('id'=>$right->getIdprofil()));
        }

        return $this->render('rights/edit.html.twig', array(
            'right' => $right,
            'form' => $editForm->createView(),
			'pm'=>"setting",
			'sm'=>"profile",
        ));
    }
    /**
    * Reload sub rubric by ajax.
    */
    public function srubricAction(Request $request)
    {
		if($request->isXmlHttpRequest())
		{	
			$data = $request->request->get('data');	
		}
		$aData = explode(":",$data);
		$idrubric = $aData[0];
		$idprofil = $aData[1];
		$em = $this->getDoctrine()->getManager();
		$oRep = $em->getRepository('BoAdminBundle:SubRubric');
		$aSrubric = $oRep->getAllen($idrubric);
        return $this->render('BoUserBundle:Rights:selectsrubric.html.twig', array(
            'srubrics' => $aSrubric,
		));
    }	
    /**
    * Displays a form to right edit an existing Rights entity.
    */
    public function enableallAction(Request $request,$id)
    {
		$em = $this->getDoctrine()->getManager();
		$right = $em->getRepository('BoUserBundle:Rights')->find($id);	
		$this->updateEntity($this->enableAll($right));
        return $this->redirectToRoute('profil_show', array('id'=>$right->getIdprofil()));
    }
	
    /**
    * Displays a form to right edit an existing Rights entity.
    */
    public function disableAction(Request $request,$id)
    {
		$em = $this->getDoctrine()->getManager();
		$right = $em->getRepository('BoUserBundle:Rights')->find($id);	
		$this->updateEntity($this->disable($right));
        return $this->redirectToRoute('profil_show', array('id'=>$right->getIdprofil()));
    }
    /**
    * returns the checked items
    */
	private function getEnableRubric($request,$rubrics){
		$aResult=array();
		foreach($rubrics as $rubric){
			$req = $request->request->get($rubric->getNameen());
			if($rubric->getNameen()==$req) $aResult[]=$rubric;
		}
		return $aResult;
	}
    /**
    * disable all items
    */	
	private function disable($right){
		$right->setActive(0);
		$right->setListe(0);
		$right->setDdelete(0);
		$right->setEdit(0);
		$right->setCreation(0);
		$right->setOthers(0);
		$right->setSearch(0);
		return $right;
	}
	private function getRubricName($rubrics){
		$aResult=array();
		foreach($rubrics as $rubric){
			$aResult[]=$rubric->getNameen();
		}
		return $aResult;		
	}
}

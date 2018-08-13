<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use Bo\AdminBundle\Entity\Profil;
use Bo\AdminBundle\Form\ProfilType;

use Bo\UserBundle\Entity\Rights;
use Bo\UserBundle\Form\RightsType;

/**
* Profil controller.
*/
class ProfilController extends CommonController
{
    /**
    * Lists all Profil entities.
    */
    public function indexAction()
    {
	$this->verifySessionRights();
        $em = $this->getDoctrine()->getManager();

        $profils = $em->getRepository('BoAdminBundle:Profil')->findAll();
	$form = $this->createForm('Bo\AdminBundle\Form\ProfilType2', new Profil());

        return $this->render('profil/index.html.twig', array(
            	'profils' => $profils,
		'form' => $form->createView(),
		'pm'=>"tools",
		'sm'=>"profile",
        ));
    }

    /**
    * Creates a new Profil entity.
    */
    public function newAction(Request $request)
    {
        $profil = new Profil();
		$message=null;
        $form = $this->createForm('Bo\AdminBundle\Form\ProfilType2', $profil);
        $form->handleRequest($request);
		$this->get("session")->set('back',$request->headers->get('referer'));
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
			$profils = $em->getRepository('BoAdminBundle:Profil')->findByName($profil->getName());
			if(!isset($profils[0])){
				$this->updateEntity($profil);
				$this->setActivity("The profil ".$profil->getName()." is Created by this user");
				return $this->redirectToRoute('profil_index');
			}else{
				$message = array('type'=>"Warning",'texte'=>"This profile already exists");
			}           
        }
        return $this->render('profil/new.html.twig', array(
            'profil' => $profil,
			'message' => $message,
            'form' => $form->createView(),
			'pm'=>"tools",
			'sm'=>"profile",
			'url'=>$request->headers->get('referer'),
        ));
    }

    /**
    * Finds and displays a Profil entity.
    */
    public function showAction(Profil $profil)
    {
        $em = $this->getDoctrine()->getManager();
		$em = $this->getDoctrine()->getManager();
		$this->get('session')->set('idprofil',$profil->getId());
		$this->setActivity("The profil ".$profil->getName()." is seen by this user");
        $form = $this->createForm('Bo\UserBundle\Form\RightsAddType', new Rights());
        return $this->render('profil/show.html.twig', array(
            'profil' => $profil,
			'right_form' => $form->createView(),
			'rights' => $em->getRepository('BoUserBundle:Rights')->findBy(array('idprofil'=>$profil->getId()),array('rubric'=>"asc")),
			'rubrics' => $em->getRepository('BoAdminBundle:Rubric')->getAllen(),
			'employees'=>$em->getRepository('BoAdminBundle:Employee')->findBy(array('profil'=>$profil)),
			'pm'=>"tools",
			'sm'=>"profile",
        ));
    }
    /**
    * Finds and displays a Profil entity.
    */
    public function allenableAction(Profil $profil)
    {
        $em = $this->getDoctrine()->getManager();
		$em = $this->getDoctrine()->getManager();
		$this->get('session')->set('idprofil',$profil->getId());

        $form = $this->createForm('Bo\UserBundle\Form\RightsType', new Rights());
        return $this->render('profil/show.html.twig', array(
            'profil' => $profil,
			'form' => $form->createView(),
			'rights' => $em->getRepository('BoUserBundle:Rights')->findBy(array('idprofil'=>$profil->getId())),
			'rubrics' => $em->getRepository('BoAdminBundle:Rubric')->getAllen(),
			'pm'=>"tools",
			'sm'=>"profile",
        ));
    }

    /**
    * Displays a form to edit an existing Profil entity.
    */
    public function editAction(Request $request, Profil $profil)
    {
        $deleteForm = $this->createDeleteForm($profil);
        $editForm = $this->createForm('Bo\AdminBundle\Form\ProfilType', $profil);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$this->updateEntity($profil);
			$this->setActivity("The profil ".$profil->getName()." is modified by this user");
            return $this->redirectToRoute('profil_index');
        }

        return $this->render('profil/edit.html.twig', array(
            'profil' => $profil,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"tools",
			'sm'=>"profile",
        ));
    }

    /**
    * Deletes a Profil entity.
    */
    public function deleteAction(Request $request, Profil $profil)
    {
        $form = $this->createDeleteForm($profil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($profil);
            $em->flush();
        }

        return $this->redirectToRoute('profil_index');
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
    public function enableallAction(Request $request, Profil $profil)
    {
		$em = $this->getDoctrine()->getManager();
		$aRight = $em->getRepository('BoUserBundle:Rights')->findBy(array('idprofil'=>$profil->getId()));	
		foreach($aRight as $oRight){
			$this->updateEntity($this->enableAll($oRight));			
		}
        return $this->redirectToRoute('profil_show', array('id'=>$profil->getId()));
    }
    /**
     * Creates a form to delete a Profil entity.
     * @param Profil $profil The Profil entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Profil $profil)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('profil_delete', array('id' => $profil->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	private function setActivity($activity){
		return $this->createActivity("Profil",$activity);	
	}
}

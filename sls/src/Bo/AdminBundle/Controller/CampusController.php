<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Bo\AdminBundle\Controller\CommonController;
use Bo\AdminBundle\Entity\Campus;
use Bo\AdminBundle\Form\CampusType;

/**
 * Campus controller.
 *
 */
class CampusController extends CommonController
{
    /**
     * Lists all Campus entities.
     *
     */
    public function indexAction()
    {
	$this->verifySessionRights();
	$this->createActivity("Campus","List view");
        $em = $this->getDoctrine()->getManager();
		
        $campuses = $em->getRepository('BoAdminBundle:Campus')->findAll();

        return $this->render('campus/index.html.twig', array(
            'campuses' => $campuses,
			'pm'=>"local",
			'sm'=>"campus",
        ));
    }

    /**
     * Creates a new Campus entity.
     *
     */
    public function newAction(Request $request)
    {
        $campus = new Campus();
        $form = $this->createForm('Bo\AdminBundle\Form\CampusType', $campus);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($campus);
            $em->flush();
			$this->createActivity("Campus",$campus->getDesignation()." is created by this user");
            return $this->redirect($this->get('session')->get('url'));
        }
		$this->get('session')->set('url',$request->headers->get('referer'));
        return $this->render('campus/new.html.twig', array(
            'campus' => $campus,
            'form' => $form->createView(),
			'pm'=>"local",
			'sm'=>"campus",
        ));
    }

    /**
     * Finds and displays a Campus entity.
     *
     */
    public function showAction(Campus $campus)
    {
        $deleteForm = $this->createDeleteForm($campus);
		$this->createActivity("Campus",$campus->getDesignation()." is consulted by this user");
        return $this->render('campus/show.html.twig', array(
            'campus' => $campus,
            'delete_form' => $deleteForm->createView(),
			'locals'=>$this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Local')->getLocalList($campus->getDesignation()),
			'pm'=>"local",
			'sm'=>"campus",
        ));
    }

    /**
     * Displays a form to edit an existing Campus entity.
     *
     */
    public function editAction(Request $request, Campus $campus)
    {
        $deleteForm = $this->createDeleteForm($campus);
        $editForm = $this->createForm('Bo\AdminBundle\Form\CampusType', $campus);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($campus);
            $em->flush();
			$this->createActivity("Campus",$campus->getDesignation()." is modified by this user");
            return $this->redirect($this->get('session')->get('url'));
        }
		$this->get('session')->set('url',$request->headers->get('referer'));
        return $this->render('campus/edit.html.twig', array(
            'campus' => $campus,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"local",
			'sm'=>"campus",
        ));
    }

    /**
     * Deletes a Campus entity.
     *
     */
    public function deleteAction(Request $request, Campus $campus)
    {
        $form = $this->createDeleteForm($campus);
        $form->handleRequest($request);
		$sDesignation = $campus->getDesignation();
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($campus);
            $em->flush();
			$this->createActivity("Campus",$sDesignation." is deleted by this user");
        }

        return $this->redirectToRoute('campus_index');
    }

    /**
     * Creates a form to delete a Campus entity.
     *
     * @param Campus $campus The Campus entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Campus $campus)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('campus_delete', array('id' => $campus->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

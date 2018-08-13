<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Mobiliers;
use Bo\AdminBundle\Form\MobiliersType;

/**
 * Mobiliers controller.
 *
 */
class MobiliersController extends Controller
{
    /**
     * Lists all Mobiliers entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $mobiliers = $em->getRepository('BoAdminBundle:Mobiliers')->findAll();

        return $this->render('mobiliers/index.html.twig', array(
            'mobiliers' => $mobiliers,
			'pm'=>"local",
			'sm'=>"mobiliers",
        ));
    }

    /**
     * Creates a new Mobiliers entity.
     *
     */
    public function newAction(Request $request)
    {
        $mobilier = new Mobiliers();
        $form = $this->createForm('Bo\AdminBundle\Form\MobiliersType', $mobilier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($mobilier);
            $em->flush();

            return $this->redirectToRoute('mobiliers_show', array('id' => $mobiliers->getId()));
        }

        return $this->render('mobiliers/new.html.twig', array(
            'mobilier' => $mobilier,
            'form' => $form->createView(),
			'pm'=>"local",
			'sm'=>"mobiliers",
        ));
    }

    /**
     * Finds and displays a Mobiliers entity.
     *
     */
    public function showAction(Mobiliers $mobilier)
    {
        $deleteForm = $this->createDeleteForm($mobilier);

        return $this->render('mobiliers/show.html.twig', array(
            'mobilier' => $mobilier,
            'delete_form' => $deleteForm->createView(),
			'pm'=>"local",
			'sm'=>"mobiliers",
        ));
    }

    /**
     * Displays a form to edit an existing Mobiliers entity.
     *
     */
    public function editAction(Request $request, Mobiliers $mobilier)
    {
        $deleteForm = $this->createDeleteForm($mobilier);
        $editForm = $this->createForm('Bo\AdminBundle\Form\MobiliersType', $mobilier);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($mobilier);
            $em->flush();

            return $this->redirectToRoute('mobiliers_edit', array('id' => $mobilier->getId()));
        }

        return $this->render('mobiliers/edit.html.twig', array(
            'mobilier' => $mobilier,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"local",
			'sm'=>"mobiliers",
        ));
    }

    /**
     * Deletes a Mobiliers entity.
     *
     */
    public function deleteAction(Request $request, Mobiliers $mobilier)
    {
        $form = $this->createDeleteForm($mobilier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($mobilier);
            $em->flush();
        }

        return $this->redirectToRoute('mobiliers_index');
    }

    /**
     * Creates a form to delete a Mobiliers entity.
     *
     * @param Mobiliers $mobilier The Mobiliers entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Mobiliers $mobilier)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('mobiliers_delete', array('id' => $mobilier->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

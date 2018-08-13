<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\TsValidation;
use Bo\AdminBundle\Form\TsValidationType;

/**
 * TsValidation controller.
 *
 */
class TsValidationController extends Controller
{
    /**
     * Lists all TsValidation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tsValidations = $em->getRepository('BoAdminBundle:TsValidation')->findAll();

        return $this->render('tsvalidation/index.html.twig', array(
            'tsValidations' => $tsValidations,
        ));
    }

    /**
     * Creates a new TsValidation entity.
     *
     */
    public function newAction(Request $request)
    {
        $tsValidation = new TsValidation();
        $form = $this->createForm('Bo\AdminBundle\Form\TsValidationType', $tsValidation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tsValidation);
            $em->flush();

            return $this->redirectToRoute('tsvalidation_show', array('id' => $tsvalidation->getId()));
        }

        return $this->render('tsvalidation/new.html.twig', array(
            'tsValidation' => $tsValidation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TsValidation entity.
     *
     */
    public function showAction(TsValidation $tsValidation)
    {
        $deleteForm = $this->createDeleteForm($tsValidation);

        return $this->render('tsvalidation/show.html.twig', array(
            'tsValidation' => $tsValidation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TsValidation entity.
     *
     */
    public function editAction(Request $request, TsValidation $tsValidation)
    {
        $deleteForm = $this->createDeleteForm($tsValidation);
        $editForm = $this->createForm('Bo\AdminBundle\Form\TsValidationType', $tsValidation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tsValidation);
            $em->flush();

            return $this->redirectToRoute('tsvalidation_edit', array('id' => $tsValidation->getId()));
        }

        return $this->render('tsvalidation/edit.html.twig', array(
            'tsValidation' => $tsValidation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TsValidation entity.
     *
     */
    public function deleteAction(Request $request, TsValidation $tsValidation)
    {
        $form = $this->createDeleteForm($tsValidation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tsValidation);
            $em->flush();
        }

        return $this->redirectToRoute('tsvalidation_index');
    }

    /**
     * Creates a form to delete a TsValidation entity.
     *
     * @param TsValidation $tsValidation The TsValidation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TsValidation $tsValidation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tsvalidation_delete', array('id' => $tsValidation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

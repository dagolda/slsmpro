<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\TsBilling;
use Bo\AdminBundle\Form\TsBillingType;

/**
 * TsBilling controller.
 *
 */
class TsBillingController extends Controller
{
    /**
     * Lists all TsBilling entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tsBillings = $em->getRepository('BoAdminBundle:TsBilling')->findAll();

        return $this->render('tsbilling/index.html.twig', array(
            'tsBillings' => $tsBillings,
        ));
    }

    /**
     * Creates a new TsBilling entity.
     *
     */
    public function newAction(Request $request)
    {
        $tsBilling = new TsBilling();
        $form = $this->createForm('Bo\AdminBundle\Form\TsBillingType', $tsBilling);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tsBilling);
            $em->flush();

            return $this->redirectToRoute('tsbilling_show', array('id' => $tsbilling->getId()));
        }

        return $this->render('tsbilling/new.html.twig', array(
            'tsBilling' => $tsBilling,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TsBilling entity.
     *
     */
    public function showAction(TsBilling $tsBilling)
    {
        $deleteForm = $this->createDeleteForm($tsBilling);

        return $this->render('tsbilling/show.html.twig', array(
            'tsBilling' => $tsBilling,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TsBilling entity.
     *
     */
    public function editAction(Request $request, TsBilling $tsBilling)
    {
        $deleteForm = $this->createDeleteForm($tsBilling);
        $editForm = $this->createForm('Bo\AdminBundle\Form\TsBillingType', $tsBilling);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tsBilling);
            $em->flush();

            return $this->redirectToRoute('tsbilling_edit', array('id' => $tsBilling->getId()));
        }

        return $this->render('tsbilling/edit.html.twig', array(
            'tsBilling' => $tsBilling,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TsBilling entity.
     *
     */
    public function deleteAction(Request $request, TsBilling $tsBilling)
    {
        $form = $this->createDeleteForm($tsBilling);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tsBilling);
            $em->flush();
        }

        return $this->redirectToRoute('tsbilling_index');
    }

    /**
     * Creates a form to delete a TsBilling entity.
     *
     * @param TsBilling $tsBilling The TsBilling entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TsBilling $tsBilling)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tsbilling_delete', array('id' => $tsBilling->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

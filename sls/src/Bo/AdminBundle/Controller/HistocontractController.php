<?php

namespace Bo\AdminBundle\Controller;

use Bo\AdminBundle\Entity\Histocontract;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Histocontract controller.
 *
 */
class HistocontractController extends Controller
{
    /**
     * Lists all histocontract entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $histocontracts = $em->getRepository('BoAdminBundle:Histocontract')->findAll();

        return $this->render('histocontract/index.html.twig', array(
            'histocontracts' => $histocontracts,
        ));
    }

    /**
     * Creates a new histocontract entity.
     *
     */
    public function newAction(Request $request)
    {
        $histocontract = new Histocontract();
        $form = $this->createForm('Bo\AdminBundle\Form\HistocontractType', $histocontract);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($histocontract);
            $em->flush();

            return $this->redirectToRoute('histocontract_show', array('id' => $histocontract->getId()));
        }

        return $this->render('histocontract/new.html.twig', array(
            'histocontract' => $histocontract,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a histocontract entity.
     *
     */
    public function showAction(Histocontract $histocontract)
    {
        $deleteForm = $this->createDeleteForm($histocontract);

        return $this->render('histocontract/show.html.twig', array(
            'histocontract' => $histocontract,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing histocontract entity.
     *
     */
    public function editAction(Request $request, Histocontract $histocontract)
    {
        $deleteForm = $this->createDeleteForm($histocontract);
        $editForm = $this->createForm('Bo\AdminBundle\Form\HistocontractType', $histocontract);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('histocontract_edit', array('id' => $histocontract->getId()));
        }

        return $this->render('histocontract/edit.html.twig', array(
            'histocontract' => $histocontract,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a histocontract entity.
     *
     */
    public function deleteAction(Request $request, Histocontract $histocontract)
    {
        $form = $this->createDeleteForm($histocontract);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($histocontract);
            $em->flush();
        }

        return $this->redirectToRoute('histocontract_index');
    }

    /**
     * Creates a form to delete a histocontract entity.
     *
     * @param Histocontract $histocontract The histocontract entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Histocontract $histocontract)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('histocontract_delete', array('id' => $histocontract->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

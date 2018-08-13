<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Diplomas;
use Bo\AdminBundle\Form\DiplomasType;

/**
 * Diplomas controller.
 *
 */
class DiplomasController extends Controller
{
    /**
     * Lists all Diplomas entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $diplomas = $em->getRepository('BoAdminBundle:Diplomas')->findAll();

        return $this->render('diplomas/index.html.twig', array(
            'diplomas' => $diplomas,
        ));
    }

    /**
     * Creates a new Diplomas entity.
     *
     */
    public function newAction(Request $request)
    {
        $diploma = new Diplomas();
        $form = $this->createForm('Bo\AdminBundle\Form\DiplomasType', $diploma);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($diploma);
            $em->flush();

            return $this->redirectToRoute('diplomas_show', array('id' => $diplomas->getId()));
        }

        return $this->render('diplomas/new.html.twig', array(
            'diploma' => $diploma,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Diplomas entity.
     *
     */
    public function showAction(Diplomas $diploma)
    {
        $deleteForm = $this->createDeleteForm($diploma);

        return $this->render('diplomas/show.html.twig', array(
            'diploma' => $diploma,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Diplomas entity.
     *
     */
    public function editAction(Request $request, Diplomas $diploma)
    {
        $deleteForm = $this->createDeleteForm($diploma);
        $editForm = $this->createForm('Bo\AdminBundle\Form\DiplomasType', $diploma);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($diploma);
            $em->flush();

            return $this->redirectToRoute('diplomas_edit', array('id' => $diploma->getId()));
        }

        return $this->render('diplomas/edit.html.twig', array(
            'diploma' => $diploma,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Diplomas entity.
     *
     */
    public function deleteAction(Request $request, Diplomas $diploma)
    {
        $form = $this->createDeleteForm($diploma);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($diploma);
            $em->flush();
        }

        return $this->redirectToRoute('diplomas_index');
    }

    /**
     * Creates a form to delete a Diplomas entity.
     *
     * @param Diplomas $diploma The Diplomas entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Diplomas $diploma)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('diplomas_delete', array('id' => $diploma->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

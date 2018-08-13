<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\HistoStudents;
use Bo\AdminBundle\Form\HistoStudentsType;

/**
* HistoStudents controller.
*/
class HistoStudentsController extends Controller
{
    /**
    * Lists all HistoStudents entities.
    */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $histoStudents = $em->getRepository('BoAdminBundle:HistoStudents')->findAll();

        return $this->render('histostudents/index.html.twig', array(
            'histoStudents' => $histoStudents,
        ));
    }

    /**
    * Creates a new HistoStudents entity.
    */
    public function newAction(Request $request)
    {
        $histoStudent = new HistoStudents();
        $form = $this->createForm('Bo\AdminBundle\Form\HistoStudentsType', $histoStudent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($histoStudent);
            $em->flush();

            return $this->redirectToRoute('histostudents_show', array('id' => $histostudents->getId()));
        }

        return $this->render('histostudents/new.html.twig', array(
            'histoStudent' => $histoStudent,
            'form' => $form->createView(),
        ));
    }

    /**
    * Finds and displays a HistoStudents entity.
    */
    public function showAction(HistoStudents $histoStudent)
    {
        $deleteForm = $this->createDeleteForm($histoStudent);

        return $this->render('histostudents/show.html.twig', array(
            'histoStudent' => $histoStudent,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Displays a form to edit an existing HistoStudents entity.
    */
    public function editAction(Request $request, HistoStudents $histoStudent)
    {
        $deleteForm = $this->createDeleteForm($histoStudent);
        $editForm = $this->createForm('Bo\AdminBundle\Form\HistoStudentsType', $histoStudent);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($histoStudent);
            $em->flush();

            return $this->redirectToRoute('histostudents_edit', array('id' => $histoStudent->getId()));
        }

        return $this->render('histostudents/edit.html.twig', array(
            'histoStudent' => $histoStudent,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Deletes a HistoStudents entity.
    */
    public function deleteAction(Request $request, HistoStudents $histoStudent)
    {
        $form = $this->createDeleteForm($histoStudent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($histoStudent);
            $em->flush();
        }

        return $this->redirectToRoute('histostudents_index');
    }

    /**
     * Creates a form to delete a HistoStudents entity.
     * @param HistoStudents $histoStudent The HistoStudents entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(HistoStudents $histoStudent)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('histostudents_delete', array('id' => $histoStudent->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

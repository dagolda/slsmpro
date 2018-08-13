<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\TsStudent;
use Bo\AdminBundle\Form\TsStudentType;

/**
 * TsStudent controller.
 *
 */
class TsStudentController extends Controller
{
    /**
     * Lists all TsStudent entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tsStudents = $em->getRepository('BoAdminBundle:TsStudent')->findAll();

        return $this->render('tsstudent/index.html.twig', array(
            'tsStudents' => $tsStudents,
        ));
    }

    /**
     * Creates a new TsStudent entity.
     *
     */
    public function newAction(Request $request)
    {
        $tsStudent = new TsStudent();
        $form = $this->createForm('Bo\AdminBundle\Form\TsStudentType', $tsStudent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tsStudent);
            $em->flush();

            return $this->redirectToRoute('tsstudent_show', array('id' => $tsstudent->getId()));
        }

        return $this->render('tsstudent/new.html.twig', array(
            'tsStudent' => $tsStudent,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TsStudent entity.
     *
     */
    public function showAction(TsStudent $tsStudent)
    {
        $deleteForm = $this->createDeleteForm($tsStudent);

        return $this->render('tsstudent/show.html.twig', array(
            'tsStudent' => $tsStudent,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TsStudent entity.
     *
     */
    public function editAction(Request $request, TsStudent $tsStudent)
    {
        $deleteForm = $this->createDeleteForm($tsStudent);
        $editForm = $this->createForm('Bo\AdminBundle\Form\TsStudentType', $tsStudent);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tsStudent);
            $em->flush();

            return $this->redirectToRoute('tsstudent_edit', array('id' => $tsStudent->getId()));
        }

        return $this->render('tsstudent/edit.html.twig', array(
            'tsStudent' => $tsStudent,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TsStudent entity.
     *
     */
    public function deleteAction(Request $request, TsStudent $tsStudent)
    {
        $form = $this->createDeleteForm($tsStudent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tsStudent);
            $em->flush();
        }

        return $this->redirectToRoute('tsstudent_index');
    }

    /**
     * Creates a form to delete a TsStudent entity.
     *
     * @param TsStudent $tsStudent The TsStudent entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TsStudent $tsStudent)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tsstudent_delete', array('id' => $tsStudent->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

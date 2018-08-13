<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\TypeTeacher;
use Bo\AdminBundle\Form\TypeTeacherType;

/**
 * TypeTeacher controller.
 *
 */
class TypeTeacherController extends Controller
{
    /**
     * Lists all TypeTeacher entities.
     *
     */
    public function indexAction()
    {
		$this->verifySessionRights();
        $em = $this->getDoctrine()->getManager();

        $typeTeachers = $em->getRepository('BoAdminBundle:TypeTeacher')->findAll();

        return $this->render('typeteacher/index.html.twig', array(
            'typeTeachers' => $typeTeachers,
        ));
    }

    /**
     * Creates a new TypeTeacher entity.
     *
     */
    public function newAction(Request $request)
    {
        $typeTeacher = new TypeTeacher();
        $form = $this->createForm('Bo\AdminBundle\Form\TypeTeacherType', $typeTeacher);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeTeacher);
            $em->flush();

            return $this->redirectToRoute('typeteacher_show', array('id' => $typeteacher->getId()));
        }

        return $this->render('typeteacher/new.html.twig', array(
            'typeTeacher' => $typeTeacher,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TypeTeacher entity.
     *
     */
    public function showAction(TypeTeacher $typeTeacher)
    {
        $deleteForm = $this->createDeleteForm($typeTeacher);

        return $this->render('typeteacher/show.html.twig', array(
            'typeTeacher' => $typeTeacher,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TypeTeacher entity.
     *
     */
    public function editAction(Request $request, TypeTeacher $typeTeacher)
    {
        $deleteForm = $this->createDeleteForm($typeTeacher);
        $editForm = $this->createForm('Bo\AdminBundle\Form\TypeTeacherType', $typeTeacher);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeTeacher);
            $em->flush();

            return $this->redirectToRoute('typeteacher_edit', array('id' => $typeTeacher->getId()));
        }

        return $this->render('typeteacher/edit.html.twig', array(
            'typeTeacher' => $typeTeacher,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TypeTeacher entity.
     *
     */
    public function deleteAction(Request $request, TypeTeacher $typeTeacher)
    {
        $form = $this->createDeleteForm($typeTeacher);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($typeTeacher);
            $em->flush();
        }

        return $this->redirectToRoute('typeteacher_index');
    }

    /**
     * Creates a form to delete a TypeTeacher entity.
     *
     * @param TypeTeacher $typeTeacher The TypeTeacher entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TypeTeacher $typeTeacher)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('typeteacher_delete', array('id' => $typeTeacher->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

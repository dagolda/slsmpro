<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Steps;
use Bo\AdminBundle\Form\StepsType;

/**
 * Steps controller.
 *
 */
class StepsController extends Controller
{
    /**
     * Lists all Steps entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $steps = $em->getRepository('BoAdminBundle:Steps')->findAll();

        return $this->render('steps/index.html.twig', array(
            'steps' => $steps,
        ));
    }

    /**
     * Creates a new Steps entity.
     *
     */
    public function newAction(Request $request)
    {
        $step = new Steps();
        $form = $this->createForm('Bo\AdminBundle\Form\StepsType', $step);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($step);
            $em->flush();

            return $this->redirectToRoute('steps_show', array('id' => $steps->getId()));
        }

        return $this->render('steps/new.html.twig', array(
            'step' => $step,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Steps entity.
     *
     */
    public function showAction(Steps $step)
    {
        $deleteForm = $this->createDeleteForm($step);

        return $this->render('steps/show.html.twig', array(
            'step' => $step,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Steps entity.
     *
     */
    public function editAction(Request $request, Steps $step)
    {
        $deleteForm = $this->createDeleteForm($step);
        $editForm = $this->createForm('Bo\AdminBundle\Form\StepsType', $step);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($step);
            $em->flush();

            return $this->redirectToRoute('steps_edit', array('id' => $step->getId()));
        }

        return $this->render('steps/edit.html.twig', array(
            'step' => $step,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Steps entity.
     *
     */
    public function deleteAction(Request $request, Steps $step)
    {
        $form = $this->createDeleteForm($step);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($step);
            $em->flush();
        }

        return $this->redirectToRoute('steps_index');
    }

    /**
     * Creates a form to delete a Steps entity.
     *
     * @param Steps $step The Steps entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Steps $step)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('steps_delete', array('id' => $step->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

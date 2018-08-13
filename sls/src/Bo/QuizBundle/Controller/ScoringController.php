<?php

namespace Bo\QuizBundle\Controller;

use Bo\QuizBundle\Entity\Scoring;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Scoring controller.
 *
 */
class ScoringController extends Controller
{
    /**
     * Lists all scoring entities.
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $scorings = $em->getRepository('BoQuizBundle:Scoring')->findAll();
        $form = $this->createForm('Bo\QuizBundle\Form\ScoringType', new Scoring());

        return $this->render('scoring/index.html.twig', array(
            'scorings' => $scorings,
            'form' => $form->createView(),
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

    /**
     * Creates a new scoring entity.
     *
     */
    public function newAction(Request $request)
    {
        $scoring = new Scoring();
        $form = $this->createForm('Bo\QuizBundle\Form\ScoringType', $scoring);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($scoring);
            $em->flush();

            return $this->redirectToRoute('scoring_index');
        }

        return $this->render('scoring/new.html.twig', array(
            'scoring' => $scoring,
            'form' => $form->createView(),
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

    /**
     * Finds and displays a scoring entity.
     *
     */
    public function showAction(Scoring $scoring)
    {
        $deleteForm = $this->createDeleteForm($scoring);
        $editForm = $this->createForm('Bo\QuizBundle\Form\ScoringType', $scoring);

        return $this->render('scoring/show.html.twig', array(
            'scoring' => $scoring,
            'delete_form' => $deleteForm->createView(),
            'edit_form' => $editForm->createView(),
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

    /**
     * Displays a form to edit an existing scoring entity.
     *
     */
    public function editAction(Request $request, Scoring $scoring)
    {
        $deleteForm = $this->createDeleteForm($scoring);
        $editForm = $this->createForm('Bo\QuizBundle\Form\ScoringType', $scoring);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('scoring_index');
        }

        return $this->render('scoring/edit.html.twig', array(
            'scoring' => $scoring,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

    /**
     * Deletes a scoring entity.
     *
     */
    public function deleteAction(Request $request, Scoring $scoring)
    {
        $form = $this->createDeleteForm($scoring);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($scoring);
            $em->flush();
        }

        return $this->redirectToRoute('scoring_index');
    }

    /**
     * Creates a form to delete a scoring entity.
     *
     * @param Scoring $scoring The scoring entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Scoring $scoring)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('scoring_delete', array('id' => $scoring->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

<?php

namespace Bo\QuizBundle\Controller;

use Bo\QuizBundle\Entity\Resultsquiz;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Resultsquiz controller.
 *
 */
class ResultsquizController extends ToolsController
{
    /**
     * Lists all resultsquiz entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $resultsquizzes = $em->getRepository('BoQuizBundle:Resultsquiz')->findAll();

        return $this->render('resultsquiz/index.html.twig', array(
            'resultsquizzes' => $resultsquizzes,
        ));
    }

    /**
     * Creates a new resultsquiz entity.
     *
     */
    public function newAction(Request $request)
    {
        $resultsquiz = new Resultsquiz();
        $form = $this->createForm('Bo\QuizBundle\Form\ResultsquizType', $resultsquiz);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($resultsquiz);
            $em->flush();

            return $this->redirectToRoute('resultsquiz_show', array('id' => $resultsquiz->getId()));
        }

        return $this->render('resultsquiz/new.html.twig', array(
            'resultsquiz' => $resultsquiz,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a resultsquiz entity.
     */
    public function showAction(Resultsquiz $resultsquiz)
    {
	$oQuiz = $this->getRepository('BoQuizBundle:Quiz')->find($resultsquiz->getIdquiz());
	$aAnswer = $this->getAnswers($resultsquiz);

        return $this->render('resultsquiz/show.html.twig', array(
            	'resultsquiz' => $resultsquiz,
		'lresult'=> $this->getLetterScore($oQuiz->getLanguage(),$oQuiz->getNoq(),$resultsquiz->getResult()),
            	'quiz' => $oQuiz,
		'ttime'=>$resultsquiz->getTtime()/60,
		'questions'=>$oQuiz->getQuestions(),
            	'evalquiz' => $resultsquiz->getEvalquiz(),
	    	'resultsanswer'=> $aAnswer,
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }
    private function getAnswers($resultsquiz){
	$aResult = array();
	$aResultsnswers = $resultsquiz->getResultsanswer();
	foreach($aResultsnswers as $oResultsnswers){
		$aResult[$oResultsnswers->getQuestion()->getId()] = $oResultsnswers->getAnswer()->getId();
	}
	return $aResult;
    }

    /**
     * Displays a form to edit an existing resultsquiz entity.
     *
     */
    public function editAction(Request $request, Resultsquiz $resultsquiz)
    {
        $deleteForm = $this->createDeleteForm($resultsquiz);
        $editForm = $this->createForm('Bo\QuizBundle\Form\ResultsquizType', $resultsquiz);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('resultsquiz_edit', array('id' => $resultsquiz->getId()));
        }

        return $this->render('resultsquiz/edit.html.twig', array(
            'resultsquiz' => $resultsquiz,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a resultsquiz entity.
     *
     */
    public function deleteAction(Request $request, Resultsquiz $resultsquiz)
    {
        $form = $this->createDeleteForm($resultsquiz);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($resultsquiz);
            $em->flush();
        }

        return $this->redirectToRoute('resultsquiz_index');
    }

    /**
     * Creates a form to delete a resultsquiz entity.
     *
     * @param Resultsquiz $resultsquiz The resultsquiz entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Resultsquiz $resultsquiz)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('resultsquiz_delete', array('id' => $resultsquiz->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

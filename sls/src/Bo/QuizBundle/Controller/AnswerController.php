<?php

namespace Bo\QuizBundle\Controller;

use Bo\QuizBundle\Entity\Answer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
* Answer controller
*/

class AnswerController extends ToolsController
{
    /**
     * Lists all answer entities.
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $answers = $em->getRepository('BoQuizBundle:Answer')->findAll();

        return $this->render('answer/index.html.twig', array(
            'answers' => $answers,
        ));
    }

    /**
     * Creates a new answer entity.
     */
    public function newAction(Request $request,$idquestion,$idquiz)
    {
	$oRepQues = $this->getRepository("BoQuizBundle:Question");
	$oQuestion = $oRepQues->find($idquestion);
        $answer = new Answer();
        $form = $this->createForm('Bo\QuizBundle\Form\AnswerType', $answer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
		$aAnswer = explode('#',$answer->getResponse());
		if(count($aAnswer)>1){
			$res = $this->createAnswers($aAnswer,$oQuestion,$idquiz);
		}else{
			$answer->setIdquiz($idquiz);
			$answer->setQuestion($oQuestion);
			$res = $this->updateEntity($answer);
		}
		if($res>0){
            		return $this->redirectToRoute('quiz_show', array('id' => $idquiz));
		}
        }

        return $this->render('answer/new.html.twig', array(
            'answer' => $answer,
            'form' => $form->createView(),
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

    /**
    * Finds and displays a answer entity.
    */
    public function showAction(Answer $answer)
    {
        $deleteForm = $this->createDeleteForm($answer);

        return $this->render('answer/show.html.twig', array(
            'answer' => $answer,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing answer entity.
     */
    public function editAction(Request $request, Answer $answer)
    {
        $deleteForm = $this->createDeleteForm($answer);
        $editForm = $this->createForm('Bo\QuizBundle\Form\AnswerType', $answer);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('quiz_show', array('id' => $answer->getIdquiz()));
        }

        return $this->render('answer/edit.html.twig', array(
            'answer' => $answer,
            'answer_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

    /**
     * Deletes a answer entity.
     */
    public function deleteAction(Request $request, Answer $answer)
    {
        $form = $this->createDeleteForm($answer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($answer);
            $em->flush();
        }

        return $this->redirectToRoute('answer_index');
    }

    /**
     * Creates a form to delete a answer entity.
     *
     * @param Answer $answer The answer entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Answer $answer)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('answer_delete', array('id' => $answer->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

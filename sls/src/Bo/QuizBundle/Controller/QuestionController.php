<?php

namespace Bo\QuizBundle\Controller;

use Bo\QuizBundle\Entity\Quiz;
use Bo\QuizBundle\Entity\Question;
use Bo\QuizBundle\Entity\Answer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
* Question controller.
*/
class QuestionController extends ToolsController
{
    /**
    * Lists all question entities.
    */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $questions = $em->getRepository('BoQuizBundle:Question')->findAll();

        return $this->render('question/index.html.twig', array(
            'questions' => $questions,
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

    /**
    * Creates a new question entity.
    */

    public function newAction(Request $request,$idquiz)
    {
	$oRepQuiz = $this->getRepository("BoQuizBundle:Quiz");
	$oQuiz = $oRepQuiz->find($idquiz);
        $question = new Question();
        $form = $this->createForm('Bo\QuizBundle\Form\QuestionType', $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
		$res = $this->updateEntity($question);
		if($res>0){
			$oQuiz->addQuestion($question);
			$this->updateEntity($oQuiz);
			return $this->redirectToRoute('question_show', array('id' => $question->getId(),'idquiz' => $idquiz));
		}
        }

        return $this->render('question/new.html.twig', array(
            'question' => $question,
            'form' => $form->createView(),
		'idquiz'=>$idquiz,
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }
    /**
    * Creates a new question entity.
    */
    public function duplicateAction(Request $request,Question $question,$idquiz)
    {
        $form = $this->createForm('Bo\QuizBundle\Form\QuestionType', $question);

        return $this->render('question/new.html.twig', array(
            'question' => $question,
            'form' => $form->createView(),
		'url'=>$request->headers->get('referer'),
		'idquiz'=>$idquiz,
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

    /**
    * Finds and displays a question entity.
    */
    public function showAction(Question $question,$idquiz)
    {
	$oRepQuiz = $this->getRepository("BoQuizBundle:Quiz");
	$oQuiz = $oRepQuiz->find($idquiz);
        $deleteForm = $this->createDeleteForm($question);
        $editForm = $this->createForm('Bo\QuizBundle\Form\QuestionType', $question);
        $answerForm = $this->createForm('Bo\QuizBundle\Form\AnswerType', new Answer());
        $form = $this->createForm('Bo\QuizBundle\Form\QuestionType', new Question());

        return $this->render('question/show.html.twig', array(
            'question' => $question,
            'edit_question' => $editForm->createView(),
	    'quiz' => $oQuiz,
            'delete_form' => $deleteForm->createView(),
            'answer_form' => $answerForm->createView(),
		'edit_answer'=>$this->getAnswersForm($question),
		'daqb'=>$this->dispAddButton($oQuiz),//display add question button, if 1 yes else 0 no
		'form'=> $form->createView(),
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

    /**
    * Finds and displays a previous question entity.
    */
    public function previousAction(Question $question,$idquiz)
    {
	$idquestion = $this->getPreviousQuestionId($question->getId(),$idquiz);
	return $this->redirectToRoute('question_show', array('id' => $idquestion,'idquiz' => $idquiz));
    }
    /**
    * Finds and displays a previous question entity.
    */
    public function nextAction(Question $question,$idquiz)
    {
	$idquestion = $this->getNextQuestionId($question->getId(),$idquiz);
	return $this->redirectToRoute('question_show', array('id' => $idquestion,'idquiz' => $idquiz));
    }

    /**
    * Displays a form to edit an existing question entity.
    */
    public function editAction(Request $request, Question $question,$idquiz)
    {
        $deleteForm = $this->createDeleteForm($question);
        $editForm = $this->createForm('Bo\QuizBundle\Form\QuestionType', $question);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('question_show', array('id' => $question->getId(),'idquiz' => $idquiz));
        }

        return $this->render('question/edit.html.twig', array(
            'question' => $question,
            'edit_question' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
		'url'=>$request->headers->get('referer'),
		'idquiz'=>$idquiz,
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

    /**
     * Creates a new answer entity.
     */
    public function addAnswerAction(Request $request,$idquestion,$idquiz)
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
            		return $this->redirectToRoute('question_show', array('idquiz' => $idquiz,'id' => $idquestion));
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
     * Displays a form to edit an existing answer entity.
     */
    public function editanswerAction(Request $request, Answer $answer)
    {
        //$deleteForm = $this->createDeleteForm($answer);
        $editForm = $this->createForm('Bo\QuizBundle\Form\AnswerType', $answer);
        $editForm->handleRequest($request);

        if($editForm->isSubmitted() && $editForm->isValid()) {
	   $question = $answer->getQuestion();
	   $idquiz = $answer->getIdquiz();
	   $response = $answer->getResponse();
	   if(trim($response)=="" or trim($response)==null){
		$this->getDoctrine()->getManager()->remove($answer);
	   }
	   $this->getDoctrine()->getManager()->flush();
           return $this->redirectToRoute('question_show', array('idquiz'=>$idquiz,'id' => $question->getId()));
        }

        return $this->render('answer/edit.html.twig', array(
            'answer' => $answer,
            'answer_form' => $editForm->createView(),
            //'delete_form' => $deleteForm->createView(),
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

    /**
    * Deletes a question entity.
    */
    public function deleteAction(Request $request, Question $question)
    {
        $form = $this->createDeleteForm($question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($question);
            $em->flush();
        }

        return $this->redirectToRoute('question_index');
    }

    /**
     * Creates a form to delete a question entity.
     *
     * @param Question $question The question entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Question $question)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('question_delete', array('id' => $question->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    private function getAnswersForm(Question $question){
	$aResult = array();
	$aAnswer = $question->getAnswer();
	foreach($aAnswer as $oAnswer){
        	$editForm = $this->createForm('Bo\QuizBundle\Form\AnswerType', $oAnswer);
		$aResult[$oAnswer->getId()]=$editForm->createView();
	}
	return $aResult;
   }
}

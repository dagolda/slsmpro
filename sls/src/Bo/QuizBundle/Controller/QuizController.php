<?php

namespace Bo\QuizBundle\Controller;

use Bo\QuizBundle\Entity\Quiz;
use Bo\QuizBundle\Entity\Question;
use Bo\QuizBundle\Entity\Answer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bo\QuizBundle\Entity\Category;
use Bo\QuizBundle\Entity\Typequiz;

/**
* Quiz controller.
*/
class QuizController extends ToolsController
{
    /**
     * Lists all quiz entities.
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $quizzes = $em->getRepository('BoQuizBundle:Quiz')->findAll();
        $form = $this->createForm('Bo\QuizBundle\Form\QuizType', new Quiz());

        return $this->render('quiz/index.html.twig', array(
            'quizzes' => $quizzes,
	    'form' => $form->createView(),
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

    /**
     * Creates a new quiz entity.
     */
    public function newAction(Request $request)
    {
        $quiz = new Quiz();
        $form = $this->createForm('Bo\QuizBundle\Form\QuizType', $quiz);
        $form->handleRequest($request);
        $cat_form = $this->createForm('Bo\QuizBundle\Form\CategoryType', new Category());
        $type_form = $this->createForm('Bo\QuizBundle\Form\TypequizType', new Typequiz());

        if($form->isSubmitted() && $form->isValid()){
		$quiz->setCreateby($this->getConnectedUser());
		$this->updateEntity($quiz);
            	return $this->redirectToRoute('quiz_show', array('id' => $quiz->getId()));
        }

        return $this->render('quiz/new.html.twig', array(
            'quiz' => $quiz,
            'form' => $form->createView(),
		'cat_form' => $cat_form->createView(),
		'type_form' => $type_form->createView(),
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

    /**
     * Finds and displays a quiz entity.
     */
    public function showAction(Quiz $quiz)
    {
        $em = $this->getDoctrine()->getManager();
        $deleteForm = $this->createDeleteForm($quiz);
	$question = new Question();
	$form = $this->createForm('Bo\QuizBundle\Form\QuestionType', $question);
        $editForm = $this->createForm('Bo\QuizBundle\Form\QuizType', $quiz);
        $answerForm = $this->createForm('Bo\QuizBundle\Form\AnswerType', new Answer());

        return $this->render('quiz/show.html.twig', array(
            'quiz' => $quiz,
            'form' => $form->createView(),
            'edit_form' => $editForm->createView(),
	    'questions'=>$quiz->getQuestions(),
            'delete_form' => $deleteForm->createView(),
            'answer_form' => $answerForm->createView(),
		'daqb'=>$this->dispAddButton($quiz),//display add question button, if 1 yes else 0 no
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

    /**
     * Finds and displays a quiz result entity.
     */
    public function showresultsAction(Quiz $quiz,$evalquiz)
    {


        return $this->render('quiz/resultsquiz.html.twig', array(
            	'quiz' => $quiz,
	    	'questions'=>$quiz->getQuestions(),
		'evalquiz'=>$evalquiz,
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

    /**
     * Displays a form to edit an existing quiz entity.
     *
     */
    public function editAction(Request $request, Quiz $quiz)
    {
        $deleteForm = $this->createDeleteForm($quiz);
        $editForm = $this->createForm('Bo\QuizBundle\Form\QuizType', $quiz);
        $editForm->handleRequest($request);
        $cat_form = $this->createForm('Bo\QuizBundle\Form\CategoryType', new Category());
        $type_form = $this->createForm('Bo\QuizBundle\Form\TypequizType', new Typequiz());

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('quiz_index');
        }

        return $this->render('quiz/edit.html.twig', array(
            	'quiz' => $quiz,
            	'edit_form' => $editForm->createView(),
            	'delete_form' => $deleteForm->createView(),
		'cat_form' => $cat_form->createView(),
		'type_form' => $type_form->createView(),
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

    /**
     * Displays a form to edit an existing quiz entity.
     *
     */
    public function updateAction(Request $request, Quiz $quiz)
    {
        $deleteForm = $this->createDeleteForm($quiz);
        $editForm = $this->createForm('Bo\QuizBundle\Form\QuizType', $quiz);
        $editForm->handleRequest($request);
        $cat_form = $this->createForm('Bo\QuizBundle\Form\CategoryType', new Category());
        $type_form = $this->createForm('Bo\QuizBundle\Form\TypequizType', new Typequiz());

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('quiz_show', array('id' => $quiz->getId()));
        }

        return $this->render('quiz/edit.html.twig', array(
            'quiz' => $quiz,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
		'cat_form' => $cat_form->createView(),
		'type_form' => $type_form->createView(),
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

    /**
     * Deletes a quiz entity.
     *
     */
    public function deleteAction(Request $request, Quiz $quiz)
    {
        $form = $this->createDeleteForm($quiz);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($quiz);
            $em->flush();
        }

        return $this->redirectToRoute('quiz_index');
    }

    /**
    * Creates a new question entity.
    */
    public function addquestionAction(Request $request,$idquiz)
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
			return $this->redirectToRoute('quiz_show', array('id' => $oQuiz->getId()));
		}
        }

        return $this->render('question/new.html.twig', array(
            'question' => $question,
            'form' => $form->createView(),
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

    /**
     * Creates a form to delete a quiz entity.
     *
     * @param Quiz $quiz The quiz entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Quiz $quiz)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('quiz_delete', array('id' => $quiz->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	private function createAnserForm(Quiz $quiz){
		$aResult = array();
		$aQuestion = $quiz->getQuestions();
		foreach($aQuestion as $oQuestion){
			$answer = new Answer();
			$form = $this->createForm('Bo\QuizBundle\Form\AnswerType', $answer);

		}
	}
	private function getEditQuestionForm($aQuestion){
		$aEditQuestionForm = array();
		foreach($aQuestion as $oQuestion){
			$edit_form = $this->createForm('Bo\QuizBundle\Form\QuestionType',$oQuestion);
			$aEditQuestionForm[$oQuestion->getId()] = $edit_form->createView();
		}
		return $aEditQuestionForm;
	}
}

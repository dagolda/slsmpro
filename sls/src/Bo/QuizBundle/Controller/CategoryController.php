<?php

namespace Bo\QuizBundle\Controller;

use Bo\QuizBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bo\QuizBundle\Entity\Quiz;
use Bo\QuizBundle\Entity\Question;
use Bo\QuizBundle\Entity\Answer;

/**
 * Category controller.
 *
 */
class CategoryController extends ToolsController
{
    /**
     * Lists all category entities.
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('BoQuizBundle:Category')->findAll();
        $form = $this->createForm('Bo\QuizBundle\Form\CategoryType', new Category());

        return $this->render('category/index.html.twig', array(
            'categories' => $categories,
            'cat_form' => $form->createView(),
		'url'=>$request->headers->get('referer'),
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

    /**
     * Creates a new category entity.
     */
    public function newAction(Request $request,$idquiz)
    {
        $category = new Category();
        $form = $this->createForm('Bo\QuizBundle\Form\CategoryType', $category);
        $form->handleRequest($request);
	if($this->get('session')->get('url')==null){
		$this->get('session')->set('url',$request->headers->get('referer'));
	}

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            return $this->redirect($url);
        }

        return $this->render('category/new.html.twig', array(
            'category' => $category,
	    'idquiz'=> $idquiz,
            'form' => $form->createView(),
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

    /**
     * Creates a new category entity without quiz entity parameter.
     */
    public function createAction(Request $request)
    {
        $category = new Category();
        $form = $this->createForm('Bo\QuizBundle\Form\CategoryType', $category);
        $form->handleRequest($request);
	if($this->get('session')->get('url')==null){
		$this->get('session')->set('url',$request->headers->get('referer'));
	}

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            return $this->redirectToRoute('category_index');
        }

        return $this->render('category/new.html.twig', array(
            'category' => $category,
            'form' => $form->createView(),
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }
    /**
     * Add quiz entity to a category.
     */
    public function addquizAction(Request $request,Category $category)
    {
	$idquiz = $request->request->get('idquiz');

	if($idquiz!=null){
		$oQuiz = $this->getRepository('BoQuizBundle:Quiz')->find($idquiz);

		if($oQuiz){
			$category->addQuiz($oQuiz);
			$res = $this->updateEntity($category);
		}
	}
	
	return $this->redirectToRoute('category_show', array('id' => $category->getId()));
    }

    /**
     * remove quiz entity from a category.
     */
    public function removequizAction(Request $request,Category $category,$idquiz)
    {
	$oQuiz = $this->getRepository('BoQuizBundle:Quiz')->find($idquiz);
	if($oQuiz){
		$category->removeQuiz($oQuiz);
		$this->updateEntity($category);
	}

	return $this->redirectToRoute('category_show', array('id' => $category->getId()));
    }

    /**
     * Finds and displays a category entity.
     *
     */
    public function showAction(Category $category)
    {
//count($category->getQuiz());
//exit(0);
        $deleteForm = $this->createDeleteForm($category);
        $editForm = $this->createForm('Bo\QuizBundle\Form\CategoryType', $category);
	$aFormquiz = $this->getQuizzes($category); 

        return $this->render('category/show.html.twig', array(
            'category' => $category,
		'quizzes'=> $category->getQuiz(),
		'formquiz'=>$aFormquiz,
            'delete_form' => $deleteForm->createView(),
	    'rq_forms'=>$this->createRmQuizForm($category, $category->getQuiz()),
            'cat_form' => $editForm->createView(),
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

	private function getQuizzes($category){
		$aResult=array();
		$aQuizzes = $this->getRepository('BoQuizBundle:Quiz')->findAll();
		foreach($aQuizzes as $oQuiz){
			if($this->existEntity($oQuiz,$category->getQuiz())==false) $aResult[]=$oQuiz;
		}
		return $aResult;
	}

    /**
     * Finds and displays a quiz entity.
     */
    public function showquizAction($idquiz)
    {
	$oQuiz = $this->getRepository('BoQuizBundle:Quiz')->find($idquiz);
        $em = $this->getDoctrine()->getManager();
	$form = $this->createForm('Bo\QuizBundle\Form\QuestionType', new Question());
        $editForm = $this->createForm('Bo\QuizBundle\Form\QuizType', $oQuiz);
        $answerForm = $this->createForm('Bo\QuizBundle\Form\AnswerType', new Answer());

        return $this->render('category/showquiz.html.twig', array(
            'quiz' => $oQuiz,
            'form' => $form->createView(),
            'edit_form' => $editForm->createView(),
	    'questions'=>$oQuiz->getQuestions(),
            'answer_form' => $answerForm->createView(),
		'daqb'=>$this->dispAddButton($oQuiz),//display add question button, if 1 yes else 0 no
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

    /**
     * Displays a form to edit an existing category entity.
     *
     */
    public function editAction(Request $request, Category $category)
    {
        $deleteForm = $this->createDeleteForm($category);
        $editForm = $this->createForm('Bo\QuizBundle\Form\CategoryType', $category);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('category_index');
        }

        return $this->render('category/edit.html.twig', array(
            	'category' => $category,
            	'cat_form' => $editForm->createView(),
            	'delete_form' => $deleteForm->createView(),
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

    /**
     * Deletes a category entity.
     */
    public function deleteAction(Request $request, Category $category)
    {
        $form = $this->createDeleteForm($category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($category);
            $em->flush();
        }

        return $this->redirectToRoute('category_index');
    }

    /**
     * Creates a form to delete a category entity.
     * @param Category $category The category entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Category $category)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('category_delete', array('id' => $category->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /**
     * Creates a form to remove a quiz entity from a category entity.
     * @return \Symfony\Component\Form\Form The form
     */
    private function createRmQuizForm(Category $category, $aQuizzes)
    {
	$aRQForm = array();

	foreach($aQuizzes as $oquiz){
		 $rqform = $this->createFormBuilder()
		->setAction($this->generateUrl('category_remove_quiz', array('id' => $category->getId(),'idquiz' => $oquiz->getId())))
                ->setMethod('DELETE')
		->getForm()
		;
		$aRQForm[$oquiz->getId()] = $rqform->createView();
	}
	return $aRQForm;
    }
}

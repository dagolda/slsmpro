<?php

namespace Bo\QuizBundle\Controller;

use Bo\QuizBundle\Entity\User;
use Bo\QuizBundle\Entity\Evalquiz;
use Symfony\Component\HttpFoundation\Request;

/**
 * User controller.
 *
 */
class UserController extends ToolsController
{
    /**
     * Lists all user entities.
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('BoQuizBundle:User')->findAll();
        $form = $this->createForm('Bo\QuizBundle\Form\UserType', new User());
        $eval_form = $this->createForm('Bo\QuizBundle\Form\EvalquizType', new Evalquiz());

        return $this->render('userqz/index.html.twig', array(
            'users' => $users,
            'form' => $form->createView(),
            'eval_form' => $eval_form->createView(),
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

    /**
     * Creates a new user entity.
     */
    public function newAction(Request $request)
    {
        $user = new User();
	$eval = new Evalquiz();
        $form = $this->createForm('Bo\QuizBundle\Form\UserType', $user);
        $eval_form = $this->createForm('Bo\QuizBundle\Form\EvalquizType', $eval);
        $form->handleRequest($request);
	$eval_form->handleRequest($request);
	$pwd = $this->getPassword();

        if($form->isSubmitted() && $form->isValid()){
	    $user->setPassword($pwd);
	    $user->setCreateby($this->getConnectedUser());
	    $res = $this->updateEntity($user);
	    if($res>0 and $user->getEvaluation()==null){
		$eval->setUser($user);
		$res = $this->updateEntity($eval);
		if($res>0) return $this->redirectToRoute('userqz_index');
	    }
        }

        return $this->render('userqz/new.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

    /**
     * Finds and displays a user entity.
     */
    public function showAction(User $user)
    {
        $deleteForm = $this->createDeleteForm($user);

        return $this->render('userqz/show.html.twig', array(
            'user' => $user,
            'delete_form' => $deleteForm->createView(),
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

    /**
     * Displays a form to edit an existing user entity.
     *
     */
    public function editAction(Request $request, User $user)
    {
        $deleteForm = $this->createDeleteForm($user);
        $editForm = $this->createForm('Bo\QuizBundle\Form\UserType', $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('userqz_edit', array('id' => $user->getId()));
        }

        return $this->render('userqz/edit.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

    /**
     * Deletes a user entity.
     *
     */
    public function deleteAction(Request $request, User $user)
    {
        $form = $this->createDeleteForm($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();
        }

        return $this->redirectToRoute('userqz_index');
    }

    /**
     * Creates a form to delete a user entity.
     *
     * @param User $user The user entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(User $user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('userqz_delete', array('id' => $user->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

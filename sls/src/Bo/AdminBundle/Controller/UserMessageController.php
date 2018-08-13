<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\UserMessage;
use Bo\AdminBundle\Form\UserMessageType;

/**
 * UserMessage controller.
 *
 */
class UserMessageController extends Controller
{
    /**
     * Lists all UserMessage entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $userMessages = $em->getRepository('BoAdminBundle:UserMessage')->findAll();
		$userMessage = new UserMessage();
        $form = $this->createForm('Bo\AdminBundle\Form\UserMessageType', $userMessage);

        return $this->render('usermessage/index.html.twig', array(
            'userMessages' => $userMessages,
			'form' => $form->createView(),
			'pm'=>"admin",
			'sm'=>"message",
        ));
    }

    /**
     * Creates a new UserMessage entity.
     *
     */
    public function newAction(Request $request)
    {
        $userMessage = new UserMessage();
        $form = $this->createForm('Bo\AdminBundle\Form\UserMessageType', $userMessage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($userMessage);
            $em->flush();

            return $this->redirectToRoute('usermessage_show', array('id' => $usermessage->getId()));
        }

        return $this->render('usermessage/new.html.twig', array(
            'userMessage' => $userMessage,
            'form' => $form->createView(),
			'pm'=>"admin",
			'sm'=>"message",
        ));
    }

    /**
     * Finds and displays a UserMessage entity.
     *
     */
    public function showAction(UserMessage $userMessage)
    {
        $deleteForm = $this->createDeleteForm($userMessage);

        return $this->render('usermessage/show.html.twig', array(
            'userMessage' => $userMessage,
            'delete_form' => $deleteForm->createView(),
			'pm'=>"admin",
			'sm'=>"message",
        ));
    }

    /**
     * Displays a form to edit an existing UserMessage entity.
     *
     */
    public function editAction(Request $request, UserMessage $userMessage)
    {
        $deleteForm = $this->createDeleteForm($userMessage);
        $editForm = $this->createForm('Bo\AdminBundle\Form\UserMessageType', $userMessage);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($userMessage);
            $em->flush();

            return $this->redirectToRoute('usermessage_edit', array('id' => $userMessage->getId()));
        }

        return $this->render('usermessage/edit.html.twig', array(
            'userMessage' => $userMessage,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"admin",
			'sm'=>"message",
        ));
    }

    /**
     * Deletes a UserMessage entity.
     *
     */
    public function deleteAction(Request $request, UserMessage $userMessage)
    {
        $form = $this->createDeleteForm($userMessage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($userMessage);
            $em->flush();
        }

        return $this->redirectToRoute('usermessage_index');
    }

    /**
     * Creates a form to delete a UserMessage entity.
     *
     * @param UserMessage $userMessage The UserMessage entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(UserMessage $userMessage)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('usermessage_delete', array('id' => $userMessage->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

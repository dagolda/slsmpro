<?php

namespace Bo\QuizBundle\Controller;

use Bo\QuizBundle\Entity\ContactUser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Contactuser controller.
 *
 */
class ContactUserController extends Controller
{
    /**
     * Lists all contactUser entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $contactUsers = $em->getRepository('BoQuizBundle:ContactUser')->findAll();

        return $this->render('contactuser/index.html.twig', array(
            'contactUsers' => $contactUsers,
        ));
    }

    /**
     * Creates a new contactUser entity.
     *
     */
    public function newAction(Request $request)
    {
        $contactUser = new Contactuser();
        $form = $this->createForm('Bo\QuizBundle\Form\ContactUserType', $contactUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contactUser);
            $em->flush();

            return $this->redirectToRoute('contactuser_show', array('id' => $contactUser->getId()));
        }

        return $this->render('contactuser/new.html.twig', array(
            'contactUser' => $contactUser,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a contactUser entity.
     *
     */
    public function showAction(ContactUser $contactUser)
    {
        $deleteForm = $this->createDeleteForm($contactUser);

        return $this->render('contactuser/show.html.twig', array(
            'contactUser' => $contactUser,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing contactUser entity.
     *
     */
    public function editAction(Request $request, ContactUser $contactUser)
    {
        $deleteForm = $this->createDeleteForm($contactUser);
        $editForm = $this->createForm('Bo\QuizBundle\Form\ContactUserType', $contactUser);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('contactuser_edit', array('id' => $contactUser->getId()));
        }

        return $this->render('contactuser/edit.html.twig', array(
            'contactUser' => $contactUser,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a contactUser entity.
     *
     */
    public function deleteAction(Request $request, ContactUser $contactUser)
    {
        $form = $this->createDeleteForm($contactUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($contactUser);
            $em->flush();
        }

        return $this->redirectToRoute('contactuser_index');
    }

    /**
     * Creates a form to delete a contactUser entity.
     *
     * @param ContactUser $contactUser The contactUser entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ContactUser $contactUser)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contactuser_delete', array('id' => $contactUser->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

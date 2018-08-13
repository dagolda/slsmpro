<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Language;
use Bo\AdminBundle\Form\LanguageType;

/**
* Language controller.
*/
class LanguageController extends Controller
{
    /**
     * Lists all Language entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $languages = $em->getRepository('BoAdminBundle:Language')->findAll();

        return $this->render('language/index.html.twig', array(
            'languages' => $languages,
			'pm'=>"setting",
			'sm'=>"language",
        ));
    }

    /**
     * Creates a new Language entity.
     *
     */
    public function newAction(Request $request)
    {
        $language = new Language();
        $form = $this->createForm('Bo\AdminBundle\Form\LanguageType', $language);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($language);
            $em->flush();

            return $this->redirectToRoute('language_index');
        }

        return $this->render('language/new.html.twig', array(
            'language' => $language,
            'form' => $form->createView(),
			'pm'=>"setting",
			'sm'=>"language",
        ));
    }

    /**
     * Finds and displays a Language entity.
     *
     */
    public function showAction(Language $language)
    {
        $deleteForm = $this->createDeleteForm($language);

        return $this->render('language/show.html.twig', array(
            'language' => $language,
            'delete_form' => $deleteForm->createView(),
			'pm'=>"setting",
			'sm'=>"language",
        ));
    }

    /**
     * Displays a form to edit an existing Language entity.
     *
     */
    public function editAction(Request $request, Language $language)
    {
        $deleteForm = $this->createDeleteForm($language);
        $editForm = $this->createForm('Bo\AdminBundle\Form\LanguageType', $language);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($language);
            $em->flush();

            return $this->redirectToRoute('language_index');
        }

        return $this->render('language/edit.html.twig', array(
            'language' => $language,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"setting",
			'sm'=>"language",
        ));
    }

    /**
     * Deletes a Language entity.
     *
     */
    public function deleteAction(Request $request, Language $language)
    {
        $form = $this->createDeleteForm($language);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($language);
            $em->flush();
        }

        return $this->redirectToRoute('language_index');
    }

    /**
     * Creates a form to delete a Language entity.
     *
     * @param Language $language The Language entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Language $language)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('language_delete', array('id' => $language->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

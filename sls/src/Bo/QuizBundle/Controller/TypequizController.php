<?php

namespace Bo\QuizBundle\Controller;

use Bo\QuizBundle\Entity\Typequiz;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Type controller.
 *
 */
class TypequizController extends ToolsController
{
    /**
     * Lists all type entities.
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $types = $em->getRepository('BoQuizBundle:Type')->findAll();

        return $this->render('type/index.html.twig', array(
            'types' => $types,
        ));
    }

    /**
     * Creates a new type entity.
     */
    public function newAction(Request $request,$idquiz)
    {
        $type = new Typequiz();
        $form = $this->createForm('Bo\QuizBundle\Form\TypequizType', $type);
        $form->handleRequest($request);
	if($this->get('session')->get('url')==null){
		$this->get('session')->set('url',$request->headers->get('referer'));
	}

        if ($form->isSubmitted() && $form->isValid()) {
		$this->updateEntity($type);
		$url = $this->get('session')->get('url');
            	return $this->redirect($url);
        }

        return $this->render('type/new.html.twig', array(
            'type' => $type,
	    'idquiz'=> $idquiz,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a type entity.
     *
     */
    public function showAction(Type $type)
    {
        $deleteForm = $this->createDeleteForm($type);

        return $this->render('type/show.html.twig', array(
            'type' => $type,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing type entity.
     *
     */
    public function editAction(Request $request, Typequiz $type)
    {
        $deleteForm = $this->createDeleteForm($type);
        $editForm = $this->createForm('Bo\QuizBundle\Form\TypeType', $type);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('type_edit', array('id' => $type->getId()));
        }

        return $this->render('type/edit.html.twig', array(
            'type' => $type,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a type entity.
     *
     */
    public function deleteAction(Request $request, Typequiz $type)
    {
        $form = $this->createDeleteForm($type);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($type);
            $em->flush();
        }

        return $this->redirectToRoute('type_index');
    }

    /**
     * Creates a form to delete a type entity.
     *
     * @param Type $type The type entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Type $type)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('type_delete', array('id' => $type->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

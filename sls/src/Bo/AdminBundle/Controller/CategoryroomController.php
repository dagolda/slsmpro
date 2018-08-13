<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Categoryroom;
use Bo\AdminBundle\Form\CategoryroomType;

/**
 * Categoryroom controller.
 *
 */
class CategoryroomController extends Controller
{
    /**
     * Lists all Categoryroom entities.
     *
     */
    public function indexAction()
    {
	$this->verifySessionRights();
        $em = $this->getDoctrine()->getManager();

        $categoryrooms = $em->getRepository('BoAdminBundle:Categoryroom')->findAll();
        $form = $this->createForm('Bo\AdminBundle\Form\CategoryroomType', new Categoryroom());

        return $this->render('categoryroom/index.html.twig', array(
            'categoryrooms' => $categoryrooms,
			'form' => $form->createView(),
			'pm'=>"local",
			'sm'=>"category",
        ));
    }

    /**
     * Creates a new Categoryroom entity.
     *
     */
    public function newAction(Request $request)
    {
        $categoryroom = new Categoryroom();
        $form = $this->createForm('Bo\AdminBundle\Form\CategoryroomType', $categoryroom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categoryroom);
            $em->flush();
            return $this->redirect($this->get('session')->get('url'));
        }
		$this->get('session')->set('url',$request->headers->get('referer'));
        return $this->render('categoryroom/new.html.twig', array(
            'categoryroom' => $categoryroom,
            'form' => $form->createView(),
			'pm'=>"local",
			'sm'=>"category",
			'url'=>$request->headers->get('referer'),
        ));
    }

    /**
     * Finds and displays a Categoryroom entity.
     *
     */
    public function showAction(Categoryroom $categoryroom)
    {
        $deleteForm = $this->createDeleteForm($categoryroom);

        return $this->render('categoryroom/show.html.twig', array(
            'categoryroom' => $categoryroom,
            'delete_form' => $deleteForm->createView(),
			'pm'=>"local",
			'sm'=>"category",
        ));
    }

    /**
     * Displays a form to edit an existing Categoryroom entity.
     *
     */
    public function editAction(Request $request, Categoryroom $categoryroom)
    {
        $deleteForm = $this->createDeleteForm($categoryroom);
        $editForm = $this->createForm('Bo\AdminBundle\Form\CategoryroomType', $categoryroom);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categoryroom);
            $em->flush();
            return $this->redirect($this->get('session')->get('url'));
        }
		$this->get('session')->set('url',$request->headers->get('referer'));
        return $this->render('categoryroom/edit.html.twig', array(
            'categoryroom' => $categoryroom,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"local",
			'sm'=>"category",
        ));
    }

    /**
     * Deletes a Categoryroom entity.
     *
     */
    public function deleteAction(Request $request, Categoryroom $categoryroom)
    {
        $form = $this->createDeleteForm($categoryroom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($categoryroom);
            $em->flush();
        }

        return $this->redirectToRoute('categoryroom_index');
    }

    /**
     * Creates a form to delete a Categoryroom entity.
     *
     * @param Categoryroom $categoryroom The Categoryroom entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Categoryroom $categoryroom)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('categoryroom_delete', array('id' => $categoryroom->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

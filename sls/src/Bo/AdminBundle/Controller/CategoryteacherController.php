<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Categoryteacher;
use Bo\AdminBundle\Form\CategoryteacherType;

/**
 * Categoryteacher controller.
 *
 */
class CategoryteacherController extends CommonController
{
    /**
     * Lists all Categoryteacher entities.
     *
     */
    public function indexAction()
    {
	$this->verifySessionRights();
        $em = $this->getDoctrine()->getManager();

        $categoryteachers = $em->getRepository('BoAdminBundle:Categoryteacher')->findAll();

        return $this->render('categoryteacher/index.html.twig', array(
            'categoryteachers' => $categoryteachers,
			'pm'=>"setting",
			'sm'=>"category",
        ));
    }

    /**
     * Creates a new Categoryteacher entity.
     *
     */
    public function newAction(Request $request)
    {
        $categoryteacher = new Categoryteacher();
        $form = $this->createForm('Bo\AdminBundle\Form\CategoryteacherType', $categoryteacher);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categoryteacher);
            $em->flush();

            return $this->redirect($this->get('session')->get('url'));
        }
		$this->get('session')->set('url',$request->headers->get('referer'));
        return $this->render('categoryteacher/new.html.twig', array(
            'categoryteacher' => $categoryteacher,
            'form' => $form->createView(),
			'pm'=>"setting",
			'sm'=>"category",
			'url'=>$request->headers->get('referer'),
        ));
    }

    /**
     * Finds and displays a Categoryteacher entity.
     *
     */
    public function showAction(Categoryteacher $categoryteacher)
    {
        $deleteForm = $this->createDeleteForm($categoryteacher);

        return $this->render('categoryteacher/show.html.twig', array(
            'categoryteacher' => $categoryteacher,
            'delete_form' => $deleteForm->createView(),
			'pm'=>"setting",
			'sm'=>"category",
        ));
    }

    /**
     * Displays a form to edit an existing Categoryteacher entity.
     *
     */
    public function editAction(Request $request, Categoryteacher $categoryteacher)
    {
        $deleteForm = $this->createDeleteForm($categoryteacher);
        $editForm = $this->createForm('Bo\AdminBundle\Form\CategoryteacherType', $categoryteacher);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categoryteacher);
            $em->flush();

            return $this->redirect($this->get('session')->get('url'));
        }
		$this->get('session')->set('url',$request->headers->get('referer'));
        return $this->render('categoryteacher/edit.html.twig', array(
            'categoryteacher' => $categoryteacher,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"setting",
			'sm'=>"category",
        ));
    }

    /**
     * Deletes a Categoryteacher entity.
     *
     */
    public function deleteAction(Request $request, Categoryteacher $categoryteacher)
    {
        $form = $this->createDeleteForm($categoryteacher);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($categoryteacher);
            $em->flush();
        }

        return $this->redirectToRoute('categoryteacher_index');
    }

    /**
     * Creates a form to delete a Categoryteacher entity.
     *
     * @param Categoryteacher $categoryteacher The Categoryteacher entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Categoryteacher $categoryteacher)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('categoryteacher_delete', array('id' => $categoryteacher->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

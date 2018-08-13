<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Workfields;
use Bo\AdminBundle\Form\WorkfieldsType;

/**
 * Workfields controller.
 *
 */
class WorkfieldsController extends CommonController
{
    /**
     * Lists all Workfields entities.
     *
     */
    public function indexAction()
    {
		$this->verifySessionRights();
        $em = $this->getDoctrine()->getManager();

        $workfields = $em->getRepository('BoAdminBundle:Workfields')->findAll();
        $form = $this->createForm('Bo\AdminBundle\Form\WorkfieldsType', new Workfields());

		$this->get('session')->set('url',$this->generateUrl('workfields_index'));
        return $this->render('workfields/index.html.twig', array(
            'workfields' => $workfields,
            'form' => $form->createView(),
			'pm'=>"setting",
			'sm'=>"workfields",
			'total'=>count($workfields),
        ));
    }

    /**
     * Creates a new Workfields entity.
     *
     */
    public function newAction(Request $request)
    {
        $workfield = new Workfields();
        $form = $this->createForm('Bo\AdminBundle\Form\WorkfieldsType', $workfield);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($workfield);
            $em->flush();
            return $this->redirect($this->get('session')->get('url'));
        }
		$this->get('session')->set('url',$request->headers->get('referer'));
        return $this->render('workfields/new.html.twig', array(
            'workfield' => $workfield,
            'form' => $form->createView(),
			'pm'=>"setting",
			'sm'=>"workfields",
			'url'=>$request->headers->get('referer'),
        ));
    }

    /**
     * Finds and displays a Workfields entity.
     *
     */
    public function showAction(Workfields $workfield)
    {
        $deleteForm = $this->createDeleteForm($workfield);

        return $this->render('workfields/show.html.twig', array(
            'workfield' => $workfield,
            'delete_form' => $deleteForm->createView(),
			'pm'=>"setting",
			'sm'=>"workfields",
        ));
    }

    /**
     * Displays a form to edit an existing Workfields entity.
     *
     */
    public function editAction(Request $request, Workfields $workfield)
    {
        $deleteForm = $this->createDeleteForm($workfield);
        $editForm = $this->createForm('Bo\AdminBundle\Form\WorkfieldsType', $workfield);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($workfield);
            $em->flush();

            return $this->redirect($this->get('session')->get('url'));
        }
		$this->get('session')->set('url',$request->headers->get('referer'));
        return $this->render('workfields/edit.html.twig', array(
            'workfield' => $workfield,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"setting",
			'sm'=>"workfields",
        ));
    }

    /**
     * Deletes a Workfields entity.
     *
     */
    public function deleteAction(Request $request, Workfields $workfield)
    {
        $form = $this->createDeleteForm($workfield);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($workfield);
            $em->flush();
        }

        return $this->redirectToRoute('workfields_index');
    }

    /**
     * Creates a form to delete a Workfields entity.
     *
     * @param Workfields $workfield The Workfields entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Workfields $workfield)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('workfields_delete', array('id' => $workfield->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

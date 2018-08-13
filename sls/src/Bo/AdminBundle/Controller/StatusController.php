<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Status;
use Bo\AdminBundle\Form\StatusType;

/**
 * Status controller.
 *
 */
class StatusController extends CommonController
{
    /**
     * Lists all Status entities.
     *
     */
    public function indexAction()
    {
		$this->verifySessionRights();
        $em = $this->getDoctrine()->getManager();

        $statuses = $em->getRepository('BoAdminBundle:Status')->findAll();
		$nb_tc = count($statuses);
        $status = new Status();
        $form = $this->createForm('Bo\AdminBundle\Form\StatusType', $status);

        return $this->render('status/index.html.twig', array(
            'statuses' => $statuses,
            'form' => $form->createView(),
			'pm'=>"setting",
			'sm'=>"status",
			'total'=>$nb_tc, // Et le nombre total d'enregistrement.
        ));
    }

    /**
     * Creates a new Status entity.
     *
     */
    public function newAction(Request $request)
    {
        $status = new Status();
        $form = $this->createForm('Bo\AdminBundle\Form\StatusType', $status);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($status);
            $em->flush();
            return $this->redirectToRoute('status_show', array('id' => $status->getId()));
        }
		$this->get("session")->set('back',$request->headers->get('referer'));		
        return $this->render('status/new.html.twig', array(
            'status' => $status,
            'form' => $form->createView(),
			'pm'=>"setting",
			'sm'=>"status",
			'url'=>$request->headers->get('referer'),
        ));
    }

    /**
     * Finds and displays a Status entity.
     *
     */
    public function showAction(Status $status)
    {
        $deleteForm = $this->createDeleteForm($status);

        return $this->render('status/show.html.twig', array(
            'status' => $status,
            'delete_form' => $deleteForm->createView(),
			'pm'=>"setting",
			'sm'=>"status",
        ));
    }

    /**
     * Displays a form to edit an existing Status entity.
     *
     */
    public function editAction(Request $request, Status $status)
    {
        $deleteForm = $this->createDeleteForm($status);
        $editForm = $this->createForm('Bo\AdminBundle\Form\StatusType', $status);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($status);
            $em->flush();

            return $this->redirect($this->get('session')->get('url'));
        }
		$this->get('session')->set('url',$request->headers->get('referer'));
        return $this->render('status/edit.html.twig', array(
            'status' => $status,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"setting",
			'sm'=>"status",
        ));
    }

    /**
     * Deletes a Status entity.
     *
     */
    public function deleteAction(Request $request, Status $status)
    {
        $form = $this->createDeleteForm($status);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($status);
            $em->flush();
        }

        return $this->redirectToRoute('status_index');
    }

    /**
     * Creates a form to delete a Status entity.
     *
     * @param Status $status The Status entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Status $status)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('status_delete', array('id' => $status->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

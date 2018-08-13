<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Orderform;
use Bo\AdminBundle\Form\OrderformType;

/**
* Orderform controller.
*/
class OrderformController extends Controller
{
    /**
    * Lists all Orderform entities.
    */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $orderforms = $em->getRepository('BoAdminBundle:Orderform')->findAll();

        return $this->render('orderform/index.html.twig', array(
            'orderforms' => $orderforms,
        ));
    }

    /**
    * Creates a new Orderform entity.
    */
    public function newAction(Request $request)
    {
        $orderform = new Orderform();
        $form = $this->createForm('Bo\AdminBundle\Form\OrderformType', $orderform);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($orderform);
            $em->flush();

            return $this->redirectToRoute('orderform_show', array('id' => $orderform->getId()));
        }

        return $this->render('orderform/new.html.twig', array(
            'orderform' => $orderform,
            'form' => $form->createView(),
        ));
    }

    /**
    * Finds and displays a Orderform entity.
    */
    public function showAction(Orderform $orderform)
    {
        $deleteForm = $this->createDeleteForm($orderform);

        return $this->render('orderform/show.html.twig', array(
            'orderform' => $orderform,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Displays a form to edit an existing Orderform entity.
    */
    public function editAction(Request $request, Orderform $orderform)
    {
        $deleteForm = $this->createDeleteForm($orderform);
        $editForm = $this->createForm('Bo\AdminBundle\Form\OrderformType', $orderform);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($orderform);
            $em->flush();

            return $this->redirectToRoute('orderform_edit', array('id' => $orderform->getId()));
        }

        return $this->render('orderform/edit.html.twig', array(
            'orderform' => $orderform,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Deletes a Orderform entity.
    */
    public function deleteAction(Request $request, Orderform $orderform)
    {
        $form = $this->createDeleteForm($orderform);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($orderform);
            $em->flush();
        }

        return $this->redirectToRoute('orderform_index');
    }

    /**
     * Creates a form to delete a Orderform entity.
     * @param Orderform $orderform The Orderform entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Orderform $orderform)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('orderform_delete', array('id' => $orderform->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

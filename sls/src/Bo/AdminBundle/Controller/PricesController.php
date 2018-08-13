<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Prices;
use Bo\AdminBundle\Form\PricesType;

/**
 * Prices controller.
 *
 */
class PricesController extends Controller
{
    /**
     * Lists all Prices entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $prices = $em->getRepository('BoAdminBundle:Prices')->findAll();

        return $this->render('prices/index.html.twig', array(
            'prices' => $prices,
        ));
    }

    /**
     * Creates a new Prices entity.
     *
     */
    public function newAction(Request $request)
    {
        $price = new Prices();
        $form = $this->createForm('Bo\AdminBundle\Form\PricesType', $price);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($price);
            $em->flush();

            return $this->redirectToRoute('prices_show', array('id' => $prices->getId()));
        }

        return $this->render('prices/new.html.twig', array(
            'price' => $price,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Prices entity.
     *
     */
    public function showAction(Prices $price)
    {
        $deleteForm = $this->createDeleteForm($price);

        return $this->render('prices/show.html.twig', array(
            'price' => $price,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Prices entity.
     *
     */
    public function editAction(Request $request, Prices $price)
    {
        $deleteForm = $this->createDeleteForm($price);
        $editForm = $this->createForm('Bo\AdminBundle\Form\PricesType', $price);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($price);
            $em->flush();

            return $this->redirectToRoute('prices_edit', array('id' => $price->getId()));
        }

        return $this->render('prices/edit.html.twig', array(
            'price' => $price,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Prices entity.
     *
     */
    public function deleteAction(Request $request, Prices $price)
    {
        $form = $this->createDeleteForm($price);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($price);
            $em->flush();
        }

        return $this->redirectToRoute('prices_index');
    }

    /**
     * Creates a form to delete a Prices entity.
     *
     * @param Prices $price The Prices entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Prices $price)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('prices_delete', array('id' => $price->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

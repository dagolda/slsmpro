<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Extrapay;
use Bo\AdminBundle\Form\ExtrapayType;

/**
 * Extrapay controller.
 *
 */
class ExtrapayController extends Controller
{
    /**
     * Lists all Extrapay entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $extrapays = $em->getRepository('BoAdminBundle:Extrapay')->findAll();

        return $this->render('extrapay/index.html.twig', array(
            'extrapays' => $extrapays,
        ));
    }

    /**
     * Creates a new Extrapay entity.
     *
     */
    public function newAction(Request $request)
    {
        $extrapay = new Extrapay();
        $form = $this->createForm('Bo\AdminBundle\Form\ExtrapayType', $extrapay);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($extrapay);
            $em->flush();

            return $this->redirectToRoute('extrapay_show', array('id' => $extrapay->getId()));
        }

        return $this->render('extrapay/new.html.twig', array(
            'extrapay' => $extrapay,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Extrapay entity.
     *
     */
    public function showAction(Extrapay $extrapay)
    {
        $deleteForm = $this->createDeleteForm($extrapay);

        return $this->render('extrapay/show.html.twig', array(
            'extrapay' => $extrapay,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Extrapay entity.
     *
     */
    public function editAction(Request $request, Extrapay $extrapay)
    {
        $deleteForm = $this->createDeleteForm($extrapay);
        $editForm = $this->createForm('Bo\AdminBundle\Form\ExtrapayType', $extrapay);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($extrapay);
            $em->flush();

            return $this->redirectToRoute('extrapay_edit', array('id' => $extrapay->getId()));
        }

        return $this->render('extrapay/edit.html.twig', array(
            'extrapay' => $extrapay,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Extrapay entity.
     *
     */
    public function deleteAction(Request $request, Extrapay $extrapay)
    {
        $form = $this->createDeleteForm($extrapay);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($extrapay);
            $em->flush();
        }

        return $this->redirectToRoute('extrapay_index');
    }

    /**
     * Creates a form to delete a Extrapay entity.
     *
     * @param Extrapay $extrapay The Extrapay entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Extrapay $extrapay)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('extrapay_delete', array('id' => $extrapay->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

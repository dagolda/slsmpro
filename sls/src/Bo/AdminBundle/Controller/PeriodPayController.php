<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\PeriodPay;
use Bo\AdminBundle\Form\PeriodPayType;

/**
 * PeriodPay controller.
 *
 */
class PeriodPayController extends Controller
{
    /**
     * Lists all PeriodPay entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $periodPays = $em->getRepository('BoAdminBundle:PeriodPay')->findAll();

        return $this->render('periodpay/index.html.twig', array(
            'periodPays' => $periodPays,
        ));
    }

    /**
     * Creates a new PeriodPay entity.
     *
     */
    public function newAction(Request $request)
    {
        $periodPay = new PeriodPay();
        $form = $this->createForm('Bo\AdminBundle\Form\PeriodPayType', $periodPay);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($periodPay);
            $em->flush();

            return $this->redirectToRoute('periodpay_show', array('id' => $periodpay->getId()));
        }

        return $this->render('periodpay/new.html.twig', array(
            'periodPay' => $periodPay,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a PeriodPay entity.
     *
     */
    public function showAction(PeriodPay $periodPay)
    {
        $deleteForm = $this->createDeleteForm($periodPay);

        return $this->render('periodpay/show.html.twig', array(
            'periodPay' => $periodPay,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing PeriodPay entity.
     *
     */
    public function editAction(Request $request, PeriodPay $periodPay)
    {
        $deleteForm = $this->createDeleteForm($periodPay);
        $editForm = $this->createForm('Bo\AdminBundle\Form\PeriodPayType', $periodPay);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($periodPay);
            $em->flush();

            return $this->redirectToRoute('periodpay_edit', array('id' => $periodPay->getId()));
        }

        return $this->render('periodpay/edit.html.twig', array(
            'periodPay' => $periodPay,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a PeriodPay entity.
     *
     */
    public function deleteAction(Request $request, PeriodPay $periodPay)
    {
        $form = $this->createDeleteForm($periodPay);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($periodPay);
            $em->flush();
        }

        return $this->redirectToRoute('payroll_index');
    }

    /**
     * Creates a form to delete a PeriodPay entity.
     *
     * @param PeriodPay $periodPay The PeriodPay entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PeriodPay $periodPay)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('periodpay_delete', array('id' => $periodPay->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

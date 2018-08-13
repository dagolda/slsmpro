<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Entity\Hothers;
use Bo\AdminBundle\Form\HothersType;

/**
 * Hothers controller.
 *
 */
class HothersController extends CommonController
{
    /**
     * Finds and displays a Hothers entity.
     *
     */
    public function showAction(Hothers $hother)
    {
        $deleteForm = $this->createDeleteForm($hother);

        return $this->render('hothers/show.html.twig', array(
            'hother' => $hother,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Hothers entity.
     *
     */
    public function editAction(Request $request, Hothers $hother)
    {
        $editForm = $this->createForm('Bo\AdminBundle\Form\HothersType', $hother);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$this->updateEntity($hother);
            return $this->redirectToRoute('payroll_show', array('id' => $hother->getIdperiodpay(),'action'=>"Others"));
        }

        return $this->render('hothers/edit.html.twig', array(
            'hother' => $hother,
            'edit_form' => $editForm->createView(),
			'action'=>"Others",
			'pm'=>"accounting",
			'sm'=>"payroll"
        ));
    }
}

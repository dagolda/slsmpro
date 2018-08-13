<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Hholiday;
use Bo\AdminBundle\Form\HholidayType;

/**
 * Hholiday controller.
 *
 */
class HholidayController extends Controller
{
    /**
     * Displays a form to edit an existing Hholiday entity.
     *
     */
    public function editAction(Request $request, Hholiday $hholiday)
    {
        $editForm = $this->createForm('Bo\AdminBundle\Form\HholidayType', $hholiday);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$this->updateEntity($hholiday);
            return $this->redirectToRoute('payroll_show', array('id' => $hother->getIdperiodpay(),'action'=>"Holiday"));
        }

        return $this->render('hholiday/edit.html.twig', array(
            'hholiday' => $hholiday,
            'delete_form' => $deleteForm->createView(),
			'pm'=>"accounting",
			'sm'=>"payroll"
        ));
    }
}

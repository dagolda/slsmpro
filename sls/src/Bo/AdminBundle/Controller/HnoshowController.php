<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Entity\Hnoshow;
use Bo\AdminBundle\Form\HnoshowType;

/**
 * Hnoshow controller.
 *
 */
class HnoshowController extends CommonController
{
    /**
     * Displays a form to edit an existing Hnoshow entity.
     *
     */
    public function editAction(Request $request, Hnoshow $hnoshow)
    {
        $editForm = $this->createForm('Bo\AdminBundle\Form\HnoshowType', $hnoshow);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
		$this->updateEntity($hnoshow);
            return $this->redirectToRoute('payroll_show', array('id' => $hother->getIdperiodpay(),'action'=>"Noshow"));
        }
	if($hnoshow->getIdperiodpay()!=null){
		$em = $this->getDoctrine()->getManager();
		$oPP = $em->getRepository('BoAdminBundle:PeriodPay')->find($hnoshow->getIdperiodpay());			
	}

        return $this->render('hnoshow/edit.html.twig', array(
	    'periodPay' => $oPP,
            'hnoshow' => $hnoshow,
	    'employee' => $hnoshow->getEmployee(),
	    'weeks'=>(isset($oPP) and $oPP)?$this->getWeekByOrder($oPP):null,
            'form' => $editForm->createView(),
		'pm'=>"accounting",
		'sm'=>"payroll"
        ));
    }
}

<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Hadmin;
use Bo\AdminBundle\Form\HadminType;

/**
 * Hadmin controller.
 *
 */
class HadminController extends CommonController
{
    /**
     * Displays a form to edit an existing Hadmin entity.
     *
     */
    public function editAction(Request $request, Hadmin $hadmin)
    {
        $editForm = $this->createForm('Bo\AdminBundle\Form\HadminType', $hadmin);
        $editForm->handleRequest($request);
		$oPP = null;
        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$this->updateEntity($hadmin);
        }
		if($hadmin->getIdperiodpay()!=null){
			$em = $this->getDoctrine()->getManager();
			$oPP = $em->getRepository('BoAdminBundle:PeriodPay')->find($hadmin->getIdperiodpay());			
		}
        return $this->render('hadmin/edit.html.twig', array(
            'hadmin' => $hadmin,
			'periodPay' => $oPP,
			'employee' => $hadmin->getEmployee(),
			'weeks'=>$this->getWeekByOrder($oPP),
            'form' => $editForm->createView(),
			'pm'=>"accounting",
			'sm'=>"payroll"
        ));
    }
}

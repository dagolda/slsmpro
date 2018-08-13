<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use Bo\AdminBundle\Entity\Hteaching;
use Bo\AdminBundle\Form\HteachingType;

/**
 * Hteaching controller.
 *
 */
class HteachingController extends CommonController
{
    /**
     * Displays a form to edit an existing Hteaching entity.
     *
     */
    public function editAction(Request $request, Hteaching $hteaching)
    {
        $editForm = $this->createForm('Bo\AdminBundle\Form\HteachingType', $hteaching);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$hteaching->setTotal($this->getTotal($hteaching));
			$this->updateEntity($hteaching);
            return $this->redirectToRoute('payroll_show', array('id' => $hteaching->getIdperiodpay(),'action'=>"Teaching"));
        }
		if($hteaching->getIdperiodpay()!=null){
			$em = $this->getDoctrine()->getManager();
			$oPP = $em->getRepository('BoAdminBundle:PeriodPay')->find($hteaching->getIdperiodpay());			
		}
        return $this->render('hteaching/edit.html.twig', array(
			'periodPay' => $oPP,
            'hteaching' => $hteaching,
            'form' => $editForm->createView(),
			'employee' => $hteaching->getEmployee(),
			'weeks'=>(isset($oPP) and $oPP)?$this->getWeekByOrder($oPP):null,
			'pm'=>"accounting",
			'sm'=>"payroll"
        ));
    }
	private function getTotal($hteaching){
		return intval($hteaching->getHw0())+intval($hteaching->getHw1())+intval($hteaching->getHw2())+intval($hteaching->getHw3())+intval($hteaching->getHw4())+intval($hteaching->getHw5())+intval($hteaching->getExtra());
	}
}


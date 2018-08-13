<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\ContractSchedule;
use Bo\AdminBundle\Form\ContractScheduleType;

/**
* ContractSchedule controller.
*/
class ContractScheduleController extends Controller
{
    /**
     * Displays a form to edit an existing ContractSchedule entity.
     *
     */
    public function editAction(Request $request, ContractSchedule $contractSchedule)
    {
        $editForm = $this->createForm('Bo\AdminBundle\Form\ContractScheduleType', $contractSchedule);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contractSchedule);
            $em->flush();

            return $this->redirectToRoute('contracts_show', array('id' => $contractSchedule->getIdcontracts()));
        }

        return $this->render('contractschedule/edit.html.twig', array(
            'contractSchedule' => $contractSchedule,
            'edit_form' => $editForm->createView(),
			'pm'=>"contracts",
			'sm'=>"contracts",
        ));
    }
}

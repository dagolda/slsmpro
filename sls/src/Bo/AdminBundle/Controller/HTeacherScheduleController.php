<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Entity\HTeacherschedule;
use Bo\AdminBundle\Form\HTeacherscheduleType;

/**
 * HTeacherschedule controller.
 *
 */
class HTeacherscheduleController extends CommonController
{
    /**
    * Lists all HTeacherschedule entities.
    */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        return $this->render('HTeacherschedule/index.html.twig', array(
            'HTeacherschedules' => $HTeacherschedules,
			'pm'=>"contracts",
			'sm'=>"contracts",
        ));
    }
    /**
    * Displays a form to edit an existing HTeacherschedule entity. 
    */
    public function editAction(Request $request,$id)
    {
		$em = $this->getDoctrine()->getManager();
		$HTeacherschedule = $em->getRepository('BoAdminBundle:HTeacherschedule')->find($id);
		$oContract = $em->getRepository('BoAdminBundle:Contracts')->find($HTeacherschedule->getIdcontracts());
		$teachers = $em->getRepository('BoAdminBundle:Teachers')->getAvailableForSchedule($oContract);//All teachers avalaible
        $deleteForm = $this->createDeleteForm($HTeacherschedule);
        $editForm = $this->createForm('Bo\AdminBundle\Form\HTeacherscheduleType', $HTeacherschedule);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$idteacher = $request->request->get('idteacher');
			if($idteacher!=$HTeacherschedule->getIdemployee()){
				$oTeacher = $em->getRepository('BoAdminBundle:Employee')->find($idteacher);
				$oOldTeacher = $em->getRepository('BoAdminBundle:Employee')->find($HTeacherschedule->Idemployee());
				$oContract->removeEmployee($oOldTeacher);
				$em->flush();
				$oContract->addEmployee($oTeacher);
				$this->updateEntity($oContract);				
			}	
			$this->updateEntity($HTeacherschedule);

			return $this->redirectToRoute('contracts_show', array('id' => $oContract->getId()));					
        }

        return $this->render('HTeacherschedule/edit.html.twig', array(
            'HTeacherschedule' => $HTeacherschedule,
			'contract'=>$oContract,
			'idteacher' => $HTeacherschedule->getIdemployee(),
			'teachers'=>$teachers, //for the select form
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"contracts",
			'sm'=>"contracts",
        ));
    }

    /**
    * Deletes a HTeacherschedule entity.
    */
    public function deleteAction(Request $request, HTeacherschedule $HTeacherschedule)
    {
		$idcontracts = $HTeacherschedule->getIdcontracts();
        $form = $this->createDeleteForm($HTeacherschedule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$oContract = $em->getRepository('BoAdminBundle:Contracts')->find($HTeacherschedule->getIdcontracts());
			$oEmployee = $em->getRepository('BoAdminBundle:Employee')->find($HTeacherschedule->getIdemployee());
			$oContract->removeEmployee($oEmployee);
            $em->remove($HTeacherschedule);
            $em->flush();
        }
        return $this->redirectToRoute('contracts_show', array('id' => $idcontracts));	
    }

    /**
    * Creates a form to delete a HTeacherschedule entity.
    * @param HTeacherschedule $HTeacherschedule The HTeacherschedule entity
    * @return \Symfony\Component\Form\Form The form
    */
    private function createDeleteForm(HTeacherschedule $HTeacherschedule)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('HTeacherschedule_delete', array('id' => $HTeacherschedule->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

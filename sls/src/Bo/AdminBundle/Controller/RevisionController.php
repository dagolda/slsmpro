<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use Bo\AdminBundle\Entity\Revision;
use Bo\AdminBundle\Form\RevisionType;

/**
 * Revision controller.
 *
 */
class RevisionController extends CommonController
{
    /**
     * Lists all Revision entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $revisions = $em->getRepository('BoAdminBundle:Revision')->findAll();

        return $this->render('revision/index.html.twig', array(
            'revisions' => $revisions,
        ));
    }

    /**
     * Creates a new Revision entity.
     *
     */
    public function newAction(Request $request)
    {
        $revision = new Revision();
        $form = $this->createForm('Bo\AdminBundle\Form\RevisionType', $revision);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($revision);
            $em->flush();

            return $this->redirectToRoute('revision_show', array('id' => $revision->getId()));
        }

        return $this->render('revision/new.html.twig', array(
            'revision' => $revision,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Revision entity.
     *
     */
    public function showAction(Revision $revision)
    {
        $deleteForm = $this->createDeleteForm($revision);

        return $this->render('revision/show.html.twig', array(
            'revision' => $revision,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Revision entity.
     *
     */
    public function editAction(Request $request, Revision $revision)
    {
		$deleteForm = $this->createDeleteForm($revision);
        $editForm = $this->createForm('Bo\AdminBundle\Form\RevisionType2', $revision);
        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid()){
			//Update info revision
			/*
			$hour = floatval($revision->getHour());
			$houlyrate = $revision->getHourlyrate();
			$total = $hour*$houlyrate;
			$revision->setTotal($total);
			$revision->updateTotalHour();
			*/
			$this->updateEntity($revision);
			$em = $this->getDoctrine()->getManager();
			$oContract=$em->getRepository('BoAdminBundle:Contracts')->find($revision->getIdcontracts());
			//Updating info contract
			$enddate = $oContract->getEnddate();
			$oContract->setEstimatedcost($revision->getcostafter());
			$oContract->setHoursnumber($revision->gethourafter());
			$oContract->setInitialenddate($enddate);		
			$oContract->updateStatus();
			$oContract->setEnddate($revision->getEnddate());
			$this->updateEntity($oContract);
            return $this->redirectToRoute('contracts_show', array('id' => $revision->getIdcontracts()));
        }
        return $this->render('revision/edit.html.twig', array(
            'revision' => $revision,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"contracts",
			'sm'=>"contracts",
        ));
    }

    /**
     * Deletes a Revision entity.
     */
    public function removeAction(Request $request, Revision $revision)
    {
		$idcontract = $this->getSessionByName('idcontracts');
        if ($idcontract != null) {
            $this->removeEntity($revision);
			return $this->redirectToRoute('contracts_show',array('id'=>$idcontract));
        }
		$message = $this->getTypeMessage("Warning",$this->get('translator')->trans('Something is wrong. Please contact the system administrator'));
		$this->setSessionByName('message',$message);
		return $this->redirectToRoute('contracts_index');		
    }
    /**
     * Deletes a Revision entity.
     */
    public function deleteAction(Request $request, Revision $revision)
    {
        $form = $this->createDeleteForm($revision);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($revision);
            $em->flush();
        }
        return $this->redirectToRoute('revision_index');
    }

    /**
     * Creates a form to delete a Revision entity.
     *
     * @param Revision $revision The Revision entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Revision $revision)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('revision_delete', array('id' => $revision->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

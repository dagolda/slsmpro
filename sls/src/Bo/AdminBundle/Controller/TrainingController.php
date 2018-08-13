<?php
namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use Bo\AdminBundle\Entity\Training;
use Bo\AdminBundle\Form\TrainingType;

/**
* Training controller.
*/
class TrainingController extends CommonController
{
    /**
    * Lists all Training entities.
    */
    public function indexAction()
    {
		$this->verifySessionRights();
        $em = $this->getDoctrine()->getManager();

        $trainings = $em->getRepository('BoAdminBundle:Training')->findAll();

        return $this->render('training/index.html.twig', array(
            'trainings' => $trainings,
        ));
    }

    /**
    * Creates a new Training entity.
    */
    public function newAction(Request $request,$idcontract)
    {
        $training = new Training();
        $form = $this->createForm('Bo\AdminBundle\Form\TrainingType', $training);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$oContract = $em->getRepository('BoAdminBundle:Contracts')->find($idcontract);
			$training->setContracts($oContract);
			if($oContract->getGroup() and $oContract->getGroup()->getId()>0) $training->setIdgroup($oContract->getGroup()->getId());
			$this->updateEntity($training);
            return $this->redirectToRoute('contracts_show', array('id' => $idcontract));
        }

        return $this->render('training/new.html.twig', array(
            'training' => $training,
			'idcontract'=>$idcontract,
            'form' => $form->createView(),
			'pm'=>"contracts",
			'sm'=>"contracts",
        ));
    }

    /**
    * Finds and displays a Training entity.
    */
    public function showAction(Training $training)
    {
        $deleteForm = $this->createDeleteForm($training);

        return $this->render('training/show.html.twig', array(
            'training' => $training,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
    * Displays a form to edit an existing Training entity.
    */
    public function editAction(Request $request, Training $training)
    {
		$this->setSessionByName("idcontracts",$this->getSessionByName("idcontracts"));
        $deleteForm = $this->createDeleteForm($training);
        $editForm = $this->createForm('Bo\AdminBundle\Form\TrainingType', $training);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$oContract = $em->getRepository('BoAdminBundle:Contracts')->find($training->getContracts()->getId());
			if($oContract->getGroup() and $oContract->getGroup()!=null and $training->getId()==0) $training->setIdgroup($oContract->getGroup()->getId());
			$this->updateEntity($training);

            return $this->redirectToRoute('contracts_show', array('id' => $training->getContracts()->getId()));
        }

        return $this->render('training/edit.html.twig', array(
            'training' => $training,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"contracts",
			'sm'=>"contracts",
        ));
    }
    /**
    * Deletes a Training entity.
    */
    public function deleteAction(Request $request, Training $training)
    {
	if($training->getContracts()){
		$contract = $training->getContracts();
		$idcontract = $contract->getId();
	}else{
		$idcontract=$this->getSessionByName("idcontracts");
	} 
        $form = $this->createDeleteForm($training);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($training);
            $em->flush();
        }
	if($idcontract>0){
		return $this->redirectToRoute('contracts_show',array('id'=>$idcontract));
	}else{
		$this->setSessionMessage("Warning",$this->get('translator')->trans("Unable to find the specified contract"));
		return $this->redirectToRoute('contracts_index');
	}        
    }
	public function updateAction(){
		$em = $this->getDoctrine()->getManager();
		$trainings = $em->getRepository('BoAdminBundle:Training')->findAll();
		foreach($trainings as $training){
			$oGroup = $training->getContracts()->getGroup();
			if($oGroup and $training->getIdgroup()==0){
				$training->setIdgroup($oGroup->getId());
				$this->updateEntity($training);
				echo $oGroup->getName()."<br>";
			} 			
		}
		return $this->redirectToRoute('contracts_show', array('id' => $training->getContracts()->getId()));
	}
	/*
	public function update2Action(){
		$em = $this->getDoctrine()->getManager();
		$trainings = $em->getRepository('BoAdminBundle:Training')->findAll();
		foreach($trainings as $training){
			$oGroup = $training->getContracts()->getGroup();
			if($oGroup){
				$aContracts = $em->getRepository('BoAdminBundle:Contracts')->findBy(array('group'=>$oGroup));
				if(count($aContracts)>1){
					echo $oGroup->getName().'<br>';
					$aTrainingGroup = $em->getRepository('BoAdminBundle:Training')->findByIdgroup($oGroup->getId());
					echo count($aTrainingGroup);
					//exit(0);
					$i=1;
					foreach($aTrainingGroup as $oTG){
						if($i==1){
							continue;
						}else{
							$this->removeEntity($oTG);
							echo "<br>remove ".$oTG->getId();
						}
						$i=$i+1;	
					}
				} 				
			}			
		}
		exit(0);
		return $this->redirectToRoute('contracts_show', array('id' => $training->getContracts()->getId()));
	}
	*/
    /**
     * Creates a form to delete a Training entity.
     * @param Training $training The Training entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Training $training)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('training_delete', array('id' => $training->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

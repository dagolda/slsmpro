<?php

namespace Bo\CoordinatorBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Controller\CommonController;
use Bo\AdminBundle\Entity\UserMessage;
use Bo\AdminBundle\Form\UserMessageType;

/**
 * UserMessage controller.
 *
 */
class MessageController extends CommonController
{
    /**
     * Lists all UserMessage entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
		$coordinator = $this->getConnectedCoordinator(); 
        $userMessages = $em->getRepository('BoAdminBundle:UserMessage')->findBy(array('coordinators'=>$coordinator));
		$userMessage = new UserMessage();
        $form = $this->createForm('Bo\AdminBundle\Form\UserMessageType', $userMessage);
		$aRecipient = $this->getRecipents($coordinator);

        return $this->render('BoHomeBundle:Message:index.html.twig', array(
            'userMessages' => $userMessages,
			'coordinator'=>$coordinator,
			'recipients'=>$aRecipient,
			'status'=>$this->getStatusMessage(),
			'form' => $form->createView(),
			'pm'=>"request",
			'sm'=>"message",
        ));
    }

    /**
     * Creates a new UserMessage entity.
     *
     */
    public function newAction(Request $request)
    {
        $userMessage = new UserMessage();
        $form = $this->createForm('Bo\AdminBundle\Form\UserMessageType', $userMessage);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
			$em = $this->getDoctrine()->getManager();
			$coordinator = $this->getConnectedCoordinator(); 
			$userMessage->setStudents($coordinator);
			$userMessage->setStype("coordinator");
			$userMessage->setCategory(1);
			$to1 = $request->request->get('idrecipient1');
			$to2 = $request->request->get('idrecipient2');			
			if($to1!=0){
				$userMessage->setIto1($to1);
				$oEmployee = $em->getRepository('BoAdminBundle:Employee')->find($to1);
				if($oEmployee) $userMessage->setSto1($oEmployee->getFirstname()." ".$oEmployee->getName());
			} 
			if($to2!=0){
				$userMessage->setIto2($to2);
				$oEmployee = $em->getRepository('BoAdminBundle:Employee')->find($to2);
				if($oEmployee) $userMessage->setSto2($oEmployee->getFirstname()." ".$oEmployee->getName());
			} 
            $em = $this->getDoctrine()->getManager();
            $em->persist($userMessage);
            $em->flush();
            return $this->redirectToRoute('coordinator_message_index');
        }
        return $this->render('BoHomeBundle:Message:new.html.twig', array(
            'userMessage' => $userMessage,
			'recipients'=>$this->getRecipents($coordinator),
            'form' => $form->createView(),
			'pm'=>"admin",
			'sm'=>"message",
        ));
    }

    /**
     * Finds and displays a UserMessage entity.
     *
     */
    public function showAction(UserMessage $userMessage)
    {

        return $this->render('BoHomeBundle:Message:show.html.twig', array(
            'userMessage' => $userMessage,
			'pm'=>"admin",
			'sm'=>"message",
        ));
    }

    /**
     * Displays a form to edit an existing UserMessage entity.
     *
     */
    public function editAction(Request $request, UserMessage $userMessage)
    {
        $deleteForm = $this->createDeleteForm($userMessage);
        $editForm = $this->createForm('Bo\AdminBundle\Form\UserMessageType', $userMessage);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($userMessage);
            $em->flush();

            return $this->redirectToRoute('usermessage_edit', array('id' => $userMessage->getId()));
        }

        return $this->render('BoHomeBundle:Message:edit.html.twig', array(
            'userMessage' => $userMessage,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"admin",
			'sm'=>"message",
        ));
    }

    /**
     * Deletes a UserMessage entity.
     *
     */
    public function deleteAction(Request $request, UserMessage $userMessage)
    {
        $form = $this->createDeleteForm($userMessage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($userMessage);
            $em->flush();
        }

        return $this->redirectToRoute('usermessage_index');
    }

    /**
     * Creates a form to delete a UserMessage entity.
     *
     * @param UserMessage $userMessage The UserMessage entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(UserMessage $userMessage)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('usermessage_delete', array('id' => $userMessage->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
	private function getRecipents($coordinator){
		$aResult =  array();
		$aContract = $coordinator->getContracts();		
		if(count($aContract)==1) $oContract = $aContract[0];
		elseif(count($aContract)>1) $oContract = $this->getActiveContract($aContract);
		if($oContract){
			$oPa = $oContract->getAdvisor();
			if($oPa){
				$aResult[$oPa->getId()]=$oPa;
			}			
			$aTeachers =  $oContract->getEmployee();
			foreach($aTeachers as $oTeachers){
				$aResult[$oTeachers->getId()]=$oTeachers;
			}
		}
		return $aResult;
	}
	private function getStatusMessage(){
		return array(0=>"Send",1=>"Read",2=>"Answered");
	}
}

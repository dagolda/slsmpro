<?php

namespace Bo\HomeBundle\Controller;

use Bo\AdminBundle\Controller\CommonController;
use Bo\AdminBundle\Entity\Invitation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
* Invitation controller.
*/
class InvitationController extends CommonController
{
    /**
    * Lists all invitation entities.
    */
    public function indexAction()
    {
	$aInvitations = array();
	$oEmployee = $this->getConnectedEmployee();
	if($oEmployee){
		$aInvitations = $this->getRepository('BoAdminBundle:Invitation')->getByEmployee($oEmployee);
	}

        return $this->render('BoHomeBundle:Invitation:index.html.twig', array(
            	'invitations' => $aInvitations,
	    	'pm'=>"contracts",
		'sm'=>"invitation",
        ));
    }


    /**
     * Finds and displays a invitation entity.
     *
     */
    public function showAction(Invitation $invitation)
    {

        return $this->render('BoHomeBundle:Invitation:show.html.twig', array(
            	'invitation' => $invitation,
	    	'pm'=>"contracts",
		'sm'=>"invitation",
        ));
    }


    /**
     * Accept a invitation.
     * Change a status of invitation from 0 to 1 
     */
    public function acceptAction(Request $request, Invitation $oInvitation)
    {
	$oInvitation = $this->updateInvitation($oInvitation,1);
	$message = $this->get('translator')->trans('Your validation has been saved successfully');
	$aMessage = array('type'=>"Warning",'texte'=>$message);

        return $this->render('BoHomeBundle:Invitation:show.html.twig', array(
            	'invitation' => $oInvitation,
		'message'=>$aMessage,
		'option'=>2,
	    	'pm'=>"contracts",
		'sm'=>"invitation",
        ));
    }
    /**
     * Reject a invitation.
     * Change a status of invitation from 0 to 2 
     */
    public function rejectAction(Request $request, Invitation $oInvitation)
    {
	$oInvitation = $this->updateInvitation($oInvitation,2);
	$message = $this->get('translator')->trans('Your validation has been saved successfully');
	$aMessage = array('type'=>"Warning",'texte'=>$message);

        return $this->render('BoHomeBundle:Invitation:show.html.twig', array(
            	'invitation' => $oInvitation,
		'option'=>2,
	    	'pm'=>"contracts",
		'sm'=>"invitation",
        ));
    }

	private function updateInvitation($oInvitation,$status){
		$oInvitation->setStatus($status);
		$this->updateEntity($oInvitation);
		$oAgenda = $oInvitation->getAgenda();
		$oAgenda->setIstatus($status);
		$oAgenda->setIdate($this->getToday());
		$this->updateEntity($oAgenda);
		return $oInvitation;
	}
}

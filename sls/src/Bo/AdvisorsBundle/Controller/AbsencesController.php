<?php

namespace Bo\AdvisorsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Controller\CommonController;

use Bo\AdminBundle\Entity\Absences;
use Bo\AdminBundle\Form\AbsencesType2;

/**
 * Absences controller.
 *
 */
class AbsencesController extends CommonController
{
    /**
    * Lists all Absences entities.
    */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
	$absences = array();
	$employee = $this->getConnectedEmployee();
	if($employee){
		$absences = $em->getRepository('BoAdminBundle:Absences')->findBy(array('employee'=>$employee));
	}
        //$absence_form = $this->createForm('Bo\AdminBundle\Form\AbsencesType4', new Absences());
        return $this->render('BoAdvisorsBundle:Absences:index.html.twig', array(
            	'absences' => $absences,
		'employee' => $employee,
		'absence_form' => $this->getAbsenceFormView(),
		'pm'=>"tabeau-bord",
		'sm'=>"absences",
        ));
    }
    /**
    * Creates a new Absences entity.
    */
    public function newAction(Request $request)
    {
        $absence = new Absences();
	$message=null;
        $form = $this->createForm('Bo\AdminBundle\Form\AbsencesType4', $absence);
        $form->handleRequest($request);
	$employee = $this->getConnectedEmployee();

        if ($form->isSubmitted() && $form->isValid() && $employee!=null) {
		$sheckts=$this->checkExistingTsFor($employee,$absence->getStartdate());
		$oRepAbs = $this->getRepository('BoAdminBundle:Absences');
		$bExist = $oRepAbs->existEmployeeAbsence($employee,$absence->getStartdate());
		if($bExist==false){
			$enddate = $this->getDatePlusBis($absence->getStartdate(),$absence->getNumberday()-1);
			$absence->setEnddate($enddate);
			$absence->setEmployee($employee);
			$res = $this->updateEntity($absence);
			if($res>0){
				$this->setActivity("Absence id ".$absence->getId()." is created for ".$this->getFullnameOf($employee));
				if(!in_array(@$_SERVER['REMOTE_ADDR'], array(
						'127.0.0.1',
						'::1',
				))) $this->notifyAdmin($absence,$employee);
		    		return $this->redirectToRoute('dash_absences_index');
			}
		}elseif($bExist==true){
			$message = $this->get('translator')->trans('An absence already exists for you and for this date');
			$aMessage = $this->getFormatMessage('Warning',$message);
		}elseif($sheckts==true){
			$message = $this->get('translator')->trans('Some timesheet are already created for you, so you can not create absence for this date');
			$aMessage = $this->getFormatMessage('Warning',$message);	
		}	
        }
	if($employee==null) $this->getTypeMessage("warning","Employee not found.");

        return $this->render('BoAdvisorsBundle:Absences:new.html.twig', array(
            	'absence' => $absence,
		'message'=>$aMessage,
		'employee' => $employee,
            	'form' => $form->createView(),
		'pm'=>"tabeau-bord",
		'sm'=>"absences",
        ));
    }
    /**
    * Finds and displays a Absences entity.
    */
    public function showAction(Absences $absence)
    {
        $deleteForm = $this->createDeleteForm($absence);

        return $this->render('BoAdvisorsBundle:Absences:show.html.twig', array(
            'absence' => $absence,
			'employee' => $this->getConnectedEmployee(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"tabeau-bord",
			'sm'=>"absences",
        ));
    }

    /**
    * Displays a form to edit an existing Absences entity.
    */
    public function editAction(Request $request, Absences $absence)
    {
        $deleteForm = $this->createDeleteForm($absence);
        $editForm = $this->createForm('Bo\AdminBundle\Form\AbsencesType2', $absence);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$this->updateEntity($absence);
            return $this->redirectToRoute('dash_absences_index');
        }

        return $this->render('BoAdvisorsBundle:Absences:edit.html.twig', array(
            'absence' => $absence,
			'employee' => $this->getConnectedEmployee(),
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"tabeau-bord",
			'sm'=>"absences",
        ));
    }

    /**
    * Deletes a Absences entity.
    */
    public function deleteAction(Request $request, Absences $absence)
    {
        $form = $this->createDeleteForm($absence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($absence);
            $em->flush();
        }

        return $this->redirectToRoute('dash_absences_index');
    }

    /**
    * Creates a form to delete a Absences entity.
    * @param Absences $absence The Absences entity
    * @return \Symfony\Component\Form\Form The form
    */
    private function createDeleteForm(Absences $absence)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('dash_absences_delete', array('id' => $absence->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /**
    * Notify admin for this absence 
    */
	public function notifyAdmin(Absences $absence,$employee){
		$oParam = $this->getRepository('BoAdminBundle:Param');
		$to = $oParam->getParam("email_cancel",16);
		$cc = $oParam->getParam("email_admin_notification",32);		
		$subject = "Absence membre admin : ".$this->getFullnameOf($employee);	
		$body = $this->renderView("BoHomeBundle:Absences:mail.html.twig", array('absence'=>$absence));
		$Bcc = "jnvekounou@yahoo.fr";		
		$res = $this->sendmail($to,$subject,$body,$cc,$Bcc);				
		if($res==1){
			$this->setActivity("Mail sent to ".$to." for absence id:".$absence->getId());
		}else{
			$this->setActivity("Mail does not sent to ".$to." for absence id:".$absence->getId());
		}
		return true;
	}
	private function setActivity($activity){
		return $this->createActivity("Absence",$activity);	
	}
}

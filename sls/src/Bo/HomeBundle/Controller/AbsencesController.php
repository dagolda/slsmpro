<?php

namespace Bo\HomeBundle\Controller;

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
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
		$timesheets=array();
		$employee = $this->getConnectedEmployee();
		if($employee){
			$absences = $em->getRepository('BoAdminBundle:Absences')->findBy(array('employee'=>$employee),array('id' => 'desc'));
		}
        $form = $this->createForm('Bo\AdminBundle\Form\AbsencesType4', new Absences());
        return $this->render('BoHomeBundle:Absences:index.html.twig', array(
            'absences' => $absences,
		'employee'=>$employee,
            'absence_form' => $form->createView(),
			'pm'=>"request",
			'sm'=>"absences",
        ));
    }
    /**
    * Creates a new Absences entity.
    */
    public function newAction(Request $request)
    {
	$employee = $this->getConnectedEmployee();
        $absence = new Absences();
	$message=null;
        $form = $this->createForm('Bo\AdminBundle\Form\AbsencesType4', $absence);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid() && $employee!=null){
			$sheckts=$this->checkExistingTsFor($employee);
			$oRepAbs = $this->getRepository('BoAdminBundle:Absences');
			$bExist = $oRepAbs->existEmployeeAbsence($employee,$absence->getStartdate());
			if($bExist==false){
				$enddate = $this->getDatePlusBis($absence->getStartdate(),$absence->getNumberday()-1);
				$absence->setEnddate($enddate);
				$absence->setEmployee($employee);
				$absence->setCreateby($employee->getFirstname()." ".$employee->getName());
				$res = $this->createAbsence($absence);
				if($res>0){
					$this->setActivity("Absence id ".$absence->getId()." is created for ".$this->getFullnameOf($employee));	
					$this->notifyAdmin($absence,$employee);
				}
				return $this->redirectToRoute('home_absences_index');
			}elseif($bExist==false){
				$message = $this->get('translator')->trans('An absence already exists for you and for this date');
				$aMessage = $this->getFormatMessage('Warning',$message);
			}else{
				$message = $this->get('translator')->trans('Some timesheet are already created for you, so you can not create absence for this date');
				$aMessage = $this->getFormatMessage('Warning',$message);	
			}			
        }
	$this->getTypeMessage("warning","Employee not found.");
        return $this->render('BoHomeBundle:Absences:new.html.twig', array(
            	'absence' => $absence,
		'employee'=>$employee,
		'message'=>$aMessage,
            	'form' => $form->createView(),
		'pm'=>"request",
		'sm'=>"absences",
        ));
    }
    /**
    * Notify admin for this absence 
    */
	public function notifyAdmin(Absences $absence,$employee){
		$em = $this->getDoctrine()->getManager();
		$to = $em->getRepository('BoAdminBundle:Param')->getParam("email_cancel",16);
		$cpemail = $this->getCpEmailByAbsence($absence);
		if($cpemail!="" and $cpemail!=null){
			$cc = $cpemail.$em->getRepository('BoAdminBundle:Param')->getParam("email_training_coordinator",22);
		}else{
			$cc = $em->getRepository('BoAdminBundle:Param')->getParam("email_training_coordinator",22);
		}		
		$subject = "Absence du professeur: ".$this->getFullnameOf($employee);	
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
    /**
    * Finds and displays a Absences entity.
    */
    public function showAction(Absences $absence)
    {
		$employee = $this->getConnectedEmployee();
        $deleteForm = $this->createDeleteForm($absence);

        return $this->render('BoHomeBundle:Absences:show.html.twig', array(
            'absence' => $absence,
			'employee'=>$employee,
            'delete_form' => $deleteForm->createView(),
			'pm'=>"request",
			'sm'=>"absences",
        ));
    }
    /**
     * Displays a form to edit an existing Absences entity.
     *
     */
    public function editAction(Request $request, Absences $absence)
    {
		$employee = $this->getConnectedEmployee();
        $deleteForm = $this->createDeleteForm($absence);
        $editForm = $this->createForm('Bo\AdminBundle\Form\AbsencesType3', $absence);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$this->updateEntity($absence);
            return $this->redirectToRoute('home_absences_index');
        }

        return $this->render('BoHomeBundle:Absences:edit.html.twig', array(
            'absence' => $absence,
			'employee'=>$employee,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"request",
			'sm'=>"absences",
        ));
    }

    /**
     * Deletes a Absences entity.
     *
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

        return $this->redirectToRoute('home_absences_index');
    }

    /**
     * Creates a form to delete a Absences entity.
     *
     * @param Absences $absence The Absences entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Absences $absence)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('absences_delete', array('id' => $absence->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	private function setActivity($activity){
		return $this->createActivity("Employee Absence",$activity);	
	}
}

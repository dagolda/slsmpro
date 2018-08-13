<?php

namespace Bo\StudentBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Controller\CommonController;

use Bo\AdminBundle\Entity\Absences;
use Bo\AdminBundle\Form\AbsencesType;

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
		$student = $this->getConnectedStudent();
		$this->removeSession();
        $em = $this->getDoctrine()->getManager();
		$this->setActivity("Access to absences section");	
        $absences = $em->getRepository('BoAdminBundle:Absences')->findBy(array('students'=>$student));
        $absence_form = $this->createForm('Bo\AdminBundle\Form\AbsencesType5', new Absences());
        return $this->render('BoStudentBundle:Absences:index.html.twig', array(
            'absences' => $absences,
			'user'=>$this->getTokenUser(),
			'student'=>$student,
			'contract'=>$this->getCurrentStudentContract($student),
			'absence_form' => $absence_form->createView(),
			'pm'=>"request",
			'sm'=>"absences",
        ));
    }
    /**
    * Creates a new Absences entity.
    */
    public function newAction(Request $request)
    {
		$student = $this->getConnectedStudent();
        $absence = new Absences();
		$message=null;
        $form = $this->createForm('Bo\AdminBundle\Form\AbsencesType5', $absence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid() && $student!=null){
			$res = $this->createAbsenceEntity($absence,$student);		
			if($res>0){
				$this->generateTsForAbs($absence);
				$this->setActivity("Creation entity Absence id:".$absence->getId());	
				return $this->redirectToRoute('student_absences_index');
			} 
        }
		
		$this->getTypeMessage("warning","Student not found");
        return $this->render('BoStudentBundle:Absences:new.html.twig', array(
            'absence' => $absence,
			'student'=>$student,
			'message'=> $message,
            'absence_form' => $form->createView(),
			'pm'=>"request",
			'sm'=>"absences",
        ));
    }
	//create absence entity
	private function createAbsenceEntity($absence,$oStudent){
		try{
			$absence->setStudents($oStudent);
			//Set the end date of the absence
			$enddate = $this->getDatePlusBis($absence->getStartdate(),$absence->getNumberday()-1);
			$absence->setEnddate($enddate);
			//Get the student current contract
			$oContract = $this->getCurrentStudentContract($oStudent);
			if($oContract){
				$absence->addContract($oContract);
				//If it's group contract field 1 or field 2
				if($this->getGroupByContract($oContract)!=null and $oGroup=$this->getGroupByContract($oContract)) $absence->addGroup($oGroup);
				//If TBS group 
				elseif($oContract->getGroup() and count($oContract->getStudents())>1) $absence->addGroup($oContract->getGroup());
			}
			if($absence->getNumberday()>0){ 
				$aAbsData =  $this->getArrayAbsLegend($absence);
				$absence->setDayns($aAbsData[1]);
				if($absence->getDayns()>0) $absence->setNoshow(true);
				else $absence->setNoshow(false);
				$absence->setDayabs(intval($absence->getNumberday())-intval($absence->getDayns()));
			}
			$absence->setCreateby($this->getFNConnectedEmployee());
			return $this->updateEntity($absence);
		}catch(Exception $e){
			$this->logger($e->getMessage());
		}
	}
	private function getArrayAbsLegend($absence){
		$startdate = $absence->getStartdate();
		$aLegend = array();
		$numberday = $absence->getNumberday();
		$dayns = 0; //number of noshow day
		$i=0;
		while($i<$numberday){
			$legend = $this->getAbsenceLegende($absence,$startdate);
			if($legend=="N-S") $dayns = $dayns+1; 
			$aLegend[$startdate->format("d-m-Y")] = $legend;
			$startdate = $this->getNextDayBis($startdate);
			$i=$i+1;
		}
		return array($aLegend,$dayns);
	}
    /**
    * Finds and displays a Absences entity.
    */
    public function showAction(Absences $absence)
    {
		$student = $this->getConnectedStudent();
        $deleteForm = $this->createDeleteForm($absence);
		$this->setActivity("Display entity Absence id:".$absence->getId());
		
        return $this->render('BoStudentBundle:Absences:show.html.twig', array(
            'absence' => $absence,
			'student'=>$student,
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
	$student = $this->getConnectedStudent();
        $deleteForm = $this->createDeleteForm($absence);
        $editForm = $this->createForm('Bo\AdminBundle\Form\AbsencesType5', $absence);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$res=$this->updateEntity($absence);
			if($res>0) $this->setActivity("Update entity Absence id:".$absence->getId());	
            return $this->redirectToRoute('student_absences_index');
        }

        return $this->render('BoStudentBundle:Absences:edit.html.twig', array(
            'absence' => $absence,
			'student'=>$student,
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
		$id=$absence->getId();
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($absence);
            $em->flush();
			$this->setActivity("Delete entity Absence id:".$id);
        }

        return $this->redirectToRoute('student_absences_index');
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
            ->setAction($this->generateUrl('student_absences_delete', array('id' => $absence->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	private function setActivity($activity){
		return $this->createActivity("Student Absence",$activity);	
	}
}

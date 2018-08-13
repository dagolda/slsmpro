<?php

namespace Bo\StudentBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Controller\CommonController;

use Bo\AdminBundle\Entity\Timesheet;
use Bo\AdminBundle\Form\TimesheetType;
use Bo\AdminBundle\Entity\TsValidation;

/**
* Timesheet controller.
*/
class TimesheetController extends CommonController
{
    /**
    * Lists all Timesheet entities.
    */
    public function indexAction()
    {
		$this->removeSession();
        $em = $this->getDoctrine()->getManager();
		$timesheets=null;
		$user=$this->getTokenUser();
		$this->setActivity("Access to validation section");	
		$student = $user->getStudents();
		$timesheets = $em->getRepository('BoAdminBundle:Timesheet')->getStudentTs($user->getStudents(),1);	
		
        return $this->render('BoStudentBundle:Timesheet:index.html.twig', array(
            'timesheets' => $timesheets,
			'student'=>$student,
			'user'=>$user,
			'pm'=>"tabeau-bord",
			'sm'=>"timesheet"
        ));
    }

    /**
     * Finds and displays a Timesheet entity.
     */
    public function showAction(Timesheet $timesheet)
    {
        $deleteForm = $this->createDeleteForm($timesheet);
		$this->setActivity("Display validation schedule");	
        return $this->render('BoStudentBundle:Timesheet:show.html.twig', array(
            'timesheet' => $timesheet,
			'pm'=>"tabeau-bord",
			'sm'=>"timesheet"
        ));
    }
    /**
     * Validate an existing Timesheet entity.
	 * for individual contract
     */
    public function validateAction(Request $request, Timesheet $timesheet)
    {
		$user=$this->getTokenUser();
        $validateForm = $this->createValidateForm($timesheet);
        $validateForm->handleRequest($request);
		$message=null;
		if($timesheet->getStatus()==2){
			$message=array('type'=>"Warning",'texte'=>$this->getErrorMessage(13).$timesheet->getId());
			$validated=true;
		}
        if ($validateForm->isSubmitted() && $validateForm->isValid() and !isset($validated)) {
			$timesheet->setStatus(2);
			$res = $this->updateEntity($timesheet);
			if($res>0){
				$oTSV = $this->getTsValidation($timesheet);
				$res=$this->updateEntity($oTSV);
				if($res>0 and $timesheet->getTypets()=="Teaching" and $timesheet->getLegende()!="ABS"){
					$oContract=$timesheet->getContract();
					if($oContract!=null){
						$hour = $this->getRealTime($timesheet->getHour());
						$this->updateUsedHours($oContract,$hour);						
					}
				}				
				$this->setActivity("Schedule id:".$timesheet->getId()." is validated");	
				$message=array('type'=>"Success",'texte'=>$this->getErrorMessage(14).$timesheet->getId());
			}
        }elseif(!$validateForm->isSubmitted()){
			$message=array('type'=>"Info",'texte'=>$this->getErrorMessage(15));
		}
        return $this->render('BoStudentBundle:Timesheet:validate.html.twig', array(
            'timesheet' => $timesheet,
			'message'=>$message,
            'validate_form' => $validateForm->createView(),
			'user'=>$this->getTokenUser(),
			'pm'=>"tabeau-bord",
			'sm'=>"timesheet"
        ));
    }
    /**
     * Validate all existing Timesheet entity for this student.
     */
    public function allvalidateAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
		$timesheets=array();
		$message=null;
		$user=$this->getTokenUser();
		if($user!=null and $user->getStudents()){
			$timesheets = $em->getRepository('BoAdminBundle:Timesheet')->getStudentTs($user->getStudents(),1);
		}
		if(isset($timesheets[0])){
			$validateForm = $this->createAllValidateForm($timesheets[0]);
			$validateForm->handleRequest($request);
			if($this->verifyValidation($timesheets)!=null){
				$message=array('type'=>"Warning",'texte'=>$this->getErrorMessage(16).$this->verifyValidation($timesheets));
				$validated=true;
			}
		}
        if ($validateForm->isSubmitted() && $validateForm->isValid() and !isset($validated)) {
			$aRes=array();
			foreach($timesheets as $timesheet){
				$timesheet->setStatus(2);
				$res = $this->updateEntity($timesheet);
				if($res>0){
					$oTSV = $this->getTsValidation($timesheet);
					$this->updateEntity($oTSV);
					if($timesheet->getTypets()=="Teaching" and $timesheet->getLegende()!="ABS"){
						$oContract=$timesheet->getContract();
						if($oContract!=null){
							$hour = $this->getRealTime($timesheet->getHour());
							$this->updateUsedHours($oContract,$hour);						
						}
					}
					$aRes[]=$timesheet->getId();
				}
			}
			if(count($aRes)== count($timesheets)){
				$this->get('session')->set('message',array('type'=>"Success",'texte'=>$this->getErrorMessage(17).join(',',$aRes)));
				$this->setActivity("All schedules ids:".join(', ',$aRes)." is validated");	
				return $this->redirectToRoute('student_timesheet_index');
			}else{
				$message=array('type'=>"Warning",'texte'=>"Something is wrong. Contact CLIC MANAGER Administrator");			
			}
        }else{
			$message=array('type'=>"Info",'texte'=>$this->getErrorMessage(18));
		}
        return $this->render('BoStudentBundle:Timesheet:allvalidate.html.twig', array(
            'timesheets' => $timesheets,
			'message'=>$message,
            'validate_form' => $validateForm->createView(),
			'user'=>$this->getTokenUser(),
			'pm'=>"tabeau-bord",
			'sm'=>"timesheet"
        ));
    }
	private function verifyValidation($aTimesheet){
		$aRes=null;
		foreach($aTimesheet as $oTimesheet){
			if($oTimesheet->getStatus()==2){
				$aRes[]=$oTimesheet->getId();
			}
		}
		if($aRes!=null) return join(",",$aRes);
		return $aRes;
	}
    /**
     * Creates a form to validate a Timesheet entity.
     * @param Timesheet $timesheet The Timesheet entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createValidateForm(Timesheet $timesheet)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('student_timesheet_validate', array('id' => $timesheet->getId())))
            ->getForm()
        ;
    }	
    /**
     * Creates a form to validate a Timesheet entity.
     * @param Timesheet $timesheet The Timesheet entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createAllValidateForm(Timesheet $timesheet)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('student_timesheet_allvalidate'))
            ->getForm()
        ;
    }
	private function getTsValidation($oTS,$option=null){
		$sCanal = $option==null?"System":"Mail";
		$user=$this->getTokenUser();
		$oTSV = new TsValidation();
		$oTSV->setCanal($sCanal);
		$oTSV->setStatus($oTS->getStatus());
		$oTSV->setMotif("Student");
		$oTSV->setTimesheet($oTS);
		$oTSV->setValidator($user->getStudents()->getFirstname()." ".$user->getStudents()->getName());
		return $oTSV;
	}
	private function setActivity($activity){
		return $this->createActivity("Student Schedule",$activity);	
	}
}

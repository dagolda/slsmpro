<?php

namespace Bo\StudentBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Controller\CommonController;

use Bo\AdminBundle\Entity\TsStudent;
use Bo\AdminBundle\Form\TsStudentType;
use Bo\AdminBundle\Entity\Timesheet;
use Bo\AdminBundle\Form\TimesheetType;
use Bo\AdminBundle\Entity\TsValidation;

/**
 * TsStudent controller.
 */
class TsStudentController extends CommonController
{
    /**
     * Lists all TsStudent entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tsStudents = $em->getRepository('BoAdminBundle:TsStudent')->findAll();

        return $this->render('tsstudent/index.html.twig', array(
            'tsStudents' => $tsStudents,
        ));
    }

    /**
     * Finds and displays a TsStudent entity.
     *
     */
    public function showAction(TsStudent $tsStudent)
    {
        $deleteForm = $this->createDeleteForm($tsStudent);

        return $this->render('tsstudent/show.html.twig', array(
            'tsStudent' => $tsStudent,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Validate an existing TsStudent entity.
     */
    public function validateAction(Request $request, TsStudent $tsStudent)
    {
		$user=$this->getTokenUser();
        $validateForm = $this->createValidateForm($tsStudent);
        $validateForm->handleRequest($request);
		$message=null;
		if($tsStudent->getStatus()==2){
			$message=array('type'=>"Warning",'texte'=>$this->getErrorMessage(13).$tsStudent->getTimesheet()->getId());
			$validated=true;
		}
        if ($validateForm->isSubmitted() && $validateForm->isValid() and !isset($validated)) {
			$tsStudent->setStatus(2);
			$res = $this->updateEntity($tsStudent);
			if($res>0){
				$this->manageValidation($tsStudent);
				$this->setActivity("Schedule id:".$tsStudent->getId()." is validated");	
				$message=array('type'=>"Success",'texte'=>$this->getErrorMessage(14).$tsStudent->getTimesheet()->getId());
			}
        }elseif(!$validateForm->isSubmitted()){
			$message=array('type'=>"Info",'texte'=>$this->getErrorMessage(15));
		}
        return $this->render('BoStudentBundle:TsStudent:validate.html.twig', array(
            'tsstudent' => $tsStudent,
			'message'=>$message,
            'validate_form' => $validateForm->createView(),
			'user'=>$this->getTokenUser(),
			'pm'=>"tabeau-bord",
			'sm'=>"timesheet"
        ));
    }
    /**
     * Validate all existing TsStudent entity for this student.
     */
    public function allvalidateAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
		$tsStudents=array();
		$message=null;
		$user=$this->getTokenUser();
		if($user!=null and $user->getStudents()){
			$tsStudents = $em->getRepository('BoAdminBundle:Timesheet')->getGroupTs($user->getStudents(),1);
		}
		if(isset($tsStudents[0])){
			$validateForm = $this->createAllValidateForm($tsStudents[0]);
			$validateForm->handleRequest($request);
			if($this->verifyValidation($tsStudents)!=null){
				$message=array('type'=>"Warning",'texte'=>"Those given courses ".$this->verifyValidation($tsStudents)." is already validated.");
				$validated=true;
			}
		}
        if ($validateForm->isSubmitted() && $validateForm->isValid() and !isset($validated)) {
			$aRes=array();
			foreach($tsStudents as $tsStudent){
				$tsStudent->setStatus(2);
				$res = $this->updateEntity($tsStudent);
				if($res>0){
					$this->manageValidation($tsStudent);
					$aRes[]=$tsStudent->getId();
				}
			}
			if(count($aRes)== count($tsStudents)){
				$this->get('session')->set('message',array('type'=>"Success",'texte'=>"Schedules ids : ".join(',',$aRes)." are validated successfully."));
				$this->setActivity("All schedules ids:".join(',',$aRes)." is validated");	
				return $this->redirectToRoute('student_timesheet_index');
			}else{
				$message=array('type'=>"Warning",'texte'=>"Something is wrong. Contact CLIC MANAGER Administrator");			
			}
        }else{$message=array('type'=>"Info",'texte'=>"Thank you to click the 'Confirm' button to validate all");}
        return $this->render('BoStudentBundle:TsStudent:allvalidate.html.twig', array(
            'timesheets' => $tsStudents,
			'message'=>$message,
            'validate_form' => $validateForm->createView(),
			'user'=>$this->getTokenUser(),
			'pm'=>"tabeau-bord",
			'sm'=>"timesheet"
        ));
    }
	private function verifyValidation($aTsStudent){
		$aRes=null;
		foreach($aTsStudent as $oTsStudent){
			if($oTsStudent->getTimesheet()->getStatus()==2){
				$aRes[]=$oTsStudent->getTimesheet()->getId();
			}
		}
		if($aRes!=null) return join(",",$aRes);
		return $aRes;
	}
    /**
     * Creates a form to validate a Timesheet entity.
     * @param Timesheet $tsStudent The Timesheet entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createValidateForm(TsStudent $tsStudent)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tsstudent_validate', array('id' => $tsStudent->getId())))
            ->getForm()
        ;
    }	
    /**
     * Creates a form to validate a TsStudent entity.
     * @param TsStudent $tsStudent The TsStudent entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createAllValidateForm(TsStudent $tsStudent)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tsstudent_allvalidate'))
            ->getForm()
        ;
    }
	private function setTsValidation($oTS,$option=null){
		$sCanal = $option==null?"System":"Mail";
		$user=$this->getTokenUser();
		$oTSV = new TsValidation();
		$oTSV->setCanal($sCanal);
		$oTSV->setStatus($oTS->getStatus());
		$oTSV->setMotif("Student");
		$oTSV->setTimesheet($oTS->getTimesheet());
		$oTSV->setValidator($user->getStudents()->getFirstname()." ".$user->getStudents()->getName());
		$res = $this->updateEntity($oTSV);
		return $res;
	}
	private function manageValidation($oTsStudent){
		$em = $this->getDoctrine()->getManager();
		//Save validator's informations
		$this->setTsValidation($oTsStudent);
		//Get all sub timesheets bound to the main timesheet
        $tsStudents = $em->getRepository('BoAdminBundle:TsStudent')->findByTimesheet(array('timesheet'=>$oTsStudent->getTimesheet()));
		//If all timesheet of the group are validated then update the timesheet's status
		if($this->verifyAllValidation($tsStudents)==true){
			$oTsStudent->getTimesheet()->setStatus(2);
			//La créqtion de la facturation doit se faire pour chaque contrat
			$this->createBilling($oTsStudent->getTimesheet());	
			/*L'accumulation des heures consommées doit se faire pour chaque contrats
			* Récupérer les distincts contrats des apprenants et pour chaque contrat mettre à jour le compteur des heures consommées 
			$oContract=$timesheet->getContract();
			if($oContract!=null){
				$hour = $this->getRealTime($timesheet->getHour());
				$this->updateUsedHours($oContract,$hour)						
			}
			*/
			return $this->updateEntity($oTsStudent->getTimesheet());
		}
		return false;
	}
	//Verify if all timesheets are validated for the group
	private function verifyAllValidation($tsStudents){
		foreach($tsStudents as $oTsStudent){
			if($oTsStudent->getStatus()==1){
				return false;
			}
		}
		return true;
	}
	private function setActivity($activity){
		return $this->createActivity("Student Schedule",$activity);	
	}
}

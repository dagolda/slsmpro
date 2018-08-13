<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Schedule;
use Bo\AdminBundle\Form\ScheduleType;

/**
 * Schedule controller.
 *
 */
class ScheduleController extends Controller
{
    /**
     * Lists all Schedule entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $schedules = $em->getRepository('BoAdminBundle:Schedule')->findAll();

        return $this->render('schedule/index.html.twig', array(
            'schedules' => $schedules,
        ));
    }
    public function newAction(Request $request)
    {
		//Initializing
		$locals=$message=$idteacher=$idlocal=$teachers=null;
		$em = $this->getDoctrine()->getManager();
		$idcontract = $this->get('session')->get('idcontracts');
		$oContract = $em->getRepository('BoAdminBundle:Contracts')->find($idcontract);
		$aSchedule=$em->getRepository('BoAdminBundle:ContractSchedule')->findByIdcontracts($idcontract);
		$schedule=$this->initializeSchedule($idcontract);
        $form = $this->createForm('Bo\AdminBundle\Form\ScheduleType', $schedule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$idteacheram = $request->request->get("amteachers");
			$idteacherpm = $request->request->get("pmteachers");
			$idlocal = $request->request->get("local");
			if($oContract->getCampus() and $idlocal>0){
				$oLocals = $em->getRepository('BoAdminBundle:Local')->find($idlocal);
				$oContract->addLocal($oLocals);
				$schedule->setLocal($idlocal);
				$valid_local=true;
			}elseif(!$oContract->getCampus() and $idlocal==0){
				$valid_local=true;
			}
			if($idteachersam>0 or $idteacherspm>0){
				if($idteachersam>0){
					$oTeachersam = $em->getRepository('BoAdminBundle:Teachers')->find($idteachersam);
					$oContract->addTeacher($oTeachersam);
					$schedule->setLocal($idteachersam);
					$valid_teacher=true;
				} 
				if($idteacherspm>0){
					$oTeacherspm = $em->getRepository('BoAdminBundle:Teachers')->find($idteacherspm);
					$oContract->addTeacher($oTeacherspm);
					$schedule->setLocal($idteacherspm);
					$valid_teacher=true;
				} 
			}
			if($valid_local==true and $valid_teacher=true){
				$res1 = $this->updateEntity($oContract);
				$res2 = $this->updateEntity($schedule);
				return $this->redirectToRoute('contracts_show', array('id' => $idcontract));
			}elseif($valid_teacher==false){
				$message="Impossible to schedule this contract. Please verify if you have selected a teacher in the form.";
			}elseif($valid_local==false){
				$message="Impossible to schedule this contract. Please verify if you have selected a local in the form.";
			}else{
				$message="Something is wrong in your form. Please contact SLS MANAGER administrator.";
			}
        }
        return $this->render('schedule/new.html.twig', array(
			'teachers'=>$teachers,
			'locals'=>$locals,
			'message'=>array('type'=>"Warning",'texte'=>$message),
			'idcontract'=>$idcontract,
			'idlocal'=>$idlocal,
			'idteacher'=>$idteacher,
            'form' => $form->createView(),
			'pm'=>"contracts",
			'sm'=>"contracts",
        ));
    }
    /**
    * New a new Schedule entity.
    */
	/*
    public function newAction(Request $request)
    {
		//Initializing
		$locals=$message=$idteacher=$idlocal=$teachers=null;
		$em = $this->getDoctrine()->getManager();
		$idcontract = $this->get('session')->get('idcontracts');
		$oContract = $em->getRepository('BoAdminBundle:Contracts')->find($idcontract);
		$aSchedule=$em->getRepository('BoAdminBundle:ContractSchedule')->findByIdcontracts($idcontract);
		echo count($aSchedule);
		exit(0);
		$aTeachers = $oContract->getEmployee();
		if($oContract->getTypecontract()) $teachers = $em->getRepository('BoAdminBundle:Teachers')->getAvailable($oContract);
		$valid_local=false;
		$valid_teacher=false;
		if($oContract->getCampus()){
			$locals = $em->getRepository('BoAdminBundle:Local')->getAvailable($oContract);
		}else{
			$valid_local=true;
		}
		$schedule=$this->initializeSchedule($idcontract);
        $form = $this->createForm('Bo\AdminBundle\Form\ScheduleType', $schedule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$idteacheram = $request->request->get("amteachers");
			$idteacherpm = $request->request->get("pmteachers");
			$idlocal = $request->request->get("local");
			if($oContract->getCampus() and $idlocal>0){
				$oLocals = $em->getRepository('BoAdminBundle:Local')->find($idlocal);
				$oContract->addLocal($oLocals);
				$schedule->setLocal($idlocal);
				$valid_local=true;
			}elseif(!$oContract->getCampus() and $idlocal==0){
				$valid_local=true;
			}
			if($idteachersam>0 or $idteacherspm>0){
				if($idteachersam>0){
					$oTeachersam = $em->getRepository('BoAdminBundle:Teachers')->find($idteachersam);
					$oContract->addTeacher($oTeachersam);
					$schedule->setLocal($idteachersam);
					$valid_teacher=true;
				} 
				if($idteacherspm>0){
					$oTeacherspm = $em->getRepository('BoAdminBundle:Teachers')->find($idteacherspm);
					$oContract->addTeacher($oTeacherspm);
					$schedule->setLocal($idteacherspm);
					$valid_teacher=true;
				} 
			}
			if($valid_local==true and $valid_teacher=true){
				$res1 = $this->updateEntity($oContract);
				$res2 = $this->updateEntity($schedule);
				return $this->redirectToRoute('contracts_show', array('id' => $idcontract));
			}elseif($valid_teacher==false){
				$message="Impossible to schedule this contract. Please verify if you have selected a teacher in the form.";
			}elseif($valid_local==false){
				$message="Impossible to schedule this contract. Please verify if you have selected a local in the form.";
			}else{
				$message="Something is wrong in your form. Please contact SLS MANAGER administrator.";
			}
        }
        return $this->render('schedule/new.html.twig', array(
			'teachers'=>$teachers,
			'locals'=>$locals,
			'message'=>array('type'=>"Warning",'texte'=>$message),
			'idcontract'=>$idcontract,
			'idlocal'=>$idlocal,
			'idteacher'=>$idteacher,
            'form' => $form->createView(),
			'pm'=>"contracts",
			'sm'=>"contracts",
        ));
    }
	*/
    /**
    * New a new Schedule entity.
    */
    public function createAction(Request $request,$idcontract)
    {
		$em = $this->getDoctrine()->getManager();
		$res=$this->createEvents($idcontract);
		print_r($res);
		exit(0);

        return $this->render('BoHomeBundle:Schedule:create.html.twig', array(
			'pm'=>"contracts",
			'sm'=>"contracts",
        ));
    }

    /**
     * Finds and displays a Schedule entity.
     *
     */
    public function showAction(Schedule $schedule)
    {
        $deleteForm = $this->createDeleteForm($schedule);

        return $this->render('schedule/show.html.twig', array(
            'schedule' => $schedule,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Schedule entity.
     *
     */
    public function editAction(Request $request, Schedule $schedule)
    {
        $deleteForm = $this->createDeleteForm($schedule);
        $editForm = $this->createForm('Bo\AdminBundle\Form\ScheduleType', $schedule);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($schedule);
            $em->flush();

            return $this->redirectToRoute('schedule_edit', array('id' => $schedule->getId()));
        }

        return $this->render('schedule/edit.html.twig', array(
            'schedule' => $schedule,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Schedule entity.
     *
     */
    public function deleteAction(Request $request, Schedule $schedule)
    {
        $form = $this->createDeleteForm($schedule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($schedule);
            $em->flush();
        }

        return $this->redirectToRoute('schedule_index');
    }

    /**
     * Creates a form to delete a Schedule entity.
     * @param Schedule $schedule The Schedule entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Schedule $schedule)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('schedule_delete', array('id' => $schedule->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	public function createEvents($idcontract){
		date_default_timezone_set('America/Los_Angeles');
		$em = $this->getDoctrine()->getManager();
		$oRepContract=$em->getRepository('BoAdminBundle:Contracts');
		$oRepCS=$em->getRepository('BoAdminBundle:ContractSchedule');
		$oContract = $oRepContract->find($idcontract);
		$locals = $oContract->getLocal();
		if($oContract){
			$hoursnumber=$oContract->getHoursnumber();
			$startdate=$oContract->getStartdate();
			$enddate=$oContract->getEnddate();
			$teachers = $oContract->getTeachers();
			$oSchedule=$teachers[0]->getSchedule();
			$aSchedule=$oRepCS->findBy(array('idcontracts'=>$idcontract));
			if($aSchedule[0]){
				$oSchedule=$aSchedule[0];
				$numberday=intval($hoursnumber)/intval($oSchedule->getHourperday());
				$aDate=$this->getEventArrayDate($numberday,$startdate,$enddate);
				if(count($aDate)==$numberday){
					$res=0;
					foreach($aDate as $ddate){
						$res += $this->persistEvent($oSchedule,$oContract,$oSchedule,$locals,$ddate);
					}
					if($res==0) return $res;
					return array('numberday'=>$numberday,'startdate'=>$aDate[0],'enddate'=>$aDate[$numberday-1]);
				}else{
					$message="Impossible to schedule. Verify if ";
				}
			}else{
				$message="Impossible to find initial schedule. ";		
			}
		}else{
			$message="Impossible to find the contract. ";			
		}
		return $message;
	}
	private function persistEvent($schedule,$oContract,$local,$ddate){
		$aSchedule = $this->getExistEvents($schedule,$oContract,$local,$ddate);
		if(isset($aSchedule[0])) return 0;
		$oEvent = new Events();
		$oEvent->setEventtype(1);//1: Course
		if(isset($local[0])) $oEvent->setLocal($local[0]);
		$oEvent->setStartam($schedule->getStartam());
		$oEvent->setStartpm($schedule->getStartpm());
		$oEvent->setEndam($schedule->getEndam());
		$oEvent->setEndpm($schedule->getEndpm());	
		$oEvent->setHour($schedule->getHourperday());
		$oEvent->setDdate($ddate);		
		$oTsweek = $this->getTsWeek($ddate);
		$oEvent->setTsweek($oTsweek);
		$oEvent->setContract($oContract);	
		$oEvent->setSchedule($oSchedule);
		$em = $this->getDoctrine()->getManager();
		$em->persist($oEvent);
		$em->flush();
		return 1;
	}
	public function getExistEvents($oSchedule,$oContract,$locals,$ddate){
		$qb = $this->getDoctrine()->getManager()->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Events', 'a')
			->join('a.contract', 'b')
			->join('a.employee', 'c')
			->where("b.id =:idcontract and a.ddate=:ddate and c.id=:idemployee" )
			->setParameters(array('idcontract'=>$oContract->getId(),'idemployee'=>$oSchedule->getId(),'ddate'=>$ddate,));
		$query = $qb->getQuery();
		return $query->getResult();	
	}
	private function initializeSchedule($idcontract){
		$schedule = new Schedule();
		if($idcontract>0) $schedule->setIdcontracts($idcontract);
		return $schedule;
	}
    /**
    * Creates a new Schedule entity.
    */
    public function newbatchAction(Request $request)
    {
		set_time_limit(3800);
        $batch = new Batch();
        $form = $this->createForm('Bo\AdminBundle\Form\BatchType', $batch);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$text = $batch->getText();
			$aText = explode("#",$text);
			$aRes=array();
			foreach($aText as $sText){
				if($sText==null) continue;
				$em = $this->getDoctrine()->getManager();
				$asText = explode(";",$sText);
				if((isset($asText[0]) and $asText[0]==null) or (isset($asText[1]) and $asText[1]==null) or (isset($asText[7]) and $asText[7]==null)){
					continue;
					$aRes[]=$sText;
				}
				$employee = new Schedule();
				if(isset($asText[0])) $employee->setName($asText[0]);
				if(isset($asText[1])) $employee->setFirstname($asText[1]);
				if(isset($asText[2])){
					$oStatus= $em->getRepository('BoAdminBundle:Status')->find($asText[2]);
					$employee->setStatus($oStatus);
				}
				//Active
				if(isset($asText[3]) and $asText[3]=="OUI") $employee->setActive(1);
				else $employee->setActive(0); 
				if(isset($asText[5])) $employee->setCellnumber($asText[5]);
				if(isset($asText[6])) $employee->setHomenumber($asText[6]);
				if(isset($asText[7])) $employee->setEmail($asText[7]);
				if(isset($asText[8])) $employee->setAddress1($asText[8]);
				if(isset($asText[9]) and $asText[9]=="OUI") $employee->setSecuritycote(1);
				else $employee->setSecuritycote(0); 
				if(isset($asText[4])){
					if(isset($asText[4]) and $asText[4]!=null and $asText[4]=="F") $employee->setLanguage("French");
					elseif($asText[4]!=null and $asText[4]=="A") $employee->setLanguage("English");
					else $employee->setLanguage("English-French");
				}
				$res = $this->updateEntity($employee);
				if($res!=null) $this->createActivity("Schedule",$employee->getName()." ".$employee->getFirstname()." is Created");
			}
			return $this->render('employee/resbatch.html.twig', array(
				'res' => $aRes,
				'pm'=>"employee",
				'sm'=>"employee",
			));
        }

        return $this->render('employee/newbatch.html.twig', array(
            'batch' => $batch,
            'form' => $form->createView(),
			'pm'=>"employee",
			'sm'=>"employee",
        ));
    }
}

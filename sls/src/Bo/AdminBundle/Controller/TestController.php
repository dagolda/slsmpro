<?php
namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use Bo\AdminBundle\Entity\Local;
use Bo\AdminBundle\Form\LocalType;

use Bo\AdminBundle\Entity\Batch;
use Bo\AdminBundle\Form\BatchType;
use Bo\AdminBundle\Libs\PHPExcel\Factory;

/**
* Local controller.
*/

class TestController extends CommonController
{
    /**
    * Lists all Local entities.
    */
    public function indexAction()
    {
		$start=new \DateTime("2017-02-01");
		$end=new \DateTime("2017-02-28");	
		$number = $this->getNumberDay($start,$end);
		echo $number;
		exit(0);
		$em = $this->getDoctrine()->getManager();
		$oRep = $em->getRepository('BoAdminBundle:Prices');
		$typecontract = $em->getRepository('BoAdminBundle:Typecontract')->find(1);
		$field = $em->getRepository('BoAdminBundle:Workfields')->find(1);
		$language="French";
		$privateorgroup="Group";
		$ftorpt = "Full time";
		$aResult = $oRep->getPrices($typecontract,$ftorpt,$privateorgroup,$language,$field);
		echo count($aResult);
		exit(0);
		/*
		$month = "January";
		$year = "Year";
		$type = 1;
		$status = 1;
		$idemployee = 145;
		$employee = $idemployee>0?$em->getRepository('BoAdminBundle:Employee')->find($idemployee):null;
		$oPP = $this->getPPByMonthAndYear($month,$year);
		if($oPP){
			$timesheets = $em->getRepository('BoAdminBundle:Timesheet')->getPeriodTimesheet($employee,$oPP,$status,$type);			
		}else{
			$timesheets = array();
		}
		echo count($timesheets);
		exit(0);
		*/
    }
    public function generatetsAction(){
		$aSchedule = $this->getAllSchedule();
		$aContracts = $this->getContractBySchedule($aSchedule);
		/*
		foreach($aContracts as $oContracts){
			echo $oContracts->getId()."<br>";
		}
		exit(0);
		*/
		$this->generateTsForAllContract($aContracts);
		$aContracts = $this->getContractBySchedule($aSchedule);
        return $this->render('BoAdminBundle:Test:contracts.html.twig', array(
		    'schedules' => $aSchedule,
            'contracts' => $aContracts,
			'pm'=>"accounting",
			'sm'=>"ts_employee",
        ));
		
	}
	private function getAllSchedules(){
		$em = $this->getDoctrine()->getManager();
		$oRepTSc = $em->getRepository('BoAdminBundle:Agenda');	
		$aTSC = array(29,52,105,110,348,349,350);	
		foreach($aTSC as $iTSC){
			$oSchedule = $oRepTSc->find($iTSC);
			$aSchedule[$oSchedule->getIdcontracts()] = $oSchedule;
		}
		return $aSchedule; 
	}
	
}

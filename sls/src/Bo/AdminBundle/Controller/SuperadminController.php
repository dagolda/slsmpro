<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Employee;
use Bo\AdminBundle\Form\EmployeeType;

/**
* Superadmin controller.
*/
class SuperadminController extends CommonController
{
    public function updateAction()
    {	
        $em = $this->getDoctrine()->getManager();
        $employees = $em->getRepository('BoAdminBundle:Employee')->findAll();
		$i=0;
		foreach($employees as $oEmployee){
			$oEmployee->setName($oEmployee->getFirstname());
			$oEmployee->setFirstname($oEmployee->getName());
			$em->persist($oEmployee);
			$em->flush();
			$i=$i+1;
		}
        return $this->render('employee/update.html.twig', array(
            'i' => $i,
			'pm'=>"personnel",
			'sm'=>"employee",
        ));
    }
    public function contractAction()
    {	
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('BoAdminBundle:Contracts')->findAll();
		$i=0;
		foreach($entities as $entity){
			if($entity->getStatus()==2){
				echo $entity->getId()."-".$entity->getContractnumber()."<br>";				
			}
			/*
			if($entity->getStatus()==1 and $entity->getStartdate()>new \DateTime()){
				$entity->setStatus(2);
				$this->updateEntity($entity);				
			}
			*/
		}
		exit(0);
    }
    /**
    * Creates a new batch Contracts entity TBS
    */
    public function newbatchAction(Request $request)
    {
		$oCem = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Contracts');
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
				print_r($asText);
				exit(0);
				if((isset($asText[0]) and $asText[0]==null) or (isset($asText[1]) and $asText[1]==null) or (isset($asText[9]) and $asText[9]==null) or (isset($asText[10]) and $asText[10]==null)){
					continue;
					$aRes[]=$sText;
				}
				$contracts = new Contracts();
				$contracts->setLocation("Campus");
				$oCampus = $em->getRepository('BoAdminBundle:Campus')->find(1);
				$contracts->setCampus($oCampus);
				$contracts->setLanguage("French");
				$contracts->setTypeoftraining("PR");
				$datenow = new \DateTime();
				//$asText[0]=>Student Name ou Group

				if(isset($asText[0])){
					$aGroups = $em->getRepository('BoAdminBundle:Group')->findByName(trim($asText[0]));
					if(isset($aGroups[0]) and count($aGroups)==1){
						$oGroup=$aGroups[0];
						$contracts->setGroup($oGroup);
					}elseif(!isset($aGroups[0])){
						$group = new Group();
						$group->setName($asText[0]);
						if($enddate>$datenow) $group->setStatus(1);
						else $group->setStatus(0);
						$res = $this->updateEntity($group);
						$contracts->setGroup($group);
					}
				}

				//$asText[1] => Department example TBS ici type de contrat ou client;
				if(isset($asText[1])){
					$aTcontract = $em->getRepository('BoAdminBundle:Typecontract')->findByReference(trim($asText[1]));
					if(isset($aTcontract[0]) and count($aTcontract)==1){
						$contracts->setTypecontract($aTcontract[0]);
					}
					$aClient = $em->getRepository('BoAdminBundle:Client')->findByReference(trim($asText[1]));
					if(isset($aClient[0]) and count($aClient)==1){
						$contracts->setClient($aClient[0]);
					}
				}
				//$asText[2] => Date we RECEIVED the contract;				
				if(isset($asText[2]) and $asText[2]!=null){
					$receivedate=$this->formatDateTime(trim($asText[2]));
					$contracts->setReceivedate($receivedate);
				}
				//$asText[3] => Numéro de l'Offre à Commandes;
				if(isset($asText[3]) and $asText[3]!=null) $contracts->setOrdernumber($asText[3]);
				//$asText[4] => Méthode d'approvisionnement;
				if(isset($asText[4])) $contracts->setMethodofsupply($asText[4]);
				//$asText[5] => No. de l'AT ou Contrat autorisé;				
				if(isset($asText[5])) $contracts->setContractnumber($asText[5]);
				//$asText[6] => Date de l'AT ou contrat;					
				if(isset($asText[6]) and $asText[6]!=null){
					$contractdate=$this->formatDateTime(trim($asText[6]));
					$contracts->setContractdate($contractdate);
				}
				//$asText[7] => AT ou contrat signé par CLIC en date du;					
				if(isset($asText[7]) and $asText[7]!=null){
					$signaturedate=$this->formatDateTime(trim($asText[7]));
					$contracts->setClicsignaturedate($signaturedate);
				}
				//$asText[8] => AT ou contrat signé par le ministère en date du;	
				if(isset($asText[8]) and $asText[8]!=null){
					$signaturedate=$this->formatDateTime(trim($asText[8]));
					$contracts->setClientsignaturedate($signaturedate);
				}
				//$asText[9] => Start Date;	
				if(isset($asText[9]) and $asText[9]!=null){
					$startdate=$this->formatDateTime(trim($asText[9]));
					$contracts->setStartDate($startdate);
				}
				//$asText[10] => End Date;	
				if(isset($asText[10]) and $asText[10]!=null){
					$enddate=$this->formatDateTime(trim($asText[10]));
					$contracts->setEnddate($enddate);
				}
				//$asText[11] =>Pedagogical Contact for Dept.;
				if(isset($asText[11])){
					$aCoordinators = $em->getRepository('BoAdminBundle:Coordinator')->findByEmail(trim($asText[12]));
					if(isset($aCoordinators[0]) and count($aCoordinators)==1){
						$oCoordinator=$aCoordinators[0];
						$contracts->setCoordinator($oCoordinator);
					}elseif(!isset($aCoordinators[0])){
						$coordinators = new Coordinator();
						$coordinators->setName($asText[11]);
						//$asText[12] =>Pedagogical email for Dept.;
						if(isset($asText[12])) $coordinators->setEmail($asText[12]);
						//$asText[13] =>Pedagogical phone for Dept.;
						if(isset($asText[13])) $coordinators->setPhone($asText[13]);
						$res = $this->updateEntity($coordinators);
						$contracts->setCoordinator($coordinators);
					}
				}
				//$asText[14] =>Billing Contact for Dept.;
				if(isset($asText[14])){
					$aBillingContact = $em->getRepository('BoAdminBundle:BillingContact')->findByEmail(trim($asText[15]));
					if(isset($aBillingContact[0]) and count($aBillingContact)==1){
						$oBillingContact=$aBillingContact[0];
						$contracts->setBillingContact($oBillingContact);
					}elseif(!isset($aBillingContact[0])){
						$billingContact = new BillingContact();
						$billingContact->setName($asText[14]);
						//$asText[15] =>Billing Contact email for Dept.;
						if(isset($asText[15])) $billingContact->setEmail($asText[15]);
						//$asText[16] =>Billing Contact phone for Dept.;
						if(isset($asText[16])) $billingContact->setPhone($asText[16]);
						$res = $this->updateEntity($billingContact);
						$contracts->setBillingContact($billingContact);
					}
				}
				//$asText[17] =>schedule;				
				if(isset($asText[17])){
					$contracts->setSchedule($asText[17]);
				}
				//$asText[18] =>Estimated cost;				
				if(isset($asText[18])){
					$contracts->setEstimatedcost($asText[18]);
				}
				//$asText[19] =>Number of hours;		
				if(isset($asText[19])){
					$aHour = explode(" ",$asText[19]);
					if(isset($aHour[0])) $contracts->setHoursnumber(intval($aHour[0]));
					else{
						$aHour = explode("hrs",$asText[19]);
						if(isset($aHour[0])) $contracts->setHoursnumber(intval($aHour[0]));
					}
				}
				//$asText[20] =>Hoursly rate;
				if(isset($asText[20])){
					$contracts->setHourlyrate(intval($asText[20]));
				}
				//$asText[21] =>Type Time;
				if(isset($asText[21])){
					$contracts->setTypetime(intval($asText[21]));
				}
				$res = $this->updateEntity($contracts);
			}
			return $this->render('contracts/resbatch.html.twig', array(
				'res' => $aRes,
				'pm'=>"contracts",
				'sm'=>"contracts",
			));
        }

        return $this->render('contracts/newbatch.html.twig', array(
            'batch' => $batch,
            'form' => $form->createView(),
			'pm'=>"contracts",
			'sm'=>"contracts",
        ));
    }
}

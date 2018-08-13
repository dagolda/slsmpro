<?php

namespace Bo\HomeBundle\Controller;

use Bo\AdminBundle\Controller\CommonController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Bo\AdminBundle\Entity\Substitution;
use Bo\AdminBundle\Entity\Emppj;
use Bo\AdminBundle\Form\EmppjType;

class ContractsController extends CommonController
{
	    public function showAction(Request $request)
	    {
			$this->removeSession();
			$em = $this->getDoctrine()->getManager();
			$oRepTs = $em->getRepository('BoAdminBundle:Timesheet');
			$oRepAbs = $em->getRepository('BoAdminBundle:Absences');
			$oRepSub = $em->getRepository('BoAdminBundle:Substitution');
			$ContractEntity = $em->getRepository('BoAdminBundle:Contracts');
			$oTCEntity =$em->getRepository('BoAdminBundle:Agenda');
			$today = new \DateTime(date("d-m-Y"));
			$this->setUserLocale($request->getLocale());
			$aStudents=$sTraining=$aTeacherSchedule=$oContract=$aGroup=$oGroup=$aTSC=$aTSG=$aExistContAbsence=$aExistGroupAbsence=null;
			//Récupérer les information de l'utilisateur connecté
			$employee = $this->getConnectedEmployee();
			if(!$employee){
				$this->setSessionByName('data',array('pm'=>"tabeau-bord",'sm'=>"contract"));
				return $this->redirectToRoute('bo_home_broken');	
			}
			$aGroup = $this->getGroupsBy($employee);
			$aExistTsGroup = $oRepTs->getExistTsGroup($aGroup,$employee,$today);
			$aContract = $this->getContractsBy($employee);
			$aExistTsContract = $oRepTs->getExistTsContract($aContract,$employee,$today);
			if(isset($aContract[0])){
				//Get array of object of teacher schedule with contract id as key 
				$aTSC = $oTCEntity->getTeacherScheduleBis($aContract,$employee);
				//Get array of boolean with contract id as key, 1 if there exists absence for this contracts and date of day
				//display action if there deos not exist the contract id as key of array
				$aExistContAbsence = $this->getContratAbsences($employee,$aTSC);
			}
			if(isset($aGroup[0])){
				$aGroupContract = $em->getRepository('BoAdminBundle:Contracts')->findByGroup($aGroup[0]);
				//Get array of object of teacher schedule with contract id as key 
				$aTSG = $oTCEntity->getTScForGroups($aGroup,$employee);	
				//Get array of boolean with contract id as key, 1 if there exists absence for this contracts and date of day
				//display action if there deos not exist the contract id as key of array
				$aExistGroupAbsence = $this->getGroupAbsences($employee,$aTSG);			
			} 
			//$aSubByContract is the array of the substitution for the exixsting contracts
			//If it exist a substitution for a contract, the "AddTs" will be disable for this line of this contract		
			$aSubByContract = $oRepSub->getByContracts($aContract,$employee);
			//$aSubByGroup is the array of the substitution for the exixsting group
			//If it exist a substitution for a group, the "AddTs" will be disable for the line of this group
			$aSubByGroup = $oRepSub->getByContracts($aGroup,$employee);
			//Verify if the teacher is authoriwed to change the form date
			$tsdateautho = $this->getTsDateAuthorized($employee);
			$this->setActivity("Access to dashboard");		
			return $this->render('BoHomeBundle:Contracts:contract.html.twig',array(
				'user'=>$this->getTokenUser(),
				'contracts'=> $aContract,
				'etsc'=>$aExistTsContract,
				'etsg'=>$aExistTsGroup,
				'existcontabs'=>$aExistContAbsence,
				'existgroupabs'=>$aExistGroupAbsence,
				'gcontracts'=>isset($aGroupContract[0])?$aGroupContract:null,
				'groups'=>$aGroup,
				'employee'=>$employee,
				'subcontr'=>$aSubByContract,
				'abscont'=>$this->getEmployeeTodayAbsences($employee),
				'subgroup'=>$aSubByGroup,
				'dtsbc'=>$this->getDtsb($aTSC,1),//Display creation timesheet bouton for contract, if 1 display else hide it
				'dtsbg'=>$this->getDtsb($aTSG,2),//Display creation timesheet bouton for group, if 1 display else hide it
				//'cth'=>$this->getCreatingTsHour(),//cth is the time when the teacher can do the timesheet 
				'authorization'=>$tsdateautho,
				'now'=>$today,
				'students'=>$aStudents,
				'tsc'=>$aTSC,//Teacher Schedule for contracts
				'tsg'=>$aTSG,//Teacher Schedule for groups
				'pm'=>"contracts",
				'sm'=>"contract",			
			));
	    }
	private function setActivity($activity){
		return $this->createActivity("Teacher Contracts",$activity);	
	}
}

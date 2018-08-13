<?php

namespace Bo\AdvisorsBundle\Controller;

use Bo\AdminBundle\Controller\CommonController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends CommonController
{
    public function indexAction()
    {
        return $this->render('BoAdvisorsBundle:Default:index.html.twig');
    }
    public function mycontractsAction(Request $request)
    {
		$this->removeSession();
		$em = $this->getDoctrine()->getManager();
		$oRepTs = $em->getRepository('BoAdminBundle:Timesheet');
		$oRepSub = $em->getRepository('BoAdminBundle:Substitution');
		$ContractEntity = $em->getRepository('BoAdminBundle:Contracts');
		$oTCEntity =$em->getRepository('BoAdminBundle:Agenda');
		$today = new \DateTime();
		$this->setUserLocale($request->getLocale());
		$aStudents = $sTraining=$aTeacherSchedule=$oContract=$aGroup=$oGroup=$aTSC=$aTSG=null;
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
		if(isset($aContract[0])) $aTSC = $oTCEntity->getTeacherScheduleBis($aContract,$employee);
		if(isset($aGroup[0])){
			$aGroupContract = $em->getRepository('BoAdminBundle:Contracts')->findByGroup($aGroup[0]);
			$aTSG = $oTCEntity->getTScForGroups($aGroup,$employee);			
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
        return $this->render('BoAdvisorsBundle:Default:contract.html.twig',array(
			'user'=>$this->getTokenUser(),
			'contracts'=> $aContract,
			'etsc'=>$aExistTsContract,
			'etsg'=>$aExistTsGroup,
			'gcontracts'=>isset($aGroupContract[0])?$aGroupContract:null,
			'groups'=>$aGroup,
			'employee'=>$employee,
			'subcontr'=>$aSubByContract,
			'subgroup'=>$aSubByGroup,
			'authorization'=>$tsdateautho,
			'now'=>$today,
			'students'=>$aStudents,
			'tsc'=>$aTSC,//Teacher Schedule for contracts
			'tsg'=>$aTSG,//Teacher Schedule for groups
			'pm'=>"tabeau-bord",
			'sm'=>"contract",			
		));
    }
	protected function getEmployeeContract($employee){
		$aContract = $employee->getContracts();
		$aResult = array();
		foreach($aContract as $oContract){
			if($oContract->getStatus()!=1) continue;
			if($oContract->getWorkfields() and $oContract->getWorkfields()->getId()!=1 or $oContract->getWorkfields()->getId()!=2)
				$aResult[]= $oContract;
		}
		return $aResult;
	}
	private function setActivity($activity){
		return $this->createActivity("Teacher Home",$activity);	
	}
}

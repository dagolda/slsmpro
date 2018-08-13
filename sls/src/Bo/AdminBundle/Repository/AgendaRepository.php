<?php

namespace Bo\AdminBundle\Repository;

/**
* AgendaRepository
*
* This class was generated by the Doctrine ORM. Add your own custom
* repository methods below.
* Historic of modification : 2017-12-07,
*/

class AgendaRepository extends \Doctrine\ORM\EntityRepository
{
	public function getTotal(){
		$query = $this->_em->createQuery('SELECT COUNT(a) From BoAdminBundle:Agenda a');
		return (int) $query->getSingleScalarResult();
	}
	public function search($criteria){	
		$aResult = array();
		$oRepScg = $this->_em->getRepository('BoAdminBundle:Agenda');
		if(intval($criteria)>0){
			$oSchedule = $oRepScg->find($criteria);
			if($oSchedule) return array($oSchedule);
		}
		$aResult = $this->searchByEmployee($criteria);
		return $aResult;
	}
	public function searchByCriteria($aCriteria){
		$oRepScg = $this->_em->getRepository('BoAdminBundle:Agenda');
		if(isset($aCriteria['idagenda'])){
			$oAgenda = $oRepScg->find($aCriteria['idagenda']);
			return array($oAgenda);
		}
		if(isset($aCriteria['idemployee']) and isset($aCriteria['idcontract'])){
			$oEmployee = $this->_em->getRepository('BoAdminBundle:Employee')->find($aCriteria['idemployee']);
			$oContract = $this->_em->getRepository('BoAdminBundle:Contracts')->find($aCriteria['idcontract']);
			return $this->getByContractAndEmployee($oContract,$oEmployee);
		}
		if(isset($aCriteria['idemployee']) and isset($aCriteria['idgroup'])){
			$oEmployee = $this->_em->getRepository('BoAdminBundle:Employee')->find($aCriteria['idemployee']);
			$oGroup = $this->_em->getRepository('BoAdminBundle:Group')->find($aCriteria['idgroup']);
			return $this->getByGroupAndEmployee($oGroup,$oEmployee);
		}
		if(isset($aCriteria['idcontract'])){
			$oContract = $this->_em->getRepository('BoAdminBundle:Contracts')->find($aCriteria['idcontract']);
			return $this->getByContract($oContract);
		}
		if(isset($aCriteria['idgroup'])){
			$oGroup = $this->_em->getRepository('BoAdminBundle:Group')->find($aCriteria['idgroup']);
			return $this->getByGroup($oGroup);
		}
		if(isset($aCriteria['idemployee'])){
			$oEmployee = $this->_em->getRepository('BoAdminBundle:Employee')->find($aCriteria['idemployee']);
			return $this->getByEmployee($oEmployee);
		}
		return array();
	}
	public function getByContract($oContract){
		if($oContract==null) return array();
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Agenda', 'a')
			->join('a.contracts', 'b')
			->where("b.id =:idcontract")
			->orderBy('a.amorpm',"ASC")
			->setParameters(array('idcontract'=>$oContract->getId()));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	public function getByGroup($oGroup){
		if($oGroup==null) return array();
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Agenda', 'a')
			->join('a.group', 'b')
			->where("b.id =:idgroup")
			->orderBy('a.amorpm',"ASC")
			->setParameters(array('idgroup'=>$oGroup->getId()));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	public function getByEmployee($oEmployee){
		if($oEmployee==null) return array();
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Agenda', 'a')
			->join('a.employee', 'b')
			->where("b.id =:idemployee")
			->orderBy('a.amorpm',"ASC")
			->setParameters(array('idemployee'=>$oEmployee->getId()));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	public function getActiveByEmployee($oEmployee){
		if($oEmployee==null) return array();
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Agenda', 'a')
			->join('a.employee', 'b')
			->where("b.id =:idemployee and (a.status=:one or a.status=:two)")
			->orderBy('a.amorpm',"ASC")
			->setParameters(array('idemployee'=>$oEmployee->getId(),'one'=>1,'two'=>2));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	/*
	* Creation date : 2017-12-07
	* Param: $oEmployee, $oDate
	* Return array of employee schedule
	*/
	public function getByEmployeeAndDate($oEmployee,$oDate){
		if($oEmployee==null) return array();		
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Agenda', 'a')
			->join('a.employee', 'b')
			->where("b.id =:idemployee and a.startdate<=:ddate and a.enddate >=:ddate")
			->orderBy('a.amorpm',"ASC")
			->setParameters(array('idemployee'=>$oEmployee->getId(),'ddate'=>$oDate,));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	/*
	* Creation date : 2017-12-07
	* Param: $oEmployee, $oDate1, $oDate2
	* Return array of employee schedule beetwen two dates
	*/
	public function getByEmployeeAndDates($oEmployee,$oDate1,$oDate2){
		if($oEmployee==null) return array();		
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Agenda', 'a')
			->join('a.employee', 'b')
			->where("b.id =:idemployee and a.startdate<=:startdate and a.enddate >=:enddate")
			->orderBy('a.amorpm',"ASC")
			->setParameters(array('idemployee'=>$oEmployee->getId(),'startdate'=>$oDate1,'enddate'=>$oDate2,));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	public function getByEmployeeAndContract($oContract,$oEmployee,$oDate){
		if($oEmployee==null) return array();
		if($oContract==null) return array();		
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Agenda', 'a')
			->join('a.employee', 'b')
			->join('a.contracts', 'c')
			->where("b.id =:idemployee and c.id =:idcontract and a.startdate<=:ddate and a.enddate >=:ddate")
			->orderBy('a.amorpm',"ASC")
			->setParameters(array('idemployee'=>$oEmployee->getId(),'idcontract'=>$oContract->getId(),'ddate'=>$oDate,));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	public function getByEmployeeAndGroup($oGroup,$oEmployee,$oDate){
		if($oEmployee==null) return array();
		if($oGroup==null) return array();		
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Agenda', 'a')
			->join('a.employee', 'b')
			->join('a.group', 'c')
			->where("b.id =:idemployee and c.id =:idgroup and a.startdate<=:ddate and a.enddate >=:ddate")
			->orderBy('a.amorpm',"ASC")
			->setParameters(array('idemployee'=>$oEmployee->getId(),'idgroup'=>$oGroup->getId(),'ddate'=>$oDate,));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	//Return all agenda closed and conract opened
	public function getEndedAgenda(){
		$oDate = new \DateTime(date("d-m-Y"));	
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Agenda', 'a')
			->join('a.contracts', 'b')
			->where("a.enddate<=:ddate and b.enddate >=:ddate")
			->setParameters(array('ddate'=>$oDate,));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	public function getByContractAndEmployee($oContract,$oEmployee){
		if($oEmployee==null) return array();
		if($oContract==null) return array();		
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Agenda', 'a')
			->join('a.employee', 'b')
			->join('a.contracts', 'c')
			->where("b.id =:idemployee and c.id =:idcontract")
			->orderBy('a.amorpm',"ASC")
			->setParameters(array('idemployee'=>$oEmployee->getId(),'idcontract'=>$oContract->getId()));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	public function getByGroupAndEmployee($oGroup,$oEmployee){
		if($oEmployee==null) return array();
		if($oGroup==null) return array();		
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Agenda', 'a')
			->join('a.employee', 'b')
			->join('a.group', 'c')
			->where("b.id =:idemployee and c.id =:idgroup")
			->orderBy('a.amorpm',"ASC")
			->setParameters(array('idemployee'=>$oEmployee->getId(),'idgroup'=>$oGroup->getId()));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	public function getActiveByEmployeeAndDate($oEmployee,$oDate){
		if($oEmployee==null) return array();	
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Agenda', 'a')
			->join('a.employee', 'b')
			->where("b.id =:idemployee and a.startdate<=:ddate and a.enddate >=:ddate")
			->orderBy('a.amorpm',"ASC")
			->setParameters(array('idemployee'=>$oEmployee->getId(),'ddate'=>$oDate));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	public function getActiveByDateAndStatus($oEmployee,$oDate){
		if($oEmployee==null) return array();	
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Agenda', 'a')
			->join('a.employee', 'b')
			->where("b.id =:idemployee and a.startdate<=:ddate and a.enddate >=:ddate and a.status=:status")
			->orderBy('a.amorpm',"ASC")
			->setParameters(array('idemployee'=>$oEmployee->getId(),'ddate'=>$oDate,'status'=>1));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	public function searchByIdContract($idcontract){
		if(intval($idcontract)==0) return array();
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Agenda', 'a')
			->join('a.contracts', 'b')
			->where("b.id =:idcontract")
			->orderBy('a.amorpm',"ASC")
			->setParameters(array('idcontract'=>$idcontract));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	public function searchByIdGroup($idgroup){
		if(intval($idgroup)==0) return array();
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Agenda', 'a')
			->join('a.group', 'b')
			->where("b.id =:idgroup")
			->orderBy('a.amorpm',"ASC")
			->setParameters(array('idgroup'=>$idgroup));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	public function searchByEmployee($string){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Agenda', 'a')
			->join('a.employee', 'b')
			->where("b.id =:idemployee or b.firstname like :keyword or b.name like :keyword")
			->orderBy('a.id',"DESC")
			->setParameters(array('idemployee'=>$string,'keyword'=>"%".$string."%"));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	public function getByContractAndStatut($oContract){
		if($oContract==null) return array();
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Agenda', 'a')
			->join('a.contracts', 'b')
			->where("b.id =:idcontract and a.status=:status")
			->orderBy('a.amorpm',"ASC")
			->setParameters(array('idcontract'=>$oContract->getId(),'status'=>1));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	public function getByGroupAndStatut($oGroup){
		if($oGroup==null) return array();
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Agenda', 'a')
			->join('a.group', 'b')
			->where("b.id =:idgroup and a.status=:status")
			->orderBy('a.amorpm',"ASC")
			->setParameters(array('idgroup'=>$oGroup->getId(),'status'=>1));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	public function getByEmployeeAndStatut($oEmployee){
		if($oEmployee==null) return array();
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Agenda', 'a')
			->join('a.employee', 'b')
			->where("b.id =:idemployee and a.status=:status")
			->orderBy('a.amorpm',"ASC")
			->setParameters(array('idemployee'=>$oEmployee->getId(),'status'=>1));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	public function getByContractBis($oContract){
		if($oContract==null) return array();
		$aResult = array();
		$aEmployee = $oContract->getEmployee();
		foreach($aEmployee as $oEmployee){
			$aAgenda = $oEmployee->getAgenda();
			foreach($aAgenda as $oAgenda){
				$aResult[]=$oAgenda;
			}
		}
		return $aResult;
	}
	public function getTeacherContractschedule($aContracts,$oEmployee){
		if(count($aContracts)==0) return null;
		$aSchedule=array();
		$aIds=array();
		$today = new \DateTime(date("d-m-Y"));
		foreach($aContracts as $oContract){
			if(($oContract->getStartdate()<=$today and $today<=$oContract->getEnddate()) or $oContract->getStartdate()>$today){
				$aTeaSch = $this->_em->getRepository('BoAdminBundle:Agenda')->findBy(array('contracts'=>$oContract,'employee'=>$oEmployee));
				if(count($aTeaSch)==1){
					$aSchedule[$oContract->getId()]=$this->getScheduleDays($aTeaSch[0]);				
				}elseif(count($aTeaSch)>1){
					$aTextSchedule = array();
					foreach($aTeaSch as $oTeaSch){
						$aTextSchedule[] = $this->getScheduleDays($oTeaSch);
					}	
					$aSchedule[$oContract->getId()] = join(" and ",$aTextSchedule); 
				}
			}				
		}
		return $aSchedule;
	}
	public function getTeacherGroupSchedule($aGroup,$oEmployee){
		if(count($aGroup)==0) return null;
		$aSchedule=array();
		$aIds=array();
		foreach($aGroup as $oGroup){
			$aTeaSch = $this->_em->getRepository('BoAdminBundle:Agenda')->findBy(array('group'=>$oGroup,'employee'=>$oEmployee));	
			if(isset($aTeaSch[0])){
				$aSchedule[$oGroup->getId()]=$this->getScheduleDays($aTeaSch[0]);				
			}		
		}
		return $aSchedule;
	}
	public function getTScForGroups($aGroup,$oEmployee){
		$aResult = array();
		$now = new \DateTime(date("d-m-Y"));
		foreach($aGroup as $oGroup){
			if($oGroup->getStartdate()<=$now and $now<=$oGroup->getEnddate()){
				$aTSc = $this->getGroupTeacherScheduleBis($oGroup,$oEmployee);	
				if(isset($aTSc[0]) and  $aTSc[0]->getStartdate()<=$now and $now<=$aTSc[0]->getEnddate()){ 
					$aResult[$oGroup->getId()] = $aTSc[0];
				}
			}
		}
		return $aResult;
	}
	public function getGroupTeacherScheduleBis($group,$employee){
		if(!$group or !$employee) return array();
		return $this->_em->getRepository('BoAdminBundle:Agenda')->findBy(array('group'=>$group,'employee'=>$employee));	
	}
	public function getScheduleDays($oTeaSch){
		$aDay=array();
		$aHour=array();
		$schedule="";
		if($oTeaSch->getMonday()==1) $aDay[]="Monday";
		if($oTeaSch->getTuesday()==1) $aDay[]="Tuesday";
		if($oTeaSch->getWednesday()==1) $aDay[]="Wednesday";
		if($oTeaSch->getThursday()==1) $aDay[]="Thursday";
		if($oTeaSch->getFriday()==1) $aDay[]="Friday";
		if(count($aDay)==5) $schedule="From Monday to Friday,";
		else $schedule=join(",",$aDay).",";
		if($oTeaSch->getStartam()!=null and $oTeaSch->getStartam()->format("H:i")!="00:00") $aHour[]=$oTeaSch->getStartam()->format("H:i");
		if($oTeaSch->getEndam()!=null and $oTeaSch->getEndam()->format("H:i")!="00:00") $aHour[]=$oTeaSch->getEndam()->format("H:i");
		if($oTeaSch->getStartpm()!=null and $oTeaSch->getStartpm()->format("H:i")!="00:00") $aHour[]=$oTeaSch->getStartpm()->format("H:i");
		if($oTeaSch->getEndpm()!=null and $oTeaSch->getEndpm()->format("H:i")!="00:00") $aHour[]=$oTeaSch->getEndpm()->format("H:i");
		if(isset($aHour[0]) and isset($aHour[count($aHour)-1])) $schedule=$schedule." From ".$aHour[0]." to ".$aHour[count($aHour)-1];
		return $schedule;
	}
	public function getScheduleByDate($idemployee,$ddate){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a') 
 			->from('BoAdminBundle:Agenda', 'a')
			->join('a.employee', 'b')
			->where("b.id=:idemployee and a.startdate<=:ddate and a.enddate>=:ddate")
			->setParameters(array(
				'idemployee'=>$idemployee,
				'ddate'=>$ddate,
			));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	public function getTeacherschedule($aTeachers,$contract){
		if(count($aTeachers)==0) return null;
		$aSchedule=array();
		$aIds=array();
		foreach($aTeachers as $oTeacher){
			$aTeaSch=$this->_em->getRepository('BoAdminBundle:Agenda')->findBy(array('contracts'=>$contract,'employee'=>$oTeacher));
			//$aTeaSch=$this->getSchedule($contract,$oTeacher);
			if(isset($aTeaSch[0])){
				$aSchedule[$oTeacher->getId()]=$this->getScheduleDays($aTeaSch[0]);	
				$aIds[$oTeacher->getId()]=$aTeaSch[0]->getId();				
			}	
		}
		return array($aSchedule,$aIds);
	}
	public function getTeacherScheduleBis($aContract,$employee){
		$aTeacherSchedule=array();
		foreach($aContract as $oContract){
			$aTSchedule= $this->_em->getRepository('BoAdminBundle:Agenda')->findBy(array('contracts'=>$oContract,'employee'=>$employee));
			if(isset($aTSchedule[0])){
				$aTeacherSchedule[$oContract->getId()]=$aTSchedule[0];
			} 
		}
		return $aTeacherSchedule;
	}
	/*
	* Return Array of text describe the teacher schedule. 
	* Param : $aAgenda Array of schedule
	*/
	public function getAgendaDesc($aAgenda){
		$aSchedule=array();
		if(count($aAgenda)==0) return $aSchedule;
		foreach($aAgenda as $oAgenda){
			$oTeacher = $oAgenda->getEmployee();
			$aSchedule[$oTeacher->getId()]=$this->getScheduleDays($oAgenda);		
		}
		return $aSchedule;
	}
	/*
	* Return Array of teachers 
	* Param : $aAgenda Array of schedule
	*/
	public function getTeacherBy($aAgenda){
		$aTeachers=array();
		if(count($aAgenda)==0) return $aTeachers;
		foreach($aAgenda as $oAgenda){
			$aTeachers[] = $oAgenda->getEmployee();		
		}
		return $aTeachers;
	}
	public function getGroupSchedule($oGroup,$employee){
		$schedule = $this->getGroupTeacherScheduleBis($oGroup,$employee);
		if(isset($schedule[0])) return $schedule;
		$aContracts = $this->_em->getRepository('BoAdminBundle:Contracts')->getAllByGroup($oGroup);
		return $this->getTeacherScheduleBis($aContracts,$employee);
	}
	//Function return array of object
	//Parameters: array of employee and contract object
	public function getScheduleForContract($aTeachers,$oContract){
		$aTeacherSchedule=array();
		foreach($aTeachers as $oTeacher){
			$aTSchedule= $this->_em->getRepository('BoAdminBundle:Agenda')->findBy(array('contracts'=>$oContract,'employee'=>$oTeacher),array('amorpm'=>"asc"));
			foreach($aTSchedule as $oTSchedule){
				$aTeacherSchedule[$oTeacher->getId()][]=$oTSchedule;
			}
		}
		return $aTeacherSchedule;
	}
	public function getTeacherscheduleByGroup($aTeachers,$oGroup){
		$aTeachers = $oGroup->getEmployee();
		if(count($aTeachers)==0) return null;
		$aSchedule=array();
		foreach($aTeachers as $oTeacher){
			$aTeaSch = $this->_em->getRepository('BoAdminBundle:Agenda')->findBy(array('group'=>$oGroup,'employee'=>$oTeacher));	
			if(isset($aTeaSch[0])){
				$aSchedule[$oTeacher->getId()]=$aTeaSch[0];				
			}		
		}
		return $aSchedule;
	}
	public function getTSManyContract($aTeachers,$aContracts){
		if(count($aTeachers)==0) return null;
		$aSchedule=array();
		$aIds=array();
		foreach($aTeachers as $oTeacher){
			foreach($aContracts as $oContract){
				$aTeaSch = $this->_em->getRepository('BoAdminBundle:Agenda')->findBy(array('contracts'=>$oContract->getId(),'employee'=>$oTeacher->getId()));	
				if(isset($aTeaSch[0])){
					$aSchedule[$oTeacher->getId()]=$this->getScheduleDays($aTeaSch[0]);	
					$aIds[$oTeacher->getId()]=$aTeaSch[0]->getId();				
				}
			}
		}
		return array($aSchedule,$aIds);
	}
	public function getTscForManyContratcts($aContracts,$employee){
		if(count($aContracts)==0) return null;
		$aSchedule=array();
		$aIds=array();
		$today = new \DateTime(date("d-m-Y"));
		foreach($aContracts as $oContract){
			if($oContract->getStartdate()<=$today and $today<=$oContract->getEnddate()){
				$aTeaSch = $this->_em->getRepository('BoAdminBundle:Agenda')->findBy(array('contracts'=>$oContract,'employee'=>$employee));	
				if(isset($aTeaSch[0])){
					$aSchedule[$oContract->getId()]=$aTeaSch[0];				
				}
			}
		}
		return $aSchedule;
	}
	public function getTeacherScheduleForGroup($aGroup,$employee){
		foreach($aGroup as $ogroup){
			$aTeacherSchedule[$ogroup->getId()] = $this->getGroupTeacherScheduleBis($group,$employee);
		}
		return $aTeacherSchedule;
	}
	public function getGTeacherschedule($aTeachers,$oGroup){
		$aTeachers = $oGroup->getEmployee();
		if(count($aTeachers)==0) return null;
		$aSchedule=array();
		foreach($aTeachers as $oTeacher){
			$aTeaSch = $this->_em->getRepository('BoAdminBundle:Agenda')->findBy(array('group'=>$oGroup,'employee'=>$oTeacher));	
			if(isset($aTeaSch[0])){
				$aSchedule[$oTeacher->getId()]=$this->getScheduleDays($aTeaSch[0]);				
			}		
		}
		return $aSchedule;
	}
	//Return the current and upcoming schedule for a contract
	public function getScheduleByTraining($oTraining){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a') 
 			->from('BoAdminBundle:Agenda', 'a')
			->join('a.group', 'b')
			->join('a.contracts', 'c')
			->where("(c.id=:idcontract or b.id=:idgroup) and a.startam=:startam and a.endam=:endam and a.startpm=:startpm and a.endpm=:endpm and a.monday=:monday and a.tuesday=:tuesday and a.wednesday=:wednesday and a.thursday=:thursday and a.friday=:friday")
			->setParameters(array(
				'idcontract'=>$oTraining->getContracts()->getId(),'idgroup'=>$oTraining->getIdgroup(),'startam'=>$oTraining->getStartam(),'endam'=>$oTraining->getEndam(),'startpm'=>$oTraining->getStartpm(),'endpm'=>$oTraining->getEndpm(),'monday'=>$oTraining->getMonday(),'tuesday'=>$oTraining->getTuesday(),'wednesday'=>$oTraining->getWednesday(),'thursday'=>$oTraining->getThursday(),'friday'=>$oTraining->getfriday()
			));
		$query = $qb->getQuery();
		$aResult=$query->getResult();
		return $aResult;
	}
	//Return the current and upcoming schedule for a contract
	public function getScheduleForContractBis($oContract){
		if($oContract->getGroup() and $oContract->getWorkfields() and ($oContract->getWorkfields()->getId()==1 or $oContract->getWorkfields()->getId()==2)) 
			return $this->getScheduleForGroupBis($oContract->getGroup());
		$today = new \DateTime(date('d-m-Y'));
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a') 
 			->from('BoAdminBundle:Agenda', 'a')
			->join('a.contracts', 'b')
			->where("b.id=:idcontract and ((a.startdate<=:today and a.enddate>=:today) or a.startdate>=:today)")
			->orderBy('a.amorpm',"ASC")
			->setParameters(array(
				'idcontract'=>$oContract->getId(),
				'today'=>$today,
			));
		$query = $qb->getQuery();
		$aResult=$query->getResult();
		return $aResult;
	}
	//Return the current and upcoming schedule for a contract
	public function getScheduleForGroupBis($oGroup){ 
		$today = new \DateTime(date('d-m-Y'));
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a') 
 			->from('BoAdminBundle:Agenda', 'a')
			->join('a.group', 'b')
			->where("b.id=:idgroup and ((a.startdate<=:today and a.enddate>=:today) or a.startdate>=:today)")
			->setParameters(array(
				'idgroup'=>$oGroup->getId(),
				'today'=>$today,
			));
		$query = $qb->getQuery();
		$aResult=$query->getResult();
		return $aResult;
	}
	public function getTScForContracts($aContracts,$oEmployee){
		if($oContract->getGroup() and count($this->getContractByGroup($oContract->getGroup()))>1){
			return $this->getScheduleForGroup($aTeachers,$oContract);			
		}else{
			return $this->getScheduleForContract($aTeachers,$oContract);
		}	
	}
	protected function getContractByGroup(Group $group){
		if($group==null) return $group;
		return $this->_em->getRepository('BoAdminBundle:Contracts')->getAllByGroup($group);
	}
	//Function return array of object
	//Parameters: array of employee and contract object
	public function getScheduleForGroup($aTeachers,$oContract){
		$aTeacherSchedule=array();
		foreach($aTeachers as $oTeacher){
			if($oContract->getGroup()){
				$aTSchedule=$this->_em->getRepository('BoAdminBundle:Agenda')->findBy(array('group'=>$oContract->getGroup(),'employee'=>$oTeacher));
				if(isset($aTSchedule[0])){
					$aTeacherSchedule[$oTeacher->getId()]=$aTSchedule[0];
				}		
			}
		}
		return $aTeacherSchedule;
	}
	public function getTScForContract($aContracts,$oEmployee){
		$aResult = array();
		$now = new \DateTime(date("d-m-Y"));
		foreach($aContracts as $oContract){
			if($oContract->getStartdate()<=$now and $now<=$oContract->getEnddate()){
				$aTSc = $this->getContractTeacherScheduleBis($oContract,$oEmployee);			
				foreach($aTSc as $oTSc){
					if(isset($oTSc) and  $oTSc->getStartdate()<=$now and $now<=$oTSc->getEnddate()){ 
						$aResult[$oContract->getId()][] = $oTSc;
					}
				}
			}
		}
		return $aResult;
	}
	public function getContractTeacherScheduleBis($contract,$employee){
		if(!$contract or !$employee) return array();
		return $this->_em->getRepository('BoAdminBundle:Agenda')->findBy(array('contracts'=>$contract,'employee'=>$employee));	
	}
	//Function return array of array of object
	//Parameters: array of employee and array of contract
	public function getManySchedule($aTeachers,$aContracts){
		if(count($aTeachers)==0 or count($aContracts)==0) return null;
		$aSchedule=array();
		foreach($aContracts as $oContract){
			$aSchedule[$oContract->getId()] = $this->getTeacherschedule($aTeachers,$contract);
		}
		return $aSchedule;
	}
	public function getScheduleForTeachers($aTeachers,$oContract){
		if($oContract->getWorkfields() and ($oContract->getWorkfields()->getId()==1 or $oContract->getWorkfields()->getId()==2)){
			return $this->getScheduleForGroup($aTeachers,$oContract);			
		}else{
			return $this->getScheduleForContract($aTeachers,$oContract);
		}	
	}
	public function getSchedule($contract,$oTeacher){
		$aTeaSch = $this->_em->getRepository('BoAdminBundle:Agenda')->findBy(array('contracts'=>$contract,'employee'=>$oTeacher));	
		if(!isset($aTeaSch[0])) $aTeaSch = $this->_em->getRepository('BoAdminBundle:Agenda')->findBy(array('group'=>$contract->getGroup(),'employee'=>$oTeacher));
		return $aTeaSch;
	}
	public function getScheduleByTeacherId($aTeachers,$contract){
		$aResult = array();
		foreach($aTeachers as $oTeacher){
			$aTeaSch=$this->getSchedule($contract,$oTeacher);			
			if(isset($aTeaSch[0])) $aResult[$oTeacher->getId()]=$aTeaSch[0];
		}
		return $aResult;
	}
	public function getGroupTeacherschedule($aTeachers,$group){
		if(count($aTeachers)==0) return null;
		$aSchedule=array();
		$aIds=array();
		foreach($aTeachers as $oTeacher){
			$aTeaSch = $this->_em->getRepository('BoAdminBundle:Agenda')->findBy(array('group'=>$group,'employee'=>$oTeacher));	
			if(isset($aTeaSch[0])){
				$aSchedule[$oTeacher->getId()]=$this->getScheduleDays($aTeaSch[0]);	
				$aIds[$oTeacher->getId()]=$aTeaSch[0]->getId();				
			}		
		}
		return array($aSchedule,$aIds);
	}
	public function getContractSchedule($schedule){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a') 
 			->from('BoAdminBundle:Agenda', 'a')
			->join('a.contracts', 'b')
			->where("b.id=:idcontract and ((a.startdate<=:startdate and a.enddate>=:startdate) or (a.startdate<=:enddate and a.enddate>=:enddate))")
			->setParameters(array(
				'idcontract'=>$schedule->getIdcontracts(),
				'enddate'=>$schedule->getEnddate(),
				'startdate'=>$schedule->getStartdate(),
			));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;		
	}
	public function getWithContractKey(){
		$aResult = array();
		$aSchedule = $this->getCurrentSchedule();
		foreach($aSchedule as $oSchedule){
			if($oSchedule->getContracts()){
				$idcontract = $oSchedule->getContracts()->getId();
				$aResult[$idcontract]=$oSchedule;
			}
		}
		return $aResult;
	}
	public function getCurrentSchedule(){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a') 
 			->from('BoAdminBundle:Agenda', 'a')
			->where("a.startdate<=:today and a.enddate>=:today")
			->setParameters(array(
				'today'=>new \DateTime(date("d-m-Y")),
			));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;		
	}
	//Return the current and upcoming schedule for a employee
	public function getScheduleForEmployee($oEmployee){
		$today = new \DateTime(date('d-m-Y'));
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a') 
 			->from('BoAdminBundle:Agenda', 'a')
			->join('a.employee', 'b')
			->where("b.id=:idemployee and ((a.startdate<=:today and a.enddate>=:today) or a.startdate>=:today)")
			->setParameters(array(
				'idemployee'=>$oEmployee->getId(),
				'today'=>$today,
			));
		$query = $qb->getQuery();
		$aResult=array();
		foreach($query->getResult() as $oSchedule){
			$oContract = $oSchedule->getContracts();
			$oGroup = $oSchedule->getGroup();
			if($oContract){ 
				if($oContract->getStatus()!=0 and (($oContract->getStartdate()<=$today and $today<=$oContract->getEnddate()) or $oContract->getStartdate()<=$today)){
					 $aResult[] = $oSchedule;
				}
			}
			if($oGroup){ 
				if($oGroup->getStatus()!=0) $aResult[] = $oSchedule;
			}			
		}
		return $aResult;
	}
	public function getDaySchedule($oStudent,$oDate){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Agenda', 'a')
			->join('a.students', 'b')
			->where("b.id =:idstudent and a.status=:status and a.startdate <=:now and a.enddate >=:now" )
			->orderBy('a.startdate', "asc")
			->setParameters(array('idstudent'=>$oStudent->getId(),'status'=>1,'now'=>$oDate));
		$query = $qb->getQuery();
		return $query->getResult();	
	}
	public function getScheduleByContract($oStudent,$oDate){
		$oContract = $this->getStudentContract($oStudent,$oDate);
		if($oContract==null) return array();
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Agenda', 'a')
			->join('a.contracts', 'b')
			->where("b.id =:idcontract and a.enddate >=:now and a.startdate <=:now" )
			->orderBy('a.startdate', "asc")
			->setParameters(array('idcontract'=>$oContract->getId(),'now'=>$oDate));
		$query = $qb->getQuery();
		return $query->getResult();	
	}
	public function getScheduleByGroup($oGroup,$oDate){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Agenda', 'a')
			->join('a.group', 'b')
			->where("b.id =:idgroup and a.status=:status and a.enddate >=:now and a.startdate <=:now" )
			->orderBy('a.startdate', "asc")
			->setParameters(array('idgroup'=>$oGroup->getId(),'status'=>1,'now'=>$oDate));
		$query = $qb->getQuery();
		return $query->getResult();	
	}
	public function getContractByDate($student,$oDate){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Contracts', 'a')
			->join('a.students', 'b')
			->where("b.id =:idstudent and a.status=:status and a.enddate >=:now and a.startdate <=:now" )
			->orderBy('a.startdate', "asc")
			->setParameters(array('idstudent'=>$student->getId(),'status'=>1,'now'=>$oDate));
		$query = $qb->getQuery();
		return $query->getResult();	
	}
	public function getStudentContract($oStudent,$oDate){
		$aContract = $oStudent->getContracts();
		foreach($aContract as $oContract){
			if(($oContract->getStartdate()<=$oDate and $oDate<=$oContract->getEnddate()) or $oDate<=$oContract->getStartdate()){
				return $oContract;
			}
			return null;	
		}
	
	}
}
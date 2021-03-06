<?php

namespace Bo\AdminBundle\Repository;
/**
 * StudentsRepository
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
*/
class StudentsRepository extends \Doctrine\ORM\EntityRepository
{
	public function getTotal(){
		$query = $this->_em->createQuery('SELECT COUNT(a) From BoAdminBundle:Students a');
		return (int) $query->getSingleScalarResult();
	}
	public function search($sTexte){
		$sTexte=trim($sTexte);
		$aStudent = $this->_em->getRepository('BoAdminBundle:Students')->findBy(array('id'=>$sTexte));
		if(isset($aStudent[0])) return $aStudent;
		$aTexte = explode(' ',trim($sTexte));
		if(count($aTexte)==2){
			$aStudent = $this->_em->getRepository('BoAdminBundle:Students')->findBy(array('firstname'=>trim($aTexte[0]),'name'=>trim($aTexte[1])));			
			if(isset($aStudent[0])) return $aStudent;
			$aStudent = $this->_em->getRepository('BoAdminBundle:Students')->findBy(array('name'=>$aTexte[0],'firstname'=>$aTexte[1]));
			if(isset($aStudent[0])) return $aStudent;
		}
		$aResult=array();	
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Students', 'a')
			->where("a.startdate like :motcle or a.enddate like :motcle or a.name like :motcle or a.firstname like :motcle or a.startlevel like :motcle or a.targetlevel like :motcle or a.phonenumber like :motcle or a.email like :motcle or a.department like :motcle" )
			->setParameter('motcle', "%".$sTexte."%");
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;	
	}
	public function findStudents($aContracts){
		$aStudents = array();
		foreach($aContracts as $oContract){
			$aContractStudents = $oContract->getStudents();
			foreach($aContractStudents as $oContractStudents){
				$aStudents[$oContractStudents->getId()]=$oContractStudents;
			}
		}
		return $aStudents;
	}
	//get students of contract with the contract id as array keys
	public function StudentAndContractKey($aContracts){
		$aStudents = array();
		foreach($aContracts as $oContract){
			$aContractStudents = $oContract->getStudents();
			foreach($aContractStudents as $oStudent){
				$aStudents[] = $oStudent;				
			}
		}
		return $aStudents;
	}
	//get students of contract with the contract id as array keys
	public function StudentByGroup($oGroup){
		$aContracts = $this->getContractGroup($oGroup);
		if($oGroup and $oGroup->getStudents() and count($aContracts)==count($oGroup->getStudents())) return $oGroup->getStudents();
		$aStudents = array();
		foreach($aContracts as $oContract){
			$aContractStudents = $oContract->getStudents();
			$aStudents[$oContract->getId()] = $aContractStudents[0];
		}
		return $aStudents;
	}
	private function getContractGroup($oGroup){
		return $this->_em->getRepository('BoAdminBundle:Contracts')->findBy(array('group'=>$oGroup));
	}
	public function getTeachersByContract($aContracts){
		$aTeachers = array();
		foreach($aContracts as $oContract){
			$aEmployee = $oContract->getEmployee();
			foreach($aEmployee as $oEmployee){
				$aTeachers[$oEmployee->getId()]=$oEmployee;
			}
		}
		return $aTeachers;
	}
	//Return a object Group
	public function getStudentGroup($oStudent){
		$oContract=null;
		if($oStudent->getGroup()!=null) return $oStudent->getGroup();
		$aContracts = $this->getInprogressContracts($oStudent);
		if(count($aContracts)==1) $oContract = $aContracts[0];
		elseif(count($aContracts)>1) $oContract = $this->getActiveContract($aContracts);
		if($oContract!=null) return $oContract->getGroup();
		return null;
	}
	private function getActiveContract($aContracts){
		foreach($aContracts as $oContract){
			if($oContract->getStatus()==1) return $oContract;
		}		
	}
	public function getInprogressContracts($student){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Contracts', 'a')
			->join('a.students', 'b')
			->where("b.id =:idstudent and a.status=:status" )
			->setParameters(array('idstudent'=>$student->getId(),'status'=>1));
		$query = $qb->getQuery();
		return $query->getResult();	
	}
	public function getCurrentContracts($student){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Contracts', 'a')
			->join('a.students', 'b')
			->where("b.id =:idstudent and a.status=:status and a.enddate >=:now and a.startdate <=:now" )
			->orderBy('a.startdate', "asc")
			->setParameters(array('idstudent'=>$student->getId(),'status'=>1,'now'=>$this->getToday()));
		$query = $qb->getQuery();
		return $query->getResult();	
	}
	public function getCurrentContractsGroup($student){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Contracts', 'a')
			->join('a.students', 'b')
			->join('a.group', 'c')
			->where("b.id =:idstudent and a.status=:status and a.enddate >=:now and a.startdate <=:now and c.id>0" )
			->orderBy('a.startdate', "asc")
			->setParameters(array('idstudent'=>$student->getId(),'status'=>1,'now'=>new \DateTime()));
		$query = $qb->getQuery();
		return $query->getResult();	
	}
	protected function getToday(){
		return new \DateTime(date("d-m-Y"));
	}
}

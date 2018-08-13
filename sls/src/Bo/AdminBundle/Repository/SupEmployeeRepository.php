<?php

namespace Bo\AdminBundle\Repository;
use Bo\AdminBundle\Entity\SupEmployee;
/**
 * SupEmployeeRepository
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SupEmployeeRepository extends \Doctrine\ORM\EntityRepository
{
	public function getTotal(){
		$query = $this->_em->createQuery('SELECT COUNT(a) From BoAdminBundle:SupEmployee a');
		return (int) $query->getSingleScalarResult();
	}
	public function search($sTexte){
		if(trim($sTexte)=="adm" or trim($sTexte)=="admin" or trim($sTexte)=="administrative"){
			return $this->getByStatus("Administrative");
		}
		$aTexte = explode(" ",$sTexte);
		$oEmExp = $this->_em->getRepository('BoAdminBundle:SupEmployee');
		$aResult = $oEmExp->findBy(array('name'=>$sTexte),array('firstname' => 'asc'));
		if(isset($aResult[0])) return $aResult;
		$aResult = $oEmExp->findBy(array('firstname'=>trim($sTexte)),array('firstname' => 'asc'));
		if(isset($aResult[0])) return $aResult;
		$aResult = $oEmExp->findBy(array('email'=>$sTexte),array('id' => 'desc'));
		if(isset($aResult[0])) return $aResult;
		$sSelect = "SELECT v FROM Bo\AdminBundle\Entity\SupEmployee v  JOIN v.status u WHERE v.name like :motcle or v.email like :motcle or v.firstname like :motcle or v.homenumber like :motcle or v.address1 like :motcle or u.statusname like :motcle";
		$oQuery =  $this->_em->createQuery($sSelect);	
		$oQuery->setParameters(array(
			'motcle' => "%".$sTexte."%",
		));	
		$aResult = $oQuery->getResult();
		return $aResult;
	}
	public function searchByFN($name,$firstname){
		$sSelect = "SELECT v FROM Bo\AdminBundle\Entity\SupEmployee v  WHERE v.name like :name and v.firstname like :firstname";
		$oQuery =  $this->_em->createQuery($sSelect);	
		$oQuery->setParameters(array(
			'name' => "%".$name."%",
			'firstname' => "%".$firstname."%",
		));	
		$aResult = $oQuery->getResult();
		return $aResult;
	}
	public function getAllPA(){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:SupEmployee', 'a')
			->join('a.status', 'b')
			->where("b.id =:number" )
			->setParameter('number', 3)
				;
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		if(isset($aResult[0])){
			$aPA = array();
			foreach($aResult as $oPA){
				$aPA[$oPA->getId()] = $oPA->getName()." ".$oPA->getFirstname();		
			}
			return $aPA;
		}
		return null;
	}
	public function getByStatus($status){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:SupEmployee', 'a')
			->join('a.status', 'b')
			->where("b.statusname like :statusname" )
			->setParameter('statusname', "%".$status."%");
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	public function searchByName($name,$firstname){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:SupEmployee', 'a')
			->where("a.name like :name and a.firstname like :firstname" )
			->setParameters(array(
				'name'=>"%".trim($name)."%",
				'firstname'=>"%".trim($firstname)."%",
			));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
	}
	public function searchByNameandFirst($name,$firstname){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:SupEmployee', 'a')
			->where("a.name like :name" )
			->andwhere("a.firstname like :firstname" )
			->setParameters(array(
				'name'=>"%".trim($name)."%",
				'firstname'=>"%".trim($firstname)."%",
			));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
	}
	public function getQualifiedEmployee($oTypecontract){
		$sSelect = "SELECT v FROM Bo\AdminBundle\Entity\SupEmployee v  JOIN v.typecontract u WHERE u.reference like :typecontract";
		$oQuery =  $this->_em->createQuery($sSelect);	
		$oQuery->setParameters(array(
			'typecontract' => "%".$oTypecontract->getReference()."%",
		));	
		$aResult = $oQuery->getResult();
		return $aResult;
	}
	public function getAvailable($oTypecontract){
		if(!$oTypecontract) return false;
		$aSupEmployee = $this->getQualifiedEmployee($oTypecontract);
		$aResult = array();
		foreach($aSupEmployee as $oSupEmployee){
			$aResult[] = array($oSupEmployee->getId(),$oSupEmployee->getFirstname()." ".$oSupEmployee->getname()." (".$this->formatCollection($oSupEmployee->getTypecontract()).")"); 		
		}
		return $aResult;
	}
	private function formatCollection($aCollection){
		if(!$aCollection) return null;
		$array=array();
		foreach($aCollection as $oCollection){
			$array[]=$oCollection->getReference();
		}
		return join("-",$array);
	}
	public function recordDeleteHistoric($oEmployee,$oDeletedBy){
		$oHisto = new SupEmployee();
		$oHisto->setName($oEmployee->getName());		
		$oHisto->setFirstname($oEmployee->getFirstname());	
		$oHisto->setEmail($oEmployee->getEmail());			
		$oHisto->setHomenumber($oEmployee->getHomenumber());
		$oHisto->setCellnumber($oEmployee->getCellnumber());
		$oHisto->setAddress1($oEmployee->getAddress1());
		$oHisto->setAddress2($oEmployee->getAddress2());
		$oHisto->setBirthdate($oEmployee->getBirthdate());
		$oHisto->setHiringdate($oEmployee->getHiringdate());
		$oHisto->setProfil($oEmployee->getProfil());
		$oHisto->setStatus($oEmployee->getStatus());
		$oHisto->setNote($oEmployee->getNote());
		$oHisto->setSexe($oEmployee->getSexe());	
		$oHisto->setHourrate($oEmployee->getHourrate());
		$oHisto->setLanguage($oEmployee->getLangage());
		foreach($oEmployee->getTypecontract() as $oTC){
			$oHisto->addTypecontract($oTC);
		}
		$oHisto->setCategoryteacher($oEmployee->getCategoryteacher());	
		$oHisto->setEnglishlevel($oEmployee->getEnglishlevel());
		$oHisto->setFrenchlevel($oEmployee->getFrenchlevel());	
		$oHisto->setCreateby($oEmployee->getCreateby());			
		$oHisto->setCreationdate($oEmployee->getCreationdate());
		$oHisto->setDeleteby($oDeletedBy);		
		$this->_em->persist($oHisto);
		$this->_em->flush();
		return $oHisto;
	}
}

<?php

namespace Bo\AdminBundle\Repository;

/**
 * tsdocRepository
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TsdocRepository extends \Doctrine\ORM\EntityRepository
{
	public function getTotal($oEmployee){
		$query = $this->_em->createQuery('SELECT COUNT(a) From BoAdminBundle:Tsdoc a JOIN a.employee b WHERE b.id=:idemployee');
		$query->setParameters(array(
			'idemployee'=>$oEmployee->getId(),
		));
		return (int) $query->getSingleScalarResult();
	}
	public function search($sTexte){
		$atexte = explode("-",trim($sTexte));
		if(count($atexte)==3 and is_numeric($atexte[0]) and is_numeric($atexte[1]) and is_numeric($atexte[2])){
			$oDate = new \DateTime($sTexte);
			$aResult = $this->getEmployeeByDay($oDate);
			if(count($aResult)>0) return $aResult; 
		}
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Absences', 'a')
			->join('a.employee', 'b')
			->where("a.motif like :motcle or a.startdate like :motcle  or a.enddate like :motcle  or b.firstname like :motcle or b.name like :motcle or c.firstname like :motcle or c.name like :motcle or d.name like :motcle or e.contractnumber like :motcle")
			->setParameters(array('motcle' => "%".$sTexte."%",));
		$query = $qb->getQuery();
		$aResult = $query->getResult();
		return $aResult;	
	}
	public function getEmployeeByDay($oemployee,$oDate){
		$today = date("Y-m-d");
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Absences', 'a')
			->join('a.employee', 'b')
			->where("b.id=:idemployee and a.startdate<=:ddate and a.enddate>=:ddate" )
			->setParameters(array('idemployee'=>$oemployee->getId(),'ddate'=>$oDate));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;		
	}
}

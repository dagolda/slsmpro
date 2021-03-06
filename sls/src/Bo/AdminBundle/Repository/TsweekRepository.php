<?php

namespace Bo\AdminBundle\Repository;

/**
 * TsweekRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TsweekRepository extends \Doctrine\ORM\EntityRepository
{
	public function searchInTweek($iyearln,$iweek){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Tsweek', 'a')
			->join('a.tyear', 'b')
			->where("a.numberweek =:iweek and b.yearln =:iyearln" )
			->setParameters(array(
				'iweek'=> $iweek,
				'iyearln'=> $iyearln,
			));
		$query = $qb->getQuery();
		return $query->getResult();	
	}
	public function getByNumberweek($iweek,$iyearln=null){
		if($iyearln==null) $iyearln=date("Y");			
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Tsweek', 'a')
			->join('a.tyear', 'b')
			->where("a.numberweek =:iweek and b.yearln =:iyearln" )
			->setParameters(array(
				'iweek'=> $iweek,
				'iyearln'=> $iyearln,
			));
		$query = $qb->getQuery();
		return $query->getResult();	
	}
}

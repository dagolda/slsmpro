<?php
namespace Bo\AdminBundle\Repository;
/**
 * ClosegroupRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ClosegroupRepository extends \Doctrine\ORM\EntityRepository
{
	public function getNotOpened($oGroup){
		$aResult=array();	
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Closegroup', 'a')
			->join('a.group', 'b')
			->where("b.id =:idgroup and a.reopenby is null" )
			->setParameters(array(
			        'idgroup'=>$oGroup->getId(),
			));
		$query = $qb->getQuery();
		return $query->getResult();	
	}
}

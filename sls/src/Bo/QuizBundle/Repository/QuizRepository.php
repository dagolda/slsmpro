<?php

namespace Bo\QuizBundle\Repository;

/**
 * QuizRepository
 */
class QuizRepository extends \Doctrine\ORM\EntityRepository
{
	public function getQuizBy($oCategory){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoQuizBundle:Quiz', 'a')
			->join('a.category', 'b')
			->where("b.id =:idcategory" )
			->setParameter('idcategory', $oCategory->getId());
		$query = $qb->getQuery();
		return $query->getResult();
	}
}

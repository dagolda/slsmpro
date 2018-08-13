<?php

namespace Bo\QuizBundle\Repository;

/**
* ResultquizRepository
*/

class ResultsquizRepository extends \Doctrine\ORM\EntityRepository
{
	public function getResultQuizBy($oEvalquiz){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoQuizBundle:Resultsquiz', 'a')
			->join('a.evalquiz', 'b')
			->where("b.id =:idevalquiz" )
			->setParameter('idevalquiz', $oEvalquiz->getId());
		$query = $qb->getQuery();
		return $query->getResult();
	}
}
?>

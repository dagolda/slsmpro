<?php

namespace Bo\QuizBundle\Repository;

/**
 * QuestionRepository
 */
class QuestionRepository extends \Doctrine\ORM\EntityRepository
{
	public function getQuestionAfter($oQuestion,$oQuiz){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoQuizBundle:Question', 'a')
			->where("a.quiz=:quiz and a.id>:idquestion" )
			->setParameters(array('quiz'=>$oQuiz,'idquestion'=>$oQuestion->getId()));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	public function getQuestionBefore($oQuestion,$oQuiz){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoQuizBundle:Question', 'a')
			->join('a.quiz', 'b')
			->where("b.id=:idquiz and a.id<:idquestion" )
			->orderBy('a.id',"desc")
			->setParameters(array('idquiz'=>$oQuiz->getId(),'idquestion'=>$oQuestion->getId()));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
}

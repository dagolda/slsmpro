<?php

namespace Bo\AdminBundle\Repository;

/**
 * RubriqueRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RubricRepository extends \Doctrine\ORM\EntityRepository
{
	public function getAllen(){
		return $this->_em->getRepository('BoAdminBundle:Rubric')->findBy(array(),array('nameen' => 'asc'));
	}
	public function getAllfr(){
		return $this->_em->getRepository('BoAdminBundle:Rubric')->findBy(array(),array('namefr' => 'asc'));
	}
}

<?php

namespace Bo\AdminBundle\Repository;

/**
 * TypeContractRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TypecontractRepository extends \Doctrine\ORM\EntityRepository
{
	public function getAllType(){
		return $this->_em->getRepository('BoAdminBundle:Typecontract')->findBy(array(),array('reference' => 'asc'));
	}
}
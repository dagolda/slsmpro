<?php

namespace Bo\AdminBundle\Repository;

/**
 * TeamContactsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TeamContactsRepository extends \Doctrine\ORM\EntityRepository
{
	public function getTotal(){
		$query = $this->_em->createQuery('SELECT COUNT(a) From BoAdminBundle:TeamContacts a');
		return (int) $query->getSingleScalarResult();
	}
	public function search($sTexte){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:TeamContacts', 'a')
			->join('a.employee', 'b')
			->where("b.firstname like :motcle or b.name like :motcle or a.title like :motcle or a.email like :motcle or a.location like :motcle or a.extension like :motcle or a.location like :motcle" )
			->setParameter('motcle',"%".$sTexte."%")
				;
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
}

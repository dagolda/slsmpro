<?php

namespace Bo\AdminBundle\Repository;

/**
 * TicketsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TicketsRepository extends \Doctrine\ORM\EntityRepository
{
	public function getTotal(){
		$query = $this->_em->createQuery('SELECT COUNT(a) From BoAdminBundle:Tickets a');
		return (int) $query->getSingleScalarResult();
	}
	//Get employee tickets
	public function getEmployeeTickets($idemployee,$status){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Tickets', 'a')
			->join('a.contacts', 'b')
			->join('b.employee', 'c')
			->where("(c.id =:idemployee or a.idadvisor=:idemployee) and a.status=:status")
			->setParameters(array('idemployee'=>$idemployee,'status'=>$status));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	//Get employee tickets
	public function getEmployeeTicketsBy($idemployee){

		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Tickets', 'a')
			->join('a.contacts', 'b')
			->join('b.employee', 'c')
			->where("(c.id =:idemployee or a.idadvisor=:idemployee) and (a.status!=:status or a.blockedby like :blockedby)")
			->setParameters(array('idemployee'=>$idemployee,'status'=>4,'blockedby'=>"%".$this->getEmployeeFN($idemployee)."%"));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	//Get employee help
	public function getMyHelp($oEmployee){

		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Tickets', 'a')
			->join('a.employee', 'b')
			->where("b.id =:idemployee and a.status!=:status")
			->setParameters(array('idemployee'=>$oEmployee->getId(),'status'=>4));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	public function search($motcle){
		$aResult = $this->getByTicketInfo($motcle);
		if(isset($aResult[0])) return $aResult;
		$aResult = $this->getByEmployee($motcle);
		if(isset($aResult[0])) return $aResult;
		$aResult = $this->getByStudent($motcle);
		if(isset($aResult[0])) return $aResult;
		return array();
	}
	
	public function getByTicketInfo($motcle){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Tickets', 'a')
			->where("a.subject like :motcle or a.canal like :motcle or a.blockedby like :motcle or a.openeddate like :motcle or a.statusddate like :motcle or a.closeby like :motcle" )
			->setParameters(array(
				'motcle' => "%".$motcle."%",
			));	
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	public function getByEmployee($motcle){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Tickets', 'a')
			->join('a.employee', 'b')
			->where("b.name like :motcle or b.firstname like :motcle" )
			->setParameters(array(
				'motcle' => "%".$motcle."%",
			));	
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	public function getByStudent($motcle){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Tickets', 'a')
			->join('a.students', 'c')
			->where("c.name like :motcle or c.firstname like :motcle" )
			->setParameters(array(
				'motcle' => "%".$motcle."%",
			));	
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	private function getByTypeAndStatus($idtype,$status){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Tickets', 'a')
			->join('a.contacts', 'b')
			->where("a.status =:status and b.id =:idtype" )
			->setParameters(array(
				'status' => $status,
				'idtype' => $idtype,
			));	
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	private function getByType($idtype){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Tickets', 'a')
			->join('a.contacts', 'b')
			->where("b.id =:idtype" )
			->setParameters(array(
				'idtype' => $idtype,
			));	
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	private function getByStatus($status){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Tickets', 'a')
			->where("a.status =:status" )
			->setParameters(array(
				'status' => $status,
			));	
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	public function getExtraData($idtype,$idstatus){
		if($idtype!=0 and $idstatus!=0) return $this->getByTypeAndStatus($idtype,$idstatus);
		elseif($idtype!=0) return $this->getByType($idtype);
		if($idstatus!=0) return $this->getByStatus($idstatus);
		return array();
	}
	private function getEmployeeFN($idemployee){
		$oEmployee = $this->_em->getRepository("BoAdminBundle:Employee")->find($idemployee);
		if($oEmployee==null) return null;
		return $oEmployee->getFirstname()." ".$oEmployee->getName();	

	}
}
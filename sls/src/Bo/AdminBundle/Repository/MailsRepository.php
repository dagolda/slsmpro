<?php

namespace Bo\AdminBundle\Repository;

/**
 * MailsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MailsRepository extends \Doctrine\ORM\EntityRepository
{
	public function getTotal(){
		$query = $this->_em->createQuery('SELECT COUNT(a) From BoAdminBundle:Mails a');
		return (int) $query->getSingleScalarResult();
	}
	public function getByName($sName){
		$aMails=$this->_em->getRepository('BoAdminBundle:Mails')->findByName($sName);
		if(isset($aMails[0])) return $aMails[0];
		return null;
	}
	//getMailsById
	public function getById($id){ 
		$oMails=$this->_em->getRepository('BoAdminBundle:Mails')->find($id);
		if($oMails) return $oMails;   
	}
	//getMails
	public function getInfoMail($sName,$id){ 
		if($this->getByName($sName)!=null) return $this->getByName($sName);
		if($this->getById($id)!=null) return $this->getById($id);
		return null;		
	}
}

<?php

namespace Bo\AdminBundle\Repository;
use Bo\AdminBundle\Entity\HistoStudents;
/**
 * HistoStudentsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class HistoStudentsRepository extends \Doctrine\ORM\EntityRepository
{
	public function recordHistorique($oStudent,$oContract,$oEmployee){
		$oHisto = new HistoStudents();
		$oHisto->setIdcontracts($oContract->getId());
		if($oStudent->getGroup()) $oHisto->setGroup($oStudent->getGroup());
		elseif($oContract->getGroup()) $oHisto->setGroup($oContract->getGroup());
		$oHisto->setName($oStudent->getName());		
		$oHisto->setFirstname($oStudent->getFirstname());		
		$oHisto->setStartlevel($oStudent->getStartlevel());
		$oHisto->setTargetlevel($oStudent->getTargetlevel());
		$oHisto->setStartdate($oStudent->getStartdate());
		$oHisto->setEnddate($oStudent->getEnddate());
		$oHisto->setCreationdate($oStudent->getCreationdate());	
		$oHisto->setUpdatedby($oEmployee);			
		$this->_em->persist($oHisto);
		$this->_em->flush();
		return $oHisto;
	}
	public function getHistoriqueStudent($contract){
		return $this->_em->getRepository('BoAdminBundle:HistoStudents')->findBy(array('idcontracts'=>$contract->getId()));	
	}	
}

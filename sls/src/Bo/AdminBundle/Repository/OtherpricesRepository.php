<?php

namespace Bo\AdminBundle\Repository;

/**
* OtherpricesRepository
* This class was generated by the Doctrine ORM. Add your own custom
* repository methods below.
*/
class OtherpricesRepository extends \Doctrine\ORM\EntityRepository
{
	public function getOtherPrices($typecontract,$ftorpt,$language,$feature){
		$aResult=array();	
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Otherprices', 'a')
			->where("a.contracttype =:contracttype and a.feature =:feature and a.language=:language and a.ftorpt=:ftorpt")
			->setParameters(array(
				'contracttype'=>$typecontract,
				'feature'=>$feature,
				'language'=>$language,
				'ftorpt'=>$ftorpt,
			));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult;
	}
	public function getPricesBy($enquiry){
		$location = trim($enquiry->getLocation());
		$typecontract = trim($enquiry->getTypecontract());
		if($typecontract=="private" or $typecontract=="Private"){
			$oPrice = $this->getPrivatePrices();
			if($oPrice) return $oPrice->getPriceonsite();
			return null;
		} 
		$language = $enquiry->getLanguage();
		if($language=="English" and $typecontract=="Service Contract"){
			$oPrice = $this->getEnglishPrices();
			if($oPrice){
				if($location=="Campus") return $oPrice->getPriceonsite();
				else return $oPrice->getPriceoffsite();
			} 
			return null;			
		} 
		if($typecontract=="Service Contract") $typecontract="Non-NMSO";
		$ftorpt = $enquiry->getFtorpt();
		$feature=$this->getFeature($enquiry);
		$aResult = $this->getOtherPrices($typecontract,$ftorpt,$language,$feature);
		if(isset($aResult[0])){
			$oPrice = $aResult[0];
			if($oPrice){
				if($location=="Campus") return $oPrice->getPriceonsite();
				else return $oPrice->getPriceoffsite();
			} 
		}
		return null;
	}
	//Get private price : same price for french and english training, no difference for the number of hours
	//There are two records with same price in the database
	public function getPrivatePrices(){
		$aResult=array();	
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Otherprices', 'a')
			->where("a.contracttype =:contracttype")
			->setParameters(array(
				'contracttype'=>"Private",
			));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult[0];		
	}
	//Get english price : full time and part time have same price, no difference for the number of hours
	//Type of contract is "Non-NMSO" and language is "English"
	public function getEnglishPrices(){
		$aResult=array();	
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')
			->from('BoAdminBundle:Otherprices', 'a')
			->where("a.contracttype =:contracttype and a.language=:language")
			->setParameters(array(
				'contracttype'=>"Non-NMSO",
				'language'=>"English",
			));
		$query = $qb->getQuery();
		$aResult = $query->getResult();	
		return $aResult[0];		
	}
	public function getFeature($enquiry){		
		$hours = $enquiry->getHours();
		if($hours<=30) return 2;
		elseif($hours>30) return 1;
		return 3;
	}
}
<?php
/*
* Date Création: 07/03/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Training.php
* Description: Entité Training
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="adm_training")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\TrainingRepository")
*/
class Training
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
	  
    /**
     * @ORM\ManyToOne(targetEntity="Contracts")
	 * @ORM\JoinColumn(name="idcontracts",referencedColumnName="id")
     */      
    private $contracts;
			  
    /**
     * @ORM\Column(type="integer",nullable=true)
     */      
    private $idgroup;
	
    /**	
    * @ORM\Column(type="string",length=25, nullable=true)
    */
    private $hourperday;
		
    /**	
    * @ORM\Column(type="string",length=25, nullable=true)
    */
    private $hourperweek;
	
    /**
    * @ORM\Column(type="boolean", nullable=true)
    */    
    private $monday;
	
    /**
    * @ORM\Column(type="boolean", nullable=true)
    */    
    private $tuesday;
	
    /**
    * @ORM\Column(type="boolean", nullable=true)
    */    
    private $wednesday;
	
    /**
    * @ORM\Column(type="boolean", nullable=true)
    */    
    private $thursday;
	
    /**
    * @ORM\Column(type="boolean", nullable=true)
    */    
    private $friday;	
		
    /**
    * @ORM\Column(type="boolean", nullable=true)
    */    
    private $saturday;
	
    /**
    * @ORM\Column(type="time", nullable=true)
    */    
	private $startam;	
		
    /**
    * @ORM\Column(type="time", nullable=true)
    */    
	private $endam;	
	
    /**
    * @ORM\Column(type="time", nullable=true)
    */    
	private $startpm;
	
    /**
    * @ORM\Column(type="time", nullable=true)
    */    
	private $endpm;	
		
    /**
    * @ORM\Column(type="integer", nullable=true)
    */
	//Total training day number
	private $ttdnumber;
	
    /**
    * @ORM\Column(type="integer", nullable=true)
    */
	//Total training week number
	private $ttwnumber;
	
		
    /**
    * @ORM\Column(type="date", nullable=true)
    */    
	private $enddate;

    /**
     * Constructor
     */
    public function __construct()
    {
		$this->monday=$this->tuesday=$this->wednesday=$this->thursday=$this->friday=true;
		$this->startam = $this->endam = $this->startpm = $this->endpm = $this->getTime();
    }	

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idcontracts
     *
     * @param integer $idcontracts
     *
     * @return Training
     */
    public function setIdcontracts($idcontracts)
    {
        $this->idcontracts = $idcontracts;

        return $this;
    }

    /**
     * Get idcontracts
     *
     * @return integer
     */
    public function getIdcontracts()
    {
        return $this->idcontracts;
    }

    /**
     * Set startam
     *
     * @param \DateTime $startam
     *
     * @return Training
     */
    public function setStartam($startam)
    {
        $this->startam = $startam;

        return $this;
    }

    /**
     * Get startam
     *
     * @return \DateTime
     */
    public function getStartam()
    {
        return $this->startam;
    }

    /**
     * Set startpm
     *
     * @param \DateTime $startpm
     *
     * @return Training
     */
    public function setStartpm($startpm)
    {
        $this->startpm = $startpm;

        return $this;
    }

    /**
     * Get startpm
     *
     * @return \DateTime
     */
    public function getStartpm()
    {
        return $this->startpm;
    }

    /**
     * Set endam
     *
     * @param \DateTime $endam
     *
     * @return Training
     */
    public function setEndam($endam)
    {
        $this->endam = $endam;

        return $this;
    }

    /**
     * Get endam
     *
     * @return \DateTime
     */
    public function getEndam()
    {
        return $this->endam;
    }

    /**
     * Set endpm
     *
     * @param \DateTime $endpm
     *
     * @return Training
     */
    public function setEndpm($endpm)
    {
        $this->endpm = $endpm;

        return $this;
    }

    /**
     * Get endpm
     *
     * @return \DateTime
     */
    public function getEndpm()
    {
        return $this->endpm;
    }

    /**
     * Set hourperday
     *
     * @param integer $hourperday
     *
     * @return Training
     */
    public function setHourperday($hourperday)
    {
        $this->hourperday = $hourperday;

        return $this;
    }

    /**
     * Get hourperday
     *
     * @return integer
     */
    public function getHourperday()
    {
        return $this->hourperday;
    }

    /**
     * Set dayfrom
     *
     * @param string $dayfrom
     *
     * @return Training
     */
    public function setDayfrom($dayfrom)
    {
        $this->dayfrom = $dayfrom;

        return $this;
    }

    /**
     * Get dayfrom
     *
     * @return string
     */
    public function getDayfrom()
    {
        return $this->dayfrom;
    }

    /**
     * Set dayto
     *
     * @param string $dayto
     *
     * @return Training
     */
    public function setDayto($dayto)
    {
        $this->dayto = $dayto;

        return $this;
    }

    /**
     * Get dayto
     *
     * @return string
     */
    public function getDayto()
    {
        return $this->dayto;
    }

    /**
     * Set teacheram
     *
     * @param integer $teacheram
     *
     * @return Training
     */
    public function setTeacheram($teacheram)
    {
        $this->teacheram = $teacheram;

        return $this;
    }

    /**
     * Get teacheram
     *
     * @return integer
     */
    public function getTeacheram()
    {
        return $this->teacheram;
    }

    /**
     * Set teacherpm
     *
     * @param integer $teacherpm
     *
     * @return Training
     */
    public function setTeacherpm($teacherpm)
    {
        $this->teacherpm = $teacherpm;

        return $this;
    }

    /**
     * Get teacherpm
     *
     * @return integer
     */
    public function getTeacherpm()
    {
        return $this->teacherpm;
    }

    /**
     * Set monday
     *
     * @param boolean $monday
     *
     * @return Training
     */
    public function setMonday($monday)
    {
        $this->monday = $monday;

        return $this;
    }

    /**
     * Get monday
     *
     * @return boolean
     */
    public function getMonday()
    {
        return $this->monday;
    }

    /**
     * Set tuesday
     *
     * @param boolean $tuesday
     *
     * @return Training
     */
    public function setTuesday($tuesday)
    {
        $this->tuesday = $tuesday;

        return $this;
    }

    /**
     * Get tuesday
     *
     * @return boolean
     */
    public function getTuesday()
    {
        return $this->tuesday;
    }

    /**
     * Set wednesday
     *
     * @param boolean $wednesday
     *
     * @return Training
     */
    public function setWednesday($wednesday)
    {
        $this->wednesday = $wednesday;

        return $this;
    }

    /**
     * Get wednesday
     *
     * @return boolean
     */
    public function getWednesday()
    {
        return $this->wednesday;
    }

    /**
     * Set thursday
     *
     * @param boolean $thursday
     *
     * @return Training
     */
    public function setThursday($thursday)
    {
        $this->thursday = $thursday;

        return $this;
    }

    /**
     * Get thursday
     *
     * @return boolean
     */
    public function getThursday()
    {
        return $this->thursday;
    }

    /**
     * Set friday
     *
     * @param boolean $friday
     *
     * @return Training
     */
    public function setFriday($friday)
    {
        $this->friday = $friday;

        return $this;
    }

    /**
     * Get friday
     *
     * @return boolean
     */
    public function getFriday()
    {
        return $this->friday;
    }

    /**
     * Set ttdnumber
     *
     * @param integer $ttdnumber
     *
     * @return Training
     */
    public function setTtdnumber($ttdnumber)
    {
        $this->ttdnumber = $ttdnumber;

        return $this;
    }

    /**
     * Get ttdnumber
     *
     * @return integer
     */
    public function getTtdnumber()
    {
        return $this->ttdnumber;
    }

    /**
     * Set ttwnumber
     *
     * @param integer $ttwnumber
     *
     * @return Training
     */
    public function setTtwnumber($ttwnumber)
    {
        $this->ttwnumber = $ttwnumber;

        return $this;
    }

    /**
     * Get ttwnumber
     *
     * @return integer
     */
    public function getTtwnumber()
    {
        return $this->ttwnumber;
    }

    /**
     * Set enddate
     *
     * @param \DateTime $enddate
     *
     * @return Training
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;

        return $this;
    }

    /**
     * Get enddate
     *
     * @return \DateTime
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * Set contracts
     *
     * @param \Bo\AdminBundle\Entity\Contracts $contracts
     *
     * @return Training
     */
    public function setContracts(\Bo\AdminBundle\Entity\Contracts $contracts = null)
    {
        $this->contracts = $contracts;

        return $this;
    }

    /**
     * Get contracts
     *
     * @return \Bo\AdminBundle\Entity\Contracts
     */
    public function getContracts()
    {
        return $this->contracts;
    }

    /**
     * Set hourperweek
     *
     * @param string $hourperweek
     *
     * @return Training
     */
    public function setHourperweek($hourperweek)
    {
        $this->hourperweek = $hourperweek;

        return $this;
    }

    /**
     * Get hourperweek
     *
     * @return string
     */
    public function getHourperweek()
    {
        return $this->hourperweek;
    }

    /**
     * Set saturday
     *
     * @param boolean $saturday
     *
     * @return Training
     */
    public function setSaturday($saturday)
    {
        $this->saturday = $saturday;

        return $this;
    }

    /**
     * Get saturday
     *
     * @return boolean
     */
    public function getSaturday()
    {
        return $this->saturday;
    }
    /**
     * Clear Id
     */	
    public function clear()
    {
        $this->id = null; 
     
        return $this;
    }

    /**
     * Set idgroup
     *
     * @param integer $idgroup
     *
     * @return Training
     */
    public function setIdgroup($idgroup)
    {
        $this->idgroup = $idgroup;

        return $this;
    }

    /**
     * Get idgroup
     *
     * @return integer
     */
    public function getIdgroup()
    {
        return $this->idgroup;
    }
	protected function getTime(){
		return new \DateTime(date("Y-m-d",mktime(0, 0, 0, 0, 0, 0)));
	}
}

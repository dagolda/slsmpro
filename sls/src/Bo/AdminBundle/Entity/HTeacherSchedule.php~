<?php
/*
* Date Création: 07/03/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : TeacherSchedule.php
* Description: Entité Training
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="adm_hteacherschedule")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\HTeacherScheduleRepository")
*/
class HTeacherSchedule
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
	  
    /**
     * @ORM\Column(type="integer")
     */      
    private $idcontracts;
	  
    /**
     * @ORM\Column(type="integer")
     */      
    private $idemployee;
	
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
    * @ORM\Column(type="date")
    */    
	private $startdate;	
	
    /**
    * @ORM\Column(type="date")
    */    
	private $enddate;
		
    /**
    * @ORM\Column(type="datetime")
    */    
	private $creationdate;

    /**
     * Constructor
     */
    public function __construct()
    {
		$this->monday=$this->tuesday=$this->wednesday=$this->thursday=$this->friday=true;
		$this->creationdate=new \DateTime();
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
     * @return TeacherSchedule
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
     * Set idemployee
     *
     * @param integer $idemployee
     *
     * @return TeacherSchedule
     */
    public function setIdemployee($idemployee)
    {
        $this->idemployee = $idemployee;

        return $this;
    }

    /**
     * Get idemployee
     *
     * @return integer
     */
    public function getIdemployee()
    {
        return $this->idemployee;
    }

    /**
     * Set monday
     *
     * @param boolean $monday
     *
     * @return TeacherSchedule
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
     * @return TeacherSchedule
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
     * @return TeacherSchedule
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
     * @return TeacherSchedule
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
     * @return TeacherSchedule
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
     * Set saturday
     *
     * @param boolean $saturday
     *
     * @return TeacherSchedule
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
     * Set startam
     *
     * @param \DateTime $startam
     *
     * @return TeacherSchedule
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
     * Set endam
     *
     * @param \DateTime $endam
     *
     * @return TeacherSchedule
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
     * Set startpm
     *
     * @param \DateTime $startpm
     *
     * @return TeacherSchedule
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
     * Set endpm
     *
     * @param \DateTime $endpm
     *
     * @return TeacherSchedule
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
     * Set enddate
     *
     * @param \DateTime $enddate
     *
     * @return TeacherSchedule
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
     * Set startdate
     *
     * @param \DateTime $startdate
     *
     * @return HTeacherSchedule
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return HTeacherSchedule
     */
    public function setCreationdate($creationdate)
    {
        $this->creationdate = $creationdate;

        return $this;
    }

    /**
     * Get creationdate
     *
     * @return \DateTime
     */
    public function getCreationdate()
    {
        return $this->creationdate;
    }
}

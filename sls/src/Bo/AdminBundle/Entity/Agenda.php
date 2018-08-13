<?php
/*
* Date Création: 07/03/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Agenda.php
* Description: Entité agenda
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="adm_agenda")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\AgendaRepository")
*/

class Agenda
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
    * @ORM\ManyToOne(targetEntity="Contracts", inversedBy="agenda")
    * @ORM\JoinColumn(name="idcontract",referencedColumnName="id", nullable=true)
    */        
    private $contracts;

    /**
    * @ORM\ManyToOne(targetEntity="Students", inversedBy="agenda")
    * @ORM\JoinColumn(name="idstudent",referencedColumnName="id", nullable=true)
    */        
    private $students;
		  
    /**
    * @ORM\ManyToOne(targetEntity="Group", inversedBy="agenda")
    * @ORM\JoinColumn(name="idgroup",referencedColumnName="id", nullable=true)
    */      
    private $group;
		  
    /**
    * @ORM\ManyToOne(targetEntity="Employee", inversedBy="agenda")
    */      
    private $employee;

    /**
    * @ORM\OneToMany(targetEntity="Absences", mappedBy="agenda")
    */      
    private $absences;	

    /**
    * @ORM\OneToMany(targetEntity="Substitution", mappedBy="agenda")
    */      
    private $substitution;	

    /**
    * @ORM\OneToMany(targetEntity="Invitation", mappedBy="agenda", cascade="remove")
    */      
    private $invitation;

    /**
    * @ORM\OneToMany(targetEntity="Cancel", mappedBy="agenda")
    */      
    private $cancel;		
	
    /**	
    * @ORM\Column(type="string",length=25, nullable=true)
    */
    private $hourperday;
	
    /**	
    * @ORM\Column(type="string",length=2000, nullable=true)
    */
    private $description;
	
    /**	
    * @ORM\Column(type="string",length=25, nullable=true)
    */
    private $amorpm;
		
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
    * @ORM\Column(type="date", nullable=true)
    */    
    private $startdate;	
	
    /**
    * @ORM\Column(type="date", nullable=true)
    */    
    private $enddate;
		
    /**
    * @ORM\Column(type="boolean", nullable=true)
    */    
    private $priority=0;

    /**
    * @ORM\Column(type="integer")
    */    
    //0= close or archived; 1=In progress; 2=upcomming; 3=outstanding; 4=Cancel;
    private $status;

    /**
    * @ORM\Column(type="integer")
    */
    //0=sent; 1=accepted; 2=rejected
    private $istatus;	

    /**
    * @ORM\Column(type="date", nullable=true)
    */    
    private $idate;
		
    /**
    * @ORM\Column(type="datetime", nullable=true)
    */    
    private $creationdate;

    /**
    * Constructor
    */
    public function __construct()
    {
	$this->monday=$this->tuesday=$this->wednesday=$this->thursday=$this->friday=true;
	$this->creationdate=$this->startdate=$this->enddate=new \DateTime();
	$this->priority=0;
	$this->istatus=0;
	$this->status=1;
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
     * Set hourperday
     *
     * @param string $hourperday
     *
     * @return Agenda
     */
    public function setHourperday($hourperday)
    {
        $this->hourperday = $hourperday;

        return $this;
    }

    /**
     * Get hourperday
     *
     * @return string
     */
    public function getHourperday()
    {
        return $this->hourperday;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Agenda
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set amorpm
     *
     * @param string $amorpm
     *
     * @return Agenda
     */
    public function setAmorpm($amorpm)
    {
        $this->amorpm = $amorpm;

        return $this;
    }

    /**
     * Get amorpm
     *
     * @return string
     */
    public function getAmorpm()
    {
        return $this->amorpm;
    }

    /**
     * Set hourperweek
     *
     * @param string $hourperweek
     *
     * @return Agenda
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
     * Set monday
     *
     * @param boolean $monday
     *
     * @return Agenda
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
     * @return Agenda
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
     * @return Agenda
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
     * @return Agenda
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
     * @return Agenda
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
     * @return Agenda
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
     * @return Agenda
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
     * @return Agenda
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
     * @return Agenda
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
     * @return Agenda
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
     * Set startdate
     *
     * @param \DateTime $startdate
     *
     * @return Agenda
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
     * Set enddate
     *
     * @param \DateTime $enddate
     *
     * @return Agenda
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
     * Set priority
     *
     * @param boolean $priority
     *
     * @return Agenda
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return boolean
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Agenda
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

    /**
     * Add absence
     *
     * @param \Bo\AdminBundle\Entity\Absences $absence
     *
     * @return Agenda
     */
    public function addAbsence(\Bo\AdminBundle\Entity\Absences $absence)
    {
        $this->absences[] = $absence;

        return $this;
    }

    /**
     * Remove absence
     *
     * @param \Bo\AdminBundle\Entity\Absences $absence
     */
    public function removeAbsence(\Bo\AdminBundle\Entity\Absences $absence)
    {
        $this->absences->removeElement($absence);
    }

    /**
     * Get absences
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAbsences()
    {
        return $this->absences;
    }

    /**
     * Add substitution
     *
     * @param \Bo\AdminBundle\Entity\Substitution $substitution
     *
     * @return Agenda
     */
    public function addSubstitution(\Bo\AdminBundle\Entity\Substitution $substitution)
    {
        $this->substitution[] = $substitution;

        return $this;
    }

    /**
     * Remove substitution
     *
     * @param \Bo\AdminBundle\Entity\Substitution $substitution
     */
    public function removeSubstitution(\Bo\AdminBundle\Entity\Substitution $substitution)
    {
        $this->substitution->removeElement($substitution);
    }

    /**
     * Get substitution
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubstitution()
    {
        return $this->substitution;
    }

    /**
     * Set employee
     *
     * @param \Bo\AdminBundle\Entity\Employee $employee
     *
     * @return Agenda
     */
    public function setEmployee(\Bo\AdminBundle\Entity\Employee $employee = null)
    {
        $this->employee = $employee;

        return $this;
    }

    /**
     * Get employee
     *
     * @return \Bo\AdminBundle\Entity\Employee
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * Set students
     *
     * @param \Bo\AdminBundle\Entity\Students $students
     *
     * @return Agenda
     */
    public function setStudents(\Bo\AdminBundle\Entity\Students $students = null)
    {
        $this->students = $students;

        return $this;
    }

    /**
     * Set group
     *
     * @param \Bo\AdminBundle\Entity\Group $group
     *
     * @return Agenda
     */
    public function setGroup(\Bo\AdminBundle\Entity\Group $group = null)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return \Bo\AdminBundle\Entity\Group
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Agenda
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set contracts
     *
     * @param \Bo\AdminBundle\Entity\Contracts $contracts
     *
     * @return Agenda
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
     * Add invitation
     *
     * @param \Bo\AdminBundle\Entity\Invitation $invitation
     *
     * @return Agenda
     */
    public function addInvitation(\Bo\AdminBundle\Entity\Invitation $invitation)
    {
        $this->invitation[] = $invitation;

        return $this;
    }

    /**
     * Remove invitation
     *
     * @param \Bo\AdminBundle\Entity\Invitation $invitation
     */
    public function removeInvitation(\Bo\AdminBundle\Entity\Invitation $invitation)
    {
        $this->invitation->removeElement($invitation);
    }

    /**
     * Get invitation
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInvitation()
    {
        return $this->invitation;
    }

    /**
     * Set istatus
     *
     * @param integer $istatus
     *
     * @return Agenda
     */
    public function setIstatus($istatus)
    {
        $this->istatus = $istatus;

        return $this;
    }

    /**
     * Get istatus
     *
     * @return integer
     */
    public function getIstatus()
    {
        return $this->istatus;
    }

    /**
     * Set idate
     *
     * @param \DateTime $idate
     *
     * @return Agenda
     */
    public function setIdate($idate)
    {
        $this->idate = $idate;

        return $this;
    }

    /**
     * Get idate
     *
     * @return \DateTime
     */
    public function getIdate()
    {
        return $this->idate;
    }

    /**
     * Get students
     *
     * @return \Bo\AdminBundle\Entity\Students
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * Add cancel
     *
     * @param \Bo\AdminBundle\Entity\Cancel $cancel
     *
     * @return Agenda
     */
    public function addCancel(\Bo\AdminBundle\Entity\Cancel $cancel)
    {
        $this->cancel[] = $cancel;

        return $this;
    }

    /**
     * Remove cancel
     *
     * @param \Bo\AdminBundle\Entity\Cancel $cancel
     */
    public function removeCancel(\Bo\AdminBundle\Entity\Cancel $cancel)
    {
        $this->cancel->removeElement($cancel);
    }

    /**
     * Get cancel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCancel()
    {
        return $this->cancel;
    }
}

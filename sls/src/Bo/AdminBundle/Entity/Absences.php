<?php
/*
* Date Création: 20/03/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Absences.php
* Description: Liste des Absencess
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="adm_absences")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\AbsencesRepository")
*/

class Absences 
{
    /**
    * @ORM\GeneratedValue
    * @ORM\Id
    * @ORM\Column(type="integer")
    */
    private $id;
	  
    /**
    * @ORM\ManyToOne(targetEntity="Bo\AdminBundle\Entity\Employee")
    * @ORM\JoinColumn(name="idemployee",referencedColumnName="id", nullable=true)
    */      
    private $employee;	
	
    /**
    * @ORM\ManyToOne(targetEntity="Bo\AdminBundle\Entity\Students")
    * @ORM\JoinColumn(name="idstudents",referencedColumnName="id", nullable=true)
    */      
    private $students;	
		
    /**
    * @ORM\ManyToMany(targetEntity="Contracts", inversedBy="absences")
    * @ORM\JoinTable(name="contracts_absences")
    */      
    private $contracts;	
		
    /**
    * @ORM\ManyToMany(targetEntity="Group", inversedBy="absences")
    * @ORM\JoinTable(name="group_absences")
    */      
    private $group;	
		  
    /**
    * @ORM\ManyToOne(targetEntity="Agenda", inversedBy="absences")
    */      
    private $agenda;
	
    /**
     * @ORM\Column(type="string",length=255)
     */    
    private $motif;
	
    /**
     * @ORM\Column(type="string",length=25,nullable=true)
     */    
    private $amorpm;
		
    /**
    * @ORM\Column(type="date")
    */
	private $startdate;	
			
    /**
    * @ORM\Column(type="date",nullable=true)
    */
	private $enddate;
			
    /**
    * @ORM\Column(type="time",nullable=true)
    */
	private $startam;	
			
    /**
    * @ORM\Column(type="time",nullable=true)
    */
	private $endam;
				
    /**
    * @ORM\Column(type="time",nullable=true)
    */
	private $startpm;	
			
    /**
    * @ORM\Column(type="time",nullable=true)
    */
	private $endpm;
	
	/**
    * @ORM\Column(type="string")
    */
    private $numberday;	
		
    /**
    * @ORM\Column(type="string", nullable=true)
    */
    private $dayns;	
	
   /**
    * @ORM\Column(type="integer", nullable=true)
    */
    private $dayabs;	
	
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $noshow;
	
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $nsam;
	
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $nspm;
	
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $teacherpresence;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $tpam;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $tppm;
		
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $valid;
	
    /**
    * @ORM\Column(type="string",length=1000,nullable=true)
    */    
    private $comment;
			
    /**
    * @ORM\Column(type="integer")
    */
	//1=submitt; 2=validated; 3=rejected
	private $status;	
	
    /**
    * @ORM\Column(type="integer",nullable=true)
    */
	//1=valid; 2=not valid;
	private $validity;	
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $createby;
	
    /**
    * @ORM\Column(type="datetime")
    */    
	private $creationdate;
	
    /**
    * Constructor
    */
    public function __construct()
    {
		$this->creationdate=$this->startdate=$this->enddate=new \DateTime();
		$this->startam=$this->endam=$this->startpm=$this->endpm=new \DateTime(date("Y-m-d",mktime(0, 0, 0, 0, 0, 0)));
		$this->status=1;
		$this->numberday=1;
		$this->noshow=$this->teacherpresence=$this->nsam=$this->tpam=$this->nspm=$this->tppm=false;
		$this->amorpm="ALL";
		$this->dayns=0;
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
     * Set motif
     *
     * @param string $motif
     *
     * @return Absences
     */
    public function setMotif($motif)
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get motif
     *
     * @return string
     */
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set startdate
     *
     * @param \DateTime $startdate
     *
     * @return Absences
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
     * @return Absences
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
     * Set numberday
     *
     * @param integer $numberday
     *
     * @return Absences
     */
    public function setNumberday($numberday)
    {
        $this->numberday = $numberday;

        return $this;
    }

    /**
     * Get numberday
     *
     * @return integer
     */
    public function getNumberday()
    {
        return $this->numberday;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Absences
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Absences
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Absences
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
     * Set employee
     *
     * @param \Bo\AdminBundle\Entity\Employee $employee
     *
     * @return Absences
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
     * @return Absences
     */
    public function setStudents(\Bo\AdminBundle\Entity\Students $students = null)
    {
        $this->students = $students;

        return $this;
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
     * Set amorpm
     *
     * @param string $amorpm
     *
     * @return Absences
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
     * Set startam
     *
     * @param \DateTime $startam
     *
     * @return Absences
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
     * @return Absences
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
     * @return Absences
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
     * @return Absences
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
     * Set createby
     *
     * @param string $createby
     *
     * @return Absences
     */
    public function setCreateby($createby)
    {
        $this->createby = $createby;

        return $this;
    }

    /**
     * Get createby
     *
     * @return string
     */
    public function getCreateby()
    {
        return $this->createby;
    }

    /**
     * Set validity
     *
     * @param integer $validity
     *
     * @return Absences
     */
    public function setValidity($validity)
    {
        $this->validity = $validity;

        return $this;
    }

    /**
     * Get validity
     *
     * @return integer
     */
    public function getValidity()
    {
        return $this->validity;
    }

    /**
     * Add contract
     *
     * @param \Bo\AdminBundle\Entity\Contracts $contract
     *
     * @return Absences
     */
    public function addContract(\Bo\AdminBundle\Entity\Contracts $contract)
    {
        $this->contracts[] = $contract;

        return $this;
    }

    /**
     * Remove contract
     *
     * @param \Bo\AdminBundle\Entity\Contracts $contract
     */
    public function removeContract(\Bo\AdminBundle\Entity\Contracts $contract)
    {
        $this->contracts->removeElement($contract);
    }

    /**
     * Get contracts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContracts()
    {
        return $this->contracts;
    }

    /**
     * Add group
     *
     * @param \Bo\AdminBundle\Entity\Group $group
     *
     * @return Absences
     */
    public function addGroup(\Bo\AdminBundle\Entity\Group $group)
    {
        $this->group[] = $group;

        return $this;
    }

    /**
     * Remove group
     *
     * @param \Bo\AdminBundle\Entity\Group $group
     */
    public function removeGroup(\Bo\AdminBundle\Entity\Group $group)
    {
        $this->group->removeElement($group);
    }

    /**
     * Get group
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set noshow
     *
     * @param boolean $noshow
     *
     * @return Contracts
     */
    public function setNoshow($noshow)
    {
        $this->noshow = $noshow;

        return $this;
    }

    /**
     * Get noshow
     *
     * @return boolean
     */
    public function getNoshow()
    {
        return $this->noshow;
    }
	
    /**
     * Set valid
     *
     * @param boolean $valid
     *
     * @return Contracts
     */
    public function setValid($valid)
    {
        $this->valid = $valid;

        return $this;
    }

    /**
     * Get valid
     *
     * @return boolean
     */
    public function getValid()
    {
        return $this->valid;
    }
	
    /**
     * Set dayns
     *
     * @param integer $dayns
     *
     * @return Absences
     */
    public function setDayns($dayns)
    {
        $this->dayns = $dayns;

        return $this;
    }

    /**
     * Get dayns
     *
     * @return integer
     */
    public function getDayns()
    {
        return $this->dayns;
    }

    /**
     * Set dayabs
     *
     * @param integer $dayabs
     *
     * @return Absences
     */
    public function setDayabs($dayabs)
    {
        $this->dayabs = $dayabs;

        return $this;
    }

    /**
     * Get dayabs
     *
     * @return integer
     */
    public function getDayabs()
    {
        return $this->dayabs;
    }

    /**
     * Set teacherpresence
     *
     * @param boolean $teacherpresence
     *
     * @return Absences
     */
    public function setTeacherpresence($teacherpresence)
    {
        $this->teacherpresence = $teacherpresence;

        return $this;
    }

    /**
     * Get teacherpresence
     *
     * @return boolean
     */
    public function getTeacherpresence()
    {
        return $this->teacherpresence;
    }

    /**
     * Set agenda
     *
     * @param \Bo\AdminBundle\Entity\Agenda $agenda
     *
     * @return Absences
     */
    public function setAgenda(\Bo\AdminBundle\Entity\Agenda $agenda = null)
    {
        $this->agenda = $agenda;

        return $this;
    }

    /**
     * Get agenda
     *
     * @return \Bo\AdminBundle\Entity\Agenda
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * Set nsam
     *
     * @param boolean $nsam
     *
     * @return Absences
     */
    public function setNsam($nsam)
    {
        $this->nsam = $nsam;

        return $this;
    }

    /**
     * Get nsam
     *
     * @return boolean
     */
    public function getNsam()
    {
        return $this->nsam;
    }

    /**
     * Set nspm
     *
     * @param boolean $nspm
     *
     * @return Absences
     */
    public function setNspm($nspm)
    {
        $this->nspm = $nspm;

        return $this;
    }

    /**
     * Get nspm
     *
     * @return boolean
     */
    public function getNspm()
    {
        return $this->nspm;
    }

    /**
     * Set tpam
     *
     * @param boolean $tpam
     *
     * @return Absences
     */
    public function setTpam($tpam)
    {
        $this->tpam = $tpam;

        return $this;
    }

    /**
     * Get tpam
     *
     * @return boolean
     */
    public function getTpam()
    {
        return $this->tpam;
    }

    /**
     * Set tppm
     *
     * @param boolean $tppm
     *
     * @return Absences
     */
    public function setTppm($tppm)
    {
        $this->tppm = $tppm;

        return $this;
    }

    /**
     * Get tppm
     *
     * @return boolean
     */
    public function getTppm()
    {
        return $this->tppm;
    }
}

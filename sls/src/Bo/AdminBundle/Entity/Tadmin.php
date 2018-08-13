<?php
/*
* Date Création: 20/02/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Tadmin.php
* Description: Entité des heures d'aministration allouées aux professeurs
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="adm_tadmin")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\TadminRepository")
*/
class Tadmin 
{
    /**
    * @ORM\GeneratedValue
    * @ORM\Id
    * @ORM\Column(type="integer")
    */
    private $id;
		
    /**
    * @ORM\ManyToOne(targetEntity="Employee")
	* @ORM\JoinColumn(name="idemployee",referencedColumnName="id")
    */      
    private $employee;
		
    /**
    * @ORM\Column(type="date")
    */    
	private $startdate;	
		
    /**
    * @ORM\Column(type="date")
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
    * @ORM\Column(type="string",length=7)
    */    
    private $hour;
			
    /**
    * @ORM\Column(type="string",length=2000, nullable=true)
    */    
    private $note;
	
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
     * Set startdate
     *
     * @param \DateTime $startdate
     *
     * @return Tadmin
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
     * @return Tadmin
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
     * Set startam
     *
     * @param \DateTime $startam
     *
     * @return Tadmin
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
     * @return Tadmin
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
     * @return Tadmin
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
     * @return Tadmin
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
     * Set hour
     *
     * @param string $hour
     *
     * @return Tadmin
     */
    public function setHour($hour)
    {
        $this->hour = $hour;

        return $this;
    }

    /**
     * Get hour
     *
     * @return string
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * Set month
     *
     * @param string $month
     *
     * @return Tadmin
     */
    public function setMonth($month)
    {
        $this->month = $month;

        return $this;
    }

    /**
     * Get month
     *
     * @return string
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Set year
     *
     * @param string $year
     *
     * @return Tadmin
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return Tadmin
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Tadmin
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
     * @return Tadmin
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
}

<?php
/*
* Date Création: 10/10/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : modelts.php
* Description: Entité des Timesheets
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="adm_modelts")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\ModelTsRepository")
*/
class ModelTs 
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
    * @ORM\Column(type="datetime")
    */    
	private $creationdate;	
	
    /**
    * Constructor
    */
    public function __construct()
    {
		$this->monday=$this->tuesday=$this->wednesday=$this->thursday=$this->friday=true;
		$this->startam = $this->endam = $this->startpm = $this->endpm = $this->getTime();
		$this->creationdate=new \DateTime();
    }
	protected function getTime(){
		return new \DateTime(date("Y-m-d",mktime(0, 0, 0, 0, 0, 0)));
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
     * Set monday
     *
     * @param boolean $monday
     *
     * @return ModelTs
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
     * @return ModelTs
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
     * @return ModelTs
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
     * @return ModelTs
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
     * @return ModelTs
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
     * @return ModelTs
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
     * @return ModelTs
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
     * @return ModelTs
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
     * @return ModelTs
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
     * @return ModelTs
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
     * @return ModelTs
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
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return ModelTs
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
     * @return ModelTs
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

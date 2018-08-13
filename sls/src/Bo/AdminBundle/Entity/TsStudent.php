<?php
/*
* Date Création: 08/05/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : TsStudent.php
* Description: Entité des TsStudent
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Table(name="adm_tsstudent")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\TsStudentRepository")
*/
class TsStudent 
{
    /**
    * @ORM\GeneratedValue
    * @ORM\Id
    * @ORM\Column(type="integer")
    */
    private $id;
	
    /**
    * @ORM\Column(type="date")
    */    
	private $ddate;	
	
    /**
    * @ORM\Column(type="integer", nullable=true)
    */
    private $idcontract;
		
    /**
    * @ORM\ManyToOne(targetEntity="Students",cascade="persist")
	* @ORM\JoinColumn(name="idstudents",referencedColumnName="id")
    */      
    private $students;	

    /**
    * @ORM\ManyToOne(targetEntity="Timesheet")
	* @ORM\JoinColumn(name="idtimesheet",referencedColumnName="id",nullable=true)
    */      
    private $timesheet;		
	
    /**
     * @ORM\Column(type="string",length=5, nullable=true)
     */  
	//Legende am : P, N-S or ABS
    private $legam;
		
    /**
     * @ORM\Column(type="string",length=5, nullable=true)
     */ 
	//Legende pm : P, N-S or ABS	 
    private $legpm;
		
    /**
    * @ORM\Column(type="string",length=2, nullable=true)
    */    
    private $month;
	
    /**
    * @ORM\Column(type="string",length=4)
    */    
    private $year;

    /**
     * @ORM\Column(type="string",length=5, nullable=true)
     */    
    private $am;	

    /**
     * @ORM\Column(type="string",length=5, nullable=true)
     */    
    private $pm;
	
    /**
    * @ORM\Column(type="string",length=5, nullable=true)
    */    
    private $ham;	

    /**
     * @ORM\Column(type="string",length=5, nullable=true)
     */    
    private $hpm;
		
    /**
     * @ORM\Column(type="string",length=100, nullable=true)
     */    
    private $delay;
	
    /**
    * @ORM\Column(type="string",length=100, nullable=true)
    */ 
	//left early	 
    private $dh;
	
    /**
	 * @ORM\Column(type="integer")
     */ 
	//1: submitted; 2=validated by student;
    private $status;	
	
    /**
    * @ORM\Column(type="datetime")
    */    
	private $creationdate;	
	
    /**
    * Constructor
    */
    public function __construct()
    {
		$this->creationdate=$this->ddate=new \DateTime();
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
     * Set legende
     *
     * @param string $legende
     *
     * @return TsStudent
     */
    public function setLegende($legende)
    {
        $this->legende = $legende;

        return $this;
    }

    /**
     * Get legende
     *
     * @return string
     */
    public function getLegende()
    {
        return $this->legende;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return TsStudent
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
     * Set students
     *
     * @param \Bo\AdminBundle\Entity\Students $students
     *
     * @return TsStudent
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
     * Set timesheet
     *
     * @param \Bo\AdminBundle\Entity\Timesheet $timesheet
     *
     * @return TsStudent
     */
    public function setTimesheet(\Bo\AdminBundle\Entity\Timesheet $timesheet = null)
    {
        $this->timesheet = $timesheet;

        return $this;
    }

    /**
     * Get timesheet
     *
     * @return \Bo\AdminBundle\Entity\Timesheet
     */
    public function getTimesheet()
    {
        return $this->timesheet;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return TsStudent
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
     * Set delay
     *
     * @param string $delay
     *
     * @return TsStudent
     */
    public function setDelay($delay)
    {
        $this->delay = $delay;

        return $this;
    }

    /**
     * Get delay
     *
     * @return string
     */
    public function getDelay()
    {
        return $this->delay;
    }

    /**
     * Set idcontract
     *
     * @param integer $idcontract
     *
     * @return TsStudent
     */
    public function setIdcontract($idcontract)
    {
        $this->idcontract = $idcontract;

        return $this;
    }

    /**
     * Get idcontract
     *
     * @return integer
     */
    public function getIdcontract()
    {
        return $this->idcontract;
    }

    /**
     * Set dh
     *
     * @param string $dh
     *
     * @return TsStudent
     */
    public function setDh($dh)
    {
        $this->dh = $dh;

        return $this;
    }

    /**
    * Get dh
    *
    * @return string
    */
    public function getDh()
    {
        return $this->dh;
    }

    /**
    * Set ddate
    *
    * @param \DateTime $ddate
    *
    * @return TsStudent
    */
    public function setDdate($ddate)
    {
        $this->ddate = $ddate;

        return $this;
    }

    /**
    * Get ddate
    *
    * @return \DateTime
    */
    public function getDdate()
    {
        return $this->ddate;
    }

    /**
     * Set month
     *
     * @param string $month
     *
     * @return TsStudent
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
     * @return TsStudent
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
     * Set am
     *
     * @param string $am
     *
     * @return TsStudent
     */
    public function setAm($am)
    {
        $this->am = $am;

        return $this;
    }

    /**
     * Get am
     *
     * @return string
     */
    public function getAm()
    {
        return $this->am;
    }

    /**
     * Set pm
     *
     * @param string $pm
     *
     * @return TsStudent
     */
    public function setPm($pm)
    {
        $this->pm = $pm;

        return $this;
    }

    /**
     * Get pm
     *
     * @return string
     */
    public function getPm()
    {
        return $this->pm;
    }

    /**
     * Set ham
     *
     * @param string $ham
     *
     * @return TsStudent
     */
    public function setHam($ham)
    {
        $this->ham = $ham;

        return $this;
    }

    /**
     * Get ham
     *
     * @return string
     */
    public function getHam()
    {
        return $this->ham;
    }

    /**
     * Set hpm
     *
     * @param string $hpm
     *
     * @return TsStudent
     */
    public function setHpm($hpm)
    {
        $this->hpm = $hpm;

        return $this;
    }

    /**
     * Get hpm
     *
     * @return string
     */
    public function getHpm()
    {
        return $this->hpm;
    }

    /**
     * Set legam
     *
     * @param string $legam
     *
     * @return TsStudent
     */
    public function setLegam($legam)
    {
        $this->legam = $legam;

        return $this;
    }

    /**
     * Get legam
     *
     * @return string
     */
    public function getLegam()
    {
        return $this->legam;
    }

    /**
     * Set legpm
     *
     * @param string $legpm
     *
     * @return TsStudent
     */
    public function setLegpm($legpm)
    {
        $this->legpm = $legpm;

        return $this;
    }

    /**
     * Get legpm
     *
     * @return string
     */
    public function getLegpm()
    {
        return $this->legpm;
    }
}

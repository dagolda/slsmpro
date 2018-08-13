<?php
/*
* Date Création: 20/02/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Timesheet.php
* Description: Entité des Timesheets
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="adm_timesheet")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\TimesheetRepository")
*/
class Timesheet 
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
    * @ORM\ManyToOne(targetEntity="Group")
	* @ORM\JoinColumn(name="idgroup",referencedColumnName="id",nullable=true)
    */      
    private $group;	
		
    /**
    * @ORM\ManyToOne(targetEntity="Students")
	* @ORM\JoinColumn(name="idstudents",referencedColumnName="id",nullable=true)
    */      
    private $students;			
	
    /**
    * @ORM\ManyToOne(targetEntity="Contracts")
	* @ORM\JoinColumn(name="idcontracts",referencedColumnName="id",nullable=true)
    */      
    private $contract;
	
    /**
    * @ORM\ManyToOne(targetEntity="Tsweek")
	* @ORM\JoinColumn(name="idtsweek",referencedColumnName="id")
    */      
    private $tsweek;
		
    /**
    * @ORM\Column(type="date")
    */    
    private $ddate;	
	
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
    //Number hour of course given to student by the teacher     
    private $hour;
	
    /**
    * @ORM\Column(type="string",length=7,nullable=true)
    */
    //Number hour of No show granted to teatcher	   
    private $teacherns;
	
    /**
    * @ORM\Column(type="string",length=7,nullable=true)
    */  
    //Number hour of No show retained for the student 
    private $studentns;
	
    /**
     * @ORM\Column(type="string",length=5)
     */    
    private $legende;
	
    /**
    * @ORM\Column(type="string",length=2)
    */    
    private $month;
	
    /**
    * @ORM\Column(type="string",length=4)
    */    
    private $year;
	
    /**
    * @ORM\ManyToOne(targetEntity="Typets")
	* @ORM\JoinColumn(name="idtypets",referencedColumnName="id")
    */       
    private $typets;
	
    /**
    * @ORM\Column(type="integer",nullable=true)
    */    
    private $idperiodpay;

	
    /**
    * @ORM\Column(type="integer",nullable=true)
    */ 
    // Id student absence   
    private $idstudentabsence;
		
    /**
    * @ORM\Column(type="string",length=5,nullable=true)
	* //choice between AM, PM, ALL; Automatically filled by the system
    */    
    private $amorpm;
		
    /**
    * @ORM\ManyToMany(targetEntity="Billing", inversedBy="Timesheet")
	* @ORM\JoinColumn(name="idbilling",referencedColumnName="id",nullable=true)
    */      
    private $billing;
	
    /**
	* @ORM\Column(type="integer")
    */ 
	//1:submitted; 2=Validation; 3:validated; 4:rejected; 5:Payroll traitement; 6:paid; 7:billing;
    private $status;	
			
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
		$this->creationdate=$this->ddate=new \DateTime();
		$this->status=1;
		$this->studentns=0;
		$this->teacherns=0;	
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
     * Set startam
     *
     * @param string $startam
     *
     * @return Timesheet
     */
    public function setStartam($startam)
    {
        $this->startam = $startam;

        return $this;
    }

    /**
     * Get startam
     *
     * @return string
     */
    public function getStartam()
    {
        return $this->startam;
    }

    /**
     * Set endam
     *
     * @param string $endam
     *
     * @return Timesheet
     */
    public function setEndam($endam)
    {
        $this->endam = $endam;

        return $this;
    }

    /**
     * Get endam
     *
     * @return string
     */
    public function getEndam()
    {
        return $this->endam;
    }

    /**
     * Set startpm
     *
     * @param string $startpm
     *
     * @return Timesheet
     */
    public function setStartpm($startpm)
    {
        $this->startpm = $startpm;

        return $this;
    }

    /**
     * Get startpm
     *
     * @return string
     */
    public function getStartpm()
    {
        return $this->startpm;
    }

    /**
     * Set endpm
     *
     * @param string $endpm
     *
     * @return Timesheet
     */
    public function setEndpm($endpm)
    {
        $this->endpm = $endpm;

        return $this;
    }

    /**
     * Get endpm
     *
     * @return string
     */
    public function getEndpm()
    {
        return $this->endpm;
    }

    /**
     * Set hour
     * @param integer $hour
     * @return Timesheet
     */
    public function setHour($hour)
    {
        $this->hour = $hour;

        return $this;
    }

    /**
     * Get hour
     * @return integer
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * Set creationdate
     * @param \DateTime $creationdate
     * @return Timesheet
     */
    public function setCreationdate($creationdate)
    {
        $this->creationdate = $creationdate;

        return $this;
    }

    /**
     * Get creationdate
     * @return \DateTime
     */
    public function getCreationdate()
    {
        return $this->creationdate;
    }

    /**
     * Set ddate
     *
     * @param \DateTime $ddate
     *
     * @return Timesheet
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
     * Set legende
     *
     * @param string $legende
     *
     * @return Timesheet
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
     * Set employee
     *
     * @param \Bo\AdminBundle\Entity\Employee $employee
     *
     * @return Timesheet
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
     * Set contract
     *
     * @param \Bo\AdminBundle\Entity\Contracts $contract
     *
     * @return Timesheet
     */
    public function setContract(\Bo\AdminBundle\Entity\Contracts $contract = null)
    {
        $this->contract = $contract;

        return $this;
    }

    /**
     * Get contract
     *
     * @return \Bo\AdminBundle\Entity\Contracts
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Set tsweek
     *
     * @param \Bo\AdminBundle\Entity\Tsweek $tsweek
     *
     * @return Timesheet
     */
    public function setTsweek(\Bo\AdminBundle\Entity\Tsweek $tsweek = null)
    {
        $this->tsweek = $tsweek;

        return $this;
    }

    /**
     * Get tsweek
     *
     * @return \Bo\AdminBundle\Entity\Tsweek
     */
    public function getTsweek()
    {
        return $this->tsweek;
    }

    /**
     * Set group
     *
     * @param \Bo\AdminBundle\Entity\Group $group
     *
     * @return Timesheet
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
     * @return Timesheet
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
     * Set students
     *
     * @param \Bo\AdminBundle\Entity\Students $students
     *
     * @return Timesheet
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
     * Set next status
     *
     * @return integer
     */
	public function setNextStatus()
    {
        $this->status = intval($this->status)+1;
		
		return $this;
    }
    /**
     * Get next status
     *
     * @return integer
     */
	public function getNextStatus()
    {
        return intval($this->status)+1;
    }
    /**
     * Set next status
     *
     * @return integer
     */
	public function setRejectStatus()
    {
        $this->status = 4;
        
		return $this;
    }
    /**
     * Get next status
     *
     * @return integer
     */
	public function getRejectStatus()
    {
       return 4;
    }
	/**
     * Set next status
     *
     * @return integer
     */
	public function setInitialStatus()
    {
        $this->status = 1;
		
        return $this;
    }
	/**
     * Get next status
     *
     * @return integer
     */
	public function getInitialStatus()
    {
        return 1;
    }
	 /**
     * Set validated status
     *
     * @return integer
     */
	public function setValidatedStatus()
    {
        $this->status = 2;
		
        return $this;
    }
	 /**
     * Get validated status
     *
     * @return integer
     */
	public function getValidatedStatus()
    {
        return 2;
    }
	 /**
     * Set validated status
     *
     * @return integer
     */
	public function setOthersStatus()
    {
        $this->status = 8;
		
        return $this;
    }
	 /**
     * Get validated status
     *
     * @return integer
     */
	public function getOthersStatus()
    {
        return 8;
    }
	 /**
     * Set payroll status
     *
     * @return integer
     */
	public function setPayrollStatus()
    {
        $this->status = 5;
		
        return $this;
    }

	 /**
     * Set paid status
     *
     * @return integer
     */
	public function setPaidStatus()
    {
        $this->status = 6;
		
        return $this;
    }
	
	 /**
     * Set billing status
     *
     * @return integer
     */
	public function setBillingStatus()
    {
        $this->status = 7;
		
        return $this;
    }

    /**
     * Set amorpm
     *
     * @param string $amorpm
     *
     * @return Timesheet
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
     * Set idperiodpay
     *
     * @param integer $idperiodpay
     *
     * @return Timesheet
     */
    public function setIdperiodpay($idperiodpay)
    {
        $this->idperiodpay = $idperiodpay;

        return $this;
    }

    /**
     * Get idperiodpay
     *
     * @return integer
     */
    public function getIdperiodpay()
    {
        return $this->idperiodpay;
    }

    /**
     * Set typets
     *
     * @param \Bo\AdminBundle\Entity\Typets $typets
     *
     * @return Timesheet
     */
    public function setTypets(\Bo\AdminBundle\Entity\Typets $typets = null)
    {
        $this->typets = $typets;

        return $this;
    }

    /**
     * Get typets
     *
     * @return \Bo\AdminBundle\Entity\Typets
     */
    public function getTypets()
    {
        return $this->typets;
    }

    /**
     * Add billing
     *
     * @param \Bo\AdminBundle\Entity\Billing $billing
     *
     * @return Timesheet
     */
    public function addBilling(\Bo\AdminBundle\Entity\Billing $billing)
    {
        $this->billing[] = $billing;

        return $this;
    }

    /**
     * Remove billing
     *
     * @param \Bo\AdminBundle\Entity\Billing $billing
     */
    public function removeBilling(\Bo\AdminBundle\Entity\Billing $billing)
    {
        $this->billing->removeElement($billing);
    }

    /**
    * Get billing
    * @return \Doctrine\Common\Collections\Collection
    */
    public function getBilling()
    {
        return $this->billing;
    }
	public function getStatusDefinition(){
		return array('1'=>"submitted", '2'=>"pending validation", '3'=>"validated", '4'=>"rejected",'5'=>"payroll traitement",'6'=>"paid",'7'=>"billing");		
	}

    /**
     * Set month
     *
     * @param string $month
     *
     * @return Timesheet
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
     * @return Timesheet
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
     * @return Timesheet
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
     * Set noshow
     *
     * @param string $noshow
     *
     * @return Timesheet
     */
    public function setNoshow($noshow)
    {
        $this->noshow = $noshow;

        return $this;
    }

    /**
     * Get noshow
     *
     * @return string
     */
    public function getNoshow()
    {
        return $this->noshow;
    }

    /**
     * Set teacherns
     *
     * @param string $teacherns
     *
     * @return Timesheet
     */
    public function setTeacherns($teacherns)
    {
        $this->teacherns = $teacherns;

        return $this;
    }

    /**
     * Get teacherns
     *
     * @return string
     */
    public function getTeacherns()
    {
        return $this->teacherns;
    }

    /**
     * Set studentns
     *
     * @param string $studentns
     *
     * @return Timesheet
     */
    public function setStudentns($studentns)
    {
        $this->studentns = $studentns;

        return $this;
    }

    /**
     * Get studentns
     *
     * @return string
     */
    public function getStudentns()
    {
        return $this->studentns;
    }

    /**
     * Set idstudentabsence
     *
     * @param integer $idstudentabsence
     *
     * @return Timesheet
     */
    public function setIdstudentabsence($idstudentabsence)
    {
        $this->idstudentabsence = $idstudentabsence;

        return $this;
    }

    /**
     * Get idstudentabsence
     *
     * @return integer
     */
    public function getIdstudentabsence()
    {
        return $this->idstudentabsence;
    }
}

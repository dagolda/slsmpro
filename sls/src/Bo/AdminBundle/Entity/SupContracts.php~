<?php
/* 
* Date Création: 20/02/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : SupContracts.php
* Description: Entité SupContracts
*/ 
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="adm_supcontracts")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\SupContractsRepository")
*/
class SupContracts
{
    /**
    * @ORM\GeneratedValue
    * @ORM\Id
    * @ORM\Column(type="integer")
    */
    private $id;
		
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $reference;
	   
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $typeoftraining;
		
    /**
    * @ORM\ManyToOne(targetEntity="Employee")
	* @ORM\JoinColumn(name="idadvisor",referencedColumnName="id",nullable=true)
    */    
    private $advisor;
		
    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */    
    private $department;
		
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */ 
	//NMSO	 
    private $session;
		
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */ 
	//NMSO	 
    private $program;
			
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */ 
	//NMSO	 
    private $step;
			
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */ 
	//NMSO	 
    private $ryacc;
				
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */ 
	//NMSO	 
    private $startlesson;
					
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */ 
	//NMSO	 
    private $learningplan;
					
    /**
    * @ORM\Column(type="string",length=5, nullable=true)
    */ 
	//yes or no 
    private $planreceived;
					
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */ 
    private $targetlevel;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $hourperweek;
		
    /**
    * @ORM\ManyToOne(targetEntity="BillingContact")
	* @ORM\JoinColumn(name="billingcontact",referencedColumnName="id",nullable=true)
    */     
    private $billingcontact;
			
    /**
     * @ORM\Column(type="string",length=100, nullable=true)
     */    
    private $language;
	
    /**
    * @ORM\ManyToOne(targetEntity="Coordinator")
	* @ORM\JoinColumn(name="idcoordinator",referencedColumnName="id",nullable=true)
    */  
    private $coordinator;
		
    /**
    * @ORM\ManyToOne(targetEntity="Group")
	* @ORM\JoinColumn(name="idgroup",referencedColumnName="id",nullable=true)
    */  
    private $group;
			
    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */    
    private $ordernumber;
	
    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */    
    private $contractnumber;
		
    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */    
    private $methodofsupply;
	
    /**
    * @ORM\Column(type="date", nullable=true)
    */    
	private $contractdate;
	
    /**
    * @ORM\Column(type="date", nullable=true)
    */    
	private $clicsignaturedate;	
	
    /**
    * @ORM\Column(type="date", nullable=true)
    */    
	private $clientsignaturedate;
		
    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */    
    private $adresse;
	
    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */    
    private $location;
	
    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */    
    private $schedule;

    /**
    * @ORM\ManyToOne(targetEntity="Campus")
	* @ORM\JoinColumn(name="idcampus",referencedColumnName="id",nullable=true)
    */  	
	private $campus;	
    
    /**
     * @ORM\ManyToOne(targetEntity="Typecontract")
	 * @ORM\JoinColumn(name="idtypecontract",referencedColumnName="id")
     */      
    private $typecontract;	
	
    /**
     * @ORM\Column(type="string",length=100, nullable=true)
     */    
    private $estimatedcost;	
	
    /**
     * @ORM\Column(type="string",length=100, nullable=true)
     */    
    private $hourlyrate;	
	
    /**
    * @ORM\ManyToOne(targetEntity="Client")
	* @ORM\JoinColumn(name="idclient",referencedColumnName="id")
    */      
    private $client;	
	
    /**
     * @ORM\ManyToOne(targetEntity="Workfields")
	 * @ORM\JoinColumn(name="idworkfields",referencedColumnName="id",nullable=true)
     */      
    private $workfields;	
	
    /**
     * @ORM\ManyToMany(targetEntity="Employee")
	 * @ORM\JoinColumn(name="idemployee",referencedColumnName="id",nullable=true)
     */      
    private $employee;
	
    /**
    * @ORM\ManyToMany(targetEntity="Students")
	* @ORM\JoinColumn(name="idstudent",referencedColumnName="id",nullable=true)
    */        
    private $students;	
	
    /**
    * @ORM\ManyToMany(targetEntity="Local")
	* @ORM\JoinColumn(name="idlocal",referencedColumnName="id",nullable=true)
    */      
    private $local;		
	
    /**
    * @ORM\Column(type="string",length=100, nullable=true)
    */
    private $hoursnumber;
		
    /**
    * @ORM\Column(type="string",length=100, nullable=true)
    */
    private $initialhours;
		
    /**
    * @ORM\Column(type="string",length=100, nullable=true)
    */
    private $usedhours;
	
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $archived;
			
    /**
    * @ORM\Column(type="string",length=100, nullable=true)
    */
    private $typetime;
		
    /**
    * @ORM\Column(type="string",length=2000, nullable=true)
    */    
    private $notes;
	
    /**
    * @ORM\Column(type="date")
    */    
	private $startdate;	
	
    /**
    * @ORM\Column(type="date")
    */    
	private $enddate;	
		
    /**
    * @ORM\Column(type="date", nullable=true)
    */    
	private $initialenddate;	
	
    /**
    * @ORM\Column(type="date", nullable=true)
    */
	//Date de reception du contrat
	private $receivedate;	
		
    /**
    * @ORM\Column(type="boolean")
    */    
	//0=Completed or close or archived;1=In progress; 2=uncomming 
	private $status;	
				
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $createby;
	
    /**
    * @ORM\Column(type="datetime")
    */    
	private $creationdate;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $deleteby;
			
    /**
    * @ORM\Column(type="datetime")
    */    
	private $deleteddate;
	
    /**
     * Constructor
     */
    public function __construct()
    {
		return $this->firstname." ".$this->name;
    }
	
	public function __toString(){
		return $this->contractnumber;
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
     * Set designation
     *
     * @param string $designation
     *
     * @return SupContracts
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set hoursnumber
     *
     * @param integer $hoursnumber
     *
     * @return SupContracts
     */
    public function setHoursnumber($hoursnumber)
    {
        $this->hoursnumber = $hoursnumber;

        return $this;
    }

    /**
     * Get hoursnumber
     *
     * @return integer
     */
    public function getHoursnumber()
    {
        return $this->hoursnumber;
    }

    /**
     * Set startdate
     *
     * @param \DateTime $startdate
     *
     * @return SupContracts
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
     * @return SupContracts
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
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return SupContracts
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
     * Set client
     *
     * @param \Bo\AdminBundle\Entity\Client $client
     *
     * @return SupContracts
     */
    public function setClient(\Bo\AdminBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \Bo\AdminBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set workfields
     *
     * @param \Bo\AdminBundle\Entity\Workfields $workfields
     *
     * @return SupContracts
     */
    public function setWorkfields(\Bo\AdminBundle\Entity\Workfields $workfields = null)
    {
        $this->workfields = $workfields;

        return $this;
    }

    /**
     * Get workfields
     *
     * @return \Bo\AdminBundle\Entity\Workfields
     */
    public function getWorkfields()
    {
        return $this->workfields;
    }

    /**
     * Set typecontract
     *
     * @param \Bo\AdminBundle\Entity\Typecontract $typecontract
     *
     * @return SupContracts
     */
    public function setTypecontract(\Bo\AdminBundle\Entity\Typecontract $typecontract = null)
    {
        $this->typecontract = $typecontract;

        return $this;
    }

    /**
     * Get typecontract
     *
     * @return \Bo\AdminBundle\Entity\Typecontract
     */
    public function getTypecontract()
    {
        return $this->typecontract;
    }

    /**
     * Set archived
     *
     * @param boolean $archived
     *
     * @return SupContracts
     */
    public function setArchived($archived)
    {
        $this->archived = $archived;

        return $this;
    }

    /**
     * Get archived
     *
     * @return boolean
     */
    public function getArchived()
    {
        return $this->archived;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return SupContracts
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return SupContracts
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return SupContracts
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Add local
     *
     * @param \Bo\AdminBundle\Entity\Local $local
     *
     * @return SupContracts
     */
    public function addLocal(\Bo\AdminBundle\Entity\Local $local)
    {
        $this->local[] = $local;

        return $this;
    }

    /**
     * Remove local
     *
     * @param \Bo\AdminBundle\Entity\Local $local
     */
    public function removeLocal(\Bo\AdminBundle\Entity\Local $local)
    {
        $this->local->removeElement($local);
    }

    /**
     * Get local
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Set campus
     *
     * @param \Bo\AdminBundle\Entity\Campus $campus
     *
     * @return SupContracts
     */
    public function setCampus(\Bo\AdminBundle\Entity\Campus $campus = null)
    {
        $this->campus = $campus;

        return $this;
    }

    /**
     * Get campus
     *
     * @return \Bo\AdminBundle\Entity\Campus
     */
    public function getCampus()
    {
        return $this->campus;
    }
	
	/**
	* Return the contract status
	*/
    public function getStringStatus()
    {
        $now = new \DateTime();
		if($now <= $this->enddate){
			$sStatus="In progress";
		}else{
			$sStatus="Completed";
		}
		return $sStatus;
    }
	/**
	* Return the contract status
	*/
    public function updateStatus()
    {
        $now = new \DateTime();
		if($now <= $this->enddate){
			$this->status=1;
		}else{
			$this->status=0;
		}
		return $this->status;
    }
    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return SupContracts
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set billingcontactname
     *
     * @param string $billingcontactname
     *
     * @return SupContracts
     */
    public function setBillingcontactname($billingcontactname)
    {
        $this->billingcontactname = $billingcontactname;

        return $this;
    }

    /**
     * Get billingcontactname
     *
     * @return string
     */
    public function getBillingcontactname()
    {
        return $this->billingcontactname;
    }

    /**
     * Set billingcontactemail
     *
     * @param string $billingcontactemail
     *
     * @return SupContracts
     */
    public function setBillingcontactemail($billingcontactemail)
    {
        $this->billingcontactemail = $billingcontactemail;

        return $this;
    }

    /**
     * Get billingcontactemail
     *
     * @return string
     */
    public function getBillingcontactemail()
    {
        return $this->billingcontactemail;
    }

    /**
     * Set billingcontactphone
     *
     * @param string $billingcontactphone
     *
     * @return SupContracts
     */
    public function setBillingcontactphone($billingcontactphone)
    {
        $this->billingcontactphone = $billingcontactphone;

        return $this;
    }

    /**
     * Get billingcontactphone
     *
     * @return string
     */
    public function getBillingcontactphone()
    {
        return $this->billingcontactphone;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return SupContracts
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set ordernumber
     *
     * @param string $ordernumber
     *
     * @return SupContracts
     */
    public function setOrdernumber($ordernumber)
    {
        $this->ordernumber = $ordernumber;

        return $this;
    }

    /**
     * Get ordernumber
     *
     * @return string
     */
    public function getOrdernumber()
    {
        return $this->ordernumber;
    }

    /**
     * Set contractnumber
     *
     * @param string $contractnumber
     *
     * @return SupContracts
     */
    public function setContractnumber($contractnumber)
    {
        $this->contractnumber = $contractnumber;

        return $this;
    }

    /**
     * Get contractnumber
     *
     * @return string
     */
    public function getContractnumber()
    {
        return $this->contractnumber;
    }

    /**
     * Set methodofsupply
     *
     * @param string $methodofsupply
     *
     * @return SupContracts
     */
    public function setMethodofsupply($methodofsupply)
    {
        $this->methodofsupply = $methodofsupply;

        return $this;
    }

    /**
     * Get methodofsupply
     *
     * @return string
     */
    public function getMethodofsupply()
    {
        return $this->methodofsupply;
    }

    /**
     * Set contractdate
     *
     * @param \DateTime $contractdate
     *
     * @return SupContracts
     */
    public function setContractdate($contractdate)
    {
        $this->contractdate = $contractdate;

        return $this;
    }

    /**
     * Get contractdate
     *
     * @return \DateTime
     */
    public function getContractdate()
    {
        return $this->contractdate;
    }

    /**
     * Set clicsignaturedate
     *
     * @param \DateTime $clicsignaturedate
     *
     * @return SupContracts
     */
    public function setClicsignaturedate($clicsignaturedate)
    {
        $this->clicsignaturedate = $clicsignaturedate;

        return $this;
    }

    /**
     * Get clicsignaturedate
     *
     * @return \DateTime
     */
    public function getClicsignaturedate()
    {
        return $this->clicsignaturedate;
    }

    /**
     * Set clientsignaturedate
     *
     * @param \DateTime $clientsignaturedate
     *
     * @return SupContracts
     */
    public function setClientsignaturedate($clientsignaturedate)
    {
        $this->clientsignaturedate = $clientsignaturedate;

        return $this;
    }

    /**
     * Get clientsignaturedate
     *
     * @return \DateTime
     */
    public function getClientsignaturedate()
    {
        return $this->clientsignaturedate;
    }

    /**
     * Set typetime
     *
     * @param boolean $typetime
     *
     * @return SupContracts
     */
    public function setTypetime($typetime)
    {
        $this->typetime = $typetime;

        return $this;
    }

    /**
     * Get typetime
     *
     * @return boolean
     */
    public function getTypetime()
    {
        return $this->typetime;
    }

    /**
     * Set receivedate
     *
     * @param \DateTime $receivedate
     *
     * @return SupContracts
     */
    public function setReceivedate($receivedate)
    {
        $this->receivedate = $receivedate;

        return $this;
    }

    /**
     * Get receivedate
     *
     * @return \DateTime
     */
    public function getReceivedate()
    {
        return $this->receivedate;
    }

    /**
     * Set coordinator
     *
     * @param \Bo\AdminBundle\Entity\Coordinator $coordinator
     *
     * @return SupContracts
     */
    public function setCoordinator(\Bo\AdminBundle\Entity\Coordinator $coordinator = null)
    {
        $this->coordinator = $coordinator;

        return $this;
    }

    /**
     * Get coordinator
     *
     * @return \Bo\AdminBundle\Entity\Coordinator
     */
    public function getCoordinator()
    {
        return $this->coordinator;
    }

    /**
     * Set estimatedcost
     *
     * @param string $estimatedcost
     *
     * @return SupContracts
     */
    public function setEstimatedcost($estimatedcost)
    {
        $this->estimatedcost = $estimatedcost;

        return $this;
    }

    /**
     * Get estimatedcost
     *
     * @return string
     */
    public function getEstimatedcost()
    {
        return $this->estimatedcost;
    }

    /**
     * Set hourlyrate
     *
     * @param string $hourlyrate
     *
     * @return SupContracts
     */
    public function setHourlyrate($hourlyrate)
    {
        $this->hourlyrate = $hourlyrate;

        return $this;
    }

    /**
     * Get hourlyrate
     *
     * @return string
     */
    public function getHourlyrate()
    {
        return $this->hourlyrate;
    }

    /**
     * Set typeoftraining
     *
     * @param string $typeoftraining
     *
     * @return SupContracts
     */
    public function setTypeoftraining($typeoftraining)
    {
        $this->typeoftraining = $typeoftraining;

        return $this;
    }

    /**
     * Get typeoftraining
     *
     * @return string
     */
    public function getTypeoftraining()
    {
        return $this->typeoftraining;
    }

    /**
     * Set initialenddate
     *
     * @param \DateTime $initialenddate
     *
     * @return SupContracts
     */
    public function setInitialenddate($initialenddate)
    {
        $this->initialenddate = $initialenddate;

        return $this;
    }

    /**
     * Get initialenddate
     *
     * @return \DateTime
     */
    public function getInitialenddate()
    {
        return $this->initialenddate;
    }

    /**
     * Set group
     *
     * @param \Bo\AdminBundle\Entity\Group $group
     *
     * @return SupContracts
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
     * Set schedule
     *
     * @param string $schedule
     *
     * @return SupContracts
     */
    public function setSchedule($schedule)
    {
        $this->schedule = $schedule;

        return $this;
    }

    /**
     * Get schedule
     *
     * @return string
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Set hourperweek
     *
     * @param string $hourperweek
     *
     * @return SupContracts
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
     * Set billingcontact
     *
     * @param \Bo\AdminBundle\Entity\BillingContact $billingcontact
     *
     * @return SupContracts
     */
    public function setBillingcontact(\Bo\AdminBundle\Entity\BillingContact $billingcontact = null)
    {
        $this->billingcontact = $billingcontact;

        return $this;
    }

    /**
     * Get billingcontact
     *
     * @return \Bo\AdminBundle\Entity\BillingContact
     */
    public function getBillingcontact()
    {
        return $this->billingcontact;
    }

    /**
     * Set department
     *
     * @param string $department
     *
     * @return SupContracts
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set session
     *
     * @param string $session
     *
     * @return SupContracts
     */
    public function setSession($session)
    {
        $this->session = $session;

        return $this;
    }

    /**
     * Get session
     *
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Set program
     *
     * @param string $program
     *
     * @return SupContracts
     */
    public function setProgram($program)
    {
        $this->program = $program;

        return $this;
    }

    /**
     * Get program
     *
     * @return string
     */
    public function getProgram()
    {
        return $this->program;
    }

    /**
     * Set step
     *
     * @param string $step
     *
     * @return SupContracts
     */
    public function setStep($step)
    {
        $this->step = $step;

        return $this;
    }

    /**
     * Get step
     *
     * @return string
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * Set ryacc
     *
     * @param string $ryacc
     *
     * @return SupContracts
     */
    public function setRyacc($ryacc)
    {
        $this->ryacc = $ryacc;

        return $this;
    }

    /**
     * Get ryacc
     *
     * @return string
     */
    public function getRyacc()
    {
        return $this->ryacc;
    }

    /**
     * Set startlesson
     *
     * @param string $startlesson
     *
     * @return SupContracts
     */
    public function setStartlesson($startlesson)
    {
        $this->startlesson = $startlesson;

        return $this;
    }

    /**
     * Get startlesson
     *
     * @return string
     */
    public function getStartlesson()
    {
        return $this->startlesson;
    }

    /**
     * Set learningplan
     *
     * @param string $learningplan
     *
     * @return SupContracts
     */
    public function setLearningplan($learningplan)
    {
        $this->learningplan = $learningplan;

        return $this;
    }

    /**
     * Get learningplan
     *
     * @return string
     */
    public function getLearningplan()
    {
        return $this->learningplan;
    }

    /**
     * Set planreceived
     *
     * @param boolean $planreceived
     *
     * @return SupContracts
     */
    public function setPlanreceived($planreceived)
    {
        $this->planreceived = $planreceived;

        return $this;
    }

    /**
     * Get planreceived
     *
     * @return boolean
     */
    public function getPlanreceived()
    {
        return $this->planreceived;
    }

    /**
     * Set targetlevel
     *
     * @param string $targetlevel
     *
     * @return SupContracts
     */
    public function setTargetlevel($targetlevel)
    {
        $this->targetlevel = $targetlevel;

        return $this;
    }

    /**
     * Get targetlevel
     *
     * @return string
     */
    public function getTargetlevel()
    {
        return $this->targetlevel;
    }

    /**
     * Add employee
     *
     * @param \Bo\AdminBundle\Entity\Employee $employee
     *
     * @return SupContracts
     */
    public function addEmployee(\Bo\AdminBundle\Entity\Employee $employee)
    {
        $this->employee[] = $employee;

        return $this;
    }

    /**
     * Remove employee
     *
     * @param \Bo\AdminBundle\Entity\Employee $employee
     */
    public function removeEmployee(\Bo\AdminBundle\Entity\Employee $employee)
    {
        $this->employee->removeElement($employee);
    }

    /**
     * Get employee
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return SupContracts
     */
    public function setReference()
    {
        $this->reference = $this->contractnumber.$this->session.$this->step;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }


    /**
     * Add student
     *
     * @param \Bo\AdminBundle\Entity\Students $student
     *
     * @return SupContracts
     */
    public function addStudent(\Bo\AdminBundle\Entity\Students $student)
    {
        $this->students[] = $student;

        return $this;
    }

    /**
     * Remove student
     *
     * @param \Bo\AdminBundle\Entity\Students $student
     */
    public function removeStudent(\Bo\AdminBundle\Entity\Students $student)
    {
        $this->students->removeElement($student);
    }

    /**
     * Get students
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * Set initialhours
     *
     * @param string $initialhours
     *
     * @return SupContracts
     */
    public function setInitialhours($initialhours)
    {
        $this->initialhours = $initialhours;

        return $this;
    }

    /**
     * Get initialhours
     *
     * @return string
     */
    public function getInitialhours()
    {
        return $this->initialhours;
    }

    /**
     * Set usedhours
     *
     * @param string $usedhours
     *
     * @return SupContracts
     */
    public function setUsedhours($usedhours)
    {
        $this->usedhours = $usedhours;

        return $this;
    }

    /**
     * Get usedhours
     *
     * @return string
     */
    public function getUsedhours()
    {
        return $this->usedhours;
    }

    /**
     * Set createby
     *
     * @param string $createby
     *
     * @return SupContracts
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
     * Set advisor
     *
     * @param \Bo\AdminBundle\Entity\Employee $advisor
     *
     * @return SupContracts
     */
    public function setAdvisor(\Bo\AdminBundle\Entity\Employee $advisor = null)
    {
        $this->advisor = $advisor;

        return $this;
    }

    /**
     * Get advisor
     *
     * @return \Bo\AdminBundle\Entity\Employee
     */
    public function getAdvisor()
    {
        return $this->advisor;
    }

    /**
     * Set deleteby
     *
     * @param string $deleteby
     *
     * @return SupContracts
     */
    public function setDeleteby($deleteby)
    {
        $this->deleteby = $deleteby;

        return $this;
    }

    /**
     * Get deleteby
     *
     * @return string
     */
    public function getDeleteby()
    {
        return $this->deleteby;
    }

    /**
     * Set deleteddate
     *
     * @param \DateTime $deleteddate
     *
     * @return SupContracts
     */
    public function setDeleteddate($deleteddate)
    {
        $this->deleteddate = $deleteddate;

        return $this;
    }

    /**
     * Get deleteddate
     *
     * @return \DateTime
     */
    public function getDeleteddate()
    {
        return $this->deleteddate;
    }
}

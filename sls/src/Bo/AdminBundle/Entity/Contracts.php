<?php
/* 
* Date Création: 20/02/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier: Contracts.php
* Description: Entité Contracts
*/ 
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Table(name="adm_contracts")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\ContractsRepository")
*/
class Contracts
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
    * @ORM\ManyToOne(targetEntity="Contractual")
    * @ORM\JoinColumn(name="idcontractual",referencedColumnName="id",nullable=true)
    */    
    private $contractual;
		
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
    * @ORM\Column(type="string",length=2, nullable=true)
    */    
    private $numberday;
		
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
    * @ORM\OneToMany(targetEntity="Agenda", mappedBy="contracts")
    */      
    private $agenda;	
			
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
     * @ORM\Column(type="string",length=550, nullable=true)
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
    * @ORM\Column(type="date", nullable=true)
    */    
	private $startrate;	
	
    /**
     * @ORM\Column(type="string",length=100, nullable=true)
     */    
    private $hourlyrate;	
		
    /**
    * @ORM\Column(type="string",length=100, nullable=true)
    */
    private $hoursnumber;
	
    /**
     * @ORM\Column(type="string",length=100, nullable=true)
     */    
    private $estimatedcost;	
	
    /**
     * @ORM\Column(type="string",length=100, nullable=true)
     */    
    private $totalhours;	
		
    /**
     * @ORM\Column(type="string",length=100, nullable=true)
     */    
    private $totalcost;	
	
    /**
    * @ORM\Column(type="date", nullable=true)
    */    
    private $startrate1;	
	
    /**
     * @ORM\Column(type="string",length=100, nullable=true)
     */    
    private $hourlyrate1;
		
    /**
    * @ORM\Column(type="string",length=100, nullable=true)
    */
    private $hoursnumber1;
	
    /**
     * @ORM\Column(type="string",length=100, nullable=true)
     */    
    private $estimatedcost1;	
	
    /**
    * @ORM\Column(type="date", nullable=true)
    */    
    private $startrate2;	
	
    /**
     * @ORM\Column(type="string",length=100, nullable=true)
     */    
    private $hourlyrate2;
		
    /**
    * @ORM\Column(type="string",length=100, nullable=true)
    */
    private $hoursnumber2;
	
    /**
     * @ORM\Column(type="string",length=100, nullable=true)
     */    
    private $estimatedcost2;	
	
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
    * @ORM\ManyToMany(targetEntity="Employee", inversedBy="contracts")
    * @ORM\JoinTable(name="contracts_employee")
    */    
    private $employee;
	
    /**
    * @ORM\ManyToMany(targetEntity="Students", inversedBy="contracts")
    * @ORM\JoinTable(name="contracts_students")
    */        
    private $students;	
	
    /**
    * @ORM\ManyToMany(targetEntity="Local", inversedBy="contracts")
    * @ORM\JoinTable(name="contracts_local")
    */      
    private $local;	

    /**
    * @ORM\ManyToMany(targetEntity="Training", inversedBy="contracts")
    * @ORM\JoinTable(name="contracts_training")
    */        
    private $training;		
		
    /**
    * @ORM\Column(type="string",length=100, nullable=true)
    */
    private $initialhours;
		
    /**
    * @ORM\Column(type="string",length=100, nullable=true)
    */
    private $usedhours;
		
    /**
    * @ORM\Column(type="date", nullable=true)
    */
    private $dateusedhour;
	
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $archived;
	
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isgroup;
			
    /**
    * @ORM\Column(type="string",length=100, nullable=true)
    */
    private $typetime;
		
    /**
    * @ORM\Column(type="text",length=6000, nullable=true)
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
	private $renddate;	
		
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
    * @ORM\Column(type="integer")
    */    
    //0=Completed or close or archived; 1=In progress; 2=upcomming; 3=outstanding; 4=Master;  5=Cancel; 6=Ignore;
	private $status;	
					
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $closedby;	
	
    /**
    * @ORM\Column(type="datetime", nullable=true)
    */    
	private $closeddate;
									
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $openedby;	
	
    /**
    * @ORM\Column(type="datetime", nullable=true)
    */    
	private $openeddate;
				
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $createby;	
				
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $confirmation;
	
    /**
    * @ORM\Column(type="datetime")
    */    
	private $creationdate;
	
    /**
     * Constructor
     */
    public function __construct()
    {
		$this->creationdate=new \DateTime();
		$this->initialhour=$this->usedhour=0;
		$this->startdate=new \DateTime();
		$this->enddate=new \DateTime();
		$this->status=1;
		$this->isgroup=false;
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
	if($this->status!=1 or $this->status!=2) return $this;
        $now = new \DateTime(date("d-m-Y"));
	if($now >= $this->startdate and $now <= $this->enddate){
		$this->status=1;
	}elseif($now < $this->startdate){
		$this->status=2;
	}else{
		$this->status=0;
	}
	return $this;
    }
    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * @return Contracts
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
     * Set confirmation
     *
     * @param string $confirmation
     *
     * @return Contracts
     */
    public function setConfirmation($confirmation)
    {
        $this->confirmation = $confirmation;

        return $this;
    }

    /**
     * Get confirmation
     *
     * @return string
     */
    public function getConfirmation()
    {
        return $this->confirmation;
    }

    /**
     * Add training
     *
     * @param \Bo\AdminBundle\Entity\Training $training
     *
     * @return Contracts
     */
    public function addTraining(\Bo\AdminBundle\Entity\Training $training)
    {
        $this->training[] = $training;

        return $this;
    }

    /**
     * Remove training
     *
     * @param \Bo\AdminBundle\Entity\Training $training
     */
    public function removeTraining(\Bo\AdminBundle\Entity\Training $training)
    {
        $this->training->removeElement($training);
    }

    /**
     * Get training
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTraining()
    {
        return $this->training;
    }

    /**
     * Set contractual
     *
     * @param \Bo\AdminBundle\Entity\Contractual $contractual
     *
     * @return Contracts
     */
    public function setContractual(\Bo\AdminBundle\Entity\Contractual $contractual = null)
    {
        $this->contractual = $contractual;

        return $this;
    }

    /**
     * Get contractual
     *
     * @return \Bo\AdminBundle\Entity\Contractual
     */
    public function getContractual()
    {
        return $this->contractual;
    }

    /**
     * Set startrate
     *
     * @param \DateTime $startrate
     *
     * @return Contracts
     */
    public function setStartrate($startrate)
    {
        $this->startrate = $startrate;

        return $this;
    }

    /**
     * Get startrate
     *
     * @return \DateTime
     */
    public function getStartrate()
    {
        return $this->startrate;
    }

    /**
     * Set startrate1
     *
     * @param \DateTime $startrate1
     *
     * @return Contracts
     */
    public function setStartrate1($startrate1)
    {
        $this->startrate1 = $startrate1;

        return $this;
    }

    /**
     * Get startrate1
     *
     * @return \DateTime
     */
    public function getStartrate1()
    {
        return $this->startrate1;
    }

    /**
     * Set hoursnumber1
     *
     * @param string $hoursnumber1
     *
     * @return Contracts
     */
    public function setHoursnumber1($hoursnumber1)
    {
        $this->hoursnumber1 = $hoursnumber1;

        return $this;
    }

    /**
     * Get hoursnumber1
     *
     * @return string
     */
    public function getHoursnumber1()
    {
        return $this->hoursnumber1;
    }

    /**
     * Set estimatedcost1
     *
     * @param string $estimatedcost1
     *
     * @return Contracts
     */
    public function setEstimatedcost1($estimatedcost1)
    {
        $this->estimatedcost1 = $estimatedcost1;

        return $this;
    }

    /**
     * Get estimatedcost1
     *
     * @return string
     */
    public function getEstimatedcost1()
    {
        return $this->estimatedcost1;
    }

    /**
     * Set hourlyrate1
     *
     * @param string $hourlyrate1
     *
     * @return Contracts
     */
    public function setHourlyrate1($hourlyrate1)
    {
        $this->hourlyrate1 = $hourlyrate1;

        return $this;
    }

    /**
     * Get hourlyrate1
     *
     * @return string
     */
    public function getHourlyrate1()
    {
        return $this->hourlyrate1;
    }

    /**
     * Set startrate2
     *
     * @param \DateTime $startrate2
     *
     * @return Contracts
     */
    public function setStartrate2($startrate2)
    {
        $this->startrate2 = $startrate2;

        return $this;
    }

    /**
     * Get startrate2
     *
     * @return \DateTime
     */
    public function getStartrate2()
    {
        return $this->startrate2;
    }

    /**
     * Set hoursnumber2
     *
     * @param string $hoursnumber2
     *
     * @return Contracts
     */
    public function setHoursnumber2($hoursnumber2)
    {
        $this->hoursnumber2 = $hoursnumber2;

        return $this;
    }

    /**
     * Get hoursnumber2
     *
     * @return string
     */
    public function getHoursnumber2()
    {
        return $this->hoursnumber2;
    }

    /**
     * Set estimatedcost2
     *
     * @param string $estimatedcost2
     *
     * @return Contracts
     */
    public function setEstimatedcost2($estimatedcost2)
    {
        $this->estimatedcost2 = $estimatedcost2;

        return $this;
    }

    /**
     * Get estimatedcost2
     *
     * @return string
     */
    public function getEstimatedcost2()
    {
        return $this->estimatedcost2;
    }

    /**
     * Set hourlyrate2
     *
     * @param string $hourlyrate2
     *
     * @return Contracts
     */
    public function setHourlyrate2($hourlyrate2)
    {
        $this->hourlyrate2 = $hourlyrate2;

        return $this;
    }

    /**
     * Get hourlyrate2
     *
     * @return string
     */
    public function getHourlyrate2()
    {
        return $this->hourlyrate2;
    }

    /**
     * Set totalcost
     *
     * @param string $totalcost
     *
     * @return Contracts
     */
    public function setTotalcost($totalcost)
    {
        $this->totalcost = $totalcost;

        return $this;
    }

    /**
     * Get totalcost
     *
     * @return string
     */
    public function getTotalcost()
    {
        return $this->totalcost;
    }

    /**
     * Set totalhours
     *
     * @param string $totalhours
     *
     * @return Contracts
     */
    public function setTotalhours($totalhours)
    {
        $this->totalhours = $totalhours;

        return $this;
    }

    /**
     * Get totalhours
     *
     * @return string
     */
    public function getTotalhours()
    {
        return $this->totalhours;
    }

    /**
     * Set closedby
     *
     * @param string $closedby
     *
     * @return Contracts
     */
    public function setClosedby($closedby)
    {
        $this->closedby = $closedby;

        return $this;
    }

    /**
     * Get closedby
     *
     * @return string
     */
    public function getClosedby()
    {
        return $this->closedby;
    }
	
    /**
     * Set closeddate
     *
     * @param string $closeddate
     *
     * @return Contracts
     */
    public function setCloseddate($closeddate)
    {
        $this->closeddate = $closeddate;

        return $this;
    }

    /**
     * Get closeddate
     *
     * @return string
     */
    public function getCloseddate()
    {
        return $this->closeddate;
    }

    /**
     * Set openedby
     *
     * @param string $openedby
     *
     * @return Contracts
     */
    public function setOpenedby($openedby)
    {
        $this->openedby = $openedby;

        return $this;
    }

    /**
     * Get openedby
     *
     * @return string
     */
    public function getOpeneddby()
    {
        return $this->openedby;
    }
	
    /**
     * Set openeddate
     *
     * @param string $openeddate
     *
     * @return Contracts
     */
    public function setOpeneddate($openeddate)
    {
        $this->openeddate = $openeddate;

        return $this;
    }

    /**
     * Get openeddate
     *
     * @return string
     */
    public function getOpenedby()
    {
        return $this->openeddate;
    }
	
    /**
     * Set isgroup
     *
     * @param boolean $isgroup
     *
     * @return Contracts
     */
    public function setIsgroup($isgroup)
    {
        $this->isgroup = $isgroup;

        return $this;
    }

    /**
     * Get isgroup
     *
     * @return boolean
     */
    public function getIsgroup()
    {
        return $this->isgroup;
    }

    /**
     * Get openeddate
     *
     * @return \DateTime
     */
    public function getOpeneddate()
    {
        return $this->openeddate;
    }

    /**
     * Add agenda
     *
     * @param \Bo\AdminBundle\Entity\Agenda $agenda
     *
     * @return Contracts
     */
    public function addAgenda(\Bo\AdminBundle\Entity\Agenda $agenda)
    {
        $this->agenda[] = $agenda;

        return $this;
    }

    /**
     * Remove agenda
     *
     * @param \Bo\AdminBundle\Entity\Agenda $agenda
     */
    public function removeAgenda(\Bo\AdminBundle\Entity\Agenda $agenda)
    {
        $this->agenda->removeElement($agenda);
    }

    /**
     * Get agenda
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * Set renddate
     *
     * @param \DateTime $renddate
     *
     * @return Contracts
     */
    public function setRenddate($renddate)
    {
        $this->renddate = $renddate;

        return $this;
    }

    /**
     * Get renddate
     *
     * @return \DateTime
     */
    public function getRenddate()
    {
        return $this->renddate;
    }

    /**
     * Set numberday
     *
     * @param string $numberday
     *
     * @return Contracts
     */
    public function setNumberday($numberday)
    {
        $this->numberday = $numberday;

        return $this;
    }

    /**
     * Get numberday
     *
     * @return string
     */
    public function getNumberday()
    {
        return $this->numberday;
    }

    /**
     * Set dateusedhour
     *
     * @param \DateTime $dateusedhour
     *
     * @return Contracts
     */
    public function setDateusedhour($dateusedhour)
    {
        $this->dateusedhour = $dateusedhour;
        return $this;
    }

    /**
     * Get dateusedhour
     *
     * @return \DateTime

     */
    public function getDateusedhour()
    {
        return $this->dateusedhour;
    }
}

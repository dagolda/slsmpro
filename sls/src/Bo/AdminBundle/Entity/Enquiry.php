<?php
/*
* Date Création: 29/08/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Enquiry.php
* Description: Liste des renseignements
*/

namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="adm_enquiry")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\EnquiryRepository")
*/

class Enquiry 
{
    /**
    * @ORM\GeneratedValue
    * @ORM\Id
    * @ORM\Column(type="integer")
    */
    private $id;	
	
    /**
    * @ORM\Column(type="string",length=255)
    */    
    private $name;
	
    /**
    * @ORM\Column(type="string",length=255)
    */    
    private $firstname;
		
    /**
    * @ORM\Column(type="string",length=255)
    */    
    private $email;
	
    /**
    * @ORM\Column(type="string",length=500,nullable=true)
    */    
    private $address;	
	
    /**
    * @ORM\Column(type="string",length=500,nullable=true)
    */    
    private $city;
		
    /**
    * @ORM\ManyToOne(targetEntity="Client")
	* @ORM\JoinColumn(name="idclient",referencedColumnName="id",nullable=true)
    */      
    private $client;
			
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */    
    private $phone;
		
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $contact;
			
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $phonecontact;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $emailcontact;
			
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $targetlevel;
				
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $ftorpt;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */   
    private $typecontract;
		
    /**
    * @ORM\ManyToOne(targetEntity="Workfields")
	* @ORM\JoinColumn(name="idworkfields",referencedColumnName="id",nullable=true)
    */   
    private $field;
	  
    /**
    * @ORM\ManyToOne(targetEntity="Bo\AdminBundle\Entity\Employee")
	* @ORM\JoinColumn(name="idemployee",referencedColumnName="id", nullable=true)
    */      
    private $employee;	

    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $privateorgroup;
	
    /**
    * @ORM\Column(type="boolean",nullable=true)
    */    
    private $gouvemp;
		
    /**
    * @ORM\Column(type="string",length=3,nullable=true)
    */    
    private $gtso;	
		
    /**
    * @ORM\Column(type="string",length=255)
    */    
    private $language;	
			
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $schedule;	
				
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $hours;	
			
    /**
    * @ORM\Column(type="decimal", scale=2)
    */    
    private $hourperday;
		
    /**
    * @ORM\Column(type="decimal", scale=2)
    */    
    private $hourperweek;
					
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $location;	
			
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $workon;	
		
    /**
    * @ORM\Column(type="date",nullable=true)
    */
	private $startdate;	
			
    /**
    * @ORM\Column(type="date",nullable=true)
    */
	private $enddate;
	
    /**
     * @ORM\Column(type="string",length=1000,nullable=true)
     */    
    private $comment;
			
    /**
    * @ORM\Column(type="integer")
    */
	//1=created; 2=resolved 3=not resolved;
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
		$this->creationdate=$this->startdate=$this->enddate=new \DateTime();
		$this->status=1;
    }

    /**
    * Get id
    * @return integer
    */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Enquiry
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Enquiry
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set targetlevel
     *
     * @param string $targetlevel
     *
     * @return Enquiry
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
     * Set ftorpt
     *
     * @param string $ftorpt
     *
     * @return Enquiry
     */
    public function setFtorpt($ftorpt)
    {
        $this->ftorpt = $ftorpt;

        return $this;
    }

    /**
     * Get ftorpt
     *
     * @return string
     */
    public function getFtorpt()
    {
        return $this->ftorpt;
    }

    /**
     * Set privateorgroup
     *
     * @param string $privateorgroup
     *
     * @return Enquiry
     */
    public function setPrivateorgroup($privateorgroup)
    {
        $this->privateorgroup = $privateorgroup;

        return $this;
    }

    /**
     * Get privateorgroup
     *
     * @return string
     */
    public function getPrivateorgroup()
    {
        return $this->privateorgroup;
    }

    /**
     * Set gouvemp
     *
     * @param string $gouvemp
     *
     * @return Enquiry
     */
    public function setGouvemp($gouvemp)
    {
        $this->gouvemp = $gouvemp;

        return $this;
    }

    /**
     * Get gouvemp
     *
     * @return string
     */
    public function getGouvemp()
    {
        return $this->gouvemp;
    }

    /**
     * Set gtso
     *
     * @param string $gtso
     *
     * @return Enquiry
     */
    public function setGtso($gtso)
    {
        $this->gtso = $gtso;

        return $this;
    }

    /**
     * Get gtso
     *
     * @return string
     */
    public function getGtso()
    {
        return $this->gtso;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return Enquiry
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
     * Set schedule
     *
     * @param string $schedule
     *
     * @return Enquiry
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
     * Set hours
     *
     * @param string $hours
     *
     * @return Enquiry
     */
    public function setHours($hours)
    {
        $this->hours = $hours;

        return $this;
    }

    /**
     * Get hours
     *
     * @return string
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return Enquiry
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
     * Set workon
     *
     * @param string $workon
     *
     * @return Enquiry
     */
    public function setWorkon($workon)
    {
        $this->workon = $workon;

        return $this;
    }

    /**
     * Get workon
     *
     * @return string
     */
    public function getWorkon()
    {
        return $this->workon;
    }

    /**
     * Set startdate
     *
     * @param \DateTime $startdate
     *
     * @return Enquiry
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
     * @return Enquiry
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
     * Set starttime
     *
     * @param \DateTime $starttime
     *
     * @return Enquiry
     */
    public function setStarttime($starttime)
    {
        $this->starttime = $starttime;

        return $this;
    }

    /**
     * Get starttime
     *
     * @return \DateTime
     */
    public function getStarttime()
    {
        return $this->starttime;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Enquiry
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
     * @param integer $status
     *
     * @return Enquiry
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
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Enquiry
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
     * @return Enquiry
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
     * Set phone
     *
     * @param string $phone
     *
     * @return Enquiry
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Enquiry
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
	/*
	* get status definition
	*/
	public function getStatusDef(){
		return array('1'=>"Submit",'2'=>"Resolved",'3'=>"Not Resolved");
	}
    /**
     * Set typecontract
     *
     * @param string
     *
     * @return Enquiry
     */
    public function setTypecontract($typecontract = null)
    {
        $this->typecontract = $typecontract;
        return $this;
    }

    /**
     * Get typecontract
     *
     * @return Enquiry
     */
    public function getTypecontract()
    {
        return $this->typecontract;
    }

    /**
     * Set field
     *
     * @param \Bo\AdminBundle\Entity\Workfields $field
     *
     * @return Enquiry
     */
    public function setField(\Bo\AdminBundle\Entity\Workfields $field = null)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * Get field
     *
     * @return \Bo\AdminBundle\Entity\Workfields
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Set hourperday
     *
     * @param string $hourperday
     *
     * @return Enquiry
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
     * Set hourperweek
     *
     * @param string $hourperweek
     *
     * @return Enquiry
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
     * Set contact
     *
     * @param string $contact
     *
     * @return Enquiry
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set phonecontact
     *
     * @param string $phonecontact
     *
     * @return Enquiry
     */
    public function setPhonecontact($phonecontact)
    {
        $this->phonecontact = $phonecontact;

        return $this;
    }

    /**
     * Get phonecontact
     *
     * @return string
     */
    public function getPhonecontact()
    {
        return $this->phonecontact;
    }

    /**
     * Set emailcontact
     *
     * @param string $emailcontact
     *
     * @return Enquiry
     */
    public function setEmailcontact($emailcontact)
    {
        $this->emailcontact = $emailcontact;

        return $this;
    }

    /**
     * Get emailcontact
     *
     * @return string
     */
    public function getEmailcontact()
    {
        return $this->emailcontact;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Enquiry
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Enquiry
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set client
     *
     * @param \Bo\AdminBundle\Entity\Client $client
     *
     * @return Enquiry
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
}

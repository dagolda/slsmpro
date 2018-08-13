<?php
/*
* Date Création: 10/02/2017
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Orderform.php
* Description: Bordereau de commande
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="adm_orderform")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\OrderformRepository")
*/

class Orderform 
{
    /**
    * @ORM\GeneratedValue
    * @ORM\Id
    * @ORM\Column(type="integer")
    */
    private $id;	
	
    /**
    * @ORM\OneToOne(targetEntity="Enquiry")
	* @ORM\JoinColumn(name="idenquiry",referencedColumnName="id",nullable=true)
    */      
    private $enquiry;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
	//1 => NMSO; 2 => Bon de commande/Order form; 3 => Private contract french/Contrat privé français; 4 => Private contract english/Contrat privé anglais;    
    private $soumissiontype;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $ordernumber;
	
    /**
    * @ORM\Column(type="integer",nullable=true)
    */
    private $nbstudent;	
	
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $program;
		
    /**
    * @ORM\Column(type="date", nullable=true)
    */    
	private $startrate;	
		
    /**
    * @ORM\Column(type="string",length=100, nullable=true)
    */    
    private $hourlyrate;
	
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $hoursnumber;	
	
    /**
     * @ORM\Column(type="string",length=100, nullable=true)
     */    
    private $estimatedcost;	
		
    /**
    * @ORM\Column(type="date", nullable=true)
    */    
	private $startrate1;	
		
    /**
    * @ORM\Column(type="string",length=100, nullable=true)
    */    
    private $hourlyrate1;
	
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
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
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $hoursnumber2;	
	
    /**
     * @ORM\Column(type="string",length=100, nullable=true)
     */    
    private $estimatedcost2;	
	
    /**
     * @ORM\Column(type="string",length=100, nullable=true)
     */    
    private $didmatprice;		
		
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $typeofcourse;
		
    /**
     * @ORM\Column(type="string",length=100, nullable=true)
     */    
    private $totalhours;	
		
    /**
     * @ORM\Column(type="string",length=100, nullable=true)
     */    
    private $totalcost;	
		
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $preparedby;
			
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $approvedby;
	
    /**
    * @ORM\Column(type="boolean")
    */
	private $initlanguage;	
	
    /**
    * @ORM\Column(type="boolean")
    */
	private $weeklanguage;
	
    /**
    * @ORM\Column(type="boolean")
    */
	private $didmat;
		
    /**
    * @ORM\Column(type="boolean")
    */
	private $classvisit;
			
    /**
    * @ORM\Column(type="boolean")
    */
	private $progressreport;
		
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $location;
	
    /**
    * @ORM\ManyToOne(targetEntity="Campus")
	* @ORM\JoinColumn(name="idcampus",referencedColumnName="id",nullable=true)
    */  	
	private $campus;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $placeoftraining;
	
    /**
    * @ORM\Column(type="string",length=1000,nullable=true)
    */    
    private $comment;
				
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $ordersent;
				
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $bordereau;
	
    /**
    * @ORM\Column(type="datetime", nullable=true)
    */    
	private $bordereaudate;
			
    /**
    * @ORM\Column(type="integer")
    */
	//0=created; 1=pdf generated; 2=heads up 3=contract generated;
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
		$this->creationdate=new \DateTime();
		$this->initlanguage=0;
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
     * Set ordernumber
     *
     * @param string $ordernumber
     *
     * @return Orderform
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
     * Set nbstudent
     *
     * @param integer $nbstudent
     *
     * @return Orderform
     */
    public function setNbstudent($nbstudent)
    {
        $this->nbstudent = $nbstudent;

        return $this;
    }

    /**
     * Get nbstudent
     *
     * @return integer
     */
    public function getNbstudent()
    {
        return $this->nbstudent;
    }

    /**
     * Set program
     *
     * @param string $program
     *
     * @return Orderform
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
     * Set hoursnumber
     *
     * @param string $hoursnumber
     *
     * @return Orderform
     */
    public function setHoursnumber($hoursnumber)
    {
        $this->hoursnumber = $hoursnumber;

        return $this;
    }

    /**
     * Get hoursnumber
     *
     * @return string
     */
    public function getHoursnumber()
    {
        return $this->hoursnumber;
    }

    /**
     * Set hourlyrate
     *
     * @param string $hourlyrate
     *
     * @return Orderform
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
     * Set typeofcourse
     *
     * @param string $typeofcourse
     *
     * @return Orderform
     */
    public function setTypeofcourse($typeofcourse)
    {
        $this->typeofcourse = $typeofcourse;

        return $this;
    }

    /**
     * Get typeofcourse
     *
     * @return string
     */
    public function getTypeofcourse()
    {
        return $this->typeofcourse;
    }

    /**
     * Set preparedby
     *
     * @param string $preparedby
     *
     * @return Orderform
     */
    public function setPreparedby($preparedby)
    {
        $this->preparedby = $preparedby;

        return $this;
    }

    /**
     * Get preparedby
     *
     * @return string
     */
    public function getPreparedby()
    {
        return $this->preparedby;
    }

    /**
     * Set approvedby
     *
     * @param string $approvedby
     *
     * @return Orderform
     */
    public function setApprovedby($approvedby)
    {
        $this->approvedby = $approvedby;

        return $this;
    }

    /**
     * Get approvedby
     *
     * @return string
     */
    public function getApprovedby()
    {
        return $this->approvedby;
    }

    /**
     * Set initlanguage
     *
     * @param boolean $initlanguage
     *
     * @return Orderform
     */
    public function setInitlanguage($initlanguage)
    {
        $this->initlanguage = $initlanguage;

        return $this;
    }

    /**
     * Get initlanguage
     *
     * @return boolean
     */
    public function getInitlanguage()
    {
        return $this->initlanguage;
    }

    /**
     * Set weeklanguage
     *
     * @param boolean $weeklanguage
     *
     * @return Orderform
     */
    public function setWeeklanguage($weeklanguage)
    {
        $this->weeklanguage = $weeklanguage;

        return $this;
    }

    /**
     * Get weeklanguage
     *
     * @return boolean
     */
    public function getWeeklanguage()
    {
        return $this->weeklanguage;
    }

    /**
     * Set didmat
     *
     * @param boolean $didmat
     *
     * @return Orderform
     */
    public function setDidmat($didmat)
    {
        $this->didmat = $didmat;

        return $this;
    }

    /**
     * Get didmat
     *
     * @return boolean
     */
    public function getDidmat()
    {
        return $this->didmat;
    }

    /**
     * Set classvisit
     *
     * @param boolean $classvisit
     *
     * @return Orderform
     */
    public function setClassvisit($classvisit)
    {
        $this->classvisit = $classvisit;

        return $this;
    }

    /**
     * Get classvisit
     *
     * @return boolean
     */
    public function getClassvisit()
    {
        return $this->classvisit;
    }

    /**
     * Set progressreport
     *
     * @param boolean $progressreport
     *
     * @return Orderform
     */
    public function setProgressreport($progressreport)
    {
        $this->progressreport = $progressreport;

        return $this;
    }

    /**
     * Get progressreport
     *
     * @return boolean
     */
    public function getProgressreport()
    {
        return $this->progressreport;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Orderform
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
     * @return Orderform
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
     * @return Orderform
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
     * @return Orderform
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
     * Set enquiry
     *
     * @param \Bo\AdminBundle\Entity\Enquiry $enquiry
     *
     * @return Orderform
     */
    public function setEnquiry(\Bo\AdminBundle\Entity\Enquiry $enquiry = null)
    {
        $this->enquiry = $enquiry;

        return $this;
    }

    /**
     * Get enquiry
     *
     * @return \Bo\AdminBundle\Entity\Enquiry
     */
    public function getEnquiry()
    {
        return $this->enquiry;
    }

    /**
     * Set startrate
     *
     * @param \DateTime $startrate
     *
     * @return Orderform
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
     * Set estimatedcost
     *
     * @param string $estimatedcost
     *
     * @return Orderform
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
     * Set startrate1
     *
     * @param \DateTime $startrate1
     *
     * @return Orderform
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
     * Set hourlyrate1
     *
     * @param string $hourlyrate1
     *
     * @return Orderform
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
     * Set hoursnumber1
     *
     * @param string $hoursnumber1
     *
     * @return Orderform
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
     * @return Orderform
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
     * Set startrate2
     *
     * @param \DateTime $startrate2
     *
     * @return Orderform
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
     * Set hourlyrate2
     *
     * @param string $hourlyrate2
     *
     * @return Orderform
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
     * Set hoursnumber2
     *
     * @param string $hoursnumber2
     *
     * @return Orderform
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
     * @return Orderform
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
     * Set totalhours
     *
     * @param string $totalhours
     *
     * @return Orderform
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
     * Set totalcost
     *
     * @param string $totalcost
     *
     * @return Orderform
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
     * Set location
     *
     * @param string $location
     *
     * @return Orderform
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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Orderform
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
     * Set ordersent
     *
     * @param string $ordersent
     *
     * @return Orderform
     */
    public function setOrdersent($ordersent)
    {
        $this->ordersent = $ordersent;

        return $this;
    }

    /**
     * Get ordersent
     *
     * @return string
     */
    public function getOrdersent()
    {
        return $this->ordersent;
    }

    /**
     * Set placeoftraining
     *
     * @param string $placeoftraining
     *
     * @return Orderform
     */
    public function setPlaceoftraining($placeoftraining)
    {
        $this->placeoftraining = $placeoftraining;

        return $this;
    }

    /**
     * Get placeoftraining
     *
     * @return string
     */
    public function getPlaceoftraining()
    {
        return $this->placeoftraining;
    }

    /**
     * Set campus
     *
     * @param \Bo\AdminBundle\Entity\Campus $campus
     *
     * @return Orderform
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
     * Set bordereau
     *
     * @param string $bordereau
     *
     * @return Orderform
     */
    public function setBordereau($bordereau)
    {
        $this->bordereau = $bordereau;

        return $this;
    }

    /**
     * Get bordereau
     *
     * @return string
     */
    public function getBordereau()
    {
        return $this->bordereau;
    }

    /**
     * Set bordereaudate
     *
     * @param \DateTime $bordereaudate
     *
     * @return Orderform
     */
    public function setBordereaudate($bordereaudate)
    {
        $this->bordereaudate = $bordereaudate;

        return $this;
    }

    /**
     * Get bordereaudate
     *
     * @return \DateTime
     */
    public function getBordereaudate()
    {
        return $this->bordereaudate;
    }

    /**
     * Set didmatprice
     * @param string $didmatprice
     * @return Orderform
     */
    public function setDidmatprice($didmatprice)
    {
        $this->didmatprice = $didmatprice;

        return $this;
    }

    /**
     * Get didmatprice
     * @return string
     */
    public function getDidmatprice()
    {
        return $this->didmatprice;
    }

    /**
     * Set soumissiontype
     * @param string $soumissiontype
     * @return Orderform
     */
    public function setSoumissiontype($soumissiontype)
    {
        $this->soumissiontype = $soumissiontype;

        return $this;
    }

    /**
    * Get soumissiontype
    * @return string
    */
    public function getSoumissiontype()
    {
        return $this->soumissiontype;
    }
	
	public function getSoumissionTypeLabel(){
		return array('1' => "NMSO", '2' => "Bon de commande/Order form", '3' => "Private contract french/Contrat privé français", '4' => "Private contract english/Contrat privé anglais");
	}
	public function getStatusDef(){
		return array('0' => "Created", '1' => "Pdf generated", '2' => "Heads up", '3' => "Contract done");
	}
}

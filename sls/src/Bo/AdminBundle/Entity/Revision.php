<?php
/*
* Date Création: 20/03/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Revision.php
* Description: Entité Revision of contracts
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="adm_revision")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\RevisionRepository")
*/
class Revision
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
	
    /**
    * @ORM\Column(type="integer")
    */      
    private $idcontracts;
	
    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */    
    private $reference;		
	
    /**
     * @ORM\Column(type="string",length=2, nullable=true)
     */    
    private $amendment;	
		
    /**
    * @ORM\Column(type="date", nullable=true)
    */    
	private $authorizeddate;
	
    /**
    * @ORM\Column(type="date", nullable=true)
    */    
	private $ratedate;
		   	
    /**
    * @ORM\Column(type="string",length=11, nullable=true)
    */ 
	//Hours before revision
    private $hoursbefore;
				   	
    /**
    * @ORM\Column(type="string",length=11, nullable=true)
    */    
    //Revision hours
    private $hour;
	
    /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */    
    private $hourlyrate;	

    /**
    * @ORM\Column(type="date", nullable=true)
    */    
    private $ratedate1;

    /**
    * @ORM\Column(type="string",length=11, nullable=true)
    */    
    //Revision hours 1
    private $hour1;	
	
    /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */    
    private $hourlyrate1;	

    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */   
    //Revision cost 1
    private $total1;	
	
    /**
    * @ORM\Column(type="string",length=11, nullable=true)
    */ 
	//Hours after revision
    private $hourafter;		
	
    /**
    * @ORM\Column(type="string",length=11, nullable=true)
    */ 
	//cost before revision
    private $costbefore;
				   				   	
    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */   
	//Revision cost
    private $total;	
	
    /**
    * @ORM\Column(type="string",length=11, nullable=true)
    */ 
	//cost after revision
    private $costafter;		
		
    /**
    * @ORM\Column(type="date", nullable=true)
    */    
    private $enddate;

    /**
    * @ORM\Column(type="date", nullable=true)
    */    
    private $enddate1;

    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $createby;	
		
    /**
    * @ORM\Column(type="date")
    */    
	private $creationdate;
	
    /**
     * Constructor
     */
    public function __construct()
    {
		$this->creationdate=new \DateTime();
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
     * Set hour
     *
     * @param integer $hour
     *
     * @return Revision
     */
    public function setHour($hour)
    {
        $this->hour = $hour;

        return $this;
    }

    /**
     * Get hour
     *
     * @return integer
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * Set total
     *
     * @param string $total
     *
     * @return Revision
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set authorizeddate
     *
     * @param \DateTime $authorizeddate
     *
     * @return Revision
     */
    public function setAuthorizeddate($authorizeddate)
    {
        $this->authorizeddate = $authorizeddate;

        return $this;
    }

    /**
     * Get authorizeddate
     *
     * @return \DateTime
     */
    public function getAuthorizeddate()
    {
        return $this->authorizeddate;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Revision
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
     * Set idcontracts
     *
     * @param integer $idcontracts
     *
     * @return Revision
     */
    public function setIdcontracts($idcontracts)
    {
        $this->idcontracts = $idcontracts;

        return $this;
    }

    /**
     * Get idcontracts
     *
     * @return integer
     */
    public function getIdcontracts()
    {
        return $this->idcontracts;
    }

    /**
     * Set enddate
     *
     * @param \DateTime $enddate
     *
     * @return Revision
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
     * Set reference
     *
     * @param string $reference
     *
     * @return Revision
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

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
     * Set hourlyrate
     *
     * @param string $hourlyrate
     *
     * @return Revision
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
     * Set createby
     *
     * @param string $createby
     *
     * @return Revision
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
	
	public function updateTotalHour(){
		$this->hoursafter=intval($this->hoursbefore)+intval($this->hour);
	}

    /**
     * Set tanumber
     *
     * @param string $tanumber
     *
     * @return Revision
     */
    public function setTanumber($tanumber)
    {
        $this->tanumber = $tanumber;

        return $this;
    }

    /**
     * Get tanumber
     *
     * @return string
     */
    public function getTanumber()
    {
        return $this->tanumber;
    }

    /**
     * Set ratedate
     *
     * @param \DateTime $ratedate
     *
     * @return Revision
     */
    public function setRatedate($ratedate)
    {
        $this->ratedate = $ratedate;

        return $this;
    }

    /**
     * Get ratedate
     *
     * @return \DateTime
     */
    public function getRatedate()
    {
        return $this->ratedate;
    }

    /**
     * Set hoursbefore
     *
     * @param string $hoursbefore
     *
     * @return Revision
     */
    public function setHoursbefore($hoursbefore)
    {
        $this->hoursbefore = $hoursbefore;

        return $this;
    }

    /**
     * Get hoursbefore
     *
     * @return string
     */
    public function getHoursbefore()
    {
        return $this->hoursbefore;
    }

    /**
     * Set hourafter
     *
     * @param string $hourafter
     *
     * @return Revision
     */
    public function setHourafter($hourafter)
    {
        $this->hourafter = $hourafter;

        return $this;
    }

    /**
     * Get hourafter
     *
     * @return string
     */
    public function getHourafter()
    {
        return $this->hourafter;
    }

    /**
     * Set costbefore
     *
     * @param string $costbefore
     *
     * @return Revision
     */
    public function setCostbefore($costbefore)
    {
        $this->costbefore = $costbefore;

        return $this;
    }

    /**
     * Get costbefore
     *
     * @return string
     */
    public function getCostbefore()
    {
        return $this->costbefore;
    }

    /**
     * Set costafter
     *
     * @param string $costafter
     *
     * @return Revision
     */
    public function setCostafter($costafter)
    {
        $this->costafter = $costafter;

        return $this;
    }

    /**
     * Get costafter
     *
     * @return string
     */
    public function getCostafter()
    {
        return $this->costafter;
    }

    /**
     * Set amendment
     *
     * @param string $amendment
     *
     * @return Revision
     */
    public function setAmendment($amendment)
    {
        $this->amendment = $amendment;

        return $this;
    }

    /**
     * Get amendment
     *
     * @return string
     */
    public function getAmendment()
    {
        return $this->amendment;
    }

    /**
     * Set ratedate1
     *
     * @param \DateTime $ratedate1
     *
     * @return Revision
     */
    public function setRatedate1($ratedate1)
    {
        $this->ratedate1 = $ratedate1;

        return $this;
    }

    /**
     * Get ratedate1
     *
     * @return \DateTime
     */
    public function getRatedate1()
    {
        return $this->ratedate1;
    }

    /**
     * Set hour1
     *
     * @param string $hour1
     *
     * @return Revision
     */
    public function setHour1($hour1)
    {
        $this->hour1 = $hour1;

        return $this;
    }

    /**
     * Get hour1
     *
     * @return string
     */
    public function getHour1()
    {
        return $this->hour1;
    }

    /**
     * Set hourlyrate1
     *
     * @param string $hourlyrate1
     *
     * @return Revision
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
     * Set total1
     *
     * @param string $total1
     *
     * @return Revision
     */
    public function setTotal1($total1)
    {
        $this->total1 = $total1;

        return $this;
    }

    /**
     * Get total1
     *
     * @return string
     */
    public function getTotal1()
    {
        return $this->total1;
    }

    /**
     * Set enddate1
     *
     * @param \DateTime $enddate1
     *
     * @return Revision
     */
    public function setEnddate1($enddate1)
    {
        $this->enddate1 = $enddate1;

        return $this;
    }

    /**
     * Get enddate1
     *
     * @return \DateTime
     */
    public function getEnddate1()
    {
        return $this->enddate1;
    }
}

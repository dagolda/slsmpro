<?php
/*
* Date Création: 16/04/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Billing.php
* Description: Entité des Billings
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="adm_billing")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\BillingRepository")
*/
class Billing 
{
    /**
    * @ORM\GeneratedValue
    * @ORM\Id
    * @ORM\Column(type="integer")
    */
    private $id;
		
    /**
    * @ORM\ManyToOne(targetEntity="Contracts")
	* @ORM\JoinColumn(name="idcontracts",referencedColumnName="id")
    */      
    private $contract;
		
    /**
    * @ORM\Column(type="date")
    */    
	private $startdate;	
			
    /**
    * @ORM\Column(type="date",nullable=true)
    */    
	private $enddate;	
	
    /**
    * @ORM\Column(type="integer", nullable=true)
    */    
    private $numbersession;
	
    /**
    * @ORM\Column(type="decimal", scale=2, nullable=true)
    */    
    private $hour;
	
    /**
    * @ORM\Column(type="decimal", scale=2, nullable=true)
    */    
    private $hourlyrate;
	
    /**
	 * @ORM\Column(type="integer")
     */ 
	//1: created; 2=invoiced ;
    private $status;	
	
    /**
    * @ORM\Column(type="decimal", scale=2, nullable=true)
    */
    private $amount;
	
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
     * Set startdate
     *
     * @param \DateTime $startdate
     *
     * @return Billing
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
     * @return Billing
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
     * Set hour
     *
     * @param string $hour
     *
     * @return Billing
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
     * Set status
     *
     * @param integer $status
     *
     * @return Billing
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
     * Set billed status
     *
     * @param integer $status
     *
     * @return Billing
     */
    public function setBilledStatus()
    {
        $this->status = 2;
        return $this;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     *
     * @return Billing
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return integer
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Billing
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
     * Set contract
     *
     * @param \Bo\AdminBundle\Entity\Contracts $contract
     *
     * @return Billing
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
     * Set hourlyrate
     *
     * @param string $hourlyrate
     *
     * @return Billing
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
     * Set numbersession
     *
     * @param integer $numbersession
     *
     * @return Billing
     */
    public function setNumbersession($numbersession)
    {
        $this->numbersession = $numbersession;

        return $this;
    }

    /**
     * Get numbersession
     *
     * @return integer
     */
    public function getNumbersession()
    {
        return $this->numbersession;
    }
}

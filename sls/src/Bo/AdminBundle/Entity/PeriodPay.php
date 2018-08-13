<?php
/*
* Date Création: 11/04/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : PeriodPay.php
* Description: Entité PeriodPay
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="adm_periodpay")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\PeriodPayRepository")
*/
class PeriodPay 
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
    private $startdate;
	
    /**
    * @ORM\Column(type="date")
    */    
    private $enddate;
	
    /**
    * @ORM\Column(type="string",length=7, nullable=true)
    */    
    private $numberhour;
			
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $pweek;
		
    /**
     * @ORM\Column(type="string",length=4)
     */    
    private $year;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */   
    private $month;
	
    /**
	 * @ORM\Column(type="integer")
     */ 
	//1:in progress; 2=paid; 
    private $status;
	
    /**
    * @ORM\Column(type="datetime")
    */    
	private $donedate;	
	
    /**
    * @ORM\Column(type="datetime", nullable=true)
    */    
	private $paydate;		
	
    /**
    * @ORM\Column(type="datetime")
    */    
	private $creationdate;	
	
    /**
    * Constructor
    */
    public function __construct()
    {
		$this->creationdate=$this->donedate=new \DateTime();
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
     * @return PeriodPay
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
     * @return PeriodPay
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
     * Set numberhour
     *
     * @param string $numberhour
     *
     * @return PeriodPay
     */
    public function setNumberhour($numberhour)
    {
        $this->numberhour = $numberhour;

        return $this;
    }

    /**
     * Get numberhour
     *
     * @return string
     */
    public function getNumberhour()
    {
        return $this->numberhour;
    }

    /**
     * Set year
     *
     * @param string $year
     *
     * @return PeriodPay
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
     * Set status
     *
     * @param integer $status
     *
     * @return PeriodPay
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
     * Set paydate
     *
     * @param \DateTime $paydate
     *
     * @return PeriodPay
     */
    public function setPaydate($paydate)
    {
        $this->paydate = $paydate;

        return $this;
    }

    /**
     * Get paydate
     *
     * @return \DateTime
     */
    public function getPaydate()
    {
        return $this->paydate;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return PeriodPay
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
     * Set donedate
     *
     * @param \DateTime $donedate
     *
     * @return PeriodPay
     */
    public function setDonedate($donedate)
    {
        $this->donedate = $donedate;

        return $this;
    }

    /**
     * Get donedate
     *
     * @return \DateTime
     */
    public function getDonedate()
    {
        return $this->donedate;
    }

    /**
     * Set pweek
     *
     * @param string $pweek
     *
     * @return PeriodPay
     */
    public function setPweek($pweek)
    {
        $this->pweek = $pweek;

        return $this;
    }

    /**
     * Get pweek
     *
     * @return string
     */
    public function getPweek()
    {
        return $this->pweek;
    }

    /**
     * Set month
     *
     * @param string $month
     *
     * @return PeriodPay
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
}

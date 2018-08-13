<?php
/*
* Date Création: 21/04/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Extrapay.php
* Description: Entité Extrapay
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="adm_extrapay")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\ExtrapayRepository")
*/
class Extrapay 
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
    * @ORM\ManyToOne(targetEntity="PeriodPay")
	* @ORM\JoinColumn(name="idpariodpay",referencedColumnName="id", nullable=true)
    */      
    private $periodpay;	
		
    /**
    * @ORM\Column(type="string",length=7)
    */    
    private $hour;
	
    /**
	 * @ORM\Column(type="integer")
     */ 
	//1: submitted; 2=calculated; 3=paid;
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
     * Set hour
     *
     * @param string $hour
     *
     * @return Extrapay
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
     * @return Extrapay
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
     * @return Extrapay
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
     * @return Extrapay
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
     * Set periodpay
     *
     * @param \Bo\AdminBundle\Entity\PeriodPay $periodpay
     *
     * @return Extrapay
     */
    public function setPeriodpay(\Bo\AdminBundle\Entity\PeriodPay $periodpay = null)
    {
        $this->periodpay = $periodpay;

        return $this;
    }

    /**
     * Get periodpay
     *
     * @return \Bo\AdminBundle\Entity\PeriodPay
     */
    public function getPeriodpay()
    {
        return $this->periodpay;
    }
}

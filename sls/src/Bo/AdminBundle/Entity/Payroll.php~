<?php
/*
* Date Création: 11/04/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Payroll.php
* Description: Entité Payroll
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="adm_payroll")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\PayrollRepository")
*/
class Payroll 
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
    * @ORM\Column(type="integer", nullable=true)
    */      
    private $idperiodpay;	
	
    /**
    * @ORM\ManyToOne(targetEntity="Tsweek")
	* @ORM\JoinColumn(name="idtsweek",referencedColumnName="id")
    */      
    private $tsweek;
		
    /**
    * @ORM\Column(type="string",length=7)
    */    
    private $hour;
	
    /**
     * @ORM\Column(type="string",length=100,nullable=true)
     */    
    private $typets;
	
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
     * @return Payroll
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
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Payroll
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
     * @return Payroll
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
     * Set tsweek
     *
     * @param \Bo\AdminBundle\Entity\Tsweek $tsweek
     *
     * @return Payroll
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
     * Set status
     *
     * @param integer $status
     *
     * @return Payroll
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
     * Set idperiodpay
     *
     * @param integer $idperiodpay
     *
     * @return Payroll
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
     * @param string $typets
     *
     * @return Payroll
     */
    public function setTypets($typets)
    {
        $this->typets = $typets;

        return $this;
    }

    /**
     * Get typets
     *
     * @return string
     */
    public function getTypets()
    {
        return $this->typets;
    }
}

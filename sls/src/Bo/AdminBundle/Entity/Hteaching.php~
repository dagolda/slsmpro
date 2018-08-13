<?php
/*
* Date Création: 11/04/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Hteaching.php
* Description: Entité Hteaching
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="adm_hteaching")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\HteachingRepository")
*/
class Hteaching 
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
     * @ORM\Column(type="decimal", scale=2, nullable=true)
    */      
    private $hw0;
							
    /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
    */      
    private $hw1;
		
    /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
    */      
    private $hw2;
			
    /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
    */      
    private $hw3;
				
    /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
    */      
    private $hw4;
					
    /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
    */      
    private $hw5;
		
    /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
    */    
    private $extra;
		
    /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
    */    
    private $total;
	
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
     * Set idperiodpay
     *
     * @param integer $idperiodpay
     *
     * @return Hteaching
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
     * Set hw0
     *
     * @param string $hw0
     *
     * @return Hteaching
     */
    public function setHw0($hw0)
    {
        $this->hw0 = $hw0;

        return $this;
    }

    /**
     * Get hw0
     *
     * @return string
     */
    public function getHw0()
    {
        return $this->hw0;
    }

    /**
     * Set hw1
     *
     * @param string $hw1
     *
     * @return Hteaching
     */
    public function setHw1($hw1)
    {
        $this->hw1 = $hw1;

        return $this;
    }

    /**
     * Get hw1
     *
     * @return string
     */
    public function getHw1()
    {
        return $this->hw1;
    }

    /**
     * Set hw2
     *
     * @param string $hw2
     *
     * @return Hteaching
     */
    public function setHw2($hw2)
    {
        $this->hw2 = $hw2;

        return $this;
    }

    /**
     * Get hw2
     *
     * @return string
     */
    public function getHw2()
    {
        return $this->hw2;
    }

    /**
     * Set hw3
     *
     * @param string $hw3
     *
     * @return Hteaching
     */
    public function setHw3($hw3)
    {
        $this->hw3 = $hw3;

        return $this;
    }

    /**
     * Get hw3
     *
     * @return string
     */
    public function getHw3()
    {
        return $this->hw3;
    }

    /**
     * Set hw4
     *
     * @param string $hw4
     *
     * @return Hteaching
     */
    public function setHw4($hw4)
    {
        $this->hw4 = $hw4;

        return $this;
    }

    /**
     * Get hw4
     *
     * @return string
     */
    public function getHw4()
    {
        return $this->hw4;
    }

    /**
     * Set hw5
     *
     * @param string $hw5
     *
     * @return Hteaching
     */
    public function setHw5($hw5)
    {
        $this->hw5 = $hw5;

        return $this;
    }

    /**
     * Get hw5
     *
     * @return string
     */
    public function getHw5()
    {
        return $this->hw5;
    }

    /**
     * Set extra
     *
     * @param string $extra
     *
     * @return Hteaching
     */
    public function setExtra($extra)
    {
        $this->extra = $extra;

        return $this;
    }

    /**
     * Get extra
     *
     * @return string
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Set total
     *
     * @param string $total
     *
     * @return Hteaching
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
     * Set status
     *
     * @param integer $status
     *
     * @return Hteaching
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
     * @return Hteaching
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
     * @return Hteaching
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
}

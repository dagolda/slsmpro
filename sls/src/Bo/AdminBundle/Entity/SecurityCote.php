<?php
/*
* Date Création: 20/02/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : SecurityCote.php
* Description: Entité Security Cote
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="adm_securitycote")
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\SecurityCoteRepository")
 */
class SecurityCote
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
					
    /**
     * @ORM\OneToOne(targetEntity="Employee")
	 * @ORM\JoinColumn(name="idemployee",referencedColumnName="id")
     */      
    private $employee;	
    
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */    
    private $filenumber;
	   
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */    
    private $level;
		
    /**
    * @ORM\Column(type="string",length=6000,nullable=true)
    */    
    private $comment;
	
    /**
    * @ORM\Column(type="date",nullable=true)
    */    
	private $requestdate;	
		
    /**
    * @ORM\Column(type="date",nullable=true)
    */    
	private $receivedate;	
	
    /**
    * @ORM\Column(type="date",nullable=true)
    */    
	private $expirydate;	
						
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $createby;
	
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
     * Set filenumber
     *
     * @param string $filenumber
     *
     * @return SecurityCote
     */
    public function setFilenumber($filenumber)
    {
        $this->filenumber = $filenumber;

        return $this;
    }

    /**
     * Get filenumber
     *
     * @return string
     */
    public function getFilenumber()
    {
        return $this->filenumber;
    }

    /**
     * Set requestdate
     *
     * @param \Date $requestdate
     *
     * @return SecurityCote
     */
    public function setRequestdate($requestdate)
    {
        $this->requestdate = $requestdate;

        return $this;
    }

    /**
     * Get requestdate
     *
     * @return \Date
     */
    public function getRequestdate()
    {
        return $this->requestdate;
    }

    /**
     * Set receivedate
     *
     * @param \Date $receivedate
     *
     * @return SecurityCote
     */
    public function setReceivedate($receivedate)
    {
        $this->receivedate = $receivedate;

        return $this;
    }

    /**
     * Get receivedate
     *
     * @return \Date
     */
    public function getReceivedate()
    {
        return $this->receivedate;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return SecurityCote
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
     * @return SecurityCote
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
     * Set level
     *
     * @param string $level
     *
     * @return SecurityCote
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return SecurityCote
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
     * Set expirydate
     *
     * @param \DateTime $expirydate
     *
     * @return SecurityCote
     */
    public function setExpirydate($expirydate)
    {
        $this->expirydate = $expirydate;

        return $this;
    }

    /**
     * Get expirydate
     *
     * @return \DateTime
     */
    public function getExpirydate()
    {
        return $this->expirydate;
    }

    /**
     * Set createby
     *
     * @param string $createby
     *
     * @return SecurityCote
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
}

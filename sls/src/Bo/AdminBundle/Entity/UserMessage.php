<?php
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Table(name="adm_usermessage")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\UserMessageRepository")
*/
class UserMessage
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
    private $subject;
	
    /**
     * @ORM\ManyToOne(targetEntity="Bo\AdminBundle\Entity\Employee")
	 * @ORM\JoinColumn(name="idemployee",referencedColumnName="id", nullable=true)
     */      
    private $employee;	
	  
    /**
     * @ORM\ManyToOne(targetEntity="Bo\AdminBundle\Entity\Students")
	 * @ORM\JoinColumn(name="idstudents",referencedColumnName="id", nullable=true)
     */      
    private $students;	
	
    /**
	* @ORM\Column(type="integer")
    */    
    private $ito1;
	
    /**
    * @ORM\Column(type="integer",nullable=true)
    */    
    private $ito2;
	
    /**
    * @ORM\Column(type="integer",nullable=true)
    */    
    private $ito3;
	
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $sto1;
	
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $sto2;
	
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $sto3;
	   
    /**
    * @ORM\Column(type="string",length=255)
    */
	//automatically filled between student, employee and coordinator
    private $stype;
	
    /**
    * @ORM\Column(type="integer")
    */
	//automatically filled between 1=individual or 2=group
    private $category;
	
    /**
     * @ORM\Column(type="text",length=5500,nullable=true)
     */    
    private $message;

    /**
     * @ORM\Column(type="datetime")
     */    
	protected $dateCreation;
	
    /**
    * @ORM\Column(type="integer")
    */    
	//0=send; 1=read; 2=answered 
	private $status;	
	
    /**
     * Constructor
     */
    public function __construct()
    {
		$this->dateCreation=new \DateTime();
		$this->status=0;
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
     * Set subject
     *
     * @param string $subject
     *
     * @return UserMessage
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set to1
     *
     * @param string $to1
     *
     * @return UserMessage
     */
    public function setTo1($to1)
    {
        $this->to1 = $to1;

        return $this;
    }

    /**
     * Get to1
     *
     * @return string
     */
    public function getTo1()
    {
        return $this->to1;
    }

    /**
     * Set to2
     *
     * @param string $to2
     *
     * @return UserMessage
     */
    public function setTo2($to2)
    {
        $this->to2 = $to2;

        return $this;
    }

    /**
     * Get to2
     *
     * @return string
     */
    public function getTo2()
    {
        return $this->to2;
    }

    /**
     * Set to3
     *
     * @param string $to3
     *
     * @return UserMessage
     */
    public function setTo3($to3)
    {
        $this->to3 = $to3;

        return $this;
    }

    /**
     * Get to3
     *
     * @return string
     */
    public function getTo3()
    {
        return $this->to3;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return UserMessage
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return UserMessage
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return UserMessage
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return UserMessage
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
     * Set employee
     *
     * @param \Bo\AdminBundle\Entity\Employee $employee
     *
     * @return UserMessage
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
     * Set students
     *
     * @param \Bo\AdminBundle\Entity\Students $students
     *
     * @return UserMessage
     */
    public function setStudents(\Bo\AdminBundle\Entity\Students $students = null)
    {
        $this->students = $students;

        return $this;
    }

    /**
     * Get students
     *
     * @return \Bo\AdminBundle\Entity\Students
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * Set stype
     *
     * @param string $stype
     *
     * @return UserMessage
     */
    public function setStype($stype)
    {
        $this->stype = $stype;

        return $this;
    }

    /**
     * Get stype
     *
     * @return string
     */
    public function getStype()
    {
        return $this->stype;
    }

    /**
     * Set ito1
     *
     * @param integer $ito1
     *
     * @return UserMessage
     */
    public function setIto1($ito1)
    {
        $this->ito1 = $ito1;

        return $this;
    }

    /**
     * Get ito1
     *
     * @return integer
     */
    public function getIto1()
    {
        return $this->ito1;
    }

    /**
     * Set ito2
     *
     * @param integer $ito2
     *
     * @return UserMessage
     */
    public function setIto2($ito2)
    {
        $this->ito2 = $ito2;

        return $this;
    }

    /**
     * Get ito2
     *
     * @return integer
     */
    public function getIto2()
    {
        return $this->ito2;
    }

    /**
     * Set ito3
     *
     * @param integer $ito3
     *
     * @return UserMessage
     */
    public function setIto3($ito3)
    {
        $this->ito3 = $ito3;

        return $this;
    }

    /**
     * Get ito3
     *
     * @return integer
     */
    public function getIto3()
    {
        return $this->ito3;
    }

    /**
     * Set sto1
     *
     * @param string $sto1
     *
     * @return UserMessage
     */
    public function setSto1($sto1)
    {
        $this->sto1 = $sto1;

        return $this;
    }

    /**
     * Get sto1
     *
     * @return string
     */
    public function getSto1()
    {
        return $this->sto1;
    }

    /**
     * Set sto2
     *
     * @param string $sto2
     *
     * @return UserMessage
     */
    public function setSto2($sto2)
    {
        $this->sto2 = $sto2;

        return $this;
    }

    /**
     * Get sto2
     *
     * @return string
     */
    public function getSto2()
    {
        return $this->sto2;
    }

    /**
     * Set sto3
     *
     * @param string $sto3
     *
     * @return UserMessage
     */
    public function setSto3($sto3)
    {
        $this->sto3 = $sto3;

        return $this;
    }

    /**
     * Get sto3
     *
     * @return string
     */
    public function getSto3()
    {
        return $this->sto3;
    }
}

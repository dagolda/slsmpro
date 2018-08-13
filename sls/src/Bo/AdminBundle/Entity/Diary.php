<?php
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Table(name="adm_diary")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\DiaryRepository")
*/
class Diary
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
    * @ORM\Column(type="datetime")
    */    
     protected $ddate;
	
    /**
    * @ORM\Column(type="text",length=2500,nullable=true)
    */    
    private $note;

    /**
    * @ORM\ManyToOne(targetEntity="Contracts", inversedBy="agenda")
    * @ORM\JoinColumn(name="idcontract",referencedColumnName="id", nullable=true)
    */        
    private $contracts;

    /**
    * @ORM\ManyToOne(targetEntity="Students", inversedBy="agenda")
    * @ORM\JoinColumn(name="idstudent",referencedColumnName="id", nullable=true)
    */        
    private $students;
		  
    /**
    * @ORM\ManyToOne(targetEntity="Group", inversedBy="agenda")
    * @ORM\JoinColumn(name="idgroup",referencedColumnName="id", nullable=true)
    */      
    private $group;
		  
    /**
    * @ORM\ManyToOne(targetEntity="Employee", inversedBy="agenda")
    * @ORM\JoinColumn(name="idemployee",referencedColumnName="id", nullable=true)
    */      
    private $employee;

    /**
    * @ORM\Column(type="datetime")
    */    
	protected $dateCreation;
	
    /**
    * Constructor
    */
    public function __construct()
    {
	$this->dateCreation=$this->ddate=new \DateTime();
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
     * Set ddate
     *
     * @param \DateTime $ddate
     *
     * @return Diary
     */
    public function setDdate($ddate)
    {
        $this->ddate = $ddate;

        return $this;
    }

    /**
     * Get ddate
     *
     * @return \DateTime
     */
    public function getDdate()
    {
        return $this->ddate;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return Diary
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Diary
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
     * Set contracts
     *
     * @param \Bo\AdminBundle\Entity\Contracts $contracts
     *
     * @return Diary
     */
    public function setContracts(\Bo\AdminBundle\Entity\Contracts $contracts = null)
    {
        $this->contracts = $contracts;

        return $this;
    }

    /**
     * Get contracts
     *
     * @return \Bo\AdminBundle\Entity\Contracts
     */
    public function getContracts()
    {
        return $this->contracts;
    }

    /**
     * Set students
     *
     * @param \Bo\AdminBundle\Entity\Students $students
     *
     * @return Diary
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
     * Set group
     *
     * @param \Bo\AdminBundle\Entity\Group $group
     *
     * @return Diary
     */
    public function setGroup(\Bo\AdminBundle\Entity\Group $group = null)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return \Bo\AdminBundle\Entity\Group
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set employee
     *
     * @param \Bo\AdminBundle\Entity\Employee $employee
     *
     * @return Diary
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

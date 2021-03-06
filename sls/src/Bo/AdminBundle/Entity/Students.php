<?php
/*
* Date Création: 20/02/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Students.php
* Description: Entité des Students
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="adm_students")
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\StudentsRepository")
 */
class Students
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
    private $name;
	
    /**
     * @ORM\Column(type="string",length=255)
     */    
    private $firstname;
			
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $startlevel;
		
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $targetlevel;
			
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $phonenumber;
			
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $phonenumber1;
				
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */ 
    //department 	
    private $department;	
					
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $email;
					
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $email1;	
				
    /**
    * @ORM\Column(type="date", nullable=true)
    */    
	private $startdate;	
	
    /**
    * @ORM\Column(type="date", nullable=true)
    */    
	private $enddate;	
	
    /**
    * @ORM\ManyToOne(targetEntity="Group")
	* @ORM\JoinColumn(name="idgroup",referencedColumnName="id",nullable=true)
    */      
    private $group;
	
    /**
    * @ORM\ManyToMany(targetEntity="Contracts", mappedBy="students")
    */
    private $contracts;
	
	/**
    * @ORM\Column(type="string",length=255, nullable=true)
	*/
	protected $pwd;
	
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
	  
	public function __toString(){
		return $this->firstname." ".$this->name;
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
     * Set name
     *
     * @param string $name
     *
     * @return Students
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Students
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }


    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Students
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
     * Set targetlevel
     *
     * @param string $targetlevel
     *
     * @return Students
     */
    public function setTargetlevel($targetlevel)
    {
        $this->targetlevel = $targetlevel;

        return $this;
    }

    /**
     * Get targetlevel
     *
     * @return string
     */
    public function getTargetlevel()
    {
        return $this->targetlevel;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Students
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phonenumber
     *
     * @param string $phonenumber
     *
     * @return Students
     */
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;

        return $this;
    }

    /**
     * Get phonenumber
     *
     * @return string
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    /**
     * Add teacher
     *
     * @param \Bo\AdminBundle\Entity\Teachers $teacher
     *
     * @return Students
     */
    public function addTeacher(\Bo\AdminBundle\Entity\Teachers $teacher)
    {
        $this->teachers[] = $teacher;

        return $this;
    }

    /**
     * Remove teacher
     *
     * @param \Bo\AdminBundle\Entity\Teachers $teacher
     */
    public function removeTeacher(\Bo\AdminBundle\Entity\Teachers $teacher)
    {
        $this->teachers->removeElement($teacher);
    }

    /**
     * Get teachers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTeachers()
    {
        return $this->teachers;
    }

    /**
     * Set group
     *
     * @param \Bo\AdminBundle\Entity\Group $group
     *
     * @return Students
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
     * Set startlevel
     *
     * @param string $startlevel
     *
     * @return Students
     */
    public function setStartlevel($startlevel)
    {
        $this->startlevel = $startlevel;

        return $this;
    }

    /**
     * Get startlevel
     *
     * @return string
     */
    public function getStartlevel()
    {
        return $this->startlevel;
    }

    /**
     * Set startdate
     *
     * @param \DateTime $startdate
     *
     * @return Students
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
     * @return Students
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
     * Set department
     *
     * @param string $department
     *
     * @return Students
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set pwd
     *
     * @param string $pwd
     *
     * @return Students
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }

    /**
     * Get pwd
     *
     * @return string
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * Set createby
     *
     * @param string $createby
     *
     * @return Students
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

    /**
     * Add contract
     *
     * @param \Bo\AdminBundle\Entity\Contracts $contract
     *
     * @return Students
     */
    public function addContract(\Bo\AdminBundle\Entity\Contracts $contract)
    {
        $this->contracts[] = $contract;

        return $this;
    }

    /**
     * Remove contract
     *
     * @param \Bo\AdminBundle\Entity\Contracts $contract
     */
    public function removeContract(\Bo\AdminBundle\Entity\Contracts $contract)
    {
        $this->contracts->removeElement($contract);
    }

    /**
     * Get contracts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContracts()
    {
        return $this->contracts;
    }

    /**
     * Set phonenumber1
     *
     * @param string $phonenumber1
     *
     * @return Students
     */
    public function setPhonenumber1($phonenumber1)
    {
        $this->phonenumber1 = $phonenumber1;

        return $this;
    }

    /**
     * Get phonenumber1
     *
     * @return string
     */
    public function getPhonenumber1()
    {
        return $this->phonenumber1;
    }

    /**
     * Set email1
     *
     * @param string $email1
     *
     * @return Students
     */
    public function setEmail1($email1)
    {
        $this->email1 = $email1;

        return $this;
    }

    /**
     * Get email1
     *
     * @return string
     */
    public function getEmail1()
    {
        return $this->email1;
    }
}

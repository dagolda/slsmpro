<?php
namespace Bo\UserBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="adm_user")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Bo\UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
   protected $id;
   
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
	* @ORM\Column(type="integer", nullable=true)
    */      
	private $idcoordinator;	
	
	/**
    * @ORM\Column(type="string",length=255, nullable=true)
	*/
	protected $pwd;
	
	private $role;

    /**
    * @ORM\Column(type="datetime")
    */    
	private $creationdate;
	
	public function __construct()
	{
		$this->creationdate=new \DateTime();
		parent::__construct();
	}

    /**
    * Get id
    * @return integer 
    */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return User
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
     * @return User
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
	
    public function setRole($role = null)
    {
        $this->role = $role;
        return $this;
    }

    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set students
     *
     * @param \Bo\AdminBundle\Entity\Students $students
     *
     * @return User
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
     * Set pwd
     *
     * @param string $pwd
     *
     * @return User
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
     * Set coordinator
     *
     * @param \Bo\AdminBundle\Entity\Coordinator $coordinator
     *
     * @return User
     */
    public function setCoordinator(\Bo\AdminBundle\Entity\Coordinator $coordinator = null)
    {
        $this->coordinator = $coordinator;

        return $this;
    }

    /**
     * Get coordinator
     *
     * @return \Bo\AdminBundle\Entity\Coordinator
     */
    public function getCoordinator()
    {
        return $this->coordinator;
    }

    /**
     * Set idcoordinator
     *
     * @param integer $idcoordinator
     *
     * @return User
     */
    public function setIdcoordinator($idcoordinator)
    {
        $this->idcoordinator = $idcoordinator;

        return $this;
    }

    /**
     * Get idcoordinator
     *
     * @return integer
     */
    public function getIdcoordinator()
    {
        return $this->idcoordinator;
    }
}

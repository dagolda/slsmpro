<?php
/*
* Date Création: 20/02/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Group.php
* Description: Liste des Groups
*/

namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="adm_group")
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\GroupRepository")
*/
class Group 
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
    * @ORM\Column(type="date", nullable=true)
    */    
    private $startdate;	
	
    /**
    * @ORM\Column(type="date", nullable=true)
    */    
    private $enddate;

    /**
    * @ORM\ManyToMany(targetEntity="Employee", inversedBy="group")
    * @ORM\JoinTable(name="group_employee")
    */    	     
    private $employee;

    /**
    * @ORM\ManyToMany(targetEntity="Local", inversedBy="group")
    * @ORM\JoinTable(name="group_local")
    */ 	     
    private $local;
	
    /**
    * @ORM\ManyToMany(targetEntity="Students")
	* @ORM\JoinColumn(name="idstudent",referencedColumnName="id",nullable=true)
    */        
    private $students;

    /**
    * @ORM\OneToMany(targetEntity="Agenda", mappedBy="group")
    */      
    private $agenda;	


    /**
    * @ORM\OneToMany(targetEntity="Contracts", mappedBy="group")
    */      
    private $contracts;

    /**
    * @ORM\ManyToMany(targetEntity="Training", inversedBy="group")
    * @ORM\JoinTable(name="group_training")
    */        
    private $training;		
	
    /**
    * @ORM\ManyToOne(targetEntity="Employee")
	* @ORM\JoinColumn(name="idadvisor",referencedColumnName="id",nullable=true)
    */    
    private $advisor;
	
    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */    
    private $targetlevel;	
	
    /**
    * @ORM\ManyToOne(targetEntity="Typecontract")
	* @ORM\JoinColumn(name="idtypecontract",referencedColumnName="id")
    */      
    private $typecontract;

    /**
    * @ORM\OneToMany(targetEntity="Closegroup", mappedBy="group")
    */      
    private $closegroup;	
		
    /**
    * @ORM\Column(type="integer")
    */    
    //0=Completed or close or archived; 1=In progress; 2=upcomming; 3=outstanding; 4=Cancel;
    private $status;	
		
    /**
    * @ORM\Column(type="string",length=100, nullable=true)
    */
    private $usedhours;
		
    /**
    * @ORM\Column(type="date", nullable=true)
    */
    private $dateusedhour;
						
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
		$this->status=1;
    }	
   
	public function __toString(){
		return $this->name;
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
     * @return Group
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
     * Set targetlevel
     *
     * @param string $targetlevel
     *
     * @return Group
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
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Group
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
     * Set status
     *
     * @param boolean $status
     *
     * @return Group
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
     * Set startdate
     *
     * @param \DateTime $startdate
     *
     * @return Group
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
     * @return Group
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
     * Set createby
     *
     * @param string $createby
     *
     * @return Group
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
     * Add employee
     *
     * @param \Bo\AdminBundle\Entity\Employee $employee
     *
     * @return Group
     */
    public function addEmployee(\Bo\AdminBundle\Entity\Employee $employee)
    {
        $this->employee[] = $employee;

        return $this;
    }

    /**
     * Remove employee
     *
     * @param \Bo\AdminBundle\Entity\Employee $employee
     */
    public function removeEmployee(\Bo\AdminBundle\Entity\Employee $employee)
    {
        $this->employee->removeElement($employee);
    }

    /**
     * Get employee
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * Add local
     *
     * @param \Bo\AdminBundle\Entity\Local $local
     *
     * @return Group
     */
    public function addLocal(\Bo\AdminBundle\Entity\Local $local)
    {
        $this->local[] = $local;

        return $this;
    }

    /**
     * Remove local
     *
     * @param \Bo\AdminBundle\Entity\Local $local
     */
    public function removeLocal(\Bo\AdminBundle\Entity\Local $local)
    {
        $this->local->removeElement($local);
    }

    /**
     * Get local
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Add student
     *
     * @param \Bo\AdminBundle\Entity\Students $student
     *
     * @return Group
     */
    public function addStudent(\Bo\AdminBundle\Entity\Students $student)
    {
        $this->students[] = $student;

        return $this;
    }

    /**
     * Remove student
     *
     * @param \Bo\AdminBundle\Entity\Students $student
     */
    public function removeStudent(\Bo\AdminBundle\Entity\Students $student)
    {
        $this->students->removeElement($student);
    }

    /**
     * Get students
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * Set advisor
     *
     * @param \Bo\AdminBundle\Entity\Employee $advisor
     *
     * @return Group
     */
    public function setAdvisor(\Bo\AdminBundle\Entity\Employee $advisor = null)
    {
        $this->advisor = $advisor;

        return $this;
    }

    /**
     * Get advisor
     *
     * @return \Bo\AdminBundle\Entity\Employee
     */
    public function getAdvisor()
    {
        return $this->advisor;
    }

    /**
     * Add training
     *
     * @param \Bo\AdminBundle\Entity\Training $training
     *
     * @return Group
     */
    public function addTraining(\Bo\AdminBundle\Entity\Training $training)
    {
        $this->training[] = $training;

        return $this;
    }

    /**
     * Remove training
     *
     * @param \Bo\AdminBundle\Entity\Training $training
     */
    public function removeTraining(\Bo\AdminBundle\Entity\Training $training)
    {
        $this->training->removeElement($training);
    }

    /**
     * Get training
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTraining()
    {
        return $this->training;
    }

    /**
     * Set typecontract
     *
     * @param \Bo\AdminBundle\Entity\Typecontract $typecontract
     *
     * @return Group
     */
    public function setTypecontract(\Bo\AdminBundle\Entity\Typecontract $typecontract = null)
    {
        $this->typecontract = $typecontract;

        return $this;
    }

    /**
     * Get typecontract
     *
     * @return \Bo\AdminBundle\Entity\Typecontract
     */
    public function getTypecontract()
    {
        return $this->typecontract;
    }

    /**
     * Add agenda
     *
     * @param \Bo\AdminBundle\Entity\Agenda $agenda
     *
     * @return Group
     */
    public function addAgenda(\Bo\AdminBundle\Entity\Agenda $agenda)
    {
        $this->agenda[] = $agenda;

        return $this;
    }

    /**
     * Remove agenda
     *
     * @param \Bo\AdminBundle\Entity\Agenda $agenda
     */
    public function removeAgenda(\Bo\AdminBundle\Entity\Agenda $agenda)
    {
        $this->agenda->removeElement($agenda);
    }

    /**
     * Get agenda
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * Add contract
     *
     * @param \Bo\AdminBundle\Entity\Contracts $contract
     *
     * @return Group
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
     * Add closegroup
     *
     * @param \Bo\AdminBundle\Entity\Closegroup $closegroup
     *
     * @return Group
     */
    public function addClosegroup(\Bo\AdminBundle\Entity\Closegroup $closegroup)
    {
        $this->closegroup[] = $closegroup;

        return $this;
    }

    /**
     * Remove closegroup
     *
     * @param \Bo\AdminBundle\Entity\Closegroup $closegroup
     */
    public function removeClosegroup(\Bo\AdminBundle\Entity\Closegroup $closegroup)
    {
        $this->closegroup->removeElement($closegroup);
    }

    /**
     * Get closegroup
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClosegroup()
    {
        return $this->closegroup;
    }

    /**
     * Set usedhours
     *
     * @param string $usedhours
     *
     * @return Group
     */
    public function setUsedhours($usedhours)
    {
        $this->usedhours = $usedhours;

        return $this;
    }

    /**
     * Get usedhours
     *
     * @return string
     */
    public function getUsedhours()
    {
        return $this->usedhours;
    }

    /**
     * Set dateusedhour
     *
     * @param \DateTime $dateusedhour
     *
     * @return Group
     */
    public function setDateusedhour($dateusedhour)
    {
        $this->dateusedhour = $dateusedhour;

        return $this;
    }

    /**
     * Get dateusedhour
     *
     * @return \DateTime
     */
    public function getDateusedhour()
    {
        return $this->dateusedhour;
    }
}

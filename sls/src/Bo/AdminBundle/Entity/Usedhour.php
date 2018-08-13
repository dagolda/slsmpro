<?php
/*
* Date Création: 02/07/2018
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Usedhour.php
* Description: Heures consommee
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="adm_usedhour")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\UsedhourRepository")
*/

class Usedhour 
{
    /**
    * @ORM\GeneratedValue
    * @ORM\Id
    * @ORM\Column(type="integer")
    */
    private $id;

    /**
    * @ORM\Column(type="date", nullable=true)
    */    
    private $ddate;
	  
    /**
    * @ORM\ManyToMany(targetEntity="Bo\AdminBundle\Entity\Employee")
    * @ORM\JoinTable(name="uham_employee")
    */      
    private $amteacher;	
	  
    /**
    * @ORM\ManyToMany(targetEntity="Bo\AdminBundle\Entity\Employee")
    * @ORM\JoinTable(name="uhpm_employeeam")
    */      
    private $pmteacher;	
	
    /**
    * @ORM\ManyToOne(targetEntity="Bo\AdminBundle\Entity\Students")
    * @ORM\JoinColumn(name="idstudents",referencedColumnName="id", nullable=true)
    */      
    private $student;	
		
    /**
    * @ORM\ManyToOne(targetEntity="Bo\AdminBundle\Entity\Group")
    * @ORM\JoinColumn(name="idgroup",referencedColumnName="id", nullable=true)
    */      
    private $group;	
		
    /**
    * @ORM\ManyToOne(targetEntity="Bo\AdminBundle\Entity\Contracts")
    * @ORM\JoinColumn(name="idcontract",referencedColumnName="id", nullable=true)
    */      
    private $contract;
		
    /**
    * @ORM\Column(type="string",length=100, nullable=true)
    */
    private $hour;	

    /**
    * @ORM\Column(type="boolean")
    */    
    //0=not notified;1=notified;
    private $notif;	
	
    /**
    * @ORM\Column(type="date", nullable=true)
    */    
    private $creationdate;
    /**
     * Constructor
     */
    public function __construct()
    {
	$this->creationdate=new \DateTime();
	$this->notif=false;
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
     * @return Usedhour
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
     * @return Usedhour
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
     * Set student
     *
     * @param \Bo\AdminBundle\Entity\Students $student
     *
     * @return Usedhour
     */
    public function setStudent(\Bo\AdminBundle\Entity\Students $student = null)
    {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return \Bo\AdminBundle\Entity\Students
     */
    public function getStudent()
    {
        return $this->student;
    }

    /**
     * Set group
     *
     * @param \Bo\AdminBundle\Entity\Group $group
     *
     * @return Usedhour
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
     * Set contract
     *
     * @param \Bo\AdminBundle\Entity\Contracts $contract
     *
     * @return Usedhour
     */
    public function setContract(\Bo\AdminBundle\Entity\Contracts $contract = null)
    {
        $this->contract = $contract;

        return $this;
    }

    /**
     * Get contract
     *
     * @return \Bo\AdminBundle\Entity\Contracts
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Set ddate
     *
     * @param \DateTime $ddate
     *
     * @return Usedhour
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
     * Add amteacher
     *
     * @param \Bo\AdminBundle\Entity\Employee $amteacher
     *
     * @return Usedhour
     */
    public function addAmteacher(\Bo\AdminBundle\Entity\Employee $amteacher)
    {
        $this->amteacher[] = $amteacher;

        return $this;
    }

    /**
     * Remove amteacher
     *
     * @param \Bo\AdminBundle\Entity\Employee $amteacher
     */
    public function removeAmteacher(\Bo\AdminBundle\Entity\Employee $amteacher)
    {
        $this->amteacher->removeElement($amteacher);
    }

    /**
     * Get amteacher
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAmteacher()
    {
        return $this->amteacher;
    }

    /**
     * Add pmteacher
     *
     * @param \Bo\AdminBundle\Entity\Employee $pmteacher
     *
     * @return Usedhour
     */
    public function addPmteacher(\Bo\AdminBundle\Entity\Employee $pmteacher)
    {
        $this->pmteacher[] = $pmteacher;

        return $this;
    }

    /**
     * Remove pmteacher
     *
     * @param \Bo\AdminBundle\Entity\Employee $pmteacher
     */
    public function removePmteacher(\Bo\AdminBundle\Entity\Employee $pmteacher)
    {
        $this->pmteacher->removeElement($pmteacher);
    }

    /**
     * Get pmteacher
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPmteacher()
    {
        return $this->pmteacher;
    }

    /**
     * Set notif
     *
     * @param boolean $notif
     *
     * @return Usedhour
     */
    public function setNotif($notif)
    {
        $this->notif = $notif;

        return $this;
    }

    /**
     * Get notif
     *
     * @return boolean
     */
    public function getNotif()
    {
        return $this->notif;
    }
}

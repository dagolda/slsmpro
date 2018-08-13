<?php
/*
* Date Création: 30/07/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : HistoStudents.php
* Description: Entité des Historiques des Students
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="adm_histostudents")
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\HistoStudentsRepository")
 */
class HistoStudents
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
		  	
    /**
    * @ORM\ManyToOne(targetEntity="Group")
	* @ORM\JoinColumn(name="idgroup",referencedColumnName="id",nullable=true)
    */      
    private $group;
		  			
    /**
    * @ORM\ManyToOne(targetEntity="Employee")
	* @ORM\JoinColumn(name="idemployee",referencedColumnName="id",nullable=true)
    */ 
    private $updatedby;
	
    /**
    * @ORM\Column(type="integer",nullable=true)
    */      
    private $idcontracts;
    
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
    * @ORM\Column(type="date", nullable=true)
    */    
	private $startdate;	
	
    /**
    * @ORM\Column(type="date", nullable=true)
    */    
	private $enddate;	
	
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
     * Set name
     *
     * @param string $name
     *
     * @return HistoStudents
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
     * @return HistoStudents
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
     * Set startlevel
     *
     * @param string $startlevel
     *
     * @return HistoStudents
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
     * Set targetlevel
     *
     * @param string $targetlevel
     *
     * @return HistoStudents
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
     * Set startdate
     *
     * @param \DateTime $startdate
     *
     * @return HistoStudents
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
     * @return HistoStudents
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
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return HistoStudents
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
     * Set idcontracts
     *
     * @param integer $idcontracts
     *
     * @return HistoStudents
     */
    public function setIdcontracts($idcontracts)
    {
        $this->idcontracts = $idcontracts;

        return $this;
    }

    /**
     * Get idcontracts
     *
     * @return integer
     */
    public function getIdcontracts()
    {
        return $this->idcontracts;
    }

    /**
     * Set group
     *
     * @param \Bo\AdminBundle\Entity\Group $group
     *
     * @return HistoStudents
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
     * Set updatedby
     *
     * @param \Bo\AdminBundle\Entity\Employee $updatedby
     *
     * @return HistoStudents
     */
    public function setUpdatedby(\Bo\AdminBundle\Entity\Employee $updatedby = null)
    {
        $this->updatedby = $updatedby;

        return $this;
    }

    /**
     * Get updatedby
     *
     * @return \Bo\AdminBundle\Entity\Employee
     */
    public function getUpdatedby()
    {
        return $this->updatedby;
    }
}

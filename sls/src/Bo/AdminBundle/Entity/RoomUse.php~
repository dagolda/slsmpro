<?php
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Table(name="adm_roomuse")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\RoomUseRepository")
*/
class RoomUse 
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
    * @ORM\ManyToOne(targetEntity="Local")
	* @ORM\JoinColumn(name="idlocal",referencedColumnName="id")
    */      
    private $local;	
	
    /**
    * @ORM\ManyToOne(targetEntity="Students")
	* @ORM\JoinColumn(name="idstudents",referencedColumnName="id",nullable=true)
    */  
    private $idstudent;
			
    /**
    * @ORM\ManyToOne(targetEntity="Group")
	* @ORM\JoinColumn(name="idgroup",referencedColumnName="id",nullable=true)
    */  
    private $group;
				
    /**
    * @ORM\Column(type="date", nullable=true)
    */    
	private $startdate;	
	
    /**
    * @ORM\Column(type="date", nullable=true)
    */    
	private $enddate;

    /**
    * @ORM\Column(type="time", nullable=true)
    */    
	private $startam;	
		
    /**
    * @ORM\Column(type="time", nullable=true)
    */    
	private $endam;	
	
    /**
    * @ORM\Column(type="time", nullable=true)
    */    
	private $startpm;
	
    /**
    * @ORM\Column(type="time", nullable=true)
    */    
	private $endpm;		
	
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
     * Set startdate
     *
     * @param \DateTime $startdate
     *
     * @return RoomUse
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
     * @return RoomUse
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
     * Set startam
     *
     * @param \DateTime $startam
     *
     * @return RoomUse
     */
    public function setStartam($startam)
    {
        $this->startam = $startam;

        return $this;
    }

    /**
     * Get startam
     *
     * @return \DateTime
     */
    public function getStartam()
    {
        return $this->startam;
    }

    /**
     * Set endam
     *
     * @param \DateTime $endam
     *
     * @return RoomUse
     */
    public function setEndam($endam)
    {
        $this->endam = $endam;

        return $this;
    }

    /**
     * Get endam
     *
     * @return \DateTime
     */
    public function getEndam()
    {
        return $this->endam;
    }

    /**
     * Set startpm
     *
     * @param \DateTime $startpm
     *
     * @return RoomUse
     */
    public function setStartpm($startpm)
    {
        $this->startpm = $startpm;

        return $this;
    }

    /**
     * Get startpm
     *
     * @return \DateTime
     */
    public function getStartpm()
    {
        return $this->startpm;
    }

    /**
     * Set endpm
     *
     * @param \DateTime $endpm
     *
     * @return RoomUse
     */
    public function setEndpm($endpm)
    {
        $this->endpm = $endpm;

        return $this;
    }

    /**
     * Get endpm
     *
     * @return \DateTime
     */
    public function getEndpm()
    {
        return $this->endpm;
    }

    /**
     * Set createby
     *
     * @param string $createby
     *
     * @return RoomUse
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
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return RoomUse
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
     * Set local
     *
     * @param \Bo\AdminBundle\Entity\Local $local
     *
     * @return RoomUse
     */
    public function setLocal(\Bo\AdminBundle\Entity\Local $local = null)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get local
     *
     * @return \Bo\AdminBundle\Entity\Local
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Set idstudent
     *
     * @param \Bo\AdminBundle\Entity\Students $idstudent
     *
     * @return RoomUse
     */
    public function setIdstudent(\Bo\AdminBundle\Entity\Students $idstudent = null)
    {
        $this->idstudent = $idstudent;

        return $this;
    }

    /**
     * Get idstudent
     *
     * @return \Bo\AdminBundle\Entity\Students
     */
    public function getIdstudent()
    {
        return $this->idstudent;
    }

    /**
     * Set group
     *
     * @param \Bo\AdminBundle\Entity\Group $group
     *
     * @return RoomUse
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
}

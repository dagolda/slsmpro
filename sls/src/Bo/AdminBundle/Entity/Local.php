<?php
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Table(name="adm_local")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\LocalRepository")
*/
class Local 
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string",length=20)
     */    
    private $reference;
	
    /**
     * @ORM\Column(type="string",length=50, nullable=true)
     */    
    private $dimension;
	
    /**
     * @ORM\ManyToOne(targetEntity="Campus")
	 * @ORM\JoinColumn(name="idcampus",referencedColumnName="id")
     */      
    private $campus;	
	   	
    /**
     * @ORM\ManyToMany(targetEntity="Typecontract")
	 * @ORM\JoinColumn(name="idtypecontract",referencedColumnName="id", nullable=true)
     */      
	private $typecontract;
	
    /**
     * @ORM\ManyToOne(targetEntity="Categoryroom")
	 * @ORM\JoinColumn(name="idcategoryroom",referencedColumnName="id", nullable=true)
     */      
    private $categoryroom;	
		
    /**
    * @ORM\ManyToMany(targetEntity="Contracts", mappedBy="local")
    */      
    private $contracts;
		
    /**
    * @ORM\ManyToMany(targetEntity="Group", mappedBy="local")
    */      
    private $group;		
	
    /**
    * @ORM\Column(type="integer", nullable=true)
    */
    private $capability;
	
    /**
    * @ORM\Column(type="integer", nullable=true)
    */
    private $max;
	
    /**
    * @ORM\Column(type="integer",nullable=true)
    */
    private $nbcomputer;
	
    /**
    * @ORM\Column(type="string",length=255)
    */    
    private $designation;
	
    /**
    * @ORM\Column(type="integer",nullable=true)
    */    
    private $available;
	
    /**
    * @ORM\Column(type="string",length=4,nullable=true)
    */    
    private $suite;	
	
    /**
    * @ORM\Column(type="integer")
    */    
	//0=free 1=busy now 2=reserved 3=disable
	private $status=0;	
						
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $createby;
		
    /**
    * @ORM\Column(type="datetime")
    */    
	private $creationdate;
	
    /**
    * @ORM\Column(type="string",length=4000, nullable=true)
    */    
    private $details;
	
	public function __toString(){
		return $this->reference;
	}	
   
    /**
    * Constructor
    */
    public function __construct()
    {
		$this->creationdate=new \DateTime();
		$this->status=0;
		$this->available=1;
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
     * Set reference
     *
     * @param string $reference
     *
     * @return Local
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set dimension
     *
     * @param string $dimension
     *
     * @return Local
     */
    public function setDimension($dimension)
    {
        $this->dimension = $dimension;

        return $this;
    }

    /**
     * Get dimension
     *
     * @return string
     */
    public function getDimension()
    {
        return $this->dimension;
    }

    /**
     * Set designation
     *
     * @param string $designation
     *
     * @return Local
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Local
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
     * Set details
     *
     * @param string $details
     *
     * @return Local
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set campus
     *
     * @param \Bo\AdminBundle\Entity\Campus $campus
     *
     * @return Local
     */
    public function setCampus(\Bo\AdminBundle\Entity\Campus $campus = null)
    {
        $this->campus = $campus;

        return $this;
    }

    /**
     * Get campus
     *
     * @return \Bo\AdminBundle\Entity\Campus
     */
    public function getCampus()
    {
        return $this->campus;
    }

    /**
     * Set max
     *
     * @param integer $max
     *
     * @return Local
     */
    public function setMax($max)
    {
        $this->max = $max;

        return $this;
    }

    /**
     * Get max
     *
     * @return integer
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Set categoryroom
     *
     * @param \Bo\AdminBundle\Entity\Categoryroom $categoryroom
     *
     * @return Local
     */
    public function setCategoryroom(\Bo\AdminBundle\Entity\Categoryroom $categoryroom = null)
    {
        $this->categoryroom = $categoryroom;

        return $this;
    }

    /**
     * Get categoryroom
     *
     * @return \Bo\AdminBundle\Entity\Categoryroom
     */
    public function getCategoryroom()
    {
        return $this->categoryroom;
    }

    /**
     * Set capability
     *
     * @param integer $capability
     *
     * @return Local
     */
    public function setCapability($capability)
    {
        $this->capability = $capability;

        return $this;
    }

    /**
     * Get capability
     *
     * @return integer
     */
    public function getCapability()
    {
        return $this->capability;
    }

    /**
     * Set nbcomputer
     *
     * @param integer $nbcomputer
     *
     * @return Local
     */
    public function setNbcomputer($nbcomputer)
    {
        $this->nbcomputer = $nbcomputer;

        return $this;
    }

    /**
     * Get nbcomputer
     *
     * @return integer
     */
    public function getNbcomputer()
    {
        return $this->nbcomputer;
    }

    /**
     * Set createby
     *
     * @param string $createby
     *
     * @return Local
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
     * Add typecontract
     *
     * @param \Bo\AdminBundle\Entity\Typecontract $typecontract
     *
     * @return Local
     */
    public function addTypecontract(\Bo\AdminBundle\Entity\Typecontract $typecontract)
    {
        $this->typecontract[] = $typecontract;

        return $this;
    }

    /**
     * Remove typecontract
     *
     * @param \Bo\AdminBundle\Entity\Typecontract $typecontract
     */
    public function removeTypecontract(\Bo\AdminBundle\Entity\Typecontract $typecontract)
    {
        $this->typecontract->removeElement($typecontract);
    }

    /**
     * Get typecontract
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTypecontract()
    {
        return $this->typecontract;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Local
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
     * Add group
     *
     * @param \Bo\AdminBundle\Entity\group $group
     *
     * @return Local
     */
    public function addGroup(\Bo\AdminBundle\Entity\group $group)
    {
        $this->group[] = $group;

        return $this;
    }

    /**
     * Remove group
     *
     * @param \Bo\AdminBundle\Entity\group $group
     */
    public function removeGroup(\Bo\AdminBundle\Entity\group $group)
    {
        $this->group->removeElement($group);
    }

    /**
     * Get group
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Add contract
     *
     * @param \Bo\AdminBundle\Entity\Contracts $contract
     *
     * @return Local
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
     * Set suite
     *
     * @param string $suite
     *
     * @return Local
     */
    public function setSuite($suite)
    {
        $this->suite = $suite;

        return $this;
    }

    /**
     * Get suite
     *
     * @return string
     */
    public function getSuite()
    {
        return $this->suite;
    }

    /**
     * Set available
     *
     * @param integer $available
     *
     * @return Local
     */
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }

    /**
     * Get available
     *
     * @return integer
     */
    public function getAvailable()
    {
        return $this->available;
    }
}

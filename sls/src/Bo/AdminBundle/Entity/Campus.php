<?php
/*
* Date Création: 20/02/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Campus.php
* Description: Liste des Campus
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="adm_campus")
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\CampusRepository")
 */
class Campus 
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string",length=40)
     */    
    private $reference;
		
    /**
     * @ORM\Column(type="string",length=255)
     */    
    private $designation;
			
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $address;	
	
    /**
    * @ORM\Column(type="string",length=255)
    */    
    private $city;	
		
    /**
    * @ORM\Column(type="string",length=255)
    */    
    private $province;	
					
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
		return $this->reference;
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
     * @return Campus
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
     * Set designation
     *
     * @param string $designation
     *
     * @return Campus
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
     * Set address
     *
     * @param string $address
     *
     * @return Campus
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Campus
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Campus
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
     * Set province
     *
     * @param string $province
     *
     * @return Campus
     */
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Get province
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Set createby
     *
     * @param string $createby
     *
     * @return Campus
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

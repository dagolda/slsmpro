<?php
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Table(name="adm_entreprise")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\EntrepriseRepository")
*/
class Entreprise
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
    * @ORM\Column(type="string",length=255)
    * @Assert\NotBlank()
    */    
    private $name;
	   
    /**
    * @ORM\Column(type="string",length=255)
    * @Assert\NotBlank()
    */    
    private $master;
	   
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     * @Assert\NotBlank()
     */    
    private $type;
	   
    /**
    * @ORM\Column(type="string",length=255)
    */    
    private $address1;
	   
    /**
    * @ORM\Column(type="string",length=255)
    */    
    private $address2;
	
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $phone1;
		
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $phone2;
	
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */    
    private $mobile;

    /**
     * @ORM\Column(type="datetime")
     */    
	protected $dateCreation;
	
    /**
     * Constructor
     */
    public function __construct()
    {
		$this->dateCreation=new \DateTime();
    }

	public function __toString(){
		return $this->nom;
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
     * @return Entreprise
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
     * Set master
     *
     * @param string $master
     *
     * @return Entreprise
     */
    public function setMaster($master)
    {
        $this->master = $master;

        return $this;
    }

    /**
     * Get master
     *
     * @return string
     */
    public function getMaster()
    {
        return $this->master;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Entreprise
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set address1
     *
     * @param string $address1
     *
     * @return Entreprise
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * Get address1
     *
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set address2
     *
     * @param string $address2
     *
     * @return Entreprise
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get address2
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set phone1
     *
     * @param string $phone1
     *
     * @return Entreprise
     */
    public function setPhone1($phone1)
    {
        $this->phone1 = $phone1;

        return $this;
    }

    /**
     * Get phone1
     *
     * @return string
     */
    public function getPhone1()
    {
        return $this->phone1;
    }

    /**
     * Set phone2
     *
     * @param string $phone2
     *
     * @return Entreprise
     */
    public function setPhone2($phone2)
    {
        $this->phone2 = $phone2;

        return $this;
    }

    /**
     * Get phone2
     *
     * @return string
     */
    public function getPhone2()
    {
        return $this->phone2;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     *
     * @return Entreprise
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Entreprise
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
}

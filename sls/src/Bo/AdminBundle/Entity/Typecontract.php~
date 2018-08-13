<?php
/*
* Date Création: 20/02/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : TypeContract.php
* Description: Liste des TypeContracts
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="adm_typecontract")
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\TypecontractRepository")
 */
class Typecontract 
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
	
    /**
     * @ORM\Column(type="string",length=10)
     */    
    private $reference;
    
    /**
     * @ORM\Column(type="string",length=255)
     */    
    private $designation;
	  
    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */
	//Assistant Pedagogical Director
    private $apd;
	
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
     * Set designation
     *
     * @param string $designation
     *
     * @return TypeContract
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
     * @return TypeContract
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
     * Set reference
     *
     * @param string $reference
     *
     * @return TypeContract
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
     * Set details
     *
     * @param string $details
     *
     * @return Typecontract
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
     * Set apd
     *
     * @param string $apd
     *
     * @return Typecontract
     */
    public function setApd($apd)
    {
        $this->apd = $apd;

        return $this;
    }

    /**
     * Get apd
     *
     * @return string
     */
    public function getApd()
    {
        return $this->apd;
    }
}

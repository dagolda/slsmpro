<?php
/*
* Date Création: 11/04/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Holidayslist.php
* Description: Liste des Holidayslist
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="adm_holidayslist")
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\HolidayslistRepository")
 */
class Holidayslist 
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
    private $designation;
			
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $country;	
		
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $province;	
		
    /**
    * @ORM\Column(type="date")
    */    
	private $ddate;
		
    /**
    * @ORM\Column(type="datetime")
    */    
	private $creationdate;
	
    /**
    * Constructor
    */
    public function __construct()
    {
		$this->creationdate=$this->ddate=new \DateTime();
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
    * @param string $designation
    *
    * @return Holidayslist
    */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
    * Get designation
    * @return string
    */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
    * Set country
    *
    * @param string $country
    *
    * @return Holidayslist
    */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
    * Get country
    * @return string
    */
    public function getCountry()
    {
        return $this->country;
    }

    /**
    * Set province
    * @param string $province
    *
    * @return Holidayslist
    */
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
    * Get province
    * @return string
    */
    public function getProvince()
    {
        return $this->province;
    }

    /**
    * Set ddate
    * @param \DateTime $ddate
    * @return Holidayslist
    */
    public function setDdate($ddate)
    {
        $this->ddate = $ddate;

        return $this;
    }

    /**
    * Get ddate
    * @return \DateTime
    */
    public function getDdate()
    {
        return $this->ddate;
    }

    /**
    * Set creationdate
    * @param \DateTime $creationdate
    * @return Holidayslist
    */
    public function setCreationdate($creationdate)
    {
        $this->creationdate = $creationdate;

        return $this;
    }

    /**
    * Get creationdate
    * @return \DateTime
    */
    public function getCreationdate()
    {
        return $this->creationdate;
    }
}

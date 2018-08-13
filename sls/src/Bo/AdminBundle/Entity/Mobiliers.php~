<?php
/*
* Date Création: 20/02/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Mobiliers.php
* Description: Entité des Mobiliers
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="adm_mobiliers")
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\MobiliersRepository")
 */
class Mobiliers 
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
     * @ORM\ManyToOne(targetEntity="Local")
	 * @ORM\JoinColumn(name="idlocal",referencedColumnName="id")
     */      
    private $local;
			
    /**
    * @ORM\OneToOne(targetEntity="EtatMobiliers")
	* @ORM\JoinColumn(name="idetatmobiliers",referencedColumnName="id", nullable=true)
    */    
    private $etatmobiliers;	
	
	
    /**
     * @ORM\Column(type="string",length=4000, nullable=true)
     */    
    private $details;
		
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
     * Set reference
     *
     * @param string $reference
     *
     * @return Mobiliers
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
     * @return Mobiliers
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
     * Set details
     *
     * @param string $details
     *
     * @return Mobiliers
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
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Mobiliers
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
     * @return Mobiliers
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
     * Set etatmobiliers
     *
     * @param \Bo\AdminBundle\Entity\EtatMobiliers $etatmobiliers
     *
     * @return Mobiliers
     */
    public function setEtatmobiliers(\Bo\AdminBundle\Entity\EtatMobiliers $etatmobiliers = null)
    {
        $this->etatmobiliers = $etatmobiliers;

        return $this;
    }

    /**
     * Get etatmobiliers
     *
     * @return \Bo\AdminBundle\Entity\EtatMobiliers
     */
    public function getEtatmobiliers()
    {
        return $this->etatmobiliers;
    }
}

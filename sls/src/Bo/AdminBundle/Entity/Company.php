<?php
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Table(name="adm_company")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\CompanyRepository")
*/
class Company
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
    private $compte;
	
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $contracttype;
    
    /**
    * @ORM\Column(type="string",length=255)
    */    
    private $nname;
	   
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */  
    private $type;
	
    /**
     * @ORM\Column(type="text",length=2500,nullable=true)
     */    
    private $messageen;
		
    /**
     * @ORM\Column(type="text",length=2500,nullable=true)
     */    
    private $messagefr;
	
    /**
     * @ORM\Column(type="string",length=1500,nullable=true)
     */    
    private $openhour;

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
     * Set nname
     *
     * @param string $nname
     *
     * @return Company
     */
    public function setNname($nname)
    {
        $this->nname = $nname;

        return $this;
    }

    /**
     * Get nname
     *
     * @return string
     */
    public function getNname()
    {
        return $this->nname;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Company
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
     * Set openhour
     *
     * @param string $openhour
     *
     * @return Company
     */
    public function setOpenhour($openhour)
    {
        $this->openhour = $openhour;

        return $this;
    }

    /**
     * Get openhour
     *
     * @return string
     */
    public function getOpenhour()
    {
        return $this->openhour;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Company
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

    /**
     * Set messageen
     *
     * @param string $messageen
     *
     * @return Company
     */
    public function setMessageen($messageen)
    {
        $this->messageen = $messageen;

        return $this;
    }

    /**
     * Get messageen
     *
     * @return string
     */
    public function getMessageen()
    {
        return $this->messageen;
    }

    /**
     * Set messagefr
     *
     * @param string $messagefr
     *
     * @return Company
     */
    public function setMessagefr($messagefr)
    {
        $this->messagefr = $messagefr;

        return $this;
    }

    /**
     * Get messagefr
     *
     * @return string
     */
    public function getMessagefr()
    {
        return $this->messagefr;
    }

    /**
     * Set compte
     *
     * @param string $compte
     *
     * @return Company
     */
    public function setCompte($compte)
    {
        $this->compte = $compte;

        return $this;
    }

    /**
     * Get compte
     *
     * @return string
     */
    public function getCompte()
    {
        return $this->compte;
    }

    /**
     * Set contracttype
     *
     * @param string $contracttype
     *
     * @return Company
     */
    public function setContracttype($contracttype)
    {
        $this->contracttype = $contracttype;

        return $this;
    }

    /**
     * Get contracttype
     *
     * @return string
     */
    public function getContracttype()
    {
        return $this->contracttype;
    }
}

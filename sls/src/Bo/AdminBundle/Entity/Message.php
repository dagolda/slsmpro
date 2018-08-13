<?php
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="adm_message")
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\MessageRepository")
 */
class Message
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
    private $designation;
	
    /**
     * @ORM\Column(type="string",length=4000,nullable=true)
     */    
    private $descfr;
	
    /**
     * @ORM\Column(type="string",length=4000,nullable=true)
     */    
    private $descen;

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
     * @return Message
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
     * Set descfr
     *
     * @param string $descfr
     *
     * @return Message
     */
    public function setDescfr($descfr)
    {
        $this->descfr = $descfr;

        return $this;
    }

    /**
     * Get descfr
     *
     * @return string
     */
    public function getDescfr()
    {
        return $this->descfr;
    }

    /**
     * Set descen
     *
     * @param string $descen
     *
     * @return Message
     */
    public function setDescen($descen)
    {
        $this->descen = $descen;

        return $this;
    }

    /**
     * Get descen
     *
     * @return string
     */
    public function getDescen()
    {
        return $this->descen;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Message
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

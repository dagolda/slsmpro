<?php
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Table(name="adm_mails")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\MailsRepository")
*/
class Mails
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
    private $name;
	
    /**
     * @ORM\Column(type="text",length=2500,nullable=true)
     */    
    private $messageen;
		
    /**
     * @ORM\Column(type="text",length=2500,nullable=true)
     */    
    private $messagefr;

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
     * Set name
     *
     * @param string $name
     *
     * @return Mails
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
     * Set messageen
     *
     * @param string $messageen
     *
     * @return Mails
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
     * @return Mails
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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Mails
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

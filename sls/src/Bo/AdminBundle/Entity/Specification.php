<?php
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Table(name="adm_specification")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\SpecificationRepository")
*/
class Specification
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
    private $module;
	
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $objet;
		
    /**
     * @ORM\Column(type="text",length=2500,nullable=true)
     */    
    private $description;
	
    /**
     * @ORM\Column(type="string",length=1500,nullable=true)
     */    
    private $author;

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
     * Set module
     *
     * @param string $module
     *
     * @return Specification
     */
    public function setModule($module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return string
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set objet
     *
     * @param string $objet
     *
     * @return Specification
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Specification
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Specification
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Specification
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

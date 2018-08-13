<?php
/*
* Date Création: 07/01/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : categoryevents.php
* Description: Events category (Catégorie des événements)
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="adm_categoryevents")
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\CategoryEventsRepository")
 */
class CategoryEvents
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $name;
	
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $color;
	
    /**
     * @ORM\Column(type="datetime")
     */ 
    protected $creationdate;

    /**
     * Constructor
     */
    public function __construct()
    {
		$this->creationdate=new \DateTime();
    }

	public function __toString(){
		return $this->name;
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
     * @return CategoryEvents
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
     * Set color
     *
     * @param string $color
     *
     * @return CategoryEvents
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return CategoryEvents
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
}

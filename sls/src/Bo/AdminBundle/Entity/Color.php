<?php
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\ColorRepository")
*/
class Color
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
     * @return Rubrique
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
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Color
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

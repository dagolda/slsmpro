<?php
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\RubricRepository")
*/
class Rubric
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
    private $namefr;
	
    /**
     * @ORM\Column(type="string",length=255)
     */    
    private $nameen;
	
	public function __toString(){
		return $this->nameen;
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
     * Set namefr
     *
     * @param string $namefr
     *
     * @return Rubrique
     */
    public function setNamefr($namefr)
    {
        $this->namefr = $namefr;

        return $this;
    }

    /**
     * Get namefr
     *
     * @return string
     */
    public function getNamefr()
    {
        return $this->namefr;
    }

    /**
     * Set nameen
     *
     * @param string $nameen
     *
     * @return Rubrique
     */
    public function setNameen($nameen)
    {
        $this->nameen = $nameen;

        return $this;
    }

    /**
     * Get nameen
     *
     * @return string
     */
    public function getNameen()
    {
        return $this->nameen;
    }
}

<?php
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\SubRubricRepository")
*/
class SubRubric 
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
	
    /**
    * @ORM\Column(type="integer")
    */     
    private $idrubric;
	
	public function __toString(){
		return $this->nameen;
	}	
	
    /**
     * @ORM\Column(type="integer")
     */	 
    private $ordre;


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
     * Set namefr
     *
     * @param string $namefr
     *
     * @return SubRubric
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
     * @return SubRubric
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

    /**
     * Set idrubric
     *
     * @param integer $idrubric
     *
     * @return SubRubric
     */
    public function setIdrubric($idrubric)
    {
        $this->idrubric = $idrubric;

        return $this;
    }

    /**
     * Get idrubric
     *
     * @return integer
     */
    public function getIdrubric()
    {
        return $this->idrubric;
    }

    /**
     * Set ordre
     *
     * @param integer $ordre
     *
     * @return SubRubric
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;

        return $this;
    }

    /**
     * Get ordre
     *
     * @return integer
     */
    public function getOrdre()
    {
        return $this->ordre;
    }
}

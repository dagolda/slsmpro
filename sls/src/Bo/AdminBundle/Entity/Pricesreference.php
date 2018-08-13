<?php
/*
* Date Création: 08/02/2017
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Pricesreference.php
* Description: Réference of offer price
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Table(name="adm_pricesreferences")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\PricesreferenceRepository")
*/
class Pricesreference
{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;
	
    /**
    * @ORM\ManyToOne(targetEntity="Typecontract")
	* @ORM\JoinColumn(name="idtypecontract",referencedColumnName="id")
    */   
    private $typecontract;

    /**
    * @ORM\Column(type="string", length=255, nullable=true)
    */
    protected $offernumber;
					
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $ftorpt;
	
    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */    
    private $privateorgroup;
			
    /**
    * @ORM\Column(type="string",length=255)
    */    
    private $language;	
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $description;
		
    /**
     * @ORM\ManyToOne(targetEntity="Workfields")
	 * @ORM\JoinColumn(name="idworkfields",referencedColumnName="id",nullable=true)
     */   
    private $field;
			
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $location;
	
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
		return $this->field;
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
     * Set offernumber
     *
     * @param string $offernumber
     *
     * @return Pricesreference
     */
    public function setOffernumber($offernumber)
    {
        $this->offernumber = $offernumber;

        return $this;
    }

    /**
     * Get offernumber
     *
     * @return string
     */
    public function getOffernumber()
    {
        return $this->offernumber;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Pricesreference
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
     * Set location
     *
     * @param string $location
     *
     * @return Pricesreference
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Pricesreference
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
     * Set field
     *
     * @param \Bo\AdminBundle\Entity\Workfields $field
     *
     * @return Pricesreference
     */
    public function setField(\Bo\AdminBundle\Entity\Workfields $field = null)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * Get field
     *
     * @return \Bo\AdminBundle\Entity\Workfields
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Set typecontract
     *
     * @param \Bo\AdminBundle\Entity\Typecontract $typecontract
     *
     * @return Pricesreference
     */
    public function setTypecontract(\Bo\AdminBundle\Entity\Typecontract $typecontract = null)
    {
        $this->typecontract = $typecontract;

        return $this;
    }

    /**
     * Get typecontract
     *
     * @return \Bo\AdminBundle\Entity\Typecontract
     */
    public function getTypecontract()
    {
        return $this->typecontract;
    }

    /**
     * Set ftorpt
     *
     * @param string $ftorpt
     *
     * @return Pricesreference
     */
    public function setFtorpt($ftorpt)
    {
        $this->ftorpt = $ftorpt;

        return $this;
    }

    /**
     * Get ftorpt
     *
     * @return string
     */
    public function getFtorpt()
    {
        return $this->ftorpt;
    }

    /**
     * Set privateorgroup
     *
     * @param string $privateorgroup
     *
     * @return Pricesreference
     */
    public function setPrivateorgroup($privateorgroup)
    {
        $this->privateorgroup = $privateorgroup;

        return $this;
    }

    /**
     * Get privateorgroup
     *
     * @return string
     */
    public function getPrivateorgroup()
    {
        return $this->privateorgroup;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return Pricesreference
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }
}

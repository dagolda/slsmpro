<?php
/*
* Date Création: 08/02/2017
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Otherprices.php
* Description: Otherprices for the offers
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="adm_otherprices")
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\OtherpricesRepository")
 */
class Otherprices
{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;
	
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $contracttype;
	
    /**
    * @ORM\Column(type="decimal", scale=2)
    */
    protected $priceonsite;
		
    /**
    * @ORM\Column(type="decimal", scale=2)
    */
    protected $priceoffsite;
	
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */    
    private $language;
	
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */    
    private $ftorpt;
	
    /**
    * @ORM\Column(type="integer")
    */    
    private $feature;
	
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
     * Set priceonsite
     *
     * @param string $priceonsite
     *
     * @return Otherprices
     */
    public function setPriceonsite($priceonsite)
    {
        $this->priceonsite = $priceonsite;

        return $this;
    }

    /**
     * Get priceonsite
     *
     * @return string
     */
    public function getPriceonsite()
    {
        return $this->priceonsite;
    }

    /**
     * Set priceoffsite
     *
     * @param string $priceoffsite
     *
     * @return Otherprices
     */
    public function setPriceoffsite($priceoffsite)
    {
        $this->priceoffsite = $priceoffsite;

        return $this;
    }

    /**
     * Get priceoffsite
     *
     * @return string
     */
    public function getPriceoffsite()
    {
        return $this->priceoffsite;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return Otherprices
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

    /**
     * Set ftorpt
     *
     * @param string $ftorpt
     *
     * @return Otherprices
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
     * Set feature
     *
     * @param string $feature
     *
     * @return Otherprices
     */
    public function setFeature($feature)
    {
        $this->feature = $feature;

        return $this;
    }

    /**
     * Get feature
     *
     * @return string
     */
    public function getFeature()
    {
        return $this->feature;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Otherprices
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
     * Set contracttype
     *
     * @param string $contracttype
     *
     * @return Otherprices
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

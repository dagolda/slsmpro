<?php
/*
* Date Création: 11/03/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Tmonth.php
* Description: Month table
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="adm_tday")
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\TdayRepository")
 */
class Tday
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
		
    /**
    * @ORM\Column(type="integer")
    */    
	private $iday;	
		
    /**
    * @ORM\Column(type="string",length=255)
    */    
	private $sdayen;
			
    /**
    * @ORM\Column(type="string",length=255)
    */    
	private $sdayfr;

	public function __toString(){
		return $this->sdayen;
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
     * Set iday
     *
     * @param integer $iday
     *
     * @return Tday
     */
    public function setIday($iday)
    {
        $this->iday = $iday;

        return $this;
    }

    /**
     * Get iday
     *
     * @return integer
     */
    public function getIday()
    {
        return $this->iday;
    }

    /**
     * Set sdayen
     *
     * @param string $sdayen
     *
     * @return Tday
     */
    public function setSdayen($sdayen)
    {
        $this->sdayen = $sdayen;

        return $this;
    }

    /**
     * Get sdayen
     *
     * @return string
     */
    public function getSdayen()
    {
        return $this->sdayen;
    }

    /**
     * Set sdayfr
     *
     * @param string $sdayfr
     *
     * @return Tday
     */
    public function setSdayfr($sdayfr)
    {
        $this->sdayfr = $sdayfr;

        return $this;
    }

    /**
     * Get sdayfr
     *
     * @return string
     */
    public function getSdayfr()
    {
        return $this->sdayfr;
    }
}

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
 * @ORM\Table(name="adm_tmonth")
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\TmonthRepository")
 */
class Tmonth 
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
	private $imonth;	
		
    /**
    * @ORM\Column(type="string",length=255)
    */    
	private $smonthen;
			
    /**
    * @ORM\Column(type="string",length=255)
    */    
	private $smonthfr;

	public function __toString(){
		return $this->smonthen;
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
     * Set imonth
     *
     * @param integer $imonth
     *
     * @return Tmonth
     */
    public function setImonth($imonth)
    {
        $this->imonth = $imonth;

        return $this;
    }

    /**
     * Get imonth
     *
     * @return integer
     */
    public function getImonth()
    {
        return $this->imonth;
    }

    /**
     * Set smonthen
     *
     * @param string $smonthen
     *
     * @return Tmonth
     */
    public function setSmonthen($smonthen)
    {
        $this->smonthen = $smonthen;

        return $this;
    }

    /**
     * Get smonthen
     *
     * @return string
     */
    public function getSmonthen()
    {
        return $this->smonthen;
    }
	
    /**
     * Set smonthfr
     *
     * @param string $smonthfr
     *
     * @return Tmonth
     */
    public function setSmonthfr($smonthfr)
    {
        $this->smonthfr = $smonthfr;

        return $this;
    }

    /**
     * Get smonthfr
     *
     * @return string
     */
    public function getSmonthfr()
    {
        return $this->smonthfr;
    }
}

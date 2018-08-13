<?php
/*
* Date Création: 11/03/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Tyear.php
* Description: Year table
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="adm_tyear")
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\TyearRepository")
 */
class Tyear 
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
	private $yearln;	
		
    /**
    * @ORM\Column(type="string",length=255)
    */     
	private $yearct;

	public function __toString(){
		return $this->yearln;
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
     * Set year
     *
     * @param integer $year
     *
     * @return Tyear
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set yearln
     *
     * @param integer $yearln
     *
     * @return Tyear
     */
    public function setYearln($yearln)
    {
        $this->yearln = $yearln;

        return $this;
    }

    /**
     * Get yearln
     *
     * @return integer
     */
    public function getYearln()
    {
        return $this->yearln;
    }

    /**
     * Set yearct
     *
     * @param integer $yearct
     *
     * @return Tyear
     */
    public function setYearct($yearct)
    {
        $this->yearct = $yearct;

        return $this;
    }

    /**
     * Get yearct
     *
     * @return integer
     */
    public function getYearct()
    {
        return $this->yearct;
    }
}

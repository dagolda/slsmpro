<?php
/*
* Date Création: 11/03/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Tweek.php
* Description: Week table
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="adm_tweek")
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\TweekRepository")
 */
class Tweek 
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
	private $year;
		
    /**
    * @ORM\Column(type="integer")
    */    
	private $week;

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
     * Set week
     *
     * @param integer $week
     *
     * @return Tweek
     */
    public function setWeek($week)
    {
        $this->week = $week;

        return $this;
    }

    /**
     * Get week
     *
     * @return integer
     */
    public function getWeek()
    {
        return $this->week;
    }

    /**
     * Set year
     *
     * @param integer $year
     *
     * @return Tweek
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
}

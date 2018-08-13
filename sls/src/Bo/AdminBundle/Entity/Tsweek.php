<?php
/*
* Date Création: 17/03/2016 à 17h20 heure Canadienne
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Tsweek.php
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="adm_tsweek")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\TsweekRepository")
*/
class Tsweek 
{
    /**
    * @ORM\GeneratedValue
    * @ORM\Id
    * @ORM\Column(type="integer")
    */
    private $id;
	
    /**
    * @ORM\ManyToOne(targetEntity="Bo\AdminBundle\Entity\Tyear")
	* @ORM\JoinColumn(name="idtyear",referencedColumnName="id")
    */  
    private $tyear;
	
    /**
    * @ORM\ManyToOne(targetEntity="Bo\AdminBundle\Entity\Tmonth")
	* @ORM\JoinColumn(name="idtmonth",referencedColumnName="id")
    */   
    private $tmonth;
		
    /**
    * @ORM\Column(type="date")
    */    
	private $firstdate;	
	
    /**
    * @ORM\Column(type="date")
    */    
	private $lastdate;	
	
    /**
    * @ORM\Column(type="integer")
    */      
    private $numberweek;	
	
    /**
    * @ORM\Column(type="datetime")
    */    
	private $creationdate;	
	
    /**
    * Constructor
    */
    public function __construct()
    {
		$this->creationdate=$this->ddate=new \DateTime();
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
     * Set firstdate
     *
     * @param \DateTime $firstdate
     *
     * @return Tsweek
     */
    public function setFirstdate($firstdate)
    {
        $this->firstdate = $firstdate;

        return $this;
    }

    /**
     * Get firstdate
     *
     * @return \DateTime
     */
    public function getFirstdate()
    {
        return $this->firstdate;
    }

    /**
     * Set lastdate
     *
     * @param \DateTime $lastdate
     *
     * @return Tsweek
     */
    public function setLastdate($lastdate)
    {
        $this->lastdate = $lastdate;

        return $this;
    }

    /**
     * Get lastdate
     *
     * @return \DateTime
     */
    public function getLastdate()
    {
        return $this->lastdate;
    }

    /**
     * Set numberweek
     *
     * @param integer $numberweek
     *
     * @return Tsweek
     */
    public function setNumberweek($numberweek)
    {
        $this->numberweek = $numberweek;

        return $this;
    }

    /**
     * Get numberweek
     *
     * @return integer
     */
    public function getNumberweek()
    {
        return $this->numberweek;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Tsweek
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Tsweek
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
     * Set tyear
     *
     * @param \Bo\AdminBundle\Entity\tyear $tyear
     *
     * @return Tsweek
     */
    public function setTyear(\Bo\AdminBundle\Entity\tyear $tyear = null)
    {
        $this->tyear = $tyear;

        return $this;
    }

    /**
     * Get tyear
     *
     * @return \Bo\AdminBundle\Entity\tyear
     */
    public function getTyear()
    {
        return $this->tyear;
    }

    /**
     * Set tmonth
     *
     * @param \Bo\AdminBundle\Entity\tmonth $tmonth
     *
     * @return Tsweek
     */
    public function setTmonth(\Bo\AdminBundle\Entity\tmonth $tmonth = null)
    {
        $this->tmonth = $tmonth;

        return $this;
    }

    /**
     * Get tmonth
     *
     * @return \Bo\AdminBundle\Entity\tmonth
     */
    public function getTmonth()
    {
        return $this->tmonth;
    }
}

<?php
/*
* Date Création: 27/06/2018
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Robot.php
* Description: Liste des Absencess
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="adm_robot")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\RobotRepository")
*/

class Robot 
{
    /**
    * @ORM\GeneratedValue
    * @ORM\Id
    * @ORM\Column(type="integer")
    */
    private $id;
	
    /**
    * @ORM\Column(type="date")
    */    
    private $ddate;
	
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $nbcontract;
	
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $nbgroup;

    /**
    * @ORM\Column(type="string",length=255)
    */    
    private $start;

    /**
    * @ORM\Column(type="string",length=255)
    */    
    private $end;

    /**
    * @ORM\Column(type="string",length=255)
    */    
    private $source;

    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $note;

    /**
    * Constructor
    */
    public function __construct()
    {
		$this->ddate = new \DateTime();
		$this->nbcontract = 0;
		$this->nbgroup = 0;
		$this->source = $_SERVER['REMOTE_ADDR'];
		$this->ddate=$this->start=$this->end=new \DateTime();
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
     * Set ddate
     *
     * @param \DateTime $ddate
     *
     * @return Robot
     */
    public function setDdate($ddate)
    {
        $this->ddate = $ddate;

        return $this;
    }

    /**
     * Get ddate
     *
     * @return \DateTime
     */
    public function getDdate()
    {
        return $this->ddate;
    }

    /**
     * Set nbcontract
     *
     * @param string $nbcontract
     *
     * @return Robot
     */
    public function setNbcontract($nbcontract)
    {
        $this->nbcontract = $nbcontract;

        return $this;
    }

    /**
     * Get nbcontract
     *
     * @return string
     */
    public function getNbcontract()
    {
        return $this->nbcontract;
    }

    /**
     * Set nbgroup
     *
     * @param string $nbgroup
     *
     * @return Robot
     */
    public function setNbgroup($nbgroup)
    {
        $this->nbgroup = $nbgroup;

        return $this;
    }

    /**
     * Get nbgroup
     *
     * @return string
     */
    public function getNbgroup()
    {
        return $this->nbgroup;
    }

    /**
     * Set start
     *
     * @param string $start
     *
     * @return Robot
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return string
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param string $end
     *
     * @return Robot
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return string
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set source
     *
     * @param string $source
     *
     * @return Robot
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return Robot
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }
}

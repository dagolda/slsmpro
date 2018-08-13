<?php
/*
* Date Création: 03/03/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Workfields.php
* Description: Workfields (Champ de travail)
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="adm_workfields")
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\WorkfieldsRepository")
 */
class Workfields
{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;

    /**
    * @ORM\Column(type="string", length=255)
    */
    protected $wfname;

    /**
    * @ORM\Column(type="decimal", scale=2)
    */
    protected $chargescale;
	
    /**
    * @ORM\Column(type="string",length=4000, nullable=true)
    */    
    private $details;
	
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
		return $this->wfname;
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
     * Set levelname
     *
     * @param string $levelname
     *
     * @return Level
     */
    public function setLevelname($levelname)
    {
        $this->levelname = $levelname;

        return $this;
    }

    /**
     * Get levelname
     *
     * @return string
     */
    public function getLevelname()
    {
        return $this->levelname;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Level
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
     * Set wfname
     *
     * @param string $wfname
     *
     * @return Workfields
     */
    public function setWfname($wfname)
    {
        $this->wfname = $wfname;

        return $this;
    }

    /**
     * Get wfname
     *
     * @return string
     */
    public function getWfname()
    {
        return $this->wfname;
    }

    /**
     * Set details
     *
     * @param string $details
     *
     * @return Workfields
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set chargescale
     *
     * @param string $chargescale
     *
     * @return Workfields
     */
    public function setChargescale($chargescale)
    {
        $this->chargescale = $chargescale;

        return $this;
    }

    /**
     * Get chargescale
     *
     * @return string
     */
    public function getChargescale()
    {
        return $this->chargescale;
    }
}

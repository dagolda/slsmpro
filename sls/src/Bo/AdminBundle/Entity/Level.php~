<?php
/*
* Date Création: 20/02/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Level.php
* Description: Niveau d'étude de l'employé
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="adm_level")
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\LevelRepository")
 */
class Level
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
    protected $levelname;
	
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
		return $this->levelname;
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
}

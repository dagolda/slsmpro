<?php
/*
* Date Création: 25/02/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Status.php
* Description: Status de l'employé
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="adm_statusl")
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\StatusRepository")
 */
class Status
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
    protected $statusname;
	
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
		return $this->statusname;
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
     * Set statusname
     *
     * @param string $statusname
     *
     * @return Status
     */
    public function setStatusname($statusname)
    {
        $this->statusname = $statusname;

        return $this;
    }

    /**
     * Get statusname
     *
     * @return string
     */
    public function getStatusname()
    {
        return $this->statusname;
    }
}

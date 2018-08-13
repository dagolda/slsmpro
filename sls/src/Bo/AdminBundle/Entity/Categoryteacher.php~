<?php
/*
* Date Création: 02/01/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Categoryteacher.php
* Description: Employee Category (categorie de l'employé : Titulaire, Développement, etc.)
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="adm_categoryteacher")
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\CategoryteacherRepository")
 */
class Categoryteacher
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
    protected $catname;
	
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
		return $this->catname;
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
     * Set catname
     *
     * @param string $catname
     *
     * @return Categoryteacher
     */
    public function setCatname($catname)
    {
        $this->catname = $catname;

        return $this;
    }

    /**
     * Get catname
     *
     * @return string
     */
    public function getCatname()
    {
        return $this->catname;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Categoryteacher
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

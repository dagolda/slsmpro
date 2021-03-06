<?php
/*
* Date Création: 20/02/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Notification.php
* Description: Liste des activités
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="adm_notification")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\NotificationRepository")
*/
class Notification 
{
    /**
    * @ORM\GeneratedValue
    * @ORM\Id
    * @ORM\Column(type="integer")
    */
    private $id;
					
    /**
    * @ORM\ManyToOne(targetEntity="Employee")
	* @ORM\JoinColumn(name="idemployee",referencedColumnName="id",nullable=true)
    */      
    private $employee;
						
    /**
    * @ORM\ManyToOne(targetEntity="Students")
	* @ORM\JoinColumn(name="idstudents",referencedColumnName="id",nullable=true)
    */      
    private $students;
					
    /**
    * @ORM\Column(type="integer",nullable=true)
    */      
    private $idprofile;		
    
    /**
    * @ORM\Column(type="string",length=2000)
    */    
    private $texte;

    /**
    * @ORM\Column(type="boolean")
    */    
	//0=not seen;1=seen;
	private $status;	
		
    /**
    * @ORM\Column(type="datetime")
    */    
	private $creationdate;
	
    /**
    * Constructor
    */
    public function __construct()
    {
		$this->creationdate=new \DateTime();
		$this->status=0;
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
     * Set iduser
     *
     * @param integer $iduser
     *
     * @return Notification
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return integer
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set idprofile
     *
     * @param integer $idprofile
     *
     * @return Notification
     */
    public function setIdprofile($idprofile)
    {
        $this->idprofile = $idprofile;

        return $this;
    }

    /**
     * Get idprofile
     *
     * @return integer
     */
    public function getIdprofile()
    {
        return $this->idprofile;
    }

    /**
     * Set texte
     *
     * @param string $texte
     *
     * @return Notification
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Notification
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

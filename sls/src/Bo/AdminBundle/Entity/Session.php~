<?php
/*
* Date Création: 20/02/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Session.php
* Description: Liste des sessions d'un utilisateur
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="adm_session")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\SessionRepository")
*/
class Session 
{
    /**
    * @ORM\GeneratedValue
    * @ORM\Id
    * @ORM\Column(type="integer")
    */
    private $id;
					
    /**
    * @ORM\ManyToOne(targetEntity="Bo\UserBundle\Entity\User")
	* @ORM\JoinColumn(name="iduser",referencedColumnName="id", nullable=true)
    */      
	private $user;
	   
    /**
    * @ORM\Column(type="string",length=255)
    */    
    private $ip;
		   
    /**
    * @ORM\Column(type="string",length=255)
    */    
    private $sessionid;
		
    /**
    * @ORM\Column(type="datetime")
    */    
	private $creationdate;
	
    /**
    * Constructor
    */
    public function __construct()
    {
		$this->sessionid = session_id();
		$this->ip = $_SERVER['REMOTE_ADDR'];
		$this->creationdate=new \DateTime();
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
     * Set ip
     *
     * @param string $ip
     *
     * @return Session
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set sessionid
     *
     * @param string $sessionid
     *
     * @return Session
     */
    public function setSessionid($sessionid)
    {
        $this->sessionid = $sessionid;

        return $this;
    }

    /**
     * Get sessionid
     *
     * @return string
     */
    public function getSessionid()
    {
        return $this->sessionid;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Session
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
     * Set user
     *
     * @param \Bo\UserBundle\Entity\User $user
     *
     * @return Session
     */
    public function setUser(\Bo\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Bo\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}

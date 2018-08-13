<?php
/*
* Date Création: 20/02/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Activities.php
* Description: Liste des activités
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="adm_activities")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\ActivitiesRepository")
*/
class Activities 
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
    * @ORM\Column(type="string",length=255)
    */    
    private $rubric;
		
    /**
    * @ORM\Column(type="string",length=255)
    */    
    private $subrubric;
		
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
     * @return Activities
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
     * @return Activities
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
     * Set rubric
     *
     * @param string $rubric
     *
     * @return Activities
     */
    public function setRubric($rubric)
    {
        $this->rubric = $rubric;

        return $this;
    }

    /**
     * Get rubric
     *
     * @return string
     */
    public function getRubric()
    {
        return $this->rubric;
    }

    /**
     * Set subrubric
     *
     * @param string $subrubric
     *
     * @return Activities
     */
    public function setSubrubric($subrubric)
    {
        $this->subrubric = $subrubric;

        return $this;
    }

    /**
     * Get subrubric
     *
     * @return string
     */
    public function getSubrubric()
    {
        return $this->subrubric;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Activities
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
     * @param integer $user
     *
     * @return Activities
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return integer
     */
    public function getUser()
    {
        return $this->user;
    }
}

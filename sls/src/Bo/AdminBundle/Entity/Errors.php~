<?php
/*
* Date Création: 24/03/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Errors.php
* Description: Liste des Errorss
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="adm_errors")
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\ErrorsRepository")
*/
class Errors 
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
    * @ORM\Column(type="integer")
    */
	//Codification premier numero-> AdminBundle=1;UserBundle=2;HomeBundle=3;StudentBundle=1
	private $code;

	/**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $action;	
	
    /**
     * @ORM\Column(type="string",length=1000,nullable=true)
     */    
    private $comment;
	
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
     * Set code
     *
     * @param integer $code
     *
     * @return Errors
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return integer
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Errors
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Errors
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
     * @return Errors
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

    /**
     * Set action
     *
     * @param string $action
     *
     * @return Errors
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }
}

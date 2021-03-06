<?php
/*
* Date Création: 20/02/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Coordinator.php
* Description: Entité Coordinator of contracts
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="adm_coordinator")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\CoordinatorRepository")
*/
class Coordinator
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
	   
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $name;
	
    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */    
    private $email;
	
    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */    
    private $phone;	
	
	/**
    * @ORM\Column(type="string",length=255, nullable=true)
	*/
	protected $pwd;
		
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $createby;
		
    /**
    * @ORM\Column(type="integer", nullable=true)
    */
	 //master equal to 0 or 1
    private $master;
	
    /**
     * @ORM\ManyToOne(targetEntity="Client")
	 * @ORM\JoinColumn(name="idclient",referencedColumnName="id",nullable=true)
     */      
    private $client;	
	  
    /**
    * @ORM\ManyToOne(targetEntity="Typecontract")
	* @ORM\JoinColumn(name="idtypecontract",referencedColumnName="id")
    */      
    private $typecontract;	
	
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
		$this->master=0;
    }
	  
	public function __toString(){
		return $this->name;
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
     * Set name
     *
     * @param string $name
     *
     * @return Coordinator
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Coordinator
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Coordinator
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Coordinator
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
     * Set typecontract
     *
     * @param \Bo\AdminBundle\Entity\Typecontract $typecontract
     *
     * @return Coordinator
     */
    public function setTypecontract(\Bo\AdminBundle\Entity\Typecontract $typecontract = null)
    {
        $this->typecontract = $typecontract;

        return $this;
    }

    /**
     * Get typecontract
     *
     * @return \Bo\AdminBundle\Entity\Typecontract
     */
    public function getTypecontract()
    {
        return $this->typecontract;
    }

    /**
     * Set createby
     *
     * @param string $createby
     *
     * @return Coordinator
     */
    public function setCreateby($createby)
    {
        $this->createby = $createby;

        return $this;
    }

    /**
     * Get createby
     *
     * @return string
     */
    public function getCreateby()
    {
        return $this->createby;
    }

    /**
     * Set pwd
     *
     * @param string $pwd
     *
     * @return Coordinator
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }

    /**
     * Get pwd
     *
     * @return string
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * Set master
     *
     * @param integer $master
     *
     * @return Coordinator
     */
    public function setMaster($master)
    {
        $this->master = $master;

        return $this;
    }

    /**
     * Get master
     *
     * @return integer
     */
    public function getMaster()
    {
        return $this->master;
    }

    /**
     * Set client
     *
     * @param \Bo\AdminBundle\Entity\Client $client
     *
     * @return Coordinator
     */
    public function setClient(\Bo\AdminBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \Bo\AdminBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }
}

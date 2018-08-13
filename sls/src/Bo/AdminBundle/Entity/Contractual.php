<?php
/*
* Date Création: 26/10/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Contractual.php
* Description: Entité Contractual of contracts
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="adm_contractual")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\ContractualRepository")
*/
class Contractual
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
    private $createby;
	  
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
     * @return Contractual
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
     * @return Contractual
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
     * @return Contractual
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
     * @return Contractual
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
     * @return Contractual
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
     * @return Contractual
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
}

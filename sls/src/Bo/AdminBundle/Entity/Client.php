<?php
/*
* Date Création: 20/02/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Client.php
* Description: Liste des Clients
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="adm_client")
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\ClientRepository")
*/
class Client 
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string",length=10)
     */    
    private $reference;
	
    /**
    * @ORM\ManyToMany(targetEntity="Typecontract")
	* @ORM\JoinColumn(name="idtypecontract",referencedColumnName="id", nullable=true)
    */      
    private $typecontract;	
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $designation;	
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $phonenumber;	
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $address;	
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $billingaddress;	
		
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $email;	
					
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $createby;
	
    /**
    * @ORM\Column(type="string",length=4000, nullable=true)
    */    
    private $details;
   
	public function __toString(){
		return $this->reference;
	}	
	
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
     * Set reference
     *
     * @param string $reference
     *
     * @return Client
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set designation
     *
     * @param string $designation
     *
     * @return Client
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set details
     *
     * @param string $details
     *
     * @return Client
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
     * Add typecontract
     *
     * @param \Bo\AdminBundle\Entity\Typecontract $typecontract
     *
     * @return Client
     */
    public function addTypecontract(\Bo\AdminBundle\Entity\Typecontract $typecontract)
    {
        $this->typecontract[] = $typecontract;

        return $this;
    }

    /**
     * Remove typecontract
     *
     * @param \Bo\AdminBundle\Entity\Typecontract $typecontract
     */
    public function removeTypecontract(\Bo\AdminBundle\Entity\Typecontract $typecontract)
    {
        $this->typecontract->removeElement($typecontract);
    }

    /**
     * Get typecontract
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTypecontract()
    {
        return $this->typecontract;
    }

    /**
     * Set phonenumber
     *
     * @param string $phonenumber
     *
     * @return Client
     */
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;

        return $this;
    }

    /**
     * Get phonenumber
     *
     * @return string
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Client
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
     * Set address
     *
     * @param string $address
     *
     * @return Client
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set billingaddress
     *
     * @param string $billingaddress
     *
     * @return Client
     */
    public function setBillingaddress($billingaddress)
    {
        $this->billingaddress = $billingaddress;

        return $this;
    }

    /**
     * Get billingaddress
     *
     * @return string
     */
    public function getBillingaddress()
    {
        return $this->billingaddress;
    }

    /**
     * Set createby
     *
     * @param string $createby
     *
     * @return Client
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

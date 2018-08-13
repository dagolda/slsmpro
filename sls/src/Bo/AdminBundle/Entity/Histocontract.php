<?php
/*
* Date Création: 07/03/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Histocontract.php
* Description: Entité agenda
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="histo_contract")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\HistocontractRepository")
*/

class Histocontract
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
    private $idcontracts;	
	
    /**	
    * @ORM\Column(type="string",length=3000, nullable=true)
    */
    private $description;

    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $user;	
		
    /**
    * @ORM\Column(type="datetime", nullable=true)
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
     * Set description
     *
     * @param string $description
     *
     * @return Histocontract
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Histocontract
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
     * Set createby
     *
     * @param string $createby
     *
     * @return Histocontract
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
     * Set idcontracts
     *
     * @param integer $idcontracts
     *
     * @return Histocontract
     */
    public function setIdcontracts($idcontracts)
    {
        $this->idcontracts = $idcontracts;

        return $this;
    }

    /**
     * Get idcontracts
     *
     * @return integer
     */
    public function getIdcontracts()
    {
        return $this->idcontracts;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return Histocontract
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }
}

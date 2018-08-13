<?php
/*
* Date Création: 04/04/2017
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Steps.php
* Description: Steps of training
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Table(name="adm_steps")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\StepsRepository")
*/
class Steps
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
    private $number;
	  
    /**
    * @ORM\ManyToOne(targetEntity="Bo\AdminBundle\Entity\Workfields")
	* @ORM\JoinColumn(name="idworkfield",referencedColumnName="id", nullable=true)
    */      
    private $field;	
	
    /**
     * @ORM\Column(type="string",length=255)
     */    
    private $resultat;
	
    /**
     * @ORM\Column(type="string",length=25,nullable=true)
     */    
    private $numberofhours;
		
    /**
    * @ORM\Column(type="date")
    */
	private $startpoint;	
			
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $createby;
	
    /**
    * @ORM\Column(type="datetime")
    */    
	private $creationdate;
	
    /**
    * Constructor
    */
    public function __construct()
    {
		$this->creationdate=$this->startdate=new \DateTime();
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
     * Set number
     *
     * @param integer $number
     *
     * @return Steps
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set resultat
     *
     * @param string $resultat
     *
     * @return Steps
     */
    public function setResultat($resultat)
    {
        $this->resultat = $resultat;

        return $this;
    }

    /**
     * Get resultat
     *
     * @return string
     */
    public function getResultat()
    {
        return $this->resultat;
    }

    /**
     * Set numberofhours
     *
     * @param string $numberofhours
     *
     * @return Steps
     */
    public function setNumberofhours($numberofhours)
    {
        $this->numberofhours = $numberofhours;

        return $this;
    }

    /**
     * Get numberofhours
     *
     * @return string
     */
    public function getNumberofhours()
    {
        return $this->numberofhours;
    }

    /**
     * Set startpoint
     *
     * @param \DateTime $startpoint
     *
     * @return Steps
     */
    public function setStartpoint($startpoint)
    {
        $this->startpoint = $startpoint;

        return $this;
    }

    /**
     * Get startpoint
     *
     * @return \DateTime
     */
    public function getStartpoint()
    {
        return $this->startpoint;
    }

    /**
     * Set createby
     *
     * @param string $createby
     *
     * @return Steps
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
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Steps
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
     * Set field
     *
     * @param \Bo\AdminBundle\Entity\Workfield $field
     *
     * @return Steps
     */
    public function setField(\Bo\AdminBundle\Entity\Workfields $field = null)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * Get field
     *
     * @return \Bo\AdminBundle\Entity\Workfield
     */
    public function getField()
    {
        return $this->field;
    }
}

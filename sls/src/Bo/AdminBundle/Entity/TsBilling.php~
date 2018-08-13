<?php
/*
* Date Création: 16/04/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : TsBilling.php
* Description: Entité des TsBillings
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Table(name="adm_tsbilling")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\TsBillingRepository")
*/
class TsBilling 
{
    /**
    * @ORM\GeneratedValue
    * @ORM\Id
    * @ORM\Column(type="integer")
    */
    private $id;
		
    /**
    * @ORM\ManyToOne(targetEntity="Timesheet")
	* @ORM\JoinColumn(name="idtimsheet",referencedColumnName="id")
    */      
    private $timesheet;
	
    /**
    * @ORM\Column(type="integer")
    */      
    private $idbilling;		
		
    /**
    * @ORM\ManyToOne(targetEntity="Contracts")
	* @ORM\JoinColumn(name="idcontracts",referencedColumnName="id",nullable=true)
    */      
    private $contracts;	
	
    /**
     * @ORM\Column(type="string",length=5)
     */    
    private $legende;		
	
    /**
	 * @ORM\Column(type="integer")
     */ 
	//1: created; 2=invoiced ;
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
		$this->creationdate=$this->ddate=new \DateTime();
		$this->status=1;
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
     * Set idbilling
     *
     * @param integer $idbilling
     *
     * @return TsBilling
     */
    public function setIdbilling($idbilling)
    {
        $this->idbilling = $idbilling;

        return $this;
    }

    /**
     * Get idbilling
     *
     * @return integer
     */
    public function getIdbilling()
    {
        return $this->idbilling;
    }

    /**
     * Set legende
     *
     * @param string $legende
     *
     * @return TsBilling
     */
    public function setLegende($legende)
    {
        $this->legende = $legende;

        return $this;
    }

    /**
     * Get legende
     *
     * @return string
     */
    public function getLegende()
    {
        return $this->legende;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return TsBilling
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return TsBilling
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
     * Set contracts
     *
     * @param \Bo\AdminBundle\Entity\Contracts $contracts
     *
     * @return TsBilling
     */
    public function setContracts(\Bo\AdminBundle\Entity\Contracts $contracts = null)
    {
        $this->contracts = $contracts;

        return $this;
    }

    /**
     * Get contracts
     *
     * @return \Bo\AdminBundle\Entity\Contracts
     */
    public function getContracts()
    {
        return $this->contracts;
    }

    /**
     * Set timesheet
     *
     * @param \Bo\AdminBundle\Entity\Timesheet $timesheet
     *
     * @return TsBilling
     */
    public function setTimesheet(\Bo\AdminBundle\Entity\Timesheet $timesheet = null)
    {
        $this->timesheet = $timesheet;

        return $this;
    }

    /**
     * Get timesheet
     *
     * @return \Bo\AdminBundle\Entity\Timesheet
     */
    public function getTimesheet()
    {
        return $this->timesheet;
    }
}

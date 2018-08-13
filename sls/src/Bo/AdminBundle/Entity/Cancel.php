<?php
/*
* Date Création: 16/11/2017
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Cancel.php
* Description: Agenda Cancel
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="adm_cancel")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\CancelRepository")
*/
class Cancel
{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;
		
    /**
    * @ORM\Column(type="date")
    */ 
    protected $startdate;
		
    /**
    * @ORM\Column(type="date")
    */ 
    protected $enddate;
	
    /**	
    * @ORM\Column(type="string",length=25, nullable=true)
    */
    private $amorpm;
		
    /**
    * @ORM\Column(type="string",length=1000)
    */    
    private $motif;

    /**
    * @ORM\ManyToOne(targetEntity="Agenda", inversedBy="cancel")
    * @ORM\JoinColumn(name="idagenda",referencedColumnName="id", nullable=true)
    */        
    private $agenda;
				
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $createby;
		
    /**
    * @ORM\Column(type="datetime")
    */ 
    protected $creationdate;
	
    /**
    * Constructor
    */
    public function __construct()
    {
	$this->creationdate = $this->startdate = $this->enddate = new \DateTime();
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
     * Set ddate
     *
     * @param \DateTime $ddate
     *
     * @return Cancel
     */
    public function setDdate($ddate)
    {
        $this->ddate = $ddate;

        return $this;
    }

    /**
     * Get ddate
     *
     * @return \DateTime
     */
    public function getDdate()
    {
        return $this->ddate;
    }

    /**
     * Set motif
     *
     * @param string $motif
     *
     * @return Cancel
     */
    public function setMotif($motif)
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get motif
     *
     * @return string
     */
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set createby
     *
     * @param string $createby
     *
     * @return Cancel
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
     * @return Cancel
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
     * Set agenda
     *
     * @param \Bo\AdminBundle\Entity\Agenda $agenda
     *
     * @return Cancel
     */
    public function setAgenda(\Bo\AdminBundle\Entity\Agenda $agenda = null)
    {
        $this->agenda = $agenda;

        return $this;
    }

    /**
     * Get agenda
     *
     * @return \Bo\AdminBundle\Entity\Agenda
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * Set startdate
     *
     * @param \DateTime $startdate
     *
     * @return Cancel
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set enddate
     *
     * @param \DateTime $enddate
     *
     * @return Cancel
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;

        return $this;
    }

    /**
     * Get enddate
     *
     * @return \DateTime
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * Set amorpm
     *
     * @param string $amorpm
     *
     * @return Cancel
     */
    public function setAmorpm($amorpm)
    {
        $this->amorpm = $amorpm;

        return $this;
    }

    /**
     * Get amorpm
     *
     * @return string
     */
    public function getAmorpm()
    {
        return $this->amorpm;
    }
}

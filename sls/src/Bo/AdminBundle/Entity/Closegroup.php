<?php
/* 
* Date Création: 14/09/2017
* Auteur: N'VEKOUNOU Moise José
* Nom fichier: Closegroup.php
* Description: Entité Closegroup
*/ 
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\ClosegroupRepository")
*/
class Closegroup
{
    /**
    * @ORM\GeneratedValue
    * @ORM\Id
    * @ORM\Column(type="integer")
    */
    private $id;
	
    /**
    * @ORM\Column(type="string",length=255)
    */    
    private $closedby;
		
    /**
    * @ORM\Column(type="datetime")
    */   
    private $closeddate;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $reopenby;
		
    /**
    * @ORM\Column(type="datetime", nullable=true)
    */   
    private $reopendate;

    /**
    * @ORM\ManyToOne(targetEntity="Group", inversedBy="closegroup")
    */      
    private $group;
	
    /**
    * Constructor
    */
    public function __construct()
    {
	$this->closeddate=new \DateTime();
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
     * Set closedby
     *
     * @param string $closedby
     *
     * @return Closegroup
     */
    public function setClosedby($closedby)
    {
        $this->closedby = $closedby;

        return $this;
    }

    /**
     * Get closedby
     *
     * @return string
     */
    public function getClosedby()
    {
        return $this->closedby;
    }

    /**
     * Set closeddate
     *
     * @param \DateTime $closeddate
     *
     * @return Closegroup
     */
    public function setCloseddate($closeddate)
    {
        $this->closeddate = $closeddate;

        return $this;
    }

    /**
     * Get closeddate
     *
     * @return \DateTime
     */
    public function getCloseddate()
    {
        return $this->closeddate;
    }

    /**
     * Set group
     *
     * @param \Bo\AdminBundle\Entity\Group $group
     *
     * @return Closegroup
     */
    public function setGroup(\Bo\AdminBundle\Entity\Group $group = null)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return \Bo\AdminBundle\Entity\Group
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set reopenby
     *
     * @param string $reopenby
     *
     * @return Closegroup
     */
    public function setReopenby($reopenby)
    {
        $this->reopenby = $reopenby;

        return $this;
    }

    /**
     * Get reopenby
     *
     * @return string
     */
    public function getReopenby()
    {
        return $this->reopenby;
    }

    /**
     * Set reopendate
     *
     * @param \DateTime $reopendate
     *
     * @return Closegroup
     */
    public function setReopendate($reopendate)
    {
        $this->reopendate = $reopendate;

        return $this;
    }

    /**
     * Get reopendate
     *
     * @return \DateTime
     */
    public function getReopendate()
    {
        return $this->reopendate;
    }
}

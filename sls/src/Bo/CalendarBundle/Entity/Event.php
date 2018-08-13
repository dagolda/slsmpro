<?php
namespace Bo\CalendarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BladeTester\CalendarBundle\Entity\Event as BaseEvent;

/**
 * @ORM\Entity(repositoryClass="Bo\CalendarBundle\Repository\EventRepository")
 * @ORM\Table(name="events")
 */
class Event extends BaseEvent {

    /**
    * @ORM\Column(name="id", type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;
			
    /**
    * @ORM\ManyToOne(targetEntity="Bo\AdminBundle\Entity\Employee")
	* @ORM\JoinColumn(name="idemployee",referencedColumnName="id")
    */      
    private $employee;	
	
    /**
    * @ORM\ManyToOne(targetEntity="Bo\AdminBundle\Entity\Local")
	* @ORM\JoinColumn(name="idemployee",referencedColumnName="id")
    */      
    private $local;	
	
    /**
    * @ORM\OneToOne(targetEntity="Bo\AdminBundle\Entity\Contracts")
	* @ORM\JoinColumn(name="idcontracts",referencedColumnName="id",nullable=true)
    */      
    private $contracts;	
		
    /**
    * @ORM\Column(type="string",length=255)
    */    
    private $year;
	
    /**
    * @ORM\Column(type="string",length=255)
    */    
    private $month;
	
    /**
    * @ORM\Column(type="datetime")
    */    
	private $creationdate;


    public function getId() {
        return $this->id;
    }	
	
    /**
     * Set year
     *
     * @param string $year
     *
     * @return Event
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set month
     *
     * @param string $month
     *
     * @return Event
     */
    public function setMonth($month)
    {
        $this->month = $month;

        return $this;
    }

    /**
     * Get month
     *
     * @return string
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Event
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
     * Set employee
     *
     * @param \Bo\AdminBundle\Entity\Employee $employee
     *
     * @return Event
     */
    public function setEmployee(\Bo\AdminBundle\Entity\Employee $employee = null)
    {
        $this->employee = $employee;

        return $this;
    }

    /**
     * Get employee
     *
     * @return \Bo\CalendarBundle\Entity\Employee
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * Set local
     *
     * @param \Bo\AdminBundle\Entity\Local $local
     *
     * @return Event
     */
    public function setLocal(\Bo\AdminBundle\Entity\Local $local = null)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get local
     *
     * @return \Bo\CalendarBundle\Entity\Local
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Set contracts
     *
     * @param \Bo\AdminBundle\Entity\Contracts $contracts
     *
     * @return Event
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
}

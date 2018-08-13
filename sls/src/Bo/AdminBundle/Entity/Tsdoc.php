<?php
/*
* Date Création: 02/11/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Tsdoc.php
* Description: Timesheet documents
*/
namespace Bo\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
/**
* @ORM\Table(name="adm_tsdoc")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\TsdocRepository")
*/
class Tsdoc
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
    * @ORM\Column(type="string")
    */
    private $filename;

    /**
    * @ORM\Column(type="string")
    */
    private $student;

    /**
   * @ORM\ManyToOne(targetEntity="Bo\AdminBundle\Entity\Employee")
   * @ORM\JoinColumn(nullable=false)
   */
    private $employee;

    /**
    * @ORM\Column(type="date", nullable=true)
    */    
    private $startdate;	
	
    /**
    * @ORM\Column(type="date", nullable=true)
    */    
    private $enddate;
		
    /**	
    * @ORM\Column(type="string",length=25, nullable=true)
    */
    private $nbhour;
	
    /**
    * @ORM\Column(type="string",length=2)
    */    
    private $month;
	
    /**
    * @ORM\Column(type="string",length=4)
    */    
    private $year;
	
    /**
    * @ORM\Column(type="datetime")
    */    
	private $creationdate;
					
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $createby;
	
    /**
     * Constructor
     */
    public function __construct()
    {
		$this->creationdate = new \DateTime();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return employee_pj
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set employee
     *
     * @param \Bo\AdminBundle\Entity\employee $employee
     *
     * @return employee_pj
     */
    public function setEmployee(\Bo\AdminBundle\Entity\Employee $employee)
    {
        $this->employee = $employee;

        return $this;
    }

    /**
     * Get employee 
     *
     * @return \Bo\AdminBundle\Entity\employee
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Emppj
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
     * Set startdate
     *
     * @param \DateTime $startdate
     *
     * @return Tsdoc
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
     * @return Tsdoc
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
     * Set nbhour
     *
     * @param string $nbhour
     *
     * @return Tsdoc
     */
    public function setNbhour($nbhour)
    {
        $this->nbhour = $nbhour;

        return $this;
    }

    /**
     * Get nbhour
     *
     * @return string
     */
    public function getNbhour()
    {
        return $this->nbhour;
    }

    /**
     * Set createby
     *
     * @param string $createby
     *
     * @return Tsdoc
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
     * Set student
     *
     * @param string $student
     *
     * @return Tsdoc
     */
    public function setStudent($student)
    {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return string
     */
    public function getStudent()
    {
        return $this->student;
    }

    /**
     * Set month
     *
     * @param string $month
     *
     * @return Tsdoc
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
     * Set year
     *
     * @param string $year
     *
     * @return Tsdoc
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
}

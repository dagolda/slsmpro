<?php
/*
* Date Création: 07/03/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Schedule.php
* Description: Entité Contracts Schedule
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="adm_schedule")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\ScheduleRepository")
*/
class Schedule
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
	
    /**	
    * @ORM\Column(type="string",length=25, nullable=true)
    */
    private $hourperday;
		
    /**	
     * @ORM\Column(type="integer")
     */
    private $idcontracts;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $dayfrom;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $dayto;
	
    /**
    * @ORM\Column(type="time", nullable=true)
    */    
	private $startam;	
		
    /**
    * @ORM\Column(type="time", nullable=true)
    */    
	private $endam;	
	
    /**
    * @ORM\Column(type="time", nullable=true)
    */    
	private $startpm;
	
    /**
    * @ORM\Column(type="time", nullable=true)
    */    
	private $endpm;	
	
    /**
    * @ORM\Column(type="integer", nullable=true)
    */    
	private $teacheram;	
		
    /**
    * @ORM\Column(type="integer", nullable=true)
    */    
	private $teacherpm;	
			
    /**
    * @ORM\Column(type="integer", nullable=true)
    */    
	private $idlocal;	

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
     * Set idcontracts
     *
     * @param integer $idcontracts
     *
     * @return Schedule
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
     * Set startam
     *
     * @param \DateTime $startam
     *
     * @return Schedule
     */
    public function setStartam($startam)
    {
        $this->startam = $startam;

        return $this;
    }

    /**
     * Get startam
     *
     * @return \DateTime
     */
    public function getStartam()
    {
        return $this->startam;
    }

    /**
     * Set startpm
     *
     * @param \DateTime $startpm
     *
     * @return Schedule
     */
    public function setStartpm($startpm)
    {
        $this->startpm = $startpm;

        return $this;
    }

    /**
     * Get startpm
     *
     * @return \DateTime
     */
    public function getStartpm()
    {
        return $this->startpm;
    }

    /**
     * Set endam
     *
     * @param \DateTime $endam
     *
     * @return Schedule
     */
    public function setEndam($endam)
    {
        $this->endam = $endam;

        return $this;
    }

    /**
     * Get endam
     *
     * @return \DateTime
     */
    public function getEndam()
    {
        return $this->endam;
    }

    /**
     * Set endpm
     *
     * @param \DateTime $endpm
     *
     * @return Schedule
     */
    public function setEndpm($endpm)
    {
        $this->endpm = $endpm;

        return $this;
    }

    /**
     * Get endpm
     *
     * @return \DateTime
     */
    public function getEndpm()
    {
        return $this->endpm;
    }

    /**
     * Set hourperday
     *
     * @param integer $hourperday
     *
     * @return Schedule
     */
    public function setHourperday($hourperday)
    {
        $this->hourperday = $hourperday;

        return $this;
    }

    /**
     * Get hourperday
     *
     * @return integer
     */
    public function getHourperday()
    {
        return $this->hourperday;
    }

    /**
     * Set dayfrom
     *
     * @param string $dayfrom
     *
     * @return Schedule
     */
    public function setDayfrom($dayfrom)
    {
        $this->dayfrom = $dayfrom;

        return $this;
    }

    /**
     * Get dayfrom
     *
     * @return string
     */
    public function getDayfrom()
    {
        return $this->dayfrom;
    }

    /**
     * Set dayto
     *
     * @param string $dayto
     *
     * @return Schedule
     */
    public function setDayto($dayto)
    {
        $this->dayto = $dayto;

        return $this;
    }

    /**
     * Get dayto
     *
     * @return string
     */
    public function getDayto()
    {
        return $this->dayto;
    }

    /**
     * Set teacheram
     *
     * @param integer $teacheram
     *
     * @return Schedule
     */
    public function setTeacheram($teacheram)
    {
        $this->teacheram = $teacheram;

        return $this;
    }

    /**
     * Get teacheram
     *
     * @return integer
     */
    public function getTeacheram()
    {
        return $this->teacheram;
    }

    /**
     * Set teacherpm
     *
     * @param integer $teacherpm
     *
     * @return Schedule
     */
    public function setTeacherpm($teacherpm)
    {
        $this->teacherpm = $teacherpm;

        return $this;
    }

    /**
     * Get teacherpm
     *
     * @return integer
     */
    public function getTeacherpm()
    {
        return $this->teacherpm;
    }

    /**
     * Set idlocal
     *
     * @param integer $idlocal
     *
     * @return Schedule
     */
    public function setIdlocal($idlocal)
    {
        $this->idlocal = $idlocal;

        return $this;
    }

    /**
     * Get idlocal
     *
     * @return integer
     */
    public function getIdlocal()
    {
        return $this->idlocal;
    }
}

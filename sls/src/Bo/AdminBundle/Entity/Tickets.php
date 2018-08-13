<?php
/*
* Date Création: 30/09/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Tickets.php
* Description: Gestion des tickets
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
 * @ORM\Table(name="adm_tickets")
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\TicketsRepository")
*/
class Tickets 
{
    /**
    * @ORM\GeneratedValue
    * @ORM\Id
    * @ORM\Column(type="integer")
    */
    private $id;
	  
    /**
    * @ORM\ManyToOne(targetEntity="Bo\AdminBundle\Entity\Employee")
	* @ORM\JoinColumn(name="idemployee",referencedColumnName="id", nullable=true)
    */      
    private $employee;	
	
    /**
    * @ORM\ManyToOne(targetEntity="Bo\AdminBundle\Entity\Students")
	* @ORM\JoinColumn(name="idstudents",referencedColumnName="id", nullable=true)
    */      
    private $students;	
	
    /**
    * @ORM\ManyToOne(targetEntity="Bo\AdminBundle\Entity\TicketContacts")
	* @ORM\JoinColumn(name="idcontacts",referencedColumnName="id", nullable=true)
    */      
    private $contacts;	
	
    /**
    * @ORM\Column(type="string",length=255)
    */    
    private $subject;
	
    /**
    * @ORM\Column(type="integer", nullable=true)
    */    
    private $idadvisor;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $canal;
		
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $blockedby;
	
    /**
    * @ORM\Column(type="datetime",nullable=true)
    */    
    private $blockeddate;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $resolutiontime;
		
    /**
    * @ORM\Column(type="datetime")
    */
	private $openeddate;	
			
    /**
    * @ORM\Column(type="datetime")
    */
	private $statusddate;
				
    /**
    * @ORM\Column(type="datetime",nullable=true)
    */
	private $resolveddate;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $resolvedby;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $closeby;
	
    /**
     * @ORM\Column(type="text",length=6000,nullable=true)
     */    
    private $comments;
		
    /**
     * @ORM\Column(type="text",length=6000,nullable=true)
     */    
    private $resolvednote;
			
    /**
    * @ORM\Column(type="integer")
    */
	//1=opened; 2=in progress; 3=resolved; 4=close
	private $status;	
	
    /**
    * @ORM\Column(type="string",nullable=true)
    */
    private $filename;
	
    /**
    * @ORM\Column(type="datetime")
    */    
	private $creationdate;
	
    /**
     * Constructor
     */
    public function __construct()
    {
		$this->creationdate=$this->updateddate=$this->openeddate=$this->statusddate=new \DateTime();
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
     * Set subject
     *
     * @param string $subject
     *
     * @return Tickets
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set openeddate
     *
     * @param \DateTime $openeddate
     *
     * @return Tickets
     */
    public function setOpeneddate($openeddate)
    {
        $this->openeddate = $openeddate;

        return $this;
    }

    /**
     * Get openeddate
     *
     * @return \DateTime
     */
    public function getOpeneddate()
    {
        return $this->openeddate;
    }

    /**
     * Set updateddate
     *
     * @param \DateTime $updateddate
     *
     * @return Tickets
     */
    public function setUpdateddate($updateddate)
    {
        $this->updateddate = $updateddate;

        return $this;
    }

    /**
     * Get updateddate
     *
     * @return \DateTime
     */
    public function getUpdateddate()
    {
        return $this->updateddate;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Tickets
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Tickets
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
     * @return Tickets
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
     * @return Tickets
     */
    public function setEmployee(\Bo\AdminBundle\Entity\Employee $employee = null)
    {
        $this->employee = $employee;

        return $this;
    }

    /**
     * Get employee
     *
     * @return \Bo\AdminBundle\Entity\Employee
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * Set students
     *
     * @param \Bo\AdminBundle\Entity\Students $students
     *
     * @return Tickets
     */
    public function setStudents(\Bo\AdminBundle\Entity\Students $students = null)
    {
        $this->students = $students;

        return $this;
    }

    /**
     * Get students
     *
     * @return \Bo\AdminBundle\Entity\Students
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * Set resolvedby
     *
     * @param string $resolvedby
     *
     * @return Tickets
     */
    public function setResolvedby($resolvedby)
    {
        $this->resolvedby = $resolvedby;

        return $this;
    }

    /**
     * Get resolvedby
     *
     * @return string
     */
    public function getResolvedby()
    {
        return $this->resolvedby;
    }

    /**
     * Set statusddate
     *
     * @param \DateTime $statusddate
     *
     * @return Tickets
     */
    public function setStatusddate($statusddate)
    {
        $this->statusddate = $statusddate;

        return $this;
    }

    /**
     * Get statusddate
     *
     * @return \DateTime
     */
    public function getStatusddate()
    {
        return $this->statusddate;
    }

    /**
     * Set resolveddate
     *
     * @param \DateTime $resolveddate
     *
     * @return Tickets
     */
    public function setResolveddate($resolveddate)
    {
        $this->resolveddate = $resolveddate;

        return $this;
    }

    /**
     * Get resolveddate
     *
     * @return \DateTime
     */
    public function getResolveddate()
    {
        return $this->resolveddate;
    }

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return Tickets
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set blocked
     *
     * @param string $blocked
     *
     * @return Tickets
     */
    public function setBlocked($blocked)
    {
        $this->blocked = $blocked;

        return $this;
    }

    /**
     * Get blocked
     *
     * @return string
     */
    public function getBlocked()
    {
        return $this->blocked;
    }
	
    /**
     * Set blockedby
     *
     * @param string $blockedby
     *
     * @return Tickets
     */
    public function setBlockedby($blockedby)
    {
        $this->blockedby = $blockedby;

        return $this;
    }

    /**
     * Get blockedby
     *
     * @return string
     */
    public function getBlockedby()
    {
        return $this->blockedby;
    }

    /**
     * Set canal
     *
     * @param string $canal
     *
     * @return Tickets
     */
    public function setCanal($canal)
    {
        $this->canal = $canal;

        return $this;
    }

    /**
     * Get canal
     *
     * @return string
     */
    public function getCanal()
    {
        return $this->canal;
    }

    /**
     * Set contacts
     *
     * @param \Bo\AdminBundle\Entity\TicketContacts $contacts
     *
     * @return Tickets
     */
    public function setContacts(\Bo\AdminBundle\Entity\TicketContacts $contacts = null)
    {
        $this->contacts = $contacts;

        return $this;
    }

    /**
     * Get contacts
     *
     * @return \Bo\AdminBundle\Entity\TicketContacts
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return Tickets
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
     * Set idadvisor
     *
     * @param integer $idadvisor
     *
     * @return Tickets
     */
    public function setIdadvisor($idadvisor)
    {
        $this->idadvisor = $idadvisor;

        return $this;
    }

    /**
     * Get idadvisor
     *
     * @return integer
     */
    public function getIdadvisor()
    {
        return $this->idadvisor;
    }

    /**
     * Set resolvednote
     *
     * @param string $resolvednote
     *
     * @return Tickets
     */
    public function setResolvednote($resolvednote)
    {
        $this->resolvednote = $resolvednote;

        return $this;
    }

    /**
     * Get resolvednote
     *
     * @return string
     */
    public function getResolvednote()
    {
        return $this->resolvednote;
    }

    /**
     * Set blockeddate
     *
     * @param \DateTime $blockeddate
     *
     * @return Tickets
     */
    public function setBlockeddate($blockeddate)
    {
        $this->blockeddate = $blockeddate;

        return $this;
    }

    /**
     * Get blockeddate
     *
     * @return \DateTime
     */
    public function getBlockeddate()
    {
        return $this->blockeddate;
    }

    /**
     * Set resolutiontime
     *
     * @param string $resolutiontime
     *
     * @return Tickets
     */
    public function setResolutiontime($resolutiontime)
    {
        $this->resolutiontime = $resolutiontime;

        return $this;
    }

    /**
     * Get resolutiontime
     *
     * @return string
     */
    public function getResolutiontime()
    {
        return $this->resolutiontime;
    }

    /**
     * Set closeby
     *
     * @param string $closeby
     *
     * @return Tickets
     */
    public function setCloseby($closeby)
    {
        $this->closeby = $closeby;

        return $this;
    }

    /**
     * Get closeby
     *
     * @return string
     */
    public function getCloseby()
    {
        return $this->closeby;
    }
}

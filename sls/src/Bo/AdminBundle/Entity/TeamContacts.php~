<?php
/*
* Date Création: 20/02/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : TeamContacts.php
* Description: Entité des contacts de l'équipe administrative
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
/**
 * @ORM\Entity
 * @ORM\Table(name="adm_teamcontacts")
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\TeamContactsRepository")
 */
class TeamContacts
{
    /**
    * @ORM\GeneratedValue
    * @ORM\Id
    * @ORM\Column(type="integer")
    */
    private $id;
	
    /**
    * @ORM\ManyToOne(targetEntity="Employee")
	* @ORM\JoinColumn(name="idemployee",referencedColumnName="id", nullable=true)
    */      
    private $employee;		
	
	/**
	* @ORM\Column(type="string", length=255, nullable=true)
	*/
	public $title;
		
	/**
	* @ORM\Column(type="string", length=255, nullable=true)
	*/
	public $email;	
		
	/**
	* @ORM\Column(type="string", length=255, nullable=true)
	*/
	public $location;	
		
	/**
	* @ORM\Column(type="string", length=255, nullable=true)
	*/
	public $extension;
		
	/**
	* @ORM\Column(type="string", length=255, nullable=true)
	*/
	public $room;
		
    /**
    * @ORM\Column(type="datetime")
    */    
	private $creationdate;
	
    /**
    * @ORM\Column(type="decimal", scale=2, nullable=true)
    */
    private $hourrate;   
				
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $createby;
	
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
     * Set title
     *
     * @param string $title
     *
     * @return TeamContacts
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return TeamContacts
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
     * Set location
     *
     * @param string $location
     *
     * @return TeamContacts
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set extension
     *
     * @param string $extension
     *
     * @return TeamContacts
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set room
     *
     * @param string $room
     *
     * @return TeamContacts
     */
    public function setRoom($room)
    {
        $this->room = $room;

        return $this;
    }

    /**
     * Get room
     *
     * @return string
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return TeamContacts
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
     * Set hourrate
     *
     * @param string $hourrate
     *
     * @return TeamContacts
     */
    public function setHourrate($hourrate)
    {
        $this->hourrate = $hourrate;

        return $this;
    }

    /**
     * Get hourrate
     *
     * @return string
     */
    public function getHourrate()
    {
        return $this->hourrate;
    }

    /**
     * Set createby
     *
     * @param string $createby
     *
     * @return TeamContacts
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
     * Set employee
     *
     * @param \Bo\AdminBundle\Entity\Employee $employee
     *
     * @return TeamContacts
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
}

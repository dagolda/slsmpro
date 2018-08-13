<?php
/*
* Date Création: 10/07/2017
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : ContactUser.php
* Description: Quiz contact user entity
*/
namespace Bo\QuizBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="qz_contactuser")
*/
class ContactUser
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
    private $name;
	
    /**
     * @ORM\Column(type="string",length=255)
     */    
    private $firstname;
			
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $phone;
				
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */ 	
    private $department;	
					
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $email;	

    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */
    protected $password;

    /**
    * @ORM\ManyToMany(targetEntity="User", mappedBy="contactuser")
    */
    protected $user;		
	
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
	$this->creationdate=new \DateTime();
    }
	  
    public function __toString(){
	return $this->firstname." ".$this->name;
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
     * Set name
     *
     * @param string $name
     *
     * @return Quser
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Quser
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Quser
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set department
     *
     * @param string $department
     *
     * @return Quser
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Quser
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
     * Set createby
     *
     * @param string $createby
     *
     * @return Quser
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
     * @return Quser
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
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Add user
     *
     * @param \Bo\QuizBundle\Entity\User $user
     *
     * @return ContactUser
     */
    public function addUser(\Bo\QuizBundle\Entity\User $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \Bo\QuizBundle\Entity\User $user
     */
    public function removeUser(\Bo\QuizBundle\Entity\User $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUser()
    {
        return $this->user;
    }
}

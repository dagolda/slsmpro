<?php
/*
* Date Création: 02/11/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Epj.php
* Description: Employee documents attachment
*/
namespace Bo\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
/**
* @ORM\Table(name="emppj")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\EmppjRepository")
*/
class Emppj
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
    * @ORM\Column(type="string")
    */
    private $filename;

    /**
   * @ORM\ManyToOne(targetEntity="Bo\AdminBundle\Entity\Employee")
   * @ORM\JoinColumn(nullable=false)
   */
    private $employee;
	
    /**
    * @ORM\Column(type="datetime")
    */    
	private $creationdate;
	
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
     * Set name
     *
     * @param string $name
     *
     * @return Emppj
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
}

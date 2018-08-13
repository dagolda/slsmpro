<?php
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="adm_motifabsence")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\MotifAbsenceRepository")
*/

class MotifAbsence
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
    * @ORM\Column(type="boolean", nullable=true)
    */    
    private $student;
	
    /**
    * @ORM\Column(type="boolean", nullable=true)
    */    
    private $teacher;

    public function __toString(){
	return $this->name;
    }

    /**
    * Get id
    * @return integer
    */
    public function getId()
    {
        return $this->id;
    }

    /**
    * Set name
    * @param string $name
    * @return MotifAbsence
    */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
    * Get name
    * @return string
    */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set student
     *
     * @param boolean $student
     *
     * @return MotifAbsence
     */
    public function setStudent($student)
    {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return boolean
     */
    public function getStudent()
    {
        return $this->student;
    }

    /**
     * Set teacher
     *
     * @param boolean $teacher
     *
     * @return MotifAbsence
     */
    public function setTeacher($teacher)
    {
        $this->teacher = $teacher;

        return $this;
    }

    /**
     * Get teacher
     *
     * @return boolean
     */
    public function getTeacher()
    {
        return $this->teacher;
    }
}

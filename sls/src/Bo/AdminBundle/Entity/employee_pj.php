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
 * @ORM\Table(name="epj")
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\EpjRepository")
 */
class EPJ
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
     * @ORM\Column(name="filename", type="string", length=255)
     */
    private $filename;


    /**
   * @ORM\ManyToOne(targetEntity="Bo\AdminBundle\Entity\Employee")
   * @ORM\JoinColumn(nullable=false)
   */
    private $employee;

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
}

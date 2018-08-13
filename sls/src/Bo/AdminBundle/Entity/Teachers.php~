<?php
/*
* Date Création: 20/02/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Teachers.php
* Description: Entité des enseignants
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
/**
 * @ORM\Entity
 * @ORM\Table(name="adm_teachers")
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\TeachersRepository")
 */
class Teachers
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
	private $language;
	
    /**
     * @ORM\OneToOne(targetEntity="Employee")
	 * @ORM\JoinColumn(name="idemployee",referencedColumnName="id")
     */      
	private $employee;
	
    /**
     * @ORM\ManyToMany(targetEntity="Typecontract")
	 * @ORM\JoinColumn(name="idtypecontract",referencedColumnName="id", nullable=true)
     */      
	private $typecontract;
	
    /**
    * @ORM\ManyToOne(targetEntity="Categoryteacher")
	* @ORM\JoinColumn(name="idcategoryteacher",referencedColumnName="id", nullable=true)
    */      
    private $categoryteacher;		

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->typecontract = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set language
     *
     * @param string $language
     *
     * @return Teachers
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set employee
     *
     * @param \Bo\AdminBundle\Entity\Employee $employee
     *
     * @return Teachers
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
     * Add typecontract
     *
     * @param \Bo\AdminBundle\Entity\Typecontract $typecontract
     *
     * @return Teachers
     */
    public function addTypecontract(\Bo\AdminBundle\Entity\Typecontract $typecontract)
    {
        $this->typecontract[] = $typecontract;

        return $this;
    }

    /**
     * Remove typecontract
     *
     * @param \Bo\AdminBundle\Entity\Typecontract $typecontract
     */
    public function removeTypecontract(\Bo\AdminBundle\Entity\Typecontract $typecontract)
    {
        $this->typecontract->removeElement($typecontract);
    }

    /**
     * Get typecontract
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTypecontract()
    {
        return $this->typecontract;
    }

    /**
     * Set categoryteacher
     * @param \Bo\AdminBundle\Entity\Categoryteacher $categoryteacher
     * @return Teachers
     */
    public function setCategoryteacher(\Bo\AdminBundle\Entity\Categoryteacher $categoryteacher = null)
    {
        $this->categoryteacher = $categoryteacher;

        return $this;
    }

    /**
     * Get categoryteacher
     * @return \Bo\AdminBundle\Entity\Categoryteacher
     */
    public function getCategoryteacher()
    {
        return $this->categoryteacher;
    }
}

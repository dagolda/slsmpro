<?php
/*
* Date Création: 20/02/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : SupEmployee.php
* Description: Entité des employés
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
/**
 * @ORM\Entity
 * @ORM\Table(name="adm_supemployee")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\SupEmployeeRepository")
 */
class SupEmployee
{
    /**
    * @ORM\GeneratedValue
    * @ORM\Id
    * @ORM\Column(type="integer")
    */
    private $id;
	
    /**
    * @ORM\Column(type="string",length=20, nullable=true)
    */    
    private $sexe;
	
    /**
    * @ORM\Column(type="string",length=255)
    */    
    private $name;
	
    /**
    * @ORM\Column(type="string",length=255)
    */    
    private $firstname;
	
    /**
    * @ORM\Column(type="string",length=255)
    */    
    private $email;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $homenumber;
		
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $cellnumber;
			
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $address1;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $address2;
		
    /**
    * @ORM\Column(type="date", nullable=true)
    */    
   private $birthdate;
   
    /**
    * @ORM\ManyToOne(targetEntity="Profil")
	* @ORM\JoinColumn(name="idprofil",referencedColumnName="id", nullable=true)
    */      
    private $profil;	
	
    /**
    * @ORM\ManyToOne(targetEntity="Status")
	* @ORM\JoinColumn(name="idstatus",referencedColumnName="id", nullable=true)
    */      
	private $status;
	
    /**
    * @ORM\Column(type="date", nullable=true)
    */    
	private $hiringdate;

    /**
    * @ORM\Column(type="string",length=84000, nullable=true)
    */    
    private $note;
	
    /**
     * @ORM\ManyToOne(targetEntity="Language")
	 * @ORM\JoinColumn(name="idlanguage",referencedColumnName="id", nullable=true)
     */      
	private $language;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
	private $englishlevel;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
	private $frenchlevel;
	
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
	* @ORM\Column(type="string", length=255, nullable=true)
	*/
	public $path;
	
	/**
	* @Assert\File(maxSize="10000000")
	*/
	public $file;
		
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
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $deleteby;
			
    /**
    * @ORM\Column(type="datetime")
    */    
	private $deleteddate;
	
	
    /**
    * Constructor
    */
    public function __construct()
    {
		$this->deleteddate=new \DateTime();
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
     * @return Employee
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
     * @return Employee
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
     * Set email
     *
     * @param string $email
     *
     * @return Employee
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
     * Set homenumber
     *
     * @param string $homenumber
     *
     * @return Employee
     */
    public function setHomenumber($homenumber)
    {
        $this->homenumber = $homenumber;

        return $this;
    }

    /**
     * Get homenumber
     *
     * @return string
     */
    public function getHomenumber()
    {
        return $this->homenumber;
    }

    /**
     * Set cellnumber
     *
     * @param string $cellnumber
     *
     * @return Employee
     */
    public function setCellnumber($cellnumber)
    {
        $this->cellnumber = $cellnumber;

        return $this;
    }

    /**
     * Get cellnumber
     *
     * @return string
     */
    public function getCellnumber()
    {
        return $this->cellnumber;
    }

    /**
     * Set address1
     *
     * @param string $address1
     *
     * @return Employee
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * Get address1
     *
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set address2
     *
     * @param string $address2
     *
     * @return Employee
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get address2
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     *
     * @return Employee
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set hiringdate
     *
     * @param \DateTime $hiringdate
     *
     * @return Employee
     */
    public function setHiringdate($hiringdate)
    {
        $this->hiringdate = $hiringdate;

        return $this;
    }

    /**
     * Get hiringdate
     *
     * @return \DateTime
     */
    public function getHiringdate()
    {
        return $this->hiringdate;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Employee
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
     * Set profil
     *
     * @param \Bo\AdminBundle\Entity\Profil $profil
     *
     * @return Employee
     */
    public function setProfil(\Bo\AdminBundle\Entity\Profil $profil = null)
    {
        $this->profil = $profil;

        return $this;
    }

    /**
     * Get profil
     *
     * @return \Bo\AdminBundle\Entity\Profil
     */
    public function getProfil()
    {
        return $this->profil;
    }
	
	public function getAbsolutePath()
	{
		return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
	}
	
	public function getWebPath()
	{
		return null === $this->path ? null : $this->getUploadDir().'/'.$this->path;
	}
	
	private function getUploadRootDir()
	{
		// le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
		return __DIR__.'/../../../../root/'.$this->getUploadDir();
	}
	private function getUploadDir()
	{
		// on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
		// le document/image dans la vue.
		return 'uploads/employee/photos/';
	}

    /**
     * Set path
     *
     * @param string $path
     * @return Document
     */
    public function setPath($path)
    {
        $this->path = $path;    
        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }
	
	public function upload()
	{
		// la propriété « file » peut être vide si le champ n'est pas requis
		if (null === $this->file) {
			return;
		}
		// utilisez le nom de fichier original ici mais
		// vous devriez « l'assainir » pour au moins éviter
		// quelconques problèmes de sécurité
		// la méthode « move » prend comme arguments le répertoire cible et
		// le nom de fichier cible où le fichier doit être déplacé
		$this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());
		// définit la propriété « path » comme étant le nom de fichier où vous
		// avez stocké le fichier
		$this->path = $this->file->getClientOriginalName();
		// « nettoie » la propriété « file » comme vous n'en aurez plus besoin
		$this->file = null;
	}
	/**
	* @ORM\PrePersist()
	* @ORM\PreUpdate()
	*/
	public function preUpload()
	{
		if (null !== $this->file) {
			// faites ce que vous voulez pour générer un nom unique
			$this->path = sha1(uniqid(mt_rand(), true)).'.'.$this->file->guessExtension();
		}
	}
	/**
	* @ORM\PostRemove()
	*/
	public function removeUpload()
	{
		if ($file = $this->getAbsolutePath()) {
			unlink($file);
		}
	}

    /**
     * Set status
     *
     * @param \Bo\AdminBundle\Entity\Status $status
     *
     * @return Employee
     */
    public function setStatus(\Bo\AdminBundle\Entity\Status $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \Bo\AdminBundle\Entity\Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return Employee
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Employee
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set adminhours
     *
     * @param integer $adminhours
     *
     * @return Employee
     */
    public function setAdminhours($adminhours)
    {
        $this->adminhours = $adminhours;

        return $this;
    }

    /**
     * Get adminhours
     *
     * @return integer
     */
    public function getAdminhours()
    {
        return $this->adminhours;
    }

    /**
     * Set hourrate
     *
     * @param string $hourrate
     *
     * @return Employee
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
     * Add typecontract
     *
     * @param \Bo\AdminBundle\Entity\Typecontract $typecontract
     *
     * @return Employee
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
     *
     * @param \Bo\AdminBundle\Entity\Categoryteacher $categoryteacher
     *
     * @return Employee
     */
    public function setCategoryteacher(\Bo\AdminBundle\Entity\Categoryteacher $categoryteacher = null)
    {
        $this->categoryteacher = $categoryteacher;

        return $this;
    }

    /**
     * Get categoryteacher
     *
     * @return \Bo\AdminBundle\Entity\Categoryteacher
     */
    public function getCategoryteacher()
    {
        return $this->categoryteacher;
    }

    /**
     * Set pwd
     *
     * @param string $pwd
     *
     * @return Employee
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }

    /**
     * Get pwd
     *
     * @return string
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * Set englishlevel
     *
     * @param string $englishlevel
     *
     * @return Employee
     */
    public function setEnglishlevel($englishlevel)
    {
        $this->englishlevel = $englishlevel;

        return $this;
    }

    /**
     * Get englishlevel
     *
     * @return string
     */
    public function getEnglishlevel()
    {
        return $this->englishlevel;
    }

    /**
     * Set frenchlevel
     *
     * @param string $frenchlevel
     *
     * @return Employee
     */
    public function setFrenchlevel($frenchlevel)
    {
        $this->frenchlevel = $frenchlevel;

        return $this;
    }

    /**
     * Get frenchlevel
     *
     * @return string
     */
    public function getFrenchlevel()
    {
        return $this->frenchlevel;
    }

    /**
     * Set createby
     *
     * @param string $createby
     *
     * @return Employee
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
     * Set deleteddate
     *
     * @param \DateTime $deleteddate
     *
     * @return SupEmployee
     */
    public function setDeleteddate($deleteddate)
    {
        $this->deleteddate = $deleteddate;

        return $this;
    }

    /**
     * Get deleteddate
     *
     * @return \DateTime
     */
    public function getDeleteddate()
    {
        return $this->deleteddate;
    }

    /**
     * Set deleteby
     *
     * @param string $deleteby
     *
     * @return SupEmployee
     */
    public function setDeleteby($deleteby)
    {
        $this->deleteby = $deleteby;

        return $this;
    }

    /**
     * Get deleteby
     *
     * @return string
     */
    public function getDeleteby()
    {
        return $this->deleteby;
    }

    /**
     * Set language
     *
     * @param \Bo\AdminBundle\Entity\Language $language
     *
     * @return SupEmployee
     */
    public function setLanguage(\Bo\AdminBundle\Entity\Language $language = null)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return \Bo\AdminBundle\Entity\Language
     */
    public function getLanguage()
    {
        return $this->language;
    }
}

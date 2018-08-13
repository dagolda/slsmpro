<?php
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="slider")
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\SliderRepository")
 */
class Slider 
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */    
    private $categorie;
	
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */    
    private $b1;
	
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */    
    private $b2;
	
    /**
     * @ORM\Column(type="string",length=1000,nullable=true)
     */    
    private $b3;
	
	/**
	* @ORM\Column(type="string", length=255)
	*/
	public $path;
	
	/**
	* @Assert\File(maxSize="12000000")
	*/
	public $file;
		
    /**
     * @ORM\Column(type="integer", nullable=true)
     */    
    private $ordre;
	
    /**
     * @ORM\Column(type="datetime")
     */     
    private $datecreation;	
		
	public function __construct(){
		$this->datecreation=new \DateTime();
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
     * Set b1
     *
     * @param string $b1
     * @return Slider
     */
    public function setB1($b1)
    {
        $this->b1 = $b1;

        return $this;
    }

    /**
     * Get b1
     *
     * @return string 
     */
    public function getB1()
    {
        return $this->b1;
    }

    /**
     * Set b2
     *
     * @param string $b2
     * @return Slider
     */
    public function setB2($b2)
    {
        $this->b2 = $b2;

        return $this;
    }

    /**
     * Get b2
     *
     * @return string 
     */
    public function getB2()
    {
        return $this->b2;
    }

    /**
     * Set b3
     *
     * @param string $b3
     * @return Slider
     */
    public function setB3($b3)
    {
        $this->b3 = $b3;

        return $this;
    }

    /**
     * Get b3
     *
     * @return string 
     */
    public function getB3()
    {
        return $this->b3;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Slider
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

    /**
     * Set ordre
     *
     * @param integer $ordre
     * @return Slider
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;

        return $this;
    }

    /**
     * Get ordre
     *
     * @return integer 
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     * @return Slider
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime 
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }
	
	public function getAbsolutePath()
	{
		return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
	}
	
	public function getWebPath()
	{
		return null === $this->path ? null : $this->getUploadDir().'/'.$this->path;
	}
	
	protected function getUploadRootDir()
	{
		// le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
		return __DIR__.'/../../../../root/'.$this->getUploadDir();
	}
	protected function getUploadDir()
	{
		// on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
		// le document/image dans la vue.
		return 'images/slider';
	}
	public function upload()
	{
		if (null === $this->file) {
			return;
		}
		$this->setPath($this->file->getClientOriginalName());
		$this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());
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
	
    public function getFile()
    {
        return $this->file;
    }


    /**
     * Set categorie
     *
     * @param integer $categorie
     * @return Slider
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return integer 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}

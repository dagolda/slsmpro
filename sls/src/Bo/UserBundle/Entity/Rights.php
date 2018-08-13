<?php
namespace Bo\UserBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Bo\UserBundle\Repository\RightsRepository")
 */
class Rights
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
    /**
    * @ORM\ManyToOne(targetEntity="\Bo\AdminBundle\Entity\Rubric")
	* @ORM\JoinColumn(name="idrubric",referencedColumnName="id",nullable=true)
    */  
    protected $rubric;
	
    /**
    * @ORM\ManyToOne(targetEntity="\Bo\AdminBundle\Entity\SubRubric")
	* @ORM\JoinColumn(name="idsubrubric",referencedColumnName="id",nullable=true)
    */  
    protected $subrubric;
		
    /**
     * @ORM\Column(type="integer")
     */
    protected $active;

    /**
     * @ORM\Column(type="integer")
     */
    protected $liste;	

    /**
     * @ORM\Column(type="integer")
     */
    protected $creation;
	
    /**
     * @ORM\Column(type="integer")
     */
    protected $edit;
	
    /**
     * @ORM\Column(type="integer")
     */
    protected $ddelete;
	
    /**
     * @ORM\Column(type="integer")
     */
    protected $search;
	
    /**
     * @ORM\Column(type="integer")
     */
    protected $others;
	
    /**
    * @ORM\Column(type="integer")
    */    
    protected $idprofil;

    public function __construct()
    {
		$this->liste=$this->search=1;
        $this->active=$this->creation=$this->edit=$this->ddelete=$this->others= 0;
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
     * Set active
     *
     * @param integer $active
     *
     * @return Rights
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return integer
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set creation
     *
     * @param integer $creation
     *
     * @return Rights
     */
    public function setCreation($creation)
    {
        $this->creation = $creation;

        return $this;
    }

    /**
     * Get creation
     *
     * @return integer
     */
    public function getCreation()
    {
        return $this->creation;
    }

    /**
     * Set edit
     *
     * @param integer $edit
     *
     * @return Rights
     */
    public function setEdit($edit)
    {
        $this->edit = $edit;

        return $this;
    }

    /**
     * Get edit
     *
     * @return integer
     */
    public function getEdit()
    {
        return $this->edit;
    }

    /**
     * Set search
     *
     * @param integer $search
     *
     * @return Rights
     */
    public function setSearch($search)
    {
        $this->search = $search;

        return $this;
    }

    /**
     * Get search
     *
     * @return integer
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * Set others
     *
     * @param integer $others
     *
     * @return Rights
     */
    public function setOthers($others)
    {
        $this->others = $others;

        return $this;
    }

    /**
     * Get others
     *
     * @return integer
     */
    public function getOthers()
    {
        return $this->others;
    }

    /**
     * Set idprofil
     *
     * @param integer $idprofil
     *
     * @return Rights
     */
    public function setIdprofil($idprofil)
    {
        $this->idprofil = $idprofil;

        return $this;
    }

    /**
     * Get idprofil
     *
     * @return integer
     */
    public function getIdprofil()
    {
        return $this->idprofil;
    }

    /**
     * Set ddelete
     *
     * @param integer $ddelete
     *
     * @return Rights
     */
    public function setDdelete($ddelete)
    {
        $this->ddelete = $ddelete;

        return $this;
    }

    /**
     * Get ddelete
     *
     * @return integer
     */
    public function getDdelete()
    {
        return $this->ddelete;
    }

    /**
     * Set rubric
     *
     * @param \Bo\AdminBundle\Entity\Rubric $rubric
     *
     * @return Rights
     */
    public function setRubric(\Bo\AdminBundle\Entity\Rubric $rubric = null)
    {
        $this->rubric = $rubric;

        return $this;
    }

    /**
     * Get rubric
     *
     * @return \Bo\AdminBundle\Entity\Rubric
     */
    public function getRubric()
    {
        return $this->rubric;
    }

    /**
     * Set subrubric
     *
     * @param \Bo\AdminBundle\Entity\SubRubric $subrubric
     *
     * @return Rights
     */
    public function setSubrubric(\Bo\AdminBundle\Entity\SubRubric $subrubric = null)
    {
        $this->subrubric = $subrubric;

        return $this;
    }

    /**
     * Get subrubric
     *
     * @return \Bo\AdminBundle\Entity\SubRubric
     */
    public function getSubrubric()
    {
        return $this->subrubric;
    }

    /**
     * Set liste
     *
     * @param integer $liste
     *
     * @return Rights
     */
    public function setListe($liste)
    {
        $this->liste = $liste;

        return $this;
    }

    /**
     * Get liste
     *
     * @return integer
     */
    public function getListe()
    {
        return $this->liste;
    }
}

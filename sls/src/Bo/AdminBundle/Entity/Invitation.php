<?php
/*
* Date Création: 31/08/2017
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Invitation.php
* Description: Entity of Teacher Invitation - Agenda
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="adm_invitation")
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\InvitationRepository")
 */
class Invitation 
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
    * @ORM\Column(type="integer")
    */   
    // if regular contract = 1, substitution = 2 
    private $category;

    /**
    * @ORM\ManyToOne(targetEntity="Agenda", inversedBy="invitation")
    */    
    private $agenda;

    /**
    * @ORM\Column(type="string",length=3000, nullable=true)
    */
    private $content;

    /**
    * @ORM\Column(type="integer")
    */
    //0=sent; 1=accepted; 2=rejected
    private $status;	
					
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $createdby;
		
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
	$this->status=0;
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
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Invitation
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Invitation
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
     * Set createdby
     *
     * @param string $createdby
     *
     * @return Invitation
     */
    public function setCreatedby($createdby)
    {
        $this->createdby = $createdby;

        return $this;
    }

    /**
     * Get createdby
     *
     * @return string
     */
    public function getCreatedby()
    {
        return $this->createdby;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Invitation
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
     * Set category
     *
     * @param integer $category
     *
     * @return Invitation
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return integer
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * Set agenda
     *
     * @param \Bo\AdminBundle\Entity\Agenda $agenda
     *
     * @return Invitation
     */
    public function setAgenda(\Bo\AdminBundle\Entity\Agenda $agenda = null)
    {
        $this->agenda = $agenda;

        return $this;
    }

    /**
     * Get agenda
     *
     * @return \Bo\AdminBundle\Entity\Agenda
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Invitation
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
}

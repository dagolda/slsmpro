<?php
/*
* Date Création: 20/03/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : TsValidation.php
* Description: Liste des TsValidations
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="adm_tsvalidation")
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\TsValidationRepository")
*/
class TsValidation 
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
	  
    /**
     * @ORM\ManyToOne(targetEntity="Bo\AdminBundle\Entity\Timesheet")
	 * @ORM\JoinColumn(name="idtimesheet",referencedColumnName="id", nullable=true)
     */      
    private $timesheet;	

    /**
     * @ORM\Column(type="string",length=255)
     */    
    private $motif;
	
    /**
     * @ORM\Column(type="string",length=1000,nullable=true)
	 * @Assert\NotBlank(message="You must enter a comment")
     */    
    private $comment;
				
    /**
    * @ORM\Column(type="string",length=255)
    */
	private $validator;	
					
    /**
    * @ORM\Column(type="string",length=255)
    */
	//Par mail ou par interface clic manager
	private $canal;	
			
    /**
    * @ORM\Column(type="string",length=255)
    */
	//validation Status
	private $status;	
	
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
     * Set motif
     *
     * @param string $motif
     *
     * @return TsValidation
     */
    public function setMotif($motif)
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get motif
     *
     * @return string
     */
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return TsValidation
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set validator
     *
     * @param string $validator
     *
     * @return TsValidation
     */
    public function setValidator($validator)
    {
        $this->validator = $validator;

        return $this;
    }

    /**
     * Get validator
     *
     * @return string
     */
    public function getValidator()
    {
        return $this->validator;
    }

    /**
     * Set canal
     *
     * @param string $canal
     *
     * @return TsValidation
     */
    public function setCanal($canal)
    {
        $this->canal = $canal;

        return $this;
    }

    /**
     * Get canal
     *
     * @return string
     */
    public function getCanal()
    {
        return $this->canal;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return TsValidation
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return TsValidation
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
     * Set timesheet
     *
     * @param \Bo\AdminBundle\Entity\Timesheet $timesheet
     *
     * @return TsValidation
     */
    public function setTimesheet(\Bo\AdminBundle\Entity\Timesheet $timesheet = null)
    {
        $this->timesheet = $timesheet;

        return $this;
    }

    /**
     * Get timesheet
     *
     * @return \Bo\AdminBundle\Entity\Timesheet
     */
    public function getTimesheet()
    {
        return $this->timesheet;
    }
}

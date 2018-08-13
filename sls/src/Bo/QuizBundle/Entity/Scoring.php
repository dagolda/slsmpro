<?php
/*
* Date Création: 31/07/2017
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : scoring.php
* Description: Scoring of quiz
*/
namespace Bo\QuizBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="qz_scoring")
* @ORM\Entity(repositoryClass="Bo\QuizBundle\Repository\ScoringRepository")
*/
class Scoring
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
    private $language;

    /**
    * @ORM\Column(type="string",length=255)
    */    
    private $letter;
    
    /**
    * @ORM\Column(type="integer")
    */
    //number of question require
    protected $noq;
  
    /**
    * @ORM\Column(type="integer")
    */
    protected $binf;
  
    /**
    * @ORM\Column(type="integer")
    */
    protected $bsup;
		
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
     * Set language
     *
     * @param string $language
     *
     * @return Scoring
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
     * Set noq
     *
     * @param integer $noq
     *
     * @return Scoring
     */
    public function setNoq($noq)
    {
        $this->noq = $noq;

        return $this;
    }

    /**
     * Get noq
     *
     * @return integer
     */
    public function getNoq()
    {
        return $this->noq;
    }

    /**
     * Set binf
     *
     * @param integer $binf
     *
     * @return Scoring
     */
    public function setBinf($binf)
    {
        $this->binf = $binf;

        return $this;
    }

    /**
     * Get binf
     *
     * @return integer
     */
    public function getBinf()
    {
        return $this->binf;
    }

    /**
     * Set bsup
     *
     * @param integer $bsup
     *
     * @return Scoring
     */
    public function setBsup($bsup)
    {
        $this->bsup = $bsup;

        return $this;
    }

    /**
     * Get bsup
     *
     * @return integer
     */
    public function getBsup()
    {
        return $this->bsup;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Scoring
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
     * Set letter
     *
     * @param string $letter
     *
     * @return Scoring
     */
    public function setLetter($letter)
    {
        $this->letter = $letter;

        return $this;
    }

    /**
     * Get letter
     *
     * @return string
     */
    public function getLetter()
    {
        return $this->letter;
    }
}

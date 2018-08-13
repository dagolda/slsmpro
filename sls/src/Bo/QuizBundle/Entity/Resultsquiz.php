<?php
/*
* Date Création: 21/07/2017
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Resultsquiz.php
* Description: results of the quiz 
*/
namespace Bo\QuizBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="qz_resultsquiz")
 * @ORM\Entity(repositoryClass="Bo\QuizBundle\Repository\ResultsquizRepository")
 */
class Resultsquiz
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Evalquiz", inversedBy="resultsquiz")
     */
    protected $evalquiz;

    /**
     * @ORM\Column(type="integer")
     */
    private $iduser;

    /**
     * @ORM\Column(type="integer")
     */
    private $idquiz;

    /**
     * @ORM\OneToMany(targetEntity="Resultsanswer", mappedBy="resultsquiz", cascade="remove")
     */
    protected $resultsanswer;

    /**
    * @ORM\Column(type="decimal", scale=2, nullable=true)
    */
    private $result;

    /**
    * @ORM\Column(type="datetime", nullable=true)
    */    
    private $start;	

    /**
    * @ORM\Column(type="datetime", nullable=true)
    */    
    private $end;	

    /**
    * @ORM\Column(type="string", nullable=true)
    */
    private $ttime; //en minutes
	
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
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Resultsquiz
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
     * Set result
     *
     * @param string $result
     *
     * @return Resultsquiz
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Add resultsanswer
     *
     * @param \Bo\QuizBundle\Entity\Resultsanswer $resultsanswer
     *
     * @return Resultsquiz
     */
    public function addResultsanswer(\Bo\QuizBundle\Entity\Resultsanswer $resultsanswer)
    {
        $this->resultsanswer[] = $resultsanswer;

        return $this;
    }

    /**
     * Remove resultsanswer
     *
     * @param \Bo\QuizBundle\Entity\Resultsanswer $resultsanswer
     */
    public function removeResultsanswer(\Bo\QuizBundle\Entity\Resultsanswer $resultsanswer)
    {
        $this->resultsanswer->removeElement($resultsanswer);
    }

    /**
     * Get resultsanswer
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getResultsanswer()
    {
        return $this->resultsanswer;
    }

    /**
     * Set evalquiz
     *
     * @param \Bo\QuizBundle\Entity\Evalquiz $evalquiz
     *
     * @return Resultsquiz
     */
    public function setEvalquiz(\Bo\QuizBundle\Entity\Evalquiz $evalquiz = null)
    {
        $this->evalquiz = $evalquiz;

        return $this;
    }

    /**
     * Get evalquiz
     *
     * @return \Bo\QuizBundle\Entity\Evalquiz
     */
    public function getEvalquiz()
    {
        return $this->evalquiz;
    }

    /**
     * Set iduser
     *
     * @param integer $iduser
     *
     * @return Resultsquiz
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return integer
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set ttime
     *
     * @param string $ttime
     *
     * @return Resultsquiz
     */
    public function setTtime($ttime)
    {
        $this->ttime = $ttime;

        return $this;
    }

    /**
     * Get ttime
     *
     * @return string
     */
    public function getTtime()
    {
        return $this->ttime;
    }

    /**
     * Set start
     *
     * @param \DateTime $start
     *
     * @return Resultsquiz
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     *
     * @return Resultsquiz
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Add quiz
     *
     * @param \Bo\QuizBundle\Entity\Quiz $quiz
     *
     * @return Resultsquiz
     */
    public function addQuiz(\Bo\QuizBundle\Entity\Quiz $quiz)
    {
        $this->quiz[] = $quiz;

        return $this;
    }

    /**
     * Remove quiz
     *
     * @param \Bo\QuizBundle\Entity\Quiz $quiz
     */
    public function removeQuiz(\Bo\QuizBundle\Entity\Quiz $quiz)
    {
        $this->quiz->removeElement($quiz);
    }

    /**
     * Set idquiz
     *
     * @param integer $idquiz
     *
     * @return Resultsquiz
     */
    public function setIdquiz($idquiz)
    {
        $this->idquiz = $idquiz;

        return $this;
    }

    /**
     * Get idquiz
     *
     * @return integer
     */
    public function getIdquiz()
    {
        return $this->idquiz;
    }
}

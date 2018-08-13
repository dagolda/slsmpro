<?php

/*
* Date Création: 21/07/2017
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Resultsquiz.php
* Description: results of the evaluation 
*/
namespace Bo\QuizBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="qz_resultsanswer")
 */
class Resultsanswer
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Resultsquiz", inversedBy="resultsanswer")
     */
    protected $resultsquiz;

    /**
     * @ORM\ManyToOne(targetEntity="Question")
     */
    protected $question;

    /**
     * @ORM\ManyToOne(targetEntity="Answer")
     */
    protected $answer;

    /**
    * @ORM\Column(type="decimal", scale=2, nullable=true)
    */
    private $result;
	
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
     * Set result
     *
     * @param string $result
     *
     * @return Resultsanswer
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
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Resultsanswer
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
     * Set resultsquiz
     *
     * @param \Bo\QuizBundle\Entity\Resultsquiz $resultsquiz
     *
     * @return Resultsanswer
     */
    public function setResultsquiz(\Bo\QuizBundle\Entity\Resultsquiz $resultsquiz = null)
    {
        $this->resultsquiz = $resultsquiz;

        return $this;
    }

    /**
     * Get resultsquiz
     *
     * @return \Bo\QuizBundle\Entity\Resultsquiz
     */
    public function getResultsquiz()
    {
        return $this->resultsquiz;
    }

    /**
     * Set question
     *
     * @param \Bo\QuizBundle\Entity\Question $question
     *
     * @return Resultsanswer
     */
    public function setQuestion(\Bo\QuizBundle\Entity\Question $question = null)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \Bo\QuizBundle\Entity\Question
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set answer
     *
     * @param \Bo\QuizBundle\Entity\Answer $answer
     *
     * @return Resultsanswer
     */
    public function setAnswer(\Bo\QuizBundle\Entity\Answer $answer = null)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return \Bo\QuizBundle\Entity\Answer
     */
    public function getAnswer()
    {
        return $this->answer;
    }
}

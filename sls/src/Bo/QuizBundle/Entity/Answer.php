<?php

namespace Bo\QuizBundle\Entity;

use Bo\QuizBundle\Model\Answers\Answer as BaseAnswer;
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity(repositoryClass="Bo\QuizBundle\Repository\AnswerRepository")
 * @ORM\Table (name="qz_answer")
 */
class Answer
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
    /**
     * @ORM\Column(type="integer")
     */
    private $idquiz;

    /**
     * @ORM\ManyToOne(targetEntity="Question", inversedBy="answer")
     */
    protected $question;

    /**
     *  @ORM\Column(type="string", nullable=true)
     */
    protected $response;
	
    /**
     * @ORM\Column(type="boolean")
     */
    private $choice;

    /**
     *  @ORM\Column(type="datetime", nullable=false)
     */
    protected $creationdate;

    public function __construct()
    {
        $this->creationdate = new \DateTime();
	$this->choice = false;
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
     * Set response
     *
     * @param \stdClass $response
     *
     * @return Answer
     */
    public function setResponse($response)
    {
        $this->response = $response;

        return $this;
    }

    /**
     * Get response
     *
     * @return \stdClass
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Answer
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
     * Set question
     *
     * @param \Bo\QuizBundle\Entity\Question $question
     *
     * @return Answer
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
     * Set choice
     *
     * @param boolean $choice
     *
     * @return Answer
     */
    public function setChoice($choice)
    {
        $this->choice = $choice;

        return $this;
    }

    /**
     * Get choice
     *
     * @return boolean
     */
    public function getChoice()
    {
        return $this->choice;
    }

    /**
     * Set idquiz
     *
     * @param integer $idquiz
     *
     * @return Answer
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

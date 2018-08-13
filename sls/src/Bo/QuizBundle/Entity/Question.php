<?php
namespace Bo\QuizBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 *
 * @ORM\Entity
 * @ORM\Table (name="qz_question")
 * @ORM\Entity(repositoryClass="Bo\QuizBundle\Repository\QuestionRepository")
 */

class Question
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToMany(targetEntity="Quiz", mappedBy="question")
     */
    protected $quiz;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    protected $qorder;

    /**
     * @ORM\Column(type="text")
     */
    protected $content;

    /**
     * @ORM\OneToMany(targetEntity="Answer", mappedBy="question")
     */
    protected $answer;

    /**
    * @ORM\Column(type="decimal", scale=2)
    */
    private $score=1.00;

    /**
     * @ORM\Column(type="integer")
     */
    //number of answer require. Default 4
    protected $noa;


    public function __construct()
    {
        $this->quizes = new ArrayCollection;
	$this->noa = 4;
	$this->note = 1.00;
    }

    /**
     * Add answer
     *
     * @param \Bo\QuizBundle\Entity\Answer $answer
     *
     * @return Question
     */
    public function addAnswer(\Bo\QuizBundle\Entity\Answer $answer)
    {
        $this->answer[] = $answer;

        return $this;
    }

    /**
     * Remove answer
     *
     * @param \Bo\QuizBundle\Entity\Answer $answer
     */
    public function removeAnswer(\Bo\QuizBundle\Entity\Answer $answer)
    {
        $this->answer->removeElement($answer);
    }

    /**
     * Get answer
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Question
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

    /**
     * Add quiz
     *
     * @param \Bo\QuizBundle\Entity\Quiz $quiz
     *
     * @return Question
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
     * Get quiz
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuiz()
    {
        return $this->quiz;
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
     * @return Question
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
     * Set noa
     *
     * @param integer $noa
     *
     * @return Question
     */
    public function setNoa($noa)
    {
        $this->noa = $noa;

        return $this;
    }

    /**
     * Get noa
     *
     * @return integer
     */
    public function getNoa()
    {
        return $this->noa;
    }

    /**
     * Set score
     *
     * @param string $score
     *
     * @return Question
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return string
     */
    public function getScore()
    {
        return $this->score;
    }



    /**
     * Set qorder
     *
     * @param string $qorder
     *
     * @return Question
     */
    public function setQorder($qorder)
    {
        $this->qorder = $qorder;

        return $this;
    }

    /**
     * Get qorder
     *
     * @return string
     */
    public function getQorder()
    {
        return $this->qorder;
    }
}

<?php
namespace Bo\QuizBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table (name="qz_quiz")
 * @ORM\Entity(repositoryClass="Bo\QuizBundle\Repository\QuizRepository")
 */
class Quiz
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $name;

    /**
    * @ORM\ManyToMany(targetEntity="Question", inversedBy="quiz")
    * @ORM\JoinTable(name="quiz_question")
    */
    protected $questions;

    /**
    * @ORM\ManyToMany(targetEntity="Category", inversedBy="quiz")
    * @ORM\JoinTable(name="quiz_category")
    */
    protected $category;

    /**
    * @ORM\ManyToOne(targetEntity="Typequiz")
    * @ORM\JoinColumn(name="idtype",referencedColumnName="id")
    */
    protected $type;

    /**
     * @ORM\Column(type="integer")
     */
    //number of question require
    protected $noq;

    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $language;

    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $createby;

    /**
    * @ORM\Column(type="datetime", nullable=true)
    */    
    private $creationdate;


    public function __construct()
    {
	$this->creationdate=new \DateTime();
        $this->questions = new \Doctrine\Common\Collections\ArrayCollection();
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
     */
    public function setName($name)
    {
        $this->name = $name;
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
     *  Get Quiz questions
     *
     *  @return Doctrine\Common\Collections\ArrayCollection
     */
    public function getQuestions()
    {
        return $this->questions;
    }


    public function __toString()
    {
        return (string)$this->getId();
    }


    /**
     * Set createby
     *
     * @param string $createby
     *
     * @return Quiz
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
     * Add question
     *
     * @param \Bo\QuizBundle\Entity\Question $question
     *
     * @return Quiz
     */
    public function addQuestion(\Bo\QuizBundle\Entity\Question $question)
    {
        $this->questions[] = $question;

        return $this;
    }

    /**
     * Remove question
     *
     * @param \Bo\QuizBundle\Entity\Question $question
     */
    public function removeQuestion(\Bo\QuizBundle\Entity\Question $question)
    {
        $this->questions->removeElement($question);
    }

    /**
     * Set noq
     *
     * @param integer $noq
     *
     * @return Quiz
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
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Quiz
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
     * Set type
     *
     * @param \Bo\QuizBundle\Entity\Typequiz $type
     *
     * @return Quiz
     */
    public function setType(\Bo\QuizBundle\Entity\Typequiz $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Bo\QuizBundle\Entity\Typequiz
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return Quiz
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
     * Add category
     *
     * @param \Bo\QuizBundle\Entity\Category $category
     *
     * @return Quiz
     */
    public function addCategory(\Bo\QuizBundle\Entity\Category $category)
    {
        $this->category[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \Bo\QuizBundle\Entity\Category $category
     */
    public function removeCategory(\Bo\QuizBundle\Entity\Category $category)
    {
        $this->category->removeElement($category);
    }

    /**
     * Get category
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategory()
    {
        return $this->category;
    }
}

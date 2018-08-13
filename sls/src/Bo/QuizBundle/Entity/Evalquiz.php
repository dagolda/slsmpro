<?php

/*
* Date Création: 18/07/2017
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Evalquiz.php
* Description: Evalquiz by quiz entity
*/
namespace Bo\QuizBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="qz_evalquiz")
*/
class Evalquiz
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $title;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="evalquiz")
     */
    protected $user;

    /**
    * @ORM\ManyToOne(targetEntity="Category", inversedBy="evalquiz")
    */
    protected $category;

    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $notification;

    /**
     * @ORM\OneToMany(targetEntity="Resultsquiz", mappedBy="evalquiz", cascade="remove")
     */
    protected $resultsquiz;

    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $result;

    /**
    * @ORM\Column(type="boolean")
    */
    private $done=false;

    /**
    * @ORM\Column(type="boolean")
    */
    private $dispresult;

    /**
    * @ORM\Column(type="text",length=10000, nullable=true)
    */
    private $confirmation;
	
    /**
    * @ORM\Column(type="datetime", nullable=true)
    */    
    private $evaldate;	

    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $createby;
	
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
	$this->done = false;
	$this->dispresult = false;
    }

    /**
    * Get id
    * @return integer
    */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set createby
     *
     * @param string $createby
     *
     * @return Evalquiz
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
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Evalquiz
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
     * Set user
     *
     * @param \Bo\QuizBundle\Entity\User $user
     *
     * @return Evalquiz
     */
    public function setUser(\Bo\QuizBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Bo\QuizBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set category
     *
     * @param \Bo\QuizBundle\Entity\Category $category
     *
     * @return Evalquiz
     */
    public function setCategory(\Bo\QuizBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Bo\QuizBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set notification
     *
     * @param string $notification
     *
     * @return Evalquiz
     */
    public function setNotification($notification)
    {
        $this->notification = $notification;

        return $this;
    }

    /**
     * Get notification
     *
     * @return string
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * Set result
     *
     * @param string $result
     *
     * @return Evalquiz
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
     * Set confirmation
     *
     * @param string $confirmation
     *
     * @return Evalquiz
     */
    public function setConfirmation($confirmation)
    {
        $this->confirmation = $confirmation;

        return $this;
    }

    /**
     * Get confirmation
     *
     * @return string
     */
    public function getConfirmation()
    {
        return $this->confirmation;
    }

    /**
     * Set evaldate
     *
     * @param \DateTime $evaldate
     *
     * @return Evalquiz
     */
    public function setEvaldate($evaldate)
    {
        $this->evaldate = $evaldate;

        return $this;
    }

    /**
     * Get evaldate
     *
     * @return \DateTime
     */
    public function getEvaldate()
    {
        return $this->evaldate;
    }

    /**
     * Set done
     *
     * @param boolean $done
     *
     * @return Evalquiz
     */
    public function setDone($done)
    {
        $this->done = $done;

        return $this;
    }

    /**
     * Get done
     *
     * @return boolean
     */
    public function getDone()
    {
        return $this->done;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Evalquiz
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Add resultsquiz
     *
     * @param \Bo\QuizBundle\Entity\Resultsquiz $resultsquiz
     *
     * @return Evalquiz
     */
    public function addResultsquiz(\Bo\QuizBundle\Entity\Resultsquiz $resultsquiz)
    {
        $this->resultsquiz[] = $resultsquiz;

        return $this;
    }

    /**
     * Remove resultsquiz
     *
     * @param \Bo\QuizBundle\Entity\Resultsquiz $resultsquiz
     */
    public function removeResultsquiz(\Bo\QuizBundle\Entity\Resultsquiz $resultsquiz)
    {
        $this->resultsquiz->removeElement($resultsquiz);
    }

    /**
     * Get resultsquiz
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getResultsquiz()
    {
        return $this->resultsquiz;
    }

    /**
     * Set dispresult
     *
     * @param boolean $dispresult
     *
     * @return Evalquiz
     */
    public function setDispresult($dispresult)
    {
        $this->dispresult = $dispresult;

        return $this;
    }

    /**
     * Get dispresult
     *
     * @return boolean
     */
    public function getDispresult()
    {
        return $this->dispresult;
    }
}

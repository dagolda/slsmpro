<?php
/*
* Date Création: 18/07/2017
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : category.php
* Description: Category of quiz
*/
namespace Bo\QuizBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="qz_category")
* @ORM\Entity(repositoryClass="Bo\QuizBundle\Repository\CategoryRepository")
*/
class Category 
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
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="Quiz", mappedBy="category")
     */
    protected $quiz;
		
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
	
	public function __toString(){
		return $this->name;
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
     * Set name
     *
     * @param string $name
     *
     * @return Typets
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
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Typets
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
     * Add quiz
     *
     * @param \Bo\QuizBundle\Entity\Quiz $quiz
     *
     * @return Category
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
}

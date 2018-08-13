<?php
/*
* Date Création: 04/11/2016
* Author: N'VEKOUNOU Moise José
* File name : Evaluation.php
* Description: Client evaluation
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="adm_evaluation")
* @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\EvaluationRepository")
*/
class Evaluation
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
	  
    /**
    * @ORM\ManyToOne(targetEntity="Bo\AdminBundle\Entity\Employee")
    * @ORM\JoinColumn(name="idemployee",referencedColumnName="id", nullable=true)
    */      
    private $evaluator;	
	
    /**
    * @ORM\ManyToOne(targetEntity="Bo\AdminBundle\Entity\Students")
	* @ORM\JoinColumn(name="idstudents",referencedColumnName="id", nullable=true)
    */      
    private $students;	

    /**
     * @ORM\Column(type="string",length=255)
     */    
    private $situation;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $firstname;	
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $name;	

    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */    
    private $emailstudent;
	
    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */    
    private $sendto;

    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */    
    private $title;
	
    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */    
    private $phone;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $addresse;
		
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $currentprofile;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $customer;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $designation;		
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $contact;
	
    /**
    * @ORM\Column(type="string",length=25, nullable=true)
    */    
    private $ryacc;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $expenses;
			
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $phonecontact;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $emailcontact;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $billingcontact;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $billingphone;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $billingemail;
				
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $yearofgratduation;
				
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $targetprofile;
						
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
	//RC Test Result    
    private $rcresult;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
	//EE Test Result
    private $eeresult;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */ 
	//Full-time Group Starting point (Step and OF or TO)
    private $ftgroup;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
	//Number of hours recommended for FT Group Training    
    private $hourgroup;
		
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */  
	//Full-time Individual Starting Point (OF or TO)
    private $ftindividual;
		
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */   
	//Number of hours Recommended for FT Individual Training
    private $hourftindividual;
	
    /**
    * @ORM\Column(type="string",length=1200, nullable=true)
    */  
	//Number of hours Recommended for PT Individual Training	
    private $ptstarting;
				
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
	//Part-time Starting Point (OF or TO) if applicable
    private $hourptindividual;
					
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $oralunderstanding;
						
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $qualityofdiscourse;
						
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $prononciation;
							
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $grammar;
								
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $verbs;
									
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $vocabulary;
										
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $writencomprehension;
											
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $writenexpression;
											
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $syntaxe;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $evallocation;
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $campus;
	
    /**
    * @ORM\Column(type="date")
    */
    private $evaldate;	
		
    /**
    * @ORM\Column(type="time")
    */
    private $evaltime;	//start time
		
    /**
    /**
    * @ORM\Column(type="time", nullable=true)
    */
    private $endtime;

    /**
    * @ORM\Column(type="decimal", scale=2, nullable=true)
    */
    protected $duration;	
		
    /**
    * @ORM\Column(type="date", nullable=true)
    */
    private $sendevaldate;	
			
    /**
    * @ORM\Column(type="string",length=100, nullable=true)
    */
    private $typetime;
	   
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */    
    private $typeoftraining;
	
    /**
    * @ORM\Column(type="string",length=100, nullable=true)
    */    
    private $languages;
	
    /**
    * @ORM\Column(type="string",length=1000,nullable=true)
    */    
    private $comment;	
	
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $evaltype;	
	
    /**
    * @ORM\Column(type="string",length=255,nullable=true)
    */    
    private $options;	
	
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $createby;	
	
    /**
    * @ORM\Column(type="integer")
    */    
    //1=>Request; 11=>Confirmation sent; 2=>Evaluation done; 21=>Pdf generate; 3=>Result sent;
    private $status;
	
    /**
    * @ORM\Column(type="boolean", nullable=true)
    */    
    private $paid;
	
    /**
    * @ORM\Column(type="datetime", nullable=true)
    */    
    private $paiddate;
	
    /**
    * @ORM\Column(type="datetime")
    */    
    private $creationdate;
					
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $confirmation;
					
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $pdffile;

    /**
    * @ORM\Column(type="datetime", nullable=true)
    */    
    private $pdfdate;

    /*Begin Evaluation on line*/

    /**
     * @ORM\OneToOne(targetEntity="Bo\QuizBundle\Entity\Evalquiz", cascade="remove")
     */
    protected $evalquiz;
					
    /**
    * @ORM\Column(type="string",length=255, nullable=true)
    */
    private $notification;

    /**
    * @ORM\Column(type="boolean")
    */
    private $online;

    /*End User quiz on line*/
	
    /**
    * Constructor
    */
    public function __construct()
    {
	$this->creationdate=$this->evaldate=new \DateTime();
	$this->evaltime = new \DateTime();
	$this->status = 1;
	$this->paid = 0;
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
     * Set title
     *
     * @param string $title
     *
     * @return Evaluation
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
     * Set phone
     *
     * @param string $phone
     *
     * @return Evaluation
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set addresse
     *
     * @param string $addresse
     *
     * @return Evaluation
     */
    public function setAddresse($addresse)
    {
        $this->addresse = $addresse;

        return $this;
    }

    /**
     * Get addresse
     *
     * @return string
     */
    public function getAddresse()
    {
        return $this->addresse;
    }

    /**
     * Set currentprofile
     *
     * @param string $currentprofile
     *
     * @return Evaluation
     */
    public function setCurrentprofile($currentprofile)
    {
        $this->currentprofile = $currentprofile;

        return $this;
    }

    /**
     * Get currentprofile
     *
     * @return string
     */
    public function getCurrentprofile()
    {
        return $this->currentprofile;
    }

    /**
     * Set customer
     *
     * @param string $customer
     *
     * @return Evaluation
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return string
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set contact
     *
     * @param string $contact
     *
     * @return Evaluation
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set phonecontact
     *
     * @param string $phonecontact
     *
     * @return Evaluation
     */
    public function setPhonecontact($phonecontact)
    {
        $this->phonecontact = $phonecontact;

        return $this;
    }

    /**
     * Get phonecontact
     *
     * @return string
     */
    public function getPhonecontact()
    {
        return $this->phonecontact;
    }

    /**
     * Set yearofgratduation
     *
     * @param string $yearofgratduation
     *
     * @return Evaluation
     */
    public function setYearofgratduation($yearofgratduation)
    {
        $this->yearofgratduation = $yearofgratduation;

        return $this;
    }

    /**
     * Get yearofgratduation
     *
     * @return string
     */
    public function getYearofgratduation()
    {
        return $this->yearofgratduation;
    }

    /**
     * Set targetprofile
     *
     * @param string $targetprofile
     *
     * @return Evaluation
     */
    public function setTargetprofile($targetprofile)
    {
        $this->targetprofile = $targetprofile;

        return $this;
    }

    /**
     * Get targetprofile
     *
     * @return string
     */
    public function getTargetprofile()
    {
        return $this->targetprofile;
    }

    /**
     * Set result
     *
     * @param string $result
     *
     * @return Evaluation
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
     * Set notes
     *
     * @param string $notes
     *
     * @return Evaluation
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set oralunderstanding
     *
     * @param string $oralunderstanding
     *
     * @return Evaluation
     */
    public function setOralunderstanding($oralunderstanding)
    {
        $this->oralunderstanding = $oralunderstanding;

        return $this;
    }

    /**
     * Get oralunderstanding
     *
     * @return string
     */
    public function getOralunderstanding()
    {
        return $this->oralunderstanding;
    }

    /**
     * Set qualityofdiscourse
     *
     * @param string $qualityofdiscourse
     *
     * @return Evaluation
     */
    public function setQualityofdiscourse($qualityofdiscourse)
    {
        $this->qualityofdiscourse = $qualityofdiscourse;

        return $this;
    }

    /**
     * Get qualityofdiscourse
     *
     * @return string
     */
    public function getQualityofdiscourse()
    {
        return $this->qualityofdiscourse;
    }

    /**
     * Set prononciation
     *
     * @param string $prononciation
     *
     * @return Evaluation
     */
    public function setPrononciation($prononciation)
    {
        $this->prononciation = $prononciation;

        return $this;
    }

    /**
     * Get prononciation
     *
     * @return string
     */
    public function getPrononciation()
    {
        return $this->prononciation;
    }

    /**
     * Set grammar
     *
     * @param string $grammar
     *
     * @return Evaluation
     */
    public function setGrammar($grammar)
    {
        $this->grammar = $grammar;

        return $this;
    }

    /**
     * Get grammar
     *
     * @return string
     */
    public function getGrammar()
    {
        return $this->grammar;
    }

    /**
     * Set verbs
     *
     * @param string $verbs
     *
     * @return Evaluation
     */
    public function setVerbs($verbs)
    {
        $this->verbs = $verbs;

        return $this;
    }

    /**
     * Get verbs
     *
     * @return string
     */
    public function getVerbs()
    {
        return $this->verbs;
    }

    /**
     * Set vocabulary
     *
     * @param string $vocabulary
     *
     * @return Evaluation
     */
    public function setVocabulary($vocabulary)
    {
        $this->vocabulary = $vocabulary;

        return $this;
    }

    /**
     * Get vocabulary
     *
     * @return string
     */
    public function getVocabulary()
    {
        return $this->vocabulary;
    }

    /**
     * Set writencomprehension
     *
     * @param string $writencomprehension
     *
     * @return Evaluation
     */
    public function setWritencomprehension($writencomprehension)
    {
        $this->writencomprehension = $writencomprehension;

        return $this;
    }

    /**
     * Get writencomprehension
     *
     * @return string
     */
    public function getWritencomprehension()
    {
        return $this->writencomprehension;
    }

    /**
     * Set writenexpression
     *
     * @param string $writenexpression
     *
     * @return Evaluation
     */
    public function setWritenexpression($writenexpression)
    {
        $this->writenexpression = $writenexpression;

        return $this;
    }

    /**
     * Get writenexpression
     *
     * @return string
     */
    public function getWritenexpression()
    {
        return $this->writenexpression;
    }

    /**
     * Set syntaxe
     *
     * @param string $syntaxe
     *
     * @return Evaluation
     */
    public function setSyntaxe($syntaxe)
    {
        $this->syntaxe = $syntaxe;

        return $this;
    }

    /**
     * Get syntaxe
     *
     * @return string
     */
    public function getSyntaxe()
    {
        return $this->syntaxe;
    }

    /**
     * Set evaldate
     *
     * @param \DateTime $evaldate
     *
     * @return Evaluation
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
     * Set comment
     *
     * @param string $comment
     *
     * @return Evaluation
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
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Evaluation
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
     * Set employee
     *
     * @param \Bo\AdminBundle\Entity\Employee $employee
     *
     * @return Evaluation
     */
    public function setEmployee(\Bo\AdminBundle\Entity\Employee $employee = null)
    {
        $this->employee = $employee;

        return $this;
    }

    /**
     * Get employee
     *
     * @return \Bo\AdminBundle\Entity\Employee
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * Set students
     *
     * @param \Bo\AdminBundle\Entity\Students $students
     *
     * @return Evaluation
     */
    public function setStudents(\Bo\AdminBundle\Entity\Students $students = null)
    {
        $this->students = $students;

        return $this;
    }

    /**
     * Get students
     *
     * @return \Bo\AdminBundle\Entity\Students
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * Set evallocation
     *
     * @param string $evallocation
     *
     * @return Evaluation
     */
    public function setEvallocation($evallocation)
    {
        $this->evallocation = $evallocation;

        return $this;
    }

    /**
     * Get evallocation
     *
     * @return string
     */
    public function getEvallocation()
    {
        return $this->evallocation;
    }

    /**
     * Set sendevaldate
     *
     * @param \DateTime $sendevaldate
     *
     * @return Evaluation
     */
    public function setSendevaldate($sendevaldate)
    {
        $this->sendevaldate = $sendevaldate;

        return $this;
    }

    /**
     * Get sendevaldate
     *
     * @return \DateTime
     */
    public function getSendevaldate()
    {
        return $this->sendevaldate;
    }

    /**
     * Set typetime
     *
     * @param string $typetime
     *
     * @return Evaluation
     */
    public function setTypetime($typetime)
    {
        $this->typetime = $typetime;

        return $this;
    }

    /**
     * Get typetime
     *
     * @return string
     */
    public function getTypetime()
    {
        return $this->typetime;
    }

    /**
     * Set typeoftraining
     *
     * @param string $typeoftraining
     *
     * @return Evaluation
     */
    public function setTypeoftraining($typeoftraining)
    {
        $this->typeoftraining = $typeoftraining;

        return $this;
    }

    /**
     * Get typeoftraining
     *
     * @return string
     */
    public function getTypeoftraining()
    {
        return $this->typeoftraining;
    }

    /**
     * Set languages
     *
     * @param string $languages
     *
     * @return Evaluation
     */
    public function setLanguages($languages)
    {
        $this->languages = $languages;

        return $this;
    }

    /**
     * Get languages
     *
     * @return string
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Set emailstudent
     *
     * @param string $emailstudent
     *
     * @return Evaluation
     */
    public function setEmailstudent($emailstudent)
    {
        $this->emailstudent = $emailstudent;

        return $this;
    }

    /**
     * Get emailstudent
     *
     * @return string
     */
    public function getEmailstudent()
    {
        return $this->emailstudent;
    }

    /**
     * Set sendto
     *
     * @param string $sendto
     *
     * @return Evaluation
     */
    public function setSendto($sendto)
    {
        $this->sendto = $sendto;

        return $this;
    }

    /**
     * Get sendto
     *
     * @return string
     */
    public function getSendto()
    {
        return $this->sendto;
    }

    /**
     * Set designation
     *
     * @param string $designation
     *
     * @return Evaluation
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set ryacc
     *
     * @param string $ryacc
     *
     * @return Evaluation
     */
    public function setRyacc($ryacc)
    {
        $this->ryacc = $ryacc;

        return $this;
    }

    /**
     * Get ryacc
     *
     * @return string
     */
    public function getRyacc()
    {
        return $this->ryacc;
    }

    /**
     * Set expenses
     *
     * @param string $expenses
     *
     * @return Evaluation
     */
    public function setExpenses($expenses)
    {
        $this->expenses = $expenses;

        return $this;
    }

    /**
     * Get expenses
     *
     * @return string
     */
    public function getExpenses()
    {
        return $this->expenses;
    }

    /**
     * Set emailcontact
     *
     * @param string $emailcontact
     *
     * @return Evaluation
     */
    public function setEmailcontact($emailcontact)
    {
        $this->emailcontact = $emailcontact;

        return $this;
    }

    /**
     * Get emailcontact
     *
     * @return string
     */
    public function getEmailcontact()
    {
        return $this->emailcontact;
    }

    /**
     * Set billingcontact
     *
     * @param string $billingcontact
     *
     * @return Evaluation
     */
    public function setBillingcontact($billingcontact)
    {
        $this->billingcontact = $billingcontact;

        return $this;
    }

    /**
     * Get billingcontact
     *
     * @return string
     */
    public function getBillingcontact()
    {
        return $this->billingcontact;
    }

    /**
     * Set billingphone
     *
     * @param string $billingphone
     *
     * @return Evaluation
     */
    public function setBillingphone($billingphone)
    {
        $this->billingphone = $billingphone;

        return $this;
    }

    /**
     * Get billingphone
     *
     * @return string
     */
    public function getBillingphone()
    {
        return $this->billingphone;
    }

    /**
     * Set billingemail
     *
     * @param string $billingemail
     *
     * @return Evaluation
     */
    public function setBillingemail($billingemail)
    {
        $this->billingemail = $billingemail;

        return $this;
    }

    /**
     * Get billingemail
     *
     * @return string
     */
    public function getBillingemail()
    {
        return $this->billingemail;
    }

    /**
     * Set evaltime
     *
     * @param \DateTime $evaltime
     *
     * @return Evaluation
     */
    public function setEvaltime($evaltime)
    {
        $this->evaltime = $evaltime;

        return $this;
    }

    /**
     * Get evaltime
     *
     * @return \DateTime
     */
    public function getEvaltime()
    {
        return $this->evaltime;
    }

    /**
     * Set evaltype
     *
     * @param string $evaltype
     *
     * @return Evaluation
     */
    public function setEvaltype($evaltype)
    {
        $this->evaltype = $evaltype;

        return $this;
    }

    /**
     * Get evaltype
     *
     * @return string
     */
    public function getEvaltype()
    {
        return $this->evaltype;
    }

    /**
     * Set createby
     *
     * @param string $createby
     *
     * @return Evaluation
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
     * Set evaluator
     *
     * @param \Bo\AdminBundle\Entity\Employee $evaluator
     *
     * @return Evaluation
     */
    public function setEvaluator(\Bo\AdminBundle\Entity\Employee $evaluator = null)
    {
        $this->evaluator = $evaluator;

        return $this;
    }

    /**
     * Get evaluator
     *
     * @return \Bo\AdminBundle\Entity\Employee
     */
    public function getEvaluator()
    {
        return $this->evaluator;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Evaluation
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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Evaluation
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Evaluation
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
     * Set rcresult
     *
     * @param string $rcresult
     *
     * @return Evaluation
     */
    public function setRcresult($rcresult)
    {
        $this->rcresult = $rcresult;

        return $this;
    }

    /**
     * Get rcresult
     *
     * @return string
     */
    public function getRcresult()
    {
        return $this->rcresult;
    }

    /**
     * Set eeresult
     *
     * @param string $eeresult
     *
     * @return Evaluation
     */
    public function setEeresult($eeresult)
    {
        $this->eeresult = $eeresult;

        return $this;
    }

    /**
     * Get eeresult
     *
     * @return string
     */
    public function getEeresult()
    {
        return $this->eeresult;
    }

    /**
     * Set ftgroup
     *
     * @param string $ftgroup
     *
     * @return Evaluation
     */
    public function setFtgroup($ftgroup)
    {
        $this->ftgroup = $ftgroup;

        return $this;
    }

    /**
     * Get ftgroup
     *
     * @return string
     */
    public function getFtgroup()
    {
        return $this->ftgroup;
    }

    /**
     * Set hourgroup
     *
     * @param string $hourgroup
     *
     * @return Evaluation
     */
    public function setHourgroup($hourgroup)
    {
        $this->hourgroup = $hourgroup;

        return $this;
    }

    /**
     * Get hourgroup
     *
     * @return string
     */
    public function getHourgroup()
    {
        return $this->hourgroup;
    }

    /**
     * Set ftindividual
     *
     * @param string $ftindividual
     *
     * @return Evaluation
     */
    public function setFtindividual($ftindividual)
    {
        $this->ftindividual = $ftindividual;

        return $this;
    }

    /**
     * Get ftindividual
     *
     * @return string
     */
    public function getFtindividual()
    {
        return $this->ftindividual;
    }

    /**
     * Set hourftindividual
     *
     * @param string $hourftindividual
     *
     * @return Evaluation
     */
    public function setHourftindividual($hourftindividual)
    {
        $this->hourftindividual = $hourftindividual;

        return $this;
    }

    /**
     * Get hourftindividual
     *
     * @return string
     */
    public function getHourftindividual()
    {
        return $this->hourftindividual;
    }

    /**
     * Set hourptindividual
     *
     * @param string $hourptindividual
     *
     * @return Evaluation
     */
    public function setHourptindividual($hourptindividual)
    {
        $this->hourptindividual = $hourptindividual;

        return $this;
    }

    /**
     * Get hourptindividual
     *
     * @return string
     */
    public function getHourptindividual()
    {
        return $this->hourptindividual;
    }

    /**
     * Set ptstarting
     *
     * @param string $ptstarting
     *
     * @return Evaluation
     */
    public function setPtstarting($ptstarting)
    {
        $this->ptstarting = $ptstarting;

        return $this;
    }

    /**
     * Get ptstarting
     *
     * @return string
     */
    public function getPtstarting()
    {
        return $this->ptstarting;
    }

    /**
     * Set confirmation
     *
     * @param string $confirmation
     *
     * @return Evaluation
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
     * Set campus
     *
     * @param string $campus
     *
     * @return Evaluation
     */
    public function setCampus($campus)
    {
        $this->campus = $campus;

        return $this;
    }

    /**
     * Get campus
     *
     * @return string
     */
    public function getCampus()
    {
        return $this->campus;
    }

    /**
     * Set paid
     *
     * @param boolean $paid
     *
     * @return Evaluation
     */
    public function setPaid($paid)
    {
        $this->paid = $paid;

        return $this;
    }

    /**
     * Get paid
     *
     * @return boolean
     */
    public function getPaid()
    {
        return $this->paid;
    }

    /**
     * Set paiddate
     *
     * @param \DateTime $paiddate
     *
     * @return Evaluation
     */
    public function setPaiddate($paiddate)
    {
        $this->paiddate = $paiddate;

        return $this;
    }

    /**
     * Get paiddate
     *
     * @return \DateTime
     */
    public function getPaiddate()
    {
        return $this->paiddate;
    }

    /**
     * Set options
     *
     * @param string $options
     *
     * @return Evaluation
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Get options
     *
     * @return string
     */
    public function getOptions()
    {
        return $this->options;
    }
	/*
	*get status definition
	*/
	public function getStatusDef(){
		return array('1'=>"Request", '11'=>"Confirmation sent", '2'=>"Evaluation done", '21'=>"Pdf generated", '3'=>"Result sent");
	}
    /**
     * Set pdffile
     * @param string $pdffile
     * @return Evaluation
     */
    public function setPdffile($pdffile)
    {
        $this->pdffile = $pdffile;

        return $this;
    }

    /**
     * Get pdffile
     *
     * @return string
     */
    public function getPdffile()
    {
        return $this->pdffile;
    }

    /**
     * Set pdfdate
     *
     * @param \DateTime $pdfdate
     *
     * @return Evaluation
     */
    public function setPdfdate($pdfdate)
    {
        $this->pdfdate = $pdfdate;

        return $this;
    }

    /**
     * Get pdfdate
     *
     * @return \DateTime
     */
    public function getPdfdate()
    {
        return $this->pdfdate;
    }

    /**
     * Set notification
     *
     * @param string $notification
     *
     * @return Evaluation
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
     * Set situation
     *
     * @param string $situation
     *
     * @return Evaluation
     */
    public function setSituation($situation)
    {
        $this->situation = $situation;

        return $this;
    }

    /**
     * Get situation
     *
     * @return string
     */
    public function getSituation()
    {
        return $this->situation;
    }

    /**
     * Set online
     *
     * @param boolean $online
     *
     * @return Evaluation
     */
    public function setOnline($online)
    {
        $this->online = $online;

        return $this;
    }

    /**
     * Get online
     *
     * @return boolean
     */
    public function getOnline()
    {
        return $this->online;
    }


    /**
     * Set evalquiz
     *
     * @param \Bo\QuizBundle\Entity\Evalquiz $evalquiz
     *
     * @return Evaluation
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
     * Set endtime
     *
     * @param \DateTime $endtime
     *
     * @return Evaluation
     */
    public function setEndtime($endtime)
    {
        $this->endtime = $endtime;

        return $this;
    }

    /**
     * Get endtime
     *
     * @return \DateTime
     */
    public function getEndtime()
    {
        return $this->endtime;
    }

    /**
     * Set duration
     *
     * @param string $duration
     *
     * @return Evaluation
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }
}

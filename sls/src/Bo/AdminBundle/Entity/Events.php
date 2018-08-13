<?php
namespace Bo\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Repository\EventsRepository")
 * @ORM\Table(name="adm_events")
 */
class Events{

    /**
    * @ORM\Column(name="id", type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;

    /**
    * @ORM\Column(type="string",length=255)
    */    
    private $eventtype;
	
    /**
    * @ORM\Column(type="string",length=255)
    */    
    private $description;
		
    /**
    * @ORM\Column(type="string",length=255)
    */    
    private $location;
		
    /**
    * @ORM\ManyToOne(targetEntity="Group")
	* @ORM\JoinColumn(name="idgroup",referencedColumnName="id",nullable=true)
    */      
    private $group;			
	
    /**
    * @ORM\ManyToOne(targetEntity="Contracts")
	* @ORM\JoinColumn(name="idcontracts",referencedColumnName="id",nullable=true)
    */      
    private $contract;
		
    /**
    * @ORM\Column(type="date")
    */    
	private $startdate;	
			
    /**
    * @ORM\Column(type="date")
    */    
	private $enddate;

    /**
    * @ORM\Column(type="date")
    */    
	private $actualdate;		
	
    /**
    * @ORM\Column(type="time",nullable=true)
    */    
    private $startam;
	
    /**
    * @ORM\Column(type="time",nullable=true)
    */    
    private $endam;

    /**
    * @ORM\Column(type="time",nullable=true)
    */    
    private $startpm;
	
    /**
    * @ORM\Column(type="time",nullable=true)
    */    
    private $endpm;
	
    /**
    * @ORM\Column(type="string",length=7)
    */    
    private $hour;	

    /**
    * @ORM\ManyToMany(targetEntity="Absences", inversedBy="Events")
    * @ORM\JoinTable(name="events_absences")
    */    
    private $absences;

    /**
    * @ORM\ManyToMany(targetEntity="Substitution", inversedBy="Events")
    * @ORM\JoinTable(name="events_substitution")
    */    
    private $substitution;		
	
    /**
	 * @ORM\Column(type="integer")
     */ 
	//1:created; 2=done; 3:canceled; 
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
		$this->creationdate=$this->startdate=$this->enddate=new \DateTime();
		$this->status=1;
    }	
}

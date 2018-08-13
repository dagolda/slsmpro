<?php
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

class Ccdate
{ 
	private $startdate;
	  
	private $enddate;
	
	public function __construct($start=null,$end=null){
		$this->startdate = new \DateTime(date("Y-m-d",mktime(0,0,0,1,1,date("Y"))));
		$this->enddate = new \DateTime(date("Y-m-d",mktime(0,0,0,1,0,date("Y")+1)));
	}	
    /**
     * Set start
     *
     * @return date
     */
    public function setStartdate($start)
    {
        return $this->startdate=$start;
    }
	
    /**
     * Get start
     *
     * @return date
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set end
     *
     * @return date
     */
    public function setEnddate($end)
    {
        return $this->enddate=$end;
    }
	
    /**
     * Get end
     *
     * @return date
     */
    public function getEnddate()
    {
        return $this->enddate;
    }
}
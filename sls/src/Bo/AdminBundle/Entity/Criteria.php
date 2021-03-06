<?php
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

class Criteria
{
    /**
     * @ORM\Column(type="string",length=255)
     */  	
	private $year;

    /**
     * @ORM\Column(type="string",length=255)
     */  	
	private $month;

    /**
     * @ORM\Column(type="string",length=255)
     */  
	private $week;

    /**
    * @ORM\Column(type="date")
    */
	private $startdate;
	
    /**
    * @ORM\Column(type="date")
    */	  
	private $enddate;
	
	public function __construct($start=null,$end=null){
		$this->week = date('W');
		$aDates = $this->getStartAndEnd($this->week,$this->year);
		$this->startdate = $aDates[0];
		$this->enddate = $aDates[1];
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
	protected function getStartAndEnd($week,$year)
	{
		if(strftime("%W",mktime(0,0,0,01,01,$year))==1){
			$mktime = mktime(0,0,0,01,(01+(($week-1)*7)),$year);
		}else{
		  $mktime = mktime(0,0,0,01,(01+(($week)*7)),$year);
		}
		if(date("w",$mktime)>1){
		  $decalage = ((date("w",$mktime)-1)*60*60*24);
		} 
		$lundi = $mktime - $decalage;
		$dimanche = $lundi + (6*60*60*24);	
		$firstdate=date("Y-m-d",$lundi);
		$lastdate=date("Y-m-d",$dimanche);
		return array(new \DateTime($firstdate),new \DateTime($lastdate));
	}

    /**
     * Set year
     *
     * @param string $year
     *
     * @return Criteria
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set month
     *
     * @param string $month
     *
     * @return Criteria
     */
    public function setMonth($month)
    {
        $this->month = $month;

        return $this;
    }

    /**
     * Get month
     *
     * @return string
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Set week
     *
     * @param string $week
     *
     * @return Criteria
     */
    public function setWeek($week)
    {
        $this->week = $week;

        return $this;
    }

    /**
     * Get week
     *
     * @return string
     */
    public function getWeek()
    {
        return $this->week;
    }
}

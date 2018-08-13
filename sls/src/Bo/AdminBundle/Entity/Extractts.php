<?php
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

class Extractts
{
	private $month;

	private $year;
	
	public function __construct($start=null,$end=null){
		$this->month = date('m');
		$this->year = date('Y');
	}	

    /**
     * Set month
     *
     * @param string $month
     *
     * @return Tspresence
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
     * Set year
     *
     * @param string $year
     *
     * @return Tspresence
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
}

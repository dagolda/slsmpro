<?php
/*
* Date Création: 05/04/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Tsdate.php
* Description: Date table
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

class Tsdate 
{	   
	private $enddate;
	
    /**
    * Constructor
    */
    public function __construct()
    {
		$this->enddate=new \DateTime();
    }
	
    /**
     * Set enenddate
     *
     * @param \DateTime $enddate
     *
     * @return Timesheet
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;

        return $this;
    }

    /**
     * Get enddate
     *
     * @return \DateTime
     */
    public function getEnddate()
    {
        return $this->enddate;
    }
}

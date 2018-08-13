<?php
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

class Notes
{ 
     private $description;	  

    /**
     * Set description
     *
     * @return description
     */
    public function setDescription($description)
    {
        return $this->description = $description;
    }
	
    /**
     * Get description
     *
     * @return description
     */
    public function getDescription()
    {
        return $this->description;
    }
}

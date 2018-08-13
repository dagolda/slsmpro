<?php
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

class Cheick 
{

    /**
     * @ORM\Column(type="integer")
     */    
    private $idprofil;

    /**
     * Set integer
     *
     * @param string $integer
     *
     */
    public function setIdprofil($idprofil)
    {
        $this->idprofil = $idprofil;

        return $this;
    }
    /**
     * Get integer
     *
     * @return integer
     */
    public function getIdprofil()
    {
        return $this->idprofil;
    }
}

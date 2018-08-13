<?php
/*
* Date Création: 08/03/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Location.php
* Description: Created just to load form 
*/
namespace Bo\AdminBundle\Entity;

class Location
{
    private $campus;
    
    public function setCampus($campus)
    {
        $this->campus = $campus;

        return $this;
    }

    public function getCampus()
    {
        return $this->campus;
    }
}

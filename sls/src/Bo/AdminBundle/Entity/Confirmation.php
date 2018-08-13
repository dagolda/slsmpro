<?php
/*
* Date Création: 26/09/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Confirmation.php
* Description: Entity pour formulaire de confirmation de contrats
*/
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

class Confirmation 
{	  		
    /**
    * @ORM\Column(type="integer")
    */
	private $idcontract;
	
    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */    
    private $studentemail;

    /**
     * Set idcontract
     *
     * @param integer $idcontract
     *
     * @return Confirmation
     */
    public function setIdcontract($idcontract)
    {
        $this->idcontract = $idcontract;

        return $this;
    }

    /**
     * Get idcontract
     *
     * @return integer
     */
    public function getIdcontract()
    {
        return $this->idcontract;
    }

    /**
     * Set studentemail
     *
     * @param string $studentemail
     *
     * @return Confirmation
     */
    public function setStudentemail($studentemail)
    {
        $this->studentemail = $studentemail;

        return $this;
    }

    /**
     * Get studentemail
     *
     * @return string
     */
    public function getStudentemail()
    {
        return $this->studentemail;
    }
}

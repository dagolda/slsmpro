<?php
/*
* Date Création: 29/08/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier : Sendmail.php
* Description: Entity pour saisie une adresse email afin d'envoyer le bordereau de prix
*/

namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

class Sendmail 
{ 
    private $emailaddresses;

    /**
     * Set emailaddresses
     *
     * @param string $emailaddresses
     *
     * @return Sendmail
     */
    public function setEmailaddresses($emailaddresses)
    {
        $this->emailaddresses = $emailaddresses;

        return $this;
    }

    /**
     * Get emailaddresses
     *
     * @return string
     */
    public function getEmailaddresses()
    {
        return $this->emailaddresses;
    }
}

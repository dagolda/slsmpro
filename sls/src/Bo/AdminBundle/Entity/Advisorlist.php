<?php
/* 
* Date Création: 20/02/2016
* Auteur: N'VEKOUNOU Moise José
* Nom fichier: Contracts.php
* Description: Entité Contracts
*/ 
namespace Bo\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
*/
class Advisorlist
{
    /**
    * @ORM\GeneratedValue
    * @ORM\Id
    * @ORM\Column(type="integer")
    */
    private $id;
		
    /**
    * @ORM\ManyToOne(targetEntity="Advisors")
	* @ORM\JoinColumn(name="idadvisor",referencedColumnName="id",nullable=true)
    */    
    private $advisor;	
		

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set advisor
     *
     * @param \Bo\AdminBundle\Entity\Advisors $advisor
     *
     * @return Advisorlist
     */
    public function setAdvisor(\Bo\AdminBundle\Entity\Advisors $advisor = null)
    {
        $this->advisor = $advisor;

        return $this;
    }

    /**
     * Get advisor
     *
     * @return \Bo\AdminBundle\Entity\Advisors
     */
    public function getAdvisor()
    {
        return $this->advisor;
    }
}

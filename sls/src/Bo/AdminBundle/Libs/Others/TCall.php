<?php

namespace Bo\AdminBundle\Libs\Others;

//use Symfony\Component\HttpFoundation\Request;

use Bo\AdminBundle\Entity\Substitution;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
* Substitution controller.
*/
class TCallController extends Controller 
{
	public function existSubstitutionTs($substitution){
        $em = $this->getDoctrine()->getManager();
		$oRepSub=$em->getRepository('BoAdminBundle:Substitution');
		return $oRepSub->existSubstitutionTS($substitution);
	}

}
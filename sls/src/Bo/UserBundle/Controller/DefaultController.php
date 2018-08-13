<?php

namespace Bo\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BoUserBundle:Default:index.html.twig');
    }
    public function resettingAction()
    {
        return $this->render('BoUserBundle:Default:index.html.twig');
    }
}

<?php

namespace Bo\PayrollBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BoPayrollBundle:Default:index.html.twig');
    }
}

<?php

namespace Bo\CalendarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BoCalendarBundle:Default:index.html.twig');
    }
}

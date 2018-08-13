<?php

namespace Bo\StudentBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Controller\CommonController;
use Bo\AdminBundle\Entity\Activities;
use Bo\AdminBundle\Form\ActivitiesType;

/**
 * Activities controller
 */
class ActivitiesController extends CommonController
{
    /**
    * Lists all Activities entities.
    */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
		$user=$this->getTokenUser();
		$activities=array();
        if($user) $activities = $em->getRepository('BoAdminBundle:Activities')->findBy(array('user'=>$user->getId()));
		$nb_tc = count($activities);
		//get page
		$page = $this->get('session')->get('page');
		if($page==null) $page=1;
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$activities = $em->getRepository('BoAdminBundle:Activities')->findBy(array('user'=>$user->getId()),array('id' => 'desc'),$nb_cpp,$offset);
        return $this->render('BoStudentBundle:Activities:index.html.twig', array(
            'activities' => $activities,
			'page' => $page, // On transmet à la vue la page courante,
			'nb_pages' => $nb_pages, //le nombre total de pages,
			'nb_cpp' => $nb_cpp,
			'total'=>$nb_tc, // Et le nombre total d'enregistrement.
			'pm'=>"tabeau-bord",
			'sm'=>"activities",
        ));
    }
    public function pageAction($option)
    {
		$page = $this->get('session')->get('page');
		if($option==1) $page=1;
		if($option==2) $page=$page-1;
		elseif($option==3) $page=$page+1;
		else $page=$option;
		$this->get('session')->set('page',$page);
		return $this->redirect($this->generateUrl('student_activities_index'));			
	}

    /**
     * Finds and displays a Activities entity.
     */
    public function showAction(Activities $activity)
    {		
        return $this->render('BoStudentBundle:Activities:show.html.twig', array(
            'activity' => $activity,
			'username'=>$this->getDoctrine()->getManager()->getRepository('BoUserBundle:User')->getUserById($activity->getUser()),
			'pm'=>"tabeau-bord",
			'sm'=>"activities",
        ));
    }

}

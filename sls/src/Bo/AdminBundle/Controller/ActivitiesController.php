<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use Bo\AdminBundle\Entity\Activities;
use Bo\AdminBundle\Form\ActivitiesType;

/**
 * Activities controller.
 *
 */
class ActivitiesController extends CommonController
{
    /**
    * Lists all Activities entities.
    */
    public function indexAction()
    {
	$this->verifySessionRights();
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('BoAdminBundle:Activities');
		$nb_tc = $entity->getTotal();
		//get page
		$page = $this->get('session')->get('page');
		if($page==null) $page=1;
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$activities = $em->getRepository('BoAdminBundle:Activities')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
		$users = $em->getRepository('BoUserBundle:User')->getAllUsers();
        return $this->render('activities/index.html.twig', array(
            'activities' => $activities,
			'users'=>$users,
			'page' => $page, // On transmet à la vue la page courante,
			'nb_pages' => $nb_pages, //le nombre total de pages,
			'nb_cpp' => $nb_cpp,
			'total'=>$nb_tc, // Et le nombre total d'enregistrement.
			'pm'=>"tools",
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
		return $this->redirect($this->generateUrl('activities_index'));			
	}

    /**
     * Creates a new Activities entity.
     */
    public function newAction(Request $request)
    {
        $activity = new Activities();
        $form = $this->createForm('Bo\AdminBundle\Form\ActivitiesType', $activity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($activity);
            $em->flush();

            return $this->redirectToRoute('activities_show', array('id' => $activities->getId()));
        }

        return $this->render('activities/new.html.twig', array(
            'activity' => $activity,
            'form' => $form->createView(),
			'pm'=>"tools",
			'sm'=>"activities",
        ));
    }

    /**
     * Finds and displays a Activities entity.
     */
    public function showAction(Activities $activity)
    {
        $deleteForm = $this->createDeleteForm($activity);
		
        return $this->render('activities/show.html.twig', array(
            'activity' => $activity,
			'username'=>$this->getDoctrine()->getManager()->getRepository('BoUserBundle:User')->getUserById($activity->getUser()),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"tools",
			'sm'=>"activities",
        ));
    }

    /**
     * Displays a form to edit an existing Activities entity.
     */
    public function editAction(Request $request, Activities $activity)
    {
        $deleteForm = $this->createDeleteForm($activity);
        $editForm = $this->createForm('Bo\AdminBundle\Form\ActivitiesType', $activity);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($activity);
            $em->flush();

            return $this->redirectToRoute('activities_edit', array('id' => $activity->getId()));
        }

        return $this->render('activities/edit.html.twig', array(
            'activity' => $activity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"tools",
			'sm'=>"activities",
        ));
    }

    /**
     * Deletes a Activities entity.
     */
    public function deleteAction(Request $request, Activities $activity)
    {
        $form = $this->createDeleteForm($activity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($activity);
            $em->flush();
        }

        return $this->redirectToRoute('activities_index');
    }

    /**
     * Creates a form to delete a Activities entity.
     * @param Activities $activity The Activities entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Activities $activity)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('activities_delete', array('id' => $activity->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /**
     * Search a activities.
     */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Activities');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$aResult = $oEntity ->search($description);
		if(isset($aResult[0])){
			$em = $this->getDoctrine()->getManager();
			$users = $em->getRepository('BoUserBundle:User')->getAllUsers();
			return $this->render('BoAdminBundle:Activities:search.html.twig', array(
				'activities'=>$aResult,
				'users'=> $users,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Activities:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $activitiess = $em->getRepository('BoAdminBundle:Activities')->findAll();
		$nb_tc = count($activitiess);
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('motcle');
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aActivities = $em->getRepository('BoAdminBundle:Activities')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
		$users = $em->getRepository('BoUserBundle:User')->getAllUsers();
		
        return $this->render('BoAdminBundle:Activities:pagesearch.html.twig', array(
            'activities' => $aActivities,
			'users'=>$users,
			'page' => $page, // On transmet à la vue la page courante,
        ));
    }
}

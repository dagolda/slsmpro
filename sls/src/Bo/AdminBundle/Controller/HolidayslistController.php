<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use Bo\AdminBundle\Entity\Holidayslist;
use Bo\AdminBundle\Form\HolidayslistType;

/**
 * Holidayslist controller.
 *
 */
class HolidayslistController extends CommonController
{
    /**
    * Index Holidayslist.
    */
    public function indexAction()
    {	
		$this->get('session')->remove('page');
		$this->get('session')->remove('url');
		return $this->redirect($this->generateUrl('holidayslist_list'));		
    }
    /**
     * Lists all Holidayslist entities.
     */
    public function listAction()
    {
        $oRep = $this->getRepository('BoAdminBundle:Holidayslist');
	$nb_tc = $oRep->getTotal();
	//get page
	$page = $this->get('session')->get('page');
	if($page==null){
		$page=1;
		$this->get('session')->set('page',1);
	}
	//get number line per page
	$nb_cpp = $this->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
	$nb_pages = ceil($nb_tc/$nb_cpp);
	$offset = $page>0?($page-1) * $nb_cpp:0;
        $holidayslists = $oRep->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);;
        $form = $this->createForm('Bo\AdminBundle\Form\HolidayslistType', new Holidayslist());

        return $this->render('holidayslist/index.html.twig', array(
            	'holidayslists' => $holidayslists,
            	'form' => $form->createView(),	
		'page' => $page, // forward current page to view,
		'message'=> $this->getSessionMessage(),
		'nb_pages' => $nb_pages, //total number page,
		'total'=>$nb_tc, // record number.
		'nb_cpp' => $nb_cpp,// line's number to display
		'pm'=>"setting",
		'sm'=>"holidays",
        ));
    }
    public function pageAction($option)
    {
		$page=$this->get('session')->get('page');
		if($option==1) $page=1;
		if($option==2) $page=$page-1;
		elseif($option==3) $page=$page+1;
		else $page=$option;
		$this->get('session')->set('page',$page);
		return $this->redirect($this->generateUrl('holidayslist_list'));			
     }
    /**
     * Creates a new Holidayslist entity.
     */
    public function newAction(Request $request)
    {
        $holidayslist = new Holidayslist();
		$holidayslist->setCountry("Canada");
		$holidayslist->setProvince("All");
        $form = $this->createForm('Bo\AdminBundle\Form\HolidayslistType', $holidayslist);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($holidayslist);
            $em->flush();

            return $this->redirectToRoute('holidayslist_index');
        }

        return $this->render('holidayslist/new.html.twig', array(
            'holidayslist' => $holidayslist,
            'form' => $form->createView(),
			'pm'=>"setting",
			'sm'=>"holidays"	
        ));
    }

    /**
     * duplicate a new Holidayslist entity.
     */
    public function duplicateAction(Request $request,$id)
    {
	$em = $this->getDoctrine()->getManager();
	$oHolidays = $em->getRepository('BoAdminBundle:Holidayslist')->find($id);
        $holidayslist = $this->createHolidays($oHolidays);
        $form = $this->createForm('Bo\AdminBundle\Form\HolidayslistType', $holidayslist);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($holidayslist);
            $em->flush();

            return $this->redirectToRoute('holidayslist_index');
        }

        return $this->render('holidayslist/duplicate.html.twig', array(
            'holidayslist' => $holidayslist,
			'idholiday'=> $oHolidays->getId(),
            'form' => $form->createView(),
			'pm'=>"setting",
			'sm'=>"holidays"	
        ));
    }
    /**
     * Finds and displays a Holidayslist entity.
     */
    public function showAction(Holidayslist $holidayslist)
    {
        $deleteForm = $this->createDeleteForm($holidayslist);

        return $this->render('holidayslist/show.html.twig', array(
            'holidayslist' => $holidayslist,
            'delete_form' => $deleteForm->createView(),
			'pm'=>"setting",
			'sm'=>"holidays"	
        ));
    }

    /**
     * Displays a form to edit an existing Holidayslist entity.
     */
    public function editAction(Request $request, Holidayslist $holidayslist)
    {
        $deleteForm = $this->createDeleteForm($holidayslist);
        $editForm = $this->createForm('Bo\AdminBundle\Form\HolidayslistType', $holidayslist);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($holidayslist);
            $em->flush();

            return $this->redirectToRoute('holidayslist_index');
        }

        return $this->render('holidayslist/edit.html.twig', array(
            'holidayslist' => $holidayslist,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"setting",
			'sm'=>"holidays"	
        ));
    }

    /**
     * Deletes a Holidayslist entity.
     *
     */
    public function deleteAction(Request $request, Holidayslist $holidayslist)
    {
        $form = $this->createDeleteForm($holidayslist);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($holidayslist);
            $em->flush();
        }

        return $this->redirectToRoute('holidayslist_index');
    }

    /**
     * Creates a form to delete a Holidayslist entity.
     *
     * @param Holidayslist $holidayslist The Holidayslist entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Holidayslist $holidayslist)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('holidayslist_delete', array('id' => $holidayslist->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	private function createHolidays($holidayslist){
		$newholidays = new Holidayslist();
		$newholidays->setDesignation($holidayslist->getDesignation());
		$newholidays->setCountry($holidayslist->getCountry());
		$newholidays->setProvince($holidayslist->getProvince());
		$newholidays->setDdate($holidayslist->getDdate());
		return $newholidays;
	}
    /**
     * Search a Holidayslist.
     */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Holidayslist');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$this->get('session')->set('search',$description);
		$aResult = $oEntity ->search($description);
		//$this->setActivity($description." searched by this user");
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:Holidayslist:search.html.twig', array(
				'holidayslists'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Holidayslist:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        	$em = $this->getDoctrine()->getManager();
        	$Holidayslists = $em->getRepository('BoAdminBundle:Holidayslist')->findAll();
		$nb_tc = count($Holidayslists);
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('page');
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aHolidayslist = $em->getRepository('BoAdminBundle:Holidayslist')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
		return $this->render('BoAdminBundle:Holidayslist:pagesearch.html.twig', array(
		    'holidayslists' => $aHolidayslist,
				'page' => $page, // On transmet à la vue la page courante,
		));
    }
}

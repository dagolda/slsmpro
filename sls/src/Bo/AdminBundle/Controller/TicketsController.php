<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bo\AdminBundle\Entity\Tickets;
use Bo\AdminBundle\Form\TicketsType;
/**
* Tickets controller.
*/
class TicketsController extends CommonController
{
    /** 
    * Index tickets.
    */
    public function indexAction()
    {
		$this->removeSession();		
		return $this->redirect($this->generateUrl('tickets_list'));		
	}
    /**
    * Lists all Tickets entities.
    */
    public function listAction()
    {
		$this->verifySessionRights();	
		$oTokenuser=$this->getTokenUser();
		$this->setActivity("List view");
        $em = $this->getDoctrine()->getManager();
        $oRepTickets = $em->getRepository('BoAdminBundle:Tickets');
		$nb_tc = $oRepTickets->getTotal();
		//get page
		$page = $this->get('session')->get('page');
		if($page==null){
			$page=1;
			$this->get('session')->set('page',1);
		}
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$tickets = $oRepTickets->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
        $form = $this->createForm('Bo\AdminBundle\Form\TicketsType', new Tickets());
        return $this->render('tickets/index.html.twig', array(
            'tickets' => $tickets,
			'languages'=>$em->getRepository('BoAdminBundle:Language')->getAll(),
			'form' => $form->createView(),
			'page' => $page, // forward current page to view,
			'status'=> $this->getStatusTicket(),
			'message'=> $this->getSessionMessage(),
			'nb_pages' => $nb_pages, //total number page,
			'total'=>$nb_tc, // record number.
			'nb_cpp' => $nb_cpp,// line's number to display
			'pm'=>"tools",
			'sm'=>"tickets",
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
		return $this->redirect($this->generateUrl('tickets_list'));			
	}

    /**
     * Creates a new Tickets entity.
     */
    public function newAction(Request $request)
    {
        $ticket = new Tickets();
        $form = $this->createForm('Bo\AdminBundle\Form\TicketsType', $ticket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ticket);
            $em->flush();
            return $this->redirectToRoute('tickets_show', array('id' => $ticket->getId()));
        }

        return $this->render('tickets/new.html.twig', array(
            'ticket' => $ticket,
            'form' => $form->createView(),
			'pm'=>"tools",
			'sm'=>"tickets",
        ));
    }
    /**
    * Finds and displays a Tickets entity.
    */
    public function showAction(Tickets $ticket)
    {
        $em = $this->getDoctrine()->getManager();
        $oRepTickets = $em->getRepository('BoAdminBundle:Tickets');
        $deleteForm = $this->createDeleteForm($ticket);
		$this->setActivity("View of the ticket id:".$ticket->getId());

        return $this->render('tickets/show.html.twig', array(
            'ticket' => $ticket,
            'status' => $this->getStatusTicket(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"tools",
			'sm'=>"tickets",
        ));
    }

    /**
     * Displays a form to edit an existing Tickets entity.
     */
    public function editAction(Request $request, Tickets $ticket)
    {
        $deleteForm = $this->createDeleteForm($ticket);
        $editForm = $this->createForm('Bo\AdminBundle\Form\TicketsType', $ticket);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ticket);
            $em->flush();

            return $this->redirectToRoute('tickets_edit', array('id' => $ticket->getId()));
        }

        return $this->render('tickets/edit.html.twig', array(
            'ticket' => $ticket,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"tools",
			'sm'=>"tickets",
        ));
    }
    /**
     * Search a tickets.
     */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Tickets');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$this->get('session')->set('search',$description);
		$aResult = $oEntity ->search($description);
		$this->setActivity($description." searched by this user");
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:Tickets:search.html.twig', array(
				'tickets'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Tickets:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * return to the previous search
    */
    public function backAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Tickets');	
		$description = $this->get('session')->get('search');
		
		$aResult = $oEntity ->search($description);
		if(!isset($aResult[0])) return $this->redirect($this->generateUrl('tickets_list'));	
		else{
			return $this->render('tickets/back.html.twig', array(
				'tickets'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
				'pm'=>"tools",
				'sm'=>"tickets",
			));				
		}
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $tickets = $em->getRepository('BoAdminBundle:Tickets')->findAll();
		$nb_tc = count($tickets);
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('motcle');
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aTickets = $em->getRepository('BoAdminBundle:Tickets')->findBy(array('active'=>1),array('firstname' => 'asc'),$nb_cpp,$offset);

        return $this->render('BoAdminBundle:Tickets:pagesearch.html.twig', array(
            'tickets' => $aTickets,
			'page' => $page, // On transmet à la vue la page courante,
        ));
    }
    /**
     * Deletes a Tickets entity.
     *
     */
    public function deleteAction(Request $request, Tickets $ticket)
    {
        $form = $this->createDeleteForm($ticket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ticket);
            $em->flush();
        }

        return $this->redirectToRoute('tickets_index');
    }

    /**
     * Creates a form to delete a Tickets entity.
     *
     * @param Tickets $ticket The Tickets entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tickets $ticket)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tickets_delete', array('id' => $ticket->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	private function setActivity($activity){
		return $this->createActivity("Help",$activity);	
	}
}

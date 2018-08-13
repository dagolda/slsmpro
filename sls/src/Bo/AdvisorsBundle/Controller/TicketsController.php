<?php
namespace Bo\AdvisorsBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Controller\CommonController;
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
		return $this->redirect($this->generateUrl('dash_tickets_list'));		
    }
    /**
    * List all Tickets entities.
    */
    public function listAction()
    {

	$oEmployee = $this->getConnectedEmployee();
	$this->setActivity("Affichage de la liste");
        $oRepTickets = $this->getRepository('BoAdminBundle:Tickets');
	$nb_tc = $oRepTickets->getTotal();
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
	$tickets = $oRepTickets->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
        $form = $this->createForm('Bo\AdminBundle\Form\TicketsType', new Tickets());
        return $this->render('BoAdvisorsBundle:Tickets:index.html.twig', array(
            	'tickets' => $tickets,
		'form' => $form->createView(),
		'page' => $page, // forward current page to view,
		'status'=> $this->getStatusTicket(),
		'types'=>$this->getTypeTicket(),
		'message'=> $this->getSessionMessage(),
		'nb_pages' => $nb_pages, //total number page,
		'total'=>$nb_tc, // record number.
		'nb_cpp' => $nb_cpp,// line's number to display
		'pm'=>"admin",
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
		$this->get('session')->set('test',1);
		$this->get('session')->set('page',$page);
		return $this->redirect($this->generateUrl('dash_tickets_list'));			
	}
    /**
    * List all Tickets blocked.
    */
    public function blocklistAction()
    {
		$oEmployee = $this->getConnectedEmployee();
		$fullname = $oEmployee->getFirstname()." ".$oEmployee->getName();
		$this->setActivity("Affichage de la liste");
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
		$tickets = $oRepTickets->findBy(array('blockedby'=>$fullname),array('id' => 'desc'),$nb_cpp,$offset);
		return $this->render('BoAdvisorsBundle:Tickets:mylist.html.twig', array(
		    'tickets' => $tickets,
				'page' => $page, // forward current page to view,
				'status'=> $this->getStatusTicket(),
				'message'=> $this->getSessionMessage(),
				'nb_pages' => $nb_pages, //total number page,
				'total'=>$nb_tc, // record number.
				'nb_cpp' => $nb_cpp,// line's number to display
				'pm'=>"admin",
				'sm'=>"tickets",
		));
    } 
    /**
    * Creates a new Tickets entity.
    */
    public function newAction(Request $request)
    {
        $ticket = new Tickets();
        $form = $this->createForm('Bo\AdminBundle\Form\TicketsType', $ticket);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
		//Upload file
		if($ticket->getFilename()){
			$file = $ticket->getFilename();
			$fileName = $this->get('app.ticketimage_uploader')->upload($file);
			$ticket->setFilename($fileName);								
		}
		$this->updateEntity($ticket);
            	return $this->redirectToRoute('dash_tickets_show', array('id' => $ticket->getId()));
        }

        return $this->render('BoAdvisorsBundle:Tickets:new.html.twig', array(
            	'ticket' => $ticket,
            	'form' => $form->createView(),
		'pm'=>"admin",
		'sm'=>"tickets",
        ));
    }

    /**
    * Finds and displays a Tickets entity.
    */
    public function showAction(Request $request, Tickets $ticket)
    {
        $oEmployee = $this->getConnectedEmployee();
	$connected = $this->getFullnameOf($oEmployee);
        $deleteForm = $this->createDeleteForm($ticket);
	$url = $request->headers->get('referer');
	$this->get("session")->set('url',$url);
//echo $ticket->getBlockedby();
//exit(0);

        return $this->render('BoAdvisorsBundle:Tickets:show.html.twig', array(
            	'ticket' => $ticket,
		'contact'=>$ticket->getContacts(),
		'status' => $this->getStatusTicket(),
            	'delete_form' => $deleteForm->createView(),
		'connected'=> $connected,
		'url'=>$url,
		'pm'=>"admin",
		'sm'=>"tickets",
        ));
    }	
    /**
    * Reserve a Tickets entity to resolve a problem.
    */
    public function blockAction(Request $request,Tickets $ticket)
    {
        $deleteForm = $this->createDeleteForm($ticket);
        $oEmployee = $this->getConnectedEmployee();
	$connected = $this->getFullnameOf($oEmployee);
	$ticket->setBlockedby($connected);
	$ticket->setBlockeddate(new \DateTime());
	$ticket->setStatusddate(new \DateTime());
	$ticket->setStatus(2);
	$this->updateEntity($ticket);

        return $this->render('BoAdvisorsBundle:Tickets:show.html.twig', array(
            	'ticket' => $ticket,
		'status' => $this->getStatusTicket(),
            	'delete_form' => $deleteForm->createView(),
		'connected'=> $connected,
		'url'=>$this->get("session")->get('url'),
		'pm'=>"admin",
		'sm'=>"tickets",
        ));
    }
	
    /**
    * Resolve a Tickets entity.
    */
    public function resolveAction(Request $request,Tickets $ticket)
    {
        $deleteForm = $this->createDeleteForm($ticket);
        $oEmployee = $this->getConnectedEmployee();
		$ticket->setResolvedby($oEmployee->getFirstname()." ".$oEmployee->getName());
		$ticket->setResolveddate(new \DateTime());
		$ticket->setStatus(3);
		$ticket->setStatusddate(new \DateTime());
		if($ticket->getBlockeddate()){
			$interval = $ticket->getBlockeddate()->diff($ticket->getResolveddate());
			$nbday = $interval->format('%R%a days');
			if($nbday =="+0 days"){
				$nbday=$interval->format("%H:%I:%S");
			}
			$ticket->setResolutiontime($nbday);			
		}
		$note = $request->request->get('note');	
		$ticket->setResolvednote($note);
		$this->updateEntity($ticket);

        return $this->render('BoAdvisorsBundle:Tickets:show.html.twig', array(
            'ticket' => $ticket,
			'status' => $this->getStatusTicket(),
            'delete_form' => $deleteForm->createView(),
		'url'=>$this->get("session")->get('url'),
			'pm'=>"admin",
			'sm'=>"tickets",
        ));
    }
	
    /**
    * close a Tickets entity.
    */
    public function closeAction(Request $request,Tickets $ticket)
    {
        $deleteForm = $this->createDeleteForm($ticket);
        $oEmployee = $this->getConnectedEmployee();
		$ticket->setCloseby($oEmployee->getFirstname()." ".$oEmployee->getName());
		$ticket->setStatusddate(new \DateTime());
		$ticket->setStatus(4);
		$this->updateEntity($ticket);

        return $this->render('BoAdvisorsBundle:Tickets:show.html.twig', array(
            'ticket' => $ticket,
			'pm'=>"admin",
            'delete_form' => $deleteForm->createView(),
			'status' => $this->getStatusTicket(),
		'url'=>$this->get("session")->get('url'),
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
		//Upload file
		if($ticket->getFilename()){
			$file = $ticket->getFilename();
			$fileName = $this->get('app.ticketimage_uploader')->upload($file);
			$ticket->setFilename($fileName);								
		}
		$this->updateEntity($ticket);
            	return $this->redirectToRoute('dash_tickets_index');
        }

        return $this->render('BoAdvisorsBundle:Tickets:edit.html.twig', array(
            'ticket' => $ticket,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
	    'pm'=>"admin",
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
			return $this->render('BoAdvisorsBundle:Tickets:search.html.twig', array(
				'tickets'=>$aResult,
				'status'=> $this->getStatusTicket(),
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdvisorsBundle:Tickets:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
     * Advanced ticket search by ajax.
     */
    public function extrasearchAction(Request $request)
    {
		if($request->isXmlHttpRequest())
		{	
			$data = $request->request->get('data');	
			$this->setSessionByName('data',$data);
			$aData = explode(":",$data);
		}
		$idtype = $aData[0];
		$idstatus = $aData[1];
		$oRepTicket = $this->getRepository('BoAdminBundle:Tickets');
		$aTickets = $oRepTicket->getExtraData($idtype,$idstatus);
        	return $this->render('BoAdvisorsBundle:Tickets:search.html.twig', array(
			'tickets'=>$aTickets,
			'status'=> $this->getStatusTicket(),
			'count'=>count($aTickets),
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
		if(!isset($aResult[0])) return $this->redirect($this->generateUrl('dash_tickets_list'));	
		else{
			return $this->render('BoAdvisorsBundle:Tickets:back.html.twig', array(
				'tickets'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
				'pm'=>"admin",
				'sm'=>"tickets",
			));				
		}
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $oRepTickets = $this->getRepository('BoAdminBundle:Tickets');
	$nb_tc = $oRepTickets->getTotal();
	if($request->isXmlHttpRequest())
	{	
		$page = $request->request->get('page');
	}
	$this->get('session')->set('page',$page);
	//get number line per page
	$nb_cpp = $this->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
	$nb_pages = ceil($nb_tc/$nb_cpp);
	$offset = $page>0?($page-1) * $nb_cpp:0;
	$aTickets = $oRepTickets->findBy(array(),array(),$nb_cpp,$offset);

        return $this->render('BoAdvisorsBundle:Tickets:pagesearch.html.twig', array(
            	'tickets' => $aTickets,
		'status'=> $this->getStatusTicket(),
		'page' => $page, // On transmet à la vue la page courante,
        ));
    }
    /**
    * Deletes a Tickets entity.
    */
    public function deleteAction(Request $request, Tickets $ticket)
    {
	$url = $request->headers->get('referer');
        $form = $this->createDeleteForm($ticket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ticket);
            $em->flush();
        }
	$url = $this->get("session")->get('url');
	if($url!=null) return $this->redirect($url);
        return $this->redirectToRoute('dash_tickets_index');
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
            ->setAction($this->generateUrl('dash_tickets_delete', array('id' => $ticket->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    private function setActivity($activity){
	return $this->createActivity("Help",$activity);	
    }
}

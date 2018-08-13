<?php
namespace Bo\AdvisorsBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Controller\CommonController;
use Bo\AdminBundle\Entity\Tickets;
use Bo\AdminBundle\Form\TicketsType;
/**
* Tickets controller.
*/
class HelpController extends CommonController
{
    /** 
    * Index tickets.
    */
    public function indexAction()
    {
		$this->removeSession();		
		return $this->redirect($this->generateUrl('dash_help_list'));		
	}
    /**
    * List all Tickets entities.
    */
    public function listAction()
    {
		$oTokenuser=$this->getTokenUser();
		$oEmployee = $this->getConnectedEmployee();
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
		$tickets = $oRepTickets->findBy(array('employee'=>$oEmployee,'status'=>1));
        $form = $this->createForm('Bo\AdminBundle\Form\HelpType', new Tickets());
        return $this->render('BoAdvisorsBundle:Help:index.html.twig', array(
            'helps' => $tickets,
			'form' => $form->createView(),
			'page' => $page, // forward current page to view,
			'status'=> $this->getStatusTicket(),
			'message'=> $this->getSessionMessage(),
			'nb_pages' => $nb_pages, //total number page,
			'total'=>$nb_tc, // record number.
			'nb_cpp' => $nb_cpp,// line's number to display
			'pm'=>"admin",
			'sm'=>"help",
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
		return $this->redirect($this->generateUrl('dash_tickets_list'));			
	}

    /**
     * Creates a new Tickets entity.
     */
    public function newAction(Request $request)
    {
        $ticket = new Tickets();
        $form = $this->createForm('Bo\AdminBundle\Form\HelpType', $ticket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
			$oEmployee = $this->getConnectedEmployee();
			$ticket->setEmployee($oEmployee);
			$ticket=$this->doAffectation($ticket,$oEmployee);
			//Upload file
			if($ticket->getFilename()){
				$file = $ticket->getFilename();
				$fileName = $this->get('app.ticketimage_uploader')->upload($file);
				$ticket->setFilename($fileName);								
			}			
			$res = $this->updateEntity($ticket);
			if($res>0){
				$this->notifyContacts($ticket);
				return $this->redirectToRoute('dash_help_index');
			}
        }

        return $this->render('BoAdvisorsBundle:Help:new.html.twig', array(
            'help' => $help,
            'form' => $form->createView(),
			'pm'=>"admin",
			'sm'=>"help",
        ));
    }

    /**
    * Finds and displays a Tickets entity.
    */
    public function showAction(Tickets $ticket)
    {
        $deleteForm = $this->createDeleteForm($ticket);

        return $this->render('BoAdvisorsBundle:Help:show.html.twig', array(
            'ticket' => $ticket,
            'delete_form' => $deleteForm->createView(),
			'pm'=>"tools",
			'sm'=>"tickets",
        ));
    }

    /**
     * Displays a form to edit an existing Tickets entity.
     *
     */
    public function editAction(Request $request, Tickets $ticket)
    {
        $deleteForm = $this->createDeleteForm($ticket);
        $editForm = $this->createForm('Bo\AdminBundle\Form\TicketsType2', $ticket);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ticket);
            $em->flush();

            return $this->redirectToRoute('dash_tickets_index');
        }

        return $this->render('BoAdvisorsBundle:Help:edit.html.twig', array(
            'help' => $ticket,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"admin",
			'sm'=>"help",
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
				'helps'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdvisorsBundle:Help:search.html.twig', array(
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
		if(!isset($aResult[0])) return $this->redirect($this->generateUrl('dash_tickets_list'));	
		else{
			return $this->render('BoAdvisorsBundle:Help:back.html.twig', array(
				'helps'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
				'pm'=>"admin",
				'sm'=>"help",
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

        return $this->render('BoAdvisorsBundle:Help:pagesearch.html.twig', array(
            'helps' => $aTickets,
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

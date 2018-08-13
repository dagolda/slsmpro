<?php

namespace Bo\AdminBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bo\AdminBundle\Entity\TicketContacts;
use Bo\AdminBundle\Entity\Employee;
use Bo\AdminBundle\Form\TicketContactsType;
/**
 * TicketContacts controller.
 *
 */
class TicketContactsController extends CommonController
{
    /**
    * Lists all TicketContacts entities.
    */
    public function indexAction()
    {
		$description = $this->get('session')->remove('search');
        $em = $this->getDoctrine()->getManager();
        $oRepContact = $em->getRepository('BoAdminBundle:TicketContacts');
		$nb_tc = $oRepContact->getTotal();
		//get page
		$page = $this->get('session')->get('page');
		if($page==null){
			$page=1;
			$this->get('session')->set('page',1);
		}
		$aAdminTeam = $em->getRepository('BoAdminBundle:Employee')->getAdminTeam();
		//get number line per page
		//$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_cpp = 15;
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$ticketcontacts = $em->getRepository('BoAdminBundle:TicketContacts')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
        $form = $this->createForm('Bo\AdminBundle\Form\TicketContactsType', new TicketContacts());
        return $this->render('ticketcontacts/index.html.twig', array(
            'ticketcontacts' => $ticketcontacts,
			'adminteams'=>$aAdminTeam,
			'page'=> $page, // forward current page to view,
			'nb_pages' => $nb_pages, //total number page,
			'total'=>$nb_tc, // record number.
			'nb_cpp' => $nb_cpp,// line's number to display
			'form' => $form->createView(),
			'pm'=>"tools",
			'sm'=>"tickets",
        ));
    }

    /**
     * Creates a new TicketContacts entity.
     *
     */
    public function newAction(Request $request)
    {
        $ticketcontact = new TicketContacts();
        $form = $this->createForm('Bo\AdminBundle\Form\TicketContactsType', $ticketcontact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$idemployees = $request->request->get('idsemployee');	
			$ticketcontact = $this->addEmployeeBy($ticketcontact,$idemployees);
			$this->updateEntity($ticketcontact);
            return $this->redirectToRoute('ticketcontacts_index');
        }

        return $this->render('ticketcontacts/new.html.twig', array(
            'ticketcontact' => $ticketcontact,
            'form' => $form->createView(),
			'pm'=>"tools",
			'sm'=>"tickets",
        ));
    }
	private function addEmployeeBy($ticketcontact,$idemployees){
        $em = $this->getDoctrine()->getManager();
        $oRepEmp = $em->getRepository('BoAdminBundle:Employee');
		foreach($idemployees as $id){
			$oEmployee = $oRepEmp->find($id);
			$ticketcontact->addEmployee($oEmployee);
		}
		return $ticketcontact;
	}

    /**
    * Finds and displays a TicketContacts entity.
    */
    public function showAction(TicketContacts $ticketcontact)
    {
        $deleteForm = $this->createDeleteForm($ticketcontact);
		$form = $this->createForm('Bo\AdminBundle\Form\TicketContactsType', $ticketcontact);

        return $this->render('ticketcontacts/show.html.twig', array(
            'ticketcontact' => $ticketcontact,
            'form' => $form->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"tools",
			'sm'=>"tickets",
        ));
    }
	
    /**
    * Finds and displays a TicketContacts entity.
    */
    public function addEmployeeAction(Request $request, TicketContacts $ticketcontact)
    {
		$idemployee = $request->request->get('idemployee');	
        $em = $this->getDoctrine()->getManager();
		$oEmployee = $em->getRepository('BoAdminBundle:Employee')->find($idemployee);
		$ticketcontact->addEmployee($oEmployee);
		$this->updateEntity($ticketcontact);
		
		return $this->redirectToRoute('ticketcontacts_index');
						
    }

    /**
    * Displays a form to edit an existing TicketContacts entity.
    */
    public function editAction(Request $request, TicketContacts $ticketcontact)
    {
        $editForm = $this->createForm('Bo\AdminBundle\Form\TicketContactsType', $ticketcontact);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$this->updateEntity($ticketcontact);
            return $this->redirectToRoute('ticketcontacts_index');
        }

        return $this->render('ticketcontacts/edit.html.twig', array(
            'ticketcontact' => $ticketcontact,
            'form' => $editForm->createView(),
			'remove_forms'=>$this->getRemoveEmployeeForm($ticketcontact),
			'url'=>$request->headers->get('referer'),
			'pm'=>"tools",
			'sm'=>"tickets",
        ));
    }
	public function removeEmployeeAction(Request $request, TicketContacts $ticketcontact, $idemployee){
        $em = $this->getDoctrine()->getManager();
		$oEmployee = $em->getRepository('BoAdminBundle:Employee')->find($idemployee);
        $form = $this->createRemoveForm($ticketcontact, $oEmployee);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
			$ticketcontact->removeEmployee($oEmployee);
			$this->updateEntity($ticketcontact);
        }
		return $this->redirectToRoute('ticketcontacts_edit', array('id' => $ticketcontact->getId()));
	}
    /**
    * Deletes a TicketContacts entity.
    */
    public function deleteAction(Request $request, TicketContacts $ticketcontact)
    {
        $form = $this->createDeleteForm($ticketcontact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ticketcontact);
            $em->flush();
        }

        return $this->redirectToRoute('ticketcontacts_index');
    }

    /**
     * Creates a form to delete a TicketContacts entity.
     *
     * @param TicketContacts $ticketcontact The TicketContacts entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TicketContacts $ticketcontact)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ticketcontacts_delete', array('id' => $ticketcontact->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	private function getRemoveEmployeeForm(TicketContacts $ticketcontact){
		$aForms = array();
		$aEmployee = $ticketcontact->getEmployee();
		foreach($aEmployee as $oEmployee){
			$form = $this->createRemoveForm($ticketcontact, $oEmployee);
			$aForms[$oEmployee->getId()] = $form->createView();
		}
		return $aForms;
	}
	
    /**
     * Creates a form to remove employee from a TicketContacts entity.
     * @param TicketContacts $ticketcontact The TicketContacts entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createRemoveForm(TicketContacts $ticketcontact, Employee $employee)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ticketcontacts_employee_remove', array('id' => $ticketcontact->getId(),'idemployee' => $employee->getId())))
            ->getForm()
        ;
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
		if($request->isXmlHttpRequest())
		{
			$page = $request->request->get('page');
		}
		//get number line per page
        $em = $this->getDoctrine()->getManager();
		//$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$oRepMake = $em->getRepository('BoAdminBundle:TicketContacts');
		$nb_tc = $oRepMake->getTotal();
		$nb_cpp = 15;
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$ticketcontacts = $oRepMake->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
        return $this->render('BoAdminBundle:TicketContacts:tbliste.html.twig',array(
            'ticketcontacts' => $ticketcontacts,
			'page' => $page, // On transmet à la vue la page courante,
			'pm'=>"tools",
			'sm'=>"tickets",			
		));		
    }
    /**
    * Search a ticketcontact.
    */
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
		$oRepMake = $em->getRepository('BoAdminBundle:TicketContacts');
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$this->get('session')->set('search',$description);
		$aResult = $oRepMake->search($description);
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:TicketContacts:search.html.twig', array(
				'ticketcontacts'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:TicketContacts:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * return to the previous search
    */
    public function backAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
		$oRepMake = $em->getRepository('BoAdminBundle:TicketContacts');
		$description = $this->get('session')->get('search');
		
		$aResult = $oRepMake->search($description);
		if(!isset($aResult[0])) return $this->redirect($this->generateUrl('ticketcontacts_index'));	
		else{
			return $this->render('ticketcontacts/back.html.twig', array(
				'ticketcontacts'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
				'pm'=>"tools",
				'sm'=>"tickets",
			));				
		}
    }
}

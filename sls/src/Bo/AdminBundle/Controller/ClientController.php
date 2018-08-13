<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use Bo\AdminBundle\Entity\Client;
use Bo\AdminBundle\Form\ClientType;
use Bo\AdminBundle\Entity\Coordinator;

/**
 * Client controller.
 *
 */
class ClientController extends CommonController
{
    /** 
    * Index client.
    */
    public function indexAction()
    {	
		$this->get('session')->remove('page');
		$this->get('session')->remove('url');
		return $this->redirect($this->generateUrl('client_list'));		
	}
    /**
    * Lists all Client entities.
    */
    public function listAction()
    {	
		$this->removeSession();
		$this->verifySessionRights();
		$this->setActivity("List view");
        $em = $this->getDoctrine()->getManager();
        $oRepClient = $em->getRepository('BoAdminBundle:Client');
		$nb_tc = $oRepClient->getTotal();
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
		$clients = $em->getRepository('BoAdminBundle:Client')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
        $form = $this->createForm('Bo\AdminBundle\Form\ClientType', new Client());
        return $this->render('client/index.html.twig', array(
            'clients' => $clients,
			'page' => $page, // forward current page to view,
			'nb_pages' => $nb_pages, //total number page,
            'form' => $form->createView(),
			'total'=>$nb_tc, // record number.
			'nb_cpp' => $nb_cpp,// line's number to display
			'pm'=>"contracts",
			'sm'=>"client",
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
		return $this->redirect($this->generateUrl('client_list'));			
	}

    /**
     * Creates a new Client entity.
     *
     */
    public function newAction(Request $request)
    {
        $client = new Client();
        $form = $this->createForm('Bo\AdminBundle\Form\ClientType', $client);
        $form->handleRequest($request);
		$message=null;
		$em = $this->getDoctrine()->getManager();
		if($client->getReference()) $aClient = $em->getRepository('BoAdminBundle:Client')->findBy(array('reference'=>$client->getReference()));
		if(isset($aClient) and count($aClient)==1){
			$message=array('type'=>"Warning",'texte'=>$this->getErrorMessage(19));
		}
        if ($form->isSubmitted() && $form->isValid() && $message==null) {
            $res = $this->updateEntity($client);
			$url = $this->get('session')->get('url');
            if($url) return $this->redirect($url);
			else return $this->redirect($this->generateUrl('client_list'));		
        }
		$this->get('session')->set('url',$request->headers->get('referer'));
        return $this->render('client/new.html.twig', array(
            'client' => $client,
			'message' => $message,
            'form' => $form->createView(),
			'pm'=>"contracts",
			'sm'=>"client",
        ));
    }
    /**
     * Creates a new master Coordinator entity.
     *
     */
    public function masternewAction(Request $request, $idclient)
    {
        $em = $this->getDoctrine()->getManager();
        $coordinator = new Coordinator();
        $form = $this->createForm('Bo\AdminBundle\Form\CoordinatorType', $coordinator);
        $form->handleRequest($request);
		$message=null;
		if($coordinator->getEmail()!=null){
			$coordinators = $em->getRepository('BoAdminBundle:Coordinator')->findBy(array('email'=>$coordinator->getEmail()));
			if(isset($coordinators[0])) $message = "This contact email ".$coordinator->getEmail()." already exist.";
		}
        if ($form->isSubmitted() && $form->isValid() && $message==null) {
			$oClient = $em->getRepository('BoAdminBundle:Client')->find($idclient);
			if($oClient){
				$coordinator->setClient($oClient);
				$coordinator->setMaster(true);
				$coordinator->setPwd($this->getPassword());
				$coordinator->setCreateby($this->getConnected());
				$this->updateEntity($coordinator);
				if($coordinator->getEmail()!=null) $this->createUser(3,$coordinator);

				return $this->redirectToRoute('coordinator_index');
			}
			$message = "Unable to find that client.";
        }
        return $this->render('coordinator/new.html.twig', array(
            'coordinator' => $coordinator,
            'form' => $form->createView(),
			'message'=>array('type'=>'Warning','texte'=>$message),
			'pm'=>"contracts",
			'sm'=>"coordinator",
        ));
    }
    /**
     * Finds and displays a Client entity.
     *
     */
    public function showAction(Client $client)
    {
		$aContracts = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Contracts')->findBy(array('client'=>$client,'status'=>1));
        $deleteForm = $this->createDeleteForm($client);
        $form = $this->createForm('Bo\AdminBundle\Form\CoordinatorType', new Coordinator());
        return $this->render('client/show.html.twig', array(
            'client' => $client,
			'form' => $form->createView(),
            'delete_form' => $deleteForm->createView(),
			'contracts'=>$aContracts,
			'pm'=>"contracts",
			'sm'=>"client",
        ));
    }

    /**
     * Displays a form to edit an existing Client entity.
     *
     */
    public function editAction(Request $request, Client $client)
    {
        $deleteForm = $this->createDeleteForm($client);
        $editForm = $this->createForm('Bo\AdminBundle\Form\ClientType', $client);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();

            return $this->redirect($this->get('session')->get('url'));
        }
		$this->get('session')->set('url',$request->headers->get('referer'));
        return $this->render('client/edit.html.twig', array(
            'client' => $client,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"contracts",
			'sm'=>"client",
        ));
    }

    /**
     * Deletes a Client entity.
     *
     */
    public function deleteAction(Request $request, Client $client)
    {
        $form = $this->createDeleteForm($client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($client);
            $em->flush();
        }

        return $this->redirectToRoute('client_index');
    }
    /**
     * Search a client.
     */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Client');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$aResult = $oEntity ->search($description);
		$this->setActivity($description." searched by this user");
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:Client:search.html.twig', array(
				'clients'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Client:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $clients = $em->getRepository('BoAdminBundle:Client')->findAll();
		$nb_tc = count($clients);
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('motcle');
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aClient = $em->getRepository('BoAdminBundle:Client')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);

        return $this->render('BoAdminBundle:Client:pagesearch.html.twig', array(
            'clients' => $aClient,
			'page' => $page, // On transmet à la vue la page courante,
        ));
    }
    /**
     * Creates a form to delete a Client entity.
     *
     * @param Client $client The Client entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Client $client)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('client_delete', array('id' => $client->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	private function setActivity($activity){
		return $this->createActivity("Client",$activity);	
	}
}

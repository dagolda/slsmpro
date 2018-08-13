<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use Bo\AdminBundle\Entity\Message;
use Bo\AdminBundle\Form\MessageType;

/**
* Message controller.
*/
class MessageController extends CommonController
{
	    /** 
    * Index Message.
    */
    public function indexAction()
    {	
		$this->get('session')->remove('page');
		$this->get('session')->remove('url');
		return $this->redirect($this->generateUrl('message_list'));		
	}
    /**
    * Lists all Message entities.
    */
    public function listAction()
    {	
		$this->removeSession();
		$this->setActivity("List view");
        $em = $this->getDoctrine()->getManager();
        $oRepMes = $em->getRepository('BoAdminBundle:Message');
		$nb_tc = $oRepMes->getTotal();
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
		$message = $oRepMes->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
        return $this->render('message/index.html.twig', array(
            'errormessages' => $message,
			'page' => $page, // forward current page to view,
			'nb_pages' => $nb_pages, //total number page,
			'total'=>$nb_tc, // record number.
			'nb_cpp' => $nb_cpp,// line's number to display
			'pm'=>"setting",
			'sm'=>"message",
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
		return $this->redirect($this->generateUrl('message_list'));			
	}
    /**
    * Creates a new Message entity.
    */
    public function newAction(Request $request)
    {
        $message = new Message();
        $form = $this->createForm('Bo\AdminBundle\Form\MessageType', $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();

            return $this->redirectToRoute('message_index');
        }

        return $this->render('message/new.html.twig', array(
            'errormessage' => $message,
            'form' => $form->createView(),
			'pm'=>"setting",
			'sm'=>"message",
        ));
    }
    /**
    * Creates a new Message entity by duplicating an other.
    */
    public function duplicateAction(Message $message)
    {
        $form = $this->createForm('Bo\AdminBundle\Form\MessageType', $message);

        return $this->render('message/new.html.twig', array(
            'errormessage' => $message,
            'form' => $form->createView(),
			'pm'=>"setting",
			'sm'=>"message",
        ));
    }
    /**
    * Finds and displays a Message entity.
    */
    public function showAction(Message $message)
    {
        $deleteForm = $this->createDeleteForm($message);

        return $this->render('message/show.html.twig', array(
            'errormessage' => $message,
            'delete_form' => $deleteForm->createView(),
			'pm'=>"setting",
			'sm'=>"message",
        ));
    }

    /**
    * Displays a form to edit an existing Message entity.
    */
    public function editAction(Request $request, Message $message)
    {
        $deleteForm = $this->createDeleteForm($message);
        $editForm = $this->createForm('Bo\AdminBundle\Form\MessageType', $message);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();

			return $this->redirectToRoute('message_index');
        }

        return $this->render('message/edit.html.twig', array(
            'errormessage' => $message,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"setting",
			'sm'=>"message",
        ));
    }

    /**
    * Deletes a Message entity.
    */
    public function deleteAction(Request $request, Message $message)
    {
        $form = $this->createDeleteForm($message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($message);
            $em->flush();
        }

        return $this->redirectToRoute('message_index');
    }
    /**
     * Search a message.
     */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Message');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$aResult = $oEntity ->search($description);
		$this->setActivity($description." searched by this user");
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:Message:search.html.twig', array(
				'errormessages'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Message:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $messages = $em->getRepository('BoAdminBundle:Message')->findAll();
		$nb_tc = count($messages);
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('motcle');
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aMessage = $em->getRepository('BoAdminBundle:Message')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);

        return $this->render('BoAdminBundle:Message:pagesearch.html.twig', array(
            'errormessages' => $aMessage,
			'page' => $page, // On transmet à la vue la page courante,
        ));
    }

    /**
     * Creates a form to delete a Message entity.
     *
     * @param Message $message The Message entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Message $message)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('message_delete', array('id' => $message->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	private function setActivity($activity){
		return $this->createActivity("Message",$activity);	
	}
}

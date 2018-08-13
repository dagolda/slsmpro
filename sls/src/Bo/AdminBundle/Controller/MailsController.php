<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Mails;
use Bo\AdminBundle\Form\MailsType;

/**
 * Mails controller.
 *
 */
class MailsController extends CommonController
{
    /**
    * Lists all Mails entities.
    */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();		
		$this->setActivity("List view");
        $em = $this->getDoctrine()->getManager();
        $oRepMails = $em->getRepository('BoAdminBundle:Mails');
        $oRepParam = $em->getRepository('BoAdminBundle:Param');
		$nb_tc = $oRepMails->getTotal();
		//get page
		$page = $this->get('session')->get('page');
		if($page==null){
			$page=1;
			$this->get('session')->set('page',1);
		}
		//get number line per page
		$nb_cpp = $oRepParam->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
        $mails = $oRepMails->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
        $form = $this->createForm('Bo\AdminBundle\Form\MailsType', new Mails());
        return $this->render('mails/index.html.twig', array(
            'mails' => $mails,
			'form' => $form->createView(),
			'page' => $page, // forward current page to view,
			'message'=> $this->getSessionMessage(),
			'nb_pages' => $nb_pages, //total number page,
			'total'=>$nb_tc, // record number.
			'nb_cpp' => $nb_cpp,// line's number to display
			'pm'=>"tools",
			'sm'=>"mails",
        ));
    }
    /**
     * Creates a new Mails entity.
     *
     */
    public function newAction(Request $request)
    {
        $mail = new Mails();
        $form = $this->createForm('Bo\AdminBundle\Form\MailsType', $mail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($mail);
            $em->flush();

            return $this->redirectToRoute('mails_index');
        }

        return $this->render('mails/new.html.twig', array(
            'mail' => $mail,
            'form' => $form->createView(),
			'pm'=>"tools",
			'sm'=>"mails",
        ));
    }

    /**
     * Finds and displays a Mails entity.
     *
     */
    public function showAction(Mails $mail)
    {
        $deleteForm = $this->createDeleteForm($mail);

        return $this->render('mails/show.html.twig', array(
            'mail' => $mail,
            'delete_form' => $deleteForm->createView(),
			'pm'=>"tools",
			'sm'=>"mails",
        ));
    }

    /**
     * Displays a form to edit an existing Mails entity.
     *
     */
    public function editAction(Request $request, Mails $mail)
    {
        $deleteForm = $this->createDeleteForm($mail);
        $editForm = $this->createForm('Bo\AdminBundle\Form\MailsType', $mail);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($mail);
            $em->flush();

            return $this->redirectToRoute('mails_index');
        }

        return $this->render('mails/edit.html.twig', array(
            'mail' => $mail,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"tools",
			'sm'=>"mails",
        ));
    }

    /**
     * Deletes a Mails entity.
     *
     */
    public function deleteAction(Request $request, Mails $mail)
    {
        $form = $this->createDeleteForm($mail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($mail);
            $em->flush();
        }

        return $this->redirectToRoute('mails_index');
    }

    /**
     * Creates a form to delete a Mails entity.
     *
     * @param Mails $mail The Mails entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Mails $mail)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('mails_delete', array('id' => $mail->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	private function setActivity($activity){
		return $this->createActivity("Mail",$activity);	
	}
}

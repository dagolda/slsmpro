<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bo\AdminBundle\Entity\BillingContact;
use Bo\AdminBundle\Form\BillingContactType;

/**
* BillingContact controller.
*/
class BillingContactController extends CommonController
{
    /**
    * Lists all BillingContact entities.
    */
    public function indexAction()
    {
	$this->verifySessionRights();
        $em = $this->getDoctrine()->getManager();

        $billingContacts = $em->getRepository('BoAdminBundle:BillingContact')->findAll();

        return $this->render('billingcontact/index.html.twig', array(
            'billingContacts' => $billingContacts,
			'total'=> count($billingContacts),
			'pm'=>"contracts",
			'sm'=>"billingcontact",
        ));
    }

    /**
    * Creates a new BillingContact entity.
    */
    public function newAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$message=null;
        $billingContact = new BillingContact();
        $form = $this->createForm('Bo\AdminBundle\Form\BillingContactType', $billingContact);
        $form->handleRequest($request);

		$email = $billingContact->getEmail();
		if($email){
			$aBContact=$em->getRepository('BoAdminBundle:BillingContact')->findByEmail($email);
			if(isset($aBContact[0])) $message="This contact ".$email." already exist.";
		}
        if ($form->isSubmitted() && $form->isValid() && $message==null) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($billingContact);
            $em->flush();

            return $this->redirectToRoute('billingcontact_index');
        }

        return $this->render('billingcontact/new.html.twig', array(
            'billingContact' => $billingContact,
			'message'=>array('type'=>"Warning",'texte'=>$message),
            'form' => $form->createView(),
			'pm'=>"contracts",
			'sm'=>"billingcontact",
        ));
    }
    /**
    * Finds and displays a BillingContact entity.
    */
    public function showAction(BillingContact $billingContact)
    {
        $deleteForm = $this->createDeleteForm($billingContact);

        return $this->render('billingcontact/show.html.twig', array(
            'billingContact' => $billingContact,
			'message'=> $this->getSessionMessage(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"contracts",
			'sm'=>"billingcontact",
        ));
    }

    /**
     * Displays a form to edit an existing BillingContact entity.
     */
    public function editAction(Request $request, BillingContact $billingContact)
    {
        $deleteForm = $this->createDeleteForm($billingContact);
        $editForm = $this->createForm('Bo\AdminBundle\Form\BillingContactType', $billingContact);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($billingContact);
            $em->flush();		
			return $this->redirectToRoute('billingcontact_index');
        }
		
        return $this->render('billingcontact/edit.html.twig', array(
            'billingContact' => $billingContact,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"contracts",
			'sm'=>"billingcontact",
        ));
    }

    /**
     * Deletes a BillingContact entity.
     */
    public function deleteAction(Request $request, BillingContact $billingContact)
    {
        $form = $this->createDeleteForm($billingContact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$aContract = $em->getRepository('BoAdminBundle:Contracts')->findBy(array('billingcontact'=>$billingContact));
			if(isset($aContract[0])){
				$this->manageMessage('15116','Delete','Warning',"Impossible to delete this entity.");
				return $this->redirectToRoute('billingcontact_show',array('id'=>$billingContact->getId()));
			}
            $em = $this->getDoctrine()->getManager();
            $em->remove($billingContact);
            $em->flush();
        }

        return $this->redirectToRoute('billingcontact_index');
    }

    /**
     * Creates a form to delete a BillingContact entity.
     * @param BillingContact $billingContact The BillingContact entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(BillingContact $billingContact)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('billingcontact_delete', array('id' => $billingContact->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

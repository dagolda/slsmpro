<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Otherprices;
use Bo\AdminBundle\Form\OtherpricesType;

/**
* Otherprices controller.
*/
class OtherpricesController extends CommonController
{
    /**
    * Lists all Otherprices entities.
    */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $otherprices = $em->getRepository('BoAdminBundle:Otherprices')->findAll();
		$form = $this->createForm('Bo\AdminBundle\Form\OtherpricesType', new Otherprices());

        return $this->render('otherprices/index.html.twig', array(
            'otherprices' => $otherprices,
			'form' => $form->createView(),
			'feature'=>$this->getFeature(),
			'pm'=>"contracts",
			'sm'=>"prices",
        ));
    }

    /**
     * Creates a new Otherprices entity.
     *
     */
    public function newAction(Request $request)
    {
        $otherprice = new Otherprices();
        $form = $this->createForm('Bo\AdminBundle\Form\OtherpricesType', $otherprice);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($otherprice);
            $em->flush();

            return $this->redirectToRoute('otherprices_index');
        }

        return $this->render('otherprices/new.html.twig', array(
            'otherprice' => $otherprice,
            'form' => $form->createView(),
			'pm'=>"contracts",
			'sm'=>"prices",
        ));
    }

    /**
    * Finds and displays a Otherprices entity.
    */
    public function showAction(Otherprices $otherprice)
    {
        $deleteForm = $this->createDeleteForm($otherprice);
		$form = $this->createForm('Bo\AdminBundle\Form\OtherpricesType', $otherprice);

        return $this->render('otherprices/show.html.twig', array(
            'otherprice' => $otherprice,
            'delete_form' => $deleteForm->createView(),
			'form' => $form->createView(),
			'feature'=>$this->getFeature(),
			'pm'=>"contracts",
			'sm'=>"prices",
        ));
    }

    /**
    * Displays a form to edit an existing Otherprices entity.
    */
    public function editAction(Request $request, Otherprices $otherprice)
    {
        $deleteForm = $this->createDeleteForm($otherprice);
        $editForm = $this->createForm('Bo\AdminBundle\Form\OtherpricesType', $otherprice);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($otherprice);
            $em->flush();

            return $this->redirectToRoute('otherprices_index');
        }

        return $this->render('otherprices/edit.html.twig', array(
            'otherprice' => $otherprice,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"contracts",
			'sm'=>"prices",
        ));
    }
    /**
    * Deletes a Otherprices entity.
    */
    public function deleteAction(Request $request, Otherprices $otherprice)
    {
        $form = $this->createDeleteForm($otherprice);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($otherprice);
            $em->flush();
        }

        return $this->redirectToRoute('otherprices_index');
    }

    /**
     * Creates a form to delete a Otherprices entity.
     * @param Otherprices $otherprice The Otherprices entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Otherprices $otherprice)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('otherprices_delete', array('id' => $otherprice->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	private function getFeature(){
		if($this->getUserLocale()=="en")
			return array('1'=>'More than 30 hours','2'=>'Less of 30 hours','3'=>'More or less of 30 hours');
		else
			return array('1'=>'Plus de 30 heures','2'=>'Moins de 30 heures','3'=>'Plus ou moins 30 heures');
	}
}

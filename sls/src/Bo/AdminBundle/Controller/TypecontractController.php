<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Typecontract;
use Bo\AdminBundle\Form\TypecontractType;

/**
 * Typecontract controller.
 *
 */
class TypecontractController extends CommonController
{
    /**
     * Lists all Typecontract entities.
     *
     */
    public function indexAction()
    {
		$this->verifySessionRights();
        $em = $this->getDoctrine()->getManager();

        $typecontracts = $em->getRepository('BoAdminBundle:Typecontract')->findAll();
        $form = $this->createForm('Bo\AdminBundle\Form\TypecontractType', new Typecontract());

        return $this->render('typecontract/index.html.twig', array(
            'typecontracts' => $typecontracts,
			'total'=>count($typecontracts),
			'form' => $form->createView(),
			'pm'=>"setting",
			'sm'=>"typecontract",
        ));
    }

    /**
     * Creates a new Typecontract entity.
     *
     */
    public function newAction(Request $request)
    {
        $typecontract = new Typecontract();
        $form = $this->createForm('Bo\AdminBundle\Form\TypecontractType', $typecontract);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typecontract);
            $em->flush();

            return $this->redirect($this->get('session')->get('url'));
        }
		$this->get('session')->set('url',$request->headers->get('referer'));
        return $this->render('typecontract/new.html.twig', array(
            'typecontract' => $typecontract,
            'form' => $form->createView(),
			'url'=>$request->headers->get('referer'),
			'pm'=>"setting",
			'sm'=>"typecontract",
        ));
    }

    /**
     * Finds and displays a Typecontract entity.
     *
     */
    public function showAction(Typecontract $typecontract)
    {
        $deleteForm = $this->createDeleteForm($typecontract);

        return $this->render('typecontract/show.html.twig', array(
            'typecontract' => $typecontract,
            'delete_form' => $deleteForm->createView(),
			'pm'=>"setting",
			'sm'=>"typecontract",
        ));
    }

    /**
     * Displays a form to edit an existing Typecontract entity.
     *
     */
    public function editAction(Request $request, Typecontract $typecontract)
    {
        $deleteForm = $this->createDeleteForm($typecontract);
        $editForm = $this->createForm('Bo\AdminBundle\Form\TypecontractType', $typecontract);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typecontract);
            $em->flush();

            return $this->redirect($this->get('session')->get('url'));
        }
		$this->get('session')->set('url',$request->headers->get('referer'));
        return $this->render('typecontract/edit.html.twig', array(
            'typecontract' => $typecontract,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"setting",
			'sm'=>"typecontract",
        ));
    }

    /**
     * Deletes a Typecontract entity.
     *
     */
    public function deleteAction(Request $request, Typecontract $typecontract)
    {
        $form = $this->createDeleteForm($typecontract);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($typecontract);
            $em->flush();
        }

        return $this->redirectToRoute('typecontract_index');
    }

    /**
     * Creates a form to delete a Typecontract entity.
     *
     * @param Typecontract $typecontract The Typecontract entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Typecontract $typecontract)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('typecontract_delete', array('id' => $typecontract->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

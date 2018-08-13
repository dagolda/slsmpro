<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Pdf;
use Bo\AdminBundle\Form\PdfType;

/**
 * Pdf controller.
 *
 */
class PdfController extends Controller
{
    /**
     * Lists all Pdf entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pdfs = $em->getRepository('BoAdminBundle:Pdf')->findAll();

        return $this->render('pdf/index.html.twig', array(
            'entities' => $pdfs,
			'pm'=>"admin",
			'sm'=>"document",
        ));
    }

    public function newAction()
    {
        $pdf = new Pdf();
        $form   = $this->createCreateForm($pdf);

        return $this->render('BoAdminBundle:Pdf:new.html.twig', array(
            'pdf' => $pdf,
            'form'=> $form->createView(),
			'pm'=>"admin",
			'sm'=>"document",
        ));
    }
	
    /**
     * Creates a form to create a Slider entity.
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Pdf $entity)
    {
        $form = $this->createForm(new PdfType(), $entity, array(
            'action' => $this->generateUrl('pdf_create'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Valider'));
        return $form;
    }
	
    /**
     * Creates a new pdf entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Pdf();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
		$path = $entity->getFile()->getClientOriginalName();
		$entity->setPath($path);
        if ($form->isValid()) {
			$entity->upload();
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('pdf_show', array('id' => $entity->getId())));
        }
        return $this->render('BoAdminBundle:Pdf:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
			'pm'=>"admin",
			'sm'=>"document",
        ));
    }

    /**
     * Finds and displays a Pdf entity.
     *
     */
    public function showAction(Pdf $pdf)
    {
        $deleteForm = $this->createDeleteForm($pdf);

        return $this->render('pdf/show.html.twig', array(
            'pdf' => $pdf,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Pdf entity.
     *
     */
    public function editAction(Request $request, Pdf $pdf)
    {
        $deleteForm = $this->createDeleteForm($pdf);
        $editForm = $this->createForm('Bo\AdminBundle\Form\PdfType', $pdf);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pdf);
            $em->flush();

            return $this->redirectToRoute('pdf_edit', array('id' => $pdf->getId()));
        }

        return $this->render('pdf/edit.html.twig', array(
            'pdf' => $pdf,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Pdf entity.
     *
     */
    public function deleteAction(Request $request, Pdf $pdf)
    {
        $form = $this->createDeleteForm($pdf);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pdf);
            $em->flush();
        }

        return $this->redirectToRoute('pdf_index');
    }

    /**
     * Creates a form to delete a Pdf entity.
     *
     * @param Pdf $pdf The Pdf entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Pdf $pdf)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pdf_delete', array('id' => $pdf->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\EtatMobiliers;
use Bo\AdminBundle\Form\EtatMobiliersType;

/**
 * EtatMobiliers controller.
 *
 */
class EtatMobiliersController extends Controller
{
    /**
     * Lists all EtatMobiliers entities.
     *
     */
    public function indexAction()
    {
		$this->verifySessionRights();
        $em = $this->getDoctrine()->getManager();

        $etatMobiliers = $em->getRepository('BoAdminBundle:EtatMobiliers')->findAll();

        return $this->render('etatmobiliers/index.html.twig', array(
            'etatmobiliers' => $etatMobiliers,
			'pm'=>"local",
			'sm'=>"etatmobiliers",
        ));
    }

    /**
     * Creates a new EtatMobiliers entity.
     *
     */
    public function newAction(Request $request)
    {
        $etatMobilier = new EtatMobiliers();
        $form = $this->createForm('Bo\AdminBundle\Form\EtatMobiliersType', $etatMobilier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($etatMobilier);
            $em->flush();

            return $this->redirectToRoute('etatmobiliers_index');
        }

        return $this->render('etatmobiliers/new.html.twig', array(
            'etatmobilier' => $etatMobilier,
            'form' => $form->createView(),
			'pm'=>"local",
			'sm'=>"etatmobiliers",
			'url'=>$request->headers->get('referer'),
        ));
    }

    /**
     * Finds and displays a EtatMobiliers entity.
     *
     */
    public function showAction(EtatMobiliers $etatMobilier)
    {
        $deleteForm = $this->createDeleteForm($etatMobilier);

        return $this->render('etatmobiliers/show.html.twig', array(
            'etatmobilier' => $etatMobilier,
            'delete_form' => $deleteForm->createView(),
			'pm'=>"local",
			'sm'=>"etatmobiliers",
        ));
    }

    /**
     * Displays a form to edit an existing EtatMobiliers entity.
     *
     */
    public function editAction(Request $request, EtatMobiliers $etatMobilier)
    {
        $deleteForm = $this->createDeleteForm($etatMobilier);
        $editForm = $this->createForm('Bo\AdminBundle\Form\EtatMobiliersType', $etatMobilier);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($etatMobilier);
            $em->flush();

            return $this->redirectToRoute('etatmobiliers_index');
        }

        return $this->render('etatmobiliers/edit.html.twig', array(
            'etatmobilier' => $etatMobilier,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"local",
			'sm'=>"etatmobiliers",
        ));
    }

    /**
     * Deletes a EtatMobiliers entity.
     *
     */
    public function deleteAction(Request $request, EtatMobiliers $etatMobilier)
    {
        $form = $this->createDeleteForm($etatMobilier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($etatMobilier);
            $em->flush();
        }

        return $this->redirectToRoute('etatmobiliers_index');
    }

    /**
     * Creates a form to delete a EtatMobiliers entity.
     *
     * @param EtatMobiliers $etatMobilier The EtatMobiliers entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(EtatMobiliers $etatMobilier)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('etatmobiliers_delete', array('id' => $etatMobilier->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

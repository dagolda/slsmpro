<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Tday;
use Bo\AdminBundle\Form\TdayType;

/**
 * Tday controller.
 *
 */
class TdayController extends Controller
{
    /**
     * Lists all Tday entities.
     *
     */
    public function indexAction()
    {		
        $em = $this->getDoctrine()->getManager();

        $tdays = $em->getRepository('BoAdminBundle:Tday')->findAll();

        return $this->render('tday/index.html.twig', array(
            'tdays' => $tdays,
			'pm'=>"contracts",
			'sm'=>"contracts",
        ));
    }

    /**
     * Creates a new Tday entity.
     *
     */
    public function newAction(Request $request)
    {
        $tday = new Tday();
        $form = $this->createForm('Bo\AdminBundle\Form\TdayType', $tday);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tday);
            $em->flush();

            return $this->redirectToRoute('tday_index');
        }

        return $this->render('tday/new.html.twig', array(
            'tday' => $tday,
            'form' => $form->createView(),
			'pm'=>"contracts",
			'sm'=>"contracts",
        ));
    }

    /**
     * Finds and displays a Tday entity.
     *
     */
    public function showAction(Tday $tday)
    {
        $deleteForm = $this->createDeleteForm($tday);

        return $this->render('tday/show.html.twig', array(
            'tday' => $tday,
            'delete_form' => $deleteForm->createView(),
			'pm'=>"contracts",
			'sm'=>"contracts",
        ));
    }

    /**
     * Displays a form to edit an existing Tday entity.
     *
     */
    public function editAction(Request $request, Tday $tday)
    {
        $deleteForm = $this->createDeleteForm($tday);
        $editForm = $this->createForm('Bo\AdminBundle\Form\TdayType', $tday);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tday);
            $em->flush();

            return $this->redirectToRoute('tday_index');
        }

        return $this->render('tday/edit.html.twig', array(
            'tday' => $tday,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"contracts",
			'sm'=>"contracts",
        ));
    }

    /**
     * Deletes a Tday entity.
     *
     */
    public function deleteAction(Request $request, Tday $tday)
    {
        $form = $this->createDeleteForm($tday);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tday);
            $em->flush();
        }

        return $this->redirectToRoute('tday_index');
    }

    /**
     * Creates a form to delete a Tday entity.
     *
     * @param Tday $tday The Tday entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tday $tday)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tday_delete', array('id' => $tday->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

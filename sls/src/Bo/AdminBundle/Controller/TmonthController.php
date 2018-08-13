<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Tmonth;
use Bo\AdminBundle\Form\TmonthType;

/**
* Tmonth controller.
*/
class TmonthController extends Controller
{
    /**
    * Lists all Tmonth entities.
    */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tmonths = $em->getRepository('BoAdminBundle:Tmonth')->findAll();

        return $this->render('tmonth/index.html.twig', array(
            'tmonths' => $tmonths,
			'pm'=>"contracts",
			'sm'=>"contracts",
        ));
    }

    /**
    * Creates a new Tmonth entity.
    */
    public function newAction(Request $request)
    {
        $tmonth = new Tmonth();
        $form = $this->createForm('Bo\AdminBundle\Form\TmonthType', $tmonth);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tmonth);
            $em->flush();

            return $this->redirectToRoute('tmonth_index');
        }

        return $this->render('tmonth/new.html.twig', array(
            'tmonth' => $tmonth,
            'form' => $form->createView(),
			'pm'=>"contracts",
			'sm'=>"contracts",
        ));
    }

    /**
    * Finds and displays a Tmonth entity.
    */
    public function showAction(Tmonth $tmonth)
    {
        $deleteForm = $this->createDeleteForm($tmonth);

        return $this->render('tmonth/show.html.twig', array(
            'tmonth' => $tmonth,
            'delete_form' => $deleteForm->createView(),
			'pm'=>"contracts",
			'sm'=>"contracts",
        ));
    }

    /**
    * Displays a form to edit an existing Tmonth entity.
    */
    public function editAction(Request $request, Tmonth $tmonth)
    {
        $deleteForm = $this->createDeleteForm($tmonth);
        $editForm = $this->createForm('Bo\AdminBundle\Form\TmonthType', $tmonth);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tmonth);
            $em->flush();

            return $this->redirectToRoute('tmonth_edit', array('id' => $tmonth->getId()));
        }

        return $this->render('tmonth/edit.html.twig', array(
            'tmonth' => $tmonth,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"contracts",
			'sm'=>"contracts",
        ));
    }

    /**
     * Deletes a Tmonth entity.
     *
     */
    public function deleteAction(Request $request, Tmonth $tmonth)
    {
        $form = $this->createDeleteForm($tmonth);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tmonth);
            $em->flush();
        }

        return $this->redirectToRoute('tmonth_index');
    }

    /**
     * Creates a form to delete a Tmonth entity.
     *
     * @param Tmonth $tmonth The Tmonth entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tmonth $tmonth)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tmonth_delete', array('id' => $tmonth->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

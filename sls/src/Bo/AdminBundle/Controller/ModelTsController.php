<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\ModelTs;
use Bo\AdminBundle\Form\ModelTsType;

/**
 * ModelTs controller.
 *
 */
class ModelTsController extends Controller
{
    /**
     * Lists all ModelTs entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $modelTs = $em->getRepository('BoAdminBundle:ModelTs')->findAll();

        return $this->render('modelts/index.html.twig', array(
            'modelTs' => $modelTs,
        ));
    }

    /**
     * Creates a new ModelTs entity.
     *
     */
    public function newAction(Request $request)
    {
        $modelT = new ModelTs();
        $form = $this->createForm('Bo\AdminBundle\Form\ModelTsType', $modelT);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($modelT);
            $em->flush();

            return $this->redirectToRoute('modelts_show', array('id' => $modelts->getId()));
        }

        return $this->render('modelts/new.html.twig', array(
            'modelT' => $modelT,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ModelTs entity.
     *
     */
    public function showAction(ModelTs $modelT)
    {
        $deleteForm = $this->createDeleteForm($modelT);

        return $this->render('modelts/show.html.twig', array(
            'modelT' => $modelT,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ModelTs entity.
     *
     */
    public function editAction(Request $request, ModelTs $modelT)
    {
        $deleteForm = $this->createDeleteForm($modelT);
        $editForm = $this->createForm('Bo\AdminBundle\Form\ModelTsType', $modelT);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($modelT);
            $em->flush();

            return $this->redirectToRoute('modelts_edit', array('id' => $modelT->getId()));
        }

        return $this->render('modelts/edit.html.twig', array(
            'modelT' => $modelT,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ModelTs entity.
     *
     */
    public function deleteAction(Request $request, ModelTs $modelT)
    {
        $form = $this->createDeleteForm($modelT);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($modelT);
            $em->flush();
        }

        return $this->redirectToRoute('modelts_index');
    }

    /**
     * Creates a form to delete a ModelTs entity.
     *
     * @param ModelTs $modelT The ModelTs entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ModelTs $modelT)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('modelts_delete', array('id' => $modelT->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

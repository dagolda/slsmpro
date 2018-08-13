<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use Bo\AdminBundle\Entity\Rubric;
use Bo\AdminBundle\Form\RubricType;

use Bo\AdminBundle\Entity\SubRubric;
use Bo\AdminBundle\Form\SubRubricType;
/**
 * Rubric controller.
 *
 */
class RubricController extends CommonController
{
    /**
     * Lists all Rubric entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rubrics = $em->getRepository('BoAdminBundle:Rubric')->findAll();

        return $this->render('rubric/index.html.twig', array(
            'rubrics' => $rubrics,
			'pm'=>"setting",
			'sm'=>"rubric",
        ));
    }

    /**
     * Creates a new Rubric entity.
     */
    public function newAction(Request $request)
    {
        $rubric = new Rubric();
        $form = $this->createForm('Bo\AdminBundle\Form\RubricType', $rubric);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$res=$this->updateEntity($rubric);

            return $this->redirectToRoute('rubric_index');
        }

        return $this->render('rubric/new.html.twig', array(
            'rubric' => $rubric,
            'form' => $form->createView(),
			'pm'=>"setting",
			'sm'=>"rubric",
        ));
    }	
    /**
     * Creates a new SubRubric entity.
     */
    public function subnewAction(Request $request)
    {
        $srubric = new SubRubric();
        $form = $this->createForm('Bo\AdminBundle\Form\SubRubricType', $srubric);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$res=$this->updateEntity($srubric);
        }
		return $this->redirectToRoute('rubric_show', array('id' => $srubric->getIdrubric()));
    }

    /**
     * Finds and displays a Rubric entity.
     *
     */
    public function showAction(Rubric $rubric)
    {
		$em = $this->getDoctrine()->getManager();
        $deleteForm = $this->createDeleteForm($rubric);
		$srubrics = $em->getRepository('BoAdminBundle:SubRubric')->findBy(array('idrubric'=>$rubric->getId()));
        $srubric = new SubRubric();
		$srubric->setIdrubric($rubric->getId());
        $form = $this->createForm('Bo\AdminBundle\Form\SubRubricType', $srubric);

        return $this->render('rubric/show.html.twig', array(
            'rubric' => $rubric,
			'subrubrics'  => $srubrics,
            'delete_form' => $deleteForm->createView(),
            'form' => $form->createView(),
			'pm'=>"setting",
			'sm'=>"rubric",
        ));
    }

    /**
     * Displays a form to edit an existing Rubric entity.
     *
     */
    public function editAction(Request $request, Rubric $rubric)
    {
        $deleteForm = $this->createDeleteForm($rubric);
        $editForm = $this->createForm('Bo\AdminBundle\Form\RubricType', $rubric);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$res=$this->updateEntity($rubric);
            return $this->redirectToRoute('rubric_index');
        }

        return $this->render('rubric/edit.html.twig', array(
            'rubric' => $rubric,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"setting",
			'sm'=>"rubric",
        ));
    }
	
    /**
     * Displays a form to edit an existing Rubric entity.
     *
     */
    public function subeditAction(Request $request, SubRubric $subrubric)
    {
        $editForm = $this->createForm('Bo\AdminBundle\Form\SubRubricType', $subrubric);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$res=$this->updateEntity($subrubric);
			
			return $this->redirectToRoute('rubric_show', array('id' => $subrubric->getIdrubric()));
        }

        return $this->render('rubric/subedit.html.twig', array(
            'subrubric' => $subrubric,
            'edit_form' => $editForm->createView(),
			'pm'=>"setting",
			'sm'=>"rubric",
        ));
    }

    /**
     * Deletes a Rubric entity.
     *
     */
    public function deleteAction(Request $request, Rubric $rubric)
    {
        $form = $this->createDeleteForm($rubric);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($rubric);
            $em->flush();
        }

        return $this->redirectToRoute('rubric_index');
    }

    /**
     * Creates a form to delete a Rubric entity.
     *
     * @param Rubric $rubric The Rubric entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Rubric $rubric)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rubric_delete', array('id' => $rubric->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

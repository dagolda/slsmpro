<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Level;
use Bo\AdminBundle\Form\LevelType;

/**
 * Level controller.
 *
 */
class LevelController extends Controller
{
    /**
     * Lists all Level entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $levels = $em->getRepository('BoAdminBundle:Level')->findAll();

        return $this->render('level/index.html.twig', array(
            'levels' => $levels,
			'pm'=>"personnel",
			'sm'=>"level",
        ));
    }

    /**
     * Creates a new Level entity.
     *
     */
    public function newAction(Request $request)
    {
        $level = new Level();
        $form = $this->createForm('Bo\AdminBundle\Form\LevelType', $level);
        $form->handleRequest($request);
		$this->get("session")->set('back',$request->headers->get('referer'));
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($level);
            $em->flush();

            return $this->redirectToRoute('level_show', array('id' => $level->getId()));
        }

        return $this->render('level/new.html.twig', array(
            'level' => $level,
            'form' => $form->createView(),
			'pm'=>"personnel",
			'sm'=>"level",
			'url'=>$request->headers->get('referer'),
        ));
    }

    /**
     * Finds and displays a Level entity.
     *
     */
    public function showAction(Level $level)
    {
        $deleteForm = $this->createDeleteForm($level);

        return $this->render('level/show.html.twig', array(
            'level' => $level,
            'delete_form' => $deleteForm->createView(),
			'pm'=>"personnel",
			'sm'=>"level",
        ));
    }

    /**
     * Displays a form to edit an existing Level entity.
     *
     */
    public function editAction(Request $request, Level $level)
    {
        $deleteForm = $this->createDeleteForm($level);
        $editForm = $this->createForm('Bo\AdminBundle\Form\LevelType', $level);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($level);
            $em->flush();

            return $this->redirectToRoute('level_edit', array('id' => $level->getId()));
        }

        return $this->render('level/edit.html.twig', array(
            'level' => $level,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"personnel",
			'sm'=>"level",
        ));
    }

    /**
     * Deletes a Level entity.
     *
     */
    public function deleteAction(Request $request, Level $level)
    {
        $form = $this->createDeleteForm($level);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($level);
            $em->flush();
        }

        return $this->redirectToRoute('level_index');
    }

    /**
     * Creates a form to delete a Level entity.
     *
     * @param Level $level The Level entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Level $level)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('level_delete', array('id' => $level->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

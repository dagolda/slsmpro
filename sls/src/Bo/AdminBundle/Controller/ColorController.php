<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use Bo\AdminBundle\Entity\Color;
use Bo\AdminBundle\Form\ColorType;

/**
* Color controller.
*/
class ColorController extends CommonController
{
    /**
    * Lists all Color entities.
    */
    public function indexAction()
    {
	$this->verifySessionRights();
        $em = $this->getDoctrine()->getManager();

        $colors = $em->getRepository('BoAdminBundle:Color')->findBy(array(),array('id' => 'desc'));
	$form = $this->createForm('Bo\AdminBundle\Form\ColorType', new Color());

        return $this->render('color/index.html.twig', array(
            'colors' => $colors,
			'form' => $form->createView(),
			'pm'=>"tools",
			'sm'=>"color",
        ));
    }

    /**
    * Creates a new Color entity.
    */
    public function newAction(Request $request)
    {
        $color = new Color();
		$message=null;
        $form = $this->createForm('Bo\AdminBundle\Form\ColorType', $color);
        $form->handleRequest($request);
		$this->get("session")->set('back',$request->headers->get('referer'));
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
			$colors = $em->getRepository('BoAdminBundle:Color')->findByName($color->getName());
			if(!isset($colors[0])){
				$this->updateEntity($color);
				$this->setActivity("The color ".$color->getName()." is Created by this user");
				return $this->redirectToRoute('color_index');
			}else{
				$message = array('type'=>"Warning",'texte'=>"This color already exists");
			}           
        }
        return $this->render('color/new.html.twig', array(
            'color' => $color,
	    'message' => $message,
            'form' => $form->createView(),
			'pm'=>"tools",
			'sm'=>"color",
			'url'=>$request->headers->get('referer'),
        ));
    }

    /**
    * Finds and displays a Color entity.
    */
    public function showAction(Color $color)
    {
        $em = $this->getDoctrine()->getManager();
		$em = $this->getDoctrine()->getManager();
		$this->get('session')->set('idcolor',$color->getId());
		$this->setActivity("The color ".$color->getName()." is seen by this user");
        return $this->render('color/show.html.twig', array(
            'color' => $color,
			'pm'=>"tools",
			'sm'=>"color",
        ));
    }

    /**
    * Displays a form to edit an existing Color entity.
    */
    public function editAction(Request $request, Color $color)
    {
        $deleteForm = $this->createDeleteForm($color);
        $editForm = $this->createForm('Bo\AdminBundle\Form\ColorType', $color);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$this->updateEntity($color);
			$this->setActivity("The color ".$color->getName()." is modified by this user");
            return $this->redirectToRoute('color_index');
        }

        return $this->render('color/edit.html.twig', array(
            'color' => $color,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"tools",
			'sm'=>"color",
        ));
    }

    /**
    * Deletes a Color entity.
    */
    public function deleteAction(Request $request, Color $color)
    {
        $form = $this->createDeleteForm($color);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($color);
            $em->flush();
        }

        return $this->redirectToRoute('color_index');
    }
    /**
     * Creates a form to delete a Color entity.
     * @param Color $color The Color entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Color $color)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('color_delete', array('id' => $color->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	private function setActivity($activity){
		return $this->createActivity("Color",$activity);	
	}
}

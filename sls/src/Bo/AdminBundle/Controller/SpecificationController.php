<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use Bo\AdminBundle\Entity\Specification;
use Bo\AdminBundle\Form\SpecificationType;

/**
* Specification controller.
*/
class SpecificationController extends CommonController
{
    /**
    * Lists all Specification entities.
    */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $specifications = $em->getRepository('BoAdminBundle:Specification')->findAll();
		$form = $this->createForm('Bo\AdminBundle\Form\SpecificationType', new Specification());

        return $this->render('specification/index.html.twig', array(
            'specifications' => $specifications,
			'form' => $form->createView(),
			'pm'=>"tools",
			'sm'=>"specification",
        ));
    }

    /**
    * Creates a new Specification entity.
    */
    public function newAction(Request $request)
    {
        $specification = new Specification();
		$message=null;
        $form = $this->createForm('Bo\AdminBundle\Form\SpecificationType', $specification);
        $form->handleRequest($request);
		$this->get("session")->set('back',$request->headers->get('referer'));
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
			$specifications = $em->getRepository('BoAdminBundle:Specification')->findByModule($specification->getModule());
			if(!isset($specifications[0])){
				$this->updateEntity($specification);
				$this->setActivity("The specification ".$specification->getModule()." is Created by this user");
				return $this->redirectToRoute('specification_index');
			}else{
				$message = array('type'=>"Warning",'texte'=>"This specification already exists");
			}           
        }
        return $this->render('specification/new.html.twig', array(
            'specification' => $specification,
			'message' => $message,
            'form' => $form->createView(),
			'pm'=>"tools",
			'sm'=>"specification",
			'url'=>$request->headers->get('referer'),
        ));
    }

    /**
    * Finds and displays a Specification entity.
    */
    public function showAction(Specification $specification)
    {
        $em = $this->getDoctrine()->getManager();
		$em = $this->getDoctrine()->getManager();
		$this->get('session')->set('idspecification',$specification->getId());
		$this->setActivity("The specification ".$specification->getModule()." is seen by this user");
		$form = $this->createForm('Bo\AdminBundle\Form\SpecificationType', $specification);
		
        return $this->render('specification/show.html.twig', array(
            'specification' => $specification,
			'form' => $form->createView(),
			'pm'=>"tools",
			'sm'=>"specification",
        ));
    }

    /**
    * Displays a form to edit an existing Specification entity.
    */
    public function editAction(Request $request, Specification $specification)
    {
        $deleteForm = $this->createDeleteForm($specification);
        $editForm = $this->createForm('Bo\AdminBundle\Form\SpecificationType', $specification);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$this->updateEntity($specification);
			$this->setActivity("The specification ".$specification->getModule()." is modified by this user");
            return $this->redirectToRoute('specification_index');
        }

        return $this->render('specification/edit.html.twig', array(
            'specification' => $specification,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"tools",
			'sm'=>"specification",
        ));
    }

    /**
    * Deletes a Specification entity.
    */
    public function deleteAction(Request $request, Specification $specification)
    {
        $form = $this->createDeleteForm($specification);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($specification);
            $em->flush();
        }

        return $this->redirectToRoute('specification_index');
    }
    /**
     * Creates a form to delete a Specification entity.
     * @param Specification $specification The Specification entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Specification $specification)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('specification_delete', array('id' => $specification->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	private function setActivity($activity){
		return $this->createActivity("Specification",$activity);	
	}
}

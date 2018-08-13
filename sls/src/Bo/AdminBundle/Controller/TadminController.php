<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use Bo\AdminBundle\Entity\Tadmin;
use Bo\AdminBundle\Form\TadminType;

use Bo\AdminBundle\Entity\Employee;

/**
* Tadmin controller.
*/
class TadminController extends CommonController
{
    /**
    * Lists all Tadmin entities.
    */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tadmins = $em->getRepository('BoAdminBundle:Tadmin')->findAll();
		$form = $this->createForm('Bo\AdminBundle\Form\TadminType', new Tadmin());

        return $this->render('tadmin/index.html.twig', array(
            'tadmins' => $tadmins,
			'form' => $form->createView(),
			'pm'=>"personnel",
			'sm'=>"tadmin",
        ));
    }
    /**
    * Creates a new Tadmin entity.
    */
    public function newAction(Request $request, Employee $employee)
    {
        $tadmin = new Tadmin();
		$message=null;
        $form = $this->createForm('Bo\AdminBundle\Form\TadminType', $tadmin);
        $form->handleRequest($request);
		$this->get("session")->set('back',$request->headers->get('referer'));
        if ($form->isSubmitted() && $form->isValid()){
			$tadmin->setEmployee($employee);
			$this->updateEntity($tadmin);
			$this->setActivity("The tadmin ".$tadmin->getEmployee()->getFirstname()." ".$tadmin->getEmployee()->getName()." is Created by this user");
			return $this->redirectToRoute('employee_show',array('id'=>$employee->getId()));         
        }
        return $this->render('tadmin/new.html.twig', array(
            'tadmin' => $tadmin,
			'message' => $message,
            'form' => $form->createView(),
			'pm'=>"personnel",
			'sm'=>"tadmin",
			'url'=>$request->headers->get('referer'),
        ));
    }
    /**
    * Finds and displays a Tadmin entity.
    */
    public function showAction(Tadmin $tadmin)
    {
        $deleteForm = $this->createDeleteForm($tadmin);
		$em = $this->getDoctrine()->getManager();
		$this->get('session')->set('idtadmin',$tadmin->getId());
		$this->setActivity("The tadmin ".$tadmin->getEmployee()->getFirstname()." ".$tadmin->getEmployee()->getName()." is seen by this user");
		$form = $this->createForm('Bo\AdminBundle\Form\TadminType', $tadmin);
		
        return $this->render('tadmin/show.html.twig', array(
            'tadmin' => $tadmin,
			'tadmin_form' => $form->createView(),
			'delete_form' => $deleteForm->createView(),
			'pm'=>"personnel",
			'sm'=>"tadmin",
        ));
    }

    /**
    * Displays a form to edit an existing Tadmin entity.
    */
    public function editAction(Request $request, Tadmin $tadmin)
    {
        $deleteForm = $this->createDeleteForm($tadmin);
        $editForm = $this->createForm('Bo\AdminBundle\Form\TadminType', $tadmin);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$this->updateEntity($tadmin);
			$this->setActivity("The tadmin ".$tadmin->getEmployee()->getFirstname()." ".$tadmin->getEmployee()->getName()." is modified by this user");
			if($tadmin->getEmployee()){
				return $this->redirectToRoute('employee_show',array('id'=>$tadmin->getEmployee()->getId()));
			}else{
				return $this->redirectToRoute('tadmin_index');
			}				   
        }

        return $this->render('tadmin/edit.html.twig', array(
            'tadmin' => $tadmin,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"personnel",
			'sm'=>"tadmin",
        ));
    }

    /**
    * Deletes a Tadmin entity.
    */
    public function deleteAction(Request $request, Tadmin $tadmin)
    {
        $form = $this->createDeleteForm($tadmin);
        $form->handleRequest($request);
		$idemployee = $tadmin->getEmployee()->getId();

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tadmin);
            $em->flush();
        }

        return $this->redirectToRoute('employee_show',array('id'=>$idemployee));
    }
    /**
     * Creates a form to delete a Tadmin entity.
     * @param Tadmin $tadmin The Tadmin entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tadmin $tadmin)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tadmin_delete', array('id' => $tadmin->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	private function setActivity($activity){
		return $this->createActivity("Heures d'admin",$activity);	
	}
}

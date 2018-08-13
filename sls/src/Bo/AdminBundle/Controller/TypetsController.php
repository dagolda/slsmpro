<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Bo\AdminBundle\Entity\Typets;

/**
 * Typets controller.
 *
 */
class TypetsController extends CommonController
{
    /**
     * Lists all Typets entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $typets = $em->getRepository('BoAdminBundle:Typets')->findAll();

        return $this->render('typets/index.html.twig', array(
            'typets' => $typets,
			'pm'=>"accounting",
			'sm'=>"typets"
        ));
    }

    /**
     * Creates a new Typets entity.
     *
     */
    public function newAction(Request $request)
    {
		if($request->isXmlHttpRequest())
		{	
			$name = trim($request->request->get('name'));	
		}
		$em = $this->getDoctrine()->getManager();
		$oRepTT = $em->getRepository('BoAdminBundle:Typets');
		$aTypets = $oRepTT->findByName($name);
		if(isset($aTypets[0])){
			$translated = $this->get('translator')->trans('Can not create this data. It already exist');
			return new Response($translated);
		}
        $typet = new Typets();
		$typet->setName($name);
		$this->updateEntity($typet);
		$typets = $em->getRepository('BoAdminBundle:Typets')->findAll();			

        return $this->render('BoAdminBundle:Typets:tbliste.html.twig', array(
            'typets' => $typets,
        ));
    }

    /**
     * Displays a form to edit an existing Typets entity.
     *
     */
    public function editAction(Request $request, Typets $typet)
    {
        $deleteForm = $this->createDeleteForm($typet);
        $editForm = $this->createForm('Bo\AdminBundle\Form\TypetsType', $typet);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typet);
            $em->flush();

            return $this->redirectToRoute('typets_index');
        }

        return $this->render('typets/edit.html.twig', array(
            'typets' => $typet,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"accounting",
			'sm'=>"typets"
        ));
    }

    /**
     * Deletes a Typets entity.
     *
     */
    public function deleteAction(Request $request, Typets $typet)
    {
        $form = $this->createDeleteForm($typet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($typet);
            $em->flush();
        }

        return $this->redirectToRoute('typets_index');
    }

    /**
     * Creates a form to delete a Typets entity.
     *
     * @param Typets $typet The Typets entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Typets $typet)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('typets_delete', array('id' => $typet->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /**
     * Search a employee.
     */
    public function messageAction(Request $request)
    {
		if($request->isXmlHttpRequest())
		{	
			$id = $request->request->get('id');	
		}
		$message=array('type'=>"Warning",'texte'=>$this->getErrorMessage($id));
		return $this->render('BoAdminBundle:Default:message.html.twig', array(
			'message' => $message,
		));
    }
}

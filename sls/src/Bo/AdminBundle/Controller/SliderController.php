<?php
/* 
* Takatim
* CDMPW Version 0.9
* Auteur: N'VEKOUNOU Moise José
* Date création: 30-10-2014
*/
namespace Bo\AdminBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Controller\OutilController;
use Bo\AdminBundle\Entity\Slider;
use Bo\AdminBundle\Form\SliderType;
/**
* Slider controller.
*/
class SliderController extends CommonController
{
    /**
     * Lists all Slider entities.
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BoAdminBundle:Slider')->findAll();

        return $this->render('BoAdminBundle:Slider:index.html.twig', array(
            'entities' => $entities,
			'pm'=>"admin",
			'sm'=>"document",
        ));
    }
    /**
     * Creates a new Slider entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Slider();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
		$path = $entity->getFile()->getClientOriginalName();
		$entity->setPath($path);
        if ($form->isValid()) {
			$entity->upload();
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_slider_show', array('id' => $entity->getId())));
        }
        return $this->render('BoAdminBundle:Slider:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
			'pm'=>"admin",
			'sm'=>"document",
        ));
    }

    /**
     * Creates a form to create a Slider entity.
     *
     * @param Slider $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Slider $entity)
    {
        $form = $this->createForm(new SliderType(), $entity, array(
            'action' => $this->generateUrl('admin_slider_create'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Valider'));
        return $form;
    }

    /**
     * Displays a form to create a new Slider entity.
     *
     */
    public function newAction()
    {
        $entity = new Slider();
        $form   = $this->createCreateForm($entity);

        return $this->render('BoAdminBundle:Slider:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
			'pm'=>"admin",
			'sm'=>"document",
        ));
    }

    /**
     * Finds and displays a Slider entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BoAdminBundle:Slider')->find($id);

        if (!$entity) {
			$this->get('session')->set('message',"Imposiblle d'identifier la diapositive id=".$id.". La ligne a peut-être été déjà supprimée.");
			return $this->redirect($this->generateUrl('admin_slider'));
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BoAdminBundle:Slider:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
			'pm'=>"admin",
			'sm'=>"document",
        ));
    }
    /**
     * Displays a form to edit an existing Slider entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('BoAdminBundle:Slider')->find($id);
		$url = $this->container->get('request')->headers->get('referer');
        if (!$entity) {
			$this->get('session')->set('message',"Imposiblle d'identifier la diapositive id=".$id.". La ligne a peut-être été déjà supprimée.");
			return $this->redirect($this->generateUrl('admin_slider'));
        }
        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);
        return $this->render('BoAdminBundle:Slider:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
			'url'=>$url,
            'delete_form' => $deleteForm->createView(),
			'pm'=>"admin",
			'sm'=>"document",
        ));
    }
    /**
    * Creates a form to edit a Slider entity.
    *
    * @param Slider $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Slider $entity)
    {
        $form = $this->createForm(new SliderType(), $entity, array(
            'action' => $this->generateUrl('admin_slider_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        $form->add('submit', 'submit', array('label' => 'Enregistrer'));
        return $form;
    }
    /**
     * Edits an existing Slider entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BoAdminBundle:Slider')->find($id);

        if (!$entity) {
			$this->get('session')->set('message',"Imposiblle d'identifier la diapositive id=".$id.". La ligne a peut-être été déjà supprimée.");
			return $this->redirect($this->generateUrl('admin_slider'));
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_slider_edit', array('id' => $id)));
        }

        return $this->render('BoAdminBundle:Slider:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"admin",
			'sm'=>"document",
        ));
    }
    /**
     * Deletes a Slider entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BoAdminBundle:Slider')->find($id);

            if (!$entity) {
			$this->get('session')->set('message',"Imposiblle d'identifier la diapositive id=".$id.". La ligne a peut-être été déjà supprimée.");
			return $this->redirect($this->generateUrl('admin_slider'));
            }
			$entity->removeUpload();
            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_slider'));
    }
}

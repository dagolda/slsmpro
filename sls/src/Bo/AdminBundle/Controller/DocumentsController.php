<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Documents;
use Bo\AdminBundle\Form\DocumentsType;

/**
 * Documents controller.
 *
 */
class DocumentsController extends CommonController
{
    /**
     * Lists all Documents entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $documents = $em->getRepository('BoAdminBundle:Documents')->findAll();

        return $this->render('documents/index.html.twig', array(
            'documents' => $documents,
			'pm'=>"admin",
			'sm'=>"documents",
        ));
    }

    /**
     * Creates a new Documents entity.
     *
     */
    public function newAction(Request $request)
    {
        $document = new Documents();
        $form = $this->createForm('Bo\AdminBundle\Form\DocumentsType', $document);
        $form->handleRequest($request);
		print_r($document);
		exit(0);
        if ($form->isSubmitted() && $form->isValid()) {
            // $file stores the uploaded PDF file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $document->getFile();

            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
			echo $fileName;
			exit(0);

            // Move the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('documents_directory'),
                $fileName
            );
            $this->updateEntity($document);

            return $this->redirectToRoute('documents_index');
        }
		echo "ici";
		exit(0);
        return $this->render('documents/new.html.twig', array(
            'document' => $document,
            'form' => $form->createView(),
			'pm'=>"admin",
			'sm'=>"documents",
        ));
    }

    /**
     * Finds and displays a Documents entity.
     *
     */
    public function showAction(Documents $document)
    {
        $deleteForm = $this->createDeleteForm($document);

        return $this->render('documents/show.html.twig', array(
            'document' => $document,
            'delete_form' => $deleteForm->createView(),
			'pm'=>"admin",
			'sm'=>"documents",
        ));
    }

    /**
     * Displays a form to edit an existing Documents entity.
     *
     */
    public function editAction(Request $request, Documents $document)
    {
        $deleteForm = $this->createDeleteForm($document);
        $editForm = $this->createForm('Bo\AdminBundle\Form\DocumentsType', $document);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($document);
            $em->flush();

            $this->updateEntity($document);
        }

        return $this->render('documents/edit.html.twig', array(
            'document' => $document,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"admin",
			'sm'=>"documents",
        ));
    }

    /**
     * Deletes a Documents entity.
     *
     */
    public function deleteAction(Request $request, Documents $document)
    {
        $form = $this->createDeleteForm($document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($document);
            $em->flush();
        }

        return $this->redirectToRoute('documents_index');
    }

    /**
     * Creates a form to delete a Documents entity.
     *
     * @param Documents $document The Documents entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Documents $document)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('documents_delete', array('id' => $document->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

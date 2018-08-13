<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Emppj;
use Bo\AdminBundle\Form\EmppjType;

/**
 * Emppj controller.
 *
 */
class EmppjController extends Controller
{
    /**
     * Lists all Emppj entities.
     *
     */
    public function indexAction()
    {
	$this->verifySessionRights();
        $em = $this->getDoctrine()->getManager();

        $emppjs = $em->getRepository('BoAdminBundle:emppj')->findAll();

        return $this->render('emppj/index.html.twig', array(
            'emppjs' => $emppjs,
            'pm'=> 'Personnel',
            'sm'=>'employee',
        ));
    }

    /**
     * Creates a new emppj entity.
     *
     */
    public function newAction(Request $request)
    {
        $emppj = new emppj();
        $form = $this->createForm('Bo\AdminBundle\Form\emppjType', $emppj);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();


            //récupération d'un employee
            $employee = $em->getRepository('BoAdminBundle:employee')->find(1);

            $emppj->setEmployee($employee);

            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $emppj->getFilename();

            // Generate a unique name for the file before saving it
           // $fileName = md5(uniqid()).'.'.$file->guessExtension();

           $fileName = $employee->getId()."__".$file->getClientOriginalName();//.'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('employee_directory'),
                $fileName
            );

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $emppj->setFilename($fileName);
            $em->persist($emppj);
            $em->flush();

            return $this->redirectToRoute('emppj_index');
        }

        return $this->render('emppj/new.html.twig', array(
            'emppj' => $emppj,
            'form' => $form->createView(),
            'pm'=> 'Personnel',
            'sm'=>'employee',
        ));
    }

    /**
     * Finds and displays a emppj entity.
     *
     */
    public function showAction(emppj $emppj)
    {
        $deleteForm = $this->createDeleteForm($emppj);

        return $this->render('emppj/show.html.twig', array(
            'emppj' => $emppj,
            'delete_form' => $deleteForm->createView(),
            'pm'=> 'Personnel',
            'sm'=>'employee',
        ));
    }

    /**
     * Displays a form to edit an existing emppj entity.
     *
     */
    public function editAction(Request $request, emppj $emppj)
    {
        $deleteForm = $this->createDeleteForm($emppj);
        $editForm = $this->createForm('Bo\AdminBundle\Form\emppjType', $emppj);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();

             /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $emppj->getFilename();

            // Generate a unique name for the file before saving it
           // $fileName = md5(uniqid()).'.'.$file->guessExtension();
           $fileName = $employee->getId()."__".$file->getClientOriginalName();//.'.'.$file->guessExtension();


            // Move the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('employee_directory'),
                $fileName
            );

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $emppj->setFilename($fileName);
            $em->persist($emppj);
            $em->flush();

            return $this->redirectToRoute('emppj_edit', array('id' => $emppj->getId()));
        }

        return $this->render('emppj/edit.html.twig', array(
            'emppj' => $emppj,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'pm'=> 'Personnel',
            'sm'=>'employee',
        ));
    }

    /**
     * Deletes a emppj entity.
     *
     */
    public function deleteAction(Request $request, emppj $emppj)
    {
        $form = $this->createDeleteForm($emppj);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($emppj);
            $em->flush();
        }

        return $this->redirectToRoute('emppj_index');
    }

    /**
     * Creates a form to delete a emppj entity.
     *
     * @param emppj $emppj The emppj entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(emppj $emppj)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('emppj_delete', array('id' => $emppj->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

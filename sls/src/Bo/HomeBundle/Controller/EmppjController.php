<?php

namespace Bo\HomeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Controller\CommonController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Console\Input\Input;
use Bo\AdminBundle\Entity\Emppj;
use Bo\AdminBundle\Form\EmppjType;

/**
 * Emppj controller.
 *
 */
class EmppjController extends CommonController
{
    /**
     * Lists all Emppj entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $emppjs=$aDeleteForm=null;
		$form = $this->createForm('Bo\AdminBundle\Form\EmppjType', new Emppj());
		$employee=$this->getConnectedEmployee();	
		if($employee){
			$emppjs = $em->getRepository('BoAdminBundle:Emppj')->findBy(array('employee'=>$employee));
			$aDeleteForm = $this->getAllDeleteEpjs($emppjs);
		}		

        return $this->render('BoHomeBundle:Emppj:index.html.twig', array(
			'employee'=>$employee,
			'epjs'=>$emppjs,
			'epjs_delete_form'=>$aDeleteForm,
            'form' => $form->createView(),
            'pm'=> 'document',
            'sm'=>'emppj',
        ));
    }

    /**
     * Creates a new emppj entity.
     *
     */
    public function newAction(Request $request)
    {
        $emppj = new Emppj();
        $form = $this->createForm('Bo\AdminBundle\Form\EmppjType', $emppj);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            //récupération d'un employee
			$user=$this->getTokenUser();
			$employee=$user?$user->getEmployee():null;	

            $emppj->setEmployee($employee);

            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $emppj->getFilename();
			$fileName = $this->get('app.document_uploader')->upload($file);

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $emppj->setFilename($fileName);
            $em->persist($emppj);
            $em->flush();
        }
		return $this->redirectToRoute('home_emppj_index');
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

            return $this->redirectToRoute('home_emppj_index');
        }

        return $this->render('BoHomeBundle:Emppj:edit.html.twig', array(
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

        return $this->redirectToRoute('home_emppj_index');
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
            ->setAction($this->generateUrl('home_emppj_delete', array('id' => $emppj->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	private function getAllDeleteEpjs($emppjs){
		$aResult = array();
		foreach($emppjs as $oEpjs){
			$form = $this->createDeleteForm($oEpjs);
			$aResult[$oEpjs->getId()] = $form->createView();
		}
		return $aResult;
	}
}

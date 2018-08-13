<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use Bo\AdminBundle\Entity\Errors;
use Bo\AdminBundle\Form\ErrorsType;

/**
 * Errors controller.
 *
 */
class ErrorsController extends CommonController
{
    /**
    * Index errors.
    */
    public function indexAction()
    {	
		$this->get('session')->remove('page');
		$this->get('session')->remove('url');
		return $this->redirect($this->generateUrl('errors_list'));		
	}
    /**
    * Lists all Errors entities.
    */
    public function listAction()
    {	
		$this->createActivity("Errors","List view");
        $em = $this->getDoctrine()->getManager();
        $errors = $em->getRepository('BoAdminBundle:Errors')->findAll();
		$nb_tc = count($errors);
		//get page
		$page = $this->get('session')->get('page');
		if($page==null){
			$page=1;
			$this->get('session')->set('page',1);
		}
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$errors = $em->getRepository('BoAdminBundle:Errors')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
        return $this->render('errors/index.html.twig', array(
            'errors' => $errors,
			'page' => $page, // forward current page to view,
			'nb_pages' => $nb_pages, //total number page,
			'total'=>$nb_tc, // record number.
			'nb_cpp' => $nb_cpp,// line's number to display
			'pm'=>"tools",
			'sm'=>"errors"	
        ));
    }
    public function pageAction($option)
    {
		$page=$this->get('session')->get('page');
		if($option==1) $page=1;
		if($option==2) $page=$page-1;
		elseif($option==3) $page=$page+1;
		else $page=$option;
		$this->get('session')->set('page',$page);
		return $this->redirect($this->generateUrl('errors_list'));			
	}
    /**
     * Finds and displays a Errors entity.
     *
     */
    public function showAction(Errors $error)
    {
        $deleteForm = $this->createDeleteForm($error);
        return $this->render('errors/show.html.twig', array(
            'error' => $error,
            'delete_form' => $deleteForm->createView(),
			'pm'=>"tools",
			'sm'=>"errors"	
        ));
    }
    /**
    * Deletes a Errors entity.
    */
    public function deleteAction(Request $request, Errors $error)
    {
        $form = $this->createDeleteForm($error);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
			$res = $this->removeEntity($error);
			if($res>0) $this->createActivity("Errors",$error->getCode()." is deleted by this user");
        }
        return $this->redirectToRoute('errors_index');
    }
    /**
     * Creates a form to delete a Error entity.
     * @param Errors $error The Error entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Errors $error)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('errors_delete', array('id' => $error->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /**
     * Search a room.
     */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Errors');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$aResult = $oEntity ->search($description);
		$this->createActivity("Errors",$description." searched by this user");
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:Errors:search.html.twig', array(
				'errors'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Errors:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $errors = $em->getRepository('BoAdminBundle:Errors')->findAll();
		$nb_tc = count($errors);
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('motcle');
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aErrors = $em->getRepository('BoAdminBundle:Errors')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);

        return $this->render('BoAdminBundle:Errors:pagesearch.html.twig', array(
            'errors' => $aErrors,
			'page' => $page, // On transmet à la vue la page courante,
        ));
    }
}

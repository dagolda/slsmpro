<?php

namespace Bo\AdminBundle\Controller;

use Bo\AdminBundle\Entity\Diary;
use Symfony\Component\HttpFoundation\Request;

/**
 * Diary controller.
 *
 */
class DiaryController extends CommonController
{
    /**
     * Lists all diary entities.
     *
     */
    public function indexAction()
    {
        $oRepDia = $this->getRepository('BoAdminBundle:Diary');
        $oRepParam = $this->getRepository('BoAdminBundle:Param');
	$nb_tc = $oRepDia->getTotal();
	//get page
	$page = $this->get('session')->get('page');
	if($page==null){
		$page=1;
		$this->get('session')->set('page',1);
	}
	//get number line per page
	$nb_cpp = $oRepParam->getParam("display_list_page_number",1);
	$nb_pages = ceil($nb_tc/$nb_cpp);
	$offset = $page>0?($page-1) * $nb_cpp:0;
        $diaries = $oRepDia->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
        $form = $this->createForm('Bo\AdminBundle\Form\DiaryModalType', new Diary());
        return $this->render('diary/index.html.twig', array(
            'diaries' => $diaries,
		'form' => $form->createView(),
		'page' => $page, // forward current page to view,
		'nb_pages' => $nb_pages, //total number page,
		'total'=>$nb_tc, // record number.
		'nb_cpp' => $nb_cpp,// line's number to display
		'pm'=>"contracts",
		'sm'=>"diary",
        ));
    }

    /**
     * Creates a new diary entity.
     *
     */
    public function newAction(Request $request)
    {
        $diary = new Diary();
        $form = $this->createForm('Bo\AdminBundle\Form\DiaryModalType', $diary);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
		$diary = $this->manageDiary($diary);
		$this->updateEntity($diary);

            return $this->redirectToRoute('diary_index');
        }

        return $this->render('diary/new.html.twig', array(
            'diary' => $diary,
            'form' => $form->createView(),
		'pm'=>"contracts",
		'sm'=>"diary",
        ));
    }
	private function manageDiary($diary){
		$oStudent = $diary->getStudents();
		if($oStudent == null) return $diary;
		$oContract = $this->getStudentBothContract($oStudent); 
		if($oContract) $diary->setContracts($oContract);
		return $diary;
	}

    /**
     * Finds and displays a diary entity.
     *
     */
    public function showAction(Diary $diary)
    {
        $deleteForm = $this->createDeleteForm($diary);
        $edit_form = $this->createForm('Bo\AdminBundle\Form\DiaryModalType', $diary);

        return $this->render('diary/show.html.twig', array(
            'diary' => $diary,
            'delete_form' => $deleteForm->createView(),
		'form' => $edit_form->createView(),
		'pm'=>"contracts",
		'sm'=>"diary",
        ));
    }

    /**
     * Displays a form to edit an existing diary entity.
     *
     */
    public function editAction(Request $request, Diary $diary)
    {
        $deleteForm = $this->createDeleteForm($diary);
        $editForm = $this->createForm('Bo\AdminBundle\Form\DiaryType', $diary);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
	    //Get the referer
	    $referer = $request->headers->get('referer');
	    //if the referer is the show page and redirect toward it
	    if($referer!=null and $this->getAction($referer)=="show") return $this->redirect($referer);
	    //Redirect to the list page
            return $this->redirectToRoute('diary_index');
        }

        return $this->render('diary/edit.html.twig', array(
            'diary' => $diary,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
		'pm'=>"contracts",
		'sm'=>"diary",
        ));
    }
    /**
    * Search a diary.
    */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getRepository('BoAdminBundle:Diary');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		//$description = "Willbond";
		$this->get('session')->set('search',$description);
		$aResult = $oEntity ->search($description);
		$this->createActivity("Diary",$description." searched by this user");
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:Diary:search.html.twig', array(
				'diaries'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Diary:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $oRepDia = $this->getRepository('BoAdminBundle:Diary');
        $oRepParam = $this->getRepository('BoAdminBundle:Param');
	$nb_tc = $oRepDia->getTotal();
	if($request->isXmlHttpRequest())
	{	
		$page = $request->request->get('motcle');
	}

	$this->get('session')->set('page',$page);
	//get number line per page
	$nb_cpp = $oRepParam->getParam("display_list_page_number",1);
	$nb_pages = ceil($nb_tc/$nb_cpp);
	$offset = $page>0?($page-1) * $nb_cpp:0;
        $diaries = $oRepDia->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);

        return $this->render('BoAdminBundle:Diary:tbliste.html.twig', array(
		'diaries'=>$diaries,
		'page' => $page, // On transmet à la vue la page courante,
        ));
    }
    /**
     * Deletes a diary entity.
     *
     */
    public function deleteAction(Request $request, Diary $diary)
    {
        $form = $this->createDeleteForm($diary);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($diary);
            $em->flush();
        }

        return $this->redirectToRoute('diary_index');
    }

    /**
     * Creates a form to delete a diary entity.
     *
     * @param Diary $diary The diary entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Diary $diary)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('diary_delete', array('id' => $diary->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

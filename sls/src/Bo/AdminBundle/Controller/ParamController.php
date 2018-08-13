<?php
namespace Bo\AdminBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bo\AdminBundle\Entity\Param;
use Bo\AdminBundle\Form\ParamType;
use Bo\AdminBundle\Form\ParamTypeEdit;

/**
* Param controller.
*/
class ParamController extends CommonController
{
    /** 
    * Index param.
    */
    public function indexAction()
    {
		$this->removeSession();		
		return $this->redirect($this->generateUrl('param_list'));		
	}
    /**
    * Lists all Param entities.
    */
    public function listAction()
    {	
		$this->setActivity("List view");
        $em = $this->getDoctrine()->getManager();
        $oRepParam = $em->getRepository('BoAdminBundle:Param');
		$nb_tc = $oRepParam->getTotal();
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
        $params = $oRepParam->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
        $form = $this->createForm('Bo\AdminBundle\Form\ParamType', new Param());
        return $this->render('param/index.html.twig', array(
            'params' => $params,
			'form' => $form->createView(),
			'page' => $page, // forward current page to view,
			'message'=> $this->getSessionMessage(),
			'nb_pages' => $nb_pages, //total number page,
			'total'=>$nb_tc, // record number.
			'nb_cpp' => $nb_cpp,// line's number to display
			'pm'=>"setting",
			'sm'=>"setting",
        ));
    } 
    public function pageAction($option)
    {
		$page = $this->get('session')->get('page');
		if($option==1) $page=1;
		if($option==2) $page=$page-1;
		elseif($option==3) $page=$page+1;
		else $page=$option;
		$this->get('session')->set('page',$page);
		return $this->redirect($this->generateUrl('param_index'));			
	}
    /**
    * Creates a new Param entity.
    */
    public function newAction(Request $request)
    {
        $param = new Param();
        $form = $this->createForm('Bo\AdminBundle\Form\ParamType', $param);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $res = $this->updateEntity($param);
			if($res>0){
				$this->setActivity($param->getName()." is created by this user");
				return $this->redirectToRoute('param_index');				
			} 
        }
        return $this->render('param/new.html.twig', array(
            'param' => $param,
            'form' => $form->createView(),
			'pm'=>"setting",
			'sm'=>"setting",
        ));
    }

    /**
    * Finds and displays a Param entity.
    */
    public function showAction(Param $param)
    {
        $deleteForm = $this->createDeleteForm($param);
		$this->setActivity($param->getName()." is seen by this user");
		$duplicate_form = $this->createForm('Bo\AdminBundle\Form\ParamType', $param);
        $edit_form = $this->createForm('Bo\AdminBundle\Form\ParamTypeEdit', $param);
		
        return $this->render('param/show.html.twig', array(
            'param' => $param,
			'edit_form' => $edit_form->createView(),
			'form' => $duplicate_form->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"setting",
			'sm'=>"setting",
        ));
    }

    /**
    * Displays a form to edit an existing Param entity.
    */
    public function editAction(Request $request, Param $param)
    {
        $deleteForm = $this->createDeleteForm($param);
        $editForm = $this->createForm('Bo\AdminBundle\Form\ParamTypeEdit', $param);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($param);
            $em->flush();
			$this->setActivity($param->getName()." is modified by this user");
            return $this->redirectToRoute('param_index');
        }

        return $this->render('param/edit.html.twig', array(
            'param' => $param,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"setting",
			'sm'=>"setting",
        ));
    }
    /**
    * Search a param.
    */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Param');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$this->get('session')->set('search',$description);
		$aResult = $oEntity ->search($description);
		$this->setActivity($description." searched by this user");
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:Param:search.html.twig', array(
				'params'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Param:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $params = $em->getRepository('BoAdminBundle:Param')->findAll();
		$nb_tc = count($params);
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('data');
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aParam = $em->getRepository('BoAdminBundle:Param')->findBy(array(),array('id'=>'desc'),$nb_cpp,$offset);
        return $this->render('BoAdminBundle:Param:tbliste.html.twig', array(
            'params' => $aParam,
			'page' => $page, // On transmet à la vue la page courante,
        ));
    }
    /**
    * Deletes a Param entity.
    */
    public function deleteAction(Request $request, Param $param)
    {
        $form = $this->createDeleteForm($param);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($param);
            $em->flush();
        }

        return $this->redirectToRoute('param_index');
    }

    /**
     * Creates a form to delete a Param entity.
     *
     * @param Param $param The Param entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Param $param)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('param_delete', array('id' => $param->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	private function setActivity($activity){
		return $this->createActivity("Employee",$activity);	
	}
}

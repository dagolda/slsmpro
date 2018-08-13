<?php

namespace Bo\AdminBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Entity\Enquiry;
use Bo\AdminBundle\Form\EnquiryType;

/**
* Enquiry controller.
*/
class EnquiryController extends CommonController
{
    /**
    * Index Enquiry
    */
    public function indexAction()
    {	
		$this->get('session')->remove('page');
		return $this->redirect($this->generateUrl('enquiry_list'));		
	}
    /**
    * Lists all Enquiry entities.
    */
    public function listAction()
    {
		$this->verifySessionRights();
        $em = $this->getDoctrine()->getManager();

        $enquiry = $em->getRepository('BoAdminBundle:Enquiry')->findAll();
		$nb_tc = count($enquiry);
		//get page
		$page = $this->get('session')->get('page');
		if($page==null) $page=1;
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$enquiry = $em->getRepository('BoAdminBundle:Enquiry')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);

        return $this->render('enquiry/index.html.twig', array(
            'enquiry' => $enquiry,
			'page' => $page, // On transmet à la vue la page courante,
			'nb_pages' => $nb_pages, //le nombre total de pages,
			'total'=>$nb_tc, // Et le nombre total d'enregistrement.
			'nb_cpp'=>$nb_cpp,
			'pm'=>"contracts",
			'sm'=>"enquiry",
        ));
    }
    public function pageAction($option)
    {
		$this->get('session')->get('page');
		if($option==1) $page=1;
		if($option==2) $page=$page-1;
		elseif($option==3) $page=$page+1;
		else $page=$option;
		$this->get('session')->set('page',$page);
		return $this->redirect($this->generateUrl('enquiry_list'));			
	}
    /**
     * Creates a new Enquiry entity.
     */
    public function newAction(Request $request)
    {
		$message=null;
        $enquiry = new Enquiry();
        $form = $this->createForm('Bo\AdminBundle\Form\EnquiryType', $enquiry);
        $form->handleRequest($request);
		
        if ($form->isSubmitted() && $form->isValid()) {
			$enquiry->setPwd($this->getPassword());
			$res=$this->updateEntity($enquiry);
			if($res!=null){
				$this->createActivity("Enquiry",$enquiry->getName()." ".$enquiry->getFirstname()." is Created");
				if($enquiry->getEmail()!=null) $this->createUser(2,$enquiry);
			}
			return $this->redirectToRoute('enquiry_index');				
        }

        return $this->render('enquiry/new.html.twig', array(
            'enquiry' => $enquiry,
			'message'=>array('type'=>"Warning",'texte'=>$message),
            'form' => $form->createView(),
			'pm'=>"contracts",
			'sm'=>"enquiry",
        ));
    }

    /**
     * Finds and displays a Enquiry entity.
     *
     */
    public function showAction(Enquiry $enquiry)
    {
        $deleteForm = $this->createDeleteForm($enquiry);

        return $this->render('enquiry/show.html.twig', array(
            'enquiry' => $enquiry,
            'delete_form' => $deleteForm->createView(),
			'pm'=>"personnel",
			'sm'=>"enquiry",
        ));
    }

    /**
     * Displays a form to edit an existing Enquiry entity.
     */
    public function editAction(Request $request, Enquiry $enquiry)
    {
        $deleteForm = $this->createDeleteForm($enquiry);
        $editForm = $this->createForm('Bo\AdminBundle\Form\EnquiryType', $enquiry);
        $editForm->handleRequest($request);
		$message=null;
        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$res=$this->updateEntity($enquiry);
			if($res!=null){
				$this->createActivity("Enquiry",$enquiry->getName()." ".$enquiry->getFirstname()." is updated");
			}
			return $this->redirectToRoute('enquiry_index');				
        }
        return $this->render('enquiry/edit.html.twig', array(
            'enquiry' => $enquiry,
			'message'=>array('type'=>"Warning",'texte'=>$message),
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"contracts",
			'sm'=>"enquiry",
        ));
    }
    /**
     * Deletes a Enquiry entity.
     *
     */
    public function deleteAction(Request $request, Enquiry $enquiry)
    {
        $form = $this->createDeleteForm($enquiry);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$user = $this->getDoctrine()->getManager()->getRepository('BoUserBundle:User')->findByEnquiry($enquiry);
			if(isset($user[0])) $this->removeEntity($user[0]);
			$enquiry = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Enquiry')->findByEnquiry($enquiry);
			if(isset($enquiry[0])) $this->removeEntity($enquiry[0]);
			$this->removeEntity($enquiry);
		}
        return $this->redirectToRoute('enquiry_index');
    }
    /**
    * Search a enquiry.
    */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Enquiry');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$aResult = $oEntity ->search($description);
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:Enquiry:search.html.twig', array(
				'enquiry'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Enquiry:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $enquiry = $em->getRepository('BoAdminBundle:Enquiry')->findAll();
		$nb_tc = count($enquiry);
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('motcle');
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aEnquiry = $em->getRepository('BoAdminBundle:Enquiry')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);

        return $this->render('BoAdminBundle:Enquiry:pagesearch.html.twig', array(
            'enquiry' => $aEnquiry,
			'page' => $page, // On transmet à la vue la page courante,
        ));
    }
    /**
     * Creates a form to delete a Enquiry entity.
     *
     * @param Enquiry $enquiry The Enquiry entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Enquiry $enquiry)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('enquiry_delete', array('id' => $enquiry->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

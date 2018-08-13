<?php
namespace Bo\AdminBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bo\AdminBundle\Entity\MotifAbsence;
use Bo\AdminBundle\Form\MotifAbsenceType;
use Bo\AdminBundle\Form\MotifAbsenceTypeEdit;

/**
* MotifAbsence controller.
*/
class MotifAbsenceController extends CommonController
{
    /** 
    * Index motifabsence.
    */
    public function indexAction()
    {
	$this->removeSession();		
	return $this->redirect($this->generateUrl('motifabsence_list'));		
    }
    /**
    * Lists all MotifAbsence entities.
    */
    public function listAction()
    {	
		$this->setActivity("List view");
        $em = $this->getDoctrine()->getManager();
        $oRepParam = $em->getRepository('BoAdminBundle:Param');
        $oRepMotifAbsence = $em->getRepository('BoAdminBundle:MotifAbsence');
		$nb_tc = $oRepMotifAbsence->getTotal();
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
        $motifabsences = $oRepMotifAbsence->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
        $motifAbsence = new MotifAbsence();
        $form = $this->createForm('Bo\AdminBundle\Form\MotifAbsenceType', $motifAbsence);

        return $this->render('motifabsence/index.html.twig', array(
            'motifabsences' => $motifabsences,
			'form' => $form->createView(),
			'page' => $page, // forward current page to view,
			'message'=> $this->getSessionMessage(),
			'nb_pages' => $nb_pages, //total number page,
			'total'=>$nb_tc, // record number.
			'nb_cpp' => $nb_cpp,// line's number to display
			'pm'=>"setting",
			'sm'=>"motifabsence",
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
		return $this->redirect($this->generateUrl('motifabsence_index'));			
	}
    /**
    * Creates a new MotifAbsence entity.
    */
    public function newAction(Request $request)
    {
	$aMessage=null;
        $motifabsence = new MotifAbsence();
        $form = $this->createForm('Bo\AdminBundle\Form\MotifAbsenceType', $motifabsence);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
		$aExistMotif = $this->getRepository('BoAdminBundle:MotifAbsence')->findBy(array('name'=>$motifabsence->getName()));
		if(count($aExistMotif)==0){
		    	$res = $this->updateEntity($motifabsence);
			if($res>0){
				$this->setActivity($motifabsence->getName()." is created by this user");
				return $this->redirectToRoute('motifabsence_index');				
			} 
		}else{
			$message = $this->get('translator')->trans('The name entered already exists');
			$aMessage = array('type'=>"Warning",'texte'=>$message);
		}
        }
        return $this->render('motifabsence/new.html.twig', array(
            'motifabsence' => $motifabsence,
            'form' => $form->createView(),
	    'message' => $aMessage,
			'pm'=>"setting",
			'sm'=>"motifabsence",
        ));
    }

    /**
    * Finds and displays a MotifAbsence entity.
    */
    public function showAction(MotifAbsence $motifabsence)
    {
        $deleteForm = $this->createDeleteForm($motifabsence);
		$this->setActivity($motifabsence->getName()." is seen by this user");
		$duplicate_form = $this->createForm('Bo\AdminBundle\Form\MotifAbsenceType', $motifabsence);
        $edit_form = $this->createForm('Bo\AdminBundle\Form\MotifAbsenceTypeEdit', $motifabsence);
		
        return $this->render('motifabsence/show.html.twig', array(
            'motifabsence' => $motifabsence,
			'edit_form' => $edit_form->createView(),
			'form' => $duplicate_form->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"setting",
			'sm'=>"motifabsence",
        ));
    }

    /**
    * Displays a form to edit an existing MotifAbsence entity.
    */
    public function editAction(Request $request, MotifAbsence $motifabsence)
    {
        $deleteForm = $this->createDeleteForm($motifabsence);
        $editForm = $this->createForm('Bo\AdminBundle\Form\MotifAbsenceType', $motifabsence);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($motifabsence);
            $em->flush();
	    $this->setActivity($motifabsence->getName()." is modified by this user");
            return $this->redirectToRoute('motifabsence_index');
        }

        return $this->render('motifabsence/edit.html.twig', array(
            'motifabsence' => $motifabsence,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"setting",
			'sm'=>"motifabsence",
        ));
    }
    /**
    * Search a motifabsence.
    */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:MotifAbsence');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$this->get('session')->set('search',$description);
		$aResult = $oEntity ->search($description);
		$this->setActivity($description." searched by this user");
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:MotifAbsence:search.html.twig', array(
				'motifabsences'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:MotifAbsence:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $motifabsences = $em->getRepository('BoAdminBundle:MotifAbsence')->findAll();
		$nb_tc = count($motifabsences);
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('data');
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:MotifAbsence')->getMotifAbsence("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aMotifAbsence = $em->getRepository('BoAdminBundle:MotifAbsence')->findBy(array(),array('id'=>'desc'),$nb_cpp,$offset);
        return $this->render('BoAdminBundle:MotifAbsence:tbliste.html.twig', array(
            'motifabsences' => $aMotifAbsence,
			'page' => $page, // On transmet à la vue la page courante,
        ));
    }
    /**
    * Deletes a MotifAbsence entity.
    */
    public function deleteAction(Request $request, MotifAbsence $motifabsence)
    {
        $form = $this->createDeleteForm($motifabsence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($motifabsence);
            $em->flush();
        }

        return $this->redirectToRoute('motifabsence_index');
    }

    /**
     * Creates a form to delete a MotifAbsence entity.
     *
     * @motifabsence MotifAbsence $motifabsence The MotifAbsence entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(MotifAbsence $motifabsence)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('motifabsence_delete', array('id' => $motifabsence->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	private function setActivity($activity){
		return $this->createActivity("Employee",$activity);	
	}
}

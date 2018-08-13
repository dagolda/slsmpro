<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\SecurityCote;
use Bo\AdminBundle\Form\SecurityCoteType;
use Bo\AdminBundle\Entity\Employee;
use Bo\AdminBundle\Entity\Batch;
use Bo\AdminBundle\Form\BatchType;

/**
* SecurityCote controller.
*/
class SecurityCoteController extends CommonController
{
    /**
    * Lists all SecurityCote entities.
    */
    public function indexAction()
    {
		$this->get('session')->remove('url');
        $em = $this->getDoctrine()->getManager();
        $securityCotes = $em->getRepository('BoAdminBundle:SecurityCote')->findAll();
		$nb_tc = count($securityCotes);
		//get page
		$page = $this->get('session')->get('page');
		$this->setActivity("List of Security Cote is seen by this user");
		if($page==null) $page=1;
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$securityCotes = $em->getRepository('BoAdminBundle:SecurityCote')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
        $form = $this->createForm('Bo\AdminBundle\Form\SecurityCoteType', new SecurityCote());
        return $this->render('securitycote/index.html.twig', array(
            'securityCotes' => $securityCotes,
			'page' => $page, // On transmet à la vue la page courante,
			'nb_pages' => $nb_pages, //le nombre total de pages,
			'total'=>$nb_tc, // Et le nombre total d'enregistrement.
			'nb_cpp' => $nb_cpp,// line's number to display
			'form' => $form->createView(),
			'pm'=>"personnel",
			'sm'=>"clearance",
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
		return $this->redirect($this->generateUrl('securitycote_index'));			
	}
    /**
    * Creates a new SecurityCote entity.
    */
    public function newAction(Request $request)
    {
        $securityCote = new SecurityCote();
        $form = $this->createForm('Bo\AdminBundle\Form\SecurityCoteType', $securityCote);
        $form->handleRequest($request);
		$message = null;

        if ($form->isSubmitted() && $form->isValid()) {
			$securityCote->setCreateby($this->getConnected());
			$oEmployee = $securityCote->getEmployee();
			$em = $this->getDoctrine()->getManager();
			$oRep = $em->getRepository('BoAdminBundle:SecurityCote');
			$aSC = $oRep->findBy(array('employee'=>$oEmployee));
			if(!isset($aSC[0])){
				$this->updateEntity($securityCote);
				$this->setActivity("Security Cote of ".$securityCote->getEmployee()->getFirstname()." ".$securityCote->getEmployee()->getName()." is created by this user");
				return $this->redirectToRoute('securitycote_index');				
			}else{
				$message=array('type'=>"Warning",'texte'=>$this->get('translator')->trans('A secury cote already exists for the this employee'));
			}
        }

        return $this->render('securitycote/new.html.twig', array(
            'securityCote' => $securityCote,
            'form' => $form->createView(),
			'message'=>$message,
			'pm'=>"personnel",
			'sm'=>"clearance",
        ));
    }
    /**
     * Finds and displays a SecurityCote entity.
     *
     */
    public function showAction(SecurityCote $securityCote)
    {
        $deleteForm = $this->createDeleteForm($securityCote);

        return $this->render('securitycote/show.html.twig', array(
            'securityCote' => $securityCote,
            'delete_form' => $deleteForm->createView(),
			'pm'=>"personnel",
			'sm'=>"clearance",
        ));
    }

    /**
     * Displays a form to edit an existing SecurityCote entity.
     */
    public function editAction(Request $request, SecurityCote $securityCote)
    {
        $deleteForm = $this->createDeleteForm($securityCote);
        $editForm = $this->createForm('Bo\AdminBundle\Form\SecurityCoteType', $securityCote);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->updateEntity($securityCote);
			$this->setActivity("Security Cote of ".$securityCote->getEmployee()->getFirstname()." ".$securityCote->getEmployee()->getName()." is modified by this user");

            return $this->redirect($this->get('session')->get('url'));
        }
		if($this->get('session')->get('url')==null) $this->get('session')->set('url',$request->headers->get('referer'));
        return $this->render('securitycote/edit.html.twig', array(
            'securityCote' => $securityCote,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"personnel",
			'sm'=>"clearance",
        ));
    }

    /**
     * Deletes a SecurityCote entity.
     */
    public function deleteAction(Request $request, SecurityCote $securityCote)
    {
        $form = $this->createDeleteForm($securityCote);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$this->setActivity("Security Cote of ".$securityCote->getEmployee()->getFirstname()." ".$securityCote->getEmployee()->getName()." is removed by this user");
            $em = $this->getDoctrine()->getManager();
            $em->remove($securityCote);
            $em->flush();
        }

        return $this->redirectToRoute('securitycote_index');
    }

    /**
     * Creates a form to delete a SecurityCote entity.
     * @param SecurityCote $securityCote The SecurityCote entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(SecurityCote $securityCote)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('securitycote_delete', array('id' => $securityCote->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /**
     * Search a room.
     */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:SecurityCote');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$aResult = $oEntity ->search($description);
		$this->createActivity("SecurityCote",$description." searched by this user");
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:Securitycote:search.html.twig', array(
				'securityCotes'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Securitycote:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $aSecurityCote = $em->getRepository('BoAdminBundle:SecurityCote')->findAll();
		$nb_tc = count($aSecurityCote);
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('motcle');
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aSecurityCote = $em->getRepository('BoAdminBundle:SecurityCote')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
		
        return $this->render('BoAdminBundle:Securitycote:pagesearch.html.twig', array(
            'securityCotes' => $aSecurityCote,
			'page' => $page, // On transmet à la vue la page courante,
        ));
    }
	private function setActivity($activity){
		return $this->createActivity("Security Cote",$activity);	
	}
}

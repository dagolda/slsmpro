<?php
namespace Bo\AdminBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Entity\TeamContacts;
use Bo\AdminBundle\Form\TeamContactsType;
use Bo\AdminBundle\Entity\Teachers;
use Bo\AdminBundle\Entity\Batch;
use Bo\AdminBundle\Form\BatchType;
use Bo\AdminBundle\Entity\Advisors;
use Bo\AdminBundle\Entity\Status;
use Bo\AdminBundle\Entity\Language;
use Bo\AdminBundle\Entity\Categoryteacher;
use Bo\AdminBundle\Libs\PHPExcel\Factory;
/** 
* TeamContacts controller.
*/
class TeamContactsController extends CommonController
{
    /** 
    * Index teamcontacts.
    */
    public function indexAction()
    {
		$this->removeSession();		
		$this->get('session')->remove('page');
		$this->get('session')->remove('url');
		return $this->redirect($this->generateUrl('teamcontacts_list'));		
	}
    /**
    * Lists all TeamContacts entities.
    */
    public function listAction()
    {
		$this->verifySessionRights();	
		$this->setActivity("List view");
        $em = $this->getDoctrine()->getManager();
        $oRepEmp = $em->getRepository('BoAdminBundle:TeamContacts');
		$nb_tc = $oRepEmp->getTotal();
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
		$teamcontactss = $em->getRepository('BoAdminBundle:TeamContacts')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
        $tc_form = $this->createForm('Bo\AdminBundle\Form\TeamContactsType', new TeamContacts());
        return $this->render('teamcontacts/index.html.twig', array(
            'teamcontacts' => $teamcontactss,
			'page' => $page, // forward current page to view,
			'message'=> $this->getSessionMessage(),
			'nb_pages' => $nb_pages, //total number page,
			'tc_form' => $tc_form->createView(),
			'total'=>$nb_tc, // record number.
			'nb_cpp' => $nb_cpp,// line's number to display
			'pm'=>"personnel",
			'sm'=>"teamcontacts",
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
		return $this->redirect($this->generateUrl('teamcontacts_list'));			
	}
    /**
    * Creates a new TeamContacts entity.
    */
    public function newAction(Request $request)
    {
		$this->get('session')->remove('page');
        $teamcontacts = new TeamContacts();
        $form = $this->createForm('Bo\AdminBundle\Form\TeamContactsType', $teamcontacts);
        $form->handleRequest($request);
		

        if ($form->isSubmitted() && $form->isValid()) {
			$res = $this->updateEntity($teamcontacts);
			if($res!=null){
				$this->setActivity($teamcontacts->getEmployee()->getName()." ".$teamcontacts->getEmployee()->getFirstname()." is Created by this user");
			}
            return $this->redirectToRoute('teamcontacts_list');
        }
		
        return $this->render('teamcontacts/new.html.twig', array(
            'teamcontacts' => $teamcontacts,
            'form' => $form->createView(),
			'pm'=>"personnel",
			'sm'=>"teamcontacts",
        ));
    }
    /**
    * Finds and displays a TeamContacts entity.
    */
    public function showAction(TeamContacts $teamcontacts)
    {
		$em = $this->getDoctrine()->getManager();
		$ContractEntity = $em->getRepository('BoAdminBundle:Contracts');
		$oTokenuser=$this->getTokenUser();
        $deleteForm = $this->createDeleteForm($teamcontacts);
		if($teamcontacts->getEmployee()){
			$this->setActivity($teamcontacts->getEmployee()->getName()." ".$teamcontacts->getEmployee()->getFirstname()." is consulted by this user");			
		}
        return $this->render('teamcontacts/show.html.twig', array(
            'teamcontact' => $teamcontacts,
            'delete_form' => $deleteForm->createView(),
			'pm'=>"personnel",
			'sm'=>"teamcontacts",
        ));
    }
	private function getEntityProfil($status){
		$em = $this->getDoctrine()->getManager();
		$entity = $em->getRepository('BoAdminBundle:Profil');
		$profil = $this->getProfil($status);
		$aProfil = $entity->findByName($profil);
		if(isset($aProfil[0])) return $aProfil[0];
		return $entity->find(10);
	}
    /**
    * Displays a form to edit an existing TeamContacts entity.
    */
    public function editAction(Request $request, TeamContacts $teamcontacts)
    {
        $deleteForm = $this->createDeleteForm($teamcontacts);
        $editForm = $this->createForm('Bo\AdminBundle\Form\TeamContactsType', $teamcontacts);
        $editForm->handleRequest($request);

        if($editForm->isSubmitted() && $editForm->isValid()){
			$res = $this->updateEntity($teamcontacts);
			if($res>0){
				$this->setActivity($teamcontacts->getEmployee()->getName()." ".$teamcontacts->getEmployee()->getFirstname()." is modified by this user");
				return $this->redirectToRoute('teamcontacts_list');			
			}
        }
		
		if($this->get('session')->get('url')==null) $this->get('session')->set('url',$request->headers->get('referer'));
        return $this->render('teamcontacts/edit.html.twig', array(
            'teamcontacts' => $teamcontacts,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"personnel",
			'sm'=>"teamcontacts",
			'url'=>$request->headers->get('referer'),
        ));
    }

    /**
    * Deletes a TeamContacts entity.
    */
    public function deleteAction(Request $request, TeamContacts $teamcontacts)
    {
		$em = $this->getDoctrine()->getManager();
		if($teamcontacts->getEmployee()){
			$teamcontact = $teamcontacts->getEmployee()->getName()." ".$teamcontacts->getEmployee()->getFirstname();
		}else{
			$teamcontact = "L'id ".$teamcontacts->getId();
		}		
        $form = $this->createDeleteForm($teamcontacts);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
			$res = $this->removeEntity($teamcontacts);
			if($res==false){
				$this->setActivity($teamcontact." is deleted by this user");
			} 
        }

        return $this->redirectToRoute('teamcontacts_index');
    }

    /**
     * Creates a form to delete a TeamContacts entity.
     * @param TeamContacts $teamcontacts The TeamContacts entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TeamContacts $teamcontacts)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('teamcontacts_delete', array('id' => $teamcontacts->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /**
     * Search a teamcontacts.
     */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:TeamContacts');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$aResult = $oEntity ->search($description);
		$this->setActivity($description." searched by this user");
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:TeamContacts:search.html.twig', array(
				'teamcontacts'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:TeamContacts:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
		$oEntity = $em->getRepository('BoAdminBundle:TeamContacts');	
        $teamcontactss = $oEntity->findAll();
		$nb_tc = count($teamcontactss);
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('motcle');
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aTeamContacts = $oEntity->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
        return $this->render('BoAdminBundle:TeamContacts:pagesearch.html.twig', array(
            'teamcontacts' => $aTeamContacts,
			'page' => $page, // On transmet la vue la page courante,
        ));
    }
	
	private function setActivity($activity){
		return $this->createActivity("Team Administrative",$activity);	
	}
}

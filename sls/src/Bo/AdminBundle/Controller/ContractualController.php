<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use Bo\AdminBundle\Entity\Contractual;
use Bo\AdminBundle\Form\ContractualType;

/**
 * Contractual controller.
 *
 */
class ContractualController extends CommonController
{
    /**
    * Lists all Contractual entities.
    */
    public function indexAction()
    {	
		$this->removeSession();
		$this->verifySessionRights();
		$this->setActivity("List view");
        $em = $this->getDoctrine()->getManager();
        $contractuals = $em->getRepository('BoAdminBundle:Contractual')->findAll();
		$nb_tc = count($contractuals);
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
		$contractuals = $em->getRepository('BoAdminBundle:Contractual')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
        $form = $this->createForm('Bo\AdminBundle\Form\ContractualType', new Contractual());
        return $this->render('contractual/index.html.twig', array(
            'contractuals' => $contractuals,
			'form' => $form->createView(),
			'page' => $page, // forward current page to view,
			'nb_pages' => $nb_pages, //total number page,
			'total'=>$nb_tc, // record number.
			'nb_cpp' => $nb_cpp,// line's number to display
			'pm'=>"contracts",
			'sm'=>"contractual",
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
		return $this->redirect($this->generateUrl('contractual_list'));			
	}
    /**
    * Creates a new Contractual entity.
    */
    public function newAction(Request $request, $idcontract)
    {
        $em = $this->getDoctrine()->getManager();
        $contractual = new Contractual();
        $form = $this->createForm('Bo\AdminBundle\Form\ContractualType', $contractual);
        $form->handleRequest($request);
		$message=null;
		if($contractual->getEmail()!=null){
			$contractuals = $em->getRepository('BoAdminBundle:Contractual')->findBy(array('email'=>$contractual->getEmail()));
			if(isset($contractuals[0])){
				$message = $this->getTypeMessage("Info",$this->get('translator')->trans('A contractual contact already exists under this email address. Click on select button to add it to the contract.'));				
			} 				
		}
        if ($form->isSubmitted() && $form->isValid() && $message==null) {
			$oContract = $em->getRepository('BoAdminBundle:Contracts')->find($idcontract);
			$contractual->setCreateby($this->getConnected());
			$res = $this->updateEntity($contractual);
			if($res>0){
				$oContract->addContractual($contractual);
				$this->updateEntity($oContract);
			} 
            return $this->redirectToRoute('contractual_index');
        }
        return $this->render('contractual/new.html.twig', array(
            'contractual' => $contractual,
			'contractuals' => isset($contractuals[0])?$contractuals:null,
			'idcontract' => $idcontract,
            'form' => $form->createView(),
			'message'=>array('type'=>'Warning','texte'=>$message),
			'pm'=>"contracts",
			'sm'=>"contractual",
        ));
    }
    /**
    * Finds and displays a Contractual entity.
    */
    public function showAction(Contractual $contractual)
    {
        $deleteForm = $this->createDeleteForm($contractual);

        return $this->render('contractual/show.html.twig', array(
            'contractual' => $contractual,
            'delete_form' => $deleteForm->createView(),
			'pm'=>"contracts",
			'sm'=>"contractual",
        ));
    }
    /**
    * create user
    */
    public function createuserAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $oContractual = $em->getRepository('BoAdminBundle:Contractual')->find($id);
		$message=null;
		if($oContractual){
			$aUser = $em->getRepository('BoUserBundle:User')->findBy(array('contractual'=>$oContractual));
			if(isset($aUser[0])){ 	
				$message = array('type'=>"Warning",'texte'=>"Sorry CLIC-MANAGER can not create this user. It already exists.");
				$this->get('session')->set('message',$message);
				$this->errorReporting("11183","ContractualController:createuserAction","Sorry CLIC-MANAGER can not create this user. It already exists.");
			}
		}else{
			$message = array('type'=>"Warning",'texte'=>"Sorry CLIC-MANAGER can not create this user. Contractual does not exist.");
			$this->get('session')->set('message',$message);
			$this->errorReporting("11183","ContractualController:createuserAction","Sorry CLIC-MANAGER can not create this user. Contractual does not exist.");
		}
		if($message==null){
			$res=$this->createUser(1,$oContractual);
			if($res!=null){
				$message = array('type'=>"Info",'texte'=>"CLIC-MANAGER User ".$oContractual->getFirstname()." ".$oContractual->getName()." is created successfully.");
				$this->get('session')->set('message',$message);
			}
		}
		return $this->redirectToRoute('contractual_show',array('id'=>$id));

    }
    /**
    * Displays a form to edit an existing Contractual entity.
    */
    public function editAction(Request $request, Contractual $contractual)
    {
        $deleteForm = $this->createDeleteForm($contractual);
        $editForm = $this->createForm('Bo\AdminBundle\Form\ContractualType', $contractual);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contractual);
            $em->flush();

            return $this->redirectToRoute('contractual_index');
        }

        return $this->render('contractual/edit.html.twig', array(
            'contractual' => $contractual,
            'contractual_editform' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"contracts",
			'sm'=>"contractual",
        ));
    }

    /**
     * Deletes a Contractual entity.
     *
     */
    public function deleteAction(Request $request, Contractual $contractual)
    {
        $form = $this->createDeleteForm($contractual);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($contractual);
            $em->flush();
        }

        return $this->redirectToRoute('contractual_index');
    }

    /**
     * Creates a form to delete a Contractual entity.
     *
     * @param Contractual $contractual The Contractual entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Contractual $contractual)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contractual_delete', array('id' => $contractual->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /**
     * Search a contractual.
     */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Contractual');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$aResult = $oEntity ->search($description);
		$this->setActivity($description." searched by this user");
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:Contractual:search.html.twig', array(
				'contractuals'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Contractual:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $contractuals = $em->getRepository('BoAdminBundle:Contractual')->findAll();
		$nb_tc = count($contractuals);
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('motcle');
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aContractual = $em->getRepository('BoAdminBundle:Contractual')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
        return $this->render('BoAdminBundle:Contractual:pagesearch.html.twig', array(
            'contractuals' => $aContractual,
			'page' => $page, // On transmet à la vue la page courante,
        ));
    }
	private function setActivity($activity){
		return $this->createActivity("Contractual",$activity);	
	}
}

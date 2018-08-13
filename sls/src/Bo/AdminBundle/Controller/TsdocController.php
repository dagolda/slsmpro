<?php

namespace Bo\AdminBundle\Controller;

use Bo\AdminBundle\Entity\Tsdoc;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Tsdoc controller.
 *
 */
class TsdocController extends CommonController
{
    /**
     * Lists all tsdoc entities.
     *
     */
    public function indexAction($idemployee)
    {
	$oEmployee = $this->getRepository('BoAdminBundle:Employee')->find($idemployee);
	$this->setActivity("Affichage de la liste");
        $em = $this->getDoctrine()->getManager();
        $oRepTsdoc = $em->getRepository('BoAdminBundle:Tsdoc');
	$nb_tc = $oRepTsdoc->getTotal($oEmployee);
	//get page
	$page = $this->get('session')->get('page');
	if($page==null){
		$page=1;
		$this->get('session')->set('page',1);
	}
	$form = $this->createForm('Bo\AdminBundle\Form\TsdocType', new Tsdoc());
	//get number line per page
	$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
	$nb_pages = ceil($nb_tc/$nb_cpp);
	$offset = $page>0?($page-1) * $nb_cpp:0;
        if($oEmployee){
		$tsdoc = $em->getRepository('BoAdminBundle:Tsdoc')->findBy(array('employee'=>$oEmployee),array('id' => 'desc'),$nb_cpp,$offset);
		$aDeleteForm = $this->getAllDeleteEpjs($tsdoc,$idemployee);
	}

        return $this->render('tsdoc/index.html.twig', array(
	    	'employee'=>$oEmployee,
	    	'tsdocs'=>$tsdoc,
	    	'tsdoc_delete_form'=>$aDeleteForm,
            	'form' => $form->createView(),
		'page' => $page, // forward current page to view,
		'message'=> $this->getSessionMessage(),
		'nb_pages' => $nb_pages, //total number page,
		'total'=>$nb_tc, // record number.
		'nb_cpp' => $nb_cpp,// line's number to display
		'pm'=>"personnel",
		'sm'=>"employee",
        ));
    }
    public function pageAction($option,$idemployee)
    {
	$page=$this->get('session')->get('page');
	if($option==1) $page=1;
	if($option==2) $page=$page-1;
	elseif($option==3) $page=$page+1;
	else $page=$option;
	$this->get('session')->set('page',$page);
	return $this->redirect($this->generateUrl('tsdoc_index',array('idemployee'=>$idemployee)));			
    }

    /**
     * Creates a new tsdoc entity.
     *
     */
    public function newAction(Request $request)
    {
        $tsdoc = new Tsdoc();
        $form = $this->createForm('Bo\AdminBundle\Form\TsdocType', $tsdoc);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            //récupération de l'employee
		$idemployee = $request->request->get('idemployee');
		if($idemployee>0){
			$oEmployee = $this->getEmployeeById($idemployee);
		    	$tsdoc->setEmployee($oEmployee);

		    	/** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
		   	 $file = $tsdoc->getFilename();
			 $fileName = $this->get('app.tsdoc_uploader')->upload($file);

		    	// Update the 'brochure' property to store the PDF file name
		    	// instead of its contents
		    	$tsdoc->setFilename($fileName);
			$tsdoc->setCreateby($this->getFNConnectedEmployee());
		    	$em->persist($tsdoc);
		    	$em->flush();

		    	return $this->redirectToRoute('tsdoc_index',array("idemployee"=>$idemployee));
		}
        }

        return $this->render('tsdoc/new.html.twig', array(
            'tsdoc' => $tsdoc,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tsdoc entity.
     *
     */
    public function showAction(Tsdoc $tsdoc)
    {
	$employee = $tsdoc->getEmployee();
        $deleteForm = $this->createDeleteForm($tsdoc,$employee->getId());

        return $this->render('tsdoc/show.html.twig', array(
            'tsdoc' => $tsdoc,
	    'employee'=>$employee,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tsdoc entity.
     *
     */
    public function editAction(Request $request, Tsdoc $tsdoc)
    {
        $deleteForm = $this->createDeleteForm($tsdoc);
        $editForm = $this->createForm('Bo\AdminBundle\Form\TsdocType', $tsdoc);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tsdoc_edit', array('id' => $tsdoc->getId()));
        }

        return $this->render('tsdoc/edit.html.twig', array(
            'tsdoc' => $tsdoc,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tsdoc entity.
     *
     */
    public function deleteAction(Request $request, Tsdoc $tsdoc, $idemployee)
    {
        $form = $this->createDeleteForm($tsdoc,$idemployee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
		$filepath = $this->getParameter('tsdoc_directory')."/".$tsdoc->getFilename();
		$filesystem = new Filesystem();
		$filesystem->remove($filepath);
            	$em = $this->getDoctrine()->getManager();
            	$em->remove($tsdoc);
            	$em->flush();
        }

        return $this->redirectToRoute('tsdoc_index',array('idemployee'=>$idemployee));
    }
    /**
    * Search a tsdoc.
    */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getRepository('BoAdminBundle:Tsdoc');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$aResult = $oEntity->search($description);
		$this->setActivity($description." searched by this user");
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:Tsdoc:search.html.twig', array(
				'tsdocs'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Tsdoc:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
	$aTsdoc = array();
        $oRepTsdoc = $this->getRepository('BoAdminBundle:Tsdoc');		
		if($request->isXmlHttpRequest())
		{	
			$data = $request->request->get('motcle');
			$aData = explode('-',$data);
			$page = $aData[0];
			$idemployee = $aData[1]; 
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $this->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$oEmployee = $this->getRepository('BoAdminBundle:Employee')->find($idemployee);
		$nb_tc = $oRepTsdoc->getTotal($oEmployee);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		if($oEmployee) $aTsdoc = $this->getRepository('BoAdminBundle:Tsdoc')->findBy(array('employee'=>$oEmployee),array('id' => 'desc'),$nb_cpp,$offset);

        return $this->render('BoAdminBundle:Tsdoc:tbliste.html.twig', array(
            	'tsdocs' => $aTsdoc,
		'page' => $page, // On transmet à la vue la page courante,
        ));
    }
    /**
     * Creates a form to delete a tsdoc entity.
     *
     * @param Tsdoc $tsdoc The tsdoc entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tsdoc $tsdoc,$idemployee)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tsdoc_delete', array('id' => $tsdoc->getId(),'idemployee'=>$idemployee)))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	private function getAllDeleteEpjs($tsdoc,$idemployee){
		$aResult = array();
		foreach($tsdoc as $oEpjs){
			$form = $this->createDeleteForm($oEpjs,$idemployee);
			$aResult[$oEpjs->getId()] = $form->createView();
		}
		return $aResult;
	}
	private function setActivity($activity){
		return $this->createActivity("Employee Absence",$activity);	
	}
}

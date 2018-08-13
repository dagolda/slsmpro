<?php

namespace Bo\HomeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Controller\CommonController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\Filesystem\Filesystem;
use Bo\AdminBundle\Entity\Tsdoc;
use Bo\AdminBundle\Form\TsdocType;

/**
 * Tsdoc controller.
 *
 */
class TsdocController extends CommonController
{
    /** 
    * Index employee.
    */
    public function indexAction()
    {
		$this->removeSession();	
		$this->get('session')->remove('url');	
		return $this->redirect($this->generateUrl('home_tsdoc_list'));		
    }
    /**
     * Lists all Tsdoc entities.
     */
    public function listAction()
    {
        $tsdoc=$aDeleteForm=null;
	$employee=$this->getConnectedEmployee();
	$this->setActivity("Affichage de la liste");
        $em = $this->getDoctrine()->getManager();
        $oRepTsdoc = $em->getRepository('BoAdminBundle:Tsdoc');
	$nb_tc = $oRepTsdoc->getTotal($employee);
	//get page
	$page = $this->get('session')->get('page');
	if($page==null){
		$page=1;
		$this->get('session')->set('page',1);
	}
	//echo $page."<br>";
	$form = $this->createForm('Bo\AdminBundle\Form\TsdocType', new Tsdoc());
	//get number line per page
	$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
	$nb_pages = ceil($nb_tc/$nb_cpp);
	$offset = $page>0?($page-1) * $nb_cpp:0;	
	if($employee){
		$tsdocs = $oRepTsdoc->findBy(array('employee'=>$employee),array('id' => 'desc'),$nb_cpp,$offset);
		$aDeleteForm = $this->getAllDeleteEpjs($tsdocs);
	}		

        return $this->render('BoHomeBundle:Tsdoc:index.html.twig', array(
	    	'employee'=>$employee,
	    	'tsdocs'=>$tsdocs,
	    	'tsdoc_delete_form'=>$aDeleteForm,
            	'form' => $form->createView(),
		'page' => $page, // forward current page to view,
		'message'=> $this->getSessionMessage(),
		'nb_pages' => $nb_pages, //total number page,
		'total'=>$nb_tc, // record number.
		'url'=>$this->get('session')->get('url'),
		'nb_cpp' => $nb_cpp,// line's number to display
            	'pm'=> 'document',
            	'sm'=>'tsdoc',
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
	return $this->redirect($this->generateUrl('home_tsdoc_list'));			
    }
    /**
     * Creates a new tsdoc entity.
     */
    public function newAction(Request $request)
    {
	$referer = $request->headers->get('referer');
	if($this->getAction($referer)=="teacher") $this->get('session')->set('url',$referer);
        $tsdoc = new Tsdoc();
        $form = $this->createForm('Bo\AdminBundle\Form\TsdocType', $tsdoc);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            //récupération d'un employee
		$user=$this->getTokenUser();
		$employee=$user?$user->getEmployee():null;	

            	$tsdoc->setEmployee($employee);

            	/** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
           	 $file = $tsdoc->getFilename();
		 $fileName = $this->get('app.tsdoc_uploader')->upload($file);

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $tsdoc->setFilename($fileName);
	    $tsdoc->setCreateby($this->getFNConnectedEmployee());
            $em->persist($tsdoc);
            $em->flush();
        }
	return $this->redirectToRoute('home_tsdoc_list');
    }

    /**
     * Finds and displays a tsdoc entity.
     *
     */
    public function showAction(tsdoc $tsdoc)
    {
        $deleteForm = $this->createDeleteForm($tsdoc);

        return $this->render('BoHomeBundle:Tsdoc:show.html.twig', array(
            'tsdoc' => $tsdoc,
            'delete_form' => $deleteForm->createView(),
            'pm'=> 'Personnel',
            'sm'=>'employee',
        ));
    }

    /**
     * Displays a form to edit an existing tsdoc entity.
     *
     */
    public function editAction(Request $request, tsdoc $tsdoc)
    {
        $deleteForm = $this->createDeleteForm($tsdoc);
        $editForm = $this->createForm('Bo\AdminBundle\Form\TsdocType', $tsdoc);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();

             /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $tsdoc->getFilename();

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
            $tsdoc->setFilename($fileName);
            $em->persist($tsdoc);
            $em->flush();

            return $this->redirectToRoute('home_tsdoc_index');
        }

        return $this->render('BoHomeBundle:Tsdoc:edit.html.twig', array(
            'tsdoc' => $tsdoc,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'pm'=> 'Personnel',
            'sm'=>'employee',
        ));
    }

    /**
     * Deletes a tsdoc entity.
     *
     */
    public function deleteAction(Request $request, tsdoc $tsdoc)
    {
        $form = $this->createDeleteForm($tsdoc);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
		$filepath = $this->getParameter('tsdoc_directory')."/".$tsdoc->getFilename();
		$filesystem = new Filesystem();
		$filesystem->remove($filepath);
            	$em = $this->getDoctrine()->getManager();
            	$em->remove($tsdoc);
           	$em->flush();
        }

        return $this->redirectToRoute('home_tsdoc_index');
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
     * @param tsdoc $tsdoc The tsdoc entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(tsdoc $tsdoc)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('home_tsdoc_delete', array('id' => $tsdoc->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	private function getAllDeleteEpjs($tsdocs){
		$aResult = array();
		foreach($tsdocs as $tsdoc){
			$form = $this->createDeleteForm($tsdoc);
			$aResult[$tsdoc->getId()] = $form->createView();
		}
		return $aResult;
	}
	private function setActivity($activity){
		return $this->createActivity("Employee Absence",$activity);	
	}
}

<?php 
namespace Bo\AdminBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Entity\SupEmployee;
use Bo\AdminBundle\Form\SupEmployeeType;
use Bo\AdminBundle\Entity\Teachers;
use Bo\AdminBundle\Entity\Batch;
use Bo\AdminBundle\Form\BatchType;
use Bo\AdminBundle\Entity\Advisors;
use Bo\AdminBundle\Entity\Status;
use Bo\AdminBundle\Entity\Language;
use Bo\AdminBundle\Entity\Categoryteacher;
use Bo\AdminBundle\Libs\PHPExcel\Factory;
/** 
* SupEmployee controller.
*/
class SupEmployeeController extends CommonController
{
    /** 
    * Index supemployee.
    */
    public function indexAction()
    {
		$this->removeSession();		
		$this->get('session')->remove('page');
		$this->get('session')->remove('url');
		return $this->redirect($this->generateUrl('supemployee_list'));		
	}
    /**
    * Lists all SupEmployee entities.
    */
    public function listAction()
    {	
		$this->setActivity("List view");
        $em = $this->getDoctrine()->getManager();
        $oRepEmp = $em->getRepository('BoAdminBundle:SupEmployee');
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
		$supemployees = $em->getRepository('BoAdminBundle:SupEmployee')->findBy(array(),array('firstname' => 'asc'),$nb_cpp,$offset);
        return $this->render('supemployee/index.html.twig', array(
            'supemployees' => $supemployees,
			'types'=>$em->getRepository('BoAdminBundle:Contracts')->getContractType(),
			'languages'=>$em->getRepository('BoAdminBundle:Language')->getAll(),
			'statuss'=>$em->getRepository('BoAdminBundle:Employee')->getStatusEmployee(),
			'page' => $page, // forward current page to view,
			'message'=> $this->getSessionMessage(),
			'nb_pages' => $nb_pages, //total number page,
			'total'=>$nb_tc, // record number.
			'nb_cpp' => $nb_cpp,// line's number to display
			'pm'=>"archives",
			'sm'=>"supemployee",
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
		return $this->redirect($this->generateUrl('supemployee_list'));			
	}
    /**
    * Creates a new SupEmployee entity.
    */
    public function newAction(Request $request)
    {
		$this->get('session')->remove('page');
        $supemployee = $this->setDefaultTypeContract();
        $form = $this->createForm('Bo\AdminBundle\Form\SupEmployeeType', $supemployee);
        $form->handleRequest($request);
		

        if ($form->isSubmitted() && $form->isValid()) {
			$supemployee->setPwd($this->getPassword());
			$status = $supemployee->getStatus()->getStatusname();
			$oProfil=$this->getEntityProfil($status);
			$supemployee->setProfil($oProfil);
			$res = $this->updateEntity($supemployee);
			if($res!=null){
				$this->setActivity($supemployee->getName()." ".$supemployee->getFirstname()." is Created by this user");
				if($supemployee->getStatus()) $profil = $this->getProfil($status);
				else $profil = "Teacher";
				$option = $profil=="Teacher"?1:0;
				if(!$this->existUserAccount($supemployee)) $res=$this->createUser($option,$supemployee);
			}
            return $this->redirectToRoute('supemployee_list');
        }
		
		$category_form = $this->createForm('Bo\AdminBundle\Form\CategoryteacherType', new Categoryteacher());
        $status_form = $this->createForm('Bo\AdminBundle\Form\StatusType', new Status());
        $language_form = $this->createForm('Bo\AdminBundle\Form\LanguageType', new Language());
        return $this->render('supemployee/new.html.twig', array(
            'supemployee' => $supemployee,
            'form' => $form->createView(),
            'category_form' => $category_form->createView(),
            'status_form' => $status_form->createView(),
            'language_form' => $language_form->createView(),
			'pm'=>"archives",
			'sm'=>"supemployee",
			'url'=>$request->headers->get('referer'),
        ));
    }
    /**
    * Creates a new Categoryteacher entity.
    */
    public function createcategoryAction(Request $request)
    {
        $categoryteacher = new Categoryteacher();
        $form = $this->createForm('Bo\AdminBundle\Form\CategoryteacherType', $categoryteacher);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$this->updateEntity($categoryteacher);
            return $this->redirectToRoute('supemployee_new');
        }
		
        return $this->render('categoryteacher/new.html.twig', array(
            'categoryteacher' => $categoryteacher,
            'form' => $form->createView(),
			'pm'=>"archives",
			'sm'=>"category",
        ));
    }
    /**
    * Creates a new Status entity.
    */
    public function createstatusAction(Request $request)
    {
        $status = new Status();
        $form = $this->createForm('Bo\AdminBundle\Form\StatusType', $status);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
			$this->updateEntity($status);
            return $this->redirectToRoute('supemployee_new');
        }
	
        return $this->render('status/new.html.twig', array(
            'status' => $status,
            'form' => $form->createView(),
			'pm'=>"archives",
			'sm'=>"status",
        ));
    }
    /**
    * Creates a new Language entity.
    */
    public function createlanguageAction(Request $request)
    {
        $language = new Language();
        $form = $this->createForm('Bo\AdminBundle\Form\LanguageType', $language);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$this->updateEntity($language);

            return $this->redirectToRoute('supemployee_new');
        }

        return $this->render('language/new.html.twig', array(
            'language' => $language,
            'form' => $form->createView(),
			'pm'=>"archives",
			'sm'=>"language",
        ));
    }
    /**
    * Finds and displays a SupEmployee entity.
    */
    public function showAction(SupEmployee $supemployee)
    {
        $deleteForm = $this->createDeleteForm($supemployee);

        return $this->render('supemployee/show.html.twig', array(
            'supemployee' => $supemployee,
			'delete_form' => $deleteForm->createView(),
			'pm'=>"archives",
			'sm'=>"supemployee",
        ));
    }
    /**
    * Deletes a SupEmployee entity.
    */
    public function deleteAction(Request $request, SupEmployee $supemployee)
    {
		$em = $this->getDoctrine()->getManager();
        $form = $this->createDeleteForm($supemployee);
        $form->handleRequest($request);
		$emp_name = $supemployee->getName()." ".$supemployee->getFirstname();

        if ($form->isSubmitted() && $form->isValid()) {
			$res = $this->removeEntity($supemployee);
			if($res==false){
				$this->createActivity("Archive Employee",$emp_name." is deleted by user ");
			} 
        }
        return $this->redirectToRoute('supemployee_index');
    }
    /**
     * Creates a form to delete a SupEmployee entity.
     * @param SupEmployee $supemployee The SupEmployee entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(SupEmployee $supemployee)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('supemployee_delete', array('id' => $supemployee->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /**
     * Search a supemployee.
     */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:SupEmployee');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$aResult = $oEntity ->search($description);
		$this->setActivity($description." searched by this user");
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:SupEmployee:search.html.twig', array(
				'supemployees'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:SupEmployee:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $supemployees = $em->getRepository('BoAdminBundle:SupEmployee')->findAll();
		$nb_tc = count($supemployees);
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('motcle');
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aSupEmployee = $em->getRepository('BoAdminBundle:SupEmployee')->findBy(array(),array('firstname' => 'asc'),$nb_cpp,$offset);

        return $this->render('BoAdminBundle:SupEmployee:pagesearch.html.twig', array(
            'supemployees' => $aSupEmployee,
			'page' => $page, // On transmet à la vue la page courante,
        ));
    }
	private function setActivity($activity){
		return $this->createActivity("Employee",$activity);	
	}
}

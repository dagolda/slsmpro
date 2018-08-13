<?php
namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Local;
use Bo\AdminBundle\Form\LocalType;

use Bo\AdminBundle\Entity\Batch;
use Bo\AdminBundle\Form\BatchType;
use Bo\AdminBundle\Entity\Ccdate;
use Bo\AdminBundle\Form\CcdateType;
/**
* Local controller.
*/
class LocalController extends CommonController
{
    /**
    * Lists all Local entities.
    */
    public function indexAction()
    {	
		$this->setActivity("List view");	
        $em = $this->getDoctrine()->getManager();
		$this->removeSession();
		$this->verifySessionRights();
		$oRep = $em->getRepository('BoAdminBundle:Local');
		$oContractEntity=$em->getRepository('BoAdminBundle:Contracts');
		$nb_tc = $oRep->getTotal();
		//get page
		$page = $this->get('session')->get('page');
		if($page==null) $page=1;
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aLocal = $em->getRepository('BoAdminBundle:Local')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
		$this->updateAllLocal();
		//Pour la recherche des opérations en deux dates 
		$oCcdate = new Ccdate();
        $Ccdateform = $this->createForm('Bo\AdminBundle\Form\CcdateType', $oCcdate);
        $form = $this->createForm('Bo\AdminBundle\Form\LocalType2', new Local());

        return $this->render('local/index.html.twig', array(
           	'locals' => $aLocal,
		'types'=>$oContractEntity->getContractType(),
		'fields'=>$oContractEntity->getWorkFields(),
		'campuss'=>$em->getRepository('BoAdminBundle:Campus')->findAll(),
		'ccd_form' =>  $Ccdateform->createView(),
            	'form' => $form->createView(),
		'now' => new \DateTime(),
		'page' => $page, // On transmet à la vue la page courante,
		'nb_pages' => $nb_pages, //le nombre total de pages,
		'total'=>$nb_tc, // Et le nombre total d'enregistrement.
		'pm'=>"local",
		'sm'=>"local",
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
		return $this->redirect($this->generateUrl('local_index'));			
	}
    /**
    * Creates a new Local entity.
    */
    public function newbatchAction(Request $request)
    {
        $batch = new Batch();
        $form = $this->createForm('Bo\AdminBundle\Form\BatchType', $batch);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$text = $batch->getText();
			$aText = explode("#",$text);
			$aRes=array();
			foreach($aText as $sText){
				if($sText==null) continue;
				$em = $this->getDoctrine()->getManager();
				$asText = explode(";",$sText);
				if($asText[0]==null or $asText[1]==null or $asText[2]==null){
					continue;
					$aRes[]=$sText;
				}
				$local = new Local();
				$local->setReference($asText[0]);
				$local->setDesignation($asText[1]);
				$local->setDimension($asText[3]);
				$oCampus= $em->getRepository('BoAdminBundle:Campus')->find($asText[2]);
				if($oCampus) $em->getRepository('BoAdminBundle:Campus')->find(2);
				$local->setCampus($oCampus);
				if($asText[4]!=null) $local->setDetails($asText[4]);
				if($asText[5]!=null) $local->setNbcomputer($asText[5]);
				$em->persist($local);
				$em->flush();
			}
			return $this->render('local/resbatch.html.twig', array(
				'res' => $aRes,
				'pm'=>"local",
				'sm'=>"local",
			));
        }

        return $this->render('local/newbatch.html.twig', array(
            'batch' => $batch,
            'form' => $form->createView(),
			'pm'=>"local",
			'sm'=>"local",
        ));
    }	
    /**
    * Creates a multiple Local entity.
    */
    public function newAction(Request $request)
    {
        $local = new Local();
        $form = $this->createForm('Bo\AdminBundle\Form\LocalType2', $local);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
			$res = $this->updateEntity($local);
			if($res>0){
				$this->setActivity($local->getReference()." is Created by this user");
				return $this->redirectToRoute('local_show', array('id' => $local->getId()));				
			}
        }
        return $this->render('local/new.html.twig', array(
            'local' => $local,
            'form' => $form->createView(),
			'pm'=>"local",
			'sm'=>"local",
        ));
    }
    /**
    * Display empty room.
    */
    public function emptyAction(Request $request)
    {
		$aEmptyRoom = $this->getEmptyRoom();

        return $this->render('local/empty.html.twig', array(
            'locals' => $aEmptyRoom,
			'total'=>count($aEmptyRoom),
			'now'=>new \DateTime(),
			'pm'=>"local",
			'sm'=>"local",
        ));
    }
    /**
    * Display empty room.
    */
    public function upcomingbugAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
		$oRep = $em->getRepository('BoAdminBundle:Local');
		//$time1 = time();
		$aUpcomming = $oRep->getUpcomingBug();
		/*
		$time2 = time();
		echo $time2."<br>";
		echo $time1."<br>";
		echo ($time2-$time1);
		exit(0);
		*/

        return $this->render('local/empty.html.twig', array(
            'locals' => $aUpcomming,
			'total'=>count($aUpcomming),
			'now'=>new \DateTime(),
			'pm'=>"local",
			'sm'=>"local",
        ));
    }
    /**
    * Finds and displays a Local entity.
    */
    public function freeAction(Local $local){
		$local->setStatus(0);
		$res = $this->updateEntity($local);
		if($res>0){
			$this->setActivity($local->getReference()." is Created by this user");			
		}
		return $this->redirectToRoute('local_show', array('id' => $local->getId()));
	}
    /**
    * Finds and displays a Local entity.
    */
    public function showAction(Local $local)
    {
		$this->setActivity($local->getReference()." have been seen by this user");
		$em = $this->getDoctrine()->getManager();
        	$deleteForm = $this->createDeleteForm($local);
		$oGroup=$aStudents=$aTeachers=$training=$bGroup=$oContract=null;	
		$now = new \DateTime();
		$aTraining=$aStudents=$aTeachers=$aGroup=$aTeacherSchedule=null;
		$aContracts = $this->getContractsInLocal($local);
		if($local->getStatus()==0 and count($aContracts)>0) $this->updateStatusByLocal($local);
		if(isset($aContracts[0])){
			foreach($aContracts as $oContract){
				$trainings = $em->getRepository('BoAdminBundle:Training')->findBy(array('contracts'=>$oContract));
				$aCTraining[$oContract->getId()] = $trainings;
				//if($oContract->getGroup()) $aGroup[] = $oContract->getGroup();
				$students = $oContract->getStudents();
				$aCStudents[$oContract->getId()] = $students;
				$teachers = $oContract->getEmployee();	
				$aCTeachers[$oContract->getId()] = $teachers;
				$teacherschedule = $em->getRepository('BoAdminBundle:Agenda')->getTeacherschedule($teachers,$oContract);	
				$aCTeacherSchedule[$oContract->getId()] = $teacherschedule[0];
			}			
		}
		$aGroup=$this->getGroupInLocal($local);
		if($local->getStatus()==0 and count($aGroup)>0) $this->updateStatusByLocal($local);
		if(isset($aGroup[0])){
			foreach($aGroup as $oGroup){
				$trainings = $em->getRepository('BoAdminBundle:Training')->findBy(array('idgroup'=>$oGroup->getId()));
				$aGTraining[$oGroup->getId()] = $trainings;
				//$bGroup = 1;	
				$teachers = $oGroup->getEmployee(); 
				$aGTeachers[$oGroup->getId()] = $teachers;
				$students = $em->getRepository('BoAdminBundle:Students')->StudentByGroup($oGroup);
				$aGStudents[$oGroup->getId()] = $students;
				$aContracts=null;	
				$teacherschedule = $em->getRepository('BoAdminBundle:Agenda')->getGTeacherschedule($teachers,$oGroup);
				$aGTeacherSchedule[$oGroup->getId()] = $teacherschedule;
				
			}
		}
        	return $this->render('local/show.html.twig', array(
			'ctrainings'=>isset($aCTraining)?$aCTraining:null,
			'gtrainings'=>isset($aGTraining)?$aGTraining:null,
            		'local' => $local,
			'cstudents'=>isset($aCStudents)?$aCStudents:null,
			'gstudents'=>isset($aGStudents)?$aGStudents:null,
			'contracts'=>$aContracts,
			'status'=>$this->getLocalStatus(),
			'cteachers'=>isset($aCTeachers)?$aCTeachers:null,
			'gteachers'=>isset($aGTeachers)?$aGTeachers:null,
			'cteacherschedule'=>isset($aCTeacherSchedule)?$aCTeacherSchedule:null,
			'gteacherschedule'=>isset($aGTeacherSchedule)?$aGTeacherSchedule:null,
			'groups'=>$aGroup,
			'now' => $now,
            		'delete_form' => $deleteForm->createView(),
			'pm'=>"local",
			'sm'=>"local",
        	));
    }
    /**
    * Displays a form to edit an existing Local entity.
    */
    public function editAction(Request $request, Local $local)
    {
        $deleteForm = $this->createDeleteForm($local);
        $editForm = $this->createForm('Bo\AdminBundle\Form\LocalType2', $local);
        $editForm->handleRequest($request);

        if($editForm->isSubmitted() && $editForm->isValid()){
			$res = $this->updateEntity($local);
			if($res>0){
				$this->setActivity($local->getReference()." have been modified by this user");
				return $this->redirectToRoute('local_show', array('id' => $local->getId()));				
			}
        }
		
        return $this->render('local/edit.html.twig', array(
            'local' => $local,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"local",
			'sm'=>"local",
        ));
    }
    /**
    * Deletes a Local entity.
    */
    public function deleteAction(Request $request, Local $local)
    {
		$sReference = $local->getReference();
        $form = $this->createDeleteForm($local);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($local);
            $em->flush();
			$this->setActivity($sReference." have been deleted by this user");
        }

        return $this->redirectToRoute('local_index');
    }

    /**
     * Creates a form to delete a Local entity.
     *
     * @param Local $local The Local entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Local $local)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('local_delete', array('id' => $local->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /**
    * Search a room.
    */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Local');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');
			$this->get('session')->set('search',$description);			
		}
		$aResult = $oEntity ->search($description);
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:Local:search.html.twig', array(
				'locals'=>$aResult,
				'count'=>count($aResult),
				'now'=>new \DateTime(),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Local:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $locals = $em->getRepository('BoAdminBundle:Local')->findAll();
		$nb_tc = count($locals);	
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('motcle');
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aLocal = $em->getRepository('BoAdminBundle:Local')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);

        return $this->render('BoAdminBundle:Local:pagesearch.html.twig', array(
            'locals' => $aLocal,
			'now'=>new \DateTime(),
			'page' => $page, // On transmet à la vue la page courante,
        ));
    }
    public function extrasearchAction(Request $request)
    {
		if($request->isXmlHttpRequest())
		{	
			$data = $request->request->get('data');	
			$this->setSessionByName('data',$data);
		}
		$aData = explode(":",$data);
		$idcampus = $aData[0];
		$idstatus = $aData[1];
		//$idtype = $aData[2];
		$em = $this->getDoctrine()->getManager();
		$oRep = $em->getRepository('BoAdminBundle:Local');
		$aLocal = $oRep->getExtraData($idcampus,$idstatus);
		$this->setSessionByName('option',1);
        return $this->render('BoAdminBundle:Local:search.html.twig', array(
            'locals' => $aLocal,
			'now' => new \DateTime(),
			'count'=>count($aLocal),
		));
    }
	private function getLocalFromData(){
		$em = $this->getDoctrine()->getManager();
		$oRep = $em->getRepository('BoAdminBundle:Local');
		$data = $this->get('session')->get('data');
		$aData = explode(":",$data);
		if(isset($aData[0]) and isset($aData[1])){
			$idcampus = $aData[0];
			$idstatus = $aData[1];
			$em = $this->getDoctrine()->getManager();
			$oRep = $em->getRepository('BoAdminBundle:Local');
			return $oRep->getExtraData($idcampus,$idstatus);
		}
		return null;
	}
    /**
    * return to the previous search
    */
    public function backAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$oEntity = $em->getRepository('BoAdminBundle:Local');	
		$description = $this->get('session')->get('search');
		if($description!=null){		
			$aResult = $oEntity ->search($description);
			if(!isset($aResult[0])) return $this->redirect($this->generateUrl('local_index'));	
			else{
				return $this->render('local/back.html.twig', array(
					'locals'=>$aResult,
					'count'=>count($aResult),
					'description'=>$description,
					'now' => new \DateTime(),
					'pm'=>"local",
					'sm'=>"local",
				));				
			}
		}else{	
			$oContractEntity=$em->getRepository('BoAdminBundle:Contracts');
			$nb_tc = $oEntity->getTotal();
			$aLocal = $this->getLocalFromData();
			if($aLocal==null) return $this->redirect($this->generateUrl('local_index'));
			//Pour la recherche des opérations en deux dates 
			$oCcdate = new Ccdate();
			$Ccdateform = $this->createForm('Bo\AdminBundle\Form\CcdateType', $oCcdate);
			$form = $this->createForm('Bo\AdminBundle\Form\LocalType2', new Local());

			return $this->render('local/index.html.twig', array(
				'locals' => $aLocal,
				'types'=>$oContractEntity->getContractType(),
				'fields'=>$oContractEntity->getWorkFields(),
				'campuss'=>$em->getRepository('BoAdminBundle:Campus')->findAll(),
				'ccd_form' =>  $Ccdateform->createView(),
				'now' => new \DateTime(),
				'form' => $form->createView(),
				//'page' => $page, // On transmet à la vue la page courante,
				//'nb_pages' => $nb_pages, //le nombre total de pages,
				'total'=>$nb_tc, // Et le nombre total d'enregistrement.
				'pm'=>"local",
				'sm'=>"local",
			));		
		}			
    }	
	public function updateAction(){
		$em = $this->getDoctrine()->getManager();
		$oContractEntity=$em->getRepository('BoAdminBundle:Contracts');
		$aContract = $oContractEntity->findAll();
		foreach($aContract as $oContract){
			$aLocal = $oContract->getLocal();
			echo count($aLocal).'<br>';
			if(isset($aLocal[0])){
				foreach($aLocal as $oLocal){
					//echo count($oLocal->getContracts());
					echo (int) $this->cheickContract($oContract);
/*
					if($this->cheickContract($oContract)==false){
						$oLocal->addContract($oContract);
						$this->updateEntity($oLocal);						
					}	*/						
				}
			}
			/*elseif($oContract->getGroup() and $oContract->getGroup()!=null){
				$aLocal = $oContract->getGroup()->getLocal();
				foreach($aLocal as $oLocal){
					$oGroup = $oContract->getGroup();
					if($this->cheickGroup($oGroup)==false){
						$oLocal->addGroup($oGroup);
						$this->updateEntity($oLocal);
					}
				}				
			}*/			
		}
		exit(0);
	}
	private function cheickContract($oContract){
		$em = $this->getDoctrine()->getManager();
		$aRes = $em->getRepository('BoAdminBundle:Local')->getByContract($oContract);
		if(isset($aRes[0])) return true;
		return false;
	}
	private function cheickGroup($oGroup){
		$em = $this->getDoctrine()->getManager();
		$aRes = $em->getRepository('BoAdminBundle:Local')->getByGroup($oGroup);
		if(isset($aRes[0])) return true;
		return false;
	}
	private function setActivity($activity){
		return $this->createActivity("Local",$activity);	
	}
}

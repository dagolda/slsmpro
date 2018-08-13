<?php

namespace Bo\AdvisorsBundle\Controller;

use Bo\AdminBundle\Controller\CommonController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Bo\AdminBundle\Entity\Contracts;
use Bo\AdminBundle\Entity\Students;
use Bo\AdminBundle\Entity\Revision;

class SupervisionController extends CommonController
{
    /**
    * Index Contracts
    */
    public function indexAction($status)
    {
		$this->removeSession();
		$this->get('session')->remove('page');
		return $this->redirect($this->generateUrl('dash_supervision_list',array('status'=>$status)));		
	}
    public function contractsAction(Request $request, $status)
    {
	$em = $this->getDoctrine()->getManager();
        $oRepContract = $em->getRepository('BoAdminBundle:Contracts');
	$nb_tc = $oRepContract->getContractAdvisorTotal($status,$this->getConnectedEmployee());
	$page = $this->get('session')->get('page');
	if($page==null) $page=1;
	//get number line per page
	$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
	$nb_pages = ceil($nb_tc/$nb_cpp);
	$offset = $page>0?($page-1) * $nb_cpp:0;
	if($status==0){
	$aContracts = $oRepContract->findBy(array('advisor'=>$this->getConnectedEmployee(),'status'=>$status),array('id' => 'asc'),$nb_cpp,$offset);
	}else{
		$aContracts = $oRepContract->getBothContractAdvisor($this->getConnectedEmployee());
	}
	$this->get('session')->set('page',$page);
	$this->setActivity("Supervision");	
        return $this->render('BoAdvisorsBundle:Supervision:contracts.html.twig',array(
		'contracts' => $aContracts,
		'status'=>$status,
		'total'=>$nb_tc,
		'now'=>$this->getToday(),
		'page' => $page, // On transmet à la vue la page courante,
		'nb_pages' => $nb_pages, //le nombre total de pages,
		'nb_cpp'=>$nb_cpp,
		'employee'=>$this->getConnectedEmployee(),
		'pm'=>"tabeau-bord",
		'sm'=>"supervision",			
	));
    }
    /**
    * Finds and displays a Contracts entity.
    */
    public function showcontractAction(Contracts $contract)
    {
		$em = $this->getDoctrine()->getManager();
		$oRepTSch = $em->getRepository('BoAdminBundle:HTeacherSchedule');
		$this->setSessionByName('idcontracts',$contract->getId());
		$students = $contract->getStudents();
		$training = $em->getRepository('BoAdminBundle:Training')->findBy(array('contracts'=>$contract));
		if(isset($training[0])) $training=$training[0];
		$revisions = $em->getRepository('BoAdminBundle:Revision')->findBy(array('idcontracts'=>$contract->getId()));
		$aTeachers = $contract->getEmployee();
		if(!isset($aTeachers[0]) and $contract->getGroup()){
			$aTeachers = $contract->getGroup()->getEmployee();
		} 
		$aTeacherSchedule = $em->getRepository('BoAdminBundle:Agenda')->getTeacherschedule($aTeachers,$contract);
		$aHstudents = $em->getRepository('BoAdminBundle:HistoStudents')->getHistoriqueStudent($contract);
		//array of entity HTeacherschedule
		$aHTS0 = $oRepTSch->getContractTeacherschedule($contract); 
		if($contract->getGroup() and count($this->getContractByGroup($contract->getGroup()))>1){
			$aLocal = $contract->getGroup()->getLocal();
		}else{
			$aLocal = $contract->getLocal();
		}
		$page = $this->get('session')->get('page');
		$this->get('session')->set('page',$page);
		$lefthours = ($contract->getHoursnumber()>0 and $contract->getUsedHours()>0)?floatval($contract->getHoursnumber())-floatval($contract->getUsedHours()):null;
		$aSubstitution = $this->getSubstitutions($contract);
        return $this->render('BoAdvisorsBundle:Supervision:show.html.twig',array(
            'contract' => $contract,
			'lefthours'=> $lefthours,
			'coordinator'=>$contract->getCoordinator(),
			'students'=>$students,
			'revisions'=>$revisions,
			'advisors'=>$em->getRepository('BoAdminBundle:Advisors')->findBy(array(),array('id' => 'desc')),
			'teacherschedule'=>isset($aTeacherSchedule[0])?$aTeacherSchedule[0]:null,
			'htss0'=>$aHTS0,//Historique de Teacher Schedule
			'hts'=>isset($aHTS0[0])?$oRepTSch->getScheduleForTeacher($aHTS0):null,//Historique de Teacher Schedule
			'hstudents' => $aHstudents,
			'tscheduleid'=>isset($aTeacherSchedule[1])?$aTeacherSchedule[1]:null,
			'teachers'=>$aTeachers,// for the list of teachers
			'listteacher' => $em->getRepository('BoAdminBundle:Teachers')->findAllTeacher(),
			'locals'=>$aLocal,// for the list of locals
			'message'=>array('type'=>"Warning",'texte'=>$this->get('session')->get('message')),
			'idteacher'=>$this->get('session')->get('idteacher'),
			'idlocal'=>$this->get('session')->get('idlocal'),
			'status'=>$this->getContractStatus(),//get status definition list
			'employee'=>$this->getConnectedEmployee(),
			'substitutions'=>$aSubstitution,
			'subteachers'=>$this->getSubTeachers($aSubstitution),
			'training'=>$training,
			'pm'=>"tabeau-bord",
			'sm'=>"supervision",	
        ));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $oRepContract = $em->getRepository('BoAdminBundle:Contracts');
		if($request->isXmlHttpRequest())
		{	
			$data = $request->request->get('data');
			$aData = explode("-",$data);
			$page=$aData[0];
			$status=$aData[1];
		}
		$nb_tc = $oRepContract->getContractAdvisorTotal($status,$this->getConnectedEmployee());
		$this->get('session')->set('page',$page);
		$this->get('session')->set('status',$status);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		if($status==0){
			$aContracts = $oRepContract->findBy(array('advisor'=>$this->getConnectedEmployee(),'status'=>$status),array('id' => 'asc'),$nb_cpp,$offset);
		}else{
			$aContracts = $oRepContract->getBothContractAdvisor($this->getConnectedEmployee());
		}	
        return $this->render('BoAdvisorsBundle:Supervision:contractlist.html.twig',array(
			'contracts' => $aContracts,
			'status'=>$status,
			'now'=>$this->getToday(),
			'page' => $page, // On transmet à la vue la page courante,			
		));		
    }
	private function setActivity($activity){
		return $this->createActivity("Admin Home",$activity);	
	}
}

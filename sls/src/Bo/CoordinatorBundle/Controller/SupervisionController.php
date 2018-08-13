<?php
namespace Bo\CoordinatorBundle\Controller;

use Bo\AdminBundle\Controller\CommonController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Bo\AdminBundle\Entity\Contracts;
use Bo\AdminBundle\Entity\Students;
use Bo\AdminBundle\Entity\Revision;
use Bo\AdminBundle\Libs\PHPExcel\Factory;

class SupervisionController extends CommonController
{
    /**
    * Index Contracts
    */
    public function indexAction($status)
    {
		$this->get('session')->remove('page');
		$this->get('session')->remove('message');
		return $this->redirect($this->generateUrl('coordinator_supervision_contracts',array('status'=>$status)));		
    }
    public function contractsAction(Request $request, $status)
    {
		$this->get("session")->set('status',$status);
		$this->removeSession();
		$em = $this->getDoctrine()->getManager();
		$aContracts=array();
		$coordinator = $this->getConnectedCoordinator();
        	$oRepContract = $em->getRepository('BoAdminBundle:Contracts');
		$nb_tc = $oRepContract->getContractCordinatorTotal($status,$coordinator);
		$page = $this->get('session')->get('page');
		if($page==null) $page=1;
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		if($coordinator->getMaster()==false){
			$aContracts = $oRepContract->findBy(array('coordinator'=>$coordinator,'status'=>$status),array('id' => 'asc'),$nb_cpp,$offset);
		}elseif($coordinator->getClient()){
			$aContracts = $oRepContract->findBy(array('client'=>$coordinator->getClient(),'status'=>$status),array('id' => 'asc'),$nb_cpp,$offset);			
		}		
		$this->setActivity("Supervision");		
        	return $this->render('BoCoordinatorBundle:Supervision:contracts.html.twig',array(
			'contracts' => $aContracts,
			'status'=>$status,
			'total'=>$nb_tc,
			'page' => $page, // On transmet à la vue la page courante,
			'nb_pages' => $nb_pages, //le nombre total de pages,
			'nb_cpp'=>$nb_cpp,
			'coordinator'=>$coordinator,
			'pm'=>"supervision",
			'sm'=>"contract",			
		));
    }
    public function studentsAction(Request $request)
    {
		$this->removeSession();
		$em = $this->getDoctrine()->getManager();
		$aContracts=array();
		$coordinator = $this->getConnectedCoordinator();
        	$oRepContract = $em->getRepository('BoAdminBundle:Contracts');
		$nb_tc = count($oRepContract->findBy(array('coordinator'=>$coordinator)));
		$page = $this->get('session')->get('page');
		if($page==null) $page=1;
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		if($coordinator->getMaster()==false){
			$aContracts = $oRepContract->findBy(array('coordinator'=>$coordinator),array('id' => 'asc'),$nb_cpp,$offset);
		}elseif($coordinator->getClient()){
			$aContracts = $oRepContract->findBy(array('client'=>$coordinator->getClient(),'status'=>$status),array('id' => 'asc'),$nb_cpp,$offset);			
		}
		$aStudents = $this->getStudentsByContract($aContracts); 	
		$this->setActivity("Supervision");		
        	return $this->render('BoCoordinatorBundle:Students:index.html.twig',array(
			'students' => $aStudents,
			'total'=>$nb_tc,
			'page' => $page, // On transmet à la vue la page courante,
			'nb_pages' => $nb_pages, //le nombre total de pages,
			'nb_cpp'=>$nb_cpp,
			'coordinator'=>$coordinator,
			'pm'=>"supervision",
			'sm'=>"student",			
		));
    }
    /**
    * Finds and displays a Contracts entity.
    */
    public function showcontractAction(Contracts $contract)
    {
		$aLocal = null;
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
		//if($contract->getGroup() and count($this->getContractByGroup($contract->getGroup()))>1)
		if($contract->getWorkfields() and ($contract->getWorkfields()->getId()==1 or $contract->getWorkfields()->getId()==2)){
			if($contract->getGroup()) $aLocal = $contract->getGroup()->getLocal();
		}else{
			$aLocal = $contract->getLocal();
		}
		$lefthours = ($contract->getHoursnumber()>0 and $contract->getUsedHours()>0)?floatval($contract->getHoursnumber())-floatval($contract->getUsedHours()):null;
        return $this->render('BoCoordinatorBundle:Supervision:show.html.twig',array(
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
		'_status'=>$this->get("session")->get("status"),
		'tscheduleid'=>isset($aTeacherSchedule[1])?$aTeacherSchedule[1]:null,
		'teachers'=>$aTeachers,// for the list of teachers
		'listteacher' => $em->getRepository('BoAdminBundle:Teachers')->findAllTeacher(),
		'locals'=>$aLocal,// for the list of locals
		'message'=>array('type'=>"Warning",'texte'=>$this->get('session')->get('message')),
		'idteacher'=>$this->get('session')->get('idteacher'),
		'idlocal'=>$this->get('session')->get('idlocal'),
		'status'=>$this->getContractStatus(),//get status definition list
		'employee'=>$this->getConnectedEmployee(),
		'training'=>$training,
		'pm'=>"supervision",
		'sm'=>"contract",
        ));
    }
    /**
    * Finds and displays a Students entity.
    */
    public function showstudentsAction(Students $student)
    {
		$aTeachers=$aTeacherSchedule=$aLocal=$aAgenda=array();
		$oContract=$oGroup=null;
		$offset = $this->get("session")->get("offset");
		if($offset==null) $offset = 5;
		$oTokenuser=$this->getTokenUser();
		$em = $this->getDoctrine()->getManager();
		$oRepContract = $em->getRepository('BoAdminBundle:Contracts');
		$oRepAgenda = $em->getRepository('BoAdminBundle:Agenda');
		$aUser = $em->getRepository('BoUserBundle:User')->findBy(array('students'=>$student));
		$oGroup = $em->getRepository('BoAdminBundle:Students')->getStudentGroup($student);
		$timesheets = $em->getRepository('BoAdminBundle:Timesheet')->getStudentTs($student,1);	
		$aCurrentContract = $oRepContract->getCurrentStudentContract($student);
		if(count($aCurrentContract)>1) $aCurrentContract = $oRepContract->getCurrentStudentGroup($student);
		//Student Evaluation
        	$oRepEval = $em->getRepository('BoAdminBundle:Evaluation');
		$evaluations = $oRepEval->findBy(array('students'=>$student),array('id' => 'desc'));
		if(isset($aCurrentContract[0])){
			$oContract = $aCurrentContract[0];
			$aLocal = $oContract->getLocal();
			$aTeachers = $oContract->getEmployee();
			if($oGroup!=null){
				$aAgenda = $this->getActiveByGroup($oGroup);
			}elseif($oContract!=null){
				$aAgenda = $this->getActiveByContract($oContract);
			}
			if(count($aAgenda)>0){
				$aTeacherSchedule = $oRepAgenda->getAgendaDesc($aAgenda);
				$aTeachers = $oRepAgenda->getTeacherBy($aAgenda);
			}
		}
		return $this->render('BoCoordinatorBundle:Students:show.html.twig', array(
		   	'student' => $student,
			'timesheets'=>$timesheets,
			'evaluations'=>$evaluations,
			'offset'=>$offset,
			'group'=>$oGroup,
			'user' => $aUser,//student user information
			'token'=>$oTokenuser,//User connected informations
			'contract'=>$oContract,//current contract
			'status'=>$this->getContractStatus(),//get status definition list
			'teachers'=>$aTeachers,// for the list of teachers
			'teacherschedule'=>$aTeacherSchedule,//Teachers schedules
			'locals'=>$aLocal,// for the list of locals
			'contracts' =>$oRepContract->getStudentContracts($student),
			'absences'=>$em->getRepository('BoAdminBundle:Absences')->getByStudents($student,$offset),
			'allabsences'=>$em->getRepository('BoAdminBundle:Absences')->getByStudents($student),
			'pm'=>"supervision",
			'sm'=>"student",
		));
    }
    public function pageAction($option)
    {
		$page = $this->get('session')->get('page');
		$status = $this->get('session')->get('status');
		if($option==1) $page=1;
		if($option==2) $page=$page-1;
		elseif($option==3) $page=$page+1;
		else $page=$option;
		$this->get('session')->set('page',$page);
		$this->get('session')->set('status',$status);
		return $this->redirect($this->generateUrl('dash_supervision_contracts',array('status'=>$status)));			
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
		$coordinator = $this->getConnectedCoordinator();
		$this->get('session')->set('page',$page);
		$this->get('session')->set('status',$status);
		$nb_tc = $oRepContract->getContractAdvisorTotal($status,$coordinator);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		if($coordinator->getMaster()==false){
			$aContracts = $oRepContract->findBy(array('coordinator'=>$coordinator,'status'=>$status),array('id' => 'asc'),$nb_cpp,$offset);
		}elseif($coordinator->getClient()){
			$aContracts = $oRepContract->findBy(array('client'=>$coordinator->getClient(),'status'=>$status),array('id' => 'asc'),$nb_cpp,$offset);			
		}	
        return $this->render('BoCoordinatorBundle:Supervision:contractlist.html.twig',array(
			'contracts' => $aContracts,
			'status'=>$status,
			'page' => $page, // On transmet à la vue la page courante,			
		));		
    }
	public function xlsAction(Request $request){
		$em = $this->getDoctrine()->getManager();
		$aContracts=array();
		$coordinator = $this->getConnectedCoordinator();
        $oRepContract = $em->getRepository('BoAdminBundle:Contracts');
		if($coordinator->getMaster()==false){
			$aContracts = $oRepContract->findBy(array('coordinator'=>$coordinator,'status'=>1),array('id' => 'asc'));
		}elseif($coordinator->getClient()){
			$aContracts = $oRepContract->findBy(array('client'=>$coordinator->getClient(),'status'=>1),array('id' => 'asc'));			
		}	
		$aContracts = $this->formatData($aContracts);
		$oFactory=new Factory("contract");
		return $oFactory->newXLS($this->getExtractLabel(),$aContracts);			
	}
	private function getExtractLabel(){
		return array('group'=>"Groupe",'typecontract'=>"Type de contrat",'methodofsupply'=>"Method of supply",'receivedate'=>"Date we received",'ordernumber'=>"No Offre à Commandes",'contractnumber'=>"No. Contrat autorisé",'contractdate'=>"Date du contrat",'clicsignaturedate'=>"Signature CLIC",'clientsignaturedate'=>"Signature Client",'startdate'=>"Start date",'enddate'=>"End date",'coordinator'=>"Contact pédagogique",'billingcontact'=>"Billing Contact",'advisor'=>"Conseiller pédagogique",'location'=>"Location",'language'=>"Language",'typeoftraining'=>"Type of Training",'typetime'=>"FT or PT",'hoursnumber'=>"Nombre d'heures",'schedule'=>"Schedule Info",'targetlevel'=>"Niveau recherché",'estimatedcost'=>"Coût estimatif",'initialhours'=>"Initial Hours Available",'hourlyrate'=>"Hourly Rate",'teachers'=>"Teachers",'students'=>"Students",'room'=>"Room");		
	}
	public function formatData($aEData){
		$aResult=array();
		foreach($aEData as $oEData){
			$sTeachers = $this->getTeachers($oEData);
			$sStudents = $this->getStudents($oEData);
			$sLocal = $this->getLocals($oEData);
			$aResult[]=array($oEData->getGroup()?$oEData->getGroup()->getName():"",$oEData->getTypecontract()?$oEData->getTypecontract()->getReference():"",$oEData->getMethodofsupply()?$oEData->getMethodofsupply():"",$oEData->getReceivedate()?$oEData->getReceivedate()->format('Y-m-d'):"",$oEData->getOrdernumber(),$oEData->getContractnumber(),$oEData->getContractdate()?$oEData->getContractdate()->format('Y-m-d'):"",$oEData->getClicsignaturedate()?$oEData->getClicsignaturedate()->format('Y-m-d'):"",$oEData->getClientsignaturedate()?$oEData->getClientsignaturedate()->format('Y-m-d'):"",$oEData->getStartdate()?$oEData->getStartdate()->format('Y-m-d'):"",$oEData->getEnddate()?$oEData->getEnddate()->format('Y-m-d'):"",$oEData->getCoordinator()?$oEData->getCoordinator()->getEmail():"",$oEData->getBillingcontact()?$oEData->getBillingcontact()->getEmail():"",$oEData->getAdvisor()?$oEData->getAdvisor()->getFullname():"",$oEData->getLocation(),$oEData->getLanguage(),$oEData->getTypeoftraining(),$oEData->getTypetime(),$oEData->getHoursnumber(),$oEData->getSchedule(),$oEData->getTargetlevel(),$oEData->getEstimatedcost(),$oEData->getInitialhours(),$oEData->getHourlyrate(),$sTeachers,$sStudents,$sLocal);		
		}
		return $aResult;				
	}
	private function getTeachers($oContract){
		$aTeachers = $oContract->getEmployee();
		$sRes = "";
		$i=1;
		foreach($aTeachers as $oTeacher){
			if($oTeacher) $sRes = $sRes.$oTeacher->getFirstname()." ".$oTeacher->getName();
			if($i<count($aTeachers)) $sRes = $sRes.", ";
		}
		return $sRes;
	}
	private function getStudents($oContract){
		$aStudents = $oContract->getStudents();
		$sRes = "";
		$i=1;
		foreach($aStudents as $oStudent){
			if($oStudent) $sRes = $sRes.$oStudent->getFirstname()." ".$oStudent->getName();
			if($i<count($aStudents)) $sRes = $sRes.", ";
		}
		return $sRes;
	}
	private function getLocals($oContract){
		$aRooms = $oContract->getLocal();
		$sRes = "";
		$i=1;
		foreach($aRooms as $oRoom){
			if($oRoom) $sRes = $sRes.$oRoom->getReference();
			if($i<count($aRooms)) $sRes = $sRes.", ";
		}
		return $sRes;
	}
	private function setActivity($activity){
		return $this->createActivity("Teacher Home",$activity);	
	}
}

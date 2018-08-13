<?php

namespace Bo\AdminBundle\Controller;

use Bo\AdminBundle\Entity\Robot;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Entity\Usedhour;
/**
* Robot controller.
*/
class RobotController extends CommonController
{
    /** 
    * Index robot.
    */
    public function indexAction()
    {	
		$this->get('session')->remove('page');
		$this->get('session')->remove('url');
		return $this->redirect($this->generateUrl('robot_list'));		
    }
    /**
    * Lists all Robot entities.
    */
    public function listAction()
    {	
		$this->removeSession();
		$this->verifySessionRights();
		$this->setActivity("List view");
        	$em = $this->getDoctrine()->getManager();
        	$oRepRobot = $em->getRepository('BoAdminBundle:Robot');
		$nb_tc = $oRepRobot->getTotal();
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
		$robots = $em->getRepository('BoAdminBundle:Robot')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
        	return $this->render('robot/index.html.twig', array(
            		'robots' => $robots,
			'page' => $page, // forward current page to view,
			'nb_pages' => $nb_pages, //total number page,
			'total'=>$nb_tc, // record number.
			'nb_cpp' => $nb_cpp,// line's number to display
			'pm'=>"tools",
			'sm'=>"robot",
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
		return $this->redirect($this->generateUrl('robot_list'));			
	}
    /**
     * Finds and displays a Robot entity.
     *
     */
    public function showAction(Robot $robot)
    {
	$aUsedhour = $this->getRepository('BoAdminBundle:Robot')->getUsedhour($robot);
        return $this->render('robot/show.html.twig', array(
            	'robot' => $robot,
		'usedhours' => $aUsedhour,
		'pm'=>"tools",
		'sm'=>"robot",
        ));
    }
    /**
     * Search a robot.
     */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Robot');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$aResult = $oEntity ->search($description);
		$this->setActivity($description." searched by this user");
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:Robot:search.html.twig', array(
				'robots'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Robot:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $robots = $em->getRepository('BoAdminBundle:Robot')->findAll();
		$nb_tc = count($robots);
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('motcle');
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aRobot = $em->getRepository('BoAdminBundle:Robot')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);

        return $this->render('BoAdminBundle:Robot:pagesearch.html.twig', array(
            	'robots' => $aRobot,
		'page' => $page, // On transmet à la vue la page courante,
        ));
    }
    /**
     * Creates a form to delete a Robot entity.
     *
     * @param Robot $robot The Robot entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Robot $robot)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('robot_delete', array('id' => $robot->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	private function setActivity($activity){
		return $this->createActivity("Robot",$activity);	
	}
    /**
    * Index Robot
    */
    public function workAction()
    {
	set_time_limit(7600);
	$start = $this->getNow();
	$oDate = $this->getToday();
	if($this->isWeekend($oDate) or $this->isHolidayForAll($oDate)==1){
		$sNote = $this->isWeekend($oDate)?"Weekend date. No work.":"Statutory Holiday date. No work.";
		$this->recordRobotWork($start,$this->getNow(),0,0,$sNote);			
	}
	$iGroup = $iContract = 0;
	$aGoup = array();
	$aIdCont = array();	
	$aContract = $this->getActiveContracts();
	//$oContract1 = $this->getRepository("BoAdminBundle:Contracts")->find(1522);
	//$oContract2 = $this->getRepository("BoAdminBundle:Contracts")->find(1284);
	//$aContract = array($oContract1,$oContract2);
	foreach($aContract as $oContract){
		$aStudent = $oContract->getStudents();
		if(count($aStudent)==0) continue;
		if(count($aStudent)>1 or $oContract->getGroup()){
			//if it is group contract and the group is not treated
			if($oContract->getGroup() and $oGroup=$oContract->getGroup() and !isset($aGoup[$oGroup->getId()])){
				//Save the id of group treated
				$aGoup[$oGroup->getId()]=$oGroup->getId();
				$amhour = $this->getGroupDaySchedule($oGroup,$oDate,1);
				$pmhour = $this->getGroupDaySchedule($oGroup,$oDate,2);
				$hour = $amhour+$pmhour;
				if($hour>0){
					$this->saveUsedHour($oGroup,$hour,2,$oDate);
					$iGroup = $iGroup+1; 
				}
			}elseif(!isset($aIdCont[$oContract->getId()])){
				$aIdCont[$oContract->getId()]=$oContract->getId();
				$amhour = $this->getContractDaySchedule($oContract,$oDate,1);
				$pmhour = $this->getContractDaySchedule($oContract,$oDate,2);
				$hour = $amhour+$pmhour;
				if($hour>0){
					$this->saveUsedHour($oContract,$hour,1,$oDate);
					$iContract = $iContract+1; 
				}
			}
		}else{
			$oStudent = $aStudent[0];
			$iHouram=$iHourpm=0;
			$bAbsam = $this->isStudentAbsent2($oStudent,$oDate,1);
			if($bAbsam==false) $iHouram = $this->getStudentHour($oStudent,$oDate,1);
			$bAbspm = $this->isStudentAbsent2($oStudent,$oDate,2);
			if($bAbsam==false) $iHourpm = $this->getStudentHour($oStudent,$oDate,2);
			$hour = $iHouram+$iHourpm;
			if($hour>0) $this->saveUsedHour($oContract,$hour,1,$oDate,$oStudent);
			$iContract = $iContract+1; 
		}
	}
	$end = $this->getNow();
	$this->recordRobotWork($start,$end,$iGroup,$iContract);	
	return $this->redirect($this->generateUrl('robot_list'));
    }
	//Save used hour for contract or Group
	private function saveUsedHour($oEntity,$hour,$type,$oDate,$oStudent=null){
		$bNotif=false;
		//get contract hour threshold value
		$threshold = $this->getRepository('BoAdminBundle:Param')->getParam("contract_hours_threshiold",35);
		//Save usedhour and updatedate
		$oEntity->setDateusedhour($this->getToday());
		//If is set usedhours in the entity
		if($oEntity->getusedhours()){ 
			$iUsedHour = $oEntity->getusedhours()+$hour; 
			$oEntity->setusedhours($iUsedHour);
		}
		$this->updateEntity($oEntity);
		if($type==1){
			$iRH = $oEntity->getTotalhours() - $oEntity->getUsedhours();
			//Compare this parameter with the current 
			if($iRH<$threshold){
				$bNotif=true;
			}
		}
		$this->createUsedhour($oEntity,$hour,$type,$oDate,$oStudent,$bNotif);
		return $oEntity;
	}
	private function createRobot(){
		$oRobot = $this->getTodayWork();
		if($oRobot){
			return $oRobot;
		}
		$oRobot = new Robot();
		$this->updateEntity($oRobot);
		return $oRobot;
	}
	private function recordRobotWork($start,$end,$iGroup,$iContract,$sNote=null){
		$oRobot = $this->getTodayWork();
		if($oRobot){
			return $this->updateRobotWork($oRobot,$start,$end,$iGroup,$iContract,$sNote);
		}
		$oRobot = new Robot();
		$oRobot->setStart($start->format("d-m-Y H:i:s"));
		$oRobot->setEnd($end->format("d-m-Y H:i:s"));
		$oRobot->setNbcontract($iContract);
		$oRobot->setNbgroup($iGroup);
		if($sNote!=null) $oRobot->setNote($sNote);
		return $this->updateEntity($oRobot);
	}
	private function updateRobotWork($oRobot,$start,$end,$iGroup,$iContract,$sNote){
		$oRobot->setStart($start->format("d-m-Y H:i:s"));
		$oRobot->setEnd($end->format("d-m-Y H:i:s"));
		$oRobot->setNbcontract($iContract);
		$oRobot->setNbgroup($iGroup);
		if($sNote!=null) $oRobot->setNote($sNote);
		return $this->updateEntity($oRobot);
	}
	private function createUsedhour($oEntity,$hour,$type,$oDate,$oStudent=null,$bNotif){
		$oUsedhour = new Usedhour();
		$oUsedhour->setHour($hour);
		$oUsedhour->setDdate($oDate);
		$oUsedhour->setNotif($bNotif);
		if($type==1){ 
			if($oStudent) $oUsedhour->setStudent($oStudent);
			if($oEntity) $oUsedhour->setContract($oEntity);
		}elseif($oEntity){
		     	$oUsedhour->setGroup($oEntity);
		}
		return $this->updateEntity($oUsedhour);	
	}
	private function getTodayWork(){
		$aRobot = $this->getRepository("BoAdminBundle:Robot")->findBy(array('ddate'=>$this->getToday()));
		if(count($aRobot)==1){
			return $aRobot[0];
		}
		return null;
	}
}

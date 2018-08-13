<?php 
namespace Bo\HomeBundle\Controller;
use Bo\AdminBundle\Controller\CommonController;
use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Entity\Employee;
/** 
* Agenda controller.
*/
class AgendaController extends CommonController
{
    /**
    * Finds and displays a Employee agenda.
    */
    public function indexAction()
    {
		$this->verifySessionRights();
		$em = $this->getDoctrine()->getManager();
		$employee=$this->getConnectedEmployee();
		$this->setActivity($employee->getName()." ".$employee->getFirstname()."'s Agenda is consulted by this user");
		$aTimes = $this->getAgendaTime();
		$aDates = $this->getDatesOfWeek();	
		$aDkey = array_keys($aDates);
		$aAgenda = $this->generateAgenda($employee,$aTimes,$aDates);
		$aFormatdate = $this->formatDate($aDates);
//print_r($aAgenda);
/*
echo $aAgenda[4]['endpm'];
echo "<br>".$this->getCreatingTsHour();
if(isset($aAgenda[4]['endpm']) and $this->getCreatingTsHour()>0 and $this->getCreatingTsHour()<$aAgenda[4]['endpm']) 
	echo "yes";
else 
	echo "No";
exit(0);
*/
        	return $this->render('BoHomeBundle:Agenda:index.html.twig', array(
            		'employee' => $employee,
			'agenda'=>$aAgenda,
			'datekeys'=>$aDkey,
			'dates'=>$aDates,
			'cth'=>$this->getCreatingTsHour(),//cth is the time when the teacher can do the timesheet 
			'higham'=>$this->getHighEndAm($aAgenda),
			'formatdates'=>$aFormatdate,
			'ttkeys'=>array_keys($aTimes),
			'today'=> new \DateTime(date("d-m-Y")),
			'times'=>$aTimes,
			'pm'=>"tabeau-bord",
			'sm'=>"agenda",
        	));
    }
    /**
    * Finds and displays a Employee agenda by ajax call.
    */
    public function searchAction(Request $request)
    {
		$this->verifySessionRights();
		$em = $this->getDoctrine()->getManager();
		$ContractEntity = $em->getRepository('BoAdminBundle:Contracts');
		$oEmpRep = $em->getRepository('BoAdminBundle:Employee');	
		if($request->isXmlHttpRequest())
		{	
			$data = $request->request->get('data');	
			$aData = explode("#",$data);
			$idemployee = $aData[0];
			$startdate =  new \DateTime($aData[1]);
			$enddate =  new \DateTime($aData[2]);
			$number = $aData[3];
		}
		$employee = $oEmpRep->find($idemployee);
		if($number!=0){
			$startdate = $this->getDatePlus($startdate,$number);
			$enddate = $this->getDatePlus($enddate,$number);
		}
		$this->setActivity($employee->getName()." ".$employee->getFirstname()."'s Agenda is consulted by this user");
        $em = $this->getDoctrine()->getManager();
		$aTimes = $this->getAgendaTime();
		$aDates = $this->getDatesOfWeek($startdate,$enddate);	
		$aAgenda = $this->generateAgenda($employee,$aTimes,$aDates);
		$aFormatdate = $this->formatDate($aDates);
		
        return $this->render('BoAdminBundle:Agenda:content.html.twig', array(
            'employee' => $employee,
			'agenda'=>$aAgenda,
			'dates'=>$aDates,
			'formatdates'=>$aFormatdate,
			'ttkeys'=>array_keys($aTimes),
			'today'=> new \DateTime(date("d-m-Y")),
			'times'=>$aTimes,
        ));
    }
	private function setActivity($activity){
		return $this->createActivity("Agenda",$activity);	
	}
}

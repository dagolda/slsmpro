<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use Bo\AdminBundle\Entity\PeriodPay;
use Bo\AdminBundle\Form\PeriodPayType;
use Bo\AdminBundle\Entity\Payroll;
use Bo\AdminBundle\Form\PayrollType;
use Bo\AdminBundle\Libs\PHPExcel\Factory;
//use Bo\AdminBundle\Libs\PHPExcel\ExtracttsFactory;
use Bo\AdminBundle\Entity\Extractts;

/**
* Payroll controller.
*/
class PayrollController extends CommonController
{
    /**
    * Lists all Payroll entities.
    */
    public function indexAction()
    {
	$this->removeSession();
        $em = $this->getDoctrine()->getManager();
        $periodPays = $em->getRepository('BoAdminBundle:PeriodPay')->findAll();

        return $this->render('payroll/index.html.twig', array(
		'periodPays' => $periodPays,
		'extract_form'=>$this->getExtractTsForm(),
		'pm'=>"accounting",
		'sm'=>"payroll"
        ));
    }
    /**
    * Creates a new PeriodPay entity.
    */
    public function newAction(Request $request)
    {
		$this->removeSession();
        $periodPay = new PeriodPay();
		$periodPay->setMonth(date("F"));
		$periodPay->setYear(date("Y"));
		$valid = true;
		$message=null;
        $form = $this->createForm('Bo\AdminBundle\Form\PeriodPayType', $periodPay);
        $form->handleRequest($request);
		
        if($form->isSubmitted() && $form->isValid()){
			$aWeek = $this->getArrayWeeks($periodPay->getStartdate(),$periodPay->getEnddate());
			$month1 = $periodPay->getStartdate()->format("F");
			$month2 = $periodPay->getEnddate()->format("F");
			if($periodPay->getMonth()!=$month1 and $periodPay->getMonth()!=$month2){
				$valid = false;
			}
			if($valid == true and $periodPay->getEnddate()>$periodPay->getStartdate()){
				$sWeeks = join(',',$aWeek);
				$periodPay->setPweek($sWeeks);
				$res = $this->updateEntity($periodPay);
				return $this->redirectToRoute('payroll_index');		
			}elseif($valid == false){
				$message=array('type'=>"Warning",'texte'=>$this->getErrorMessage(6));
			}elseif($periodPay->getEnddate()<=$periodPay->getStartdate()){
				$message=array('type'=>"Warning",'texte'=>$this->getErrorMessage(7));
			}

        }
		
        return $this->render('payroll/new.html.twig', array(
            'periodPay' => $periodPay,
			'message' => $message,
            'form' => $form->createView(),
			'pm'=>"accounting",
			'sm'=>"payroll"
        ));
    }
    /**
    * Finds and displays a PeriodPay entity.
    */
    public function showAction(PeriodPay $periodPay,$action)
    {
        $em = $this->getDoctrine()->getManager();	
        if($action==null){
			$action="Teaching";
			$oRepHt = $em->getRepository('BoAdminBundle:Hteaching');
		}else $oRepHt = $this->getEManager($action);
        $deleteForm = $this->createDeleteForm($periodPay);
		$weeks = $this->getListTsweek($periodPay->getPweek());
		$aHT = $oRepHt->findByIdperiodpay($periodPay->getId());
        return $this->render('payroll/show.html.twig', array(
            'periodPay' => $periodPay,
			'payrolls' => $aHT,
			'action'=>$action,
			'title'=>$action." Hours",
			'weeks'=> $weeks,
			'wliste'=>explode(',',$periodPay->getPweek()),//ordre d'affichage des semaines
            'delete_form' => $deleteForm->createView(),
			'pm'=>"accounting",
			'sm'=>"payroll"
        ));
    }
    /**
    * show by ajax admin, noshow and others hours.
    */
    public function tshoursAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
		if($request->isXmlHttpRequest())
		{	
			$param = $request->request->get('param');
			$aParam = explode("-",$param);
			$action = $aParam[0];
			$idperiodPay = $aParam[1];
		}
        $oRepPP = $em->getRepository('BoAdminBundle:PeriodPay');
		$periodPay = $oRepPP->find($idperiodPay);
        $oHem = $this->getEManager($action);
		$aHPay = $oHem->findByIdperiodpay($idperiodPay);
		$weeks = $this->getListTsweek($periodPay->getPweek());
        return $this->render('BoAdminBundle:Payroll:show.html.twig', array(
            'periodPay' => $periodPay,
			'payrolls' => $aHPay,
			'action'=>$action,
			'title'=>$action." Hours",
			'weeks'=> $weeks,
			'wliste'=>explode(',',$periodPay->getPweek()),//ordre d'affichage des semaines
        ));
    }
    /**
    * Extract in xls 
    */
    public function extractAction(PeriodPay $periodPay,$action)
    {
		$aHeader = array();
		$aFile = $this->getInfoFile($periodPay);
		$aData=$this->getPayrollHour($periodPay,$action);
		if(isset($aData[0])) $aHeader = array_keys($aData[0]);
		$oFactory= new Factory($action);
		return $oFactory->newXLS($aFile,$aHeader,$aData);
    }
    /**
    * Extract in xls 2
    */
    public function extracttsAction(Request $request)
    {
        	$oTS = $this->getRepository('BoAdminBundle:Timesheet');
		$extractts = new Extractts();
		$extractForm = $this->createForm('Bo\AdminBundle\Form\ExtracttsType', $extractts);
        	$extractForm->handleRequest($request);
		$month = $extractts->getMonth();
		$year = $extractts->getYear();
		$paycycle = $this->getPayCycleByMonth($month,$year);
		$aDate = $this->getDatesOfWeek($paycycle[0],$paycycle[1]);
		$aLabel = $this->getExtractLabel($aDate);
		$aData = $oTS->getExtractTsData($aDate,$paycycle[0],$paycycle[1],2);	
		$oFactory=new Factory("timesheet");
		return $oFactory->newXLS($aLabel,$aData);	
    }
	private function getExtractLabel($aDate){
		$aResult[]="Employee";
		foreach($aDate as $oDate){
			$aResult[]=$oDate->format("d-m-Y");
		}
		$aResult[]="Total";
		return $aResult;
	}
    /**
    * Displays a form to edit an existing PeriodPay entity.
    */
    public function editAction(Request $request, PeriodPay $periodPay)
    {
        $deleteForm = $this->createDeleteForm($periodPay);
        $editForm = $this->createForm('Bo\AdminBundle\Form\PeriodPayType', $periodPay);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($periodPay);
            $em->flush();

            return $this->redirectToRoute('periodpay_edit', array('id' => $periodPay->getId()));
        }

        return $this->render('periodpay/edit.html.twig', array(
            'periodPay' => $periodPay,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"accounting",
			'sm'=>"payroll"
        ));
    }

    /**
    * Deletes a PeriodPay entity.
    */
    public function deleteAction(Request $request, PeriodPay $periodPay)
    {
        $form = $this->createDeleteForm($periodPay);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			
            $em = $this->getDoctrine()->getManager();
            $em->remove($periodPay);
            $em->flush();
        }
        return $this->redirectToRoute('payroll_index');
    }
    /**
    * Ajax return message.
    */
    public function messageAction(Request $request)
    {
		$message=null;
		if($request->isXmlHttpRequest())
		{	
			$data = $request->request->get('data');	
		}
		if($this->getLang()=="en") $message=$oMessage->getDescen();
		else $message=$oMessage->getDescfr();
		return $this->render('BoAdminBundle:Default:message.html.twig', array(
			'message' => array('type'=>"Warning",'texte'=>$message),
		));	
	}
    /**
     * Creates a form to delete a PeriodPay entity.
     * @param PeriodPay $periodPay The PeriodPay entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PeriodPay $periodPay)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('payroll_delete', array('id' => $periodPay->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	/*
	private function updatePayroll($aWeek,$idperiodpay){
        $em = $this->getDoctrine()->getManager();
        return $em->getRepository('BoAdminBundle:Payroll')->updateAll($aWeek,$idperiodpay);
	}
	*/
	/*
	private function existPayrollWeek($aWeek){	
        $em = $this->getDoctrine()->getManager();
		foreach($aWeek as $sWeek){
			$aPayroll = $em->getRepository('BoAdminBundle:Payroll');
			if($aPayroll->existPayrollWeek($sWeek)) return true;
		}
		return false;
	}
	*/
	//Getting entity manager
	private function getEManager($action){
		$em = $this->getDoctrine()->getManager();
		if($action=="Admin"){
			$oHem = $em->getRepository('BoAdminBundle:Hadmin');
		}elseif($action=="Teaching"){
			$oHem = $em->getRepository('BoAdminBundle:Hteaching');
		}elseif($action=="Noshow"){
			$oHem = $em->getRepository('BoAdminBundle:Hnoshow');
		}else{
			$oHem = $em->getRepository('BoAdminBundle:Hothers');
		}
		return $oHem;
	}
	protected function getPayrollHour($periodPay,$action){
        $em = $this->getDoctrine()->getManager();
        $oHem = $this->getEManager($action);
		$aHPay = $oHem->findByIdperiodpay($periodPay->getId());
		$weeks = $this->getListTsweek($periodPay->getPweek());	
		//Récupérer les semaines par ordre croissant
		$weeks = $this->getWeekOrder($weeks);		
		$aResult = array();
		foreach($aHPay as $oHpay){
			$aTab = array();
			$oEmployee = $oHpay->getEmployee();
			$aTab['Firstname']=$oEmployee->getFirstname();
			$aTab['Name']=$oEmployee->getFirstname();
			foreach($weeks as $order=>$ival){
				$var="getHw".$order;
				$aTab['Week '.$ival] = $oHpay->$var();
			}
			$aTab['Total']=$oHpay->getTotal();
			$aResult[]=$aTab;
		}
		return $aResult;
	}
	protected function getWeekOrder($weeks){
		$aOWeeks=array();
		foreach($weeks as $week){
			$aOWeeks[]= $week;
		}
		return $aOWeeks;
	}
	private function getInfoFile($periodPay){
		return array($periodPay->getYear(),$periodPay->getMonth(),$periodPay->getId());
	}
	private function getExtractTsForm(){
        	$extractForm = $this->createForm('Bo\AdminBundle\Form\ExtracttsType', new Extractts());
		return $extractForm->createView();
	}
}

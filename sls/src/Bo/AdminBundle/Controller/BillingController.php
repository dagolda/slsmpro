<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Billing;
use Bo\AdminBundle\Entity\Timesheet;
use Bo\AdminBundle\Entity\TsBilling;
use Bo\AdminBundle\Form\BillingType;

/**
* Billing controller.
*/
class BillingController extends CommonController
{
    /**
    * Lists all Billing entities.
    */
    public function indexAction()
    {
	$this->verifySessionRights();
        $em = $this->getDoctrine()->getManager();

        $billings = $em->getRepository('BoAdminBundle:Billing')->findBy(array('status'=>1));

        return $this->render('billing/index.html.twig', array(
            'billings' => $billings,
			'type'=>1,
			'pm'=>"accounting",
			'sm'=>"billing"
        ));
    }
	
    /**
    * Lists all Billing entities.
    */
    public function billedAction()
    {
        $em = $this->getDoctrine()->getManager();

        $billings = $em->getRepository('BoAdminBundle:Billing')->findBy(array('status'=>2));

        return $this->render('billing/billed.html.twig', array(
            'billings' => $billings,
			'type'=>2,
			'pm'=>"accounting",
			'sm'=>"billing"
        ));
    }

    /**
    * Finds and displays a Billing entity.
    */
    public function showAction(Billing $billing)
    {
		$em = $this->getDoctrine()->getManager();
        $aTs = $em->getRepository('BoAdminBundle:Billing')->getTimesheet($billing);
		
        return $this->render('billing/show.html.twig', array(
            'billing' => $billing,
            'timesheets' => $aTs,
			'pm'=>"accounting",
			'sm'=>"billing"
        ));
    }
    /**
    * Finds and displays a Billing entity.
    */
    public function billAction(Billing $billing)
    {
		$em = $this->getDoctrine()->getManager();
        $aTs = $em->getRepository('BoAdminBundle:Billing')->getTimesheet($billing);
		foreach($aTs as $oTs){
			$oTs->setBillingStatus();
			$this->updateEntity($oTs);
		}
		$billing->setBilledStatus();
		$this->updateEntity($billing);
		return $this->redirectToRoute('billing_index');
    }	
    /**
    * Finds and displays a Billing entity.
    */
    public function showtsAction(Timesheet $timesheet,$idbilling)
    {
		$em = $this->getDoctrine()->getManager();
		$billing = $em->getRepository('BoAdminBundle:Billing')->find($idbilling);
		$aTSV = $em->getRepository('BoAdminBundle:TsValidation')->findBy(array('timesheet'=>$timesheet));
		$aTsStudent = $em->getRepository('BoAdminBundle:TsStudent')->findBy(array('timesheet'=>$timesheet));
		
        return $this->render('billing/showts.html.twig', array(
			'billing' => $billing,
            'timesheet' => $timesheet,
			'employee'=> $this->getConnectedEmployee(),
			'tsstudents'=>$aTsStudent,			
			'tsv'=>$aTSV,
			'pm'=>"accounting",
			'sm'=>"billing"
        ));
    }
	public function generatepdfAction(Billing $billing){
		$em= $this->getDoctrine()->getManager();	
		$aOperation = $OpeRep->findByIdbordereau($idBordereau);
		$comm=$oParam->getParam("Com Bordereau",12);
		$iduser=$aOperation[0]->getIduser();
		if($iduser!=0){
			$oUser = $RepUser->find($iduser);
			$oGuichet=$em->getRepository('BoAdminBundle:Guichet')->find($oUser->getIdguichet());
			if($oGuichet){
				$NomAgence = $oGuichet-> getAgence()->getNom();
				$Telephone = $oGuichet-> getAgence()->getTelephone();
				$IdCaisse = $oGuichet-> getCaisse()->getId();
			}else{
				$NomAgence = $Telephone = $IdCaisse = "NR";
			}
		}else{
			$NomAgence = $Telephone = $IdCaisse = "NR";		
		}
		//Informations sur le Client
		$idclients=$aOperation[0]->getIdClients();
		$idOpe = $aOperation[0]->getId();
		$oClients=$RepClients->find($idclients);

		//Informations sur la devise
		$oDevise=$aOperation[0]->getDevise();
		$iddevise=$oDevise->getId();

		//Information sur le bordereau
		$oBordereau=$BordRep->find($idBordereau);
		$filename=$oBordereau->getFilename();
		$sTitre=$BordRep->getTitreBordereau($type);
		
		//Information sur les coupures
		//Récupération des coupures utilisées
		$aCoupuresOp = $OpeRep->getUsedCoupures($idOpe);
		$aUC=$oRepCat->getCoupuresOpToUC($aCoupuresOp);

		//Récupération des catégories coupures
		$aCC = $oRepCat->findCategorieCoupure($iddevise);
		$aAllCCU=$oRepCat->getCategorieUsedCoupures($aUC,$aCC,$type);
		
		//Informations sur l'opération
		$iMontant=$aOperation[0]->getMontant();
		$iContreValeur=$aOperation[0]->getContrevaleur();
		$dTM=$aOperation[0]->getCoursApp();	
		//$dCom=$aOperation[0]->getComApp();	
		$dCom=0;
		$dTaxe=$aOperation[0]->getTaxeApp();	
		if($type=="v"){ 
			$oReliquat=$OpeRep->getReliquat($idOpe);
			$iReste=number_format($oReliquat->getReste(),0,".","");	
			$icvReste=number_format($oReliquat->getContrevaleur(),0,".","");
		}
		$aCCU=$aAllCCU['aCCU'];
		// En-tête du tableau	
		$w1 = array(25, 25, 25);
		$w2 = array(25, 35, 30, 30);
		$aHeader1 = array("Coupures","Quantite","Valeur");
		$aHeader2 = array("Taux Moyen","Commission","Contre Valeur");
		$aFooter1 = array("","",$iMontant);
		$aFooter2 = array($dTM,$dCom,$iContreValeur);

		$pdf = new PDF();
		$pdf->AddPage();		
		// En-tête de la page	
		$pdf->dPHeader($oParam->getParam("Numero Agrement",6),$oParam->getParam("Nom Societe",5),$NomAgence,$IdCaisse,$Telephone);
		//Impression ligne info Client et Devise
		$pdf->dSecondLine($oClients,$oDevise,$oBordereau,$sTitre);	
		//Entête table
		$pdf->dTHeader($aHeader1,$w1);	
		$count=count($aCCU);
		// Données
		if($type=="a") $pdf->dTCData($aCCU,$w1);
		else $pdf->dTVData($aCCU,$w1,$iReste,$icvReste);
		$pdf->dTHeader($aHeader2,$w2);
		$pdf->dTFooter($aFooter1,$w1);
		$pdf->dTFooter($aFooter2,$w2);
		$pdf->dPFooter($oUser,$oClients);
		if($comm!="NR" or $comm!="N/R" or $comm!="null" or strtolower($comm)!="aucun") $pdf->printCom($comm,$count);
		if($count<6){
			$pdf->line($pdf->GetX()-18,$pdf->GetY(),210,$pdf->GetY());
			if($count==5) $pdf->ln(2);
			if($count==4) $pdf->ln(6);
			if($count==3) $pdf->ln(8);
			if($count==2) $pdf->ln(10);
			if($count==1) $pdf->ln(12);
		}else{
			$pdf->AddPage();
		}
		//impression du duplicata société
		// En-tête de la page	
		$pdf->dPHeader($oParam->getParam("Numero Agrement",6),$oParam->getParam("Nom Societe",5),$NomAgence,$IdCaisse,$Telephone);
		$pdf->dSecondLine($oClients,$oDevise,$oBordereau,$sTitre);	
		//Entête table
		$pdf->dTHeader($aHeader1,$w1);				
		// Données
		if($type=="a") $pdf->dTCData($aCCU,$w1);
		else $pdf->dTVData($aCCU,$w1,$iReste,$icvReste);
		$pdf->dTHeader($aHeader2,$w2);
		$pdf->dTFooter($aFooter1,$w1);
		$pdf->dTFooter($aFooter2,$w2);
		$pdf->dPFooter($oUser,$oClients);
		if($comm!="NR" or $comm!="N/R" or $comm!="null" or strtolower($comm)!="aucun") $pdf->printCom($comm,$count);
		$filepath="pdf/".$filename;
		$pdf->Output($filepath);
        $response = $this->render('BoAdminBundle:Operations:bordereau.html.twig', array(
            'objetpdf' => $pdf->Output(),
        ));	
		$response->headers->set('Content-type','application/pdf');
		$this->logger("Impression de Bordereau ".$oBordereau->getNumero()." pour opération client");
		return $response;
	}
}

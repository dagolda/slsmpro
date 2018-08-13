<?php
namespace Bo\AdminBundle\Libs\Pdf;
use Bo\AdminBundle\Libs\Pdf\FPDF;

class PDF extends FPDF
{
	protected $B = 0;
	protected $I = 0;
	protected $U = 0;
	protected $HREF = '';

	function WriteHTML($html)
	{
		// HTML parser
		$html = str_replace("\n",' ',$html);
		$a = preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
		foreach($a as $i=>$e)
		{
			if($i%2==0)
			{
				// Text
				if($this->HREF)
					$this->PutLink($this->HREF,$e);
				else
					$this->Write(5,$e);
			}
			else
			{
				// Tag
				if($e[0]=='/')
					$this->CloseTag(strtoupper(substr($e,1)));
				else
				{
					// Extract attributes
					$a2 = explode(' ',$e);
					$tag = strtoupper(array_shift($a2));
					$attr = array();
					foreach($a2 as $v)
					{
						if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
							$attr[strtoupper($a3[1])] = $a3[2];
					}
					$this->OpenTag($tag,$attr);
				}
			}
		}
	}

	function OpenTag($tag, $attr)
	{
		// Opening tag
		if($tag=='B' || $tag=='I' || $tag=='U')
			$this->SetStyle($tag,true);
		if($tag=='A')
			$this->HREF = $attr['HREF'];
		if($tag=='BR')
			$this->Ln(5);
	}

	function CloseTag($tag)
	{
		// Closing tag
		if($tag=='B' || $tag=='I' || $tag=='U')
			$this->SetStyle($tag,false);
		if($tag=='A')
			$this->HREF = '';
	}

	function SetStyle($tag, $enable)
	{
		// Modify style and select corresponding font
		$this->$tag += ($enable ? 1 : -1);
		$style = '';
		foreach(array('B', 'I', 'U') as $s)
		{
			if($this->$s>0)
				$style .= $s;
		}
		$this->SetFont('',$style);
	}

	function PutLink($URL, $txt)
	{
		// Put a hyperlink
		$this->SetTextColor(0,0,255);
		$this->SetStyle('U',true);
		$this->Write(5,$txt,$URL);
		$this->SetStyle('U',false);
		$this->SetTextColor(0);
	}
	public function Dl(){
		$this->Ln(7);	
	}
	private function getStudentIdentity($orderform){
		$fullname = "";
		if($orderform->getEnquiry() and $orderform->getEnquiry()->getFirstname())
		$fullname = $orderform->getEnquiry()->getFirstname()." ".$orderform->getEnquiry()->getName();
		return $fullname;
	}
	private function getStudentEmail($orderform){
		$email = "";
		if($orderform->getEnquiry() and $orderform->getEnquiry()->getEmail()) $email = $orderform->getEnquiry()->getEmail();
		return $email;
	}
	private function getStudentPhone($orderform){
		$phone = "";
		if($orderform->getEnquiry() and $orderform->getEnquiry()->getPhone()) $phone = $orderform->getEnquiry()->getPhone();
		return $phone;
	}	
	public function dPHeader($headimage,$orderform){
		$this->setTitle("Order form");
		$this->dPLogo($headimage);
		$this->SetMargins(20,20,20);
		$this->ln(38);
		if($orderform->getSoumissiontype()==1){
			$this->SetFont('Arial','B',13);
			$this->Cell(0,5,utf8_decode("NMSO PRICING GUIDE"),0,1,"C");
			$this->ln(1);
			$this->Cell(0,5,utf8_decode("GUIDE POUR SOUMISSION  NMSO"),0,1,"C");	
			$this->ln(1);
			$this->SetFont('Arial','',10);
			$this->Cell(0,5,utf8_decode("This is not a valid contract - Ceci n'a pas valeur de contrat"),0,1,"C");
			$this->ln(3);			
		}
		if($orderform->getSoumissiontype()==2){
			$this->SetFont('Arial','B',11);
			$this->Cell(40,5,utf8_decode("Gatineau,"),0,0,"L");
			$this->Cell(130,5,utf8_decode("Order form Number"),0,1,"R");
			$this->ln(1);
			$this->Cell(0,5,utf8_decode("Numéro de Bon de Commande :"),0,1,"R");
			$this->SetFont('Arial','',11);
			$this->Cell(0,5,utf8_decode($orderform->getOrdernumber()),0,1,"R");
			$this->ln(3);
		}
		$this->SetFont('Arial','B',11);
		$this->Cell(69,5,utf8_decode("To the attention of / À l'attention de :"),0,0,"L");
		$this->SetFont('Arial','',11);
		$this->Cell(50,5,utf8_decode($this->getStudentIdentity($orderform)),0,1,"L");
		$this->ln(1);
		$this->SetFont('Arial','B',11);
		$this->Cell(33,5,utf8_decode("Email / Courriel :"),0,0,"L");
		$this->SetFont('Arial','',11);
		$this->Cell(50,5,utf8_decode($this->getStudentEmail($orderform)),0,1,"L");
		$this->ln(1);
		$this->SetFont('Arial','B',11);
		$this->Cell(48,5,utf8_decode("Telephone / Téléphone :"),0,0,"L");
		$this->SetFont('Arial','',11);
		$this->Cell(50,5,utf8_decode($this->getStudentPhone($orderform)),0,1,"L");		
		$this->ln(1);
		if($orderform->getSoumissiontype()==2){		
			$this->SetFont('Arial','B',12);
			$this->ln(5);
			$this->Cell(0,5,utf8_decode("ORDER FORM FOR LANGUAGE TRAINING"),0,1,"C");
			$this->ln(1);
			$this->Cell(0,5,utf8_decode("BON DE COMMANDE POUR LA FORMATION LINGUISTIQUE"),0,1,"C");
		}
	}
	public function dEnglishPrivate($headimage,$orderform,$contractterme,$pdffooter){
		$oEnquiry = $orderform->getEnquiry();
		$this->setTitle("Order form");
		/*
		/* Impression de la première page
		*/
		$this->dPHead($headimage);
		$this->ln(3);
		$this->SetFont('Arial','B',13);
		$this->Cell(0,5,utf8_decode("CONTRACT"),0,1,"C");
		$this->ln(9);
		$this->SetFont('Arial','B',11);
		$this->Cell(12,5,utf8_decode("Date:"),0,0,"L");
		$this->SetFont('Arial','',11);
		$this->Cell(30,6,utf8_decode(date("d-m-Y")),0,1,'L');
		$this->ln(9);	
		$this->SetFont('Arial','',11);
		$this->Cell(18,5,utf8_decode("Between"),0,0,"L");
		$this->SetFont('Arial','B',12);
		$this->Cell(70,5,utf8_decode("CLIC OTTAWA GATINEAU"),0,1,"L");
		$this->ln(1);
		$this->SetFont('Arial','',11);
		$this->Cell(18,5,utf8_decode(""),0,0,"L");
		$this->SetFont('Arial','B',10);
		$this->Cell(70,5,utf8_decode("4 Taschereau, Suite 430, Gatineau (QC), J8Y 2V5, info@clic-hull.com"),0,1,"L");
		$this->ln(1);
		$this->SetFont('Arial','',11);
		$this->Cell(18,5,utf8_decode(""),0,0,"L");
		$this->Cell(70,5,utf8_decode("Voix/Tel.:819-772-2542, Télécopieur/Fax:819-772-2542"),0,1,"L");
		$this->ln(9);	
		$this->SetFont('Arial','',11);
		$this->Cell(40,5,utf8_decode("Hereafter called the merchant"),0,1,"L");
		$this->ln(9);	
		$this->SetFont('Arial','',11);
		$this->Cell(23,5,utf8_decode("And"),0,1,"L");
		$this->ln(9);
		$this->SetFont('Arial','B',11);
		$this->Cell(23,5,utf8_decode("Name:"),0,0,"L");
		$this->SetFont('Arial','',11);
		$this->Cell(70,6,utf8_decode($this->getStudentIdentity($orderform)),0,1,'L');
		$this->ln(2);
		$this->SetFont('Arial','B',11);
		$this->Cell(23,5,utf8_decode("Address:"),0,0,"L");
		$this->SetFont('Arial','',11);
		$this->Cell(70,6,utf8_decode($oEnquiry->getAddress()),0,1,'L');
		$this->ln(2);
		$this->SetFont('Arial','B',11);
		$this->Cell(23,5,utf8_decode("City:"),0,0,"L");
		$this->SetFont('Arial','',11);
		$this->Cell(70,6,utf8_decode($oEnquiry->getCity()),0,1,'L');
		$this->ln(2);
		$this->SetFont('Arial','B',11);
		$this->Cell(23,5,utf8_decode("Phone:"),0,0,"L");
		$this->SetFont('Arial','',11);
		$this->Cell(70,6,utf8_decode($oEnquiry->getPhone()),0,1,'L');
		$this->ln(2);	
		$this->SetFont('Arial','B',11);
		$this->Cell(23,5,utf8_decode("Email:"),0,0,"L");
		$this->SetFont('Arial','',11);
		$this->Cell(70,6,utf8_decode($oEnquiry->getEmail()),0,1,'L');
		$this->ln(9);
		$this->SetFont('Arial','',11);
		$this->Cell(40,5,utf8_decode("Hereafter called the consumer"),0,1,"L");
		$this->ln(9);
		$this->WriteHTML(utf8_decode($contractterme));
		$this->ln(12);
		$this->dPFooter();	
		/*
		/* Impression de la deuxième page
		*/
		if($oEnquiry->getLanguage()=="French") $langue = "Français";
		else $langue = $oEnquiry->getLanguage();
		$this->AddPage();
		$this->dPHead($headimage);
		$this->SetFont('Arial','BU',11);
		$this->Cell(0,5,utf8_decode("Description of the language course:"),0,1,"L");
		$this->ln(2);
		$this->SetFont('Arial','',11);
		$this->Cell(20,5,utf8_decode("Language:"),0,0,"L");
		$this->Cell(70,6,utf8_decode($langue),0,1,'L');
		$this->ln(2);
		$this->SetFont('Arial','',11);
		$this->Cell(38,5,utf8_decode("Level of Language:"),0,0,"L");
		$this->Cell(70,6,utf8_decode($oEnquiry->getTargetlevel()),0,1,'L');
		$this->ln(2);
		$this->SetFont('Arial','',11);
		$this->Cell(34,5,utf8_decode("Number of hours:"),0,0,"L");
		$this->Cell(70,6,utf8_decode($oEnquiry->getHours()." heures"),0,1,'L');
		$this->ln(2);
		$this->SetFont('Arial','',11);
		$this->Cell(26,5,utf8_decode("Date of start:"),0,0,"L");
		$this->Cell(70,6,utf8_decode($oEnquiry->getStartdate()->format("d-m-Y")),0,1,'L');
		$this->ln(2);
		$this->SetFont('Arial','',11);
		$this->Cell(24,5,utf8_decode("Date of end:"),0,0,"L");
		$this->Cell(70,6,utf8_decode($oEnquiry->getEnddate()->format("d-m-Y")),0,1,'L');
		$this->ln(2);
		$this->SetFont('Arial','',11);
		$this->Cell(40,5,utf8_decode("Location of training:"),0,0,"L");
		$this->Cell(70,6,utf8_decode($orderform->getPlaceoftraining()),0,1,'L');
		$this->ln(2);
		$this->SetFont('Arial','',11);
		$this->Cell(20,5,utf8_decode("Schedule:"),0,0,"L");
		$this->Cell(70,6,utf8_decode($oEnquiry->getSchedule()),0,1,'L');
		$this->ln(5);	
		$this->SetFont('Arial','BU',11);
		$this->Cell(30,5,utf8_decode("Hourly Rate:"),0,1,"L");
		$this->SetFont('Arial','',11);
		$this->Cell(40,5,utf8_decode("The hourly rate will be "),0,0,"L");
		$this->Cell(10,6,utf8_decode("$".$orderform->getHourlyrate()." (excluding taxes)"),0,1,'L');
		$this->ln(9);
		$this->SetFont('Arial','BU',11);		
		$this->Cell(30,5,utf8_decode("Law for Consumer Protection:"),0,1,"L");
		$this->SetFont('Arial','',11);
		$this->ln(2);
		$this->Write(5,utf8_decode("The consumer should consult articles 190 to 196 of the Las on Consumer Protection in which the obligatory mentions below are present and if needed, communicate with the Office of Consumer Protection."));
		$this->ln(10);
		$this->SetFont('Arial','BU',11);
		$this->Cell(30,5,utf8_decode("Transfer not allowed:"),0,1,"L");
		$this->ln(2);
		$this->SetFont('Arial','',11);
		$this->Write(5,utf8_decode("This document may not be transferred or sold: the payment of courses not taken will not be reimbursed."));
		$this->ln(48);
		$this->dPFooter();	
		/*
		/*Impression de la troisième page
		*/
		$this->AddPage();
		$this->dPHead($headimage);	
		$this->SetFont('Arial','',11);
		$this->WriteHTML(utf8_decode("<b>N.B. Policy for course cancellation:</b> : A written notice by email to  <a href='mailto:cancel@clic-hull.com'>cancel@clic-hull.com</a> within<b>a minimum delay of 48 hours</b> is required for all lesson cancellations and this between <b>9:00 a.m. and 4:00 p.m. Monday to Friday</b> in order that we may advise your teacher. If this 48-hour delay is not respected, we must charge for the course as mentioned in the schedule. (A maximum of three courses may be cancelled and re-scheduled before the end of the contract.)"));	
		$this->ln(12);
		$this->SetFont('Arial','',11);		
		$this->Cell(0,5,utf8_decode("Both the consumer and the merchant signed this contract on:"),0,1,"L");
		$this->ln(10);
		$this->Cell(0,4,"_______________________________",0,1,"L");
		$this->ln(16);
		$this->Cell(90,4,utf8_decode("CLIC - Ottawa/Gatineau"),0,0,"L");
		$this->Cell(50,4,utf8_decode("The Consumer"),0,1,"L");
		$this->ln(12);	
		$this->Cell(90,4,"_______________________________",0,0,"L");	
		$this->Cell(50,4,"_______________________________",0,1,"L");
		$this->ln(1);		
		$this->Cell(90,4,utf8_decode("Name"),0,0,"L");
		$this->Cell(50,4,utf8_decode("Name"),0,1,"L");
		$this->ln(8);
		$this->Cell(0,4,utf8_decode("Catherine Coulais"),0,1,"L");
		$this->ln(8);
		$this->Cell(90,4,"_______________________________",0,0,"L");	
		$this->Cell(50,4,"_______________________________",0,1,"L");	
		$this->ln(1);		
		$this->Cell(90,4,utf8_decode("Signature"),0,0,"L");
		$this->Cell(50,4,utf8_decode("Signature"),0,1,"L");		
		$this->ln(50);
		$this->dPFooter();	
		$this->AddPage();
		$this->dPHead($headimage);	
		$this->SetFont('Arial','BU',9);
		$this->Cell(30,5,utf8_decode("Mention exigée par la loi sur la protection du consommateur :"),0,1,"L");
		$this->SetFont('Arial','',8);	
		$this->ln(2);
		$this->Write(5,utf8_decode("Article 193. Résiliation par le consommateur : Le consommateur peut, à tout moment et à sa discrétion, résilier le contrat au moyen de la formule prévue à l’article 190 ou d’un autre avis écrit à cet effet au commerçant. Le contrat est résilié de plein droit à compter de l’envoi de la formule ou de l’avis."));	
		$this->ln(9);	
		$this->Write(5,utf8_decode("Article 194. Frais. Si le consommateur résilie le contrat avant que le commerçant n’ait commencé à exécuter son obligation principale, la résiliation s’effectue sans frais ni pénalité pour le consommateur."));	
		$this->ln(9);	
		$this->Write(5,utf8_decode("Article 195. Sommes exigées. Si le consommateur résilie le contrat après que le commerçant ait commencé à exécuter son obligation principale, les seules sommes que le commerçant peut exiger de lui sont :"));
		$this->ln(9);	
		$this->Write(5,utf8_decode("a) Le prix des services qui lui ont été fournis, calculé au taux horaire, au taux à la journée ou au taux à la semaine stipulé dans le contrat et"));		
		$this->ln(9);	
		$this->Write(5,utf8_decode("b) À titre de pénalité, la moins élevée des sommes suivantes ; 50$ ou une somme représentant au plus 10 pour cent du prix des services qui ne lui ont pas été fournis."));
		$this->ln(9);	
		$this->Write(5,utf8_decode("Article 196. Restitution. Dans les dix jours qui suivent la résiliation du contrat, le commerçant doit restituer au consommateur la somme d’argent qu'il doit à ce dernier."));		
		$this->ln(86);			
		$this->dPFooter();			
		return;
	}
	public function dFrenchPrivate($headimage,$orderform,$contractterme,$pdffooter){
		$oEnquiry = $orderform->getEnquiry();
		$this->setTitle("Order form");
		/*
		/*Impression de la première page
		*/
		$this->dPHead($headimage);
		$this->ln(3);
		$this->SetFont('Arial','B',13);
		$this->Cell(0,5,utf8_decode("CONTRAT"),0,1,"C");
		$this->ln(9);
		$this->SetFont('Arial','',11);
		$this->Cell(40,5,utf8_decode("Gatineau,"),0,1,"L");
		$this->ln(1);
		$this->SetFont('Arial','B',11);
		$this->Cell(12,5,utf8_decode("Date:"),0,0,"L");
		$this->SetFont('Arial','',11);
		$this->Cell(30,6,utf8_decode(date("d-m-Y")),0,1,'L');
		$this->ln(9);	
		$this->SetFont('Arial','',11);
		$this->Cell(12,5,utf8_decode("Entre"),0,0,"L");
		$this->SetFont('Arial','B',12);
		$this->Cell(70,5,utf8_decode("CLIC OTTAWA GATINEAU"),0,1,"L");
		$this->ln(1);
		$this->SetFont('Arial','',11);
		$this->Cell(12,5,utf8_decode(""),0,0,"L");
		$this->SetFont('Arial','B',10);
		$this->Cell(70,5,utf8_decode("4 Taschereau, Suite 430, Gatineau (QC), J8Y 2V5, info@clic-hull.com"),0,1,"L");
		$this->ln(1);
		$this->SetFont('Arial','',11);
		$this->Cell(12,5,utf8_decode(""),0,0,"L");
		$this->Cell(70,5,utf8_decode("Voix/Tel.:819-772-2542, Télécopieur/Fax:819-772-2542"),0,1,"L");
		$this->ln(9);	
		$this->SetFont('Arial','',11);
		$this->Cell(40,5,utf8_decode("ci-après désigné le commerçant"),0,1,"L");
		$this->ln(9);	
		$this->SetFont('Arial','',11);
		$this->Cell(23,5,utf8_decode("Et"),0,1,"L");
		$this->ln(9);
		$this->SetFont('Arial','B',11);
		$this->Cell(23,5,utf8_decode("Nom:"),0,0,"L");
		$this->SetFont('Arial','',11);
		$this->Cell(70,6,utf8_decode($this->getStudentIdentity($orderform)),0,1,'L');
		$this->ln(2);
		$this->SetFont('Arial','B',11);
		$this->Cell(23,5,utf8_decode("Adresse:"),0,0,"L");
		$this->SetFont('Arial','',11);
		$this->Cell(70,6,utf8_decode($oEnquiry->getAddress()),0,1,'L');
		$this->ln(2);
		$this->SetFont('Arial','B',11);
		$this->Cell(23,5,utf8_decode("Ville:"),0,0,"L");
		$this->SetFont('Arial','',11);
		$this->Cell(70,6,utf8_decode($oEnquiry->getCity()),0,1,'L');
		$this->ln(2);
		$this->SetFont('Arial','B',11);
		$this->Cell(23,5,utf8_decode("Téléphone:"),0,0,"L");
		$this->SetFont('Arial','',11);
		$this->Cell(70,6,utf8_decode($oEnquiry->getPhone()),0,1,'L');
		$this->ln(2);	
		$this->SetFont('Arial','B',11);
		$this->Cell(23,5,utf8_decode("Courriel:"),0,0,"L");
		$this->SetFont('Arial','',11);
		$this->Cell(70,6,utf8_decode($oEnquiry->getEmail()),0,1,'L');
		$this->ln(9);
		$this->SetFont('Arial','',11);
		$this->Cell(40,5,utf8_decode("ci-après désigné le consommateur désigné"),0,1,"L");
		$this->ln(9);
		$this->WriteHTML(utf8_decode($contractterme));
		$this->ln(12);
		$this->dPFooter();	
		/*
		/*Impression de la deuxième page
		*/
		if($oEnquiry->getLanguage()=="French") $langue = "Français";
		else $langue = $oEnquiry->getLanguage();
		$this->AddPage();
		$this->dPHead($headimage);
		$this->SetFont('Arial','BU',11);
		$this->Cell(0,5,utf8_decode("Description du cours de langue :"),0,1,"L");
		$this->ln(2);
		$this->SetFont('Arial','',11);
		$this->Cell(18,5,utf8_decode("Langue:"),0,0,"L");
		$this->Cell(70,6,utf8_decode($langue),0,1,'L');
		$this->ln(2);
		$this->SetFont('Arial','',11);
		$this->Cell(38,5,utf8_decode("Niveau Linguistique:"),0,0,"L");
		$this->Cell(70,6,utf8_decode($oEnquiry->getTargetlevel()),0,1,'L');
		$this->ln(2);
		$this->SetFont('Arial','',11);
		$this->Cell(32,5,utf8_decode("Nombre d'heure:"),0,0,"L");
		$this->Cell(70,6,utf8_decode($oEnquiry->getHours()." heures"),0,1,'L');
		$this->ln(2);
		$this->SetFont('Arial','',11);
		$this->Cell(28,5,utf8_decode("Date du début:"),0,0,"L");
		$this->Cell(70,6,utf8_decode($oEnquiry->getStartdate()->format("d-m-Y")),0,1,'L');
		$this->ln(2);
		$this->SetFont('Arial','',11);
		$this->Cell(24,5,utf8_decode("Date de fin:"),0,0,"L");
		$this->Cell(70,6,utf8_decode($oEnquiry->getEnddate()->format("d-m-Y")),0,1,'L');
		$this->ln(2);
		$this->SetFont('Arial','',11);
		$this->Cell(36,5,utf8_decode("Lieu de formation:"),0,0,"L");
		$this->Cell(70,6,utf8_decode($orderform->getPlaceoftraining()),0,1,'L');
		$this->ln(2);
		$this->SetFont('Arial','',11);
		$this->Cell(20,5,utf8_decode("Horaire:"),0,0,"L");
		$this->Cell(70,6,utf8_decode($oEnquiry->getSchedule()),0,1,'L');
		$this->ln(5);	
		$this->SetFont('Arial','BU',11);
		$this->Cell(30,5,utf8_decode("Tarif horaire:"),0,1,"L");
		$this->SetFont('Arial','',11);
		$this->Cell(46,5,utf8_decode("Le tarif horaire sera de "),0,0,"L");
		$this->Cell(10,6,utf8_decode($orderform->getHourlyrate()." $"),0,1,'L');
		$this->ln(9);
		$this->SetFont('Arial','BU',11);		
		$this->Cell(30,5,utf8_decode("Loi sur la protection du consommateur :"),0,1,"L");
		$this->SetFont('Arial','',11);
		$this->ln(2);
		$this->Write(5,utf8_decode("Le consommateur aurait avantage à consulter les articles 190 à 196 de la loi sur la protection du consommateur dont les mentions obligatoires ci-dessous du présent et, au besoin, à communiquer avec l'office de la protection du consommateur."));
		$this->ln(10);
		$this->SetFont('Arial','BU',11);
		$this->Cell(30,5,utf8_decode("Cession interdite :"),0,1,"L");
		$this->ln(2);
		$this->SetFont('Arial','',11);
		$this->Write(5,utf8_decode("Ce document ne peut être transporté, cédé ou vendu : le paiement des cours non encore suivis ne peut être fait par billet à ordre."));
		$this->ln(50);
		$this->dPFooter();	
		/*
		/*Impression de la troisième page
		*/
		$this->AddPage();
		$this->dPHead($headimage);	
		$this->SetFont('Arial','',11);
		$this->WriteHTML(utf8_decode("<b>N.B. Politique d'annulation de cours</b> : Un avis par courriel à  <a href='mailto:cancel@clic-hull.com'>cancel@clic-hull.com</a> <b>à l'intérieur d'un délai de 48 heures</b> est requis et ceci entre <b>9h00 et 15h00 du lundi au vendredi</b> afin que nous puissions aviser votre professeur. Si ce délai de 24 heures n'est pas respecté, nous devrons comptabiliser le cours tel que prévu à l'horaire. De plus, tous les cours manqués devraient être repris à l'intérieur de la date limite de la fin du contrat. Un maximum de trois cours peuvent ainsi être annulés et repris."));	
		$this->ln(12);
		$this->SetFont('Arial','',11);		
		$this->Cell(0,5,utf8_decode("En foi de quoi les parties ont signé ce contrat le :"),0,1,"L");
		$this->ln(10);
		$this->Cell(0,4,"_______________________________",0,1,"L");
		$this->ln(16);
		$this->Cell(90,4,utf8_decode("CLIC - Ottawa/Gatineau"),0,0,"L");
		$this->Cell(50,4,utf8_decode("Le Consommateur"),0,1,"L");
		$this->ln(12);	
		$this->Cell(90,4,"_______________________________",0,0,"L");	
		$this->Cell(50,4,"_______________________________",0,1,"L");
		$this->ln(1);		
		$this->Cell(90,4,utf8_decode("Nom"),0,0,"L");
		$this->Cell(50,4,utf8_decode("Nom"),0,1,"L");
		$this->ln(8);
		$this->Cell(0,4,utf8_decode("Catherine Coulais"),0,1,"L");
		$this->ln(8);
		$this->Cell(90,4,"_______________________________",0,0,"L");	
		$this->Cell(50,4,"_______________________________",0,1,"L");	
		$this->ln(1);		
		$this->Cell(90,4,utf8_decode("Signature"),0,0,"L");
		$this->Cell(50,4,utf8_decode("Signature"),0,1,"L");		
		$this->ln(50);
		$this->dPFooter();	
		$this->AddPage();
		$this->dPHead($headimage);	
		$this->SetFont('Arial','BU',9);
		$this->Cell(30,5,utf8_decode("Mention exigée par la loi sur la protection du consommateur :"),0,1,"L");
		$this->SetFont('Arial','',8);	
		$this->ln(2);
		$this->Write(5,utf8_decode("Article 193. Résiliation par le consommateur : Le consommateur peut, à tout moment et à sa discrétion, résilier le contrat au moyen de la formule prévue à l'article 190 ou d'un autre avis écrit à cet effet au commerçant. Le contrat est résilié de plein droit à compter de l'envoi de la formule ou de l'avis."));	
		$this->ln(9);	
		$this->Write(5,utf8_decode("Article 194. Frais. Si le consommateur résilie le contrat avant que le commerçant n'ait commencé à exécuter son obligation principale, la résiliation s'effectue sans frais ni pénalité pour le consommateur."));	
		$this->ln(9);	
		$this->Write(5,utf8_decode("Article 195. Sommes exigées. Si le consommateur résilie le contrat après que le commerçant ait commencé à exécuter son obligation principale, les seules sommes que le commerçant peut exiger de lui sont :"));
		$this->ln(9);	
		$this->Write(5,utf8_decode("a) Le prix des services qui lui ont été fournis, calculé au taux horaire, au taux à la journée ou au taux à la semaine stipulé dans le contrat et"));		
		$this->ln(9);	
		$this->Write(5,utf8_decode("b) À titre de pénalité, la moins élevée des sommes suivantes ; 50$ ou une somme représentant au plus 10 pour cent du prix des services qui ne lui ont pas été fournis."));
		$this->ln(9);	
		$this->Write(5,utf8_decode("Article 196. Restitution. Dans les dix jours qui suivent la résiliation du contrat, le commerçant doit restituer au consommateur la somme d’argent qu'il doit à ce dernier."));		
		$this->ln(86);			
		$this->dPFooter();			
		return;
	}
	private function dPHead($headimage){
		$this->dPLogo($headimage);
		$this->SetMargins(20,20,20);
		$this->ln(38);	
		return;
	}
	//Print the first page with orderform data
	public function dTData1($orderform,$w){
		$oEnquiry = $orderform->getEnquiry();
		$aSchedule = $this->wrapText($oEnquiry->getSchedule());
		$this->ln(5);
		$this->SetFont('Arial','',11);
		//Print date
		$this->SetFillColor(202,222,230);
		$this->Cell($w[0],6,utf8_decode("Date"),'LRT',0,'L',1);
		$this->SetFillColor(255,240,230);
		$this->Cell($w[1],6,utf8_decode(date("d-m-Y")),'LRT',0,'L',1);
		$this->ln();
		//Name of student: first line 
		//if type of soumission is order form (1)		
		if($orderform->getSoumissiontype()==1){
			$this->SetFillColor(202,222,230);
			$this->Cell($w[0],6,utf8_decode("Name of learner/"),'LRT',0,'L',1);
			$this->SetFillColor(255,240,230);
			$this->Cell($w[1],6,utf8_decode($oEnquiry->getClient()?$oEnquiry->getClient()->getReference():$this->getStudentIdentity($orderform)),'LRT',0,'L',1);
			$this->ln();
			//Nom du client: second line
			$this->SetFillColor(202,222,230);
			$this->Cell($w[0],6,utf8_decode("Nom de l'apprenant"),"LR",0,'L',1);
			$this->SetFillColor(255,240,230);
			$this->Cell($w[1],6,"","LR",0,'R',1);
		}				
		//Name of client: first line 
		//if type of soumission is order form (2)
		if($orderform->getSoumissiontype()==2){
			$this->SetFillColor(202,222,230);
			$this->Cell($w[0],6,utf8_decode("Name of client/"),'LRT',0,'L',1);
			$this->SetFillColor(255,240,230);
			$this->Cell($w[1],6,utf8_decode($oEnquiry->getClient()?$oEnquiry->getClient()->getReference():$this->getStudentIdentity($orderform)),'LRT',0,'L',1);
			$this->ln();
			//Nom du client: second line
			$this->SetFillColor(202,222,230);
			$this->Cell($w[0],6,utf8_decode("Nom du client"),"LR",0,'L',1);
			$this->SetFillColor(255,240,230);
			$this->Cell($w[1],6,"","LR",0,'R',1);
			$this->ln();
			//Number of Students: first line
			$this->SetFillColor(202,222,230);
			$this->Cell($w[0],6,utf8_decode("Number of Students/"),'LRT',0,'L',1);
			$this->SetFillColor(255,240,230);
			$this->Cell($w[1],6,utf8_decode($orderform->getNbstudent()),'LRT',0,'L',1);
			$this->ln();
			//Nombre d'apprenants: second line
			$this->SetFillColor(202,222,230);
			$this->Cell($w[0],6,utf8_decode("Nombre d'apprenants"),"LR",0,'L',1);
			$this->SetFillColor(255,240,230);
			$this->Cell($w[1],6,"","LR",0,'R',1);
		}	
		$this->ln();	
		//Type of contract: first line
		$this->SetFillColor(202,222,230);
		$this->Cell($w[0],6,utf8_decode("Type of contract/"),'LRT',0,'L',1);
		$this->SetFillColor(255,240,230);
		if($orderform->getSoumissiontype()==1){
			$this->Cell($w[1],6,utf8_decode("NMSO - NATIONAL MASTER STANDING OFFER"),'LRT',0,'L',1);
		}else{
			$this->Cell($w[1],6,utf8_decode($this->getTypeofcontract($oEnquiry)),'LRT',0,'L',1);
		}
		$this->ln();
		//Nombre d'apprenants: second line
		$this->SetFillColor(202,222,230);
		$this->Cell($w[0],6,utf8_decode("Type de contrat"),"LR",0,'L',1);
		$this->SetFillColor(255,240,230);
		if($orderform->getSoumissiontype()==1){
			$this->Cell($w[1],6,"","LR",0,'R',1);
		}else{
			$this->Cell($w[1],6,"official contract to follow - contrat officiel à venir","LR",0,'R',1);
		}
		$this->ln();
		if($orderform->getSoumissiontype()==2){
			//Program: first line
			$this->SetFillColor(202,222,230);
			$this->Cell($w[0],6,utf8_decode("Program/"),'LRT',0,'L',1);
			$this->SetFillColor(255,240,230);
			$this->Cell($w[1],6,utf8_decode($orderform->getProgram()),'LRT',0,'L',1);
			$this->ln();
			//Programme: second line
			$this->SetFillColor(202,222,230);
			$this->Cell($w[0],6,utf8_decode("Programme"),"LR",0,'L',1);
			$this->SetFillColor(255,240,230);
			$this->Cell($w[1],6,"","LR",0,'R',1);
			$this->ln();
			//Language: first line
			$this->SetFillColor(202,222,230);
			$this->Cell($w[0],6,utf8_decode("Language/"),'LRT',0,'L',1);
			$this->SetFillColor(255,240,230);
			$this->Cell($w[1],6,utf8_decode($oEnquiry->getLanguage()),'LRT',0,'L',1);
			$this->ln();
			//Langue: second line
			$this->SetFillColor(202,222,230);
			$this->Cell($w[0],6,utf8_decode("Langue"),"LR",0,'L',1);
			$this->SetFillColor(255,240,230);
			$this->Cell($w[1],6,"","LR",0,'R',1);
			$this->ln();
			//Type of course: first line
			$this->SetFillColor(202,222,230);
			$this->Cell($w[0],6,utf8_decode("Type of course/"),'LRT',0,'L',1);
			$this->SetFillColor(255,240,230);
			$this->Cell($w[1],6,utf8_decode($orderform->getTypeofcourse()),'LRT',0,'L',1);
			$this->ln();
			//Type de formation: second line
			$this->SetFillColor(202,222,230);
			$this->Cell($w[0],6,utf8_decode("Type de formation"),"LR",0,'L',1);
			$this->SetFillColor(255,240,230);
			$this->Cell($w[1],6,"","LR",0,'R',1);
			$this->ln();
		}
		if($orderform->getSoumissiontype()==1){
			//Language: first line
			$this->SetFillColor(202,222,230);
			$this->Cell($w[0],6,utf8_decode("Target language/"),'LRT',0,'L',1);
			$this->SetFillColor(255,240,230);
			$this->Cell($w[1],6,utf8_decode($oEnquiry->getLanguage()),'LRT',0,'L',1);
			$this->ln();
			//Langue: second line
			$this->SetFillColor(202,222,230);
			$this->Cell($w[0],6,utf8_decode("Langue ciblée"),"LR",0,'L',1);
			$this->SetFillColor(255,240,230);
			$this->Cell($w[1],6,"","LR",0,'R',1);
			$this->ln();
			//Standing offer number: first line
			$this->SetFillColor(202,222,230);
			$this->Cell($w[0],6,utf8_decode("Standing offer number/"),'LRT',0,'L',1);
			$this->SetFillColor(255,240,230);
			$this->Cell($w[1],6,utf8_decode(""),'LRT',0,'L',1);
			$this->ln();
			//Standing offer number: second line
			$this->SetFillColor(202,222,230);
			$this->Cell($w[0],6,utf8_decode("Numéro d'offre à commande"),"LR",0,'L',1);
			$this->SetFillColor(255,240,230);
			$this->Cell($w[1],6,"","LR",0,'R',1);
			$this->ln();
		}
		//Target: first line
		$this->SetFillColor(202,222,230);
		$this->Cell($w[0],6,utf8_decode("Target/"),'LRT',0,'L',1);
		$this->SetFillColor(255,240,230);
		$this->Cell($w[1],6,utf8_decode($oEnquiry->getTargetlevel()),'LRT',0,'L',1);
		$this->ln();
		//Niveaux à atteindre: second line
		$this->SetFillColor(202,222,230);
		$this->Cell($w[0],6,utf8_decode("Niveaux à atteindre"),"LR",0,'L',1);
		$this->SetFillColor(255,240,230);
		$this->Cell($w[1],6,"","LR",0,'R',1);
		$this->ln();
		//Date of start: first line
		$this->SetFillColor(202,222,230);
		$this->Cell($w[0],6,utf8_decode("Date of start/"),'LRT',0,'L',1);
		$this->SetFillColor(255,240,230);
		$this->Cell($w[1],6,utf8_decode($oEnquiry->getStartdate()->format("d-m-Y")),'LRT',0,'L',1);
		$this->ln();
		//Date de début: second line
		$this->SetFillColor(202,222,230);
		$this->Cell($w[0],6,utf8_decode("Date de début"),"LR",0,'L',1);
		$this->SetFillColor(255,240,230);
		$this->Cell($w[1],6,"","LR",0,'R',1);
		$this->ln();
		//Date of start: first line
		$this->SetFillColor(202,222,230);
		$this->Cell($w[0],6,utf8_decode("Date of end/"),'LRT',0,'L',1);
		$this->SetFillColor(255,240,230);
		$this->Cell($w[1],6,utf8_decode($oEnquiry->getEnddate()->format("d-m-Y")),'LRT',0,'L',1);
		$this->ln();
		//Date de début: second line
		$this->SetFillColor(202,222,230);
		$this->Cell($w[0],6,utf8_decode("Date de fin"),"LR",0,'L',1);
		$this->SetFillColor(255,240,230);
		$this->Cell($w[1],6,"","LR",0,'R',1);
		$this->ln();
		if($orderform->getSoumissiontype()==1){
			//Number of hours of: first line
			$this->SetFillColor(202,222,230);
			$this->Cell($w[0],6,utf8_decode("Number of hours/"),'LRT',0,'L',1);
			$this->SetFillColor(255,240,230);
			$this->Cell($w[1],6,utf8_decode($orderform->getTotalhours()),'LRT',0,'L',1);
			$this->ln();
			//language training : second line
			$this->SetFillColor(202,222,230);
			$this->Cell($w[0],6,utf8_decode("Nombre d'heures"),"LR",0,'L',1);
			$this->SetFillColor(255,240,230);
			$this->Cell($w[1],6,"","LR",0,'R',1);
			$this->ln();					
			//Hourly rate : first line
			$this->SetFillColor(202,222,230);
			$this->Cell($w[0],6,utf8_decode("Hourly rate/Tarif horaire"),'LRT',0,'L',1);
			$this->SetFillColor(255,240,230);
			$this->Cell($w[1],6,utf8_decode($this->getHourlyRate($orderform)),'LRT',0,'L',1);
			$this->ln();
			//Total price / Prix total: first line
			$this->SetFillColor(202,222,230);
			$this->Cell($w[0],6,utf8_decode("Total price / Prix total"),'LRT',0,'L',1);
			$this->SetFillColor(255,240,230);
			$this->Cell($w[1],6,utf8_decode(number_format($orderform->getTotalcost(),2,"."," ")),'LRT',0,'L',1);
			$this->ln();
			//Schedule / Horaire: one line
			$this->SetFillColor(202,222,230);
			$this->Cell($w[0],6,utf8_decode("Schedule / Horaire"),'LRT',0,'L',1);
			$this->SetFillColor(255,240,230);
			$this->Cell($w[1],6,utf8_decode($aSchedule[0]),'LRT',0,'L',1);
			$this->ln();
			for($i=1;$i<3;$i++){
				if(isset($aSchedule[$i])){
					$this->SetFillColor(202,222,230);
					$this->Cell($w[0],6,utf8_decode(""),'LR',0,'L',1);
					$this->SetFillColor(255,240,230);
					$this->Cell($w[1],6,utf8_decode($aSchedule[$i]),'LR',0,'L',1);
					$this->ln();					
				}				
			}		
			//Date of start: first line
			$this->SetFillColor(202,222,230);
			$this->Cell($w[0],6,utf8_decode("Location of training /"),'LRT',0,'L',1);
			$this->SetFillColor(255,240,230);
			$this->Cell($w[1],6,utf8_decode($orderform->getPlaceoftraining()),'LRT',0,'L',1);
			$this->ln();
			//Date de début: second line
			$this->SetFillColor(202,222,230);
			$this->Cell($w[0],6,utf8_decode("Lieu de la formation"),"LRB",0,'L',1);
			$this->SetFillColor(255,240,230);
			$this->Cell($w[1],6,"","LRB",0,'R',1);
			$this->ln();						
		}
		if($orderform->getSoumissiontype()==2){		
			//Initial Language: first line
			$this->SetFillColor(86,151,175);
			$this->Cell($w[0],6,utf8_decode("Initial Language"),'LRT',0,'L',1);
			$this->SetFillColor(255,226,198);
			$value = $orderform->getInitlanguage()==1?"Included / inclus":"Not included / non inclus";
			$this->Cell($w[1],6,utf8_decode($value),'LRT',0,'L',1);
			$this->ln();
			//Evaluation/Évaluation: second line
			$this->SetFillColor(86,151,175);
			$this->Cell($w[0],6,utf8_decode("Evaluation/Évaluation"),"LR",0,'L',1);
			$this->SetFillColor(255,226,198);
			$this->Cell($w[1],6,"","LR",0,'R',1);
			$this->ln();
			//linguistique initiale: third line
			$this->SetFillColor(86,151,175);
			$this->Cell($w[0],6,utf8_decode("linguistique initiale"),'LRB',0,'L',1);
			$this->SetFillColor(255,226,198);
			$this->Cell($w[1],6,"",'LRB',0,'R',1);
			$this->ln();
		}
		return;
	}
	//Print the second page with orderform data
	public function dTData2($orderform,$w){
		$oEnquiry = $orderform->getEnquiry();
		$this->ln(5);
		//Weekly Language: first line
		$this->SetFillColor(86,151,175);
		$this->Cell($w[0],6,utf8_decode("Weekly Language"),'LRT',0,'L',1);
		$this->SetFillColor(255,226,198);
		$value = $orderform->getWeeklanguage()==1?"Included / inclus":"Not included / non inclus";
		$this->Cell($w[1],6,utf8_decode($value),'LRT',0,'L',1);
		$this->ln();
		//Training Plan: second line
		$this->SetFillColor(86,151,175);
		$this->Cell($w[0],6,utf8_decode("Training Plan/"),"LR",0,'L',1);
		$this->SetFillColor(255,226,198);
		$this->Cell($w[1],6,"","LR",0,'R',1);
		$this->ln();
		//Plan de formation: third line
		$this->SetFillColor(86,151,175);
		$this->Cell($w[0],6,utf8_decode("Plan de formation"),'LR',0,'L',1);
		$this->SetFillColor(255,226,198);
		$this->Cell($w[1],6,"",'LR',0,'R',1);
		$this->ln();
		//linguistique hebdomadaire: fourth line
		$this->SetFillColor(86,151,175);
		$this->Cell($w[0],6,utf8_decode("linguistique hebdomadaire"),'LR',0,'L',1);
		$this->SetFillColor(255,226,198);
		$this->Cell($w[1],6,"",'LR',0,'R',1);
		$this->ln();			
		//Didactic Material: first line
		$this->SetFillColor(86,151,175);
		$this->Cell($w[0],6,utf8_decode("Didactic Material/"),'LRT',0,'L',1);
		$this->SetFillColor(255,226,198);
		$value = $orderform->getDidmat()==1?"Included / inclus":"Not included / non inclus";
		$this->Cell($w[1],6,utf8_decode($value),'LRT',0,'L',1);
		$this->ln();
		//Matériel didactique: second line
		$this->SetFillColor(86,151,175);
		$this->Cell($w[0],6,utf8_decode("Matériel didactique"),"LR",0,'L',1);
		$this->SetFillColor(255,226,198);
		$this->Cell($w[1],6,"","LR",0,'R',1);
		$this->ln();	
		//Class Visit with a: first line
		$this->SetFillColor(86,151,175);
		$this->Cell($w[0],6,utf8_decode("Class Visit with a"),'LRT',0,'L',1);
		$value = $orderform->getClassvisit()==1?"Included / inclus":"Not included / non inclus";
		$this->SetFillColor(255,226,198);
		$this->Cell($w[1],6,utf8_decode($value),'LRT',0,'L',1);
		$this->ln();
		//Pedagogical Advisor: second line
		$this->SetFillColor(86,151,175);
		$this->Cell($w[0],6,utf8_decode("Pedagogical Advisor/"),"LR",0,'L',1);
		$this->SetFillColor(255,226,198);
		$this->Cell($w[1],6,"","LR",0,'R',1);
		$this->ln();
		//Visite de classe: third line
		$this->SetFillColor(86,151,175);
		$this->Cell($w[0],6,utf8_decode("Visite de classe"),'LR',0,'L',1);
		$this->SetFillColor(255,226,198);
		$this->Cell($w[1],6,"",'LR',0,'R',1);
		$this->ln();
		//conseiller pédagogique: fourth line
		$this->SetFillColor(86,151,175);
		$this->Cell($w[0],6,utf8_decode("d'un conseiller pédagogique"),'LR',0,'L',1);
		$this->SetFillColor(255,226,198);
		$this->Cell($w[1],6,"",'LR',0,'R',1);
		$this->ln();				
		//Progress Report: first line
		$this->SetFillColor(86,151,175);
		$this->Cell($w[0],6,utf8_decode("Progress Report/"),'LRT',0,'L',1);
		$this->SetFillColor(255,226,198);
		$value = $orderform->getProgressreport()==1?"Included / inclus":"Not included / non inclus";
		$this->Cell($w[1],6,utf8_decode($value),'LRT',0,'L',1);
		$this->ln();
		//Rapport de progrès: second line
		$this->SetFillColor(86,151,175);
		$this->Cell($w[0],6,utf8_decode("Rapport de progrès"),"LR",0,'L',1);
		$this->SetFillColor(255,226,198);
		$this->Cell($w[1],6,"","LR",0,'R',1);
		$this->ln();
		//Number of hours of: first line
		$this->SetFillColor(202,222,230);
		$this->Cell($w[0],6,utf8_decode("Number of hours of"),'LRT',0,'L',1);
		$this->SetFillColor(255,240,230);
		$this->Cell($w[1],6,utf8_decode($orderform->getTotalhours()),'LRT',0,'L',1);
		$this->ln();
		//language training : second line
		$this->SetFillColor(202,222,230);
		$this->Cell($w[0],6,utf8_decode("language training /"),"LR",0,'L',1);
		$this->SetFillColor(255,240,230);
		$this->Cell($w[1],6,"","LR",0,'R',1);
		$this->ln();
		//Nombre d'heures: third line
		$this->SetFillColor(202,222,230);
		$this->Cell($w[0],6,utf8_decode("Nombre d'heures"),'LR',0,'L',1);
		$this->SetFillColor(255,240,230);
		$this->Cell($w[1],6,"",'LR',0,'R',1);
		$this->ln();
		//de formation: fourth line
		$this->SetFillColor(202,222,230);
		$this->Cell($w[0],6,utf8_decode("de formation"),'LR',0,'L',1);
		$this->SetFillColor(255,240,230);
		$this->Cell($w[1],6,"",'LR',0,'R',1);
		$this->ln();					
		//Hourly rate : first line
		$this->SetFillColor(202,222,230);
		$this->Cell($w[0],6,utf8_decode("Hourly rate/"),'LRT',0,'L',1);
		$this->SetFillColor(255,240,230);
		$this->Cell($w[1],6,utf8_decode($this->getHourlyRate($orderform)),'LRT',0,'L',1);
		$this->ln();
		//Tarif horaire: second line
		$this->SetFillColor(202,222,230);
		$this->Cell($w[0],6,utf8_decode("Tarif horaire"),"LR",0,'L',1);
		$this->SetFillColor(255,240,230);
		$this->Cell($w[1],6,"","LR",0,'R',1);
		$this->ln();
		//Total price / Prix total: first line
		$this->SetFillColor(202,222,230);
		$this->Cell($w[0],6,utf8_decode("Total price / Prix total"),'LRT',0,'L',1);
		$this->SetFillColor(255,240,230);
		$this->Cell($w[1],6,utf8_decode(number_format($orderform->getTotalcost(),2,"."," ")),'LRT',0,'L',1);
		$this->ln();
		//Date of start: first line
		$this->SetFillColor(202,222,230);
		$this->Cell($w[0],6,utf8_decode("Place of training /"),'LRT',0,'L',1);
		$this->SetFillColor(255,240,230);
		$this->Cell($w[1],6,utf8_decode($orderform->getPlaceoftraining()),'LRT',0,'L',1);
		$this->ln();
		//Date de début: second line
		$this->SetFillColor(202,222,230);
		$this->Cell($w[0],6,utf8_decode("Lieu de la formation"),"LRB",0,'L',1);
		$this->SetFillColor(255,240,230);
		$this->Cell($w[1],6,"","LRB",0,'R',1);
		$this->ln();			
	}
	private function getGivenName($evaluation){
		if($evaluation->getFirstname()) return $evaluation->getFirstname();
		if($evaluation->Students() and $evaluation->Students()->getFirstname()) return $evaluation->Students()->getFirstname();
		return null;
	}
	private function getFamilyName($evaluation){
		if($evaluation->getName()) return $evaluation->getName();
		if($evaluation->Students() and $evaluation->Students()->getName()) return $evaluation->Students()->getName();
		return null;		
	}
	public function dPEvalHeader($headimage,$evaluation,$type){
		$this->setTitle("Evaluation");
		$this->dPLogo($headimage);
		$this->SetMargins(20,20,20);
		$this->ln(38);
		$this->SetFont('Arial','B',11);
		$this->Cell(0,5,utf8_decode("RÉSULTATS D'ÉVALUATION LINGUISTIQUE / LANGUAGE ASSESSMENT RESULTS"),0,1,"C");
		$this->Cell(0,5,utf8_decode("OFFRE À COMMANDE / STANDING OFFER"),0,1,"C");
		$this->ln(1);
		$this->SetTextColor(72,118,255);
		$this->SetFont('Arial','B',11);
		if($type==1){
			$this->Cell(0,5,utf8_decode("Formation de groupe à temps plein en français (champs de travail 1) /"),0,1,"C");
			$this->Cell(0,5,utf8_decode("Full-time group training in French (Work Stream 1)"),0,1,"C");			
		}elseif($type==7){
			$this->Cell(0,5,utf8_decode("Full-time individual training in French (Work Stream 7)"),0,1,"C");			
		}elseif($type==2){
			$this->Cell(0,5,utf8_decode("Full-time group training in English (Field 2)"),0,1,"C");
			$this->Cell(0,5,utf8_decode("Language Assessment results"),0,1,"C");					
		}elseif($type==8){
			$this->Cell(0,5,utf8_decode("Full-time individual training in English (Field 8)"),0,1,"C");
			$this->Cell(0,5,utf8_decode("Language Assessment results"),0,1,"C");					
		}
		$this->ln(5);
	}
	//Print the second page with orderform data
	public function dEvalData($evaluation,$w,$type){
		//PARTICIPANT INFORMATION
		$this->SetFillColor(211,211,211);
		$this->SetTextColor(0,0,0);
		$this->SetFont('Arial','B',11);
		$this->Cell(170,6,utf8_decode("INFORMATION SUR LE PARTICIPANT / PARTICIPANT INFORMATION"),'LRT',1,'C',1);
		$this->SetFillColor(255,255,255);
		$this->SetFont('Arial','',10);
		$this->Cell($w[0],6,utf8_decode("Ministère / Department:"),"LRT",0,'L',0);
		$this->Cell($w[1],6,utf8_decode($evaluation->getCustomer()),"LRT",1,'L',0);
		$this->Cell($w[0],6,utf8_decode("Prénom / Given Name:"),"LRT",0,'L',0);
		$this->Cell($w[1],6,utf8_decode($this->getGivenName($evaluation)),"LRT",1,'L',0);
		$this->Cell($w[0],6,utf8_decode("Nom / Family Name:"),"LRT",0,'L',0);
		$this->Cell($w[1],6,utf8_decode($this->getFamilyName($evaluation)),"LRT",1,'L',0);
		$this->Cell($w[0],6,utf8_decode("Numéro de téléphone / Telephone Number:"),"LRT",0,'L',0);
		$this->Cell($w[1],6,utf8_decode($evaluation->getPhone()),"LRT",1,'L',0);
		$this->Cell($w[0],6,utf8_decode("Adresse courriel / Email Address:"),"LRT",0,'L',0);
		$this->Cell($w[1],6,utf8_decode($evaluation->getEmailstudent()),"LRT",1,'L',0);
		//PARTICIPANT INFORMATION
		$this->SetFillColor(211,211,211);
		$this->SetFont('Arial','B',11);
		$prog = $evaluation->getLanguages()=="French"?"PROGRAMME DE FRANÇAIS LANGUE SECONDE (PFL2)":"COMMUNICATIVE ENGLISH AT WORK PROGRAM (CEWP)";
		$this->Cell(170,6,utf8_decode($prog),'LRT',1,'C',1);
		$sOn = $evaluation->getLanguages()=="French"?"/30":"/20";
		$this->SetFillColor(255,255,255);
		$this->SetFont('Arial','',10);
		$this->Cell($w[0],6,utf8_decode("Date de l'évaluation / Assessment Date:"),"LRT",0,'L',0);
		$this->Cell($w[1],6,$evaluation->getEvaldate()->format("d-m-Y"),"LRT",1,'L',0);
		$this->Cell($w[0],6,utf8_decode("Résultats CE et EE internes / "),"LRT",0,'L',0);
		$this->Cell(42,6,utf8_decode("CE / RC:  "),"LRT",0,'L',0);	
		$this->Cell(43,6,utf8_decode($evaluation->getEeresult().$sOn),"LRT",1,'L',0);	
		$this->Cell($w[0],6,utf8_decode("In-house RC and WE results "),"LR",0,'L',0);
		$this->Cell(42,6,utf8_decode("EE / WE:  "),"LRT",0,'L',0);	
		$this->Cell(43,6,utf8_decode($evaluation->getRcresult().$sOn),"LRT",1,'L',0);		
		$this->Cell($w[0],6,utf8_decode("Niveaux visés / Target Levels:"),"LRT",0,'L',0);
		$this->Cell($w[1],6,utf8_decode($evaluation->getTargetprofile()),"LRT",1,'L',0);
		$field = $type!=0?"(Champ $type / Field $type)":"";
		//Field 1 or 2
		if($type==1 or $type==2){
			$this->Cell($w[0],6,utf8_decode("Étape et leçon de départ en groupe/ Group Training"),"LRT",0,'L',0);
			$this->Cell($w[1],6,utf8_decode(""),"LRT",1,'L',0);	
			$this->Cell($w[0],6,utf8_decode("Starting Step and Lesson ".$field),"LR",0,'L',0);
			$this->Cell($w[1],6,utf8_decode(""),"LR",1,'L',0);	
			$this->Cell($w[0],6,utf8_decode("Durée de formation en groupe estimée / Estimated"),"LRT",0,'L',0);
			$this->Cell($w[1],6,utf8_decode(""),"LRT",1,'L',0);	
			$this->Cell($w[0],6,utf8_decode("Group Training Duration ".$field),"LR",0,'L',0);
			$this->Cell($w[1],6,utf8_decode(""),"LR",1,'L',0);			
		}elseif($type==7 or $type==8){
		//Field 7 or 8
			$this->Cell($w[0],6,utf8_decode("Étape et leçon de départ en groupe/ Group Training"),"LRT",0,'L',0);
			$this->Cell($w[1],6,utf8_decode(""),"LRT",1,'L',0);	
			$this->Cell($w[0],6,utf8_decode("Training Starting Lesson ".$field),"LR",0,'L',0);
			$this->Cell($w[1],6,utf8_decode(""),"LR",1,'L',0);	
			$this->Cell($w[0],6,utf8_decode("Durée de formation en formation individuelle/"),"LRT",0,'L',0);
			$this->Cell($w[1],6,utf8_decode(""),"LRT",1,'L',0);	
			$this->Cell($w[0],6,utf8_decode("Estimated Individual Training Duration  (Champ $type/"),"LR",0,'L',0);
			$this->Cell($w[1],6,utf8_decode(""),"LR",1,'L',0);	
			$this->Cell($w[0],6,utf8_decode("Field $type)"),"LR",0,'L',0);
			$this->Cell($w[1],6,utf8_decode(""),"LR",1,'L',0);			
		}else{
			$this->Cell($w[0],6,utf8_decode("Starting Step and Lesson "),"LR",0,'L',0);
			$this->Cell($w[1],6,utf8_decode(""),"LR",1,'L',0);	
			$this->Cell($w[0],6,utf8_decode("Durée de formation en groupe estimée / Estimated"),"LRT",0,'L',0);
			$this->Cell($w[1],6,utf8_decode(""),"LRT",1,'L',0);	
			$this->Cell($w[0],6,utf8_decode("Group Training Duration "),"LR",0,'L',0);
			$this->Cell($w[1],6,utf8_decode(""),"LR",1,'L',0);				
		}
		//MLAT or TALV RESULTS
		$sTalv = $evaluation->getLanguages()=="French"?"MLAT RESULTS (OPTIONAL ASSESSMENT)":"TALV RESULTS (OPTIONAL ASSESSMENT)";
		$this->SetFillColor(211,211,211);
		$this->SetFont('Arial','B',11);
		$this->Cell(170,6,utf8_decode($sTalv),'LRT',1,'C',1);
		$this->SetFillColor(255,255,255);	
		$this->SetFont('Arial','',10);
		$bMlat = $evaluation->getOptions()=="MLAT"?"Yes":"No";
		$sTalvLiv = $evaluation->getLanguages()=="French"?"MLAT":"TALV";
		$this->Cell($w[0],8,utf8_decode($sTalvLiv." Requested /Demandé: ".$bMlat),"LRT",0,'L',0);	
		$this->Cell($w[1],8,utf8_decode("Results / Résultats: "),"LRT",1,'L',0);	
		//MLAT RESULTS
		$this->SetFillColor(211,211,211);
		$this->SetFont('Arial','B',11);
		$this->Cell(170,6,utf8_decode("HISTORIQUE D'ÉVALUATION (CFP) / ASSESSMENT HISTORY (PSC)"),'LRT',1,'C',1);
		$this->SetFillColor(255,255,255);
		$this->SetFont('Arial','',10);
		$this->Cell($w[0],5,utf8_decode("Compréhension de l'écrit/"),"LRT",0,'L',0);	
		$this->Cell(42,5,utf8_decode($evaluation->getWritencomprehension()),"LRT",0,'L',0);
		$this->Cell(43,5,"","LRT",1,'L',0);
		$this->Cell($w[0],5,utf8_decode("Reading Comprehension"),"LR",0,'L',0);
		$this->Cell(42,5,"","LR",0,'L',0);
		$this->Cell(43,5,"","LR",1,'L',0);
		$this->Cell($w[0],5,utf8_decode("Expression écrite/"),"LRT",0,'L',0);	
		$this->Cell(42,5,utf8_decode($evaluation->getWritenexpression()),"LRT",0,'L',0);
		$this->Cell(43,5,"","LRT",1,'L',0);
		$this->Cell($w[0],5,utf8_decode("Written Expression"),"LR",0,'L',0);
		$this->Cell(42,5,"","LR",0,'L',0);
		$this->Cell(43,5,"","LR",1,'L',0);	
		$this->Cell($w[0],5,utf8_decode("Compétence orale/"),"LRT",0,'L',0);	
		$this->Cell(42,5,utf8_decode($evaluation->getOralunderstanding()),"LRT",0,'L',0);
		$this->Cell(43,5,"","LRT",1,'L',0);
		$this->Cell($w[0],5,utf8_decode("Oral Proficiency"),"LR",0,'L',0);
		$this->Cell(42,5,"","LR",0,'L',0);
		$this->Cell(43,5,"","LR",1,'L',0);		
		$this->Cell($w[0],5,utf8_decode("Fournisseur qui a réalisé l'évaluation/"),"LRT",0,'L',0);	
		$this->Cell($w[1],5,utf8_decode("CLIC OTTAWA GATINEAU"),"LRT",1,'L',0);
		$this->Cell($w[0],5,utf8_decode("Supplier who completed the assessment"),"LR",0,'L',0);
		$this->Cell($w[1],5,"","LR",1,'L',0);	
		//MLAT RESULTS
		$this->SetFillColor(211,211,211);
		$this->SetFont('Arial','B',11);
		$this->Cell(170,8,utf8_decode("À PROPOS DE CETTE ÉVALUATION / ABOUT THIS ASSESSMENT"),'LRT',1,'C',1);
		$this->SetFillColor(255,255,255);
		$this->SetFont('Arial','',9);
		$this->MultiCell(170,4,utf8_decode("Les connaissances et compétences en langue seconde de l'employé (e) ont été évaluées selon le programme PFL2 afin de déterminer la leçon de départ dans le cadre de la formation de groupe à temps plein pour l'offre à commandes EN578-093429. / The employee’s knowledge and abilities of his/her second language have been assessed in relation to the PFL2 program to determine a starting lesson in the context of full-time group training under Standing Offer  EN578-093429."),"LRTB",1,"L",false);		
		return;
	}
	public function dPFooter(){
		$this->SetFont('Arial','B',14);
		$this->ln(5);
		$this->Cell(0,4,utf8_decode("CLIC - Ottawa & Gatineau"),0,1,"C");
		$this->SetFont('Arial','',10);
		$this->ln(1);
		$this->Cell(0,4,utf8_decode("280 Albert, Suite 800 (8th floor), Ottawa, Ontario, K1P 5G8"),0,1,"C");
		$this->ln(1);
		$this->Cell(0,4,utf8_decode("4 rue Taschereau, Suite 430 (4th floor), Gatineau (Sector Hull), Québec, J8Y 2V5"),0,1,"C");
		$this->SetFont('Arial','B',10);
		$this->ln(1);
		$this->Cell(0,4,utf8_decode("Téléphone : Ottawa 819-772-CLIC (2542)  Gatineau 819-772-CLIC (2542)"),0,1,"C");
		$this->ln(1);
		$this->SetFont('Arial','',10);
		$this->Cell(0,4,utf8_decode("Télécopieur : 819-772-2542"),0,1,"C");
		$this->ln(1);
		$this->Cell(0,4,utf8_decode("Courriel : info@clic-hull.com"),0,1,"C");
		$this->Cell(0,4,utf8_decode("Site internet : www.clic-hull.com"),0,1,"C");
	}
	public function dFooter(){
		$this->SetFillColor(255,255,255);
		$this->SetFont('Arial','BU',9);
		$this->ln();
		$this->Cell(30,4,utf8_decode("Article 1 Policy for course cancellation:"),0,1,"L");
		$this->SetFont('Arial','',9);
		$this->MultiCell(175,4,utf8_decode("A written notice by email to cancel@clic-hull.com within a minimum delay of 48 hours is required for all lesson cancellations and this between 9:00 a.m. and 3:00 p.m. Monday to Friday. If this 48 hour delay is not respected, we must charge for the course as mentioned in the schedule."),0,1,"L",false);
		$this->ln();
		$this->SetFont('Arial','BU',9);
		$this->Cell(30,4,utf8_decode("Article 1 Politique d'annulation de cours:"),0,1,"L");
		$this->SetFont('Arial','',9);
		$this->MultiCell(175,4,utf8_decode("Un avis par courriel à cancel@clic-hull.com dans un délai minimal de 48 heures est requis et ceci entre 9h00 et 15h00 du lundi au vendredi. Si ce délai de 48 heures n'est pas respecté, nous devrons facturer le cours prévu à l'horaire."),0,1,"L",false);
		$this->ln();
		$this->SetFont('Arial','BU',9);
		$this->Cell(30,4,utf8_decode("Article 2:"),0,1,"L");
		$this->SetFont('Arial','B',9);
		$this->MultiCell(175,4,utf8_decode("Please note that we require receipt of the signed order form 10 business days before the start of the training.  This order form is conditional upon availability of a teacher and a class room.  This order form is valid for 30 days."),0,1,"L",false);
	}
	public function dFooterOthers(){
		$this->SetFillColor(255,255,255);
		$this->AddPage();
		$headimage = 'images/pricing/head.png';
		$this->dPLogo($headimage);
		$this->ln(23);
		$this->SetFont('Arial','BU',9);
		$this->Cell(30,4,utf8_decode("Article 2:"),0,1,"L");
		$this->SetFont('Arial','B',9);
		$this->MultiCell(175,4,utf8_decode("Veuillez noter que nous devons recevoir le bon de commande signé au  minimum 10 jours avant le début de la formation.  Veuillez noter que ce bon de commande dépend de la disponibilité d'un professeur et d'une salle de classe.  Ce bon de commande  est valide pour une période de 30 jours."),0,1,"L",false);
		$this->Cell(2,1,"",0,1,"L");
		$this->SetFont('Arial','BU',9);
		$this->Cell(30,4,utf8_decode("Article 3:"),0,1,"L");
		$this->SetFont('Arial','',9);
		$this->MultiCell(175,4,utf8_decode("In order to respect our teachers' working conditions, we require that training be in blocks of three hours minimum. "),0,1,"L",false);
		$this->MultiCell(175,4,utf8_decode("Afin de respecter les conditions de travail de nos professeurs, nous exigeons que la formation soit donnée par  bloc d'au moins trois heures consécutives."),0,1,"L",false);
		$this->SetFont('Arial','BU',9);
		$this->Cell(2,1,"",0,1,"L");
		$this->Cell(30,4,utf8_decode("Article 4:"),0,1,"L");
		$this->SetFont('Arial','B',9);
		$this->MultiCell(175,4,utf8_decode("This order form is for language training outside of any pre-existing standing offer and is valid for a maximum of $25 000."),0,1,"L",false);
		$this->SetFont('Arial','B',9);
		$this->MultiCell(175,4,utf8_decode("Ce bon de commande s'applique pour  la formation à l'extérieur de toute offre à commandes pré-existante pour un maximum de 25 000$."),0,1,"L",false);
		$this->ln(4);
		$this->SetFont('Arial','B',11);
		$this->Cell(38,4,utf8_decode("Approved by"),0,0);	
		$this->Cell(80);	
		$this->Cell(38,4,utf8_decode("Prepared by/Préparé par"),0,0);	
		$this->ln();
		$this->SetFont('Arial','B',11);
		$this->Cell(38,4,utf8_decode("Apprové par"),0,0);	
		$this->Cell(80);	
		$this->Cell(38,4,utf8_decode("CLIC - Ottawa/Gatineau"),0,0);	
		$this->ln(16);
		$this->SetFont('Arial','',11);
		$this->Cell(38,4,utf8_decode("_______________________________"),0,0);	
		$this->Cell(80);	
		$this->SetFont('Arial','U',11);		
		$this->Cell(30,6,utf8_decode("Catherine Coulais"),0,0,"L");
		$this->SetFont('Arial','',11);
		$this->Cell(10,6,utf8_decode("___________"),0,0);	
		$this->ln(4);
		$this->SetFont('Arial','',11);
		$this->Cell(38,6,utf8_decode("(Please Print)"),0,0);	
		$this->Cell(80);	
		$this->Cell(38,6,utf8_decode("Name / Nom"),0,0);	
		$this->ln(10);
		$this->SetFont('Arial','',11);
		$this->Cell(38,6,utf8_decode("_______________________________"),0,0);	
		$this->Cell(80);
		$this->SetFont('Arial','U',11);	
		$this->Cell(38,6,utf8_decode("Directrice pédagogique adjointe"),0,0,"L");
		$this->ln(4);
		$this->SetFont('Arial','',11);
		$this->Cell(38,6,utf8_decode("Title / Titre"),0,0);	
		$this->Cell(80);	
		$this->Cell(38,6,utf8_decode("Title / Titre"),0,0);		
		$this->ln(10);
		$this->SetFont('Arial','',11);
		$this->Cell(38,4,utf8_decode("_______________________________"),0,0);	
		$this->ln(4);
		$this->SetFont('Arial','',11);
		$this->Cell(38,6,utf8_decode("Signature"),0,0);		
		$this->ln(10);
		$this->SetFont('Arial','B',11);
		$this->Cell(38,4,utf8_decode("Payment option / Possibilité de paiement par :"),0,1);
		$this->ln(2);
		$this->Rect($this->GetX()+2,$this->GetY(),4,4);
		$this->SetFont('Arial','',11);
		$this->SetXY($this->GetX()+8,$this->GetY());
		$this->Cell(38,4,utf8_decode("Credit Card / Carte de crédit"),0,1);
		$this->ln(2);
		$this->Rect($this->GetX()+2,$this->GetY(),4,4);
		$this->SetFont('Arial','',11);
		$this->SetXY($this->GetX()+8,$this->GetY());
		$this->Cell(38,4,utf8_decode("Direct Depoist / Dépôt  direct"),0,1);
		$this->ln(2);
		$this->Rect($this->GetX()+2,$this->GetY(),4,4);
		$this->SetFont('Arial','',11);
		$this->SetXY($this->GetX()+8,$this->GetY());
		$this->Cell(38,4,utf8_decode("Other/Autre"),0,1);
		$this->ln(2);
		$this->SetFont('Arial','B',11);
		$this->ln(3);
		$this->Cell(38,4,utf8_decode("Name of the person responsible for billing / "),0,1);	
		$this->Cell(38,4,utf8_decode("Nom de la personne responsable de la facturation :"),0,1);
		$this->SetFont('Arial','',11);
		$this->ln(5);
		$this->Cell(115,4,utf8_decode("_______________________________________________________________________________"),0,1);		
		$this->ln(5);
		$this->SetFont('Arial','B',11);
		$this->Cell(81,4,utf8_decode("Telephone  Number / Numéro de téléphone:"),0,0);	
		$this->SetFont('Arial','',11);
		$this->Cell(38,4,utf8_decode("_________________________________________"),0,1);	
		$this->ln(3);
		$this->SetFont('Arial','B',11);
		$this->Cell(62,4,utf8_decode("Email Address / Adresse courriel:"),0,0);	
		$this->SetFont('Arial','',11);
		$this->Cell(38,4,utf8_decode("__________________________________________________"),0,1);
		$this->ln(3);
		$this->SetFont('Arial','B',11);
		$this->Cell(38,4,utf8_decode("Billing Address / Adresse de facturation:"),0,1);	
		$this->SetFont('Arial','',11);
		$this->ln(5);
		$this->Cell(115,4,utf8_decode("_______________________________________________________________________________"),0,0);	
		$this->ln(3);
		$this->dPFooter();		
	}
	public function dPLogo($headimage){
		//Impression du logo
		$this->Image($headimage,15,18,180);
	}
	private function getHourlyRate($orderform){
		$hourlyrate = $orderform->getHourlyrate();
		if(floatval($orderform->getHourlyrate1())>0){
			$hourlyrate = $hourlyrate." / ".$orderform->getHourlyrate1();
		}
		if(floatval($orderform->getHourlyrate2())>0){
			$hourlyrate = $hourlyrate." / ".$orderform->getHourlyrate2();
		}
		return $hourlyrate;
	}
	private function getTypeofcontract($oEnquiry){
		if($oEnquiry->getTypecontract() and ($oEnquiry->getTypecontract()=="Non-NMSO" or $oEnquiry->getTypecontract()=="Service Contract")) return "Service Contract/Contrat de service";
		elseif($oEnquiry->getTypecontract()) return $oEnquiry->getTypecontract();
		return null;
	}
	private function wrapText($text){
		$aText = array();
		$newtext = "";
		$size = 0;
		$aSplitText = explode(" ",$text);
		$endword = end($aSplitText);
		foreach($aSplitText as $word){
			$size=$size+strlen($word);
			$newtext = $newtext.$word." ";
			if($size>46){
				$aText[]=$newtext;
				$newtext = "";
				$size = 0;				
			}elseif($endword==$word){
				$aText[]=$newtext;
			}			
		}
		return $aText;
	}
}
?>
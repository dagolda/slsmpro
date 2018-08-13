<?php 
/* 
* Date Création: 07/03/2016
* Auteur: N'VEKOUNOU Moise José
* Nom file : CommonController.php
* Description: tools controller
*/
namespace Bo\AdminBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bo\AdminBundle\Entity\Tyear;
use Bo\AdminBundle\Entity\Tsweek;
use Bo\AdminBundle\Entity\Errors;
use Bo\AdminBundle\Entity\Payroll;
use Bo\AdminBundle\Entity\Message;
use Bo\AdminBundle\Entity\Billing;
use Bo\AdminBundle\Entity\TsBilling;
use Bo\AdminBundle\Entity\Timesheet;
use Bo\AdminBundle\Entity\TsValidation;
use Bo\AdminBundle\Entity\Agenda;
use Bo\AdminBundle\Entity\TsStudent;
use Bo\AdminBundle\Entity\Hteaching;
use Bo\AdminBundle\Entity\Hadmin;
use Bo\AdminBundle\Entity\Hnoshow;
use Bo\AdminBundle\Entity\Hothers;
use Bo\AdminBundle\Entity\Session;
use Bo\AdminBundle\Entity\Hholiday;
use Bo\AdminBundle\Entity\PeriodPay;
use Bo\AdminBundle\Entity\Group;
use Bo\AdminBundle\Libs\PHPExcel\Factory;
use Bo\AdminBundle\Entity\Substitution;
use Bo\AdminBundle\Entity\Criteria;
use Bo\AdminBundle\Entity\Logmanager;
/** 
* Common controller 
*/
class CommonController extends Controller
{
	//for logging the error of sls
	protected function logger($texte){
		$oLog = new Logmanager();
		$oLog->setLog($texte." by ".$this->getConnectedUser());	
		return;
	}
	protected function getUserIdentity(){
		$oUser = $this->getTokenUser();
		if($oUser) return $oUser->getEmployee()->getName()." ".$oUser->getEmployee()->getFirstname();
		return null;
	}
	protected function createActivity($rubric,$ssrub){
		$em = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Activities');
		$aActivity = $em->findBy(array('sessionid'=>session_id(),'rubric'=>$rubric,'subrubric'=>$ssrub));
		if(isset($aActivity[0])) return;
		$oUser = $this->getTokenUser();
		if(is_object($oUser)){
			$userid = $oUser->getId();
			return $em->recordActitivy($rubric,$ssrub,$userid);
		}
		return null;
	}
	protected function getFromSession($aTab){
		$aResult = array();
		$session = $this->get('session');
		foreach($aTab as $value){
			$aResult[$value] = $session->get($value);			
		}	
		return $aResult;
	}
	protected function setArraySession($aTab){
		$aResult = array();
		$session = $this->get('session');
		foreach($aTab as $key=>$value){
			$session->set($key,$value);			
		}	
		return true;
	}
	protected function updateView($entity){
		$em = $this->getDoctrine()->getManager();
		$view = $entity->getVue();
		$view = $view+1;
		$entity->setVue($view);
		$em->persist($entity);
		$em->flush();
		return;
	}
	protected function imgresize($cheminsource,$image,$chemindest,$newwidth){
		$imgressource = $this->getImgRessource($cheminsource,$image);
		$imgwidth = imagesx($imgressource);
		$imgheight = imagesy($imgressource);
		$newheight = $this->getHeight($imgwidth,$newwidth,$imgheight);
		header("Content-type: image/png"); //la ligne qui change tout!
		$newimage = imagecreatetruecolor($newwidth,$newheight);	
		imagecopyresampled($newimage, $imgressource, 0, 0, 0, 0, $newwidth, $newheight, $imgwidth, $imgheight);
		imagejpeg( $newimage, "300/".$image );
	}
	protected function getListFile($file){
		if (file_exists($file))
		{
			chmod($file,0700);
			$id_dossier = opendir($file);
			while($element = readdir($id_dossier))
			{	
				if($element != "." && $element != "..") $res[]=$element;
			}
			closedir($id_dossier);
			return $res;
		}
	}
	protected function getImgRessource($chemin,$image){
		$ext=0;
		$aImgExt = array('jpg','gif','png');
		$aExplode = explode(".",$image);
		//Je vérifie si l'extension existe
		if(isset($aExplode[1])){
			$ext = strtolower($aExplode[1]);
			//Est-ce l'extention décrit un file image
			if(!in_array($ext,$aImgExt)) return 0;
		}else{
			return $ext;
		}
		$imagechemin=$chemin.$image;
		if($ext=='jpg') $img_src_resource = imagecreatefromjpeg($imagechemin);
		elseif($ext=='gif') $img_src_resource = imagecreatefromgif($imagechemin);
		elseif($ext=='png') $img_src_resource = imagecreatefrompng($imagechemin);
		else return 0;
		return $img_src_resource;
	} 
	protected function getHeight($imgwidth,$newwidth,$imgheight){
		if($imgwidth==0 or $newwidth==0) return null;
		$proportion = $imgwidth/$newwidth;
		$newheight = intval($imgheight/$proportion);
		return $newheight;
	}
	protected function getListUrl($url){
		$aReturn=array();
		if($url==null or $url=="NA") return null;
		$aUrl = explode(",",$url);
		foreach($aUrl as $sUrl){
			if($sUrl==null) continue;
			$aUrlBis = explode("#",$sUrl);
			if(count($aUrlBis)==1){
				if(file_get_contents($sUrl)!=null) $aReturn[]=array($sUrl,null);
			}else{
				$aReturn[]=array($aUrlBis[0],$aUrlBis[1]);
			}		
		}
		return $aReturn;
	}
	protected function sendmail($to,$subject,$message,$cc=null,$Bcc=null)
	{
		//$em = $this->getDoctrine()->getManager();
		$from = $this->getParam("send_mail_address",6);
		// Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

		// En-têtes additionnels
		$headers .= "To: ".$to."\r\n";
		$headers .= "From: CLIC <".$from.">\r\n";
		if($cc!=null) $headers .= 'Cc: '.$cc. "\r\n";
		if($Bcc!=null) $headers .= 'Bcc: '.$Bcc. "\r\n";

		$bRes = mail($to, $subject, $message,$headers);
		return (int) $bRes;
	}
	protected function sendwithboundary($to,$subject,$message,$cc=null,$Bcc=null,$aFile=null)
	{
		$boundary = md5(uniqid(rand(),true));
		$from = $this->getParam("send_mail_address",6);
		// Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers = 'Content-Type: multipart/mixed;'."n".' boundary="'.$boundary.'"';
		// En-têtes additionnels
		$headers .= "To: ".$to."\r\n";
		$headers .= "From: ".$from."\r\n";
		if($cc!=null) $headers .= 'Cc: '.$cc. "\r\n";
		if($Bcc!=null) $headers .= 'Bcc: '.$Bcc. "\r\n";
		$body = $this->getBody($message,$boundary,$aFile);
		$bRes = mail($to,$subject,$body,$headers);
		return (int) $bRes;
	}		
	private function getBody($message,$boundary,$aFiles){
		$body = 'This is a multi-part message in MIME format.'."\r\n";
		$body .= '--'.$boundary."\r\n";
		// ici, c'est la première partie, notre texte HTML (ou pas !)
		// Là, on met l'entête
		$body .= 'Content-Type: text/html; charset="UTF-8"'."\r\n";
		// On peut aussi mettres les autres (voir à la fin)
		$body .= "\r\n";
		// On remet un deuxième retour à la ligne pour dire que les entêtes sont finie, on peut afficher notre texte !
		$body .= $message;
		// Le texte est finie, on va faire un saut à la ligne
		$body .= "\r\n";
		// Et on commence notre deuxième partie qui va contenir le PDF
		$body .= '--'.$boundary."\r\n";
		foreach($aFiles as $aFile){
			$filename = $aFile[0];
			$path = $aFile[1];
			// On lui dit (dans le Content-type) que c'est un file PDF
			$body .= 'Content-Type: application/pdf; name="'.$filename.'"'."\r\n";
			$body .= 'Content-Transfer-Encoding: base64'."\r\n";
			$body .= 'Content-Disposition: attachment; filename="'.$filename.'"'."\r\n";
			// Les entêtes sont finies, on met un deuxième retour à la ligne
			$body .= "\r\n";
			if(file_exists($path)){
				$source = chunk_split(base64_encode(file_get_contents($path)));
				$body .= $source;			
			}		
		}
		// On ferme la dernière partie :
		$body .= "\r\n".'--'.$boundary.'--';	
		return $body;
	}
	protected function sendMailWith($to,$subject,$message,$filename,$path,$cc=null,$Bcc=null){
		// create unique boundary
		$boundary = md5(uniqid(rand(), true));
		//define mail headers
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers = 'Content-Type: multipart/mixed; boundary='.$boundary."\r\n";
		$headers .= "To: ".$to."\r\n";
		$from = $this->getParam("send_mail_address",6);
		$headers .= "From: CLIC <".$from.">\r\n";
		if($cc!=null) $headers .= 'Cc: '.$cc. "\r\n";
		if($Bcc!=null) $headers .= 'Bcc: '.$Bcc. "\r\n";
		// create the body
		$body = 'This is a multi-part message in MIME format.'."\r\n";
		$body .= '--'.$boundary."\r\n";
		// ici, c'est la première partie, notre texte HTML (ou pas !)
		// Là, on met l'entête
		$body .= 'Content-Type: text/html; charset="UTF-8"'."\r\n";
		// On peut aussi mettres les autres (voir à la fin)
		$body .= "\r\n";
		// On remet un deuxième retour à la ligne pour dire que les entêtes sont finie, on peut afficher notre texte !
		$body .= $message;
		// Le texte est finie, on va faire un saut à la ligne
		$body .= "\r\n";
		// Et on commence notre deuxième partie qui va contenir le PDF
		$body .= '--'.$boundary."\r\n";
		// On lui dit (dans le Content-type) que c'est un file PDF
		$body .= 'Content-Type: application/pdf; name="'.$filename.'"'."\r\n";
		$body .= 'Content-Transfer-Encoding: base64'."\r\n";
		$body .= 'Content-Disposition: attachment; filename="'.$filename.'"'."\r\n";
		// Les entêtes sont finies, on met un deuxième retour à la ligne
		$body .= "\r\n";
		if(file_exists($path))
		{
			$source = chunk_split(base64_encode(file_get_contents($path)));
		}
		$body .= $source;
		// On ferme la dernière partie :
		$body .= "\r\n".'--'.$boundary.'--';
		// On envoi le mail :
		mail($to, $subject, $body, $headers);		
	}
	protected function getFilesBy($path,$filename){
		$aFile = array($filename,$path);
		return array($aFile);
	}
	protected function getTrainingKit(){
		$file1 = "participantkit.pdf";
		$file2 = 'tutoriel_inscription.pdf';
		return array($file1,$file2);
	}
	protected function sendmail2($suject,$from,$to,$body)
	{
		$message = \Swift_Message::newInstance()
			->setSubject($suject)
			->setFrom($from)
			->setTo($to)
			->setBody($body);
		$res = $this->get('mailer')->send($message);
		return $res;
	}
	protected function getTokenUser(){
		return $this->get('security.token_storage')->getToken()->getUser();	
	}
	protected function getConnectedEmployee(){
		$this->verifySession();
		$oUser = $this->getTokenUser();		
		if(!is_object($oUser)) return null;
		return $oUser?$oUser->getEmployee():null;
	}
	protected function getFNConnectedEmployee(){
		$this->verifySession();
		$oUser = $this->getTokenUser();		
		if(!is_object($oUser)) return null;
		$oEmployee = $oUser?$oUser->getEmployee():null;
		if($oEmployee!=null){
			return $oEmployee->getFirstname()." ".$oEmployee->getName();
		}
		return null;
	}
	protected function getConnectedStudent(){
		$this->verifySession();
		$oUser = $this->getTokenUser();	
		return $oUser?$oUser->getStudents():null;
	}
	protected function getConnectedCoordinator(){
		$this->verifySession();
		$oUser = $this->getTokenUser();	
		$idcoordinator = $oUser?$oUser->getIdcoordinator():null;
		if($idcoordinator>0){
			$oCoordinator = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Coordinator')->find($idcoordinator);
			return $oCoordinator;
		}
		return null;		
	}
	protected function getConnectedUser(){
		if($this->getFNConnectedEmployee()!=null) return $this->getFNConnectedEmployee();
		elseif($this->getConnectedStudent()!=null) return $this->getConnectedStudent();
		elseif(getConnectedCoordinator()!=null) return $this->getConnectedCoordinator();
		return "";
	}
	protected function getConnected(){
		$oUser = $this->getTokenUser();	
		return $oUser?$oUser->getEmployee():null;
	}
	protected function getInfoCoordinator($oUser){
		$idcoordinator = $oUser?$oUser->getIdcoordinator():null;
		if($idcoordinator>0){
			$oCoordinator = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Coordinator')->find($idcoordinator);
			return $oCoordinator;
		}
		return null;		
	}
	protected function verifySession(){
		$this->removeSession(array("message"));
		if($this->isConnected()==false){
			$this->setSessionByName('message',$this->get('translator')->trans('Login timeout expired'));
			return $this->redirectToRoute('fos_user_security');
		} 
		return true;
	}
	protected function getUserProfile(){
		$oUser = $this->getTokenUser();	
		$employee = $oUser?$oUser->getEmployee():null;
		if($employee) return $employee->getProfil()->getName();
	}
	protected function isConnected(){
		$oUser = $this->getTokenUser();	
		if($oUser!=null) return true;
		return false;
	}
	protected function getDiffHour($endtime,$starttime){
		$ah1=explode(':',$endtime); //endtime
		$ah2=explode(':',$starttime);//starttime
		if($ah1[0]<$ah2[0]) return false;	
		if($ah1[0]==$ah2[0] and $ah1[1]<$ah2[1]) return false;			
		if($ah1[1]>=$ah2[1]){
			return (intval($ah1[0])-intval($ah2[0])).":".(intval($ah1[1])-intval($ah2[1]));
		}else{
			return (intval($ah1[0])-(intval($ah2[0])+1)).":".(60-intval($ah2[1]));
		}
		return false;
	}
	protected function getAddHour($h1,$h2){
		$ah1=explode(':',$h1);
		$ah2=explode(':',$h2);		
		$hour=intval($ah1[0])+intval($ah2[0]);
		if($hour>23) return false;
		if(isset($ah1[1]) and isset($ah2[1])) $min=intval($ah1[1])+intval($ah2[1]);
		elseif(isset($ah1[1])) $min=intval($ah1[1]);
		elseif(isset($ah2[2])) $min=intval($ah2[1]);
		else $min="00";
		if($min>=60){
			$sup = $min-60;
			return ($hour+1).":".$sup;
		}
		return $hour.":".$min;
	}
	protected function updateEntity($oEntity){
		$em = $this->getDoctrine()->getManager();
		$em->persist($oEntity);
		$em->flush();	
		if(!$oEntity){
			return null;
		}else{
			return $oEntity->getId();
		}
	}
	protected function removeEntity($oEntity){
		$em = $this->getDoctrine()->getManager();
		$em->remove($oEntity);
		try {
			$res=$em->flush();	
		} catch (Exception $e) {
			return $e->getMessage();
		}
		return $res;
	}
	protected function removeArrayEntity($aEntities){
		foreach($aEntities as $oEntity){
			$this->removeEntity($oEntity);
		}
		return true;
	}
	//$profil=1 =>employee;$profil=2 =>student;$profil=3 =>coordinator 
	protected function createUser($profil,$oEntity){
		if($profil==3){
			$sFullname = $oEntity->getName();
			$aFullname = explode(" ",$sFullname);
			if(isset($aFullname[0]) and isset($aFullname[1])){
				$sFirstname=$aFullname[0];
				$sName=$aFullname[1];
			} 
			if(isset($aFullname[2])){
				$sName=$this->replaceInText($aFullname[1].$aFullname[2]);
			} 
		}else{
			$sFirstname=$this->replaceInText($oEntity->getFirstname());
			$sName=$this->replaceInText($oEntity->getName());			
		}
		$sEmail=$oEntity->getEmail();
		$username=$this->getUsername($sFirstname,$sName,$sEmail);
		if($username==null) return false;
		$userManager = $this->get('fos_user.user_manager');
		$user = $userManager->createUser();
		$user->setEnabled(true);
		$user->setUsername($username);
		$user->setEmail($sEmail);
		$user->setPwd(md5($oEntity->getPwd()));
		$user->setPlainPassword($oEntity->getPwd());
		if($profil==0){			
			$user->addRole('ROLE_ADMIN');
			$user->setEmployee($oEntity);
		}elseif($profil==1){			
			$user->addRole('ROLE_TEACHER');
			$user->setEmployee($oEntity);
		}elseif($profil==2){
			$user->addRole('ROLE_STUDENT');	
			$user->setStudents($oEntity);
		}else{
			$user->addRole('ROLE_COORDINATOR');	
			$user->setIdcoordinator($oEntity->getId());			
		}
		$userManager->updateUser($user);	
		return $user;
	}
	protected function getEmailEmployee($oEmployee){
		$email = $oEmployee->getEmail();
		$email1 = $oEmployee->getEmail1();
		if($email!=null and $email1!=null) return $email."".$email1;
		elseif($email!=null) return $email;
		elseif($email1!=null) return $email1;
		return null;
	}
	protected function updateUserPwd($profil,$oEntity){
		$oEmUser = $this->getDoctrine()->getManager()->getRepository('BoUserBundle:User');
		if($profil==1) $aUser = $oEmUser->findByEmployee($oEntity);
		else $aUser = $oEmUser->findByStudents($oEntity);
		if(!isset($aUser[0])) $user = $this->createUser($profil,$oEntity);
		else{
			$user = $aUser[0];
			$userManager = $this->get('fos_user.user_manager');
			$user->setPwd(md5($oEntity->getPwd()));
			$user->setPlainPassword($oEntity->getPwd());
			$userManager->updateUser($user);			
		} 	
		return $user;		
	}
	//get user by employee : return object
	protected function getUserByEmployee($oEmployee){
		$oEmUser = $this->getDoctrine()->getManager()->getRepository('BoUserBundle:User');
		$aUser = $oEmUser->findByEmployee($oEmployee);
		if(isset($aUser[0])) return $aUser[0];
		return null;
	}
	protected function updateEnabled($oEmployee,$boolean){
		$oUser = $this->getUserByEmployee($oEmployee);
		if($oUser){
			$userManager = $this->get('fos_user.user_manager');
			$oUser->setEnabled($boolean);
			$userManager->updateUser($oUser);			
		}
		return;		
	}
	protected function getUsername($sFirstname,$sName,$sEmail){
		$sFirstname=trim($this->replaceInText($sFirstname));
		$sName=trim($this->replaceInText($sName));
		$aName=explode(" ",$sName);
		if(count($aName)==2) $sName=$aName[0].$aName[1];
		if(count($aName)==3) $sName=$aName[0].$aName[1].$aName[2];
		if(isset($sFirstname[0])) $username = strtolower($sFirstname[0].$sName);
		//Verify if username exists in database
		$oEmUser = $this->getDoctrine()->getManager()->getRepository('BoUserBundle:User');
		$aUser = $oEmUser->findByUsername($username);	
		if(!isset($aUser[0])) return $username;
		$username = strtolower($sFirstname[0].$sFirstname[1].$sName);
		$oEmUser = $this->getDoctrine()->getManager()->getRepository('BoUserBundle:User');
		$aUser = $oEmUser->findByUsername($username);	
		if(!isset($aUser[0])) return $username;
		$username = strtolower($sFirstname[0].$sFirstname[1].$sFirstname[2].$sName);
		$oEmUser = $this->getDoctrine()->getManager()->getRepository('BoUserBundle:User');
		$aUser = $oEmUser->findByUsername($username);	
		if(!isset($aUser[0])) return $username;
		$username = strtolower($sFirstname.".".$sName);
		$oEmUser = $this->getDoctrine()->getManager()->getRepository('BoUserBundle:User');
		$aUser = $oEmUser->findByUsername($username);	
		if(!isset($aUser[0])) return $username;
		return $sEmail;
	}
	protected function errorReporting($code,$action,$comment){
		$oErrors = new Errors();
		$oErrors->setCode($code);
		$oErrors->setAction($action);
		$oErrors->setComment($comment);
		$oErrors->setUser($this->getTokenUser());
		return $this->updateEntity($oErrors);
	}
	protected function removeSession(){
		$this->get('session')->remove('message');
		$this->get('session')->remove('data');
		$this->get('session')->remove('page');
		$this->get('session')->remove('url');
		$this->get('session')->remove('search');		
	}
	protected function getNumberHour($oEntity){
		$sam = $oEntity->getStartam()!=null?$oEntity->getStartam()->format("H:i"):"00:00";
		$eam = $oEntity->getEndam()!=null?$oEntity->getEndam()->format("H:i"):"00:00";
		$epm = $oEntity->getStartpm()!=null?$oEntity->getStartpm()->format("H:i"):"00:00";
		$spm = $oEntity->getEndpm()!=null?$oEntity->getEndpm()->format("H:i"):"00:00";
		$hour = $this->getAddHour($this->getDiffHour($eam,$sam),$this->getDiffHour($epm,$spm));
		return $hour;
	}
	protected function _format($oTime){
		return $oTime->format("H:i");
	}
	//Gestion des message d'erreur
	protected function manageMessage($code,$action,$type,$message){
		$this->get('session')->set('message',array('type'=>$type,'texte'=>$message));
		return $this->errorReporting($code,$action,$message);
	}
	protected function getTypeMessage($type,$message){
		return array('type'=>ucfirst($type),'texte'=>$message);	
	}	
	protected function getFormatMessage($type,$texte){
		return array('type'=>$type,'texte'=>$texte);		
	}
	protected function getSessionMessage(){
		$message = $this->get('session')->get('message');
		$this->get('session')->remove('message');
		return $message;
	}
	protected function setSessionMessage($type,$message){
		$this->get('session')->set('message',array('type'=>$type,'texte'=>$message));
		return;
	}
	protected function setWarningMessage($message){
		$this->get('session')->set('message',array('type'=>"Warning",'texte'=>$message));
		return;
	}
	protected function setSessionByName($name,$value){
		$this->get('session')->set($name,$value);
		return;
	}
	protected function getSessionByName($name){
		$varname = $this->get('session')->get($name);
		$this->get('session')->remove($name);
		return $varname;
	}
	protected function getSessionWithoutRemove($name){
		$varname = $this->get('session')->get($name);
		return $varname;
	}
	protected function getRemoveSession($name){
		$this->get('session')->remove($name);
		return 1;
	}
	//fin gestion message d'erreur
	protected function getarrayDate($startdate,$enddate){
		//date_default_timezone_set('America/Los_Angeles');
		$date = $startdate;
		$aResult=array();
		while($enddate>=$date){
			$iDay = $this->getDayDate($date);
			if($iDay!=6 and $iDay!=7){
				$aResult[]=$date;								
			}
			$date=new \DateTime($this->getNextDay($date));
		}
		return $aResult;
	}
	protected function formatCollection($aCollection){
		if(!$aCollection) return null;
		$array=array();
		foreach($aCollection as $oCollection){
			$array[]=$oCollection->getReference();
		}
		return join("-",$array);
	}
	protected function getRealHour($hour){
		$aHour = explode(':',$hour);
		if(count($aHour)==1){
			$hour = $aHour[0];
			if(strpos($hour,",")) $hour = str_replace(",",".",$hour);
			return floatval($hour);
		} 
		elseif(count($aHour)==2){
			if(intval($aHour[1])==0) return floatval($aHour[0]);
			$dec=(intval($aHour[1]))/60;
			return  floatval($aHour[0])+$dec;
		}
		return null;
	}
	protected function getThisToday(){
		return new \DateTime(date("d-m-Y"));
	}
	protected function getToday(){
		return new \DateTime(date("d-m-Y"));
	}
	protected function getNow(){
		return new \DateTime();
	}
	protected function getDayDate($date){
		return date("N",mktime(0, 0, 0, $date->format("m"), $date->format("d"), $date->format("Y")));
	}
	protected function getNextDay($date){
		if($date==null) return $date;
		if(is_object($date)){
			return date("Y-m-d",mktime(0, 0, 0, $date->format("m"), $date->format("d")+1, $date->format("Y")));
		}else{
			$aDate = explode("-",$date);
			return date("Y-m-d",mktime(0, 0, 0, intval($aDate[1]), intval($aDate[0])+1, intval($aDate[2])));
		}		
	}
	protected function getPreviosDay($date){
		if($date==null) return $date;
		if(is_object($date)){
			return date("Y-m-d",mktime(0, 0, 0, $date->format("m"), $date->format("d")-1, $date->format("Y")));
		}else{
			$aDate = explode("-",$date);
			return date("Y-m-d",mktime(0, 0, 0, intval($aDate[1]), intval($aDate[0])-1, intval($aDate[2])));
		}
	}
	protected function getObjectNextDay($date){
		if($date==null) return $date;
		if(is_object($date)){
			$newdate = date("Y-m-d",mktime(0, 0, 0, $date->format("m"), $date->format("d")+1, $date->format("Y")));
		}else{
			$aDate = explode("-",$date);
			$newdate = date("Y-m-d",mktime(0, 0, 0, intval($aDate[1]), intval($aDate[0])+1, intval($aDate[2])));
		}
		return new \DateTime($newdate);		
	}
	protected function getObjectPreviosDay($date){
		if($date==null) return $date;
		if(is_object($date)){
			$newdate = date("Y-m-d",mktime(0, 0, 0, $date->format("m"), $date->format("d")-1, $date->format("Y")));
		}else{
			$aDate = explode("-",$date);
			$newdate = date("Y-m-d",mktime(0, 0, 0, intval($aDate[1]), intval($aDate[0])-1, intval($aDate[2])));
		}
		return new \DateTime($newdate);
	}
	protected function getNextDayBis($date){
		$date = date("Y-m-d",mktime(0, 0, 0, $date->format("m"), $date->format("d")+1, $date->format("Y")));
		$date = new \DateTime($date);
		if($date->format("D")=="Sat"){
			$date = date("Y-m-d",mktime(0, 0, 0, $date->format("m"), $date->format("d")+1, $date->format("Y")));
			$date = new \DateTime($date);
		}
		if($date->format("D")=="Sun"){
			$date = date("Y-m-d",mktime(0, 0, 0, $date->format("m"), $date->format("d")+1, $date->format("Y")));
			$date = new \DateTime($date);
		}
		return $date;
	}
	protected function getObjectDate($y,$m,$d){
		return new \DateTime(date("Y-m-d",mktime(0, 0, 0, $m, $d, $y)));
	}
	protected function getObjectDateTwo($date){
		return new \DateTime(date($date));
	}
	protected function getTodayPlus($i){
		return new \DateTime(date("Y-m-d",mktime(0, 0, 0, date('m'), date('d')+$i, date('Y'))));
	}
	//parameter date is an object
	protected function getDatePlus($date,$i){
		$newdate = date("Y-m-d",mktime(0, 0, 0, $date->format("m"), $date->format("d")+$i, $date->format("Y")));
		return new \DateTime($newdate);
	}
	//get date without saturday and sunday
	protected function getDatePlusBis($date,$i){
		for($j=1;$j<=$i;$j++){
			$date = date("Y-m-d",mktime(0, 0, 0, $date->format("m"), $date->format("d")+1, $date->format("Y")));
			$date = new \DateTime($date);
			if($date->format("D")=="Sat"){
				$date = date("Y-m-d",mktime(0, 0, 0, $date->format("m"), $date->format("d")+1, $date->format("Y")));
				$date = new \DateTime($date);
			}
			if($date->format("D")=="Sun"){
				$date = date("Y-m-d",mktime(0, 0, 0, $date->format("m"), $date->format("d")+1, $date->format("Y")));
				$date = new \DateTime($date);
			}
		}
		return $date;
	}		
	//returns an array of dates to schedule courses
	//retourne un tableau de dates pour la génération des événements
	protected function getEventArrayDate($numberday,$startdate,$enddate){
		$date = $startdate;
		$aResult=array();
		while($numberday>0 and $enddate>=$date){
			$iDay = $this->getDayDate($date);
			if($iDay!=6 and $iDay!=7 and $this->isHolidays($date)==0){
				$aResult[]=$date;
				$numberday=$numberday-1;				
			}
			$date=new \DateTime($this->getNextDay($date));
		}
		return $aResult;
	}
	//Checks if the given date is a holiday; return 1 if true and 0 otherwise
	//Vérifie si la date fournie est un jour férié; retourne 1 si c'est vrai et 0 sinon
	protected function isHolidays($ddate){
		$oEmHolodays = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Holidayslist');
		$aHolidays = $oEmHolodays->findByDdate($ddate);
		if(isset($aHolidays[0])) return 1;
		else return 0;
	}
	protected function getTime($h=null,$i=null){
		if($h==null and $i==null)
			return new \DateTime(date("Y-m-d",mktime(0, 0, 0, 0, 0, 0)));
		else
			return new \DateTime(date("Y-m-d H:i",mktime($h, $i, 0, 0, 0, 0)));
	}
	protected function getRightNow(){
		return new \DateTime(date("Y-m-d H:i"));
	}
	//Receive a string like H:i
	//Send a object
	protected function getObjectTime($time){
		$aTime = explode(':',$time);
		if(count($aTime)==2){
			return $this->getTime($aTime[0],$aTime[0]);			
		}
		return $this->getTime();
	}
	protected function initialize($timesheet=null,$schedule=null){
		if($timesheet==null) $timesheet=new Timesheet();
		$em = $this->getDoctrine()->getManager();
		if($schedule!=null){
			//$aSubstitution = $em->getRepository('BoAdminBundle:Substitution')->getByHolderAndDate($schedule->getIdemployee(),$this->getToday());
			//$aAbsence = $this->getAbsenceByContractId($schedule->getidcontracts());
			$oStartam = $schedule->getStartam()!=null?$schedule->getStartam():$this->getTime();
			$oEndam = $schedule->getEndam()!=null?$schedule->getEndam():$this->getTime();								
			$oStartpm = $schedule->getStartpm()!=null?$schedule->getStartpm():$this->getTime();
			$oEndpm = $schedule->getStartpm()!=null?$schedule->getEndpm():$this->getTime();
			$sHour = $schedule->getHourperday();
		}else{
			$oStartam = $oStartpm = $oEndam = $oEndpm = $this->getTime();
			$sHour = "0";
		}
		$timesheet->setStartam($oStartam);
		$timesheet->setStartpm($oStartpm);
		$timesheet->setEndam($oEndam);
		$timesheet->setEndpm($oEndpm);	
		$timesheet->setHour($this->getRealTime($sHour));
		return $timesheet;		
	}
	protected function getAbsenceByContractId($idcontract){
		$em = $this->getDoctrine()->getManager();
		$oRepAbs = $em->getRepository('BoAdminBundle:Absences');
		return $oRepAbs->getAbsencesByContract($idcontract,$this->getToday());
	}
	protected function getScheduleTraining($entity,$training=null){
		if($training!=null){
			$oStartam = $training->getStartam();
			$oEndam = $training->getEndam();								
			$oStartpm = $training->getStartpm();
			$oEndpm = $training->getEndpm();
			$sHour = $training->getHourperday();
			$entity->setMonday($training->getMonday());
			$entity->setTuesday($training->getTuesday());
			$entity->setWednesday($training->getWednesday());
			$entity->setThursday($training->getThursday());
			$entity->setFriday($training->getFriday());
		}else{
			$oStartam = $oStartpm = $oEndam = $oEndpm = $this->getTime();
			$sHour = "0";
		}
		$entity->setStartam($oStartam);
		$entity->setStartpm($oStartpm);
		$entity->setEndam($oEndam);
		$entity->setEndpm($oEndpm);	
		$entity->setHourperday($sHour);
		return $entity;		
	}
	private function setScheduleTime($entity,$oSchedule){
		$entity->setStartam($oSchedule->getStartam());
		$entity->setStartpm($oSchedule->getStartpm());
		$entity->setEndam($oSchedule->getEndam());
		$entity->setEndpm($oSchedule->getEndpm());	
		$entity->setHourperday($oSchedule->getHourperday());	
		return $entity;
	}
	protected function getFTScheduleBy($aSchedule,$training,$contract){
		//if schedule deos not exist for this contract then fill the schedule by 
		$teacherSchedule = $this->initSchedule();		
		if($contract->getGroup() and $contract->getGroup()->getEnddate()) $teacherSchedule->setEnddate($contract->getGroup()->getEnddate());
		elseif($contract->getEnddate()) $teacherSchedule->setEnddate($contract->getEnddate());
		if(!isset($training[0])){ $teacherSchedule = $this->getScheduleTraining($teacherSchedule);
		}else{ 
			$oTraining = $training[0];
			if($aSchedule==null){
				return $this->getScheduleTraining($teacherSchedule,$oTraining);
			}elseif(count($aSchedule)==1 and $oSchedule=$aSchedule[0]){
				if($this->getRealPmHour($oSchedule)>0 and $this->getRealPmHour($oTraining)>0) $teacherSchedule=$this->getScheduleForAm($teacherSchedule,$oTraining,$oSchedule);
				if($this->getRealAmHour($oSchedule)>0 and $this->getRealAmHour($oTraining)>0) $teacherSchedule=$this->getScheduleForPm($teacherSchedule,$oTraining,$oSchedule);
			}elseif(count($aSchedule)==2 and $this->getAllHour($oTraining)==$this->getFor2Schedules($aSchedule)){
				//if($this->getDaysBit($aSchedule[0])==$this->getDaysBit($training[0]) and $this->getDaysBit($aSchedule[1])==$this->getDaysBit($training[0])) return null;
				//when one or many days miss for the first schedule
				if($this->getDaysBit($aSchedule[0])!=$this->getDaysBit($training[0])){
					$teacherSchedule=$this->setScheduleTime($teacherSchedule,$aSchedule[0]);
					$teacherSchedule=$this->getScheduleDays($teacherSchedule,$training[0],$aSchedule[0]);
				}
				if($this->getDaysBit($aSchedule[1])!=$this->getDaysBit($training[0])){
					$teacherSchedule=$this->setScheduleTime($teacherSchedule,$aSchedule[1]);
					$teacherSchedule=$this->getScheduleDays($teacherSchedule,$training[0],$aSchedule[1]);
				}			
			}
		}
		return $teacherSchedule;
	}
	protected function initSubstitution($aTeacherSchedule,$absence,$aTraining){
		$substitution = new Substitution();
		$substitution->setIdabsence($absence->getId());
		$substitution->setStartdate($absence->getStartdate());
		$substitution->setEnddate($absence->getEnddate());
		$aSubstitution = $this->getSusbByAbsence($absence);
		//if count $aSubstitution equal 1 and start date fo absence is the same with existing substitution
		if(count($aSubstitution)==1 and $absence->getStartdate()==$aSubstitution[0]->getStartdate()  and $absence->getEnddate()==$aSubstitution[0]->getEnddate()){
			if($this->getRealPmHour($aSubstitution[0])>0 and $this->getRealPmHour($aTeacherSchedule[0])>0){
				$substitution->setStartam($aTeacherSchedule[0]->getStartam());
				$substitution->setEndam($aTeacherSchedule[0]->getEndam());
				$substitution->setStartpm($this->getTime());
				$substitution->setEndpm($this->getTime());
				$substitution->setHour($aTeacherSchedule[0]->getHourperday()-$aSubstitution[0]->getHour());
			}elseif($this->getRealAmHour($aSubstitution[0])>0 and $this->getRealAmHour($aTeacherSchedule[0])>0){
				$substitution->setStartam($this->getTime());
				$substitution->setEndam($this->getTime());
				$substitution->setStartpm($aTeacherSchedule[0]->getStartpm());
				$substitution->setEndpm($aTeacherSchedule[0]->getEndpm());
				$substitution->setHour($aTeacherSchedule[0]->getHourperday()-$aSubstitution[0]->getHour());
			}
			return $substitution;
		}
		$substitution = isset($aTeacherSchedule[0])?$this->initialize($substitution,$aTeacherSchedule[0]):$this->initialize($substitution,$aTraining[0]);
		return $substitution;
		
	}
	protected function initSchedule(){
		$teacherSchedule = new Agenda();	
		$oStartam = $oStartpm = $oEndam = $oEndpm = $this->getTime();
		$teacherSchedule->setStartam($oStartam);
		$teacherSchedule->setStartpm($oStartpm);
		$teacherSchedule->setEndam($oEndam);
		$teacherSchedule->setEndpm($oEndpm);	
		return $teacherSchedule;
	}
	protected function getGroupScheduleBy($aSchedule,$training,$contract){
		//if schedule deos not exist for this contract then fill the schedule by 
		$oGroup = $contract->getGroup();
		$teacherSchedule = $this->initSchedule();	
		$teacherSchedule->setEnddate($oGroup->getEnddate());
		$teacherSchedule->setGroup($oGroup);
		if(!isset($training[0])) $teacherSchedule = $this->getScheduleTraining($teacherSchedule);
		else{ 
			$oTraining = $training[0];
			if($aSchedule==null){
				return $this->getScheduleTraining($teacherSchedule,$oTraining);
			}elseif(count($aSchedule)==1 and $oSchedule=$aSchedule[0]){
				if($this->getRealPmHour($oSchedule)>0 and $this->getRealPmHour($oTraining)>0) $teacherSchedule=$this->getScheduleForAm($teacherSchedule,$oTraining,$oSchedule);
				if($this->getRealAmHour($oSchedule)>0 and $this->getRealAmHour($oTraining)>0) $teacherSchedule=$this->getScheduleForPm($teacherSchedule,$oTraining,$oSchedule);
			}elseif(count($aSchedule)==2 and $this->getAllHour($oTraining)==$this->getFor2Schedules($aSchedule)){
				//when one or many days miss for the first schedule
				if($this->getDaysBit($aSchedule[0])!=$this->getDaysBit($training[0])){
					$teacherSchedule=$this->setScheduleTime($teacherSchedule,$aSchedule[0]);
					$teacherSchedule=$this->getScheduleDays($teacherSchedule,$training[0],$aSchedule[0]);
				}
				if($this->getDaysBit($aSchedule[1])!=$this->getDaysBit($training[0])){
					$teacherSchedule=$this->setScheduleTime($teacherSchedule,$aSchedule[1]);
					$teacherSchedule=$this->getScheduleDays($teacherSchedule,$training[0],$aSchedule[1]);
				}			
			}
		}
		return $teacherSchedule;
	}
	private function getDaysBit($oSchedule){
		return intval($oSchedule->getMonday()).intval($oSchedule->getTuesday()).intval($oSchedule->getWednesday()).intval($oSchedule->getThursday()).intval($oSchedule->getFriday());
	}
	//set schedule for am et return teacherschedule entity
	private function getScheduleForAm($teacherSchedule,$oTraining,$oSchedule){
		$teacherSchedule->setStartam($oTraining->getStartam());
		$teacherSchedule->setEndam($oTraining->getEndam());
		$teacherSchedule->setHourperday($oTraining->getHourperday()-$oSchedule->getHourperday());
		return $teacherSchedule;
	}
	//set schedule for pm et return teacherschedule entity
	private function getScheduleForPm($teacherSchedule,$oTraining,$oSchedule){
		$teacherSchedule->setStartpm($oTraining->getStartpm());
		$teacherSchedule->setEndpm($oTraining->getEndpm());	
		$teacherSchedule->setHourperday($oTraining->getHourperday()-$oSchedule->getHourperday());
		return $teacherSchedule;
	}
	//set schedule active days et return teacherschedule entity
	private function getScheduleDays($teacherSchedule,$oTraining,$oSchedule){
		$teacherSchedule->setMonday(boolval(abs($oTraining->getMonday()-$oSchedule->getMonday())));
		$teacherSchedule->setTuesday(boolval(abs($oTraining->getTuesday()-$oSchedule->getTuesday())));
		$teacherSchedule->setWednesday(boolval(abs($oTraining->getWednesday()-$oSchedule->getWednesday())));
		$teacherSchedule->setThursday(boolval(abs($oTraining->getThursday()-$oSchedule->getThursday())));
		$teacherSchedule->setFriday(boolval(abs($oTraining->getFriday()-$oSchedule->getFriday())));
		return $teacherSchedule;
	}
	protected function getPTScheduleBy($aSchedule,$training,$contract){
		$teacherSchedule = new Agenda();	
		if($contract->getGroup() and $contract->getGroup()->getEnddate()) $teacherSchedule->setEnddate($contract->getGroup()->getEnddate());
		elseif($contract->getEnddate()) $teacherSchedule->setEnddate($contract->getEnddate());
		//$teacherSchedule->setContracts($contract);
		if(count($training)==1){	
			$teacherSchedule = $this->getScheduleTraining($teacherSchedule,$training[0]);
		}elseif(count($training)>1){
			$aSchedule = $this->getScheduleByTraining($training[0]);
			if(count($aSchedule)==1) $teacherSchedule = $this->getScheduleTraining($teacherSchedule,$training[1]);
			$aSchedule = $this->getScheduleByTraining($training[1]);
			if(count($aSchedule)==1) $teacherSchedule = $this->getScheduleTraining($teacherSchedule,$training[0]);
		}
		return $teacherSchedule;
	}
	private function getScheduleByTraining($oTraining){
		return $this->getRepository('BoAdminBundle:Agenda')->getScheduleByTraining($oTraining);
	}
	private function getCScheduleByAbsence($oEmployee,$oContract){
		$today = $this->getToday();
		if($oEmployee==null and $oContract==null) return null;
		$aSchedule = $this->getContractSchedule($oEmployee,$oContract);
		foreach($aSchedule as $oSchedule){
			if($oSchedule->getStatus()==1 and $oSchedule->getStartdate()<=$today and $today<=$oSchedule->getEnddate()) return $oSchedule;
		}
		return null;
	}
	private function getGScheduleByAbsence($oEmployee,$oGroup){
		$today = $this->getToday();
		if($oEmployee==nul and $oGroup==null) return null;
		$aSchedule = $this->getGroupSchedule($oEmployee,$oGroup);
		foreach($aSchedule as $oSchedule){
			if($oSchedule->getStatus()==1 and $oSchedule->getStartdate()<=$today and $today<=$oSchedule->getEnddate()) return $oSchedule;
		}
		return null;
	}
	protected function updateAmOrPmForTC($oTC){
		$ham = floatval($this->getRealAmHour($oTC)); 
		$hpm = floatval($this->getRealPmHour($oTC));  
		if($ham>0 and $hpm>0){
			$oTC->setAmorpm("AM & PM");
		}elseif($ham>0){
			$oTC->setAmorpm("AM");
		}elseif($hpm>0){ 
			$oTC->setAmorpm("PM");
		}
		return $this->updateEntity($oTC);	
	}
	protected function getAmOrPm($schedule,$employee){
		if($schedule!=null and $employee!=null){
			if($employee->getId()==$schedule->getTeacherpm()){
				return "PM";
			}elseif($employee->getId()==$schedule->getTeacheram()){
				return "AM";
			}else{
				return "ALL";
			}
		}
		return null;		
	}
	//Get number days between two dates without saturday and sunday
	protected function getNumberDay($start,$end){
		$number = 0;
		while($start<=$end){
			$iDay = $start->format("N");
			if($iDay==6 or $iDay==7){
				$start = $this->getDatePlus($start,1);
				continue;
			} 
			$number = $number+1;
			$start = $this->getDatePlus($start,1);
		}
		return $number;
	}	
	//Calcule la différence d'heures entre deux objets
	protected function getDiffEndStart($oEnd,$oStart){
		$sEnd = $oEnd->format("H:i");
		$sStart = $oStart->format("H:i");
		$hour = $this->getDiffHour($sEnd,$sStart);
		return $hour;
	}
	//Calcule en float l'heure réelle
	protected function getRealTime($time){
		if(!is_object($time) and strpos($time,",")) return $this->strtofloat($time);
		if(!is_object($time) and strpos($time,".")) return floatval($time);
		if(is_object($time)) $time = $time->format('H:i');
		$aT = explode(':',$time);
		if(count($aT)==1 and intval($time)==$time){
			return $time;
		}
		$i0 = intval($aT[0]);
		$i1 = intval($aT[1]);
		if($i1==0) return $i0; 
		$dec=(intval($aT[1]))/60;
		return  floatval($i0)+$dec;
	}
	//Verify the validity of the timesheet times
	protected function getTimeValidaty($timesheet){
		if($this->_format($timesheet->getStartam())=="00:00" and $this->_format($timesheet->getEndam())=="00:00" and $this->_format($timesheet->getStartpm())=="00:00" and $this->_format($timesheet->getEndpm())=="00:00") return 0;
		elseif($this->_format($timesheet->getEndam())=="00:00" and $this->_format($timesheet->getStartpm())=="00:00") return 0;
		elseif($this->_format($timesheet->getStartam())=="00:00" and $this->_format($timesheet->getEndpm())=="00:00") return 0;
		elseif($this->getRealTime($timesheet->getStartam())>$this->getRealTime($timesheet->getEndam())) return 0;
		elseif($this->getRealTime($timesheet->getStartpm())>$this->getRealTime($timesheet->getEndpm())) return 0;
		elseif($this->getRealTime($timesheet->getStartpm())!="0" and $this->getRealTime($timesheet->getStartpm())<12) return 0;
		elseif($this->getRealTime($timesheet->getStartpm())!="0" and $this->getRealTime($timesheet->getEndam())>$this->getRealTime($timesheet->getStartpm())) return 0;
		elseif($this->getRealTime($timesheet->getStartam())<7) return 0;
		return 1;
	}
	//Check if the timesheet is valid and return error message
	protected function checkValidity($timesheet,$employee){
		$em = $this->getDoctrine()->getManager();
		$RepTs = $em->getRepository('BoAdminBundle:Timesheet');
		$res = 0;
		$message=null;
		if($RepTs->existEmployeeTS($timesheet,$employee)==0){
			$res = 1;
			return array($res,$message);
		}else{
			$res = 0;
			$message = array('type'=>"Warning",'texte'=>$this->getErrorMessage(2));
			return array($res,$message);
		} 

		if($timesheet->getHour()>0){
			$res = 1;
			return array($res,$message);
		}else{
			$res = 0;
			$message=array('type'=>"Warning",'texte'=>$this->get('translator')->trans('The timesheet hour is null'));
			return array($res,$message);
		}	
		if($this->getTimeValidaty($timesheet)==1){
			$res = 1;
			return array($res,$message);
		}else{
			$res = 0;
			$message=array('type'=>"Warning",'texte'=>$this->get('translator')->trans('The timesheet times given are not valids'));	
			return array($res,$message);
		}		
		return array($res,$message);
	}
	protected function formatDateTime($stringdate){
		if(strpos($stringdate,"/")){
			$stringdate=str_replace("/","-",$stringdate);
		}
		$aSdate= explode("-",$stringdate);
		if(isset($aSdate[2]) and strlen($aSdate[2])==2) $aSdate[2]="20".$aSdate[2];
		if(isset($aSdate[2]) and isset($aSdate[1]) and isset($aSdate[0])){
			$date=$aSdate[2]."-".$aSdate[1]."-".$aSdate[0];			
			return new \DateTime($date);			
		}
		return null;
	}
	protected function sessionRemove($aTab){
		foreach($aTab as $item){
			$this->get('session')->remove($item);
		}
		return;		
	}
	protected function createTyear($yearln,$yearct){
		$oTyear= new Tyear();
		$oTyear->setYearct($yearct);
		$oTyear->setYearln($yearln);
		$this->updateEntity($oTyear);
		return $oTyear;
	}
	protected function setSessionRights(){
		$oUser = $this->getTokenUser();
		$profil = $oUser->getEmployee()->getProfil();
		$aRubrics = explode(",",$profil->getRubric());
		$aRights = $this->initializeRights($aRubrics);
		$rights = $this->getDoctrine()->getManager()->getRepository('BoUserBundle:Rights')->findBy(array('idprofil'=>$profil->getId()));
		foreach($rights as $oRight){
			if(isset($aRights[$oRight->getRubric()->getNameen()])) $aRights[$oRight->getRubric()->getNameen()][$oRight->getSubrubric()->getNameen()]=array('active'=>$oRight->getActive(),'liste'=>$oRight->getListe(),'creation'=>$oRight->getCreation(),'edit'=>$oRight->getEdit(),'ddelete'=>$oRight->getDdelete(),'search'=>$oRight->getSearch(),'others'=>$oRight->getOthers());;
		}
		$this->get('session')->set('rights',$aRights);
		return $this->getTokenUser();
	}
	protected function verifySessionRights(){
		$right = $this->get('session')->get('rights');
		if(!$right) $this->setSessionRights();
		return true;
	}
	protected function initializeRights($aRubrics){
		$aReturn=array();
		foreach($aRubrics as $sRub){
			$aReturn[$sRub]=array();
		}
		return $aReturn;
	}
	protected function setLang($lang){
		$this->get("session")->set('_locale',$lang);
		$this->get("session")->set('lang',$lang);
	}
	protected function getLang(){
	   $request = Request::createFromGlobals();
       $currentLocale = $request->getLocale();
	   return $currentLocale;
	}
	protected function getReferer(){
	   $request = Request::createFromGlobals();
	   $url = $request->headers->get('referer');
	   return  $url;
	}
	protected function getErrorMessage($id){
	   	$em = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Message');
		$oMessage= $em->find($id);
		if($this->getLang()=="en") return $oMessage->getDescen();
		else return $oMessage->getDescfr();
		return null;
	}
	protected function initializeSession($_locale){
		$this->setUserLocale($_locale);
		return $this->setSessionRights();
	}
	protected function setUserLocale($_locale){
		$lang = $this->getUserLocale();
		if($lang==null){
			$this->setLang($_locale);
		}
		return;		
	}
	protected function getUserLocale(){
		return $this->get("session")->get("_locale");		
	}
	//Creating Billing
	protected function createBilling($timesheet){
		$res = null;
		if($timesheet->getGroup() and $oGroup=$timesheet->getGroup() and $this->getTypeGroup($oGroup)=="NMSO"){
			$aContract = $this->getContractByGroup($oGroup);
			foreach($aContract as $oContract){
				$oBilling = $this->getBillingObject($timesheet,$oContract);
				if($oBilling) $res = $this->updateTimesheet($timesheet,$oBilling);				
			}
		}elseif($timesheet->getContract() and ($timesheet->getLegende()=="P" or $timesheet->getLegende()=="N-S")){
			$oBilling = $this->getBillingObject($timesheet,$timesheet->getContract());
			if($oBilling) $res = $this->updateTimesheet($timesheet,$oBilling);			
		}
		return $res;	
	}
	protected function getTypeGroup($oGroup){
		$aContract = $this->getContractByGroup($oGroup);
		if(isset($aContract[0])) return $aContract[0]->getTypeContract()->getReference();
		return null;
	}
	protected function getTypeStudent($oStudent){
		$aContract = $this->getCurrentStudentContract($oStudent);
		if(isset($aContract[0])) return $aContract[0]->getTypeContract()->getReference();
		return null;
	}
	//Update used hours for the contract
	protected function updateContractUsedHours($timesheet){
		if($timesheet->getGroup() and $oGroup=$timesheet->getGroup() and $this->getTypeGroup($oGroup)=="NMSO"){
			$aContract = $this->getContractByGroup($oGroup);
			foreach($aContract as $oContract){
				$res = $this->updateUsedHours($oContract,$timesheet->getHour());
			}
		}elseif($timesheet->getContract() and ($timesheet->getLegende()=="P" or $timesheet->getLegende()=="N-S")){
			$oContract = $timesheet->getContract();
			$res = $this->updateUsedHours($oContract,$timesheet->getHour());		
		}
		return $res;	
	}
	protected function getRealHourlyrate($contract){
		//Get number of students in the group if contract type is MNSO and (field is 1 or 2)
		if($this->getWorkfields($contract)!=null and ($this->getWorkfields($contract)=="Field 1" or $this->getWorkfields($contract)=="Field 2") and $this->getStudentsNumber($contract)>1){
			return $this->getStudentsNumber($contract)*$this->strtofloat($contract->getHourlyrate());
		}
		return $this->strtofloat($contract->getHourlyrate());			
	}
	protected function getBillingObject($timesheet,$oContracts){
		$hourlyrate = $this->getRealHourlyrate($oContracts);
		$aBilling = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Billing')->findBy(array('contract'=>$oContracts,'status'=>1));
		if(isset($aBilling[0])){
			$oBilling = $aBilling[0];
			$tshour = $this->getRealHour($timesheet->getHour());
			$billhour = $oBilling->getHour();
			if($timesheet->getStudentns()>0){
				$hour = $tshour+$timesheet->getStudentns();
			}else{
				$hour = $tshour+$billhour;
			}
			$numbersession = $oBilling->getNumbersession()+1;
			$oBilling->setNumbersession($numbersession);
			$oBilling->setAmount($hourlyrate*floatval($hour));
			$oBilling->setHour(floatval($hour));
			$res = $this->updateEntity($oBilling);
			return $oBilling;			
		} 
		$oBilling = new Billing();
		$oBilling->setContract($oContracts);
		$oBilling->setStartdate($timesheet->getDdate());
		//If no show for the student then to bill
		if($timesheet->getStudentns()>0){
			$oBilling->setHour($timesheet->getStudentns());
			$oBilling->setAmount($hourlyrate*floatval($timesheet->getStudentns()));
		}else{
			$oBilling->setHour($this->getRealHour($timesheet->getHour()));
			$oBilling->setAmount($hourlyrate*floatval($timesheet->getHour()));
		}
		$oBilling->setHourlyrate($hourlyrate);
		$oBilling->setNumbersession(1);
		$res = $this->updateEntity($oBilling);
		return $oBilling;			
	}
	protected function getBillingAmount($timesheet,$oBilling){
		if($timesheet->getContract()){
			$hourlyrate = intval($timesheet->getContract()->getHourlyrate());
			if($hourlyrate>0) $oBilling->setAmount($hourlyrate*$timesheet->getHour());
		}
		return $oBilling;
	}
	protected function updateTimesheet($timesheet,$oBilling){
		if(is_array($timesheet->getBilling()) and in_array($oBilling,$timesheet->getBilling())) return false;
		$timesheet->addBilling($oBilling);
		return $this->updateEntity($timesheet);	
	}
	//Getting cycle of payroll
	//First get the parameters start day and end day: example: 4th of a month
	//$ddate is the date when the course is given
	protected function getPayCycle($ddate){
		//$em = $this->getDoctrine()->getManager();
		$start = $this->getParam("payroll_cycle_start_day",2);
		//get the real month of timesheet 
		$month = $this->getCycleMonth($ddate,$start);
		$end = $this->getParam("payroll_cycle_end_day",3);
		$year = $this->getCycleYear($month,$ddate,$start);
		$startdate=$this->getObjectDate($year,$month,$start);
		$enddate=$this->getObjectDate($year,$month+1,$end);
		return array($startdate,$enddate);
	}
	//get month of cycle of pay
	protected function getCycleMonth($ddate,$start){
		$year = $ddate->format("Y");
		$day =  $ddate->format("d");
		$month = $ddate->format("m");
		if($day>=$start){
			return $month;
		}else{
			$oDate = $this->getObjectDate($year,$month-1,$day);
			return $oDate->format("m"); 
		} 
		return null;
	}
	//get year of cycle of pay
	protected function getCycleYear($month,$ddate,$start){
		$year = $ddate->format("Y");
		$day =  $ddate->format("d");
		$cmonth = $ddate->format("m");
		if($cmonth=="01" and $month="12" and $day<$start){
			return intval($year)-1;
		}
		return $year; 
	}
	//Return array of week numbers
	protected function getPweek($idperiodpay){
        $em = $this->getDoctrine()->getManager();
		$oPeriodpay = $em->getRepository('BoAdminBundle:Periodpay')->find($idperiodpay);
		$pweek = $oPeriodpay->getPweek();
		return explode(',',$pweek);
	}
	protected function getIndexWeek($aPweek,$iweek){
		$aPweekFlip = array_flip($aPweek);
		if(isset($aPweekFlip[$iweek])) return $aPweekFlip[$iweek];
		else return null;
	}
	//Begin timesheet hours manager
	protected function manageTsHours($oTS){
		if($oTS->getTypets()=="Teaching" and $oTS->getLegende()=="ABS") return;
		//Get Period Pay if it exists
		$oPP = $this->getExistPP($oTS);	
		if(!$oPP){
			$oPP = $this->createPP($oTS);
		}
		//Getting the correct entity with the timesheet settings
		$oHem = $this->getHem($oTS);
		if($oTS->getTypets()=="Teaching" or $oTS->getTypets()=="Admin"  or $oTS->getTypets()=="Holiday"){
			$aEntity = $oHem->findBy(array('idperiodpay'=>$oPP->getId(),'employee'=>$oTS->getEmployee()));
		}else{
			$aEntity = $oHem->findBy(array('idperiodpay'=>$oPP->getId(),'typets'=>$oTS->getTypets(),'employee'=>$oTS->getEmployee()));
		}
		if(isset($aEntity[0])){
			$this->updateHourEntity($oPP,$oTS,$aEntity[0]);
		}else{
			$oEntity = $this->getHentity($oTS);
			$this->createHentity($oPP,$oTS,$oEntity);
		}
		if($oTS->getTypets()=="Teaching") return $this->updateContractUsedHours($oTS);
		else return true;
	}
	//Get Array objets TsWeek
	protected function getArrayWeek($start,$end){
		$aWeek = array();
		while($start<$end){
			$oTsweek = $this->getTsWeek($start);
			if(!isset($aWeek[$oTsweek->getId()])){
				$aWeek[$oTsweek->getId()]=$oTsweek->getId();
			}else{
				$start= new \DateTime($this->getNextDay($start));;
				continue;
			}			
		}
		return $aWeek;
	}
	//Récupérer la liste des numéros de semaines comprises entre deux dates
	protected function getArrayWeeks($start,$end){
		$aWeek = array();
		while($start<=$end){
			$iWeek = $start->format("W");		
			if(!isset($aWeek[$iWeek])){
				$aWeek[$iWeek]=$iWeek;
			}else{
				$start= new \DateTime($this->getNextDay($start));
				continue;
			}			
		}
		return $aWeek;
	}
	protected function getListTsweek($pweek){
		$aPweeks = explode(',',$pweek);
		$aRes = array();
		foreach($aPweeks as $iWeek){
			$aTsweek = $this->getByNumweek($iWeek,$aPweeks);
			if(isset($aTsweek[0])){
				$oTsweek = $aTsweek[0];
				$aRes[$oTsweek->getId()]=$oTsweek;
			}else{
				$oTsweek=$this->createObjectTsweek($iWeek,$aPweeks);
				$aRes[$oTsweek->getId()]=$oTsweek;
			}						
		}
		return $aRes;
	}
	protected function getByNumweek($iWeek,$aPweeks){
		$oEmWeek=$this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Tsweek');
		if($this->isNewYear($aPweeks)==false){
			return $oEmWeek->getByNumberweek($iWeek);
		}
		$iyearln=intval(date("Y"))-1;
		$oEmWeek->getByNumberweek($iWeek,$iyearln);		
	}
	protected function getTsWeek($date){
		$iweek = $date->format("W");
		$iyearln = $date->format("Y");
		$aTweek = $this->findTsWeek($iyearln,$iweek);
		if(isset($aTweek[0])){
			return $aTweek[0];
		}
		return $this->createTweek($date);
	}
	protected function findTsWeek($iyearln,$iweek){
		$oEmWeek = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Tsweek');
		return $oEmWeek->searchInTweek($iyearln,$iweek);
	}
	protected function createPP($oTS){
		$em = $this->getDoctrine()->getManager();
		//Getting cycle payroll
		$aCycle = $this->getPayCycle($oTS->getDdate());
		//Récupérer la liste des numéros de semaines comprises entre deux cycles de paie
		$aWeeks = $this->getArrayWeeks($aCycle[0],$aCycle[1]);
		//Getting period pay object
		return $this->getPeriodPay($aCycle,$aWeeks);		
	}
	//$date est un objet
	protected function createTweek($date){
		$oTsweek = new Tsweek();
		//Verify if the number of year exists.
		$oTyear = $this->searchYear($date);
		if($oTyear!=null) $oTsweek->setTyear($oTyear);
		else return null;
		//Verify if the number of month exists.
		$oTmonth = $this->searchMonth($date);
		if($oTmonth!=null) $oTsweek->setTmonth($oTmonth);
		else return null;
		$Wdates = $this->getStartAndEnd($date->format("W"),$date->format("Y"));
		$oTsweek->setFirstdate($Wdates[0]);
		$oTsweek->setLastdate($Wdates[1]);
		$oTsweek->setNumberweek($date->format("W"));
		$this->updateEntity($oTsweek);
		return $oTsweek;
	}
	//$iWeek is a number, this function return a object
	protected function createObjectTsweek($iWeek,$aPweeks=null){
		$oTsweek = new Tsweek();
		$oYear = $this->getTsYear($iWeek,$aPweeks);
		if($oYear!=null) $oTsweek->setTyear($oYear);
		else return null;
		$Wdates = $this->getStartAndEnd($iWeek,$oYear->getYearln());
		$oStartdate = $Wdates[0];
		$oEnddate = $Wdates[1];
		//Verify if the number of month exists.
		$oTmonth = $this->searchMonth($oStartdate);
		if($oTmonth!=null) $oTsweek->setTmonth($oTmonth);
		else return null;
		$oTsweek->setFirstdate($oStartdate);
		$oTsweek->setLastdate($oEnddate);
		$oTsweek->setNumberweek($iWeek);
		$this->updateEntity($oTsweek);
		return $oTsweek;
	}
	protected function getTsYear($sWeek,$aPweeks=null){
		if($aPweeks==null) return $this->getCurrentYear();
		$cyear = intval(date("Y"));
		if($this->isNewYear($aPweeks)==true and intval($sWeek)>47){
			$year = $cyear-1;
			return $this->getYearBy($year);
		}
		return $this->getYearBy($cyear);	
	}
	protected function isNewYear($aPweeks){
		if(in_array('52',$aPweeks) and in_array('01',$aPweeks)) return true;
		return false;
	}
	protected function getStartAndEnd($week,$year,$option=null) {	
		$firstdayjunuary = strtotime($year.'-01-01');
		$firstday = date('w', $firstdayjunuary);
		$number = $option==null?5:6;
		//-- recherche du N° de semaine du 1er janvier -------------------
		$weeknumberfirstday = date('W', $firstdayjunuary);
		 
		//-- nombre à ajouter en fonction du numéro précédent ------------
		$decallage = ($weeknumberfirstday == 1) ? $week - 1 : $week;
		//-- timestamp du jour dans la semaine recherchée ----------------
		$timeStampDate = strtotime('+' . $decallage . ' weeks', $firstdayjunuary);
		//-- recherche du lundi de la semaine en fonction de la ligne précédente ---------
		$startweek = ($firstday == 1) ? date('Y-m-d', $timeStampDate) : date('Y-m-d', strtotime('last monday', $timeStampDate));
		$dObjectStartWeek = new \DateTime($startweek);		
		$dObjectEndWeek = $this->getDatePlus($dObjectStartWeek,$number);
		return array($dObjectStartWeek,$dObjectEndWeek);
	}
	protected function getWeekDateWithout($week,$year) {	
		$firstdayjunuary = strtotime($year.'-01-01');
		$firstday = date('w', $firstdayjunuary);
		 
		//-- recherche du N° de semaine du 1er janvier -------------------
		$weeknumberfirstday = date('W', $firstdayjunuary);
		 
		//-- nombre à ajouter en fonction du numéro précédent ------------
		$decallage = ($weeknumberfirstday == 1) ? $week - 1 : $week;
		//-- timestamp du jour dans la semaine recherchée ----------------
		$timeStampDate = strtotime('+' . $decallage . ' weeks', $firstdayjunuary);
		//-- recherche du lundi de la semaine en fonction de la ligne précédente ---------
		$startweek = ($firstday == 1) ? date('Y-m-d', $timeStampDate) : date('Y-m-d', strtotime('last monday', $timeStampDate));
		$dObjectStartWeek = new \DateTime($startweek);		
		$dObjectEndWeek = $this->getDatePlus($dObjectStartWeek,4);
		return array($dObjectStartWeek,$dObjectEndWeek);
	}
	protected function getDatesOfWeek($start=null,$end=null)
	{
		if($start==null and $end==null){
			$aSAE = $this->getStartAndEnd(date("W"),date("Y"));
			$start = $aSAE[0];
			$end = $aSAE[1];
		}
		while($end>=$start){
			$aResult[] = $start;
			$start=new \DateTime($this->getNextDay($start));		
		}
		return $aResult;
	}
	protected function getDatesOfWeek2($start=null,$end=null)
	{
		if($start==null and $end==null){
			//get dates of week without weekend
			$aSAE = $this->getWeekDateWithout(date("W"),date("Y"));
			$start = $aSAE[0];
			$end = $aSAE[1];
		}
		while($end>=$start){
			$aResult[] = $start;
			$start=new \DateTime($this->getNextDay($start));		
		}
		return $aResult;
	}
	protected function searchYear($date){
		$oEmYear = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Tyear');
		$aTyear = $oEmYear->findByYearln($date->format("Y"));
		if(isset($aTyear[0])){
			return $aTyear[0];
		}else{
			return $this->createTyear($date->format("Y"),$date->format("y"));
		}
		return null;
	}
	protected function getCurrentYear(){
		$iLyear = date('Y');//long
		$iSyear = date('y');//short
		return $this->getYearBy($iLyear);
	}
	//return object of Tyear
	protected function getYearBy($iLyear){
		$oEmYear = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Tyear');
		$aTyear = $oEmYear->findByYearln($iLyear);
		if(isset($aTyear[0])){
			return $aTyear[0];
		}else{
			return $this->createTyear($iLyear,$iSyear);
		}
		return null;
	}
	protected function searchMonth($date){
		$oEmMonth = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Tmonth');
		$aTmonth = $oEmMonth->findByImonth($date->format("m"));
		if(isset($aTmonth[0])){
			return $aTmonth[0];
		}else{
			$oEmMonth = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Tmonth');
			$aTmonth = $oEmMonth->findBySmonthen($date->format("F"));
			if(isset($aTmonth[0])) return $aTmonth[0];
		}
		return null;
	}
	//Getting Object PeriodPay 
	//Saving datas in the table "PeriodPay" where object is not created. 
	protected function getPeriodPay($aCycle,$aWeeks){
		$em = $this->getDoctrine()->getManager();
		$aPP = $em->getRepository('BoAdminBundle:PeriodPay')->findBy(array('startdate'=>$aCycle[0],'enddate'=>$aCycle[1]));
		if(isset($aPP[0])) return $aPP[0];
		$oPP=new PeriodPay();
		$oPP->setStartdate($aCycle[0]);
		$oPP->setEnddate($aCycle[1]);
		$oPP->setMonth($aCycle[0]->format("F"));
		$oPP->setYear($aCycle[0]->format("Y"));
		$oPP->setPweek(join(",",$aWeeks));
		$this->updateEntity($oPP);
		return $oPP;
	}
	//Saving datas in the table "PeriodPay" where it is not created. 
	protected function getExistPP($oTS){
		$em = $this->getDoctrine()->getManager();
		$aPP = $em->getRepository('BoAdminBundle:PeriodPay')->getExistPeriodPay($oTS);
		if(isset($aPP[0])) return $aPP[0];
		else return null;
	}
	//Creqting the employee's hours in entity table (Admin or Teaching or Noshow or Others)
	protected function createHentity($oPP,$oTS,$oEntity){
		//Getting array of month's weeks
		$aPweek = $this->getPweek($oPP->getId());
		//Getting the week number of the timesheet
		$iweek = $oTS->getDdate()->format("W");
		$index = $this->getIndexWeek($aPweek,$iweek);
		if($index!==null){
			$var = "setHw".$index;
			$oEntity->$var($this->getCourseHour($oTS));
			if($oTS->getTypets()!="Admin" and $oTS->getTypets()!="Teaching"  and $oTS->getTypets()!="Holiday") $oEntity->setTypets($oTS->getTypets());		
			$oEntity->setIdperiodpay($oPP->getId());
			$oEntity->setEmployee($oTS->getEmployee());
			$oEntity->setTotal($this->getCourseHour($oTS));
			$res = $this->updateEntity($oEntity);
			if($res>0){
				return $this->updateTS($oTS,$oPP);
			} 			
		}
		return null;
	}
	//Update the hours in entity table (Admin or Teaching or Noshow or Others)
	protected function updateHourEntity($oPP,$oTS,$oEntity){
		//Getting array of month's weeks
		$aPweek = $this->getPweek($oPP->getId());
		//Getting the week number of the timesheet
		$iweek = $oTS->getDdate()->format("W");
		//Getting the index of $aPweek between (0,1,..,5)
		$index = $this->getIndexWeek($aPweek,$iweek);
		$setvar = "setHw".$index;
		$getvar = "getHw".$index;
		$hour = $oEntity->$getvar()+$this->getCourseHour($oTS);
		$oEntity->$setvar($hour);
		$oEntity->setTotal($oEntity->getTotal()+$this->getRealTime($oTS->getHour()));		
		$res = $this->updateEntity($oEntity);
		if($res>0){
			return $this->updateTS($oTS,$oPP);
		} 
	}
	protected function strtofloat($str){
		if(strpos($str,",")) $str = str_replace(",",'.',$str);
		return floatval($str);	
	}
	//if the type of timesheet is "Admin" then I return Hadmin entity
	//elseif the type of timesheet is "Teaching" and the legend is "P" then I return Hteaching entity
	//elseif the type of timesheet is "Teaching" and the legend is "N-S" then I return Hnoshow entity
	//else I return Hothers entity
	protected function getHentity($oTS){
		if($oTS->getTypets()=="Admin"){
			$oEntity = new Hadmin();
		}elseif($oTS->getTypets()=="Holiday"){
			$oEntity = new Hholiday();
		}elseif($oTS->getTypets()=="Teaching" and $oTS->getLegende()=="P"){
			$oEntity = new Hteaching();
		}elseif($oTS->getTypets()=="Teaching" and $oTS->getLegende()=="N-S"){
			$oEntity = new Hnoshow();
		}else{
			$oEntity = new Hothers();
		}
		return $oEntity;
	}
	//Getting entity manager
	protected function getHem($oTS){
		$em = $this->getDoctrine()->getManager();
		if($oTS->getTypets()=="Admin"){
			$oHem = $em->getRepository('BoAdminBundle:Hadmin');
		}elseif($oTS->getTypets()=="Holiday"){
			$oHem = $em->getRepository('BoAdminBundle:Hholiday');
		}elseif($oTS->getTypets()=="Teaching" and $oTS->getLegende()=="P"){
			$oHem = $em->getRepository('BoAdminBundle:Hteaching');
		}elseif($oTS->getTypets()=="Teaching" and $oTS->getLegende()=="N-S"){
			$oHem = $em->getRepository('BoAdminBundle:Hnoshow');
		}else{
			$oHem = $em->getRepository('BoAdminBundle:Hothers');
		}
		return $oHem;
	}
	//Getting entity manager
	protected function updateTS($oTS,$oPP){
		$oTS->setIdperiodpay($oPP->getId());
		return $this->updateEntity($oTS);
	}
	private function getCourseHour($oTS){
		//$em = $this->getDoctrine()->getManager();
		$hour = $this->getRealTime($oTS->getHour());
		if($oTS->getTypets()!="Admin") return $hour;
		if($oTS->getLegende()=="ABS") return 0;
		if($oTS->getTypets()=="Teaching" and $oTS->getLegende()=="N-S"){
			$Hnoshow = $this->getParam("payroll_noshow_hour",4);
			if($oTS->getTeacherns()>0) return $oTS->getTeacherns();
			if(intval($hour)>3 and $Hnoshow>0) return $Hnoshow;
			elseif(intval($hour)<3 and intval($hour)>0) return $hour;
			elseif(intval($hour)>0) return 3;
			else return 0; 
		}
		else return $hour;
	}
	/**
	* Téléchargement file
	*/
	protected function download($file){
		$response = new Response();
		$response->clearHttpHeaders();
        	$response->setContent(file_get_contents($file));
        	$response->headers->set('Content-Type', 'application/force-download');
        	$response->headers->set('Content-Disposition', 'filename='.$file);
		return $response;  			
	}
	/**
	* update Used hours
	*/
	protected function updateUsedHours($oContract,$hour,$opt=null){
		if($opt==null) $oContract->setUsedhours($oContract->getUsedhours()+$hour);
		else $oContract->setUsedhours($oContract->getUsedhours()-$hour);
		return $this->updateEntity($oContract);
	}
	protected function getWeekByOrder($oPeriodpay){
		if($oPeriodpay->getPweek()==null) return $oPeriodpay->getPweek();
		$aWeek = explode(",",$oPeriodpay->getPweek());
		$aOWeeks=array();
		foreach($aWeek as $week){
			$aOWeeks[]= $week;
		}
		return $aOWeeks;
	}
	//Gestion de la session de l'utilisateur connecté
	protected function setUserSession(){
		$oUserSession = new Session();
		$user=$this->getTokenUser();
		$oUserSession->setUser($user);
		return $this->updateEntity($oUserSession);
	}
	protected function existUserSession(){
		$user=$this->getTokenUser();
		$em = $this->getDoctrine()->getManager();
		$oRepSession = $em->getRepository('BoAdminBundle:Session');	
		if($user) $aSession = $oRepSession->findBy(array('user'=>$user));
		if(isset($aSession[0])) return 1;
		else return 0;
	}
	protected function existUser($student){
		$em = $this->getDoctrine()->getManager();
		$aUser = $em->getRepository('BoUserBundle:User')->findBy(array('students'=>$student));
		$aUser = $em->getRepository('BoUserBundle:User')->findByEmail($student->getEmail());
		if(isset($aUser[0])) return 1;
		return 0;
	}
	protected function removeUserSession(){
		return $this->redirectToRoute('fos_user_security_logout');
	}
	protected function redirectChangePassword(){
		return $this->redirectToRoute('fos_user_change_password');
	}	
	//Random user password
	protected function getPassword(){
		return $this->getRandomString(2,4).$this->getRandomString(3).$this->getRandomString().$this->getRandomString(1);
	}
	//Random user password
	protected function getRandom(){
		return $this->getRandomString(2,4).$this->getRandomString(3).$this->getRandomString().$this->getRandomString(2);
	}
	protected function getRandomString($option=null,$number=null){
		if($option==null) $aString=range("a","z");
		elseif($option==1) $aString=range("A","Z");
		elseif($option==2) $aString=range(0,9);
		else $aString=array("_","-","+","*","#");
		if($number==null){
			return $aString[array_rand($aString,1)];		
		}
		$aRand = array_rand($aString,$number);	
		$res="";
		foreach($aRand as $rand){
			$res=$res.$aString[$rand];
		}
		return $res;
	}
	protected function replaceInText($texte){
		if(strpos($texte,"é")) $texte = str_replace("é",'e',$texte);
		if(strpos($texte,"è")) $texte = str_replace("è",'e',$texte);
		if(strpos($texte,"ê")) $texte = str_replace("ê",'e',$texte);
		if(strpos($texte,"ë")) $texte = str_replace("ë",'e',$texte);
		if(strpos($texte,"à")) $texte = str_replace("à",'a',$texte);
		if(strpos($texte,"á")) $texte = str_replace("á",'a',$texte);
		if(strpos($texte,"â")) $texte = str_replace("â",'a',$texte);
		if(strpos($texte,"ã")) $texte = str_replace("ã",'a',$texte);
		if(strpos($texte,"ä")) $texte = str_replace("ä",'a',$texte);
		if(strpos($texte,"'")) $texte = str_replace("'",'',$texte);
		if(strpos($texte,"\/")) $texte = str_replace("\/",'_',$texte);
		if(strpos($texte,"\\")) $texte = str_replace("\\",'_',$texte);
		return $texte;
	}
    /**
    * enables all items of rights
    */	
	protected function enableAll($right){
		$right->setActive(1);
		$right->setListe(1);
		$right->setDdelete(1);
		$right->setEdit(1);
		$right->setCreation(1);
		$right->setOthers(1);
		$right->setSearch(1);
		return $right;
	}
	protected function getInfoCompany($account){
		$em = $this->getDoctrine()->getManager();
		$aCompany = $em->getRepository('BoAdminBundle:Company')->findBy(array('compte'=>$account));
		if(isset($aCompany[0])) return $aCompany[0];
		return null;
	}
	protected function getWelcomeMessage($account){
		$lang = $this->getUserLocale();
		$oCompany = $this->getInfoCompany($account);
		$var = "getMessage".strtolower($lang);
		if($oCompany)  return $oCompany->$var();
	}
	//return array of all contract in a group
	//parameter entity Group
	protected function getContractByGroup(Group $group){
		if($group==null) return $group;
		return $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Contracts')->getAllByGroup($group);
	}
	protected function removeAccents($chaine)
	{	
		$patterns = array('/[àáâãä]/i','/[éèëê]/i','/[ç]/i','/[ìíîï]/i','/[ñ]/i','/[òóôõö]/i','/[ùúûü]/i','/[ýÿ]/i');
		$replacements = array('a','e','c','i','n','o','u','y');	 
		$chaine = preg_replace($patterns, $replacements, $chaine);
		return $chaine;
	}
	protected function removeAccents2($chaine)
    {
		 $string= strtr($chaine,
	   "ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ",
	   "aaaaaaaaaaaaooooooooooooeeeeeeeecciiiiiiiiuuuuuuuuynn");
		 return $string;
    }
	protected function existContractEmployee($employee,$oContract){
		if(count($oContract)==0) return false;
		foreach($oContract->getEmployee() as $oEmployee){
			if($oEmployee==$employee) return true;
		}
		return false;
	}
	//return true if there exist an entity on the array of object
	protected function existEntity($entity,$aEntity){
		if(!isset($aEntity[0])) return false;
		foreach($aEntity as $oEntity){
			if($oEntity==$entity) return true;
		}
		return false;
	}
	protected function existGroupEmployee($employee,$oGroup){
		if(count($oGroup)==0) return false;
		foreach($oGroup->getEmployee() as $oEmployee){
			if($oEmployee==$employee) return true;
		}
		return false;
	}
	protected function createTsValidation($oTS,$who,$option=null){
		$sCanal = $option==null?"System":"Mail";
		$user=$this->getTokenUser();
		$oTSV = new TsValidation();
		$oTSV->setCanal($sCanal);
		$oTSV->setStatus($oTS->getStatus());
		$oTSV->setMotif($who);
		$oTSV->setTimesheet($oTS);
		$oTSV->setValidator($user->getEmployee()->getFirstname()." ".$user->getEmployee()->getName());
		return 	$this->updateEntity($oTSV);;
	}

	protected function getFullNameOf($entity){
		return $entity->getFirstname()." ".$entity->getName();	
	}
	protected function getStatusTsDef(){
		$timesheet = new Timesheet();
		return $timesheet->getStatusDefinition();
	}
	protected function getNewTs($em,$oEmployee,$oModel=null){
		$schedule = null;
        $timesheet = new Timesheet();
		//Récupérer le type de timesheet par défaut : "Admin"
		$aTypets = $em->getRepository('BoAdminBundle:Typets')->findByName("Admin");
		if(isset($aTypets[0])) $timesheet->setTypets($aTypets[0]);
		if($oModel!=null) return $this->initializeByModel($timesheet,$oModel);
		$aModel = $em->getRepository('BoAdminBundle:ModelTs')->findBy(array('employee'=>$oEmployee));
		if(count($aModel)==1){
			return $this->initializeByModel($timesheet,$aModel[0]);
		} 
		return $this->initializeByModel($timesheet);	
	}
	protected function initializeByModel($timesheet,$model=null){
		//date_default_timezone_set('America/Los_Angeles');
		if($model!=null){
			$oStartam = $model->getStartam()!=null?$model->getStartam():$this->getTime();
			$oEndam = $model->getEndam()!=null?$model->getEndam():$this->getTime();								
			$oStartpm = $model->getStartpm()!=null?$model->getStartpm():$this->getTime();
			$oEndpm = $model->getStartpm()!=null?$model->getEndpm():$this->getTime();
			$sHour = $model->getHour();
		}else{
			$oStartam = $oStartpm = $oEndam = $oEndpm = $this->getTime();
			$sHour = "0";
		}
		$timesheet->setStartam($oStartam);
		$timesheet->setStartpm($oStartpm);
		$timesheet->setEndam($oEndam);
		$timesheet->setEndpm($oEndpm);	
		$timesheet->setHour($this->getRealTime($sHour));
		return $timesheet;		
	}
	protected function initCriteria(){
		$oCriteria = new Criteria();
		$month = date("m");
		$year = date("Y");	
		$em = $this->getDoctrine()->getManager();
		$aMonth=$em->getRepository('BoAdminBundle:Tmonth')->findByImonth($month);
		$aYear=$em->getRepository('BoAdminBundle:Tyear')->findByYearln($year);
		if(isset($aMonth[0])) $oCriteria->setMonth($aMonth[0]);
		if(isset($aYear[0])) $oCriteria->setYear($aYear[0]);
		$oCriteria->setStartdate($this->getToday());
		$oCriteria->setEnddate($this->getToday());
		return $oCriteria;
	}
	protected function initCriteriaByPP($sMonth=null,$iYear=null,$startdate=null,$enddate=null){
		$em = $this->getDoctrine()->getManager();
		$oCriteria = new Criteria();
		$month = date("m");
		$year = date("Y");
		if($sMonth!=null){
			$aPP = $em->getRepository('BoAdminBundle:PeriodPay')->findBy(array('month'=>$sMonth,'year'=>$iYear));			
			if(!isset($aPP[0]))	return null;		
		}else{
			$aPP = $em->getRepository('BoAdminBundle:PeriodPay')->getCurrentPeriodPay();	
		
		} 
		if($startdate!=null and $enddate!=null){
			$oCriteria->setStartdate($startdate);
			$oCriteria->setEnddate($enddate);
			if($sMonth) $aMonth=$em->getRepository('BoAdminBundle:Tmonth')->findByImonth($month);
			if(isset($aMonth[0])) $oCriteria->setMonth($aMonth[0]);			
		}elseif(isset($aPP[0])){
			$oPP=$aPP[0];
			$oCriteria->setStartdate($oPP->getStartdate());
			$oCriteria->setEnddate($oPP->getEnddate());
			$aMonth=$em->getRepository('BoAdminBundle:Tmonth')->findBySmonthen($oPP->getMonth());			
			if(!isset($aMonth[0])) $aMonth=$em->getRepository('BoAdminBundle:Tmonth')->findByImonth($month);
			if(isset($aMonth[0])) $oCriteria->setMonth($aMonth[0]);
		}		
		$aYear=$em->getRepository('BoAdminBundle:Tyear')->findByYearln($year);		
		if(isset($aYear[0])) $oCriteria->setYear($aYear[0]);		
		return $oCriteria;
	}
	protected function getIdStatusForCriteria(){
		//$em = $this->getDoctrine()->getManager();
		$iTvl = $this->getParam("timesheet_validation_level",5);
		if($iTvl>0) return $iTvl;
	}
	protected function removeEmployee($idcontract,$idemployee){
		$res = null;
		if($idcontract==null) return $idcontract;
		$em = $this->getDoctrine()->getManager();
		$oContract = $em->getRepository('BoAdminBundle:Contracts')->find($idcontract);
		$oEmployee = $em->getRepository('BoAdminBundle:Employee')->find($idemployee);
		if($this->existContractEmployee($oEmployee,$oContract)){
			$oContract->removeEmployee($oEmployee);
			$res = $this->updateEntity($oContract);
		}
		if($this->existGroupEmployee($oEmployee,$oContract->getGroup())){
			$oContract->getGroup()->removeEmployee($oEmployee);
			$res = $this->updateEntity($oContract->getGroup());			
		}
		return $res;
	}
	protected function removeEmployeeFromGroup($idgroup,$idemployee){
		$res = null;
		if($idgroup==null) return $idgroup;
		$em = $this->getDoctrine()->getManager();
		$oGroup = $em->getRepository('BoAdminBundle:Group')->find($idgroup);
		$oEmployee = $em->getRepository('BoAdminBundle:Employee')->find($idemployee);
		$oGroup->removeEmployee($oEmployee);
		$res = $this->updateEntity($oGroup);			
		return $res;
	}
	protected function getContractStatus(){
		return array(0=>"archived",1=>"In progress",2=>"Uncomming",3=>"Outstanding",4=>"Master",5=>"Cancel",6=>"Unknown");
	}
	protected function getAgendaStatus(){
		return array(0=>"archived",1=>"In progress",2=>"Uncomming",3=>"Outstanding",4=>"Cancel");
	}
	protected function getEvaluationStatus(){
		return array('1'=>"Request", '11'=>"Confirmation sent", '2'=>"Evaluation done", '21'=>"Pdf generated", '3'=>"Result sent");
	}
	protected function getContractRoom($oContract){
		if($oContract->getGroup()){
			$group  = $oContract->getGroup();
			$aLocal = $group->getLocal();
			if(count($aLocal)>0) return $aLocal[0]->getReference();			
		}
		$aLocal = $oContract->getLocal();
		if(count($aLocal)>0) return $aLocal[0]->getReference();	
		return null;
	}
	//Return room collection 
	protected function getGroupRoom($oGroup){
		$aContractGroup = $this->getContractByGroup($oGroup);
		if(isset($aContractGroup[0]) and $oContract=$aContractGroup[0]){
			$aLocal = $oContract->getLocal();
			if(count($aLocal)>0) return $aLocal;				
		} 			
		return $oGroup->getLocal();
	}
	/*Vérifier si lorsque category de timesheet est "Teaching", l'utilisateur a bien sélectionné la légende correspondante à la résultante des légendes des apprenants. Exemple: Pour deux apprenants A et B, 
	- si l'apprenant A est présent et B en No show, alors légende = P
	- si l'apprenant A est absent et B est présent alors légende = P 
	- si l'apprenant A est absent et B est en No show alors légende = N-S 	
	- si l'apprenant A est en No show et B est absent alors légende = N-S 
	- si tous deux absents alors  légende = ABS 
	*/
	protected function getHighLegende($request,$aStudents){
		$aTab=array();
		foreach($aStudents as $oStudent){
			if($oStudent){
				$var="student".$oStudent->getId();
				$reqname=$request->request->get($var);
				$aTab[$reqname]=$reqname;					
			}		
		}	
		return $this->getBigLegende($aTab);
	}
	protected function getBigLegende($aTab){
		if(count($aTab)==0) return null;
		if(isset($aTab['P'])) return $aTab['P'];
		elseif(isset($aTab['N-S'])) return $aTab['N-S'];
		elseif(isset($aTab['ABS'])) return $aTab["ABS"];
		return null;
	}
	protected function getIdemployee($aTeacher,$request){
		foreach($aTeacher as $oTeacher){
			$name = "employee".$oTeacher->getId();
			$idemployee = $request->request->get($name);
			if($idemployee!=null) return $idemployee;
		}
		return null;
	}
	protected function getSubstitutionBy($oContract,$oEmployee){
		$em = $this->getDoctrine()->getManager();
		return $em->getRepository('BoAdminBundle:Substitution')->findBy(array('idholder'=>$oEmployee->getId(),'idcontract'=>$oContract->getId()));
	}
	protected function getTodaySubstitutionBy($oContract,$oEmployee){
		$em = $this->getDoctrine()->getManager();
		return $em->getRepository('BoAdminBundle:Substitution')->getContractSubstittution($oEmployee,$oContract);
	}
	protected function getContractSubstitution($oContract){
		$em = $this->getDoctrine()->getManager();
		return $em->getRepository('BoAdminBundle:Substitution')->findBy(array('idcontract'=>$oContract->getId()));
	}
	protected function getGroupSubstitution($oGroup){
		$em = $this->getDoctrine()->getManager();
		return $em->getRepository('BoAdminBundle:Substitution')->findBy(array('idgroup'=>$oGroup->getId()));
	}
	protected function getTodayGroupSubstitutionBy($oGroup,$oEmployee){
		$em = $this->getDoctrine()->getManager();
		return $em->getRepository('BoAdminBundle:Substitution')->getGroupSubstittution($oEmployee,$oGroup);
	}
	protected function generateTs($timesheet,$oEmployee,$oContract,$legende,$status=3,$typets=null){
		$em = $this->getDoctrine()->getManager();
		if($typets==null) $typets="Teaching";
		$aTypets = $em->getRepository('BoAdminBundle:Typets')->findByName($typets);
		if(isset($aTypets[0])) $timesheet->setTypets($aTypets[0]);
		//Check if there exists a substitution for this contract and for this employee and for this date
		$aSubstitution = $this->getTodaySubstitutionBy($oContract,$oEmployee);
		if(count($aSubstitution)>0){
			$aTeacherSchedule = $aSubstitution;
			$oEmployee = $em->getRepository('BoAdminBundle:Employee')->find($aSubstitution[0]->getSubstitute());
		}else{	
			$aTeacherSchedule = $this->getContractTeacherSchedule($oEmployee,$oContract);
		}
		$timesheet = isset($aTeacherSchedule[0])?$this->initialize($timesheet,$aTeacherSchedule[0]):$this->initialize($timesheet);
		$timesheet->setContract($oContract);
		$timesheet->setEmployee($oEmployee);
		$aStudents = $oContract->getStudents();
		if($oContract->getGroup() and $oContract->getGroup()!=null) $timesheet->setGroup($oContract->getGroup());
		if(count($aStudents)==1 and $oStudent=$aStudents[0]){
			$timesheet->setStudents($oStudent);
		} 
		$oTsweek = $this->getTsWeek($timesheet->getDdate());
		$timesheet->setMonth($timesheet->getDdate()->format("m"));
		$timesheet->setYear($timesheet->getDdate()->format("Y"));
		$timesheet->setTsweek($oTsweek);		
		$timesheet->setLegende($legende);
		$timesheet->setStatus($status);
		return $timesheet;
	}
	protected function generateTsForGroup($timesheet,$oEmployee,$oGroup,$legende,$status=3,$typets=null){
		$em = $this->getDoctrine()->getManager();
		//Récupérer le type de timesheet par défaut : "Teaching"
		if($typets==null) $typets="Teaching";
		$aTypets = $em->getRepository('BoAdminBundle:Typets')->findByName($typets);
		if(isset($aTypets[0])) $timesheet->setTypets($aTypets[0]);
		//Check if there exists a substitution for this contract and for this employee and for this date
		$aSubstitution = $this->getTodayGroupSubstitutionBy($oGroup,$oEmployee);
		if(count($aSubstitution)>0){
			$aTeacherSchedule = $aSubstitution;
			$oEmployee = $em->getRepository('BoAdminBundle:Employee')->find($aSubstitution[0]->getSubstitute());
		}else{	
			$aTeacherSchedule = $this->getGroupTeacherSchedule($oEmployee,$oGroup);
		}
		$timesheet = isset($aTeacherSchedule[0])?$this->initialize($timesheet,$aTeacherSchedule[0]):$this->initialize($timesheet);
		$timesheet->setEmployee($oEmployee);
		$timesheet->setGroup($oGroup);
		$oTsweek = $this->getTsWeek($timesheet->getDdate());
		$timesheet->setMonth($timesheet->getDdate()->format("m"));
		$timesheet->setYear($timesheet->getDdate()->format("Y"));
		$timesheet->setTsweek($oTsweek);		
		$timesheet->setLegende($legende);
		$timesheet->setStatus($status);
		return $timesheet;
	}
	protected function generateTsForAbs($oAbsence){
		if(count($oAbsence->getGroup())>0) return null;
		$aResult = array();
		$aContract = $oAbsence->getContracts();
		if($aContract==null) return $aResult;
		foreach($aContract as $oContract){	
			foreach($oContract->getEmployee() as $oEmployee){
				$aTeacherschedule = $this->getContractTeacherSchedule($oEmployee,$oContract);
				if(isset($aTeacherschedule[0]) and $oSchedule=$aTeacherschedule[0]){
					$aLegende = $this->getAbsLegends($oAbsence); 
					foreach($aLegende as $date=>$legend){
						$oTimesheet = $this->initialize();
						$oDate = $this->getObjectDateTwo($date);
						$aPresence = $this->getAbsPresence($oAbsence);
						$oTimesheet = $this->createTsForAbsence($aTeacherschedule,$oAbsence,$oSchedule,$oContract,$oEmployee,$oTimesheet,$oDate,$legend,$aPresence);					
						$aResult[] = $oTimesheet->getId();
					}
				}
			}
		}
		return $aResult;

	}
	public function getAttendanceByPresence($aPresence,$oDate,$legend,$oSchedule,$oAbsence){
		$aDatePresence = $aPresence[$oDate->format("d-m-Y")];
		$aLegende[]=array('student'=>$oAbsence->getStudents()->getId(),'legende'=>$legend,'delay'=>null,'dh'=>null,'am'=>$aDatePresence['am'],'pm'=>$aDatePresence['pm'],'ham'=>$this->getRealAmHour($oSchedule),'hpm'=>$this->getRealPmHour($oSchedule));
		return $aLegende;
	}
	private function getLegendByPresence($oAbsence,$oSchedule){
		$aPresence = $this->getPresenceStudentForAbs($oAbsence->getStudents());
		if($this->getRealAmHour($oSchedule)>0 and $this->getRealPmHour($oSchedule)>0) return $this->getHighBYPresence($this->getPresence(array($oAbsence->getStudents())));
		elseif($this->getRealAmHour($oSchedule)>0) return $aPresence['am'];
		else return $aPresence['pm'];
		
	}
	private function getPresenceStudentForAbs($oStudent){
		$aPresence = $this->getPresence(array($oStudent));
		return $aPresence[$oStudent->getId()]; 
	}
	private function setPresenceTeacher($teacherschedule,$timesheet){
		if($this->getRealAmHour($teacherschedule));

	}
	private function createTsForAbsence($aTeacherschedule,$oAbsence,$oSchedule,$oContract,$oEmployee,$oTimesheet,$oDate,$legend,$aPresence){
		$aTypets = $this->getRepository('BoAdminBundle','Typets')->findByName("Teaching");
		if(isset($aTypets[0])) $oTimesheet->setTypets($aTypets[0]);
		$oTimesheet->setDdate($oDate);
		$oTimesheet->setEmployee($oEmployee);
		$oTimesheet->setContract($oContract);
		$oTimesheet->setIdstudentabsence($oAbsence->getId());
		$oTimesheet->setStudents($oAbsence->getStudents());
		$oTsweek = $this->getTsWeek($oDate);
		$oTimesheet->setMonth($oDate->format("m"));
		$oTimesheet->setYear($oDate->format("Y"));
		if($legend=='N-S'){
			if($oAbsence->getTeacherpresence()==true and $this->getRealAmHour($oSchedule)>0) $oTimesheet->setTeacherns($this->getRealAmHour($oSchedule));
			$oTimesheet->setStudentns($this->getAllHour($oSchedule));
		}
		$oTimesheet->setTsweek($oTsweek);		
		$oTimesheet->setLegende($legend);
		$oTimesheet->setStatus(3);
		$res = $this->updateEntity($oTimesheet);
		$aAttendance = $this->getAttendanceByPresence($aPresence,$oDate,$legend,$oSchedule,$oAbsence);
		if($res>0){
			//creation of billing
			$this->createBilling($oTimesheet);
			//Create payroll data
			$this->manageTsHours($oTimesheet);
			//Record student presence
			$res = $this->createTsStudent($oTimesheet,$aAttendance);
			if(!$this->getExistPP($oTimesheet)){
				//Create the period pay
				$oPP = $this->createPP($oTimesheet);
			}
		}
		return $oTimesheet;

	}
	protected function getFromRequest($aEntity,$request,$keyword){
		$aResult = array();
		foreach($aEntity as $oEntity){
			$name = $keyword.$oEntity->getId();
			$value = $request->request->get($name);
			if($value!=null) $aResult[]=$value;
		}
		return $aResult;
	}
	protected function getManyAttendance($request,$aContracts){
		$aResult=array();
		foreach($aContracts as $oContract){
			$aResult[$oContract->getId()] = $this->getArrayAttendance($request,$oContract->getStudents());			
		}
		return $aResult;
	}
	protected function getArrayAttendance($request,$aStudents,$aPresence=null,$timesheet=null){
		$aLegende=array();
		if($timesheet!=null){
			$tam = $this->getTsTime($timesheet,"am");
			$tpm = $this->getTsTime($timesheet,"pm");
		}
		foreach($aStudents as $oStudent){
			if($oStudent){
				$var="student".$oStudent->getId();
				$var2="delay".$oStudent->getId();
				$var3="dh".$oStudent->getId();
				$var4="am".$oStudent->getId();
				$var5="pm".$oStudent->getId();
				$var6="ham".$oStudent->getId();
				$var7="hpm".$oStudent->getId();
				$reqname=$request->request->get($var);
				$reqname2=$request->request->get($var2);
				$reqname3=$request->request->get($var3);
				$reqname4=$request->request->get($var4);
				if($reqname4==null and isset($aPresence[$oStudent->getId()]['am']) and isset($tam) and $tam>0) $reqname4=$aPresence[$oStudent->getId()]['am'];
				$reqname5=$request->request->get($var5);
				if($reqname5==null and isset($aPresence[$oStudent->getId()]['pm']) and isset($tpm) and $tpm>0) $reqname5=$aPresence[$oStudent->getId()]['pm'];
				$reqname6=$request->request->get($var6);
				if($reqname6==null and isset($tam)) $reqname6=$tam;
				$reqname7=$request->request->get($var7);
				if($reqname7==null and isset($tpm)) $reqname7=$tpm;
				//$aLegende[]=array('student'=>$oStudent->getId(),'legende'=>$reqname,'delay'=>$reqname2,'dh'=>$reqname3,'am'=>$reqname4,'pm'=>$reqname5,'ham'=>$reqname6,'hpm'=>$reqname7);
				$aLegende[]=array('student'=>$oStudent->getId(),'delay'=>$reqname2,'dh'=>$reqname3,'am'=>$reqname4,'pm'=>$reqname5,'ham'=>$reqname6,'hpm'=>$reqname7);
			}
		}		
		return $aLegende;
	}
	protected function createTsStudent($timesheet,$aAttendance){
		//Initialisation et déclaration des variables
		$em = $this->getDoctrine()->getManager();
		$res = null;
		foreach($aAttendance as $aTab){
			$ddate = $timesheet->getDdate();
			$month = $timesheet->getDdate()->format("m");
			$year = $timesheet->getDdate()->format("Y");
			$idStudent = $aTab['student'];
			$oStudent = $em->getRepository('BoAdminBundle:Students')->find($idStudent);
			$aTst = $em->getRepository('BoAdminBundle:TsStudent')->getByStudentAndDate($oStudent,$ddate);
			if(isset($aTst[0])){
				$oTsStudent = $aTst[0];
			}else{
				$oTsStudent = new TsStudent;
				$oTsStudent->setDdate($ddate);
				$oTsStudent->setMonth($month);
				$oTsStudent->setYear($year);
				$oTsStudent->setStudents($oStudent);
				if(isset($aTab['idcontract'])) $oTsStudent->setIdcontract($aTab['idcontract']);
				$oTsStudent->setDelay($aTab['delay']);
				$oTsStudent->setDh($aTab['dh']);
			}
			if(isset($aTab['am'])){
				$oTsStudent->setAm($aTab['am']);
				$oTsStudent->setLegam($aTab['am']);
				$oTsStudent->setHam($aTab['ham']);
			} 
			if(isset($aTab['pm'])){
				$oTsStudent->setPm($aTab['pm']);
				$oTsStudent->setLegpm($aTab['pm']);
				$oTsStudent->setHpm($aTab['hpm']);
			} 
			/*
			$aTime = $this->getRealHoursScheduled($timesheet);
			if($aTime[0]!=0 and $aTab['legende']!="ABS") $oTsStudent->setHam($aTime[0]);
			if($aTime[1]!=0 and $aTab['legende']!="ABS") $oTsStudent->setHpm($aTime[1]);*/
			$oTsStudent->setTimesheet($timesheet);
			$res = $this->updateEntity($oTsStudent);
		}
		return $res;
	}
	protected function getRealHoursScheduled($timesheet){
		$oContract = $timesheet->getContract();
		$oGroup = $timesheet->getGroup();
		if($oContract) $type=$this->getContractType($oContract);
		elseif($oGroup) $type=$this->getTypeContractByGroup($oGroup);	
		$startam = $timesheet->getStartam();
		$endam = $timesheet->getEndam();
		$startpm = $timesheet->getStartpm();
		$endpm = $timesheet->getEndpm();
		$am = $this->getHourByContractType($startam,$endam,$type);
		$pm = $this->getHourByContractType($startpm,$endpm,$type);
		return array($am,$pm);	
	}
	protected function createStudentAbs($aTab,$absence,$ddate=null){
		if($ddate==null) $ddate = new \DateTime();
		$oTsStudent = new TsStudent;
		$oTsStudent->setDdate($ddate);
		$oTsStudent->setStudents($aTab['student']);
		$oTsStudent->setLegende($aTab['legende']);
		$oTsStudent=$this->setAmorpm($oTsStudent,$absence,$aTab);
		$res = $this->updateEntity($oTsStudent);
		return $res;
	}
	private function setAmorPm($oTsStudent,$absence,$aTab){
		if($absence->getAmorpm()=="All"){
			$oTsStudent->setAm($aTab['legende']);
			$oTsStudent->setPm($aTab['legende']);
		}elseif($absence->getAmorpm()=="AM"){
			$oTsStudent->setAm($aTab['legende']);
		}else{
			$oTsStudent->setPm($aTab['legende']);
		}	
	}
	protected function saveForTsStudent($absence){
		$student = $absence->getStudents();
		//$aContract = $absence->getContracts();
		$startdate = $absence->getStartdate();
		$numberday = $absence->getNumberday();
		$i=0;
		while($i<$numberday){
			$legende = $this->getAbsenceLegende($absence,$startdate);
			$aTab = array('student'=>$student,'legende'=>$legende);
			$this->createStudentAbs($aTab,$absence,$startdate);
			//get the next date without saturday and sunday
			$startdate = $this->getNextDayBis($startdate);
			$i=$i+1;
		}
		return;
	}
	protected function getAbsLegends($absence){
		$startdate = $absence->getStartdate();
		$aLegend = array();
		$numberday = $absence->getNumberday();
		$dayns = $absence->getDayns(); //number of noshow day
		$i=0;
		while($i<$numberday){
			$legende = $i<intval($dayns)?"N-S":"ABS";
			$aLegend[$startdate->format("d-m-Y")] = ($legende);
			$startdate = $this->getNextDayBis($startdate);
			$i=$i+1;
		}
		return $aLegend;
	}
	protected function getAbsPresence($absence){
		$startdate = $absence->getStartdate();
		$aLegend = array();
		$numberday = $absence->getNumberday();
		$dayns = $absence->getDayns(); //number of noshow day
		$i=0;
		while($i<$numberday){
			$legende = $i<intval($dayns)?"N-S":"ABS";
			$aLegend[$startdate->format("d-m-Y")] = array('am'=>$legende,'pm'=>$legende);
			$startdate = $this->getNextDayBis($startdate);
			$i=$i+1;
		}
		return $aLegend;
	}
	//For admin creation
	protected function getPresence($aStudent){
		$aResult =  array();
		$today = new \DateTime(date("d-m-Y"));
		$em = $this->getDoctrine()->getManager();
		$oRepAbs = $em->getRepository('BoAdminBundle:Absences');
		foreach($aStudent as $oStudent){
			$aAbsence = $oRepAbs->getStudentsAbsencesByDate($oStudent,$today);
			if(!isset($aAbsence[0])) $aResult[$oStudent->getId()]= array('am'=>"P",'pm'=>"P");
			else{
				$oAbsence = $aAbsence[0];
				$aLegends = $this->getAbsLegends($oAbsence);
				if(isset($aLegends[$today->format("d-m-Y")])){
					$legend = $aLegends[$today->format("d-m-Y")];
					if($oAbsence->getAmorpm()=="ALL") 
						$aResult[$oStudent->getId()]= array('am'=>$legend,'pm'=>$legend);
					elseif($oAbsence->getAmorpm()=="AM") 
						$aResult[$oStudent->getId()]= array('am'=>$legend,'pm'=>"P");
					elseif($oAbsence->getAmorpm()=="PM") 
						$aResult[$oStudent->getId()]= array('am'=>"P",'pm'=>$legend);

				}
			}
		}
		return $aResult;		
	}
	protected function getStudentAbsLegend($aStudent){
		$aResult =  array();
		$today = new \DateTime(date("d-m-Y"));
		$em = $this->getDoctrine()->getManager();
		$oRepAbs = $em->getRepository('BoAdminBundle:Absences');
		foreach($aStudent as $oStudent){
			$aAbsence = $oRepAbs->getStudentsAbsencesByDate($oStudent,$today);
			foreach($aAbsence as $oAbsence){
				$aLegends = $this->getAbsLegends($oAbsence);
				if(isset($aLegends[$today->format("d-m-Y")])) $aResult[$oStudent->getId()]= $aLegends[$today->format("d-m-Y")];
			}
		}
		return $aResult;
	}
	protected function getAbsenceLegende($absence,$oDate=null){
		//$em = $this->getDoctrine()->getManager();
		$aContract = $absence->getContracts();
		if(isset($aContract[0]) and $oContract = $aContract[0]){
			$deadline = $this->getTypeContract($oContract)=="TBS"?$this->getParam("absence_student_delay_tbs",14):$this->getParam("absence_student_delay_nmso",15);
			if($oDate==null) $abs_start = $this->getAbscenceStartdate($absence);
			else $abs_start = $oDate;
			$now = new \DateTime(date("d-m-Y"));
			$datediff = $now->diff($abs_start);
			$diff = $datediff->format("%d-%H"); 
			$aDiff = explode('-',$diff);
			$total_hour = intval(24*$aDiff[0])+intval($aDiff[1]);
			if($deadline<$total_hour) return "ABS";
			else return "N-S";
		}
		return null;
	}
	protected function existDayTraining($day,$training){
		if($day=="Monday" and $training[0]->getMonday()==1) return true;
		if($day=="Tuesday" and $training[0]->getTuesday()==1) return true;
		if($day=="Wednesday" and $training[0]->getWednesday()==1) return true;
		if($day=="Thursday" and $training[0]->getThursday()==1) return true;
		if($day=="Friday" and $training[0]->getFriday()==1) return true;
		return null;
	}
	protected function getAbscenceStartdate($absence,$startdate=null){
		if($startdate==null) $startdate = $absence->getStartdate();
		$abs_day = $startdate->format("l");
		$oContract = $absence->getContracts();
		if($oContract) $training = $this->getContractTraining($oContract);
		if(isset($training) and isset($training[0]) and $this->existDayTraining($abs_day,$training)){
			$startam = $training[0]->getStartam();
			$startpm = $training[0]->getStartpm();
			if($startam!=null) return $this->toDateTime($startdate,$startam);
			elseif($startpm!=null)  return $this->toDateTime($startdate,$startpm);
		} 
		return $startdate;
	}
	protected function toDateTime($date,$time){
		$d = $date->format("d");
		$y = $date->format("Y");
		$m = $date->format("m");
		$h = $time->format("H");
		$i = $time->format("i");
		$newdate = new \DateTime($y."-".$m."-".$d." ".$h.":".$i);
		return $newdate;
	}
	protected function getContractTraining($oContract){
		$em = $this->getDoctrine()->getManager();
		$training=null;
		//Get contract training
		$training = $em->getRepository('BoAdminBundle:Training')->findBy(array('contracts'=>$oContract));		
		if(!isset($training[0]) and $this->isGroupContract($oContract)){
			$oGroup = $oContract->getGroup();
			//Get group training 
			if($oGroup) $training = $this->getTrainingByGroup($oGroup);
		}
		return $training;
	}
	protected function getTrainingByGroup($oGroup){
		$em = $this->getDoctrine()->getManager();
		$training = $em->getRepository('BoAdminBundle:Training')->findBy(array('idgroup'=>$oGroup->getId()));
		if(count($training)==0){
			$aContract = $this->getContractByGroup($oGroup);
			foreach($aContract as $oContract){
				$training = $em->getRepository('BoAdminBundle:Training')->findBy(array('contracts'=>$oContract));
				if(isset($training[0]) and $oTraining=$training[0]){
					$oTraining->setIdgroup($oGroup->getId());
					$this->updateEntity($oTraining);
					return $this->getContractTraining($oContract);
				}
			}

		} 		
		return $training;
	}
	protected function getGroupTraining($oGroup){
		$em = $this->getDoctrine()->getManager();
		//Get contract training
		$training = $em->getRepository('BoAdminBundle:Training')->findBy(array('idgroup'=>$oGroup->getId()));		
		return $training;
	}
	protected function getUniqueTraining($oContract,$oGroup){
		$training = $this->getContractTraining($oContract);
		if(count($training)>0) return $training;
		return $this->getGroupTraining($oGroup);
	}
	protected function getLegendeForManyContracts($request,$aContracts){
		$aResult=array();
		foreach($aContracts as $oContract){
			$sLegende = $this->getHighLegende($request,$oContract->getStudents());
			if($sLegende!=null) $aResult[$oContract->getId()] = $sLegende;
		}
		return $aResult;
	}
	protected function getTypeContForGroups($aGroup){
		$em = $this->getDoctrine()->getManager();
		$aResult = array();
		foreach($aGroup as $oGroup){
			if(isset($aResult[$oGroup->getId()])) continue;
			$aGroupContract = $em->getRepository('BoAdminBundle:Contracts')->findByGroup($oGroup);
			if(isset($aGroupContract[0])) $aResult[$oGroup->getId()] = $aGroupContract[0]->getTypecontract()->getReference();
		}
		return $aResult;
	}
	protected function getRootPath(){
		$sAppPath = $this->get('kernel')->getRootDir();
		return realpath($sAppPath. '/../root/');	
	}
	protected function getSliderPath(){
		$sAppPath = $this->get('kernel')->getRootDir();
		return realpath($sAppPath. '/../root/images/slider');	
	}
	protected function getRandomImage(){
		$index = rand(1,5);	
		if($index==1) return "2010_05_25_4860.JPG";
		if($index==2) return "2010_05_25_4859.JPG";
		if($index==3) return "2010_05_25_4856.JPG";
		if($index==4) return "2010_05_25_4846.JPG";
		return "2010_05_25_4844.JPG";
	}
	protected function verifyCookies(){
        // Verifie si le cookie n existe pas
        if(!isset($_COOKIE["_slsmpro_visite"]))
        {
            // Initialize the cookie information
            $cookie_info = array(
                'name'  => '_slsmpro_visite',
                'value' => time()+10800,
            );
 
            // I create the cookie
            $cookie = new Cookie($cookie_info['name'], $cookie_info['value']);
 
            // I send the cookie
            $response = new Response();
            $response->headers->setCookie($cookie);
            $response->send();
			return 0;
        }
		return 1;
	}
	protected function getStatusTicket(){
		return array(1=>"Opened",2=>"In progress",3=>"Resolved",4=>"Close");
	}
	protected function doAffectation($ticket,$oStudent=null,$oEmployee=null){
		$em = $this->getDoctrine()->getManager();
		if($ticket->getSubject()=="Techsupport"){
			$oTicketContact = $em->getRepository('BoAdminBundle:TicketContacts')->find(1);
			if($oTicketContact) $ticket->setContacts($oTicketContact);
		}
		if($ticket->getSubject()=="Advisor support"){
			$id = $this->getAdvisorSupport($oStudent);
			if($id!=null) $ticket->setIdadvisor($id);
		}
		if($ticket->getSubject()=="Customer service"){
			$oTicketContact = $em->getRepository('BoAdminBundle:TicketContacts')->find(2);
			if($oTicketContact) $ticket->setContacts($oTicketContact);
		}
		if($ticket->getSubject()=="Complaint"){
			$oTicketContact = $em->getRepository('BoAdminBundle:TicketContacts')->find(3);
			if($oTicketContact) $ticket->setContacts($oTicketContact);
		}
		if($ticket->getSubject()=="Suggestion"){
			$oTicketContact = $em->getRepository('BoAdminBundle:TicketContacts')->find(4);
			if($oTicketContact) $ticket->setContacts($oTicketContact);
		}
		if($ticket->getSubject()=="SLSM help"){
			$oTicketContact = $em->getRepository('BoAdminBundle:TicketContacts')->find(5);
			if($oTicketContact) $ticket->setContacts($oTicketContact);
		}
		return $ticket;
	}
	protected function getHelpTechnicalSupport(){
		//$em = $this->getDoctrine()->getManager();
		$ids = $this->getParam("help_technical_support1",15);
		$aIds = explode(",",$ids);
		return $aIds;	
	}
	protected function getAdvisorSupport($oStudent){
		$aContrats = $oStudent->getContracts();
		$oContract = $this->getActiveContract($aContrats);
		if($oContract and $oContract->getAdvisor()) return $oContract->getAdvisor()->getId();
		return null;
	}
	protected function getHelpCsSupport(){
		//$em = $this->getDoctrine()->getManager();
		$ids = $this->getParam("help_clientservice_support",14);
		$aIds = explode(",",$ids);
		return $aIds;	
	}
	protected function getHelpComplaintSupport(){
		//$em = $this->getDoctrine()->getManager();
		$ids = $this->getParam("help_complaint_support",12);
		$aIds = explode(",",$ids);
		return $aIds;	
	}
	protected function getHelpSuggestionSupport(){
		$em = $this->getDoctrine()->getManager();
		$ids = $this->getParam("help_suggestion_support",13);
		$aIds = explode(",",$ids);
		return $aIds;	
	}
	protected function getHelpSlsmSupport(){
		$em = $this->getDoctrine()->getManager();
		$ids = $this->getParam("help_slsm_support",11);
		$aIds = explode(",",$ids);
		return $aIds;	
	}
	public function updateAllContracts(){
		$em = $this->getDoctrine()->getManager();
		$aContracts = $em->getRepository('BoAdminBundle:Contracts')->findAll();	
		$today = new \DateTime(date("d-m-Y"));
		foreach($aContracts as $oContract){
			if($oContract->getStatus()==1 and $today>$oContract->getEnddate()){
				$oContract->setStatus(0);
				$this->updateEntity($oContract);
			} 
		}		
	}
	protected function getInprogressContract($aContract){
		$aResult = array();
		$now = new \DateTime(date("d-m-Y"));
		foreach($aContract as $oContract){
			if($oContract->getStartdate()<=$now and $now<=$oContract->getEnddate()){
				$aResult[] = $oContract;
			}			
		}
		return $aResult;
	}
	protected function getContractsInLocal($local){
		$aContracts = $local->getContracts();
		$aResult = array();
		$now = new \DateTime(date("d-m-Y"));
		foreach($aContracts as $oContract){
			if($oContract->getStatus()==0) continue;
			if(($oContract->getStartdate()<=$now and $now<=$oContract->getEnddate()) or $now<=$oContract->getStartdate()){
				$aResult[] = $oContract;
			}			
		}
		return $aResult;
	}
	protected function getGroupInLocal($local){
		$aGroups = $local->getGroup();
		if(!isset($aGroups[0])) $aGroup = $this->getGroupsBy($local);
		$aResult = array();
		$now = new \DateTime(date("d-m-Y"));
		foreach($aGroups as $oGroup){
			if($oGroup->getStatus()==1 and (($oGroup->getStartdate()<=$now and $now<=$oGroup->getEnddate()) or $oGroup->getStartdate()>=$now)){
				$aResult[] = $oGroup;
			}			
		}
		return $aResult;
	}
	protected function notifyContacts($ticket){
		$email = $this->getContactEmail($ticket);
		$subject = "Ask for help / Demande d'aide";
		if($email!=null){
			$body = $this->renderView("BoAdminBundle:Tickets:notifycontacts.html.twig", array('ticket' =>$ticket));
			$res = $this->sendmail($email,$subject,$body,null,"jmnvekounou@gmail.com");
		}
		return $res;
	}
	protected function getContactEmail($ticket){
		$contacts = $ticket->getContacts();
		$email = "";
		if($contacts and $contacts->getEmployee() and $aEmployee=$contacts->getEmployee()){
			$i=1;
			foreach($aEmployee as $oEmployee){
				if($oEmployee->getEmail()) $email=$email.$oEmployee->getEmail();
				if($i<count($aEmployee)) $email=$email.",";
				$i=$i+1;
			}			
		}elseif($ticket->getIdadvisor()!=null and $ticket->getIdadvisor()>0){
			$id = $ticket->getIdadvisor();
			$em = $this->getDoctrine()->getManager();
			$oEmployee = $em->getRepository('BoAdminBundle:Employee')->find($id);
			if($oEmployee and $oEmployee->getEmail()!=null){
				$email = $oEmployee->getEmail();
			}			
		}
		return $email;
	}
	protected function getContractsBy($entity){
		$aResults = array();
		$now = new \DateTime(date("d-m-Y"));
		$aContracts=$entity->getContracts();
		foreach($aContracts as $oContracts){
			if($this->isGroupContract($oContracts)==true) continue;
			if(($oContracts->getStatus()==1 or $oContracts->getStatus()==2) and (($oContracts->getStartdate()<=$now and $now<=$oContracts->getEnddate()) or $oContracts->getStartdate()>=$now)){
				$aResults[]=$oContracts;
			}
		}
		return $aResults;
	}
	protected function getContractsByBis($entity){
		$aResults = array();
		$now = new \DateTime(date("d-m-Y"));
		$aContracts=$entity->getContracts();
		foreach($aContracts as $oContracts){
			if($this->isGroupContract($oContracts)==true) continue;
			if(($oContracts->getStatus()==1 or $oContracts->getStatus()==2) and (($oContracts->getStartdate()<=$now and $now<=$oContracts->getEnddate()) or $oContracts->getStartdate()>=$now)){
				$aResults[$oContracts->getId()]=$oContracts;
			}
		}
		return $aResults;
	}
	protected function getGroupsBy($entity){
		$aResults = array();
		$now = new \DateTime(date("d-m-Y"));
		$aGroups=$entity->getGroup();
		foreach($aGroups as $oGroup){			
			if($oGroup->getStatus()==1 and (($oGroup->getStartdate()<=$now and $now<=$oGroup->getEnddate()) or $oGroup->getStartdate()>=$now)){
				$aResults[]=$oGroup;
			}
		}
		return $aResults;
	}
	protected function getGroupByLocal($idlocal){
		$oRep = $this->getRepository('BoAdminBundle','Local');
		$aResults = $oRep->getGroupBy($oRep->find($idlocal));
		if(isset($aResults[0])) return $aResults[0];
		return null;
	}
	protected function getGroupByContract($oContract){
		if($this->isGroupContract($oContract)==true and $oContract->getGroup()!=null) return $oContract->getGroup();
		return null;
	}
	protected function getStudentsByGroup($oGroup){
		$em = $this->getDoctrine()->getManager();
		$aContract = $em->getRepository('BoAdminBundle:Contracts')->findByGroup($oGroup);
		$aStudents = $em->getRepository('BoAdminBundle:Students')->StudentAndContractKey($aContract);		
		return $aStudents;
	}
	protected function getStudentsBy($oContract){
		$aStudents = $oContract->getStudents();
		if(count($aStudents)==1){
			return $aStudents[0]->getFirstname()." ".$aStudents[0]->getName();
		}elseif($oContract->getGroup() and $oContract->getGroup()->getName()){
			return "le groupe ".$oContract->getGroup()->getName();
		}
		return null;
	}
	protected function getStudentName($oContract){
		$aStudents = $oContract->getStudents();
		if(count($aStudents)==1){
			return $aStudents[0]->getFirstname()." ".$aStudents[0]->getName();
		}elseif($oContract->getGroup() and $oContract->getGroup()->getName()){
			return $oContract->getGroup()->getName();
		}
		return null;
	}
	protected function updateStudentsForGroup($oGroup){
		$em = $this->getDoctrine()->getManager();
		$aContract = $em->getRepository('BoAdminBundle:Contracts')->findByGroup($oGroup);
		foreach($aContract as $oContract){
			$students = $oContract->getStudents();
			foreach($students as $student){
				$oGroup->addStudent($student);
			}
			$this->updateEntity($oGroup);
		}
	}
	protected function getDiffDate($start,$end){
		if(is_object($end) and is_object($start)){
			$dteDiff = $end->diff($start);
			$day = $dteDiff->format('%R%a');
			return $day;			
		}
		return null;
	}
	protected function getDiffTime($start,$end){
		if(is_object($end) and is_object($start)){
			$dteDiff = $end->diff($start);
			$diff = $dteDiff->format("%H:%I"); 
			return $this->formatTime($diff);
		}	
		return null;		
	}
	//Return a decimal number form a time in format H:i
	protected function formatTime($time){
		$aTime = explode(':',$time);
		$h = $aTime[0];
		$i = (intval($aTime[1])/60)*100;
		$dHour = floatval($h.".".$i);
		return $dHour;
	}
	protected function getHourByContractType($start,$end,$type){
		$hour = $this->getDiffTime($start,$end);
		$hourpause = floatval(0.25);
		if($type=="NMSO" and $hour!=0) return $hour-$hourpause;
		else return $hour;
	}
	protected function addTimes($entity,$type){
		$startam = $entity->getStartam();
		$endam = $entity->getEndam();
		$startpm = $entity->getStartpm();
		$endpm = $entity->getEndpm();
		$am = $this->getHourByContractType($startam,$endam,$type);
		$pm = $this->getHourByContractType($startpm,$endpm,$type);
		return $am+$pm;
	}
	protected function getTotalHourBy($entity){
		if($entity->getStartam()!=null and $entity->getEndam()!=null){
			$startam = $entity->getStartam();
			$endam = $entity->getEndam();
			$amtime = $this->getDiffTime($startam,$endam);
		}else{ $amtime =  0; }
		if($entity->getStartpm()!=null and $entity->getEndpm()!=null){
			$startpm = $entity->getStartpm();
			$endpm = $entity->getEndpm();
			$pmtime = $this->getDiffTime($startpm,$endpm);
		}else{ $pmtime =  0; }
		return $amtime+$pmtime;
	}
	protected function getWorkfields($contract){
		if($this->getTypeContract($contract)=="NMSO") return $contract->getWorkfields()->getWfname();	
		return null;
	}
	protected function getTypeContract($contract){
		if($contract and $contract->getTypecontract()) return $contract->getTypecontract()->getReference();	
		return null;
	}
	protected function getContractType($contract){
		if($contract and $contract->getTypecontract()) return $contract->getTypecontract()->getReference();	
		return null;
	}
	protected function getTypeContractByGroup($oGroup){
		$oTypeContract = null;
		$aContract = $this->getContractByGroup($oGroup);
		if(isset($aContract[0]) and $oContract=$aContract[0] ){
			$oTypeContract = $oContract->getTypecontract();
		}
		return $oTypeContract;
	}
	protected function getStudentsNumber($contract){
		return count($contract->getStudents());
	}
	protected function isGroupContract($oContract){
		if($oContract->getWorkfields() and ($oContract->getWorkfields()->getId()==1 or $oContract->getWorkfields()->getId()==2)){
			return true;
		}
		return false;
	}
	protected function isGroupNull($oContract){
		if($this->isGroupContract($oContract)==true and $oContract->getGroup()==null) return 1;
		return 0;
	}
	protected function updateStatus($oEntity,$oLocal){
		if($oEntity==null and $oLocal==null) return $oLocal;
		if($this->isEmptyRoom($oLocal)==1) return $this->freeLocal($oLocal);
		return $this->updateLocalStatus($oEntity,$oLocal);
	}
	protected function updateStatusByLocal($oLocal){
		if($oLocal==null) return $oLocal;
		if($this->isEmptyRoom($oLocal)==1) return $this->freeLocal($oLocal);
		$aContracts = $oLocal->getContracts();
		$status = $this->isThereActive($aContracts);
		$aGroup = $oLocal->getGroup();
		$status = $this->isThereActive($aGroup,$status);
		$oLocal->setStatus($status);
		return $this->updateEntity($oLocal);
	}
	protected function isThereActive($aEntity,$res=0){
		$now = new \DateTime(date("d-m-Y"));
		foreach($aEntity as $oEntity){
			if($oEntity->getStartdate()<=$now and $now<=$oEntity->getEnddate()){
				$res = 1;
			}elseif($now<=$oEntity->getStartdate()){
				$res = 2;
			}				
		}
		return $res;
	}
	protected function updateLocalBy($oEntity){
		$now = new \DateTime(date("d-m-Y"));
		$aLocal = $oEntity->getLocal();
		foreach($aLocal as $oLocal){
			$this->updateLocalStatus($oEntity,$oLocal);
		}
		return true;
	}
	protected function updateLocalStatus($oEntity,$oLocal){
		$now = new \DateTime(date("d-m-Y"));
		if($oEntity->getStartdate()<=$now and $now<=$oEntity->getEnddate()){
			$oLocal->setStatus(1);
		}elseif($now<=$oEntity->getStartdate()){
			if($oLocal->getStatus()!=1) $oLocal->setStatus(2);
		}
		$this->updateEntity($oLocal);
		return $oLocal;
	}
	protected function updateLocalAfterClosing($oEntity){
		$now = new \DateTime(date("d-m-Y"));
		$aLocal = $oEntity->getLocal();
		if(!isset($aLocal[0])) return 0;
		if(count($aLocal)==1 and $oLocal=$aLocal[0]){
			$oLocal->setStatus(0);
			return $this->updateEntity($oLocal);
		} 
		foreach($aLocal as $oLocal){
			if($oEntity->getStartdate()<=$now and $now<=$oEntity->getEnddate()){
				$oLocal->setStatus(0);
				$this->updateEntity($oLocal);
			}elseif($now<=$oEntity->getStartdate()){
				$oLocal->setStatus(0);
				$this->updateEntity($oLocal);
			}
		}
		return true;
	}
	protected function updateLocalAfterOpening($oEntity){
		$now = new \DateTime(date("d-m-Y"));
		$aLocal = $oEntity->getLocal();
		if(count($aLocal)==1 and $oLocal=$aLocal[0]){
			$oLocal->setStatus(1);
			return $this->updateEntity($oLocal);
		} 
		foreach($aLocal as $oLocal){
			if($oEntity->getStartdate()<=$now and $now<=$oEntity->getEnddate()){
				$oLocal->setStatus(1);
				$this->updateEntity($oLocal);
			}elseif($now<=$oEntity->getStartdate()){
				$oLocal->setStatus(2);
				$this->updateEntity($oLocal);
			}
		}
		return true;
	}
	protected function freeLocal($local){
		$local->setStatus(0);
		return $this->updateEntity($local);
	}
	protected function isEmptyRoom($oLocal){
		if($oLocal==null) return $oLocal;
		if($oLocal->getAvailable()==0) return $oLocal->getStatus();
		$iNumContract = $this->getNumberContractInRoom($oLocal);
		$iNumGroup = $this->getNumberGroupInRoom($oLocal);
		if($iNumContract==0 and $iNumGroup==0) return 1;
		else return 0;
	}
	protected function getNumberContractInRoom($oLocal){
		$now = new \DateTime(date("d-m-Y"));
		$aContracts = $oLocal->getContracts();
		$n=0;
		foreach($aContracts as $oContract){
			if($oContract->getStatus()==1 and $oContract->getStartdate()<=$now and $now<=$oContract->getEnddate()){
				$n=$n+1;
			}elseif($now<=$oContract->getStartdate()){
				$n=$n+1;
			}
		}
		return $n;
	}
	protected function getNumberGroupInRoom($oLocal){
		$now = new \DateTime(date("d-m-Y"));
		$aGroup = $oLocal->getGroup();
		$n=0;
		foreach($aGroup as $oGroup){
			if($oGroup->getStatus()==1 and $oGroup->getStartdate()<=$now and $now<=$oGroup->getEnddate()){
				$n=$n+1;
			}elseif($now<=$oGroup->getStartdate()){
				$n=$n+1;
			}
		}
		return $n;
	}
	protected function getLocalStatus(){
		return array('0'=>"Free",'1'=>"Occupied",'2'=>"Reserved",'3'=>"Disable");		
	}
	protected function isInprogressOrUpcoming($oEntity){
		$now = new \DateTime(date("d-m-Y"));
		if(($oEntity->getStatus()==1 or $oEntity->getStatus()==2) and (($oEntity->getStartdate()<=$now and $now<=$oEntity->getEnddate()) or $oEntity->getStartdate()>$now))  return true;
		return false;
	}
	protected function isInprogress($oEntity){
		$now = new \DateTime(date("d-m-Y"));
		if($oEntity->getStatus()==1 and $oEntity->getStartdate()<=$now and $now<=$oEntity->getEnddate())  return true;
		return false;

	}
	protected function getContractTeacherSchedule($employee,$oContract){
		$em = $this->getDoctrine()->getManager();
		return $em->getRepository('BoAdminBundle:Agenda')->findBy(array('employee'=>$employee,'contracts'=>$oContract));
	}
	protected function getContractSchedule($employee,$oContract){
		return $this->getRepository('BoAdminBundle:Agenda')->findBy(array('employee'=>$employee,'contracts'=>$oContract));
	}
	protected function getGroupTeacherSchedule($employee,$oGroup){
		return $this->getRepository('BoAdminBundle:Agenda')->findBy(array('employee'=>$employee,'group'=>$oGroup));
	}
	protected function getGroupSchedule($employee,$oGroup){
		return $this->getRepository('BoAdminBundle:Agenda')->findBy(array('employee'=>$employee,'group'=>$oGroup));
	}
	protected function getEmployeeContSchedule($employee){
		$aResult = array();
		$aSchedules = $this->getRepository('BoAdminBundle:Agenda')->getScheduleByDate($employee->getId(),new \DateTime(date("d-m-Y")));
		foreach($aSchedules as $oSchedule){
			if($oSchedule->getIdcontracts()>0){ 
				$oContract = $this->getRepository('BoAdminBundle:Contracts')->find($oSchedule->getIdcontracts());
				if($this->isInprogress($oContract) and $this->isGroupContract($oContract)==false){
					$aResult[]=$oSchedule;
				}
			}
		}
		return $aResult;

	}
	protected function getEmployeeGroupSchedule($employee){
		$aResult = array();
		$aSchedules = $this->getRepository('BoAdminBundle:Agenda')->getScheduleByDate($employee->getId(),new \DateTime(date("d-m-Y")));
		foreach($aSchedules as $oSchedule){
			if($oSchedule->getIdgroup()>0){ 
				$oGroup = $this->getRepository('BoAdminBundle:Group')->find($oSchedule->getIdgroup());
				if($this->isInprogress($oGroup)){
					$aResult[]=$oSchedule;
				}
			}
		}
		return $aResult;

	}
	//get teacher schedule for many contract, receive as parameters an array of contracts and object of employee
	protected function getCTSByContract($aContract, $oEmployee){
		$aCTS = array();
		foreach($aContract as $oContract){
			$teacherschedule = $this->getContractTeacherSchedule($oEmployee,$oContract);
			if(isset($teacherschedule[0]))$aCTS[$oContract->getId()] = $teacherschedule[0];
		}
		return $aCTS;
	}
	//get teacher schedule for many contract, receive as parameters an array of contracts and object of employee
	protected function getGTSByGroup($aGroup, $oEmployee){
		$aGTS = array();
		foreach($aGroup as $oGroup){
			$teacherschedule = $this->getGroupTeacherSchedule($oEmployee,$oGroup);
			if(isset($teacherschedule[0]))$aCTS[$oGroup->getId()] = $teacherschedule[0];
		}
		return $aGTS;
	}
	protected function existTsForThisDay($employee){
		$today = new \DateTime(date("d-m-Y"));
		$em = $this->getDoctrine()->getManager();
		$aGroup = $this->getGroupsBy($employee);
		$aContract = $this->getContractsBy($employee);
		$aExistTsGroup = $em->getRepository('BoAdminBundle:Timesheet')->getExistTsGroup($aGroup,$employee,$today);
		$aExistTsContract = $em->getRepository('BoAdminBundle:Timesheet')->getExistTsContract($aContract,$employee,$today);	
		if(count($aGroup)==count($aExistTsGroup) and count($aContract)==count($aExistTsContract)) return 1;
		return 0;
	}
	//return array of all contracts for which there are no timesheet 
	//with parameter employee entity
	protected function getContractWithoutTs($oEmployee){
		$em = $this->getDoctrine()->getManager();
		$aResult = array();
		$today = new \DateTime(date("d-m-Y"));
		$aContracts = $this->getContractsBy($oEmployee);
		$aExistTsContract = $em->getRepository('BoAdminBundle:Timesheet')->getExistTsContract($aContracts,$oEmployee,$today);
		foreach($aContracts as $oContract){
			//if it exists ts on this contract for this emplpoyee
			if(isset($aExistTsContract[$oContract->getId()])) continue;
			$aResult[] = $oContract;
		}
		return $aResult;
	}
	//return array of all groups for which there are no timesheet 
	//with parameter employee entity
	protected function getGroupWithoutTs($oEmployee){
		$em = $this->getDoctrine()->getManager();
		$aResult = array();
		$today = new \DateTime(date("d-m-Y"));
		$aGroup = $this->getGroupsBy($oEmployee);
		$aExistTsGroup = $em->getRepository('BoAdminBundle:Timesheet')->getExistTsGroup($aGroup,$oEmployee,$today);
		foreach($aGroup as $oGroup){
			//if it exists ts on this group for this emplpoyee
			if(isset($aExistTsGroup[$oGroup->getId()])) continue;
			$aResult[] = $oGroup;
		}
		return $aResult;
	}
	//aHolder return a array like this : 
	//Array ( [0] => Array ( [0] => id teacher 1 [1] => Teacher 1 name ) [1] => Array ( [0] => id teacher 2 [1] => Teacher 2 name ) )
	protected function getHolders($oContract){
		$aHolders=$this->getPersistHolder($oContract->getEmployee());
		if(count($aHolders)==0){
			//Récupérer les titulaires du groupe de ce contrat
			$aHolders=$this->getPersistHolder($this->getGroupHolder($oContract));
		} 
		return $aHolders;
	}
	//Get teacher of a group
	protected function getGroupHolder($oContract){
		if($oContract) $oGroup = $oContract->getGroup();
		if($oGroup) return $oGroup->getEmployee();
		return array();
	}
	//Get teacher of a group
	protected function getGroupHolderBis($oGroup){
		if($oGroup) return $oGroup->getEmployee();
		return array();
	}
    protected function getPersistHolder($aPHolders)
    {
		$aResult=array();
		foreach($aPHolders as $oHolder){
			$aResult[] = array($oHolder->getId(),$oHolder->getFirstname()." ".$oHolder->getname()." (".$this->formatCollection($oHolder->getTypecontract()).")"); 
		}
        return $aResult;
    }
	protected function getSubstitutionHolder($oSubstitution){
        $em = $this->getDoctrine()->getManager();
		$oEmployee = $em->getRepository('BoAdminBundle:Employee')->find($oSubstitution->getIdholder());		
		return $oEmployee->getFirstname()." ".$oEmployee->getname();
	}
	protected function getPPByMonthAndYear($sMonth,$iYear){
        $em = $this->getDoctrine()->getManager();
		$aPP = $em->getRepository('BoAdminBundle:PeriodPay')->findBy(array('month'=>$sMonth,'year'=>$iYear));
		if(isset($aPP[0])) return $aPP[0];
		return null;
	}
	protected function getRepository($bundle,$name=null){
		if($name!=null) $sEntity = sprintf("%s:%s",$bundle,$name);
		else $sEntity = $bundle;
		$em = $this->getDoctrine()->getManager();
		return $em->getRepository($sEntity);
	}
	protected function getEmptyRoom(){
		$em = $this->getDoctrine()->getManager();
		$aResult = array();
		$aLocal = $em->getRepository('BoAdminBundle:Local')->getAvailableByStatus();
		$em = $this->getDoctrine()->getManager();
		foreach($aLocal as $oLocal){
			if($this->isEmptyRoom($oLocal)==1){
				$aResult[]=$oLocal;
			}
		}
		return $aResult;
	}
	protected function updateEmptyLocal(){
		$aLocal = $this->getEmptyRoom();
		foreach($aLocal as $oLocal){
			$this->freeLocal($oLocal);
		}
		return true;
	}
	protected function updateUpcomingLocal(){
		$em = $this->getDoctrine()->getManager();
		$aLocal = $em->getRepository('BoAdminBundle:Local')->getUpcomingBug();
		foreach($aLocal as $oLocal){
			$this->updateStatusByLocal($oLocal);
		}
		return true;
	}
	protected function updateAllLocal(){
		$this->updateEmptyLocal();
		$this->updateUpcomingLocal();
		return true;
	}
	protected function getWeekDays($month,$year){
		$aResult = array();
		for($i=1;$i<32;$i=$i+1){
			$day = date("N",mktime(0, 0, 0, $month, $i, $year));
			$oDate = new \DateTime($year."-".$month."-".$i);
			if($oDate->format("m")==$month){
				$aResult[$i]=($day==6 or $day==7)?0:1;
			}else{
				$aResult[$i]=0;
			}
		}
		return $aResult;		
	}
	protected function getTsDateAuthorized($oEmployee){
		//$em = $this->getDoctrine()->getManager();
		$bRes = 0;
		$param = $this->getParam("timesheet_date_override",17);
		if($param==1 or $oEmployee->getTsdate()==1) $bRes=1;
		return $bRes;
	}
	protected function getTsTime($oTs,$option){
		if($option=="am"){
			return $this->getRealTime($this->getDiffEndStart($oTs->getEndam(),$oTs->getStartam()));
		}else{
			return $this->getRealTime($this->getDiffEndStart($oTs->getEndpm(),$oTs->getStartpm()));
		}
		return null;
	}
	protected function getMonths(){
		$aResult = array();
		$aMonths = range(1,12);
		foreach($aMonths as $month){
			if(strlen($month)==1) $month="0".$month;
			$aResult[$month]=$month;
		}
		return $aResult;
	}
	protected function setTsAmOrPM($oTs){
		if($this->getTsTime($oTs,"am")>0 and $this->getTsTime($oTs,"pm")>0)  $oTs->setAmorpm("ALL");
		elseif($this->getTsTime($oTs,"am")>0) $oTs->setAmorpm("AM");
		elseif($this->getTsTime($oTs,"pm")>0) $oTs->setAmorpm("PM");
		return $oTs;		
	}
	protected function getTsForContractEmployee($oContract,$oEmployee){
		$em = $this->getDoctrine()->getManager();
		$aResult = array();
		$aTimesheet = $em->getRepository('BoAdminBundle:Timesheet')->getTsForContractEmployee($oContract,$oEmployee);
		foreach($aTimesheet as $oTs){
			$aResult[] = $oTs->getDdate()->format("Y-m-d");
		}
		return $aResult;
	}
	protected function getTsForGroupEmployee($oGroup,$oEmployee){
		$em = $this->getDoctrine()->getManager();
		$aResult = array();
		$aTimesheet = $em->getRepository('BoAdminBundle:Timesheet')->getTsForGroupEmployee($oGroup,$oEmployee);
		foreach($aTimesheet as $oTs){
			$aResult[] = $oTs->getDdate()->format("Y-m-d");
		}
		return $aResult;
	}
	protected function formatTsDate($aTsdate){
		$sRes = "";
		foreach($aTsdate as $ddate){
			$sRes = $sRes.$ddate.',';
		}
		$sRes = substr($sRes,0,-1);
		return $sRes;
	}
	//retourne les unités de charge en heure pour les cp suivant le champs
	protected function getChargeParamter(){
		$aResult = array();
		$em = $this->getDoctrine()->getManager();
		$aField = $em->getRepository('BoAdminBundle:Workfields')->findBy(array(),array('wfname' => 'asc'));
		foreach($aField as $oField){
			$aResult[$oField->getId()]=$oField->getChargescale();
		}
		return $aResult;
	}
	protected function isFullTime($oContract){
		if($oContract->getTypetime()=="Full Time") return true;
		return false;
	}
	protected function isPartTime($oContract){
		if($oContract->getTypetime()=="Part Time") return true;
		return false;
	}
	protected function getCpChargeByEmployee($oEmployee){
		$em = $this->getDoctrine()->getManager();
		$oRepContract = $em->getRepository('BoAdminBundle:Contracts');
		$aContracts = $oRepContract->findBy(array('advisor'=>$oEmployee,'status'=>1));
		return $this->getCpCharge($aContracts);
	}
	protected function updateAdvisorCharge($oEmployee){
		$res=0;
		$em = $this->getDoctrine()->getManager();
		$aCharge = $this->getCpChargeByEmployee($oEmployee);
		$aAdvisors = $em->getRepository('BoAdminBundle:Advisors')->findBy(array('advisor'=>$oEmployee));
		if(isset($aAdvisors[0]) and $oAdvisor=$aAdvisors[0]){
			if(isset($aCharge['hour'])){
				$oAdvisor->setHourlycharge($aCharge['hour']);
			}
			if(isset($aCharge['percent'])){
				$oAdvisor->setPercentcharge($aCharge['percent']);
			}
			$res = $this->updateEntity($oAdvisor);		
		}
		return $res; 
	}
	protected function updateAllAdvisorCharge(){
		$em = $this->getDoctrine()->getManager();
		$aAdvisors = $em->getRepository('BoAdminBundle:Advisors')->findAll();
		
		foreach($aAdvisors as $oAdvisor){
			$oEmployee = $oAdvisor->getAdvisor();
			if($oEmployee){
				$res = $this->updateAdvisorCharge($oEmployee);
			}					
		}
		return;
	}
	protected function getCpCharge($aContracts){
		$iNf1=$iNf2=$iNf7=$iPft=$iNf8=$iNf9b=$other=0;
		$aNG1 = $aNG2 = array();

		foreach($aContracts as $contract){
			if($this->getWorkfields($contract)!=null and $this->getWorkfields($contract)=="Field 1"){
				if($contract->getGroup()==null) continue;
				if(isset($aNG1[$contract->getGroup()->getId()])) continue;
				$aNG1[$contract->getGroup()->getId()] = $contract->getGroup()->getName();
			}elseif($this->getWorkfields($contract)!=null and $this->getWorkfields($contract)=="Field 2"){
				if($contract->getGroup()==null) continue;
				if(isset($aNG2[$contract->getGroup()->getId()])) continue;
				$aNG2[$contract->getGroup()->getId()] = $contract->getGroup()->getName();				
			}elseif($this->getWorkfields($contract)!=null and $this->getWorkfields($contract)=="Field 7"){
				$iNf7=$iNf7+1;
			}elseif($this->getWorkfields($contract)!=null and $this->getWorkfields($contract)=="Field 8"){
				$iNf8=$iNf8+1;
			}elseif($this->isFullTime($contract)==true){
				$iPft=$iPft+1;
			}elseif($this->getWorkfields($contract)!=null and $this->getWorkfields($contract)=="Field 9B") $iNf9b=$iNf9b+1;
			else $other=$other+1;
		}
		$iNf1 = count($aNG1);
		$iNf2 = count($aNG2);
		$aWf = $this->getChargeParamter();
		if($aWf!=null){
			$charge = ($iNf1*$aWf[1])+($iNf2*$aWf[1])+($iNf7*$aWf[3])+($iNf8*$aWf[3])+($iPft*$aWf[3])+($iNf9b*$aWf[6])+($other*$aWf[6]);
			$iPercent = ($charge*100)/35;			
		}else{
			$charge = $iPercent = 0;
		}
		return array('hour'=>$charge,'percent'=>$iPercent,'field7'=>$iNf7,'field8'=>$iNf8,'pft'=>$iPft,'field1'=>$iNf1,'field2'=>$iNf2,'field9b'=>$iNf9b,'other'=>$other);		
	}
	protected function getDetailCharge($aCharge,$aParam){
		if(isset($aCharge['field7']) and $aCharge['field7']!=0){
			$fTotal = $aCharge['field7']*$aParam[3];
			$aResult[] = array('label'=>'7','number'=>$aCharge['field7'],'param'=>$aParam[3],'total'=>$fTotal); 
		}
		if(isset($aCharge['field8']) and $aCharge['field8']!=0){
			$fTotal = $aCharge['field8']*$aParam[3];
			$aResult[] = array('label'=>'8','number'=>$aCharge['field8'],'param'=>$aParam[3],'total'=>$fTotal); 
		}
		if(isset($aCharge['field1']) and $aCharge['field1']!=0){
			$fTotal = $aCharge['field1']*$aParam[1];
			$aResult[] = array('label'=>'1','number'=>$aCharge['field1'],'param'=>$aParam[1],'total'=>$fTotal); 
		}
		if(isset($aCharge['field2']) and $aCharge['field2']!=0){
			$fTotal = $aCharge['field2']*$aParam[1];
			$aResult[] = array('label'=>'2','number'=>$aCharge['field2'],'param'=>$aParam[1],'total'=>$fTotal); 
		}
		if(isset($aCharge['pft']) and $aCharge['pft']!=0){
			$fTotal = $aCharge['pft']*$aParam[3];
			$aResult[] = array('label'=>'Priv. FT','number'=>$aCharge['pft'],'param'=>$aParam[3],'total'=>$fTotal); 
		}
		if(isset($aCharge['field9b']) and $aCharge['field9b']!=0){
			$fTotal = $aCharge['field9b']*$aParam[6];
			$aResult[] = array('label'=>'9B','number'=>$aCharge['field9b'],'param'=>$aParam[6],'total'=>$fTotal); 
		}
		if(isset($aCharge['other']) and $aCharge['other']!=0){
			$fTotal = $aCharge['other']*$aParam[6];
			$aResult[] = array('label'=>'Others','number'=>$aCharge['other'],'param'=>$aParam[6],'total'=>$fTotal); 
		}
		return $aResult;
	}
	protected function getAllOutCharged(){
		$aResult = array();
		$em = $this->getDoctrine()->getManager();
		$aAdvisors = $em->getRepository('BoAdminBundle:Advisors')->findAll();	
		foreach($aAdvisors as $oAdvisor){
			$oEmployee = $oAdvisor->getAdvisor();
			$adminhour = ($oAdvisor->getAdminhour()==0.00 or $oAdvisor->getAdminhour()==null)?35:$oAdvisor->getAdminhour();
			if($oEmployee){
				$this->updateAdvisorCharge($oEmployee);
				$bool = ($oAdvisor->getHourlycharge()>$adminhour)?1:0;
				$aResult[] = array($oEmployee->getId(),$bool);
			}					
		}
		return $aResult;
	}
	//Check if there exist a timesheet for the employee and the contract and the date given as parameters
	protected function existTsContract($oContract,$oEmployee,$oDate){
		$em = $this->getDoctrine()->getManager();
		$oRepTs = $em->getRepository('BoAdminBundle:Timesheet');
		return $oRepTs->existTsContract($oContract,$oEmployee,$oDate);
	}
	//Check if there exist a timesheet for the employee and the group and the date given as parameters
	protected function existTsGroup($oGroup,$oEmployee,$oDate){
		$em = $this->getDoctrine()->getManager();
		$oRepTs = $em->getRepository('BoAdminBundle:Timesheet');
		return $oRepTs->existTsGroup($oGroup,$oEmployee,$oDate);
	}
	protected function getAgendaTime(){
		$aResult = array();
		$aTime = array('07:00','07:15','07:30','07:45','08:00','08:15','08:30','08:45','09:00','09:15','09:30','09:45','10:00','10:15','10:30','10:45','11:00','11:15','11:30','11:45','12:00','12:15','12:30','12:45','13:00','13:15','13:30','13:45','14:00','14:15','14:30','14:45','15:00','15:15','15:30','15:45','16:00','16:15','16:30','16:45','17:00','17:15','17:30','17:45','18:00','18:15','18:30','18:45','19:00','19:15','19:30','19:45');
		foreach($aTime as $sTime){
			$aResult[$sTime] = $this->formatTime($sTime);
		}
		return $aResult; 
	}
	protected function getAmDaySubstitution($amhour,$employee,$oSubstitution,$oDate){
		$em = $this->getDoctrine()->getManager();	
		$sAdvisor=$room=$idgroup=$idcontract=$etsc=$etsg=null;
		$aResult = array();	
		//echo $oDate->format("d-m-Y")."<br>";
		if($oSubstitution->getIdcontract()>0){ 
			$oContract = $em->getRepository('BoAdminBundle:Contracts')->find($oSubstitution->getIdcontract());
			//get student name if the contract is not a group's contract else get group name
			if($oContract->getGroup()!=null){
				$student = $oContract->getGroup()->getName();
			}else{
				$student = $oSubstitution->getStudent();
				if($student==null) $student = $this->getStudentsBy($oContract);
			}
			//get local data : the campus and the room name
			$aLocal = $oContract->getLocal();
			if(isset($aLocal[0]) and $oLocal=$aLocal[0]) $room = $oLocal->getCampus()." ".$oLocal->getReference(); 
			elseif($oContract->getAdresse()){
				$room = $oContract->getAdresse();
			}
			//get advisor fullname
			if($oContract->getAdvisor()) $sAdvisor=$oContract->getAdvisor()->getFirstname()." ".$oContract->getAdvisor()->getName();
			$idcontract=$oContract->getId();
			$etsc = $this->existTsContract($oContract,$employee,$oDate);
			//echo $oContract->getId()."<br>";
			//echo "cont:".$etsc."<br>";
		}elseif($oSubstitution->getIdgroup()>0){
			$oGroup = $em->getRepository('BoAdminBundle:Group')->find($oSubstitution->getIdgroup());
			$student = "le groupe ".$oSubstitution->getStudent();
			if($student==null){
				if($oGroup and $oGroup->getName()) $student = "le groupe".$oGroup->getName();
			}
			//get local data : the campus and the room name
			$aLocal = $oGroup->getLocal();
			if(isset($aLocal[0]) and $oLocal=$aLocal[0]) $room = $oLocal->getCampus().", local ".$oLocal->getReference(); 
			//get advisor fullname
			if($oGroup->getAdvisor()) $sAdvisor=$oGroup->getAdvisor()->getFirstname()." ".$oGroup->getAdvisor()->getName();
			$idgroup=$oGroup->getId();	
			$etsg = $this->existTsGroup($oGroup,$employee,$oDate);
			echo "group:".$etsg."<br>";
		}
		$sLibAm = $this->getAmEventDesc($oSubstitution,$employee,$student,$room,$sAdvisor,2,$oDate);
		return array('label'=>$sLibAm,'hour'=>$amhour,'option'=>2,'idcontract'=>$idcontract,'idgroup'=>$idgroup,'etsc'=>$etsc,'etsg'=>$etsg,'idsubs'=>$oSubstitution->getId());
	}
	protected function getPmDaySubstitution($pmhour,$employee,$oSubstitution,$oDate){
		$em = $this->getDoctrine()->getManager();
		$sAdvisor=$room=$idgroup=$idcontract=$etsc=$etsg=null;
		$aResult = array();	
		if($oSubstitution->getIdcontract()>0){ 
			$oContract = $em->getRepository('BoAdminBundle:Contracts')->find($oSubstitution->getIdcontract());
			//get student name if the contract is not a group's contract else get group name
			if($oContract->getGroup()!=null){
				$student = $oContract->getGroup()->getName();
			}else{
				$student = $oSubstitution->getStudent();
				if($student==null) $student = $this->getStudentsBy($oContract);
			}
			//get local data : the campus and the room name
			$aLocal = $oContract->getLocal();
			if(isset($aLocal[0]) and $oLocal=$aLocal[0]) $room = $oLocal->getCampus()." ".$oLocal->getReference(); 
			elseif($oContract->getAdresse()){
				$room = $oContract->getAdresse();
			}
			//get advisor fullname
			if($oContract->getAdvisor()) $sAdvisor=$oContract->getAdvisor()->getFirstname()." ".$oContract->getAdvisor()->getName();
			$idcontract=$oContract->getId();
			$etsc = $this->existTsContract($oContract,$employee,$oDate);
		}elseif($oSubstitution->getIdgroup()>0){
			$oGroup = $em->getRepository('BoAdminBundle:Group')->find($oSubstitution->getIdgroup());
			$student = "le groupe ".$oSubstitution->getStudent();
			if($student==null){
				if($oGroup and $oGroup->getName()) $student = "le groupe".$oGroup->getName();
			}
			//get local data : the campus and the room name
			$aLocal = $oGroup->getLocal();
			if(isset($aLocal[0]) and $oLocal=$aLocal[0]) $room = $oLocal->getCampus().", local ".$oLocal->getReference(); 
			//get advisor fullname
			if($oGroup->getAdvisor()) $sAdvisor=$oGroup->getAdvisor()->getFirstname()." ".$oGroup->getAdvisor()->getName();
			//get the group id for the creation timesheet link on the agenda
			$idgroup=$oGroup->getId();	
			//Check if exist a timesheet for this date for the group			
			$etsg = $this->existTsGroup($oGroup,$employee,$oDate);			
		}
		$sLibPm = $this->getPmEventDesc($oSubstitution,$employee,$student,$room,$sAdvisor,2,$oDate);	
		return array('label'=>$sLibPm,'hour'=>$pmhour,'option'=>2,'idcontract'=>$idcontract,'idgroup'=>$idgroup,'etsc'=>$etsc,'etsg'=>$etsg,'idsubs'=>$oSubstitution->getId());
	}
	protected function getAmDaySchedule($amhour,$employee,$oSchedule,$oContract,$oGroup,$sStatusAbsence,$oDate,$sStudentAbsence){
		$sAdvisor=$room=$idgroup=$idcontract=$etsc=$etsg=null;
		$aResult = array();
		//echo $oDate->format("d-m-Y")."<br>";
		if($oGroup!=null){
			$student = "le groupe ".$oGroup->getName();
			//get local data : the campus and the room name
			$aLocal = $oGroup->getLocal();
			if(isset($aLocal[0]) and $oLocal=$aLocal[0]) $room = $oLocal->getCampus().", local ".$oLocal->getReference(); 
			//get advisor fullname
			if($oGroup->getAdvisor()) $sAdvisor=$oGroup->getAdvisor()->getFirstname()." ".$oGroup->getAdvisor()->getName();
			//get the group id for the creation timesheet link on the agenda
			$idgroup=$oGroup->getId();
			//Check if exist a timesheet for this date for the group
			$etsg = $this->existTsGroup($oGroup,$employee,$oDate);
		}elseif($oContract!=null){ 
			//get student name if the contract is not a group's contract else get group name
			if($oContract->getGroup()!=null){
				$student = $oContract->getGroup()->getName();
			}else{
				$student = $this->getStudentsBy($oContract);
			}
			//get local data : the campus and the room name
			$aLocal = $oContract->getLocal();
			if(isset($aLocal[0]) and $oLocal=$aLocal[0]) $room = $oLocal->getCampus()." ".$oLocal->getReference(); 
			elseif($oContract->getAdresse()){
				$room = $oContract->getAdresse();
			}
			//get advisor fullname
			if($oContract->getAdvisor()) $sAdvisor=$oContract->getAdvisor()->getFirstname()." ".$oContract->getAdvisor()->getName();
			$idcontract=$oContract->getId();	
			//Check if exist a timesheet for this date for contracts
			$etsc = $this->existTsContract($oContract,$employee,$oDate);
						
		}
		$sLibAm = $this->getAmEventDesc($oSchedule,$employee,$student,$room,$sAdvisor,1,null,$sStatusAbsence,$sStudentAbsence);
		$aReturn = array('label'=>$sLibAm,'hour'=>$amhour,'option'=>1,'idcontract'=>$idcontract,'idgroup'=>$idgroup,'etsc'=>$etsc,'etsg'=>$etsg);
		if($sStatusAbsence!=null) $aReturn['absence'] = 1;
		if($sStudentAbsence!=null) $aReturn['s_absence'] = 1;
		return $aReturn;
	}
	protected function getPmDaySchedule($pmhour,$employee,$oSchedule,$oContract,$oGroup,$sStatusAbsence,$oDate,$sStudentAbsence){
		$sAdvisor=$room=$idgroup=$idcontract=$etsc=$etsg=null;
		$aResult = array();
		if($oGroup!=null){
			$student = "le groupe ".$oGroup->getName();
			//get local data : the campus and the room name
			$aLocal = $oGroup->getLocal();
			if(isset($aLocal[0]) and $oLocal=$aLocal[0]) $room = $oLocal->getCampus().", local ".$oLocal->getReference(); 
			//get advisor fullname
			if($oGroup->getAdvisor()) $sAdvisor=$oGroup->getAdvisor()->getFirstname()." ".$oGroup->getAdvisor()->getName();	
			//get the group id for the creation timesheet link on the agenda			
			$idgroup=$oGroup->getId();
			//Check if exist a timesheet for this date, receive 1 if it exist, 0 else
			$etsg = $this->existTsGroup($oGroup,$employee,$oDate);
		}elseif($oContract!=null){ 
			//get student name if the contract is not a group's contract else get group name
			if($oContract->getGroup()!=null){
				$student = $oContract->getGroup()->getName();
			}else{
				$student = $this->getStudentsBy($oContract);
			}
			//get local data : the campus and the room name
			$aLocal = $oContract->getLocal();
			if(isset($aLocal[0]) and $oLocal=$aLocal[0]) $room = $oLocal->getCampus()." ".$oLocal->getReference(); 
			elseif($oContract->getAdresse()){
				$room = $oContract->getAdresse();
			}
			//get advisor fullname
			if($oContract->getAdvisor()) $sAdvisor=$oContract->getAdvisor()->getFirstname()." ".$oContract->getAdvisor()->getName();
			//get the contract id for the creation timesheet link on the agenda	
			$idcontract=$oContract->getId();
			//Check if exist a timesheet for this date for contracts
			$etsc = $this->existTsContract($oContract,$employee,$oDate);
		}
		$sLibPm = $this->getPmEventDesc($oSchedule,$employee,$student,$room,$sAdvisor,1,null,$sStatusAbsence,$sStudentAbsence);	
		$aReturn = array('label'=>$sLibPm,'hour'=>$pmhour,'option'=>1,'idcontract'=>$idcontract,'idgroup'=>$idgroup,'etsc'=>$etsc,'etsg'=>$etsg);
		if($sStatusAbsence!=null) $aReturn['absence'] = 1;
		if($sStudentAbsence!=null) $aReturn['s_absence'] = 1;
		return $aReturn;
	}
	private function getAmHour($oEntity){
		if($oEntity==null) return $oEntity;
		return 4*$this->getRealAmHour($oEntity);
	}
	private function getPmHour($oEntity){
		if($oEntity==null) return $oEntity;
		return 4*$this->getRealPmHour($oEntity);
	}
	protected function getRealAmHour($oEntity){
		if($oEntity==null) return $oEntity;
		return floatval($this->getDiffTime($oEntity->getStartam(),$oEntity->getEndam()));
	}
	protected function getRealPmHour($oEntity){
		if($oEntity==null) return $oEntity;
		return ($this->getDiffTime($oEntity->getStartpm(),$oEntity->getEndpm()));
	}
	//Get and return the sum of am hour and pm hour for training or schedule
	protected function getAllHour($oEntity){
		return $this->getRealAmHour($oEntity)+$this->getRealPmHour($oEntity);
	}
	//get hour for schedule when the length of schedule's array is equal 2
	protected function getFor2Schedules($aSchedule){
		return	($this->getAllHour($aSchedule[0])+$this->getAllHour($aSchedule[1]));	
	}
	protected function getScheduleByDate($employee,$oDate){
		$aResult = array();
		$oRepTsc = $this->getRepository('BoAdminBundle:Agenda');	
		$aSchedule = $oRepTsc->getScheduleByDate($employee->getId(),$oDate);	
		foreach($aSchedule as $oSchedule){			
			$aResult[] = $oSchedule;		
		}
		return $aResult;
	}
	private function getScheduleByPriority($aSchedule){
		$oWait=null;
		$aResult = array();
		foreach($aSchedule as $oSchedule){
			if(count($oSchedule->getAbsences())>0){
				$oWait= $oSchedule;
				continue;
			}
			if($oSchedule->getPriority()==1) $priority = 1;
			$aResult[] = $oSchedule;
		}
		if(!isset($priority) and $oWait!=null) $aResult[] = $oWait;
		return $aResult;
	}
	protected function generateAgenda($employee,$aTimes,$aDates){
		$em = $this->getDoctrine()->getManager();
		$oRepSubs = $em->getRepository('BoAdminBundle:Substitution');
		$aAgenda = array();
		foreach($aDates as $key=>$oDate){
			$aSubstitution = $oRepSubs->getByHolderAndDate($employee->getId(),$oDate);
			//echo $oDate->format("d-m-Y")."<br>";
			$aSchedule = $this->getScheduleByDate($employee,$oDate);
			$aAgenda=$this->getAmScheduled($employee,$oDate,$aSubstitution,$aSchedule,$key,$aAgenda);
			$aAgenda=$this->getPmScheduled($employee,$oDate,$aSubstitution,$aSchedule,$key,$aAgenda);
		}
		return $aAgenda;
	}
	private function getAmSubsAgenda($aAgenda,$aSubstitution,$employee,$oDate){
		$oSubstitution = $this->existSubs($aSubstitution,1,$employee->getId());
		$aAgenda[$key][$oSubstitution->getStartam()->format("H:i")] = $this->getAmDaySubstitution($this->getAmHour($oSubstitution),$employee,$oSubstitution,$oDate);
		$aAgenda[$key]['startam'] = $this->formatTime($oSubstitution->getStartam()->format("H:i"));
		$aAgenda[$key]['endam'] = $this->formatTime($oSubstitution->getEndam()->format("H:i"));
		return $aAgenda;
	}
	protected function getAmScheduled($employee,$oDate,$aSubstitution,$aSchedule,$key,$aAgenda){
		if(count($aSchedule)==0 and count($aSubstitution)>0 and $this->existSubs($aSubstitution,1,$employee->getId()) and $this->isWeekend($oDate)==false){
			$aAgenda=$this->getAmSubsAgenda($aAgenda,$aSubstitution,$employee,$oDate);								
		}elseif(count($aSchedule)>0){
			$aSchedule = $this->getScheduleByPriority($aSchedule);
			//echo "n:".count($aSchedule)."<br>";
			foreach($aSchedule as $oSchedule){
				$amhour = $this->getAmHour($oSchedule);	
				//echo $amhour."<br>";
				$oContract = $oSchedule->getContracts();
				//if($oContract) echo $oContract->getId()."<br>";
				$oGroup = $oSchedule->getGroup();
				//if($oGroup) echo $oGroup->getId()."<br>";
				if(isset($aSubstitution[0]) and $this->existSubs($aSubstitution,1,$employee->getId()) and $this->isWeekend($oDate)==false){
					$aAgenda=$this->getAmSubsAgenda($aAgenda,$aSubstitution,$employee,$oDate);					
				}elseif($amhour>0 and $this->existDaySchedule($oSchedule,$oDate)==1 and ($oContract!=null or $oGroup!=null)){
					//vérifier s'il y a chevauchement en AM, retourne false s'il n'y a pas chevauchement ou true sinon
					$overlap = $this->checkAmOverlap($aAgenda,$oSchedule,$key);
					if($overlap==false){
						$aAgenda=$this->getAmSchAgenda($aAgenda,$employee,$oContract,$oGroup,$oSchedule,$oDate,$key,$amhour);			}
				}elseif($amhour>0 and $this->existDaySchedule($oSchedule,$oDate)==1 and $oDate<$this->getToday()){
					$aAgenda=$this->getAmSchAgenda($aAgenda,$employee,$oContract,$oGroup,$oSchedule,$oDate,$key,$amhour);
				}
			}			
		}
		return $aAgenda;
	}
	private function getAmSchAgenda($aAgenda,$employee,$oContract,$oGroup,$oSchedule,$oDate,$key,$amhour){
		$sStatusAbsence = $this->getAbsenceForSchedule($employee,$oDate,1);
		$sStudentAbsence = $this->getAbsenceForStudent($oContract,$oDate,1);
		$aAgenda[$key][$oSchedule->getStartam()->format("H:i")] = $this->getAmDaySchedule($amhour,$employee,$oSchedule,$oContract,$oGroup,$sStatusAbsence,$oDate,$sStudentAbsence);
		$aAgenda[$key]['startam'] = $this->formatTime($oSchedule->getStartam()->format("H:i"));
		$aAgenda[$key]['endam'] = $this->formatTime($oSchedule->getEndam()->format("H:i"));		
		return $aAgenda;
	}
	private function getPmSchAgenda($aAgenda,$employee,$oContract,$oGroup,$oSchedule,$oDate,$key,$pmhour){
		//Check if there exists a absence for this day; option=1 then for AM and option=2 then for PM
		$sStatusAbsence = $this->getAbsenceForSchedule($employee,$oDate,2);
		$sStudentAbsence = $this->getAbsenceForStudent($oContract,$oDate,2);
		$aAgenda[$key][$oSchedule->getStartpm()->format("H:i")] = $this->getPmDaySchedule($pmhour,$employee,$oSchedule,$oContract,$oGroup,$sStatusAbsence,$oDate,$sStudentAbsence);
		$aAgenda[$key]['startpm'] = $this->formatTime($oSchedule->getStartpm()->format("H:i"));
		$aAgenda[$key]['endpm'] = $this->formatTime($oSchedule->getEndpm()->format("H:i"));	
		return $aAgenda;
	}
	private function checkAmOverlap($aAgenda,$oSchedule,$key){
		if(!isset($aAgenda[$key])) return false;
		if(!isset($aAgenda[$key]['startam']) or !isset($aAgenda[$key]['endam'])) return false;
		$endam = $oSchedule->getEndam()==null?$this->getTime():$oSchedule->getEndam();
		$startam = $oSchedule->getStartam()==null?$this->getTime():$oSchedule->getStartam();
		if($this->formatTime($endam->format("H:i"))<$aAgenda[$key]['startam'] or $this->formatTime($startam->format("H:i"))>$aAgenda[$key]['endam']) return false;
		if($oSchedule->getPriority()==1) return false;		
		return true;
	}
	private function getPmSubsAgenda($aAgenda,$aSubstitution,$employee,$oDate){
		$oSubstitution = $this->existSubs($aSubstitution,2,$employee->getId());
		$aAgenda[$key][$oSubstitution->getStartpm()->format("H:i")] = $this->getPmDaySubstitution($this->getPmHour($oSubstitution),$employee,$oSubstitution,$oDate);
		$aAgenda[$key]['startpm'] = $this->formatTime($oSubstitution->getStartpm()->format("H:i"));
		$aAgenda[$key]['endpm'] = $this->formatTime($oSubstitution->getEndpm()->format("H:i"));	
		return $aAgenda;
	}
	protected function getPmScheduled($employee,$oDate,$aSubstitution,$aSchedule,$key,$aAgenda){
		if(count($aSchedule)==0 and count($aSubstitution)>0 and $this->existSubs($aSubstitution,2,$employee->getId()) and $this->isWeekend($oDate)==false){
			$aAgenda = $this->getPmSubsAgenda($aAgenda,$aSubstitution,$employee,$oDate);							
		}elseif(count($aSchedule)>0){
			$aSchedule = $this->getScheduleByPriority($aSchedule);
			foreach($aSchedule as $oSchedule){
				$pmhour = $this->getPmHour($oSchedule);
				$oContract = $this->getScheduledContract($oSchedule,$oDate);
				$oGroup = $this->getScheduledGroup($oSchedule,$oDate);
				if(isset($aSubstitution[0]) and $this->existSubs($aSubstitution,2,$employee->getId()) and $this->isWeekend($oDate)==false){
					$aAgenda = $this->getPmSubsAgenda($aAgenda,$aSubstitution,$employee,$oDate);			
				}elseif($pmhour>0 and $this->existDaySchedule($oSchedule,$oDate)==1 and ($oContract!=null or $oGroup!=null)){
					//vérifier s'il y a chevauchement en AM, retourne false s'il n'y a pas chevauchement ou true sinon
					$overlap = $this->checkPmOverlap($aAgenda,$oSchedule,$key);
					//echo intval($overlap)."<br>";
					if($overlap==false){
						$aAgenda = $this->getPmSchAgenda($aAgenda,$employee,$oContract,$oGroup,$oSchedule,$oDate,$key,$pmhour);
					}
				}elseif($pmhour>0 and $this->existDaySchedule($oSchedule,$oDate)==1 and $oDate<$this->getToday()){
					$aAgenda = $this->getPmSchAgenda($aAgenda,$employee,$oContract,$oGroup,$oSchedule,$oDate,$key,$pmhour);
				}
			}
		}		
		return $aAgenda;
	}
	private function checkPmOverlap($aAgenda,$oSchedule,$key){
		if(!isset($aAgenda[$key])) return false;
		if(!isset($aAgenda[$key]['startpm']) or !isset($aAgenda[$key]['endpm'])) return false;
		$endpm = $oSchedule->getEndpm()==null?$this->getTime():$oSchedule->getEndpm();
		$startpm = $oSchedule->getStartpm()==null?$this->getTime():$oSchedule->getStartpm();
		if($this->formatTime($endpm->format("H:i"))<$aAgenda[$key]['startpm'] or $this->formatTime($startpm->format("H:i"))>$aAgenda[$key]['endpm']) return false;
		if($oSchedule->getPriority()==1) return false;
		return true;
	}
	//This function verify if there exists absence of the contract's holder for this day schedule
	//option=1 then for AM and option=2 then for PM
	private function getAbsenceForSchedule($employee,$oDate,$option){
		$status = null;
		$em = $this->getDoctrine()->getManager();
		$oRepAbs = $em->getRepository('BoAdminBundle:Absences');
		$aAbsence = $oRepAbs->getEmployeeAbsencesByDate($employee,$oDate);
		if(isset($aAbsence[0])){
			if(($aAbsence[0]->getAmorpm()=="AM" or $aAbsence[0]->getAmorpm()=="ALL") and $option==1) $sLabel = " absent ce matin";
			if(($aAbsence[0]->getAmorpm()=="PM" or $aAbsence[0]->getAmorpm()=="ALL") and $option==2) $sLabel = " absent cet après-midi";
			if(isset($sLabel)) $status = $employee->getFirstname()." ".$employee->getName().$sLabel;
		}
		return $status;
	}
	//This function verify if there exists absence of the student
	//option=1 then for AM and option=2 then for PM
	private function getAbsenceForStudent($oContract,$oDate,$option){
		$sLabel = null;
		if($this->getArrayZero($oContract->getStudents())==$sLabel) return $sLabel;
		$oStudent = $this->getArrayZero($oContract->getStudents());
		$aAbsence = $this->getStudentAbsByDate($oStudent,$oDate);
		//echo "Nb:".count($aAbsence)."<br>";
		if(isset($aAbsence[0]) and $oAbsence=$aAbsence[0]){
			$student = $this->getFullNameOf($oStudent);
			if(($oAbsence->getAmorpm()=="AM" or $oAbsence->getAmorpm()=="ALL") and $option==1) $sLabel = $student." absent ce matin";
			if(($oAbsence->getAmorpm()=="PM" or $oAbsence->getAmorpm()=="ALL") and $option==2) $sLabel = $student." absent cet après-midi";
		}
		
		return $sLabel;
	}
	protected function getStudentAbsByDate($oStudent,$oDate=null){
		if($oDate==null) $oDate = $this->getToday();
		$em = $this->getDoctrine()->getManager();
		$oRepAbs = $em->getRepository('BoAdminBundle:Absences');
		$aAbsences = $oRepAbs->getStudentsAbsencesByDate($oStudent,$oDate);
		return $aAbsences; 
	}
	protected function getEmployeeAbsByDate($oEmployee,$oDate=null){
		if($oDate==null) $oDate = $this->getToday();
		$em = $this->getDoctrine()->getManager();
		$oRepAbs = $em->getRepository('BoAdminBundle:Absences');
		$aAbsences = $oRepAbs->getEmployeeAbsencesByDate($oEmployee,$oDate);
		return $aAbsences; 
	}
	private function getStudentAbsBySchedule($oStudent,$oSchedule){
		$em = $this->getDoctrine()->getManager();
		$oRepAbs = $em->getRepository('BoAdminBundle:Absences');
		$aAbsences = $oRepAbs->getStudentsAbsencesBySchedule($oStudent,$oSchedule);
		return $aAbsences; 
	}
	private function getArrayZero($aStudents){
		if(count($aStudents)==1) return $aStudents[0];
		return null;
	}
	protected function getEmployeeTodayAbsences($employee){
		$today = new \DateTime(date("d-m-Y"));
		$em = $this->getDoctrine()->getManager();
		$oRepAbs = $em->getRepository('BoAdminBundle:Absences');
		return  $oRepAbs->getEmployeeAbsencesByDate($employee,$today);		
	}
	protected function getContratAbsences($employee,$aTSC){
		$aResult = array();
		$today = new \DateTime(date("d-m-Y"));
		$em = $this->getDoctrine()->getManager();
		$oRepAbs = $em->getRepository('BoAdminBundle:Absences');
		$aAbsence = $oRepAbs->getEmployeeAbsencesByDate($employee,$today);		
		foreach($aTSC as $oTSC){
			if($oTSC->getContracts() and count($aAbsence)==1){
				if($aAbsence[0]->getAmorpm()=="ALL" or ($aAbsence[0]->getAmorpm()=="AM" and $this->getRealAmHour($oTSC)>0) or ($aAbsence[0]->getAmorpm()=="PM" and $this->getRealPmHour($oTSC)>0)) $aResult[$oTSC->getContracts()->getId()]=1;

			}
		}
		return $aResult;
	}
	protected function getGroupAbsences($employee,$aTSC){
		$aResult = array();
		$today = new \DateTime(date("d-m-Y"));
		$em = $this->getDoctrine()->getManager();
		$oRepAbs = $em->getRepository('BoAdminBundle:Absences');
		$aAbsence = $oRepAbs->getEmployeeAbsencesByDate($employee,$today);	
		foreach($aTSC as $oTSC){
			if($oTSC->getIdgroup()>0 and count($aAbsence)==1){
				if($aAbsence[0]->getAmorpm()=="ALL" or ($aAbsence[0]->getAmorpm()=="AM" and $this->getRealAmHour($oTSC)>0) or ($aAbsence[0]->getAmorpm()=="PM" and $this->getRealPmHour($oTSC)>0)) $aResult[$oTSC->getIdgroup()]=1;
			}			
		}
		return $aResult;
	}
	private function existSubs($aSubstitution,$option,$idemployee){
		foreach($aSubstitution as $oSubstitution){
			if($this->getAmHour($oSubstitution)>0 and $option==1 and $idemployee==$oSubstitution->getIdsubstitute()) return $oSubstitution;
			if($this->getPmHour($oSubstitution)>0 and $option==2 and $idemployee==$oSubstitution->getIdsubstitute()) return $oSubstitution;
		}
		return false;
	}
	private function isWeekend($oDate){
		if($oDate->format("l")=="Saturday" or $oDate->format("l")=="Sunday") return true;
		else return false;
	}
	private function existDaySchedule($oSchedule,$oDate){
		if($oSchedule->getMonday()==1 and $oDate->format("l")=="Monday"){
			return 1;
		}
		if($oSchedule->getTuesday()==1 and $oDate->format("l")=="Tuesday"){
			return 1;
		}
		if($oSchedule->getWednesday()==1 and $oDate->format("l")=="Wednesday"){
			return 1;
		}
		if($oSchedule->getThursday()==1 and $oDate->format("l")=="Thursday"){
			return 1;
		}
		if($oSchedule->getFriday()==1 and $oDate->format("l")=="Friday"){
			return 1;
		}
		if($oSchedule->getSaturday()==1 and $oDate->format("l")=="Saturday"){
			return 1;
		}
		return 0;	
	}
	protected function getScheduledContract($oSchedule,$oDate=null){
		if($oDate==null) $oDate=$this->getToday();
		if($oSchedule==null) return $oSchedule;
		if($oSchedule->getContracts()==null) return null;
		$oContract =$oSchedule->getContracts();
		if(($oContract->getStatus()==1 or $oContract->getStatus()==2) and $oContract->getStartdate()<=$oDate and $oDate<=$oContract->getEnddate()){
			return $oContract;
		}
		return null;
	}
	protected function getScheduledGroup($oSchedule,$oDate=null){
		if($oDate==null) $oDate=$this->getToday();
		if($oSchedule==null) return $oSchedule;
		if($oSchedule->getGroup()==null) return null;
		$oGroup = $oSchedule->getGroup();
		if(($oGroup->getStatus()==1 or $oGroup->getStatus()==2) and $oGroup->getStartdate()<=$oDate and $oDate<=$oGroup->getEnddate()){
			return  $oGroup;
		}
		return null;
	}
	protected function getNmsoStatistic(){
		$aInprogress=$aUpcoming=$aArchived=array();
		$em = $this->getDoctrine()->getManager();
		$aWF = $em->getRepository('BoAdminBundle:Workfields')->findAll();
		$oRepContract = $em->getRepository('BoAdminBundle:Contracts');
		foreach($aWF as $oWF){
			$aInprogress[$oWF->getId()] = $oRepContract->getTotalByField($oWF->getId(),1);
			$aUpcoming[$oWF->getId()] = $oRepContract->getTotalByField($oWF->getId(),2);
			$aArchived[$oWF->getId()] = $oRepContract->getTotalByField($oWF->getId(),0);
		}
		return array($aInprogress,$aUpcoming,$aArchived);
	}
	protected function getPrices($enquiry){
		$em = $this->getDoctrine()->getManager();
		$oRep = $em->getRepository('BoAdminBundle:Prices');
		return $oRep->getPricesBy($enquiry);
	} 
	protected function getOtherPrices($enquiry){
		$em = $this->getDoctrine()->getManager();
		$oRep = $em->getRepository('BoAdminBundle:Prices');
		return $oRep->getPricesBy($enquiry);
	} 
	protected function getOrderRate($enquiry){
		$aPrices = $this->getPrices($enquiry);
		$startdate = $enquiry->getStartdate();
		$enddate = $enquiry->getEnddate();
		$hours = $resthour = intval($enquiry->getHours());
		$totalhours=0;
		$aResult=array();
		foreach($aPrices as $oPrice){

			if($startdate>=$oPrice->getStartdate() and $startdate<=$oPrice->getEnddate()){

				if($enddate>=$oPrice->getEnddate()){
					$endd = $oPrice->getEnddate();
				}else{
					$endd = $enddate;
				}
				$numberday = $this->getNumberDay($startdate,$endd);
				$hourperday = $enquiry->getHourperday();
				$realhour = $numberday*intval($hourperday);	
				$totalcost = $oPrice->getPrice()*$realhour;
				if($realhour>$resthour) $realhour = $resthour;
				
				if($totalhours<$hours){
					$aResult[] = array('startdate'=>$startdate,'enddate'=>$endd,'price'=>$oPrice->getPrice(),'hours'=>$realhour,'totalcost'=>$totalcost);
					$totalhours=$totalhours+$realhour;
				}
				$resthour = $hours - $totalhours;
			}
			if($enddate>=$oPrice->getEnddate()){
				$startdate=$this->getDatePlus($oPrice->getEnddate(),1);
			}
		}
		return $aResult;
	}
	protected function getInfoMail($label,$id){
		$em = $this->getDoctrine()->getManager();
		$mail = $em->getRepository('BoAdminBundle:Mails')->getInfoMail($label,$id);
		if(is_object($mail)) return $mail->getMessageen();
		if(isset($mail[0])) $mail[0]->getMessageen();
		return null;
	}
	protected function getParam($label,$id){
		$em = $this->getDoctrine()->getManager();
		return $em->getRepository('BoAdminBundle:Param')->getParam($label,$id);
	}
	protected function getFilename($path,$bordereau){
		return sprintf("%s/%s",$path,$bordereau);
	} 
	protected function updateStatusBy($entity,$status){
		$entity->setStatus($status);
		return $this->updateEntity($entity);			
	}
	protected function getActiveContract($aContract){
		$aResult = array();
		$today = new \DateTime(date("d-m-Y"));
		foreach($aContract as $oContract){
			if($this->isActiveContract($oContract)){
				$aResult[] = $oContract;
			}
		}
		return $aResult;
	}

	protected function isUpcomingContract($oContract){
		$today = new \DateTime(date("d-m-Y"));
		if($oContract->getStatus()==2 and $oContract->getStartdate()>=$today){
			return true;
		}
		return false;
	}
	protected function isActiveContract($oContract){
		$today = new \DateTime(date("d-m-Y"));
		if($oContract->getStatus()==1 and $oContract->getStartdate()<=$today and $today<=$oContract->getEnddate()){
			return true;
		}
		return false;
	}
	protected function getActiveGroup($aGroup){
		$aResult = array();
		$today = new \DateTime(date("d-m-Y"));
		foreach($aGroup as $oGroup){
			if($this->isActiveContract($oGroup)){
				$aResult[] = $oGroup;
			}
		}
		return $aResult;
	}
	protected function isActiveGroup($oGroup){
		$today = new \DateTime(date("d-m-Y"));
		if($oGroup->getStatus()==1 and $oGroup->getStartdate()<=$today and $today<=$oGroup->getEnddate()){
			return true;
		}
		return false;
	}
	protected function isUpcomingGroup($oGroup){
		$today = new \DateTime(date("d-m-Y"));
		if($oGroup->getStatus()==2 and $oGroup->getStartdate()>=$today){
			return true;
		}
		return false;
	}
	protected function getTeacherBy($oEmployee){
		if($oEmployee) return $oEmployee->getFirstname()." ".$oEmployee->getName();
		return null;
	}
	protected function getEmployeeById($idemployee){
		$em = $this->getDoctrine()->getManager();
		return $em->getRepository('BoAdminBundle:Employee')->find($idemployee);

	}
	protected function getContractForAbsence($oAbsence){
		$aResult = array();
		$oEmployee = $oAbsence->getEmployee();
		$aContracts = $this->getActiveContract($oEmployee->getContracts());
		foreach($aContracts as $oContract){
			$oTraining = $this->getContractTrainning($oContract);
			$aResult[] = $oContract;	
		}
		return $aResult;
	}
	protected function getGroupForAbsence($oAbsence){
		$aResult = array();
		$oEmployee = $oAbsence->getEmployee();
		$aGroups = $this->getActiveContract($oEmployee->getGroup());
		foreach($aGroups as $oGroup){
			$oTraining = $this->getContractTrainning($oGroup);
			$aResult[] = $oGroup;		
		}
		return $aResult;
	}
	protected function getContractTrainning($contract){
		$em = $this->getDoctrine()->getManager();
		$aTraining=$em->getRepository('BoAdminBundle:Training')->findBy(array('contracts'=>$contract));
		if(isset($aTraining[0])) return $aTraining[0];
		return null;
	}
	protected function getGroupTrainning($group){
		$em = $this->getDoctrine()->getManager();
		$aTraining=$em->getRepository('BoAdminBundle:Training')->findBy(array('idgroup'=>$group->getId()));
		if(isset($aTraining[0])) return $aTraining[0];
		return null;
	}
	protected function getBordereauNumber($enquiry){
		$em = $this->getDoctrine()->getManager();
		$oParam=$em->getRepository('BoAdminBundle:Param')->find(20);
		//bL is equal to 1 if language is english else 2
		$bL = $enquiry->getLanguage()=="French"?1:2;
		//bF is equal to 1 if language is english else 2
		$bF = $enquiry->getFtorpt()=="Full Time"?1:2;
		if($oParam){
			$number_order = $oParam->getValue();
			$oParam->setValue(intval($oParam->getValue())+1);
			$this->updateEntity($oParam);
		}else{
			$number_order = rand(100,1000);
		}
		return sprintf("%s%s%s%s",$number_order,date("Ymd"),$bL,$bF);
	}
	protected function getSoumisstionType(){
		return array('1' => 'NMSO', '2' => 'Bon de commande/Order form', '3' => 'Private contract french/Contrat privé français', '4' => 'Private contract english/Contrat privé anglais');
	}
	protected function getPdfPath($dir){
		return sprintf("%s/%s",$this->get('app.pdfpath_manager')->getPath(),$dir);
	}
	protected function getStudentBy($contract){
		$aStudent=$contract->getStudents();
		if(count($aStudent)==1 and $oStudent=$aStudent[0]) return $oStudent->getFirstname()." ".$oStudent->getName();
		$oGroup = $contract->getGroup();
		if($oGroup and $oGroup->getName()) return $oGroup->getName();
		return null;
	}
	protected function getStudentByContract($contract){
		$aStudent=$contract->getStudents();
		if(count($aStudent)==1 and $oStudent=$aStudent[0]) return $oStudent->getFirstname()." ".$oStudent->getName();
		$oGroup = $contract->getGroup();
		if($oGroup and $oGroup->getName()) return $oGroup->getName();
		return null;
	}
	protected function getRevisionBy($contract){
		$em = $this->getDoctrine()->getManager();
		$aRevision=$em->getRepository('BoAdminBundle:Revision')->findBy(array('idcontracts'=>$contract->getId()));
		if(isset($aRevision[0])) return $aRevision[0];
		return null;
	}
	protected function getEvalField($evaluation){
		if($evaluation->getLanguages()=="French"){
			if($evaluation->getTypetime()=="Full Time"){
				if($evaluation->getTypeoftraining()=="Individual") return 7;
				if($evaluation->getTypeoftraining()=="Group") return 1;
				if($evaluation->getTypeoftraining()=="semi-private") return 0;
			}else{
				return 9;
			}
		}
		if($evaluation->getLanguages()=="English"){
			if($evaluation->getTypetime()=="Full Time"){
				if($evaluation->getTypeoftraining()=="Individual") return 8;
				if($evaluation->getTypeoftraining()=="Group") return 2;
				if($evaluation->getTypeoftraining()=="semi-private") return 0;
			}else{
				return 0;
			}
		}
		
	}
	protected function getSoumissionType($enquiry){
		if($enquiry->getTypecontract()=="Service Contract") return 2;
		if($enquiry->getTypecontract()=="private" or $enquiry->getTypecontract()=="Private"){
			if($enquiry->getLanguage()=="French") return 3;
			else return 4;
		}
		return 1;
	}
	//Employee functions
	protected function getEmployeeGroup($employee){
		$aResult = array();
		$aGroup = $employee->getGroup();
		$today = new \DateTime(date("d-m-Y"));
		foreach($aGroup as $oGroup){
			if($oGroup->getStartdate()<=$today and $oGroup->getEnddate()>=$today) $aResult[] = $oGroup;			
		} 
		if(isset($aResult[0])) return $aResult;
		$aContract = $employee->getContracts();
		foreach($aContract as $oContract){
			if($oContract->getStatus()!=1) continue;
			if($oContract->getGroup() and $oContract->getWorkfields()->getId()==1 or $oContract->getWorkfields()->getId()==2){
				$oGroup = $oContract->getGroup();
				$aResult[] = $oGroup;
			}
		}
		return $aResult;
	}
	protected function getEmployeeClearance($employee){
		$em = $this->getDoctrine()->getManager();
		return $em->getRepository('BoAdminBundle:SecurityCote')->findBy(array('employee'=>$employee));
	}
	//get the employee's document : return array
	protected function getEmppjs($employee){
		$em = $this->getDoctrine()->getManager();
		return $em->getRepository('BoAdminBundle:Emppj')->findBy(array('employee'=>$employee));
	}
	//get the employee's admin hours : return array
	protected function getEmployeeAdHour($employee,$total=null,$offset=null){
		$em = $this->getDoctrine()->getManager();
		return $em->getRepository('BoAdminBundle:Tadmin')->findBy(array('employee'=>$employee),array('id' => 'desc'),$total,$offset);
	}		
	//get the employee's admin hours : return array
	protected function getEmployeeAbsences($employee,$total=null,$offset=null){
		$em = $this->getDoctrine()->getManager();
		if($total!=null){
			return $em->getRepository('BoAdminBundle:Absences')->findBy(array('employee'=>$employee),array('id' => 'desc'),$total,$offset);
		}
		return $em->getRepository('BoAdminBundle:Absences')->findBy(array('employee'=>$employee),array('id' => 'desc'));
	}
	protected function authorizedAdHour($employee){
		$aAdhours = $this->getEmployeeAdHour($employee);
		foreach($aAdhours as $oAdHours){
			$today = new \DateTime(date("d-m-Y"));
			if($oAdHours->getStartdate()<=$today and $today<=$oAdHours->getEnddate()){
				return 1;
			}
			return 0;
		}
	}
	protected function createAbsence($absence){
		$aContracts = $this->getContractForAbsence($absence);
		$aGroup = $this->getGroupForAbsence($absence);
		foreach($aContracts as $oContract){
			//Avoid to the system to bug with the existing line
			if($this->existEntity($oContract,$absence->getContracts())==true) continue;
			//get the schedule for the employee who did this absences
			$oSchedule = $this->getCScheduleByAbsence($absence->getEmployee(),$oContract);
			//echo $oSchedule->getAmorpm();
			if($oSchedule==null) continue;
			//take only the contract impacted
			if($absence->getAmorpm()=="ALL" or $oSchedule->getAmorpm()=="AM & PM" or $oSchedule->getAmorpm()=="ALL" or $oSchedule->getAmorpm()==$absence->getAmorpm()){ $absence->addContract($oContract);}
		}
		foreach($aGroup as $oGroup){
			//Avoid to the system to bug with the existing line
			if($this->existEntity($oGroup,$absence->getGroup())==true) continue;
			//get the schedule for the employee who did this absences
			$oSchedule = $this->getGScheduleByAbsence($absence->getEmployee(),$oGroup);
			if($oSchedule==null) continue;
			if($absence->getAmorpm()=="ALL" or $oSchedule->getAmorpm()=="AM & PM" or $oSchedule->getAmorpm()==$absence->getAmorpm()){ $absence->addGroup($oGroup);}
		}
		return $this->updateEntity($absence);
	}
	protected function getCpEmailByAbsence($absence){
		$emails = "";
		$aContracts = $this->getContractForAbsence($absence);
		$aGroup = $this->getGroupForAbsence($absence);
		foreach($aContracts as $oContract){
			$oAvisor = $oContract->getAdvisor();
			if($oAvisor and $oAvisor->getEmail()!=null) $emails = $emails.$oAvisor->getEmail().",";
		}
		foreach($aGroup as $oGroup){
			$oAvisor = $oGroup->getAdvisor();
			if($oAvisor and $oAvisor->getEmail()!=null) $emails = $emails.$oAvisor->getEmail().",";
		}
		return $emails;
	}
	protected function existSubstitution($absence){
		$aEcontract = $aEgroup = array();
		$aContract = $absence->getContracts();
		$aGroup = $absence->getGroup();
		foreach($aContract as $oContract){
			$aEcontract[$oContract->getId()] = $this->getRepository('BoAdminBundle:Substitution')->existContSubs($absence,$oContract->getId());
		}
		foreach($aGroup as $oGroup){
			$aEgroup[$oGroup->getId()] = $this->getRepository('BoAdminBundle:Substitution')->existGroupSubs($absence,$oGroup->getId());
		}
		return array($aEcontract,$aEgroup);
	}
	//return a tableau of bit to check if the add substitution must be displayed
	protected function getSBD($absence){
		$aEcontract = $aEgroup = array();
		$aContract = $absence->getContracts();
		$aGroup = $absence->getGroup();
		foreach($aContract as $oContract){
			$aEcontract[$oContract->getId()] = 1;
		}
		foreach($aGroup as $oGroup){
			$aEgroup[$oGroup->getId()] = 1;
		}
		return array($aEcontract,$aEgroup);
	}
	protected function getSubsButDisp($aSubstitution,$oAbsence){
		if(count($aSubstitution)==0) return $this->getSBD($oAbsence);
		$aDate = $this->getScheduleDate($aSubstitution);
if(isset($aDate['start']) and $aDate['start']==$oAbsence->getStartdate() and isset($aDate['end']) and $aDate['end']==$oAbsence->getEnddate()){
		return $this->checkAllSubs($aSubstitution,$oAbsence);
		}
		$aEcontract = $aEgroup = array();
		foreach($aSubstitution as $oSubstitution){
			$idcontract = $oSubstitution->getIdcontract();
			$idgroup = $oSubstitution->getIdgroup();
			if($idcontract!=null){
				$aEcontract[$idcontract]=$this->getSubsButBit($oSubstitution,$oAbsence,$idcontract);
			}elseif($idgroup!=null){
				$aEgroup[$idgroup]=$this->getSubsButBit($oSubstitution,$oAbsence,$idcontract,$idgroup);
			}
		}
		return array($aEcontract,$aEgroup);
	}
	private function getSubsButBit($oSubstitution,$oAbsence,$idcontract,$idgroup=null){
		if($oSubstitution->getStartdate()!=$oSubstitution->getEnddate())
		$subdiff = $this->getDiffDate($oSubstitution->getStartdate(),$oSubstitution->getEnddate());
		else $subdiff = 1;
		if($oAbsence->getStartdate()!=$oAbsence->getEnddate())
		$absdiff = $this->getDiffDate($oAbsence->getStartdate(),$oAbsence->getEnddate());
		else $absdiff = 1;
		if($subdiff<$absdiff){
			return 1;
		}else{
			$subhour = $this->getTotalHourBy($oSubstitution);
			if($idcontract!=null){
				$oContract = $this->getRepository('BoAdminBundle:Contracts')->find($idcontract);
				$oSchedule=$this->getCScheduleByAbsence($oAbsence->getEmployee(),$oContract);
			}elseif($idgroup!=null){
				$oGroup = $this->getRepository('BoAdminBundle:Group')->find($idgroup);
				$oSchedule=$this->getGScheduleByAbsence($oAbsence->getEmployee(),$oGroup);
			}
			if($oSchedule) $abshour = $this->getTotalHourBy($oSchedule);
			if(isset($abshour) and $subhour<$abshour){ 
				return 1;
			}
		}
		return 0;
	}
	//Verify if all the substitution cover the absence
	private function checkAllSubs($aSubstitution,$oAbsence){
		$aEcontract = $aEgroup = array();
		if($this->checkSameId($aSubstitution)==true){
			$sub_hour = $this->getHourSubstitution($aSubstitution);
			$oContract = $this->getContractFrom($aSubstitution);
			$oGroup = $this->getGroupFrom($aSubstitution);
			if($oAbsence and $oContract){
				$oSchedule = $this->getCScheduleByAbsence($oAbsence->getEmployee(),$oContract);
				if($oSchedule->getHourperday()==$sub_hour){
					$aEcontract[$oContract->getId()] = 0;
				}
			}
			if($oAbsence and $oGroup){
				$oSchedule = $this->getGScheduleByAbsence($oAbsence->getEmployee(),$oContract);
				if($oSchedule->getHourperday()==$sub_hour){
					$aEgroup[$oContract->getId()] = 0;
				}
			}
		}
		return array($aEcontract,$aEgroup);
	}
	//Check if all substitution are for the same contract or the same group
	private function checkSameId($aSubstitution){
		$aEcontract = $aEgroup = array();
		$count=count($aSubstitution);
		foreach($aSubstitution as $oSubstitution){
			$idcontract = $oSubstitution->getIdcontract();
			$idgroup = $oSubstitution->getIdgroup();
			if($idcontract!=null){
				$aEcontract[]=$idcontract;
			}elseif($idgroup!=null){
				$aEgroup[]=$idgroup;
			}
		}
		if(count($aEcontract)==$count or count($aEgroup)==$count){
			 return true;	
		}	
		return false;
	}
	//get date scheduled for the substitution
	private function getScheduleDate($aSubstitution){
		$aDates = array();
		foreach($aSubstitution as $oSubstitution){
			if(isset($aDates['start']) and $aDates['start']>$oSubstitution->getStartdate()){
				$aDates['start'] = $oSubstitution->getStartdate();
			}else{
				$aDates['start'] = $oSubstitution->getStartdate();
			}
			if(isset($aDates['end']) and $aDates['end']>$oSubstitution->getEnddate()){
				$aDates['end'] = $oSubstitution->getEnddate();
			}else{
				$aDates['end'] = $oSubstitution->getEnddate();
			}
	
		}
		return $aDates;
	}
	//Check if all substitution are for the same contract or the same group
	private function getHourSubstitution($aSubstitution){
		$hour = 0;
		foreach($aSubstitution as $oSubstitution){
			$hour=$hour+$oSubstitution->getHour();
		}
		return $hour;
	}
	//get contract from substitution
	private function getContractFrom($aSubstitution){
		foreach($aSubstitution as $oSubstitution){
			$idcontract = $oSubstitution->getIdcontract();
			if($idcontract!=null){
				return $this->getRepository('BoAdminBundle:Contracts')->find($idcontract);
			}
		}
		return null;
	}
	//get group from substitution
	private function getGroupFrom($aSubstitution){
		foreach($aSubstitution as $oSubstitution){
			$idgroup = $oSubstitution->getIdgroup();
			if($idgroup!=null){
				return $this->getRepository('BoAdminBundle:Group')->find($idgroup);
			}
		}
		return null;
	}
	//Get substitution by absence entity
	protected function getSusbByAbsence($absence){
		return $this->getRepository('BoAdminBundle:Substitution')->findBy(array('idabsence'=>$absence->getId()));
	}
	//Verify if the absence of day are covered
	//If 1 there are the substitution for all contract of the teacher absent
	protected function getAbsSubs($absences){
		$aResult = array();
		foreach($absences as $absence){
			//$nbcont = count($absence->getContracts())+count($absence->getGroup());
			$aSubstitution = $this->getSusbByAbsence($absence);
			if(count($aSubstitution)>0) $aResult[$absence->getId()] = 1;
			else $aResult[$absence->getId()] = 0;
		}
		return $aResult;
	}
	private function getAmEventDesc($oEntity,$employee,$student,$room,$sAdvisor,$option,$oDate=null,$sStatusAbsence=null,$sStudentAbsence=null){
		$sEventLib =  $oEntity->getStartam()->format("H:i")." - ".$oEntity->getEndam()->format("H:i")."<br>".$employee->getFirstname()." ".$employee->getName()." enseigne ".$student." au ".$room.", CP ".$sAdvisor;
		if($option==2) $sEventLib = $sEventLib."<br><br>".$employee->getFirstname()." ".$employee->getName()." remplace ".$this->getSubstitutionHolder($oEntity);
		if($sStatusAbsence!=null) $sEventLib = $sEventLib."<br><br>".$sStatusAbsence;
		if($sStudentAbsence!=null) $sEventLib = $sEventLib."<br><br>".$sStudentAbsence;
		return $sEventLib;
	}
	private function getPmEventDesc($oEntity,$employee,$student,$room,$sAdvisor,$option,$oDate=null,$sStatusAbsence=null,$sStudentAbsence=null){
		$sEventLib = $oEntity->getStartpm()->format("H:i")." - ".$oEntity->getEndpm()->format("H:i")."<br>".$employee->getFirstname()." ".$employee->getName()." enseigne ".$student." au ".$room.", CP ".$sAdvisor;
		if($option==2) $sEventLib = "<br><br>".$sEventLib." ".$employee->getFirstname()." ".$employee->getName()." remplace ".$this->getSubstitutionHolder($oEntity);
		if($sStatusAbsence!=null) $sEventLib = $sEventLib."<br><br>".$sStatusAbsence;
		if($sStudentAbsence!=null) $sEventLib = $sEventLib."<br><br>".$sStudentAbsence;
		return $sEventLib;		
	}
	protected function getGroupStatus(){
		return array('0'=>"Close", '1'=>"In progress", '2'=>"upcomming", '3'=>"outstanding", '4'=>"Cancel");
	}
	// update contrattype for group entity: group entity in parameters
	protected function updateContractTypeForGroup($oGroup){
		$aContract = $this->getContractByGroup($oGroup);
		if(isset($aContract[0]) and $oContract=$aContract[0] and $oGroup->getTypecontract()==null){
			$oTypeContract = $oContract->getTypecontract();
			$oGroup->setTypecontract($oTypeContract);
			return $this->updateEntity($oGroup);
		}
		return null;
	}
	// update contrattype for group entity -> group entity and contract entity
	protected function updateCTypeForGroup($oGroup,$oContract){
		if($oGroup==null or $oContract==null) return $oGroup;
		$oTypeContract = $oContract->getTypecontract();
		$oGroup->setTypecontract($oTypeContract);
		return $this->updateEntity($oGroup);
	}
	/*
		update status for group
		parameter: group entity
	*/
	protected function updateStatusForGroup($oGroup){
		$aContract = $this->getContractByGroup($oGroup);
		if(isset($aContract[0]) and $oContract=$aContract[0] and ($oContract->getStatus()==0 or $oContract->getStatus()==1 or $oContract->getStatus()==2)){
			$oGroup->setStatus($oContract->getStatus());
			return $this->updateEntity($oGroup);
		}
		return null;
	}
	/*
		update status for group
		parameters: group entity and contract entity
	*/
	protected function updateStatusForGroupBis($oGroup,$oContract){
		if($oGroup==null or $oContract==null) return $oGroup;
		$oGroup->setStatus($oContract->getStatus());
		return $this->updateEntity($oGroup);
	}
	/*
		update status and type contract for a group
		parameters: group entity and contract entity
	*/
	protected function updateStcForGroup($oGroup,$oContract){
		if($oGroup==null or $oContract==null) return $oGroup;
		$oTypeContract = $oContract->getTypecontract();
		$oGroup->setTypecontract($oTypeContract);
		$oGroup->setStatus($oContract->getStatus());
		return $this->updateEntity($oGroup);
	}
	protected function formatDate($aDates){
		$aFDates=array();
		foreach($aDates as $oDate){
			$aFDates[]=$this->get('translator')->trans($oDate->format("D"))." ".$oDate->format("d-m-Y");		
		}
		return $aFDates;
	}
	//update teacher schedule after a contract revision
	//return 1 if updating successful, 0 else
	protected function updateSchedule($oContract,$revision){
		$em = $this->getDoctrine()->getManager();
		$rep = $em->getRepository('BoAdminBundle:Agenda');
		if($oContract->getGroup() and $oContract->getWorkfields() and ($oContract->getWorkfields()->getId()==1 or $oContract->getWorkfields()->getId()==2)) return 0;
		$aSchedule = $rep->getScheduleForContractBis($oContract);
		foreach($aSchedule as $oSchedule){
			$oSchedule->setEnddate($revision->getEnddate());
			$this->updateEntity($oSchedule);
		}
		return 1;	
	}
	//Check if a contract is closed or archived
	//With the id contract as a parameter 
	protected function isArchived($oContract){
		if($oContract and $oContract->getStatus()==0) return true;
		return false;
	}
	//Check teacher availability : return 1 when teacher available 0 else
	public function getAvailability($oEmployee,$oContract){
		$em = $this->getDoctrine()->getManager();
		$aContract = $this->getContractsBy($oEmployee);
		foreach($aContract as $oContracts){
			echo "Contracts:<br>".$oContracts->getStartdate()->format("d-m-Y")." to ".$oContracts->getEnddate()->format("d-m-Y")."<br><br>" ;
		}
		$aSchedule = $em->getRepository('BoAdminBundle:Agenda')->getTScForContract($aContract,$oEmployee);	
		foreach($aSchedule as $oSchedule){
			echo "Schedule:<br>";
			echo $oSchedule->getStartdate()->format("d-m-Y")."<br>";
			echo $oSchedule->getEnddate()->format("d-m-Y")."<br>" ;
			echo $oSchedule->getStartam()->format("H:i")."<br>";
			echo $oSchedule->getEndam()->format("H:i")."<br>" ;
			echo $oSchedule->getStartpm()->format("H:i")."<br>";
			echo $oSchedule->getEndpm()->format("H:i")."<br><br>" ;
		}
		if(count($aContract)==0 and count($aSchedule)==0) return 1;
		$aTraining=$em->getRepository('BoAdminBundle:Training')->findBy(array('contracts'=>$oContract));	
		echo "Nouveau Contract:<br>".$oContract->getStartdate()->format("d-m-Y")." to ".$oContract->getEnddate()->format("d-m-Y")."<br>" ;
		echo "Training:<br>";
		echo $aTraining[0]->getStartam()->format("H:i")."<br>";
		echo $aTraining[0]->getEndam()->format("H:i")."<br>" ;
		echo $aTraining[0]->getStartpm()->format("H:i")."<br>";
		echo $aTraining[0]->getEndpm()->format("H:i")."<br><br>" ;
		exit(0);
	}
	protected function getHighEndAm($aAgenda){
		$higham = 12; 
		foreach($aAgenda as $aArray){
			if(isset($aArray['endam']) and $aArray['endam']>$higham) $higham=$aArray['endam'];
			/*
			foreach($aArray as $aTab){
				print_r($aTab);
			}
*/
		}
		return $higham;
	}
	protected function getAllScheduleBy($idemployee){
		$aResult = array();
		$today = new \DateTime(date("d-m-Y"));
		$aSchedule = $this->getScheduleByEmployee($idemployee);
		foreach($aSchedule as $oSchedule){
			if($this->isArchived($oSchedule->getContracts())==true) continue;
			if(($oSchedule->getStartdate()<=$today and $today<=$oSchedule->getEnddate()) or $oSchedule->getStartdate()>$today)
			$aResult[] = $oSchedule;
		}
		return $aResult;
	}
	protected function getScheduleWithIdBy($idemployee){
		$aResult = array();
		$today = new \DateTime(date("d-m-Y"));
		$aSchedule = $this->getScheduleByEmployee($idemployee);
		foreach($aSchedule as $oSchedule){
			if($this->isArchived($oSchedule->getContracts())==true) continue;
			if(($oSchedule->getStartdate()<=$today and $today<=$oSchedule->getEnddate()) or $oSchedule->getStartdate()>$today)
			$oContract = $oSchedule->getContracts();
			if($oContract) $aResult[$oContract->getId()] = $oSchedule;
		}
		return $aResult;
	}
	protected function getCurrentEmployeeSchedule($oEmployee){
		return $this->getCurrentScheduleBy($oEmployee->getId());
	} 
	protected function getAllEmployeeSchedule($oEmployee){
		return $this->getAllScheduleBy($oEmployee->getId());
	} 
	protected function getCurrentSchedule(){
		$aSchedule = $this->getCurrentScheduleBy($idmployee);
	}
	protected function getAllSchedule(){
		$aSchedule = $this->getAllScheduleBy($idmployee);
	}
	//Return true if the teacher is vailable and false else
	protected function isAvailable($idmployee,$teacherSchedule){
		$aSchedule = $this->getCurrentScheduleBy($idmployee);
		foreach($aSchedule as $oSchedule){
			if($oSchedule->getStartdate()>$teacherSchedule->getEnddate() or $teacherSchedule->getStartdate()>$oSchedule->getEnddate()) return true;
			elseif(($oSchedule->getStartam()>$teacherSchedule->getEndam() or $teacherSchedule->getStartam()>$oSchedule->getEndam()) and ($oSchedule->getStartpm()>$teacherSchedule->getEndpm() or $teacherSchedule->getStartpm()>$oSchedule->getEndpm())) return true;
			elseif($oSchedule->getMonday()!=$teacherSchedule->getMonday() and $oSchedule->getTuesday()!=$teacherSchedule->getTuesday()  and $oSchedule->getWednesday()!=$teacherSchedule->getWednesday()  and $oSchedule->getThursday()!=$teacherSchedule->getThursday()  and $oSchedule->getFriday()!=$teacherSchedule->getFriday()) return true;
			return false;
		}		
	}
	//Return true if the teacher is vailable and false else
	protected function isAvailableBis($idmployee,$oContract){
		$em = $this->getDoctrine()->getManager();
		$aTraining = $em->getRepository('BoAdminBundle:Training')->findBy(array('idcontracts'=>$oContract->getId()));
		$aSchedule = $this->getCurrentScheduleBy($idmployee);
		foreach($aSchedule as $oSchedule){
			if($oSchedule->getStartdate()>$teacherSchedule->getEnddate() or $teacherSchedule->getStartdate()>$oSchedule->getEnddate()) return true;
			elseif(($oSchedule->getStartam()>$teacherSchedule->getEndam() or $teacherSchedule->getStartam()>$oSchedule->getEndam()) and ($oSchedule->getStartpm()>$teacherSchedule->getEndpm() or $teacherSchedule->getStartpm()>$oSchedule->getEndpm())) return true;
			elseif($oSchedule->getMonday()!=$teacherSchedule->getMonday() and $oSchedule->getTuesday()!=$teacherSchedule->getTuesday()  and $oSchedule->getWednesday()!=$teacherSchedule->getWednesday()  and $oSchedule->getThursday()!=$teacherSchedule->getThursday()  and $oSchedule->getFriday()!=$teacherSchedule->getFriday()) return true;
			return false;
		}		
	}	
	protected function getActiveDay($oEntity){	
		return strval($oEntity->getMonday()).strval($oEntity->getTuesday()).strval($oEntity->getWednesday()).strval($oEntity->getThursday()).strval($oEntity->getFriday());
	}
	protected function isActiveStudent($oStudent){
		$aContracts = $this->getStudentContract($oStudent);
		return isset($aContracts[0])?1:0;
	}
	protected function getCurrentStudentContract($oStudent){
		$today = new \DateTime(date("d-m-Y"));
		$aContracts = $oStudent->getContracts();
		foreach($aContracts as $oContract){
			if($oContract->getStatus()==1 and ($oContract->getStartdate()<=$today and $today<=$oContract->getEnddate())){
				return $oContract;
			}
		}
		return null;		
	}
	protected function getStudentContract($oStudent){
		$aResult = array();
		$today = new \DateTime(date("d-m-Y"));
		$aContracts = $oStudent->getContracts();
		foreach($aContracts as $oContract){
			if(($oContract->getStatus()==1 or $oContract->getStatus()==2) and (($oContract->getStartdate()<=$today and $today<=$oContract->getEnddate()) or $today<=$oContract->getStartdate())){
				$aResult[] = $oContract;
			}
		}
		return	$aResult;
	}
	protected function getAvailableTeachers($absences){
		$aResult = $astudent = $aAvailability =  array();
		foreach($absences as $oAbsence){
			foreach($oAbsence->getContracts() as $oContract){
				foreach($oContract->getEmployee() as $oEmployee){
					$availability = $this->getAvailByAbs($oAbsence,$oEmployee); 
					if($availability!=null){
						$aAvailability[$oEmployee->getId()]= $availability;
						$astudent[$oEmployee->getId()]= $this->getStudentByAbs($oAbsence,$oContract);
						$aResult[] = $oEmployee;
					}
				}
			}
			foreach($oAbsence->getGroup() as $oGroup){
				foreach($oGroup->getEmployee() as $oEmployee){
					$availability = $this->getAvailByAbs($oAbsence,$oEmployee); 
					if($availability!=null){
						$aAvailability[$oEmployee->getId()]= $availability;	
						$astudent[$oEmployee->getId()]= $oGroup->getName();
						$aResult[] = $oEmployee;
					}
				}
			}

		}
		return array($aResult,$aAvailability,$astudent);
	}
	private function getAvailByAbs($oAbsence,$oEmployee){
		$today = $this->getToday();
		$oSubRep = $this->getRepository("BoAdminBundle:Substitution");
		$aSubstitution = $oSubRep->getByHolderAndDate($oEmployee->getId(),$today);
		$aSubAvail = $this->getSubAvail($aSubstitution);
		if($oAbsence->getAmorpm()=="ALL" and !isset($aSubAvail['am']) and !isset($aSubAvail['pm'])) return "AM & PM";
		elseif($oAbsence->getAmorpm()=="AM" and !isset($aSubAvail['pm'])) return "PM";
		elseif($oAbsence->getAmorpm()=="PM" and !isset($aSubAvail['am'])) return "AM";
		return null;
	}
	private function getStudentByAbs($oAbsence,$oContract){
		$oGroup = $oContract->getGroup();
		if($oGroup) return $oGroup->getName();
		$oStudent = $oAbsence->getStudents();
		if($oStudent) return $this->getFullnameOf($oStudent);
		return null;
	}
	private function getSubAvail($aSubstitution){
		$aSubAvail = array();
		foreach($aSubstitution as $oSubstitution){
			$ham = $this->getRealAmHour($oSubstitution);
			if($ham>0) $aSubAvail['am']=$ham;
			$hpm = $this->getRealPmHour($oSubstitution);
			if($hpm>0) $aSubAvail['pm']=$hpm;
		}
		return $aSubAvail;
	}
	protected function getContractStudents($aContracts){
		$aResult = array();
		foreach($aContracts as $oContract){
			foreach($oContract->getStudents() as $oStudent){
				$aResult[]=$oStudent;
			}
		}
		return $aResult;		
	}
	//Get active contract
	protected function getStudentActiveContract($student){
		$now = new \DateTime(date("d-m-Y"));
		$aContracts = $student->getContracts();
		foreach($aContracts as $oContract){
			if($oContract->getStatus()==1 and ($oContract->getStartdate()<=$now and $oContract->getEnddate()>=$now)){
				return $oContract;
			}			
		}
		return null;
	}
	//Get active and upcoming contracts
	protected function getStudentBothContract($student){
		$now = new \DateTime(date('d-m-Y'));
		if($student==null) return $student;
		$aContracts = $student->getContracts();
		foreach($aContracts as $oContract){
			if($oContract->getEnddate()>=$now){
				return $oContract;
			}			
		}
		return null;
	}
	protected function getAllActiveContract(){
		$aContracts = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Contracts')->getActiveContracts();
		return $aContracts;
	}
	protected function getExistTsForContract($oContract,$oEmployee,$oDate){
		return $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Timesheet')->getExistTsForContract($oContract,$oEmployee,$oDate);
	}
	protected function getExistTsForGroup($oGroup,$oEmployee,$oDate){
		return $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Timesheet')->getExistTsForGroup($oGroup,$oEmployee,$oDate);
	}
	protected function setIsGroup($oContract){
		if($this->isGroupContract($oContract)==true) $oContract->setIsgroup(true);
		else $oContract->setIsgroup(false);
		return $oContract;
	}
	public function getContractBySchedule($aSchedule){
		$em = $this->getDoctrine()->getManager();
		$today = new \DateTime(date("d-m-Y"));
		$aResult = array();
		foreach($aSchedule as $oSchedule){
			if($oSchedule->getIdcontracts()>0){
				$oContract = $em->getRepository('BoAdminBundle:Contracts')->find($oSchedule->getIdcontracts());
				$oEmployee = $em->getRepository('BoAdminBundle:Employee')->find($oSchedule->getIdemployee());
				$aTS = ($oContract and $oEmployee)?$this->getExistTsForContract($oContract,$oEmployee,new \DateTime(date('d-m-Y'))):array();
				if($oContract and $this->isGroupContract($oContract)==false and count($aTS)==0){
					if(isset($aResult[$oContract->getId()])) continue;
					if($oContract->getStatus()==1 and $oContract->getStartdate()<=$today and $oContract->getEnddate()>=$today) $aResult[$oContract->getId()] = $oContract;
				}
			}
		}
		return $aResult;	 	
	}
	public function getContractsBySchedule($oSchedule){
		return $this->getContractById($oSchedule->getIdcontracts());
	}
	public function getGroupByScheduleBis($oSchedule){
		return $this->getGroupById($oSchedule->getIdgroup());
	}
	//Get as parameter an array
	public function getGroupBySchedule($aSchedule){
		$em = $this->getDoctrine()->getManager();
		$today = new \DateTime(date("d-m-Y"));
		$aResult = array();
		foreach($aSchedule as $oSchedule){
			if($oSchedule->getIdgroup()>0){
				$oGroup = $em->getRepository('BoAdminBundle:Group')->find($oSchedule->getIdgroup());
				$oEmployee = $em->getRepository('BoAdminBundle:Employee')->find($oSchedule->getIdemployee());
				$aTS = ($oGroup and $oEmployee)?$this->getExistTsForGroup($oGroup,$oEmployee,new \DateTime(date('d-m-Y'))):array();
				if($oGroup and count($aTS)==0){
					if($oGroup->getStatus()==1 and $oGroup->getStartdate()<=$today and $oGroup->getEnddate()>=$today) $aResult[$oGroup->getId()] = $oGroup;
				}
			}
		}
		return $aResult;	 	
	}
	public function getEmployeeBySchedule($aSchedule){
		$em = $this->getDoctrine()->getManager();
		$aResult = array();
		foreach($aSchedule as $oSchedule){
			if($oSchedule->getIdemployee()>0){
				$oEmployee = $em->getRepository('BoAdminBundle:Employee')->find($oSchedule->getIdemployee());
				if(isset($aResult[$oEmployee->getId()])) continue;
				$aResult[$oEmployee->getId()] = $oEmployee;
			}
		}
		return $aResult;	 	
	}
	public function getEmployeeByScheduleBis($oSchedule){
		return $this->getEmployeeById($oSchedule->getIdemployee());
	}
	public function generateTsForAllContract($aContract){
		set_time_limit(0);
		foreach($aContract as $oContract){
			$aStudent = $oContract->getStudents();
			$aEmployee = $oContract->getEmployee();
			foreach($aEmployee as $oEmployee){
				$aSchedule = $this->getEmployeeContSchedule($oEmployee);
				$aContractIds = $this->overlapofSchedule($aSchedule);
				//Do not take into account all contract wich are overlaped
				if(in_array($oContract->getId(),$aContractIds)) continue;
				//get the schedule for the contract and the teacher
				$aTSc = $this->getExistTsForContract($oContract,$oEmployee,new \DateTime(date('d-m-Y')));
				if(count($aTSc)==0){
					$aAttendance = $this->getAttendanceBy($oContract,$oEmployee);
					$legende = $this->getHighLegendeBy($oContract);				
					$timesheet = new Timesheet();
					$timesheet->setDdate(new \DateTime());
					$timesheet = $this->generateTs($timesheet,$oEmployee,$oContract,$legende);
					$res = $this->updateEntity($timesheet);
					if($res>0){
						$this->createTsStudent($timesheet,$aAttendance);
						if(!$this->getExistPP($timesheet)) $oPP = $this->createPP($timesheet);
						//Create validation historic in the table TsValidation
						$this->createTsValidation($timesheet,"Payroll");
						//Create payroll data
						$this->manageTsHours($timesheet);
						//Create billing data
						$this->createBilling($timesheet);
						$aIdTs[]=$res;
					}
				}
			}
		}
		return $aIdTs;
	}
	public function overlapofSchedule($aSchedule){
		$aResult = array();
		foreach($aSchedule as $oSchedule1){
			foreach($aSchedule as $oSchedule2){
				if($oSchedule1->getContract()==null and $oSchedule2->getContract()) continue;
				if($oSchedule1->getContract()->getId()==$oSchedule2->getContract()->getId()) continue;
				if($this->isOverlap($oSchedule1,$oSchedule2)==true and !isset($aResult[$oSchedule1->getContract()->getId()])) $aResult[$oSchedule1->getContract()->getId()]=$oSchedule1->getContract()->getId();
			}
		}
		return $aResult;
	}
	public function overlapofScheduleGroup($aSchedule){
		$aResult = array();
		foreach($aSchedule as $oSchedule1){
			foreach($aSchedule as $oSchedule2){
				if($oSchedule1->getGroup()==null and $oSchedule2->getGroup()) continue;
				if($oSchedule1->getGroup()->getId()==$oSchedule2->getGroup()->getId()) continue;
				if($this->isOverlap($oSchedule1,$oSchedule2)==true and !isset($aResult[$oSchedule1->getGroup()->getId()])) $aResult[$oSchedule1->getGroup()->getId()]=$oSchedule1->getGroup()->getId();
			}
		}
		return $aResult;
	}
	public function overlapForEmployee($oSchedule,$oEmployee){
		$aResult = array();
		$aSchedule=$this->getAgendaByEmployee($oEmployee);
		foreach($aSchedule as $oSchedule1){
			if($this->isOverlap($oSchedule1,$oSchedule)==true){
				$aResult[$oSchedule1->getId()]=array('idcontrat'=>$oSchedule1->getContracts()?$oSchedule1->getContracts()->getId():null,'idgroup'=>$oSchedule1->getGroup()?$oSchedule1->getGroup()->getId():null);
			} 
		}
		return $aResult;
	}
	//Check if there are overlap on the two schedule
	//return true if there is overlap on the schedule else false
	public function isOverlap($oSchedule1,$oSchedule2){
		if($this->overlapDate($oSchedule1,$oSchedule2)==false) return false;
		if($this->overlapTime($oSchedule1,$oSchedule2)==false)	return false;
		if($this->overlapDay($oSchedule1,$oSchedule2)==false) return false;
		return true;			 
	}
	//return true if there is overlap and false else
	private function overlapDate($oSchedule1,$oSchedule2){
		if($oSchedule1->getEnddate()<$oSchedule2->getStartdate() or $oSchedule2->getEnddate()<$oSchedule1->getStartdate()) return false;
		return true;
	}
	//Si le endam du schedule 1 finit avant le startam du schedule 2 ou bien le startam du schedule 1 commence apres le endam du  schedule 2 (endam2<startam ) alors il n'y a pas de chevauchelent en AM, dans tous les autre cas il y a de chevauchement 
	private function overlapAm($oSchedule1,$oSchedule2){
		$startam1 = $oSchedule1->getStartam()!=null?$oSchedule1->getStartam():$this->getTime();
		$startam2 = $oSchedule2->getStartam()!=null?$oSchedule2->getStartam():$this->getTime();
		$Endam1 = $oSchedule1->getEndam()!=null?$oSchedule1->getEndam():$this->getTime();
		$Endam2 = $oSchedule2->getEndam()!=null?$oSchedule2->getEndam():$this->getTime();
		if($this->getRealHour($Endam1->format("H:i"))==0 and $this->getRealHour($startam2->format("H:i"))==0 and  $this->getRealHour($Endam2->format("H:i"))==0 and $this->getRealHour($startam1->format("H:i"))==0) return false;	
		if($this->getRealHour($Endam1->format("H:i"))<$this->getRealHour($startam2->format("H:i")) or $this->getRealHour($Endam2->format("H:i"))<$this->getRealHour($startam1->format("H:i"))) return false;	
		else return true;	
	}

	//Si le endpm du schedule 1 finit avant le startpm du schedule 2 ou bien le startpm du schedule 1 commence apres le endpm du  schedule 2 (endpm2<startpm ) alors il n'y a pas de chevauchelent en PM, dans tous les autre cas il y a de chevauchement 
	private function overlapPm($oSchedule1,$oSchedule2){
		$startpm1 = $oSchedule1->getStartpm()!=null?$oSchedule1->getStartpm():$this->getTime();
		$startpm2 = $oSchedule2->getStartpm()!=null?$oSchedule2->getStartpm():$this->getTime();
		$Endpm1 = $oSchedule1->getEndpm()!=null?$oSchedule1->getEndpm():$this->getTime();
		$Endpm2 = $oSchedule2->getEndpm()!=null?$oSchedule2->getEndpm():$this->getTime();
		if($this->getRealHour($Endpm1->format("H:i"))==0 and $this->getRealHour($startpm2->format("H:i"))==0 and  $this->getRealHour($Endpm2->format("H:i"))==0 and $this->getRealHour($startpm1->format("H:i"))==0) return false;
		if($this->getRealHour($Endpm1->format("H:i"))<$this->getRealHour($startpm2->format("H:i")) or $this->getRealHour($Endpm2->format("H:i"))<$this->getRealHour($startpm1->format("H:i"))) return false;	
		else return true;	
	}
	//return true if there is overlap and false else
	private function overlapTime($oSchedule1,$oSchedule2){
		if($this->overlapAm($oSchedule1,$oSchedule2)==false and $this->overlapPm($oSchedule1,$oSchedule2)==false) return false;
		return true;
	}
	//return true if there is overlap and false else
	private function overlapDay($oSchedule1,$oSchedule2){
		if(((intval($oSchedule1->getMonday())==0 and intval($oSchedule2->getMonday())==0) or $oSchedule1->getMonday()!=$oSchedule2->getMonday()) and ((intval($oSchedule1->getTuesday())==0 and intval($oSchedule2->getTuesday())==0) or $oSchedule1->getTuesday()!=$oSchedule2->getTuesday()) and ((intval($oSchedule1->getWednesday())==0 and intval($oSchedule2->getWednesday())==0) or $oSchedule1->getWednesday()!=$oSchedule2->getWednesday()) and ((intval($oSchedule1->getThursday())==0 and intval($oSchedule2->getThursday())==0) or $oSchedule1->getThursday()!=$oSchedule2->getThursday()) and ((intval($oSchedule1->getFriday())==0 and intval($oSchedule2->getFriday())==0) or $oSchedule1->getFriday()!=$oSchedule2->getFriday())) return false;
		return true;
	}
	//Check if the teacher is available to get the contract
	protected function checkAvailability($oSchedule,$oEmployee){
		$mesgroup=$mescont=null;
		$Fullname = $this->getFullNameOf($oEmployee);
		$message = $Fullname." is not available."."Check the schedule entered and the ";
		$aOverlap = $this->overlapForEmployee($oSchedule,$oEmployee);
		if(count($aOverlap)==0) return 1;
		$bAbs = $this->getStudentAbsence($oEmployee,$oSchedule);
		if($bAbs==1){
			return $bAbs; 
		}elseif($bAbs==2){
			$this->setSessionMessage("Warning","There is overlap on the schedules. Check if the end date scheduled does not exceed the teacher's avaibility.");
			return 0;
		}
		foreach($aOverlap as $aTab){
			if($aTab['idgroup']>0){
				$oGroup = $this->getGroupById($aTab['idgroup']);
				$aGoup[] = $oGroup->getName();  
			}else{
				$oContrat = $this->getContractById($aTab['idcontrat']);
				$aStudent = $oContrat->getStudents();
				if($oContrat->getGroup()!=null) $aGoup[] = $oContrat->getGroup()->getName(); 
				elseif(count($aStudent)==1){
					$aStudent = $oContrat->getStudents();
					$aContrat[] = "id ".$oContrat->getId()." de ".$aStudent[0]->getFirstname()." ".$aStudent[0]->getName(); 
				} 
			}		
		}
		if(isset($aGoup)){
			$mesgroup = "The group(s) ".join(',',$aGoup)." ";
		}
		if(isset($aContrat)){
			$mescont = "contract(s) ".join(',',$aContrat)." ";
		}
		if($mesgroup!=null and $mescont!=null) $message = $message.$mesgroup." and the ".$mescont;
		elseif($mesgroup!=null)	$message = $message.$mesgroup;
		elseif($mescont!=null)	$message = $message.$mescont;	
		$this->setSessionMessage("Warning",$message);
		return 0;		
	}
	protected function getStudentByContractId($idcontrat){
		$oContrat = $this->getContractById($idcontrat);
		return $oContrat->getStudents();
	}
	protected function getStudentByGroupId($idgroup){
		$oGroup = $this->getGroupById($idgroup);
		return $oGroup->getStudents();
	}
	private function getStudentAbsence($oEmployee,$oNewSchedule){
		$aSchedule=$this->getAgendaByEmployee($oEmployee);
		foreach($aSchedule as $oSchedule){
			$oContract = $this->getContractByoSchedule($oSchedule);
			if($oContract){
				$aStudent = $oContract->getStudents();
				if(count($aStudent)==1){
					$oStudent = $aStudent[0];
					$today = new \DateTime(date("d-m-Y"));
					$aAbsences = $this->getStudentAbsByDate($oStudent,$today);
					if(count($aAbsences)==0) $aAbsences = $this->getStudentAbsBySchedule($oStudent,$oNewSchedule);
					//Verify if exist an absence for the student
					if(isset($aAbsences[0]) and $oAbsence=$aAbsences[0]){
						$this->setSessionByName('absence',$oAbsence);
						if($this->IsDateBetweeen($oAbsence,$oNewSchedule)==false){
						 	return 2;
						}
						if($this->existEntity($oAbsence,$oSchedule->getAbsences())==false){
							$oSchedule->addAbsence($oAbsence);
							$this->updateEntity($oSchedule);						
						}
						return 1;
					}
				} 
			}
		
		}
		return 0;
	}
	protected function getContractByoSchedule($oSchedule){
		return $oSchedule->getContracts();
	}
	protected function getGroupByoSchedule($oSchedule){
		return $oSchedule->getGroup();
	}
	protected function getArrayContractBy($aSchedule){
		$aResult = array();
		foreach($aSchedule as $oSchedule){
			$oContract = $oSchedule->getContracts();
			if($oContract) $aResult[$oContract->getId()] =  $oContract;
		}
		return $aResult;
	}
	protected function getArrayGroupBy($aSchedule){
		$aResult = array();
		foreach($aSchedule as $oSchedule){
			$oGroup = $oSchedule->getGroup();
			if($oGroup) $aResult[$oGroup->getId()] =  $oGroup;
		}
		return $aResult;
	}
	protected function getGroupById($id){
		$em = $this->getDoctrine()->getManager();
		return $em->getRepository('BoAdminBundle:Group')->find($id);		
	}
	protected function getContractById($id){
		$em = $this->getDoctrine()->getManager();
		return $em->getRepository('BoAdminBundle:Contracts')->find($id);		
	}
	private function IsDateBetweeen($oAbsence,$oSchedule){
		if($oAbsence->getStartdate()<=$oSchedule->getStartdate() and $oSchedule->getEnddate()<=$oAbsence->getEnddate()) return true;
		return false;
	
	}
	public function generateTsForAllGroup($aGroup){
		set_time_limit(0);
		foreach($aGroup as $oGroup){
			$aStudent = $oGroup->getStudents();
			if(count($aStudent)==0) $aStudent = $this->getStudentByGroup($oGroup);
			$aEmployee = $oGroup->getEmployee();
			foreach($aEmployee as $oEmployee){
				$aSchedule = $this->getEmployeeContSchedule($oEmployee);
				$aGroupIds = $this->overlapofScheduleGroup($aSchedule);
				//Do not take into account all contract wich are overlaped
				if(in_array($oGroup->getId(),$aGroupIds)) continue;
				//get the schedule for the contract and the teacher
				$aTS = $this->getExistTsForGroup($oGroup,$oEmployee,new \DateTime(date('d-m-Y')));
				if(count($aTS)==0){
					//Get student presence for the group
					$aAttendance = $this->getAttendanceBy($oGroup,$oEmployee);
					$legende = $this->getHighLegendeBy($oGroup,1);	
					$timesheet = new Timesheet();
					$timesheet->setDdate(new \DateTime());
					$timesheet = $this->generateTsForGroup($timesheet,$oEmployee,$oGroup,$legende);
					$res = $this->updateEntity($timesheet);
					if($res>0){
						$this->createTsStudent($timesheet,$aAttendance);
						if(!$this->getExistPP($timesheet)) $oPP = $this->createPP($timesheet);
						//Create validation historic in the table TsValidation
						$this->createTsValidation($timesheet,"Payroll");
						//Create payroll data
						$this->manageTsHours($timesheet);
						//Create billing data
						$this->createBilling($timesheet);
						$aIdTs[]=$res;
					}
				}
			}
		}
		return $aIdTs;
	}
	public function getStudentByGroup($oGroup){
		$aResult = array();
		$aContract = $this->getContractByGroup($oGroup);
		foreach($aContract as $oContract){
			$aStudent = $oContract->getStudents();
			foreach($aStudent as $oStudent){
				$aResult[] = $oStudent;
			}
		}
		return $aResult;
	}
	//Get student precence for contract or for group
	//oEntity can be contract or group. if option is null then it's for a contract else it's for a group
	protected function getAttendanceBy($oEntity,$oEmployee,$option=null){
		$aStudents = $oEntity->getStudents();
		$today = new \DateTime(date("d-m-Y"));
		$legend = "P";
		$am = $pm = null;
		$ham = $hpm = null;
		$em = $this->getDoctrine()->getManager();
		$oRepAbs = $em->getRepository('BoAdminBundle:Absences');
		$aLegende=array();
		foreach($aStudents as $oStudent){
			$aAbsence = $oRepAbs->getStudentsAbsencesByDate($oStudent,$today);
			//Check if there exists a substitution for this contract and for this employee and for this date
			if($option==null){
				$aSubstitution = $this->getTodaySubstitutionBy($oEntity,$oEmployee);
				$aSchedule = count($aSubstitution)>0?$aSubstitution:$this->getContractTeacherSchedule($oEmployee,$oEntity);
			}else{
				$aSubstitution = $this->getTodayGroupSubstitutionBy($oEntity,$oEmployee);
				$aSchedule = count($aSubstitution)>0?$aSubstitution:$this->getGroupTeacherSchedule($oEmployee,$oEntity);				
			}
			if(isset($aAbsence[0])){
				$aLegend = $this->getAbsLegends($aAbsence[0]);
				if(isset($aLegend[$today->format("d-m-Y")])) $legend = $aLegend[$today->format("d-m-Y")];
			}
			if(isset($aSchedule[0]) and $oSchedule=$aSchedule[0]){
				$amhour = $this->getRealAmHour($oSchedule);	
				$pmhour = $this->getRealPmHour($oSchedule);
				if($amhour>0){
					$am = $legend;
					$ham = $amhour; 
				}
				if($pmhour>0){
					$pm = $legend;
					$hpm = $pmhour; 
				}				
			}
			$aLegende[]=array('student'=>$oStudent,'legende'=>$legend,'delay'=>null,'dh'=>null,'am'=>$am,'pm'=>$pm,'ham'=>$ham,'hpm'=>$hpm);
		}		
		return $aLegende;
	}
	protected function getHighLegendeBy($oEntity,$option=null){
		$em = $this->getDoctrine()->getManager();
		$oRepAbs = $em->getRepository('BoAdminBundle:Absences');
		if($option!=null) $aStudents = $this->getStudentByGroup($oEntity);
		else $aStudents = $oEntity->getStudents();
		$today = new \DateTime(date("d-m-Y"));
		$aResult=array();
		foreach($aStudents as $oStudent){
			$aAbsence = $oRepAbs->getStudentsAbsencesByDate($oStudent,$today);
			if(isset($aAbsence[0]) and $oAbsence = $aAbsence[0]){					
				$aLegend = $this->getAbsLegends($oAbsence);
				if(isset($aLegend[$today->format("d-m-Y")])) $legend = $aLegend[$today->format("d-m-Y")];
			}else $legend = "P";
			$aResult[$legend] = $legend;
		}	
		return $this->getBigLegende($aResult);
	}
	protected function getHighPresenceBy($oEntity,$tam,$tpm,$option=null){
		$em = $this->getDoctrine()->getManager();
		$legend = 'P';
		if($option!=null) $aStudents = $this->getStudentByGroup($oEntity);
		else $aStudents = $oEntity->getStudents();
		$aPresence = $this->getPresence($aStudents);
		if(count($aStudents)==1) return $this->getHighByPresence($aPresence);
		foreach($aPresence as $key=>$aTab){ 
			if(($tam>0 and $tpm>0) or $tam>0) $aResult[$aTab['am']] = $aTab['am'];
			elseif($tpm>0) $aResult[$aTab['pm']] = $aTab['pm'];
			else $aResult[$legend] = $aTab[$legend];
		}	
		return $this->getBigLegende($aResult);
	}
	protected function getHighByPresence($aPresence){
		$aResult = array();
		foreach($aPresence as $aTab){
			foreach($aTab as $string){
				$aResult[$string] = $string;
			}
		}
		return $this->getBigLegende($aResult);
	}
	protected function getHighByStudent($aStudents){
		$aPresence=$this->getPresence($aStudents);
		return $this->getHighByPresence($aPresence);

	}
	protected function getArrayIds($aEntities){
		$aIds = array();
		foreach($aEntities as $oEntity){
			$aIds[]=$oEntity->getId();
		}
		return $aIds;
	}
	protected function getStringIds($aEntities){
		$aIds = $this->getArrayIds($aEntities);
		return join(",",$aIds);
	}
	protected function checkExistingTsFor($oEmployee){
		$oDate = $this->getToday();
		$oRep = $this->getRepository('BoAdminBundle:Timesheet');
		$aTs = $oRep->getDayTsByEmployee($oEmployee,$oDate);
		$aSchedule = $this->getScheduleByDate($oEmployee,$oDate);
		$fTotalTs = $this->getTotalTsHour($aTs);
		$fTotalSch = $this->getTotalSchedule($aSchedule);
		if($fTotalTs == $fTotalSch) return true;
		else return false;
	}
	protected function getTotalTsHour($aTimesheet){
		$hour = 0;
		foreach($aTimesheet as $oTimesheet){
			$hour = $hour+$oTimesheet->getHour();
		}
		return $hour;
	}	
	protected function getTotalSchedule($aSchedule){
		$hour = 0;
		foreach($aSchedule as $oSchedule){
			$hour = $hour+$oSchedule->getHourperday();
		}
		return $hour;
	}
	protected function getCreatingTsHour(){
		//getting the parameter of timesheet creation if 0 timesheet can be created before the end of course else after 
		$pcth = $this->getParam("timesheet_hour_override",24);
		if($pcth==0) return $pcth;
		//cth is the time when the timesheet is authorized to be created
		//add $pcth to hour of moment
		$cth = $this->getRealHour(date("H:i"))+$pcth;
		return $cth;
	}
	protected function getDtsb($aTab,$option){
		$aResult = array();
		if(count($aTab)==0) return $aResult;
		//getting the parameter of timesheet creation if 0 timesheet can be created before the end of course else after 
		$pcth = $this->getParam("timesheet_hour_override",24);
		$cth = $this->getRealHour(date("H:i"))+$pcth;
		foreach($aTab as $oEntity){
			if($option!=1 and $oEntity->getGroup()) $id = $oEntity->getGroup()->getId();
			elseif($oEntity->getContracts()) $id = $oEntity->getContracts()->getId();
			if($pcth==0) $aResult[$id]=1;
			else{
				$ham = $this->getRealAmHour($oEntity);
				$hpm = $this->getRealPmHour($oEntity);
				if(($ham>0 and $hpm>0) or $hpm>0){
					$endpm = $this->getRealHour($oEntity->getEndpm()->format("H:i"));
					$aResult[$id]=$cth>$endpm?1:0;

				}elseif($ham>0){
					$endam = $this->getRealHour($oEntity->getEndam()->format("H:i"));
					$aResult[$id]=$cth>$endam?1:0;
				}

			}
		}
		return $aResult;
		
	}
	protected function getDtsbForSub($aTab){
		$aResult = array();
		if(count($aTab)==0) return $aResult;
		//getting the parameter of timesheet creation if 0 timesheet can be created before the end of course else after 
		$pcth = $this->getParam("timesheet_hour_override",24);
		$cth = $this->getRealHour(date("H:i"))+$pcth;
		foreach($aTab as $oEntity){
			if($pcth==0) $aResult[$oEntity->getId()]=1;
			else{
				$ham = $this->getRealAmHour($oEntity);
				$hpm = $this->getRealPmHour($oEntity);
				if(($ham>0 and $hpm>0) or $hpm>0){
					$endpm = $this->getRealHour($oEntity->getEndpm()->format("H:i"));
					$aResult[$oEntity->getId()]=$cth>$endpm?1:0;

				}elseif($ham>0){
					$endam = $this->getRealHour($oEntity->getEndam()->format("H:i"));
					$aResult[$oEntity->getId()]=$cth>$endam?1:0;
				}

			}
		}
		return $aResult;
		
	}
	protected function getOneContractByGroup($oGroup){
		$aContract = $this->getContractByGroup($oGroup);
		if(count($aContract)>0) return $aContract[0];
		return null;
	}
	protected function getData($oContract,$oGroup,$oSchedule,$oEmployee){
		$aResult = array();
		if(!$oContract and $oGroup){
			$oContract = $this->getOneContractByGroup($oGroup);
			$aResult['group'] = $oGroup->getName();
			if($oGroup->getAdvisor()) $aResult['advisor'] = $this->getFullnameOf($oGroup->getAdvisor());
			$targetlevel = $oGroup->getTargetlevel();
			if($oGroup->getLocal()){
				$aLocal = $oGroup->getLocal();
				if(count($aLocal)>0) $aResult['room'] = $aLocal[0]->getReference();
			}
		}else{
			if($oContract->getGroup()) $aResult['group'] = $oContract->getGroup()->getName();
			else $aResult['student'] = $this->getStudentBy($oContract);
			if($oContract->getAdvisor()) $aResult['advisor'] = $this->getFullnameOf($oContract->getAdvisor());
			$targetlevel = $oContract->getTargetlevel();
			if($oContract->getLocal()){
				$aLocal = $oContract->getLocal();
				if(count($aLocal)>0) $aResult['room'] = $aLocal[0]->getReference();
			}
		}
		$aResult['language'] = $oContract->getLanguage();
		$aResult['startdate'] = $oSchedule->getStartdate();
		$aResult['enddate'] = $oSchedule->getEnddate();
		$schedule = $this->getRepository("BoAdminBundle:Agenda")->getScheduleDays($oSchedule);
		$aResult['schedule'] = $schedule;
		$aResult['targetlevel'] = $targetlevel;
		if($oContract->getCampus()) $aResult['location'] = $oContract->getCampus()->getAddress();
		if($oContract->getAdresse()) $aResult['adresse'] = $oContract->getAdresse();
		elseif($oContract->getCampus() and $oContract->getCampus()->getAdresse()) $aResult['location'] = $oContract->getLocation();
		return $aResult;

	}
	//METHODS OF AGENDA 
	protected function getAgendaByContract($oContract){
		$aResult = array();
		$aAgenda = $this->getRepository("BoAdminBundle:Agenda")->getByContract($oContract);
		foreach($aAgenda as $oAgenda){
			//update the status
			$oAgenda = $this->setAgendaStatus($oAgenda);
			$this->updateEntity($oAgenda);
			$aResult[] = $oAgenda;	
		}
		return $aResult;
	}
	protected function getActiveByContract($oContract){
		//echo count($aAgenda1)."<br>";
		$aResult = array();
		$aAgenda = $this->getRepository("BoAdminBundle:Agenda")->getByContract($oContract);
		foreach($aAgenda as $oAgenda){
			//update the status
			$oAgenda = $this->setAgendaStatus($oAgenda);
			$this->updateEntity($oAgenda);
			if($oAgenda->getStatus()==1 or $oAgenda->getStatus()==2)
			$aResult[] = $oAgenda;	
		}
		return $aResult;
	}
	protected function getClosedByContract($oContract){
		$aResult = array();
		if($oContract==null) return $aResult;
		$aAgenda = $oContract->getAgenda();
		foreach($aAgenda as $oAgenda){
			if($oAgenda->getStatus()==0) $aResult[] = $oAgenda;	
		}
		return $aResult;
	}
	protected function getAgendaByGroup($oGroup){
		$aResult = array();
		$aAgenda = $this->getRepository("BoAdminBundle:Agenda")->getByGroup($oGroup);
		foreach($aAgenda as $oAgenda){
			//update the status
			$oAgenda = $this->setAgendaStatus($oAgenda);
			$this->updateEntity($oAgenda);
			$aResult[] = $oAgenda;	
		}
		return $aResult;
	}
	protected function getActiveByGroup($oGroup){
		$aResult = array();
		$aAgenda = $this->getRepository("BoAdminBundle:Agenda")->getByGroup($oGroup);
		foreach($aAgenda as $oAgenda){
			//update the status
			$oAgenda = $this->setAgendaStatus($oAgenda);
			$this->updateEntity($oAgenda);
			if($oAgenda->getStatus()==1 or $oAgenda->getStatus()==2)
			$aResult[] = $oAgenda;	
		}
		return $aResult;
	}
	protected function getClosedByGroup($oGroup){
		$aResult = array();
		if($oGroup==null) return $aResult;
		$aAgenda = $oGroup->getAgenda();
		foreach($aAgenda as $oAgenda){
			if($oAgenda->getStatus()==0) $aResult[] = $oAgenda;	
		}
		return $aResult;
	}
	protected function setAgendaStatus($oAgenda){
		$oContrat = $oAgenda->getContracts();
		$oGroup = $oAgenda->getGroup();
		if($oAgenda->getEnddate()<$this->getToday()){
			$oAgenda->setStatus(0);
		}elseif($oContrat and $oContrat->getStatus()==0){
			$oAgenda->setStatus(0);
			$oAgenda->setEnddate($oContrat->getEnddate());
		}elseif($oGroup and $oGroup->getStatus()==0){
			$oAgenda->setStatus(0);
			$oAgenda->setEnddate($oGroup->getEnddate());
		}elseif($oAgenda->getStartdate()>$this->getToday()){
			$oAgenda->setStatus(2);
		}else{
			$oAgenda->setStatus(1);
		}
		return $oAgenda;
	}
	protected function updateAgenda($oAgenda){
		$oAgenda = $this->setAgendaStatus($oAgenda);
		$this->updateEntity($oAgenda);
		return $oAgenda;
	}
	protected function getAgendaBy($oContract){
		if($this->isGroupContract($oContract)==true) return $this->getAgendaByGroup($oContract->getGroup());
		return $this->getAgendaByContract($oContract);
	}
	protected function getActiveBy($oContract){
		if($this->isGroupContract($oContract)==true) return $this->getActiveByGroup($oContract->getGroup());
		return $this->getActiveByContract($oContract);
	}
	protected function updateAgendaForContract($oContract){
		$aAgenda = $this->getActiveByContract($oContract);
		foreach($aAgenda as $oAgenda){
			$this->updateAgenda($oAgenda);
		}
		return true;
	}
	protected function getClosedBy($oContract){
		if($this->isGroupContract($oContract)==true) return $this->getClosedByGroup($oContract->getGroup());
		return $this->getClosedByContract($oContract);
	}
	protected function getScheduleByEmployee($idemployee){
		$oEmployee = $this->getRepository("BoAdminBundle:Employee")->find($idemployee);
		return $this->getAgendaByEmployee($oEmployee);
	}
	protected function getAgendaByEmployee($oEmployee){
		$aResult = array();
		$aSchedule = $this->getRepository("BoAdminBundle:Agenda")->getByEmployee($oEmployee);	
		$today = new \DateTime(date("d-m-Y"));
		foreach($aSchedule as $oSchedule){
			if($this->isArchived($oSchedule->getContracts())==true) continue;
			if(($oSchedule->getStartdate()<=$today and $today<=$oSchedule->getEnddate()) or $oSchedule->getStartdate()>$today)
			$aResult[] = $oSchedule;
		}
		return $aResult;		
	}
	protected function disableThis($oAgenda){
		$oAgenda->setStatus(0);
		return $this->updateEntity($oAgenda);
	}	
	protected function removeTeacherFrom($oAgenda){
		$oContract = $oAgenda->getContracts();
		$oGroup = $oAgenda->getGroup();
		$oEmployee = $oAgenda->getEmployee();
		if($oContract and $this->existEntity($oEmployee,$oContract->getEmployee())==true){
	 		$oContract->removeEmployee($oEmployee);
			return $this->updateEntity($oContract);
		}
		if($oGroup and $this->existEntity($oEmployee,$oGroup->getEmployee())==true){
	 		$oGroup->removeEmployee($oEmployee);
			return $this->updateEntity($oGroup);
		}
		return null;
	}
	protected function cloneAgenda($oAgenda,$oSubstitution){
		$oNew_agenda = clone $oAgenda;
		$oNew_agenda->setStartdate($oSubstitution->getStartdate());
		$oNew_agenda->setEnddate($oSubstitution->getEnddate());
		$oNew_agenda->setStartam($oSubstitution->getStartam());
		$oNew_agenda->setEndam($oSubstitution->getEndam());
		$oNew_agenda->setStartpm($oSubstitution->getStartpm());
		$oNew_agenda->setEndpm($oSubstitution->getEndpm());
		$oNew_agenda->setHourperday($oSubstitution->getHour());
		return $oNew_agenda;
	}
	protected function getSubstitutions($oContract){
		$aResult = array();
		if($this->isGroupContract($oContract) and $oContract->getGroup()) $aSubstitution = $this->getGroupSubstitution($oContract->getGroup());
		else $aSubstitution = $this->getContractSubstitution($oContract);
		foreach($aSubstitution as $oSubstitution){
			if($this->isActiveSubstitution($oSubstitution)==true) $aResult[] = $oSubstitution;
		}
		return $aResult;
	}
	private function isActiveSubstitution($oSubstitution){
		$today = $this->getToday();
		if(($oSubstitution->getStartdate()<=$today and $today<=$oSubstitution->getEnddate()) or $oSubstitution->getStartdate()>=$today){
			return true;
		}
		return false;
	}
	protected function getSubTeachers($aSubstitution){
		$aResult = array();
		foreach($aSubstitution as $oSubstitution){
			if(!isset($aResult[$oSubstitution->getIdholder()])) $aResult[$oSubstitution->getIdholder()] = $this->getEmployeeById($oSubstitution->getIdholder());
			if(!isset($aResult[$oSubstitution->getIdsubstitute()])) $aResult[$oSubstitution->getIdsubstitute()] = $this->getEmployeeById($oSubstitution->getIdsubstitute());
		}
		return $aResult;
	}	
}

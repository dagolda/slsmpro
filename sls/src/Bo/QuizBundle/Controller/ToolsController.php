<?php 
/* 
* Date Création: 07/03/2016
* Auteur: N'VEKOUNOU Moise José
* Nom file : CommonController.php
* Description: tools controller
*/
namespace Bo\QuizBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bo\QuizBundle\Entity\Answer;
use Bo\QuizBundle\Entity\Quiz;
use Bo\QuizBundle\Entity\Question;
use Bo\QuizBundle\Entity\Resultsquiz;
use Bo\QuizBundle\Entity\Resultsanswer;

/** 
* Common controller. 
*/
class ToolsController extends Controller
{
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
	protected function getRepository($bundle,$name=null){
		if($name!=null) $sEntity = sprintf("%s:%s",$bundle,$name);
		else $sEntity = $bundle;
		$em = $this->getDoctrine()->getManager();
		return $em->getRepository($sEntity);
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
	//creation of many answers
	protected function createAnswers($aAnswer,$oQuestion,$idquiz){
		$res = null;
		foreach($aAnswer as $response){
			$answer = new Answer();
			$answer->setResponse(trim($response));
			$answer->setIdquiz($idquiz);
			$answer->setQuestion($oQuestion);
			$res = $this->updateEntity($answer);
		}
		return $res; 
	}

	//creation of many question
	protected function createQuestion($aQuestion,$question,$oQuiz){
		$res = null;
		$noa = $question->getNoa();
		foreach($aQuestion as $tquestion){
			if(trim($tquestion)=="") continue;
			$oQuestion = new Question();
			echo $tquestion;
/*
			$aContent = explode('Answer#',$tquestion);
			foreach($aContent as $aTab){
				if($aTab==null) continue;
				

			}
			if(trim($tquestion)=="") continue;
/*
			$oQuestion->setContent($aContent[0]);
			$oQuestion->setNoa($noa);
			$res = $this->updateEntity($oQuestion);
			if($res>0){
				$oQuiz->addQuestion($question);
				$this->updateEntity($oQuiz);
			}
			

			$answer->setResponse(trim($response));
			$answer->setIdquiz($idquiz);
			$answer->setQuestion($oQuestion);
			$res = $this->updateEntity($answer);
*/
		}
		exit(0);
		return $res; 
	}
	protected function verifySession(){
		if($this->isConnected()==false){
			$this->setSessionByName('message',$this->get('translator')->trans('Login timeout expired'));
			return $this->redirectToRoute('fos_user_security');
		} 
		return true;
	}
	protected function isConnected(){
		$oUser = $this->getTokenUser();	
		if($oUser!=null) return true;
		return false;
	}
	protected function getTokenUser(){
		return $this->get('security.token_storage')->getToken()->getUser();	
	}
	protected function getNumberQuestionBy($oQuiz){
		return count($oQuiz->getQuestions());
	}
	//return 1 if displaying add button is allowed else 0
	protected function dispAddButton($oQuiz){
		if(count($oQuiz->getQuestions())<$oQuiz->getNoq()) return 1;
		return 0;
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
	protected function getWelcomeMessage($account){
		$lang = $this->getUserLocale();
		$oCompany = $this->getInfoCompany($account);
		$var = "getMessage".strtolower($lang);
		if($oCompany)  return $oCompany->$var();
	}
	protected function getUserLocale(){
		return $this->get("session")->get("_locale");		
	}
	protected function getInfoCompany($account){
		$em = $this->getDoctrine()->getManager();
		$aCompany = $em->getRepository('BoAdminBundle:Company')->findBy(array('compte'=>$account));
		if(isset($aCompany[0])) return $aCompany[0];
		return null;
	}
	protected function getRandomImage(){
		$index = rand(1,5);	
		if($index==1) return "2010_05_25_4860.JPG";
		if($index==2) return "2010_05_25_4859.JPG";
		if($index==3) return "2010_05_25_4856.JPG";
		if($index==4) return "2010_05_25_4846.JPG";
		return "2010_05_25_4844.JPG";
	}
	protected function getUser(){
		return $this->get('session')->get('user');

	}
	protected function generateToken(){
		$token = base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
		$this->get('session')->set('this_token',$token);
		return $token;
	}
	protected function check($user){
		$aUser = $this->getRepository('BoQuizBundle:User')->findBy(array('email'=>$user->getEmail(),'password'=>$user->getPassword()));
		if(count($aUser)==1){
			$this->get('session')->set('user',$aUser[0]);
			return true;
		} 
		return false;

	}
	protected function getParam($label,$id){
		return $this->getRepository('BoAdminBundle:Param')->getParam($label,$id);
	}
	protected function getEvaluations($oUser){
		return $this->getRepository('BoQuizBundle:Evalquiz')->findBy(array('user'=>$oUser,'done'=>false));
	}
	protected function checkuser($oUser,$evalquiz){
		$aEvaluations = $this->getEvaluations($oUser);
		foreach($aEvaluations as $oEvaluations){
			if($oEvaluations==$evalquiz) return 1;
		}
		return 0;
	}
	protected function getErrorMessage($id){
	   	$em = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Message');
		$oMessage= $em->find($id);
		if($oMessage) return $oMessage->getDescen()." / ".$oMessage->getDescfr();
		return null;
	}
	protected function getSubmittedAnswers($request,$quiz,$option){
		$aQuestions = $quiz->getQuestions();
		$results = array();
		foreach($aQuestions as $oQuestion){
			$name = "radio".$oQuestion->getId();
			$response = $this->getNameByRequest($request,$name);
			if($option==1 and $response!=null) $results[$oQuestion->getId()] = $response;
			elseif($option==2 and $response==null) $results[$oQuestion->getId()] = $response;
		}
		return $results;
	}
	protected function getNameByRequest($request,$name){	
		return $request->request->get($name);
	}
	protected function getQuestionIds($request,$quiz){
		$aIdquestions = array();
		$aAwswer = $this->getSubmittedAnswers($request,$quiz,2);
		foreach($aAwswer as $key=>$response){
			$aIdquestions[] = $key; 
		}
		return join(',',$aIdquestions);
	}
	protected function setSessionMessage($type,$message){
		$this->get('session')->set('message',array('type'=>$type,'texte'=>$message));
		return;
	}
	protected function getQuizResult($oUser,$oQuiz,$idevalquiz,$aAnswers,$time){
		//get evalquiz by objects user and quiz
		$oEvalquiz = $this->getEvalquizBy($idevalquiz);
		//if evalquiz is equal to null return evalquiz
		if($oEvalquiz==null) return $oEvalquiz;
		$res = $this->createResultsquiz($oEvalquiz,$oUser,$oQuiz,$aAnswers,$time);	
		if($res==null) return $res;	
		return $oEvalquiz;
	}
	private function createResultsquiz($oEvalquiz,$oUser,$oQuiz,$aAnswers,$time){
		//initialize quiz result object
		$oResultsquiz = new Resultsquiz();
		$oResultsquiz->setEvalquiz($oEvalquiz);	
		$oResultsquiz->setIduser($oUser->getId());
		$oResultsquiz->setIdquiz($oQuiz->getId());
		$res = $this->updateEntity($oResultsquiz);
		if(!$oResultsquiz) return null;
		$score = 0;
		//for answer create object answer bound and calculate the score
		foreach($aAnswers as $idquestion=>$idanswer){
			$dResult = 0.00;
			$oQuestion = $this->getRepository("BoQuizBundle:Question")->find($idquestion);
			$oAnswer = $this->getRepository("BoQuizBundle:Answer")->find($idanswer);
			if($oQuestion and $oAnswer){
				$oChoice = $this->getRightResponse($oQuestion); 
				if($oChoice!=null and $oChoice==$oAnswer){
					//For each correct answer calculate the score
					$score=$score+$oQuestion->getScore();
					$dResult = $oQuestion->getScore();
				}				
				$oResultsanswer = new Resultsanswer();
				$oResultsanswer->setResultsquiz($oResultsquiz);
				$oResultsanswer->setAnswer($oAnswer);
				$oResultsanswer->setQuestion($oQuestion);
				$oResultsanswer->setResult($dResult);

				$res = $this->updateEntity($oResultsanswer);
				If($res>0) $oResultsquiz->addResultsanswer($oResultsanswer);
			}
		}
		//add the result of the quiz in the result table 
		$oResultsquiz->setResult($score);
		$oResultsquiz->setTtime($time['endtime']-$time['starttime']);
		$oResultsquiz->setStart($time['startdate']);
		$oResultsquiz->setEnd($time['enddate']);
		//return after updating the quiz result table	
		return $this->updateEntity($oResultsquiz);
	}
	protected function getEvalquizBy($idevalquiz){
		$oEvalQuiz = $this->getRepository("BoQuizBundle:Evalquiz")->find($idevalquiz);
		if($oEvalQuiz) return $oEvalQuiz;
		return null;
	}
	protected function getRightResponse($question){
		$aResponses = $question->getAnswer();
		foreach($aResponses as $oResponse){
			if($oResponse->getChoice()==true) return $oResponse;
		}
		return null;
	}
	//Check of there exists des questions without response tagged
	protected function checkQuestions($quiz){
		$aResult = array();
		$aQuestion = $quiz->getQuestion();
		foreach($aQuestion as $oQuestion){
			$rightresponse = $this->getRightResponse($oQuestion);
			if($rightresponse==null) $aResult[] = $oQuestion->getId(); 
		}

	}
	protected function getResultsQuiz($aQuiz,$evalquiz){
		$aResult = array();
		foreach($aQuiz as $oQuiz){
			$aResultsquiz = $this->getRepository("BoQuizBundle:Resultsquiz")->findBy(array('idquiz'=>$oQuiz->getId(),'evalquiz'=>$evalquiz));
			if(count($aResultsquiz)==1) $aResult[$oQuiz->getId()]=1;
			else $aResult[$oQuiz->getId()]=0;
		}
		return $aResult;
	}
	//Return the previous question id
	protected function getPreviousQuestionId($idquestion,$idquiz){
		$aQuestions = $this->getQuestionBy($idquiz);
		$first = reset($aQuestions);
		$idprevious = $idquestion-1;
		if($idprevious>=$first and isset($aQuestions[$idprevious])) return $idprevious;
		elseif($idprevious<$first) return $first;
		else return $this->getPreviousQuestionId($idprevious,$idquiz);
	}
	protected function getNextQuestionId($idquestion,$idquiz){
		$aQuestions = $this->getQuestionBy($idquiz);
		$first = reset($aQuestions);
		$idprevious = $idquestion+1;
		if($idprevious>=$first and isset($aQuestions[$idprevious])) return $idprevious;
		elseif($idprevious<$first) return $first;
		else return $this->getPreviousQuestionId($idprevious,$idquiz);		
	}
	protected function getQuestionBy($idquiz){
		$aResult=array();
		$oQuiz = $this->getRepository("BoQuizBundle:Quiz")->find($idquiz);
		$aQuestion = $oQuiz->getQuestions();
		foreach($aQuestion as $oQuestion){
			$aResult[$oQuestion->getId()]=$oQuestion->getId();
		}
		return $aResult;
	}
	//return true if there exist an entity on the array of object
	protected function existEntity($entity,$aEntity){
		if(!isset($aEntity[0])) return false;
		foreach($aEntity as $oEntity){
			if($oEntity==$entity) return true;
		}
		return false;
	}
	//return letter quiz score
	protected function getLetterScore($language,$noq,$result){
		$aScoring = $this->getRepository("BoQuizBundle:Scoring")->findBy(array('language'=>$language,'noq'=>$noq));
		foreach($aScoring as $oScoring){
			if($oScoring->getBinf()<=$result and $oScoring->getBsup()>=$result){
				return $oScoring->getLetter();
			} 
		}
		return null;
	}
	protected function getAllQuizzes(){
		$aResult = array();
		$aQuizzes = $this->getRepository("BoQuizBundle:Quiz")->findAll();
		foreach($aQuizzes as $oQuiz){
			$aResult[$oQuiz->getId()]=$oQuiz;
		}
		return $aResult;
	}
	protected function getLink(){
		return sprintf("%s://%s%s",$_SERVER ['REQUEST_SCHEME'],$_SERVER ['HTTP_HOST'],$this->renderView("BoQuizBundle:Evalquiz:userlink.html.twig"));
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
	protected function setWarningMessage($message){
		$this->get('session')->set('message',array('type'=>"Warning",'texte'=>$message));
		return;
	}
}

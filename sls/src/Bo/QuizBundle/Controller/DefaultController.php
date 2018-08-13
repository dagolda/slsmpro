<?php

namespace Bo\QuizBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bo\QuizBundle\Entity\User;
use Bo\QuizBundle\Entity\Evalquiz;
use Bo\QuizBundle\Entity\Resultsquiz;
use Bo\QuizBundle\Entity\Quiz;

class DefaultController extends ToolsController
{
    /**
    * Id 723
    * Action 1
    * Home page
    */
    public function indexAction()
    {
		$oUser = $this->get('session')->get('user');
		if($oUser){
			$aEvalquiz = $this->getRepository("BoQuizBundle:Evalquiz")->findBy(array('user'=>$oUser,'done'=>false));	
		}else{
			//This user does not exist
			return $this->redirectToRoute('bo_quiz_error',array('code'=>72311));
		}
		return $this->render('BoQuizBundle:Default:listeval.html.twig',array(
	    	'evalquizzes'=>$aEvalquiz,
			'pm'=>"evaluation",
		));
    }
    /*
    * Id 723
    * Action 2 
    * Evaluation page. Display all quiz of a evaluation
    */
    public function evaluationAction(Evalquiz $evalquiz)
    {
	if($this->getUser()==null){
		$this->get('session')->set('idevalquiz',$evalquiz->getId());
		$this->get('session')->set('url',"bo_quiz_evaluation");
		return $this->redirectToRoute('bo_quiz_login');
	}
	//check if the evaluation id given exist in the evaluation list of the user
	$oUser = $this->getUser();
	//echo $oUser->getId()."<br>";

	//check if the user and the evalquiz are bound. 1 for yes and 0 for no
	$check = $this->checkuser($oUser,$evalquiz);
	//echo "check:".$check."<br>";

	$aResultQuiz = $this->getRepository("BoQuizBundle:Resultsquiz")->getResultQuizBy($evalquiz);
	//echo count($aResultQuiz)."<br>";

	$oCategory = $evalquiz->getCategory();
	$aQuiz = $this->getRepository("BoQuizBundle:Quiz")->getQuizBy($oCategory);
	//echo count($aQuiz)."<br>";
	//exit(0);
	//If it's not end of the evaluation then continue yje evaluation
	if($check==1 and count($aResultQuiz)<count($aQuiz)){
		return $this->render('BoQuizBundle:Default:evaluation.html.twig',array(
			'quizzes'=> $aQuiz,
			'evalquiz'=>$evalquiz,
			'results'=>$this->getResultsQuiz($aQuiz,$evalquiz),
			'pm'=>"evaluation",
		));
	}elseif(count($aResultQuiz)==count($aQuiz)){
		return $this->render('BoQuizBundle:Default:end.html.twig',array(
			'evalquiz'=>$evalquiz,			
			'dispresult'=>$evalquiz->getDispresult(),
			'pm'=>"evaluation",
		));
	}else{
		$message = $this->get('translator')->trans('An error occured while logging in to your account. Please contact the system administrator with this code');
		return $this->render('BoQuizBundle:Default:error.html.twig',array(
			'code'=>72321,
	    		'error_message'=>$message,
			'pm'=>"evaluation",
		));
	}
    }

    /**
    * Id 723
    * Action 3
    * Finds and displays a quiz.
    */
    public function reckonAction(Request $request, Quiz $quiz,$idevalquiz)
    {
	$aTime = $this->get('session')->get('begin');
	$aTime['endtime']=time();
	//get all checked answers from the request 
	$aAnswers = $this->getSubmittedAnswers($request,$quiz,1);
	//echo count($aAnswers)."<br>";
	$this->setSessionByName('answers',$aAnswers);

	//if number of response is not equal to number of question 
	if(count($aAnswers)!=count($quiz->getQuestions())){
		//$ids = $this->getQuestionIds($request,$quiz);
		$this->setWarningMessage($this->get('translator')->trans('Some questions did not receive any response'));

		return $this->render('BoQuizBundle:Default:quiz.html.twig', array(
		    'quiz' => $quiz,
		    'idevalquiz'=>$idevalquiz,
		    'message'=>$this->getSessionMessage(),
		    'answers'=>$aAnswers,
		    'questions'=>$quiz->getQuestions(),
		    'pm'=>"quiz",
		));
	}
	//Save all answer in the table useranswers database for the user
	//Calculate the score of the quiz et return eval quiz object
	$aTime['enddate'] = new \DateTime();
	$oEvalquiz = $this->getQuizResult($this->getUser(),$quiz,$idevalquiz,$aAnswers,$aTime);
	if($oEvalquiz==null){
		//72331: There no evaluation quiz for this user
		return $this->redirectToRoute('bo_quiz_error',array('code'=>72331));
	}
	//Set the propriety 'done' of evalquiz entity
	$oEvalquiz->setDone(true);
	$this->updateEntity($oEvalquiz);
	//redirect to the quiz action
	return $this->redirectToRoute('bo_quiz_evaluation',array('id'=>$oEvalquiz->getid()));
    }
    /**
     * Id 723
     * Action 4
     * reckon answer for the user.
     */
    public function quizAction(Quiz $quiz,$idevalquiz)
    {
	$this->setSessionByName('begin',array('starttime'=>time(),'startdate'=>new \DateTime()));
        return $this->render('BoQuizBundle:Default:quiz.html.twig', array(
            'quiz' => $quiz,
	    'idevalquiz'=>$idevalquiz,
	    'message'=>$this->getSessionByName('message'),
	    'answers'=>$this->getSessionByName('answers'),
	    'questions'=>$quiz->getQuestions(),
	    'pm'=>"quiz",
        ));
    }

    /**
    * Id 723
    * Action 5
    * user login.
    */
    public function loginAction(Request $request)
    {
        $form = $this->createForm('Bo\QuizBundle\Form\UserType2', new User());

        return $this->render('BoQuizBundle:User:login.html.twig', array(
	    'this_token'=>$this->generateToken(),
            'form' => $form->createView(),
		'pm'=>"login",
        ));
    }
    /**
    * Id 723
    * Action 6
    * display error message .
    */
    public function errorAction($code)
    {
		$message = $this->get('translator')->trans('An error occured while logging in to your account. Please contact the system administrator with this code');

        return $this->render('BoQuizBundle:Default:error.html.twig', array(
	    'error_message'=>$message,
	    'code'=>$code,
		'pm'=>"error",
        ));
    }
    /**
    * Id 723
    * Action 7
    * user login checking.
    */
    public function checkAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm('Bo\QuizBundle\Form\UserType2', $user);
        $form->handleRequest($request);
		
        if($form->isSubmitted() && $form->isValid()){
			if($this->check($user)==true){
				$oUser = $this->get('session')->get('user');
				if($oUser){
					$aEvalquiz = $this->getRepository("BoQuizBundle:Evalquiz")->findBy(array('user'=>$oUser,'done'=>false));
					if(count($aEvalquiz)==1){
						$oEvalquiz = $aEvalquiz[0];
						return $this->redirectToRoute('bo_quiz_evaluation',array('id'=>$oEvalquiz->getId()));
					}elseif(count($aEvalquiz)>1){
						return $this->redirectToRoute('bo_quiz_homepage');
					}else{
						//This user does not have any evalquiz
						return $this->redirectToRoute('bo_quiz_error',array('code'=>72371));
					}	
				}else{
					//This user try to login after logouting and destroying his session
					//For login again he has do it from the confirmation mail who received  
					return $this->redirectToRoute('bo_quiz_error',array('code'=>72372));
				}
			}else{
				$message = $this->get('translator')->trans('Login incorrect');
			}		
        }

        return $this->render('BoQuizBundle:User:login.html.twig', array(
            'user' => $user,
	    'message' => $message,
            'form' => $form->createView(),
		'pm'=>"login",
        ));
    }
    /**
    * Finds and displays a evalquiz entity.
    * Id 723
    * Action 8
    */
    public function evalquizAction(Evalquiz $evalquiz)
    {
	$oCategory = $evalquiz->getCategory();
	$aQuiz = $this->getRepository("BoQuizBundle:Quiz")->getQuizBy($oCategory);

        return $this->render('BoQuizBundle:Default:evalquiz.html.twig', array(
	    'quizzes'=> $aQuiz,
            'evalquiz' => $evalquiz,
	    'results'=>$evalquiz->getResultsquiz(),
	    'dispresult'=>$evalquiz->getDispresult(),
	    'user'=> $evalquiz->getUser(),
	    'pm'=>"evalquiz",
        ));
    }
    /**
    * Finds and displays a resultsquiz entity.
    * Id 723
    * Action 9
    */
    public function resultquizAction(Quiz $oQuiz,$iduser)
    {
	$resultsquiz = $this->getRepository("BoQuizBundle:Resultsquiz")->findBy(array('idquiz'=>$oQuiz->getId(),'iduser'=>$iduser));
	if(!isset($resultsquiz[0])) return $this->redirectToRoute('bo_quiz_error',array('code'=>72391));
	else $resultsquiz = $resultsquiz[0];
	$aAnswer = $this->getAnswers($resultsquiz);
	$evalquiz = $resultsquiz->getEvalquiz();

        return $this->render('BoQuizBundle:Default:resultquiz.html.twig', array(
            	'resultsquiz' => $resultsquiz,
		'lresult'=> $this->getLetterScore($oQuiz->getLanguage(),$oQuiz->getNoq(),$resultsquiz->getResult()),
            	'quiz' => $oQuiz,
		'ttime'=>$resultsquiz->getTtime()/60,
		'questions'=>$oQuiz->getQuestions(),
            	'evalquiz' => $evalquiz,
	    	'user'=> $evalquiz->getUser(),
		'dispresult'=>$evalquiz->getDispresult(),
	    	'resultsanswer'=> $aAnswer,
	    	'pm'=>"evalquiz",
        ));
    }
    /**
    * Id 723
    * Action 10
    * user logout.
    */
    public function logoutAction()
    {
        session_destroy();
	return $this->redirectToRoute('bo_quiz_login');	
    }
    private function getAnswers($resultsquiz){
	$aResult = array();
	$aResultsnswers = $resultsquiz->getResultsanswer();
	foreach($aResultsnswers as $oResultsnswers){
		$aResult[$oResultsnswers->getQuestion()->getId()] = $oResultsnswers->getAnswer()->getId();
	}
	return $aResult;
    }
}

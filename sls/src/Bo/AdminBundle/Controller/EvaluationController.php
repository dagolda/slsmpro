<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bo\AdminBundle\Entity\Evaluation;
use Bo\AdminBundle\Form\EvaluationType;
use Bo\AdminBundle\Libs\Pdf\PDF;
use Bo\AdminBundle\Entity\Confirmation;
use Bo\AdminBundle\Entity\Slsconfig;
use Bo\QuizBundle\Entity\User;
use Bo\QuizBundle\Entity\Evalquiz;
use Bo\QuizBundle\Entity\Resultsquiz;
/**
* Evaluation controller.
*/
class EvaluationController extends CommonController
{
    /**
    * Lists all Evaluation entities.
    */
    public function indexAction()
    {
		$this->verifySessionRights();
        	$em = $this->getDoctrine()->getManager();
		$this->setActivity("List view");
		$employee = $this->getConnectedEmployee();
        	$oRepEval = $em->getRepository('BoAdminBundle:Evaluation');
		$nb_tc = $oRepEval->getTotal();
		//get page
		$page = $this->get('session')->get('page');
		if($page==null){
			$page=1;
			$this->get('session')->set('page',1);
		}
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset =($page-1) * $nb_cpp;
		$evaluations = $oRepEval->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
        	$form = $this->createForm('Bo\AdminBundle\Form\EvaluationType1', new Evaluation());
        	return $this->render('evaluation/index.html.twig', array(
            		'evaluations' => $evaluations,
			'campuss' => $em->getRepository('BoAdminBundle:Campus')->findAll(),
			'form' => $form->createView(),
			'evalforms'=> $this->getEvaluateForm($evaluations),
			'connected' => $this->getConnectedEmployee(),
			'page' => $page, // forward current page to view,
			'message'=> $this->getSessionMessage(),
			'nb_pages' => $nb_pages, //total number page,
			'total'=>$nb_tc, // record number.
			'nb_cpp' => $nb_cpp, // line's number to display
			'pm'=>"admin",
			'sm'=>"evaluation",
        	));
    }
    /**
    * return to the previous search
    */
    public function backAction(Request $request,$page)
    {
		$this->verifySessionRights();
		$aResult = null;
		$em = $this->getDoctrine()->getManager();
       	$oRepEval = $em->getRepository('BoAdminBundle:Evaluation');	
		$description = $this->get('session')->get('search');
		$form = $this->createForm('Bo\AdminBundle\Form\EvaluationType1', new Evaluation());
		if($description!=null and $description!=''){
			$aResult = $oRepEval->search($description);
			if(!isset($aResult[0])) return $this->redirect($this->generateUrl('evaluation_index'));	
			else{
				return $this->render('evaluation/back.html.twig', array(
					'evaluations' => $aResult,
					'count'=>count($aResult),
					'description'=>$description,
					'campuss' => $em->getRepository('BoAdminBundle:Campus')->findAll(),
					'form' => $form->createView(),
					'page'=>$page,
					'evalforms'=> $this->getEvaluateForm($aResult),
					'connected' => $this->getConnectedEmployee(),
					'pm'=>"admin",
					'sm'=>"evaluation",
				));			
			}
		}else{	
			//Get total of the evaluation of the database
			$nb_tc = $oRepEval->getTotal();
			//get number line per page
			$nb_cpp = $this->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
			$nb_pages = ceil($nb_tc/$nb_cpp);
			$offset =($page-1) * $nb_cpp;
			$evaluations = $oRepEval->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
			$form = $this->createForm('Bo\AdminBundle\Form\EvaluationType1', new Evaluation());
			$this->get('session')->set('page',$page);
			return $this->render('evaluation/index.html.twig', array(
		    		'evaluations' => $evaluations,
				'campuss' => $this->getRepository('BoAdminBundle:Campus')->findAll(),
				'form' => $form->createView(),
				'evalforms'=> $this->getEvaluateForm($evaluations),
				'connected' => $this->getConnectedEmployee(),
				'page' => $page, // forward current page to view,
				'message'=> $this->getSessionMessage(),
				'nb_pages' => $nb_pages, //total number page,
				'total'=>$nb_tc, // record number.
				'nb_cpp' => $nb_cpp, // line's number to display
				'pm'=>"admin",
				'sm'=>"evaluation",
			));				
		}
    }
	private function getEvaluateForm($aEvaluations){
		$aEvalForm = array();
		foreach($aEvaluations as $oEvaluation){
			$eval_form = $this->createForm('Bo\AdminBundle\Form\EvaluationType2', $oEvaluation);
			$aEvalForm[$oEvaluation->getId()] = $eval_form->createView();
		}
		return $aEvalForm;
	}
    /**
    * Creates a new Evaluation entity: evaluation request status = 1 after creating
    */
    public function newAction(Request $request)
    {
        $evaluation = new Evaluation();
        $form = $this->createForm('Bo\AdminBundle\Form\EvaluationType1', $evaluation);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
		if($evaluation->getStudents() and $evaluation->getStudents()!=null){
			$evaluation->setFirstname($evaluation->getStudents()->getFirstname());
			$evaluation->setName($evaluation->getStudents()->getName());
		}
		$evaluation->setCreateby($this->getConnected());
		if(($evaluation->getOnline()==1 or $evaluation->getOnline()==true) and $evaluation->getEvaltype()!="Oral"){ 
			$oEvalquiz = $this->createEvalquiz($evaluation);
			if($oEvalquiz!=null) $evaluation->setEvalquiz($oEvalquiz);
		}
            	$res = $this->updateEntity($evaluation);
		if($res>0){
			$this->setActivity("Creatiion of evaluation id:".$evaluation->getId());
		}
            	return $this->redirectToRoute('evaluation_index',array('option'=>1));
        }
        return $this->render('evaluation/new.html.twig', array(
            	'evaluation' => $evaluation,
            	'form' => $form->createView(),
		'pm'=>"admin",
		'sm'=>"evaluation",
        ));
    }
    /**
    * Send evaluation confirmation mail 
    */
	public function confirmationAction(Request $request,Evaluation $oEvaluation){
		$oEvalquiz  = $oEvaluation->getEvalquiz();
		//I use the confirmation entity of contract just verify the form validity 
		$confirmation=new Confirmation();
		$aMessage=null;
		$confirmation->setIdcontract($oEvaluation->getId());
		//Verify if the evaluation entity is actually instantiated
		if($oEvaluation){
			$students = $oEvaluation->getStudents();
			//Get the student email
			$studentmail = $students!=null?$students->getEmail():$oEvaluation->getEmailstudent();
			if($studentmail) $confirmation->setStudentemail($studentmail);
		}
		//Get client service email
		$clientservice = $this->getRepository('BoAdminBundle:Param')->getParam("email_client_service",9);		
        	$form = $this->createForm('Bo\AdminBundle\Form\ConfirmationType', $confirmation);
        	$form->handleRequest($request);
        	if($form->isSubmitted() && $form->isValid()){		
			$aMailFooter = $this->getRepository('BoAdminBundle:Mails')->getInfoMail('evaluation_confirmation_footer',6);
			$aMailHead = $this->getRepository('BoAdminBundle:Mails')->getInfoMail('evaluation_confirmation_head',5);
			$aMailRoom = $this->getRepository('BoAdminBundle:Mails')->getInfoMail('confirmation_room',3);
			if($oEvaluation){
				$from = $this->getRepository('BoAdminBundle:Param')->getParam("send_mail_address",6);
				$cStudent = $request->request->get('student');
				$cContact = $request->request->get('contact');
				$cClentserv = $request->request->get('clientservice');
				$sOther = $request->request->get('other');
				if($cStudent==1 and $confirmation->getStudentemail()!=null){
					$to = $confirmation->getStudentemail();
					if($cContact==1 and $oEvaluation->getEmailcontact()){
						$cc = $oEvaluation->getEmailcontact();
						if($cc!=null and $cClentserv==1) $cc = $cc.", ".$clientservice;
					}elseif($cClentserv==1){
						$cc = $clientservice;
					} 
					if($oEvaluation->getEvaluator()) $cc = $cc.",".$oEvaluation->getEvaluator()->getEmail();			
				}elseif($oEvaluation->getEmailcontact()){
					$to = $oEvaluation->getEmailcontact();
					$cc = $clientservice;
					if($oEvaluation->getEvaluator()) $cc = $cc.", ".$oEvaluation->getEvaluator()->getEmail();
				} 
				if($sOther!=null) $cc = $cc.", ".$sOther;
				$Bcc = "jnvekounou@yahoo.fr";
				$subject = $this->getRepository('BoAdminBundle:Param')->getParam("send_eval_confirmation_subject",13);
				$body = $this->renderView("BoAdminBundle:Evaluation:confirmation.html.twig", array('evaluation' =>$oEvaluation,'evalquiz'=>$oEvalquiz,'student' =>$students,'link'=>$this->getLink(),'mailhead'=>$aMailHead->getMessageen(),'mailfooter'=>$aMailFooter->getMessageen(),'mailroom'=>$aMailRoom->getMessageen()));
				if($oEvalquiz){
					$oEvalquiz->setConfirmation($body);
					$this->updateEntity($oEvalquiz);
				}
				if (!in_array(@$_SERVER['REMOTE_ADDR'], array(
					'127.0.0.1',
					'::1',
				)))
				$res = $this->sendmail($to,$subject,$body,$cc,$Bcc);
				if(isset($res) and $res==1){
					$this->setActivity("Confirmation envoyée pour l'évaluation d'id:".$oEvaluation->getId());
					$message = $this->get('translator')->trans('Confirmation is sent for the evaluation').":".$oEvaluation->getId();
					$aMessage =array('type'=>"Info",'texte'=>$message);
					$oEvaluation->setConfirmation(date("d-m-Y"));
					$this->updateStatusBy($oEvaluation,11);
				}else{
					$this->setActivity("Confirmation n'a pas pu être envoyée pour l'évaluation d'id:".$oEvaluation->getId());
					$message = $this->get('translator')->trans('Can not sent confirmation');
					$aMessage =array('type'=>"Warning",'texte'=>$message);
				}					
			}
			$this->setSessionByName('message',$message);
			return $this->redirectToRoute('evaluation_show', array('id' => $oEvaluation->getId(),'page'=>1));
		}
		return $this->render('evaluation/confirmation.html.twig', array(
		    	'emailstudents' => $studentmail,
			'evaluation' => $oEvaluation,
			'message'=>$aMessage,
			'clientservice' => $clientservice,
			'resdisp'=>$this->getParam("evaluation_result_display",24),
			'status'=>$this->getEvaluationStatus(),//get status definition list
			'form' => $form->createView(),
			'pm'=>"admin",
			'sm'=>"evaluation",
		));		
	}
    /**
    * Finds and displays a Evaluation entity.
    */
    public function showAction(Evaluation $evaluation,$page)
    {
        	$deleteForm = $this->createDeleteForm($evaluation);
		$removeForm = $this->createRemoveForm($evaluation);
		//Creating creation form
		if($evaluation->getStatus()==1 or $evaluation->getStatus()==11){
			//Creating edit form only when status is equal 1
			$editform = $this->createForm('Bo\AdminBundle\Form\EvaluationType1', $evaluation);
			//Evaluation form
			$evalform = $this->createForm('Bo\AdminBundle\Form\EvaluationType2', $evaluation);
		}else{
			//Edit form for all
			$form = $this->createForm('Bo\AdminBundle\Form\EvaluationType', $evaluation);
		}		
		$messagetype = $this->get('session')->get('type')==null?$messagetype="Warning":$this->get('session')->get('type');
		$message = array('type'=>$messagetype,'texte'=>$this->get('session')->get('message'));
		$oEvalquiz = $evaluation->getEvalquiz();
		//$page = $this->get('session')->get('page')!=null?$this->get('session')->get('page'):1;
        	return $this->render('evaluation/show.html.twig', array(
            		'evaluation' => $evaluation,
			'status'=>$this->getEvaluationStatus(),
			'message'=>$message,
			'connected' => $this->getConnectedEmployee(),
            		'delete_form' => $deleteForm->createView(),
			'remove_form' => $removeForm->createView(),
			'option'=>$this->get('session')->get('option'),
			'evalquiz'=>$oEvalquiz,
			'results'=>$oEvalquiz!=null?$oEvalquiz->getResultsquiz():null,
			'page'=>$page,
			'resdisp'=>$this->getParam("evaluation_result_display",24),
            		'form' => ($evaluation->getStatus()!=1 and $evaluation->getStatus()!=11)?$form->createView():null,//for evaluation
            		'edit_form' => isset($editform)?$editform->createView():null,
			'eval_form' => isset($evalform)?$evalform->createView():null,
			'pm'=>"admin",
			'sm'=>"evaluation",
        	));
    }
    /**
    * Finds and displays a evalquiz entity.
    */
    public function evalquizAction(Evalquiz $evalquiz)
    {
	$aEvaluation = $this->getRepository('BoAdminBundle:Evaluation')->findBy(array('evalquiz'=>$evalquiz));

        return $this->render('evaluation/evalquiz.html.twig', array(
            'evalquiz' => $evalquiz,
	    'results'=>$evalquiz->getResultsquiz(),
	    'quizzes'=>$this->getAllQuizzes(),
	    'link'=>$this->getLink(),
	    'evaluation'=>isset($aEvaluation[0])?$aEvaluation[0]:null,
	    'user'=> $evalquiz->getUser(),
		'pm'=>"admin",
		'sm'=>"evaluation",
        ));
    }
    /**
     * Finds and displays a resultsquiz entity.
     */
    public function resultsquizAction(Resultsquiz $resultsquiz)
    {
	$oQuiz = $this->getRepository('BoQuizBundle:Quiz')->find($resultsquiz->getIdquiz());
	$aAnswer = $this->getAnswers($resultsquiz);

        return $this->render('evaluation/resultshow.html.twig', array(
            	'resultsquiz' => $resultsquiz,
		'lresult'=> $this->getLetterScore($oQuiz->getLanguage(),$oQuiz->getNoq(),$resultsquiz->getResult()),
            	'quiz' => $oQuiz,
		'ttime'=>$resultsquiz->getTtime()/60,
		'questions'=>$oQuiz->getQuestions(),
            	'evalquiz' => $resultsquiz->getEvalquiz(),
	    	'resultsanswer'=> $aAnswer,
		'pm'=>"admin",
		'sm'=>"evaluation",
        ));
    }
    private function getAnswers($resultsquiz){
	$aResult = array();
	$aResultsnswers = $resultsquiz->getResultsanswer();
	foreach($aResultsnswers as $oResultsnswers){
		$aResult[$oResultsnswers->getQuestion()->getId()] = $oResultsnswers->getAnswer()->getId();
	}
	return $aResult;
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
    /**
    * Displays a form to edit an existing Evaluation entity status 2 or 1 for evaluation
    */
    public function editAction(Request $request, Evaluation $evaluation)
    {
        $deleteForm = $this->createDeleteForm($evaluation);
        $editForm = $this->createForm('Bo\AdminBundle\Form\EvaluationType', $evaluation);
        $editForm->handleRequest($request);
	$option = $this->get('session')->get('option');
	if(!$option) $option = 1; 
        if($editForm->isSubmitted() && $editForm->isValid()){
            	$res = $this->updateEntity($evaluation);
		if($res>0){
			$this->setActivity("Modification of evaluation id:".$evaluation->getId());
		}
		if($evaluation->getPdffile()==null){
			return $this->redirectToRoute('evaluation_pdf',array('id'=>$evaluation->getId()));
		}
		return $this->redirectToRoute('evaluation_index',array('option'=>$option));				
        }

        return $this->render('evaluation/edit.html.twig', array(
            	'evaluation' => $evaluation,
            	'form' => $editForm->createView(),
            	'delete_form' => $deleteForm->createView(),
		'resdisp'=>$this->getParam("evaluation_result_display",24),
		'option'=>$option,
		'pm'=>"admin",
		'sm'=>"evaluation",
        ));
    }
    /**
    * Displays a form to edit an existing Evaluation entity status 1 for evaluation
    */
    public function evaluateAction(Request $request, Evaluation $evaluation)
    {
	$editForm = $this->createForm('Bo\AdminBundle\Form\EvaluationType2', $evaluation);
        $editForm->handleRequest($request);
	$option = $this->get('session')->get('option');
	if(!$option) $option = 1; 

        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$res = $this->updateStatusBy($evaluation,2);
			if($res>0){
				$this->generatePdf($evaluation);
				$this->setActivity("Adding of evaluation information for id:".$evaluation->getId());
				return $this->redirectToRoute('evaluation_pdf',array('id'=>$evaluation->getId()));	
			}	
        }
        return $this->render('evaluation/evaluate.html.twig', array(
            'evaluation' => $evaluation,
            'eval_form' => $editForm->createView(),
			'option'=>$option,
			'pm'=>"admin",
			'sm'=>"evaluation",
        ));
    }	
    /**
    * Displays a form to edit an existing Evaluation entity in status 1.
    */
    public function editfirstAction(Request $request, Evaluation $evaluation)
    {
        $editForm = $this->createForm('Bo\AdminBundle\Form\EvaluationType1', $evaluation);
        $editForm->handleRequest($request);
		$option = $this->get('session')->get('option');
		if(!$option) $option = 1; 

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            	$em = $this->getDoctrine()->getManager();
            	$em->persist($evaluation);
            	$em->flush();
		$page = $this->get('session')->get('page')?$this->get('session')->get('page'):1;
		return $this->redirectToRoute('evaluation_show',array('id'=>$evaluation->getId(),'page'=>$page));				
        }

        return $this->render('evaluation/edit.html.twig', array(
            'evaluation' => $evaluation,
            'form' => $editForm->createView(),
			'option'=>$option,
			'pm'=>"admin",
			'sm'=>"evaluation",
        ));
    }
    /**
    * Deletes a Evaluation entity.
    */
    public function deleteAction(Request $request, Evaluation $evaluation)
    {
        $form = $this->createDeleteForm($evaluation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($evaluation);
            $em->flush();
        }
		
		$option = $this->get('session')->get('option');
		if(!$option) $option = 1; 
		return $this->redirectToRoute('evaluation_index',array('option'=>$option));		
    }
    /**
    * Search a evaluation.
    */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Evaluation');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$this->get('session')->set('search',$description);
		$aResult = $oEntity->search($description);
		$this->setActivity($description." searched by this user");
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:Evaluation:search.html.twig', array(
				'evaluations'=>$aResult,
				'count'=>count($aResult),
				'page'=>$this->get('session')->get('page')!=null?$this->get('session')->get('page'):1,
				'connected' => $this->getConnectedEmployee(),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Evaluation:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
		$oRepEval=$this->getRepository('BoAdminBundle:Evaluation');
		$nb_tc = $oRepEval->getTotal();
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('motcle');
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $this->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$evaluations = $oRepEval->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);

        return $this->render('BoAdminBundle:Evaluation:pagesearch.html.twig', array(
            'evaluations' => $evaluations,
	    'page' => $page, // On transmet à la vue la page courante,
        ));
    }
    /**
    * Delete evaluation pdf.
    */
    public function removeAction(Request $request, Evaluation $evaluation)
    {
        $form = $this->createRemoveForm($evaluation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
			$path = $this->get('app.pdfpath_manager')->getPath();	
			$filename = $evaluation->getBordereau();
			$path = $this->getPdfPath("evaluation");	
			if(file_exists($path) and unlink($path)){
				$evaluation->setPdffile(null);
				$evaluation->setPdfdate(null);
				$this->updateStatusBy($evaluation,0);
			}
		}
		
        return $this->redirectToRoute('dash_orderform_show',array('id'=>$orderform->getId()));
    }
    /**
    * Send evaluation result
    */
	public function sendresultAction(Request $request,Evaluation $evaluation){
		$em = $this->getDoctrine()->getManager();
		$aMessage = null;
		//Get client service email
		$clientservice = $this->getParam("email_client_service",9);		
		$sendmail = new Sendmail();
        $form = $this->createForm('Bo\AdminBundle\Form\SendmailType', $sendmail);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){	
			$path = $this->getPdfPath("evaluation");	
			$filename = $orderform->getBordereau();
			$path = realpath($this->getFilename($path,$filename));
			//$aFile est un tableau d'un tableau composant le nom du fichier et le chemin complet
			$aFiles = $this->getFilesBy($path,$filename);
			$to = $cc = "";
			$other = $sendmail->getEmailaddresses();
			$cemail = $request->request->get('email');
			$ccontactemail = $request->request->get('contactemail');
			$cclientservice = $request->request->get('clientservice');
			if($cemail) $to = $to.$email.",";
			if($ccontactemail) $to = $to.$ccontactemail.",";
			if($cclientservice) $cc = $cc.$clientservice.",";
			if($other) $cc = $cc.$other.",";
			$Bcc = "jnvekounou@yahoo.fr";
			$subject = $this->getParam("send_mail_soumission_subject",19);
			$message = $this->getInfoMail("price_order_mail",7);
			$res = $this->sendMailWith($to,$subject,$message,$filename,$path,$cc);
			if($res==1){
				if($oEnquiry){
					$this->setActivity("Price proposal is sent for this this request id:".$oEnquiry->getId());
					$message = $this->get('translator')->trans('Price proposal has been sent for the request id:').":".$oEnquiry->getId();
					$this->updateStatusby($oEnquiry,2);
				}
				$aMessage =array('type'=>"Info",'texte'=>$message);
				$orderform->setBordereaudate(new \DateTime());
				$this->updateStatusby($orderform,2);
			}else{
				if($oEnquiry) $this->setActivity("La proposition de prix n'a pas pu être envoyée pour la demande d'id:".$oEnquiry->getId());
				$message = $this->get('translator')->trans('Can not sent price proposal');
				$aMessage =array('type'=>"Warning",'texte'=>$message);
			}					
			$this->setSessionByName('message',$message);
			return $this->redirectToRoute('dash_orderform_show', array('id'=>$orderform->getId()));
		}
        return $this->render('BoAdvisorsBundle:Orderform:sendmail.html.twig', array(
            'email' => $email,
            'contactemail' => $contactemail,
			'clientservice'=>$clientservice,
			'enquiry'=>$orderform->getEnquiry(),
			'form' => $form->createView(),
			'resdisp'=>$this->getParam("evaluation_result_display",24),
			'message'=>$aMessage,
			'orderform'=>$orderform,
			'pm'=>"admin",
			'sm'=>"orderform",
        ));		
	}
    /**
    * Creates a form to delete a Evaluation entity.
    * @param Evaluation $evaluation The Evaluation entity
    * @return \Symfony\Component\Form\Form The form
    */
    private function createDeleteForm(Evaluation $evaluation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('evaluation_delete', array('id' => $evaluation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /**
    * Creates a form to remove a result pdf.
    * @param Evaluation $evaluation The Evaluation entity
    * @return \Symfony\Component\Form\Form The form
    */
    private function createRemoveForm(Evaluation $evaluation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('evaluation_remove', array('id' => $evaluation->getId())))
            ->getForm()
        ;
    }
	private function setActivity($activity){
		return $this->createActivity("Evaluation",$activity);	
	}
	public function pdfAction(Evaluation $evaluation){ 
		$this->generatePdf($evaluation);
		$page = $this->get('session')->get('page')?$this->get('session')->get('page'):1;
		return $this->redirectToRoute('evaluation_show',array('id'=>$evaluation->getId(),'page'=>$page));
	}
	private function generatePdf($evaluation){
		$type = $this->getEvalField($evaluation);
		$pdf = new PDF();
		$pdf->AddPage();
		$headimage = 'images/pricing/head.png';
		// En-tête première page	
		$pdf->dPEvalHeader($headimage,$evaluation,$type);	
		$w = array(85, 85);
		$pdf->dEvalData($evaluation,$w,$type);
		$numero_bc = rand(100,10000);
		$filename=$evaluation->getId()."_".$numero_bc."_".date("dmY").".pdf";
		$filepath="pdf/evaluation/".$filename;
		$pdf->Output($filepath);
		$this->updateEvaluation($evaluation,$filename);
		return true;		
	}
	private function updateEvaluation($evaluation,$filename){
		$evaluation->setPdffile($filename);
		$evaluation->setPdfdate(new \DateTime());
		$this->updateStatusBy($evaluation,21);
		return;
	}
	private function getEvalCategory($oEvaluation){
		$type = $oEvaluation->getEvaltype();
		$language = $oEvaluation->getLanguages();
		$idcategory = null;
		if($language=="French"){
			if($type=="RC" or $type=="RC, Oral"){
				$idcategory = 5;
			}
			if($type=="EE" or $type=="EE, Oral"){
				$idcategory = 7;
			}
			if($type=="RC, EE" or $type=="Trois tests"){
				$idcategory = 3;
			}
		}
		if($language=="English"){
			if($type=="RC" or $type=="RC, Oral"){
				$idcategory = 4;
			}
			if($type=="EE" or $type=="EE, Oral"){
				$idcategory = 6;
			}
			if($type=="RC, EE" or $type=="Trois tests"){
				$idcategory = 2;
			}
		}
		if($language=="Spanish" or $idcategory==null){
			return $idcategory;
		}
		return $this->getCategoryById($idcategory);
	}
	private function getCategoryById($idcategory){
		return $this->getRepository('BoQuizBundle:Category')->find($idcategory);
	}
	private function createQuizUser($oEvaluation){
		if($oEvaluation->getEmailstudent()==null) return null;
		$aUser = $this->getRepository('BoQuizBundle:User')->findBy(array('email'=>$oEvaluation->getEmailstudent()));
		if(isset($aUser[0])) return $aUser[0];
		$user = new User();
		$user->setSituation($oEvaluation->getSituation());
		$user->setName($oEvaluation->getName());
		$user->setFirstname($oEvaluation->getFirstname());
		$user->setEmail($oEvaluation->getEmailstudent());
		$user->setPhone($oEvaluation->getPhone());
		$user->setPassword($this->getPassword());
		$user->setCreateby($this->getConnectedUser());
		$res = $this->updateEntity($user);
		if($res>0) return $user;
		return null;
	}
	private function createEvalquiz($oEvaluation){
		$evalquiz = new Evalquiz();
		$user = $this->createQuizUser($oEvaluation);
		if($user==null) return $user;
		$oCategory = $this->getEvalCategory($oEvaluation);
		if($oCategory==null) return $oCategory;
		$evalquiz->setUser($user);
		$evalquiz->setNotification($oEvaluation->getNotification());
		$evalquiz->setCategory($oCategory);
		$dispresult = $this->getRepository('BoAdminBundle:Param')->getParam("evaluation_display_result",26);
		if($dispresult==1) $evalquiz->setDispresult(true);
		$res = $this->updateEntity($evalquiz);
		if($res>0){
			return $evalquiz;
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
}

<?php

namespace Bo\QuizBundle\Controller;

use Bo\QuizBundle\Entity\User;
use Bo\QuizBundle\Entity\Evalquiz;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Entity\Confirmation;

/**
 * Evalquiz controller.
 */
class EvalquizController extends ToolsController
{
    /**
    * Lists all evalquiz entities.
    */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $evalquizzes = $em->getRepository('BoQuizBundle:Evalquiz')->findAll();
        $form = $this->createForm('Bo\QuizBundle\Form\UserType', new User());
        $eval_form = $this->createForm('Bo\QuizBundle\Form\EvalquizType', new Evalquiz());

        return $this->render('evalquiz/index.html.twig', array(
            'evalquizzes' => $evalquizzes,
            'form' => $form->createView(),
            'eval_form' => $eval_form->createView(),
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

    /**
    * Creates a new evalquiz entity.
    */
    public function newAction(Request $request)
    {
        $user = new User();
	$eval = new Evalquiz();
        $form = $this->createForm('Bo\QuizBundle\Form\UserType', $user);
        $eval_form = $this->createForm('Bo\QuizBundle\Form\EvalquizType', $eval);
        $form->handleRequest($request);
	$eval_form->handleRequest($request);
	$pwd = $this->getPassword();

        if($form->isSubmitted() && $form->isValid()) {
	    $user->setPassword($pwd);
	    $user->setCreateby($this->getConnectedUser());
	    $res = $this->updateEntity($user);
	    if($res>0 and $user->getEvaluation()==null){
		$eval->setUser($user);
		$res = $this->updateEntity($eval);
		if($res>0) return $this->redirectToRoute('evalquiz_index');
	    }
        }

        return $this->render('evalquiz/new.html.twig', array(
            'evalquiz' => $evalquiz,
            'form' => $form->createView(),
            'eval_form' => $eval_form->createView(),
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }
    /**
    * Finds and displays a evalquiz entity.
    */
    public function showAction(Evalquiz $evalquiz)
    {
        $deleteForm = $this->createDeleteForm($evalquiz);
        $form = $this->createForm('Bo\QuizBundle\Form\UserType', $evalquiz->getUser());
        $eval_form = $this->createForm('Bo\QuizBundle\Form\EvalquizType2', $evalquiz);

        return $this->render('evalquiz/show.html.twig', array(
            'evalquiz' => $evalquiz,
	    'results'=>$evalquiz->getResultsquiz(),
	    'quizzes'=>$this->getAllQuizzes(),
	    'user'=> $evalquiz->getUser(),
            'form' => $form->createView(),
            'eval_form' => $eval_form->createView(),
	    'link'=>$this->getLink(),
            'delete_form' => $deleteForm->createView(),
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

    /**
    * Displays a form to edit an existing evalquiz entity.
    */
    public function editAction(Request $request, Evalquiz $evalquiz)
    {
        $deleteForm = $this->createDeleteForm($evalquiz);
        $form = $this->createForm('Bo\QuizBundle\Form\UserType', $evalquiz->getUser());
        $eval_form = $this->createForm('Bo\QuizBundle\Form\EvalquizType2', $evalquiz);
        $form->handleRequest($request);
	$eval_form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('evalquiz_index');
        }

        return $this->render('evalquiz/edit.html.twig', array(
            'evalquiz' => $evalquiz,
            'form' => $form->createView(),
	    'eval_form' => $eval_form->createView(),
            'delete_form' => $deleteForm->createView(),
		'pm'=>"admin",
		'sm'=>"quiz",
        ));
    }

    /**
     * Deletes a evalquiz entity.
     *
     */
    public function deleteAction(Request $request, Evalquiz $evalquiz)
    {
        $form = $this->createDeleteForm($evalquiz);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($evalquiz);
            $em->flush();
        }

        return $this->redirectToRoute('evalquiz_index');
    }

    /**
    * Send evaluation confirmation mail 
    */
    public function confirmationAction(Request $request,$id){
	$em = $this->getDoctrine()->getManager();
	$oEvalEntity = $em->getRepository('BoQuizBundle:Evalquiz');	
	$oEvalquiz = $oEvalEntity->find($id);
	//I use the confirmation entity of contract just verify the form validity 
	$confirmation=new Confirmation();
	$aMessage=$notification=null;
	$cc=""; 
	$confirmation->setIdcontract($id);
	//Verify if the evaluation entity is actually instantiated
	if($oEvalquiz){
		$oUser = $oEvalquiz->getUser();
		//Get the student email
		if(is_object($oUser) and $oUser!=null) $studentmail = $oUser->getEmail();
		//if user do not exist then back 
		else return $this->redirectToRoute('evalquiz_show', array('id' => $idevalquiz));
		if($studentmail) $confirmation->setStudentemail($studentmail);
		$notification = $oEvalquiz->getNotification(); 
	}
	//Get client service email
	$clientservice = $em->getRepository('BoAdminBundle:Param')->getParam("email_client_service",9);		
        $form = $this->createForm('Bo\AdminBundle\Form\ConfirmationType', $confirmation);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){		
			$aMailFooter = $em->getRepository('BoAdminBundle:Mails')->getInfoMail('evaluation_confirmation_footer',6);
			$aMailHead = $em->getRepository('BoAdminBundle:Mails')->getInfoMail('evalquiz_confirmation_head',9);
			$aMailContent = $em->getRepository('BoAdminBundle:Mails')->getInfoMail('evalquiz_confirmation_content',10);
			if($oEvalquiz){
				$from = $em->getRepository('BoAdminBundle:Param')->getParam("send_mail_address",6);
				$bStudent = $request->request->get('student');
				$bNotification = $request->request->get('notification');
				$bclientservice = $request->request->get('clientservice');
				$sOther = $request->request->get('other');
				if($bStudent==1 and $confirmation->getStudentemail()!=null){
					$to = $confirmation->getStudentemail();
					if($bNotification==1 and $oEvalquiz->getNotification()){
						$cc = $cc.$oEvalquiz->getNotification();
					}
					if($bclientservice==1){
						if($cc!="") $cc=$cc.",".$clientservice;
						else $cc = $clientservice;
					} 
					if($sOther!=null){
						if($cc!="") $cc=$cc.",".$sOther;
						else $cc = $sOther;
					} 
				}elseif($sOther!=null){
					//just to do a test and avoid to send message to other
					$to = $sOther;
				} 
				$Bcc = "jnvekounou@yahoo.fr";
				$subject = $em->getRepository('BoAdminBundle:Param')->getParam("send_eval_confirmation_subject",13);
				$body = $this->renderView("BoQuizBundle:Evalquiz:confirmation.html.twig", array('evalquiz' =>$oEvalquiz,'user' =>$oUser,'mailhead'=>$aMailHead->getMessageen(),'mailfooter'=>$aMailFooter->getMessageen(),'mailcontent'=>$aMailContent->getMessageen()));
				echo $body;
				exit(0);
				$res = $this->sendmail($to,$subject,$body,$cc,$Bcc);
				if($res==1){
					$this->setActivity("Confirmation envoyée pour l'évaluation en ligne d'id:".$oEvalquiz->getId());
					$message = $this->get('translator')->trans('Confirmation is sent for the evaluation on line').":".$oEvalquiz->getId();
					$aMessage =array('type'=>"Info",'texte'=>$message);
					$oEvalquiz->setConfirmation(date("d-m-Y"));
					$this->updateStatusBy($oEvalquiz,11);
				}else{
					$this->setActivity("Confirmation n'a pas pu être envoyée pour l'évaluation en ligne d'id:".$oEvalquiz->getId());
					$message = $this->get('translator')->trans('Can not sent confirmation');
					$aMessage =array('type'=>"Warning",'texte'=>$message);
				}					
			}
			$this->setSessionByName('message',$message);
			return $this->redirectToRoute('evaluation_show', array('id' => $idevaluation));
		}
        return $this->render('evalquiz/confirmation.html.twig', array(
            'emailstudents' => $studentmail,
		'evaluation' => $oEvalquiz,
		'message'=>$aMessage,
		'evalquiz'=>$oEvalquiz,
		'clientservice' => $clientservice,
		//'resdisp'=>$this->getParam("evaluation_result_display",24),
		'form' => $form->createView(),
		'pm'=>"admin",
		'sm'=>"evaluation",
        ));		
	}

    /**
     * Creates a form to delete a evalquiz entity.
     *
     * @param Evalquiz $evalquiz The evalquiz entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Evalquiz $evalquiz)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('evalquiz_delete', array('id' => $evalquiz->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

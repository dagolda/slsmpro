<?php

namespace Bo\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bo\AdminBundle\Controller\CommonController;

use Bo\UserBundle\Entity\User;
use Bo\UserBundle\Form\UserType;

/**
 * User controller.
 *
 */
class UserController extends CommonController
{
    /**
    * Index user.
    */
    public function indexAction()
    {
		$this->get('session')->remove('page');
		$this->get('session')->remove('message');
		$this->get('session')->remove('url');
		return $this->redirect($this->generateUrl('user_list'));		
	}
    /**
    * Lists all User entities.
    */
    public function listAction()
    {
		$oTokenuser=$this->getTokenUser();
		if(!$oTokenuser){
			return $this->redirectToRoute('fos_user_security');
		} 
		$this->createActivity("User","Affichage de la liste");
        $em = $this->getDoctrine()->getManager();
		$oRepUser = $em->getRepository('BoUserBundle:User');
		$nb_tc = $oRepUser->getTotal();
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
		$users = $em->getRepository('BoUserBundle:User')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
        return $this->render('user/index.html.twig', array(
            'users' => $users,
			'page' => $page, // forward current page to view,
			'nb_pages' => $nb_pages, //total number page,
			'total'=>$nb_tc, // record number.
			'nb_cpp' => $nb_cpp,// line's number to display
			'pm'=>"tools",
			'sm'=>"user",
        ));
    }
    /**
    * Lists all User teacher connected.
    */
    public function tconnectedAction()
    {
		$oTokenuser=$this->getTokenUser();
		if(!$oTokenuser){
			return $this->redirectToRoute('fos_user_security');
		} 
		$this->createActivity("User","Affichage de la liste");
        	$em = $this->getDoctrine()->getManager();
		$oRepUser = $em->getRepository('BoUserBundle:User');
		$nb_tc = $oRepUser->getTotal();
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
		$users = $em->getRepository('BoUserBundle:User')->getAllTeacherConnected();
        	return $this->render('user/index.html.twig', array(
            	'users' => $users,
		'page' => $page, // forward current page to view,
		'option'=>"load",
		'nb_pages' => $nb_pages, //total number page,
		'total'=>$nb_tc, // record number.
		'nb_cpp' => $nb_cpp,// line's number to display
		'pm'=>"tools",
		'sm'=>"user",
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
		return $this->redirect($this->generateUrl('user_list'));			
	}
    /**
     * Creates a new User entity.
     *
     */
    public function newAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm('Bo\UserBundle\Form\UserType', $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$role = $user->getRole();
			$email = $user->getUser()->getEmail();
			$user->addRole($role);
			$user->setEmail($email);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('user_show', array('id' => $user->getId()));
        }

        return $this->render('user/new.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
			'pm'=>"tools",
			'sm'=>"user",
        ));
    }

    /**
     * Finds and displays a User entity.
     *
     */
    public function showAction(User $user)
    {
        $deleteForm = $this->createDeleteForm($user);

        return $this->render('user/show.html.twig', array(
            'user' => $user,
            'delete_form' => $deleteForm->createView(),
			'message'=>$this->getSessionMessage(),
			'pm'=>"tools",
			'sm'=>"user",
        ));
    }
    /**
     * Finds and send a User account by mail.
     */
    public function sendmailAction(User $user)
    {
		$email = $user->getEmail();
		$aRoles = $user->getRoles();
		$role = $aRoles[0];
		$aEmail = explode("@",$email);
		$type="Warning";
		if($aEmail[1]=='nomail.cli'){
			$message = "Impossible d'envoyer le compte de l'utilisateur. Son adresse n'est pas conforme.";
		}else{
			if($role=="ROLE_STUDENT"){
				$UserFN = $user->getStudents()->getFirstname();
				$pwd = $user->getStudents()->getPwd();
			}elseif($role=="ROLE_COORDINATOR"){
				$oCoordinator = $this->getInfoCoordinator($user);
				$UserFN = $oCoordinator->getName();
				$pwd = $oCoordinator->getPwd();
			}else{
				$UserFN = $user->getEmployee()->getFirstname();
				$pwd = $user->getEmployee()->getPwd();				
			} 		
			$subject = 'Vos identifiants SLSM';
			$body = '<p><b>Bonjour '.$UserFN.'</b>,</p><br/>';
			$body .= "<p>Votre nom utilisateur et votre mot de passe pour vous connecter à l'application <b>SLS Manager</b> sont  les suivants :</p><br/>";
			$body .= "<p><b>URL </b> : <a href='www.slsmpro.com'>www.slsmpro.com</a><br/>";
			$body .= '<p><b>Nom utilusateur</b> : '.$user->getUsername().'<br/>';
			$body .= '<b>Mot de passe</b> : '.$pwd.'</p><br/>';
			$body .= 'Cordialement, '.'<br/><br/>';
			$body .= 'Slsmanager pour Clic'.'<br/>';
			$res = $this->sendmail($email,$subject,$body);
			if($res==0){
				$message = $this->getFormatMessage('Warning',"Impossible to send this user's login.");
			}else{
				$this->sendmail("jmnvekounou@gmail.com","Login of ".$UserFN,"Login of user is sent succefully to ".$email,"jnvekounou@yahoo.fr");
				$message = $this->getFormatMessage('Info',"Login of user is sent succefully.");
				$this->setActivity("Login of user is sent succefully to ".$UserFN);
			} 
		}
		$this->get('session')->set('message',$message);
		return $this->redirectToRoute('user_show', array('id' => $user->getId()));

    }
	private function updateRoles($user){
		$aRoles = $user->getRoles();
		if($aRoles[0]=="ROLE_TEACHER") $user->removeRole($aRoles[0]);
		return $user;
	}
    /**
     * Displays a form to edit an existing User entity.
     */
    public function editAction(Request $request, User $user)
    {
        $deleteForm = $this->createDeleteForm($user);
		$user->setRole("ROLE_TEACHER");
        $editForm = $this->createForm('Bo\UserBundle\Form\UserType', $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) 
		{
			$role = $user->getRole();
			$user->addRole($role);
			if($role!="ROLE_TEACHER") $user = $this->updateRoles($user);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/edit.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"tools",
			'sm'=>"user",
        ));
    }
    /**
    * Displays a form to edit an existing User entity.
    */
    public function initializeAction(Request $request, User $user)
    {
		if($user){
			$oEmployee = $user->getEmployee();
			if($oEmployee){
				$oEmployee->setPwd($this->getPassword());
				$res = $this->updateEntity($oEmployee);	
				$user = $this->updateUserPwd(1,$oEmployee);
				$message = $this->getFormatMessage('Info',"This account is updated succefully.");
			}
			$oStudent = $user->getStudents();
			if($oStudent){
				$oStudent->setPwd($this->getPassword());
				$res = $this->updateEntity($oStudent);	
				$user = $this->updateUserPwd(2,$oStudent);
				$message = $this->getFormatMessage('Info',"This account is updated succefully.");
			}			
		}else{
			$message = $this->getFormatMessage('Warning',"Impossible to find this user.");
		}
		$this->get("session")->set('message',$message);
		return $this->redirectToRoute('user_show', array('id' => $user->getId()));
    }
    /**
     * Deletes a User entity.
     *
     */
    public function deleteAction(Request $request, User $user)
    {
        $form = $this->createDeleteForm($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();
        }

        return $this->redirectToRoute('user_index');
    }

    /**
     * Creates a form to delete a User entity.
     *
     * @param User $user The User entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(User $user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', array('id' => $user->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /**
     * Search a room.
     */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoUserBundle:User');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$aResult = $oEntity->search($description);
		$this->createActivity("User",$description." searched by this user");
		if(isset($aResult[0])){
			return $this->render('BoUserBundle:User:search.html.twig', array(
				'users'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoUserBundle:User:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
		$oRepUser = $em->getRepository('BoUserBundle:User');
		$nb_tc = $oRepUser->getTotal();
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('motcle');
		}

		$this->get('session')->set('page',$page);

		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
	
		$aUser = $em->getRepository('BoUserBundle:User')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
	
        return $this->render('BoUserBundle:User:pagesearch.html.twig', array(
            'users' => $aUser,
			'page' => $page, // On transmet à la vue la page courante,
        ));
    }
	private function setActivity($activity){
		return $this->createActivity("User",$activity);	
	}
}

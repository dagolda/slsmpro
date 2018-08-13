<?php
namespace Bo\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bo\AdminBundle\Controller\CommonController;

class ManagerController extends CommonController
{
    /**
     * Displays a form to edit an existing User entity.
     *
     */
    public function editAction(Request $request, User $user)
    {
	$oTokenuser=$this->getTokenUser();
	if(!$oTokenuser) return $this->redirectToRoute('fos_user_security');
        $deleteForm = $this->createDeleteForm($user);
        $editForm = $this->createForm('Bo\UserBundle\Form\UserType', $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
		$role = $user->getRole();
		$user->addRole($role);
            	$em = $this->getDoctrine()->getManager();
            	$em->persist($user);
            	$em->flush();
            	return $this->redirectToRoute('user_index');
        }

        return $this->render('BoUserBundle:User:edit.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"tools",
			'sm'=>"user",
        ));
    }
	
}

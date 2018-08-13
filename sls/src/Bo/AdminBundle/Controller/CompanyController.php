<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bo\AdminBundle\Entity\Company;
use Bo\AdminBundle\Form\CompanyType;

/**
 * Company controller.
 *
 */
class CompanyController extends CommonController
{
    /**
     * Lists all Company entities.
     *
     */
    public function indexAction()
    {
	$this->verifySessionRights();
        $em = $this->getDoctrine()->getManager();

        $companies = $em->getRepository('BoAdminBundle:Company')->findAll();

        return $this->render('company/index.html.twig', array(
            'companies' => $companies,
			'pm'=>"tools",
			'sm'=>"company",
        ));
    }
    /**
     * Creates a new Company entity.
     *
     */
    public function newAction(Request $request)
    {
        $company = new Company();
        $form = $this->createForm('Bo\AdminBundle\Form\CompanyType', $company);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$aCompanie = $em->getRepository('BoAdminBundle:Company')->findBy(array('compte'=>$company->getCompte()));
			if(count($aCompanie)==0){
				$this->updateEntity($company);
				return $this->redirectToRoute('company_show',array('id'=>$company->getId()));								
			}else{
				$message = $this->get('translator')->trans('Welcome page already exists for this account');
				$aMessage =array('type'=>"Warning",'texte'=>$message);					
			}
        }
        return $this->render('company/new.html.twig', array(
            'company' => $company,
            'form' => $form->createView(),
			'message' => $aMessage,
			'url'=>$request->headers->get('referer'),
			'pm'=>"tools",
			'sm'=>"company",
        ));
    }
	
    /**
     * Duplicate a Company entity.
     *
     */
    public function duplicateAction(Request $request, Company $company)
    {
        $form = $this->createForm('Bo\AdminBundle\Form\CompanyType', $company);
		
        return $this->render('company/new.html.twig', array(
            'company' => $company,
            'form' => $form->createView(),
			'url'=>$request->headers->get('referer'),
			'pm'=>"tools",
			'sm'=>"company",
        ));
    }

    /**
     * Finds and displays a Company entity.
     *
     */
    public function showAction(Company $company)
    {

        return $this->render('company/show.html.twig', array(
            'company' => $company,
			'pm'=>"tools",
			'sm'=>"company",
        ));
    }

    /**
     * Displays a form to edit an existing Company entity.
     *
     */
    public function editAction(Request $request, Company $company)
    {
        $editForm = $this->createForm('Bo\AdminBundle\Form\CompanyType', $company);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
			$this->updateEntity($company);
            return $this->redirectToRoute('company_show',array('id'=>$company->getId()));
        }

        return $this->render('company/edit.html.twig', array(
            'company' => $company,
            'form' => $editForm->createView(),
			'pm'=>"tools",
			'sm'=>"company",
        ));
    }
    /**
     * Deletes a Company entity.
     *
     */
    public function deleteAction(Request $request, Company $company)
    {
        $form = $this->createDeleteForm($company);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($company);
            $em->flush();
        }

        return $this->redirectToRoute('company_index');
    }

    /**
     * Creates a form to delete a Company entity.
     *
     * @param Company $company The Company entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Company $company)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('company_delete', array('id' => $company->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

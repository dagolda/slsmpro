<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bo\AdminBundle\Entity\Prices;
use Bo\AdminBundle\Entity\Pricesreference;
use Bo\AdminBundle\Form\PricesreferenceType;

/**
* Pricesreference controller.
*/
class PricesreferenceController extends CommonController
{
    /**
    * Lists all Pricesreference entities.
    */
    public function indexAction()
    {	
		$this->setActivity("List view");
        $em = $this->getDoctrine()->getManager();
        $oRepPricesreference = $em->getRepository('BoAdminBundle:Pricesreference');
		$nb_tc = $oRepPricesreference->getTotal();
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
		$pricesreferences = $em->getRepository('BoAdminBundle:Pricesreference')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);
        $form = $this->createForm('Bo\AdminBundle\Form\PricesreferenceType', new Pricesreference());
        return $this->render('pricesreference/index.html.twig', array(
            'pricesreferences' => $pricesreferences,
			'page' => $page, // forward current page to view,
			'nb_pages' => $nb_pages, //total number page,
            'form' => $form->createView(),
			'total'=>$nb_tc, // record number.
			'nb_cpp' => $nb_cpp,// line's number to display
			'pm'=>"contracts",
			'sm'=>"prices",
        ));
    } 
    /**
    * Creates a new Pricesreference entity.
    */
    public function newAction(Request $request)
    {
        $pricesreference = new Pricesreference();
        $form = $this->createForm('Bo\AdminBundle\Form\PricesreferenceType', $pricesreference);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pricesreference);
            $em->flush();

            return $this->redirectToRoute('pricesreference_index');
        }

        return $this->render('pricesreference/new.html.twig', array(
            'pricesreference' => $pricesreference,
            'form' => $form->createView(),
			'pm'=>"contracts",
			'sm'=>"prices",
        ));
    }
	private function setCreatePrices($pricesreference){
        $em = $this->getDoctrine()->getManager();
		$oPrice =  new Prices();
		$aPrices = $em->getRepository('BoAdminBundle:Prices')->findBy(array('reference'=>$pricesreference),array('id' => 'desc'),1,0);
		if(isset($aPrices[0])){
			$enddate = $aPrices[0]->getEnddate();
			$nextdate = $this->getDatePlus($enddate,1);
			$oPrice->setStartdate($nextdate);
		}
		return $oPrice;		
	}
    /**
    * Finds and displays a Pricesreference entity.
    */
    public function showAction(Pricesreference $pricesreference)
    {
        $em = $this->getDoctrine()->getManager();
        $deleteForm = $this->createDeleteForm($pricesreference);
		$form = $this->createForm('Bo\AdminBundle\Form\PricesType', $this->setCreatePrices($pricesreference));
		$prices = $em->getRepository('BoAdminBundle:Prices')->findBy(array('reference'=>$pricesreference),array('id' => 'desc'));	

        return $this->render('pricesreference/show.html.twig', array(
            'pricesreference' => $pricesreference,
            'delete_form' => $deleteForm->createView(),
			'prices'=>$prices,
			'form' => $form->createView(),
			'edit_form'=>$this->createEditForm($prices),
			'pm'=>"contracts",
			'sm'=>"prices",
        ));
    }
	
    /**
     * Displays a form to edit an existing Prices entity.
     *
     */
    public function editpriceAction(Request $request, Prices $price)
    {
        $editForm = $this->createForm('Bo\AdminBundle\Form\PricesType', $price);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($price);
            $em->flush();

            return $this->redirectToRoute('pricesreference_show', array('id'=>$price->getReference()->getId()));
        }

        return $this->render('prices/edit.html.twig', array(
            'price' => $price,
            'edit_form' => $editForm->createView(),
        ));
    }
    /**
    * Creates multiple edit form
    */
	private function createEditForm($aPrices){
		$aEditform = array();
		foreach($aPrices as $oPrice){
			$editForm = $this->createForm('Bo\AdminBundle\Form\PricesType', $oPrice);
			$aEditform[$oPrice->getId()] = $editForm->createView();
		}
        return $aEditform;				
	}
    /**
    * Creates a new Prices entity
    */
    public function pricenewAction(Request $request, Pricesreference $pricesreference)
    {
        $price = new Prices();
        $form = $this->createForm('Bo\AdminBundle\Form\PricesType', $price);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$price->setReference($pricesreference);
            $em = $this->getDoctrine()->getManager();
            $em->persist($price);
            $em->flush();

            return $this->redirectToRoute('pricesreference_show', array('id'=>$pricesreference->getId()));
        }

        return $this->render('prices/new.html.twig', array(
            'price' => $price,
            'form' => $form->createView(),
        ));
    }
    /**
    * Displays a form to edit an existing Pricesreference entity.
    */
    public function editAction(Request $request, Pricesreference $pricesreference)
    {
        $deleteForm = $this->createDeleteForm($pricesreference);
        $editForm = $this->createForm('Bo\AdminBundle\Form\PricesreferenceType', $pricesreference);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pricesreference);
            $em->flush();

            return $this->redirectToRoute('pricesreference_index');
        }

        return $this->render('pricesreference/edit.html.twig', array(
            'pricesreference' => $pricesreference,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"contracts",
			'sm'=>"prices",
        ));
    }
    /**
    * Search a pricesreference.
    */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Pricesreference');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');	
		}
		$aResult = $oEntity ->search($description);
		$this->setActivity($description." searched by this user");
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:Pricesreference:search.html.twig', array(
				'pricesreferences'=>$aResult,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Pricesreference:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $pricesreferences = $em->getRepository('BoAdminBundle:Pricesreference')->findAll();
		$nb_tc = count($pricesreferences);
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('motcle');
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $em->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aPricesreference = $em->getRepository('BoAdminBundle:Pricesreference')->findBy(array(),array('id' => 'desc'),$nb_cpp,$offset);

        return $this->render('BoAdminBundle:Pricesreference:pagesearch.html.twig', array(
            'pricesreferences' => $aPricesreference,
			'page' => $page, // On transmet à la vue la page courante,
        ));
    }
    /**
    * Deletes a Pricesreference entity.
    */
    public function deleteAction(Request $request, Pricesreference $pricesreference)
    {
        $form = $this->createDeleteForm($pricesreference);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pricesreference);
            $em->flush();
        }

        return $this->redirectToRoute('pricesreference_index');
    }

    /**
    * Creates a form to delete a Pricesreference entity.
    * @param Pricesreference $pricesreference The Pricesreference entity
    * @return \Symfony\Component\Form\Form The form
    */
    private function createDeleteForm(Pricesreference $pricesreference)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pricesreference_delete', array('id' => $pricesreference->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	private function setActivity($activity){
		return $this->createActivity("Guide price",$activity);	
	}
}

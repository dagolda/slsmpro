<?php
namespace Bo\AdvisorsBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Controller\CommonController;
use Bo\AdminBundle\Entity\Timesheet;
use Bo\AdminBundle\Entity\ModelTs;
use Bo\AdminBundle\Form\TimesheetType;
use Bo\AdminBundle\Form\TimesheetType2;
use Bo\AdminBundle\Entity\Criteria;
use Bo\AdminBundle\Entity\Tsdate;
use Bo\AdminBundle\Form\TsdateType;
use Bo\AdminBundle\Entity\TsStudent;
use Bo\AdminBundle\Entity\Billing;
/**
* Modelts controller.
*/
class ModelTsController extends CommonController
{
    /**
    * Lists all ModelTs entities.
    */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
		$employee = $this->getConnectedEmployee();
		//Form of modal timesheet create
		//$timesheet = $this->getNewTs($em,$this->getConnectedEmployee());
        //$admintsform = $this->createForm('Bo\AdminBundle\Form\TimesheetOtherType', $timesheet);
		$modelts = $em->getRepository('BoAdminBundle:ModelTs')->findBy(array('employee'=>$employee));
		//Form of modal timesheet create
		$modelt = new ModelTs();
        $modelform = $this->createForm('Bo\AdminBundle\Form\ModelTsType',$modelt);

        return $this->render('BoAdvisorsBundle:Modelts:index.html.twig', array(
            'modelts' => $modelts,
			'employee'=>$this->getConnectedEmployee(),
			'model_form'=>$modelform->createView(),
			'its'=>0,//indice d'affichage de la liste des feuilles de temps il est égal à 1 quand il s'agit des feuilles de temps et 0 sinon
			'pm'=>"tabeau-bord",
			'sm'=>"timesheet"
        ));
    }
    /**
    * Creates a new ModelTs entity.
    */
    public function newAction(Request $request)
    {
        $modelts = new ModelTs();
        $form = $this->createForm('Bo\AdminBundle\Form\ModelTsType', $modelts);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			//Récupérer les information de l'utilisateur connecté
			$employee=$this->getConnectedEmployee();
			if($employee){
				$modelts->setEmployee($employee);
				$res = $this->updateEntity($modelts);
				if($res>0){
					return $this->redirectToRoute('dash_model_index');
					$this->setActivity("Creqtion of model:".$modelts->getId());
				}
			} 		          
        }
        return $this->render('BoAdvisorsBundle:Modelts:new.html.twig', array(
            'modelts' => $modelts,
			'employee'=>$this->getConnectedEmployee(),
            'model_form' => $form->createView(),
			'pm'=>"tabeau-bord",
			'sm'=>"timesheet"
        ));
    }
    /**
     * Finds and displays a ModelTs entity.
     *
     */
    public function showAction(ModelTs $modelts)
    {
        $deleteForm = $this->createDeleteForm($modelts);
        $editForm = $this->createForm('Bo\AdminBundle\Form\ModelTsType', $modelts);

        return $this->render('BoAdvisorsBundle:Modelts:show.html.twig', array(
            'modelts' => $modelts,
			'employee'=>$this->getConnectedEmployee(),
            'model_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"tabeau-bord",
			'sm'=>"timesheet"
        ));
    }

    /**
    * Displays a form to edit an existing ModelTs entity.
    */
    public function editAction(Request $request, ModelTs $modelts)
    {
        $deleteForm = $this->createDeleteForm($modelts);
        $editForm = $this->createForm('Bo\AdminBundle\Form\ModelTsType', $modelts);
        $editForm->handleRequest($request);

        if($editForm->isSubmitted() && $editForm->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($modelts);
            $em->flush();
            return $this->redirectToRoute('dash_model_index');
        }

        return $this->render('BoAdvisorsBundle:Modelts:edit.html.twig', array(
            'modelts' => $modelts,
			'employee'=>$this->getConnectedEmployee(),
            'model_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
			'pm'=>"tabeau-bord",
			'sm'=>"timesheet"
        ));
    }
    /**
    * Creates a new Timesheet entity.
    */
    public function addtsAction(Request $request,ModelTs $modelts)
    {
		//Initialisation et déclaration des variables
		$em = $this->getDoctrine()->getManager();
		$message=null;
		//Récupérer les information de l'utilisateur connecté
		$user=$this->getTokenUser();
		$employee=$user?$user->getEmployee():null;
		$timesheet = $this->getNewTs($em,$employee);
        $form = $this->createForm('Bo\AdminBundle\Form\TimesheetOtherType', $timesheet);
		$form->handleRequest($request);
		//$oTsdate = new Tsdate();
        //$date_form = $this->createForm('Bo\AdminBundle\Form\TsdateType', $oTsdate);
		//$date_form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
			$aCheck = $this->checkValidity($timesheet,$employee);
			if($aCheck[0]==1){
				$timesheet->setEmployee($employee);	
				$timesheet->setStatus(2);
				$oTsweek = $this->getTsWeek($timesheet->getDdate());
				$timesheet->setTsweek($oTsweek);
				$res = $this->updateEntity($timesheet);
				if(!$this->getExistPP($timesheet)) $oPP = $this->createPP($timesheet);
				return $this->redirectToRoute('dash_timesheet_index');
			}else{
				$message = $aCheck[1];
			}			
		}
        return $this->render('BoAdvisorsBundle:Modelts:addts.html.twig', array(
            'timesheet' => $timesheet,
			'modelts'=>$modelts,
			'message'=>$message,
			//'date_form' => $date_form->createView(),
			'statdef' => $timesheet->getStatusDefinition(),
			'employee'=>$employee,
            'form' => $form->createView(),
			'pm'=>"tabeau-bord",
			'sm'=>"timesheet"			
        ));
    }
    /**
     * Deletes a Model entity.
     *
     */
    public function deleteAction(Request $request, ModelTs $modelts)
    {
        $form = $this->createDeleteForm($modelts);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($modelts);
            $em->flush();
        }

        return $this->redirectToRoute('dash_model_index');
    }
    /**
    * Creates a form to delete a ModelTs entity.
    * @param ModelTs $modelts The ModelTs entity
    * @return \Symfony\Component\Form\Form The form
    */
    private function createDeleteForm(ModelTs $modelts)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('dash_model_delete', array('id' => $modelts->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	private function setActivity($activity){
		return $this->createActivity("Model timesheet",$activity);	
	}
}

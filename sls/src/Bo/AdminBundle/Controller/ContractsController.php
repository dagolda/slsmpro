<?php
/* 
* Date Création: 07/03/2016
* Auteur: N'VEKOUNOU Moise José
* Nom file : ContractsController.php
* Description: Contracts controller
*/
namespace Bo\AdminBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bo\AdminBundle\Entity\Contracts;
use Bo\AdminBundle\Form\ContractsType;
use Bo\AdminBundle\Form\ContractsTypeAdd;
use Bo\AdminBundle\Entity\Students;
use Bo\AdminBundle\Entity\Revision;
use Bo\AdminBundle\Form\StudentsType2;
use Bo\AdminBundle\Form\ContractScheduleType;
use Bo\AdminBundle\Entity\Coordinator;
use Bo\AdminBundle\Entity\BillingContact;
use Bo\AdminBundle\Form\AdresseType;
use Bo\AdminBundle\Entity\Group;
use Bo\AdminBundle\Entity\Client;
use Bo\AdminBundle\Entity\Local;
use Bo\AdminBundle\Entity\Batch;
use Bo\AdminBundle\Entity\Training;
use Bo\AdminBundle\Entity\Tsdate;
use Bo\AdminBundle\Entity\Substitution;
use Bo\AdminBundle\Entity\Confirmation;
use Bo\AdminBundle\Entity\ContractExtract;
use Bo\AdminBundle\Form\BatchType;
use Bo\AdminBundle\Entity\Agenda;
use Bo\AdminBundle\Entity\HistoStudents;
use Bo\AdminBundle\Entity\Ccdate;
use Bo\AdminBundle\Entity\StudentsGroup;
use Bo\AdminBundle\Entity\Advisorlist;
use Bo\AdminBundle\Form\CcdateType;
use Bo\AdminBundle\Entity\Advisors;
use Bo\AdminBundle\Libs\PHPExcel\Factory;
use Bo\AdminBundle\Libs\PHPExcel\PresenceFactory;
use Bo\AdminBundle\Entity\Contractual;
use Bo\AdminBundle\Entity\Tspresence;
use Bo\AdminBundle\Entity\Notes;
/** 
* Contracts controller.
*/
class ContractsController extends CommonController
{
    /**
    * Index Contracts
    */
    public function indexAction()
    {
	$this->get('session')->remove('data');
	$this->get('session')->remove('period');
	$this->get('session')->remove('page');
	$this->get('session')->remove('search');
	return $this->redirect($this->generateUrl('contracts_list'));		
    }
    /**
    * Lists all Contracts entities.
    */
    public function listAction()
    {
		$this->setActivity("List view");
		$this->sessionRemove(array('idcontracts','message','idteacher','idteacher','contracts'));
		$this->verifySessionRights();
		$oContractEntity=$this->getRepository('BoAdminBundle:Contracts');	
		$this->updateAllContracts();
		//$oContractEntity->updateUpcomingContracts();
		$nb_tc = $oContractEntity->getInprogressTotal();
		$page = $this->get('session')->get('page');
		if($page==null) $page=1;
		//get number line per page
		$nb_cpp = $this->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aContracts = $oContractEntity->findByPage($nb_cpp,$offset);
		//Pour la recherche des opérations en deux dates 
		$oCcdate = new Ccdate();
       	 	$Ccdateform = $this->createForm('Bo\AdminBundle\Form\CcdateType', $oCcdate);
        	return $this->render('contracts/index.html.twig', array(
            		'contracts' => $aContracts,
			'types'=>$oContractEntity->getContractType(),
			'fields'=>$oContractEntity->getWorkFields(),
			'ccd_form' =>  $Ccdateform->createView(),
			'page' => $page, //On transmet à la vue la page courante,
			'nb_pages' => $nb_pages, //le nombre total de pages,
			'nb_cpp'=>$nb_cpp,
			'now'=>new \DateTime(),
			'inprogress'=>$nb_tc, //Et le nombre total d'enregistrement en cours.
			'all'=>$oContractEntity->getAllTotal(), // Et le nombre total d'enregistrement tous les contracts.
			'archived'=>$oContractEntity->getArchivedTotal(), // Et le nombre total d'enregistrement archivé.
			'pm'=>"contracts",
			'sm'=>"contracts",
        	));
    }
    public function pageAction($option)
    {
		$page = $this->get('session')->get('page');
		if($option==1) $page=1;
		if($option==2) $page=$page-1;
		elseif($option==3) $page=$page+1;
		else $page=$option;
		$this->get('session')->set('page',$page);
		return $this->redirect($this->generateUrl('contracts_list'));			
    }
    /**
    * Lists upcomingContracts
    */
    public function upcomingAction(Request $request){
		$oContractEntity=$this->getRepository('BoAdminBundle:Contracts');
		$aContracts = $oContractEntity->getUpcomingContracts();
		return $this->render('BoAdminBundle:Contracts:upcoming.html.twig', array(
			'contracts'=>$aContracts,
			'now'=>new \DateTime(),
			'count'=>count($aContracts),
		));	
    }
    /**
    * Lists Contracts whose end date has passed since 15 days
    */
    public function elapsedAction()
    {
	$oContractEntity=$this->getRepository('BoAdminBundle:Contracts');
	$aElapsed = $oContractEntity->getElapsedContract();
        return $this->render('contracts/elapsed.html.twig', array(
            'contracts' => $aElapsed,
			'count'  => count($aElapsed),
			'pm'=>"contracts",
			'sm'=>"contracts",
        ));
    }
    /**
    * Back of displaying lists contracts whose end date has passed since 15 days
    */
    public function elapsedbackAction()
    {
		$this->get('session')->set('elapsed',1);
		return $this->redirect($this->generateUrl('contracts_list'));	
    }
    /**
    * Update lists contracts whose end date has passed since 15 days
    */
    public function elapsedupdateAction(Request $request)
    {
		$this->get('session')->set('elapsed',1);
		if($request->isXmlHttpRequest())
		{	
			$data = $request->request->get('data');	
		}
		$aElapsed = $this->updateElapsedContracts();
        	return $this->render('BoAdminBundle:Contracts:elapsed.html.twig', array(
			'contracts' => $aElapsed,
			'now'=>new \DateTime(),
			'count'  => count($aElapsed),
		));
    }
	private function updateElapsedContracts(){
		set_time_limit(7600);
		$oContractEntity=$this->getRepository('BoAdminBundle:Contracts');
		$aElapsed = $oContractEntity->getElapsedContract();	
		foreach($aElapsed as $oElapsed){
			$oElapsed->setStatus(0);
			$oElapsed->setArchived(0);
			$this->updateEntity($oElapsed);
		}
		return $oContractEntity->getElapsedContract();	
	}
	//Handle Advisor, set in contract entity and return contract
	private function handleAdvisor($contract,$adlist){
		$oAdvisor = $adlist->getAdvisor();
		if($oAdvisor){
			$oRadvisor = $oAdvisor->getAdvisor();
			if($oRadvisor) $contract->setAdvisor($oRadvisor);
		} 
		return $contract;
	}
    /**
    * Creates a new Contracts entity.
    */
    public function newAction(Request $request)
    {
	$this->checkAndupdateCpCharge();
        $contract = new Contracts();
	$coordinator = new Coordinator();
	$contractual = new Contractual();
	$cbilling = new BillingContact();
	$group = new Group();
	//To generate the advisor list in the contract form
	$adlist = new Advisorlist();
	$adlist_form = $this->createForm('Bo\AdminBundle\Form\AdvisorlistType', $adlist);
	//To generate the advisor list
	$adlist_form->handleRequest($request);
	//To generate contract form
        $form = $this->createForm('Bo\AdminBundle\Form\ContractsTypeAdd', $contract);
        $form->handleRequest($request);
	$oAdvisor = $contract->getAdvisor();
        $coordinator_form = $this->createForm('Bo\AdminBundle\Form\Coordinator2Type', $coordinator);
        $contractual_form = $this->createForm('Bo\AdminBundle\Form\Contractual2Type', $contractual);
        $cbilling_form = $this->createForm('Bo\AdminBundle\Form\BillingContact2Type', $cbilling);
        $group_form = $this->createForm('Bo\AdminBundle\Form\GroupModalType', $group);
        if($form->isSubmitted() && $form->isValid()){
			$contract = $this->handleAdvisor($contract,$adlist);
			//Handle coordinator form and set its data in conctract entity if that exists
			$coordinator_form->handleRequest($request);
			if($contract->getCoordinator()==null and $coordinator->getName()!=null and $coordinator->getEmail()!=null){
				$aECoordinators = $this->getRepository('BoAdminBundle:Coordinator')->findBy(array('email'=>$coordinator->getEmail()));
				if(isset($aECoordinators[0])) $coordinator=$aECoordinators[0];
				else $this->updateEntity($coordinator);
				if($coordinator and $coordinator->getId()>0) $contract->setCoordinator($coordinator);
			}
			//Handle contractual form and set its data in conctract entity if that exists
			$contractual_form->handleRequest($request);
			if($contract->getContractual()==null and $contractual->getName()!=null and $contractual->getEmail()!=null){
				$aEContractual = $this->getRepository('BoAdminBundle:Contractual')->findBy(array('email'=>$contractual->getEmail()));
				if(isset($aEContractual[0])) $contractual=$aEContractual[0];
				else $this->updateEntity($contractual);
				if($contractual and $contractual->getId()>0) $contract->setContractual($contractual);
			}
			//Handle billing contact form and set its data in conctract entity if that exists
			$cbilling_form->handleRequest($request);
			if($contract->getBillingcontact()==null and $cbilling->getName()!=null and $cbilling->getEmail()!=null){
				$aCBilling = $this->getRepository('BoAdminBundle:BillingContact')->findBy(array('email'=>$cbilling->getEmail()));
				if(isset($aCBilling[0])) $cbilling=$aCBilling[0];
				else $this->updateEntity($cbilling);
				if($cbilling and $cbilling->getId()>0) $contract->setBillingcontact($cbilling);
			}
			$group_form->handleRequest($request);
			if($contract->getGroup()==null and $group->getName()!=null and $group->getStartdate()!=null and $group->getEnddate()!=null and $group->getTargetlevel()!=null){
				$groups = $this->getRepository('BoAdminBundle:Group')->findByName($group->getName());
				if(isset($groups[0])){
					$group=$groups[0];
					if($group->getContractType()==null){
						$group->setTypeContract($this->getTypeContractByGroup($group));
						$this->updateEntity($group);						
					}
				}else{
					$group->setCreateby($this->getConnected());
					$group->setTypeContract($contract->getTypeContract());
					$this->updateEntity($group);
				} 
				if($group and $group->getId()>0) $contract->setGroup($group);
			}
			$contract->setCreateby($this->getConnected());
			if($contract->getCampus()!=null){
				$contract->setAdresse($contract->getCampus()->getAddress());
			}
			//$contract = $this->getTotalCost($contract);
			$contract->updateStatus();
			$contract = $this->setIsGroup($contract);
			$res = $this->updateEntity($contract);
			//if contract entity updated then add advisor to group
			if($res>0){
				if($contract->getGroup() and $contract->getIsgroup()==true){
					//add advisor to the group
					$this->addAdvisorToGroup($contract);
					//Update local for the group
					$this->updateLocalForGroup($contract->getGroup());
					//update status and contract type for the group
					$this->updateStcForGroup($contract->getGroup(),$contract);
				} 
				$sActivity = $contract->getId()."-".$contract->getContractnumber().$this->getGroupName($contract)." is Created by this user";
				$this->setActivity($sActivity);
				//Historisation de l'operation
				$this->logContractHisto($sActivity,$contract->getId(),$this->getConnected());
				$this->recordContractRelation($contract);
				if($contract->getAdvisor()!=null){
					$this->updateAdvisorCharge($contract->getAdvisor());
					if(!in_array(@$_SERVER['REMOTE_ADDR'], array(
						'127.0.0.1',
						'::1',
					))) $this->notifyAdvisor($contract,$this->getConnected());	
				}
			}
			return $this->redirectToRoute('contracts_index');				
        }
	//the forms called by modal action
        $client_form = $this->createForm('Bo\AdminBundle\Form\ClientTypeModal', new Client());
	$this->get('session')->set('url',$request->headers->get('referer'));
        return $this->render('contracts/new.html.twig', array(
            'contract' => $contract,
			'campuss' => $this->getRepository('BoAdminBundle:Campus')->findAll(),
            'form' => $form->createView(),
			'outcharges'=>$this->getAllOutCharged(),
			'client_form' => $client_form->createView(),
			'group_form' => $group_form->createView(),
			'adlist_form' => $adlist_form->createView(),//to generate advisor list
			'coordinator_form' => $coordinator_form->createView(),
			'contractual_form' => $contractual_form->createView(),
			'cbilling_form' => $cbilling_form->createView(),
			'message'=>$this->getSessionMessage(),
			'pm'=>"contracts",
			'sm'=>"contracts",
        ));
    }	
    /**
    * Creates a new Coordinator entity.
    */
    public function coordinatorAction(Request $request)
    {
        $coordinator = new Coordinator();
        $form = $this->createForm('Bo\AdminBundle\Form\CoordinatorType', $coordinator);
        $form->handleRequest($request);
		$message=null;
		if($coordinator->getEmail()!=null){
			$coordinators = $this->getRepository('BoAdminBundle:Coordinator')->findBy(array('email'=>$coordinator->getEmail()));
			if(isset($coordinators[0])) $message = "This contact email ".$coordinator->getEmail()." already exist.";
		}
        if ($form->isSubmitted() && $form->isValid() && $message==null) {
			$coordinator->setPwd($this->getPassword());
			$coordinator->setCreateby($this->getConnected());
            $iRes = $this->updateEntity($coordinator);
			if($iRes>0){
				$this->setActivity("The coordinator ".$coordinator->getName()." is created");
			}
			if($coordinator->getEmail()!=null) $this->createUser(3,$coordinator);

            return $this->redirectToRoute('contracts_new');
        }
        return $this->render('coordinator/new.html.twig', array(
            'coordinator' => $coordinator,
            'form' => $form->createView(),
			'message'=>array('type'=>'Warning','texte'=>$message),
			'pm'=>"contracts",
			'sm'=>"contracts",
        ));
    }
	private function updateLocalForGroup($oGroup){
		//Get contracts group
		$aContractGroup = $this->getContractByGroup($oGroup);
		//if $aContractGroup is empty return null
		if(count($aContractGroup)==0) return null;
		//if local exist for the group return null
		if($oGroup->getLocal() and count($oGroup->getLocal())>0) return null;
		if($aContractGroup[0]->getLocal() and $aLocal = $aContractGroup[0]->getLocal()){
			if(isset($aLocal[0])){
				$oGroup->addLocal($aLocal[0]);
				return $this->updateEntity($oGroup);
			}
		}
		return null;
	}
	private function recordContractRelation($contract){
		$aTraining = $this->getSessionByName('training');
		if($aTraining==null) return $aTraining;
		if(isset($aTraining[0])){
			$oTraining = $aTraining[0];
			$oTraining->clear();
			$oTraining->setContracts($contract);
			$this->updateEntity($oTraining);
		}
		return 1;
	}
    /**
    * Creates a new Contracts entity by duplicating an other.
    */
    public function duplicateAction(Request $request,Contracts $contract)
    {

		$aTraining=$this->getRepository('BoAdminBundle:Training')->findBy(array('contracts'=>$contract));
		if(isset($aTraining[0])) $this->setSessionByName('training',$aTraining);
		//To generate the advisor list in the contract form
		$adlist = new Advisorlist();
		$adlist_form = $this->createForm('Bo\AdminBundle\Form\AdvisorlistType', $adlist);
		//To generate the advisor list
		$adlist_form->handleRequest($request);
		//To generate contract form
        $form = $this->createForm('Bo\AdminBundle\Form\ContractsTypeAdd', $contract);
        $form_coor = $this->createForm('Bo\AdminBundle\Form\CoordinatorType', new Coordinator());
		//the forms called by modal action
        $client_form = $this->createForm('Bo\AdminBundle\Form\ClientTypeModal', new Client());
        $group_form = $this->createForm('Bo\AdminBundle\Form\GroupModalType', new Group());
        $coordinator_form = $this->createForm('Bo\AdminBundle\Form\Coordinator2Type', new Coordinator());
        $contractual_form = $this->createForm('Bo\AdminBundle\Form\Contractual2Type', new Contractual());
        $cbilling_form = $this->createForm('Bo\AdminBundle\Form\BillingContact2Type', new BillingContact());
		//get all students bound to this contracts
		$aStudents = $contract->getStudents();
		if($aStudents[0]){
			$this->setSessionByName('students',$aStudents);
		}
        return $this->render('contracts/new.html.twig', array(
            'contract' => $contract,
            'form' => $form->createView(),
			'form_coor' => $form_coor->createView(),
			'client_form' => $client_form->createView(),
			'adlist_form' => $adlist_form->createView(),//to generate advisor list
			'students'=>$aStudents,
			'outcharges'=>$this->getAllOutCharged(),
			'group_form' => $group_form->createView(),
			'coordinator_form' => $coordinator_form->createView(),
			'contractual_form' => $contractual_form->createView(),
			'cbilling_form' => $cbilling_form->createView(),
			'campuss' => $this->getRepository('BoAdminBundle:Campus')->findAll(),
			'pm'=>"contracts",
			'sm'=>"contracts",
        ));
    }
    /**
    * Creates a new Contracts entity.
    */
    public function createclientAction(Request $request)
    {
        $client = new Client();
        $form = $this->createForm('Bo\AdminBundle\Form\ClientTypeModal', $client);
        $form->handleRequest($request);
		$message=null;
		if($client->getReference()) $aClient = $this->getRepository('BoAdminBundle:Client')->findBy(array('reference'=>$client->getReference()));
		if(isset($aClient) and count($aClient)==1){
			$message=array('type'=>"Warning",'texte'=>$this->getErrorMessage(19));
		}
        if ($form->isSubmitted() && $form->isValid() && $message==null) {
			$this->setActivity("The costumer ".$client->getDesignation()." is Created by this user");
            $res = $this->updateEntity($client);
			$idcontract = $this->getSessionByName('idcontract');	
			if($idcontract!=null){
				return $this->redirectToRoute('contracts_edit',array('id'=>$idcontract));
			}
            return $this->redirectToRoute('contracts_new');
        }

		$this->setSessionByName('message',$message);
		return $this->redirectToRoute('contracts_new');
    }
    /**
    * Creates a new Group entity.
    */
    public function creategroupAction(Request $request)
    {
        $group = new Group();
        $form = $this->createForm('Bo\AdminBundle\Form\GroupModalType', $group);
        $form->handleRequest($request);
		
        if ($form->isSubmitted() && $form->isValid()) {
			$groups = $this->getRepository('BoAdminBundle:Group')->findByName($group->getName());
			if(isset($groups[0])){
				$message=array('type'=>"Warning",'texte'=>$this->getErrorMessage(20));
			}else{
				$group->setCreateby($this->getConnected());
				$this->setActivity("The group ".$group->getName()." is Created by this user");
				$res = $this->updateEntity($group);	
				$idcontract = $this->getSessionByName('idcontract');	
				if($idcontract!=null){
					return $this->redirectToRoute('contracts_edit',array('id'=>$idcontract));
				}
				return $this->redirectToRoute('contracts_new');
			}
        }
		$this->get('session')->set('message',$message);
		return $this->redirectToRoute('contracts_new');
    }
    /**
    * Creates a new Students entity by contract.
    */
    public function createstudentAction(Request $request)
    {
		$idcontract = $this->get('session')->get('idcontracts');
		$message = $this->getSessionMessage();
		$oRepStudent = $this->getRepository('BoAdminBundle:Students');
		$oContract=$this->getRepository('BoAdminBundle:Contracts')->find($idcontract);
		//$student = $this->createStudentForm($request,$oContract); //student form from StudentsType2
		$student = new Students();
        $form = $this->createForm('Bo\AdminBundle\Form\StudentsAddType', $student);
        $form->handleRequest($request);
		//check if this students already exist
		$aStudent=$oRepStudent->findBy(array('email'=>$student->getEmail()));
		if(!isset($aStudent[0])) $aStudent=$oRepStudent->findBy(array('firstname'=>$student->getFirstname(),'name'=>$student->getName()));
        if($form->isSubmitted() && $form->isValid() and !isset($aStudent[0])){
			$student->setPwd($this->getPassword());
			$student->setCreateby($this->getConnected());
			$res = $this->updateEntity($student);
			if($res>0){
				$this->setActivity("The student ".$student->getFirstname()." ".$student->getName()." is Created by this user");
				if($oContract){
					$this->getRepository('BoAdminBundle:HistoStudents')->recordHistorique($student,$oContract,$this->getConnectedEmployee());
					if($oContract->getGroup()){
						$oGroup=$oContract->getGroup();
						if($this->existStudent($oGroup,$student)==0){
							$oGroup->addStudent($student);
							$this->updateEntity($oGroup);
						}
					}
					$oContract->addStudent($student);
					$this->updateEntity($oContract);
				} 
				$email = $student->getEmail();
				//Add a fictive email for creationg a user account
				if($email==null){
					$firstname = $student->getFirstname();
					$name = $student->getName();
					$email = $firstname.$name."@nomail.cli";
					$student->setEmail($email);
				}
				$this->createActivity("Students",$student->getName()." ".$student->getFirstname()." is Created");
				if($this->existUser($student)==0) $this->createUser(2,$student);
				$this->updateStudent($oContract);
			}
            return $this->redirectToRoute('contracts_show', array('id' => $idcontract));
        }
		if(isset($aStudent[0])){
			$message = $this->getTypeMessage("Info",$this->get('translator')->trans('A student already exists under this identity. Click on select button to add it to the contract.'));
		}
        return $this->render('contracts/student.html.twig', array(
            'student' => $student,
			'students'=>isset($aStudent[0])?$aStudent:null,
			'message'=> $message,
			'idcontract' => $idcontract,
            'form' => $form->createView(),
			'pm'=>"contracts",
			'sm'=>"students",
        ));
    }
	private function existStudent($oEntity,$oStudent){
		$aStudents = $oEntity->getStudents();
		foreach($aStudents as $oStudents){
			if($oStudent==$oStudents) return 1;
		}
		return 0;
	}
	private function existAdvisor($oEntity,$oAdvisor){
		$aAdvisors = $oEntity->getAdvisor();
		foreach($aAdvisors as $oAdvisors){
			if($oAdvisor==$oAdvisors) return 1;
		}
		return 0;
	}
	private function existTeacher($oEntity,$oEmployee){
		$aTeachers = $oEntity->getEmployee();
		foreach($aTeachers as $oTeachers){
			if($oTeachers==$oEmployee) return 1;
		}
		return 0;
	}
    /**
    * Creates a new Students entity by contract.
    */
    public function selectstudentAction(Request $request, $idstudent, $idcontract)
    {
		$oRepStudent = $this->getRepository('BoAdminBundle:Students');
		$oRepContract = $this->getRepository('BoAdminBundle:Contracts');
		if($idstudent>0 and $idcontract>0){
			$oStudent = $oRepStudent->find($idstudent);
			$oContract = $oRepContract->find($idcontract);
			if($oContract->getGroup()){
				$oGroup=$oContract->getGroup();				
				if($this->existStudent($oGroup,$oStudent)==0){
					$oGroup->addStudent($oStudent);
					$this->updateEntity($oGroup);
				} 
			}
			if($this->existStudent($oContract,$oStudent)==0){
				$oContract->addStudent($oStudent);
				$res = $this->updateEntity($oContract);			
			}
			if(isset($res) and $res>0){
				$this->updateStudent($oContract);
				$this->setActivity("The student ".$oStudent->getFirstname()." ".$oStudent->getName()." has been added to contract Id:".$oContract->getId());
			} 			
		}
		return $this->redirectToRoute('contracts_show', array('id' => $idcontract));		
    }
    /**
    * Creates a new contractual entity by contract.
    */
    public function selectcontractualAction(Request $request, $idcontractual, $idcontract)
    {

		$oRepContractual = $this->getRepository('BoAdminBundle:Contractual');
		$oRepContract = $this->getRepository('BoAdminBundle:Contracts');
		if($idcontractual>0 and $idcontract>0){
			$oContractual = $oRepContractual->find($idcontractual);
			$oContract = $oRepContract->find($idcontract);
			if($this->existEntity($oContract,$oContractual)==0){
				$oContract->setContractual($oContractual);
				$res = $this->updateEntity($oContract);			
			}
			if(isset($res) and $res>0){
				$this->setActivity("The contractual contact ".$oContractual->getName()." has been added to contract Id:".$oContract->getId());
			} 			
		}
		return $this->redirectToRoute('contracts_show', array('id' => $idcontract));		
    }
    /**
    * Creates a new contractual entity by contract.
    */
    public function removecontractualAction(Request $request, $idcontractual, $idcontract)
    {

		$oRepContractual = $this->getRepository('BoAdminBundle:Contractual');
		$oRepContract = $this->getRepository('BoAdminBundle:Contracts');
		if($idcontractual>0 and $idcontract>0){
			$oContractual = $oRepContractual->find($idcontractual);
			$oContract = $oRepContract->find($idcontract);
			$oContract->setContractual(null);
			$res = $this->updateEntity($oContract);			
			if(isset($res) and $res>0){
				$this->setActivity("The contractual contact ".$oContractual->getName()." has been removed from contract Id:".$oContract->getId());
			} 			
		}
		return $this->redirectToRoute('contracts_show', array('id' => $idcontract));		
    }
    /**
    * Send contract confirmation mail 
    */
	public function confirmationAction(Request $request,$idcontract){

		$oContractEntity=$this->getRepository('BoAdminBundle:Contracts');	
		$oContract = $oContractEntity->find($idcontract);
		$confirmation=new Confirmation();
		$confirmation->setIdcontract($idcontract);
		$aMessage=null;
		if($oContract){
			$students = $oContract->getStudents();
			$address = "";
			$i=1;
			foreach($students as $student){
				if($student->getEmail()!=null){
					$address = $i==1?$student->getEmail():$address.$student->getEmail();
					if($student->getEmail1()!=null){
						$address = $address.",".$student->getEmail1();
					}
					$i=$i+1;
				} 
			}
			if($address!="") $confirmation->setStudentemail($address);
		}	
		$clientservice = $this->getRepository('BoAdminBundle:Param')->getParam("email_client_service",9);		
        	$form = $this->createForm('Bo\AdminBundle\Form\ConfirmationType', $confirmation);
       		$form->handleRequest($request);
        	if ($form->isSubmitted() && $form->isValid()){		
			$aMailFooter = $this->getRepository('BoAdminBundle:Mails')->getInfoMail('contract_confirmation',1);
			$aMailHead = $this->getRepository('BoAdminBundle:Mails')->getInfoMail('confirmation_head',2);
			$aMailRoom = $this->getRepository('BoAdminBundle:Mails')->getInfoMail('confirmation_room',3);
			if($oContract and isset($students[0]) and $student=$students[0]){
				$from = $this->getRepository('BoAdminBundle:Param')->getParam("send_mail_address",6);
				$cStudent = $request->request->get('student');
				$cCoordinator = $request->request->get('coordinator');
				$cContractual = $request->request->get('contractual');
				$sOther = $request->request->get('other');
				if($cStudent==1 and $confirmation->getStudentemail()!=null){
					$to = $confirmation->getStudentemail();
					if($cCoordinator==1 and $oContract->getCoordinator()){
						$cc = $oContract->getCoordinator()->getEmail().", ".$clientservice;
					}else{
						$cc = $clientservice;
					} 
					if($oContract->getAdvisor()) $cc = $cc.",".$oContract->getAdvisor()->getEmail();
					if($cContractual==1 and $oContract->getContractual()) $cc = $cc.",".$oContract->getContractual()->getEmail();				
				}elseif($cCoordinator==1 and $oContract->getCoordinator()){
					$to = $oContract->getAdvisor()->getEmail();
					$cc = $clientservice;
					if($oContract->getAdvisor()) $cc = $cc.", ".$oContract->getAdvisor()->getEmail();
				} 
				if($sOther!=null) $cc = $cc.", ".$sOther;
				$Bcc = "jnvekounou@yahoo.fr";
				$subject = $this->getRepository('BoAdminBundle:Param')->getParam("send_confirmation_subject",7);;
				$body = $this->renderView("BoAdminBundle:Contracts:confirmation.html.twig", array('contract' =>$oContract,'student' =>$student,'mailhead'=>$aMailHead->getMessageen(),'mailfooter'=>$aMailFooter->getMessageen(),'mailroom'=>$aMailRoom->getMessageen(),'room'=>$this->getContractRoom($oContract)));
				if($oContract->getWorkfields() and ($oContract->getWorkfields()->getId()==1 or $oContract->getWorkfields()->getId()==2)){
					$aFiles = $this->getTrainingKit();
					if (!in_array(@$_SERVER['REMOTE_ADDR'], array(
						'127.0.0.1',
						'::1',
					)))
					$res = $this->sendmail($to,$subject,$body,$cc,$Bcc,$aFiles);
				}else{
					if (!in_array(@$_SERVER['REMOTE_ADDR'], array(
						'127.0.0.1',
						'::1',
					)))
					$res = $this->sendmail($to,$subject,$body,$cc,$Bcc);
				}				
				//$res = $this->sendmail2($subject,$from,$to,$body);
				if($res==1){
					$this->setActivity("Confirmation envoyée pour le contrat d'id:".$oContract->getId());
					$message = $this->get('translator')->trans('Confirmation is sent for the contract').":".$oContract->getId();
					$aMessage =array('type'=>"Info",'texte'=>$message);
					$oContract->setConfirmation(date("d-m-Y"));
					$this->updateEntity($oContract);
				}else{
					$this->setActivity("Confirmation n'a pas pu être envoyée pour le contrat d'id:".$oContract->getId());
					$message = $this->get('translator')->trans('Can not sent confirmation');
					$aMessage =array('type'=>"Warning",'texte'=>$message);
				}					
			}
			$this->setSessionByName('message',$message);
			return $this->redirectToRoute('contracts_show', array('id' => $idcontract));
		}
        return $this->render('contracts/confirmation.html.twig', array(
            'emailstudents' => $address,
			'contract' => $oContract,
			'message'=>$aMessage,
			'clientservice' => $clientservice,
			'status'=>$this->getContractStatus(),//get status definition list
			'form' => $form->createView(),
			'pm'=>"contracts",
			'sm'=>"contracts",
        ));		
	}
	private function createStudentForm($request,$oContract){
		$oStudent = new Students();
        $form = $this->createForm('Bo\AdminBundle\Form\StudentsType2', $oStudent);
        $form->handleRequest($request);
		if(!$oStudent->getName()) return $oStudent;
        $student = new Students();
		if($oContract->getGroup()) $student->setGroup($oContract->getGroup());
		if($oStudent->getName()) $student->setName($oStudent->getName());
		if($oStudent->getFirstname()) $student->setFirstname($oStudent->getFirstname());
		if($oStudent->getTargetlevel()) $student->setTargetlevel($oStudent->getTargetlevel());
		elseif($oContract->getGroup() and $oContract->getGroup()->getTargetlevel()) $oStudent->setTargetlevel($oContract->getGroup()->getTargetlevel());
		if($oStudent->getPhonenumber()) $student->setPhonenumber($oStudent->getPhonenumber());
		if($oStudent->getEmail()) $student->setEmail($oStudent->getEmail());
		if($oContract->getDepartment()) $student->setDepartment($oContract->getDepartment());
		if($oContract->getStartdate()) $student->setStartdate($oContract->getStartdate());
		if($oContract->getEnddate()) $student->setEnddate($oContract->getEnddate());
		return $student;
	}
    /**
    * Creates a new Revision entity.
    */
    public function revisionAction(Request $request)
    {
        $revision = new Revision();		
        $form = $this->createForm('Bo\AdminBundle\Form\RevisionType', $revision);
        $form->handleRequest($request);
	$idcontract = $revision->getIdcontracts();
	if($idcontract==null) $idcontract = $this->getSessionByName('idcontracts');
        if($form->isSubmitted() && $form->isValid()){
			$oContract=$this->getRepository('BoAdminBundle:Contracts')->find($idcontract);
			$enddate = $oContract->getEnddate();		
			//if($revision->getTotal()==null) $revision=$this->getUpdatedRevision($oContract,$revision);
			if($revision->getAmendment()=="1"){
				$oContract->setInitialhours($oContract->getHoursnumber());
				$oContract->setInitialenddate($enddate);
			} 
			if($revision->getHourafter()==null and $revision->getHoursbefore()!=null){
				$hourafter = intval($revision->getHoursbefore())+intval($revision->getHour());
				$revision->setHourafter($hourafter);
			}
			if($revision->getCostafter()==null and $revision->getCostbefore()!=null){
				$costafter = floatval($revision->getCostbefore())+floatval($revision->getTotal());
				$revision->setCostafter($costafter);
			}
			if($revision->getHourafter()!=null) $oContract->setTotalhours($revision->getHourafter());
			if($revision->getCostafter()!=null) $oContract->setTotalcost($revision->getCostafter());
			$oContract->setEnddate($revision->getEnddate());
			$oContract->updateStatus();
			$this->updateEntity($oContract);
			$res = $this->updateEntity($revision);
			if($res>0){
				//update the end date for teacher schedule
				$this->updateSchedule($oContract,$revision);
				//Send modification notification to the advisor only on prod
				if (!in_array(@$_SERVER['REMOTE_ADDR'], array(
					'127.0.0.1',
					'::1',
				)))	$this->notifyForRevision($oContract,$revision);
				//Report activity 
				$this->setActivity("Revision".$revision->getId()." for the contract ".$oContract->getId()."-".$oContract->getContractnumber()." is Created by this user");
			}
        } 
	return $this->redirectToRoute('contracts_show', array('id' => $idcontract));		
    }
	private function notifyForRevision($contract,$revision=null){	
		$res = null;
		$advisor_email = null;
		if($contract->getAdvisor()) $advisor_email = $contract->getAdvisor()->getEmail();

		$cc = $this->getRepository('BoAdminBundle:Param')->getParam("email_training_coordinator",22);
		if($contract->getAdvisor()) $fullname = $contract->getAdvisor()->getFirstname();
		$subject = "Modification of contract";
		if($advisor_email!=null and $cc!=null){
			$body = $this->renderView("BoAdminBundle:Contracts:notifforrevision.html.twig", array('contract'=>$contract,'student'=>$this->getStudentBy($contract),'revision'=>$revision));
			$res = $this->sendmail($advisor_email,$subject,$body,$cc,"jnvekounou@yahoo.fr");
		}elseif($cc!=null){
			$body = $this->renderView("BoAdminBundle:Contracts:notifforrevision.html.twig", array('contract'=>$contract,'student'=>$this->getStudentBy($contract),'revision'=>$revision,'cc'=>$cc));
			$res = $this->sendmail($cc,$subject,$body,null,"jnvekounou@yahoo.fr");
		}
		return $res;	
		
	}
	private function getUpdatedRevision($oContract,$oRevision){
		$hour = floatval($oRevision->getHour());
		$houlyrate = $oRevision->getHourlyrate();
		$total = $hour*$houlyrate;
		$oRevision->setTotal($total);
		$oRevision->setCreateby($this->getConnected());
		$currenthours = $this->getCurrentHours($oContract);
		$currentcost = $this->getCurrentCost($oContract);
		$oRevision->setHoursbefore($currenthours);	
		$oRevision->setCostbefore($currentcost);
		$totalhours = intval($currenthours)+intval($hour);
		$totalcost = intval($currentcost)+intval($total);
		$oRevision->setHourafter($totalhours);	
		$oRevision->setCostafter($totalcost);
		return $oRevision;
	}
	protected function getCurrentHours($oContract){
		if($oContract->getHoursnumber2()!=null) return $oContract->getHoursnumber2();
		if($oContract->getHoursnumber1()!=null) return $oContract->getHoursnumber1();
		return $oContract->getHoursnumber();
	}
	protected function getCurrentCost($oContract){
		if($oContract->getEstimatedcost2()!=null) return $oContract->getEstimatedcost2();
		if($oContract->getEstimatedcost1()!=null) return $oContract->getEstimatedcost();
		return $oContract->getEstimatedcost();
	}
	public function getCreateRevision($contract){
		$oRevision = new Revision();
		$oRevision->setIdcontracts($contract->getId());
		if($contract->getHourlyrate()) $oRevision->setHourlyrate(floatval($contract->getHourlyrate()));
		if($contract->getTotalhours()) $oRevision->setHoursbefore($contract->getTotalhours());
		elseif($contract->getHoursnumber2()) $oRevision->setHoursbefore($contract->getHoursnumber2());
		elseif($contract->getHoursnumber1()) $oRevision->setHoursbefore($contract->getHoursnumber1());
		elseif($contract->getHoursnumber()) $oRevision->setHoursbefore($contract->getHoursnumber());
		if($contract->getTotalcost()) $oRevision->setCostbefore($contract->getTotalcost());
		elseif($contract->getEstimatedcost2()) $oRevision->setCostbefore($contract->getEstimatedcost2());
		elseif($contract->getEstimatedcost1()) $oRevision->setCostbefore($contract->getEstimatedcost1());
		elseif($contract->getEstimatedcost()) $oRevision->setCostbefore($contract->getEstimatedcost());
		return $oRevision;
	}
	//return 1 if the Add Techer bouton must be displayed
	//0 if the total hours scheduled is equal to total hours planned for the training
	//2 if any hour has not been planned for the trained
	private function allowAddTeacher($aTeacherSchedule,$aTraining,$oContract){
		$fTSHour = 0;
		if(isset($aTraining[0])){
			$oTraining = $aTraining[0];
			foreach($aTeacherSchedule as $oTeacherSchedule){
				$fTSHour = $fTSHour + $oTeacherSchedule->getHourperday();
			}
			if($fTSHour>=$oTraining->getHourperday() and $oContract->getTypetime()=="Full Time") return 0;
			else return 1;			
		}
		return 2;
	}
	private function createTeacherSchedule($training,$contract){
		$aSchedule = $this->getAgendaByContract($contract);
		if(count($aSchedule)==0 and $contract->getGroup()!=null and $this->isGroupContract($contract)==true){ 
			$aSchedule = $this->getAgendaByGroup($contract->getGroup());
			return $this->getGroupScheduleBy($aSchedule,$training,$contract); 
		}
		if($this->isFullTime($contract)) return $this->getFTScheduleBy($aSchedule,$training,$contract);
		else return $this->getPTScheduleBy($aSchedule,$training,$contract);	
	}
    /**
    * Finds and displays a Contracts entity.
    */
    public function showAction(Contracts $contract)
    {
		$aMessage = $this->getSessionByName('message');
		$aAgenda = $this->getActiveBy($contract);
		if(count($aAgenda)==0){
			$aAgenda = $this->getActiveBy($contract);
		}

		//if advisor is not updated for contract or for group then do it
		if($contract->getGroup() and $group=$contract->getGroup() and (!$contract->getAdvisor() or !$group->getAdvisor()))
		$this->updateAdvisorForGroup($contract);
		//if TBS update target level for the group
		$oRepTSch = $this->getRepository('BoAdminBundle:HTeacherSchedule');
		$this->setSessionByName('idcontracts',$contract->getId());
		//Creating local form
		$locals = $this->getRepository('BoAdminBundle:Local')->getAvailable($contract);
		//Creation of delete modal form
        	$deleteForm = $this->createDeleteForm($contract);
		//Creation of close modal form
        	//$closeForm = $this->createCloseForm(new Notes);
		//Creation of student modal form
		$studentform = $this->createForm('Bo\AdminBundle\Form\StudentsAddType',$this->initializeStudent($contract));
		//Creation of revision modal form
		$revisionform = $this->createForm('Bo\AdminBundle\Form\RevisionType',$this->getCreateRevision($contract));
		$students = $contract->getStudents();
		//Getting contract training
		$training = $this->getContractTraining($contract);	
		//Getting contract revision if it exists
		$revisions = $this->getRepository('BoAdminBundle:Revision')->findBy(array('idcontracts'=>$contract->getId()));
		//Getting teachers bound to the contract
		$aTeachers = $this->getTeachersByContract($contract);
		//I get here student historic if it exists
		$aHstudents = $this->getRepository('BoAdminBundle:HistoStudents')->getHistoriqueStudent($contract);
		//array of entity HTeacherschedule
		$aHTS0 = $oRepTSch->getContractTeacherschedule($contract); 
		if($contract->getGroup() and count($this->getContractByGroup($contract->getGroup()))>1){
			$aLocal = $contract->getGroup()->getLocal();
		}else{
			$aLocal = $contract->getLocal();
		}
		$localdeleteForm = $this->createRemoveLocalForm($contract);
		$lefthours = ($contract->getHoursnumber()>0 and $contract->getUsedHours()>0)?floatval($contract->getTotalhours())-floatval($contract->getUsedHours()):null;
		//For training form with modal
        	$trainingform = $this->createForm('Bo\AdminBundle\Form\TrainingType', $this->initializeTraining($contract));
		//For teacher schedule form
		$teacherSchedule = $this->createTeacherSchedule($training,$contract);		
        	$tsc_form = $teacherSchedule!=null?$this->createForm('Bo\AdminBundle\Form\AgendaType', $teacherSchedule):null;
		//For the add advisor 
		$oAdvisor = New Advisorlist();
		//Advisor form
		$advisorform = $this->createForm('Bo\AdminBundle\Form\AdvisorlistType', $oAdvisor);	
		$messagetype = $this->get('session')->get('type')==null?$messagetype="Warning":$this->get('session')->get('type');
		$aMessage = array('type'=>$messagetype,'texte'=>$this->getSessionByName('message'));
		//Contractual creation form
		$contractualform = $this->createForm('Bo\AdminBundle\Form\ContractualType', $this->initializeContractual());
		//Contractual edit form
		$contractualeditform = $this->createForm('Bo\AdminBundle\Form\ContractualType',$this->initializeContractual($contract));
		if($contract->getAdvisor() or($contract->getGroup() and $contract->getGroup()->getAdvisor())){
			if($contract->getAdvisor()) $oAdvisor=$contract->getAdvisor();
			else $oAdvisor=$contract->getGroup()->getAdvisor();
			$advisor_delete_form = $this->createRemoveAdvisorForm($contract->getId(),$oAdvisor->getId());
		}
		if($this->isGroupNull($contract)==1){
			$message=$this->get('translator')->trans('This contract is a group contract. You have to choose a group before adding a teacher or a room');
			$aMessage=array('type'=>"Warning",'texte'=>$message);
		}
		$aSubstitution = $this->getSubstitutions($contract);
        	$date_form = $this->createForm('Bo\AdminBundle\Form\TsdateType', new Tsdate());
        	return $this->render('contracts/show.html.twig',array(
            		'contract' => $contract,
			'lefthours'=> $lefthours,
			'coordinator'=>$contract->getCoordinator(),
            		'delete_form' => $deleteForm->createView(),
            		'close_form' => $this->getNoteFormView(new Notes),
            		'addnoteform' => $this->getNoteFormView(new Notes),
			'student_form'=>$studentform->createView(),
			'revision_form'=>$revisionform->createView(),
			'reopen_form'=>$this->getNoteFormView(new Notes),
			'subs_form'=>$this->getMySubstitutionForm($aAgenda),
			'students'=>$students,
			's_locals'=>$locals,//for the select form
			'revisions'=>$revisions,	
			'status'=>$this->getContractStatus(),//get status definition list
			'advisordelete_form'=>isset($advisor_delete_form)?$advisor_delete_form->createView():null,
			'htss0'=>$aHTS0,//Historique de Teacher Schedule
			'hts'=>isset($aHTS0[0])?$oRepTSch->getScheduleForTeacher($aHTS0):null,//Historique de Teacher Schedule
			'hstudents' => $aHstudents,
			'billingContacts'=>$contract->getBillingcontact(),
			'localdelete_form' => $localdeleteForm->createView(),
			'teachers'=>$aTeachers,// for the list of teachers
			'listteacher' => $this->getRepository('BoAdminBundle:Teachers')->findAllTeacher(),
			'locals'=>$aLocal,// for the list of locals
			'message'=>$aMessage,
			'idteacher'=>$this->get('session')->get('idteacher'),
			'idlocal'=>$this->get('session')->get('idlocal'),
			'training_form'=>$trainingform->createView(),
			'contractual_form'=>$contractualform->createView(),
			'contractual_editform'=>$contractualeditform->createView(),			
			'substitutes'=> $this->getRepository('BoAdminBundle:Teachers')->getAvailable($contract,$this->getHolders($contract)),
			'holders'=>$this->getHolders($contract),
			'date_form' => $date_form->createView(),
			'advisor_form'=>$advisorform->createView(),
			'tsp_form'=>$this->getTspresenceForm(),
			'agendas'=>$aAgenda,
			'substitutions'=>$aSubstitution,
			'subteachers'=>$this->getSubTeachers($aSubstitution),
			'closed_agenda'=>$this->getClosedBy($contract),
			'listteachers'=>$this->getRepository('BoAdminBundle:Teachers')->getAvailableForSchedule($contract), //Available teacher for the select form
			'historics'=>$this->getRepository('BoAdminBundle:Histocontract')->findBy(array('idcontracts'=>$contract->getId())),
			'tsc_form'=>$teacherSchedule!=null?$tsc_form->createView():null,
			'revision_form'=>$revisionform->createView(),
			'now' => new \DateTime(), 
			'groupnull'=>$this->isGroupNull($contract),//If contract is field 1 or 2 and no group is specified groupnull equal 1 else 0
			'isgroup'=>$this->isGroupContract($contract)==true?1:0,
			'trainings'=>$training,
			'pm'=>"contracts",
			'sm'=>"contracts",
        ));
    }
	private function getTspresenceForm(){
        	$Tspresence = $this->createForm('Bo\AdminBundle\Form\TspresenceType', new Tspresence());
		return $Tspresence->createView();
	}
    /**
    * Displays a form to edit an existing Contractual entity.
    */
    public function contractualeditAction(Request $request, Contractual $contractual)
    {
        $editForm = $this->createForm('Bo\AdminBundle\Form\ContractualType', $contractual);
        $editForm->handleRequest($request);

        if($editForm->isSubmitted() && $editForm->isValid()){
            $this->updateEntity($contractual);
			$aContract = $this->getRepository('BoAdminBundle:Contracts')->findBy(array('contractual'=>$contractual));
			if(isset($aContract[0]) and $oContract=$aContract[0]){
				return $this->redirectToRoute('contracts_show',array('id'=>$oContract->getId()));
			}else{
				return $this->redirectToRoute('contractual_index');
			}
            
        }

        return $this->render('contractual/edit.html.twig', array(
            	'contractual' => $contractual,
            	'edit_form' => $editForm->createView(),
		'pm'=>"contracts",
		'sm'=>"contractual",
        ));
    }
	private function updateTeacherSchedule($oContract){
		$aTeachers = $oContract->getEmployee();
		if(count($aTeachers)==0 and $oContract->getGroup()) $aTeachers = $oContract->getGroup()->getEmployee();
		elseif(count($aTeachers)==0) return false;
		$oEmTS = $this->getRepository('BoAdminBundle:Agenda');
		$aSchedule = $oEmTS->findByContracts($oContract);
		foreach($aSchedule as $oSchedule){
			$oEmployee = $oSchedule->getEmployee();
			if($this->checkEmployee($oEmployee,$aTeachers)) continue;
			$this->removeEntity($oSchedule);
		}
		return;
	}
	private function checkEmployee($oEmployee,$aTeacher){
		foreach($aTeacher as $oTeacher){
			if($oEmployee==$oTeacher) return true;
		}
		return false;	
	}
    public function localAction(Request $request)
    {
		$this->removeSession();
		$idcontract=$this->get('session')->get('idcontracts');
		$oContract = $this->getRepository('BoAdminBundle:Contracts')->find($idcontract);
		$locals=null;
		$message=null;
		$idlocal=null;
		$locals = $this->getRepository('BoAdminBundle:Local')->getAvailable($oContract);
		$idlocal = $request->request->get("local");
		if($oContract->getCampus() and $idlocal>0){
			//Get contracts group
			$oLocals = $this->getRepository('BoAdminBundle:Local')->find($idlocal);
			//If there are many contrats in a group then add room to the group else add room to the contract
			if($this->isGroupContract($oContract)==true){
				if($oContract->getGroup() and $oGroup=$oContract->getGroup() and $this->existEntity($oLocals,$oGroup->getLocal())==false){
					$this->addLocalToGroup($oContract,$oLocals);
				}else{
					$oGroup = $this->getGroupByLocal($idlocal);
					if($oGroup!=null) $this->setSessionByName('message',"This room is already occupied by this group ".$oGroup->getName());
					else $this->setSessionByName('message',"This room is already occupied by a group");
				}
			}else{
				if($this->existEntity($oLocals,$oContract->getLocal())==false){
					$this->addLocalToContract($oContract,$oLocals);
				}else{
					$this->setSessionByName('message',"This room is already occupied by this contract.");
				}
			}
		}elseif($idlocal==0){
			$this->setSessionByName('message',"Impossible to assign this contract. Please verify if you have selected a local in the form.");
		}else{
			$this->setSessionByName('message',"Something is wrong in your form. Please contact CLIC MANAGER administrator.");
		}
		return $this->redirectToRoute('contracts_show', array('id' => $idcontract));
    }
	private function addLocalToGroup($oContract,$oLocals){		
		$oGroup=$oContract->getGroup();
		if($oGroup){
			$oGroup->addLocal($oLocals);
			$res1 = $this->updateEntity($oGroup);
			$this->updateStatus($oGroup,$oLocals);			
		} 	
	}
	private function addLocalToContract($oContract,$oLocals){
		$oContract->addLocal($oLocals);
		$res1 = $this->updateEntity($oContract);
		$this->updateStatus($oContract,$oLocals);		
		return $res1;
	}
    public function addAdvisorAction(Request $request)
    {
		$this->removeSession();
		$oAdvisor = New Advisorlist();
		$advisorform = $this->createForm('Bo\AdminBundle\Form\AdvisorlistType', $oAdvisor);	
		$advisorform->handleRequest($request);
		if($oAdvisor->getAdvisor()){
			$oEmployee = $oAdvisor->getAdvisor()->getAdvisor();
		}			
        if(isset($oEmployee) and $oEmployee){
			$idcontract=$this->get('session')->get('idcontracts');
			$em = $this->getDoctrine()->getManager();
			$oContract = $em->getRepository('BoAdminBundle:Contracts')->find($idcontract);
			if($oContract->getGroup()){
				$oGroup=$oContract->getGroup();
				$oGroup->setAdvisor($oEmployee);
				$res1 = $this->updateEntity($oGroup);
			}
			$oContract->setAdvisor($oEmployee);
			$res1 = $this->updateEntity($oContract);
			if($res1>0){
				$this->updateAdvisorCharge($oContract->getAdvisor());
			}
		}
		if(!isset($res1)){
			$this->get('session')->set('message',"Impossible to add Advisor. Please verify if you have selected a advisor in the form.");
		}else{
			$this->get('session')->set('type',"Info");
			$this->get('session')->set('message',"The pedagogical advisor is added to the contract");
		}
		return $this->redirectToRoute('contracts_show', array('id' => $idcontract));
    }
	/**
	* Remove Local
	*/
    public function removelocalAction(Request $request, Contracts $contract)
    {
        $form = $this->createRemoveLocalForm($contract);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
			$locals = $contract->getLocal();
			if(isset($locals[0])){
				$oLocal = $locals[0];
				$contract->removeLocal($oLocal);
				$res = $this->updateEntity($contract);
				$this->updateStatus($contract,$oLocal);
			}else{
				$oGroup = $contract->getGroup();
				if($oGroup){
					$locals = $oGroup->getLocal();
					if(isset($locals[0])){
						$oLocal = $locals[0];
						$oGroup=$contract->getGroup();
						$oGroup->removeLocal($oLocal);
						$this->updateEntity($oGroup);	
						$this->updateStatus($oGroup,$oLocal);					
					}						
				}			
			}				
		}
		return $this->redirectToRoute('contracts_show', array('id' => $contract->getId()));
    }
	/**
	* Remove students step first
	*/
    public function removestudents0Action($idcontract,$idstudent)
    {
		$this->get('session')->set('idcontract',$idcontract);
		$this->get('session')->set('idstudent',$idstudent);
		return $this->redirectToRoute('contracts_students_remove1');
    }
	/**
	* Remove students second step
	*/
    public function removestudents1Action(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$idcontract=$this->getSessionByName('idcontract');
		$idstudent=$this->getSessionByName('idstudent');
		$this->get('session')->set('idcontract',$idcontract);
        $deleteForm = $this->createRemoveStudentForm($idcontract,$idstudent);
        $deleteForm->handleRequest($request);
		$oStudent=$em->getRepository('BoAdminBundle:Students')->find($idstudent);
		$oContrat = $em->getRepository('BoAdminBundle:Contracts')->find($idcontract);
				
        return $this->render('contracts/showstudent.html.twig', array(
            'student' => $oStudent,
			'contract' => $oContrat,
            'delete_form' => $deleteForm->createView(),
			'pm'=>"contracts",
			'sm'=>"students",
        ));

    }
	/**
	* Remove students last  step
	*/
    public function removestudents2Action(Request $request, $idcontract,$idstudent)
    {
        $form = $this->createRemoveStudentForm($idcontract,$idstudent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$em = $this->getDoctrine()->getManager();
            $oStudent = $em->getRepository('BoAdminBundle:Students')->find($idstudent);
			$oContract = $em->getRepository('BoAdminBundle:Contracts')->find($idcontract);
			if($this->existStudent($oContract,$oStudent)==1){
				$oContract->removeStudent($oStudent);
				$res = $this->updateEntity($oContract);
				if($res>0) $this->setActivity("The student ".$oStudent->getFirstname()." ".$oStudent->getName()." has been removed from contract Id:".$oContract->getId());
			}
			$oGroup = $oContract->getGroup();
			if($oGroup and $this->existStudent($oGroup,$oStudent)==1){
				$oGroup->removeStudent($oStudent);
				$res = $this->updateEntity($oGroup);
				if($res>0) $this->setActivity("The student ".$oStudent->getFirstname()." ".$oStudent->getName()." has been removed from group:".$oGroup->getName());
				$oStudent->setGroup(null);
				$this->updateEntity($oStudent);
			}				
		}
		return $this->redirectToRoute('contracts_show', array('id' => $idcontract));
    }
	/**
	* Remove advisor from contract
	*/
    public function removeadvisorAction(Request $request, $idcontract,$idemployee)
    {
        $form = $this->createRemoveAdvisorForm($idcontract,$idemployee);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
			$em = $this->getDoctrine()->getManager();
            $oEmployee = $em->getRepository('BoAdminBundle:Employee')->find($idemployee);
			$oContract = $em->getRepository('BoAdminBundle:Contracts')->find($idcontract);
			if($oContract->getAdvisor()){
				$oContract->setAdvisor(null);
				$res = $this->updateEntity($oContract);
				if($res>0) $this->setActivity("The advisor ".$oEmployee->getFirstname()." ".$oEmployee->getName()." has been removed from contract Id:".$oContract->getId());
			}
			if($oContract->getGroup() and $oContract->getGroup()->getAdvisor()){
				$oGroup = $oContract->getGroup();				
				$oGroup->setAdvisor(null);
				$res = $this->updateEntity($oGroup);
				if($res>0) $this->setActivity("The advisor ".$oEmployee->getFirstname()." ".$oEmployee->getName()." has been removed from group:".$oGroup->getName());
			}			
		}
		return $this->redirectToRoute('contracts_show', array('id' => $idcontract));
    }
	/**
	* Remove teacher
	*/
    public function removeTeacherAction(Request $request, Contracts $contract,$idemployee)
    {
        $form = $this->createRemoveTeacherForm($contract,$idemployee);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
			$this->removeTeacherSchedule($contract->getId(),$idemployee);
			$this->removeEmployee($contract->getId(),$idemployee);		
		}
		return $this->redirectToRoute('contracts_show', array('id' => $contract->getId()));
    }
	private function createAdvisor($contract){
		$em = $this->getDoctrine()->getManager();
		$advisorlist = new Advisorlist();
		if($contract->getAdvisor()==null) return $advisorlist;
		$oEmployee = $contract->getAdvisor();
		$aAdvisor = $em->getRepository('BoAdminBundle:Advisors')->findBy(array('advisor'=>$oEmployee));
		if(isset($aAdvisor[0])){ 
			$oAdvisor=$aAdvisor[0];
			$advisorlist->setAdvisor($oAdvisor);
		}
		return $advisorlist;
	}
    /**
    * Displays a form to edit an existing Contracts entity.
    */
    public function editAction(Request $request, Contracts $contract)
    {
	$this->checkAndupdateCpCharge();
	$em = $this->getDoctrine()->getManager();
		$aLanguage = $em->getRepository('BoAdminBundle:Language')->findByName($contract->getLanguage());
		if(isset($aLanguage[0])) $contract->setLanguage($aLanguage[0]);
		$this->setSessionByName('group',$contract->getGroup());
		//To generate the advisor list in the contract form
		$adlist = $this->createAdvisor($contract);
		$adlist_form = $this->createForm('Bo\AdminBundle\Form\AdvisorlistType',$adlist);
		$adlist_form->handleRequest($request);
		//handle edit form
        $editForm = $this->createForm('Bo\AdminBundle\Form\ContractsType', $contract);
        $editForm->handleRequest($request);
        if($editForm->isSubmitted() && $editForm->isValid()){
			$em = $this->getDoctrine()->getManager();
			$contract = $this->handleAdvisor($contract,$adlist);
			if($contract->getCampus()!=null){
				$contract->setAdresse($contract->getCampus()->getAddress());
			}
			//if($contract->getStatus()!=3 and $contract->getStatus()!=4 and $contract->getStatus()!=5 and $contract->getStatus()!=6) $contract->updateStatus();
			$oldContract = $this->getSessionWithoutRemove('contracts');

			if($oldContract->getEnddate()!=$contract->getEnddate() and $contract->getEnddate()>$oldContract->getEnddate()){
				$contract->setInitialEnddate($oldContract->getEnddate());
			} 
			$res = $this->updateEntity($contract);
			if($res>0){
				$this->logChange($oldContract,$contract);
				if($contract->getAdvisor()!=null) $this->updateAdvisorCharge($contract->getAdvisor());
				if($oldContract!=null and $oldContract->getAdvisor()!=null) $this->updateAdvisorCharge($oldContract->getAdvisor());
				if($contract->getAdvisor()!=null){
					if (!in_array(@$_SERVER['REMOTE_ADDR'], array(
						'127.0.0.1',
						'::1',
					))) $this->notifyAdvisor($contract);
				}	
			}
			$contract = $this->setIsGroup($contract);
			if($res>0 and $this->getSessionByName('group')!=$contract->getGroup()){
				//Keep the historic of students
				$this->updateStudent($contract);
				//Add the contract advisor to new group
				if($contract->getGroup()){
					$this->addAdvisorToGroup($contract);
					//Update status and contract type for the group
					$this->updateStcForGroup($contract->getGroup(),$contract);
				}
				$this->setActivity($contract->getId()."-".$contract->getContractnumber().$this->getGroupName($contract)." is modified by this user");
				$this->getRemoveSession('contracts');
			}
			if($this->isSearchReturn()){
				return $this->redirectToRoute('contracts_back');	
			}else{
				return $this->redirectToRoute('contracts_show', array('id'=>$contract->getId()));				
			}	
        }
		//the forms called by modal action
        	$client_form = $this->createForm('Bo\AdminBundle\Form\ClientTypeModal', new Client());
        	$group_form = $this->createForm('Bo\AdminBundle\Form\GroupModalType', new Group());		
		$this->setSessionByName('idcontract',$contract->getId());
		if($this->getSessionWithoutRemove('contracts')==null) $this->setSessionByName('contracts',$contract);		
        	return $this->render('contracts/edit.html.twig', array(
            		'contract' => $contract,
			'group'=>$contract->getGroup(),
			'campuss' => $em->getRepository('BoAdminBundle:Campus')->findAll(),
			'connected'=>$this->getConnectedEmployee(),
			'adlist_form' => $adlist_form->createView(),//to generate advisor list
            		'edit_form' => $editForm->createView(),
			'client_form' => $client_form->createView(),
			'group_form' => $group_form->createView(),	
			'pm'=>"contracts",
			'sm'=>"contracts",
        	));
    }
    /**
    * Displays a form to edit an existing Students entity.
    */
    public function editstudentAction(Request $request, Students $student)
    {
        $editForm = $this->createForm('Bo\AdminBundle\Form\StudentsType', $student);
        $editForm->handleRequest($request);
        if($editForm->isSubmitted() && $editForm->isValid()) {
			$this->updateEntity($student);
            return $this->redirectToRoute('contracts_show', array('id' => $this->get("session")->get("idcontracts")));
        }

        return $this->render('BoAdminBundle:Contracts:studentedit.html.twig', array(
            'student' => $student,
            'edit_form' => $editForm->createView(),
			'idcontract'=>$this->get("session")->get("idcontracts"),
			'pm'=>"contracts",
			'sm'=>"contracts",
        ));
    }
    /**

    * Displays contract's historic.
    */
    public function historicAction(Request $request, Contracts $oContract)
    {
	$aHistorics = $this->getRepository('BoAdminBundle:Histocontract')->findBy(array('idcontracts'=>$oContract->getId()));
        return $this->render('BoAdminBundle:Contracts:historic.html.twig', array(
            	'historics' => $aHistorics,
		'status'=>$this->getContractStatus(),//get status definition list
		'contract'=>$oContract,
		'pm'=>"contracts",
		'sm'=>"contracts",
        ));
    }
    /**
    * Deletes a Contracts entity.
    */
    public function deleteAction(Request $request, Contracts $contract)
    {
	$oSavecontract = $contract;
	$user=$this->getTokenUser();
	$oDeletedBy=$user?$user->getEmployee():null;
	$oAdvisor = $contract->getAdvisor();
        $form = $this->createDeleteForm($contract);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
			$aStudents=$contract->getStudents();
			foreach($aStudents as $oStudent){
				$contract->removeStudent($oStudent);
			}
			//Training deleting
			$aTraining=$em->getRepository('BoAdminBundle:Training')->findBycontracts($contract);
			if(isset($aTraining[0])) $this->removeArrayEntity($aTraining);
			$aSchedules=$em->getRepository('BoAdminBundle:Agenda')->findBycontracts($contract);
			if(isset($aSchedules[0])) $this->removeArrayEntity($aSchedules);
			$aRevisions=$em->getRepository('BoAdminBundle:Revision')->findByIdcontracts($contract->getId());
			if(isset($aRevisions[0])) $this->removeArrayEntity($aRevisions);
			$aTeachers = $contract->getEmployee();
			foreach($aTeachers as $oTeacher){
				$contract->removeEmployee($oTeacher);
			}
            		$res=$this->removeEntity($contract);
			if($res==false){
				if($oAdvisor) $this->updateAdvisorCharge($oAdvisor);
				//$em->getRepository('BoAdminBundle:SupContracts')->recordDeleteHistoric($oSavecontract,$oDeletedBy);
				$this->createActivity("Contracts",$oSavecontract->getContractnumber()." is deleted by user ");
			}
        }
        return $this->redirectToRoute('contracts_index');
    }
    /**
     * Creates a form to delete a Contracts entity.
     * @param Contracts $contract The Contracts entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Contracts $contract)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contracts_delete', array('id' => $contract->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /**
     * Creates a Note form
     * @param Notes $oNotes
     * @return \Symfony\Component\Form\Form The form
     */
    private function createNoteForm($oNotes)
    {
        $form = $this->createForm('Bo\AdminBundle\Form\NotesType', $oNotes);
	return $form; 
    }
    /**
     * Creates a note form
     * @param Notes $oNotes
     * @return \Symfony\Component\Form\Form The form
     */
	private function getNoteFormView($oNotes){
        	$form = $this->createNoteForm($oNotes);
		return $form->createView(); 
	}

    /**
     * Creates a form to remove a Advisor entity from a contract.
     * @param Employee $employee and Contracts $contract entities
     * @return \Symfony\Component\Form\Form The form
     */
    private function createRemoveAdvisorForm($idcontract, $idemployee)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contracts_advisor_remove', array('idcontract' => $idcontract,'idemployee'=>$idemployee)))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    private function createRemoveStudentForm($idcontract,$idstudent)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contracts_students_remove2', array('idcontract' => $idcontract,'idstudent' => $idstudent)))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /**
     * Creates a form to remove a teacher from Contracts entity.
     * @return \Symfony\Component\Form\Form The form
     */
    private function createRemoveLocalForm(Contracts $contract)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contracts_local_remove', array('id'=>$contract->getId())))
            ->getForm()
        ;
    }
    /**
     * Creates a form to remove a teacher from Contracts entity.
     * @return \Symfony\Component\Form\Form The form
     */
    private function createRemoveTeacherForm(Contracts $contract, $idemployee)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contracts_teacher_remove', array('id'=>$contract->getId(),'idemployee'=>$idemployee)))
            ->getForm()
        ;
    }
    /**
    * return to the previous search
    */
    public function backAction(Request $request)
    {
		$this->verifySessionRights();
		$oEntity = $this->getRepository('BoAdminBundle:Contracts');	
		$description = $this->get('session')->get('search');
		if($description!=null){
			$aResult = $oEntity ->search($description);
			if(!isset($aResult[0])) return $this->redirect($this->generateUrl('contracts_list'));	
			else{
				return $this->render('contracts/back.html.twig', array(
					'contracts'=>$aResult,
					'now'=>new \DateTime(),
					'count'=>count($aResult),
					'description'=>$description,
					'pm'=>"contracts",
					'sm'=>"contracts",
				));				
			}
		}else{
			if($aCriteria = $this->getCriteriaList()) $aContracts = $this->getContractsFromData($oEntity);
			$page = $this->get('session')->get('page');
			if($page==null) $page=1;
			//get number line per page
			$nb_cpp = $this->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
			$nb_tc = $oEntity->getInprogressTotal();
			$nb_pages = ceil($nb_tc/$nb_cpp);
			//Pour la recherche des opérations en deux dates 
			$oCcdate = new Ccdate();
			$oCcdate->setStartdate(new \DateTime($aCriteria[3]));
			$oCcdate->setEnddate(new \DateTime($aCriteria[4]));
			$Ccdateform = $this->createForm('Bo\AdminBundle\Form\CcdateType', $oCcdate);
			return $this->render('contracts/index.html.twig', array(
				'contracts' => $aContracts,
				'now'=>new \DateTime(),
				'types'=>$oEntity->getContractType(),
				'idtype'=>$aCriteria[0],
				'fields'=>$oEntity->getWorkFields(),
				'idstatus'=>$aCriteria[1],
				'idfield'=>$aCriteria[2],
				'page' => $page, // On transmet à la vue la page courante,
				'nb_pages' => $nb_pages, //le nombre total de pages,
				'nb_cpp'=>$nb_cpp,
				'ccd_form' =>  $Ccdateform->createView(),
				'inprogress'=>$nb_tc, // Et le nombre total d'enregistrement en cours.
				'all'=>$oEntity->getAllTotal(), // Et le nombre total d'enregistrement tous les contracts.
				'archived'=>$oEntity->getArchivedTotal(), // Et le nombre total d'enregistrement archivé.
				'pm'=>"contracts",
				'sm'=>"contracts",
			));			
		}		

    }
    /**
     * Displays a form to edit an existing BillingContact entity.
     */
    public function editbillingcontactAction(Request $request, BillingContact $billingContact,$idcontract)
    {
        $editForm = $this->createForm('Bo\AdminBundle\Form\BillingContactType', $billingContact);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($billingContact);
            $em->flush();		
			return $this->redirectToRoute('contracts_show',array('id'=>$idcontract));
        }
		
        return $this->render('BoAdminBundle:Contracts:editbillingcontact.html.twig', array(
            'billingContact' => $billingContact,
			'idcontract'=>$idcontract,
            'edit_form' => $editForm->createView(),
			'pm'=>"contracts",
			'sm'=>"billingcontact",
        ));
    }
	private function getContractsFromData($oEntity){
		$data = $this->get('session')->get('data');
		$period = $this->get('session')->get('period');
		if($period!=null){
			$data=$period;
		} 
		$aData = explode(":",$data);
		$idtype = (isset($aData[0]))?$aData[0]:null;
		$startdate = (isset($aData[1]))?$aData[1]:null;
		$enddate = (isset($aData[2]))?$aData[2]:null;
		$idstatus = (isset($aData[3]))?$aData[3]:null;
		$idfield = (isset($aData[4]))?$aData[4]:null;
		if($period==null) return $oEntity->getDataPeriod($idtype,$idstatus,$idfield);
		else return $oEntity->getDataPeriod($idtype,$idstatus,$idfield,$startdate,$enddate);
	}
	private function getCriteriaList(){
		$data = $this->get('session')->get('data');
		$period = $this->get('session')->get('period');
		if($period!=null){
			$data=$period;
		} 
		$aData = explode(":",$data);
		$idtype = (isset($aData[0]))?$aData[0]:null;
		$startdate = (isset($aData[1]))?$aData[1]:null;
		$enddate = (isset($aData[2]))?$aData[2]:null;
		$idstatus = (isset($aData[3]))?$aData[3]:null;
		$idfield = (isset($aData[4]))?$aData[4]:null;
		return array($idtype,$idstatus,$idfield,$startdate,$enddate);
	}
    public function extrasearchAction(Request $request)
    {
		if($request->isXmlHttpRequest())
		{	
			$data = $request->request->get('data');	
			$this->setSessionByName('data',$data);
			$aData = explode(":",$data);
		}
		//$aData = array ( '0' => "1",'1' => "2017-01-01", '2' => "2017-12-31", '3' => "0", '4' => 3 ) ;
		$idtype = $aData[0];
		$startdate = $aData[1];
		$enddate = $aData[2];
		$idstatus = $aData[3];
		$idfield = $aData[4];
		$this->setSessionByName('option',1);
		$oRep = $this->getRepository('BoAdminBundle:Contracts');
		$aContracts = $oRep->getDataPeriod($idtype,$idstatus,$idfield);
        	return $this->render('BoAdminBundle:Contracts:search.html.twig', array(
            		'contracts' => $aContracts,
			'now'=>new \DateTime(),
			'count'=>count($aContracts),
		));
    }
    public function periodsearchAction(Request $request)
    {
		if($request->isXmlHttpRequest())
		{	
			$data = $request->request->get('data');	
			$this->setSessionByName('period',$data);
		}
		$aData = explode(":",$data);
		$idtype = $aData[0];
		$startdate = $aData[1];
		$enddate = $aData[2];
		$idstatus = $aData[3];
		$idfield = $aData[4];
		$this->setSessionByName('option',2);
		$oRep = $this->getRepository('BoAdminBundle:Contracts');
		$aContracts = $oRep->getDataPeriod($idtype,$idstatus,$idfield,$startdate,$enddate);
        return $this->render('BoAdminBundle:Contracts:search.html.twig', array(
            'contracts' => $aContracts,
			'now'=>new \DateTime(),
			'count'=>count($aContracts),
		));
    }
	public function xlsAction(Request $request){
		$oCcdate= new Ccdate();
        	$Ccdateform = $this->createForm('Bo\AdminBundle\Form\CcdateType', $oCcdate);
        	$Ccdateform->handleRequest($request);		
		$oRep = $this->getRepository('BoAdminBundle:Contracts');
		$idtype = $request->request->get('idtype');	
		$idstatus = $request->request->get('idstatus');	
		$startdate = $oCcdate->getStartdate();
		$enddate = $oCcdate->getEnddate();
		$idfield = $request->request->get('idfield');
		$option = $this->getSessionByName('option');
		if($option==1) $aContracts = $oRep->getExtractData($idtype,$idstatus,$idfield);
		else $aContracts = $oRep->getExtractData($idtype,$idstatus,$idfield,$startdate,$enddate);			
		$oFactory=new Factory("contract");
		return $oFactory->newXLS($this->getExtractLabel(),$aContracts);			
	}
	public function presencexlsAction(Request $request,Contracts $contract){
		$oRepTs = $this->getRepository('BoAdminBundle:Timesheet');
		$oRepTsStudent = $this->getRepository('BoAdminBundle:TsStudent');
		$tsp = new Tspresence();		
        	$Tspresence_form = $this->createForm('Bo\AdminBundle\Form\TspresenceType', $tsp);
        	$Tspresence_form->handleRequest($request);		
		$month = $tsp->getMonth();
		$year = $tsp->getYear();
		$aTsInfo = $oRepTs->getTSForMonth($contract,$year,$month);	
		$aTsStudent = $oRepTsStudent->getAttendanceStudent($contract,$year,$month);
		$oFactory=new PresenceFactory("presence");
		return $oFactory->newXLS($contract,$aTsInfo,$aTsStudent,$month,$year);			
	}
	private function getHeadInfo($contract){
		$aInfo = array();
		if($contract->getClient() and $contract->getClient()->getReference()) $aInfo['client']=$contract->getClient()->getReference();
		else $aInfo['client']="";
	}
    /**
    * Search a contract.
    */
    public function searchAction(Request $request)
    {
		$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Contracts');	
		if($request->isXmlHttpRequest())
		{	
			$description = $request->request->get('description');
			$this->setSessionByName('search',$description);
		}
		$aResult = $oEntity->search($description);
		$aStatus = $oEntity->getStatus($aResult);
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:Contracts:search.html.twig', array(
				'contracts'=>$aResult,
				'now'=>new \DateTime(),
				'status'=>$aStatus,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Contracts:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * contracts Statistic .
    */
    public function statisticAction(Request $request)
    {
		//$oEntity = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Contracts');	
		if($request->isXmlHttpRequest()) $data = $request->request->get('data');
		$aResult = $this->getNmsoStatistic();
		print_r($aResult);
		exit(0);
		if(isset($aResult[0])){
			return $this->render('BoAdminBundle:Contracts:statistic.html.twig', array(
				'contracts'=>$aResult,
				'now'=>new \DateTime(),
				'status'=>$aStatus,
				'count'=>count($aResult),
				'description'=>$description,
			));				
		}
		return $this->render('BoAdminBundle:Contracts:search.html.twig', array(
			'criteria' => $description,
		));
    }
    /**
    * Ajax Page Search.
    */
    public function pagesearchAction(Request $request)
    {
		$oContractEntity=$this->getRepository('BoAdminBundle:Contracts');
		$nb_tc = $oContractEntity->getInprogressTotal();
		if($request->isXmlHttpRequest())
		{	
			$page = $request->request->get('motcle');
		}
		$this->get('session')->set('page',$page);
		//get number line per page
		$nb_cpp = $this->getRepository('BoAdminBundle:Param')->getParam("display_list_page_number",1);
		$nb_pages = ceil($nb_tc/$nb_cpp);
		$offset = $page>0?($page-1) * $nb_cpp:0;
		$aContracts = $this->getRepository('BoAdminBundle:Contracts')->findBy(array('status'=>1),array('id' => 'desc'),$nb_cpp,$offset);

		return $this->render('BoAdminBundle:Contracts:pagesearch.html.twig', array(
		    	'contracts' => $aContracts,
			'now'=>new \DateTime(),
			'status'=>$this->getRepository('BoAdminBundle:Contracts')->getStatus($aContracts),
			'page' => $page, // On transmet à la vue la page courante,
		));
    }
    /**
    * close a contract -- Ajax.
    */
    public function closeAction(Request $request,Contracts $oContract)
    {
		$aMessage=null;
		$oNote = new Notes;
        	$closeForm = $this->createNoteForm($oNote);
        	$closeForm->handleRequest($request);

        	if($closeForm->isSubmitted() && $closeForm->isValid()){
			$aRes = $this->closeContract($oContract);
			$res = $aRes[0];
			$oContract = $aRes[1];
			if($oContract){
				$oGroup = $oContract->getGroup();
				if($oGroup){
					$oGroup->setStatus(0);
					$res = $this->updateEntity($oGroup);
					if($res>0) $this->updateLocalAfterClosing($oGroup);		
				}
				$sActivity = "Le contrat id:".$oContract->getId()." is Closed by this user";
				$this->setActivity($sActivity);
				//Historisation de l'operation
				$this->logContractHisto($sActivity." with this note : ".$oNote->getDescription(),$oContract->getId(),$this->getConnected());
				$oContract = $this->updateContractNote($oContract,$oNote);		
			}
		}
		if(isset($res) and $res>0){
			$message = $this->getErrorMessage(22);
			$aMessage =array('type'=>"Warning",'texte'=>$message);
		}else{
			$message = $this->get('translator')->trans('Can not close this contracts');
			$aMessage =array('type'=>"Warning",'texte'=>$message);
		}
		$this->setSessionByName('message',$aMessage);

		return $this->redirectToRoute('contracts_show',array('id'=>$oContract->getId()));
    }
    /**
    * open a contract -- Ajax.
    */
    public function reopenAction(Request $request,Contracts $oContract)
    {
		$aMessage=null;
		$oNotes = new Notes;
        	$reopenForm = $this->createNoteForm($oNotes);
        	$reopenForm->handleRequest($request);

        	if($reopenForm->isSubmitted() && $reopenForm->isValid()){
			$oContract->setStatus(1);
			$res = $this->updateEntity($oContract);
			if($res>0) $this->updateLocalBy($oContract);
			$oGroup = $oContract->getGroup();
			if($oGroup){
				$oGroup->setStatus(1);
				$res = $this->updateEntity($oGroup);
				if($res>0) $this->updateLocalBy($oGroup);
			} 
			$activity = "The contract id:".$oContract->getId()." is reopened by this user";
			$this->setActivity($activity);
			//Historisation de l'operation
			$this->logContractHisto($activity." with this note : ".$oNotes->getDescription(),$oContract->getId(),$this->getConnected());
			$oContract = $this->updateContractNote($oContract,$oNotes,1);
		}
		if(isset($res) and $res>0){	
			$message = $this->get('translator')->trans('This contract has been reopened successfully');
			$aMessage =array('type'=>"Warning",'texte'=>$message);
		}else{
			$message = $this->get('translator')->trans('Can not close this contracts');
			$aMessage =array('type'=>"Warning",'texte'=>$message);
		}
		$this->setSessionByName('message',$aMessage);
		return $this->redirectToRoute('contracts_show',array('id'=>$oContract->getId()));
    }
    /**
    * add note to a contract.
    */
    public function addnoteAction(Request $request,Contracts $oContract)
    {
		$aMessage=null;
		$oNotes = new Notes;
        	$addnoteForm = $this->createNoteForm($oNotes);
        	$addnoteForm->handleRequest($request);
        	if($addnoteForm->isSubmitted() && $addnoteForm->isValid()){
			$contratnote = $oContract->getNotes();
			if($contratnote!=null or $contratnote!=""){
				$contratnote=$contratnote."<br>";
			}
			$contratnote=$contratnote.$oNotes->getDescription()." (By ".$this->getConnected()." - ".date("Y-m-d").")";
			//Historisation de l'operation
			$this->logContractHisto("Adding this note : ".$oNotes->getDescription(),$oContract->getId(),$this->getConnected());
			$oContract->setNotes($contratnote);
			$this->updateEntity($oContract);
		}
		if(isset($res) and $res>0){	
			$message = $this->get('translator')->trans('This contract has been updated successfully');
			$aMessage = array('type'=>"Warning",'texte'=>$message);
		}else{
			$message = $this->get('translator')->trans('Can not update this contract');
			$aMessage = array('type'=>"Warning",'texte'=>$message);
		}
		$this->setSessionByName('message',$aMessage);
		return $this->redirectToRoute('contracts_show',array('id'=>$oContract->getId()));
    }
    /**
    * add a text to the contract note
    */
	private function updateContractNote($oContract,$oNotes,$option=null){
		$activity = "";
		$activity = $option==null?"The contract is close by ":"The contract is reopened by ";
		$contratnote = $oContract->getNotes();
		if($contratnote!=null or $contratnote!=""){
			$contratnote=$contratnote."<br>";
		}
		$contratnote=$contratnote.$activity." with the note : ".$oNotes->getDescription();
		$oContract->setNotes($contratnote);
		$this->updateEntity($oContract);
		return $oContract;
	}
    /**
    * open a contract -- Ajax.
    */
    public function openAction(Request $request)
    {
		if($request->isXmlHttpRequest())
		{	
			$idcontract = $request->request->get('id');	
			$oContractEntity=$this->getRepository('BoAdminBundle:Contracts');	
			$oContract = $oContractEntity->find($idcontract);
			if($oContract){
				$oContract->setStatus(1);
				$res = $this->updateEntity($oContract);
				if($res>0) $this->updateLocalBy($oContract);
				$oGroup = $oContract->getGroup();
				if($oGroup){
					$oGroup->setStatus(1);
					$res = $this->updateEntity($oGroup);
					if($res>0) $this->updateLocalBy($oGroup);
				} 
			}
		}
		if(isset($res) and $res>0){
			$this->setActivity("Le contrat id:".$oContract->getId()." est ouvert par ".$this->getUserIdentity());
			$message = $this->get('translator')->trans('This contract has been reopened successfully');
			$aMessage =array('type'=>"Warning",'texte'=>$message);
		}else{
			$message = $this->get('translator')->trans('Can not close this contracts');
			$aMessage =array('type'=>"Warning",'texte'=>$message);
		}
		return $this->render('BoAdminBundle:Default:message.html.twig', array(
			'message' => $aMessage,
		));	
    }
    /**
    * plan a event -- Ajax.
    */
    public function planAction(Request $request)
    {
		if($request->isXmlHttpRequest())
		{	
			$idcontract = $request->request->get('id');	
			$oContractEntity=$this->getRepository('BoAdminBundle:Contracts');
			$oContract = $oContractEntity->find($idcontract);			
			$aSchedule=$this->getRepository('BoAdminBundle:ContractSchedule')->findBycontracts($oContract);
			if($oContract!=null and isset($aSchedule[0])){
				print_r($aSchedule[0]->getTeacheram());
				exit(0);
			}
		}
		echo $idcontract;
		exit(0);
		if(isset($res) and $res==1){
			$this->setActivity("Le contrat id:".$oContract->getId()." est fermé par ".$this->getUserIdentity());
			$message = $this->getErrorMessage(22);
			$aMessage =array('type'=>"Warning",'texte'=>$message);
		}else{
			$message = $this->get('translator')->trans('Can not close this contracts');
			$aMessage =array('type'=>"Warning",'texte'=>$message);
		}
		return $this->render('BoAdminBundle:Default:message.html.twig', array(
			'message' => $aMessage,
		));	
    }
    /**
     * Creates a new Client entity.
     *
     */
    public function newclientAction(Request $request)
    {
        $client = new Client();
        $form = $this->createForm('Bo\AdminBundle\Form\ClientType', $client);
        $form->handleRequest($request);
		$message=null;
		if($client->getReference()) $aClient = $this->getRepository('BoAdminBundle:Client')->findBy(array('reference'=>$client->getReference()));
		if(isset($aClient) and count($aClient)==1){
			$message=array('type'=>"Warning",'texte'=>$this->getErrorMessage(19));
		}
        if ($form->isSubmitted() && $form->isValid() && $message==null) {
            $res = $this->updateEntity($client);

            return $this->redirect($this->get('session')->get('url'));
        }
		$this->get('session')->set('url',$request->headers->get('referer'));
        return $this->render('BoAdminBundle:Contracts:newclient.html.twig', array(
            'client' => $client,
			'message' => $message,
            'form' => $form->createView(),
			'pm'=>"contracts",
			'sm'=>"client",
        ));
    }
    public function contractualAction(Request $request, $idcontract)
    {
        $contractual = new Contractual();
        $form = $this->createForm('Bo\AdminBundle\Form\ContractualType', $contractual);
        $form->handleRequest($request);
		$message=null;
		if($contractual->getEmail()!=null){
			$contractuals = $this->getRepository('BoAdminBundle:Contractual')->findBy(array('email'=>$contractual->getEmail()));
			if(isset($contractuals[0])) $message = "This contact email ".$contractual->getEmail()." already exist.";
		}
        if ($form->isSubmitted() && $form->isValid() && $message==null) {
			$oContract = $this->getRepository('BoAdminBundle:Contracts')->find($idcontract);
			$contractual->setCreateby($this->getConnected());
			$res = $this->updateEntity($contractual);
			if($res>0){
				$oContract->setContractual($contractual);
				$this->updateEntity($oContract);
			} 
			return $this->redirectToRoute('contracts_show',array('id'=>$idcontract));
        }
        return $this->render('contractual/new.html.twig', array(
            'contractual' => $contractual,
			'contractuals' => isset($contractuals[0])?$contractuals:null,
			'idcontract' => $idcontract,
            'form' => $form->createView(),
			'message'=>array('type'=>'Warning','texte'=>$message),
			'pm'=>"contracts",
			'sm'=>"contractual",
        ));		
    }
	private function getTeacherSchedule($oSchedule){
		$aSchedule=array();	
		if($oSchedule->getTeacheram()!=null) $aSchedule[$oSchedule->getTeacheram()]="AM";
		if($oSchedule->getTeacherpm()!=null) $aSchedule[$oSchedule->getTeacherpm()]="PM";
		return $aSchedule;
	}
	private function isUser($student){
		$aUser = $this->getRepository('BoUserBundle:User')->findBy(array('students'=>$student));
		if(isset($aUser[0])) return true;
		else return false;
	}
    /**
    * Creates a new Training entity by contract.
    */
    private function createTraining($oContract)
    {
		$training = new ContractTraining();
		$training->setIdcontracts($oContract->getId());
		$training->setStartam($this->getTime(8,0));
		$training->setEndam($this->getTime(12,0));
		$training->setStartpm($this->getTime(13,0));
		$training->setEndpm($this->getTime(16,30));
		$training->setHourperday("7:00");
		return $this->updateEntity($training);	
    }
	private function getExtractLabel(){
		return array('group'=>"Student/Groupe",'typecontract'=>"Type de contrat",'methodofsupply'=>"Method of supply",'client'=>"Client",'department'=>"Department",'receivedate'=>"Date we received",'ordernumber'=>"No Offre à Commandes",'contractnumber'=>"No. Contrat autorisé",'contractdate'=>"Date du contrat",'clicsignaturedate'=>"Signature CLIC",'clientsignaturedate'=>"Signature Client",'startdate'=>"Start date",'enddate'=>"End date",'coordinator'=>"Contact pédagogique",'billingcontact'=>"Billing Contact",'advisor'=>"Conseiller pédagogique",'location'=>"Location",'language'=>"Language",'typeoftraining'=>"Type of Training",'typetime'=>"FT or PT",'hoursnumber'=>"Nombre d'heures",'schedule'=>"Schedule Info",'planreceived'=>"Reçu plan d'appr.",'learningplan'=>"No. Plan",'targetlevel'=>"Niveau recherché",'estimatedcost'=>"Coût estimatif",'initialhours'=>"Initial Hours Available",'hourlyrate'=>"Hourly Rate",'champ'=>"Champ",'session'=>"Session",'program'=>"Program");		
	}
	private function setActivity($activity){
		return $this->createActivity("Contract",$activity);	
	}
	private function getGroupName($contract){
		if($contract->getGroup()) $group="-".$contract->getGroup()->getName();
		else $group="";
		return $group;
	}
	private function addAdvisorToGroup($contract){
		$oGroup = $contract->getGroup();
		if(!$oGroup) return false;
		$oAdvisor = $oGroup->getAdvisor();
		if(!$oGroup) return false;
		if(!$contract->getAdvisor()) return false;
		if($oAdvisor==$contract->getAdvisor()) return false;
		$oGroup->setAdvisor($contract->getAdvisor());
		return $this->updateEntity($oGroup);			
	}
	private function updateAdvisorForGroup($oContract){	
		if($oContract->getGroup() and $group = $oContract->getGroup()){
			if($oContract->getAdvisor() and !$oContract->getGroup()->getAdvisor()){
				$group->setAdvisor($oContract->getAdvisor());
				return $this->updateEntity($group);
			}elseif(!$oContract->getAdvisor() and $group->getAdvisor()){
				$oContract->setAdvisor($group->getAdvisor());
				return $this->updateEntity($oContract);
			}elseif(!$oContract->getAdvisor() and !$group->getAdvisor() and $this->getGroupAdvisor($oContract)){
				$oAdvisor = $this->getGroupAdvisor($oContract);
				$oContract->setAdvisor($oAdvisor);
				$group->setAdvisor($oAdvisor);
				$this->updateEntity($group);
				return $this->updateEntity($oContract);
			} 		
		}
		return false;
	}
	private function getGroupAdvisor($oContract){
		if($oContract->getGroup() and $group = $oContract->getGroup()){
			$aContractsOfGroup = $this->getContractByGroup($group);
			foreach($aContractsOfGroup as $oContratGroup){
				if($oContratGroup->getAdvisor()) return $oContratGroup->getAdvisor();				
			}
		}
		return false;			
	}
	    /**
	    * Creates a new Substitution entity.
	    */
	    public function substituteAction(Request $request, $idagenda)
	    {
		$oRepTeacher = $this->getRepository('BoAdminBundle:Teachers');
		$oAgenda = $this->getRepository('BoAdminBundle:Agenda')->find($idagenda);
		$oContract = $oAgenda->getContracts();
		$oGroup = $oAgenda->getGroup();
		$substitution = new Substitution();
		$form = $this->createForm('Bo\AdminBundle\Form\SubstitutionType2', $substitution);
		$form->handleRequest($request);
		$aHolders=$this->getHolders($oContract);
		if($oContract) $aTeachers = $oRepTeacher->getAvailable($oContract,$aHolders);
		else $aTeachers = $oRepTeacher->getAllWithout($aHolders);
		if($form->isSubmitted() && $form->isValid()){
			$force = $request->request->get('btn-force');
			$idsubstitute = $request->request->get('teachers');
			$substitution = $this->updateDay($substitution);
			//echo intval($substitution->getTuesday())."<br>";
			$oTeacher = $this->getEmployeeById($idsubstitute);
			$oSchedule = $this->cloneAgenda($oAgenda,$substitution);
			$aOverlap = $this->overlapForEmployee($oSchedule,$oTeacher);
			$availability = $this->checkAvailability($oSchedule,$oTeacher);
			if($availability==1 or $force==1){
				$substitution->setIdsubstitute($idsubstitute);
				$oTsweek = $this->getTsWeek($substitution->getStartdate());
				$substitution->setTsweek($oTsweek);
				$message = $this->createSubstitution($oAgenda,$substitution,$oTeacher,$oContract);	
			    	if($message==null) return $this->redirectToRoute('contracts_show',array('id'=>$oContract->getId()));
			}else{
				$message = $this->getSessionByName('message');
			}
		}
		return $this->render('contracts/substitute.html.twig', array(
		    	'substitution' => $substitution,
			'agenda'=>$oAgenda,
			'contract' => $oContract,
			'idholder' => isset($idholder) and $idholder>0?$idholder:0,
			'substitutes'=> $this->getRepository('BoAdminBundle:Teachers')->getAvailable($oContract,$this->getHolders($oContract)),
			'idsubstitute' => isset($idsubstitute) and $idsubstitute>0?$idsubstitute:0,
			'teachers'=> $aTeachers,
			'message'=> isset($message)?$message:null,
			'overlap'=>isset($aOverlap)?$aOverlap:null,
			'idteacher'=>$idsubstitute,
			'holders'=>$aHolders,
			'force'=>$force,
		    	'substitution_form' => $form->createView(),
			'pm'=>"personnel",
			'sm'=>"substitution",
		));
	    }
	private function createSubstitution($oAgenda,$oSubstitution,$oTeacher,$oContract){
		$oRepSub = $this->getRepository('BoAdminBundle:Substitution');
		$message=null;
		//If the substitution end date is greater than to the scheduled  
		//the substitute has to take the place of the contract's holder
		if($oSubstitution->getEnddate()>=$oAgenda->getEnddate()){
			//Update the end date of the current agenda
			$oAgenda->setEnddate($this->getDatePlus($oSubstitution->getStartdate(),-1));
			$this->updateEntity($oAgenda);
			//Create a new agenda for the substitute
			$this->createNewAgenda($oAgenda,$oSubstitution,$oTeacher);
		}else{
			//Save the substitution
			//If there deosn't exist a substitution save the new one
			if(count($oRepSub->existSubstittution($oSubstitution))==0){ 
				$oSubstitution = $this->setStudentForSubstitution($oSubstitution,$oContract,$oAgenda);
				$this->updateEntity($oSubstitution);
			}else $message = $this->getTypeMessage("Warning",$this->get('translator')->trans('A substitution already exists for this teacher and this date'));
			//Attach the new substitution to the current agenda
			if($message==null){ 
				$this->notifyForSubstitution($oSubstitution,$oAgenda);
				$oAgenda->addSubstitution($oSubstitution);
				$this->updateEntity($oAgenda);
			}
		}
		return $message;
	} 
	private function createNewAgenda($oAgenda,$oSubstitution,$oTeacher){
		$oContract=$oAgenda->getContracts();
		if($this->existEntity($oTeacher,$oContract->getEmployee())==false){
			$oContract->addEmployee($oTeacher);
			$res1 = $this->updateEntity($oContract);
		}

			$oNew_agenda = new Agenda();
			$oNew_agenda->setContracts($oAgenda->getContracts());
			$oNew_agenda->setStudents($oAgenda->getStudents());
			$oNew_agenda->setGroup($oAgenda->getGroup());
			$oNew_agenda->setEmployee($oTeacher);
			$oNew_agenda->setDescription($oAgenda->getDescription());
			$oNew_agenda->setAmorpm($oAgenda->getAmorpm());
			$oNew_agenda->setMonday($oAgenda->getMonday());
			$oNew_agenda->setTuesday($oAgenda->getTuesday());
			$oNew_agenda->setWednesday($oAgenda->getWednesday());
			$oNew_agenda->setThursday($oAgenda->getThursday());
			$oNew_agenda->setFriday($oAgenda->getFriday());
			$oNew_agenda->setSaturday($oAgenda->getSaturday());
			$oNew_agenda->setHourperweek($oAgenda->getHourperweek());
			$oNew_agenda->setHourperday($oSubstitution->getHour());
			$oNew_agenda->setStartam($oSubstitution->getStartam());
			$oNew_agenda->setEndam($oSubstitution->getEndam());
			$oNew_agenda->setStartpm($oSubstitution->getStartpm());
			$oNew_agenda->setEndpm($oSubstitution->getEndpm());
			$oNew_agenda->setStartdate($oSubstitution->getStartdate());
			$oNew_agenda->setEnddate($oSubstitution->getEnddate());
			$oNew_agenda = $this->setAgendaStatus($oNew_agenda);
			$res = $this->updateEntity($oNew_agenda);
			if($res>0){
				$this->notifyAdminMembers($oNew_agenda);
			}
			return $res;
			
	}
	//NMSO
    public function batchAction(Request $request)
    {
		$oCem = $this->getDoctrine()->getManager()->getRepository('BoAdminBundle:Contracts');
		set_time_limit(3800);
        $batch = new Batch();
        $form = $this->createForm('Bo\AdminBundle\Form\BatchType', $batch);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$text = $batch->getText();
			$aText = explode("#",$text);
			$aRes=array();
			foreach($aText as $sText){
				if($sText==null) continue;
				$em = $this->getDoctrine()->getManager();
				$asText = explode(";",$sText);
				//print_r($asText);
				//exit(0);
				if((isset($asText[0]) and $asText[0]==null) or (isset($asText[1]) and $asText[1]==null) or (isset($asText[9]) and $asText[9]==null) or (isset($asText[10]) and $asText[10]==null)){
					continue;
					$aRes[]=$sText;
				}
				$contracts = new Contracts();
				$contracts->setLocation("Campus");
				$oCampus = $em->getRepository('BoAdminBundle:Campus')->find(1);
				$contracts->setCampus($oCampus);
				$contracts->setLanguage("French");
				$contracts->setTypeoftraining("GR");
				$oWF = $em->getRepository('BoAdminBundle:Workfields')->find(1);
				$contracts->setWorkfields($oWF);
				$contracts->setTypetime("Full Time");
				//$contracts->setHourperweek("35");
				$datenow = new \DateTime();

				//$asText[1] => Department example TBS ici type de contrat ou client;
				if(isset($asText[1])){
					$oTContract = $em->getRepository('BoAdminBundle:Typecontract')->find(1);
					$contracts->setTypecontract($oTContract);
					$sRef = trim($asText[1]);
					$aClient = $em->getRepository('BoAdminBundle:Client')->findByReference($sRef);
					if(isset($aClient[0]) and count($aClient)==1){
						$contracts->setClient($aClient[0]);
					}else{
						$oClient = new Client();
						$oClient->setReference($sRef);
						$oClient->setDesignation($sRef);
						$oClient->addTypecontract($oTContract);
						$this->updateEntity($oClient);
						$contracts->setClient($oClient);
					}
					$contracts->setDepartment($asText[1]);
					echo "Dép:".$contracts->getDepartment()."<br>";
				}
				//$asText[2] => Date we RECEIVED the contract;				
				if(isset($asText[2]) and $asText[2]!=null){
					$receivedate=$this->formatDateTime(trim($asText[2]));
					$contracts->setReceivedate($receivedate);
					echo "Received date:".$contracts->getReceivedate()->format("d-m-Y")."<br>";
				}
				//$asText[3] => Numéro de l'Offre à Commandes;
				if(isset($asText[3]) and $asText[3]!=null){
					$contracts->setOrdernumber($asText[3]);
					echo "Order number:".$contracts->getOrdernumber()."<br>";
				} 
				//$asText[4] => Méthode d'approvisionnement;
				if(isset($asText[4])){
					$contracts->setMethodofsupply($asText[4]);
					echo "Method:".$contracts->getMethodofsupply()."<br>";
				} 
				//$asText[5] => No. de l'AT ou Contrat autorisé;				
				if(isset($asText[5])) $contracts->setContractnumber($asText[5]);
				//$asText[6] => Date de l'AT ou contrat;					
				if(isset($asText[6]) and $asText[6]!=null){
					$contractdate=$this->formatDateTime(trim($asText[6]));
					$contracts->setContractdate($contractdate);
					echo "Contract date:".$contracts->getContractdate()->format("d-m-Y")."<br>";
				}
				//$asText[7] => AT ou contrat signé par CLIC en date du;					
				if(isset($asText[7]) and $asText[7]!=null){
					$signaturedate=$this->formatDateTime(trim($asText[7]));
					$contracts->setClicsignaturedate($signaturedate);
					echo "clic date:".$contracts->getClicsignaturedate()->format("d-m-Y")."<br>";
				}
				//$asText[8] => AT ou contrat signé par le ministère en date du;	
				if(isset($asText[8]) and $asText[8]!=null){
					$signaturedate=$this->formatDateTime(trim($asText[8]));
					$contracts->setClientsignaturedate($signaturedate);
					echo "client date:".$contracts->getClientsignaturedate()->format("d-m-Y")."<br>";
				}
				//$asText[9] => Start Date;	
				if(isset($asText[9]) and $asText[9]!=null){
					$startdate=$this->formatDateTime(trim($asText[9]));
					$contracts->setStartDate($startdate);
					echo "start date:".$contracts->getStartDate()->format("d-m-Y")."<br>";
				}
				//$asText[10] => End Date;	
				if(isset($asText[10]) and $asText[10]!=null){
					$enddate=$this->formatDateTime(trim($asText[10]));
					$contracts->setEnddate($enddate);
					echo "End date:".$contracts->getEnddate()->format("d-m-Y")."<br>";
				}
				//$asText[11] =>Pedagogical Contact for Dept.;
				if(isset($asText[11])){
					$aCoordinators = $em->getRepository('BoAdminBundle:Coordinator')->findByEmail(trim($asText[12]));
					if(isset($aCoordinators[0]) and count($aCoordinators)==1){
						$oCoordinator=$aCoordinators[0];
						$contracts->setCoordinator($oCoordinator);
					}elseif(!isset($aCoordinators[0])){
						$coordinators = new Coordinator();
						$coordinators->setName($asText[11]);
						//$asText[12] =>Pedagogical email for Dept.;
						if(isset($asText[12])) $coordinators->setEmail($asText[12]);
						//$asText[13] =>Pedagogical phone for Dept.;
						if(isset($asText[13])) $coordinators->setPhone($asText[13]);
						$res = $this->updateEntity($coordinators);
						$contracts->setCoordinator($coordinators);
					}
				}
				//$asText[14] =>Billing Contact for Dept.;
				if(isset($asText[14])){
					$aBillingContact = $em->getRepository('BoAdminBundle:BillingContact')->findByEmail(trim($asText[15]));
					if(isset($aBillingContact[0]) and count($aBillingContact)==1){
						$oBillingContact=$aBillingContact[0];
						$contracts->setBillingContact($oBillingContact);
					}elseif(!isset($aBillingContact[0])){
						$billingContact = new BillingContact();
						$billingContact->setName($asText[14]);
						//$asText[15] =>Billing Contact email for Dept.;
						if(isset($asText[15])) $billingContact->setEmail($asText[15]);
						//$asText[16] =>Billing Contact phone for Dept.;
						if(isset($asText[16])) $billingContact->setPhone($asText[16]);
						$res = $this->updateEntity($billingContact);
						$contracts->setBillingContact($billingContact);
					}
				}
				//$asText[17] =>schedule;				
				if(isset($asText[17])){
					$contracts->setSchedule($asText[17]);
					echo "Schedule:".$contracts->getSchedule()."<br>";
				}
				//$asText[18] =>Number of hours;		
				if(isset($asText[18])){
					$aHour = explode(" ",$asText[18]);
					if(isset($aHour[0])) $contracts->setInitialhours(intval($aHour[0]));
					else{
						$aHour = explode("hrs",$asText[18]);
						if(isset($aHour[0])) $contracts->setInitialhours(intval($aHour[0]));
					}
					echo "initial hour:".$contracts->getInitialhours()."<br>";
				}
				//$asText[19] =>Estimated cost;				
				if(isset($asText[19])){
					$contracts->setEstimatedcost($asText[19]);
					echo "initial hour:".$contracts->getEstimatedcost()."<br>";
				}
				
				//$asText[20] =>Number of hours;		
				if(isset($asText[20])){
					$aHour = explode(" ",$asText[20]);
					if(isset($aHour[0])) $contracts->setHoursnumber(intval($aHour[0]));
					else{
						$aHour = explode("hrs",$asText[20]);
						if(isset($aHour[0])) $contracts->setHoursnumber(intval($aHour[0]));
					}
					echo "Total hour:".$contracts->getHoursnumber()."<br>";
				}
				
				//$asText[21] =>Hoursly rate;
				if(isset($asText[21])){
					$aHourly = explode(",",$asText[21]);
					if(count($aHourly)==2) join(".",$aHourly);
					$contracts->setHourlyrate($asText[21]);
					echo "Rate:".$contracts->getHoursnumber()."<br>";
				}
				//$asText[22] =>Session;
				if(isset($asText[22])){
					$contracts->setSession(($asText[22]));
					echo "session:".$contracts->getSession()."<br>";
				}
				//$asText[23] =>Planreceived;
				if(isset($asText[23])){
					$contracts->setPlanreceived(($asText[23]));
					echo "Plan received:".$contracts->getPlanreceived()."<br>";
				}
				//$asText[24] =>Learningplan;
				if(isset($asText[24])){
					$contracts->setLearningplan(($asText[24]));
					echo "Plan:".$contracts->getLearningplan()."<br>";
				}
				//$asText[25] =>Startlesson;
				if(isset($asText[25])){
					$contracts->setStartlesson(($asText[25]));
					echo "Startlesson:".$contracts->getStartlesson()."<br>";
				}
				//$asText[26] =>ryacc;
				if(isset($asText[26])){
					$contracts->setRyacc(($asText[26]));
					echo "Ryacc:".$contracts->getRyacc()."<br>";
				}
				//$asText[27] =>targetlevel;
				if(isset($asText[27])){
					$contracts->setTargetlevel(($asText[27]));
					echo "Targetlevel:".$contracts->getTargetlevel()."<br>";
				}
				//$asText[28] =>Program;
				if(isset($asText[28])){
					$contracts->setProgram(($asText[28]));
					echo "Program:".$contracts->getProgram()."<br>";
				}
				//$asText[29] =>step;
				if(isset($asText[29])){
					$contracts->setStep(($asText[29]));
					echo "Step:".$contracts->getStep()."<br>";
				}
				$contracts->setCreateby('Flore Roko');
				echo "Createbyp:".$contracts->getCreateby()."<br>";
				$contracts->updateStatus();
				$res = $this->updateEntity($contracts);
				$aTraining = $em->getRepository('BoAdminBundle:Training')->findByIdgroup(212);
				$training = $this->getScheduleTraining(new Training(),$aTraining[0]);
				$training->setContracts($contracts);
				$res = $this->updateEntity($training);
					//$asText[0]=>Student Name ou Group
					if(isset($asText[0])){
						$aIdentity = explode(" ",$asText[0]);
						if(isset($aIdentity[0])) $firstname = trim($aIdentity[0]); 
						if(count($aIdentity)==2){
							$name = trim($aIdentity[1]); 
							$email = $firstname.$name."@nomail.cli";
						} 
						elseif(count($aIdentity)==3){
							$name = trim($aIdentity[1]).' '.trim($aIdentity[2]); 
							$email = $firstname.trim($aIdentity[1]).trim($aIdentity[2])."@nomail.cli";
						} 
						if(isset($asText[30]) and $asText[30]!=null) $email = $asText[30];
						$aStudents = $em->getRepository('BoAdminBundle:Students')->findByEmail($email);
						if(isset($aStudents[0])){
							$contracts->addStudent($aStudents[0]);
							$res = $this->updateEntity($contracts);
							continue;
						}
						$student = new Students();
						$student->setFirstname($firstname);
						$student->setName($name);
						$student->setCreateby("Flore Roko");
						if(isset($asText[27])) $student->setStartlevel($asText[27]);
						$student->setEmail($email);
						if(isset($asText[9]) and $asText[9]!=null){
							$startdate=$this->formatDateTime(trim($asText[9]));
							$student->setStartDate($startdate);
						}
						if(isset($asText[10]) and $asText[10]!=null){
							$enddate=$this->formatDateTime(trim($asText[10]));
							$student->setEnddate($enddate);
						}
						$res = $this->updateEntity($student);
						if($res>0){
							$contracts->addStudent($student);
							$res = $this->updateEntity($contracts);
							//$this->createUser(2,$student);
						} 
					}					
			}
			return $this->render('contracts/resbatch.html.twig', array(
				'res' => $aRes,
				'pm'=>"contracts",
				'sm'=>"contracts",
			));
        }
        return $this->render('contracts/newbatch.html.twig', array(
            'batch' => $batch,
            'form' => $form->createView(),
			'pm'=>"contracts",
			'sm'=>"contracts",
        ));
	}
	public function updateAction(){
        $em = $this->getDoctrine()->getManager();
		$oContractEntity=$em->getRepository('BoAdminBundle:Contracts');
		$aContracts = $oContractEntity->findAll();
		$time1 = time();
		foreach($aContracts as $oContract){
			if($oContract->getGroup() and count($this->getContractByGroup($oContract->getGroup()))>1){
				$group = $oContract->getGroup();
				$aTraining = $em->getRepository('BoAdminBundle:Training')->findByIdgroup($group->getId());
				if(isset($aTraining[0]) and $group->getTraining() and !$this->existEntity($aTraining[0],$group->getTraining())){
					$group->addTraining($aTraining[0]);
					$this->updateEntity($group);
					echo "Group:".$group->getName()."updated<br>";
				} 				
			}else{
				$aTraining = $em->getRepository('BoAdminBundle:Training')->findByContracts($oContract);
				if(isset($aTraining[0]) and $oContract->getTraining() and !$this->existEntity($aTraining[0],$oContract->getTraining())){
					$oContract->addTraining($aTraining[0]);
					$this->updateEntity($oContract);
					echo "Contracts:".$oContract->getId()."updated<br>";
				}				
			}			
		}
		$time2 = time();
		echo "executed in ".($time2-$time1)." secondes";
		exit(0);		
	}
	private function updateOldContracts($aContracts){
		foreach($aContracts as $oContract){
			$aLocal = $oContract->getLocal();
			if(isset($aLocal[0])){
				$oContract->removeLocal($aLocal[0]);
				$res1 = $this->updateEntity($oContract);
			}
		}		
	}
	private function notifyAdvisor($contract){
		$email = $contract->getAdvisor()->getEmail();
		$fullname = $contract->getAdvisor()->getFirstname();
		$subject = "Notification of new contract";
		if($email!=null){
			$body = $this->renderView("BoAdminBundle:Contracts:notifnewcontracts.html.twig", array('contract' =>$contract));
			$res = $this->sendmail($email,$subject,$body,null,"jnvekounou@yahoo.fr");
		}
		return $res;
	}
	private function notifyAdvisorAfterUpdate($contract,$connected){
		$email = $contract->getAdvisor()->getEmail();
		$fullname = $contract->getAdvisor()->getFirstname();
		$subject = "Modification of contract";
		if($email!=null){
			$body = $this->renderView("BoAdminBundle:Contracts:notifoldcontracts.html.twig", array('contract' =>$contract,'connected'=>$connected));
			$res = $this->sendmail($email,$subject,$body,null,"jnvekounou@yahoo.fr");
		}
		return $res;
	}
	private function sendAfterClosing($contract){
		$email = $em->getRepository('BoAdminBundle:Param')->getParam("email_billing_address",10);	
		echo $email."<br>";
		$fullname = "Billing / Facturation";
		$subject = "Contract closing / Fermeture de contrat";
		$aMailContent = $em->getRepository('BoAdminBundle:Mails')->getInfoMail('closing_message',4);
		$body = $this->renderView("BoAdminBundle:Contracts:closingmessage.html.twig", array('contract' =>$contract,));
		$res = $this->sendmail($email,$subject,$body,null,"jnvekounou@yahoo.fr");
		return $res;
	}
	private function isSearchReturn(){
		$data = $this->get('session')->get('data');
		if($data!=null) return true;
		$period = $this->get('session')->get('period');
		if($period!=null) return true;
		return false;
	}
	private function updateStudent($contract){
		$aStudents = $contract->getStudents();
		$group = $contract->getGroup();
		foreach($aStudents as $oStudents){
			$this->createStudentsGroup($group,$oStudents);
			$oStudents->setGroup($group);
			$this->updateEntity($oStudents);
		}
		return 1;
	}
	private function createStudentsGroup($group,$oStudents){
		if(!$group) return 0;
		$oStudentsGroup = new StudentsGroup();
		$oStudentsGroup->setGroup($group);
		$oStudentsGroup->setStudent($oStudents);
		return $this->updateEntity($oStudentsGroup);
	}
	private function updateTrainingForGroup($oGroup){
		$em = $this->getDoctrine()->getManager();
		//Get contracts group
		$aContractGroup = $this->getContractByGroup($oGroup);
		foreach($aContractGroup as $oContractGroup){
			//Get contract training
			$aTraining = $em->getRepository('BoAdminBundle:Training')->findBy(array('contracts'=>$oContractGroup));
			if(isset($aTraining[0]) and $oTraining=$aTraining[0]){
				$oTraining->setIdgroup($oGroup->getId());
				$this->updateEntity($oTraining);
				return $aTraining;
			}
		}
		return null;
	}
	private function initializeStudent($contract){
		$oStudent = new Students(); 
		if($contract->getTargetlevel()) $oStudent->setTargetlevel($contract->getTargetlevel());
		if($contract->getStartdate()) $oStudent->setStartdate($contract->getStartdate());
		if($contract->getEnddate()) $oStudent->setEnddate($contract->getEnddate());
		return $oStudent;
	}
	private function initializeTraining($contract){
		$oTraining = new Training();
		if($contract->getTypetime()=="Full Time"){
			$oTraining->setStartam($this->getTime(8,0));
			$oTraining->setEndam($this->getTime(12,0));
			$oTraining->setStartpm($this->getTime(13,0));
			$oTraining->setEndpm($this->getTime(16,0));
			$oTraining->setHourperday(7);
			$oTraining->setHourperweek(35);
		} 
		return $oTraining;
	}
	private function initializeContractual($contract=null){
		$contractual = new Contractual();
		if($contract!=null and $contract->getContractual()) return $contract->getContractual();
		return $contractual;		
	}
    /**
    * Creates a form to delete a Contractual entity.
    * @param Contractual $contractual The Contractual entity
    * @return \Symfony\Component\Form\Form The form
    */
    private function createDeleteContractualForm(Contractual $contractual)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contractual_delete', array('id' => $contractual->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
	private function getTotalCost($contract){
		$iTotlacost = floatval($contract->getEstimatedcost())+floatval($contract->getEstimatedcost1())+floatval($contract->getEstimatedcost2());
		$contract->setTotalcost($iTotlacost);
		return $contract;
	}
	private function getTeachersByContract($contract){
		$aTeachers = $contract->getEmployee();
		//If it not exist on the contract then check if it exists on the group
		if(!isset($aTeachers[0]) and $contract->getGroup()){
			$aTeachers = $contract->getGroup()->getEmployee();
			$this->updateTeacherSchedule($contract);
		} 
		return $aTeachers;
	}
	private function getMySubstitutionForm($aAgenda){
		$subsform = array();
		foreach($aAgenda as $oAgenda){
			$oSubstitution = new Substitution();
			$oContract =  $oAgenda->getContracts();
			if($oAgenda->getEmployee()) $oSubstitution->setIdholder($oAgenda->getEmployee()->getId());
			if($oAgenda->getContracts()){ 
				$oSubstitution->setIdcontract($oAgenda->getContracts()->getId());
				$oSubstitution->setStudent($this->getStudentBy($oContract));
			}
			if($oAgenda->getGroup()){
				$oSubstitution->setIdgroup($oAgenda->getGroup()->getId());
				$oSubstitution->setStudent($oAgenda->getGroup()->getName());
			}
			$oSubstitution->setStartdate($this->getNow());
			$oSubstitution->setEnddate($oContract->getEnddate());
			$oSubstitution->setHour($oAgenda->getHourperday());
			$oSubstitution->setStartam($oAgenda->getStartam());
			$oSubstitution->setEndam($oAgenda->getEndam());
			$oSubstitution->setStartpm($oAgenda->getStartpm());
			$oSubstitution->setEndpm($oAgenda->getEndpm());
			$oSubstitution->setMonday($oAgenda->getMonday());
			$oSubstitution->setTuesday($oAgenda->getTuesday());
			$oSubstitution->setWednesday($oAgenda->getWednesday());
			$oSubstitution->setThursday($oAgenda->getThursday());
			$oSubstitution->setFriday($oAgenda->getFriday());
			$substitutionform = $this->createForm('Bo\AdminBundle\Form\SubstitutionType2',$oSubstitution);
			$subsform[$oAgenda->getId()] = $substitutionform->createView();
		}
		return $subsform;
	}
	public function getTeachersAction($agendas){
		$aTeacher = array();
		foreach($agendas as $oAgenda){
			$oEmployee = $oAgenda->getEmployee();
			if(!$oEmployee) continue;
			if(isset($aTeacher[$oEmployee->getId()])) continue;
			if($oAgenda->getStatus()==1 or $oAgenda->getStatus()==2){
				$aTeacher[$oEmployee->getId()]=$oEmployee->getFirstname()." ".$oEmployee->getName();
			}
		}
		return $this->render('BoAdminBundle:Contracts:getteacher.html.twig', array(
			'teachers'=>join(",",$aTeacher),
		));	
	}
}

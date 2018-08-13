<?php
namespace Bo\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bo\AdminBundle\Entity\Absences;
use Bo\AdminBundle\Form\AbsencesType;
use Bo\AdminBundle\Entity\User;
use Bo\AdminBundle\Entity\TeacherSchedule;
use Bo\AdminBundle\Entity\Agenda;
/**
* Absences controller.
*/
class ToolsController extends CommonController
{
    /**
    * Tools.
    */
    public function indexAction()
    {
        return $this->render('BoAdminBundle:Tools:index.html.twig', array(
		'pm'=>"tools",
		'sm'=>"tools",
        ));
    }
	private function updateGroupTL($contract){
		$group = $contract->getGroup();
		if(!$group) return false;
		$sTlg = $group->getTargetlevel();
		//echo $sTlg."<br>";
		$sTlc = $contract->getTargetlevel();
		//echo $sTlc."<br>";
		if($sTlc!=$sTlg){
			echo $group->getName()."<br>";
			return true;
			//$group->setTargetlevel($sTlc);
			//$this->updateEntity($group);
		}
		return false;
	}
	//update target level for group
	public function updatetlgroupAction(){
		$em = $this->getDoctrine()->getManager();
		$aContract = $em->getRepository('BoAdminBundle:Contracts')->findAll();
		foreach($aContract as $oContract){
			if($oContract->getTypecontract() and $oContract->getTypecontract()->getReference()=="TBS"){
				$bRes = $this->updateGroupTL($oContract);
				if($bRes==true) echo $oContract->getGroup()->getName()." update <br>";
			} 
		}

	}
    	/**
    	* Send bordereau 
    	*/
	public function sendAction(){
		$path = $this->get('app.pdfpath_manager')->getPath();	
		$file = realpath($this->getFilename($path,"12536985278_06032017.pdf"));
		$to = "jnvekounou@yahoo.fr";
		$cc = "jmnvekounou@gmail.com";
		$subject = $this->getParam("send_mail_soumission_subject",19);
		$message = $this->getInfoMail("price_order_mail",7);
		$res = $this->sendMailWith($file,$to,$subject,$message);			
	}
	//update target level for group
	public function removeTbsGroupEmployeeAction(){
		$em = $this->getDoctrine()->getManager();
		$aContract = $em->getRepository('BoAdminBundle:Contracts')->findAll();
		foreach($aContract as $oContract){
			if($oContract->getTypecontract() and $oContract->getTypecontract()->getReference()=="TBS"){
				$oGroup = $oContract->getGroup();
				if($oGroup){
					$aEmployee =$oGroup->getEmployee(); 
					foreach($aEmployee as $oEmployee){
						$oGroup->removeEmployee($oEmployee);
						$bRes=$this->updateEntity($oGroup);
						if($bRes==true) echo $oContract->getGroup()->getName()." update <br>";
					}					
				}
			} 
		}
		exit(0);
	}
	//update target level for group
	public function closecontractAction(){
		$this->updateAllContracts();
		exit(0);
	}
    /**
    * Creates a new Absences entity.
    */
    public function removeofgroupAction(Request $request)
    {
		$idgroup = $request->request->get('idgroup');
		$message = null;			

        if($idgroup!=null) {
			$em = $this->getDoctrine()->getManager();
			$oGroup = $em->getRepository('BoAdminBundle:Group')->find($idgroup);
			$aEmployee =$oGroup->getEmployee(); 
            foreach($aEmployee as $oEmployee){
				$oGroup->removeEmployee($oEmployee);
			}
			$this->updateEntity($oGroup);
			$message = array('type'=>"Info",'texte'=>'The request is executed successfully.');
        }

        return $this->render('BoAdminBundle:Tools:index.html.twig', array(
			'message'=>$message,
			'pm'=>"tools",
			'sm'=>"tools",
        ));
    }
    /**
    * remove schedule.
    */
    public function removescheduleAction(Request $request)
    {
		$idschedule = $request->request->get('idschedule');
		$message = null;			

        if($idschedule!=null) {
			$em = $this->getDoctrine()->getManager();
			$oSchedule = $em->getRepository('BoAdminBundle:TechearSchedule')->find($idschedule);
			$this->removeEntity($oSchedule);
			$message = array('type'=>"Info",'texte'=>'The request is executed successfully.');
        }

        return $this->render('BoAdminBundle:Tools:index.html.twig', array(
			'message'>$message,
			'pm'=>"tools",
			'sm'=>"tools",
        ));
    }
	public function displayscheduleAction(Request $request){
		$idemployee = $request->request->get('idemployee');
		if($idemployee==null) $idemployee = $this->get("session")->get('idemployee');
		$em = $this->getDoctrine()->getManager();
		$rep = $em->getRepository('BoAdminBundle:Agenda');
		$oRepEmp = $em->getRepository('BoAdminBundle:Employee');
		$employee = $oRepEmp->find($idemployee);		
		$aTcs = $this->getScheduleByEmployee($idemployee);
        	return $this->render('BoAdminBundle:Tools:schedule.html.twig', array(
			'schedules'=>$aTcs,
			'employee'=>$employee,
			'deleteform'=>$this->createScheduleDeleteForm($aTcs),
			'pm'=>"tools",
			'sm'=>"tools",
        	));		
	}
	public function displayschedulebisAction(Request $request){
		$idemployee = $request->request->get('idemployee');
		$idcontract = $request->request->get('idcontract');
		if($idemployee==null) $idemployee = $this->get("session")->get('idemployee');
		if($idcontract==null) $idemployee = $this->get("session")->get('idcontract');
		$em = $this->getDoctrine()->getManager();
		$employee = $this->getEmployeeById($idemployee);
		$rep = $em->getRepository('BoAdminBundle:Agenda');		
		$aTcs = $rep->findBy(array('idemployee'=>$idemployee,'idcontracts'=>$idcontract));
		return $this->render('BoAdminBundle:Tools:schedule.html.twig', array(
			'schedules'=>$aTcs,
			'employee'=>$employee,
			'deleteform'=>$this->createScheduleDeleteForm($aTcs),
			'pm'=>"tools",
			'sm'=>"tools",
		));		
	}
	public function displayschedulebyidAction(Request $request){
		$aTcs = $employee = null;
		$idschedule = $request->request->get('idschedule');
		$em = $this->getDoctrine()->getManager();
		$rep = $em->getRepository('BoAdminBundle:Agenda');		
		$oTcs = $rep->find($idschedule);
		if($oTcs and $oTcs->getIdemployee()!=null){
			$aTcs = array($oTcs);
			 $employee = $this->getEmployeeById($oTcs->getIdemployee());
		}
		return $this->render('BoAdminBundle:Tools:schedule.html.twig', array(
			'schedules'=>$aTcs,
			'deleteform'=>$aTcs!=null?$this->createScheduleDeleteForm($aTcs):null,
			'employee'=>$employee,
			'pm'=>"tools",
			'sm'=>"tools",
		));		
	}
	//Show all schedule which the employee is not attached to the contract (for resolve the problème)
	public function showscheduleAction(Request $request){
		$aResult = array();
		$em = $this->getDoctrine()->getManager();
		$oRepSched = $em->getRepository('BoAdminBundle:Agenda');
		$oRepEmp = $em->getRepository('BoAdminBundle:Employee');
		$oRepCont = $em->getRepository('BoAdminBundle:Contracts');	
		$oRepGroup = $em->getRepository('BoAdminBundle:Group');	
		$aEmployee = null;		
		$aTC = $oRepSched->findAll(); 
		foreach($aTC as $oTC){
			$oEmployee = $oTC->getEmployee();
			if($oTC->getContracts()){
				$oContract = $oTC->getContracts();
				if($oContract and ($oContract->getStatus()=="1" or $oContract->getStatus()=="2") and $this->existEntity($oEmployee,$oContract->getEmployee())==false){
					//$aResult[] = $oEmployee->getId()."-".$oContract->getId();
					$aResult[$oTC->getId()] = $oTC;
					$aEmployee[$oTC->getId()] = $oEmployee;	
				}
			}	
		}
        return $this->render('BoAdminBundle:Tools:showschedule.html.twig', array(
			'schedules'=>$aResult,
			'employees'=>$aEmployee,
			'deleteform'=>$this->createScheduleDeleteForm($aResult),
			'pm'=>"tools",
			'sm'=>"tools",
        ));		
	}
	//update amorpm for teacher schedule
	public function updateamorpmAction(){
		set_time_limit(3800);
		$message = "";
		$aResult = array();
		$oRepSched = $this->getRepository('BoAdminBundle:Agenda');		
		$aTC = $oRepSched->findAll(); 
		$i=0;
		foreach($aTC as $oTC){
			if($oTC->getAmorpm()!=null) continue;
			$ham = floatval($this->getRealAmHour($oTC)); 
			$hpm = floatval($this->getRealPmHour($oTC));  
			if($ham>0 and $hpm>0){
				$oTC->setAmorpm("AM & PM");
			}elseif($ham>0){
				$oTC->setAmorpm("AM");
			}elseif($hpm>0){ 
				$oTC->setAmorpm("PM");
			}
			$res = $this->updateEntity($oTC);
			if(isset($res) and $res>0){
				$message=$message.$oTC->getId()." updated, ";
				$i=$i+1;
			}	
		}
		$message = $message.",<br> lines updated";
		return $this->render('BoAdminBundle:Tools:index.html.twig', array(
				'message'>$message,
				'pm'=>"tools",
				'sm'=>"tools",
		));
	}
	//Show all contracts without schedule updated
	public function updateschedule2Action(Request $request){
		$aResult = array();
		$em = $this->getDoctrine()->getManager();
		$oRepSched = $em->getRepository('BoAdminBundle:Agenda');
		$oRepEmp = $em->getRepository('BoAdminBundle:Employee');		
		$aEmployee = $oRepEmp->findAll(); 
		foreach($aEmployee as $oEmployee){
			$aContract = $this->getContractsBy($oEmployee);			
			foreach($aContract as $oContract){
				$aTCs = $oRepSched->findBy(array('idcontracts'=>$oContract->getId(),'idemployee'=>$oEmployee->getId()));
				if(!isset($oTCs[0])) continue;
				$oTCs=$oTCs[0];
				if(isset($aResult[$oContract->getId()])) continue;
				if($this->isGroupContract($oContract)) continue;
				if($oTCs->getIdcontracts()==$oContract->getId()) continue;
				echo $oTCs->getEnddate()->format("d-m-Y")."<br>";
				echo $oContract->getEnddate()->format("d-m-Y")."<br>";
				echo $oContract->getId()."<br><br>";
				if($oTCs->getEnddate()->format("d-m-Y")==$oContract->getEnddate()->format("d-m-Y")) continue;
				//$oTCs->setEnddate($oContract->getEnddate());
				//$this->updateEntity($oTCs);
				$aResult[$oContract->getId()] = $oContract->getId();
			}				
		}
		print_r($aResult);
		exit(0);
		
		return $this->render('BoAdminBundle:Tools:contract.html.twig', array(
				'contracts'=>$aResult,
				'employee'=>$oEmployee,
				'now'=> new \DateTime(date("d-m-Y")),
				'pm'=>"tools",
				'sm'=>"tools",
		));		
	}
	//update missing schedule in contract
	public function missingAction(){
		$aResult = array();
		$em = $this->getDoctrine()->getManager();
		$today = new \DateTime(date("d-m-Y"));
		$aSchedule = array();
		$oSchedRep = $em->getRepository('BoAdminBundle:Agenda');
		$aContract = $em->getRepository('BoAdminBundle:Contracts')->findAll();
		foreach($aContract as $oContract){
			//echo $oContract->getId()."<br>";
			$aEmployee = $oContract->getEmployee();
			foreach($aEmployee as $oEmployee){
				$aSchedule = $oSchedRep->findBy(array('idcontracts'=>$oContract->getId(),'idemployee'=>$oEmployee->getId()));
				if(count($aSchedule)==0){
					echo $oContract->getId()."<br>";						
				}
			}
		}
		exit(0);
	}
	//update target level for group
	public function updatescheduleAction(){
		$aResult = array();
		$em = $this->getDoctrine()->getManager();
		$today = new \DateTime(date("d-m-Y"));
		$aSchedule = array();
		$oSchedRep = $em->getRepository('BoAdminBundle:Agenda');
		$oRevRep = $em->getRepository('BoAdminBundle:Revision');
		$aContract = $em->getRepository('BoAdminBundle:Contracts')->findAll();
		foreach($aContract as $oContract){
			//echo $oContract->getId()."<br>";
			if($oContract->getGroup() and $oContract->getWorkfields() and ($oContract->getWorkfields()->getId()==1 or $oContract->getWorkfields()->getId()==2)) continue;
			if($oContract->getStatus()!=0 and $oContract->getStartdate()<=$today and $today<=$oContract->getEnddate()){
				$aSchedule = $oSchedRep->findBy(array('idcontracts'=>$oContract->getId()));
				$aRevision = $oRevRep->findBy(array('idcontracts'=>$oContract->getId()),array('id' => 'desc'),1,0);
				if(count($aRevision)>0 and $oRevision = $aRevision[0]){
					foreach($aSchedule as $oSchedule){
						if($oContract->getEnddate()!=$oSchedule->getEnddate()){
							$oSchedule->setEnddate($oContract->getEnddate());
							$this->updateEntity($oSchedule);
							$aResult[] = $oContract->getId();
						}
					}						
				}
			}
		}
        return $this->render('BoAdminBundle:Tools:resultupsch.html.twig', array(
			'result'=>$aResult,
			'pm'=>"tools",
			'sm'=>"tools",
        ));
	}
    /**
    * Update the teacher email address
    */
    public function updateteacheremailAction(Request $request)
    {
		$message = null;			

		$em = $this->getDoctrine()->getManager();
		$aEmployee = $em->getRepository('BoAdminBundle:Employee')->findAll();
        foreach($aEmployee as $oEmployee){
			$aEmail = explode(",",$oEmployee->getEmail());
			if(count($aEmail)>1){
				if(isset($aEmail[0]) and $aEmail[0]!=null and strpos($aEmail[0],"@")){
					$oEmployee->setEmail($aEmail[0]);
					unset($aEmail[0]);
					$sEmail = join(",",$aEmail);
					if($sEmail!=null  and strpos($sEmail,"@")) $oEmployee->setEmail1($sEmail);
					$this->updateEntity($oEmployee);
					echo $oEmployee->getEmail()."<br>".$oEmployee->getEmail1()."<br>";
				}
			}
		}
		exit(0);		
		$message = array('type'=>"Info",'texte'=>'The request is executed successfully.');

        return $this->render('BoAdminBundle:Tools:index.html.twig', array(
			'message'>$message,
			'pm'=>"tools",
			'sm'=>"tools",
        ));
    }
    /**
    * Update the login of users
    */
    public function updateloginAction(Request $request)
    {
		$message = null;			

		$em = $this->getDoctrine()->getManager();
		$aUser = $em->getRepository('BoUserBundle:User')->findAll();
        foreach($aUser as $oUser){
			$oUser->setUsername()." --- ".$oUser->getEmail()."<br>";
		}		
		$message = array('type'=>"Info",'texte'=>'The request is executed successfully.');

        return $this->render('BoAdminBundle:Tools:index.html.twig', array(
			'message'>$message,
			'pm'=>"tools",
			'sm'=>"tools",
        ));
    }
    /**
     * Update local .
     */
    public function freeroomAction()
    {
		$this->updateAllLocal();
        return $this->render('BoAdminBundle:Tools:index.html.twig', array(
			'message'>$message,
			'pm'=>"tools",
			'sm'=>"tools",
        ));
    }
    /**
    * Remove employee from contract
    */
    public function removefromcontractAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$idcontract = $request->request->get('idcontract');
		$message = null;			
        if($idcontract!=null) {
			$oRepTSch = $em->getRepository('BoAdminBundle:HTeacherSchedule');
			$oContracts = $em->getRepository('BoAdminBundle:Contracts')->find($idcontract);
			$aEmployee = $oContracts->getEmployee();
			foreach($aEmployee as $oEmployee){
				$oContracts->removeEmployee($oEmployee);
				$this->updateEntity($oContracts);
				$aTeacherSch = $oRepTSch->findBy(array('idcontracts'=>$idcontract,'idemployee'=>$oEmployee->getId()));
				if(isset($aTeacherSch[0])) $this->removeEntity($aTeacherSch[0]);
			}
			$message = array('type'=>"Info",'texte'=>'The request is executed successfully.');
        }

        return $this->render('BoAdminBundle:Tools:index.html.twig', array(
			'message'>$message,
			'pm'=>"tools",
			'sm'=>"tools",
        ));
    }
    /**
    * Remove local from contract
    */
    public function remlocalfromcontractAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$oRepLocal = $em->getRepository('BoAdminBundle:Local');
		$idcontract = $request->request->get('idcontract');
		$idlocal = $request->request->get('idlocal');
		$message = null;			
        if($idcontract!=null) {
			$oContracts = $em->getRepository('BoAdminBundle:Contracts')->find($idcontract);
			$oLocal = $oRepLocal->find($idlocal);
			$aLocals = $oContracts->getLocal();
			foreach($aLocals as $local){
				if($local==$oLocal){
					$oContracts->removeLocal($oLocal);	
					$this->updateEntity($oContracts);
					$this->updateLocalBy($oLocal);						
				} 
			}
        }
		$message = array('type'=>"Info",'texte'=>'The request is executed successfully.');
        return $this->render('BoAdminBundle:Tools:index.html.twig', array(
			'message'>$message,
			'pm'=>"tools",
			'sm'=>"tools",
        ));
    }
    /**
    * add local to group
    */
    public function addlocaltogroupAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$oRepLocal = $em->getRepository('BoAdminBundle:Local');
		$idgroup = $request->request->get('idgroup');
		$idlocal = $request->request->get('idlocal');
		$message = null;			
        if($idgroup!=null) {
			$oGroup = $em->getRepository('BoAdminBundle:Group')->find($idgroup);
			$oLocal = $oRepLocal->find($idlocal);
			if($this->existEntity($oLocal,$oGroup->getLocal())==false){
				$oGroup->addLocal($oLocal);
				$this->updateEntity($oGroup);
				$oLocal->setStatus(1);
				$this->updateEntity($oLocal);
			}
        }
		$message = array('type'=>"Info",'texte'=>'The request is executed successfully.');
        return $this->render('BoAdminBundle:Tools:index.html.twig', array(
			'message'>$message,
			'pm'=>"tools",
			'sm'=>"tools",
        ));
    }
    /**
    * add local to contract
    */
    public function addlocaltocontractAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$oRepLocal = $em->getRepository('BoAdminBundle:Local');
		$idcontract = $request->request->get('idcontract');
		$idlocal = $request->request->get('idlocal');
		$message = null;			
        if($idcontract!=null) {
			$oContract = $em->getRepository('BoAdminBundle:Contracts')->find($idcontract);
			$oLocal = $oRepLocal->find($idlocal);
			if($this->existEntity($oLocal,$oContract->getLocal())==false){
				$oContract->addLocal($oLocal);
				$this->updateEntity($oContract);
				$oLocal->setStatus(1);
				$this->updateEntity($oLocal);
			}
        }
		$message = array('type'=>"Info",'texte'=>'The request is executed successfully.');
        return $this->render('BoAdminBundle:Tools:index.html.twig', array(
			'message'>$message,
			'pm'=>"tools",
			'sm'=>"tools",
        ));
    }
    /**
    * Remove local from contract
    */
    public function releaseroomAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$oRepLocal = $em->getRepository('BoAdminBundle:Local');
		$idlocal = $request->request->get('idlocal');
		$oLocal = $oRepLocal->find($idlocal);
		$oLocal->setStatus(0);
		$this->updateEntity($oLocal);
		$message = array('type'=>"Info",'texte'=>'The request is executed successfully.');
        return $this->render('BoAdminBundle:Tools:index.html.twig', array(
			'message'>$message,
			'pm'=>"tools",
			'sm'=>"tools",
        ));
    }
    /**
    * Remove local from contract
    */
    public function remlocalfromgroupAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$oRepLocal = $em->getRepository('BoAdminBundle:Local');
		$idgroup = $request->request->get('idgroup');
		$idlocal = $request->request->get('idlocal');
		$message = null;			
        if($idgroup!=null){
			$oGroup = $em->getRepository('BoAdminBundle:Group')->find($idgroup);
			$oLocal = $oRepLocal->find($idlocal);
			$aLocals = $oGroup->getLocal();
			foreach($aLocals as $local){
				$oGroup->removeLocal($local);
				if($local==$oLocal){
					$this->updateEntity($oGroup);
					$this->updateLocalBy($oEntity);					
				}
			}
        }
		$message = array('type'=>"Info",'texte'=>'The request is executed successfully.');
        return $this->render('BoAdminBundle:Tools:index.html.twig', array(
			'message'>$message,
			'pm'=>"tools",
			'sm'=>"tools",
        ));
    }
    /**
     * Creates a new Absences entity.
     *
     */
    public function teacherofcontractAction(Request $request)
    {
		$idcontract = $request->request->get('idcontract');
		$message = null;			

        if($idcontract!=null) {
			$em = $this->getDoctrine()->getManager();
			$oContract = $em->getRepository('BoAdminBundle:Contracts')->find($idcontract);
			$aEmployee = $oContract->getEmployee(); 
            foreach($aEmployee as $oEmployee){
				$oContract->removeEmployee($oEmployee);
			}
			$this->updateEntity($oContract);
			$message = array('type'=>"Info",'texte'=>'The request is executed successfully.');
        }

        return $this->render('BoAdminBundle:Tools:index.html.twig', array(
			'message'>$message,
			'pm'=>"tools",
			'sm'=>"tools",
        ));
    }
    /**
    * Update all contract of group.
    */
    public function updatecontractgroupAction()
    {
		set_time_limit(7600);
		$em = $this->getDoctrine()->getManager();
		$aContracts = $em->getRepository('BoAdminBundle:Contracts')->findAll();
		
		foreach($aContracts as $oContract){
			if($oContract->getWorkfields() and ($oContract->getWorkfields()->getId()==1 or $oContract->getWorkfields()->getId()==2)){
				if($oContract->getGroup()){
					if(count($oContract->getEmployee())>0){
						foreach($oContract->getEmployee() as $oEmployee){
							$oContract->removeEmployee($oEmployee);
						}	
						$this->updateEntity($oContract);
						echo $oContract->getGroup()->getName()."<br>";
					}				
				}
			}						
		}
		exit(0);

        return $this->render('BoAdminBundle:Tools:index.html.twig', array(
			'message'>$message,
			'pm'=>"tools",
			'sm'=>"tools",
        ));
    }
    /**
    * Update all contract of group.
    */
    public function updateallcontractAction()
    {
		set_time_limit(3800);
		$em = $this->getDoctrine()->getManager();
		$aContracts = $em->getRepository('BoAdminBundle:Contracts')->findAll();
		$i=0;
		$time1 = time();
		
		foreach($aContracts as $oContract){
			if($this->isContractGroup($oContract)==false) continue;
			$oContract = $this->setIsGroup($oContract);
			$res = $this->updateEntity($oContract);
			if($this->isGroupContract($oContract)==true){
				$i++;
				$aExecuted[$oContract->getId()] = $oContract->getId();
			}
		}
		$time2 = time();	
		$message = array('type'=>"Info",'texte'=>$i.'contracts have been updated in '.$time2-$time1." secondes: ".join(",",$aExecuted));

        return $this->render('BoAdminBundle:Tools:index.html.twig', array(
			'message'>$message,
			'pm'=>"tools",
			'sm'=>"tools",
        ));
    }
    /**
    * Update advisor's charge.
    */
    public function updateadvisorAction()
    {
		$em = $this->getDoctrine()->getManager();
		$aAdvisors = $em->getRepository('BoAdminBundle:Advisors')->findAll();
		foreach($aAdvisors as $oAdvisor){
			$oEmployee = $oAdvisor->getAdvisor();
			if($oEmployee){
				$oAdvisor->setFirstname($oEmployee->getFirstname());
				$oAdvisor->setName($oEmployee->getName());
				$this->updateEntity($oAdvisor);
			} 
		}
		//$this->updateAllAdvisorCharge();
		exit(0);
        return $this->render('BoAdminBundle:Tools:index.html.twig', array(
			'message'>$message,
			'pm'=>"tools",
			'sm'=>"tools",
        ));
    }
    /**
    * Update all group in adding contract type to entity.
    */
    public function addtypetogroupAction()
    {
		$em = $this->getDoctrine()->getManager();
		$aGroups = $em->getRepository('BoAdminBundle:Group')->findAll();
		
		foreach($aGroups as $oGroup){
			$res = $this->updateContractTypeForGroup($oGroup);
			if($res>0) echo $oGroup->getName()." updated<br>";
		}
		exit(0);

        return $this->render('BoAdminBundle:Tools:index.html.twig', array(
			'message'>$message,
			'pm'=>"tools",
			'sm'=>"tools",
        ));
    }
    /**
    * Update all group in adding contract type to entity.
    */
    public function statusofgroupAction()
    {
		$em = $this->getDoctrine()->getManager();
		$aGroups = $em->getRepository('BoAdminBundle:Group')->findAll();
		
		foreach($aGroups as $oGroup){
			$res = $this->updateStatusForGroup($oGroup);
			if($res>0) echo $oGroup->getName()." updated<br>";					
		}
		exit(0);
    }
    /**
     * Remove a teacher from contract
     *
     */
    public function teacherofcontract2Action(Request $request)
    {
		$idteacher = $request->request->get('idemployee');
		$idcontract = $request->request->get('idcontract');
		$message = null;			

        if($idteacher!=null and $idcontract!=null) {
			$em = $this->getDoctrine()->getManager();
			$oContract = $em->getRepository('BoAdminBundle:Contracts')->find($idcontract);
			$oEmployee = $em->getRepository('BoAdminBundle:Employee')->find($idteacher);
			$oContract->removeEmployee($oEmployee);
			$this->updateEntity($oContract);
			$message = array('type'=>"Info",'texte'=>'The request is executed successfully.');
        }

        return $this->render('BoAdminBundle:Tools:index.html.twig', array(
			'message'>$message,
			'pm'=>"tools",
			'sm'=>"tools",
        ));
    }
    /**
     * Creates coordinator user.
     *
     */
    public function updateUserAction()
    {
		set_time_limit(3800);
		$em = $this->getDoctrine()->getManager();
		$aCoordinators = $em->getRepository('BoAdminBundle:Coordinator')->findAll();
		$aResult = array();
		$emails = "";
		$time1 = time();
		$i=0;
		foreach($aCoordinators as $oCoordinator){
			$oCoordinator->setPwd($this->getPassword());
			$this->updateEntity($oCoordinator);
			$aExistEntity = $em->getRepository('BoUserBundle:User')->findByEmail($oCoordinator->getEmail());
			if(!isset($aExistEntity[0])) $this->createUser(3,$oCoordinator);
			$i=$i+1;
		}
		$time2 = time();
		$message = array('type'=>"Info",'texte'=>$emails." créé ".$i.' requests executed in '.$time2-$time1." secondes");
        return $this->render('BoAdminBundle:Tools:index.html.twig', array(
			'message'>$message,
			'pm'=>"tools",
			'sm'=>"tools",
        ));
    }
	public function updatetrainingAction(){
		set_time_limit(3800);
        $em = $this->getDoctrine()->getManager();
		$oTrainRep=$em->getRepository('BoAdminBundle:Training');
		$aTraining = $oTrainRep->findAll();
		$time1 = time();
		$i=0;
		foreach($aTraining as $oTraining){
			$oTraining->setHourperday($this->getRealTime($oTraining->getHourperday()));
			$res = $this->updateEntity($oTraining);
			if($res>0) $i=$i+1;
		}
		$time2 = time();	
		$message = array('type'=>"Info",'texte'=>$i.' requests executed in '.$time2-$time1." secondes");
        return $this->render('BoAdminBundle:Tools:index.html.twig', array(
			'message'>$message,
			'pm'=>"admin",
			'sm'=>"tools",
        ));		
	}
	public function updatetraining2Action(){
		set_time_limit(3800);
        $em = $this->getDoctrine()->getManager();
		$oTrainRep=$em->getRepository('BoAdminBundle:Training');
		$aTraining = $oTrainRep->findAll();
		$time1 = time();
		$i=1;
		$executed = array();
		foreach($aTraining as $oTraining){
			$oContract = $oTraining->getContracts();
			if($oContract->getWorkfields() and ($oContract->getWorkfields()->getId()==1 or $oContract->getWorkfields()->getId()==2)){
				if($oContract->getGroup() and $oGroup=$oContract->getGroup() and !isset($executed[$oGroup->getId()])){
					$executed[$oGroup->getId()] = $oContract->getId();
					continue;					
				}
				$this->removeEntity($oTraining);					
			}
		}
		$time2 = time();	
		$message = array('type'=>"Info",'texte'=>join(",",$executed).' have been updated in '.$time2-$time1." secondes");
        return $this->render('BoAdminBundle:Tools:index.html.twig', array(
			'message'>$message,
			'pm'=>"admin",
			'sm'=>"tools",
        ));		
	}
	public function updatelocalstatusAction(){
		set_time_limit(3800);
        $em = $this->getDoctrine()->getManager();
		$oContractEntity=$em->getRepository('BoAdminBundle:Contracts');
		$aContracts = $oContractEntity->findAll();
		$time1 = time();
		$i=0;
		foreach($aContracts as $oContract){
			$aLocal = $oContract->getLocal();
			if(count($aLocal)==1){
				$oLocal = $this->updateStatus($oContract,$aLocal[0]);
				echo $aLocal[0]->getReference()."-".$oLocal->getStatus()."<br>";
			}elseif(count($aLocal)>1){
				$sLocal = "Many rooms found : ";
				foreach($aLocal as $oLocal){
					$oLocal = $this->updateStatus($oContract,$aLocal[0]);
					$sLocal = $sLocal.$oLocal->getReference()."-".$oLocal->getStatus().",";			
				}
				echo $sLocal."<br>";					
			}
		}
		$oGroupEntity=$em->getRepository('BoAdminBundle:Group');
		$aGroups = $oGroupEntity->findAll();
		$time1 = time();
		$i=0;
		foreach($aGroups as $oGroup){
			$aLocal = $oGroup->getLocal();
			if(count($aLocal)==1){
				$oLocal = $this->updateStatus($oGroup,$aLocal[0]);
				//$this->updateEntity($oLocal);
				echo $aLocal[0]->getReference()."-".$oLocal->getStatus()."<br>";
			}elseif(count($aLocal)>1){
				$sLocal = "Many rooms found : ";
				foreach($aLocal as $oLocal){
					$oLocal = $this->updateStatus($oGroup,$aLocal[0]);
					//$this->updateEntity($oLocal);
					$sLocal = $sLocal.$oLocal->getReference()."-".$oLocal->getStatus().",";			
				}
				echo $sLocal."<br>";					
			}
		}
		$time2 = time();
		exit(0);
		$message = array('type'=>"Info",'texte'=>$i.' requests executed in '.$time2-$time1." secondes");
        return $this->render('BoAdminBundle:Tools:index.html.twig', array(
			'message'>$message,
			'pm'=>"tools",
			'sm'=>"tools",
        ));				
	}
	public function localsuiteAction(){
		set_time_limit(3800);
        $em = $this->getDoctrine()->getManager();
		$oLocal=$em->getRepository('BoAdminBundle:Local');
		$aLocal = $oLocal->findAll();
		$time1 = time();
		$i=0;
		foreach($aLocal as $oLocal){
			$sReference = $oLocal->getReference();
			$suite = $sReference[0];
			$oLocal->setSuite($suite);
			$this->updateEntity($oLocal);
			echo $oLocal->getReference()." updated<br>";
		}
		exit(0);
		$time2 = time();
		$message = array('type'=>"Info",'texte'=>$i.' requests executed in '.$time2-$time1." secondes");
        return $this->render('BoAdminBundle:Tools:index.html.twig', array(
			'message'>$message,
			'pm'=>"tools",
			'sm'=>"tools",
        ));				
	}
	public function disablesuiteAction(){
		set_time_limit(3800);
        $em = $this->getDoctrine()->getManager();
		$oLocal=$em->getRepository('BoAdminBundle:Local');
		$aLocal = $oLocal->findBy(array('suite'=>9));
		$time1 = time();
		$i=0;
		foreach($aLocal as $oLocal){
			$oLocal->setStatus(3);
			$this->updateEntity($oLocal);
			echo $oLocal->getReference()." updated<br>";
		}
		exit(0);
		$time2 = time();
		$message = array('type'=>"Info",'texte'=>$i.' requests executed in '.$time2-$time1." secondes");
        return $this->render('BoAdminBundle:Tools:index.html.twig', array(
			'message'>$message,
			'pm'=>"tools",
			'sm'=>"tools",
        ));				
	}
	public function updatecontractAction(){
		set_time_limit(3800);
        $em = $this->getDoctrine()->getManager();
		$oContractEntity=$em->getRepository('BoAdminBundle:Contracts');
		$aContracts = $oContractEntity->findAll();
		$time1 = time();
		$i=0;
		foreach($aContracts as $oContract){
			if($oContract->getGroup() and count($this->getContractByGroup($oContract->getGroup()))>1){
				$group = $oContract->getGroup();
				$aTraining = $em->getRepository('BoAdminBundle:Training')->findByIdgroup($group->getId());
				if(isset($aTraining[0]) and $group->getTraining() and !$this->existEntity($aTraining[0],$group->getTraining())){
					$group->addTraining($aTraining[0]);
					$res=$this->updateEntity($group);
					if($res>0) $i=$i+1;
				} 				
			}else{
				$aTraining = $em->getRepository('BoAdminBundle:Training')->findByContracts($oContract);
				if(isset($aTraining[0]) and $oContract->getTraining() and !$this->existEntity($aTraining[0],$oContract->getTraining())){
					$oContract->addTraining($aTraining[0]);
					$res=$this->updateEntity($oContract);
					if($res>0) $i=$i+1;
				}				
			}			
		}
		$time2 = time();
		$message = array('type'=>"Info",'texte'=>$i.' requests executed in '.$time2-$time1." secondes");
        return $this->render('BoAdminBundle:Tools:index.html.twig', array(
			'message'>$message,
			'pm'=>"tools",
			'sm'=>"tools",
        ));				
	}
	public function mastercontractAction(){
		set_time_limit(3800);
        $em = $this->getDoctrine()->getManager();
		$oContractEntity=$em->getRepository('BoAdminBundle:Contracts');
		$aContracts = $oContractEntity->findAll();
		$time1 = time();
		$i=0;
		foreach($aContracts as $contract){
			if($contract->getWorkfields() and $contract->getWorkfields()->getId()==1){
				$aStep = explode('-',$contract->getSession());
				$aStep = explode('-',$contract->getStep());
				if(count($aStep)==0) $aStep = explode('&',$contract->getStep());
				if(count($aStep)==0) $aStep = explode('-',$contract->getSession());
				if(count($aStep)>1){
					echo $contract->getId()."<br>";
					$contract->setStatus(4);
					$this->updateEntity($contract);
				} 
			}			
		}
		exit(0);
		$time2 = time();
		$message = array('type'=>"Info",'texte'=>$i.' requests executed in '.$time2-$time1." secondes");
        return $this->render('BoAdminBundle:Tools:index.html.twig', array(
			'message'>$message,
			'pm'=>"admin",
			'sm'=>"tools",
        ));				
	}
	public function updatecontract2Action(){
		set_time_limit(3800);
        $em = $this->getDoctrine()->getManager();
		$oContractEntity=$em->getRepository('BoAdminBundle:Contracts');
		$aContracts = $oContractEntity->findAll();
		//echo count($aContracts);
		//exit(0);
		$time1 = time();
		$i=0;
		foreach($aContracts as $oContract){
			$aStep = explode("-",$oContract->getStep());
			/*
			if(count($aStep)>1 and $oContract->getStatus()!=4){
				$oContract->setStatus(4);
				$this->updateEntity($oContract);
				if($oContract->getStatus()==4) echo $oContract->getId()." updated <br>";
			}
			*/
			if($oContract and $oContract->getWorkfields() and $oContract->getWorkfields()==null){
				echo "ici";
				continue;
			}
			
			/*if($oContract and $oContract->getWorkfields() and $oContract->getWorkfields()!==null and $oContract->getWorkfields()->getId()==1 or $oContract->getWorkfields()->getId()==2){
				$aEmployee = $oContract->getEmployee();
				$group = $oContract->getGroup();
				if($group){
					foreach($aEmployee as $oEmployee){
						if($this->existEntity($oEmployee,$group->getEmployee()==false)){
							echo $group->getName()."<br>";
						}
					}					
				}
			}
			*/			
		}
		exit(0);
		$time2 = time();
		$message = array('type'=>"Info",'texte'=>$i.' requests executed in '.$time2-$time1." secondes");
        return $this->render('BoAdminBundle:Tools:index.html.twig', array(
			'message'>$message,
			'pm'=>"tools",
			'sm'=>"tools",
        ));				
	}
	public function connectedAction(){
		if($this->getConnectedEmployee()){
			$oEmployee = $this->getConnectedEmployee();
			return $this->json(array('profil' => 'employee','status'=>200,'fullname'=>$oEmployee->getFirstname()." ".$oEmployee->getName()));
		}
		if($this->getConnectedStudent()){
			$oStudent = $this->getConnectedStudent();
			return $this->json(array('profil' => 'employee','status'=>200,'fullname'=>$oStudent->getFirstname()." ".$oStudent->getName()));
		}
		return $this->json(array('status'=>500));		
	}
	//Update type contract for group
	public function updatetcgroupAction(){
		$em = $this->getDoctrine()->getManager();
		$oContractEntity=$em->getRepository('BoAdminBundle:Contracts');
		$aContracts = $oContractEntity->findAll();
		foreach($aContracts as $oContract){
			$oTypeContract = $oContract->getTypecontract();
			$group = $oContract->getGroup();
			if($group and $oTypeContract and $group->getTypecontract()==null){
				$group->setTypecontract($oTypeContract);
				$this->updateEntity($group);
				echo $group->getName()." updated<br>";
			}
		}
		exit(0);
	}

    private function createScheduleDeleteForm($aSchedule)
    {
		$aDeleteform = array();
		foreach($aSchedule as $oSchedule){
			$form = $this->createFormBuilder()
            ->setAction($this->generateUrl('tools_schedule_delete', array('id' => $oSchedule->getId())))
            ->setMethod('DELETE')
            ->getForm()
			;
			$aDeleteform[$oSchedule->getId()] = $form->createView();
		}
		return $aDeleteform;
    }
    /**
    * Deletes a Agenda entity.
    */
    public function deletescheduleAction(Request $request, Agenda $agenda)
    {
	$oEmployee = $agenda->getEmployee();
	$this->get("session")->set('idemployee',$oEmployee->getId());
        $form = $this->createDeleteForm($agenda);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$em->remove($agenda);
			$em->flush();				
        }
        return $this->redirectToRoute('tools_display_schedule');	
    }
    /**
     * Creates a form to delete a Agenda entity.
     *
     * @param Agenda $agenda The Agenda entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Agenda $agenda)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tools_schedule_delete', array('id' => $agenda->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
	public function generateagendaAction(){
		$message="";
		$i=0;
		set_time_limit(7600);
		$oContract=$oGroup=$oStudent=null; 
		$aTS = $this->getRepository('BoAdminBundle:Agenda')->findAll();
		foreach($aTS as $oTS){
			$oContract = $oTS->getIdcontracts()>0?$this->getRepository('BoAdminBundle:Contracts')->find($oTS->getIdcontracts()):null;
			$oGroup = $oTS->getIdgroup()>0?$this->getRepository('BoAdminBundle:Group')->find($oTS->getIdgroup()):null;
			$oEmployee = $oTS->getIdemployee()?$this->getRepository('BoAdminBundle:Employee')->find($oTS->getIdemployee()):null;
			$oAgenda = new Agenda();
			if($oContract){
				$aStudents = $oContract->getStudents();
				$oStudent = count($aStudents)==1?$aStudents[0]:null;
			}
			$oAgenda->setContracts($oContract);
			$oAgenda->setGroup($oGroup);
			$oAgenda->setStudents($oStudent);	
			$oAgenda->setEmployee($oEmployee);			
			$oAgenda->setAmorpm($oTS->getAmorpm());
			$oAgenda->setHourperday($oTS->getHourperday());
			$oAgenda->setHourperweek($oTS->getHourperweek());
			$oAgenda->setMonday($oTS->getMonday());
			$oAgenda->setTuesday($oTS->getTuesday());
			$oAgenda->setWednesday($oTS->getWednesday());
			$oAgenda->setThursday($oTS->getThursday());
			$oAgenda->setFriday($oTS->getFriday());
			if($oTS->getStartam()==$oTS->getEndam() and $oTS->getEndam()!=$this->getTime()){
				$oAgenda=$this->setNullAm($oAgenda);
			}else{
				$oAgenda->setStartam($oTS->getStartam());
				$oAgenda->setEndam($oTS->getEndam());
			}
			if($oTS->getStartpm()==$oTS->getEndpm() and $oTS->getEndpm()!=$this->getTime()){
				$oAgenda=$this->setNullPm($oAgenda);
			}else{
				$oAgenda->setStartpm($oTS->getStartpm());
				$oAgenda->setEndpm($oTS->getEndpm());
			}
			$oAgenda->setStartdate($oTS->getStartdate());
			$oAgenda->setEnddate($oTS->getEnddate());
			$oAgenda->setCreationdate($oTS->getCreationdate());
			$oAgenda->setPriority($oTS->getPriority());
			$oAgenda = $this->setAgendaStatus($oAgenda);
			$this->updateEntity($oAgenda);
			$message=$message.$oTS->getId()." updated, ";
			$i=$i+1;
		}
		$message = $message."<br> lines updated";
		return $this->render('BoAdminBundle:Tools:index.html.twig', array(
				'message'>$message,
				'pm'=>"tools",
				'sm'=>"tools",
		));

	}
	public function checkbisAction(){
		set_time_limit(7600);
		$i=0;
		$aTS = $this->getRepository('BoAdminBundle:Agenda')->findAll();
		foreach($aTS as $oTS){
			$oContract = $oTS->getIdcontracts()>0?$this->getRepository('BoAdminBundle:Contracts')->find($oTS->getIdcontracts()):null;
			$oGroup = $oTS->getIdgroup()>0?$this->getRepository('BoAdminBundle:Group')->find($oTS->getIdgroup()):null;
			$oEmployee = $oTS->getIdemployee()?$this->getRepository('BoAdminBundle:Employee')->find($oTS->getIdemployee()):null;				
			if($oContract and $this->existEntity($oEmployee,$oContract->getEmployee())==false){
				$this->removeEntity($oTS);
				$i=$i+1;	
			}
			if($oGroup and $this->existEntity($oEmployee,$oGroup->getEmployee())==false){
				$this->removeEntity($oTS);	
				$i=$i+1;	
			}
		}
		$message = array('type'=>"Info",'texte'=>$i."<br> lines updated");
		return $this->render('BoAdminBundle:Tools:index.html.twig', array(
				'message'=>$message,
				'pm'=>"tools",
				'sm'=>"tools",
		));
	} 
	public function checkAction(){
		$i=0;
		$aTS = $this->getRepository('BoAdminBundle:Agenda')->findAll();
		foreach($aTS as $oTS){
			$oContract = $this->getRepository('BoAdminBundle:Contracts')->find($oTS->getIdcontracts());				
			if(is_object($oTS->getStartdate()) and is_object($oTS->getEnddate()) and $oTS->getStartdate()!=null and $oTS->getEnddate()!=null) continue;
			if($oTS->getStartdate()==null or $oTS->getStartdate()->format("Y-m-d")=="-0001-11-30"){
				$oTS->setStartdate($oContract->getStartDate());
				$this->updateEntity($oTS);
				$i=$i+1;
			}
			if($oTS->getEnddate()==null or $oTS->getEnddate()->format("Y-m-d")=="-0001-11-30"){			
				$oTS->setEnddate($oContract->getEndDate());
				$this->updateEntity($oTS);
				$i=$i+1;
			} 
		}
		$message = "<br> lines updated";
		return $this->render('BoAdminBundle:Tools:index.html.twig', array(
				'message'>$message,
				'pm'=>"tools",
				'sm'=>"tools",
		));
	} 
	    public function updateagendaAction(){
			set_time_limit(7600);
			$message="";
			$i=0;
			$aAgenda = $this->getRepository('BoAdminBundle:Agenda')->findAll();
			foreach($aAgenda as $oAgenda){
				$statusbefore = $oAgenda->getStatus();
				$this->updateAgenda($oAgenda);
				if($statusbefore!=$oAgenda->getStatus()) $message=$message.$oAgenda->getId()." updated, ";
				$i=$i+1;
			}
			$message = $message."<br> lines updated";
			return $this->render('BoAdminBundle:Tools:index.html.twig', array(
					'message'>$message,
					'pm'=>"tools",
					'sm'=>"tools",
			));
	    }
	    public function updateabsenceAction(){
			set_time_limit(7600);
			$aAbsences = $this->getRepository('BoAdminBundle:Absences')->findAll();
			foreach($aAbsences as $oAbsence){
				if($oAbsence->getDayns()==null or $oAbsence->getDayns()==0) continue;
				if($oAbsence->getStudents()==null) continue;
				if($oAbsence->getNspm()!=null or $oAbsence->getNsam()!=null) continue;
				$oStudent = $oAbsence->getStudents();
				if($oAbsence->getAmorpm()=="ALL" and $oAbsence->getDayns()>0){
					$oAbsence->setNsam(true); $oAbsence->setNspm(true);
				}elseif($oAbsence->getAmorpm()=="AM" and $oAbsence->getDayns()>0){
					$oAbsence->setNsam(true);
				}elseif($oAbsence->getAmorpm()=="PM" and $oAbsence->getDayns()>0){
					$oAbsence->setNspm(true);
				}
				$this->updateEntity($oAbsence);	
				echo "Student : ".$oStudent->getName()." - Abs id:".$oAbsence->getId()." updated<br>";	
			}
			exit(0);
	    }
	public function testAction(){
		$oDate = new \DateTime("25-06-2018");
		$Holiday = $this->getHoliday($oDate);
		$idemployee = 285;
		$idcontract = 1896;
		$oContrat = $this->getRepository('BoAdminBundle:Contracts')->find($idcontract);
		$oEmployee = $this->getRepository('BoAdminBundle:Employee')->find($idemployee);
		$aTS = $this->getRepository('BoAdminBundle:Agenda')->findBy(array('contracts'=>$oContrat,'employee'=>$oEmployee));
		echo count($aTS)."<br>";
		foreach($aTS as $oSchedule){
			echo intval($this->isHolidaysBy($oDate,$oSchedule))."<br>";
		}
exit(0);
		echo $Holiday."<br>";
		echo intval($this->isHolidaysBy($oDate,$oSchedule));
		exit(0);
		$res = $this->sendmail('jmnvekounou@gmail.com',"test","test");
		echo $res; 
		exit(0);
		set_time_limit(7600);
		foreach($this->getStrArray(10) as $number){
			echo $number." ";
		}
		exit(0);
	}
	public function findschAction(){
		set_time_limit(7600);
		$idcontract=1260;
		$aTS = $this->getRepository('BoAdminBundle:Agenda')->findBy(array('idcontracts'=>$idcontract));
		foreach($aTS as $oTS){
			$oContract = $this->getRepository('BoAdminBundle:Contracts')->find($oTS->getIdcontracts());
			$oGroup = $oTS->getIdgroup()>0?$this->getRepository('BoAdminBundle:Group')->find($oTS->getIdgroup()):null;
			$oEmployee = $this->getRepository('BoAdminBundle:Employee')->find($oTS->getIdemployee());
			if($oContract and $this->existEntity($oEmployee,$oContract->getEmployee())==false){
				echo "Contrat:".$oContract->getId()."<br>";
				echo "Schedule:".$oTS->getId()."<br><br>";
			}			
		}
		echo count($aTS);
		exit(0);
	} 
	/**
	* Lists all actif Employee
	*/
	public function employeeloginAction()
	{	
		$oRepEmp = $this->getRepository('BoAdminBundle:Employee');
		$employees = $oRepEmp->findActive();
		foreach($employees as $employee){
			$oUser = $this->getUserByEmployee($employee);
			echo $this->getFullNameOf($employee)."<br>";
			echo $oUser->getUsername()."<br>";
			echo $employee->getPwd()."<br><br><br>";
		}
		exit(0);
	 } 
	/**
	* Lists all actif Employee
	*/
	public function addAgendaAction()
	{
		$i=0;	
		$oRepEmp = $this->getRepository('BoAdminBundle:Substitution');
		$aSubstitution = $oRepEmp->findAll();
		foreach($aSubstitution as $oSubstitution){
			echo "Id Holder:".$oSubstitution->getIdholder()."<br>";
			echo "Id Contract:".$oSubstitution->getIdcontract()."<br>";
			echo "Id Group:".$oSubstitution->getIdgroup()."<br>";
			echo "Startdate:".$oSubstitution->getStartdate()->format("d-m-Y")."<br>";
			$oHolderSchedule = $this->getHolderAgenda($oSubstitution,$oSubstitution->getStartdate());

			if($oHolderSchedule!=null){
				echo "Id employee:".$oHolderSchedule->getEmployee()->getId()."<br>";
				//$oSubstitution->setAgenda($oHolderSchedule);
				//$this->updateEntity($oSubstitution);
				//echo $oHolderSchedule->getId()." updated <br>";
				$i=$i+1;
			}
		}
	 } 
	public function test2Action(){
		set_time_limit(7600);
		$idemployee = 222;
		$idagenda = 1902;
		$oDate = new \DateTime("2017-11-16");
		$option=1;
		$oEmployee = $this->getRepository('BoAdminBundle:Employee')->find($idemployee);
		//$oSchedule = $this->getRepository('BoAdminBundle:Agenda')->find($idagenda);
		$aSchedule = $this->getDaySchedule($oEmployee,$oDate,$option);
		exit(0);
		$this->getScheduleByKey($aSchedule,$oDate,$option);
		/*
		echo count($aSchedule)."<br>";
		foreach($aSchedule as $oSchedule){
			echo $oSchedule->getId()."<br>";

		}
		*/
		exit(0);
	}
	public function genagendaAction(){
		$idemployee=203;
		$oEmployee = $this->getRepository('BoAdminBundle:Employee')->find($idemployee);
		//$aDates = array(new \DateTime("27-12-2017"),new \DateTime("28-12-2017"),new \DateTime("29-12-2017"));
		$aDates = array(new \DateTime("11-01-2018"));
		$aAM=$this->getDayEvent($oEmployee,$aDates,1);
		print_r($aAM);
		exit(0);
		//$aPM=$this->getDayEvent($oEmployee,$aDates,2);
		exit(0);
	}
	public function gethourAction(){
		$idemployee=260;
		$oEmployee = $this->getRepository('BoAdminBundle:Employee')->find($idemployee);
		$oDate = new \DateTime("12-12-2017");
		$hour=$this->getHourByOption($oEmployee,$oDate,3);
		echo $hour;
		exit(0);
	}
    /**
    * show Employee schedule
    */
    public function generateEventAction()
    {
	$idemployee=164;
	$oEmployee = $this->getRepository('BoAdminBundle:Employee')->find($idemployee);
	echo $oEmployee->getName();
exit(0);
	//$aRes = $this->getEmployeeScheduled($oEmployee,new \DateTime("12-06-2018"),2);
	//echo count($aRes)."<br>";
	//print_r($aRes);
	//exit(0);
	$aCurrentWeek = $this->getWeekSheetDays($this->getToday());
	$aPrevWeek = $this->getPreviousWeek($aCurrentWeek);
	$aNextWeek = $this->getNextWeek($aCurrentWeek);
	//A effacer apres
	$aCurrentWeek = array(new \DateTime("24-06-2018"));
	$aEvents = $this->generateEvents($oEmployee,$aCurrentWeek);
	//$aEvents = $this->getDayEvent($oEmployee,$aCurrentWeek,2);
	//09-11-2017
	print_r($aEvents);
	exit(0);
    }
	public function disableuserAction(){
		$aEmployee = $this->getRepository('BoAdminBundle:Employee')->findBy(array('active'=>0));
		foreach($aEmployee as $oEmployee){
			//echo $oEmployee->getFirstname()." ".$oEmployee->getName()."<br>";
			$aUser = $this->getRepository('BoUserBundle:User')->findBy(array('employee'=>$oEmployee));
			if(count($aUser)>0){
				$oUser = $aUser[0]; 
				if($oUser->isEnabled()){
					echo $oEmployee->getFirstname()." ".$oEmployee->getName()."<br>";
					echo intval($oEmployee->getActive())."<br>";
					echo intval($oUser->isEnabled())."<br>";
					$oUser->setEnabled(false);
					$this->updateEntity($oUser);
				}
			}
		}
		exit(0);		
	}
	public function checkticketAction(){
		$aTickets = $this->getRepository('BoAdminBundle:Tickets')->findAll();
		foreach($aTickets as $oTicket){
			$oContact = $oTicket->getContacts();
			if($oContact == null){
				$subject = $oTicket->getSubject();
				$aTicketContacts = $this->getRepository('BoAdminBundle:TicketContacts')->findBy(array('name'=>$subject));
				if(count($aTicketContacts)==1){
					$oTicket->setContacts($aTicketContacts[0]);
					$this->updateEntity($oTicket);
					echo "Ticket Id:".$oTicket->getId().": updated <br><br>";
					continue;
				}
				echo "Ticket Id:".$oTicket->getId().": Contact null <br><br>";
				continue;
			}
			if($oContact->getName()!=$oTicket->getSubject()){
				echo "Contact:".$oContact->getName()."<br>";
				echo "Subject:".$oTicket->getSubject()."<br>";
				echo "Ticket Id:".$oTicket->getId()."<br><br>";
			}	
		}
		exit(0);
	}
	public function checkdateAction(){
		$oDate = new \DateTime("18-06-2018");
		$hour = 21;
		$newdate = $this->getDatePlusBis($oDate,$hour);
		print_r($newdate);
		exit(0);
	}
}

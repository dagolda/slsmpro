<?php
/*
* Auteur: N'VEKOUNOU Moise José
* Date création: 02-10-2017
*/
namespace Bo\AdminBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ExtracttsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$builder->add('month',ChoiceType::class, array('choices' =>$this->getMonths(),'required' => false))
			->add('year',ChoiceType::class, array('choices'=>$this->getYears(),'required' => false));
	}
    public function getName()
    {
        return 'bo_adminbundle_ExtracttsType';
    }
	protected function getYears(){
		$aResult = array();
		$aYears = range(date("Y")-4,date("Y"));
		foreach($aYears as $year){
			$aResult[$year]=$year;
		}
		return $aResult;
	}
	protected function getMonths(){
		$aResult = array();
		$aMonths = range(1,12);
		foreach($aMonths as $month){
			if(strlen($month)==1) $month="0".$month;
			$aResult[$month]=$month;
		}
		return $aResult;
	}
}

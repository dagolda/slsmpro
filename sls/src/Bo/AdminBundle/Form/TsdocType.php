<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TsdocType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nbhour',null,array('attr'=>array('required'=>true,'size'=>20)))
		->add('year',ChoiceType::class, array('choices' => $this->getYear(),'required' => true))
		->add('month',ChoiceType::class, array('choices' => range("January",date("F")),'required' => true))
		->add('student',null,array('attr'=>array('size'=>20)))
            	->add('startdate',DateType::class, array('required'=>true,'input'  => 'datetime','widget' => 'single_text'))
            	->add('enddate',DateType::class, array('required'=>true,'input'  => 'datetime','widget' => 'single_text'))
		->add('filename', FileType::class, array('required'=>true,'label' => 'Add file (PDF)', 'data_class' => null));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\Tsdoc'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bo_adminbundle_tsdoc';
    }
    private function getYear(){
	 $currentyear = date("Y");
	$aYear = array($currentyear-1=>$currentyear-1,$currentyear=>$currentyear);
	return $aYear;
    }
    private function getMonth(){
	$aAll = date("");
	$aYear = array();
	return $aYear;
    }

}

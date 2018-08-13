<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RevisionType2 extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('amendment',ChoiceType::class, array('choices' => array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'),'required' =>true))
            ->add('reference',null,array('attr'=>array('size'=>30)))
            ->add('hour',null,array('attr'=>array('size'=>30)))
            ->add('hour1',null,array('required'=>false,'attr'=>array('size'=>30)))
            ->add('hoursbefore',null,array('attr'=>array('size'=>30)))
			->add('hourafter',null,array('attr'=>array('size'=>30)))
            ->add('total',null,array('required'=>false,'attr'=>array('size'=>30)))
            ->add('total1',null,array('attr'=>array('size'=>30)))
            ->add('costbefore',null,array('attr'=>array('size'=>30)))
			->add('costafter',null,array('attr'=>array('size'=>30)))
            ->add('hourlyrate',null,array('attr'=>array('size'=>30)))
            ->add('hourlyrate1',null,array('required'=>false,'attr'=>array('size'=>30)))
            ->add('ratedate', DateType::class, array('required'=>true,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
            ->add('ratedate1', DateType::class, array('required'=>false,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
            ->add('authorizeddate', DateType::class, array('required'=>true,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
            ->add('enddate', DateType::class, array('required'=>true,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
            ->add('enddate1', DateType::class, array('required'=>false,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\Revision'
        ));
    }
}

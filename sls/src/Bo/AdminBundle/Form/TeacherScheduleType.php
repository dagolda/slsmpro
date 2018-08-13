<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class TeacherScheduleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idcontracts',HiddenType::class)
            ->add('idgroup',HiddenType::class)
            ->add('hourperday',null,array('required'=>false,'attr'=>array('size'=>8)))
            ->add('monday')
            ->add('tuesday')
            ->add('wednesday')
            ->add('thursday')
            ->add('friday')
            ->add('startam',TimeType::class, array('widget' => 'single_text','required' => false,'attr'=>array('size'=>8)))
            ->add('startpm',TimeType::class, array('widget' => 'single_text','required' => false,'attr'=>array('size'=>8)))
            ->add('endam',TimeType::class, array('widget' => 'single_text','required' => false,'attr'=>array('size'=>8)))
            ->add('endpm',TimeType::class, array('widget' => 'single_text','required' => false,'attr'=>array('size'=>8)))
            ->add('startdate',DateType::class, array('input'  => 'datetime','widget' => 'single_text','required' => true))
            ->add('enddate',DateType::class, array('input'  => 'datetime','widget' => 'single_text','required' => true))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\TeacherSchedule'
        ));
    }
}

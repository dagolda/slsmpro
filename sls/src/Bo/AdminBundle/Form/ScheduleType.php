<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class ScheduleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('hourperday',HiddenType::class)
            ->add('idcontracts',HiddenType::class)
            ->add('dayfrom',ChoiceType::class, array('choices' => array('Monday'=>"Monday", 'Tuesday'=>"Tuesday", 'Wednesday'=>"Wednesday", 'Thursday'=>"Thursday", 'Friday'=>"Friday", 'Saturday'=>"Saturday", 'Sunday'=>"Sunday"),'required' => true))
            ->add('dayto',ChoiceType::class, array('choices' => array('Monday'=>"Monday", 'Tuesday'=>"Tuesday", 'Wednesday'=>"Wednesday", 'Thursday'=>"Thursday", 'Friday'=>"Friday", 'Saturday'=>"Saturday", 'Sunday'=>"Sunday"),'required' => true))
            ->add('startam',TimeType::class, array('widget' => 'single_text','required' => false))
            ->add('startpm',TimeType::class, array('widget' => 'single_text','required' => false))
            ->add('endam',TimeType::class, array('widget' => 'single_text','required' => false))
            ->add('endpm',TimeType::class, array('widget' => 'single_text','required' => false))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\Schedule'
        ));
    }
}

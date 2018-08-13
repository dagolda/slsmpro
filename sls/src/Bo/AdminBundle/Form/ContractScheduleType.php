<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class ContractScheduleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idcontracts',HiddenType::class)
            ->add('dayfrom',ChoiceType::class, array('choices' => array('Monday'=>"Monday", 'Tuesday'=>"Tuesday", 'Wednesday'=>"Wednesday", 'Thursday'=>"Thursday", 'Friday'=>"Friday", 'Saturday'=>"Saturday", 'Sunday'=>"Sunday"),'required' => true))
            ->add('dayto',ChoiceType::class, array('choices' => array('Monday'=>"Monday", 'Tuesday'=>"Tuesday", 'Wednesday'=>"Wednesday", 'Thursday'=>"Thursday", 'Friday'=>"Friday", 'Saturday'=>"Saturday", 'Sunday'=>"Sunday"),'required' => true))
            ->add('startam',TimeType::class)
            ->add('startpm', TimeType::class)
            ->add('endam', TimeType::class)
            ->add('endpm', TimeType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\ContractSchedule'
        ));
    }
}

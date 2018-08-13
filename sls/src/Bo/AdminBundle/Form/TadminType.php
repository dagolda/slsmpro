<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

class TadminType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('startdate',DateType::class, array('required'=>true,'input'  => 'datetime','widget' => 'single_text','attr' => array('class' => 'date'),))
            ->add('enddate',DateType::class, array('required'=>true,'input'  => 'datetime','widget' => 'single_text','attr' => array('class' => 'date'),))
            ->add('startam',TimeType::class, array('widget' => 'single_text','required' => false))
            ->add('endam',TimeType::class, array('widget' => 'single_text','required' => false))
            ->add('startpm',TimeType::class, array('widget' => 'single_text','required' => false))
            ->add('endpm',TimeType::class, array('widget' => 'single_text','required' => false))
            ->add('hour',null,array('required'=>true,'attr'=>array('size'=>20)))
            ->add('note',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>66,'rows'=>4)))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\Tadmin'
        ));
    }
}

<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AbsencesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('motif',null,array('required'=>true))
            ->add('startdate',DateType::class, array('required'=>true,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
            ->add('enddate',DateType::class, array('required'=>true,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
            ->add('startam',null,array('required'=>true,'widget' => 'single_text'))
            ->add('endam',null,array('required'=>false,'widget' => 'single_text'))
            ->add('startpm',null,array('required'=>false,'widget' => 'single_text'))
            ->add('endpm',null,array('required'=>false,'widget' => 'single_text'))
            ->add('numberday',null,array('required'=>true))
            ->add('comment',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>86,'rows'=>4)))
            ->add('employee')
            ->add('students')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\Absences'
        ));
    }
}

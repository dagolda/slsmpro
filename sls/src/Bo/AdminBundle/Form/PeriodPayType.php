<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class PeriodPayType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('startdate',DateType::class, array('required'=>true,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
            ->add('enddate',DateType::class, array('required'=>true,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
            ->add('month',null,array('required'=>true))
            ->add('year')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\PeriodPay'
        ));
    }
}

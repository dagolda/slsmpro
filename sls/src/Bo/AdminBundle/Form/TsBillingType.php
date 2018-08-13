<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TsBillingType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idtimsheet')
            ->add('idbilling')
            ->add('ddate', 'date')
            ->add('startam', 'time')
            ->add('endam', 'time')
            ->add('startpm', 'time')
            ->add('endpm', 'time')
            ->add('hour')
            ->add('legende')
            ->add('status')
            ->add('creationdate', 'datetime')
            ->add('contract')
            ->add('students')
            ->add('group')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\TsBilling'
        ));
    }
}

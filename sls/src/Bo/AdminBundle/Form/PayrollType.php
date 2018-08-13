<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PayrollType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('hourw1')
            ->add('hourw2')
            ->add('hourw3')
            ->add('hourw4')
            ->add('hourw5')
            ->add('hourw6')
            ->add('extra')
            ->add('creationdate', 'datetime')
            ->add('employee')
            ->add('pariodpay')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\Payroll'
        ));
    }
}

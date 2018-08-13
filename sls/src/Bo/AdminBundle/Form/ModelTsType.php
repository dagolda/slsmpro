<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

class ModelTsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('monday')
            ->add('tuesday')
            ->add('wednesday')
            ->add('thursday')
            ->add('friday')
            ->add('saturday')
            ->add('startam',TimeType::class, array('widget' => 'single_text','required' => false))
            ->add('endam',TimeType::class, array('widget' => 'single_text','required' => false))
            ->add('startpm',TimeType::class, array('widget' => 'single_text','required' => false))
            ->add('endpm',TimeType::class, array('widget' => 'single_text','required' => false))
            ->add('hour')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\ModelTs'
        ));
    }
}

<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class TrainingType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('hourperday')
            ->add('hourperweek')
            ->add('monday')
            ->add('tuesday')
            ->add('wednesday')
            ->add('thursday')
            ->add('friday')
            ->add('startam',TimeType::class, array('widget' => 'single_text','required' => false,'attr' => array('size'=>12)))
            ->add('startpm',TimeType::class, array('widget' => 'single_text','required' => false,'attr' => array('size'=>12)))
            ->add('endam',TimeType::class, array('widget' => 'single_text','required' => false,'attr' => array('size'=>12)))
            ->add('endpm',TimeType::class, array('widget' => 'single_text','required' => false,'attr' => array('size'=>12)))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\Training'
        ));
    }
}

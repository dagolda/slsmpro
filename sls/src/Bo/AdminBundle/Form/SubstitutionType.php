<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class SubstitutionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('startdate',DateType::class, array('required'=>true,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('size'=>12),))
            ->add('enddate',DateType::class, array('required'=>true,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('size'=>12),))		
            ->add('startam',TimeType::class, array('widget' => 'single_text','required' => false,'attr' => array('size'=>12)))
            ->add('endam',TimeType::class, array('widget' => 'single_text','required' => false,'attr' => array('size'=>12)))
            ->add('startpm',TimeType::class, array('widget' => 'single_text','required' => false,'attr' => array('size'=>12)))
            ->add('endpm',TimeType::class, array('widget' => 'single_text','required' => false,'attr' => array('size'=>12)))
		->add('hour',null,array('attr'=>array('size'=>12)))
		->add('idholder',HiddenType::class)
		->add('idcontract',HiddenType::class)
		->add('idgroup',HiddenType::class)
            ->add('monday')
            ->add('tuesday')
            ->add('wednesday')
            ->add('thursday')
            ->add('friday')	
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\Substitution'
        ));
    }
}

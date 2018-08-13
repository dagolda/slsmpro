<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class GroupModalType extends AbstractType
{
    /**
    * @param FormBuilderInterface $builder
    * @param array $options
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',null,array('required'=>false,'attr'=>array('size'=>25)))
            ->add('startdate',DateType::class, array('required'=>false,'input'  => 'datetime','widget' => 'single_text'))
            ->add('enddate',DateType::class, array('required'=>false,'input'  => 'datetime','widget' => 'single_text'))
            ->add('targetlevel',ChoiceType::class, array('choices' => array('BBB' => 'BBB', 'CBC' => 'CBC', 'CCC' => 'CCC', 'C Oral' => 'C Oral', 'Other' => 'Other'),'required' => false))
        ;
    }
    
    /**
    * @param OptionsResolver $resolver
    */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\Group'
        ));
    }
}

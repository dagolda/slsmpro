<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TeachersType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('language',ChoiceType::class, array('choices' => array('English' => 'English', 'French' => 'French', 'English-French' => 'English-French'),'required' => false))
            ->add('categoryteacher', null, array('required'=>false))
            ->add('typecontract', null, array('required'=>false))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\Teachers'
        ));
    }
}

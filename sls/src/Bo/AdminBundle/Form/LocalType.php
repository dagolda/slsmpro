<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class LocalType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('reference',null,array('attr'=>array('size'=>40)))
            ->add('dimension',null,array('attr'=>array('size'=>40)))
            ->add('max',null,array('attr'=>array('size'=>40)))
            ->add('capability',null,array('attr'=>array('size'=>40)))
            ->add('typecontract', null, array('required'=>false,'expanded'=>true,'multiple'=>true,'attr' => array('class' => 'tcClass')))
            ->add('categoryroom',null,array('required'=>true))
            ->add('designation',null,array('attr'=>array('size'=>40)))
            ->add('details',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>86,'rows'=>2)))
            ->add('campus',null,array('required'=>true))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\Local'
        ));
    }
}

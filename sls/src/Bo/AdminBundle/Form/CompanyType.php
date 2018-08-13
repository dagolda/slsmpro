<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CompanyType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nname',null,array('attr'=>array('size'=>30)))
            ->add('compte',ChoiceType::class, array('choices' => array('Admin'=>'Admin','Teacher'=>'Teacher','Student'=>'Student','Coordinator'=>'Coordinator','Quiz'=>'Quiz'),'required' => false))
            ->add('messageen',TextareaType::class,array('required'=>false,'attr'=>array('class' => 'tinymce','data-theme' =>'advanced','cols'=>86,'rows'=>10)))
            ->add('messagefr',TextareaType::class,array('required'=>false,'attr'=>array('class' => 'tinymce','data-theme' =>'advanced','cols'=>86,'rows'=>10)))
        ;
    }   
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\Company'
        ));
    }
}

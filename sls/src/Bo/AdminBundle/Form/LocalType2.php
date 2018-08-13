<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class LocalType2 extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('reference',null,array('attr'=>array('size'=>30)))
            ->add('dimension',null,array('attr'=>array('size'=>30)))
            ->add('max',null,array('attr'=>array('size'=>30)))
            ->add('capability',null,array('attr'=>array('size'=>30)))
            ->add('typecontract', null, array('required'=>false,'expanded'=>true,'multiple'=>true,'attr' => array('class' => 'tcClass')))
            ->add('categoryroom',null,array('required'=>true))
            ->add('designation',null,array('attr'=>array('size'=>30)))
            ->add('details',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>76,'rows'=>2)))
            ->add('campus',null,array('required'=>true))
            ->add('status',ChoiceType::class, array('choices' => array('Free'=>'0','Busy'=>'1','Reserved'=>'2','Disable'=>'3'),'required' => true))
            ->add('available',ChoiceType::class, array('choices' => array('Available'=>'1','Unavailable'=>'0'),'required' => true))
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

<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class StudentsType2 extends AbstractType
{
    /**
    * @param FormBuilderInterface $builder
    * @param array $options
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',null,array('required'=>true,'attr'=>array('size'=>20)))
            ->add('firstname',null,array('required'=>true,'attr'=>array('size'=>20)))
		->add('targetlevel',ChoiceType::class, array('choices' => array('BBB' => 'BBB', 'CBC' => 'CBC', 'CCC' => 'CCC', 'C Oral' => 'C Oral', 'Other' => 'Other'),'required' => true))
            ->add('phonenumber',null,array('required'=>false,'attr'=>array('size'=>20)))
            ->add('email',EmailType::class,array('required'=>true,'attr'=>array('size'=>22)))
        ;
    }  
    /**
    * @param OptionsResolver $resolver
    */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\Students'
        ));
    }
}

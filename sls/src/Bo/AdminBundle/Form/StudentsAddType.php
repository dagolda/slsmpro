<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class StudentsAddType extends AbstractType
{
    /**
    * @param FormBuilderInterface $builder
    * @param array $options
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',null,array('attr'=>array('size'=>30)))
            ->add('firstname',null,array('attr'=>array('size'=>30)))
            ->add('startlevel',null,array('required'=>false,'attr'=>array('size'=>30)))
	    ->add('targetlevel',ChoiceType::class, array('choices' => array('BBB' => 'BBB', 'CBC' => 'CBC', 'CCC' => 'CCC', 'C Oral' => 'C Oral', 'Other' => 'Other'),'required' => true))
            ->add('startdate',DateType::class, array('required'=>true,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
            ->add('enddate',DateType::class, array('required'=>true,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
            ->add('phonenumber',null,array('required'=>false,'attr'=>array('size'=>30)))
            ->add('email',EmailType::class,array('required'=>false,'attr'=>array('size'=>30)))
            ->add('phonenumber1',null,array('required'=>false,'attr'=>array('size'=>30)))
            ->add('email1',EmailType::class,array('required'=>false,'attr'=>array('size'=>30)));
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

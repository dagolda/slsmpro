<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class GroupType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',null,array('attr'=>array('size'=>35)))
            ->add('startdate',DateType::class, array('required'=>false,'input'  => 'datetime','widget' => 'single_text'))
            ->add('enddate',DateType::class, array('required'=>false,'input'  => 'datetime','widget' => 'single_text'))
            ->add('targetlevel',null,array('required'=>false,'attr'=>array('size'=>35)))
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

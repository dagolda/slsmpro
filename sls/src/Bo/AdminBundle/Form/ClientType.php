<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class ClientType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('reference',null,array('required'=>true,'attr'=>array('size'=>35)))
            ->add('designation',null,array('required'=>true,'attr'=>array('size'=>35)))
            ->add('email',EmailType::class,array('required'=>false,'attr'=>array('size'=>35)))
            ->add('address',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>76,'rows'=>1)))
            ->add('phonenumber',null,array('required'=>false,'attr'=>array('size'=>35)))
            ->add('details',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>76,'rows'=>4)))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\Client'
        ));
    }
}

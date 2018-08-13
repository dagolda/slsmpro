<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class SecurityCoteType2 extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('filenumber',null,array('attr'=>array('size'=>40)))
            ->add('comment',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>86,'rows'=>2)))
            ->add('requestdate', DateType::class, array('required'=>true,'widget' => 'single_text','input' => 'datetime'))
            ->add('receivedate', DateType::class, array('required'=>false,'widget' => 'single_text','input' => 'datetime'))
            ->add('expirydate', DateType::class, array('required'=>false,'widget' => 'single_text','input' => 'datetime'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\SecurityCote'
        ));
    }
}

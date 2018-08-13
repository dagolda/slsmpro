<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class AdvisorsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('creationdate',DateType::class, array('required'=>false,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime'))
            ->add('typecontract', null, array('required'=>false,'expanded'=>true,'multiple'=>true))
			->add('workfields', null, array('required'=>false,'expanded'=>true,'multiple'=>true))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\Advisors'
        ));
    }
}

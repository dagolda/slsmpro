<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class DocumentsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('target',ChoiceType::class, array('choices' => array('Employee' => '1', 'Student' => '2', 'All' => 'All'),'required' => true))
            ->add('name',null,array('required'=>true,'attr'=>array('size'=>40)))
            ->add('description',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>86,'rows'=>4)))
            ->add('file', FileType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\Documents'
        ));
    }
}

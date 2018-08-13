<?php

namespace Bo\AdminBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class SpecificationType extends AbstractType
{
    /**
    * @param FormBuilderInterface $builder
    * @param array $options
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('module',null,array('required'=>true,'attr'=>array('size'=>40)))
            ->add('objet',null,array('required'=>true,'attr'=>array('size'=>40)))
            ->add('description',TextareaType::class,array('required'=>false,'attr'=>array('class' => 'tinymce','data-theme' =>'advanced','cols'=>70,'rows'=>10)))
            ->add('author',null,array('required'=>true,'attr'=>array('size'=>40)))
        ;
    }
    
    /**
    * @param OptionsResolver $resolver
    */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\Specification'
        ));
    }
}

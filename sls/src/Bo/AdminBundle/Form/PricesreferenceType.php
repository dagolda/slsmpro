<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PricesreferenceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('offernumber',null,array('required'=>true,'attr'=>array('size'=>30)))
            ->add('description',null,array('required'=>true,'attr'=>array('size'=>30)))
            ->add('field',null)
            ->add('ftorpt',ChoiceType::class, array('choices' => array('FT'=>'Full time','PT'=>'Part time'),'required' => true))
            ->add('privateorgroup',ChoiceType::class, array('choices' => array('Private'=>'Private','Group'=>'Group'),'required'=>true))
            ->add('language',ChoiceType::class, array('choices' => array('English'=>'English','French'=>'French'),'required' => true))
            ->add('typecontract',null)
            ->add('location',ChoiceType::class, array('choices' => array('Campus' => 'Campus', 'Off-site' => 'Off-site'),'required' => true))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\Pricesreference'
        ));
    }
}

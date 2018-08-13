<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class OtherpricesType extends AbstractType
{
    /**
    * @param FormBuilderInterface $builder
    * @param array $options
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('priceonsite',null,array('required'=>true,'attr'=>array('size'=>20)))
            ->add('priceoffsite',null,array('required'=>true,'attr'=>array('size'=>20)))
            ->add('contracttype',ChoiceType::class, array('choices' => array('Non-NMSO' => 'Non-NMSO', 'Private' => 'Private'),'required' => true))
            ->add('language',ChoiceType::class, array('choices' => array('French/Français' => 'French', 'English/Anglais' => 'English'),'required' => true))
            ->add('ftorpt',ChoiceType::class, array('choices' => array('Full Time/Temps plein'=>'Full Time','Part Time/Temps partiel'=>'Part Time','No difference/Pas de différence'=>'No difference'),'required' => true))
            ->add('feature',ChoiceType::class, array('choices' => array('More than 30 hours/Plus de 30 heures'=>'1','Less of 30 hours/Moins de 30 heures'=>'2','More or less/Plus ou moins'=>'3'),'required' => true));
    }   
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\Otherprices'
        ));
    }
}

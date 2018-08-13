<?php

namespace Bo\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class RightsAddType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('rubric')
            ->add('active',ChoiceType::class, array('choices' => array('0' => '0', '1' => '1'),'required' => true))
            ->add('liste',ChoiceType::class, array('choices' => array('0' => '0', '1' => '1'),'required' => true))
            ->add('creation',ChoiceType::class, array('choices' => array('0' => '0', '1' => '1'),'required' => true))
            ->add('edit',ChoiceType::class, array('choices' => array('0' => '0', '1' => '1'),'required' => true))
            ->add('ddelete',ChoiceType::class, array('choices' => array('0' => '0', '1' => '1'),'required' => true))
            ->add('search',ChoiceType::class, array('choices' => array('0' => '0', '1' => '1'),'required' => true))
            ->add('others',ChoiceType::class, array('choices' => array('0' => '0', '1' => '1'),'required' => true))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\UserBundle\Entity\Rights'
        ));
    }
}

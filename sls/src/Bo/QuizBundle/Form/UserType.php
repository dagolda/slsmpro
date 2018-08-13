<?php

namespace Bo\QuizBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('situation',ChoiceType::class, array('choices' => array('Mr'=>'Mr','Mrs'=>'Mrs','Ms'=>'Ms','Miss'=>'Miss','Other'=>'Other'),'required' => false))
		->add('name',null,array('attr'=>array('size'=>30)))
		->add('firstname',null,array('attr'=>array('size'=>30)))
		->add('phone',null,array('attr'=>array('size'=>30)))
		->add('department',null,array('attr'=>array('size'=>30)))
		->add('email',EmailType::class,array('required'=>true,'attr'=>array('size'=>30)))
	;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\QuizBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bo_quizbundle_user';
    }


}

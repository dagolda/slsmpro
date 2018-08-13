<?php

namespace Bo\UserBundle\Form;

use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('email')
            ->add('enabled')
            ->add('locked')
			->add('role',ChoiceType::class, array('choices' => array('ROLE_USER'=>'ROLE_USER','ROLE_STUDENT'=>'ROLE_STUDENT','ROLE_TEACHER'=>'ROLE_TEACHER','ROLE_ADMIN'=>'ROLE_ADMIN'),'required' => true))		
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\UserBundle\Entity\User'
        ));
    }
}

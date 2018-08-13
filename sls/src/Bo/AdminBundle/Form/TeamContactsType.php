<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class TeamContactsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',null,array('attr'=>array('size'=>30)))
            ->add('email',null,array('attr'=>array('size'=>30)))
            ->add('location',null,array('attr'=>array('size'=>30)))
            ->add('extension',null,array('attr'=>array('size'=>30)))
            ->add('room',null,array('attr'=>array('size'=>30)))
            ->add('employee',EntityType::class, array('class' => 'BoAdminBundle:Employee',
				'required' => false,
				'query_builder' => function(EntityRepository $er) {
				return $er->createQueryBuilder('u')
					->join("u.status","v")
					->where("v.id=2 or v.id=3 or v.id=5 or v.id=6 or v.id=7")
					->orderBy('u.firstname', 'ASC');
				},
			))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\TeamContacts'
        ));
    }
}

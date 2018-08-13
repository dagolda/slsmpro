<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Doctrine\ORM\EntityRepository;

class DiaryType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('ddate',DateType::class, array('required'=>false,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
		->add('note',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>86,'rows'=>6)))
		//->add('contracts')
		->add('students',EntityType::class, array('class' => 'BoAdminBundle:Students',
			'required' => false,
			'query_builder' => function(EntityRepository $er) {
			return $er->createQueryBuilder('u')
			->orderBy('u.firstname', 'ASC');
			},
		))
		->add('group',EntityType::class, array('class' => 'BoAdminBundle:Group',
			'required' => false,
			'query_builder' => function(EntityRepository $er) {
			return $er->createQueryBuilder('u')
			->orderBy('u.name', 'ASC');
			},
		))
		->add('employee',EntityType::class, array('class' => 'BoAdminBundle:Employee',
			'required' => false,
			'query_builder' => function(EntityRepository $er) {
			return $er->createQueryBuilder('u')
			->orderBy('u.firstname', 'ASC');
			},
		));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\Diary'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bo_adminbundle_diary';
    }


}

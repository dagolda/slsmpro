<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class StudentAbsencesType extends AbstractType
{
    /**
    * @param FormBuilderInterface $builder
    * @param array $options
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('motif',EntityType::class, array('class' => 'BoAdminBundle:MotifAbsence',
		'required' => true,
		'query_builder' => function(EntityRepository $er) {
		return $er->createQueryBuilder('u')
			->where("u.student=true")
			->orderBy('u.name', 'DESC');
		},
	    ))
            ->add('startdate',DateType::class, array('required'=>true,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
            ->add('enddate',DateType::class, array('required'=>true,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
            ->add('amorpm',ChoiceType::class, array('choices' => array('ALL'=>'ALL','AM'=>'AM','PM'=>'PM'),'required'=>true,'expanded'=>true,'multiple'=>false))
            ->add('startam',null,array('required'=>true,'widget' => 'single_text'))
            ->add('endam',null,array('required'=>false,'widget' => 'single_text'))
            ->add('startpm',null,array('required'=>false,'widget' => 'single_text'))
            ->add('endpm',null,array('required'=>false,'widget' => 'single_text'))
            ->add('nsam',null,array('required'=>false))
            ->add('nspm',null,array('required'=>false))
            ->add('numberday',null,array('required'=>true,'attr'=>array('size'=>20)))
            ->add('comment',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>80,'rows'=>6)))
            ->add('dayns',null,array('required'=>true,'attr'=>array('size'=>20)))
	    ->add('teacherpresence')
            ->add('students',EntityType::class, array('required'=>true,'class' => 'BoAdminBundle:Students',
		'required' => false,
		'query_builder' => function(EntityRepository $er) {
		return $er->createQueryBuilder('u')
			->orderBy('u.firstname', 'ASC');
		},
	   ));
    }
    
    /**
    * @param OptionsResolver $resolver
    */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\Absences'
        ));
    }
}

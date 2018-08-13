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

class AbsencesType5 extends AbstractType
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
            ->add('amorpm',ChoiceType::class, array('choices' => array('Day'=>'ALL','AM'=>'AM','PM'=>'PM'),'required'=>true,'expanded'=>true,'multiple'=>false))
            ->add('numberday',null,array('required'=>true,'attr'=>array('size'=>40)))
            ->add('comment',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>66,'rows'=>6)))
        ;
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

<?php

namespace Bo\AdminBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityRepository;

class TimesheetOtherType extends AbstractType
{
    /**
    * @param FormBuilderInterface $builder
    * @param array $options
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
		->add('ddate',DateType::class, array('required'=>true,'input'  => 'datetime','widget' => 'single_text','attr' => array('class' => 'date','size'=>15),))
            ->add('startam',TimeType::class, array('widget' => 'single_text','required' => false,'attr'=>array('size'=>14)))
            ->add('endam',TimeType::class, array('widget' => 'single_text','required' => false,'attr'=>array('size'=>14)))
            ->add('startpm',TimeType::class, array('widget' => 'single_text','required' => false,'attr'=>array('size'=>14)))
            ->add('endpm',TimeType::class, array('widget' => 'single_text','required' => false,'attr'=>array('size'=>14)))
            ->add('hour',null,array('required'=>true,'attr'=>array('size'=>10)))
            ->add('typets',EntityType::class, array('class' => 'BoAdminBundle:Typets',
				'required' => true,
				'query_builder' => function(EntityRepository $er) {
				return $er->createQueryBuilder('u')
					->where("u.name!='Teaching'")
					->orderBy('u.name', 'ASC');
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
            'data_class' => 'Bo\AdminBundle\Entity\Timesheet'
        ));
    }
}

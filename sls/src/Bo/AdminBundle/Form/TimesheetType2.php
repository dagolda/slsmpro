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

class TimesheetType2 extends AbstractType
{
    /**
    * @param FormBuilderInterface $builder
    * @param array $options
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('ddate',DateType::class, array('required'=>true,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
            ->add('startam',TimeType::class, array('widget' => 'single_text','required' => false))
            ->add('endam',TimeType::class, array('widget' => 'single_text','required' => false))
            ->add('startpm',TimeType::class, array('widget' => 'single_text','required' => false))
            ->add('endpm',TimeType::class, array('widget' => 'single_text','required' => false))
            ->add('hour')
            ->add('legende',ChoiceType::class, array('choices' => array('P'=>'P','N-S'=>'N-S','ABS'=>'ABS'),'required' => true))
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

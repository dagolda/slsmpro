<?php

namespace Bo\CalendarBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class EventType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('start')
            ->add('end')
			->add('title',null,array('attr'=>array('size'=>40)))
			->add('description',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>86,'rows'=>2)))
            ->add('employee')
            ->add('local')
            ->add('contracts')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\CalendarBundle\Entity\Event'
        ));
    }
}

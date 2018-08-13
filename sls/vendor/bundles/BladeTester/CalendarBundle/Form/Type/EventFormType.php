<?php

namespace BladeTester\CalendarBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\Datetime;

class EventFormType extends AbstractType {

    protected $dataClass;

    public function __construct($dataClass)
    {
        $this->dataClass = $dataClass;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, array(
                'label' => 'bladetester_calendar.label.event.title',
            ))
            ->add('description', TextareaType::class, array(
                'required' => false,
                'label' => 'bladetester_calendar.label.event.description',
            ))
            ->add('start', Datetime::class, array(
                'label' => 'bladetester_calendar.label.event.start',
            ))
            ->add('end', Datetime::class, array(
                'label' => 'bladetester_calendar.label.event.end',
            ))
            ->add('category', 'calendar_event_category_type', array(
                'label' => 'bladetester_calendar.label.event.category',
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'event';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->dataClass
        ));
    }
}

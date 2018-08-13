<?php
namespace Bo\AdminBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class EventsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',null,array('attr'=>array('size'=>40)))
            ->add('description',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>86,'rows'=>2)))
            ->add('startdate',DateTimeType::class, array(
				'placeholder' => array(
				'year' => 'Year', 'month' => 'Month', 'day' => 'Day',
				'hour' => 'Hour', 'minute' => 'Minute', 'second' => 'Second',
				)
			))
            ->add('enddate',DateTimeType::class, array(
				'placeholder' => array(
					'year' => 'Year', 'month' => 'Month', 'day' => 'Day',
					'hour' => 'Hour', 'minute' => 'Minute', 'second' => 'Second',
				)
			))
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
            'data_class' => 'Bo\AdminBundle\Entity\Events'
        ));
    }
}

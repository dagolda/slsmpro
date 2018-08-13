<?php

namespace Bo\AdminBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class HolidayslistType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('designation',null,array('attr'=>array('size'=>30)))
            //->add('country',null,array('required'=>false,'attr'=>array('size'=>30)))
            ->add('province',ChoiceType::class, array('choices' => array('All'=>'All','Ontario'=>'Ontario','Québec'=>'Québec'),'required'=>true))
            //->add('city',null,array('required'=>false,'attr'=>array('size'=>30)))
            ->add('ddate',DateType::class, array('required'=>true,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),));
    }   
    /**
    * @param OptionsResolver $resolver
    */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\Holidayslist'
        ));
    }
}

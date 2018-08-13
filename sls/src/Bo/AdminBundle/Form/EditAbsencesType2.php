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

class EditAbsencesType2 extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('motif',ChoiceType::class, array('choices' => array('Disease/Maladie'=>'Disease','Emergency at work/Urgence au travail'=>'Emergency at work','Examination/Examen'=>'Examination','Family emergency/Urgence familiale'=>'Family emergency','Family problem/Problème familiale'=>'Family problem','Personal reason/Raison personnelle'=>'Personal reason','Holiday/Vacances'=>'Holiday','Other/Autre'=>'Other'),'required'=>true))
            ->add('startdate',DateType::class, array('required'=>true,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
            ->add('enddate',DateType::class, array('required'=>true,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
            ->add('amorpm',ChoiceType::class, array('choices' => array('ALL'=>'ALL','AM'=>'AM','PM'=>'PM'),'required'=>true,'expanded'=>true,'multiple'=>false))
            ->add('numberday',null,array('required'=>true,'attr'=>array('size'=>30)))
            ->add('comment',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>98,'rows'=>6)))
            ->add('noshow')
			->add('dayns',null,array('required'=>true,'attr'=>array('size'=>30)))
			->add('dayabs',null,array('required'=>true,'attr'=>array('size'=>30)))
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

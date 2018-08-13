<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class EnquiryType2 extends AbstractType
{
    /**
    * @param FormBuilderInterface $builder
    * @param array $options
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',null,array('required'=>true,'attr'=>array('size'=>20)))
            ->add('firstname',null,array('required'=>true,'attr'=>array('size'=>20)))
            ->add('phone',null,array('required'=>true,'attr'=>array('size'=>20)))
			->add('email',EmailType::class,array('required'=>true,'attr'=>array('size'=>20)))
            ->add('address',null,array('required'=>false,'attr'=>array('size'=>20)))
            ->add('city',null,array('required'=>false,'attr'=>array('size'=>20)))
            ->add('contact',null,array('required'=>false,'attr'=>array('size'=>20)))
            ->add('phonecontact',null,array('required'=>false,'attr'=>array('size'=>20)))
            ->add('emailcontact',EmailType::class,array('required'=>false,'attr'=>array('size'=>20)))
            ->add('targetlevel',null,array('required'=>false,'attr'=>array('size'=>20)))
            ->add('ftorpt',ChoiceType::class, array('choices' => array('FT'=>'Full time','PT'=>'Part time'),'required' => true))
            ->add('privateorgroup',ChoiceType::class, array('choices' => array('Private'=>'Private','Group'=>'Group'),'required'=>true))
            ->add('location',ChoiceType::class, array('choices' => array('Campus' => 'Campus', 'Off-site' => 'Off-site'),'required' => true))
            ->add('gouvemp')
            ->add('typecontract',ChoiceType::class, array('choices' => array('NMSO' => 'NMSO','Service Contract'=>'Service Contract','Private'=>'Private'),'required' => true))
            ->add('field',null)
			->add('client',null)
            ->add('hourperday',null)
            ->add('hourperweek',null)
            ->add('gtso',ChoiceType::class, array('choices' => array('Yes'=>'Yes','No'=>'No'),'required' => false))
            ->add('language',ChoiceType::class, array('choices' => array('English'=>'English','French'=>'French'),'required' => true))
            ->add('schedule',null,array('required'=>false,'attr'=>array('size'=>20)))
            ->add('hours',null,array('required'=>false,'attr'=>array('size'=>20)))
            ->add('location',ChoiceType::class, array('choices' => array('Campus' => 'Campus', 'Off-site' => 'Off-site'),'required' => true))
            ->add('workon',ChoiceType::class, array('choices' => array('R'=>'R','O'=>'O','W'=>'W'),'required' => false))
            ->add('startdate',DateType::class, array('required'=>false,'input'  => 'datetime','widget' => 'single_text'))
            ->add('enddate',DateType::class, array('required'=>true,'input'  => 'datetime','widget' => 'single_text'))
            ->add('comment',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>66,'rows'=>4)));
    }    
    /**
    * @param OptionsResolver $resolver
    */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\Enquiry'
        ));
    }
}

<?php
namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class EmployeeType2 extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',null,array('attr'=>array('size'=>30)))
            ->add('firstname',null,array('attr'=>array('size'=>30)))
            ->add('email',EmailType::class,array('attr'=>array('size'=>30)))
            ->add('homenumber',null,array('required'=>false,'attr'=>array('size'=>40)))
            ->add('cellnumber',null,array('required'=>false,'attr'=>array('size'=>40)))
            ->add('address1',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>50,'rows'=>2)))
            ->add('address2',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>50,'rows'=>2)))
            ->add('note',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>90,'rows'=>4)))
            ->add('birthdate', null,array('years'=>range(date("Y")-100,date("Y")),'required'=>false))
            ->add('status', null, array('required'=>true))
            ->add('sexe',ChoiceType::class, array('choices' => array('M'=>'Male','F'=>'Female'),'required' => false))
            ->add('hiringdate', null,array('required'=>false))
            ->add('active')
            ->add('file')
        ;
    }   
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\Employee'
        ));
    }
}

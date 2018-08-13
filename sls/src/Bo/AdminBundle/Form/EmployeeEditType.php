<?php
namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class EmployeeEditType extends AbstractType
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
            ->add('email',EmailType::class,array('required'=>true,'attr'=>array('size'=>30)))
            ->add('email1',null,array('required'=>false,'attr'=>array('size'=>30)))
            ->add('homenumber',null,array('required'=>false,'attr'=>array('size'=>30)))
            ->add('cellnumber',null,array('required'=>false,'attr'=>array('size'=>30)))
            ->add('address1',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>50,'rows'=>2)))
            ->add('address2',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>50,'rows'=>2)))
            ->add('note',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>90,'rows'=>4)))
            ->add('birthdate',DateType::class, array('required'=>false,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
            ->add('status', null, array('required'=>true))
            ->add('profil', null, array('required'=>false))
            ->add('sexe',ChoiceType::class, array('choices' => array('M'=>'Male','F'=>'Female'),'required' => false))
            ->add('hiringdate',DateType::class, array('required'=>false,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
            ->add('active')
            ->add('available')
            ->add('langage',null, array('required'=>false))
            ->add('categoryteacher', null, array('required'=>false))
            ->add('typecontract', null, array('required'=>false,'expanded'=>true,'multiple'=>true,'attr' => array('class' => 'tcClass')))
			->add('englishlevel',null,array('required'=>false,'attr'=>array('size'=>30)))
			->add('frenchlevel',null,array('required'=>false,'attr'=>array('size'=>30)))
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

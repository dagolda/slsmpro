<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class OrderformType3 extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('ordernumber', null,array('required'=>true,'attr'=>array('size'=>30)))
            ->add('nbstudent', null,array('required'=>true,'attr'=>array('size'=>30)))
            ->add('startrate',DateType::class, array('required'=>true,'widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
            ->add('hourlyrate', null,array('required'=>true,'attr'=>array('size'=>30)))
            ->add('hoursnumber', null,array('required'=>true,'attr'=>array('size'=>30)))
            ->add('soumissiontype',ChoiceType::class, array('choices' => array('Bon de commande/Order form' => "2",'Private contract french/Contrat privé français' => "3",'Private contract english/Contrat privé anglais' => "4"),'required' => true))
            ->add('typeofcourse',ChoiceType::class, array('choices' => array('Private part-time/individuel temps partiel' => 'Private part-time/individuel temps partiel','Private semi-full-time/individuel semi temps plein' => 'Private semi-full-time/individuel semi temps plein','Private full-time/individuel temps plein' => 'Private full-time/individuel temps plein','Group part-time/groupe temps partiel' => 'Group part-time/group temps partiel','Group full-time/groupe temps plein' => 'Group full-time/groupe temps plein'),'required' => true))
            ->add('totalhours', null,array('required'=>true,'attr'=>array('size'=>30)))
            ->add('totalcost', null,array('required'=>true,'attr'=>array('size'=>30)))
            ->add('location',ChoiceType::class, array('choices' => array('Campus' => 'Campus', 'Off-site' => 'Off-site', 'Web' => 'Web'),'required' => true))
            ->add('campus',EntityType::class, array('class' => 'BoAdminBundle:Campus',
				'required' => false,
				'query_builder' => function(EntityRepository $er) {
				return $er->createQueryBuilder('u')
					->orderBy('u.designation', 'ASC');
				},
			))
            ->add('initlanguage',ChoiceType::class, array('choices' => array('No' => 0, 'Yes' => 1),'required' => true))
            ->add('weeklanguage',ChoiceType::class, array('choices' => array('Yes' => 1,'No' => 0),'required' => true))
            ->add('didmat',ChoiceType::class, array('choices' => array('No' => 0, 'Yes' => 1),'required' => true))
            ->add('classvisit',ChoiceType::class, array('choices' => array('Yes' => 1,'No' => 0),'required' => true))
            ->add('progressreport',ChoiceType::class, array('choices' => array('Yes' => 1,'No' => 0),'required' => true))
            ->add('placeoftraining',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>76,'rows'=>2)))
            ->add('preparedby', null,array('required'=>false,'attr'=>array('size'=>30)))
            ->add('approvedby', null,array('required'=>false,'attr'=>array('size'=>30)))
            ->add('comment',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>86,'rows'=>4)));
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\Orderform'
        ));
    }
}

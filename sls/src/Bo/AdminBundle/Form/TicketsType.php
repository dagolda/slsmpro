<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Doctrine\ORM\EntityRepository;

class TicketsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('comments',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>76,'rows'=>4)))
            ->add('openeddate',DateType::class, array('required'=>true,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
            ->add('employee',EntityType::class, array('class' => 'BoAdminBundle:Employee',
				'required' => false,
				'query_builder' => function(EntityRepository $er) {
				return $er->createQueryBuilder('u')
					->orderBy('u.firstname', 'ASC');
				},
			))
            ->add('contacts',EntityType::class, array('class' => 'BoAdminBundle:TicketContacts',
				'required' => false,
				'query_builder' => function(EntityRepository $er) {
				return $er->createQueryBuilder('u')
					->orderBy('u.name', 'ASC');
				},
			))
            ->add('students',EntityType::class, array('class' => 'BoAdminBundle:Students',
				'required' => false,
				'query_builder' => function(EntityRepository $er) {
				return $er->createQueryBuilder('u')
					->orderBy('u.firstname', 'ASC');
				},
			))
	    ->add('filename', FileType::class, array('required'=>false, 'data_class' => null))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\Tickets'
        ));
    }
}

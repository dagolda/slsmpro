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
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class TicketsType2 extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('subject',HiddenType::class)
            ->add('contacts',EntityType::class, array('class' => 'BoAdminBundle:TicketContacts',
				'required' => false,
				'query_builder' => function(EntityRepository $er) {
				return $er->createQueryBuilder('u')
					->orderBy('u.name', 'ASC');
				},
			))
            ->add('comments',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>66,'rows'=>6)))
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

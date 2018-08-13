<?php
/*
* Auteur: N'VEKOUNOU Moise José
* Date dernière modification: 01-02-2015
*/
namespace Bo\AdminBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class Criteria2Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$builder->add('startdate',DateType::class, array('required'=>true,'widget' => 'single_text','input' => 'datetime','attr'=>array('size'=>10)))
				->add('enddate',DateType::class, array('required'=>true,'widget' => 'single_text','input' => 'datetime','attr'=>array('size'=>10)))
				->add('year',EntityType::class, array('class' => 'BoAdminBundle:Tyear',
						'required' => false,
						'query_builder' => function(EntityRepository $er) {
						return $er->createQueryBuilder('u')
							->orderBy('u.yearln', 'DESC');
						},
				))
				->add('month',EntityType::class, array('class' => 'BoAdminBundle:Tmonth',
						'required' => false,
						'query_builder' => function(EntityRepository $er) {
						return $er->createQueryBuilder('u')
							->orderBy('u.id', 'ASC');
						},
				));
	}
    public function getName()
    {
        return 'bo_adminbundle_ccdatetype';
    }
}

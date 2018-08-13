<?php
namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Doctrine\ORM\EntityRepository;

class ContractsTypeAdd extends AbstractType
{
    /**
    *@param FormBuilderInterface $builder
    *@param array $options
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('workfields',null,array('required'=>false))
            ->add('coordinator',EntityType::class, array('class' => 'BoAdminBundle:Coordinator',
				'required' => false,
				'query_builder' => function(EntityRepository $er) {
				return $er->createQueryBuilder('u')
					->orderBy('u.name', 'ASC');
				},
			))
            ->add('contractual',EntityType::class, array('class' => 'BoAdminBundle:Contractual',
				'required' => false,
				'query_builder' => function(EntityRepository $er) {
				return $er->createQueryBuilder('u')
					->orderBy('u.name', 'ASC');
			},))
            ->add('schedule',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>86,'rows'=>2)))
            ->add('hourperweek',null,array('required'=>false))
            ->add('typecontract',null,array('required'=>false))
            ->add('hourlyrate',null,array('required'=>false))
            ->add('startrate',DateType::class, array('required'=>false,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
            ->add('estimatedcost',null,array('required'=>false,'attr'=>array('size'=>20)))
            ->add('totalcost',null,array('required'=>false,'attr'=>array('size'=>20)))
            ->add('totalhours',null,array('required'=>false,'attr'=>array('size'=>20)))
            ->add('hoursnumber',null,array('required'=>false,'attr'=>array('size'=>20)))
            ->add('hourlyrate1',null,array('required'=>false,'attr'=>array('size'=>20)))
            ->add('startrate1',DateType::class, array('required'=>false,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
            ->add('estimatedcost1',null,array('required'=>false,'attr'=>array('size'=>20)))
            ->add('hoursnumber1',null,array('required'=>false,'attr'=>array('size'=>20)))
            ->add('hourlyrate2',null,array('required'=>false,'attr'=>array('size'=>20)))
            ->add('startrate2',DateType::class, array('required'=>false,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
            ->add('estimatedcost2',null,array('required'=>false,'attr'=>array('size'=>20)))
            ->add('hoursnumber2',null,array('required'=>false,'attr'=>array('size'=>20)))
            ->add('typeoftraining',ChoiceType::class, array('choices' => array('GR' => 'GR', 'PR' => 'PR', 'SP' => 'SP'),'required' => false))
            ->add('notes',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>86,'rows'=>4)))
            ->add('startdate',DateType::class, array('required'=>true,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
            ->add('enddate',DateType::class, array('required'=>true,'widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
			->add('ordernumber', null,array('required'=>true,'attr'=>array('size'=>20)))
			->add('contractnumber', null,array('required'=>true,'attr'=>array('size'=>20)))
			->add('methodofsupply',ChoiceType::class, array('choices' => array('Bon de commande/Order form'=>'Bon de commande/Order form','Commande subséqu./ Call-up'=>'Commande subséqu./ Call-up','Modification/Amendment'=>'Modification/Amendment','Private Contract'=>'Private Contract','Service Contract/Purchase Order'=>'Service Contract/Purchase Order','TA' => 'TA' ),'required' => false))
            ->add('language',EntityType::class, array('class' => 'BoAdminBundle:Language',
				'required' => false,
				'query_builder' => function(EntityRepository $er) {
				return $er->createQueryBuilder('u')
					->orderBy('u.name', 'ASC');
				},
			))
            ->add('status',ChoiceType::class, array('choices' => array( 'Archived'=> '0', 'In progress' => '1','Master' => '4','Suspended' => '3', 'Upcomming' => '2'),'required' => true))
			->add('typetime',ChoiceType::class, array('choices' => array('Full Time' => 'Full Time', 'Part Time' => 'Part Time'),'required' => false))
            ->add('contractdate',DateType::class, array('required'=>false,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
            ->add('clicsignaturedate',DateType::class, array('required'=>false,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
            ->add('clientsignaturedate',DateType::class, array('required'=>false,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
            ->add('receivedate',DateType::class, array('required'=>false,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
            ->add('client',EntityType::class, array('class' => 'BoAdminBundle:Client',
				'required' => false,
				'query_builder' => function(EntityRepository $er) {
				return $er->createQueryBuilder('u')
					->orderBy('u.reference', 'ASC');
				},
			))
            ->add('department',null,array('required'=>false))
            ->add('program',ChoiceType::class, array('choices' => array('PFL2' => 'PFL2', 'CEWP' => 'CEWP', 'CLIC' => 'CLIC','PFL2 et CLIC' => 'PFL2 et CLIC', 'CEWP et CLIC' => 'CEWP et CLIC', 'AUTRE' => 'AUTRE'),'required' => true))
            ->add('session',null,array('required'=>false))
		   ->add('step',null, array('required' => false))
            ->add('ryacc',ChoiceType::class, array('choices' => array('+' => '+', 'r' => 'r', 'r-' => 'r-','a' => 'a'),'required' => false))
            ->add('startlesson',null,array('required'=>false))
            ->add('learningplan',null,array('required'=>false))
            ->add('planreceived',null,array('required'=>false))
			->add('targetlevel',ChoiceType::class, array('choices' => array('BBB' => 'BBB', 'CBC' => 'CBC', 'CCC' => 'CCC', 'C Oral' => 'C Oral', 'Other' => 'Other'),'required' => true))
            ->add('location',ChoiceType::class, array('choices' => array('Campus' => 'Campus', 'Office' => 'Office', 'Web' => 'Web'),'required' => true))	
            ->add('campus',EntityType::class, array('class' => 'BoAdminBundle:Campus',
				'required' => false,
				'query_builder' => function(EntityRepository $er) {
				return $er->createQueryBuilder('u')
					->orderBy('u.designation', 'ASC');
				},
			))
            ->add('group',EntityType::class, array('class' => 'BoAdminBundle:Group',
				'required' => false,
				'query_builder' => function(EntityRepository $er) {
				return $er->createQueryBuilder('u')
					->orderBy('u.name', 'ASC');
				},
			))
            ->add('billingcontact',EntityType::class, array('class' => 'BoAdminBundle:BillingContact',
				'required' => false,
				'query_builder' => function(EntityRepository $er) {
				return $er->createQueryBuilder('u')
					->orderBy('u.email', 'ASC');
				},
			))
            ->add('adresse',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>86,'rows'=>2)))			
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\Contracts'
        ));
    }
}

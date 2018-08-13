<?php
namespace Bo\AdminBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class EvaluationType extends AbstractType
{
    /**
    * @param FormBuilderInterface $builder
    * @param array $options
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
		->add('situation',ChoiceType::class, array('choices' => array('Mr'=>'Mr','Mrs'=>'Mrs','Ms'=>'Ms','Miss'=>'Miss','Other'=>'Other'),'required' => false))
            ->add('firstname',null,array('required'=>false,'attr'=>array('size'=>35)))
            ->add('name',null,array('required'=>false,'attr'=>array('size'=>35)))
            ->add('evaltime',TimeType::class, array('widget' => 'single_text','required' => false))
            ->add('expenses',null,array('required'=>true,'attr'=>array('size'=>35)))
            ->add('ryacc',ChoiceType::class, array('choices' => array('+' => '+', 'r' => 'r', 'r-' => 'r-','a' => 'a','d' => 'd'),'required' => false))
            ->add('sendto',ChoiceType::class, array('choices' => array('Student' => 'Student', 'Customer' => 'Customer', 'Both' => 'Both'),'required' => false))
            ->add('evaltype',ChoiceType::class, array('choices' => array('RC' => 'RC', 'EE' => 'EE', 'RC, EE' => 'RC, EE','Oral' => 'Oral', 'RC, Oral' => 'RC, Oral','EE, Oral' => 'EE, Oral','Trois tests'=>'Trois tests'),'required' => false))
            ->add('options',ChoiceType::class, array('choices' => array('KAMI'=>'KAMI','MLAT' =>'MLAT','TALV'=>'TALV','VAK'=>'VAK'),'required' => false))
            ->add('title',null,array('required'=>false,'attr'=>array('size'=>35)))
            ->add('typeoftraining',ChoiceType::class, array('choices' => array('Group' => 'Group', 'Individual' => 'Individual', 'semi-private' => 'semi-private'),'required' => false))
            ->add('languages',ChoiceType::class, array('choices' => array('English' => 'English', 'French' => 'French', 'Spanish' => 'Spanish'),'required' => false))
			->add('typetime',ChoiceType::class, array('choices' => array('Full Time' => 'Full Time', 'Part Time' => 'Part Time'),'required' => false))
            ->add('phone',null,array('required'=>false,'attr'=>array('size'=>35)))
            ->add('emailstudent',EmailType::class,array('required'=>true,'attr'=>array('size'=>35)))
            ->add('addresse',null,array('required'=>false,'attr'=>array('size'=>35)))
            ->add('currentprofile',null,array('required'=>true,'attr'=>array('size'=>35)))
            ->add('customer',null,array('required'=>false,'attr'=>array('size'=>35)))
            ->add('contact',null,array('required'=>false,'attr'=>array('size'=>35)))
            ->add('phonecontact',null,array('required'=>false,'attr'=>array('size'=>35)))
            ->add('emailcontact',EmailType::class,array('required'=>false,'attr'=>array('size'=>35)))
            ->add('billingcontact',null,array('required'=>false,'attr'=>array('size'=>35)))
            ->add('billingphone',null,array('required'=>false,'attr'=>array('size'=>35)))
            ->add('billingemail',EmailType::class,array('required'=>true,'attr'=>array('size'=>35)))
            ->add('targetprofile',null,array('required'=>false,'attr'=>array('size'=>35)))
            ->add('rcresult',null,array('required'=>false,'attr'=>array('size'=>35)))
            ->add('eeresult',null,array('required'=>false,'attr'=>array('size'=>35)))
            ->add('ftgroup',null,array('required'=>false,'attr'=>array('size'=>35)))
            ->add('hourgroup',null,array('required'=>false,'attr'=>array('size'=>35)))
            ->add('ftindividual',null,array('required'=>false,'attr'=>array('size'=>35)))
            ->add('hourftindividual',null,array('required'=>false,'attr'=>array('size'=>35)))
            ->add('hourptindividual',null,array('required'=>false,'attr'=>array('size'=>35)))
            ->add('ptstarting',null,array('required'=>false,'attr'=>array('size'=>35)))		
            ->add('paid',ChoiceType::class, array('choices' => array('No'=>0,'Yes'=>1),'required' => true))
            ->add('paiddate',DateType::class, array('required'=>false,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime'))				
            ->add('oralunderstanding',ChoiceType::class, array('choices' => array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9'),'required' => false))
            ->add('qualityofdiscourse',ChoiceType::class, array('choices' => array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9'),'required' => false))
            ->add('prononciation',ChoiceType::class, array('choices' => array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9'),'required' => false))
            ->add('grammar',ChoiceType::class, array('choices' => array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9'),'required' => false))
            ->add('verbs',ChoiceType::class, array('choices' => array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9'),'required' => false))
            ->add('vocabulary',ChoiceType::class, array('choices' => array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9'),'required' => false))
            ->add('writencomprehension',null,array('required'=>false,'attr'=>array('size'=>35)))
            ->add('writenexpression',null,array('required'=>false,'attr'=>array('size'=>35)))
            ->add('syntaxe',ChoiceType::class, array('choices' => array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9'),'required' => false))
            ->add('evaldate',DateType::class, array('required'=>false,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
            ->add('sendevaldate',DateType::class, array('required'=>false,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime','attr' => array('class' => 'date'),))
            ->add('comment',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>76,'rows'=>4)))
/*
            ->add('students',EntityType::class, array('class' => 'BoAdminBundle:Students',
				'required' => false,
				'query_builder' => function(EntityRepository $er) {
				return $er->createQueryBuilder('u')
					->orderBy('u.firstname', 'ASC');
				},
			))
*/
            ->add('evaluator',EntityType::class, array('class' => 'BoAdminBundle:Employee',
				'required' => false,
				'query_builder' => function(EntityRepository $er) {
				return $er->createQueryBuilder('u')
					->join("u.status","v")
					->where("v.id=3 or v.id=5 or v.id=6 or v.id=7")
					->orderBy('u.firstname', 'ASC');
				},
			))
            ->add('evallocation',ChoiceType::class, array('choices' => array('Campus' => 'Campus', 'Office' => 'Office', 'Phone' => 'Phone'),'required' => false))	
            ->add('campus',EntityType::class, array('class' => 'BoAdminBundle:Campus',
				'required' => false,
				'query_builder' => function(EntityRepository $er) {
				return $er->createQueryBuilder('u')
					->orderBy('u.designation', 'ASC');
				},
			))
        ;
    }   
    /**
    * @param OptionsResolver $resolver
    */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\Evaluation'
        ));
    }
}

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

class EvaluationType2 extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('ryacc',ChoiceType::class, array('choices' => array('+' => '+', 'r' => 'r', 'r-' => 'r-','aj' => 'aj'),'required' => false))
            ->add('rcresult',ChoiceType::class, array('choices'=>array('X'=>'X','A'=>'A','B'=>'B','C'=>'C','EX'=>'EX','-'=>'-'),'required' => false))
            ->add('eeresult',ChoiceType::class, array('choices'=>array('X'=>'X','A'=>'A','B'=>'B','C'=>'C','EX'=>'EX','-'=>'-'),'required' => false))
            ->add('ftgroup',null,array('required'=>false,'attr'=>array('size'=>30)))
            ->add('hourgroup',null,array('required'=>false,'attr'=>array('size'=>30)))
            ->add('ftindividual',null,array('required'=>false,'attr'=>array('size'=>30)))
            ->add('hourftindividual',null,array('required'=>false,'attr'=>array('size'=>30)))
            ->add('hourptindividual',null,array('required'=>false,'attr'=>array('size'=>30)))
            ->add('ptstarting',null,array('required'=>false,'attr'=>array('size'=>30)))						
            ->add('oralunderstanding',ChoiceType::class, array('choices'=>array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9'),'required' => false))
            ->add('qualityofdiscourse',ChoiceType::class, array('choices'=>array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9'),'required'=>false))
            ->add('prononciation',ChoiceType::class, array('choices'=>array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9'),'required'=>false))
            ->add('grammar',ChoiceType::class, array('choices'=>array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9'),'required' => false))
            ->add('verbs',ChoiceType::class, array('choices'=>array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9'),'required'=>false))
            ->add('vocabulary',ChoiceType::class, array('choices'=>array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9'),'required'=>false))
            ->add('writencomprehension',null,array('required'=>false,'attr'=>array('size'=>30)))
            ->add('writenexpression',null,array('required'=>false,'attr'=>array('size'=>30)))
            ->add('syntaxe',ChoiceType::class, array('choices' => array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9'),'required'=>false))
            //->add('paid',ChoiceType::class, array('choices' => array('No'=>0,'Yes'=>1)))
            //->add('paiddate',DateType::class, array('required'=>false,'input'  => 'datetime','widget' => 'single_text','input' => 'datetime'))			
            ->add('comment',TextareaType::class,array('required'=>false,'attr'=>array('cols'=>66,'rows'=>4)));
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

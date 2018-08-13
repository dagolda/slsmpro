<?php

namespace Bo\QuizBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EvalquizType2 extends AbstractType
{
    /**
    * {@inheritdoc}
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
		->add('notification',null,array('attr'=>array('size'=>30)))
		->add('title',null,array('attr'=>array('size'=>76)))
		->add('category',null,array('required'=>true))
		->add('result',null,array('attr'=>array('size'=>30)))
		->add('createby',null,array('attr'=>array('disabled'=>"disabled",'size'=>30)))
		->add('confirmation',null,array('attr'=>array('disabled'=>"disabled",'size'=>30)))
		->add('dispresult')
	;
    }
    
    /**
    * {@inheritdoc}
    */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\QuizBundle\Entity\Evalquiz'
        ));
    }

    /**
    * {@inheritdoc}
    */
    public function getBlockPrefix()
    {
        return 'bo_quizbundle_evalquiz';
    }


}

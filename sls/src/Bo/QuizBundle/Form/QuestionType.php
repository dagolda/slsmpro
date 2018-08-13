<?php

namespace Bo\QuizBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class QuestionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
		->add('name',null,array('required'=>false,'attr'=>array('size'=>40)))
		->add('content',TextareaType::class,array('required'=>true,'attr'=>array('class' => 'tinymce','data-theme' =>'advanced','cols'=>86,'rows'=>10)))
		->add('noa',null)
		->add('score',null)
		->add('qorder',null)
	;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\QuizBundle\Entity\Question'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bo_quizbundle_question';
    }


}

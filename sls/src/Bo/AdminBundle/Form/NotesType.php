<?php
/*
* Auteur: N'VEKOUNOU Moise José
*/
namespace Bo\AdminBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class NotesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$builder->add('description',TextareaType::class,array('required'=>true,'attr'=>array('cols'=>66,'rows'=>4)));
	}
    public function getName()
    {
        return 'bo_adminbundle_notes';
    }
}

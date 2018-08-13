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

class CcdateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$builder->add('startdate',DateType::class, array('required'=>true,'widget' => 'single_text','input' => 'datetime'))
				->add('enddate',DateType::class, array('required'=>true,'widget' => 'single_text','input' => 'datetime'));
	}
    public function getName()
    {
        return 'bo_adminbundle_ccdatetype';
    }
}
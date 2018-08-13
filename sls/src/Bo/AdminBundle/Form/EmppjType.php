<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class EmppjType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',ChoiceType::class, array('choices' => array('Resume/Curriculum Vitae'=>'Resume/Curriculum Vitae','Clearance sheet/Feuille de sécurité'=>'Clearance sheet/Feuille de sécurité','Payroll information/Information de paie'=>'Payroll information/Information de paie','Employment Contract/Contrat de travail'=>'Employment Contract/Contrat de travail'),'required' => true))
            ->add('filename', FileType::class, array('label' => 'Add file (PDF)', 'data_class' => null)
        );
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\emppj'
        ));
    }
}

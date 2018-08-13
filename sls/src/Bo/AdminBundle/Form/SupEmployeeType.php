<?php

namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SupEmployeeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sexe')
            ->add('name')
            ->add('firstname')
            ->add('email')
            ->add('homenumber')
            ->add('cellnumber')
            ->add('address1')
            ->add('address2')
            ->add('birthdate', 'date')
            ->add('hiringdate', 'date')
            ->add('active')
            ->add('note')
            ->add('language')
            ->add('englishlevel')
            ->add('frenchlevel')
            ->add('path')
            ->add('creationdate', 'datetime')
            ->add('hourrate')
            ->add('createby')
            ->add('deletedy')
            ->add('deleteddate', 'datetime')
            ->add('pwd')
            ->add('profil')
            ->add('status')
            ->add('typecontract')
            ->add('categoryteacher')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\SupEmployee'
        ));
    }
}

<?php
namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class AdvisorlistType extends AbstractType
{
    /**
    *@param FormBuilderInterface $builder
    *@param array $options
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {	
       $builder->add('advisor',EntityType::class, array('class' => 'BoAdminBundle:Advisors',
				'required' => false,
				'query_builder' => function(EntityRepository $er) {
				return $er->createQueryBuilder('u')
					->where("u.adminhour>u.hourlycharge")
					->orderBy('u.name', 'ASC');
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
            'data_class' => 'Bo\AdminBundle\Entity\Advisorlist'
        ));
    }
}

<?php
namespace Bo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class AddAdvisorType extends AbstractType
{
    /**
    *@param FormBuilderInterface $builder
    *@param array $options
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder		
            ->add('advisor',EntityType::class, array('class' => 'BoAdminBundle:Employee',
				'required' => false,
				'query_builder' => function(EntityRepository $er) {
				return $er->createQueryBuilder('u')
					->join("u.status","v")
					->where("v.id=3 or v.id=5 or v.id=6")
					->orderBy('u.firstname', 'ASC');
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
            'data_class' => 'Bo\AdminBundle\Entity\Contracts'
        ));
    }
}

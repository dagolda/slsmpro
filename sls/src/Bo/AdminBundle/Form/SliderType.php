<?php
namespace Bo\AdminBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SliderType extends AbstractType
{
    /**
    * @param FormBuilderInterface $builder
    * @param array $options
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('categorie',null,array('attr'=>array('size'=>35)))
            ->add('b1',null,array('required'=>false,'attr'=>array('size'=>35)))
            ->add('b2',null,array('required'=>false,'attr'=>array('size'=>35)))
            ->add('b3','textarea',array('required'=>false,'attr'=>array('cols'=>78,'rows'=>2)))
            ->add('ordre',null,array('attr'=>array('size'=>35)))
            ->add('file')
        ;
    }   
    /**
    * @param OptionsResolverInterface $resolver
    */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bo\AdminBundle\Entity\Slider'
        ));
    }
    /**
    * @return string
    */
    public function getName()
    {
        return 'bo_adminbundle_slider';
    }
}

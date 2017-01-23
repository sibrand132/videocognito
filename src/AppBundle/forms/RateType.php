<?php
namespace AppBundle\forms;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ocena', 'integer', array('attr' => array(
                'value' => 0,
                'type' => 'number',
                'class' => 'rating',
                'data-size' => 'xs',
                'min' => 0,
                'max' => 10,
                'step' => 1,
                'data-stars' => 10)))
            ->add('Daj ocene', 'submit', array('attr'=> array(
                'class'=>"btn btn-primary",



            )))

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Oceny',
        ));
    }

    public function getName()
    {
        return 'rateForm';
    }
}
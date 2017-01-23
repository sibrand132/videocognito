<?php
namespace AppBundle\forms;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('komentarz', 'text', array('attr'=>array('placeholder'=>'Skomentuj...'), 'label' => false))
            ->add('Dodaj komentarz', 'submit')

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Komentarze',
        ));
    }

    public function getName()
    {
        return 'commentForm';
    }
}
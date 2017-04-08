<?php

namespace AppBundle\Form;



use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClubType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre',  TextType::class, array(
                'label' => 'Nombre *',
                'label_attr' => array('class' => 'col-md-3')))

            ->add('telefono',TextType::class, array(
                'label' => 'Teléfono *',
                'label_attr' => array('class' => 'col-md-3')))

           ->add('borrado',CheckboxType::class, array(
               'label' => 'Borrado',
               'required' => false,
               'label_attr' => array('class' => 'col-md-3')))
        ->add('jugadores');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Club'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_club';
    }


}

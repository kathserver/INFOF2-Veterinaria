<?php

namespace App\Form;

use App\Entity\RecetaMedica;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecetamedicaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('especificaciones')
        //    ->add('baja')
            ->add('consulta')
        //    ->add('id_personal')
        //    ->add('id_cita')
        //    ->add('id_paciente')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => RecetaMedica::class,
        ]);
    }
}

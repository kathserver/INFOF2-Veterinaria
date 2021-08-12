<?php

namespace App\Form;

use App\Entity\Hospitalizacion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HospitalizacionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fecha')
            ->add('hora')
            ->add('motivo')
            ->add('estado')
        //    ->add('baja')
        //    ->add('id_paciente')
         //   ->add('id_personal')
        //    ->add('id_jaula')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Hospitalizacion::class,
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\Historial;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HistorialType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('horaIngreso')
            ->add('fechaIngreso')
       //     ->add('baja')
        //    ->add('id_paciente')
        //    ->add('id_detalleFactura')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Historial::class,
        ]);
    }
}

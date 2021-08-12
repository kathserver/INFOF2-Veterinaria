<?php

namespace App\Form;

use App\Entity\Cirugia;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CirugiaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('motivo')
        //    ->add('id_paciente')
        //    ->add('id_personal')
        //    ->add('id_cita')
        //   ->add('baja')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Cirugia::class,
        ]);
    }
}

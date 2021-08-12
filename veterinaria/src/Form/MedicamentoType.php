<?php

namespace App\Form;

use App\Entity\Medicamento;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MedicamentoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('descripcion')
            ->add('especificacion')
            ->add('precioCompra')
            ->add('precioVenta')
        //    ->add('baja')
         //   ->add('id_hospitali')
         //   ->add('id_receta')
          //  ->add('id_inventario')
         //   ->add('id_detalle')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Medicamento::class,
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\DetalleFactura;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DetallefacturaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('subTotal')
         //   ->add('baja')
         //   ->add('id_pedido')
         //   ->add('id_cliente')
         //   ->add('id_factura')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DetalleFactura::class,
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\Ec;
use App\Entity\Ue;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EcType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code',TextType::class,[
                'attr'=>[
                    'class'=>'form-control',
                ]
            ])
            ->add('name',TextType::class,[
                'attr'=>[
                    'class'=>'form-control',
                ]
            ])
            ->add('ue',EntityType::class,[
                'class'=>Ue::class,
                'attr'=>[
                    'class'=>'form-control',
                ]
            ])
            ->add('coeff',IntegerType::class,[
                'attr'=>[
                    'class'=>'form-control',
                ]
            ])
            ->add('status')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ec::class,
        ]);
    }
}

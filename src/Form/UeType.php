<?php

namespace App\Form;

use App\Entity\Mention;
use App\Entity\Parcours;
use App\Entity\Semestre;
use App\Entity\Ue;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',TextType::class,[
                'attr'=>[
                    'class'=>'form-control',
                ]
            ])
            ->add('mention',EntityType::class,[
                'class'=>Mention::class,
                'attr'=>[
                    'class'=>'form-control',
                ]
            ])
            ->add('semestre',EntityType::class,[
                'class'=>Semestre::class,
                'attr'=>[
                    'class'=>'form-control',
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ue::class,
        ]);
    }
}

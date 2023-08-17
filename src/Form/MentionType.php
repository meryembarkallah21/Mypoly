<?php

namespace App\Form;

use App\Entity\Code;
use App\Entity\Cycle;
use App\Entity\Mention;
use App\Entity\Parcours;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MentionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('parcours',EntityType::class,[
                'class'=> Parcours::class,
                'attr'=>[
                    'class'=>'form-control',
                ],
            ])
            ->add('cycle',EntityType::class,[
                'class'=> Cycle::class,
                'attr'=>[
                    'class'=>'form-control',
                ],
            ])
            ->add('code',EntityType::class,[
                'class'=> Code::class,
                'attr'=>[
                    'class'=>'form-control',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Mention::class,
        ]);
    }
}

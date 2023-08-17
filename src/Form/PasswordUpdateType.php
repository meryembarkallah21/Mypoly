<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PasswordUpdateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('oldPassword', PasswordType::class,[
                'required' => true,
                'label'=>'Ancien mot de passe',
                'attr'=>[
                    'class'=> 'form-control',
                    'placeholder'=>'Mot de passe actuel......',
                ]
            ])
            ->add('newPassword', PasswordType::class,[
                'required' => true,
                'label'=>'Nouveau mot de passe',
                'attr'=>[
                    'class'=> 'form-control',
                    'placeholder'=>'Nouveau mot de passe ...',
                ]
            ])
            ->add('confirmPassword', PasswordType::class,[
                'required' => true,
                'label'=>'Confirmation du mot de passe',
                'attr'=>[
                    'class'=> 'form-control',
                    'placeholder'=>'Confirmer le nouveau mot de passe ...',
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}

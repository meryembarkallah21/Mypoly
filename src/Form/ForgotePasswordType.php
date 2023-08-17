<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ForgotePasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class,[
                'required' => true,
                'label'=>'Votre adresse e-mail',
                'attr'=>[
                    'class'=> 'form-control',
                    'placeholder'=>'Donnez votre email......',
                ]
            ])
            ->add('newPassword', PasswordType::class,[
                'required' => true,
                'label'=>'Nouveau mot de passe',
                'attr'=>[
                    'class'=> 'form-control',
                    'placeholder'=>'Tapez votre nouveau mot de passe ...',
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

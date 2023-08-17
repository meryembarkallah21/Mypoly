<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichFileType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('email', EmailType::class, [
            'required'=>true,
            'label'  => "Adresse email:",
            'attr'=>[
                'class'=>'form-control',
            ]
        ])
        ->add('roles')
        ->add('password', PasswordType::class, [
            'required'=>true,
            'label'  => "Mot de passe :",
            'attr'=>[
                'class'=>'form-control',
            ]
        ])
        ->add('name', TextType::class, [
            'required'=>true,
            'label'  => "Nom d'utilisateur:",
            'attr'=>[
                'class'=>'form-control',
            ]
        ])
        ->add('tel', TextType::class, [
            'required'=>true,
            'label'  => "Numero telephone:",
            'attr'=>[
                'class'=>'form-control',
            ]
        ])
        ->add('avatarfile', VichFileType::class, [
            'required' => false,
            'download_label' => false,
            'allow_delete' => false, 
            'delete_label'   => false,
            'label' => 'photo de profil:',
            'label_attr' => [
                'class' => '',
            ],
            'attr' => [
                'class' => 'form-control',
            ],
        ])
        ->add('ville',TextType::class,['attr' => ['class' => 'form-control ville', 'placeholder' => 'entrer votre ville ici']])
        ->add('adresse',TextType::class,['attr' => ['class' => 'form-control', 'placeholder' => 'entrer votre adresse']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}


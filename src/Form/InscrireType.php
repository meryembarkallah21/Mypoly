<?php

namespace App\Form;

use App\Entity\Inscrire;
use App\Entity\Parcours;
use App\Entity\Years;
use App\Entity\Mention;


use Symfony\Component\Form\Extension\Core\Type\TextType;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscrireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('fichierVir', VichFileType::class, [
                'required' => false,
                'download_label' => false,
                'allow_delete' => false,
                'delete_label'   => false,
                'label' => 'photo du bordereau de versement:',
                'attr' => [
                    'class' => 'effet compte bordereau',
                ],

            ])
            ->add('reference',TextType::class, [
                'required' => false,
                'attr' => ['placeholder' => "ex: Mvola ref.12323546156"
                    , 'class' => 'effet mobileM text-white-50' ]])

            ->add('parcours' ,EntityType::class, ['class' => Parcours::class])
            ->add('Etudiant')
            ->add('mention',EntityType::class,[ 'class' => Mention::class ])
            ->add('year',EntityType::class ,[ 'class' => Years::class,'attr' => [ 'class' => 'title2' ]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Inscrire::class,
        ]);
    }
}

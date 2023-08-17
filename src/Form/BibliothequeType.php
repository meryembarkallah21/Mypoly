<?php

namespace App\Form;

use App\Entity\Bibliotheque;
use App\Entity\Ec;
use App\Entity\Semestre;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichFileType;

class BibliothequeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title',TextType::class,[
                'attr'=>[
                    'class'=>'form-control',
                ]
            ])
            ->add('type',ChoiceType::class,[
                'choices' =>[
                    'administration' => "Administration",
                    'sujet' => "Sujet d'examen",
                    'exercice' => "Exercice",
                    'corriger' => "Corrigé"
                ],
                'attr'=>[
                    'class'=>'form-control',
                ]
            ])
            ->add('fichier')
            ->add('description',CKEditorType::class,[
                'config'=>[
                    'uiColor'=>'#e2e2e2',
                    'toolbar'=>'full',
                    'height'=>'7em',
                    'removePlugins'=>'elementspath,save,div,image,spell,flash,iframe,link,smiley,tabletools,find,pagebreak,templates,about,maximize,show,blocks,newpage,language',
                    'removeButtons'=>'Preview,Source,Copy,Cut,Paste,Undo,Redo,Print,Form,TextField,Textarea,Button,SelectAll,NumberedList,BulletedList,Div,Table,PasteText,PasteFromWord,Select,HiddenField,Create,Checkbox,Radio',
                    'format_tags '=>'p;h1;h2;h3;h4;h5;h6;pre;address;div',
                    'required'=>true,
                ]
            ])
            ->add('doc',VichFileType::class, [
                'required' => false,
                'download_label' => false,
                'allow_delete' => false,
                'delete_label'   => false,
                'label' => 'Fichier',
                'label_attr' => [
                    'class' => '',
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('status')
            ->add('mention')
            ->add('ec',EntityType::class,[
                'class'=>Ec::class,
                'attr'=>[
                    'class'=>'form-control',
                ]
            ])
            ->add('Semestre',EntityType::class,[
                'class'=>Semestre::class,
                'attr'=>[
                    'class'=>'form-control',
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Bibliotheque::class,
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\Cours;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichFileType;

class CoursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre',TextType::class,[
                'attr'=>[
                    'class'=>'form-control'
                ]
            ])
            ->add('prix',IntegerType::class,[
                'attr'=>[
                    'class'=>'form-control'
                ]
            ])
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
            ->add('status')
            ->add('fichiercour', VichFileType::class, [
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
            ->add('fichierlivre', VichFileType::class, [
                'required' => false,
                'download_label' => false,
                'allow_delete' => false,
                'delete_label'   => false,
                'label' => 'FichierLivre',
                'label_attr' => [
                    'class' => '',
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Cours::class,
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\Calendrier;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CalendrierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('description',CKEditorType::class,[
                'config'=>[
                    'uiColor'=>'#e2e2e2',
                    'toolbar'=>'full',
                    'height'=>'5em',
                    'removePlugins'=>'elementspath,save,div,image,spell,flash,iframe,link,smiley,tabletools,find,pagebreak,templates,about,maximize,show,blocks,newpage,language',
                    'removeButtons'=>'Preview,Source,Copy,Cut,Paste,Undo,Redo,Print,Form,TextField,Textarea,Button,SelectAll,NumberedList,BulletedList,Div,Table,PasteText,PasteFromWord,Select,HiddenField,Create,Checkbox,Radio',
                    'format_tags '=>'p;h1;h2;h3;h4;h5;h6;pre;address;div',
                    'required'=>true,
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Calendrier::class,
        ]);
    }
}

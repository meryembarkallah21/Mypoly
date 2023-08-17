<?php

namespace App\Form;

use App\Entity\Calendrier;
use App\Entity\Ec;
use App\Entity\Semestre;
use Doctrine\DBAL\Types\DateTimeImmutableType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CalendarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title',TextType::class,[
                'attr'=>[
                    'class'=>'form-control',
                ]
            ])
            ->add('start',DateTimeType::class)
            ->add('end',DateTimeType::class)
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
            ->add('allDay')
            ->add('backgroundColor',ColorType::class,[
                'attr'=>[
                    'class'=>'form-control',
                ]
            ])
            ->add('borderColor',ColorType::class,[
                'attr'=>[
                    'class'=>'form-control',
                ]
            ])
            ->add('textColor',ColorType::class,[
                'attr'=>[
                    'class'=>'form-control',
                ]
            ])
            ->add('user')
            ->add('ec',EntityType::class,[
                'class'=>Ec::class,
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
            ->add('publier')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Calendrier::class,
        ]);
    }
}

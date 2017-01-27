<?php

namespace EleveBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UpdateCoordonnees extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('prospectNom',TextType::class,array('label'=>'Nom'))
                ->add('prospectDateNaissance',DateType::class,
                    array(
                        'label'=>'Date de naissance',
                        'widget' => 'single_text',
                        'format' => 'dd/MM/yyyy',
                        'attr'=>array('type'=>'date'),
                        'html5'=>true
                 ))
                ->add('prospectEmail',TextType::class,array('label'=>'Adresse email','required'=>false))
                ->add('prospectAdresse3',TextType::class,array('label'=>'Adresse postale'))
                ->add('prospectCp',TextType::class,array('label'=>'Code Postal'))
                ->add('prospectVille',TextType::class,array('label'=>'Ville'))
                ->add('prospectTeldomicile',TextType::class,array('label'=>'Téléphone Fixe','required'=>false))
                ->add('prospectTelportable',TextType::class,array('label'=>'Téléphone Portable','required'=>false))
                ->add('prospectTeltravail',TextType::class,array(
                    'label'=>'Téléphone Professionnel',
                    'required'=>false
                ))
                ->add('prospectEtude',TextType::class,array('label'=>'Niveau D\'étude'))
        ;
                
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EleveBundle\Entity\EntityCulture\Eleve'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'elevebundle_updatecoordonnees';
    }


}

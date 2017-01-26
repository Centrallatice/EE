<?php

namespace EleveBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class QuestionnaireSatisfactionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomOrganisme',TextType::class,array('label'=>'Nom de l\'organisme de formation','attr'=>array('readonly'=>true,'class'=>'novalidate')))
                ->add('formation',TextType::class,array('label'=>'Intitulé de la formation','attr'=>array('readonly'=>true,'class'=>'novalidate')))
                ->add('periodeDebut',DateType::class,array('widget' => 'single_text','format' => 'dd/MM/yyyy',))
                ->add('periodeFin',DateType::class,array('widget' => 'single_text','format' => 'dd/MM/yyyy',))
                ->add('dureeFormation',IntegerType::class,array('label'=>'Durée'))
                ->add('offreSatisfaitOrganisme',  ChoiceType::class,array(
                    'choices' => array(
                        'Pas du tout satisfait'=>1,
                        'Insuffisant'=>2,
                        'Peu satisfait'=>3,
                        'Très satisfait'=>4
                    ),
                    'label'=>'- De votre organisme de formation :',
                    'expanded'=>true,
                    'multiple'=>false,
                 ))
                ->add('offreSatisfaitFormation',  ChoiceType::class,array(
                    'choices' => array(
                        'Pas du tout satisfait'=>1,
                        'Insuffisant'=>2,
                        'Peu satisfait'=>3,
                        'Très satisfait'=>4
                    ),
                    'label'=>'- De la formation qui vous a été dispensée :',
                    'expanded'=>true,
                    'multiple'=>false
                ))
                ->add('offrePertinenceProjet',  ChoiceType::class,array(
                    'choices' => array(
                        'Pas du tout satisfait'=>1,
                        'Insuffisant'=>2,
                        'Peu satisfait'=>3,
                        'Très satisfait'=>4
                    ),
                    'label'=>'- à votre projet professionnel ?  ',
                    'expanded'=>true,
                    'multiple'=>false
                ))
                ->add('pertinenceAttentes',  ChoiceType::class,array(
                    'choices' => array(
                        'Pas du tout satisfait'=>1,
                        'Insuffisant'=>2,
                        'Peu satisfait'=>3,
                        'Très satisfait'=>4
                    ),
                    'label'=>'- à vos attentes',
                    'expanded'=>true,
                    'multiple'=>false
                ))
                ->add('OffreRemarque', TextareaType::class,array('label'=>'Avez-vous des remarques ou des suggestions ?','attr'=>array("required"=>false)))
                ->add('relationEchanges',  ChoiceType::class,array(
                    'choices' => array(
                        'Pas du tout satisfait'=>1,
                        'Insuffisant'=>2,
                        'Peu satisfait'=>3,
                        'Très satisfait'=>4
                    ),
                    'label'=>'- des échanges avec votre organisme de formation ?  Il peut s\'agir d\'échanges téléphoniques ou par courrier, d\'entretiens...',
                    'expanded'=>true,
                    'multiple'=>false
                ))
                ->add('relationAdequationCours',  ChoiceType::class,array(
                    'choices' => array(
                        'Pas du tout satisfait'=>1,
                        'Insuffisant'=>2,
                        'Peu satisfait'=>3,
                        'Très satisfait'=>4
                    ),
                    'label'=>'- de l\'adéquation des cours avec votre projet professionnel ?  ',
                    'expanded'=>true,
                    'multiple'=>false
                ))
                ->add('relationDelaisSupport',  ChoiceType::class,array(
                    'choices' => array(
                        'Pas du tout satisfait'=>1,
                        'Insuffisant'=>2,
                        'Peu satisfait'=>3,
                        'Très satisfait'=>4
                    ),
                    'label'=>'- de vos supports de cours ?   ',
                    'expanded'=>true,
                    'multiple'=>false
                ))
                ->add('relationRespectDelaisCorrection',  ChoiceType::class,array(
                    'choices' => array(
                        'Pas du tout satisfait'=>1,
                        'Insuffisant'=>2,
                        'Peu satisfait'=>3,
                        'Très satisfait'=>4
                    ),
                    'label'=>'- Êtes-vous satisfait du respect des délais de corrections des devoirs ?  ',
                    'expanded'=>true,
                    'multiple'=>false
                ))
                ->add('relationQualiteCorrection',  ChoiceType::class,array(
                    'choices' => array(
                        'Pas du tout satisfait'=>1,
                        'Insuffisant'=>2,
                        'Peu satisfait'=>3,
                        'Très satisfait'=>4
                    ),
                    'label'=>false,
                    'expanded'=>true,
                    'multiple'=>false
                ))
                ->add('remarqueRelation', TextareaType::class,array('label'=>'Avez-vous des remarques ou des suggestions ?','attr'=>array("required"=>false)))
                ->add('deroulementSupportUtilises',  ChoiceType::class,array(
                    'choices' => array(
                        'Pas du tout satisfait'=>1,
                        'Insuffisant'=>2,
                        'Peu satisfait'=>3,
                        'Très satisfait'=>4
                    ),
                    'label'=>'- par les supports pédagogiques utilisés (livres, application, e-learning...) ? ',
                    'expanded'=>true,
                    'multiple'=>false
                ))
                ->add('deroulementSupportContenu',  ChoiceType::class,array(
                    'choices' => array(
                        'Pas du tout satisfait'=>1,
                        'Insuffisant'=>2,
                        'Peu satisfait'=>3,
                        'Très satisfait'=>4
                    ),
                    'label'=>'- par le contenu des supports pédagogiques (clarté, pertinence...) ?',
                    'expanded'=>true,
                    'multiple'=>false
                ))
                ->add('deroulementMoyenContact',  ChoiceType::class,array(
                    'choices' => array(
                        'Pas du tout satisfait'=>1,
                        'Insuffisant'=>2,
                        'Peu satisfait'=>3,
                        'Très satisfait'=>4
                    ),
                    'label'=>false,
                    'expanded'=>true,
                    'multiple'=>false
                ))
                ->add('deroulementSuiviPedagogique',  ChoiceType::class,array(
                    'choices' => array(
                        'Pas du tout satisfait'=>1,
                        'Insuffisant'=>2,
                        'Peu satisfait'=>3,
                        'Très satisfait'=>4
                    ),
                    'label'=>false,
                    'expanded'=>true,
                    'multiple'=>false
                ))
                ->add('deroulementModeEvaluation',  ChoiceType::class,array(
                    'choices' => array(
                        'Pas du tout satisfait'=>1,
                        'Insuffisant'=>2,
                        'Peu satisfait'=>3,
                        'Très satisfait'=>4
                    ),
                    'label'=>false,
                    'expanded'=>true,
                    'multiple'=>false
                ))
                ->add('deroulementQualiteContactProf',  ChoiceType::class,array(
                    'choices' => array(
                        'Pas du tout satisfait'=>1,
                        'Insuffisant'=>2,
                        'Peu satisfait'=>3,
                        'Très satisfait'=>4
                    ),
                    'label'=>'avec les professeurs ? ',
                    'expanded'=>true,
                    'multiple'=>false
                ))
                ->add('deroulementQualiteContactAss',  ChoiceType::class,array(
                    'choices' => array(
                        'Pas du tout satisfait'=>1,
                        'Insuffisant'=>2,
                        'Peu satisfait'=>3,
                        'Très satisfait'=>4
                    ),
                    'label'=>'avec les assistantes pédagogiques ? ',
                    'expanded'=>true,
                    'multiple'=>false
                ))
                ->add('deroulementCompetencesProf',  ChoiceType::class,array(
                    'choices' => array(
                        'Pas du tout satisfait'=>1,
                        'Insuffisant'=>2,
                        'Peu satisfait'=>3,
                        'Très satisfait'=>4
                    ),
                    'label'=>'des professeurs ? ',
                    'expanded'=>true,
                    'multiple'=>false
                ))
                ->add('deroulementCompetencesAss',  ChoiceType::class,array(
                    'choices' => array(
                        'Pas du tout satisfait'=>1,
                        'Insuffisant'=>2,
                        'Peu satisfait'=>3,
                        'Très satisfait'=>4
                    ),
                    'label'=>'des assistantes pédagogiques ?',
                    'expanded'=>true,
                    'multiple'=>false
                ))
                ->add('deroulementRemarque', TextareaType::class,array('label'=>'Avez-vous des remarques ou des suggestions ?','attr'=>array("required"=>false)))
                ->add('aProposNouveauAppel',ChoiceType::class,array(
                    'choices' => array(
                        'Oui'=>1,
                        'Non'=>0
                    ),
                    'label'=>'Seriez-vous prêts à faire de nouveau appel à notre organisme de formation ?',
                    'expanded'=>true,
                    'multiple'=>false
                ))
                ->add('aProposNouveauAppelComm',TextType::class,array('label'=>'Si non, pourquoi ?'))
                ->add('aProposRecommandation',ChoiceType::class,array(
                    'choices' => array(
                        'Oui'=>1,
                        'Non'=>0
                    ),
                    'label'=>'Seriez-vous prêts à recommander notre organisme de formation à votre entourage ?',
                    'expanded'=>true,
                    'multiple'=>false
                ))
                ->add('aProposRecommandationComm',TextType::class,array('label'=>'Si non, pourquoi ?'))
                ->add('aProposRemarque', TextareaType::class,array('label'=>'Avez-vous des remarques ou des suggestions ?',"required"=>false));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EleveBundle\Entity\EntityMain\QuestionnaireSatisfaction'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'elevebundle_questionnairesatisfaction';
    }


}

<?php

namespace UserBundle\Form\Type;
/**
 * Description of RegistrationType
 *
 * @author sylvain.dupont
 */
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityManager;

class UserEditType extends AbstractType
{
    protected $entityManager; 
    public function __construct(EntityManager $entityManager) { 
        $this->entityManager = $entityManager;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $em = $this->entityManager;
        $prestas = $em->getRepository('PrestatairesBundle:VAPrestataires')->findAll();
        $groups = $em->getRepository('UserBundle:Group')->findAll();

        $builder->add('groups',
                'entity', 
                array(
                    'class' => 'UserBundle:Group',
                    'label' => 'Groupe associé',
                    'choices' => $groups,
                    'expanded' => true,
                    'multiple' => true,
                    'mapped' => true
                )
        );
        $builder->add('prestataire',
                'entity', 
                array(
                    'class' => 'PrestatairesBundle:VAPrestataires',
                    'label' => 'Prestataire',
                    'property' => 'Prestataire_Code'
                )
        );
        $builder->add('nom');
        $builder->add('email');
        $builder->add('prenom');
        
    }

    
}

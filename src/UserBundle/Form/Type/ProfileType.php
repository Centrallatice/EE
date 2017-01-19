<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace UserBundle\Form\Type;

/**
 * Description of ProfileType
 *
 * @author sylvain.dupont
 */
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityManager;

class ProfileType extends AbstractType{
    
    protected $entityManager; 
    
    public function __construct(EntityManager $entityManager) { 
        $this->entityManager = $entityManager;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $em = $this->entityManager;
        $prestas = $em->getRepository('PrestatairesBundle:VAPrestataires')->findAll();
        
        $builder->add('groups',
                'entity', 
                array(
                    'class' => 'UserBundle:Group',
                    'label' => 'Groupe associé',
                    'property' => 'name'
                )
        );
        $builder->add('nom');
        $builder->add('prenom');
        $builder->add('codeProfil');
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\ProfileFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_profile';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}

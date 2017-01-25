<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace EleveBundle\Service;


use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\Container;
/**
 * Description of FicheService
 *
 * @author sylvain.dupont
 */
class MessagerieService {
    public function __construct(EntityManager $em,Container $service,$securityContext) {
        $this->em = $em;
        $this->container_service = $service;
        $this->user = $securityContext->getToken()->getUser();
    } 
    
    public function getNbrNonLu(){
       
        $qb = $this->em->createQueryBuilder();
        $qb->select('count(Ec.numordre)');
        $qb->from('EleveBundle:Courrieretatlecture','Ec');
        $qb->where("Ec.numordre = :n");
        $qb->setParameter("n", $this->user->getCommandesNoordre());

        $count = $qb->getQuery()->getSingleScalarResult();
        return $count;
    }
}

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
class FilterByMarqueService {
    public function __construct(EntityManager $em,Container $service) {
        $this->em = $em;
        $this->container_service = $service;
    } 
    
    public function getMarqueValide($f){
        $sql = "
            SELECT TOP 1
                marque
            FROM 
                ".$this->container_service->getParameter('Formations')."
            WHERE 
                formation='".$f."'";
        $stmt =  $this->em->getConnection()->prepare($sql);
        if($stmt->execute()):
            return $stmt->fetch();
        endif;
    }
    public function getDescriptionFormation($f){
        $sql = "
            SELECT TOP 1
                formation_libelle
            FROM 
                ".$this->container_service->getParameter('Formations')."
            WHERE 
                formation='".$f."'";
        $stmt =  $this->em->getConnection()->prepare($sql);
        if($stmt->execute()):
            return $stmt->fetch();
        endif;
    }
}

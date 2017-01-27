<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace EleveBundle\Service;
use Symfony\Component\DependencyInjection\Container;

/**
 * Description of EleveService
 *
 * @author Sylvain
 */
class EleveService {
    
   public function __construct(Container $service,$securityContext) {
        $this->container = $service;
        $this->user = $securityContext->getToken()->getUser();
    } 
    
    public function getAllDatas(){
        $Profession = $this->container->get('doctrine')->getManager("iconet")->getRepository("EleveBundle\Entity\EntityIconet\Professions")->find($this->user->getProspectProfession());
        $Etude = $this->container->get('doctrine')->getManager("iconet")->getRepository("EleveBundle\Entity\EntityIconet\Etudes")->find($this->user->getProspectEtude());
        $Formation = $this->container->get('doctrine')->getManager($this->container->getParameter("data_source"))->getRepository("EleveBundle\Entity\EntityMain\Formations")->findOneBy(array("formation"=>$this->user->getCommandeFormation()));
        $Assistante = $this->container->get('doctrine')->getManager("iconet")->getRepository("EleveBundle\Entity\EntityIconet\Agents")->find($this->user->getAssistante());
        return array(
            "Profession"=>$Profession,
            "Etude"=>$Etude,
            "Formation"=>$Formation,
            "Assistante"=>$Assistante
        );
    }
}

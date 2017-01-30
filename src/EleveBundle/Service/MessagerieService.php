<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace EleveBundle\Service;


use Symfony\Component\DependencyInjection\Container;
/**
 * Description of FicheService
 *
 * @author sylvain.dupont
 */
class MessagerieService {
    public function __construct(Container $service,$securityContext) {
        
        $this->container = $service;
        $this->user = $securityContext->getToken()->getUser();
    } 
    public function getListesCourriers(){
        $CourriersNonLu = $this->container->get('doctrine')->getManager($this->container->getParameter("data_source"))->getRepository("EleveBundle\Entity\EntityMain\Courrieretatlecture")->findBy(array("numordre"=>$this->user,"etatlecture"=>0),array("etatlecture"=>"ASC"));
        $CourriersLu = $this->container->get('doctrine')->getManager($this->container->getParameter("data_source"))->getRepository("EleveBundle\Entity\EntityMain\Courrieretatlecture")->findBy(array("numordre"=>$this->user,"etatlecture"=>1),array("etatlecture"=>"ASC"));
        $CourriersAr = $this->container->get('doctrine')->getManager($this->container->getParameter("data_source"))->getRepository("EleveBundle\Entity\EntityMain\Courrieretatlecture")->findBy(array("numordre"=>$this->user,"etatlecture"=>2),array("etatlecture"=>"ASC"));
        foreach($CourriersNonLu as $c):
            $c->getCodecourrier()->setTitre(str_replace("''","'",$c->getCodecourrier()->getTitre()));
        endforeach;
        foreach($CourriersLu as $c):
            $c->getCodecourrier()->setTitre(str_replace("''","'",$c->getCodecourrier()->getTitre()));
        endforeach;
        foreach($CourriersAr as $c):
            $c->getCodecourrier()->setTitre(str_replace("''","'",$c->getCodecourrier()->getTitre()));
        endforeach;
        
        $Tickets = $this->container->get('doctrine')->getManager($this->container->getParameter("data_source"))->getRepository("EleveBundle\Entity\EntityMain\AffectationTicket")->findBy(array("numOrdre"=>$this->user,"actif"=>true),array("dateCreation"=>"DESC"));        
        return array(
            "CourriersLu"=>$CourriersLu,
            "CourriersNonLu"=>$CourriersNonLu,
            "CourriersAr"=>$CourriersAr,
            "Tickets"=>$Tickets
        );
    }
    public function getNbrNonLu(){
        $qb = $this->container->get('doctrine')->getManager($this->container->getParameter("data_source"))->createQueryBuilder();
        $qb->select('count(Ec.numordre)');
        $qb->from('EleveBundle\Entity\EntityMain\Courrieretatlecture','Ec');
        $qb->where("Ec.numordre = :n");
        $qb->andWhere("Ec.etatlecture=:e");
        $qb->setParameter("n", $this->user->getCommandesNoordre());
        $qb->setParameter("e", 0);

        $count = $qb->getQuery()->getSingleScalarResult();
        return $count;
    }
}

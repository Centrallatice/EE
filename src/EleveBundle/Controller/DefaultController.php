<?php

namespace EleveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $securityContext = $this->container->get('security.authorization_checker');
        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->render('EleveBundle:Default:index.html.twig');
        }
        else{
            return $this->redirectToRoute("login");
        }
    }
    
    /**
     * @Route("/getMessages")
     */
    public function getMessagesAction()
    {
        $CourriersLu = $this->getDoctrine()->getRepository("EleveBundle:Courrieretatlecture")->findBy(array("numordre"=>$this->getUser(),"etatlecture"=>0),array("etatlecture"=>"ASC"));
        $CourriersNonLu = $this->getDoctrine()->getRepository("EleveBundle:Courrieretatlecture")->findBy(array("numordre"=>$this->getUser(),"etatlecture"=>1),array("etatlecture"=>"ASC"));
        $CourriersAr = $this->getDoctrine()->getRepository("EleveBundle:Courrieretatlecture")->findBy(array("numordre"=>$this->getUser(),"etatlecture"=>2),array("etatlecture"=>"ASC"));
        $Tickets = $this->getDoctrine()->getRepository("EleveBundle:AffectationTicket")->findBy(array("numOrdre"=>$this->getUser(),"actif"=>true),array("dateCreation"=>"DESC"));        
        return $this->render('EleveBundle:Courriers:index.html.twig',array(
            "CourriersLu"=>$CourriersLu,
            "CourriersNonLu"=>$CourriersNonLu,
            "CourriersAr"=>$CourriersAr,
            "Tickets"=>$Tickets
        ));
    }
    /**
     * @Route("/getTicket/{id}")
     */
    public function getTicketAction($id)
    {
        $Ticket = $this->getDoctrine()->getRepository("EleveBundle:AffectationTicket")->find($id);
        $HTicket = $this->getDoctrine()->getRepository("EleveBundle:HistoriqueTicket")->findBy(array("idAffectation"=>$Ticket),array("dateAction"=>"ASC"));
        return $this->render('EleveBundle:Courriers:ticket.html.twig',array(
            "Ticket"=>$Ticket,
            "HTicket"=>$HTicket
        ));
    }
    
    /**
     * @Route("/Ajax/Messages/top")
     */
    public function getMessagesToolbarAction()
    {
        $datas=$this->container->get('services.messagerie')->getNbrNonLu();
        return new JsonResponse(array("success"=>true,"data"=>$datas));
    }
}

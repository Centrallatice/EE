<?php

namespace EleveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

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
     * @Route("/my")
     */
    public function profilAction(Request $request)
    {
        $datas=$this->container->get('services.eleves')->getAllDatas();
        $form = $this->createForm('EleveBundle\Form\UpdateCoordonnees', $this->getUser());
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $message = \Swift_Message::newInstance()
                ->setSubject('Hello Email')
                ->setFrom('sylvain.dupont@culture-formation.fr')
                ->setTo('dupont.sylvain59@gmail.com')
                ->setBody('You should see me from the profiler!') // utiliser this->render
            ;
            $result = $this->get('mailer')->send($message);
            return new JsonResponse(array("success"=>$result));
        }
        return $this->render('EleveBundle:security:profil.html.twig',
            array(
                'donnees'=>$datas,
                'form' => $form->createView()
        ));
    }
    
    /**
     * @Route("/paiements")
     */
    public function paiementsAction()
    {
        return $this->render('EleveBundle:Paiements:index.html.twig');
    }
    
    /**
     * @Route("/getMessages")
     */
    public function getMessagesAction()
    {
        $datas=$this->container->get('services.messagerie')->getListesCourriers();
        return $this->render('EleveBundle:Courriers:index.html.twig',$datas);
    }
    /**
     * @Route("/getTicket/{id}")
     */
    public function getTicketAction($id)
    {
        $Ticket = $this->getDoctrine()->getManager($this->container->getParameter("data_source"))->getRepository("EleveBundle\Entity\EntityMain\AffectationTicket")->find($id);
        $HTicket = $this->getDoctrine()->getManager($this->container->getParameter("data_source"))->getRepository("EleveBundle\Entity\EntityMain\HistoriqueTicket")->findBy(array("idAffectation"=>$Ticket),array("dateAction"=>"ASC"));
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

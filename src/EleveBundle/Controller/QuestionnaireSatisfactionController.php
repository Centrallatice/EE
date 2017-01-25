<?php

namespace EleveBundle\Controller;

use EleveBundle\Entity\QuestionnaireSatisfaction;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Questionnairesatisfaction controller.
 *
 * @Route("questionnairesatisfaction")
 */
class QuestionnaireSatisfactionController extends Controller
{
    /**
     * @Route("/", name="questionnairesatisfaction_index")
     * @Method({"GET","POST"})
     */
    public function indexAction(Request $request)
    {
        $questionnaireSatisfaction = new Questionnairesatisfaction();
        $user = $this->getUser();
        $descriptionFormation=$this->container->get('services.filtre_marque')->getDescriptionFormation($user->getFormationCode());
        
        $form = $this->createForm('EleveBundle\Form\QuestionnaireSatisfactionType', $questionnaireSatisfaction);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $questionnaireSatisfaction->setFormation($user->getCommandeFormation());
            $em->persist($questionnaireSatisfaction);
            $em->flush($questionnaireSatisfaction);

            return $this->redirectToRoute('questionnairesatisfaction_show', array('id' => $questionnaireSatisfaction->getId()));
        }

        return $this->render('EleveBundle:Satisfactions:new.html.twig', array(
            'questionnaireSatisfaction' => $questionnaireSatisfaction,
            'form' => $form->createView(),
            'descriptionFormation' => $descriptionFormation
        ));
    }


    /**
     * Finds and displays a questionnaireSatisfaction entity.
     *
     * @Route("/{id}", name="questionnairesatisfaction_show")
     * @Method("GET")
     */
    public function showAction(QuestionnaireSatisfaction $questionnaireSatisfaction)
    {
        $deleteForm = $this->createDeleteForm($questionnaireSatisfaction);

        return $this->render('EleveBundle:Satisfactions:show.html.twig', array(
            'questionnaireSatisfaction' => $questionnaireSatisfaction
        ));
    }

    /**
     * Displays a form to edit an existing questionnaireSatisfaction entity.
     *
     * @Route("/{id}/edit", name="questionnairesatisfaction_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, QuestionnaireSatisfaction $questionnaireSatisfaction)
    {
        $deleteForm = $this->createDeleteForm($questionnaireSatisfaction);
        $editForm = $this->createForm('EleveBundle\Form\QuestionnaireSatisfactionType', $questionnaireSatisfaction);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('questionnairesatisfaction_edit', array('id' => $questionnaireSatisfaction->getId()));
        }

        return $this->render('EleveBundle:Satisfactions:edit.html.twig', array(
            'questionnaireSatisfaction' => $questionnaireSatisfaction,
            'edit_form' => $editForm->createView()
        ));
    }

}

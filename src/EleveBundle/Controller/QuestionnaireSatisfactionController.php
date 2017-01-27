<?php

namespace EleveBundle\Controller;

use EleveBundle\Entity\EntityMain\QuestionnaireSatisfaction;
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
        $user = $this->getUser();
        $existeQuestionnaire = $this->getDoctrine()->getRepository("EleveBundle\Entity\EntityMain\QuestionnaireSatisfaction")->findOneBy(array("numOrdre"=>$user));
        if($existeQuestionnaire==null):
            $questionnaireSatisfaction = new Questionnairesatisfaction();
            $formation = $this->getDoctrine()->getManager($this->getParameter("data_source"))->getRepository("EleveBundle\Entity\EntityFormations\Formations")->findOneBy(array("formation"=>$user->getFormationCode()));
            $form = $this->createForm('EleveBundle\Form\QuestionnaireSatisfactionType', $questionnaireSatisfaction);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $questionnaireSatisfaction->setFormation($user->getCommandeFormation());
                $questionnaireSatisfaction->setNumOrdre($user);
                $em->persist($questionnaireSatisfaction);
                $em->flush($questionnaireSatisfaction);

                return $this->redirectToRoute('questionnairesatisfaction_show', array('id' => $questionnaireSatisfaction->getId()));
            }

            return $this->render('EleveBundle:Satisfactions:new.html.twig', array(
                'questionnaireSatisfaction' => $questionnaireSatisfaction,
                'form' => $form->createView(),
                'descriptionFormation' => $formation->getFormationLibelle()
            ));
        else:
            return $this->redirectToRoute('questionnairesatisfaction_show', array('id' => $existeQuestionnaire->getId()));
        endif;
    }


    /**
     * Finds and displays a questionnaireSatisfaction entity.
     *
     * @Route("/{id}", name="questionnairesatisfaction_show")
     * @Method("GET")
     */
    public function showAction(QuestionnaireSatisfaction $questionnaireSatisfaction)
    {
//        $deleteForm = $this->createDeleteForm($questionnaireSatisfaction);

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

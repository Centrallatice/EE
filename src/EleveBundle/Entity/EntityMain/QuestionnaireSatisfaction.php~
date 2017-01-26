<?php

namespace EleveBundle\Entity\EntityMain;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionnaireSatisfaction
 *
 * @ORM\Table(name="EE_Questionnaire_Satisfaction")
 * @ORM\Entity(repositoryClass="EleveBundle\Repository\EntityMain\QuestionnaireSatisfactionRepository")
 */
class QuestionnaireSatisfaction
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
    * @ORM\ManyToOne(targetEntity="Eleve", inversedBy="numordre")
    * @ORM\JoinColumn(name="numOrdre", referencedColumnName="Commandes_NoOrdre", nullable=false)
     */
    private $numOrdre;
    
    /**
     * @var string
     *
     * @ORM\Column(name="NomOrganisme", type="string", length=255, options={"comment":"Nom de l'organisme de formation"})
     */
    private $nomOrganisme;

    /**
     * @var string
     *
     * @ORM\Column(name="Formation", type="string", length=255)
     */
    private $formation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PeriodeDebut", type="datetime")
     */
    private $periodeDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PeriodeFin", type="datetime")
     */
    private $periodeFin;

    /**
     * @var float
     *
     * @ORM\Column(name="DureeFormation", type="float")
     */
    private $dureeFormation;

    /**
     * @var int
     *
     * @ORM\Column(name="OffreSatisfaitOrganisme", type="integer")
     */
    private $offreSatisfaitOrganisme;


    /**
     * @var int
     *
     * @ORM\Column(name="OffreSatisfaitFormation", type="integer")
     */
    private $offreSatisfaitFormation;


    /**
     * @var int
     *
     * @ORM\Column(name="OffrePertinenceProjet", type="integer")
     */
    private $offrePertinenceProjet;


    /**
     * @var int
     *
     * @ORM\Column(name="OffrePertinenceAttentes", type="integer")
     */
    private $pertinenceAttentes;


    /**
     * @var string
     *
     * @ORM\Column(name="OffreRemarque", type="text", nullable=true)
     */
    private $OffreRemarque;

    /**
     * @var int
     *
     * @ORM\Column(name="RelationEchanges", type="integer")
     */
    private $relationEchanges;


    /**
     * @var int
     *
     * @ORM\Column(name="RelationAdequationCours", type="integer")
     */
    private $relationAdequationCours;

    /**
     * @var int
     *
     * @ORM\Column(name="RelationDelaisSupport", type="integer")
     */
    private $relationDelaisSupport;

    /**
     * @var int
     *
     * @ORM\Column(name="RelationRespectDelaisCorrection", type="integer")
     */
    private $relationRespectDelaisCorrection;

    /**
     * @var int
     *
     * @ORM\Column(name="RelationQualiteCorrection", type="integer")
     */
    private $relationQualiteCorrection;

    /**
     * @var string
     *
     * @ORM\Column(name="RemarqueRelation", type="text", nullable=true)
     */
    private $remarqueRelation;

    /**
     * @var int
     *
     * @ORM\Column(name="DeroulementSupportUtilises", type="integer")
     */
    private $deroulementSupportUtilises;


    /**
     * @var int
     *
     * @ORM\Column(name="DeroulementSupportContenu", type="integer")
     */
    private $deroulementSupportContenu;

    /**
     * @var int
     *
     * @ORM\Column(name="DeroulementMoyenContact", type="integer")
     */
    private $deroulementMoyenContact;

    /**
     * @var int
     *
     * @ORM\Column(name="DeroulementSuiviPedagogique", type="integer")
     */
    private $deroulementSuiviPedagogique;

    /**
     * @var int
     *
     * @ORM\Column(name="DeroulementModeEvaluation", type="integer")
     */
    private $deroulementModeEvaluation;

    /**
     * @var int
     *
     * @ORM\Column(name="DeroulementQualiteContactProf", type="integer")
     */
    private $deroulementQualiteContactProf;

    /**
     * @var int
     *
     * @ORM\Column(name="DeroulementQualiteContactAss", type="integer")
     */
    private $deroulementQualiteContactAss;

    /**
     * @var int
     *
     * @ORM\Column(name="DeroulementCompetencesProf", type="integer")
     */
    private $deroulementCompetencesProf;

    /**
     * @var int
     *
     * @ORM\Column(name="DeroulementCompetencesAss", type="integer")
     */
    private $deroulementCompetencesAss;

    /**
     * @var string
     *
     * @ORM\Column(name="DeroulementRemarque", type="text", nullable=true)
     */
    private $deroulementRemarque;

    /**
     * @var bool
     *
     * @ORM\Column(name="AProposNouveauAppel", type="boolean")
     */
    private $aProposNouveauAppel;

    /**
     * @var string
     *
     * @ORM\Column(name="AProposNouveauAppelComm", type="text", nullable=true)
     */
    private $aProposNouveauAppelComm;

    /**
     * @var int
     *
     * @ORM\Column(name="AProposRecommandation", type="boolean")
     */
    private $aProposRecommandation;
    
    /**
     * @var string
     *
     * @ORM\Column(name="AProposRecommandationComm", type="text", nullable=true)
     */
    private $aProposRecommandationComm;
    /**
     * @var string
     *
     * @ORM\Column(name="AProposRemarque", type="text", nullable=true)
     */
    private $aProposRemarque;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomOrganisme
     *
     * @param string $nomOrganisme
     *
     * @return QuestionnaireSatisfaction
     */
    public function setNomOrganisme($nomOrganisme)
    {
        $this->nomOrganisme = $nomOrganisme;

        return $this;
    }

    /**
     * Get nomOrganisme
     *
     * @return string
     */
    public function getNomOrganisme()
    {
        return $this->nomOrganisme;
    }

    /**
     * Set formation
     *
     * @param string $formation
     *
     * @return QuestionnaireSatisfaction
     */
    public function setFormation($formation)
    {
        $this->formation = $formation;

        return $this;
    }

    /**
     * Get formation
     *
     * @return string
     */
    public function getFormation()
    {
        return $this->formation;
    }

    /**
     * Set periodeDebut
     *
     * @param \DateTime $periodeDebut
     *
     * @return QuestionnaireSatisfaction
     */
    public function setPeriodeDebut($periodeDebut)
    {
        $this->periodeDebut = $periodeDebut;

        return $this;
    }

    /**
     * Get periodeDebut
     *
     * @return \DateTime
     */
    public function getPeriodeDebut()
    {
        return $this->periodeDebut;
    }

    /**
     * Set periodeFin
     *
     * @param \DateTime $periodeFin
     *
     * @return QuestionnaireSatisfaction
     */
    public function setPeriodeFin($periodeFin)
    {
        $this->periodeFin = $periodeFin;

        return $this;
    }

    /**
     * Get periodeFin
     *
     * @return \DateTime
     */
    public function getPeriodeFin()
    {
        return $this->periodeFin;
    }

    /**
     * Set dureeFormation
     *
     * @param float $dureeFormation
     *
     * @return QuestionnaireSatisfaction
     */
    public function setDureeFormation($dureeFormation)
    {
        $this->dureeFormation = $dureeFormation;

        return $this;
    }

    /**
     * Get dureeFormation
     *
     * @return float
     */
    public function getDureeFormation()
    {
        return $this->dureeFormation;
    }

    /**
     * Set offreSatisfaitOrganisme
     *
     * @param integer $offreSatisfaitOrganisme
     *
     * @return QuestionnaireSatisfaction
     */
    public function setOffreSatisfaitOrganisme($offreSatisfaitOrganisme)
    {
        $this->offreSatisfaitOrganisme = $offreSatisfaitOrganisme;

        return $this;
    }

    /**
     * Get offreSatisfaitOrganisme
     *
     * @return integer
     */
    public function getOffreSatisfaitOrganisme()
    {
        return $this->offreSatisfaitOrganisme;
    }

    /**
     * Set offreSatisfaitFormation
     *
     * @param integer $offreSatisfaitFormation
     *
     * @return QuestionnaireSatisfaction
     */
    public function setOffreSatisfaitFormation($offreSatisfaitFormation)
    {
        $this->offreSatisfaitFormation = $offreSatisfaitFormation;

        return $this;
    }

    /**
     * Get offreSatisfaitFormation
     *
     * @return integer
     */
    public function getOffreSatisfaitFormation()
    {
        return $this->offreSatisfaitFormation;
    }

    /**
     * Set offrePertinenceProjet
     *
     * @param integer $offrePertinenceProjet
     *
     * @return QuestionnaireSatisfaction
     */
    public function setOffrePertinenceProjet($offrePertinenceProjet)
    {
        $this->offrePertinenceProjet = $offrePertinenceProjet;

        return $this;
    }

    /**
     * Get offrePertinenceProjet
     *
     * @return integer
     */
    public function getOffrePertinenceProjet()
    {
        return $this->offrePertinenceProjet;
    }

    /**
     * Set pertinenceAttentes
     *
     * @param integer $pertinenceAttentes
     *
     * @return QuestionnaireSatisfaction
     */
    public function setPertinenceAttentes($pertinenceAttentes)
    {
        $this->pertinenceAttentes = $pertinenceAttentes;

        return $this;
    }

    /**
     * Get pertinenceAttentes
     *
     * @return integer
     */
    public function getPertinenceAttentes()
    {
        return $this->pertinenceAttentes;
    }

    /**
     * Set offreRemarque
     *
     * @param string $offreRemarque
     *
     * @return QuestionnaireSatisfaction
     */
    public function setOffreRemarque($offreRemarque)
    {
        $this->OffreRemarque = $offreRemarque;

        return $this;
    }

    /**
     * Get offreRemarque
     *
     * @return string
     */
    public function getOffreRemarque()
    {
        return $this->OffreRemarque;
    }

    /**
     * Set relationEchanges
     *
     * @param integer $relationEchanges
     *
     * @return QuestionnaireSatisfaction
     */
    public function setRelationEchanges($relationEchanges)
    {
        $this->relationEchanges = $relationEchanges;

        return $this;
    }

    /**
     * Get relationEchanges
     *
     * @return integer
     */
    public function getRelationEchanges()
    {
        return $this->relationEchanges;
    }

    /**
     * Set relationAdequationCours
     *
     * @param integer $relationAdequationCours
     *
     * @return QuestionnaireSatisfaction
     */
    public function setRelationAdequationCours($relationAdequationCours)
    {
        $this->relationAdequationCours = $relationAdequationCours;

        return $this;
    }

    /**
     * Get relationAdequationCours
     *
     * @return integer
     */
    public function getRelationAdequationCours()
    {
        return $this->relationAdequationCours;
    }

    /**
     * Set relationDelaisSupport
     *
     * @param integer $relationDelaisSupport
     *
     * @return QuestionnaireSatisfaction
     */
    public function setRelationDelaisSupport($relationDelaisSupport)
    {
        $this->relationDelaisSupport = $relationDelaisSupport;

        return $this;
    }

    /**
     * Get relationDelaisSupport
     *
     * @return integer
     */
    public function getRelationDelaisSupport()
    {
        return $this->relationDelaisSupport;
    }

    /**
     * Set relationRespectDelaisCorrection
     *
     * @param integer $relationRespectDelaisCorrection
     *
     * @return QuestionnaireSatisfaction
     */
    public function setRelationRespectDelaisCorrection($relationRespectDelaisCorrection)
    {
        $this->relationRespectDelaisCorrection = $relationRespectDelaisCorrection;

        return $this;
    }

    /**
     * Get relationRespectDelaisCorrection
     *
     * @return integer
     */
    public function getRelationRespectDelaisCorrection()
    {
        return $this->relationRespectDelaisCorrection;
    }

    /**
     * Set relationQualiteCorrection
     *
     * @param integer $relationQualiteCorrection
     *
     * @return QuestionnaireSatisfaction
     */
    public function setRelationQualiteCorrection($relationQualiteCorrection)
    {
        $this->relationQualiteCorrection = $relationQualiteCorrection;

        return $this;
    }

    /**
     * Get relationQualiteCorrection
     *
     * @return integer
     */
    public function getRelationQualiteCorrection()
    {
        return $this->relationQualiteCorrection;
    }

    /**
     * Set remarqueRelation
     *
     * @param string $remarqueRelation
     *
     * @return QuestionnaireSatisfaction
     */
    public function setRemarqueRelation($remarqueRelation)
    {
        $this->remarqueRelation = $remarqueRelation;

        return $this;
    }

    /**
     * Get remarqueRelation
     *
     * @return string
     */
    public function getRemarqueRelation()
    {
        return $this->remarqueRelation;
    }

    /**
     * Set deroulementSupportUtilises
     *
     * @param integer $deroulementSupportUtilises
     *
     * @return QuestionnaireSatisfaction
     */
    public function setDeroulementSupportUtilises($deroulementSupportUtilises)
    {
        $this->deroulementSupportUtilises = $deroulementSupportUtilises;

        return $this;
    }

    /**
     * Get deroulementSupportUtilises
     *
     * @return integer
     */
    public function getDeroulementSupportUtilises()
    {
        return $this->deroulementSupportUtilises;
    }

    /**
     * Set deroulementSupportContenu
     *
     * @param integer $deroulementSupportContenu
     *
     * @return QuestionnaireSatisfaction
     */
    public function setDeroulementSupportContenu($deroulementSupportContenu)
    {
        $this->deroulementSupportContenu = $deroulementSupportContenu;

        return $this;
    }

    /**
     * Get deroulementSupportContenu
     *
     * @return integer
     */
    public function getDeroulementSupportContenu()
    {
        return $this->deroulementSupportContenu;
    }

    /**
     * Set deroulementMoyenContact
     *
     * @param integer $deroulementMoyenContact
     *
     * @return QuestionnaireSatisfaction
     */
    public function setDeroulementMoyenContact($deroulementMoyenContact)
    {
        $this->deroulementMoyenContact = $deroulementMoyenContact;

        return $this;
    }

    /**
     * Get deroulementMoyenContact
     *
     * @return integer
     */
    public function getDeroulementMoyenContact()
    {
        return $this->deroulementMoyenContact;
    }

    /**
     * Set deroulementSuiviPedagogique
     *
     * @param integer $deroulementSuiviPedagogique
     *
     * @return QuestionnaireSatisfaction
     */
    public function setDeroulementSuiviPedagogique($deroulementSuiviPedagogique)
    {
        $this->deroulementSuiviPedagogique = $deroulementSuiviPedagogique;

        return $this;
    }

    /**
     * Get deroulementSuiviPedagogique
     *
     * @return integer
     */
    public function getDeroulementSuiviPedagogique()
    {
        return $this->deroulementSuiviPedagogique;
    }

    /**
     * Set deroulementModeEvaluation
     *
     * @param integer $deroulementModeEvaluation
     *
     * @return QuestionnaireSatisfaction
     */
    public function setDeroulementModeEvaluation($deroulementModeEvaluation)
    {
        $this->deroulementModeEvaluation = $deroulementModeEvaluation;

        return $this;
    }

    /**
     * Get deroulementModeEvaluation
     *
     * @return integer
     */
    public function getDeroulementModeEvaluation()
    {
        return $this->deroulementModeEvaluation;
    }

    /**
     * Set deroulementQualiteContactProf
     *
     * @param integer $deroulementQualiteContactProf
     *
     * @return QuestionnaireSatisfaction
     */
    public function setDeroulementQualiteContactProf($deroulementQualiteContactProf)
    {
        $this->deroulementQualiteContactProf = $deroulementQualiteContactProf;

        return $this;
    }

    /**
     * Get deroulementQualiteContactProf
     *
     * @return integer
     */
    public function getDeroulementQualiteContactProf()
    {
        return $this->deroulementQualiteContactProf;
    }

    /**
     * Set deroulementQualiteContactAss
     *
     * @param integer $deroulementQualiteContactAss
     *
     * @return QuestionnaireSatisfaction
     */
    public function setDeroulementQualiteContactAss($deroulementQualiteContactAss)
    {
        $this->deroulementQualiteContactAss = $deroulementQualiteContactAss;

        return $this;
    }

    /**
     * Get deroulementQualiteContactAss
     *
     * @return integer
     */
    public function getDeroulementQualiteContactAss()
    {
        return $this->deroulementQualiteContactAss;
    }

    /**
     * Set deroulementCompetencesProf
     *
     * @param integer $deroulementCompetencesProf
     *
     * @return QuestionnaireSatisfaction
     */
    public function setDeroulementCompetencesProf($deroulementCompetencesProf)
    {
        $this->deroulementCompetencesProf = $deroulementCompetencesProf;

        return $this;
    }

    /**
     * Get deroulementCompetencesProf
     *
     * @return integer
     */
    public function getDeroulementCompetencesProf()
    {
        return $this->deroulementCompetencesProf;
    }

    /**
     * Set deroulementCompetencesAss
     *
     * @param integer $deroulementCompetencesAss
     *
     * @return QuestionnaireSatisfaction
     */
    public function setDeroulementCompetencesAss($deroulementCompetencesAss)
    {
        $this->deroulementCompetencesAss = $deroulementCompetencesAss;

        return $this;
    }

    /**
     * Get deroulementCompetencesAss
     *
     * @return integer
     */
    public function getDeroulementCompetencesAss()
    {
        return $this->deroulementCompetencesAss;
    }

    /**
     * Set deroulementRemarque
     *
     * @param string $deroulementRemarque
     *
     * @return QuestionnaireSatisfaction
     */
    public function setDeroulementRemarque($deroulementRemarque)
    {
        $this->deroulementRemarque = $deroulementRemarque;

        return $this;
    }

    /**
     * Get deroulementRemarque
     *
     * @return string
     */
    public function getDeroulementRemarque()
    {
        return $this->deroulementRemarque;
    }

    /**
     * Set aProposNouveauAppel
     *
     * @param boolean $aProposNouveauAppel
     *
     * @return QuestionnaireSatisfaction
     */
    public function setAProposNouveauAppel($aProposNouveauAppel)
    {
        $this->aProposNouveauAppel = $aProposNouveauAppel;

        return $this;
    }

    /**
     * Get aProposNouveauAppel
     *
     * @return boolean
     */
    public function getAProposNouveauAppel()
    {
        return $this->aProposNouveauAppel;
    }

    /**
     * Set aProposNouveauAppelComm
     *
     * @param string $aProposNouveauAppelComm
     *
     * @return QuestionnaireSatisfaction
     */
    public function setAProposNouveauAppelComm($aProposNouveauAppelComm)
    {
        $this->aProposNouveauAppelComm = $aProposNouveauAppelComm;

        return $this;
    }

    /**
     * Get aProposNouveauAppelComm
     *
     * @return string
     */
    public function getAProposNouveauAppelComm()
    {
        return $this->aProposNouveauAppelComm;
    }

    /**
     * Set aProposRecommandation
     *
     * @param integer $aProposRecommandation
     *
     * @return QuestionnaireSatisfaction
     */
    public function setAProposRecommandation($aProposRecommandation)
    {
        $this->aProposRecommandation = $aProposRecommandation;

        return $this;
    }

    /**
     * Get aProposRecommandation
     *
     * @return integer
     */
    public function getAProposRecommandation()
    {
        return $this->aProposRecommandation;
    }

    /**
     * Set aProposRemarque
     *
     * @param string $aProposRemarque
     *
     * @return QuestionnaireSatisfaction
     */
    public function setAProposRemarque($aProposRemarque)
    {
        $this->aProposRemarque = $aProposRemarque;

        return $this;
    }

    /**
     * Get aProposRemarque
     *
     * @return string
     */
    public function getAProposRemarque()
    {
        return $this->aProposRemarque;
    }


    /**
     * Set aProposRecommandationComm
     *
     * @param string $aProposRecommandationComm
     *
     * @return QuestionnaireSatisfaction
     */
    public function setAProposRecommandationComm($aProposRecommandationComm)
    {
        $this->aProposRecommandationComm = $aProposRecommandationComm;

        return $this;
    }

    /**
     * Get aProposRecommandationComm
     *
     * @return string
     */
    public function getAProposRecommandationComm()
    {
        return $this->aProposRecommandationComm;
    }

    /**
     * Set numOrdre
     *
     * @param \EleveBundle\Entity\EntityMain\Eleve $numOrdre
     *
     * @return QuestionnaireSatisfaction
     */
    public function setNumOrdre(\EleveBundle\Entity\EntityMain\Eleve $numOrdre)
    {
        $this->numOrdre = $numOrdre;

        return $this;
    }

    /**
     * Get numOrdre
     *
     * @return \EleveBundle\Entity\EntityMain\Eleve
     */
    public function getNumOrdre()
    {
        return $this->numOrdre;
    }
}

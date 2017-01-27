<?php

namespace EleveBundle\Entity\EntityMain;

use Doctrine\ORM\Mapping as ORM;

/**
 * Courrieretatlecture
 *
 * @ORM\Table(name="EE_CourrierEtatLecture")
 * @ORM\Entity(repositoryClass="EleveBundle\Repository\EntityMain\CourrieretatlectureRepository")
 */
class Courrieretatlecture
{
    
    /**
    * @ORM\ManyToOne(targetEntity="Courriertype", inversedBy="codecourrier")
    * @ORM\JoinColumn(name="codeCourrier", referencedColumnName="codeCourrierType", nullable=false)
     */
    private $codecourrier;

    /**
    * @ORM\ManyToOne(targetEntity="EleveBundle\Entity\EntityCulture\Eleve", inversedBy="numordre")
    * @ORM\JoinColumn(name="numOrdre", referencedColumnName="Commandes_NoOrdre", nullable=false)
     */
    private $numordre;

    /**
     * @var integer
     *
     * @ORM\Column(name="Echeancier_id", type="integer", nullable=true)
     */
    private $echeancierId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="etatLecture", type="smallint", nullable=true)
     */
    private $etatlecture = '-1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEnvoi", type="datetime", nullable=true)
     */
    private $dateenvoi = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateLecture", type="datetime", nullable=true)
     */
    private $datelecture = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="reference_mailing", type="string", length=30, nullable=true)
     */
    private $referenceMailing = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Ecole", type="string", length=2, nullable=true)
     */
    private $ecole = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Societe", type="string", length=2, nullable=true)
     */
    private $societe = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Entete", type="string", length=2, nullable=true)
     */
    private $entete = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Envoimail", type="boolean", nullable=true)
     */
    private $envoimail = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Envoisms", type="boolean", nullable=true)
     */
    private $envoisms = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mail_adresseexpediteur", type="string", length=1000, nullable=true)
     */
    private $mailAdresseexpediteur = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mail_adresseRetour", type="string", length=1000, nullable=true)
     */
    private $mailAdresseretour = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="Statut_mail", type="smallint", nullable=true)
     */
    private $statutMail = '-1';

    /**
     * @var integer
     *
     * @ORM\Column(name="Statut_sms", type="smallint", nullable=true)
     */
    private $statutSms = '-1';

    /**
     * @var string
     *
     * @ORM\Column(name="Rapport_EnvoiMail", type="text", length=-1, nullable=true)
     */
    private $rapportEnvoimail = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Rapport_EnvoiSMS", type="text", length=-1, nullable=true)
     */
    private $rapportEnvoisms = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Envoi_Mail", type="datetime", nullable=true)
     */
    private $dateEnvoiMail = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Envoi_SMS", type="datetime", nullable=true)
     */
    private $dateEnvoiSms = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Traité", type="boolean", nullable=true)
     */
    private $traite = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Ajout_Contacts_Eleves", type="boolean", nullable=true)
     */
    private $ajoutContactsEleves = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Code_Contact_Eleve", type="string", length=20, nullable=true)
     */
    private $codeContactEleve = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="statut_ajout_contacts_eleves", type="smallint", nullable=true)
     */
    private $statutAjoutContactsEleves = '-1';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_landing_page", type="integer", nullable=true)
     */
    private $idLandingPage = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Variables", type="text", length=-1, nullable=true)
     */
    private $variables = '-1';

    /**
     * @var string
     *
     * @ORM\Column(name="Utilisateur", type="string", length=50, nullable=true)
     */
    private $utilisateur = 'informatique';

    /**
     * @var boolean
     *
     * @ORM\Column(name="generation_eleve", type="boolean", nullable=true)
     */
    private $generationEleve = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set echeancierId
     *
     * @param integer $echeancierId
     *
     * @return Courrieretatlecture
     */
    public function setEcheancierId($echeancierId)
    {
        $this->echeancierId = $echeancierId;

        return $this;
    }

    /**
     * Get echeancierId
     *
     * @return integer
     */
    public function getEcheancierId()
    {
        return $this->echeancierId;
    }

    /**
     * Set etatlecture
     *
     * @param integer $etatlecture
     *
     * @return Courrieretatlecture
     */
    public function setEtatlecture($etatlecture)
    {
        $this->etatlecture = $etatlecture;

        return $this;
    }

    /**
     * Get etatlecture
     *
     * @return integer
     */
    public function getEtatlecture()
    {
        return $this->etatlecture;
    }

    /**
     * Set dateenvoi
     *
     * @param \DateTime $dateenvoi
     *
     * @return Courrieretatlecture
     */
    public function setDateenvoi($dateenvoi)
    {
        $this->dateenvoi = $dateenvoi;

        return $this;
    }

    /**
     * Get dateenvoi
     *
     * @return \DateTime
     */
    public function getDateenvoi()
    {
        return $this->dateenvoi;
    }

    /**
     * Set datelecture
     *
     * @param \DateTime $datelecture
     *
     * @return Courrieretatlecture
     */
    public function setDatelecture($datelecture)
    {
        $this->datelecture = $datelecture;

        return $this;
    }

    /**
     * Get datelecture
     *
     * @return \DateTime
     */
    public function getDatelecture()
    {
        return $this->datelecture;
    }

    /**
     * Set referenceMailing
     *
     * @param string $referenceMailing
     *
     * @return Courrieretatlecture
     */
    public function setReferenceMailing($referenceMailing)
    {
        $this->referenceMailing = $referenceMailing;

        return $this;
    }

    /**
     * Get referenceMailing
     *
     * @return string
     */
    public function getReferenceMailing()
    {
        return $this->referenceMailing;
    }

    /**
     * Set ecole
     *
     * @param string $ecole
     *
     * @return Courrieretatlecture
     */
    public function setEcole($ecole)
    {
        $this->ecole = $ecole;

        return $this;
    }

    /**
     * Get ecole
     *
     * @return string
     */
    public function getEcole()
    {
        return $this->ecole;
    }

    /**
     * Set societe
     *
     * @param string $societe
     *
     * @return Courrieretatlecture
     */
    public function setSociete($societe)
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe
     *
     * @return string
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Set entete
     *
     * @param string $entete
     *
     * @return Courrieretatlecture
     */
    public function setEntete($entete)
    {
        $this->entete = $entete;

        return $this;
    }

    /**
     * Get entete
     *
     * @return string
     */
    public function getEntete()
    {
        return $this->entete;
    }

    /**
     * Set envoimail
     *
     * @param boolean $envoimail
     *
     * @return Courrieretatlecture
     */
    public function setEnvoimail($envoimail)
    {
        $this->envoimail = $envoimail;

        return $this;
    }

    /**
     * Get envoimail
     *
     * @return boolean
     */
    public function getEnvoimail()
    {
        return $this->envoimail;
    }

    /**
     * Set envoisms
     *
     * @param boolean $envoisms
     *
     * @return Courrieretatlecture
     */
    public function setEnvoisms($envoisms)
    {
        $this->envoisms = $envoisms;

        return $this;
    }

    /**
     * Get envoisms
     *
     * @return boolean
     */
    public function getEnvoisms()
    {
        return $this->envoisms;
    }

    /**
     * Set mailAdresseexpediteur
     *
     * @param string $mailAdresseexpediteur
     *
     * @return Courrieretatlecture
     */
    public function setMailAdresseexpediteur($mailAdresseexpediteur)
    {
        $this->mailAdresseexpediteur = $mailAdresseexpediteur;

        return $this;
    }

    /**
     * Get mailAdresseexpediteur
     *
     * @return string
     */
    public function getMailAdresseexpediteur()
    {
        return $this->mailAdresseexpediteur;
    }

    /**
     * Set mailAdresseretour
     *
     * @param string $mailAdresseretour
     *
     * @return Courrieretatlecture
     */
    public function setMailAdresseretour($mailAdresseretour)
    {
        $this->mailAdresseretour = $mailAdresseretour;

        return $this;
    }

    /**
     * Get mailAdresseretour
     *
     * @return string
     */
    public function getMailAdresseretour()
    {
        return $this->mailAdresseretour;
    }

    /**
     * Set statutMail
     *
     * @param integer $statutMail
     *
     * @return Courrieretatlecture
     */
    public function setStatutMail($statutMail)
    {
        $this->statutMail = $statutMail;

        return $this;
    }

    /**
     * Get statutMail
     *
     * @return integer
     */
    public function getStatutMail()
    {
        return $this->statutMail;
    }

    /**
     * Set statutSms
     *
     * @param integer $statutSms
     *
     * @return Courrieretatlecture
     */
    public function setStatutSms($statutSms)
    {
        $this->statutSms = $statutSms;

        return $this;
    }

    /**
     * Get statutSms
     *
     * @return integer
     */
    public function getStatutSms()
    {
        return $this->statutSms;
    }

    /**
     * Set rapportEnvoimail
     *
     * @param string $rapportEnvoimail
     *
     * @return Courrieretatlecture
     */
    public function setRapportEnvoimail($rapportEnvoimail)
    {
        $this->rapportEnvoimail = $rapportEnvoimail;

        return $this;
    }

    /**
     * Get rapportEnvoimail
     *
     * @return string
     */
    public function getRapportEnvoimail()
    {
        return $this->rapportEnvoimail;
    }

    /**
     * Set rapportEnvoisms
     *
     * @param string $rapportEnvoisms
     *
     * @return Courrieretatlecture
     */
    public function setRapportEnvoisms($rapportEnvoisms)
    {
        $this->rapportEnvoisms = $rapportEnvoisms;

        return $this;
    }

    /**
     * Get rapportEnvoisms
     *
     * @return string
     */
    public function getRapportEnvoisms()
    {
        return $this->rapportEnvoisms;
    }

    /**
     * Set dateEnvoiMail
     *
     * @param \DateTime $dateEnvoiMail
     *
     * @return Courrieretatlecture
     */
    public function setDateEnvoiMail($dateEnvoiMail)
    {
        $this->dateEnvoiMail = $dateEnvoiMail;

        return $this;
    }

    /**
     * Get dateEnvoiMail
     *
     * @return \DateTime
     */
    public function getDateEnvoiMail()
    {
        return $this->dateEnvoiMail;
    }

    /**
     * Set dateEnvoiSms
     *
     * @param \DateTime $dateEnvoiSms
     *
     * @return Courrieretatlecture
     */
    public function setDateEnvoiSms($dateEnvoiSms)
    {
        $this->dateEnvoiSms = $dateEnvoiSms;

        return $this;
    }

    /**
     * Get dateEnvoiSms
     *
     * @return \DateTime
     */
    public function getDateEnvoiSms()
    {
        return $this->dateEnvoiSms;
    }

    /**
     * Set traite
     *
     * @param boolean $traite
     *
     * @return Courrieretatlecture
     */
    public function setTraite($traite)
    {
        $this->traite = $traite;

        return $this;
    }

    /**
     * Get traite
     *
     * @return boolean
     */
    public function getTraite()
    {
        return $this->traite;
    }

    /**
     * Set ajoutContactsEleves
     *
     * @param boolean $ajoutContactsEleves
     *
     * @return Courrieretatlecture
     */
    public function setAjoutContactsEleves($ajoutContactsEleves)
    {
        $this->ajoutContactsEleves = $ajoutContactsEleves;

        return $this;
    }

    /**
     * Get ajoutContactsEleves
     *
     * @return boolean
     */
    public function getAjoutContactsEleves()
    {
        return $this->ajoutContactsEleves;
    }

    /**
     * Set codeContactEleve
     *
     * @param string $codeContactEleve
     *
     * @return Courrieretatlecture
     */
    public function setCodeContactEleve($codeContactEleve)
    {
        $this->codeContactEleve = $codeContactEleve;

        return $this;
    }

    /**
     * Get codeContactEleve
     *
     * @return string
     */
    public function getCodeContactEleve()
    {
        return $this->codeContactEleve;
    }

    /**
     * Set statutAjoutContactsEleves
     *
     * @param integer $statutAjoutContactsEleves
     *
     * @return Courrieretatlecture
     */
    public function setStatutAjoutContactsEleves($statutAjoutContactsEleves)
    {
        $this->statutAjoutContactsEleves = $statutAjoutContactsEleves;

        return $this;
    }

    /**
     * Get statutAjoutContactsEleves
     *
     * @return integer
     */
    public function getStatutAjoutContactsEleves()
    {
        return $this->statutAjoutContactsEleves;
    }

    /**
     * Set idLandingPage
     *
     * @param integer $idLandingPage
     *
     * @return Courrieretatlecture
     */
    public function setIdLandingPage($idLandingPage)
    {
        $this->idLandingPage = $idLandingPage;

        return $this;
    }

    /**
     * Get idLandingPage
     *
     * @return integer
     */
    public function getIdLandingPage()
    {
        return $this->idLandingPage;
    }

    /**
     * Set variables
     *
     * @param string $variables
     *
     * @return Courrieretatlecture
     */
    public function setVariables($variables)
    {
        $this->variables = $variables;

        return $this;
    }

    /**
     * Get variables
     *
     * @return string
     */
    public function getVariables()
    {
        return $this->variables;
    }

    /**
     * Set utilisateur
     *
     * @param string $utilisateur
     *
     * @return Courrieretatlecture
     */
    public function setUtilisateur($utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return string
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set generationEleve
     *
     * @param boolean $generationEleve
     *
     * @return Courrieretatlecture
     */
    public function setGenerationEleve($generationEleve)
    {
        $this->generationEleve = $generationEleve;

        return $this;
    }

    /**
     * Get generationEleve
     *
     * @return boolean
     */
    public function getGenerationEleve()
    {
        return $this->generationEleve;
    }

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
     * Set codecourrier
     *
     * @param \EleveBundle\Entity\EntityMain\Courriertype $codecourrier
     *
     * @return Courrieretatlecture
     */
    public function setCodecourrier(\EleveBundle\Entity\EntityMain\Courriertype $codecourrier)
    {
        $this->codecourrier = $codecourrier;

        return $this;
    }

    /**
     * Get codecourrier
     *
     * @return \EleveBundle\Entity\EntityMain\Courriertype
     */
    public function getCodecourrier()
    {
        return $this->codecourrier;
    }

    /**
     * Set numordre
     *
     * @param \EleveBundle\Entity\EntityCulture\Eleve $numordre
     *
     * @return Courrieretatlecture
     */
    public function setNumordre(\EleveBundle\Entity\EntityCulture\Eleve $numordre)
    {
        $this->numordre = $numordre;

        return $this;
    }

    /**
     * Get numordre
     *
     * @return \EleveBundle\Entity\EntityCulture\Eleve
     */
    public function getNumordre()
    {
        return $this->numordre;
    }
}

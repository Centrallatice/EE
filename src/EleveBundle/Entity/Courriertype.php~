<?php

namespace EleveBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Courriertype
 *
 * @ORM\Table(name="EE_CourrierType")
 * @ORM\Entity(repositoryClass="EleveBundle\Repository\CourriertypeRepository")
 */
class Courriertype
{
    /**
     * @var string
     *
     * @ORM\Column(name="Service", type="string", length=20, nullable=true)
     */
    private $service;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="chemin_fichier_contenu", type="text", length=-1, nullable=true)
     */
    private $cheminFichierContenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime", nullable=false)
     */
    private $datecreation;

    /**
     * @var integer
     *
     * @ORM\Column(name="Etat", type="smallint", nullable=false)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="Titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="chemin_fichier_mail", type="text", length=-1, nullable=true)
     */
    private $cheminFichierMail;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu_sms", type="string", length=160, nullable=true)
     */
    private $contenuSms;

    /**
     * @var string
     *
     * @ORM\Column(name="chemin_fichier_notification", type="text", length=-1, nullable=true)
     */
    private $cheminFichierNotification;

    /**
     * @var string
     *
     * @ORM\Column(name="objet_mail", type="string", length=1000, nullable=true)
     */
    private $objetMail;

    /**
     * @var boolean
     *
     * @ORM\Column(name="envoi_mail", type="boolean", nullable=true)
     */
    private $envoiMail = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="envoi_notification", type="boolean", nullable=true)
     */
    private $envoiNotification = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="envoi_sms", type="boolean", nullable=true)
     */
    private $envoiSms = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="generer_pdf", type="boolean", nullable=true)
     */
    private $genererPdf = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Ajout_Contacts_Eleves", type="boolean", nullable=true)
     */
    private $ajoutContactsEleves = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Code_Contact_Eleves", type="string", length=20, nullable=true)
     */
    private $codeContactEleves = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Contenu_HTML_Courrier", type="string", length=0, nullable=true)
     */
    private $contenuHtmlCourrier = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Contenu_HTML_Mail", type="string", length=0, nullable=true)
     */
    private $contenuHtmlMail = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="dispo_a_la_demande", type="smallint", nullable=true)
     */
    private $dispoALaDemande;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tampon", type="boolean", nullable=true)
     */
    private $tampon;

    /**
     * @var string
     *
     * @ORM\Column(name="codeCourrierType", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codecourriertype;



    /**
     * Set service
     *
     * @param string $service
     *
     * @return Courriertype
     */
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Courriertype
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set description
     *
     * @param string $description
     *
     * @return Courriertype
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set cheminFichierContenu
     *
     * @param string $cheminFichierContenu
     *
     * @return Courriertype
     */
    public function setCheminFichierContenu($cheminFichierContenu)
    {
        $this->cheminFichierContenu = $cheminFichierContenu;

        return $this;
    }

    /**
     * Get cheminFichierContenu
     *
     * @return string
     */
    public function getCheminFichierContenu()
    {
        return $this->cheminFichierContenu;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     *
     * @return Courriertype
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     *
     * @return Courriertype
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return integer
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Courriertype
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set cheminFichierMail
     *
     * @param string $cheminFichierMail
     *
     * @return Courriertype
     */
    public function setCheminFichierMail($cheminFichierMail)
    {
        $this->cheminFichierMail = $cheminFichierMail;

        return $this;
    }

    /**
     * Get cheminFichierMail
     *
     * @return string
     */
    public function getCheminFichierMail()
    {
        return $this->cheminFichierMail;
    }

    /**
     * Set contenuSms
     *
     * @param string $contenuSms
     *
     * @return Courriertype
     */
    public function setContenuSms($contenuSms)
    {
        $this->contenuSms = $contenuSms;

        return $this;
    }

    /**
     * Get contenuSms
     *
     * @return string
     */
    public function getContenuSms()
    {
        return $this->contenuSms;
    }

    /**
     * Set cheminFichierNotification
     *
     * @param string $cheminFichierNotification
     *
     * @return Courriertype
     */
    public function setCheminFichierNotification($cheminFichierNotification)
    {
        $this->cheminFichierNotification = $cheminFichierNotification;

        return $this;
    }

    /**
     * Get cheminFichierNotification
     *
     * @return string
     */
    public function getCheminFichierNotification()
    {
        return $this->cheminFichierNotification;
    }

    /**
     * Set objetMail
     *
     * @param string $objetMail
     *
     * @return Courriertype
     */
    public function setObjetMail($objetMail)
    {
        $this->objetMail = $objetMail;

        return $this;
    }

    /**
     * Get objetMail
     *
     * @return string
     */
    public function getObjetMail()
    {
        return $this->objetMail;
    }

    /**
     * Set envoiMail
     *
     * @param boolean $envoiMail
     *
     * @return Courriertype
     */
    public function setEnvoiMail($envoiMail)
    {
        $this->envoiMail = $envoiMail;

        return $this;
    }

    /**
     * Get envoiMail
     *
     * @return boolean
     */
    public function getEnvoiMail()
    {
        return $this->envoiMail;
    }

    /**
     * Set envoiNotification
     *
     * @param boolean $envoiNotification
     *
     * @return Courriertype
     */
    public function setEnvoiNotification($envoiNotification)
    {
        $this->envoiNotification = $envoiNotification;

        return $this;
    }

    /**
     * Get envoiNotification
     *
     * @return boolean
     */
    public function getEnvoiNotification()
    {
        return $this->envoiNotification;
    }

    /**
     * Set envoiSms
     *
     * @param boolean $envoiSms
     *
     * @return Courriertype
     */
    public function setEnvoiSms($envoiSms)
    {
        $this->envoiSms = $envoiSms;

        return $this;
    }

    /**
     * Get envoiSms
     *
     * @return boolean
     */
    public function getEnvoiSms()
    {
        return $this->envoiSms;
    }

    /**
     * Set genererPdf
     *
     * @param boolean $genererPdf
     *
     * @return Courriertype
     */
    public function setGenererPdf($genererPdf)
    {
        $this->genererPdf = $genererPdf;

        return $this;
    }

    /**
     * Get genererPdf
     *
     * @return boolean
     */
    public function getGenererPdf()
    {
        return $this->genererPdf;
    }

    /**
     * Set ajoutContactsEleves
     *
     * @param boolean $ajoutContactsEleves
     *
     * @return Courriertype
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
     * Set codeContactEleves
     *
     * @param string $codeContactEleves
     *
     * @return Courriertype
     */
    public function setCodeContactEleves($codeContactEleves)
    {
        $this->codeContactEleves = $codeContactEleves;

        return $this;
    }

    /**
     * Get codeContactEleves
     *
     * @return string
     */
    public function getCodeContactEleves()
    {
        return $this->codeContactEleves;
    }

    /**
     * Set contenuHtmlCourrier
     *
     * @param string $contenuHtmlCourrier
     *
     * @return Courriertype
     */
    public function setContenuHtmlCourrier($contenuHtmlCourrier)
    {
        $this->contenuHtmlCourrier = $contenuHtmlCourrier;

        return $this;
    }

    /**
     * Get contenuHtmlCourrier
     *
     * @return string
     */
    public function getContenuHtmlCourrier()
    {
        return $this->contenuHtmlCourrier;
    }

    /**
     * Set contenuHtmlMail
     *
     * @param string $contenuHtmlMail
     *
     * @return Courriertype
     */
    public function setContenuHtmlMail($contenuHtmlMail)
    {
        $this->contenuHtmlMail = $contenuHtmlMail;

        return $this;
    }

    /**
     * Get contenuHtmlMail
     *
     * @return string
     */
    public function getContenuHtmlMail()
    {
        return $this->contenuHtmlMail;
    }

    /**
     * Set dispoALaDemande
     *
     * @param integer $dispoALaDemande
     *
     * @return Courriertype
     */
    public function setDispoALaDemande($dispoALaDemande)
    {
        $this->dispoALaDemande = $dispoALaDemande;

        return $this;
    }

    /**
     * Get dispoALaDemande
     *
     * @return integer
     */
    public function getDispoALaDemande()
    {
        return $this->dispoALaDemande;
    }

    /**
     * Set tampon
     *
     * @param boolean $tampon
     *
     * @return Courriertype
     */
    public function setTampon($tampon)
    {
        $this->tampon = $tampon;

        return $this;
    }

    /**
     * Get tampon
     *
     * @return boolean
     */
    public function getTampon()
    {
        return $this->tampon;
    }


    /**
     * Set codecourriertype
     *
     * @param string $codecourriertype
     *
     * @return Courriertype
     */
    public function setCodecourriertype($codecourriertype)
    {
        $this->codecourriertype = $codecourriertype;

        return $this;
    }

    /**
     * Get codecourriertype
     *
     * @return string
     */
    public function getCodecourriertype()
    {
        return $this->codecourriertype;
    }
}

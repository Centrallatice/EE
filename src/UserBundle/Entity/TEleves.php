<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\AttributeOverrides;
use Doctrine\ORM\Mapping\AttributeOverride;

/**
 * TEleves
 * @ORM\Entity(repositoryClass="UserBundle\Repository\TElevesRepository")
 * @ORM\Table(name="t_eleves")
 * @ORM\AttributeOverrides({
 *      @ORM\AttributeOverride(name="username",
 *          column=@ORM\Column(
 *              name     = "commande_numdossier",
 *              type     = "integer",
 *              nullable = false
 *          )
 *      ),
 *      @ORM\AttributeOverride(name="password",
 *          column=@ORM\Column(
 *              name     = "commande_numcommande",
 *              type     = "integer",
 *              nullable = false
 *          )
 *      )})
 */
class TEleves
{
//    private $username;
    /**
     * @var integer
     *
     * @ORM\Column(name="commande_numdossier", type="integer", nullable=false)
     */
    private $username;

    /**
     * @var integer
     *
     * @ORM\Column(name="commande_numcommande", type="integer", nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="Prospect_access_group", type="string", length=2, nullable=true)
     */
    private $prospectAccessGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="Prospect_access_Pays", type="string", length=2, nullable=true)
     */
    private $prospectAccessPays;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Prospect_access_Date_Creation", type="datetime", nullable=true)
     */
    private $prospectAccessDateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="Prospect_Titre", type="string", length=1, nullable=true)
     */
    private $prospectTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="Prospect_Nom", type="string", length=40, nullable=true)
     */
    private $prospectNom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prospect_NomJeuneFille", type="string", length=30, nullable=true)
     */
    private $prospectNomjeunefille;

    /**
     * @var string
     *
     * @ORM\Column(name="Prospect_Adresse1", type="string", length=38, nullable=true)
     */
    private $prospectAdresse1;

    /**
     * @var string
     *
     * @ORM\Column(name="Prospect_Adresse2", type="string", length=38, nullable=true)
     */
    private $prospectAdresse2;

    /**
     * @var string
     *
     * @ORM\Column(name="Prospect_Adresse3", type="string", length=38, nullable=true)
     */
    private $prospectAdresse3;

    /**
     * @var string
     *
     * @ORM\Column(name="Prospect_Adresse4", type="string", length=38, nullable=true)
     */
    private $prospectAdresse4;

    /**
     * @var string
     *
     * @ORM\Column(name="Prospect_CP", type="string", length=5, nullable=true)
     */
    private $prospectCp;

    /**
     * @var string
     *
     * @ORM\Column(name="Prospect_Ville", type="string", length=50, nullable=true)
     */
    private $prospectVille;

    /**
     * @var string
     *
     * @ORM\Column(name="Prospect_TelDomicile", type="string", length=14, nullable=true)
     */
    private $prospectTeldomicile;

    /**
     * @var string
     *
     * @ORM\Column(name="Prospect_TelPortable", type="string", length=14, nullable=true)
     */
    private $prospectTelportable;

    /**
     * @var string
     *
     * @ORM\Column(name="Prospect_TelTravail", type="string", length=14, nullable=true)
     */
    private $prospectTeltravail;

    /**
     * @var string
     *
     * @ORM\Column(name="Prospect_Fax", type="string", length=14, nullable=true)
     */
    private $prospectFax;

    /**
     * @var string
     *
     * @ORM\Column(name="Prospect_access_RespOrganisme", type="string", length=50, nullable=true)
     */
    private $prospectAccessResporganisme;

    /**
     * @var string
     *
     * @ORM\Column(name="Prospect_access_HeureJournee", type="string", length=30, nullable=true)
     */
    private $prospectAccessHeurejournee;

    /**
     * @var string
     *
     * @ORM\Column(name="Prospect_access_HeureSoir", type="string", length=30, nullable=true)
     */
    private $prospectAccessHeuresoir;

    /**
     * @var string
     *
     * @ORM\Column(name="Prospect_Email", type="string", length=100, nullable=true)
     */
    private $prospectEmail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Prospect_DateNaissance", type="datetime", nullable=true)
     */
    private $prospectDatenaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="Prospect_Age", type="string", length=2, nullable=true)
     */
    private $prospectAge;

    /**
     * @var string
     *
     * @ORM\Column(name="Prospect_LieuNaissance", type="string", length=50, nullable=true)
     */
    private $prospectLieunaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="Prospect_Profession", type="string", length=8, nullable=true)
     */
    private $prospectProfession;

    /**
     * @var string
     *
     * @ORM\Column(name="Prospect_Etude", type="string", length=8, nullable=true)
     */
    private $prospectEtude;

    /**
     * @var string
     *
     * @ORM\Column(name="Assistante", type="string", length=30, nullable=true)
     */
    private $assistante;

    /**
     * @var string
     *
     * @ORM\Column(name="Prospect_Auteur", type="string", length=50, nullable=true)
     */
    private $prospectAuteur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Prospect_access_Date_DerniereModif", type="datetime", nullable=true)
     */
    private $prospectAccessDateDernieremodif;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Prospect_access_Mailing", type="boolean", nullable=true)
     */
    private $prospectAccessMailing;

    /**
     * @var string
     *
     * @ORM\Column(name="Prospect_access_NomPhonetique", type="string", length=60, nullable=true)
     */
    private $prospectAccessNomphonetique;

    /**
     * @var string
     *
     * @ORM\Column(name="Prospect_access_Language", type="string", length=5, nullable=true)
     */
    private $prospectAccessLanguage;

    /**
     * @var string
     *
     * @ORM\Column(name="Prospect_access_NomAlpha", type="string", length=40, nullable=true)
     */
    private $prospectAccessNomalpha;

    /**
     * @var integer
     *
     * @ORM\Column(name="Prospect_access_NbDefinitif", type="smallint", nullable=true)
     */
    private $prospectAccessNbdefinitif;

    /**
     * @var string
     *
     * @ORM\Column(name="Prospect_Description", type="string", length=70, nullable=true)
     */
    private $prospectDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="commande_Datesignaturebi", type="datetime", nullable=true)
     */
    private $commandeDatesignaturebi;

    /**
     * @var string
     *
     * @ORM\Column(name="commande_formation", type="string", length=50, nullable=true)
     */
    private $commandeFormation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="commande_datecreate", type="datetime", nullable=true)
     */
    private $commandeDatecreate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="commande_update", type="datetime", nullable=true)
     */
    private $commandeUpdate;

    /**
     * @var string
     *
     * @ORM\Column(name="Formation_Type", type="string", length=10, nullable=true)
     */
    private $formationType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Ech_DateRecep", type="datetime", nullable=true)
     */
    private $echDaterecep;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Ech_DatePrelev", type="datetime", nullable=true)
     */
    private $echDateprelev;

    /**
     * @var string
     *
     * @ORM\Column(name="Ech_MttContrat", type="decimal", precision=18, scale=2, nullable=true)
     */
    private $echMttcontrat;

    /**
     * @var string
     *
     * @ORM\Column(name="Ech_MttPrelev", type="decimal", precision=18, scale=2, nullable=true)
     */
    private $echMttprelev;

    /**
     * @var string
     *
     * @ORM\Column(name="Ech_societe", type="string", length=2, nullable=true)
     */
    private $echSociete;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Ech_datesolde", type="datetime", nullable=true)
     */
    private $echDatesolde;

    /**
     * @var string
     *
     * @ORM\Column(name="Ech_solde", type="decimal", precision=18, scale=2, nullable=true)
     */
    private $echSolde;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Ech_DateTransfert", type="datetime", nullable=true)
     */
    private $echDatetransfert;

    /**
     * @var string
     *
     * @ORM\Column(name="Ech_societeOP", type="string", length=2, nullable=true)
     */
    private $echSocieteop;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Ech_DateDerniereModif", type="datetime", nullable=true)
     */
    private $echDatedernieremodif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Ech_date_contrat", type="datetime", nullable=true)
     */
    private $echDateContrat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Ech_date_acompte", type="datetime", nullable=true)
     */
    private $echDateAcompte;

    /**
     * @var string
     *
     * @ORM\Column(name="Ech_MttAcompte", type="decimal", precision=18, scale=2, nullable=true)
     */
    private $echMttacompte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Ech_DateDebutPrelev", type="datetime", nullable=true)
     */
    private $echDatedebutprelev;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Ech_DateFinPrelev", type="datetime", nullable=true)
     */
    private $echDatefinprelev;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Ech_DateDernierPrelev", type="datetime", nullable=true)
     */
    private $echDatedernierprelev;

    /**
     * @var string
     *
     * @ORM\Column(name="Ech_MttDernierPrelev", type="decimal", precision=18, scale=2, nullable=true)
     */
    private $echMttdernierprelev;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ech_NbPrelev", type="smallint", nullable=true)
     */
    private $echNbprelev;

    /**
     * @var string
     *
     * @ORM\Column(name="Ech_MttRetard", type="decimal", precision=18, scale=2, nullable=true)
     */
    private $echMttretard;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Ech_DateCFE", type="datetime", nullable=true)
     */
    private $echDatecfe;

    /**
     * @var integer
     *
     * @ORM\Column(name="Commandes_NoOrdre", type="integer", nullable=false)
     */
    private $commandesNoordre;

    /**
     * @var string
     *
     * @ORM\Column(name="Formation_code", type="string", length=8, nullable=true)
     */
    private $formationCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Ech_DateTransfertWeb", type="datetime", nullable=true)
     */
    private $echDatetransfertweb;

    /**
     * @var string
     *
     * @ORM\Column(name="F_DureeLegale", type="string", length=3, nullable=true)
     */
    private $fDureelegale;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="F_DateMAJ", type="datetime", nullable=true)
     */
    private $fDatemaj;

    /**
     * @var string
     *
     * @ORM\Column(name="Ech_Assistante", type="string", length=50, nullable=true)
     */
    private $echAssistante;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set commandeNumdossier
     *
     * @param integer $commandeNumdossier
     *
     * @return TEleves
     */
    public function setCommandeNumdossier($commandeNumdossier)
    {
        $this->commandeNumdossier = $commandeNumdossier;

        return $this;
    }

    /**
     * Get commandeNumdossier
     *
     * @return integer
     */
    public function getCommandeNumdossier()
    {
        return $this->commandeNumdossier;
    }

    /**
     * Set commandeNumcommande
     *
     * @param integer $commandeNumcommande
     *
     * @return TEleves
     */
    public function setCommandeNumcommande($commandeNumcommande)
    {
        $this->commandeNumcommande = $commandeNumcommande;

        return $this;
    }

    /**
     * Get commandeNumcommande
     *
     * @return integer
     */
    public function getCommandeNumcommande()
    {
        return $this->commandeNumcommande;
    }

    /**
     * Set prospectAccessGroup
     *
     * @param string $prospectAccessGroup
     *
     * @return TEleves
     */
    public function setProspectAccessGroup($prospectAccessGroup)
    {
        $this->prospectAccessGroup = $prospectAccessGroup;

        return $this;
    }

    /**
     * Get prospectAccessGroup
     *
     * @return string
     */
    public function getProspectAccessGroup()
    {
        return $this->prospectAccessGroup;
    }

    /**
     * Set prospectAccessPays
     *
     * @param string $prospectAccessPays
     *
     * @return TEleves
     */
    public function setProspectAccessPays($prospectAccessPays)
    {
        $this->prospectAccessPays = $prospectAccessPays;

        return $this;
    }

    /**
     * Get prospectAccessPays
     *
     * @return string
     */
    public function getProspectAccessPays()
    {
        return $this->prospectAccessPays;
    }

    /**
     * Set prospectAccessDateCreation
     *
     * @param \DateTime $prospectAccessDateCreation
     *
     * @return TEleves
     */
    public function setProspectAccessDateCreation($prospectAccessDateCreation)
    {
        $this->prospectAccessDateCreation = $prospectAccessDateCreation;

        return $this;
    }

    /**
     * Get prospectAccessDateCreation
     *
     * @return \DateTime
     */
    public function getProspectAccessDateCreation()
    {
        return $this->prospectAccessDateCreation;
    }

    /**
     * Set prospectTitre
     *
     * @param string $prospectTitre
     *
     * @return TEleves
     */
    public function setProspectTitre($prospectTitre)
    {
        $this->prospectTitre = $prospectTitre;

        return $this;
    }

    /**
     * Get prospectTitre
     *
     * @return string
     */
    public function getProspectTitre()
    {
        return $this->prospectTitre;
    }

    /**
     * Set prospectNom
     *
     * @param string $prospectNom
     *
     * @return TEleves
     */
    public function setProspectNom($prospectNom)
    {
        $this->prospectNom = $prospectNom;

        return $this;
    }

    /**
     * Get prospectNom
     *
     * @return string
     */
    public function getProspectNom()
    {
        return $this->prospectNom;
    }

    /**
     * Set prospectNomjeunefille
     *
     * @param string $prospectNomjeunefille
     *
     * @return TEleves
     */
    public function setProspectNomjeunefille($prospectNomjeunefille)
    {
        $this->prospectNomjeunefille = $prospectNomjeunefille;

        return $this;
    }

    /**
     * Get prospectNomjeunefille
     *
     * @return string
     */
    public function getProspectNomjeunefille()
    {
        return $this->prospectNomjeunefille;
    }

    /**
     * Set prospectAdresse1
     *
     * @param string $prospectAdresse1
     *
     * @return TEleves
     */
    public function setProspectAdresse1($prospectAdresse1)
    {
        $this->prospectAdresse1 = $prospectAdresse1;

        return $this;
    }

    /**
     * Get prospectAdresse1
     *
     * @return string
     */
    public function getProspectAdresse1()
    {
        return $this->prospectAdresse1;
    }

    /**
     * Set prospectAdresse2
     *
     * @param string $prospectAdresse2
     *
     * @return TEleves
     */
    public function setProspectAdresse2($prospectAdresse2)
    {
        $this->prospectAdresse2 = $prospectAdresse2;

        return $this;
    }

    /**
     * Get prospectAdresse2
     *
     * @return string
     */
    public function getProspectAdresse2()
    {
        return $this->prospectAdresse2;
    }

    /**
     * Set prospectAdresse3
     *
     * @param string $prospectAdresse3
     *
     * @return TEleves
     */
    public function setProspectAdresse3($prospectAdresse3)
    {
        $this->prospectAdresse3 = $prospectAdresse3;

        return $this;
    }

    /**
     * Get prospectAdresse3
     *
     * @return string
     */
    public function getProspectAdresse3()
    {
        return $this->prospectAdresse3;
    }

    /**
     * Set prospectAdresse4
     *
     * @param string $prospectAdresse4
     *
     * @return TEleves
     */
    public function setProspectAdresse4($prospectAdresse4)
    {
        $this->prospectAdresse4 = $prospectAdresse4;

        return $this;
    }

    /**
     * Get prospectAdresse4
     *
     * @return string
     */
    public function getProspectAdresse4()
    {
        return $this->prospectAdresse4;
    }

    /**
     * Set prospectCp
     *
     * @param string $prospectCp
     *
     * @return TEleves
     */
    public function setProspectCp($prospectCp)
    {
        $this->prospectCp = $prospectCp;

        return $this;
    }

    /**
     * Get prospectCp
     *
     * @return string
     */
    public function getProspectCp()
    {
        return $this->prospectCp;
    }

    /**
     * Set prospectVille
     *
     * @param string $prospectVille
     *
     * @return TEleves
     */
    public function setProspectVille($prospectVille)
    {
        $this->prospectVille = $prospectVille;

        return $this;
    }

    /**
     * Get prospectVille
     *
     * @return string
     */
    public function getProspectVille()
    {
        return $this->prospectVille;
    }

    /**
     * Set prospectTeldomicile
     *
     * @param string $prospectTeldomicile
     *
     * @return TEleves
     */
    public function setProspectTeldomicile($prospectTeldomicile)
    {
        $this->prospectTeldomicile = $prospectTeldomicile;

        return $this;
    }

    /**
     * Get prospectTeldomicile
     *
     * @return string
     */
    public function getProspectTeldomicile()
    {
        return $this->prospectTeldomicile;
    }

    /**
     * Set prospectTelportable
     *
     * @param string $prospectTelportable
     *
     * @return TEleves
     */
    public function setProspectTelportable($prospectTelportable)
    {
        $this->prospectTelportable = $prospectTelportable;

        return $this;
    }

    /**
     * Get prospectTelportable
     *
     * @return string
     */
    public function getProspectTelportable()
    {
        return $this->prospectTelportable;
    }

    /**
     * Set prospectTeltravail
     *
     * @param string $prospectTeltravail
     *
     * @return TEleves
     */
    public function setProspectTeltravail($prospectTeltravail)
    {
        $this->prospectTeltravail = $prospectTeltravail;

        return $this;
    }

    /**
     * Get prospectTeltravail
     *
     * @return string
     */
    public function getProspectTeltravail()
    {
        return $this->prospectTeltravail;
    }

    /**
     * Set prospectFax
     *
     * @param string $prospectFax
     *
     * @return TEleves
     */
    public function setProspectFax($prospectFax)
    {
        $this->prospectFax = $prospectFax;

        return $this;
    }

    /**
     * Get prospectFax
     *
     * @return string
     */
    public function getProspectFax()
    {
        return $this->prospectFax;
    }

    /**
     * Set prospectAccessResporganisme
     *
     * @param string $prospectAccessResporganisme
     *
     * @return TEleves
     */
    public function setProspectAccessResporganisme($prospectAccessResporganisme)
    {
        $this->prospectAccessResporganisme = $prospectAccessResporganisme;

        return $this;
    }

    /**
     * Get prospectAccessResporganisme
     *
     * @return string
     */
    public function getProspectAccessResporganisme()
    {
        return $this->prospectAccessResporganisme;
    }

    /**
     * Set prospectAccessHeurejournee
     *
     * @param string $prospectAccessHeurejournee
     *
     * @return TEleves
     */
    public function setProspectAccessHeurejournee($prospectAccessHeurejournee)
    {
        $this->prospectAccessHeurejournee = $prospectAccessHeurejournee;

        return $this;
    }

    /**
     * Get prospectAccessHeurejournee
     *
     * @return string
     */
    public function getProspectAccessHeurejournee()
    {
        return $this->prospectAccessHeurejournee;
    }

    /**
     * Set prospectAccessHeuresoir
     *
     * @param string $prospectAccessHeuresoir
     *
     * @return TEleves
     */
    public function setProspectAccessHeuresoir($prospectAccessHeuresoir)
    {
        $this->prospectAccessHeuresoir = $prospectAccessHeuresoir;

        return $this;
    }

    /**
     * Get prospectAccessHeuresoir
     *
     * @return string
     */
    public function getProspectAccessHeuresoir()
    {
        return $this->prospectAccessHeuresoir;
    }

    /**
     * Set prospectEmail
     *
     * @param string $prospectEmail
     *
     * @return TEleves
     */
    public function setProspectEmail($prospectEmail)
    {
        $this->prospectEmail = $prospectEmail;

        return $this;
    }

    /**
     * Get prospectEmail
     *
     * @return string
     */
    public function getProspectEmail()
    {
        return $this->prospectEmail;
    }

    /**
     * Set prospectDatenaissance
     *
     * @param \DateTime $prospectDatenaissance
     *
     * @return TEleves
     */
    public function setProspectDatenaissance($prospectDatenaissance)
    {
        $this->prospectDatenaissance = $prospectDatenaissance;

        return $this;
    }

    /**
     * Get prospectDatenaissance
     *
     * @return \DateTime
     */
    public function getProspectDatenaissance()
    {
        return $this->prospectDatenaissance;
    }

    /**
     * Set prospectAge
     *
     * @param string $prospectAge
     *
     * @return TEleves
     */
    public function setProspectAge($prospectAge)
    {
        $this->prospectAge = $prospectAge;

        return $this;
    }

    /**
     * Get prospectAge
     *
     * @return string
     */
    public function getProspectAge()
    {
        return $this->prospectAge;
    }

    /**
     * Set prospectLieunaissance
     *
     * @param string $prospectLieunaissance
     *
     * @return TEleves
     */
    public function setProspectLieunaissance($prospectLieunaissance)
    {
        $this->prospectLieunaissance = $prospectLieunaissance;

        return $this;
    }

    /**
     * Get prospectLieunaissance
     *
     * @return string
     */
    public function getProspectLieunaissance()
    {
        return $this->prospectLieunaissance;
    }

    /**
     * Set prospectProfession
     *
     * @param string $prospectProfession
     *
     * @return TEleves
     */
    public function setProspectProfession($prospectProfession)
    {
        $this->prospectProfession = $prospectProfession;

        return $this;
    }

    /**
     * Get prospectProfession
     *
     * @return string
     */
    public function getProspectProfession()
    {
        return $this->prospectProfession;
    }

    /**
     * Set prospectEtude
     *
     * @param string $prospectEtude
     *
     * @return TEleves
     */
    public function setProspectEtude($prospectEtude)
    {
        $this->prospectEtude = $prospectEtude;

        return $this;
    }

    /**
     * Get prospectEtude
     *
     * @return string
     */
    public function getProspectEtude()
    {
        return $this->prospectEtude;
    }

    /**
     * Set assistante
     *
     * @param string $assistante
     *
     * @return TEleves
     */
    public function setAssistante($assistante)
    {
        $this->assistante = $assistante;

        return $this;
    }

    /**
     * Get assistante
     *
     * @return string
     */
    public function getAssistante()
    {
        return $this->assistante;
    }

    /**
     * Set prospectAuteur
     *
     * @param string $prospectAuteur
     *
     * @return TEleves
     */
    public function setProspectAuteur($prospectAuteur)
    {
        $this->prospectAuteur = $prospectAuteur;

        return $this;
    }

    /**
     * Get prospectAuteur
     *
     * @return string
     */
    public function getProspectAuteur()
    {
        return $this->prospectAuteur;
    }

    /**
     * Set prospectAccessDateDernieremodif
     *
     * @param \DateTime $prospectAccessDateDernieremodif
     *
     * @return TEleves
     */
    public function setProspectAccessDateDernieremodif($prospectAccessDateDernieremodif)
    {
        $this->prospectAccessDateDernieremodif = $prospectAccessDateDernieremodif;

        return $this;
    }

    /**
     * Get prospectAccessDateDernieremodif
     *
     * @return \DateTime
     */
    public function getProspectAccessDateDernieremodif()
    {
        return $this->prospectAccessDateDernieremodif;
    }

    /**
     * Set prospectAccessMailing
     *
     * @param boolean $prospectAccessMailing
     *
     * @return TEleves
     */
    public function setProspectAccessMailing($prospectAccessMailing)
    {
        $this->prospectAccessMailing = $prospectAccessMailing;

        return $this;
    }

    /**
     * Get prospectAccessMailing
     *
     * @return boolean
     */
    public function getProspectAccessMailing()
    {
        return $this->prospectAccessMailing;
    }

    /**
     * Set prospectAccessNomphonetique
     *
     * @param string $prospectAccessNomphonetique
     *
     * @return TEleves
     */
    public function setProspectAccessNomphonetique($prospectAccessNomphonetique)
    {
        $this->prospectAccessNomphonetique = $prospectAccessNomphonetique;

        return $this;
    }

    /**
     * Get prospectAccessNomphonetique
     *
     * @return string
     */
    public function getProspectAccessNomphonetique()
    {
        return $this->prospectAccessNomphonetique;
    }

    /**
     * Set prospectAccessLanguage
     *
     * @param string $prospectAccessLanguage
     *
     * @return TEleves
     */
    public function setProspectAccessLanguage($prospectAccessLanguage)
    {
        $this->prospectAccessLanguage = $prospectAccessLanguage;

        return $this;
    }

    /**
     * Get prospectAccessLanguage
     *
     * @return string
     */
    public function getProspectAccessLanguage()
    {
        return $this->prospectAccessLanguage;
    }

    /**
     * Set prospectAccessNomalpha
     *
     * @param string $prospectAccessNomalpha
     *
     * @return TEleves
     */
    public function setProspectAccessNomalpha($prospectAccessNomalpha)
    {
        $this->prospectAccessNomalpha = $prospectAccessNomalpha;

        return $this;
    }

    /**
     * Get prospectAccessNomalpha
     *
     * @return string
     */
    public function getProspectAccessNomalpha()
    {
        return $this->prospectAccessNomalpha;
    }

    /**
     * Set prospectAccessNbdefinitif
     *
     * @param integer $prospectAccessNbdefinitif
     *
     * @return TEleves
     */
    public function setProspectAccessNbdefinitif($prospectAccessNbdefinitif)
    {
        $this->prospectAccessNbdefinitif = $prospectAccessNbdefinitif;

        return $this;
    }

    /**
     * Get prospectAccessNbdefinitif
     *
     * @return integer
     */
    public function getProspectAccessNbdefinitif()
    {
        return $this->prospectAccessNbdefinitif;
    }

    /**
     * Set prospectDescription
     *
     * @param string $prospectDescription
     *
     * @return TEleves
     */
    public function setProspectDescription($prospectDescription)
    {
        $this->prospectDescription = $prospectDescription;

        return $this;
    }

    /**
     * Get prospectDescription
     *
     * @return string
     */
    public function getProspectDescription()
    {
        return $this->prospectDescription;
    }

    /**
     * Set commandeDatesignaturebi
     *
     * @param \DateTime $commandeDatesignaturebi
     *
     * @return TEleves
     */
    public function setCommandeDatesignaturebi($commandeDatesignaturebi)
    {
        $this->commandeDatesignaturebi = $commandeDatesignaturebi;

        return $this;
    }

    /**
     * Get commandeDatesignaturebi
     *
     * @return \DateTime
     */
    public function getCommandeDatesignaturebi()
    {
        return $this->commandeDatesignaturebi;
    }

    /**
     * Set commandeFormation
     *
     * @param string $commandeFormation
     *
     * @return TEleves
     */
    public function setCommandeFormation($commandeFormation)
    {
        $this->commandeFormation = $commandeFormation;

        return $this;
    }

    /**
     * Get commandeFormation
     *
     * @return string
     */
    public function getCommandeFormation()
    {
        return $this->commandeFormation;
    }

    /**
     * Set commandeDatecreate
     *
     * @param \DateTime $commandeDatecreate
     *
     * @return TEleves
     */
    public function setCommandeDatecreate($commandeDatecreate)
    {
        $this->commandeDatecreate = $commandeDatecreate;

        return $this;
    }

    /**
     * Get commandeDatecreate
     *
     * @return \DateTime
     */
    public function getCommandeDatecreate()
    {
        return $this->commandeDatecreate;
    }

    /**
     * Set commandeUpdate
     *
     * @param \DateTime $commandeUpdate
     *
     * @return TEleves
     */
    public function setCommandeUpdate($commandeUpdate)
    {
        $this->commandeUpdate = $commandeUpdate;

        return $this;
    }

    /**
     * Get commandeUpdate
     *
     * @return \DateTime
     */
    public function getCommandeUpdate()
    {
        return $this->commandeUpdate;
    }

    /**
     * Set formationType
     *
     * @param string $formationType
     *
     * @return TEleves
     */
    public function setFormationType($formationType)
    {
        $this->formationType = $formationType;

        return $this;
    }

    /**
     * Get formationType
     *
     * @return string
     */
    public function getFormationType()
    {
        return $this->formationType;
    }

    /**
     * Set echDaterecep
     *
     * @param \DateTime $echDaterecep
     *
     * @return TEleves
     */
    public function setEchDaterecep($echDaterecep)
    {
        $this->echDaterecep = $echDaterecep;

        return $this;
    }

    /**
     * Get echDaterecep
     *
     * @return \DateTime
     */
    public function getEchDaterecep()
    {
        return $this->echDaterecep;
    }

    /**
     * Set echDateprelev
     *
     * @param \DateTime $echDateprelev
     *
     * @return TEleves
     */
    public function setEchDateprelev($echDateprelev)
    {
        $this->echDateprelev = $echDateprelev;

        return $this;
    }

    /**
     * Get echDateprelev
     *
     * @return \DateTime
     */
    public function getEchDateprelev()
    {
        return $this->echDateprelev;
    }

    /**
     * Set echMttcontrat
     *
     * @param string $echMttcontrat
     *
     * @return TEleves
     */
    public function setEchMttcontrat($echMttcontrat)
    {
        $this->echMttcontrat = $echMttcontrat;

        return $this;
    }

    /**
     * Get echMttcontrat
     *
     * @return string
     */
    public function getEchMttcontrat()
    {
        return $this->echMttcontrat;
    }

    /**
     * Set echMttprelev
     *
     * @param string $echMttprelev
     *
     * @return TEleves
     */
    public function setEchMttprelev($echMttprelev)
    {
        $this->echMttprelev = $echMttprelev;

        return $this;
    }

    /**
     * Get echMttprelev
     *
     * @return string
     */
    public function getEchMttprelev()
    {
        return $this->echMttprelev;
    }

    /**
     * Set echSociete
     *
     * @param string $echSociete
     *
     * @return TEleves
     */
    public function setEchSociete($echSociete)
    {
        $this->echSociete = $echSociete;

        return $this;
    }

    /**
     * Get echSociete
     *
     * @return string
     */
    public function getEchSociete()
    {
        return $this->echSociete;
    }

    /**
     * Set echDatesolde
     *
     * @param \DateTime $echDatesolde
     *
     * @return TEleves
     */
    public function setEchDatesolde($echDatesolde)
    {
        $this->echDatesolde = $echDatesolde;

        return $this;
    }

    /**
     * Get echDatesolde
     *
     * @return \DateTime
     */
    public function getEchDatesolde()
    {
        return $this->echDatesolde;
    }

    /**
     * Set echSolde
     *
     * @param string $echSolde
     *
     * @return TEleves
     */
    public function setEchSolde($echSolde)
    {
        $this->echSolde = $echSolde;

        return $this;
    }

    /**
     * Get echSolde
     *
     * @return string
     */
    public function getEchSolde()
    {
        return $this->echSolde;
    }

    /**
     * Set echDatetransfert
     *
     * @param \DateTime $echDatetransfert
     *
     * @return TEleves
     */
    public function setEchDatetransfert($echDatetransfert)
    {
        $this->echDatetransfert = $echDatetransfert;

        return $this;
    }

    /**
     * Get echDatetransfert
     *
     * @return \DateTime
     */
    public function getEchDatetransfert()
    {
        return $this->echDatetransfert;
    }

    /**
     * Set echSocieteop
     *
     * @param string $echSocieteop
     *
     * @return TEleves
     */
    public function setEchSocieteop($echSocieteop)
    {
        $this->echSocieteop = $echSocieteop;

        return $this;
    }

    /**
     * Get echSocieteop
     *
     * @return string
     */
    public function getEchSocieteop()
    {
        return $this->echSocieteop;
    }

    /**
     * Set echDatedernieremodif
     *
     * @param \DateTime $echDatedernieremodif
     *
     * @return TEleves
     */
    public function setEchDatedernieremodif($echDatedernieremodif)
    {
        $this->echDatedernieremodif = $echDatedernieremodif;

        return $this;
    }

    /**
     * Get echDatedernieremodif
     *
     * @return \DateTime
     */
    public function getEchDatedernieremodif()
    {
        return $this->echDatedernieremodif;
    }

    /**
     * Set echDateContrat
     *
     * @param \DateTime $echDateContrat
     *
     * @return TEleves
     */
    public function setEchDateContrat($echDateContrat)
    {
        $this->echDateContrat = $echDateContrat;

        return $this;
    }

    /**
     * Get echDateContrat
     *
     * @return \DateTime
     */
    public function getEchDateContrat()
    {
        return $this->echDateContrat;
    }

    /**
     * Set echDateAcompte
     *
     * @param \DateTime $echDateAcompte
     *
     * @return TEleves
     */
    public function setEchDateAcompte($echDateAcompte)
    {
        $this->echDateAcompte = $echDateAcompte;

        return $this;
    }

    /**
     * Get echDateAcompte
     *
     * @return \DateTime
     */
    public function getEchDateAcompte()
    {
        return $this->echDateAcompte;
    }

    /**
     * Set echMttacompte
     *
     * @param string $echMttacompte
     *
     * @return TEleves
     */
    public function setEchMttacompte($echMttacompte)
    {
        $this->echMttacompte = $echMttacompte;

        return $this;
    }

    /**
     * Get echMttacompte
     *
     * @return string
     */
    public function getEchMttacompte()
    {
        return $this->echMttacompte;
    }

    /**
     * Set echDatedebutprelev
     *
     * @param \DateTime $echDatedebutprelev
     *
     * @return TEleves
     */
    public function setEchDatedebutprelev($echDatedebutprelev)
    {
        $this->echDatedebutprelev = $echDatedebutprelev;

        return $this;
    }

    /**
     * Get echDatedebutprelev
     *
     * @return \DateTime
     */
    public function getEchDatedebutprelev()
    {
        return $this->echDatedebutprelev;
    }

    /**
     * Set echDatefinprelev
     *
     * @param \DateTime $echDatefinprelev
     *
     * @return TEleves
     */
    public function setEchDatefinprelev($echDatefinprelev)
    {
        $this->echDatefinprelev = $echDatefinprelev;

        return $this;
    }

    /**
     * Get echDatefinprelev
     *
     * @return \DateTime
     */
    public function getEchDatefinprelev()
    {
        return $this->echDatefinprelev;
    }

    /**
     * Set echDatedernierprelev
     *
     * @param \DateTime $echDatedernierprelev
     *
     * @return TEleves
     */
    public function setEchDatedernierprelev($echDatedernierprelev)
    {
        $this->echDatedernierprelev = $echDatedernierprelev;

        return $this;
    }

    /**
     * Get echDatedernierprelev
     *
     * @return \DateTime
     */
    public function getEchDatedernierprelev()
    {
        return $this->echDatedernierprelev;
    }

    /**
     * Set echMttdernierprelev
     *
     * @param string $echMttdernierprelev
     *
     * @return TEleves
     */
    public function setEchMttdernierprelev($echMttdernierprelev)
    {
        $this->echMttdernierprelev = $echMttdernierprelev;

        return $this;
    }

    /**
     * Get echMttdernierprelev
     *
     * @return string
     */
    public function getEchMttdernierprelev()
    {
        return $this->echMttdernierprelev;
    }

    /**
     * Set echNbprelev
     *
     * @param integer $echNbprelev
     *
     * @return TEleves
     */
    public function setEchNbprelev($echNbprelev)
    {
        $this->echNbprelev = $echNbprelev;

        return $this;
    }

    /**
     * Get echNbprelev
     *
     * @return integer
     */
    public function getEchNbprelev()
    {
        return $this->echNbprelev;
    }

    /**
     * Set echMttretard
     *
     * @param string $echMttretard
     *
     * @return TEleves
     */
    public function setEchMttretard($echMttretard)
    {
        $this->echMttretard = $echMttretard;

        return $this;
    }

    /**
     * Get echMttretard
     *
     * @return string
     */
    public function getEchMttretard()
    {
        return $this->echMttretard;
    }

    /**
     * Set echDatecfe
     *
     * @param \DateTime $echDatecfe
     *
     * @return TEleves
     */
    public function setEchDatecfe($echDatecfe)
    {
        $this->echDatecfe = $echDatecfe;

        return $this;
    }

    /**
     * Get echDatecfe
     *
     * @return \DateTime
     */
    public function getEchDatecfe()
    {
        return $this->echDatecfe;
    }

    /**
     * Set commandesNoordre
     *
     * @param integer $commandesNoordre
     *
     * @return TEleves
     */
    public function setCommandesNoordre($commandesNoordre)
    {
        $this->commandesNoordre = $commandesNoordre;

        return $this;
    }

    /**
     * Get commandesNoordre
     *
     * @return integer
     */
    public function getCommandesNoordre()
    {
        return $this->commandesNoordre;
    }

    /**
     * Set formationCode
     *
     * @param string $formationCode
     *
     * @return TEleves
     */
    public function setFormationCode($formationCode)
    {
        $this->formationCode = $formationCode;

        return $this;
    }

    /**
     * Get formationCode
     *
     * @return string
     */
    public function getFormationCode()
    {
        return $this->formationCode;
    }

    /**
     * Set echDatetransfertweb
     *
     * @param \DateTime $echDatetransfertweb
     *
     * @return TEleves
     */
    public function setEchDatetransfertweb($echDatetransfertweb)
    {
        $this->echDatetransfertweb = $echDatetransfertweb;

        return $this;
    }

    /**
     * Get echDatetransfertweb
     *
     * @return \DateTime
     */
    public function getEchDatetransfertweb()
    {
        return $this->echDatetransfertweb;
    }

    /**
     * Set fDureelegale
     *
     * @param string $fDureelegale
     *
     * @return TEleves
     */
    public function setFDureelegale($fDureelegale)
    {
        $this->fDureelegale = $fDureelegale;

        return $this;
    }

    /**
     * Get fDureelegale
     *
     * @return string
     */
    public function getFDureelegale()
    {
        return $this->fDureelegale;
    }

    /**
     * Set fDatemaj
     *
     * @param \DateTime $fDatemaj
     *
     * @return TEleves
     */
    public function setFDatemaj($fDatemaj)
    {
        $this->fDatemaj = $fDatemaj;

        return $this;
    }

    /**
     * Get fDatemaj
     *
     * @return \DateTime
     */
    public function getFDatemaj()
    {
        return $this->fDatemaj;
    }

    /**
     * Set echAssistante
     *
     * @param string $echAssistante
     *
     * @return TEleves
     */
    public function setEchAssistante($echAssistante)
    {
        $this->echAssistante = $echAssistante;

        return $this;
    }

    /**
     * Get echAssistante
     *
     * @return string
     */
    public function getEchAssistante()
    {
        return $this->echAssistante;
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
}

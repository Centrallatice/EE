<?php

namespace EleveBundle\Entity\EntityIconet;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agents
 *
 * @ORM\Table(name="VA_Agents")
 * @ORM\Entity(repositoryClass="EleveBundle\Repository\EntityIconet\AgentsRepository")
 */
class Agents
{
    /**
     * @ORM\Column(name="Agent_Code", type="string", length=50, unique=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
    */
    private $agentCode;

    /**
     * @var string
     *
     * @ORM\Column(name="Agent_ResponsableDossier", type="string", length=255, nullable=true)
     */
    private $agentResponsableDossier;

    /**
     * @var int
     *
     * @ORM\Column(name="Agent_Civilité", type="integer", nullable=true)
     */
    private $agentCivilite;

    /**
     * @var string
     *
     * @ORM\Column(name="Agent_Nom", type="string", length=255, nullable=true)
     */
    private $agentNom;

    /**
     * @var string
     *
     * @ORM\Column(name="Agent_Adresse1", type="string", length=255, nullable=true)
     */
    private $agentAdresse1;

    /**
     * @var string
     *
     * @ORM\Column(name="Agent_Adresse2", type="string", length=255, nullable=true)
     */
    private $agentAdresse2;

    /**
     * @var string
     *
     * @ORM\Column(name="Agent_Ville", type="string", length=255, nullable=true)
     */
    private $agentVille;

    /**
     * @var string
     *
     * @ORM\Column(name="Agent_CP", type="string", length=20, nullable=true)
     */
    private $agentCP;

    /**
     * @var string
     *
     * @ORM\Column(name="Agent_NumTel", type="string", length=50, nullable=true)
     */
    private $agentNumTel;

    /**
     * @var string
     *
     * @ORM\Column(name="Agent_NumFax", type="string", length=50, nullable=true)
     */
    private $agentNumFax;

    /**
     * @var string
     *
     * @ORM\Column(name="Agent_Email", type="string", length=255, nullable=true)
     */
    private $agentEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="Agent_Login", type="string", length=255, nullable=true)
     */
    private $agentLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="Agent_NumPortable", type="string", length=50, nullable=true)
     */
    private $agentNumPortable;

    /**
     * @var string
     *
     * @ORM\Column(name="Agent_Initiale", type="string", length=50, nullable=true)
     */
    private $agentInitiale;

    /**
     * @var string
     *
     * @ORM\Column(name="Agent_HoraireLundi", type="string", length=255, nullable=true)
     */
    private $agentHoraireLundi;

    /**
     * @var string
     *
     * @ORM\Column(name="Agent_HoraireMardi", type="string", length=255, nullable=true)
     */
    private $agentHoraireMardi;

    /**
     * @var string
     *
     * @ORM\Column(name="Agent_HoraireMercredi", type="string", length=255, nullable=true)
     */
    private $agentHoraireMercredi;

    /**
     * @var string
     *
     * @ORM\Column(name="Agent_HoraireJeudi", type="string", length=255, nullable=true)
     */
    private $agentHoraireJeudi;

    /**
     * @var string
     *
     * @ORM\Column(name="Agent_HoraireVendredi", type="string", length=255, nullable=true)
     */
    private $agentHoraireVendredi;

    /**
     * @var string
     *
     * @ORM\Column(name="Agent_HoraireSamedi", type="string", length=255, nullable=true)
     */
    private $agentHoraireSamedi;

    /**
     * @var string
     *
     * @ORM\Column(name="Agent_NumTelInterne", type="string", length=50, nullable=true)
     */
    private $agentNumTelInterne;

    /**
     * @var string
     *
     * @ORM\Column(name="Agent_Photo", type="string", length=255, nullable=true)
     */
    private $agentPhoto;

    /**
     * @var string
     *
     * @ORM\Column(name="Agent_Commentaires", type="string", length=255, nullable=true)
     */
    private $agentCommentaires;

    /**
     * @var string
     *
     * @ORM\Column(name="Agent_Photo_web", type="blob", nullable=true)
     */
    private $agentPhotoWeb;

    /**
     * @var guid
     *
     * @ORM\Column(name="rowguid", type="guid", unique=true,nullable=true)
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $rowguid;


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
     * Set agentCode
     *
     * @param string $agentCode
     *
     * @return Agents
     */
    public function setAgentCode($agentCode)
    {
        $this->agentCode = $agentCode;
    
        return $this;
    }

    /**
     * Get agentCode
     *
     * @return string
     */
    public function getAgentCode()
    {
        return $this->agentCode;
    }

    /**
     * Set agentResponsableDossier
     *
     * @param string $agentResponsableDossier
     *
     * @return Agents
     */
    public function setAgentResponsableDossier($agentResponsableDossier)
    {
        $this->agentResponsableDossier = $agentResponsableDossier;
    
        return $this;
    }

    /**
     * Get agentResponsableDossier
     *
     * @return string
     */
    public function getAgentResponsableDossier()
    {
        return $this->agentResponsableDossier;
    }

    /**
     * Set agentCivilit�
     *
     * @param integer $agentCivilite
     *
     * @return Agents
     */
    public function setAgentCivilite($agentCivilite)
    {
        $this->agentCivilite = $agentCivilite;
    
        return $this;
    }

    /**
     * Get agentCivilit�
     *
     * @return integer
     */
    public function getAgentCivilite()
    {
        return $this->agentCivilite;
    }

    /**
     * Set agentNom
     *
     * @param string $agentNom
     *
     * @return Agents
     */
    public function setAgentNom($agentNom)
    {
        $this->agentNom = $agentNom;
    
        return $this;
    }

    /**
     * Get agentNom
     *
     * @return string
     */
    public function getAgentNom()
    {
        return $this->agentNom;
    }

    /**
     * Set agentAdresse1
     *
     * @param string $agentAdresse1
     *
     * @return Agents
     */
    public function setAgentAdresse1($agentAdresse1)
    {
        $this->agentAdresse1 = $agentAdresse1;
    
        return $this;
    }

    /**
     * Get agentAdresse1
     *
     * @return string
     */
    public function getAgentAdresse1()
    {
        return $this->agentAdresse1;
    }

    /**
     * Set agentAdresse2
     *
     * @param string $agentAdresse2
     *
     * @return Agents
     */
    public function setAgentAdresse2($agentAdresse2)
    {
        $this->agentAdresse2 = $agentAdresse2;
    
        return $this;
    }

    /**
     * Get agentAdresse2
     *
     * @return string
     */
    public function getAgentAdresse2()
    {
        return $this->agentAdresse2;
    }

    /**
     * Set agentVille
     *
     * @param string $agentVille
     *
     * @return Agents
     */
    public function setAgentVille($agentVille)
    {
        $this->agentVille = $agentVille;
    
        return $this;
    }

    /**
     * Get agentVille
     *
     * @return string
     */
    public function getAgentVille()
    {
        return $this->agentVille;
    }

    /**
     * Set agentCP
     *
     * @param string $agentCP
     *
     * @return Agents
     */
    public function setAgentCP($agentCP)
    {
        $this->agentCP = $agentCP;
    
        return $this;
    }

    /**
     * Get agentCP
     *
     * @return string
     */
    public function getAgentCP()
    {
        return $this->agentCP;
    }

    /**
     * Set agentNumTel
     *
     * @param string $agentNumTel
     *
     * @return Agents
     */
    public function setAgentNumTel($agentNumTel)
    {
        $this->agentNumTel = $agentNumTel;
    
        return $this;
    }

    /**
     * Get agentNumTel
     *
     * @return string
     */
    public function getAgentNumTel()
    {
        return $this->agentNumTel;
    }

    /**
     * Set agentNumFax
     *
     * @param string $agentNumFax
     *
     * @return Agents
     */
    public function setAgentNumFax($agentNumFax)
    {
        $this->agentNumFax = $agentNumFax;
    
        return $this;
    }

    /**
     * Get agentNumFax
     *
     * @return string
     */
    public function getAgentNumFax()
    {
        return $this->agentNumFax;
    }

    /**
     * Set agentEmail
     *
     * @param string $agentEmail
     *
     * @return Agents
     */
    public function setAgentEmail($agentEmail)
    {
        $this->agentEmail = $agentEmail;
    
        return $this;
    }

    /**
     * Get agentEmail
     *
     * @return string
     */
    public function getAgentEmail()
    {
        return $this->agentEmail;
    }

    /**
     * Set agentLogin
     *
     * @param string $agentLogin
     *
     * @return Agents
     */
    public function setAgentLogin($agentLogin)
    {
        $this->agentLogin = $agentLogin;
    
        return $this;
    }

    /**
     * Get agentLogin
     *
     * @return string
     */
    public function getAgentLogin()
    {
        return $this->agentLogin;
    }

    /**
     * Set agentNumPortable
     *
     * @param string $agentNumPortable
     *
     * @return Agents
     */
    public function setAgentNumPortable($agentNumPortable)
    {
        $this->agentNumPortable = $agentNumPortable;
    
        return $this;
    }

    /**
     * Get agentNumPortable
     *
     * @return string
     */
    public function getAgentNumPortable()
    {
        return $this->agentNumPortable;
    }

    /**
     * Set agentInitiale
     *
     * @param string $agentInitiale
     *
     * @return Agents
     */
    public function setAgentInitiale($agentInitiale)
    {
        $this->agentInitiale = $agentInitiale;
    
        return $this;
    }

    /**
     * Get agentInitiale
     *
     * @return string
     */
    public function getAgentInitiale()
    {
        return $this->agentInitiale;
    }

    /**
     * Set agentHoraireLundi
     *
     * @param string $agentHoraireLundi
     *
     * @return Agents
     */
    public function setAgentHoraireLundi($agentHoraireLundi)
    {
        $this->agentHoraireLundi = $agentHoraireLundi;
    
        return $this;
    }

    /**
     * Get agentHoraireLundi
     *
     * @return string
     */
    public function getAgentHoraireLundi()
    {
        return $this->agentHoraireLundi;
    }

    /**
     * Set agentHoraireMardi
     *
     * @param string $agentHoraireMardi
     *
     * @return Agents
     */
    public function setAgentHoraireMardi($agentHoraireMardi)
    {
        $this->agentHoraireMardi = $agentHoraireMardi;
    
        return $this;
    }

    /**
     * Get agentHoraireMardi
     *
     * @return string
     */
    public function getAgentHoraireMardi()
    {
        return $this->agentHoraireMardi;
    }

    /**
     * Set agentHoraireMercredi
     *
     * @param string $agentHoraireMercredi
     *
     * @return Agents
     */
    public function setAgentHoraireMercredi($agentHoraireMercredi)
    {
        $this->agentHoraireMercredi = $agentHoraireMercredi;
    
        return $this;
    }

    /**
     * Get agentHoraireMercredi
     *
     * @return string
     */
    public function getAgentHoraireMercredi()
    {
        return $this->agentHoraireMercredi;
    }

    /**
     * Set agentHoraireJeudi
     *
     * @param string $agentHoraireJeudi
     *
     * @return Agents
     */
    public function setAgentHoraireJeudi($agentHoraireJeudi)
    {
        $this->agentHoraireJeudi = $agentHoraireJeudi;
    
        return $this;
    }

    /**
     * Get agentHoraireJeudi
     *
     * @return string
     */
    public function getAgentHoraireJeudi()
    {
        return $this->agentHoraireJeudi;
    }

    /**
     * Set agentHoraireVendredi
     *
     * @param string $agentHoraireVendredi
     *
     * @return Agents
     */
    public function setAgentHoraireVendredi($agentHoraireVendredi)
    {
        $this->agentHoraireVendredi = $agentHoraireVendredi;
    
        return $this;
    }

    /**
     * Get agentHoraireVendredi
     *
     * @return string
     */
    public function getAgentHoraireVendredi()
    {
        return $this->agentHoraireVendredi;
    }

    /**
     * Set agentHoraireSamedi
     *
     * @param string $agentHoraireSamedi
     *
     * @return Agents
     */
    public function setAgentHoraireSamedi($agentHoraireSamedi)
    {
        $this->agentHoraireSamedi = $agentHoraireSamedi;
    
        return $this;
    }

    /**
     * Get agentHoraireSamedi
     *
     * @return string
     */
    public function getAgentHoraireSamedi()
    {
        return $this->agentHoraireSamedi;
    }

    /**
     * Set agentNumTelInterne
     *
     * @param string $agentNumTelInterne
     *
     * @return Agents
     */
    public function setAgentNumTelInterne($agentNumTelInterne)
    {
        $this->agentNumTelInterne = $agentNumTelInterne;
    
        return $this;
    }

    /**
     * Get agentNumTelInterne
     *
     * @return string
     */
    public function getAgentNumTelInterne()
    {
        return $this->agentNumTelInterne;
    }

    /**
     * Set agentPhoto
     *
     * @param string $agentPhoto
     *
     * @return Agents
     */
    public function setAgentPhoto($agentPhoto)
    {
        $this->agentPhoto = $agentPhoto;
    
        return $this;
    }

    /**
     * Get agentPhoto
     *
     * @return string
     */
    public function getAgentPhoto()
    {
        return $this->agentPhoto;
    }

    /**
     * Set agentCommentaires
     *
     * @param string $agentCommentaires
     *
     * @return Agents
     */
    public function setAgentCommentaires($agentCommentaires)
    {
        $this->agentCommentaires = $agentCommentaires;
    
        return $this;
    }

    /**
     * Get agentCommentaires
     *
     * @return string
     */
    public function getAgentCommentaires()
    {
        return $this->agentCommentaires;
    }

    /**
     * Set agentPhotoWeb
     *
     * @param string $agentPhotoWeb
     *
     * @return Agents
     */
    public function setAgentPhotoWeb($agentPhotoWeb)
    {
        $this->agentPhotoWeb = $agentPhotoWeb;
    
        return $this;
    }

    /**
     * Get agentPhotoWeb
     *
     * @return string
     */
    public function getAgentPhotoWeb()
    {
        return $this->agentPhotoWeb;
    }

    /**
     * Set rowguid
     *
     * @param guid $rowguid
     *
     * @return Agents
     */
    public function setRowguid($rowguid)
    {
        $this->rowguid = $rowguid;
    
        return $this;
    }

    /**
     * Get rowguid
     *
     * @return guid
     */
    public function getRowguid()
    {
        return $this->rowguid;
    }
}


<?php

namespace EleveBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AffectationTicket
 *
 * @ORM\Table(name="EE_Affectation_Ticket")
 * @ORM\Entity(repositoryClass="EleveBundle\Repository\AffectationTicketRepository")
 */
class AffectationTicket
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
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
     */
    private $titre;
    
    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", length=-1, nullable=true)
     */
    private $contenu;
    
    /**
     * @var int
     *
     * @ORM\Column(name="idTicket", type="integer", nullable=true)
     */
    private $idTicket;

    /**
    * @ORM\ManyToOne(targetEntity="Eleve", inversedBy="numordre")
    * @ORM\JoinColumn(name="numOrdre", referencedColumnName="Commandes_NoOrdre", nullable=false)
     */
    private $numOrdre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;

    /**
     * @var int
     *
     * @ORM\Column(name="etat", type="integer")
     */
    private $etat;
    
    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=50, nullable=true)
     */
    private $source;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="actif", type="boolean", nullable=true)
     */
    private $actif = '1';


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idTicket
     *
     * @param integer $idTicket
     *
     * @return AffectationTicket
     */
    public function setIdTicket($idTicket)
    {
        $this->idTicket = $idTicket;

        return $this;
    }

    /**
     * Get idTicket
     *
     * @return int
     */
    public function getIdTicket()
    {
        return $this->idTicket;
    }

    /**
     * Set numOrdre
     *
     * @param integer $numOrdre
     *
     * @return AffectationTicket
     */
    public function setNumOrdre($numOrdre)
    {
        $this->numOrdre = $numOrdre;

        return $this;
    }

    /**
     * Get numOrdre
     *
     * @return int
     */
    public function getNumOrdre()
    {
        return $this->numOrdre;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return AffectationTicket
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     *
     * @return AffectationTicket
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return int
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set source
     *
     * @param string $source
     *
     * @return AffectationTicket
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return AffectationTicket
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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return AffectationTicket
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set actif
     *
     * @param boolean $actif
     *
     * @return AffectationTicket
     */
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif
     *
     * @return boolean
     */
    public function getActif()
    {
        return $this->actif;
    }
}

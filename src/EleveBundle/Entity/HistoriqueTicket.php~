<?php

namespace EleveBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoriqueTicket
 *
 * @ORM\Table(name="EE_Historique_Ticket")
 * @ORM\Entity(repositoryClass="EleveBundle\Repository\HistoriqueTicketRepository")
 */
class HistoriqueTicket
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
    * @ORM\ManyToOne(targetEntity="AffectationTicket", inversedBy="id")
    * @ORM\JoinColumn(name="idAffectation", referencedColumnName="id", nullable=false)
     */
    private $idAffectation;

    

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAction", type="datetime")
     */
    private $dateAction;

    /**
     * @var string
     *
     * @ORM\Column(name="detailAction", type="text")
     */
    private $detailAction;
    
    /**
     * @var string
     *
     * @ORM\Column(name="solution", type="text", nullable=true)
     */
    private $solution;


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
     * Set idAffectation
     *
     * @param integer $idAffectation
     *
     * @return HistoriqueTicket
     */
    public function setIdAffectation($idAffectation)
    {
        $this->idAffectation = $idAffectation;

        return $this;
    }

    /**
     * Get idAffectation
     *
     * @return int
     */
    public function getIdAffectation()
    {
        return $this->idAffectation;
    }

  

    /**
     * Set dateAction
     *
     * @param \DateTime $dateAction
     *
     * @return HistoriqueTicket
     */
    public function setDateAction($dateAction)
    {
        $this->dateAction = $dateAction;

        return $this;
    }

    /**
     * Get dateAction
     *
     * @return \DateTime
     */
    public function getDateAction()
    {
        return $this->dateAction;
    }

    /**
     * Set detailAction
     *
     * @param string $detailAction
     *
     * @return HistoriqueTicket
     */
    public function setDetailAction($detailAction)
    {
        $this->detailAction = $detailAction;

        return $this;
    }

    /**
     * Get detailAction
     *
     * @return string
     */
    public function getDetailAction()
    {
        return $this->detailAction;
    }

    /**
     * Set solution
     *
     * @param string $solution
     *
     * @return HistoriqueTicket
     */
    public function setSolution($solution)
    {
        $this->solution = $solution;

        return $this;
    }

    /**
     * Get solution
     *
     * @return string
     */
    public function getSolution()
    {
        return $this->solution;
    }
}

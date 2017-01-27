<?php

namespace EleveBundle\Entity\EntityIconet;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudes
 *
 * @ORM\Table(name="VA_Etudes")
 * @ORM\Entity(repositoryClass="EleveBundle\Repository\EntityIconet\EtudesRepository")
 */
class Etudes
{
     /**
     * @ORM\Column(name="Etude_Code", type="string", length=5, unique=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $etudeCode;

    /**
     * @var string
     *
     * @ORM\Column(name="Etude_Description", type="string", length=255)
     */
    private $etudeDescription;

    /**
     * @var int
     *
     * @ORM\Column(name="Etude_Actif", type="integer")
     */
    private $etudeActif;

    /**
     * @var int
     *
     * @ORM\Column(name="Etude_NbrHeures", type="integer")
     */
    private $etudeNbrHeures;


    /**
     * Set etudeCode
     *
     * @param string $etudeCode
     *
     * @return Etudes
     */
    public function setEtudeCode($etudeCode)
    {
        $this->etudeCode = $etudeCode;
    
        return $this;
    }

    /**
     * Get etudeCode
     *
     * @return string
     */
    public function getEtudeCode()
    {
        return $this->etudeCode;
    }

    /**
     * Set etudeDescription
     *
     * @param string $etudeDescription
     *
     * @return Etudes
     */
    public function setEtudeDescription($etudeDescription)
    {
        $this->etudeDescription = $etudeDescription;
    
        return $this;
    }

    /**
     * Get etudeDescription
     *
     * @return string
     */
    public function getEtudeDescription()
    {
        return $this->etudeDescription;
    }

    /**
     * Set etudeActif
     *
     * @param integer $etudeActif
     *
     * @return Etudes
     */
    public function setEtudeActif($etudeActif)
    {
        $this->etudeActif = $etudeActif;
    
        return $this;
    }

    /**
     * Get etudeActif
     *
     * @return integer
     */
    public function getEtudeActif()
    {
        return $this->etudeActif;
    }

    /**
     * Set etudeNbrHeures
     *
     * @param integer $etudeNbrHeures
     *
     * @return Etudes
     */
    public function setEtudeNbrHeures($etudeNbrHeures)
    {
        $this->etudeNbrHeures = $etudeNbrHeures;
    
        return $this;
    }

    /**
     * Get etudeNbrHeures
     *
     * @return integer
     */
    public function getEtudeNbrHeures()
    {
        return $this->etudeNbrHeures;
    }
}


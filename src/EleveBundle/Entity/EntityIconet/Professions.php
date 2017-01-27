<?php

namespace EleveBundle\Entity\EntityIconet;

use Doctrine\ORM\Mapping as ORM;

/**
 * Professions
 *
 * @ORM\Table(name="VA_Professions")
 * @ORM\Entity(repositoryClass="EleveBundle\Repository\EntityIconet\ProfessionsRepository")
 */
class Professions
{
   

    /**
     * @var string
     *
     * @ORM\Column(name="Profession_code", type="string", length=5, unique=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $professionCode;

    /**
     * @var string
     *
     * @ORM\Column(name="Profession_Description", type="string", length=255)
     */
    private $professionDescription;

    /**
     * @var bool
     *
     * @ORM\Column(name="Profession_Actif", type="integer")
     */
    private $professionActif;

    /**
     * @var bool
     *
     * @ORM\Column(name="Profession_Iconet_Actif", type="integer")
     */
    private $professionIconetActif;


    /**
     * Set professionCode
     *
     * @param string $professionCode
     *
     * @return Professions
     */
    public function setProfessionCode($professionCode)
    {
        $this->professionCode = $professionCode;
    
        return $this;
    }

    /**
     * Get professionCode
     *
     * @return string
     */
    public function getProfessionCode()
    {
        return $this->professionCode;
    }

    /**
     * Set professionDescription
     *
     * @param string $professionDescription
     *
     * @return Professions
     */
    public function setProfessionDescription($professionDescription)
    {
        $this->professionDescription = $professionDescription;
    
        return $this;
    }

    /**
     * Get professionDescription
     *
     * @return string
     */
    public function getProfessionDescription()
    {
        return $this->professionDescription;
    }

    /**
     * Set professionActif
     *
     * @param boolean $professionActif
     *
     * @return Professions
     */
    public function setProfessionActif($professionActif)
    {
        $this->professionActif = $professionActif;
    
        return $this;
    }

    /**
     * Get professionActif
     *
     * @return boolean
     */
    public function getProfessionActif()
    {
        return $this->professionActif;
    }

    /**
     * Set professionIconetActif
     *
     * @param boolean $professionIconetActif
     *
     * @return Professions
     */
    public function setProfessionIconetActif($professionIconetActif)
    {
        $this->professionIconetActif = $professionIconetActif;
    
        return $this;
    }

    /**
     * Get professionIconetActif
     *
     * @return boolean
     */
    public function getProfessionIconetActif()
    {
        return $this->professionIconetActif;
    }
}


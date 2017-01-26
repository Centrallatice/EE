<?php

namespace EleveBundle\Entity\EntityFormations;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formations
 *
 * @ORM\Table(name="VA_Formations")
 * @ORM\Entity(repositoryClass="EleveBundle\Repository\EntityFormations\FormationsRepository")
 */
class Formations
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
     * @ORM\Column(name="formation", type="string", length=50, nullable=true)
     */
    private $formation;
    
    /**
     * @var string
     *
     * @ORM\Column(name="formation_libelle", type="string", length=50, nullable=true)
     */
    private $formationLibelle;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="marque", type="integer", nullable=true)
     */
    private $marque;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="visible", type="integer", nullable=true)
     */
    private $visible;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="visible_DdeDoc", type="integer", nullable=true)
     */
    private $visibleDdeDoc;
    
     /**
     * @var string
     *
     * @ORM\Column(name="url_image", type="string", length=100, nullable=true)
     */
    private $urlImage;
    
     /**
     * @var string
     *
     * @ORM\Column(name="url_retargeting", type="string", length=100, nullable=true)
     */
    private $urlRetargeting;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="l_image", type="integer", nullable=true)
     */
    private $lImage;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="h_image", type="integer", nullable=true)
     */
    private $hImage;
    
    /**
     * @var string
     *
     * @ORM\Column(name="type_image", type="string", length=4, nullable=true)
     */
    private $typeImage;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="ordre_affichage", type="integer", nullable=true)
     */
    private $ordreAffichage;
    
    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=50, nullable=true)
     */
    private $pays;
    
    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=50, nullable=true)
     */
    private $categorie;
    
    /**
     * @var string
     *
     * @ORM\Column(name="LogoMarque", type="string", length=255, nullable=true)
     */
    private $LogoMarque;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="epreuve", type="boolean", nullable=true, options={"default":0})
     */
    private $epreuve = false;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="idDiplomeo", type="integer", nullable=true)
     */
    private $idDiplomeo;
    
    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    public function __construct()
    {
        $this->epreuve = false;
    }

    /**
     * Set formation
     *
     * @param string $formation
     *
     * @return Formations
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
     * Set formationLibelle
     *
     * @param string $formationLibelle
     *
     * @return Formations
     */
    public function setFormationLibelle($formationLibelle)
    {
        $this->formationLibelle = $formationLibelle;
    
        return $this;
    }

    /**
     * Get formationLibelle
     *
     * @return string
     */
    public function getFormationLibelle()
    {
        return $this->formationLibelle;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return Formations
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set marque
     *
     * @param integer $marque
     *
     * @return Formations
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    
        return $this;
    }

    /**
     * Get marque
     *
     * @return integer
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set visible
     *
     * @param integer $visible
     *
     * @return Formations
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;
    
        return $this;
    }

    /**
     * Get visible
     *
     * @return integer
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set visibleDdeDoc
     *
     * @param integer $visibleDdeDoc
     *
     * @return Formations
     */
    public function setVisibleDdeDoc($visibleDdeDoc)
    {
        $this->visibleDdeDoc = $visibleDdeDoc;
    
        return $this;
    }

    /**
     * Get visibleDdeDoc
     *
     * @return integer
     */
    public function getVisibleDdeDoc()
    {
        return $this->visibleDdeDoc;
    }

    /**
     * Set urlImage
     *
     * @param string $urlImage
     *
     * @return Formations
     */
    public function setUrlImage($urlImage)
    {
        $this->urlImage = $urlImage;
    
        return $this;
    }

    /**
     * Get urlImage
     *
     * @return string
     */
    public function getUrlImage()
    {
        return $this->urlImage;
    }

    /**
     * Set urlRetargeting
     *
     * @param string $urlRetargeting
     *
     * @return Formations
     */
    public function setUrlRetargeting($urlRetargeting)
    {
        $this->urlRetargeting = $urlRetargeting;
    
        return $this;
    }

    /**
     * Get urlRetargeting
     *
     * @return string
     */
    public function getUrlRetargeting()
    {
        return $this->urlRetargeting;
    }

    /**
     * Set lImage
     *
     * @param integer $lImage
     *
     * @return Formations
     */
    public function setLImage($lImage)
    {
        $this->lImage = $lImage;
    
        return $this;
    }

    /**
     * Get lImage
     *
     * @return integer
     */
    public function getLImage()
    {
        return $this->lImage;
    }

    /**
     * Set hImage
     *
     * @param integer $hImage
     *
     * @return Formations
     */
    public function setHImage($hImage)
    {
        $this->hImage = $hImage;
    
        return $this;
    }

    /**
     * Get hImage
     *
     * @return integer
     */
    public function getHImage()
    {
        return $this->hImage;
    }

    /**
     * Set typeImage
     *
     * @param string $typeImage
     *
     * @return Formations
     */
    public function setTypeImage($typeImage)
    {
        $this->typeImage = $typeImage;
    
        return $this;
    }

    /**
     * Get typeImage
     *
     * @return string
     */
    public function getTypeImage()
    {
        return $this->typeImage;
    }

    /**
     * Set ordreAffichage
     *
     * @param integer $ordreAffichage
     *
     * @return Formations
     */
    public function setOrdreAffichage($ordreAffichage)
    {
        $this->ordreAffichage = $ordreAffichage;
    
        return $this;
    }

    /**
     * Get ordreAffichage
     *
     * @return integer
     */
    public function getOrdreAffichage()
    {
        return $this->ordreAffichage;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return Formations
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    
        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Formations
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    
        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set logoMarque
     *
     * @param string $logoMarque
     *
     * @return Formations
     */
    public function setLogoMarque($logoMarque)
    {
        $this->LogoMarque = $logoMarque;
    
        return $this;
    }

    /**
     * Get logoMarque
     *
     * @return string
     */
    public function getLogoMarque()
    {
        return $this->LogoMarque;
    }

    /**
     * Set epreuve
     *
     * @param boolean $epreuve
     *
     * @return Formations
     */
    public function setEpreuve($epreuve)
    {
        $this->epreuve = $epreuve;
    
        return $this;
    }

    /**
     * Get epreuve
     *
     * @return boolean
     */
    public function getEpreuve()
    {
        return $this->epreuve;
    }

    /**
     * Set idDiplomeo
     *
     * @param integer $idDiplomeo
     *
     * @return Formations
     */
    public function setIdDiplomeo($idDiplomeo)
    {
        $this->idDiplomeo = $idDiplomeo;
    
        return $this;
    }

    /**
     * Get idDiplomeo
     *
     * @return integer
     */
    public function getIdDiplomeo()
    {
        return $this->idDiplomeo;
    }
}

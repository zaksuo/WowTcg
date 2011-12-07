<?php

namespace Tcg\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tcg\DatabaseBundle\Entity\TcgCarte
 */
class TcgCarte
{
    /**
     * @var string $libelle
     */
    private $libelle;

    /**
     * @var integer $typeCarte
     */
    private $typeCarte;

    /**
     * @var integer $donnees
     */
    private $donnees;

    /**
     * @var integer $caracteristiques
     */
    private $caracteristiques;

    /**
     * @var string $image
     */
    private $image;

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var Tcg\DatabaseBundle\Entity\TcgEdition
     */
    private $edition;

    /**
     * @var Tcg\DatabaseBundle\Entity\TcgFaction
     */
    private $faction;


    /**
     * Set libelle
     *
     * @param string $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set typeCarte
     *
     * @param integer $typeCarte
     */
    public function setTypeCarte($typeCarte)
    {
        $this->typeCarte = $typeCarte;
    }

    /**
     * Get typeCarte
     *
     * @return integer 
     */
    public function getTypeCarte()
    {
        return $this->typeCarte;
    }

    /**
     * Set donnees
     *
     * @param integer $donnees
     */
    public function setDonnees($donnees)
    {
        $this->donnees = $donnees;
    }

    /**
     * Get donnees
     *
     * @return integer 
     */
    public function getDonnees()
    {
        return $this->donnees;
    }

    /**
     * Set caracteristiques
     *
     * @param integer $caracteristiques
     */
    public function setCaracteristiques($caracteristiques)
    {
        $this->caracteristiques = $caracteristiques;
    }

    /**
     * Get caracteristiques
     *
     * @return integer 
     */
    public function getCaracteristiques()
    {
        return $this->caracteristiques;
    }

    /**
     * Set image
     *
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
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
     * Set edition
     *
     * @param Tcg\DatabaseBundle\Entity\TcgEdition $edition
     */
    public function setEdition(\Tcg\DatabaseBundle\Entity\TcgEdition $edition)
    {
        $this->edition = $edition;
    }

    /**
     * Get edition
     *
     * @return Tcg\DatabaseBundle\Entity\TcgEdition 
     */
    public function getEdition()
    {
        return $this->edition;
    }

    /**
     * Set faction
     *
     * @param Tcg\DatabaseBundle\Entity\TcgFaction $faction
     */
    public function setFaction(\Tcg\DatabaseBundle\Entity\TcgFaction $faction)
    {
        $this->faction = $faction;
    }

    /**
     * Get faction
     *
     * @return Tcg\DatabaseBundle\Entity\TcgFaction 
     */
    public function getFaction()
    {
        return $this->faction;
    }
}
<?php

namespace Tcg\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tcg\DatabaseBundle\Entity\TcgClasse
 */
class TcgClasse
{
    /**
     * @var string $libelle
     */
    private $libelle;

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var Tcg\DatabaseBundle\Entity\TcgSpecialisation
     */
    private $specialisation;

    
    public function __toString() {
        return $this->specialisation;
    }

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set specialisation
     *
     * @param Tcg\DatabaseBundle\Entity\TcgSpecialisation $specialisation
     */
    public function setSpecialisation(\Tcg\DatabaseBundle\Entity\TcgSpecialisation $specialisation)
    {
        $this->specialisation = $specialisation;
    }

    /**
     * Get specialisation
     *
     * @return Tcg\DatabaseBundle\Entity\TcgSpecialisation 
     */
    public function getSpecialisation()
    {
        return $this->specialisation;
    }
}
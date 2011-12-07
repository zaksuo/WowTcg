<?php

namespace Tcg\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tcg\DatabaseBundle\Entity\TcgSpecialisation
 */
class TcgSpecialisation
{
    /**
     * @var string $libelle
     */
    private $libelle;

    /**
     * @var integer $id
     */
    private $id;

    
    public function __toString() {
        return $this->libelle;
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
}
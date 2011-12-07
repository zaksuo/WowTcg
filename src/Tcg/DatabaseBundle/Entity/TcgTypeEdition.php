<?php

namespace Tcg\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tcg\DatabaseBundle\Entity\TcgTypeEdition
 */
class TcgTypeEdition
{
    /**
     * @var string $libelle
     */
    private $libelle;

    /**
     * @var string $icone
     */
    private $icone;

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
     * Set icone
     *
     * @param string $icone
     */
    public function setIcone($icone)
    {
        $this->icone = $icone;
    }

    /**
     * Get icone
     *
     * @return string 
     */
    public function getIcone()
    {
        return $this->icone;
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
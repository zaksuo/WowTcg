<?php

namespace Tcg\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tcg\DatabaseBundle\Entity\TcgDonnees
 */
class TcgDonnees
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var Tcg\DatabaseBundle\Entity\TcgRace
     */
    private $race;

    /**
     * @var Tcg\DatabaseBundle\Entity\TcgClasse
     */
    private $classe;

    public function __toString() {
        return $this->race;
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
     * Set race
     *
     * @param Tcg\DatabaseBundle\Entity\TcgRace $race
     */
    public function setRace(\Tcg\DatabaseBundle\Entity\TcgRace $race)
    {
        $this->race = $race;
    }

    /**
     * Get race
     *
     * @return Tcg\DatabaseBundle\Entity\TcgRace 
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set classe
     *
     * @param Tcg\DatabaseBundle\Entity\TcgClasse $classe
     */
    public function setClasse(\Tcg\DatabaseBundle\Entity\TcgClasse $classe)
    {
        $this->classe = $classe;
    }

    /**
     * Get classe
     *
     * @return Tcg\DatabaseBundle\Entity\TcgClasse 
     */
    public function getClasse()
    {
        return $this->classe;
    }
}
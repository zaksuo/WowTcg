<?php

namespace Tcg\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tcg\DatabaseBundle\Entity\TcgCaracteristiques
 */
class TcgCaracteristiques
{
    /**
     * @var integer $cout
     */
    private $cout;

    /**
     * @var string $coutIcone
     */
    private $coutIcone;

    /**
     * @var integer $attaque
     */
    private $attaque;

    /**
     * @var integer $vie
     */
    private $vie;

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var Tcg\DatabaseBundle\Entity\TcgAttaqueType
     */
    private $attaqueType;


    /**
     * Set cout
     *
     * @param integer $cout
     */
    public function setCout($cout)
    {
        $this->cout = $cout;
    }

    /**
     * Get cout
     *
     * @return integer 
     */
    public function getCout()
    {
        return $this->cout;
    }

    /**
     * Set coutIcone
     *
     * @param string $coutIcone
     */
    public function setCoutIcone($coutIcone)
    {
        $this->coutIcone = $coutIcone;
    }

    /**
     * Get coutIcone
     *
     * @return string 
     */
    public function getCoutIcone()
    {
        return $this->coutIcone;
    }

    /**
     * Set attaque
     *
     * @param integer $attaque
     */
    public function setAttaque($attaque)
    {
        $this->attaque = $attaque;
    }

    /**
     * Get attaque
     *
     * @return integer 
     */
    public function getAttaque()
    {
        return $this->attaque;
    }

    /**
     * Set vie
     *
     * @param integer $vie
     */
    public function setVie($vie)
    {
        $this->vie = $vie;
    }

    /**
     * Get vie
     *
     * @return integer 
     */
    public function getVie()
    {
        return $this->vie;
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
     * Set attaqueType
     *
     * @param Tcg\DatabaseBundle\Entity\TcgAttaqueType $attaqueType
     */
    public function setAttaqueType(\Tcg\DatabaseBundle\Entity\TcgAttaqueType $attaqueType)
    {
        $this->attaqueType = $attaqueType;
    }

    /**
     * Get attaqueType
     *
     * @return Tcg\DatabaseBundle\Entity\TcgAttaqueType 
     */
    public function getAttaqueType()
    {
        return $this->attaqueType;
    }
}
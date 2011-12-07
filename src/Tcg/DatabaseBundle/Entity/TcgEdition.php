<?php

namespace Tcg\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tcg\DatabaseBundle\Entity\TcgEdition
 */
class TcgEdition
{
    /**
     * @var string $libelle
     */
    private $libelle;

    /**
     * @var integer $nbCartes
     */
    private $nbCartes;

    /**
     * @var boolean $starterDeck
     */
    private $starterDeck;

    /**
     * @var string $icone
     */
    private $icone;

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var Tcg\DatabaseBundle\Entity\TcgTypeEdition
     */
    private $typeEdition;
    
    private $uploadPath;

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
     * Set nbCartes
     *
     * @param integer $nbCartes
     */
    public function setNbCartes($nbCartes)
    {
        $this->nbCartes = $nbCartes;
    }

    /**
     * Get nbCartes
     *
     * @return integer 
     */
    public function getNbCartes()
    {
        return $this->nbCartes;
    }

    /**
     * Set starterDeck
     *
     * @param boolean $starterDeck
     */
    public function setStarterDeck($starterDeck)
    {
        $this->starterDeck = $starterDeck;
    }

    /**
     * Get starterDeck
     *
     * @return boolean 
     */
    public function getStarterDeck()
    {
        return $this->starterDeck;
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

    /**
     * Set typeEdition
     *
     * @param Tcg\DatabaseBundle\Entity\TcgTypeEdition $typeEdition
     */
    public function setTypeEdition(\Tcg\DatabaseBundle\Entity\TcgTypeEdition $typeEdition)
    {
        $this->typeEdition = $typeEdition;
    }

    /**
     * Get typeEdition
     *
     * @return Tcg\DatabaseBundle\Entity\TcgTypeEdition 
     */
    public function getTypeEdition()
    {
        return $this->typeEdition;
    }
    
    public function setUploadPath( $path ) {
        $this->uploadPath = $path;
    }
    
    public function getUploadPath() {
        // the absolute directory path where uploaded documents should be saved
        return $this->uploadPath;
    }
    
    public function uploadIcone() {
    	if( isset($this->icone) ) {
            $file_path = $this->getUploadPath();
            $file_name = $this->icone->getClientOriginalName();
            $file_complete_path = $file_path.$file_name;

            $this->icone->move($file_path, $file_name);

            $content = file_get_contents($file_complete_path);	        
            unset($this->icone);
            $this->icone = $content;
            unlink($file_complete_path);
    	}
    }
    
    public function displayIcone() {
        if( isset($this->icone) ) {
            $filepath = "D:/appli/perso/WowTcgCollection/web/bundles/tcgcollection/images/edition/";
            
            if( !file_exists($filepath))
                mkdir( $filepath );
            
            $fp = fopen($filepath.$this->id.".png", 'a+');
            $written = fwrite($fp, $this->icone);
            fclose($fp);
        }
    }
}
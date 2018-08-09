<?php

namespace Site\CartronBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousMenuProduits
 */
class SousMenuProduits
{
    /**
     * @var string
     */
    private $titreFr;

    /**
     * @var string
     */
    private $titreEn;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set titreFr
     *
     * @param string $titreFr
     * @return SousMenuProduits
     */
    public function setTitreFr($titreFr)
    {
        $this->titreFr = $titreFr;
    
        return $this;
    }

    /**
     * Get titreFr
     *
     * @return string 
     */
    public function getTitreFr()
    {
        return $this->titreFr;
    }

    /**
     * Set titreEn
     *
     * @param string $titreEn
     * @return SousMenuProduits
     */
    public function setTitreEn($titreEn)
    {
        $this->titreEn = $titreEn;
    
        return $this;
    }

    /**
     * Get titreEn
     *
     * @return string 
     */
    public function getTitreEn()
    {
        return $this->titreEn;
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
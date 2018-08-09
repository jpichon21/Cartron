<?php

namespace Site\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 */
class Pays
{
    /**
     * @var string
     */
    private $pays;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set pays
     *
     * @param string $pays
     * @return Pays
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}

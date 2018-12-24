<?php

namespace Proxies\__CG__\Site\CartronBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class SousMenuDegustation extends \Site\CartronBundle\Entity\SousMenuDegustation implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function setDescriptionFr($descriptionFr)
    {
        $this->__load();
        return parent::setDescriptionFr($descriptionFr);
    }

    public function getDescriptionFr()
    {
        $this->__load();
        return parent::getDescriptionFr();
    }

    public function setNoteDegustationFr($noteDegustationFr)
    {
        $this->__load();
        return parent::setNoteDegustationFr($noteDegustationFr);
    }

    public function getNoteDegustationFr()
    {
        $this->__load();
        return parent::getNoteDegustationFr();
    }

    public function setDescriptionEn($descriptionEn)
    {
        $this->__load();
        return parent::setDescriptionEn($descriptionEn);
    }

    public function getDescriptionEn()
    {
        $this->__load();
        return parent::getDescriptionEn();
    }

    public function setNoteDegustationEn($noteDegustationEn)
    {
        $this->__load();
        return parent::setNoteDegustationEn($noteDegustationEn);
    }

    public function getNoteDegustationEn()
    {
        $this->__load();
        return parent::getNoteDegustationEn();
    }

    public function setImage($image)
    {
        $this->__load();
        return parent::setImage($image);
    }

    public function getImage()
    {
        $this->__load();
        return parent::getImage();
    }

    public function setCouleurArrierePlan($couleurArrierePlan)
    {
        $this->__load();
        return parent::setCouleurArrierePlan($couleurArrierePlan);
    }

    public function getCouleurArrierePlan()
    {
        $this->__load();
        return parent::getCouleurArrierePlan();
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setIdDegustation(\Site\CartronBundle\Entity\Degustation $idDegustation = NULL)
    {
        $this->__load();
        return parent::setIdDegustation($idDegustation);
    }

    public function getIdDegustation()
    {
        $this->__load();
        return parent::getIdDegustation();
    }

    public function setTitreFr($titreFr)
    {
        $this->__load();
        return parent::setTitreFr($titreFr);
    }

    public function getTitreFr()
    {
        $this->__load();
        return parent::getTitreFr();
    }

    public function setTitreEn($titreEn)
    {
        $this->__load();
        return parent::setTitreEn($titreEn);
    }

    public function getTitreEn()
    {
        $this->__load();
        return parent::getTitreEn();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'titreFr', 'descriptionFr', 'noteDegustationFr', 'titreEn', 'descriptionEn', 'noteDegustationEn', 'image', 'couleurArrierePlan', 'id', 'idDegustation');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}
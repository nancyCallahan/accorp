<?php

namespace administradorBundle\Entity;

/**
 * Tipus
 */
class Tipus
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $descripcio;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set descripcio
     *
     * @param string $descripcio
     *
     * @return Tipus
     */
    public function setDescripcio($descripcio)
    {
        $this->descripcio = $descripcio;

        return $this;
    }

    /**
     * Get descripcio
     *
     * @return string
     */
    public function getDescripcio()
    {
        return $this->descripcio;
    }
}


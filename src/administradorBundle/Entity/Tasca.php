<?php

namespace administradorBundle\Entity;

/**
 * Tasca
 */
class Tasca
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
     * @var int
     */
    private $horesEstimades;

    /**
     * @var int
     */
    private $horesReals;

    /**
     * @var int
     */
    private $codiProjecte;

    /**
     * @var int
     */
    private $codiTreballador;


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
     * @return Tasca
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

    /**
     * Set horesEstimades
     *
     * @param integer $horesEstimades
     *
     * @return Tasca
     */
    public function setHoresEstimades($horesEstimades)
    {
        $this->horesEstimades = $horesEstimades;

        return $this;
    }

    /**
     * Get horesEstimades
     *
     * @return int
     */
    public function getHoresEstimades()
    {
        return $this->horesEstimades;
    }

    /**
     * Set horesReals
     *
     * @param integer $horesReals
     *
     * @return Tasca
     */
    public function setHoresReals($horesReals)
    {
        $this->horesReals = $horesReals;

        return $this;
    }

    /**
     * Get horesReals
     *
     * @return int
     */
    public function getHoresReals()
    {
        return $this->horesReals;
    }

    /**
     * Set codiProjecte
     *
     * @param integer $codiProjecte
     *
     * @return Tasca
     */
    public function setCodiProjecte($codiProjecte)
    {
        $this->codiProjecte = $codiProjecte;

        return $this;
    }

    /**
     * Get codiProjecte
     *
     * @return int
     */
    public function getCodiProjecte()
    {
        return $this->codiProjecte;
    }

    /**
     * Set codiTreballador
     *
     * @param integer $codiTreballador
     *
     * @return Tasca
     */
    public function setCodiTreballador($codiTreballador)
    {
        $this->codiTreballador = $codiTreballador;

        return $this;
    }

    /**
     * Get codiTreballador
     *
     * @return int
     */
    public function getCodiTreballador()
    {
        return $this->codiTreballador;
    }
}


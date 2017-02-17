<?php

namespace administradorBundle\Entity;

/**
 * Projecte
 */
class Projecte
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $descripCurta;

    /**
     * @var string
     */
    private $descripLlarga;

    /**
     * @var string
     */
    private $entorn;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Projecte
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set descripCurta
     *
     * @param string $descripCurta
     *
     * @return Projecte
     */
    public function setDescripCurta($descripCurta)
    {
        $this->descripCurta = $descripCurta;

        return $this;
    }

    /**
     * Get descripCurta
     *
     * @return string
     */
    public function getDescripCurta()
    {
        return $this->descripCurta;
    }

    /**
     * Set descripLlarga
     *
     * @param string $descripLlarga
     *
     * @return Projecte
     */
    public function setDescripLlarga($descripLlarga)
    {
        $this->descripLlarga = $descripLlarga;

        return $this;
    }

    /**
     * Get descripLlarga
     *
     * @return string
     */
    public function getDescripLlarga()
    {
        return $this->descripLlarga;
    }

    /**
     * Set entorn
     *
     * @param string $entorn
     *
     * @return Projecte
     */
    public function setEntorn($entorn)
    {
        $this->entorn = $entorn;

        return $this;
    }

    /**
     * Get entorn
     *
     * @return string
     */
    public function getEntorn()
    {
        return $this->entorn;
    }
}


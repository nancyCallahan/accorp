<?php

namespace administradorBundle\Entity;

/**
 * Usuari
 */
class Usuari
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nif;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $password;

     /**
     * @var string
     */
    private $cognom;
    /**
     * @var string
     */
    private $mail;

    /**
     * @var int
     */
    private $horesTasca;

    /**
     * @var int
     */
    private $rol;


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
     * Set nif
     *
     * @param string $nif
     *
     * @return Usuari
     */
    public function setNif($nif)
    {
        $this->nif = $nif;

        return $this;
    }

    /**
     * Get nif
     *
     * @return string
     */
    public function getNif()
    {
        return $this->nif;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Usuari
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
     * Set cognom
     *
     * @param string $cognom
     *
     * @return Usuari
     */
    public function setCognom($cognom)
    {
        $this->cognom = $cognom;

        return $this;
    }

    /**
     * Get cognom
     *
     * @return string
     */
    public function getCognom()
    {
        return $this->cognom;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Usuari
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set horesTasca
     *
     * @param integer $horesTasca
     *
     * @return Usuari
     */
    public function setHoresTasca($horesTasca)
    {
        $this->horesTasca = $horesTasca;

        return $this;
    }

    /**
     * Get horesTasca
     *
     * @return int
     */
    public function getHoresTasca()
    {
        return $this->horesTasca;
    }

    /**
     * Set rol
     *
     * @param integer $rol
     *
     * @return Usuari
     */
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return int
     */
    public function getRol()
    {
        return $this->rol;
    }
}

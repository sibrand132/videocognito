<?php

namespace AppBundle\Entity;

/**
 * Aktorzy
 */
class Aktorzy
{
    /**
     * @var integer
     */
    private $idAktora;

    /**
     * @var string
     */
    private $imie;

    /**
     * @var string
     */
    private $nazwisko;

    /**
     * @var \DateTime
     */
    private $dataUrodzenia;

    /**
     * @var string
     */
    private $miejsceUrodzenia;

    /**
     * @var string
     */
    private $zdjecie;

    private $biografia;


    /**
     * Get idAktora
     *
     * @return integer
     */
    public function getIdAktora()
    {
        return $this->idAktora;
    }

    /**
     * Set imie
     *
     * @param string $imie
     *
     * @return Aktorzy
     */
    public function setImie($imie)
    {
        $this->imie = $imie;

        return $this;
    }

    /**
     * Get imie
     *
     * @return string
     */
    public function getImie()
    {
        return $this->imie;
    }

    /**
     * Set nazwisko
     *
     * @param string $nazwisko
     *
     * @return Aktorzy
     */
    public function setNazwisko($nazwisko)
    {
        $this->nazwisko = $nazwisko;

        return $this;
    }

    /**
     * Get nazwisko
     *
     * @return string
     */
    public function getNazwisko()
    {
        return $this->nazwisko;
    }

    /**
     * Set dataUrodzenia
     *
     * @param \DateTime $dataUrodzenia
     *
     * @return Aktorzy
     */
    public function setDataUrodzenia($dataUrodzenia)
    {
        $this->dataUrodzenia = $dataUrodzenia;

        return $this;
    }

    /**
     * Get dataUrodzenia
     *
     * @return \DateTime
     */
    public function getDataUrodzenia()
    {
        return $this->dataUrodzenia;
    }

    /**
     * Set miejsceUrodzenia
     *
     * @param \DateTime $miejsceUrodzenia
     *
     * @return Aktorzy
     */
    public function setMiejsceUrodzenia($miejsceUrodzenia)
    {
        $this->miejsceUrodzenia = $miejsceUrodzenia;

        return $this;
    }

    /**
     * Get miejsceUrodzenia
     *
     * @return string
     */
    public function getMiejsceUrodzenia()
    {
        return $this->miejsceUrodzenia;
    }

    /**
     * Set zdjecie
     *
     * @param string $zdjecie
     *
     * @return Aktorzy
     */
    public function setZdjecie($zdjecie)
    {
        $this->zdjecie = $zdjecie;

        return $this;
    }

    /**
     * Get zdjecie
     *
     * @return string
     */
    public function getZdjecie()
    {
        return $this->zdjecie;
    }

    public function getBiografia()
    {
        return $this->biografia;
    }


    public function setBiografia($biografia)
    {
        $this->biografia = $biografia;

        return $this;
    }
}

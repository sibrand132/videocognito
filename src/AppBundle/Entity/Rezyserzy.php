<?php

namespace AppBundle\Entity;

/**
 * Rezyserzy
 */
class Rezyserzy
{
    /**
     * @var integer
     */
    private $idRezysera;

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
     * Get idRezysera
     *
     * @return integer
     */
    public function getIdRezysera()
    {
        return $this->idRezysera;
    }

    /**
     * Set imie
     *
     * @param string $imie
     *
     * @return Rezyserzy
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
     * @return Rezyserzy
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
     * @return Rezyserzy
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
     * @param string $miejsceUrodzenia
     *
     * @return Rezyserzy
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
     * @return Rezyserzy
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

    /**
     * Set idRezysera
     *
     * @param \AppBundle\Entity\Filmy $idRezysera
     *
     * @return Rezyserzy
     */
    public function setIdRezysera(\AppBundle\Entity\Filmy $idRezysera = null)
    {
        $this->idRezysera = $idRezysera;

        return $this;
    }
}

<?php

namespace AppBundle\Entity;

/**
 * Komentarze
 */
class Komentarze
{
    /**
     * @var integer
     */
    private $idKomentarza;

    /**
     * @var string
     */
    private $komentarz;

    /**
     * @var integer
     */
    private $idFilmu;

    /**
     * @var string
     */
    private $uzytkownik;


    /**
     * Get idKomentarza
     *
     * @return integer
     */
    public function getIdKomentarza()
    {
        return $this->idKomentarza;
    }

    /**
     * Set komentarz
     *
     * @param string $komentarz
     *
     * @return Komentarze
     */
    public function setKomentarz($komentarz)
    {
        $this->komentarz = $komentarz;

        return $this;
    }

    /**
     * Get komentarz
     *
     * @return string
     */
    public function getKomentarz()
    {
        return $this->komentarz;
    }

    /**
     * Set idFilmu
     *
     * @param integer $idFilmu
     *
     * @return Komentarze
     */
    public function setIdFilmu($idFilmu)
    {
        $this->idFilmu = $idFilmu;

        return $this;
    }

    /**
     * Get idFilmu
     *
     * @return \AppBundle\Entity\Filmy
     */
    public function getIdFilmu()
    {
        return $this->idFilmu;
    }

    /**
     * Set idUzytkownika
     *
     * @param string $uzytkownik
     *
     * @return Komentarze
     */
    public function setUzytkownik($uzytkownik)
    {
        $this->uzytkownik = $uzytkownik;

        return $this;
    }

    /**
     * Get idUzytkownika
     *
     * @return string
     */
    public function getUzytkownik()
    {
        return $this->uzytkownik;
    }
}

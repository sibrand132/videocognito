<?php

namespace AppBundle\Entity;

/**
 * FilmyAktorzy
 */
class FilmyAktorzy
{
    /**
     * @var integer
     */
    private $idFilmyAktorzy;

    /**
     * @var string
     */
    private $rola;

    /**
     * @var \AppBundle\Entity\Aktorzy
     */
    private $idAktora;

    /**
     * @var \AppBundle\Entity\Filmy
     */
    private $idFilmu;


    /**
     * Get idFilmyAktorzy
     *
     * @return integer
     */
    public function getIdFilmyAktorzy()
    {
        return $this->idFilmyAktorzy;
    }

    /**
     * Set rola
     *
     * @param string $rola
     *
     * @return FilmyAktorzy
     */
    public function setRola($rola)
    {
        $this->rola = $rola;

        return $this;
    }

    /**
     * Get rola
     *
     * @return string
     */
    public function getRola()
    {
        return $this->rola;
    }

    /**
     * Set idAktora
     *
     * @param \AppBundle\Entity\Aktorzy $idAktora
     *
     * @return FilmyAktorzy
     */
    public function setIdAktora(\AppBundle\Entity\Aktorzy $idAktora = null)
    {
        $this->idAktora = $idAktora;

        return $this;
    }

    /**
     * Get idAktora
     *
     * @return \AppBundle\Entity\Aktorzy
     */
    public function getIdAktora()
    {
        return $this->idAktora;
    }

    /**
     * Set idFilmu
     *
     * @param \AppBundle\Entity\Filmy $idFilmu
     *
     * @return FilmyAktorzy
     */
    public function setIdFilmu(\AppBundle\Entity\Filmy $idFilmu = null)
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
}

<?php

namespace AppBundle\Entity;

/**
 * FilmyTrailery
 */
class FilmyTrailery
{
    /**
     * @var integer
     */
    private $idFilmyTrailery;

    /**
     * @var \AppBundle\Entity\Filmy
     */
    private $idFilmu;

    /**
     * @var \AppBundle\Entity\Trailery
     */
    private $idTrailera;


    /**
     * Get idFilmyTrailery
     *
     * @return integer
     */
    public function getIdFilmyTrailery()
    {
        return $this->idFilmyTrailery;
    }

    /**
     * Set idFilmu
     *
     * @param \AppBundle\Entity\Filmy $idFilmu
     *
     * @return FilmyTrailery
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

    /**
     * Set idTrailera
     *
     * @param \AppBundle\Entity\Trailery $idTrailera
     *
     * @return FilmyTrailery
     */
    public function setIdTrailera(\AppBundle\Entity\Trailery $idTrailera = null)
    {
        $this->idTrailera = $idTrailera;

        return $this;
    }

    /**
     * Get idTrailera
     *
     * @return \AppBundle\Entity\Trailery
     */
    public function getIdTrailera()
    {
        return $this->idTrailera;
    }
}

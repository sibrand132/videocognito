<?php

namespace AppBundle\Entity;

/**
 * FilmyGatunek
 */
class FilmyGatunek
{
    /**
     * @var integer
     */
    private $idFilmyGatunek;

    /**
     * @var \AppBundle\Entity\Filmy
     */
    private $idFilmu;

    /**
     * @var \AppBundle\Entity\Gatunek
     */
    private $idGatunku;


    /**
     * Get idFilmyGatunek
     *
     * @return integer
     */
    public function getIdFilmyGatunek()
    {
        return $this->idFilmyGatunek;
    }

    /**
     * Set idFilmu
     *
     * @param \AppBundle\Entity\Filmy $idFilmu
     *
     * @return FilmyGatunek
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
     * Set idGatunku
     *
     * @param \AppBundle\Entity\Gatunek $idGatunku
     *
     * @return FilmyGatunek
     */
    public function setIdGatunku(\AppBundle\Entity\Gatunek $idGatunku = null)
    {
        $this->idGatunku = $idGatunku;

        return $this;
    }

    /**
     * Get idGatunku
     *
     * @return \AppBundle\Entity\Gatunek
     */
    public function getIdGatunku()
    {
        return $this->idGatunku;
    }
}

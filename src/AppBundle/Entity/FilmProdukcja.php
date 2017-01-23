<?php

namespace AppBundle\Entity;

/**
 * FilmProdukcja
 */
class FilmProdukcja
{
    /**
     * @var integer
     */
    private $idFilmyProdukcja;

    /**
     * @var \AppBundle\Entity\Filmy
     */
    private $idFilmu;

    /**
     * @var \AppBundle\Entity\Produkcja
     */
    private $idProdukcji;


    /**
     * Get idFilmyProdukcja
     *
     * @return integer
     */
    public function getIdFilmyProdukcja()
    {
        return $this->idFilmyProdukcja;
    }

    /**
     * Set idFilmu
     *
     * @param \AppBundle\Entity\Filmy $idFilmu
     *
     * @return FilmProdukcja
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
     * Set idProdukcji
     *
     * @param \AppBundle\Entity\Produkcja $idProdukcji
     *
     * @return FilmProdukcja
     */
    public function setIdProdukcji(\AppBundle\Entity\Produkcja $idProdukcji = null)
    {
        $this->idProdukcji = $idProdukcji;

        return $this;
    }

    /**
     * Get idProdukcji
     *
     * @return \AppBundle\Entity\Produkcja
     */
    public function getIdProdukcji()
    {
        return $this->idProdukcji;
    }
}

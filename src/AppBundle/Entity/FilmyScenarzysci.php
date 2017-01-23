<?php

namespace AppBundle\Entity;

/**
 * FilmyScenarzysci
 */
class FilmyScenarzysci
{
    /**
     * @var integer
     */
    private $idFilmyScenarzysci;

    /**
     * @var \AppBundle\Entity\Filmy
     */
    private $idFilmu;

    /**
     * @var \AppBundle\Entity\Scenarzysci
     */
    private $idScenarzysty;



    /**
     * Get idFilmyScenarzysci
     *
     * @return integer
     */
    public function getIdFilmyScenarzysci()
    {
        return $this->idFilmyScenarzysci;
    }

    /**
     * Set idFilmu
     *
     * @param \AppBundle\Entity\Filmy $idFilmu
     *
     * @return FilmyScenarzysci
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
     * Set idScenarzysty
     *
     * @param \AppBundle\Entity\Scenarzysci $idScenarzysty
     *
     * @return FilmyScenarzysci
     */
    public function setIdScenarzysty(\AppBundle\Entity\Scenarzysci $idScenarzysty = null)
    {
        $this->idScenarzysty = $idScenarzysty;

        return $this;
    }

    /**
     * Get idScenarzysty
     *
     * @return \AppBundle\Entity\Scenarzysci
     */
    public function getIdScenarzysty()
    {
        return $this->idScenarzysty;
    }


}

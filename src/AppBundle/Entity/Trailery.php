<?php

namespace AppBundle\Entity;

/**
 * Trailery
 */
class Trailery
{
    /**
     * @var integer
     */
    private $idTrailera;

    /**
     * @var string
     */
    private $sciezka;


    /**
     * Get idTrailera
     *
     * @return integer
     */
    public function getIdTrailera()
    {
        return $this->idTrailera;
    }

    /**
     * Set sciezka
     *
     * @param string $sciezka
     *
     * @return Trailery
     */
    public function setSciezka($sciezka)
    {
        $this->sciezka = $sciezka;

        return $this;
    }

    /**
     * Get sciezka
     *
     * @return string
     */
    public function getSciezka()
    {
        return $this->sciezka;
    }
}

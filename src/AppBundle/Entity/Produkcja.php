<?php

namespace AppBundle\Entity;

/**
 * Produkcja
 */
class Produkcja
{
    /**
     * @var integer
     */
    private $idProdukcji;

    /**
     * @var string
     */
    private $nazwa;


    /**
     * Get idProdukcji
     *
     * @return integer
     */
    public function getIdProdukcji()
    {
        return $this->idProdukcji;
    }

    /**
     * Set nazwa
     *
     * @param string $nazwa
     *
     * @return Produkcja
     */
    public function setNazwa($nazwa)
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    /**
     * Get nazwa
     *
     * @return string
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }
}

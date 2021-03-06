<?php

namespace AppBundle\Entity;

/**
 * Gatunek
 */
class Gatunek
{
    /**
     * @var integer
     */
    private $idGatunku;

    /**
     * @var string
     */
    private $nazwa;


    /**
     * Get idGatunku
     *
     * @return integer
     */
    public function getIdGatunku()
    {
        return $this->idGatunku;
    }

    /**
     * Set nazwa
     *
     * @param string $nazwa
     *
     * @return Gatunek
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

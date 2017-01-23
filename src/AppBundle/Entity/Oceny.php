<?php

namespace AppBundle\Entity;

/**
 * Oceny
 */
class Oceny
{
    /**
     * @var integer
     */
    private $idOceny;

    /**
     * @var float
     */
    private $ocena;

    /**
     * @var integer
     */
    private $idFilmu;

    /**
     * @var \AppBundle\Entity\User
     */
    private $idUzytkownika;


    /**
     * Get idOceny
     *
     * @return integer
     */
    public function getIdOceny()
    {
        return $this->idOceny;
    }

    /**
     * Set ocena
     *
     * @param float $ocena
     *
     * @return Oceny
     */
    public function setOcena($ocena)
    {
        $this->ocena = $ocena;

        return $this;
    }

    /**
     * Get ocena
     *
     * @return float
     */
    public function getOcena()
    {
        return $this->ocena;
    }

    /**
     * Set idFilmu
     *
     * @param integer $idFilmu
     *
     * @return Oceny
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
     * @param integer
     *
     * @return Oceny
     */
    public function setIdUzytkownika($id)
    {
        $this->idUzytkownika = $id;

        return $this;
    }

    /**
     * Get idUzytkownika
     *
     * @return \AppBundle\Entity\User
     */
    public function getIdUzytkownika()
    {
        return $this->idUzytkownika;
    }
}

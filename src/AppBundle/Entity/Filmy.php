<?php

namespace AppBundle\Entity;

/**
 * Filmy
 */
class Filmy
{
    /**
     * @var integer
     */
    private $idFilmu;

    /**
     * @var string
     */
    private $tytulPl;

    /**
     * @var string
     */
    private $tytulAng;

    /**
     * @var \DateTime
     */
    private $dataPremierySwiat;

    /**
     * @var \DateTime
     */
    private $dataPremieryPl;

    /**
     * @var string
     */
    private $opis;

    /**
     * @var integer
     */
    private $czasTrwaniaMin;

    /**
     * @var string
     */
    private $plakat;

    /**
     * @var \AppBundle\Entity\Rezyserzy
     */
    private $idRezysera;

    /**
     * @var float
     */
    private $ocenaKoncowa;


    /**
     * Get idFilmu
     *
     * @return integer
     */
    public function getIdFilmu()
    {
        return $this->idFilmu;
    }

    /**
     * Set tytulPl
     *
     * @param string $tytulPl
     *
     * @return Filmy
     */
    public function setTytulPl($tytulPl)
    {
        $this->tytulPl = $tytulPl;

        return $this;
    }

    /**
     * Get tytulPl
     *
     * @return string
     */
    public function getTytulPl()
    {
        return $this->tytulPl;
    }

    /**
     * Set tytulAng
     *
     * @param string $tytulAng
     *
     * @return Filmy
     */
    public function setTytulAng($tytulAng)
    {
        $this->tytulAng = $tytulAng;

        return $this;
    }

    /**
     * Get tytulAng
     *
     * @return string
     */
    public function getTytulAng()
    {
        return $this->tytulAng;
    }

    /**
     * Set dataPremierySwiat
     *
     * @param \DateTime $dataPremierySwiat
     *
     * @return Filmy
     */
    public function setDataPremierySwiat($dataPremierySwiat)
    {
        $this->dataPremierySwiat = $dataPremierySwiat;

        return $this;
    }

    /**
     * Get dataPremierySwiat
     *
     * @return \DateTime
     */
    public function getDataPremierySwiat()
    {
        return $this->dataPremierySwiat;
    }

    /**
     * Set dataPremieryPl
     *
     * @param \DateTime $dataPremieryPl
     *
     * @return Filmy
     */
    public function setDataPremieryPl($dataPremieryPl)
    {
        $this->dataPremieryPl = $dataPremieryPl;

        return $this;
    }

    /**
     * Get dataPremieryPl
     *
     * @return \DateTime
     */
    public function getDataPremieryPl()
    {
        return $this->dataPremieryPl;
    }

    /**
     * Set opis
     *
     * @param string $opis
     *
     * @return Filmy
     */
    public function setOpis($opis)
    {
        $this->opis = $opis;

        return $this;
    }

    /**
     * Get opis
     *
     * @return string
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * Set czasTrwaniaMin
     *
     * @param integer $czasTrwaniaMin
     *
     * @return Filmy
     */
    public function setCzasTrwaniaMin($czasTrwaniaMin)
    {
        $this->czasTrwaniaMin = $czasTrwaniaMin;

        return $this;
    }

    /**
     * Get czasTrwaniaMin
     *
     * @return integer
     */
    public function getCzasTrwaniaMin()
    {
        return $this->czasTrwaniaMin;
    }

    /**
     * Set plakat
     *
     * @param string $plakat
     *
     * @return Filmy
     */
    public function setPlakat($plakat)
    {
        $this->plakat = $plakat;

        return $this;
    }

    /**
     * Get plakat
     *
     * @return string
     */
    public function getPlakat()
    {
        return $this->plakat;
    }

    /**
     * Set idRezysera
     *
     * @param \AppBundle\Entity\Rezyserzy $idRezysera
     *
     * @return Filmy
     */
    public function setIdRezysera(\AppBundle\Entity\Rezyserzy $idRezysera = null)
    {
        $this->idRezysera = $idRezysera;

        return $this;
    }

    /**
     * Get idRezysera
     *
     * @return \AppBundle\Entity\Rezyserzy
     */
    public function getIdRezysera()
    {
        return $this->idRezysera;
    }

    /**
     * Get ocenaKoncowa
     *
     * @return float
     */
    public function getOcenaKoncowa()
    {
        return $this->ocenaKoncowa;
    }


    public function setOcenaKoncowa($ocenaKoncowa)
    {
        $this->ocenaKoncowa = $ocenaKoncowa;

        return $this;
    }

}

<?php

namespace AppBundle\Entity;

/**
 * Uzytkownicy
 */
class Uzytkownicy
{
    /**
     * @var integer
     */
    private $idUzytkownika;

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $haslo;

    /**
     * @var string
     */
    private $email;

    /**
     * @var boolean
     */
    private $admin;


    /**
     * Get idUzytkownika
     *
     * @return integer
     */
    public function getIdUzytkownika()
    {
        return $this->idUzytkownika;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return Uzytkownicy
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set haslo
     *
     * @param string $haslo
     *
     * @return Uzytkownicy
     */
    public function setHaslo($haslo)
    {
        $this->haslo = $haslo;

        return $this;
    }

    /**
     * Get haslo
     *
     * @return string
     */
    public function getHaslo()
    {
        return $this->haslo;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Uzytkownicy
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set admin
     *
     * @param boolean $admin
     *
     * @return Uzytkownicy
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * Get admin
     *
     * @return boolean
     */
    public function getAdmin()
    {
        return $this->admin;
    }
}

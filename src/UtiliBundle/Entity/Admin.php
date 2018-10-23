<?php

namespace UtiliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 *
 * @ORM\Table(name="admin")
 * @ORM\Entity(repositoryClass="UtiliBundle\Repository\AdminRepository")
 */
class Admin
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=255)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;



    /**
    *@ORM\OneToMany(targetEntity="Util",mappedBy="admin")
    */
    private $utils;


    public function __toString()
    {
        return $this->login;
    }



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return Admin
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
     * Set password
     *
     * @param string $password
     *
     * @return Admin
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Add utilisateur
     *
     * @param \UtiliBundle\Entity\Utilisateur $utilisateur
     *
     * @return Admin
     */
    public function addUtilisateur(\UtiliBundle\Entity\Utilisateur $utilisateur)
    {
        $this->utilisateurs[] = $utilisateur;

        return $this;
    }

    /**
     * Remove utilisateur
     *
     * @param \UtiliBundle\Entity\Utilisateur $utilisateur
     */
    public function removeUtilisateur(\UtiliBundle\Entity\Utilisateur $utilisateur)
    {
        $this->utilisateurs->removeElement($utilisateur);
    }

    /**
     * Get utilisateurs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUtilisateurs()
    {
        return $this->utilisateurs;
    }

    /**
     * Add util
     *
     * @param \UtiliBundle\Entity\Util $util
     *
     * @return Admin
     */
    public function addUtil(\UtiliBundle\Entity\Util $util)
    {
        $this->utils[] = $util;

        return $this;
    }

    /**
     * Remove util
     *
     * @param \UtiliBundle\Entity\Util $util
     */
    public function removeUtil(\UtiliBundle\Entity\Util $util)
    {
        $this->utils->removeElement($util);
    }

    /**
     * Get utils
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUtils()
    {
        return $this->utils;
    }
}

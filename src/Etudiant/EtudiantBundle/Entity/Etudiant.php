<?php

namespace Etudiant\EtudiantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table(name="etudiant")
 * @ORM\Entity
 */
class Etudiant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_etud", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEtud;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=10, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=10, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_etud", type="string", length=20, nullable=false)
     */
    private $nomEtud;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_etud", type="text", length=65535, nullable=false)
     */
    private $prenomEtud;

    /**
     * @var string
     *
     * @ORM\Column(name="faculte_etud", type="string", length=20, nullable=false)
     */
    private $faculteEtud;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_etud", type="string", length=20, nullable=false)
     */
    private $mailEtud;



    /**
     * Get idEtud
     *
     * @return integer
     */
    public function getIdEtud()
    {
        return $this->idEtud;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return Etudiant
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
     * @return Etudiant
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
     * Set nomEtud
     *
     * @param string $nomEtud
     *
     * @return Etudiant
     */
    public function setNomEtud($nomEtud)
    {
        $this->nomEtud = $nomEtud;

        return $this;
    }

    /**
     * Get nomEtud
     *
     * @return string
     */
    public function getNomEtud()
    {
        return $this->nomEtud;
    }

    /**
     * Set prenomEtud
     *
     * @param string $prenomEtud
     *
     * @return Etudiant
     */
    public function setPrenomEtud($prenomEtud)
    {
        $this->prenomEtud = $prenomEtud;

        return $this;
    }

    /**
     * Get prenomEtud
     *
     * @return string
     */
    public function getPrenomEtud()
    {
        return $this->prenomEtud;
    }

    /**
     * Set faculteEtud
     *
     * @param string $faculteEtud
     *
     * @return Etudiant
     */
    public function setFaculteEtud($faculteEtud)
    {
        $this->faculteEtud = $faculteEtud;

        return $this;
    }

    /**
     * Get faculteEtud
     *
     * @return string
     */
    public function getFaculteEtud()
    {
        return $this->faculteEtud;
    }

    /**
     * Set mailEtud
     *
     * @param string $mailEtud
     *
     * @return Etudiant
     */
    public function setMailEtud($mailEtud)
    {
        $this->mailEtud = $mailEtud;

        return $this;
    }

    /**
     * Get mailEtud
     *
     * @return string
     */
    public function getMailEtud()
    {
        return $this->mailEtud;
    }
}

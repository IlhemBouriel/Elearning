<?php

namespace Etudiant\EtudiantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matiere
 *
 * @ORM\Table(name="matiere")
 * @ORM\Entity
 */
class Matiere
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_mat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMat;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule_mat", type="string", length=20, nullable=false)
     */
    private $intituleMat;

    /**
     * @var string
     *
     * @ORM\Column(name="description_mat", type="string", length=200, nullable=false)
     */
    private $descriptionMat;

    /**
     * @var string
     *
     * @ORM\Column(name="path_mat", type="string", length=50, nullable=false)
     */
    private $pathMat;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_certif", type="integer", nullable=false)
     */
    private $nbCertif;



    /**
     * Get idMat
     *
     * @return integer
     */
    public function getIdMat()
    {
        return $this->idMat;
    }

    /**
     * Set intituleMat
     *
     * @param string $intituleMat
     *
     * @return Matiere
     */
    public function setIntituleMat($intituleMat)
    {
        $this->intituleMat = $intituleMat;

        return $this;
    }

    /**
     * Get intituleMat
     *
     * @return string
     */
    public function getIntituleMat()
    {
        return $this->intituleMat;
    }

    /**
     * Set descriptionMat
     *
     * @param string $descriptionMat
     *
     * @return Matiere
     */
    public function setDescriptionMat($descriptionMat)
    {
        $this->descriptionMat = $descriptionMat;

        return $this;
    }

    /**
     * Get descriptionMat
     *
     * @return string
     */
    public function getDescriptionMat()
    {
        return $this->descriptionMat;
    }

    /**
     * Set pathMat
     *
     * @param string $pathMat
     *
     * @return Matiere
     */
    public function setPathMat($pathMat)
    {
        $this->pathMat = $pathMat;

        return $this;
    }

    /**
     * Get pathMat
     *
     * @return string
     */
    public function getPathMat()
    {
        return $this->pathMat;
    }

    /**
     * Set nbCertif
     *
     * @param integer $nbCertif
     *
     * @return Matiere
     */
    public function setNbCertif($nbCertif)
    {
        $this->nbCertif = $nbCertif;

        return $this;
    }

    /**
     * Get nbCertif
     *
     * @return integer
     */
    public function getNbCertif()
    {
        return $this->nbCertif;
    }
}

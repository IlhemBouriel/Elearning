<?php

namespace Etudiant\EtudiantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Qcm
 *
 * @ORM\Table(name="qcm", indexes={@ORM\Index(name="fk_qcm", columns={"id_mat_qcm"})})
 * @ORM\Entity
 */
class Qcm
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_qcm", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idQcm;

    /**
     * @var \Matiere
     *
     * @ORM\ManyToOne(targetEntity="Matiere")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_mat_qcm", referencedColumnName="id_mat")
     * })
     */
    private $idMatQcm;



    /**
     * Get idQcm
     *
     * @return integer
     */
    public function getIdQcm()
    {
        return $this->idQcm;
    }

    /**
     * Set idMatQcm
     *
     * @param \Etudiant\EtudiantBundle\Entity\Matiere $idMatQcm
     *
     * @return Qcm
     */
    public function setIdMatQcm(\Etudiant\EtudiantBundle\Entity\Matiere $idMatQcm = null)
    {
        $this->idMatQcm = $idMatQcm;

        return $this;
    }

    /**
     * Get idMatQcm
     *
     * @return \Etudiant\EtudiantBundle\Entity\Matiere
     */
    public function getIdMatQcm()
    {
        return $this->idMatQcm;
    }
}

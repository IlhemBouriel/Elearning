<?php

namespace Etudiant\EtudiantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtudiantMatiere
 *
 * @ORM\Table(name="etudiant_matiere", indexes={@ORM\Index(name="id_etud_assoc", columns={"id_etud_assoc"}), @ORM\Index(name="id_mat_assoc", columns={"id_mat_assoc"})})
 * @ORM\Entity
 */
class EtudiantMatiere
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_assoc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAssoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_etud_assoc", type="integer", nullable=false)
     */
    private $idEtudAssoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_mat_assoc", type="integer", nullable=false)
     */
    private $idMatAssoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer", nullable=false)
     */
    private $note;



    /**
     * Get idAssoc
     *
     * @return integer
     */
    public function getIdAssoc()
    {
        return $this->idAssoc;
    }

    /**
     * Set idEtudAssoc
     *
     * @param integer $idEtudAssoc
     *
     * @return EtudiantMatiere
     */
    public function setIdEtudAssoc($idEtudAssoc)
    {
        $this->idEtudAssoc = $idEtudAssoc;

        return $this;
    }

    /**
     * Get idEtudAssoc
     *
     * @return integer
     */
    public function getIdEtudAssoc()
    {
        return $this->idEtudAssoc;
    }

    /**
     * Set idMatAssoc
     *
     * @param integer $idMatAssoc
     *
     * @return EtudiantMatiere
     */
    public function setIdMatAssoc($idMatAssoc)
    {
        $this->idMatAssoc = $idMatAssoc;

        return $this;
    }

    /**
     * Get idMatAssoc
     *
     * @return integer
     */
    public function getIdMatAssoc()
    {
        return $this->idMatAssoc;
    }

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return EtudiantMatiere
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer
     */
    public function getNote()
    {
        return $this->note;
    }
}

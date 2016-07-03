<?php

namespace Etudiant\EtudiantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question", indexes={@ORM\Index(name="fk_question", columns={"id_qcm_quest"})})
 * @ORM\Entity
 */
class Question
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_quest", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idQuest;

    /**
     * @var string
     *
     * @ORM\Column(name="ennonce", type="string", length=100, nullable=false)
     */
    private $ennonce;

    /**
     * @var \Qcm
     *
     * @ORM\ManyToOne(targetEntity="Qcm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_qcm_quest", referencedColumnName="id_qcm")
     * })
     */
    private $idQcmQuest;



    /**
     * Get idQuest
     *
     * @return integer
     */
    public function getIdQuest()
    {
        return $this->idQuest;
    }

    /**
     * Set ennonce
     *
     * @param string $ennonce
     *
     * @return Question
     */
    public function setEnnonce($ennonce)
    {
        $this->ennonce = $ennonce;

        return $this;
    }

    /**
     * Get ennonce
     *
     * @return string
     */
    public function getEnnonce()
    {
        return $this->ennonce;
    }

    /**
     * Set idQcmQuest
     *
     * @param \Etudiant\EtudiantBundle\Entity\Qcm $idQcmQuest
     *
     * @return Question
     */
    public function setIdQcmQuest(\Etudiant\EtudiantBundle\Entity\Qcm $idQcmQuest = null)
    {
        $this->idQcmQuest = $idQcmQuest;

        return $this;
    }

    /**
     * Get idQcmQuest
     *
     * @return \Etudiant\EtudiantBundle\Entity\Qcm
     */
    public function getIdQcmQuest()
    {
        return $this->idQcmQuest;
    }
}

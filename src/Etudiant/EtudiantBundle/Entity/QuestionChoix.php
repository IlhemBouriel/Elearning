<?php

namespace Etudiant\EtudiantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionChoix
 *
 * @ORM\Table(name="question_choix", indexes={@ORM\Index(name="fk2", columns={"id_choix_assoc"}), @ORM\Index(name="id_quest_assoc", columns={"id_quest_assoc"}), @ORM\Index(name="id_choix_assoc", columns={"id_choix_assoc"})})
 * @ORM\Entity
 */
class QuestionChoix
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_asso", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAsso;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_quest_assoc", type="integer", nullable=false)
     */
    private $idQuestAssoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_choix_assoc", type="integer", nullable=false)
     */
    private $idChoixAssoc;



    /**
     * Get idAsso
     *
     * @return integer
     */
    public function getIdAsso()
    {
        return $this->idAsso;
    }

    /**
     * Set idQuestAssoc
     *
     * @param integer $idQuestAssoc
     *
     * @return QuestionChoix
     */
    public function setIdQuestAssoc($idQuestAssoc)
    {
        $this->idQuestAssoc = $idQuestAssoc;

        return $this;
    }

    /**
     * Get idQuestAssoc
     *
     * @return integer
     */
    public function getIdQuestAssoc()
    {
        return $this->idQuestAssoc;
    }

    /**
     * Set idChoixAssoc
     *
     * @param integer $idChoixAssoc
     *
     * @return QuestionChoix
     */
    public function setIdChoixAssoc($idChoixAssoc)
    {
        $this->idChoixAssoc = $idChoixAssoc;

        return $this;
    }

    /**
     * Get idChoixAssoc
     *
     * @return integer
     */
    public function getIdChoixAssoc()
    {
        return $this->idChoixAssoc;
    }
}

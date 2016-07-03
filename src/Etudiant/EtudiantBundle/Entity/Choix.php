<?php

namespace Etudiant\EtudiantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Choix
 *
 * @ORM\Table(name="choix")
 * @ORM\Entity
 */
class Choix
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_choix", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idChoix;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="string", length=50, nullable=false)
     */
    private $texte;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", nullable=false)
     */
    private $statut;



    /**
     * Get idChoix
     *
     * @return integer
     */
    public function getIdChoix()
    {
        return $this->idChoix;
    }

    /**
     * Set texte
     *
     * @param string $texte
     *
     * @return Choix
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Choix
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }
}

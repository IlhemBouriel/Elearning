<?php

namespace Etudiant\EtudiantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity
 */
class Message
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_msg", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMsg;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_emet", type="integer", nullable=false)
     */
    private $idEmet;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_recep", type="integer", nullable=false)
     */
    private $idRecep;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_msg", type="string", length=20, nullable=false)
     */
    private $titreMsg;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu_msg", type="string", length=200, nullable=false)
     */
    private $contenuMsg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateenvoi_msg", type="date", nullable=false)
     */
    private $dateenvoiMsg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datelecture_msg", type="date", nullable=false)
     */
    private $datelectureMsg;



    /**
     * Get idMsg
     *
     * @return integer
     */
    public function getIdMsg()
    {
        return $this->idMsg;
    }

    /**
     * Set idEmet
     *
     * @param integer $idEmet
     *
     * @return Message
     */
    public function setIdEmet($idEmet)
    {
        $this->idEmet = $idEmet;

        return $this;
    }

    /**
     * Get idEmet
     *
     * @return integer
     */
    public function getIdEmet()
    {
        return $this->idEmet;
    }

    /**
     * Set idRecep
     *
     * @param integer $idRecep
     *
     * @return Message
     */
    public function setIdRecep($idRecep)
    {
        $this->idRecep = $idRecep;

        return $this;
    }

    /**
     * Get idRecep
     *
     * @return integer
     */
    public function getIdRecep()
    {
        return $this->idRecep;
    }

    /**
     * Set titreMsg
     *
     * @param string $titreMsg
     *
     * @return Message
     */
    public function setTitreMsg($titreMsg)
    {
        $this->titreMsg = $titreMsg;

        return $this;
    }

    /**
     * Get titreMsg
     *
     * @return string
     */
    public function getTitreMsg()
    {
        return $this->titreMsg;
    }

    /**
     * Set contenuMsg
     *
     * @param string $contenuMsg
     *
     * @return Message
     */
    public function setContenuMsg($contenuMsg)
    {
        $this->contenuMsg = $contenuMsg;

        return $this;
    }

    /**
     * Get contenuMsg
     *
     * @return string
     */
    public function getContenuMsg()
    {
        return $this->contenuMsg;
    }

    /**
     * Set dateenvoiMsg
     *
     * @param \DateTime $dateenvoiMsg
     *
     * @return Message
     */
    public function setDateenvoiMsg($dateenvoiMsg)
    {
        $this->dateenvoiMsg = $dateenvoiMsg;

        return $this;
    }

    /**
     * Get dateenvoiMsg
     *
     * @return \DateTime
     */
    public function getDateenvoiMsg()
    {
        return $this->dateenvoiMsg;
    }

    /**
     * Set datelectureMsg
     *
     * @param \DateTime $datelectureMsg
     *
     * @return Message
     */
    public function setDatelectureMsg($datelectureMsg)
    {
        $this->datelectureMsg = $datelectureMsg;

        return $this;
    }

    /**
     * Get datelectureMsg
     *
     * @return \DateTime
     */
    public function getDatelectureMsg()
    {
        return $this->datelectureMsg;
    }
}

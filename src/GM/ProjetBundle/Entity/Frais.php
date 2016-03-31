<?php

namespace GM\ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Frais
 *
 * @ORM\Table(name="frais")
 * @ORM\Entity(repositoryClass="GM\ProjetBundle\Repository\FraisRepository")
 */
class Frais
{
    /**
     * @ORM\ManyToOne(targetEntity="GM\ProjetBundle\Entity\Mission")
     * @ORM\JoinColumn(nullable=false)
     */
    private $mission;
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
     * @ORM\Column(name="designation", type="string", length=255)
     */
    private $designation;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="string", length=255)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="piece", type="blob")
     */
    private $piece;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
    
    /**
     * @var \Text
     *
     * @ORM\Column(name="infoCom", type="text")
     */
    private $infoCom;

    
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
     * Set designation
     *
     * @param string $designation
     *
     * @return Frais
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set montant
     *
     * @param string $montant
     *
     * @return Frais
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return string
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set piece
     *
     * @param string $piece
     *
     * @return Frais
     */
    public function setPiece($piece)
    {
        $this->piece = $piece;

        return $this;
    }

    /**
     * Get piece
     *
     * @return string
     */
    public function getPiece()
    {
        return $this->piece;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Frais
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * Set mission
     *
     * @param \GM\ProjetBundle\Entity\Mission $mission
     *
     * @return Frais
     */
    public function setMission(\GM\ProjetBundle\Entity\Mission $mission)
    {
        $this->mission = $mission;

        return $this;
    }

    /**
     * Get mission
     *
     * @return \GM\ProjetBundle\Entity\Mission
     */
    public function getMission()
    {
        return $this->mission;
    }

    /**
     * Set infoCom
     *
     * @param string $infoCom
     *
     * @return Frais
     */
    public function setInfoCom($infoCom)
    {
        $this->infoCom = $infoCom;

        return $this;
    }

    /**
     * Get infoCom
     *
     * @return string
     */
    public function getInfoCom()
    {
        return $this->infoCom;
    }
}

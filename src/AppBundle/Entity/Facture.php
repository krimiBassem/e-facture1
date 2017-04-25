<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FactureRepository")
 */
class Facture
{
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;
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
     * @ORM\Column(name="destinataire", type="string", length=255)
     */
    private $destinataire;

    /**
     * @var string
     *
     * @ORM\Column(name="reference_facture", type="string", length=255)
     */
    private $referenceFacture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation_facture", type="date")
     */
    private $dateCreationFacture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_echeance_facture", type="date")
     */
    private $dateEcheanceFacture;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_facture", type="string", length=255)
     */
    private $etatFacture;


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
     * Set destinataire
     *
     * @param string $destinataire
     *
     * @return Facture
     */
    public function setDestinataire($destinataire)
    {
        $this->destinataire = $destinataire;

        return $this;
    }

    /**
     * Get destinataire
     *
     * @return string
     */
    public function getDestinataire()
    {
        return $this->destinataire;
    }

    /**
     * Set referenceFacture
     *
     * @param string $referenceFacture
     *
     * @return Facture
     */
    public function setReferenceFacture($referenceFacture)
    {
        $this->referenceFacture = $referenceFacture;

        return $this;
    }

    /**
     * Get referenceFacture
     *
     * @return string
     */
    public function getReferenceFacture()
    {
        return $this->referenceFacture;
    }

    /**
     * Set dateCreationFacture
     *
     * @param \DateTime $dateCreationFacture
     *
     * @return Facture
     */
    public function setDateCreationFacture($dateCreationFacture)
    {
        $this->dateCreationFacture = $dateCreationFacture;

        return $this;
    }

    /**
     * Get dateCreationFacture
     *
     * @return \DateTime
     */
    public function getDateCreationFacture()
    {
        return $this->dateCreationFacture;
    }

    /**
     * Set dateEcheanceFacture
     *
     * @param \DateTime $dateEcheanceFacture
     *
     * @return Facture
     */
    public function setDateEcheanceFacture($dateEcheanceFacture)
    {
        $this->dateEcheanceFacture = $dateEcheanceFacture;

        return $this;
    }

    /**
     * Get dateEcheanceFacture
     *
     * @return \DateTime
     */
    public function getDateEcheanceFacture()
    {
        return $this->dateEcheanceFacture;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return Facture
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set etatFacture
     *
     * @param string $etatFacture
     *
     * @return Facture
     */
    public function setEtatFacture($etatFacture)
    {
        $this->etatFacture = $etatFacture;

        return $this;
    }

    /**
     * Get etatFacture
     *
     * @return string
     */
    public function getEtatFacture()
    {
        return $this->etatFacture;
    }
    /**
     * Set user
     *
     * @param string $user
     *
     * @return Facture
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }
    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }
}


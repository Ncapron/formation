<?php

namespace FormationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 */
class Promotion
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $logo;

    /**
     * @var string
     */
    private $nomFormateur;

    /**
     * @var string
     */
    private $prenomFormateur;

    /**
     * @var \DateTime
     */
    private $dateDeb;

    /**
     * @var \DateTime
     */
    private $dateFin;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Promotion
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return Promotion
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set nomFormateur
     *
     * @param string $nomFormateur
     * @return Promotion
     */
    public function setNomFormateur($nomFormateur)
    {
        $this->nomFormateur = $nomFormateur;

        return $this;
    }

    /**
     * Get nomFormateur
     *
     * @return string 
     */
    public function getNomFormateur()
    {
        return $this->nomFormateur;
    }

    /**
     * Set prenomFormateur
     *
     * @param string $prenomFormateur
     * @return Promotion
     */
    public function setPrenomFormateur($prenomFormateur)
    {
        $this->prenomFormateur = $prenomFormateur;

        return $this;
    }

    /**
     * Get prenomFormateur
     *
     * @return string 
     */
    public function getPrenomFormateur()
    {
        return $this->prenomFormateur;
    }

    /**
     * Set dateDeb
     *
     * @param \DateTime $dateDeb
     * @return Promotion
     */
    public function setDateDeb($dateDeb)
    {
        $this->dateDeb = $dateDeb;

        return $this;
    }

    /**
     * Get dateDeb
     *
     * @return \DateTime 
     */
    public function getDateDeb()
    {
        return $this->dateDeb;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Promotion
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }
    /**
     * @var \FormationBundle\Entity\Eleve
     */
    private $eleve;

    /**
     * @var \FormationBundle\Entity\Langage
     */
    private $langage;

    /**
     * @var \FormationBundle\Entity\Module
     */
    private $module;

    /**
     * @var \FormationBundle\Entity\Intervenant
     */
    private $intervenant;

    /**
     * @var \FormationBundle\Entity\Semaine
     */
    private $semaine;


    /**
     * Set eleve
     *
     * @param \FormationBundle\Entity\Eleve $eleve
     * @return Promotion
     */
    public function setEleve(\FormationBundle\Entity\Eleve $eleve = null)
    {
        $this->eleve = $eleve;

        return $this;
    }

    /**
     * Get eleve
     *
     * @return \FormationBundle\Entity\Eleve 
     */
    public function getEleve()
    {
        return $this->eleve;
    }

    /**
     * Set langage
     *
     * @param \FormationBundle\Entity\Langage $langage
     * @return Promotion
     */
    public function setLangage(\FormationBundle\Entity\Langage $langage = null)
    {
        $this->langage = $langage;

        return $this;
    }

    /**
     * Get langage
     *
     * @return \FormationBundle\Entity\Langage 
     */
    public function getLangage()
    {
        return $this->langage;
    }

    /**
     * Set module
     *
     * @param \FormationBundle\Entity\Module $module
     * @return Promotion
     */
    public function setModule(\FormationBundle\Entity\Module $module = null)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return \FormationBundle\Entity\Module 
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set intervenant
     *
     * @param \FormationBundle\Entity\Intervenant $intervenant
     * @return Promotion
     */
    public function setIntervenant(\FormationBundle\Entity\Intervenant $intervenant = null)
    {
        $this->intervenant = $intervenant;

        return $this;
    }

    /**
     * Get intervenant
     *
     * @return \FormationBundle\Entity\Intervenant 
     */
    public function getIntervenant()
    {
        return $this->intervenant;
    }

    /**
     * Set semaine
     *
     * @param \FormationBundle\Entity\Semaine $semaine
     * @return Promotion
     */
    public function setSemaine(\FormationBundle\Entity\Semaine $semaine = null)
    {
        $this->semaine = $semaine;

        return $this;
    }

    /**
     * Get semaine
     *
     * @return \FormationBundle\Entity\Semaine 
     */
    public function getSemaine()
    {
        return $this->semaine;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->eleve = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add eleve
     *
     * @param \FormationBundle\Entity\Eleve $eleve
     * @return Promotion
     */
    public function addEleve(\FormationBundle\Entity\Eleve $eleve)
    {
        $this->eleve[] = $eleve;

        return $this;
    }

    /**
     * Remove eleve
     *
     * @param \FormationBundle\Entity\Eleve $eleve
     */
    public function removeEleve(\FormationBundle\Entity\Eleve $eleve)
    {
        $this->eleve->removeElement($eleve);
    }
}

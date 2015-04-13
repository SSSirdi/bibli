<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etablissement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\EtablissementRepository")
 */
class Etablissement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomEtab", type="string", length=100)
     */
    private $nomEtab;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseEtab", type="string", length=255)
     */
    private $adresseEtab;

    /**
     * @var string
     *
     * @ORM\Column(name="cpEtab", type="string", length=5)
     */
    private $cpEtab;

    /**
     * @var string
     *
     * @ORM\Column(name="villeEtab", type="string", length=25)
     */
    private $villeEtab;

    /**
     * @var string
     *
     * @ORM\Column(name="telEtab", type="string", length=10)
     */
    private $telEtab;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Section", mappedBy="etablissement")
     */
    private $sections;


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
     * Set nomEtab
     *
     * @param string $nomEtab
     * @return Etablissement
     */
    public function setNomEtab($nomEtab)
    {
        $this->nomEtab = $nomEtab;

        return $this;
    }

    /**
     * Get nomEtab
     *
     * @return string 
     */
    public function getNomEtab()
    {
        return $this->nomEtab;
    }

    /**
     * Set adresseEtab
     *
     * @param string $adresseEtab
     * @return Etablissement
     */
    public function setAdresseEtab($adresseEtab)
    {
        $this->adresseEtab = $adresseEtab;

        return $this;
    }

    /**
     * Get adresseEtab
     *
     * @return string 
     */
    public function getAdresseEtab()
    {
        return $this->adresseEtab;
    }

    /**
     * Set cpEtab
     *
     * @param string $cpEtab
     * @return Etablissement
     */
    public function setCpEtab($cpEtab)
    {
        $this->cpEtab = $cpEtab;

        return $this;
    }

    /**
     * Get cpEtab
     *
     * @return string 
     */
    public function getCpEtab()
    {
        return $this->cpEtab;
    }

    /**
     * Set villeEtab
     *
     * @param string $villeEtab
     * @return Etablissement
     */
    public function setVilleEtab($villeEtab)
    {
        $this->villeEtab = $villeEtab;

        return $this;
    }

    /**
     * Get villeEtab
     *
     * @return string 
     */
    public function getVilleEtab()
    {
        return $this->villeEtab;
    }

    /**
     * Set telEtab
     *
     * @param string $telEtab
     * @return Etablissement
     */
    public function setTelEtab($telEtab)
    {
        $this->telEtab = $telEtab;

        return $this;
    }

    /**
     * Get telEtab
     *
     * @return string 
     */
    public function getTelEtab()
    {
        return $this->telEtab;
    }
}

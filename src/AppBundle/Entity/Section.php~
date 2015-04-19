<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Section
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SectionRepository")
 */
class Section
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
     * @ORM\Column(name="nomSec", type="string", length=50)
     */
    private $nomSec;

    /**
     * @var string
     *
     * @ORM\Column(name="codeSec", type="string", length=20)
     */
    private $codeSec;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Config",  inversedBy="sections")
     */
    private $config;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Etablissement",  inversedBy="sections")
     */
    private $etablissement;

    /**
     * @ORM\OneToMany(targetEntity="Livre", mappedBy="section")
     *
     */
    private $livres;

    /**
     * @ORM\OneToMany(targetEntity="Bibli\MembreBundle\Entity\Membre", mappedBy="section")
     */
    private $membres;
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
     * Set nomSec
     *
     * @param string $nomSec
     * @return Section
     */
    public function setNomSec($nomSec)
    {
        $this->nomSec = $nomSec;

        return $this;
    }

    /**
     * Get nomSec
     *
     * @return string 
     */
    public function getNomSec()
    {
        return $this->nomSec;
    }

    /**
     * Set codeSec
     *
     * @param string $codeSec
     * @return Section
     */
    public function setCodeSec($codeSec)
    {
        $this->codeSec = $codeSec;

        return $this;
    }

    /**
     * Get codeSec
     *
     * @return string 
     */
    public function getCodeSec()
    {
        return $this->codeSec;
    }

    /**
     * Set etablissement
     *
     * @param \AppBundle\Entity\Etablissement $etablissement
     * @return Section
     */
    public function setEtablissement(\AppBundle\Entity\Etablissement $etablissement = null)
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    /**
     * Get etablissement
     *
     * @return \AppBundle\Entity\Etablissement 
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->membres = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add membres
     *
     * @param \Bibli\MembreBundle\Entity\Membre $membres
     * @return Section
     */
    public function addMembre(\Bibli\MembreBundle\Entity\Membre $membres)
    {
        $this->membres[] = $membres;

        return $this;
    }

    /**
     * Remove membres
     *
     * @param \Bibli\MembreBundle\Entity\Membre $membres
     */
    public function removeMembre(\Bibli\MembreBundle\Entity\Membre $membres)
    {
        $this->membres->removeElement($membres);
    }

    /**
     * Get membres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMembres()
    {
        return $this->membres;
    }

    /**
     * Set config
     *
     * @param \AppBundle\Entity\Config $config
     * @return Section
     */
    public function setConfig(\AppBundle\Entity\Config $config = null)
    {
        $this->config = $config;

        return $this;
    }

    /**
     * Get config
     *
     * @return \AppBundle\Entity\Config 
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Add livres
     *
     * @param \AppBundle\Entity\Livre $livres
     * @return Section
     */
    public function addLivre(\AppBundle\Entity\Livre $livres)
    {
        $this->livres[] = $livres;

        return $this;
    }

    /**
     * Remove livres
     *
     * @param \AppBundle\Entity\Livre $livres
     */
    public function removeLivre(\AppBundle\Entity\Livre $livres)
    {
        $this->livres->removeElement($livres);
    }

    /**
     * Get livres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLivres()
    {
        return $this->livres;
    }
}

<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Config
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ConfigRepository")
 */
class Config
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
     * @ORM\Column(name="nomConfig", type="string", length=10)
     */
    private $nomConfig;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrMaxPret", type="smallint")
     */
    private $nbrMaxPret;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrMaxResa", type="smallint")
     */
    private $nbrMaxResa;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dureePret", type="date")
     */
    private $dureePret;

    /**
     * @ORM\OneToMany(targetEntity="Bibli\MembreBundle\Entity\Membre", mappedBy="config")
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
     * Set nomConfig
     *
     * @param string $nomConfig
     * @return Config
     */
    public function setNomConfig($nomConfig)
    {
        $this->nomConfig = $nomConfig;

        return $this;
    }

    /**
     * Get nomConfig
     *
     * @return string 
     */
    public function getNomConfig()
    {
        return $this->nomConfig;
    }

    /**
     * Set nbrMaxPret
     *
     * @param integer $nbrMaxPret
     * @return Config
     */
    public function setNbrMaxPret($nbrMaxPret)
    {
        $this->nbrMaxPret = $nbrMaxPret;

        return $this;
    }

    /**
     * Get nbrMaxPret
     *
     * @return integer 
     */
    public function getNbrMaxPret()
    {
        return $this->nbrMaxPret;
    }

    /**
     * Set nbrMaxResa
     *
     * @param integer $nbrMaxResa
     * @return Config
     */
    public function setNbrMaxResa($nbrMaxResa)
    {
        $this->nbrMaxResa = $nbrMaxResa;

        return $this;
    }

    /**
     * Get nbrMaxResa
     *
     * @return integer 
     */
    public function getNbrMaxResa()
    {
        return $this->nbrMaxResa;
    }

    /**
     * Set dureePret
     *
     * @param \DateTime $dureePret
     * @return Config
     */
    public function setDureePret($dureePret)
    {
        $this->dureePret = $dureePret;

        return $this;
    }

    /**
     * Get dureePret
     *
     * @return \DateTime 
     */
    public function getDureePret()
    {
        return $this->dureePret;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sections = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add sections
     *
     * @param \Bibli\MembreBundle\Entity\Membre $sections
     * @return Config
     */
    public function addSection(\Bibli\MembreBundle\Entity\Membre $sections)
    {
        $this->sections[] = $sections;

        return $this;
    }

    /**
     * Remove sections
     *
     * @param \Bibli\MembreBundle\Entity\Membre $sections
     */
    public function removeSection(\Bibli\MembreBundle\Entity\Membre $sections)
    {
        $this->sections->removeElement($sections);
    }

    /**
     * Get sections
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSections()
    {
        return $this->sections;
    }
}

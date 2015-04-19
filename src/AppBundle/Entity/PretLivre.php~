<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PretLivre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PretLivreRepository")
 */
class PretLivre
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
     * @var \DateTime
     *
     * @ORM\Column(name="datDebutPret", type="date")
     */
    private $datDebutPret;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFinPret", type="date")
     */
    private $dateFinPret;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Livre")
     * @ORM\JoinColumn(nullable=false)
     */
    private $livre;

    /**
     * @ORM\ManyToOne(targetEntity="Bibli\MembreBundle\Entity\Membre")
     * @ORM\JoinColumn(nullable=false)
     */
    private $membre;

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
     * Set datDebutPret
     *
     * @param \DateTime $datDebutPret
     * @return PretLivre
     */
    public function setDatDebutPret($datDebutPret)
    {
        $this->datDebutPret = $datDebutPret;

        return $this;
    }

    /**
     * Get datDebutPret
     *
     * @return \DateTime 
     */
    public function getDatDebutPret()
    {
        return $this->datDebutPret;
    }

    /**
     * Set dateFinPret
     *
     * @param \DateTime $dateFinPret
     * @return PretLivre
     */
    public function setDateFinPret($dateFinPret)
    {
        $this->dateFinPret = $dateFinPret;

        return $this;
    }

    /**
     * Get dateFinPret
     *
     * @return \DateTime 
     */
    public function getDateFinPret()
    {
        return $this->dateFinPret;
    }

    /**
     * Set livre
     *
     * @param \AppBundle\Entity\Livre $livre
     * @return PretLivre
     */
    public function setLivre(\AppBundle\Entity\Livre $livre)
    {
        $this->livre = $livre;

        return $this;
    }

    /**
     * Get livre
     *
     * @return \AppBundle\Entity\Livre 
     */
    public function getLivre()
    {
        return $this->livre;
    }



    /**
     * Set membre
     *
     * @param \Bibli\MembreBundle\Entity\Membre $membre
     * @return PretLivre
     */
    public function setMembre(\Bibli\MembreBundle\Entity\Membre $membre)
    {
        $this->membre = $membre;

        return $this;
    }

    /**
     * Get membre
     *
     * @return \Bibli\MembreBundle\Entity\Membre 
     */
    public function getMembre()
    {
        return $this->membre;
    }
}

<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auteur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AuteurRepository")
 */
class Auteur
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
     * @ORM\Column(name="nomAuteur", type="string", length=80)
     */
    private $nomAuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="nationaliteAuteur", type="string", length=40)
     */
    private $nationaliteAuteur;


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
     * Set nomAuteur
     *
     * @param string $nomAuteur
     * @return Auteur
     */
    public function setNomAuteur($nomAuteur)
    {
        $this->nomAuteur = $nomAuteur;

        return $this;
    }

    /**
     * Get nomAuteur
     *
     * @return string 
     */
    public function getNomAuteur()
    {
        return $this->nomAuteur;
    }

    /**
     * Set nationaliteAuteur
     *
     * @param string $nationaliteAuteur
     * @return Auteur
     */
    public function setNationaliteAuteur($nationaliteAuteur)
    {
        $this->nationaliteAuteur = $nationaliteAuteur;

        return $this;
    }

    /**
     * Get nationaliteAuteur
     *
     * @return string 
     */
    public function getNationaliteAuteur()
    {
        return $this->nationaliteAuteur;
    }
}

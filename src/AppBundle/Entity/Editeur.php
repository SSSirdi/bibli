<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Editeur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\EditeurRepository")
 */
class Editeur
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
     * @ORM\Column(name="nomEditeur", type="string", length=30)
     */
    private $nomEditeur;

    /**
     * @var string
     *
     * @ORM\Column(name="PaysEditeur", type="string", length=40)
     */
    private $paysEditeur;


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
     * Set nomEditeur
     *
     * @param string $nomEditeur
     * @return Editeur
     */
    public function setNomEditeur($nomEditeur)
    {
        $this->nomEditeur = $nomEditeur;

        return $this;
    }

    /**
     * Get nomEditeur
     *
     * @return string 
     */
    public function getNomEditeur()
    {
        return $this->nomEditeur;
    }

    /**
     * Set paysEditeur
     *
     * @param string $paysEditeur
     * @return Editeur
     */
    public function setPaysEditeur($paysEditeur)
    {
        $this->paysEditeur = $paysEditeur;

        return $this;
    }

    /**
     * Get paysEditeur
     *
     * @return string 
     */
    public function getPaysEditeur()
    {
        return $this->paysEditeur;
    }
}

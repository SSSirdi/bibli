<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\LivreRepository")
 */
class Livre
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
     * @ORM\Column(name="isbn13", type="string", length=13)
     */
    private $isbn13;

    /**
     * @var string
     *
     * @ORM\Column(name="isbn10", type="string", length=10)
     */
    private $isbn10;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbpage", type="smallint")
     */
    private $nbpage;

    /**
     * @var string
     *
     * @ORM\Column(name="langue", type="string", length=15)
     */
    private $langue;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Auteur")
     */
    private $editeur;

    /**
     * @ORM\ManyToOne(targetEntity="Section" , inversedBy="livres")
     * @ORM\JoinColumn(nullable=false)
     */
    private $section;

    /**
     * @ORM\ManyToOne(targetEntity="Etablissement" , inversedBy="livres")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etablissement;
    /**
     * @var integer
     *
     * @ORM\Column(name="sectionOnly", type="smallint")
     */
    private $sectionOnly;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Categorie")
     */
    private $categories;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Auteur")
     */
    private $auteurs;

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
     * Set isbn13
     *
     * @param string $isbn13
     * @return Livre
     */
    public function setIsbn13($isbn13)
    {
        $this->isbn13 = $isbn13;

        return $this;
    }

    /**
     * Get isbn13
     *
     * @return string 
     */
    public function getIsbn13()
    {
        return $this->isbn13;
    }

    /**
     * Set isbn10
     *
     * @param string $isbn10
     * @return Livre
     */
    public function setIsbn10($isbn10)
    {
        $this->isbn10 = $isbn10;

        return $this;
    }

    /**
     * Get isbn10
     *
     * @return string 
     */
    public function getIsbn10()
    {
        return $this->isbn10;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Livre
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
     * Set description
     *
     * @param string $description
     * @return Livre
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set nbpage
     *
     * @param integer $nbpage
     * @return Livre
     */
    public function setNbpage($nbpage)
    {
        $this->nbpage = $nbpage;

        return $this;
    }

    /**
     * Get nbpage
     *
     * @return integer 
     */
    public function getNbpage()
    {
        return $this->nbpage;
    }

    /**
     * Set langue
     *
     * @param string $langue
     * @return Livre
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Get langue
     *
     * @return string 
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * Set editeur
     *
     * @param \AppBundle\Entity\Auteur $editeur
     * @return Livre
     */
    public function setEditeur(\AppBundle\Entity\Auteur $editeur)
    {
        $this->editeur = $editeur;

        return $this;
    }

    /**
     * Get editeur
     *
     * @return \AppBundle\Entity\Auteur 
     */
    public function getEditeur()
    {
        return $this->editeur;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add categories
     *
     * @param \AppBundle\Entity\Categorie $categories
     * @return Livre
     */
    public function addCategory(\AppBundle\Entity\Categorie $categories)
    {
        $this->categories[] = $categories;

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \AppBundle\Entity\Categorie $categories
     */
    public function removeCategory(\AppBundle\Entity\Categorie $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add auteurs
     *
     * @param \AppBundle\Entity\Auteur $auteurs
     * @return Livre
     */
    public function addAuteur(\AppBundle\Entity\Auteur $auteurs)
    {
        $this->auteurs[] = $auteurs;

        return $this;
    }

    /**
     * Remove auteurs
     *
     * @param \AppBundle\Entity\Auteur $auteurs
     */
    public function removeAuteur(\AppBundle\Entity\Auteur $auteurs)
    {
        $this->auteurs->removeElement($auteurs);
    }

    /**
     * Get auteurs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAuteurs()
    {
        return $this->auteurs;
    }

    /**
     * Set sectionOnly
     *
     * @param integer $sectionOnly
     * @return Livre
     */
    public function setSectionOnly($sectionOnly)
    {
        $this->sectionOnly = $sectionOnly;

        return $this;
    }

    /**
     * Get sectionOnly
     *
     * @return integer 
     */
    public function getSectionOnly()
    {
        return $this->sectionOnly;
    }

    /**
     * Set section
     *
     * @param \AppBundle\Entity\Section $section
     * @return Livre
     */
    public function setSection(\AppBundle\Entity\Section $section)
    {
        $this->section = $section;

        return $this;
    }

    /**
     * Get section
     *
     * @return \AppBundle\Entity\Section 
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Set etablissement
     *
     * @param \AppBundle\Entity\Etablissement $etablissement
     * @return Livre
     */
    public function setEtablissement(\AppBundle\Entity\Etablissement $etablissement)
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
}

<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Section
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\SectionRepository")
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
}

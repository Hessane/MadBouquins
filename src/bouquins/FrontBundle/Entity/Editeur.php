<?php

namespace bouquins\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Editeur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="bouquins\FrontBundle\Entity\EditeurRepository")
 */
class Editeur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idEditeur", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomEditeur", type="string", length=255)
     */
    private $nomEditeur;


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
     *
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
}


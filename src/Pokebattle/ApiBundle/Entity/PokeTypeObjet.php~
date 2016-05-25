<?php
/**************************************************************************
 * PokeTypeObjet.php, pokebattle Android
 *
 * Copyright 2016
 * Description : 
 * Author(s)   : Harmony
 * Licence     : 
 * Last update : May 25, 2016
 *
 **************************************************************************/

namespace Pokebattle\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JSON;
use \DateTime;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * PokeTypeObjet
 *
 * @ORM\Table(name="pokebattle_pokeTypeObjet")
 * @ORM\Entity(repositoryClass="Pokebattle\ApiBundle\Repository\PokeTypeObjetRepository")
 * @JSON\ExclusionPolicy("ALL")
 */
class PokeTypeObjet
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("id")
     
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var integer
     */
    private $id;

    /**
     * @ORM\Column(name="nom", type="string")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("nom")
     
     * @var string
     */
    private $nom;


    /**
     * Set id
     *
     * @param integer id
     *
     * @return PokeTypeObjet
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return PokeTypeObjet
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set nom
     *
     * @param string nom
     *
     * @return PokeTypeObjet
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return PokeTypeObjet
     */
    public function getNom()
    {
        return $this->nom;
    }
}

<?php
/**************************************************************************
 * PokeZone.php, pokebattle Android
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
 * PokeZone
 *
 * @ORM\Table(name="pokebattle_pokeZone")
 * @ORM\Entity(repositoryClass="Pokebattle\ApiBundle\Repository\PokeZoneRepository")
 * @JSON\ExclusionPolicy("ALL")
 */
class PokeZone
{
    /**
     * @ORM\ManyToOne(targetEntity="PokeTypePokemon", inversedBy="zones")
     * @ORM\JoinColumn(name="PokeTypePokemonzonesInternal_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("pokeTypePokemonzonesInternal")
     
     * @var PokeTypePokemon
     */
    private $pokeTypePokemonzonesInternal;

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
     * Set pokeTypePokemonzonesInternal
     *
     * @param \Pokebattle\ApiBundle\Entity\PokeTypePokemon $pokeTypePokemonzonesInternal
     *
     * @return PokeZone
     */
    public function setPokeTypePokemonzonesInternal(\Pokebattle\ApiBundle\Entity\PokeTypePokemon $pokeTypePokemonzonesInternal = null)
    {
        $this->pokeTypePokemonzonesInternal = $pokeTypePokemonzonesInternal;

        return $this;
    }

    /**
     * Get pokeTypePokemonzonesInternal
     *
     * @return \Pokebattle\ApiBundle\Entity\PokeTypePokemon
     */
    public function getPokeTypePokemonzonesInternal()
    {
        return $this->pokeTypePokemonzonesInternal;
    }
    /**
     * Set id
     *
     * @param integer id
     *
     * @return PokeZone
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return PokeZone
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
     * @return PokeZone
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return PokeZone
     */
    public function getNom()
    {
        return $this->nom;
    }
}

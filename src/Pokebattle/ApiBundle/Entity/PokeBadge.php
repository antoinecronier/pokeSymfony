<?php
/**************************************************************************
 * PokeBadge.php, pokebattle Android
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
 * PokeBadge
 *
 * @ORM\Table(name="pokebattle_pokeBadge")
 * @ORM\Entity(repositoryClass="Pokebattle\ApiBundle\Repository\PokeBadgeRepository")
 * @JSON\ExclusionPolicy("ALL")
 */
class PokeBadge
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
     * @ORM\Column(name="bonus", type="string")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("bonus")
     
     * @var string
     */
    private $bonus;

    /**
     * @ORM\ManyToOne(targetEntity="PokeNpc", inversedBy="badge")
     * @ORM\JoinColumn(name="PokeNpcbadgeInternal_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("pokeNpcbadgeInternal")
     
     * @var PokeNpc
     */
    private $pokeNpcbadgeInternal;


    /**
     * Set id
     *
     * @param integer id
     *
     * @return PokeBadge
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return PokeBadge
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
     * @return PokeBadge
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return PokeBadge
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Set bonus
     *
     * @param string bonus
     *
     * @return PokeBadge
     */
    public function setBonus($bonus)
    {
        $this->bonus = $bonus;

        return $this;
    }

    /**
     * Get bonus
     *
     * @return PokeBadge
     */
    public function getBonus()
    {
        return $this->bonus;
    }
    /**
     * Set pokeNpcbadgeInternal
     *
     * @param \Pokebattle\ApiBundle\Entity\PokeNpc $pokeNpcbadgeInternal
     *
     * @return PokeBadge
     */
    public function setPokeNpcbadgeInternal(\Pokebattle\ApiBundle\Entity\PokeNpc $pokeNpcbadgeInternal = null)
    {
        $this->pokeNpcbadgeInternal = $pokeNpcbadgeInternal;

        return $this;
    }

    /**
     * Get pokeNpcbadgeInternal
     *
     * @return \Pokebattle\ApiBundle\Entity\PokeNpc
     */
    public function getPokeNpcbadgeInternal()
    {
        return $this->pokeNpcbadgeInternal;
    }
}

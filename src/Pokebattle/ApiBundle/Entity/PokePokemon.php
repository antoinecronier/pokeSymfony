<?php
/**************************************************************************
 * PokePokemon.php, pokebattle Android
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
 * PokePokemon
 *
 * @ORM\Table(name="pokebattle_pokePokemon")
 * @ORM\Entity(repositoryClass="Pokebattle\ApiBundle\Repository\PokePokemonRepository")
 * @JSON\ExclusionPolicy("ALL")
 */
class PokePokemon
{
    /**
     * @ORM\ManyToOne(targetEntity="PokeNpc", inversedBy="pokemons")
     * @ORM\JoinColumn(name="PokeNpcpokemonsInternal_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("pokeNpcpokemonsInternal")
     
     * @var PokeNpc
     */
    private $pokeNpcpokemonsInternal;

    /**
     * @ORM\ManyToOne(targetEntity="PokeNpc", inversedBy="team")
     * @ORM\JoinColumn(name="PokeNpcteamInternal_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("pokeNpcteamInternal")
     
     * @var PokeNpc
     */
    private $pokeNpcteamInternal;

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
     * @ORM\Column(name="surnom", type="string")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("surnom")
     
     * @var string
     */
    private $surnom;

    /**
     * @ORM\Column(name="niveau", type="integer")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("niveau")
     
     * @var integer
     */
    private $niveau;

    /**
     * @ORM\Column(name="capture", type="datetime", nullable=true)
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("capture")
     
     * @var \DateTime
     */
    private $capture;

    /**
     * @ORM\ManyToOne(targetEntity="PokeTypePokemon")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("type")
     
     * @var PokeTypePokemon
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="PokeAttaque")
     * @ORM\JoinColumn(name="attaque1_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("attaque1")
     
     * @var PokeAttaque
     */
    private $attaque1;

    /**
     * @ORM\ManyToOne(targetEntity="PokeAttaque")
     * @ORM\JoinColumn(name="attaque2_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("attaque2")
     
     * @var PokeAttaque
     */
    private $attaque2;

    /**
     * @ORM\ManyToOne(targetEntity="PokeAttaque")
     * @ORM\JoinColumn(name="attaque3_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("attaque3")
     
     * @var PokeAttaque
     */
    private $attaque3;

    /**
     * @ORM\ManyToOne(targetEntity="PokeAttaque")
     * @ORM\JoinColumn(name="attaque4_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("attaque4")
     
     * @var PokeAttaque
     */
    private $attaque4;


    /**
     * Set pokeNpcpokemonsInternal
     *
     * @param \Pokebattle\ApiBundle\Entity\PokeNpc $pokeNpcpokemonsInternal
     *
     * @return PokePokemon
     */
    public function setPokeNpcpokemonsInternal(\Pokebattle\ApiBundle\Entity\PokeNpc $pokeNpcpokemonsInternal = null)
    {
        $this->pokeNpcpokemonsInternal = $pokeNpcpokemonsInternal;

        return $this;
    }

    /**
     * Get pokeNpcpokemonsInternal
     *
     * @return \Pokebattle\ApiBundle\Entity\PokeNpc
     */
    public function getPokeNpcpokemonsInternal()
    {
        return $this->pokeNpcpokemonsInternal;
    }
    /**
     * Set pokeNpcteamInternal
     *
     * @param \Pokebattle\ApiBundle\Entity\PokeNpc $pokeNpcteamInternal
     *
     * @return PokePokemon
     */
    public function setPokeNpcteamInternal(\Pokebattle\ApiBundle\Entity\PokeNpc $pokeNpcteamInternal = null)
    {
        $this->pokeNpcteamInternal = $pokeNpcteamInternal;

        return $this;
    }

    /**
     * Get pokeNpcteamInternal
     *
     * @return \Pokebattle\ApiBundle\Entity\PokeNpc
     */
    public function getPokeNpcteamInternal()
    {
        return $this->pokeNpcteamInternal;
    }
    /**
     * Set id
     *
     * @param integer id
     *
     * @return PokePokemon
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return PokePokemon
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set surnom
     *
     * @param string surnom
     *
     * @return PokePokemon
     */
    public function setSurnom($surnom)
    {
        $this->surnom = $surnom;

        return $this;
    }

    /**
     * Get surnom
     *
     * @return PokePokemon
     */
    public function getSurnom()
    {
        return $this->surnom;
    }
    /**
     * Set niveau
     *
     * @param integer niveau
     *
     * @return PokePokemon
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return PokePokemon
     */
    public function getNiveau()
    {
        return $this->niveau;
    }
    /**
     * Set capture
     *
     * @param \DateTime capture
     *
     * @return PokePokemon
     */
    public function setCapture($capture)
    {
        $this->capture = $capture;

        return $this;
    }

    /**
     * Get capture
     *
     * @return PokePokemon
     */
    public function getCapture()
    {
        return $this->capture;
    }
    /**
     * Set type
     *
     * @param \Pokebattle\ApiBundle\Entity\PokeTypePokemon $type
     *
     * @return PokePokemon
     */
    public function setType(\Pokebattle\ApiBundle\Entity\PokeTypePokemon $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Pokebattle\ApiBundle\Entity\PokeTypePokemon
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set attaque1
     *
     * @param \Pokebattle\ApiBundle\Entity\PokeAttaque $attaque1
     *
     * @return PokePokemon
     */
    public function setAttaque1(\Pokebattle\ApiBundle\Entity\PokeAttaque $attaque1 = null)
    {
        $this->attaque1 = $attaque1;

        return $this;
    }

    /**
     * Get attaque1
     *
     * @return \Pokebattle\ApiBundle\Entity\PokeAttaque
     */
    public function getAttaque1()
    {
        return $this->attaque1;
    }
    /**
     * Set attaque2
     *
     * @param \Pokebattle\ApiBundle\Entity\PokeAttaque $attaque2
     *
     * @return PokePokemon
     */
    public function setAttaque2(\Pokebattle\ApiBundle\Entity\PokeAttaque $attaque2 = null)
    {
        $this->attaque2 = $attaque2;

        return $this;
    }

    /**
     * Get attaque2
     *
     * @return \Pokebattle\ApiBundle\Entity\PokeAttaque
     */
    public function getAttaque2()
    {
        return $this->attaque2;
    }
    /**
     * Set attaque3
     *
     * @param \Pokebattle\ApiBundle\Entity\PokeAttaque $attaque3
     *
     * @return PokePokemon
     */
    public function setAttaque3(\Pokebattle\ApiBundle\Entity\PokeAttaque $attaque3 = null)
    {
        $this->attaque3 = $attaque3;

        return $this;
    }

    /**
     * Get attaque3
     *
     * @return \Pokebattle\ApiBundle\Entity\PokeAttaque
     */
    public function getAttaque3()
    {
        return $this->attaque3;
    }
    /**
     * Set attaque4
     *
     * @param \Pokebattle\ApiBundle\Entity\PokeAttaque $attaque4
     *
     * @return PokePokemon
     */
    public function setAttaque4(\Pokebattle\ApiBundle\Entity\PokeAttaque $attaque4 = null)
    {
        $this->attaque4 = $attaque4;

        return $this;
    }

    /**
     * Get attaque4
     *
     * @return \Pokebattle\ApiBundle\Entity\PokeAttaque
     */
    public function getAttaque4()
    {
        return $this->attaque4;
    }
}

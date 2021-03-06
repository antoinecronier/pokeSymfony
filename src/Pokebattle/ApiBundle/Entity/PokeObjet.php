<?php
/**************************************************************************
 * PokeObjet.php, pokebattle Android
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
 * PokeObjet
 *
 * @ORM\Table(name="pokebattle_pokeObjet")
 * @ORM\Entity(repositoryClass="Pokebattle\ApiBundle\Repository\PokeObjetRepository")
 * @JSON\ExclusionPolicy("ALL")
 */
class PokeObjet
{
    /**
     * @ORM\ManyToOne(targetEntity="PokeNpc", inversedBy="objets")
     * @ORM\JoinColumn(name="PokeNpcobjetsInternal_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("pokeNpcobjetsInternal")
     
     * @var PokeNpc
     */
    private $pokeNpcobjetsInternal;

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
     * @ORM\Column(name="quantity", type="integer")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("quantity")
     
     * @var integer
     */
    private $quantity;

    /**
     * @ORM\ManyToOne(targetEntity="PokeTypeObjet")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("type")
     
     * @var PokeTypeObjet
     */
    private $type;


    /**
     * Set pokeNpcobjetsInternal
     *
     * @param \Pokebattle\ApiBundle\Entity\PokeNpc $pokeNpcobjetsInternal
     *
     * @return PokeObjet
     */
    public function setPokeNpcobjetsInternal(\Pokebattle\ApiBundle\Entity\PokeNpc $pokeNpcobjetsInternal = null)
    {
        $this->pokeNpcobjetsInternal = $pokeNpcobjetsInternal;

        return $this;
    }

    /**
     * Get pokeNpcobjetsInternal
     *
     * @return \Pokebattle\ApiBundle\Entity\PokeNpc
     */
    public function getPokeNpcobjetsInternal()
    {
        return $this->pokeNpcobjetsInternal;
    }
    /**
     * Set id
     *
     * @param integer id
     *
     * @return PokeObjet
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return PokeObjet
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
     * @return PokeObjet
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return PokeObjet
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Set quantity
     *
     * @param integer quantity
     *
     * @return PokeObjet
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return PokeObjet
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * Set type
     *
     * @param \Pokebattle\ApiBundle\Entity\PokeTypeObjet $type
     *
     * @return PokeObjet
     */
    public function setType(\Pokebattle\ApiBundle\Entity\PokeTypeObjet $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Pokebattle\ApiBundle\Entity\PokeTypeObjet
     */
    public function getType()
    {
        return $this->type;
    }
}

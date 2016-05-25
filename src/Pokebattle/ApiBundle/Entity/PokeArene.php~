<?php
/**************************************************************************
 * PokeArene.php, pokebattle Android
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
 * PokeArene
 *
 * @ORM\Table(name="pokebattle_pokeArene")
 * @ORM\Entity(repositoryClass="Pokebattle\ApiBundle\Repository\PokeAreneRepository")
 * @JSON\ExclusionPolicy("ALL")
 */
class PokeArene
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
     * @ORM\OneToOne(targetEntity="PokeNpc")
     * @ORM\JoinColumn(name="maitre_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("maitre")
     
     * @var PokeNpc
     */
    private $maitre;

    /**
     * @ORM\OneToMany(targetEntity="PokeNpc", mappedBy="pokeArenedresseursInternal")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("dresseurs")
     
     * @var \Doctrine\Common\Collections\Collection
     */
    private $dresseurs;

    /**
     * @ORM\OneToOne(targetEntity="PokeBadge")
     * @ORM\JoinColumn(name="badge_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("badge")
     
     * @var PokeBadge
     */
    private $badge;

    /**
     * @ORM\ManyToOne(targetEntity="PokeZone")
     * @ORM\JoinColumn(name="zone_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("zone")
     
     * @var PokeZone
     */
    private $zone;

    /**
     * @ORM\ManyToOne(targetEntity="PokePosition")
     * @ORM\JoinColumn(name="position_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("position")
     
     * @var PokePosition
     */
    private $position;


    /**
     * Set id
     *
     * @param integer id
     *
     * @return PokeArene
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return PokeArene
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
     * @return PokeArene
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return PokeArene
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Set maitre
     *
     * @param \Pokebattle\ApiBundle\Entity\PokeNpc $maitre
     *
     * @return PokeArene
     */
    public function setMaitre(\Pokebattle\ApiBundle\Entity\PokeNpc $maitre = null)
    {
        $this->maitre = $maitre;

        return $this;
    }

    /**
     * Get maitre
     *
     * @return \Pokebattle\ApiBundle\Entity\PokeNpc
     */
    public function getMaitre()
    {
        return $this->maitre;
    }
    /**
     * Add dresseurs
     *
     * @param \{project_name?cap_first}\ApiBundle\Entity\PokeNpc $dresseurs
     *
     * @return PokeArene
     */
    public function addDresseurs(\Pokebattle\ApiBundle\Entity\PokeNpc $dresseurs)
    {
        $this->dresseurss[] = $dresseurs;

        return $this;
    }

    /**
     * Remove dresseurs
     *
     * @param \Pokebattle\ApiBundle\Entity\PokeNpc $dresseurs
     */
    public function removeDresseurs(\Pokebattle\ApiBundle\Entity\PokeNpc $dresseurs)
    {
        $this->dresseurss->removeElement($dresseurs);
    }

    /**
     * Get dresseurss
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDresseurs()
    {
        return $this->dresseurs;
    }
    /**
     * Set badge
     *
     * @param \Pokebattle\ApiBundle\Entity\PokeBadge $badge
     *
     * @return PokeArene
     */
    public function setBadge(\Pokebattle\ApiBundle\Entity\PokeBadge $badge = null)
    {
        $this->badge = $badge;

        return $this;
    }

    /**
     * Get badge
     *
     * @return \Pokebattle\ApiBundle\Entity\PokeBadge
     */
    public function getBadge()
    {
        return $this->badge;
    }
    /**
     * Set zone
     *
     * @param \Pokebattle\ApiBundle\Entity\PokeZone $zone
     *
     * @return PokeArene
     */
    public function setZone(\Pokebattle\ApiBundle\Entity\PokeZone $zone = null)
    {
        $this->zone = $zone;

        return $this;
    }

    /**
     * Get zone
     *
     * @return \Pokebattle\ApiBundle\Entity\PokeZone
     */
    public function getZone()
    {
        return $this->zone;
    }
    /**
     * Set position
     *
     * @param \Pokebattle\ApiBundle\Entity\PokePosition $position
     *
     * @return PokeArene
     */
    public function setPosition(\Pokebattle\ApiBundle\Entity\PokePosition $position = null)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return \Pokebattle\ApiBundle\Entity\PokePosition
     */
    public function getPosition()
    {
        return $this->position;
    }
}

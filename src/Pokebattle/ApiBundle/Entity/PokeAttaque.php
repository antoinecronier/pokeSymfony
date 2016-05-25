<?php
/**************************************************************************
 * PokeAttaque.php, pokebattle Android
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
 * PokeAttaque
 *
 * @ORM\Table(name="pokebattle_pokeAttaque")
 * @ORM\Entity(repositoryClass="Pokebattle\ApiBundle\Repository\PokeAttaqueRepository")
 * @JSON\ExclusionPolicy("ALL")
 */
class PokeAttaque
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
     * @ORM\Column(name="puissance", type="integer")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("puissance")
     
     * @var integer
     */
    private $puissance;

    /**
     * @ORM\Column(name="precision", type="integer")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("precision")
     
     * @var integer
     */
    private $precision;

    /**
     * @ORM\ManyToOne(targetEntity="PokeType")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("type")
     
     * @var PokeType
     */
    private $type;


    /**
     * Set id
     *
     * @param integer id
     *
     * @return PokeAttaque
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return PokeAttaque
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
     * @return PokeAttaque
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return PokeAttaque
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Set puissance
     *
     * @param integer puissance
     *
     * @return PokeAttaque
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;

        return $this;
    }

    /**
     * Get puissance
     *
     * @return PokeAttaque
     */
    public function getPuissance()
    {
        return $this->puissance;
    }
    /**
     * Set precision
     *
     * @param integer precision
     *
     * @return PokeAttaque
     */
    public function setPrecision($precision)
    {
        $this->precision = $precision;

        return $this;
    }

    /**
     * Get precision
     *
     * @return PokeAttaque
     */
    public function getPrecision()
    {
        return $this->precision;
    }
    /**
     * Set type
     *
     * @param \Pokebattle\ApiBundle\Entity\PokeType $type
     *
     * @return PokeAttaque
     */
    public function setType(\Pokebattle\ApiBundle\Entity\PokeType $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Pokebattle\ApiBundle\Entity\PokeType
     */
    public function getType()
    {
        return $this->type;
    }
}

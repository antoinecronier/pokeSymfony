<?php
/**************************************************************************
 * PokePosition.php, pokebattle Android
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
 * PokePosition
 *
 * @ORM\Table(name="pokebattle_pokePosition")
 * @ORM\Entity(repositoryClass="Pokebattle\ApiBundle\Repository\PokePositionRepository")
 * @JSON\ExclusionPolicy("ALL")
 */
class PokePosition
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
     * @ORM\Column(name="x", type="integer")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("x")
     
     * @var integer
     */
    private $x;

    /**
     * @ORM\Column(name="y", type="integer")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("y")
     
     * @var integer
     */
    private $y;


    /**
     * Set id
     *
     * @param integer id
     *
     * @return PokePosition
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return PokePosition
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set x
     *
     * @param integer x
     *
     * @return PokePosition
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get x
     *
     * @return PokePosition
     */
    public function getX()
    {
        return $this->x;
    }
    /**
     * Set y
     *
     * @param integer y
     *
     * @return PokePosition
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Get y
     *
     * @return PokePosition
     */
    public function getY()
    {
        return $this->y;
    }
}

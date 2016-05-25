<?php
/**************************************************************************
 * PokeType.php, pokebattle Android
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
 * PokeType
 *
 * @ORM\Table(name="pokebattle_pokeType")
 * @ORM\Entity(repositoryClass="Pokebattle\ApiBundle\Repository\PokeTypeRepository")
 * @JSON\ExclusionPolicy("ALL")
 */
class PokeType
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
     * @ORM\Column(name="modificateur", type="integer")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("modificateur")
     
     * @var integer
     */
    private $modificateur;

    /**
     * @ORM\ManyToOne(targetEntity="PokeType", inversedBy="typeFort")
     * @ORM\JoinColumn(name="PokeTypetypeFortInternal_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("pokeTypetypeFortInternal")
     
     * @var PokeType
     */
    private $pokeTypetypeFortInternal;

    /**
     * @ORM\OneToMany(targetEntity="PokeType", mappedBy="pokeTypetypeFortInternal")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("typeFort")
     
     * @var \Doctrine\Common\Collections\Collection
     */
    private $typeFort;

    /**
     * @ORM\ManyToOne(targetEntity="PokeType", inversedBy="typeFaible")
     * @ORM\JoinColumn(name="PokeTypetypeFaibleInternal_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("pokeTypetypeFaibleInternal")
     
     * @var PokeType
     */
    private $pokeTypetypeFaibleInternal;

    /**
     * @ORM\OneToMany(targetEntity="PokeType", mappedBy="pokeTypetypeFaibleInternal")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("typeFaible")
     
     * @var \Doctrine\Common\Collections\Collection
     */
    private $typeFaible;

    /**
     * @ORM\ManyToOne(targetEntity="PokeTypePokemon", inversedBy="types")
     * @ORM\JoinColumn(name="PokeTypePokemontypesInternal_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("pokeTypePokemontypesInternal")
     
     * @var PokeTypePokemon
     */
    private $pokeTypePokemontypesInternal;


    /**
     * Set id
     *
     * @param integer id
     *
     * @return PokeType
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return PokeType
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
     * @return PokeType
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return PokeType
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Set modificateur
     *
     * @param integer modificateur
     *
     * @return PokeType
     */
    public function setModificateur($modificateur)
    {
        $this->modificateur = $modificateur;

        return $this;
    }

    /**
     * Get modificateur
     *
     * @return PokeType
     */
    public function getModificateur()
    {
        return $this->modificateur;
    }
    /**
     * Set pokeTypetypeFortInternal
     *
     * @param \Pokebattle\ApiBundle\Entity\PokeType $pokeTypetypeFortInternal
     *
     * @return PokeType
     */
    public function setPokeTypetypeFortInternal(\Pokebattle\ApiBundle\Entity\PokeType $pokeTypetypeFortInternal = null)
    {
        $this->pokeTypetypeFortInternal = $pokeTypetypeFortInternal;

        return $this;
    }

    /**
     * Get pokeTypetypeFortInternal
     *
     * @return \Pokebattle\ApiBundle\Entity\PokeType
     */
    public function getPokeTypetypeFortInternal()
    {
        return $this->pokeTypetypeFortInternal;
    }
    /**
     * Add typeFort
     *
     * @param \{project_name?cap_first}\ApiBundle\Entity\PokeType $typeFort
     *
     * @return PokeType
     */
    public function addTypeFort(\Pokebattle\ApiBundle\Entity\PokeType $typeFort)
    {
        $this->typeForts[] = $typeFort;

        return $this;
    }

    /**
     * Remove typeFort
     *
     * @param \Pokebattle\ApiBundle\Entity\PokeType $typeFort
     */
    public function removeTypeFort(\Pokebattle\ApiBundle\Entity\PokeType $typeFort)
    {
        $this->typeForts->removeElement($typeFort);
    }

    /**
     * Get typeForts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTypeFort()
    {
        return $this->typeFort;
    }
    /**
     * Set pokeTypetypeFaibleInternal
     *
     * @param \Pokebattle\ApiBundle\Entity\PokeType $pokeTypetypeFaibleInternal
     *
     * @return PokeType
     */
    public function setPokeTypetypeFaibleInternal(\Pokebattle\ApiBundle\Entity\PokeType $pokeTypetypeFaibleInternal = null)
    {
        $this->pokeTypetypeFaibleInternal = $pokeTypetypeFaibleInternal;

        return $this;
    }

    /**
     * Get pokeTypetypeFaibleInternal
     *
     * @return \Pokebattle\ApiBundle\Entity\PokeType
     */
    public function getPokeTypetypeFaibleInternal()
    {
        return $this->pokeTypetypeFaibleInternal;
    }
    /**
     * Add typeFaible
     *
     * @param \{project_name?cap_first}\ApiBundle\Entity\PokeType $typeFaible
     *
     * @return PokeType
     */
    public function addTypeFaible(\Pokebattle\ApiBundle\Entity\PokeType $typeFaible)
    {
        $this->typeFaibles[] = $typeFaible;

        return $this;
    }

    /**
     * Remove typeFaible
     *
     * @param \Pokebattle\ApiBundle\Entity\PokeType $typeFaible
     */
    public function removeTypeFaible(\Pokebattle\ApiBundle\Entity\PokeType $typeFaible)
    {
        $this->typeFaibles->removeElement($typeFaible);
    }

    /**
     * Get typeFaibles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTypeFaible()
    {
        return $this->typeFaible;
    }
    /**
     * Set pokeTypePokemontypesInternal
     *
     * @param \Pokebattle\ApiBundle\Entity\PokeTypePokemon $pokeTypePokemontypesInternal
     *
     * @return PokeType
     */
    public function setPokeTypePokemontypesInternal(\Pokebattle\ApiBundle\Entity\PokeTypePokemon $pokeTypePokemontypesInternal = null)
    {
        $this->pokeTypePokemontypesInternal = $pokeTypePokemontypesInternal;

        return $this;
    }

    /**
     * Get pokeTypePokemontypesInternal
     *
     * @return \Pokebattle\ApiBundle\Entity\PokeTypePokemon
     */
    public function getPokeTypePokemontypesInternal()
    {
        return $this->pokeTypePokemontypesInternal;
    }
}

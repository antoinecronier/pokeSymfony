<?php
/**************************************************************************
 * PokeDresseur.php, pokebattle Android
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
 * PokeDresseur
 *
 * @ORM\Table(name="pokebattle_pokeDresseur")
 * @ORM\Entity(repositoryClass="Pokebattle\ApiBundle\Repository\PokeDresseurRepository")
 * @JSON\ExclusionPolicy("ALL")
 */
class PokeDresseur
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
     * @ORM\Column(name="pseudo", type="string")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("pseudo")
     
     * @var string
     */
    private $pseudo;

    /**
     * @ORM\Column(name="login", type="string")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("login")
     
     * @var string
     */
    private $login;

    /**
     * @ORM\Column(name="password", type="string")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("password")
     
     * @var string
     */
    private $password;

    /**
     * @ORM\OneToMany(targetEntity="PokeNpc", mappedBy="pokeDresseurnpcsInternal")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("npcs")
     
     * @var \Doctrine\Common\Collections\Collection
     */
    private $npcs;


    /**
     * Set id
     *
     * @param integer id
     *
     * @return PokeDresseur
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return PokeDresseur
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set pseudo
     *
     * @param string pseudo
     *
     * @return PokeDresseur
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return PokeDresseur
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }
    /**
     * Set login
     *
     * @param string login
     *
     * @return PokeDresseur
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return PokeDresseur
     */
    public function getLogin()
    {
        return $this->login;
    }
    /**
     * Set password
     *
     * @param string password
     *
     * @return PokeDresseur
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return PokeDresseur
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Add npcs
     *
     * @param \{project_name?cap_first}\ApiBundle\Entity\PokeNpc $npcs
     *
     * @return PokeDresseur
     */
    public function addNpcs(\Pokebattle\ApiBundle\Entity\PokeNpc $npcs)
    {
        $this->npcss[] = $npcs;

        return $this;
    }

    /**
     * Remove npcs
     *
     * @param \Pokebattle\ApiBundle\Entity\PokeNpc $npcs
     */
    public function removeNpcs(\Pokebattle\ApiBundle\Entity\PokeNpc $npcs)
    {
        $this->npcss->removeElement($npcs);
    }

    /**
     * Get npcss
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNpcs()
    {
        return $this->npcs;
    }
}

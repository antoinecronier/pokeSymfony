<?php

namespace Pokebattle\ApiBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcherInterface;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;

use Symfony\Component\HttpFoundation\Request;

use Pokebattle\ApiBundle\Form\PokeTypePokemonType;
use Pokebattle\ApiBundle\Entity\PokeTypePokemon;
use Pokebattle\ApiBundle\Controller\RestPokeTypePokemonController;
use Pokebattle\ApiBundle\Controller\RestPokeTypeController;
use Pokebattle\ApiBundle\Controller\RestPokeZoneController;
use Pokebattle\ApiBundle\Controller\RestSyncController as Controller;

/**
 * PokeTypePokemon Repository
 *
 * This class was generated by the Harmony / Doctrine ORM.
 *
 * This class will be regenerated by Harmony. DO NOT MODIFIY THIS CLASS.
 */
class RestPokeTypePokemonControllerBase extends Controller {

    public function getNewEntity() {
        return new PokeTypePokemon();
    }

    /**=========================================================================
     * CRUD REST
     *========================================================================*/

    /**
     * GET /{id}
     *
     * @param string pokeTypePokemonId
     * @return Response
     * @Rest\Get("/{id}")
     * @ApiDoc(
     *   resource=true,
     *   section="Rest CRUD PokeTypePokemon",
     *   description="Show entity"
     * )
     * @return type
     */
    public function getPokeTypePokemonAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $data = $entityManager->getRepository('PokebattleApiBundle:PokeTypePokemon')->findOneById($id);
        $view = $this->view($data, 200);
        return $this->handleView($view);
    }

    /**
     * POST
     *
     * @Rest\Post("")
     * @ApiDoc(
     *   resource=true,
     *   section="Rest CRUD PokeTypePokemon",
     *   description="Create entity",
     *   requirements={
     *      {
     *          "name"="nom",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The nom pokeTypePokemon",
     *      },
     *      {
     *          "name"="attaque",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The attaque pokeTypePokemon",
     *      },
     *      {
     *          "name"="attaque_spe",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The attaque_spe pokeTypePokemon",
     *      },
     *      {
     *          "name"="defence",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The defence pokeTypePokemon",
     *      },
     *      {
     *          "name"="defence_spe",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The defence_spe pokeTypePokemon",
     *      },
     *      {
     *          "name"="vitesse",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The vitesse pokeTypePokemon",
     *      },
     *      {
     *          "name"="pv",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The pv pokeTypePokemon",
     *      },
     *      {
     *          "name"="pokedex",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The pokedex pokeTypePokemon",
     *      },
     *      {
     *          "name"="evolue",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The evolue pokeTypePokemon",
     *      },
     *      {
     *          "name"="types",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The types pokeTypePokemon",
     *      },
     *      {
     *          "name"="zones",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The zones pokeTypePokemon",
     *      },
     *   }
     * )
     * @return type
     */
    public function createPokeTypePokemonAction(Request $request) {
        $entity = new PokeTypePokemon();

        $form = $this->createForm(new PokeTypePokemonType(), $entity, array(
            'allow_extra_fields' => true
        ));
        $form->submit($request);

        if ($form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($entity);
            $entityManager->flush();
            $view = $this->view($entity, 200);
        } else {
            $view = $this->view(array("error" => "Parameters entity isn't valid" . $form->getErrors()), 400);
        }

        return $this->handleView($view);
    }

    /**
     * GET
     *
     * @Rest\Get("")
     * @Rest\QueryParam(name="page", nullable=true, requirements="\d+", default="0", description="Number of the page")
     * @Rest\QueryParam(name="quantity", nullable=true, requirements="\d+", default="0", description="Quantity of entities per page")
     * @param ParamFetcher $paramFetcher
     * @ApiDoc(
     *   resource=true,
     *   section="Rest CRUD PokeTypePokemon",
     *   description="Show all entities",
     *   requirements={
     *   }
     * )
     * @return type
     */
    public function getAllPokeTypePokemonAction(ParamFetcherInterface $paramFetcher)
    {
        $repository = $this->getDoctrine()->getRepository('PokebattleApiBundle:PokeTypePokemon');

        $page = $paramFetcher->get('page');
        $quantity = $paramFetcher->get('quantity');

        $data = $repository->getList($page, $quantity);

        if ($data) {
            $view = $this->view(array("PokeTypePokemons" => $data), 200);
        } else {
            $view = $this->view(null, 204);
        }

        return $this->handleView($view);
    }

    /**
     * PUT /{id}
     *
     * @Rest\Put("/{id}")
     * @ApiDoc(
     *   resource=true,
     *   section="Rest CRUD PokeTypePokemon",
     *   description="Update entity",
     *   requirements={
     *      {
     *          "name"="nom",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The nom pokeTypePokemon",
     *      },
     *      {
     *          "name"="attaque",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The attaque pokeTypePokemon",
     *      },
     *      {
     *          "name"="attaque_spe",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The attaque_spe pokeTypePokemon",
     *      },
     *      {
     *          "name"="defence",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The defence pokeTypePokemon",
     *      },
     *      {
     *          "name"="defence_spe",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The defence_spe pokeTypePokemon",
     *      },
     *      {
     *          "name"="vitesse",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The vitesse pokeTypePokemon",
     *      },
     *      {
     *          "name"="pv",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The pv pokeTypePokemon",
     *      },
     *      {
     *          "name"="pokedex",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The pokedex pokeTypePokemon",
     *      },
     *      {
     *          "name"="evolue",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The evolue pokeTypePokemon",
     *      },
     *      {
     *          "name"="types",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The types pokeTypePokemon",
     *      },
     *      {
     *          "name"="zones",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The zones pokeTypePokemon",
     *      },
     *   }
     * )
     * @return type
     */
    public function updatePokeTypePokemonAction($id, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entity = $entityManager->getRepository('PokebattleApiBundle:PokeTypePokemon')
            ->findOneById($id);

        $form = $this->createForm(new PokeTypePokemonType(), $entity, array(
            'allow_extra_fields' => true
        ));

        $form->submit($request, false);

        if ($form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($entity);
            $entityManager->flush();
            $view = $this->view($entity, 200);
        } else {
            $view = $this->view(array("error" => "Parameters entity isn't valid"), 400);
        }

        return $this->handleView($view);
    }

    /**
     * DELETE /{id}
     *
     * @Rest\Delete("/{id}")
     * @ApiDoc(
     *   resource=true,
     *   section="Rest CRUD PokeTypePokemon",
     *   description="Delete entity",
     * )
     * @return type
     */
    public function deletePokeTypePokemonAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entity = $entityManager->getRepository('PokebattleApiBundle:PokeTypePokemon')
            ->find(array("id" => $id));

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PokeTypePokemon entity');
        }

        $entityManager->remove($entity);
        $entityManager->flush();

        $view = $this->view($entity, 200);
        return $this->handleView($view);
    }


}

?>
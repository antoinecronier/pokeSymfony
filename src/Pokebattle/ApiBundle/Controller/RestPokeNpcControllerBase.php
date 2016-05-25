<?php

namespace Pokebattle\ApiBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcherInterface;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;

use Symfony\Component\HttpFoundation\Request;

use Pokebattle\ApiBundle\Form\PokeNpcType;
use Pokebattle\ApiBundle\Entity\PokeNpc;
use Pokebattle\ApiBundle\Controller\RestPokeAreneController;
use Pokebattle\ApiBundle\Controller\RestPokeDresseurController;
use Pokebattle\ApiBundle\Controller\RestPokeObjetController;
use Pokebattle\ApiBundle\Controller\RestPokeBadgeController;
use Pokebattle\ApiBundle\Controller\RestPokePokemonController;
use Pokebattle\ApiBundle\Controller\RestPokePositionController;
use Pokebattle\ApiBundle\Controller\RestPokeZoneController;
use Pokebattle\ApiBundle\Controller\RestSyncController as Controller;

/**
 * PokeNpc Repository
 *
 * This class was generated by the Harmony / Doctrine ORM.
 *
 * This class will be regenerated by Harmony. DO NOT MODIFIY THIS CLASS.
 */
class RestPokeNpcControllerBase extends Controller {

    public function getNewEntity() {
        return new PokeNpc();
    }

    /**=========================================================================
     * CRUD REST
     *========================================================================*/

    /**
     * GET /{id}
     *
     * @param string pokeNpcId
     * @return Response
     * @Rest\Get("/{id}")
     * @ApiDoc(
     *   resource=true,
     *   section="Rest CRUD PokeNpc",
     *   description="Show entity"
     * )
     * @return type
     */
    public function getPokeNpcAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $data = $entityManager->getRepository('PokebattleApiBundle:PokeNpc')->findOneById($id);
        $view = $this->view($data, 200);
        return $this->handleView($view);
    }

    /**
     * POST
     *
     * @Rest\Post("")
     * @ApiDoc(
     *   resource=true,
     *   section="Rest CRUD PokeNpc",
     *   description="Create entity",
     *   requirements={
     *      {
     *          "name"="pokeArenedresseursInternal",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The pokeArenedresseursInternal pokeNpc",
     *      },
     *      {
     *          "name"="pokeDresseurnpcsInternal",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The pokeDresseurnpcsInternal pokeNpc",
     *      },
     *      {
     *          "name"="nom",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The nom pokeNpc",
     *      },
     *      {
     *          "name"="profession",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The profession pokeNpc",
     *      },
     *      {
     *          "name"="description",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The description pokeNpc",
     *      },
     *      {
     *          "name"="objets",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The objets pokeNpc",
     *      },
     *      {
     *          "name"="badge",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The badge pokeNpc",
     *      },
     *      {
     *          "name"="pokemons",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The pokemons pokeNpc",
     *      },
     *      {
     *          "name"="team",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The team pokeNpc",
     *      },
     *      {
     *          "name"="position",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The position pokeNpc",
     *      },
     *      {
     *          "name"="zone",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The zone pokeNpc",
     *      },
     *   }
     * )
     * @return type
     */
    public function createPokeNpcAction(Request $request) {
        $entity = new PokeNpc();

        $form = $this->createForm(new PokeNpcType(), $entity, array(
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
     *   section="Rest CRUD PokeNpc",
     *   description="Show all entities",
     *   requirements={
     *   }
     * )
     * @return type
     */
    public function getAllPokeNpcAction(ParamFetcherInterface $paramFetcher)
    {
        $repository = $this->getDoctrine()->getRepository('PokebattleApiBundle:PokeNpc');

        $page = $paramFetcher->get('page');
        $quantity = $paramFetcher->get('quantity');

        $data = $repository->getList($page, $quantity);

        if ($data) {
            $view = $this->view(array("PokeNpcs" => $data), 200);
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
     *   section="Rest CRUD PokeNpc",
     *   description="Update entity",
     *   requirements={
     *      {
     *          "name"="pokeArenedresseursInternal",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The pokeArenedresseursInternal pokeNpc",
     *      },
     *      {
     *          "name"="pokeDresseurnpcsInternal",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The pokeDresseurnpcsInternal pokeNpc",
     *      },
     *      {
     *          "name"="nom",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The nom pokeNpc",
     *      },
     *      {
     *          "name"="profession",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The profession pokeNpc",
     *      },
     *      {
     *          "name"="description",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The description pokeNpc",
     *      },
     *      {
     *          "name"="objets",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The objets pokeNpc",
     *      },
     *      {
     *          "name"="badge",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The badge pokeNpc",
     *      },
     *      {
     *          "name"="pokemons",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The pokemons pokeNpc",
     *      },
     *      {
     *          "name"="team",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The team pokeNpc",
     *      },
     *      {
     *          "name"="position",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The position pokeNpc",
     *      },
     *      {
     *          "name"="zone",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The zone pokeNpc",
     *      },
     *   }
     * )
     * @return type
     */
    public function updatePokeNpcAction($id, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entity = $entityManager->getRepository('PokebattleApiBundle:PokeNpc')
            ->findOneById($id);

        $form = $this->createForm(new PokeNpcType(), $entity, array(
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
     *   section="Rest CRUD PokeNpc",
     *   description="Delete entity",
     * )
     * @return type
     */
    public function deletePokeNpcAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entity = $entityManager->getRepository('PokebattleApiBundle:PokeNpc')
            ->find(array("id" => $id));

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PokeNpc entity');
        }

        $entityManager->remove($entity);
        $entityManager->flush();

        $view = $this->view($entity, 200);
        return $this->handleView($view);
    }


}

?>
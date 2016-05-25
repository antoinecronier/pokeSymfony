<?php

namespace Pokebattle\ApiBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcherInterface;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;

use Symfony\Component\HttpFoundation\Request;

use Pokebattle\ApiBundle\Form\PokeAreneType;
use Pokebattle\ApiBundle\Entity\PokeArene;
use Pokebattle\ApiBundle\Controller\RestPokeNpcController;
use Pokebattle\ApiBundle\Controller\RestPokeBadgeController;
use Pokebattle\ApiBundle\Controller\RestPokeZoneController;
use Pokebattle\ApiBundle\Controller\RestPokePositionController;
use Pokebattle\ApiBundle\Controller\RestSyncController as Controller;

/**
 * PokeArene Repository
 *
 * This class was generated by the Harmony / Doctrine ORM.
 *
 * This class will be regenerated by Harmony. DO NOT MODIFIY THIS CLASS.
 */
class RestPokeAreneControllerBase extends Controller {

    public function getNewEntity() {
        return new PokeArene();
    }

    /**=========================================================================
     * CRUD REST
     *========================================================================*/

    /**
     * GET /{id}
     *
     * @param string pokeAreneId
     * @return Response
     * @Rest\Get("/{id}")
     * @ApiDoc(
     *   resource=true,
     *   section="Rest CRUD PokeArene",
     *   description="Show entity"
     * )
     * @return type
     */
    public function getPokeAreneAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $data = $entityManager->getRepository('PokebattleApiBundle:PokeArene')->findOneById($id);
        $view = $this->view($data, 200);
        return $this->handleView($view);
    }

    /**
     * POST
     *
     * @Rest\Post("")
     * @ApiDoc(
     *   resource=true,
     *   section="Rest CRUD PokeArene",
     *   description="Create entity",
     *   requirements={
     *      {
     *          "name"="nom",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The nom pokeArene",
     *      },
     *      {
     *          "name"="maitre",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The maitre pokeArene",
     *      },
     *      {
     *          "name"="dresseurs",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The dresseurs pokeArene",
     *      },
     *      {
     *          "name"="badge",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The badge pokeArene",
     *      },
     *      {
     *          "name"="zone",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The zone pokeArene",
     *      },
     *      {
     *          "name"="position",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The position pokeArene",
     *      },
     *   }
     * )
     * @return type
     */
    public function createPokeAreneAction(Request $request) {
        $entity = new PokeArene();

        $form = $this->createForm(new PokeAreneType(), $entity, array(
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
     *   section="Rest CRUD PokeArene",
     *   description="Show all entities",
     *   requirements={
     *   }
     * )
     * @return type
     */
    public function getAllPokeAreneAction(ParamFetcherInterface $paramFetcher)
    {
        $repository = $this->getDoctrine()->getRepository('PokebattleApiBundle:PokeArene');

        $page = $paramFetcher->get('page');
        $quantity = $paramFetcher->get('quantity');

        $data = $repository->getList($page, $quantity);

        if ($data) {
            $view = $this->view(array("PokeArenes" => $data), 200);
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
     *   section="Rest CRUD PokeArene",
     *   description="Update entity",
     *   requirements={
     *      {
     *          "name"="nom",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The nom pokeArene",
     *      },
     *      {
     *          "name"="maitre",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The maitre pokeArene",
     *      },
     *      {
     *          "name"="dresseurs",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The dresseurs pokeArene",
     *      },
     *      {
     *          "name"="badge",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The badge pokeArene",
     *      },
     *      {
     *          "name"="zone",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The zone pokeArene",
     *      },
     *      {
     *          "name"="position",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The position pokeArene",
     *      },
     *   }
     * )
     * @return type
     */
    public function updatePokeAreneAction($id, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entity = $entityManager->getRepository('PokebattleApiBundle:PokeArene')
            ->findOneById($id);

        $form = $this->createForm(new PokeAreneType(), $entity, array(
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
     *   section="Rest CRUD PokeArene",
     *   description="Delete entity",
     * )
     * @return type
     */
    public function deletePokeAreneAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entity = $entityManager->getRepository('PokebattleApiBundle:PokeArene')
            ->find(array("id" => $id));

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PokeArene entity');
        }

        $entityManager->remove($entity);
        $entityManager->flush();

        $view = $this->view($entity, 200);
        return $this->handleView($view);
    }


}

?>
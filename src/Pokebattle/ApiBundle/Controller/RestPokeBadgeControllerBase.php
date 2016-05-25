<?php

namespace Pokebattle\ApiBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcherInterface;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;

use Symfony\Component\HttpFoundation\Request;

use Pokebattle\ApiBundle\Form\PokeBadgeType;
use Pokebattle\ApiBundle\Entity\PokeBadge;
use Pokebattle\ApiBundle\Controller\RestPokeNpcController;
use Pokebattle\ApiBundle\Controller\RestSyncController as Controller;

/**
 * PokeBadge Repository
 *
 * This class was generated by the Harmony / Doctrine ORM.
 *
 * This class will be regenerated by Harmony. DO NOT MODIFIY THIS CLASS.
 */
class RestPokeBadgeControllerBase extends Controller {

    public function getNewEntity() {
        return new PokeBadge();
    }

    /**=========================================================================
     * CRUD REST
     *========================================================================*/

    /**
     * GET /{id}
     *
     * @param string pokeBadgeId
     * @return Response
     * @Rest\Get("/{id}")
     * @ApiDoc(
     *   resource=true,
     *   section="Rest CRUD PokeBadge",
     *   description="Show entity"
     * )
     * @return type
     */
    public function getPokeBadgeAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $data = $entityManager->getRepository('PokebattleApiBundle:PokeBadge')->findOneById($id);
        $view = $this->view($data, 200);
        return $this->handleView($view);
    }

    /**
     * POST
     *
     * @Rest\Post("")
     * @ApiDoc(
     *   resource=true,
     *   section="Rest CRUD PokeBadge",
     *   description="Create entity",
     *   requirements={
     *      {
     *          "name"="nom",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The nom pokeBadge",
     *      },
     *      {
     *          "name"="bonus",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The bonus pokeBadge",
     *      },
     *      {
     *          "name"="pokeNpcbadgeInternal",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The pokeNpcbadgeInternal pokeBadge",
     *      },
     *   }
     * )
     * @return type
     */
    public function createPokeBadgeAction(Request $request) {
        $entity = new PokeBadge();

        $form = $this->createForm(new PokeBadgeType(), $entity, array(
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
     *   section="Rest CRUD PokeBadge",
     *   description="Show all entities",
     *   requirements={
     *   }
     * )
     * @return type
     */
    public function getAllPokeBadgeAction(ParamFetcherInterface $paramFetcher)
    {
        $repository = $this->getDoctrine()->getRepository('PokebattleApiBundle:PokeBadge');

        $page = $paramFetcher->get('page');
        $quantity = $paramFetcher->get('quantity');

        $data = $repository->getList($page, $quantity);

        if ($data) {
            $view = $this->view(array("PokeBadges" => $data), 200);
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
     *   section="Rest CRUD PokeBadge",
     *   description="Update entity",
     *   requirements={
     *      {
     *          "name"="nom",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The nom pokeBadge",
     *      },
     *      {
     *          "name"="bonus",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The bonus pokeBadge",
     *      },
     *      {
     *          "name"="pokeNpcbadgeInternal",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The pokeNpcbadgeInternal pokeBadge",
     *      },
     *   }
     * )
     * @return type
     */
    public function updatePokeBadgeAction($id, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entity = $entityManager->getRepository('PokebattleApiBundle:PokeBadge')
            ->findOneById($id);

        $form = $this->createForm(new PokeBadgeType(), $entity, array(
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
     *   section="Rest CRUD PokeBadge",
     *   description="Delete entity",
     * )
     * @return type
     */
    public function deletePokeBadgeAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entity = $entityManager->getRepository('PokebattleApiBundle:PokeBadge')
            ->find(array("id" => $id));

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PokeBadge entity');
        }

        $entityManager->remove($entity);
        $entityManager->flush();

        $view = $this->view($entity, 200);
        return $this->handleView($view);
    }


}

?>
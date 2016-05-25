<?php

namespace Pokebattle\ApiBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcherInterface;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;

use Symfony\Component\HttpFoundation\Request;

use Pokebattle\ApiBundle\Form\PokeDresseurType;
use Pokebattle\ApiBundle\Entity\PokeDresseur;
use Pokebattle\ApiBundle\Controller\RestPokeNpcController;
use Pokebattle\ApiBundle\Controller\RestSyncController as Controller;

/**
 * PokeDresseur Repository
 *
 * This class was generated by the Harmony / Doctrine ORM.
 *
 * This class will be regenerated by Harmony. DO NOT MODIFIY THIS CLASS.
 */
class RestPokeDresseurControllerBase extends Controller {

    public function getNewEntity() {
        return new PokeDresseur();
    }

    /**=========================================================================
     * CRUD REST
     *========================================================================*/

    /**
     * GET /{id}
     *
     * @param string pokeDresseurId
     * @return Response
     * @Rest\Get("/{id}")
     * @ApiDoc(
     *   resource=true,
     *   section="Rest CRUD PokeDresseur",
     *   description="Show entity"
     * )
     * @return type
     */
    public function getPokeDresseurAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $data = $entityManager->getRepository('PokebattleApiBundle:PokeDresseur')->findOneById($id);
        $view = $this->view($data, 200);
        return $this->handleView($view);
    }

    /**
     * POST
     *
     * @Rest\Post("")
     * @ApiDoc(
     *   resource=true,
     *   section="Rest CRUD PokeDresseur",
     *   description="Create entity",
     *   requirements={
     *      {
     *          "name"="pseudo",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The pseudo pokeDresseur",
     *      },
     *      {
     *          "name"="login",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The login pokeDresseur",
     *      },
     *      {
     *          "name"="password",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The password pokeDresseur",
     *      },
     *      {
     *          "name"="npcs",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The npcs pokeDresseur",
     *      },
     *   }
     * )
     * @return type
     */
    public function createPokeDresseurAction(Request $request) {
        $entity = new PokeDresseur();

        $form = $this->createForm(new PokeDresseurType(), $entity, array(
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
     *   section="Rest CRUD PokeDresseur",
     *   description="Show all entities",
     *   requirements={
     *   }
     * )
     * @return type
     */
    public function getAllPokeDresseurAction(ParamFetcherInterface $paramFetcher)
    {
        $repository = $this->getDoctrine()->getRepository('PokebattleApiBundle:PokeDresseur');

        $page = $paramFetcher->get('page');
        $quantity = $paramFetcher->get('quantity');

        $data = $repository->getList($page, $quantity);

        if ($data) {
            $view = $this->view(array("PokeDresseurs" => $data), 200);
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
     *   section="Rest CRUD PokeDresseur",
     *   description="Update entity",
     *   requirements={
     *      {
     *          "name"="pseudo",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The pseudo pokeDresseur",
     *      },
     *      {
     *          "name"="login",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The login pokeDresseur",
     *      },
     *      {
     *          "name"="password",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The password pokeDresseur",
     *      },
     *      {
     *          "name"="npcs",
     *          "dataType"="integer",
     *          "requirement"="",
     *          "description"="The npcs pokeDresseur",
     *      },
     *   }
     * )
     * @return type
     */
    public function updatePokeDresseurAction($id, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entity = $entityManager->getRepository('PokebattleApiBundle:PokeDresseur')
            ->findOneById($id);

        $form = $this->createForm(new PokeDresseurType(), $entity, array(
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
     *   section="Rest CRUD PokeDresseur",
     *   description="Delete entity",
     * )
     * @return type
     */
    public function deletePokeDresseurAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entity = $entityManager->getRepository('PokebattleApiBundle:PokeDresseur')
            ->find(array("id" => $id));

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PokeDresseur entity');
        }

        $entityManager->remove($entity);
        $entityManager->flush();

        $view = $this->view($entity, 200);
        return $this->handleView($view);
    }


}

?>
<?php

namespace Pokebattle\ApiBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcherInterface;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;

use Symfony\Component\HttpFoundation\Request;

use Pokebattle\ApiBundle\Form\PokeTypeObjetType;
use Pokebattle\ApiBundle\Entity\PokeTypeObjet;
use Pokebattle\ApiBundle\Controller\RestSyncController as Controller;

/**
 * PokeTypeObjet Repository
 *
 * This class was generated by the Harmony / Doctrine ORM.
 *
 * This class will be regenerated by Harmony. DO NOT MODIFIY THIS CLASS.
 */
class RestPokeTypeObjetControllerBase extends Controller {

    public function getNewEntity() {
        return new PokeTypeObjet();
    }

    /**=========================================================================
     * CRUD REST
     *========================================================================*/

    /**
     * GET /{id}
     *
     * @param string pokeTypeObjetId
     * @return Response
     * @Rest\Get("/{id}")
     * @ApiDoc(
     *   resource=true,
     *   section="Rest CRUD PokeTypeObjet",
     *   description="Show entity"
     * )
     * @return type
     */
    public function getPokeTypeObjetAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $data = $entityManager->getRepository('PokebattleApiBundle:PokeTypeObjet')->findOneById($id);
        $view = $this->view($data, 200);
        return $this->handleView($view);
    }

    /**
     * POST
     *
     * @Rest\Post("")
     * @ApiDoc(
     *   resource=true,
     *   section="Rest CRUD PokeTypeObjet",
     *   description="Create entity",
     *   requirements={
     *      {
     *          "name"="nom",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The nom pokeTypeObjet",
     *      },
     *   }
     * )
     * @return type
     */
    public function createPokeTypeObjetAction(Request $request) {
        $entity = new PokeTypeObjet();

        $form = $this->createForm(new PokeTypeObjetType(), $entity, array(
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
     *   section="Rest CRUD PokeTypeObjet",
     *   description="Show all entities",
     *   requirements={
     *   }
     * )
     * @return type
     */
    public function getAllPokeTypeObjetAction(ParamFetcherInterface $paramFetcher)
    {
        $repository = $this->getDoctrine()->getRepository('PokebattleApiBundle:PokeTypeObjet');

        $page = $paramFetcher->get('page');
        $quantity = $paramFetcher->get('quantity');

        $data = $repository->getList($page, $quantity);

        if ($data) {
            $view = $this->view(array("PokeTypeObjets" => $data), 200);
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
     *   section="Rest CRUD PokeTypeObjet",
     *   description="Update entity",
     *   requirements={
     *      {
     *          "name"="nom",
     *          "dataType"="string",
     *          "requirement"="",
     *          "description"="The nom pokeTypeObjet",
     *      },
     *   }
     * )
     * @return type
     */
    public function updatePokeTypeObjetAction($id, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entity = $entityManager->getRepository('PokebattleApiBundle:PokeTypeObjet')
            ->findOneById($id);

        $form = $this->createForm(new PokeTypeObjetType(), $entity, array(
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
     *   section="Rest CRUD PokeTypeObjet",
     *   description="Delete entity",
     * )
     * @return type
     */
    public function deletePokeTypeObjetAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entity = $entityManager->getRepository('PokebattleApiBundle:PokeTypeObjet')
            ->find(array("id" => $id));

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PokeTypeObjet entity');
        }

        $entityManager->remove($entity);
        $entityManager->flush();

        $view = $this->view($entity, 200);
        return $this->handleView($view);
    }


}

?>
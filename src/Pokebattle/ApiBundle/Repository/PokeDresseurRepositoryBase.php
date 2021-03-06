<?php
/**************************************************************************
 * PokeDresseurRepositoryBase.php, pokebattle Android
 *
 * Copyright 2016
 * Description : 
 * Author(s)   : Harmony
 * Licence     : 
 * Last update : May 25, 2016
 *
 **************************************************************************/

namespace Pokebattle\ApiBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * PokeDresseurRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PokeDresseurRepositoryBase extends EntityRepository
{
    public function countTotal($id = null, $sub = null)
    {
        $queryBuilder = $this->createQueryBuilder('e')->select('count(e)');

        if (!is_null($sub) && !is_null($id)) {
            $this->makeFilter($queryBuilder, $sub, $id);
        }

        $results = $queryBuilder->getQuery()->getSingleScalarResult();
        return $results;
    }

    public function getList($page = 0, $quantity = 25, $id = null, $sub = null)
    {
        $result = null;
        $queryBuilder = $this->createQueryBuilder('e');

        if (!is_null($sub) && !is_null($id)) {
            $this->makeFilter($queryBuilder, $sub, $id);
        }

        if ($page > 0 && $quantity > 0) {
            $queryBuilder->setFirstResult(($page - 1) * $quantity)->setMaxResults($quantity);
            $paginator = new Paginator($queryBuilder, true);

            try {
                $result = $paginator->setUseOutputWalkers(false)->getIterator()->getArrayCopy();
            } catch (\Doctrine\ORM\NoResultException $e) {

            }
        } else {
            $result = $queryBuilder->getQuery()->getResult();
        }

        return $result;
    }
}

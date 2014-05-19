<?php

/*
 * This file is part of the RPSCoreBundle package.
 *
 * (c) Yos Okusanya <yos.okus@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace RPS\CoreBundle\Pager;

use Pagerfanta\Adapter\DoctrineODMMongoDBAdapter;
use Doctrine\ODM\MongoDB\Query\Builder;

/**
 * Pagerfanta ODM Pager.
 */
class PagerfantaODM extends PagerfantaPager
{
    /**
     * Get Paginated list
     *
     * @var Builder     $queryBuilder
     * @var integer     $offset         query offset
     * @var integer     $limit          query limit
     *
     * @return string
     */
    public function getList($queryBuilder, $offset, $limit)
    {
        $adapter = new DoctrineODMMongoDBAdapter($queryBuilder);

        return $this->getPager($adapter, $offset, $limit);
    }
}

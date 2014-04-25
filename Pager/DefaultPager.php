<?php
/*
 * This file is part of the RPSCoreBundle package.
 *
 * (c) Yos Okus <yos.okus@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace RPS\CoreBundle\Pager;

/**
 * Pagerfanta ORM Pager.
 */
class DefaultPager implements PagerInterface
{
    /**
     * Get Paginated list
     *
     * @var QueryBuilder    $queryBuilder
     * @var integer         $offset         query offset
     * @var integer         $limit          query limit
     *
     * @return string
     */
    public function getList($queryBuilder, $offset, $limit)
    {
        return $queryBuilder->getQuery()->getResult();
    }

    /**
     * {@inheritdoc}
     */
    public function getHtml()
    {
        return '';
    }

}

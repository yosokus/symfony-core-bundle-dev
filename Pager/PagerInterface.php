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

/**
 * Interface to be implemented by the pager.
 */
interface PagerInterface
{
    /**
     * Returns paginated list
     *
     * @param mixed     $queryBuilder
     * @param integer   $offset
     * @param integer   $limit
     */
    public function getList($queryBuilder, $offset, $limit);

    /**
     * Returns pagination links
     *
     * @return string
     */
    public function getHtml();
}

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
 * Default Pager.
 */

abstract class DefaultPager implements PagerInterface
{
    protected $pagerExtension = null;

    public function __construct($pagerExtension)
    {
        $this->pagerExtension = $pagerExtension;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getHtml()
    {
        return '';
    }

}

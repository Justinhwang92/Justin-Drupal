<?php

namespace Drupal\ww_bootstrap4_layouts\Plugin\Layout;

use Drupal\layout_builder\Plugin\Layout\MultiWidthLayoutBase;

/**
 * Configurable Bootstrap4 rwo layout plugin class.
 *
 * @internal
 *   Plugin classes are internal.
 */
class BsRowLayout extends MultiWidthLayoutBase
{

    /**
     * {@inheritdoc}
     */
    protected function getWidthOptions()
    {
        return [
            '50-50' => '50%/50% test',
            '33-67' => '33%/67% test',
        ];
    }
}

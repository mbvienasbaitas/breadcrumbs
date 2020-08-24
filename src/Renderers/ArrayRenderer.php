<?php

namespace VienasBaitas\Breadcrumbs\Renderers;

use VienasBaitas\Breadcrumbs\BreadcrumbItem;
use VienasBaitas\Breadcrumbs\Breadcrumbs;
use VienasBaitas\Breadcrumbs\Contracts\Renderer;

class ArrayRenderer implements Renderer
{
    public function render(Breadcrumbs $breadcrumbs)
    {
        return ['items' => array_map([$this, 'renderItem'], $breadcrumbs->items)];
    }

    protected function renderItem(BreadcrumbItem $item): array
    {
        return [
            'title' => $item->title,
            'path' => $item->path,
            'target' => $item->target,
        ];
    }
}

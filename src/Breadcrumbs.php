<?php

namespace VienasBaitas\Breadcrumbs;

class Breadcrumbs
{
    public array $items = [];

    public function item(string $title): BreadcrumbItem
    {
        $item = new BreadcrumbItem($title);

        $this->items[] = $item;

        return $item;
    }
}

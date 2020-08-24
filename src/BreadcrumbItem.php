<?php

namespace VienasBaitas\Breadcrumbs;

class BreadcrumbItem
{
    const TARGET_BLANK = '_blank';

    public string $title;

    public ?string $path = null;

    public ?string $target = null;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function path(?string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function target(?string $target): self
    {
        $this->target = $target;

        return $this;
    }
}

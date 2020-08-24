<?php

namespace VienasBaitas\Breadcrumbs\Contracts;

use VienasBaitas\Breadcrumbs\Breadcrumbs;

interface Renderer
{
    public function render(Breadcrumbs $breadcrumbs);
}

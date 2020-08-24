<?php

namespace VienasBaitas\Breadcrumbs\Tests\Renderers;

use PHPUnit\Framework\TestCase;
use VienasBaitas\Breadcrumbs\BreadcrumbItem;
use VienasBaitas\Breadcrumbs\Breadcrumbs;
use VienasBaitas\Breadcrumbs\Renderers\ArrayRenderer;

class ArrayRendererTest extends TestCase
{
    public function testCorrectlyRenderingMenu(): void
    {
        $breadcrumbs = new Breadcrumbs();

        $breadcrumbs->item('Dashboard')->path('/dashboard');
        $breadcrumbs->item('Dashboard')->path('/dashboard2')->target(BreadcrumbItem::TARGET_BLANK);
        $breadcrumbs->item('Settings');

        $this->assertEquals([
            'items' => [
                [
                    'title' => 'Dashboard',
                    'path' => '/dashboard',
                    'target' => null,
                ],
                [
                    'title' => 'Dashboard',
                    'path' => '/dashboard2',
                    'target' => BreadcrumbItem::TARGET_BLANK,
                ],
                [
                    'title' => 'Settings',
                    'path' => null,
                    'target' => null,
                ],
            ],
        ], (new ArrayRenderer())->render($breadcrumbs));
    }
}

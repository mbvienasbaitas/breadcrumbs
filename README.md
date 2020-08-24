# Lightweight breadcrumb management

This package allows you to add simple and easy breadcrumb management to your project.

## Installation

```bash
composer require vienasbaitas/breadcrumbs:^1.0
```

## Usage

In order to use breadcrumbs you need to create new instance, after that just push new items to it.

```php
$breadcrumbs = new \VienasBaitas\Breadcrumbs\Breadcrumbs();

$breadcrumbs->item('Dashboard')->path('/dashboard');
$breadcrumbs->item('Settings')->path('/settings');
$breadcrumbs->item('Blog')->path('/blog')->target(\VienasBaitas\Breadcrumbs\BreadcrumbItem::TARGET_BLANK);
```

After container has been initialized you can return whole breadcrumbs object to your view, alternatively you can use built-in array renderer to render it as an array.

```php
$renderer = new \VienasBaitas\Breadcrumbs\Renderers\ArrayRenderer();

$asArray = $renderer->render($breadcrumbs);
```

## Available methods

### VienasBaitas\Breadcrumbs\Breadcrumbs

| Method | Description | 
|---|---|
| item(string $title): VienasBaitas\Breadcrumbs\BreadcrumbItem | Creates a new item with given title. |

### VienasBaitas\Breadcrumbs\BreadcrumbItem

| Method | Description | 
|---|---|
| path(?string $path): VienasBaitas\Breadcrumbs\BreadcrumbItem | Assigns path to breadcrumb item. |
| target(?string $target): VienasBaitas\Breadcrumbs\BreadcrumbItem | Sets breadcrumb item's target, for example `_blank`. |

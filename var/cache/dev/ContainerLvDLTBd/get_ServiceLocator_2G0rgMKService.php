<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.2G0rgMK' shared service.

return $this->privates['.service_locator.2G0rgMK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'product' => ['privates', '.errored..service_locator.2G0rgMK.App\\Entity\\Product', NULL, 'Cannot autowire service ".service_locator.2G0rgMK": it references class "App\\Entity\\Product" but no such service exists.'],
    'productRepository' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService.php', true],
], [
    'product' => 'App\\Entity\\Product',
    'productRepository' => 'App\\Repository\\ProductRepository',
]);
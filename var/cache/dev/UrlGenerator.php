<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'cart' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/cart']], [], []],
    'category_index' => [[], ['_controller' => 'App\\Controller\\CategoryController::index'], [], [['text', '/category/']], [], []],
    'category_new' => [[], ['_controller' => 'App\\Controller\\CategoryController::new'], [], [['text', '/category/new']], [], []],
    'category_show' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], []],
    'category_edit' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], []],
    'category_delete' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], []],
    'deafult' => [[], ['_controller' => 'App\\Controller\\DeafultController::index'], [], [['text', '/deafult']], [], []],
    'product_index' => [[], ['_controller' => 'App\\Controller\\ProductController::index'], [], [['text', '/product/']], [], []],
    'product_new' => [[], ['_controller' => 'App\\Controller\\ProductController::new'], [], [['text', '/product/new']], [], []],
    'product_show' => [['id'], ['_controller' => 'App\\Controller\\ProductController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/product']], [], []],
    'product_edit' => [['id'], ['_controller' => 'App\\Controller\\ProductController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/product']], [], []],
    'product_delete' => [['id'], ['_controller' => 'App\\Controller\\ProductController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/product']], [], []],
    'product_add' => [['id'], ['_controller' => 'App\\Controller\\ProductController::add'], [], [['text', '/add'], ['variable', '/', '[^/]++', 'id', true], ['text', '/product']], [], []],
];
<?php
// routing.php
$routes = [
    'Item' => [ // Controller
        ['index', '/', 'GET'], // action, url, HTTP method
        ['show', '/item/{id}', 'GET'], // action, url, HTTP method
        ['add', '/item/add/', 'GET'],
        ['add', '/item/add/', 'POST'],
        ['edit', '/item/edit/{id}', 'GET'],
        ['edit', '/item/edit/{id}', 'POST'],
        ['delete', 'item/delete/{id}', 'GET'],
        ['delete', 'item/delete/{id}', 'POST'],
    ],
    'Category' => [ // Controller
        ['index', '/categories', 'GET'], // action, url, HTTP method
        ['show', '/category/{id}', 'GET'], // action, url, HTTP method
        ['add', '/category/add/', 'GET'],
        ['add', '/category/add/', 'POST'],
        ['edit', '/category/edit/{id}', 'GET'],
        ['edit', '/category/edit/{id}', 'POST'],
        ['delete', 'category/delete/{id}', 'GET'],
        ['delete', 'category/delete/{id}', 'POST'],
    ],
];
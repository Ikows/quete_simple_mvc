<?php
// routing.php
$routes = [
    'Item' => [ // Controller
        ['index', '/', 'GET'], // action, url, HTTP method
        ['show', '/item/{id}', 'GET'], // action, url, HTTP method
        ['add', '/item/add/', 'GET'],
        ['add', '/item/add/', 'POST'],
        ['edit', '/item/edit/{id}', 'GET'],
        ['delete', 'item/delete/{id}', 'GET'],
    ],
    'Category' => [ // Controller
        ['index', '/categories', 'GET'], // action, url, HTTP method
        ['show', '/category/{id}', 'GET'], // action, url, HTTP method
        ['add', '/category/add/', 'GET'],
        ['add', '/category/add/', 'POST'],
        ['edit', '/category/edit/{id}', 'GET'],
        ['delete', 'category/delete/{id}', 'GET'],
    ],
];
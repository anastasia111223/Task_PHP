<?php

return [
    [
        'path' => '/',
        'method' => 'GET',
        'controller' => 'Goods\Controllers\IndexController::index'
    ],
    [
        'path' => '/category',
        'method' => 'GET',
        'controller' => 'Goods\Controllers\GoodController::showCategory'
    ],
    [
        'path' => '/good',
        'method' => 'GET',
        'controller' => 'Goods\Controllers\GoodController::showGood'
    ],
    [
        'path' => '/busket',
        'method' => 'GET',
        'controller' => 'Goods\Controllers\GoodController::showBusket'
    ],
    [
        'path' => '/',
        'method' => 'POST',
        'controller' => 'Goods\Controllers\GoodController::addToBusket'
    ]
];
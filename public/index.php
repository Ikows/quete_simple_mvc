<?php

require __DIR__ . '/../vendor/autoload.php';


$obj = new Controller\ItemController();
$items = $obj->index();

require  __DIR__ . '/../src/View/item.php';
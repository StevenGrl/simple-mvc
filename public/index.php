<?php
    require __DIR__ . '/../vendor/autoload.php';
    use Controller\ItemController;

    $itemController = new ItemController();

    $items = $itemController->index();

    require __DIR__ . '/../src/View/item.php';

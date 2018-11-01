<?php
    namespace Controller;

    use Model\ItemManager;

    class ItemController
    {
        public function index()
        {
          $itemManager = new ItemManager();
          $items = $itemManager->selectAllItems();
          require __DIR__ . '/../View/item.php';
        }

        public function show($id)
        {
          $itemManager = new ItemManager();
          $item = $itemManager->selectItemById($id);
          require __DIR__ . '/../View/showItem.php';
        }
    }

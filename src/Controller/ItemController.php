<?php
    namespace Controller;

    use Model\ItemManager;

    class ItemController
    {
        public function index()
        {
          $itemManager = new ItemManager();
          $items = $itemManager->selectAllItems();

          return $items;
        }
    }

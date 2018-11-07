<?php
    namespace Controller;

    use Model\ItemManager;
    use Twig_Loader_Filesystem;
    use Twig_Environment;

    class ItemController
    {
        private $twig;

        public function __construct()
        {
            $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
            $this->twig = new Twig_Environment($loader);
        }

        public function index()
        {
            $itemManager = new ItemManager();
            $items = $itemManager->selectAllItems();

            return $this->twig->render('Item/index.html.twig', ['items' => $items]);
        }

        public function show($id)
        {
          $itemManager = new ItemManager();
          $item = $itemManager->selectItemById($id);
          return $this->twig->render('Item/show.html.twig', ['item' => $item]);
        }
    }

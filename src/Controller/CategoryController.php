<?php
    namespace Controller;

    use Model\CategoryManager;
    use Twig_Loader_Filesystem;
    use Twig_Environment;

    class CategoryController
    {
        private $twig;

        public function __construct()
        {
            $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
            $this->twig = new Twig_Environment($loader);
        }

        public function index()
        {
          $categoryManager = new CategoryManager();
          $categories = $categoryManager->selectAllCategories();

          return $this->twig->render('Category/index.html.twig', ['categories' => $categories]);
        }

        public function show($id)
        {
          $categoryManager = new CategoryManager();
          $category = $categoryManager->selectCategoryById($id);

          return $this->twig->render('Category/show.html.twig', ['category' => $category]);
        }
    }

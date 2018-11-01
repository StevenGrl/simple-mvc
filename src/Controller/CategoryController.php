<?php
    namespace Controller;

    use Model\CategoryManager;

    class CategoryController
    {
        public function index()
        {
          $categoryManager = new CategoryManager();
          $categories = $categoryManager->selectAllCategories();
          require __DIR__ . '/../View/category.php';
        }

        public function show($id)
        {
          $categoryManager = new CategoryManager();
          $category = $categoryManager->selectCategoryById($id);
          require __DIR__ . '/../View/showCategory.php';
        }
    }

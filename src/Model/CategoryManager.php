<?php
    namespace Model;

    require __DIR__ . '/../../app/db.php';

    class CategoryManager
    {
        // récupération de tous les items
        public function selectAllCategories() :array
        {
            $pdo = new \PDO(DSN, USER, PASS);
            $query = "SELECT * FROM category";
            $res = $pdo->query($query);
            return $res->fetchAll();
        }

        public function selectCategoryById(int $id)
        {
          $pdo = new \PDO(DSN, USER, PASS);
          $query = "SELECT * FROM category WHERE id= :id";
          $stmt = $pdo->prepare($query);
          $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
          $stmt->execute();
          return $stmt->fetch();
        }
    }

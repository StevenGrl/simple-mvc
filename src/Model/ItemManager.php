<?php
    namespace Model;

    require __DIR__ . '/../../app/db.php';

    class ItemManager
    {
        // récupération de tous les items
        public function selectAllItems() :array
        {
            $pdo = new \PDO(DSN, USER, PASS);
            $query = "SELECT * FROM item";
            $res = $pdo->query($query);
            return $res->fetchAll();
        }

        public function selectItemById(int $id)
        {
          $pdo = new \PDO(DSN, USER, PASS);
          $query = "SELECT * FROM item WHERE id= :id";
          $stmt = $pdo->prepare($query);
          $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
          $stmt->execute();
          return $stmt->fetch();
        }
    }

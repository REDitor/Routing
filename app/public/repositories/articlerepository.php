<?php
require __DIR__ . '/repository.php';
require __DIR__ . '/../models/article.php';

class ArticleRepository extends Repository {

    function getAll() {
        $stmt = $this->connection->prepare("SELECT * FROM article");
        $stmt->execute();
      
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Article');
        $articles = $stmt->fetchAll();
        return $articles;
    }  
}
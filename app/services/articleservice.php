<?php
require __DIR__ . '/../repositories/articlerepository.php';


class ArticleService {
    public function getAll() {
        // retrieve data
        $repository = new ArticleRepository();
        $articles = $repository->getAll();
        return $articles;
    }

    public function insert($article) {
        // retrieve data
        $repository = new ArticleRepository();
        $repository->insert($article);        
    }
}

?>
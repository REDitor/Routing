<?php
require __DIR__ . '/../../services/articleservice.php';

class ArticleController
{

    private $articleService;

    // initialize services
    function __construct()
    {
        $this->articleService = new ArticleService();
    }

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $json = file_get_contents('php://input');
            $object = json_decode($json);

            $article = new Article();
            $article->setContent($object->content);
            $article->setTitle($object->title);
            $article->setAuthor("Sander");

            $this->articleService->insert($article);
        }

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            echo json_encode($this->articleService->getAll());
        }
    }
}
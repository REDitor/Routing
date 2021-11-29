<?php
require __DIR__ . '/controller.php';
require __DIR__ . '/../services/articleservice.php';

class ArticleController extends Controller {

    private $articleService; 

    // initialize services
    function __construct() {
        $this->articleService = new ArticleService();
    }

    // router maps this to /article and /article/index automatically
    public function index() {
      
        // retrieve data 
        $articles = $this->articleService->getAll();
    
        // show view, param = accessible as $model in the view
        // displayView maps this to /views/article/index.php automatically
        $this->displayView($articles);
    }
}
?>
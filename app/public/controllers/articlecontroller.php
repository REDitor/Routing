<?php
require __DIR__ . '/controller.php';
require __DIR__ . '/../services/articleservice.php';

class ArticleController extends Controller {

    // router maps this to /article and /article/index automatically
    public function index() {

        // retrieve data
        $service = new ArticleService();
        $articles = $service->getAll();
        
        // show view, first param = view name, second param = accessible as $model in the view
        // displayView maps this to index.php file in /views/article/ automatically

        $this->displayView("index", $articles);
    }
}
?>
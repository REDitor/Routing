<?php
require __DIR__ . '/../../services/articleservice.php';

class ArticleController {

    private $articleService; 

    // initialize services
    function __construct() {
        $this->articleService = new ArticleService();
    }

    public function index() {
      
        // your code here
        // return all articles in the database as JSON
        
        return null;       
    }
}
?>
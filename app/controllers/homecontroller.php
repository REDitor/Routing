<?php
require __DIR__ . '/controller.php';

class HomeController extends Controller {
    public function index() {
        require __DIR__ . '/../views/home/index.php';
    }

    public function about() {
        echo "you've reached the about method of the home controller";
    }
}
?>
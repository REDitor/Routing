<?php
require __DIR__ . '/controller.php';

class HomeController extends Controller {
    public function index() {
        echo "you've reached the index method of the home controller";
    }

    public function about() {
        echo "you've reached the about method of the home controller";
    }
}
?>
<?php
class Controller {
    
    function displayView($name, $model) {        
        $directory = substr(get_class($this), 0, -10);
        require __DIR__ . "/../views/$directory/$name.php";
    }

}
<?php
require_once __DIR__ . '/../../services/articleservice.php';

$id = 0;
if (isset($_POST['id'])) {
    $id = $_POST['id'];
}
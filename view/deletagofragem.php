<?php
require_once __DIR__ . '/../controller/GofragemController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller = new GofragemController();
    $controller->deletar();
    exit;
}

header("Location: listagofragem.php");

?>
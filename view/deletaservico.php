<?php
require_once __DIR__ . '/../controller/ServicoController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller = new ServicoController();
    $controller->deletar();
    exit;
}

header("Location: listaservico.php");

?>
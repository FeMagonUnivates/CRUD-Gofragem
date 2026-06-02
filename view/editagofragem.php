<?php
require_once __DIR__ . '/../controller/GofragemController.php';

$controller = new GofragemController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller->atualizar();
    exit;
}

$id   = $_GET['id'] ?? null;
$gofragem = $id ? $controller->buscarPorId($id) : null;

if (!$gofragem) {
    header("Location: listagofragem.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Gofragem</title>
    <link rel="stylesheet" href="../css/styleEditaGofragem.css">
</head>

<body>

    <div class="conteudo">
    
        <h2>Atualizar Gofragem</h2>

        <form action="" method="POST">

            <input 
                type="hidden" 
                name="id"
                value="<?= htmlspecialchars($gofragem->getId()) ?>">
            <br>

            <label>Tipo de gofragem</label>
            <input 
                type="text"
                name="tipo"
                value="<?= htmlspecialchars($gofragem->getTipo()) ?>">
            <br>

            <label>Gramatura do papel (grama)</label>
            <input 
                type="number"
                name="gramatura"
                value="<?= htmlspecialchars($gofragem->getGramatura()) ?>">
            <br>

            <label>Tamanho (AAA x BBB)</label>
            <input 
                type="text"
                name="tamanho" 
                value="<?= htmlspecialchars($gofragem->getTamanho()) ?>">
            <br>

            <label>Acabamento</label>
            <input 
                type="text"
                name="acabamento" 
                value="<?= htmlspecialchars($gofragem->getAcabamento()) ?>">
            <br>

            <button type="submit">Salvar alterações</button>
        </form>

        <div class="links">
            <a href="listagofragem.php">Cancelar</a>
        </div>
    
    </div>
    
</body>

</html>
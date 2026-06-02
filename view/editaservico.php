<?php
require_once __DIR__ . '/../controller/ServicoController.php';

$controller = new ServicoController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller->atualizar();
    exit;
}

$id   = $_GET['id'] ?? null;
$servico = $id ? $controller->buscarPorId($id) : null;

if (!$servico) {
    header("Location: listaservico.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Servico</title>
    <link rel="stylesheet" href="../css/styleEditaServico.css">
</head>

<body>

    <div class="conteudo">
    
        <h2>Atualizar Servico</h2>

        <form action="" method="POST">

            <input 
                type="hidden" 
                name="id"
                value="<?= htmlspecialchars($servico->getId()) ?>">
            <br>

            <label>Gráfica</label>
            <input 
                type="text" 
                name="grafica"
                value="<?= htmlspecialchars($servico->getGrafica()) ?>">
            <br>

            <label>Data</label>
            <input 
                type="date"
                name="data"
                value="<?= htmlspecialchars($servico->getData()) ?>">
            <br>

            <label>Quantidade de folhas</label>
            <input 
                type="number" 
                name="quantidade" 
                value="<?= htmlspecialchars($servico->getQuantidade()) ?>">
            <br>

            <label>Tempo de serviço (minutos)</label>
            <input 
                type="number" 
                name="tempo" 
                value="<?= htmlspecialchars($servico->getTempo()) ?>">
            <br>

            <button type="submit">Salvar alterações</button>
        </form>

        <div class="links">
            <a href="listaservico.php">Cancelar</a>
        </div>
    
    </div>
    
</body>

</html>
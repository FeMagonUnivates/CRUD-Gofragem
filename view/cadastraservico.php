<?php

require_once __DIR__ . '/../controller/ServicoController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller = new ServicoController();
    $controller->salvar();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Servico</title>
    <link rel="stylesheet" href="../css/styleCadastraServico.css">
</head>

<body>

    <div class="conteudo">
    
        <h2>Cadastro de Servico</h2>

        <form action="" method="POST">

            <label>Gráfica</label>
            <input 
                type="text" 
                placeholder="Grafocem, Rota, ..." 
                name="grafica" 
                required>
            <br>

            <label>Data</label>
            <input 
                type="date"
                name="data"
                required>
            <br>

            <label>Quantidade de folhas</label>
            <input 
                type="number" 
                placeholder="1000, 5500, ..." 
                name="quantidade" 
                required>
            <br>

            <label>Tempo de serviço (minutos)</label>
            <input 
                type="number" 
                placeholder="30, 240, ..."
                name="tempo" 
                required>
            <br>

            <button type="submit">Cadastrar</button>
        </form>

        <div class="links">
            <div>
                <a href="listaservico.php">Ver servicos cadastrados</a>
            </div>
            <div>
                <a href="../index.html">Voltar para Início</a>
            </div>
        </div>
    
    </div>
    
</body>

</html>
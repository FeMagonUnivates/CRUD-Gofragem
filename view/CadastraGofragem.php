<?php

require_once __DIR__ . '/../controller/GofragemController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller = new GofragemController();
    $controller->salvar();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Gofragem</title>
    <link rel="stylesheet" href="../css/styleCadastraGofragem.css">
</head>

<body>
    
    <div class="conteudo">
        
        <h2>Cadastro de Gofragem</h2>

        <form action="" method="POST">

            <label>Tipo de gofragem</label>
            <input 
                type="text" 
                placeholder="Linho, Escamado, ..." 
                name="tipo" 
                required>
            <br>

            <label>Gramatura do papel (grama)</label>
            <input 
                type="number" 
                placeholder="170, 350, ..." 
                name="gramatura"
                required>
            <br>

            <label>Tamanho (AAA x BBB)</label>
            <input 
                type="text" 
                placeholder="350 x 700, 150 x 130, ..." 
                name="tamanho" 
                required>
            <br>

            <label>Acabamento</label>
            <input 
                type="text" 
                placeholder="fosco, cromado, ..."
                name="acabamento" 
                required>
            <br>

            <button type="submit">Cadastrar</button>
        </form>

        <div class="links">
            <div>
                <a href="listagofragem.php">Ver gofragens cadastradas</a>
            </div>
            <div>
                <a href="../index.html">Voltar para Início</a>
            </div>
        </div>

    </div>
    
</body>

</html>
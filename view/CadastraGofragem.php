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
</head>

<body>
    
    <h2>Cadastro de Gofragem</h2>

    <form action="" method="POST">

        <label>Tipo de gofragem</label>
        <input 
            type="text" 
            placeholder="Linho, Escamado, ..." 
            name="tipo" 
            required>
        <br>

        <label>Gramatura do papel</label>
        <input 
            type="number" 
            placeholder="170, 350, ..." 
            name="gramatura"
            required>
        <br>

        <label>Tamanho</label>
        <input 
            type="number" 
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

    <a href="listagofragem.php">Ver gofragens cadastradas</a>
</body>

</html>
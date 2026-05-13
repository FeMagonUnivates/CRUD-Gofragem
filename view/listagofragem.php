<?php

require_once __DIR__ . '/../controller/GofragemController.php';

$controller = new GofragemController();
$gofragem   = $controller->listar();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gofragens</title>
</head>

<body>
    
    <h2>Gofragens cadastradas</h2>

    <?php if (count($gofragem) > 0): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipo de gofragem</th>
                    <th>Gramatura do papel</th>
                    <th>Tamanho</th>
                    <th>Acabamento</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($gofragem as $gofragem): ?>
                    <tr>
                        <td><?= $gofragem->getId() ?></td>
                        <td><?= $gofragem->getTipo() ?></td>
                        <td><?= $gofragem->getGramatura() ?></td>
                        <td><?= $gofragem->getTamanho() ?></td>
                        <td><?= $gofragem->getAcabamento() ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Nenhuma gofragem cadastrada.</p>
    <?php endif; ?>

    <a href="cadastragofragem.php">Cadastrar nova gofragem</a>

</body>

</html>
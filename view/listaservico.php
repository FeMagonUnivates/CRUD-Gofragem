<?php

require_once __DIR__ . '/../controller/ServicoController.php';

$controller = new ServicoController();
$servico   = $controller->listar();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços</title>
    <link rel="stylesheet" href="../css/styleListaServico.css">
</head>

<body>
    
    <div class="conteudo">

        <h2>Serviços cadastrados</h2>

        <?php if (count($servico) > 0): ?>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Gráfica</th>
                        <th>Data</th>
                        <th>Quantidade</th>
                        <th>Tempo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($servico as $servico): ?>
                        <tr>
                            <td><?= $servico->getId() ?></td>
                            <td><?= $servico->getGrafica() ?></td>
                            <td><?= $servico->getData() ?></td>
                            <td><?= $servico->getQuantidade() ?></td>
                            <td><?= $servico->getTempo() ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Nenhum servico cadastrado.</p>
        <?php endif; ?>

        <div class="links">
            <div>
                <a href="cadastraservico.php">Cadastrar novo servico</a>
            </div>
            <div>
                <a href="../index.html">Voltar para Início</a>
            </div>
        </div>

    </div>

</body>

</html>
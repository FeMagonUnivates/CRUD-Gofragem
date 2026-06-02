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
    <link rel="stylesheet" href="../css/styleListaGofragem.css">
</head>

<body>
    
    <div class="conteudo">

        <h2>Gofragens cadastradas</h2>

        <?php if (count($gofragem) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tipo de gofragem</th>
                        <th>Gramatura do papel</th>
                        <th>Tamanho (mm)</th>
                        <th>Acabamento</th>
                        <th>Editar / Excluir</th>
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
                            <td>
                                <a class="btn-editar" href="editagofragem.php?id=<?= $gofragem->getId() ?>">Editar</a>

                                <form action="deletagofragem.php" method="POST" style="display:inline"
                                    onsubmit="return confirm('Deseja realmente excluir a gofragem?')">
                                    <input type="hidden" name="id" value="<?= $gofragem->getId() ?>">
                                    <button type="submit" class="btn-excluir">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Nenhuma gofragem cadastrada.</p>
        <?php endif; ?>

        <div class="links">
            <div>
                <a href="cadastragofragem.php">Cadastrar nova gofragem</a>
            </div>
            <div>
                <a href="../index.html">Voltar para Início</a>
            </div>
        </div>

    </div>

</body>

</html>
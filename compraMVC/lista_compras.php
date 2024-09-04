<?php
require_once 'DatabaseRepository.php';

$alimentos = DatabaseRepository::getAllAlimentos();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alimentos</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>Lista de Alimentos</h1>
    <a href="add_compras.php">Adicionar Novo Alimento</a>
    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alimentos as $alimento): ?>
                <tr>
                    <td><?= ($alimento['alimento']); ?></td>
                    <td><?= ($alimento['quantidade']); ?></td>
                    <td><?= (number_format($alimento['preco'], 2, ',', '.')); ?></td>
                    <td>
                        <a href="edit_alimento.php?id=<?= ($alimento['id']); ?>">Comprar</a>
                        <a href="delete_item.php?id=<?= ($alimento['id']); ?>" 
                            onclick="return confirm('Tem certeza que deseja deletar este alimento?');">Deletar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
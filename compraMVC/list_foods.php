<?php
require_once 'DatabaseRepository.php';
$foods = DatabaseRepository::getAllFoods();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alimentos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Lista de Alimentos</h1>
    <a href="add_food.php">Adicionar Novo Alimento</a>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($foods as $food): ?>
                <tr>
                    <td><?= ($food['nome']); ?></td>
                    <td><?= ($food['quantidade']); ?></td>
                    <td><?= number_format($food['preco'], 2, ',', '.'); ?></td>
                    <td>
                        <a href="edit_food.php?id=<?= ($food['id']); ?>">Editar</a>
                        <a href="delete_food.php?id=<?= ($food['id']); ?>" 
                            onclick="return confirm('Tem certeza que deseja deletar este alimento?');">Deletar</a>
                        <a href="buy_food.php?id=<?= ($food['id']); ?>">Comprar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

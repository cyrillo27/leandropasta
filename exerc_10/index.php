<?php
require(__DIR__ . '/models/DatabaseRepository.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete_id'])) {
        DatabaseRepository::deleteItem($_POST['delete_id']);
    } elseif (isset($_POST['toggle_id'])) {
        $item = DatabaseRepository::getItemById($_POST['toggle_id']);
        $new_comprado = $item['comprado'] ? 0 : 1;
        DatabaseRepository::updateItem($_POST['toggle_id'], $new_comprado);
    } elseif (isset($_POST['nome_produto']) && isset($_POST['quantidade'])) {
        DatabaseRepository::addItem($_POST['nome_produto'], $_POST['quantidade']);
    }
    header('Location: index.php');
    exit;
}

$items = DatabaseRepository::getAllItems();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"], input[type="number"] {
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 100%;
            max-width: 300px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            color: #fff;
            background-color: #007bff;
            cursor: pointer;
            font-size: 16px;
        }

        button.delete {
            background-color: #dc3545;
        }

        button:hover {
            opacity: 0.9;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background-color: #fff;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        li.comprado {
            text-decoration: line-through;
            background-color: #e9ecef;
        }

        .actions {
            display: flex;
            gap: 10px;
        }
    </style>
</head>

<body>
    <h1>Lista de Compras</h1>

    <form action="index.php" method="post">
        <label for="nome_produto">Nome do Produto</label>
        <input type="text" name="nome_produto" id="nome_produto" required>
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" required>
        <button type="submit">Adicionar Item</button>
    </form>

    <h2>Itens a Comprar</h2>
    <ul>
        <?php foreach ($items as $item): ?>
            <?php if (!$item['comprado']): ?>
                <li>
                    <?= htmlspecialchars($item['nome_produto']) ?> (<?= htmlspecialchars($item['quantidade']) ?>)
                    <div class="actions">
                        <form action="index.php" method="post">
                            <input type="hidden" name="toggle_id" value="<?= $item['id'] ?>">
                            <button type="submit">Marcar como Comprado</button>
                        </form>
                        <form action="index.php" method="post">
                            <input type="hidden" name="delete_id" value="<?= $item['id'] ?>">
                            <button type="submit" class="delete">Deletar</button>
                        </form>
                    </div>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <h2>Itens Comprados</h2>
    <ul>
        <?php foreach ($items as $item): ?>
            <?php if ($item['comprado']): ?>
                <li class="comprado">
                    <?= htmlspecialchars($item['nome_produto']) ?> (<?= htmlspecialchars($item['quantidade']) ?>)
                    <div class="actions">
                        <form action="index.php" method="post">
                            <input type="hidden" name="toggle_id" value="<?= $item['id'] ?>">
                            <button type="submit">Desmarcar</button>
                        </form>
                        <form action="index.php" method="post">
                            <input type="hidden" name="delete_id" value="<?= $item['id'] ?>">
                            <button type="submit" class="delete">Deletar</button>
                        </form>
                    </div>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

</body>

</html>

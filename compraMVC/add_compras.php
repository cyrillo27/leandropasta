<?php
require_once 'DatabaseRepository.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $alimento = filter_input(INPUT_POST, 'alimento', FILTER_SANITIZE_STRING);
    $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_VALIDATE_INT);
    $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

    if ($quantidade === false || $preco === false) {
        echo 'Quantidade ou preço inválidos.';
        exit;
    }

    if (DatabaseRepository::insertAlimento($alimento, $quantidade, $preco)) {
        header('Location: lista_compras.php');
        exit;
    } else {
        echo 'Erro ao adicionar o produto. Verifique os dados fornecidos.';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Adicionar Produto</h1>

    <div id="form-container">
        <form action="add_compras.php" method="post">
            <label for="alimento">Nome do Produto:</label>
            <input type="text" name="alimento" id="alimento" required>
            <br>
            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" id="quantidade" required>
            <br>
            <label for="preco">Preço:</label>
            <input type="text" name="preco" id="preco" required>
            <br>
            
            <button type="submit">Adicionar</button>
        </form>
    </div>

    <a href="lista_compras.php">Voltar para a lista de produtos</a>
</body>
</html>
<?php
require_once 'DatabaseRepository.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    DatabaseRepository::insertFood($nome, $quantidade, $preco);
    header('Location: list_foods.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Alimento</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Adicionar Alimento</h1>
    <form action="add_food.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <br>
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" required>
        <br>
        <label for="preco">Preço:</label>
        <input type="number" name="preco" id="preco" step="0.01" required>
        <br>
        <button type="submit">Adicionar</button>
    </form>
    <a href="list_foods.php">Voltar para a lista de alimentos</a>
</body>
</html>

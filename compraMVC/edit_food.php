<?php
require_once 'DatabaseRepository.php';

$id = $_GET['id'];
$food = DatabaseRepository::getFoodById($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    DatabaseRepository::updateFood($id, $nome, $quantidade, $preco);
    header('Location: list_foods.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alimento</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Editar Alimento</h1>
    <form action="edit_food.php?id=<?= ($food['id']); ?>" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required value="<?= ($food['nome']); ?>">
        <br>
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" required value="<?= ($food['quantidade']); ?>">
        <br>
        <label for="preco">Preço:</label>
        <input type="number" name="preco" id="preco" step="0.01" required value="<?= ($food['preco']); ?>">
        <br>
        <button type="submit">Salvar</button>
    </form>
    <a href="list_foods.php">Voltar para a lista de alimentos</a>
</body>
</html>

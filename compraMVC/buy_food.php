<?php
require_once 'DatabaseRepository.php';

$id = $_GET['id'];
$food = DatabaseRepository::getFoodById($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $quantidade = $_POST['quantidade'];
    DatabaseRepository::buyFood($id, $quantidade);
    header('Location: list_foods.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprar Alimento</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Comprar Alimento</h1>
    <form action="buy_food.php?id=<?= htmlspecialchars($id); ?>" method="post">
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" required>
        <br>
        <button type="submit">Comprar</button>
    </form>
    <a href="list_foods.php">Voltar para a lista de alimentos</a>
</body>
</html>

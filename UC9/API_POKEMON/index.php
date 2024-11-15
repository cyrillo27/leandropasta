<?php
// Lê o arquivo JSON
$jsonData = file_get_contents('carros.json');
$cars = json_decode($jsonData, true);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelos de Carros</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <?php foreach ($cars['cars'] as $car): ?>
        <div class="card">
            <div class="card-content">
                <div class="content">
                    <h4><?php echo $car['model']; ?></h4>
                    <p>Fabricante: <?php echo $car['manufacturer']; ?></p>
                    <p>Ano: <?php echo $car['year']; ?></p>
                    <p>Tipo: <?php echo $car['type']; ?></p>
                    <p>Altura: <?php echo $car['height']; ?></p>
                    <p>Peso: <?php echo $car['weight']; ?></p>
                    <p>Potência: <?php echo $car['horsepower']; ?> hp</p>
                    <p>Pontos fracos: <?php echo implode(', ', $car['weaknesses']); ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>

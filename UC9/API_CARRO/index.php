<?php
$URL = "http://localhost/leandro/leandropasta/UC9/API_CARRO/api.json"; 
$ch = curl_init($URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$cars = json_decode(curl_exec($ch));
curl_close($ch);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Lista de Carros</title>
  </head>
  <body>
    <section class="hero is-info is-small">
      <div class="hero-body">
        <div class="container has-text-centered">
          <p class="title">Listagem de Carros</p>
        </div>
      </div>
    </section>

    <section class="container">
      <?php if (isset($cars->cars) && count($cars->cars)): ?>
        <div class="columns is-multiline">
          <?php foreach ($cars->cars as $car): ?>
            <div class="column is-4">
              <div class="card">
                <div class="card-content has-text-centered">
                  <div class="content">
                    <h4><?=$car->model?> (<?=$car->year?>)</h4>
                    <p><strong>Fabricante:</strong> <?=$car->manufacturer?></p>
                    <p><strong>Tipo:</strong> <?=$car->type?></p>
                    <p><strong>Altura:</strong> <?=$car->height?></p>
                    <p><strong>Peso:</strong> <?=$car->weight?></p>
                    <p><strong>Potência:</strong> <?=$car->horsepower?> HP</p>
                    <p><strong>Fraquezas:</strong> <?=implode(", ", $car->weaknesses)?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php else: ?>
        <strong>Nenhum carro retornado pela API</strong>
      <?php endif; ?>
    </section>
  </body>
</html>

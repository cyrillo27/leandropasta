<?php
$URL = "http://localhost/UC9/API_POKEMON/api.json"; // Corrigi o nome do arquivo para "api.json"
$ch = curl_init($URL); // Iniciando a sessão cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Transforma o retorno em string
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Libera a comunicação SSL
$pokemons = json_decode(curl_exec($ch)); // Decodifica o JSON retornado pela API

curl_close($ch); // Fecha a sessão cURL
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Pokémons</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="estilo.css">
  </head>
  <body>
    <section class="hero is-info is-small">
      <div class="hero-body">
        <div class="container has-text-centered">
          <p class="title">
            Listagem de Pokémons
          </p>
          <p class="subtitle">
            Consumo de API com PHP
          </p>
        </div>
      </div>
    </section>
    <div class="box cta"></div>
    <section class="container">
      <?php
      if (isset($pokemons->pokemons) && count($pokemons->pokemons)) { // Verifica se há Pokémons
        $i = 0;
        foreach ($pokemons->pokemons as $pokemon) { // Correção na referência do array
          $i++;
      ?>

      <?php if ($i % 3 == 1) { ?>   
        <div class="columns features">
      <?php } ?>
        <div class="column is-4">
          <div class="card">
            <div class="card-image has-text-centered">
              <figure class="image is-128x128">
                <img src="<?=$pokemon->img?>" alt="<?=$pokemon->name?>" class="" data-target="modal-image2">
              </figure>
            </div>
            <div class="card-content has-text-centered">
              <div class="content">
                <h4><?=$pokemon->name?></h4> 
              </div>
            </div>
          </div>
        </div>
        <?php if ($i % 3 == 0) { ?>
          </div>
        <?php } ?>
      <?php } ?>
      <?php } else { ?>
        <!-- Se não houver Pokémons, retorna esta mensagem -->
        <strong>Nenhum pokemón retornado pela API</strong>
      <?php } ?>
    </section>
  </body>
</html>

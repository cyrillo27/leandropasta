<?php
//// VERIFICAÇÃO DE TIPOS DE DADOS E PALAVRAS RESERVADAS

$numero = 10;
$string = "texto";
$booleana = true;
$array = [1, 2, 3];

echo "Tipo de dado da variável \$numero " . gettype($numero) . "<br>";
echo "Tipo de dado da variável \$string " . gettype($string) . "<br>";
echo "Tipo de dado da variável \$booleana " . gettype($booleana) . "<br>";
echo "Tipo de dado da variável \$array " . gettype($array) . "<br>";
echo "<hr>";

// Verificação de tipo de dados com fluxo condicional
echo "Verifica se \$numero é do tipo int " . (is_int($numero) ? "Sim" : "Não") . "<br>";
echo "Verifica se \$string é do tipo string " . (is_string($string) ? "Sim" : "Não") . "<br>";
echo "Verifica se \$booleana é do tipo boolean " . (is_bool($booleana) ? "Sim" : "Não") . "<br>";
echo "Verifica se \$array é do tipo array " . (is_array($array) ? "Sim" : "Não") . "<br>";


?>
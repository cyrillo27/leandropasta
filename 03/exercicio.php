<?php
/*
1 - Crie um array contendo os dias da semana. Em seguida, exiba o terceiro dia da semana.
2 - Crie um array contendo meses do ano. Altere o valor do último elemento para Onzembro"
3 - Crie um array vazio. Adicione os números de 1 a 5 no array. Depois, adicione o número 6 ao final do array"
4 - Utilize um loop foreach para percorrer o array de meses do ano e exibir cada um.
5 - Conte quantos elementos o array de dias de semana possui.
6 - Utilize a função array_serach() para econtrar a posicao do dia "Sábado" no array e exiba o resultado.
 
*/
 
#1
$diasdasemana = [ "segunda-feira", "terça-feira", "quarta-feira","quinta-feira", "sexta-feira", "sabado", "domingo"];
echo "O terceiro dia da semana é: " . $diasdasemana[2];
echo "<br>";
 
#2
$ano = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
$ano[11] = "Onzembro";
 
echo " O último elemento é ". $ano[11] . "<br>";
 
#3
$num[] = "1" . "2" . "3" ."4" ."5" ;
$num[] = 6;
print_r($num);
 
#4
echo "<br>";
 
foreach($ano as $meses) {
    echo $meses . " ";
}
echo "<br>";
 
#5
echo "Número de elementos no array de dias da semana é : " . count($diasdasemana) . "<br>";
 
#6
echo "A posição de sabado é : " . array_search("sabado", $diasdasemana) . "<br>";
?>
tem menu de contexto
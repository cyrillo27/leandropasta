<?php
//// DESAFIOS LÓGICOS - ESTRUTURAS DE REPETIÇÃO


// Desafio 1: Contagem Regressiva
/*
    Crie um programa que solicite ao usuário um número inteiro positivo N e realize uma contagem regressiva até zero.
    Após cada contagem, exiba a mensagem "Falta X segundos" onde X representa o número de segundos restantes para chegar a zero.
*/
$numero = 5; //Número fornecido pelo usuário.
echo "Contagem Regressiva <br>";

// Solução com for

// Solução com while

// Solução com do-while

// Desafio 2: Tabuada
/*
    Crie um programa que exiba a tabuada de multiplicação de um número fornecido pelo usuário.
    A tabuada deve ser exibida de 1 até 10.
*/

$tabuada_numero = 8;

// Solução com o FOR
 
// Solução com while

// Desafio 3: Sequência Fibonacci
/*
    A sequência de Fibonacci é uma sequência de números inteiros em que cada termo é a soma dos dois anteriores.
    Crie um programa que solicite ao usuário um número N e exiba os N primeiros termos da sequência de Fibonacci.
*/

// Solução com for

// Solução com while

//// DESAFIOS LÓGICOS - ESTRUTURAS DE REPETIÇÃO

// Atividade 1: Verificar se a soma de A + B é igual a C
/*
    Solicita três números inteiros ao usuário (A, B e C) e verifica se a soma de A e B é igual a C.
*/
$A = 5;
$B = 10;
$C = 15;

// Atividade 2: Calcular o quadrado de um número
/*
    Solicita ao usuário um número inteiro e calcula o quadrado desse número.
*/
$numero = 8;
// Implementação do Cálculo do Quadrado


// Atividade 3: Verificar se um número é par ou ímpar
/*
    Solicita ao usuário um número inteiro e verifica se ele é par ou ímpar.
*/
$numero = 14;
// Implementação da Verificação de Paridade

// Atividade 4: Calcular a média de três números
/*
    Solicita ao usuário três números e calcula a média aritmética entre eles.
*/
$numero1 = 10;
$numero2 = 15;
$numero3 = 20;

// Implementação do Cálculo da Média

// Atividade 5: Verificar se um número é múltiplo de outro
/*
    Solicita ao usuário dois números e verifica se o primeiro é múltiplo do segundo.
*/
$numeroMultiplo = 15;
$multiploDe = 5;
// Implementação da Verificação de Múltiplo

//// Atividade 6: Conversão de Horas em Minutos
/*
    Solicita ao usuário a quantidade de horas e minutos e converte isso para o equivalente total de minutos.
*/
$horas_string = "01:30";

// Implementação de Conversão de Horas em Minutos

echo "O equivalente total em minutos de $horas_string é: XX <br>";

/// Atividade 7: Desenho de Pirâmide
/*
    Solicita ao usuário a altura de uma pirâmide (número de linhas) e desenha-a na tela usando asteriscos (*) em cada linha.
*/
$altura_piramide = 5;
// Implementação de Desenho de Pirâmide

//// Atividade 8: Contagem de Dígitos em um Número
/*
    Solicita ao usuário um número inteiro positivo e conta quantos dígitos esse número possui.
*/
$numeroDigitos = 2048;
// Implementação de Contagem de Dígitos em um Número

//// Atividade 9: Verificação de Palíndromo
/*
    Solicita ao usuário uma palavra e verifica se ela é um palíndromo.
*/
$palavra = "abbabba";

// Implementação de Verificação de Palíndromo

//// Atividade 10: Ordenação de Números
/*
    Solicita ao usuário três números inteiros e os exibe em ordem crescente.
*/
$numero1 = 25;
$numero2 = 1;
$numero3 = 7;

// Implementação de Ordenação de Números

//// Atividade 11: Soma de Dígitos
/*
    Solicita ao usuário um número intei, positivo e calcula a soma de todos os seus dígitos.
*/
$numeroSoma = 599;
// Implementação de Soma de Dígitos



// ----------------------------------------------------//
// exercicio 1 for
$numero = 5;
echo "contagem regressiva <br>";
for ($i = $numero ; $i >= 0 ; $i--) {
    echo "Falta $i segundos <br>";
   
}
echo "<br>";

//-------------------------------------------//
//    while


$numero = 5;
echo "Contagem Regressiva <br>";
while ($numero >= 0) {
    echo "Falta $numero segundos <br>"; 
    $numero--;
}
echo "<br>";
//-----------------------------------------//
//do while/

$numero = 5;
echo "Contagem Regressiva <br>";
$i = $numero; 

do {
    echo "Falta $i segundos <br>";
    $i--;
} while ($i >= 0);

echo "<br>";

//-----------------------------------------//
//taboada for/


    $tabuada_numero = 8;
    echo "Tabuada do $tabuada_numero: <br>";
    
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $tabuada_numero * $i;
        echo "$tabuada_numero x $i = $resultado <br>";
    }
    
// ----------------------------------------//
//tabuada com while

$tabuada_numero = 8;
echo "Tabuada do $tabuada_numero: <br>";

$i = 1; 

while ($i <= 10) {
    $resultado = $tabuada_numero * $i;
    echo "$tabuada_numero x $i = $resultado <br>";
    $i++; 
}
// exercicio 3 //---------------------------
$num_seguencia = 10;
 
 
for ($i = 1; $i <= $num_seguencia; $i++) {
    if ($i == 1) {
        echo "0";
    } else if ($i == 2) {
        echo "1";
    } else {
        echo $i - 1 + $i - 2;
    }
    echo "<br>";
}
 
echo "<br>";
 
//  while---------------------------
echo " Fibonacci  <br>";    
 
$num_seguencia = 10;
$i = 1;
while ($i <= $num_seguencia) {
    if ($i == 1) {
        echo "0";
    } else if ($i == 2) {
        echo "1";
    } else {
        echo $i - 1 + $i - 2;
    }
    echo "<br>";
    $i++;
}
// exercicio 1 Verificar se a soma de A + B é igual a C//
$A = 5;
$B = 10;
$C = 15;


if ($A + $B == $C) {
    echo "A soma de A ($A) e B ($B) é igual a C ($C)";
} else {
    echo "A soma de A ($A) e B ($B) não é igual a C ($C)";
}
echo "<br>";

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $numero = $_POST['numero'];
        
      
        $quadrado = $numero * $numero;

       
        echo "<h3>O quadrado de $numero é: $quadrado</h3>";
    }
    ?>

?>
<?php
require_once 'DatabaseRepository.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_VALIDATE_INT);

if ($id === false || $quantidade === false) {
    echo 'ID ou quantidade inválidos.';
    exit;
}

if (DatabaseRepository::buyAlimento($id, $quantidade)) {
    header('Location: lista_compras.php');
    exit;
} else {
    echo 'Erro ao comprar o alimento. Verifique a quantidade disponível e tente novamente.';
}
?>

<?php
require_once 'DatabaseRepository.php';

$id = $_GET['id'];
DatabaseRepository::deleteAlimento($id);
header('Location: lista_compras.php');
exit;
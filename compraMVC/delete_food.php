<?php
require_once 'DatabaseRepository.php';

$id = $_GET['id'];
DatabaseRepository::deleteFood($id);
header('Location: list_foods.php');
exit;

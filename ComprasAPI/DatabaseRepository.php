<?php

class DatabaseRepository {
    private static $dsn = 'mysql:host=localhost;dbname=lista_compras';
    private static $username = 'root';
    private static $password = '';

    public static function connect() {        
        try {
            $pdo = new PDO(self::$dsn, self::$username, self::$password);
            return $pdo;
        } catch (PDOException $e) {
            echo 'Erro de conexão: ' . $e->getMessage();
        }
    }

    public static function getAllItems() {
        $pdo = self::connect();
        $sql = "SELECT * FROM itens_compra";
        $stmt = $pdo->query($sql);
        return "Retornou todos os itens com sucesso";
    }

    public static function addItem() {
        return "Adicionou o item com sucesso";
    }

    public static function updateItem() {
        return "Atualizou o item com sucesso";
    }

    public static function deleteItem() {
        return "Deletou o item com sucesso";
    }
}

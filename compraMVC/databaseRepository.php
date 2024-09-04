<?php

class DatabaseRepository {
    private static $dsn = 'mysql:host=localhost;dbname=comprasnovo';
    private static $username = 'root';
    private static $password = '';

  
    public static function connect() {
        try {
            $pdo = new PDO(self::$dsn, self::$username, self::$password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo 'Falha de Conexão: ' . $e->getMessage();
            exit;
        }
    }


    public static function getAllAlimentos() {
        $pdo = self::connect();
        $sql = "SELECT * FROM alimentos";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getAlimentoById($id) {
        $pdo = self::connect();
        $sql = "SELECT * FROM alimentos WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    public static function insertAlimento($alimento, $quantidade, $preco) {
        $pdo = self::connect();
        $sql = "INSERT INTO alimentos (alimento, quantidade, preco) VALUES (:alimento, :quantidade, :preco)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute(['alimento' => $alimento, 'quantidade' => $quantidade, 'preco' => $preco]);
    }

   
    public static function updateAlimento($id, $alimento, $quantidade, $preco) {
        $pdo = self::connect();
        $sql = "UPDATE alimentos SET alimento = :alimento, quantidade = :quantidade, preco = :preco WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute(['id' => $id, 'alimento' => $alimento, 'quantidade' => $quantidade, 'preco' => $preco]);
    }

    public static function deleteAlimento($id) {
        $pdo = self::connect();
        $sql = "DELETE FROM alimentos WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute(['id' => $id]);
    }
}
?>
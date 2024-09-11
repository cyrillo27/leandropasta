<?php

class DatabaseRepository {
    private static $dsn = 'mysql:host=localhost;dbname=lista_compras';
    private static $username = 'root';
    private static $password = '';

    // Método para conectar ao banco de dados
    private static function connect() {
        try {
            $pdo = new PDO(self::$dsn, self::$username, self::$password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            // Exibe a mensagem de erro e encerra a execução
            echo 'Connection failed: ' . $e->getMessage();
            exit;
        }
    }

    // Obtém um item pelo ID
    public static function getItemById($id) {
        $pdo = self::connect();
        $sql = "SELECT * FROM itens_compra WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        try {
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Error fetching item: ' . $e->getMessage();
            return false;
        }
    }
    
    // Obtém todos os itens
    public static function getAllItems() {
        $pdo = self::connect();
        $sql = "SELECT * FROM itens_compra";
        try {
            $stmt = $pdo->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Error fetching items: ' . $e->getMessage();
            return false;
        }
    }

    // Adiciona um item
    public static function addItem($nome_produto, $quantidade) {
        $pdo = self::connect();
        $sql = "INSERT INTO itens_compra (nome_produto, quantidade) VALUES (:nome_produto, :quantidade)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome_produto', $nome_produto, PDO::PARAM_STR);
        $stmt->bindParam(':quantidade', $quantidade, PDO::PARAM_INT);
        try {
            return $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error adding item: ' . $e->getMessage();
            return false;
        }
    }

    // Atualiza um item
    public static function updateItem($id, $comprado) {
        $pdo = self::connect();
        $sql = "UPDATE itens_compra SET comprado = :comprado WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':comprado', $comprado, PDO::PARAM_INT);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        try {
            return $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error updating item: ' . $e->getMessage();
            return false;
        }
    }

    // Deleta um item
    public static function deleteItem($id) {
        $pdo = self::connect();
        $sql = "DELETE FROM itens_compra WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        try {
            return $stmt->execute();
        } catch (PDOException $e) {
            

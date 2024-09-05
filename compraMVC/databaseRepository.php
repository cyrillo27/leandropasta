<?php
class DatabaseRepository {
    private static $dsn = 'mysql:host=localhost;dbname=alimentos';
    private static $username = 'root';
    private static $password = '';

    public static function connect() {
        try {
            $pdo = new PDO(self::$dsn, self::$username, self::$password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo 'Falha de Conexao: ' . $e->getMessage();
            exit;
        }
    }

    public static function getAllFoods() {
        $pdo = self::connect();
        $sql = "SELECT * FROM alimentos_info";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);        
    }

    public static function getFoodById($id) {
        $pdo = self::connect();
        $sql = "SELECT * FROM alimentos_info WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function insertFood($nome, $quantidade, $preco) {
        $pdo = self::connect();
        $sql = "INSERT INTO alimentos_info (nome, quantidade, preco) VALUES (:nome, :quantidade, :preco)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute(['nome' => $nome, 'quantidade' => $quantidade, 'preco' => $preco]);
    }

    public static function updateFood($id, $nome, $quantidade, $preco) {
        $pdo = self::connect();
        $sql = "UPDATE alimentos_info SET nome = :nome, quantidade = :quantidade, preco = :preco WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute(['id' => $id, 'nome' => $nome, 'quantidade' => $quantidade, 'preco' => $preco]);
    }

    public static function deleteFood($id) {
        $pdo = self::connect();
        $sql = "DELETE FROM alimentos_info WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute(['id' => $id]);
    }

    public static function buyFood($id, $quantidade) {
        $pdo = self::connect();
        $sql = "UPDATE alimentos_info SET quantidade = quantidade - :quantidade WHERE id = :id AND quantidade >= :quantidade";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute(['id' => $id, 'quantidade' => $quantidade]);
    }
}
?>

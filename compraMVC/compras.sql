CREATE DATABASE IF NOT EXISTS alimentos;

USE alimentos;

CREATE TABLE IF NOT EXISTS alimentos_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    quantidade INT NOT NULL,
    preco DECIMAL(10, 2) NOT NULL
);

INSERT INTO alimentos_info (nome, quantidade, preco) VALUES 
('Arroz', 50, 25.00),
('Feijão', 30, 20.00),
('Macarrão', 100, 10.00),
('Açúcar', 20, 5.00),
('Óleo', 15, 7.50);

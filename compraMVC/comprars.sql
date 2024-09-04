CREATE TABLE IF NOT EXISTS alimentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    alimento VARCHAR(100) NOT NULL,
    quantidade INT NOT NULL,
    preco DECIMAL(10, 2) NOT NULL
);

INSERT INTO alimentos (alimento, quantidade, preco) VALUES 
('Arroz', 10, 25.50),
('Feijão', 5, 15.75),
('Frango', 3, 40.00),
('Carne Bovina', 2, 60.00),
('Batata', 7, 12.00);s
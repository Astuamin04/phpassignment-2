CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);
CREATE TABLE cameras (
    id INT AUTO_INCREMENT PRIMARY KEY,
    model VARCHAR(255) NOT NULL,
    price DECIMAL(10,2) NOT NULL
);

INSERT INTO cameras (model, price) VALUES 
('Canon EOS 5D Mark IV', 2499.99),
('Nikon D850', 2799.99),
('Sony A7R III', 2999.99),
('Fujifilm X-T3', 1499.99),
('Panasonic Lumix GH5', 1399.99);

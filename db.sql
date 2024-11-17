CREATE DATABASE gymstore;
USE gymstore;

CREATE TABLE products (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2),
    image VARCHAR(255)
);

INSERT INTO products (name, description, price, image) VALUES
('Whey Protein', 'High quality protein for muscle recovery.', 25.99, 'whey-protein.jpg'),
('Creatine', 'Enhances strength and performance during workouts.', 19.99, 'creatine.jpg'),
('BCAA', 'Supports muscle recovery and reduces fatigue.', 14.99, 'bcaa.jpg');

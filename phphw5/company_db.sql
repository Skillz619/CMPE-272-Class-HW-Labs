-- Create database
CREATE DATABASE company_db;

-- Use the database
USE company_db;

-- Create user table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    home_address VARCHAR(255),
    home_phone VARCHAR(20),
    cell_phone VARCHAR(20)
);

-- Insert sample data
INSERT INTO users (first_name, last_name, email, home_address, home_phone, cell_phone) VALUES
('John', 'Doe', 'john.doe@example.com', '123 Main St', '555-1234', '555-5678'),
('Jane', 'Smith', 'jane.smith@example.com', '456 Oak St', '555-8765', '555-4321'),
('Alice', 'Johnson', 'alice.johnson@example.com', '789 Pine St', '555-2345', '555-6789'),
('Bob', 'Williams', 'bob.williams@example.com', '101 Maple St', '555-3456', '555-7890'),
('Carol', 'Brown', 'carol.brown@example.com', '202 Cedar St', '555-4567', '555-8901'),
('David', 'Jones', 'david.jones@example.com', '303 Elm St', '555-5678', '555-9012'),
('Eva', 'Garcia', 'eva.garcia@example.com', '404 Spruce St', '555-6789', '555-0123'),
('Frank', 'Martinez', 'frank.martinez@example.com', '505 Birch St', '555-7890', '555-1234'),
('Grace', 'Lee', 'grace.lee@example.com', '606 Ash St', '555-8901', '555-2345'),
('Henry', 'Lopez', 'henry.lopez@example.com', '707 Fir St', '555-9012', '555-3456'),
('Ivy', 'Gonzalez', 'ivy.gonzalez@example.com', '808 Redwood St', '555-0123', '555-4567'),
('Jack', 'Wilson', 'jack.wilson@example.com', '909 Walnut St', '555-1234', '555-5678'),
('Kathy', 'Anderson', 'kathy.anderson@example.com', '1010 Sycamore St', '555-2345', '555-6789'),
('Larry', 'Thomas', 'larry.thomas@example.com', '1111 Hickory St', '555-3456', '555-7890'),
('Mia', 'Taylor', 'mia.taylor@example.com', '1212 Magnolia St', '555-4567', '555-8901'),
('Nick', 'Moore', 'nick.moore@example.com', '1313 Cypress St', '555-5678', '555-9012'),
('Olivia', 'Jackson', 'olivia.jackson@example.com', '1414 Willow St', '555-6789', '555-0123'),
('Paul', 'White', 'paul.white@example.com', '1515 Chestnut St', '555-7890', '555-1234'),
('Quinn', 'Harris', 'quinn.harris@example.com', '1616 Maple St', '555-8901', '555-2345'),
('Rachel', 'Clark', 'rachel.clark@example.com', '1717 Oak St', '555-9012', '555-3456');

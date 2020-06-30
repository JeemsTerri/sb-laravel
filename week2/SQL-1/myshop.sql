-- @block create database myshop
-- @conn MySQL
-- Jawwaban No 1
CREATE DATABASE IF NOT EXISTS myshop;

USE myshop;

-- @block create users table
-- Jawwaban No 2
CREATE TABLE IF NOT EXISTS users(
	`id` INT AUTO_INCREMENT PRIMARY KEY,
	`name` VARCHAR (255),
	`email` VARCHAR (255),
	`password` VARCHAR (255)
);

-- @block create items table
CREATE TABLE IF NOT EXISTS items(
	`id` INT AUTO_INCREMENT PRIMARY KEY,
	`name` VARCHAR (255),
	`description` VARCHAR (255),
	`price` INT,
	`stock` INT,
	`category_id` INT
);

-- @block create categories table
CREATE TABLE IF NOT EXISTS categories(
	`id` INT AUTO_INCREMENT PRIMARY KEY,
	`name` VARCHAR (255) 	
);

-- @block alter foreign key for items table
ALTER TABLE items
	ADD FOREIGN KEY (category_id) REFERENCES categories(id);


-- Jawwaban No 3
INSERT INTO users
VALUES 
	(NULL,"John Doe", "john@doe.com", "john123"), 
	(NULL,"Jane Doe", "jane@doe.com", "jenita123");

INSERT INTO categories
VALUES 
	(NULL,"gadget"), 
	(NULL,"cloth"),
	(NULL,"men"),
	(NULL,"women"),
	(NULL,"branded");

INSERT INTO items
VALUES 
	(NULL,"Sumsang b50", "hape keren dari merek sumsang", 4000000, 100, 1),
	(NULL,"Uniklooh", "baju keren dari brand ternama", 500000, 50, 2),
	(NULL,"IMHO Watch", "jam tangan anak yang jujur banget", 2000000, 10, 1);


-- Jawaban 4a
SELECT id, NAME, email FROM users;

-- Jawaban 4b
SELECT * FROM items 
WHERE price > 1000000;

-- Jawaban 4b
SELECT * FROM items 
WHERE items.name LIKE "%uniklo%";

-- Jawaban 4c
SELECT i.name, i.description, i.price, i.stock, i.category_id, c.name FROM items i
INNER JOIN categories c ON i.category_id = c.id;

-- Jawaban 5
UPDATE items
SET price = 2500000
WHERE id = 1;
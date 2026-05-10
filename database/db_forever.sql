CREATE DATABASE `db_forever1`;
USE db_forever1;


-- PRODUCTS TABLE STRUCTNRE 

CREATE TABLE `products`(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `product_title` VARCHAR(200) NOT NULL,
    `product_description` TEXT NOT NULL,
    `product_category` VARCHAR(100) NOT NULL,
    `sub_category` VARCHAR(100) NOT NULL,
    `product_price` INT(100) NOT NULL,
    `product_sizes` VARCHAR(200) NOT NULL,
    `bestseller` VARCHAR(100) DEFAULT 'NULL',
    `img1` TEXT NOT NULL,
    `img2` TEXT NOT NULL,
    `img3` TEXT NOT NULL,
    `img4` TEXT NOT NULL
) AUTO_INCREMENT = 1;

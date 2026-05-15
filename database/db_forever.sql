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
    `bestseller` VARCHAR(100) DEFAULT NULL,
    `img1` TEXT NOT NULL,
    `img2` TEXT NOT NULL,
    `img3` TEXT NOT NULL,
    `img4` TEXT NOT NULL
) AUTO_INCREMENT = 1;


-- USERS TABLE STRUCTNRE 

CREATE TABLE `users`(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(200) NOT NULL,
    `email` VARCHAR(200) NOT NULL,
    `password` VARCHAR(100) NOT NULL,
    `user_role` VARCHAR(100) NOT NULL DEFAULT 'reader',
    `status` VARCHAR(100) NOT NULL DEFAULT 'active',
    `join_date` VARCHAR(200) NOT NULL
) AUTO_INCREMENT = 1;


-- DUMP DATA 
INSERT INTO users (name, email, password, user_role, status, join_date) 
VALUES 
('Ali Raza Mujahid','alirazamujahid102@gmail.com','$2y$10$0Nhuwtpa/Q3KRlnJyLC1SeEhpSSFa1ixx3Mb4MAEpOI6yZUsVKYzi','super-admin','active','15 May 2026'),
('Shehroz Ahmad','shehrozahmad1055gmail.com','$2y$10$5fwJOVAYGcgx.mu4nuqy8O6.vhgqhygjpU37v/f4IntaLyUINgN.m','admin','active','15 May 2026'),
('Tanvir','razadeveloper816@gmail.com','$2y$10$5fwJOVAYGcgx.mu4nuqy8O6.vhgqhygjpU37v/f4IntaLyUINgN.m','editor','active','15 May 2026'),
('Abdullah','developerraza816@gmail.com','$2y$10$e0e8xfE1.92FxWnkwDCSPOllInyI.UZILVkeQzd42ttsXegoGd6O.','reader','active','15 May 2026'),
('Haseeb','haseebahmad543@gmail.com','$2y$10$w5CgsnY7Ot8KzO7z9IYowuZaVcM0eaf.acrQd.UTIAyryMSwrCC1K','reader','suspend','15 May 2026'),
('Abdulbasit','abdulbasit226@gmail.com','$2y$10$qwQECWR9pa1OG5m6yPymkOEm/Lf7BIPy.6myRKGmUaU19Le/sUdwm','reader','inactive','15 May 2026');






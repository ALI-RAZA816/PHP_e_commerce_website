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
('Ali Raza Mujahid','alirazamujahid102@gmail.com','$2y$10$eEC64v20MsGQPqxp8IBtOeUMVhaDWKa1TvVXmnT198nI4OLahYXHG','super-admin','active','15 May 2026'),
('Shehroz Ahmad','shehrozahmad1055gmail.com','$2y$10$uEW6i.nr1C2gShCM0XVZl.kNjRD9UmgTeXl0/fOMVcoadCzNaIWqK','admin','active','15 May 2026'),
('Tanvir','razadeveloper816@gmail.com','$2y$10$t/GHK8LM9wEm/8otU11bCeqWi3i236KBB67Kg6n8FKtB1tYK1xNjW','editor','active','15 May 2026'),
('Abdullah','developerraza816@gmail.com','$2y$10$SwjT9yR2KBJHpIqMHaaz5OVRNXGtZ1ShbdsXw2u1e6MwjQwf4nFgq','reader','active','15 May 2026'),
('Haseeb','haseebahmad543@gmail.com','$2y$10$3cxO5Sd9iR58urJTIbAWs.IBYjeDoGVeH2zZzzvWzc5ZPolGMtYr6','reader','suspend','15 May 2026'),
('Abdulbasit','abdulbasit226@gmail.com','$2y$10$G.5RgdQ52mM5rDu6UyEbFOyQ80YCfsSurMm7G3JZYmobD28YwVyPm','reader','inactive','15 May 2026');






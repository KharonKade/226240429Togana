CREATE DATABASE information;
USE information

CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT(3) NOT NULL,
    address VARCHAR(255) NOT NULL
);
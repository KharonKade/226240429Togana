CREATE DATABASE phonebook;
use phonebook;

CREATE TABLE contacts (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR (100) NOT NULL, 
    phone VARCHAR (15) NOT NULL
);
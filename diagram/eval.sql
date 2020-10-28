DROP DATABASE IF EXISTS library;
CREATE DATABASE library;
USE library;

CREATE TABLE IF NOT EXISTS book (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    tittle VARCHAR(40) NOT NULL,
    author VARCHAR(40) NOT NULL,
    resume TEXT,
    publication_date DATETIME,
    category VARCHAR(15) NOT NULL
) 
ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(20),
    lastname VARCHAR(20),
    sex VARCHAR(6),
    birth_date DATETIME,
    address VARCHAR(50),
    postal_code INT,
    city VARCHAR(20)
) 
ENGINE = INNODB;

ALTER TABLE `book`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

INSERT INTO book (tittle, author, category)
VALUES  ('Silence of the lamb', 'Thomas Harris', 'roman'),
        ('Fondation', 'Isaac Asimov', 'roamn'),
        ('H2G2', 'Douglas Admas', 'roman');

INSERT INTO user (firstname, lastname, sex, address, postal_code,city)
VALUES  ('Baptsite', 'Collignon', 'male', '2c rue du ponney qui tousse', '76000', 'Rouen'),
        ('Tyler', 'Durden', 'male', '2 rue Mayhem street', '7600', 'Rouen');
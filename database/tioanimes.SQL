/*apaga depois de fica online dominio*/
DROP DATABASE IF EXISTS tioanimes;

CREATE DATABASE tioanimes CHARACTER SET utf8 COLLATE utf8_general_ci;

USE tioanimes;

CREATE TABLE users (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    data_cadastro DATETIME NOT NULL,
    usuario VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    foto VARCHAR(255),
    status ENUM('on', 'off', 'deleted') DEFAULT 'on'
);

INSERT INTO users (
    data_cadastro,
    usuario,
    email,
    password,
    foto
) VALUES (
    '2022-12-14',
    'Joca da Silva',
    'joca@silva.com',
    SHA1('123456'),
    'https://randomuser.me/api/portraits/men/89.jpg'
);
create schema Academia;
use academia;

CREATE TABLE Aluno (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) not null,
    email varchar(100),
    sexo varchar(9) not null,
    endereco varchar(255) ,
    numeroCasa int not null,
    complemento varchar(30),
    bairro varchar(50) not null,
    cidade varchar(50) not null,
    uf char(2) not null,
    modalidade varchar(50) not null
)  ENGINE=INNODB;
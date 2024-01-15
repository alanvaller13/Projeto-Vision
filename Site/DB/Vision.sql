CREATE DATABASE Vision;
USE Vision;

CREATE TABLE Login(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Usuario VARCHAR(255) NOT NULL,
    Senha VARCHAR(255) NOT NULL
);

INSERT INTO Login (Usuario, Senha) VALUES ('AlanValler', '12345abc');

CREATE TABLE NovoUsuario(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    FotoPerfil MEDIUMBLOB,
    NomeCompleto VARCHAR(255) NOT NULL,
    NomeUsuario VARCHAR(255) NOT NULL,
    DataNascimento DATE NOT NULL,
    Genero VARCHAR(50),
    NumeroTelefone CHAR(11),
    CodigoPostal CHAR(10),
    Cidade VARCHAR(255),
    Estado VARCHAR(255),
    Pais VARCHAR(255),
    Email VARCHAR(255) NOT NULL,
    EmailRepetir VARCHAR(255) NOT NULL,
    Senha VARCHAR(255) NOT NULL,
    SenhaRepetir VARCHAR(255) NOT NULL,
    UsuarioID INT,
    FOREIGN KEY (UsuarioID) REFERENCES Login(ID)
);

select * from NovoUsuario;

drop table NovoUsuario;
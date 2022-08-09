DROP DATABASE IF ALREADY EXISTS Cantina;

CREATE DATABASE Cantina;

Use Cantina;

CREATE TABLE Produtos(
IDProduto int not null auto_increment primary key,
NomeProduto varchar(15) not null,
QtdeProduto int not null
);

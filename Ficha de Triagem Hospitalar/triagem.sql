CREATE DATABASE triagemDB;

USE triagemDB;

CREATE TABLE pacientes (

id INT  AUTO_INCREMENT PRIMARY KEY, 
nome varchar (100)not null,
idade int not null,
cpf varchar(20) not null,
sexo varchar(10),
data_nascimento date,
telefone varchar(20),
endereco varchar (200)
);
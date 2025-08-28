CREATE DATABASE triagemDB;

USE triagemDB;

CREATE TABLE pacientes (
##nome, idade, cpf, sexo, data_nascimento, cpf, telefone, endereco, sintomas, iniciosintomas, doencasexistentes, medicamentos, alergia, pressaoarterial, temperatura, bpm, saturacaoO2, observacoes
id INT  AUTO_INCREMENT PRIMARY KEY, 
nome varchar (100)not null,
idade int not null,
cpf varchar(20) not null,
sexo varchar(10),
data_nascimento date,
telefone varchar(20),
endereco varchar(200),
sintomas varchar(200),
iniciosintomas date,
doencasexistentes varchar(100),
medicamentos varchar(100),
alergia varchar(100),
pressaoarterial varchar(100),
temperatura float,
bpm int,
saturacaoO2 varchar(100),
observacoes varchar(100)


);

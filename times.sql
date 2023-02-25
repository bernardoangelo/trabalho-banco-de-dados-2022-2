CREATE DATABASE times;

USE times;

CREATE TABLE times_info (
  codigo   int(5)      NOT NULL auto_increment PRIMARY KEY,
  nome     varchar(30) NOT NULL,
  cidade      varchar(54)  NOT NULL,
  ano_fundacao int(4)      NOT NULL
);


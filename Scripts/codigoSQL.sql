CREATE DATABASE comunidadeexplore;
use comunidadeexplore;
show tables;

create table membro(
 id INTEGER NOT NULL AUTO_INCREMENT,
 foto varchar(255) not null,
 email varchar(150) not null,
 senha varchar(255) not null,
 CONSTRAINT PK_MEMBRO PRIMARY KEY(id) 
);
 

);
